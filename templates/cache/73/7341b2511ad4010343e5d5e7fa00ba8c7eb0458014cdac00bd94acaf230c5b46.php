<?php

/* map.twig.html */
class __TwigTemplate_a25d29777d1c1e9ebb09673510db18035be92a7ef1c66ff958f9a74782d75bef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig.html", "map.twig.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head_style' => array($this, 'block_head_style'),
            'navbar' => array($this, 'block_navbar'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Home";
    }

    // line 5
    public function block_head_style($context, array $blocks = array())
    {
        // line 6
        echo "    <style>
        /* Always set the map height explicitly to define the size of the div
            * element that contains the map. */
        #map {
            height: 100%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
";
    }

    // line 21
    public function block_navbar($context, array $blocks = array())
    {
        // line 22
        echo "    <div class=\"col-sm-auto\">
        <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("add"), "html", null, true);
        echo "\" class=\"btn btn-primary\" role=\"button\"><i class=\"fa fa-car\" aria-hidden=\"true\"></i> Add Car</a>
    </div>
    <div class=\"col\">
        <form action=\"\"><input type=\"text\" class=\"form-control\" placeholder=\"Search...\"></form>
    </div>
";
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        // line 32
        echo "        <h1>Welcome to My Awesome App</h1>
    Status:<div id=\"sign-in-status\"></div>
    Sign in:<div id=\"sign-in\"></div>
    Details:<div id=\"account-details\"></div>
";
    }

    // line 38
    public function block_scripts($context, array $blocks = array())
    {
        // line 39
        echo "    <script>
        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 35.226944, lng: -80.843333},
                mapTypeControl: false,
                disableDefaultUI: true,
                zoom: 16
            });
        }
    </script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAog6OksKldQKb7VFU8ohOA-VRoQuw-Mwg&callback=initMap\" async defer></script>
";
    }

    public function getTemplateName()
    {
        return "map.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 39,  87 => 38,  79 => 32,  77 => 31,  74 => 30,  64 => 23,  61 => 22,  58 => 21,  41 => 6,  38 => 5,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig.html' %}

{% block title %}Home{% endblock %}

{% block head_style %}
    <style>
        /* Always set the map height explicitly to define the size of the div
            * element that contains the map. */
        #map {
            height: 100%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
{% endblock %}

{% block navbar %}
    <div class=\"col-sm-auto\">
        <a href=\"{{path_for('add')}}\" class=\"btn btn-primary\" role=\"button\"><i class=\"fa fa-car\" aria-hidden=\"true\"></i> Add Car</a>
    </div>
    <div class=\"col\">
        <form action=\"\"><input type=\"text\" class=\"form-control\" placeholder=\"Search...\"></form>
    </div>
{% endblock %}

{% block content %}
    {# <div id=\"map\"></div> #}
        <h1>Welcome to My Awesome App</h1>
    Status:<div id=\"sign-in-status\"></div>
    Sign in:<div id=\"sign-in\"></div>
    Details:<div id=\"account-details\"></div>
{% endblock %}

{% block scripts %}
    <script>
        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 35.226944, lng: -80.843333},
                mapTypeControl: false,
                disableDefaultUI: true,
                zoom: 16
            });
        }
    </script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAog6OksKldQKb7VFU8ohOA-VRoQuw-Mwg&callback=initMap\" async defer></script>
{% endblock %}", "map.twig.html", "/var/www/templates/map.twig.html");
    }
}
