<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* plat/afficherPlat.html.twig */
class __TwigTemplate_c2caa3e7170d4917433d45c9945496350e43690f0ccef9e772af53ba59e5ab3b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plat/afficherPlat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plat/afficherPlat.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "plat/afficherPlat.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    <script>
        \$(document).ready(function(){
            \$(\"#myInput\").on(\"keyup\", function() {
                var value = \$(this).val().toLowerCase();
                \$(\"#myTable tr\").filter(function() {
                    \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

    <div class=\"chit-chat-heading\">
        La liste des Capteurs
    </div>
    <!--
<table border=\"2\">

    <tr>
        <td>Id plat</td>
        <td>Nom plat</td>
        <td>Prix plat</td>
        <td>Categorie plat</td>
        <td>Update</td>
        <td>Delete</td>


    </tr>

    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listplat"]) || array_key_exists("listplat", $context) ? $context["listplat"] : (function () { throw new RuntimeError('Variable "listplat" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 32
            echo "
        <tr>


            <td> ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "idp", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
            <td> ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "nomp", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
            <td> ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "prixp", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>

            <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletePlat", ["idp" => twig_get_attribute($this->env, $this->source, $context["x"], "idp", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">delete</a></td>

        </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "

</table>
-->
    <br>

    <input class=\"form-control\" id=\"myInput\" type=\"text\" placeholder=\"Rechercher..\">

    <div class=\"card\">

        <div class=\"card-block table-border-style\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <td>#</td>
                        <th>Nom</th>
                        <th>Prix</th>

                        <th>descption</th>
                        <th></th>
                    </tr>
                    </thead>
                    ";
        // line 68
        $context["count"] = 0;
        // line 69
        echo "                    <tbody id=\"myTable\">
                    ";
        // line 70
        $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 70, $this->source); })()) + 1);
        // line 71
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listplat"]) || array_key_exists("listplat", $context) ? $context["listplat"] : (function () { throw new RuntimeError('Variable "listplat" does not exist.', 71, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 72
            echo "                        <tr>
                            <td>";
            // line 73
            echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 73, $this->source); })()), "html", null, true);
            echo "</td>
                            <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "nomp", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
                            <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "prixp", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>

                            <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "description", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>


                            <td>

                                <a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletePlat", ["idp" => twig_get_attribute($this->env, $this->source, $context["plat"], "idp", [], "any", false, false, false, 82)]), "html", null, true);
            echo "\" ><i class=\"fa fa-trash\" style=\"font-size:18px\"></i></a>
                                ";
            // line 83
            $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 83, $this->source); })()) + 1);
            // line 84
            echo "
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "

                    </tbody>
                </table>
            </div>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "plat/afficherPlat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 88,  199 => 84,  197 => 83,  193 => 82,  185 => 77,  180 => 75,  176 => 74,  172 => 73,  169 => 72,  164 => 71,  162 => 70,  159 => 69,  157 => 68,  132 => 45,  121 => 40,  116 => 38,  112 => 37,  108 => 36,  102 => 32,  98 => 31,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
    <script>
        \$(document).ready(function(){
            \$(\"#myInput\").on(\"keyup\", function() {
                var value = \$(this).val().toLowerCase();
                \$(\"#myTable tr\").filter(function() {
                    \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

    <div class=\"chit-chat-heading\">
        La liste des Capteurs
    </div>
    <!--
<table border=\"2\">

    <tr>
        <td>Id plat</td>
        <td>Nom plat</td>
        <td>Prix plat</td>
        <td>Categorie plat</td>
        <td>Update</td>
        <td>Delete</td>


    </tr>

    {% for x in listplat %}

        <tr>


            <td> {{x.idp}}</td>
            <td> {{x.nomp}}</td>
            <td> {{x.prixp}}</td>

            <td><a href=\"{{ path('deletePlat',{'idp':x.idp}) }}\">delete</a></td>

        </tr>

    {% endfor %}


</table>
-->
    <br>

    <input class=\"form-control\" id=\"myInput\" type=\"text\" placeholder=\"Rechercher..\">

    <div class=\"card\">

        <div class=\"card-block table-border-style\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <td>#</td>
                        <th>Nom</th>
                        <th>Prix</th>

                        <th>descption</th>
                        <th></th>
                    </tr>
                    </thead>
                    {% set count = 0 %}
                    <tbody id=\"myTable\">
                    {% set count = count+1 %}
                    {% for plat in listplat %}
                        <tr>
                            <td>{{ count }}</td>
                            <td>{{ plat.nomp }}</td>
                            <td>{{ plat.prixp }}</td>

                            <td>{{ plat.description }}</td>


                            <td>

                                <a href=\"{{ path(\"deletePlat\",{'idp':plat.idp}) }}\" ><i class=\"fa fa-trash\" style=\"font-size:18px\"></i></a>
                                {% set count = count+1 %}

                            </td>
                        </tr>
                    {% endfor %}


                    </tbody>
                </table>
            </div>
        </div>
    </div>


{% endblock  %}", "plat/afficherPlat.html.twig", "C:\\wamp64.1\\www\\stage\\pidev\\back_end\\back_end\\projet\\templates\\plat\\afficherPlat.html.twig");
    }
}
