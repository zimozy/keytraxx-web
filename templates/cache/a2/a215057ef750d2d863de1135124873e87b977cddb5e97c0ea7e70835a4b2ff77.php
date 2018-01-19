<?php

/* add.twig.html */
class __TwigTemplate_7fc2d5ebad7d474632e670347a3567d0a19c0004d725ea93a3e97fe3387fe48c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig.html", "add.twig.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body_script' => array($this, 'block_body_script'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Add Car";
    }

    // line 5
    public function block_body_script($context, array $blocks = array())
    {
        // line 6
        echo "    <script type=\"text/javascript\" src=\"http://www.carqueryapi.com/js/carquery.0.3.4.js\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function() {
            try {
                var carquery = new CarQuery();

                carquery.init();
                //carquery.init('2000', 'dodge', 'Viper', 11636);
                carquery.setFilters( {sold_in_us:true} );
                carquery.initYearMakeModelTrim('year', 'make', 'model', 'na');
            } catch(e) {
                \$('#make_model_help').removeClass('d-none'); //Show a message that they need to disable ad blockers
            }
        });
    </script>
";
    }

    // line 24
    public function block_content_with_margin($context, array $blocks = array())
    {
        // line 25
        echo "

    <div class=\"row\">
        <div class=\"col-sm-8 offset-2\">
            <h1 class=\"pt-3\">Add Car</h1>
            <hr>

            ";
        // line 32
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "year", array())) {
            // line 33
            echo "                <p class=\"text-danger\">There was an error submitting the form. Please check the fields and contact us if the problem persists.</p>
            ";
        }
        // line 35
        echo "
            <form action=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("add"), "html", null, true);
        echo "\" method=\"POST\">
                <h4>Make and model</h4>
                <div class=\"form-group\">
                    <div class=\"form-row\">
                        <div class=\"col\">
                            <select name=\"year\" id=\"year\" class=\"custom-select\"></select>
                        </div>
                        <div class=\"col\">
                            <select name=\"make\" id=\"make\" class=\"custom-select\"></select>
                        </div>
                        <div class=\"col\">
                            <select name=\"model\" id=\"model\" class=\"custom-select\"></select>
                        </div>
                    </div>
                    <small id=\"make_model_help\" class=\"d-none form-text\"><mark>Not working? Check that your ad blocker is disabled for this site.</mark></small>
                </div>

                <h4>Vehicle ID Number</h4>
                <div class=\"form-group\">
                    <input type=\"text\" name=\"vin\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, ($context["vin"] ?? null), "html", null, true);
        echo "\" placeholder=\"VIN\" class=\"form-control\">
                    ";
        // line 56
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "vin", array()), "invalid", array())) {
            echo "<small class=\"form-text text-danger\">Must be a 17-digit VIN</small>";
        }
        // line 57
        echo "                </div>

                <h4>Price</h4>
                <div class=\"form-group\">
                    <input type=\"text\" name=\"price\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, ($context["price"] ?? null), "html", null, true);
        echo "\" placeholder=\"Price\" class=\"form-control\"> 
                    ";
        // line 62
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "price", array()), "invalid", array())) {
            echo "<small class=\"form-text text-danger\">Must be a valid number</small>";
        }
        // line 63
        echo "                </div>

                <h4>Add Photo</h4>
                <div class=\"form-group\">
                    <div class=\"custom-file\">
                        <input type=\"file\" class=\"custom-file-input\" id=\"customFile\" name=\"photo\">
                        <label class=\"custom-file-label\" for=\"customFile\">Choose file</label>
                        ";
        // line 70
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "photo", array()), "invalid", array())) {
            echo "<small class=\"form-text text-danger\">Must be an image file</small>";
        }
        // line 71
        echo "                    </div>
                </div>
                
                <h4>Key Number</h4>
                <div class=\"form-group\">
                    <input type=\"text\" name=\"keyNumber\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, ($context["keyNumber"] ?? null), "html", null, true);
        echo "\" placeholder=\"Key Number\" class=\"form-control\">
                    ";
        // line 77
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "keyNumber", array())) {
            echo "<small class=\"form-text text-danger\">Must be a valid number</small>";
        }
        // line 78
        echo "                </div>
                    
                <div class=\"form-group mt-5\">
                    <input type=\"submit\" value=\"Add Car\" class=\"btn btn-primary px-5\">
                </div>

            </form>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "add.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 78,  148 => 77,  144 => 76,  137 => 71,  133 => 70,  124 => 63,  120 => 62,  116 => 61,  110 => 57,  106 => 56,  102 => 55,  80 => 36,  77 => 35,  73 => 33,  71 => 32,  62 => 25,  59 => 24,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.twig.html' %}

