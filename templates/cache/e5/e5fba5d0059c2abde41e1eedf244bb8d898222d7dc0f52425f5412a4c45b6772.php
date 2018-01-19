<?php

/* base.twig.html */
class __TwigTemplate_19592e90ed0d5de2136572bad9928a6df3e60250ff98d4f7e7df3c54c9c87654 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head_style' => array($this, 'block_head_style'),
            'head_script' => array($this, 'block_head_script'),
            'navbar_center' => array($this, 'block_navbar_center'),
            'navbar_login' => array($this, 'block_navbar_login'),
            'content' => array($this, 'block_content'),
            'content_with_margin' => array($this, 'block_content_with_margin'),
            'body_script' => array($this, 'block_body_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    ";
        // line 6
        echo "    <meta charset=\"utf-8\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo " | KeyTraxx</title>
    ";
        // line 9
        echo "    ";
        // line 10
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    ";
        // line 12
        echo "    
    ";
        // line 14
        echo "    ";
        $this->displayBlock('head_style', $context, $blocks);
        // line 15
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">";
        // line 16
        echo "    <link rel=\"stylesheet\" href=\"css/font-awesome/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"css/keytraxx.css\">
    
    ";
        // line 19
        $this->displayBlock('head_script', $context, $blocks);
        // line 20
        echo "</head>

<body class=\"h-100\">
    <div class=\"container-fluid h-100\">
        <div class=\"row\">
            <div class=\"col\">
                ";
        // line 27
        echo "                <div id=\"navbar\" class=\"py-3 pr-3 pl-2\">
                    <div class=\"row\">
                        
                        ";
        // line 31
        echo "                        <div class=\"col-sm-auto\">
                                <h3 class=\"navbarH\"><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("map"), "html", null, true);
        echo "\" class=\"text-dark\">KeyTraxx</a></h3>
                        </div>

                        ";
        // line 36
        echo "                        ";
        $this->displayBlock('navbar_center', $context, $blocks);
        // line 39
        echo "                        
                        ";
        // line 41
        echo "                        ";
        $this->displayBlock('navbar_login', $context, $blocks);
        // line 47
        echo "                    </div>
                </div>
            </div>
        </div>
        <div class=\"row h-100\">
            <div class=\"col\">
                ";
        // line 54
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 59
        echo "            </div>
        </div>
    </div>

    ";
        // line 65
        echo "    ";
        // line 66
        echo "    
    ";
        // line 81
        echo "

    ";
        // line 84
        echo "
    ";
        // line 86
        echo "    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>

    ";
        // line 89
        echo "    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
    
    ";
        // line 92
        echo "    <script src=\"https://www.gstatic.com/firebasejs/4.8.2/firebase.js\"></script>
    <script src=\"js/firebase_init.js\"></script>

    ";
        // line 96
        echo "    <script src=\"js/keytraxx.js\"></script>

    ";
        // line 98
        $this->displayBlock('body_script', $context, $blocks);
        // line 99
        echo "
</body>

</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
    }

    // line 14
    public function block_head_style($context, array $blocks = array())
    {
    }

    // line 19
    public function block_head_script($context, array $blocks = array())
    {
    }

    // line 36
    public function block_navbar_center($context, array $blocks = array())
    {
        // line 37
        echo "                            <div class=\"col\"></div>
                        ";
    }

    // line 41
    public function block_navbar_login($context, array $blocks = array())
    {
        // line 42
        echo "                            <div class=\"col-sm-auto\">
                                <a id=\"sign-in\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("login"), "html", null, true);
        echo "\" class=\"btn btn-outline-dark d-none\" role=\"button\">Sign In</a>
                                <button id=\"sign-out\" class=\"btn btn-outline-dark d-none\">Sign Out</button>
                            </div>
                        ";
    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        // line 55
        echo "                    ";
        // line 56
        echo "                        ";
        $this->displayBlock('content_with_margin', $context, $blocks);
        // line 57
        echo "                    ";
        // line 58
        echo "                ";
    }

    // line 56
    public function block_content_with_margin($context, array $blocks = array())
    {
    }

    // line 98
    public function block_body_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 98,  198 => 56,  194 => 58,  192 => 57,  189 => 56,  187 => 55,  184 => 54,  176 => 43,  173 => 42,  170 => 41,  165 => 37,  162 => 36,  157 => 19,  152 => 14,  147 => 7,  139 => 99,  137 => 98,  133 => 96,  128 => 92,  124 => 89,  120 => 86,  117 => 84,  113 => 81,  110 => 66,  108 => 65,  102 => 59,  99 => 54,  91 => 47,  88 => 41,  85 => 39,  82 => 36,  76 => 32,  73 => 31,  68 => 27,  60 => 20,  58 => 19,  53 => 16,  51 => 15,  48 => 14,  45 => 12,  42 => 10,  40 => 9,  36 => 7,  33 => 6,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    {# META #}
    <meta charset=\"utf-8\">
    <title>{% block title %}{% endblock %} | KeyTraxx</title>
    {# <meta name=\"description\" content=\"KeyTraxx\"> #}
    {# <meta name=\"author\" content=\"KeyTraxx\"> #}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    {# <link rel=\"icon\" type=\"image/png\" href=\"\"> #}
    
    {# CSS #}
    {% block head_style %}{% endblock %}
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">{# BOOTSTRAP #}
    <link rel=\"stylesheet\" href=\"css/font-awesome/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"css/keytraxx.css\">
    
    {% block head_script %}{% endblock %}
</head>

<body class=\"h-100\">
    <div class=\"container-fluid h-100\">
        <div class=\"row\">
            <div class=\"col\">
                {# NAVIGATION BAR #}
                <div id=\"navbar\" class=\"py-3 pr-3 pl-2\">
                    <div class=\"row\">
                        
                        {# LOGO #}
                        <div class=\"col-sm-auto\">
                                <h3 class=\"navbarH\"><a href=\"{{path_for('map')}}\" class=\"text-dark\">KeyTraxx</a></h3>
                        </div>

                        {# CENTER CONTENT #}
                        {% block navbar_center %}
                            <div class=\"col\"></div>
                        {% endblock %}
                        
                        {# LOGIN BUTTON #}
                        {% block navbar_login %}
                            <div class=\"col-sm-auto\">
                                <a id=\"sign-in\" href=\"{{path_for('login')}}\" class=\"btn btn-outline-dark d-none\" role=\"button\">Sign In</a>
                                <button id=\"sign-out\" class=\"btn btn-outline-dark d-none\">Sign Out</button>
                            </div>
                        {% endblock %}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row h-100\">
            <div class=\"col\">
                {# MAIN CONTENT #}
                {% block content %}
                    {# <div class=\"\"> #}
                        {% block content_with_margin %}{% endblock %}
                    {# </div> #}
                {% endblock %}
            </div>
        </div>
    </div>

    {# <script src=\"https://www.gstatic.com/firebasejs/4.8.2/firebase-app.js\"></script>
    <script src=\"https://www.gstatic.com/firebasejs/4.8.2/firebase-auth.js\"></script> #}
    {# <script src=\"https://www.gstatic.com/firebasejs/4.8.2/firebase-database.js\"></script> #}
    
    {# <script>
        // Initialize Firebase
        var config = {
            apiKey: \"AIzaSyCVa7eKwNGKNniq9F3U_t91mybw3hgwUM4\",
            authDomain: \"key-traxx.firebaseapp.com\",
            databaseURL: \"https://key-traxx.firebaseio.com\",
            projectId: \"key-traxx\",
            storageBucket: \"key-traxx.appspot.com\",
            messagingSenderId: \"614611852970\"
        };
        firebase.initializeApp(config);

        // var database = firebase.database();
    </script> #}


    {# <script src=\"js/firebase.js\"></script> #}

    {# jQuery #}
    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>

    {# Bootstrap #}
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
    
    {# Firebase #}
    <script src=\"https://www.gstatic.com/firebasejs/4.8.2/firebase.js\"></script>
    <script src=\"js/firebase_init.js\"></script>

    {# Our Javascript #}
    <script src=\"js/keytraxx.js\"></script>

    {% block body_script %}{% endblock %}

</body>

</html>
", "base.twig.html", "/var/www/templates/base.twig.html");
    }
}
