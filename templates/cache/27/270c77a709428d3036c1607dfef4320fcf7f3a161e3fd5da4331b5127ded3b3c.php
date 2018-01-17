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
            'head_script' => array($this, 'block_head_script'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
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
    }

    // line 6
    public function block_head_script($context, array $blocks = array())
    {
        // line 7
        echo "
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Sign In";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "<div id=\"sign-in-container\"></div>
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
        return array (  53 => 13,  50 => 12,  44 => 10,  39 => 7,  36 => 6,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig.html' %}

{% block head_style %}
{% endblock %}

{% block head_script %}

{% endblock %}

{% block title %}Sign In{% endblock %}

{% block content %}
<div id=\"sign-in-container\"></div>
{% endblock %}
", "login.twig.html", "/var/www/templates/login.twig.html");
    }
}