{% block title %}Add Car{% endblock %}

{% block body_script %}
    <script type=\"text/javascript\" src=\"http://www.carqueryapi.com/js/carquery.0.3.4.js\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function() {
            try {
                var carquery = new CarQuery();

                carquery.init();
                //carquery.init('2000', 'dodge', 'Viper', 11636);
                carquery.setFilters( {sold_in_us:true} );
                carquery.initYearMakeModelTrim('year', 'make', 'model', 'na');
            } catch(e) {
                \$('#make_model_help').removeClass('d-none'); //Show a message that they need to disable ad blockers
            }
        });
    </script>
{% endblock %}

{% block content_with_margin %}


    <div class=\"row\">
        <div class=\"col-sm-8 offset-2\">
            <h1 class=\"pt-3\">Add Car</h1>
            <hr>

            {% if errors.year %}
                <p class=\"text-danger\">There was an error submitting the form. Please check the fields and contact us if the problem persists.</p>
            {% endif %}

            <form action=\"{{path_for('add')}}\" method=\"POST\">
                <h4>Make and model</h4>
                <div class=\"form-group\">
                    <div class=\"form-row\">
                        <div class=\"col\">
                            <select name=\"year\" id=\"year\" class=\"custom-select\"></select>
                        </div>
                        <div class=\"col\">
                            <select name=\"make\" id=\"make\" class=\"custom-select\"></select>
                        </div>
                        <div class=\"col\">
                            <select name=\"model\" id=\"model\" class=\"custom-select\"></select>
                        </div>
                    </div>
                    <small id=\"make_model_help\" class=\"d-none form-text\"><mark>Not working? Check that your ad blocker is disabled for this site.</mark></small>
                </div>

                <h4>Vehicle ID Number</h4>
                <div class=\"form-group\">
                    <input type=\"text\" name=\"vin\" value=\"{{vin}}\" placeholder=\"VIN\" class=\"form-control\">
                    {% if errors.vin.invalid %}<small class=\"form-text text-danger\">Must be a 17-digit VIN</small>{% endif %}
                </div>

                <h4>Price</h4>
                <div class=\"form-group\">
                    <input type=\"text\" name=\"price\" value=\"{{price}}\" placeholder=\"Price\" class=\"form-control\"> 
                    {% if errors.price.invalid %}<small class=\"form-text text-danger\">Must be a valid number</small>{% endif %}
                </div>

                <h4>Add Photo</h4>
                <div class=\"form-group\">
                    <div class=\"custom-file\">
                        <input type=\"file\" class=\"custom-file-input\" id=\"customFile\" name=\"photo\">
                        <label class=\"custom-file-label\" for=\"customFile\">Choose file</label>
                        {% if errors.photo.invalid %}<small class=\"form-text text-danger\">Must be an image file</small>{% endif %}
                    </div>
                </div>
                
                <h4>Key Number</h4>
                <div class=\"form-group\">
                    <input type=\"text\" name=\"keyNumber\" value=\"{{keyNumber}}\" placeholder=\"Key Number\" class=\"form-control\">
                    {% if errors.keyNumber %}<small class=\"form-text text-danger\">Must be a valid number</small>{% endif %}
                </div>
                    
                <div class=\"form-group mt-5\">
                    <input type=\"submit\" value=\"Add Car\" class=\"btn btn-primary px-5\">
                </div>

            </form>
        </div>
    </div>

{% endblock %}", "add.twig.html", "/var/www/templates/add.twig.html");
    }
}
