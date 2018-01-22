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
        ";
        // line 23
        $this->displayBlock('navbar', $context, $blocks);
        // line 52
        echo "    ";
        // line 55
        echo "                ";
        // line 56
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "            ";
        // line 64
        echo "
    ";
        // line 67
        echo "    ";
        // line 68
        echo "    
    ";
        // line 83
        echo "

    ";
        // line 86
        echo "
    ";
        // line 88
        echo "    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>

    ";
        // line 91
        echo "    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
    
    ";
        // line 94
        echo "    <script src=\"https://www.gstatic.com/firebasejs/4.8.2/firebase.js\"></script>
    <script src=\"js/firebase_init.js\"></script>

    ";
        // line 98
        echo "    <script src=\"js/keytraxx.js\"></script>

    ";
        // line 100
        $this->displayBlock('body_script', $context, $blocks);
        // line 101
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

    // line 23
    public function block_navbar($context, array $blocks = array())
    {
        // line 24
        echo "            ";
        // line 26
        echo "                    ";
        // line 27
        echo "                    <div id=\"navbar\" class=\"py-3 pr-3 pl-2\">
                        <div class=\"row\">
                            
                            ";
        // line 31
        echo "                            <div class=\"col-sm-auto\">
                                    <h3 class=\"navbarH\"><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("map"), "html", null, true);
        echo "\" class=\"text-dark\">KeyTraxx</a></h3>
                            </div>

                            ";
        // line 36
        echo "                            ";
        $this->displayBlock('navbar_center', $context, $blocks);
        // line 39
        echo "                            
                            ";
        // line 41
        echo "                            ";
        $this->displayBlock('navbar_login', $context, $blocks);
        // line 47
        echo "                        </div>
                    </div>
                ";
        // line 51
        echo "        ";
    }

    // line 36
    public function block_navbar_center($context, array $blocks = array())
    {
        // line 37
        echo "                                <div class=\"col\"></div>
                            ";
    }

    // line 41
    public function block_navbar_login($context, array $blocks = array())
    {
        // line 42
        echo "                                <div class=\"col-sm-auto\">
                                    ";
        // line 44
        echo "                                    <a id=\"sign-out\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("login"), "html", null, true);
        echo "\" class=\"h-100\">Sign Out</a>
                                </div>
                            ";
    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
        // line 57
        echo "                    ";
        // line 58
        echo "                        ";
        $this->displayBlock('content_with_margin', $context, $blocks);
        // line 59
        echo "                    ";
        // line 60
        echo "                ";
    }

    // line 58
    public function block_content_with_margin($context, array $blocks = array())
    {
    }

    // line 100
    public function block_body_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.twig.html";
    }

    public function getDebugInfo()
    {
        return array (  213 => 100,  208 => 58,  204 => 60,  202 => 59,  199 => 58,  197 => 57,  194 => 56,  186 => 44,  183 => 42,  180 => 41,  175 => 37,  172 => 36,  168 => 51,  164 => 47,  161 => 41,  158 => 39,  155 => 36,  149 => 32,  146 => 31,  141 => 27,  139 => 26,  137 => 24,  134 => 23,  129 => 19,  124 => 14,  119 => 7,  111 => 101,  109 => 100,  105 => 98,  100 => 94,  96 => 91,  92 => 88,  89 => 86,  85 => 83,  82 => 68,  80 => 67,  77 => 64,  75 => 61,  72 => 56,  70 => 55,  68 => 52,  66 => 23,  61 => 20,  59 => 19,  54 => 16,  52 => 15,  49 => 14,  46 => 12,  43 => 10,  41 => 9,  37 => 7,  34 => 6,  28 => 1,);
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
        {% block navbar %}
            {# <div class=\"row\">
                <div class=\"col\"> #}
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
                                    {# <a id=\"sign-in\" href=\"{{path_for('login')}}\" class=\"btn btn-outline-dark d-none\" role=\"button\">Sign In</a> #}
                                    <a id=\"sign-out\" href=\"{{path_for('login')}}\" class=\"h-100\">Sign Out</a>
                                </div>
                            {% endblock %}
                        </div>
                    </div>
                {# </div>
            </div> #}
        {% endblock %}
    {# <div class=\"container-fluid h-100\">
        <div class=\"row h-100\">
            <div class=\"col\"> #}
                {# MAIN CONTENT #}
                {% block content %}
                    {# <div class=\"\"> #}
                        {% block content_with_margin %}{% endblock %}
                    {# </div> #}
                {% endblock %}
            {# </div>
        </div>
    </div> #}

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
