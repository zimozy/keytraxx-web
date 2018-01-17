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
            'navbar' => array($this, 'block_navbar'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
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
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"icon\" type=\"image/png\" href=\"\">
    
    ";
        // line 14
        echo "    ";
        $this->displayBlock('head_style', $context, $blocks);
        // line 15
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">";
        // line 16
        echo "    <link rel=\"stylesheet\" href=\"css/font-awesome/css/font-awesome.min.css\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdn.firebase.com/libs/firebaseui/2.5.1/firebaseui.css\" />
    <link rel=\"stylesheet\" href=\"css/keytraxx.css\">
    
    ";
        // line 21
        echo "    ";
        echo "<script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
    ";
        // line 23
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"></script>
    ";
        // line 24
        echo "<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
    ";
        // line 26
        echo "    <script src=\"https://www.gstatic.com/firebasejs/4.8.2/firebase.js\"></script>
    <script src=\"js/firebase_init.js\"></script>
    <script src=\"https://cdn.firebase.com/libs/firebaseui/2.5.1/firebaseui.js\"></script>
    <script src=\"js/firebase_ui_init.js\"></script>
    <script src=\"js/keytraxx.js\"></script>
    ";
        // line 31
        $this->displayBlock('head_script', $context, $blocks);
        // line 32
        echo "</head>

<body>
    ";
        // line 36
        echo "    <div class=\"container-fluid p-0\">
        <div id=\"navbar\">
            <div class=\"row\">


                <div class=\"col-sm-auto\">
                        <h3 class=\"navbarH\">KeyTraxx</h3>
                </div>

                ";
        // line 45
        $this->displayBlock('navbar', $context, $blocks);
        // line 46
        echo "                
                <div class=\"col-sm-auto\">
                    <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("login"), "html", null, true);
        echo "\" id=\"sign-in-link\" tabindex=\"0\" class=\"btn btn-outline-dark\" role=\"button\" data-toggle=\"popover\" title=\"Sign In\" >Dismissible popover</a>

                    ";
        // line 53
        echo "                </div>


                <!-- Modal -->
                ";
        // line 76
        echo "
            </div>
        </div>
    </div>

    ";
        // line 82
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 83
        echo "
    ";
        // line 86
        echo "    ";
        // line 87
        echo "    
    ";
        // line 102
        echo "

    ";
        // line 105
        echo "
    <script src=\"js/keytraxx.js\"></script>

    ";
        // line 108
        $this->displayBlock('scripts', $context, $blocks);
        // line 109
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

    // line 31
    public function block_head_script($context, array $blocks = array())
    {
    }

    // line 45
    public function block_navbar($context, array $blocks = array())
    {
    }

    // line 82
    public function block_content($context, array $blocks = array())
    {
    }

    // line 108
    public function block_scripts($context, array $blocks = array())
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
        return array (  168 => 108,  163 => 82,  158 => 45,  153 => 31,  148 => 14,  143 => 7,  135 => 109,  133 => 108,  128 => 105,  124 => 102,  121 => 87,  119 => 86,  116 => 83,  113 => 82,  106 => 76,  100 => 53,  95 => 48,  91 => 46,  89 => 45,  78 => 36,  73 => 32,  71 => 31,  64 => 26,  61 => 24,  58 => 23,  54 => 21,  48 => 16,  46 => 15,  43 => 14,  34 => 7,  31 => 6,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    {# META #}
    <meta charset=\"utf-8\">
    <title>{% block title %}{% endblock %} | KeyTraxx</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"icon\" type=\"image/png\" href=\"\">
    
    {# CSS #}
    {% block head_style %}{% endblock %}
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">{# BOOTSTRAP #}
    <link rel=\"stylesheet\" href=\"css/font-awesome/css/font-awesome.min.css\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdn.firebase.com/libs/firebaseui/2.5.1/firebaseui.css\" />
    <link rel=\"stylesheet\" href=\"css/keytraxx.css\">
    
    {# JS #}
    {# jQuery #}<script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
    {# Popper (must go before Bootstrap) #}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"></script>
    {# Bootstrap #}<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
    {# Firebase #}
    <script src=\"https://www.gstatic.com/firebasejs/4.8.2/firebase.js\"></script>
    <script src=\"js/firebase_init.js\"></script>
    <script src=\"https://cdn.firebase.com/libs/firebaseui/2.5.1/firebaseui.js\"></script>
    <script src=\"js/firebase_ui_init.js\"></script>
    <script src=\"js/keytraxx.js\"></script>
    {% block head_script %}{% endblock %}
</head>

<body>
    {# NAVIGATION BAR #}
    <div class=\"container-fluid p-0\">
        <div id=\"navbar\">
            <div class=\"row\">


                <div class=\"col-sm-auto\">
                        <h3 class=\"navbarH\">KeyTraxx</h3>
                </div>

                {% block navbar %}{% endblock %}
                
                <div class=\"col-sm-auto\">
                    <a href=\"{{path_for('login')}}\" id=\"sign-in-link\" tabindex=\"0\" class=\"btn btn-outline-dark\" role=\"button\" data-toggle=\"popover\" title=\"Sign In\" >Dismissible popover</a>

                    {# <button id=\"sign-in-button\" type=\"button\" class=\"btn btn-outline-dark\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\">Sign In</button>

                    <button id=\"sign-out-button\" type=\"button\" class=\"btn btn-outline-dark d-none\">Sign Out</button> #}
                </div>


                <!-- Modal -->
                {# <div class=\"modal fade\" id=\"exampleModalCenter\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Sign In</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">
                                <div id=\"sign-in-container\"></div>
                            </div>
                            {# <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                                <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
                            </div> 
                        </div>
                    </div>
                </div> #}

            </div>
        </div>
    </div>

    {# MAIN PAGE CONTENT #}
    {% block content %}{% endblock %}

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

    <script src=\"js/keytraxx.js\"></script>

    {% block scripts %}{% endblock %}

</body>

</html>
", "base.twig.html", "/var/www/templates/base.twig.html");
    }
}
