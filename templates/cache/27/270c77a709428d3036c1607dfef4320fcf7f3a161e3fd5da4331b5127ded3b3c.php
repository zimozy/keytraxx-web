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
    public function block_head_style($context, array $blocks = array())
    {
        // line 4
        echo "    <link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdn.firebase.com/libs/firebaseui/2.5.1/firebaseui.css\" />
";
    }

    // line 7
    public function block_body_script($context, array $blocks = array())
    {
        // line 8
        echo "    <script src=\"https://cdn.firebase.com/libs/firebaseui/2.5.1/firebaseui.js\"></script>
    <script src=\"js/firebase_ui_init.js\"></script>
";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo "Sign In";
    }

    // line 14
    public function block_navbar_login($context, array $blocks = array())
    {
    }

    // line 16
    public function block_content_with_margin($context, array $blocks = array())
    {
        // line 18
        echo "<div class=\"container-fluid h-100\">
    <div class=\"row align-items-center h-100\">
        <div class=\"col\">
            <div id=\"sign-in-container\"></div>
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
        return array (  63 => 18,  60 => 16,  55 => 14,  49 => 12,  43 => 8,  40 => 7,  35 => 4,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig.html' %}

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
<div class=\"container-fluid h-100\">
    <div class=\"row align-items-center h-100\">
        <div class=\"col\">
            <div id=\"sign-in-container\"></div>
        </div>
    </div>
</div>
{% endblock %}
", "login.twig.html", "/var/www/templates/login.twig.html");
    }
}
