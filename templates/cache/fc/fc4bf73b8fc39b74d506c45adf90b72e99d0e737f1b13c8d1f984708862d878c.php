<?php

/* admin.twig.html */
class __TwigTemplate_211cd56a86f14ee314377e77915862840be4d681b00210ab55623d896ab36075 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head_style' => array($this, 'block_head_style'),
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
    <meta charset=\"utf-8\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " | KeyTraxx</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <link rel=\"stylesheet\" href=\"css/normalize.css\">
    <link rel=\"stylesheet\" href=\"css/skeleton.css\">

    <link rel=\"icon\" type=\"image/png\" href=\"\">

    ";
        // line 17
        $this->displayBlock('head_style', $context, $blocks);
        // line 18
        echo "</head>

<body>

    <div class=\"navbar\">KeyTraxx</div>

    ";
        // line 25
        echo "        ";
        // line 26
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 27
        echo "        ";
        // line 28
        echo "    ";
        // line 29
        echo "
  ";
        // line 30
        $this->displayBlock('scripts', $context, $blocks);
        // line 31
        echo "
</body>

</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 17
    public function block_head_style($context, array $blocks = array())
    {
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
    }

    // line 30
    public function block_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "admin.twig.html";
    }

    public function getDebugInfo()
    {
        return array (  91 => 30,  86 => 26,  81 => 17,  76 => 6,  68 => 31,  66 => 30,  63 => 29,  61 => 28,  59 => 27,  56 => 26,  54 => 25,  46 => 18,  44 => 17,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>{% block title %}{% endblock %} | KeyTraxx</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <link rel=\"stylesheet\" href=\"css/normalize.css\">
    <link rel=\"stylesheet\" href=\"css/skeleton.css\">

    <link rel=\"icon\" type=\"image/png\" href=\"\">

    {% block head_style %}{% endblock %}
</head>

<body>

    <div class=\"navbar\">KeyTraxx</div>

    {# <div class=\"container\"> #}
        {# <div class=\"row\"> #}
            {% block content %}{% endblock %}
        {# </div> #}
    {# </div> #}

  {% block scripts %}{% endblock %}

</body>

</html>
", "admin.twig.html", "/var/www/templates/admin.twig.html");
    }
}
