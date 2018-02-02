<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

use Respect\Validation\Validator as respect;
use Firebase\FirebaseLib;

const FIREBASE_URL = 'https://key-traxx.firebaseio.com/';
const FIREBASE_TOKEN = 'AIzaSyCVa7eKwNGKNniq9F3U_t91mybw3hgwUM4';
const FIREBASE_PATH = 'cars';


$app->get("/", function (Request $request, Response $response) {
    // $response->getBody()->write("Home page.<br> <a href=\"/register\">Register</a>.");
    return $this->view->render($response, 'map.twig.html');
})->setName('map');

$app->get("/login", function (Request $request, Response $response) {
    // $response->getBody()->write("Home page.<br> <a href=\"/register\">Register</a>.");
    return $this->view->render($response, 'login.twig.html');
})->setName('login');

$app->get("/add", function (Request $request, Response $response) {
    // $response->getBody()->write("Home page.<br> <a href=\"/register\">Register</a>.");
    return $this->view->render($response, 'add.twig.html');
})->setName('add');

$app->post("/add", function (Request $request, Response $response) {
    $fields = $request->getParsedBody();
    $photo_file = $request->getUploadedFiles()[0];

    $price = str_replace(',', '', $fields['price']);  // Remove commas so they can be used but don't trigger the validation and don't get stored in the DB

    // VALIDATION FUNCTION
    function validate(&$fields, $field_name, $valid, $error_name) {
        if (!$valid) {
            $fields['invalid'] = true;
            $fields['errors'][$field_name][$error_name] = true;
        }
    }


    //  VALIDATION  //

    // VALIDATE CAR 
    $ch = curl_init("https://www.carqueryapi.com/api/0.3/?callback=?&cmd=getModels&make=" . $fields['make'] . "&year=" . $fields['year'] . "&sold_in_us=1");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, false);
    $result = curl_exec($ch);
    curl_close($ch);

    $regex = '"model_name":"' . $fields['model'] . '"';

    validate($fields,
            'year',
            !preg_match($regex, $result),
            'invalid');
    
    // OTHER VALIDATION
    validate($fields,
        'vin',
        respect::optional(respect::alnum()->length(17,17))->validate($fields['vin']),
        'invalid');

    validate($fields,
        'price',
        respect::optional(respect::numeric())
            ->validate($price), //ignore  commas
        'invalid');
    
    validate($fields,
        'photo',
        respect::optional(respect::image())->validate($photo_file),
        'invalid');
    
    validate($fields,
        'keyNumber',
        respect::optional(respect::numeric())->validate($fields['keyNumber']),
        'invalid');


    //    CHECK OR SUBMIT FORM    //

    if ($fields['invalid']) {

        return $this->view->render($response, 'add.twig.html', $fields);

    } else {

        $firebase = new \Firebase\FirebaseLib(FIREBASE_URL);

        // // --- storing an array ---
        $data = array(
            "year" => $fields['year'],
            "make" => $fields['make'],
            "model" => $fields['model'],
            "vin"   => $fields['vin'],
            "price" => $fields['price'],
            "photo" => "N/A",
            "key"   => $fields['keyNumber']
        );
        $dateTime = new DateTime();

        var_dump($firebase->push('dealerships/-L41B0ttFgQBsE41-111/cars', $data));

// var_dump(FIREBASE_PATH);
// $dateTime = new DateTime();
// var_dump($firebase->set(DEFAULT_PATH . '/' . $dateTime->format('c'), $test));
        // --- storing a string ---
        // $result = $firebase->set(FIREBASE_PATH . '/name/contact001', "John Doe");

        // --- reading the stored string ---
        // $name = $firebase->get(FIREBASE_PATH . '/name/contact001');
    }
    
});
