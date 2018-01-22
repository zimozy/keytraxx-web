<?php

/* login.twig.html */
class __TwigTemplate_dd6c01ae4435301732aaf1e8ef306e5305417329361c8aa9df08bc879d123616 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig.html", "login.twig.html", 1);
        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'head_style' => array($this, 'block_head_style'),
            'body_script' => array($this, 'block_body_script'),
            'title' => array($this, 'block_title'),
            'navbar_login' => array($this, 'block_navbar_login'),
            'content_with_margin' => array($this, 'block_content_with_margin'),
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
    public function block_navbar($context, array $blocks = array())
    {
    }

    // line 5
    public function block_head_style($context, array $blocks = array())
    {
        // line 6
        echo "    <link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdn.firebase.com/libs/firebaseui/2.5.1/firebaseui.css\" />
";
    }

    // line 9
    public function block_body_script($context, array $blocks = array())
    {
        // line 10
        echo "    <script src=\"https://cdn.firebase.com/libs/firebaseui/2.5.1/firebaseui.js\"></script>
    <script src=\"js/firebase_ui_init.js\"></script>
";
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo "Sign In";
    }

    // line 16
    public function block_navbar_login($context, array $blocks = array())
    {
    }

    // line 18
    public function block_content_with_margin($context, array $blocks = array())
    {
        // line 20
        echo "<div class=\"container-fluid text-center\">
    <div class=\"row\">
        <div class=\"col\">
            <br>
            <h2>KeyTraxx</h2>
        </div>
    </div>
    <div class=\"row align-items-center\" style=\"margin-top:50px;\">
        <div class=\"col text-center\">
            <h1 class=\"display-3\">Welcome.</h1>
            <div id=\"sign-in-container\" style=\"margin-top:25px;\"></div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "login.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 20,  66 => 18,  61 => 16,  55 => 14,  49 => 10,  46 => 9,  41 => 6,  38 => 5,  33 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig.html' %}

{% block navbar %}{% endblock %}

{% block head_style %}
    <link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdn.firebase.com/libs/firebaseui/2.5.1/firebaseui.css\" />
{% endblock %}

{% block body_script %}
    <script src=\"https://cdn.firebase.com/libs/firebaseui/2.5.1/firebaseui.js\"></script>
    <script src=\"js/firebase_ui_init.js\"></script>
{% endblock %}

{% block title %}Sign In{% endblock %}

{% block navbar_login %}{% endblock %}

{% block content_with_margin %}
{# VERTICALLY ALIGNED ROW #}
<div class=\"container-fluid text-center\">
    <div class=\"row\">
        <div class=\"col\">
            <br>
            <h2>KeyTraxx</h2>
        </div>
    </div>
    <div class=\"row align-items-center\" style=\"margin-top:50px;\">
        <div class=\"col text-center\">
            <h1 class=\"display-3\">Welcome.</h1>
            <div id=\"sign-in-container\" style=\"margin-top:25px;\"></div>
        </div>
    </div>
</div>
{% endblock %}
", "login.twig.html", "/var/www/templates/login.twig.html");
    }
}
