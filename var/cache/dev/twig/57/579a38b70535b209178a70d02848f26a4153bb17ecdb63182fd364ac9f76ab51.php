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

/* categorie/afficher.html.twig */
class __TwigTemplate_e17e009176499f27ac90691e9ee59082433171a1b672a0c561ee3788f0ef0221 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/afficher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/afficher.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categorie/afficher.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
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
        La liste des Categories
    </div>

    <br>
    <input class=\"form-control\" id=\"myInput\" type=\"text\" placeholder=\"Rechercher..\">

    <div class=\"card\">

        <div class=\"card-block table-border-style\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <td>#</td>
                        <th>ID</th>
                        <th>Nom</th>
                        <th></th>
                    </tr>
                    </thead>
                    ";
        // line 35
        $context["count"] = 0;
        // line 36
        echo "                    <tbody id=\"myTable\">
                    ";
        // line 37
        $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 37, $this->source); })()) + 1);
        // line 38
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listcategorie"]) || array_key_exists("listcategorie", $context) ? $context["listcategorie"] : (function () { throw new RuntimeError('Variable "listcategorie" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 39
            echo "                        <tr>
                            <td>";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 40, $this->source); })()), "html", null, true);
            echo "</td>
                            <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, json_encode($context["categorie"]), "idc", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                            <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, json_encode($context["categorie"]), "nomc", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>

                            <td>
                                <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateCategorie", ["idc" => twig_get_attribute($this->env, $this->source, $context["categorie"], "idc", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\" ><i class=\"fa fa-edit\" style=\"font-size:18px\"></i></a>
                                <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteCategorie", ["idc" => twig_get_attribute($this->env, $this->source, $context["categorie"], "idc", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\" ><i class=\"fa fa-trash\" style=\"font-size:18px\"></i></a>
                                ";
            // line 47
            $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 47, $this->source); })()) + 1);
            // line 48
            echo "
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
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
        return "categorie/afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 52,  140 => 48,  138 => 47,  134 => 46,  130 => 45,  124 => 42,  120 => 41,  116 => 40,  113 => 39,  108 => 38,  106 => 37,  103 => 36,  101 => 35,  68 => 4,  58 => 3,  35 => 1,);
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
        La liste des Categories
    </div>

    <br>
    <input class=\"form-control\" id=\"myInput\" type=\"text\" placeholder=\"Rechercher..\">

    <div class=\"card\">

        <div class=\"card-block table-border-style\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <td>#</td>
                        <th>ID</th>
                        <th>Nom</th>
                        <th></th>
                    </tr>
                    </thead>
                    {% set count = 0 %}
                    <tbody id=\"myTable\">
                    {% set count = count+1 %}
                    {% for categorie in listcategorie %}
                        <tr>
                            <td>{{ count }}</td>
                            <td>{{ categorie|json_encode().idc }}</td>
                            <td>{{ categorie|json_encode().nomc }}</td>

                            <td>
                                <a href=\"{{ path(\"updateCategorie\",{'idc':categorie.idc}) }}\" ><i class=\"fa fa-edit\" style=\"font-size:18px\"></i></a>
                                <a href=\"{{ path(\"deleteCategorie\",{'idc':categorie.idc}) }}\" ><i class=\"fa fa-trash\" style=\"font-size:18px\"></i></a>
                                {% set count = count+1 %}

                            </td>
                        </tr>
                    {% endfor %}


                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock  %}", "categorie/afficher.html.twig", "C:\\wamp64.1\\www\\pidev0080\\pidev\\back_end\\back_end\\projet\\templates\\categorie\\afficher.html.twig");
    }
}
