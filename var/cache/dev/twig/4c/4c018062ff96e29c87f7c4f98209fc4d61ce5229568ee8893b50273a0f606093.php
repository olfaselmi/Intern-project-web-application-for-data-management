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

/* plat/afficherPlatFront.html.twig */
class __TwigTemplate_6adfbd07087fcc819aba8111486d6025369c77e978088cf6505517b3105af8c3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bodyContainer' => [$this, 'block_bodyContainer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plat/afficherPlatFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plat/afficherPlatFront.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "plat/afficherPlatFront.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_bodyContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyContainer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyContainer"));

        // line 3
        echo "


    <div class=\"offers\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col text-center\">
                    <h2 class=\"section_title\">Menu</h2>
                </div>
            </div>


    <div class=\"float-left\">
        <br><br<br><br><br<br><br><br<br><br><br<br>
        <!--------------------------------------Tri par categorie stats here------------------------------------------->
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listcategorie"]) || array_key_exists("listcategorie", $context) ? $context["listcategorie"] : (function () { throw new RuntimeError('Variable "listcategorie" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 19
            echo "            <ul class=\"list-group\">
                <li class=\"list-group-item d-flex justify-content-between align-items-center\" style=\"color:purple;\">

                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("TriParategorie", ["idc" => twig_get_attribute($this->env, $this->source, $context["categorie"], "idc", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\" >
                        ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nomc", [], "any", false, false, false, 23), "html", null, true);
            echo "
                        <!--
                       <span class=\"badge badge-primary badge-pill\"> 4 </span>
                        -->
                    </a>
                </li>
            </ul>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        <!--------------------------------------Tri par categorie ends here-------------------------------------------->

        <!----------------------------------Button for All categories stats here--------------------------------------->
        <ul class=\"list-group\">
            <li class=\"list-group-item d-flex justify-content-between align-items-center\" style=\"color:purple;\">

                <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherPlatFront");
        echo "\" >
                    All Categories
                    <!--
                   <span class=\"badge badge-primary badge-pill\"> 4 </span>
                    -->
                </a>
            </li>
        </ul>
        <!----------------------------------Button for All categories ends here---------------------------------------->
    </div>




            <div class=\"row offers_items\">
                <!------------------------------Affichage des plats starts here---------------------------------------->
                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listplat"]) || array_key_exists("listplat", $context) ? $context["listplat"] : (function () { throw new RuntimeError('Variable "listplat" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 54
            echo "                <!-- Offers Item -->
                <div class=\"col-lg-6 offers_col\">
                    <div class=\"offers_item\">
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"offers_image_container\">
                                    <div class=\"offers_image_background\" ><img src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/images/productImageUploads/" . twig_get_attribute($this->env, $this->source, $context["plat"], "imagep", [], "any", false, false, false, 60))), "html", null, true);
            echo "\" height=\"170px\" width=\"200px\" ></div>
                                </div>
                            </div>

                            <div class=\"col-lg-6\">
                                <div class=\"offers_content\">

                                    <div class=\"offers_price\">";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "prixp", [], "any", false, false, false, 67), "html", null, true);
            echo "<span>DT</span></div>
                                    <div class=\"rating_r rating_r_4 offers_rating\">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>
                                    <div class=\"offer_name\"><a href=\"#\">";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "nomp", [], "any", false, false, false, 75), "html", null, true);
            echo "</a></div>
                                    <p class=\"offers_text\"></p>
                                    <div class=\"offers_icons\">
                                        <ul class=\"offers_icons_list\">
                                            <li class=\"offers_icons_item\"><img src=\"images/post.png\" alt=\"\"></li>
                                            <li class=\"offers_icons_item\"><img src=\"images/compass.png\" alt=\"\"></li>
                                            <li class=\"offers_icons_item\"><img src=\"images/bicycle.png\" alt=\"\"></li>
                                            <li class=\"offers_icons_item\"><img src=\"images/sailboat.png\" alt=\"\"></li>
                                        </ul>
                                    </div>


                                        <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showFront", ["idp" => twig_get_attribute($this->env, $this->source, $context["plat"], "idp", [], "any", false, false, false, 87)]), "html", null, true);
            echo "\">read more</a>



                                </div>
                            </div>
                        </div>
                    </div><br><br>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                <!--------------------------------Affichage des plats ends here---------------------------------------->
            </div>
        </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "plat/afficherPlatFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 97,  187 => 87,  172 => 75,  161 => 67,  151 => 60,  143 => 54,  139 => 53,  120 => 37,  112 => 31,  98 => 23,  94 => 22,  89 => 19,  85 => 18,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}
{% block bodyContainer %}



    <div class=\"offers\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col text-center\">
                    <h2 class=\"section_title\">Menu</h2>
                </div>
            </div>


    <div class=\"float-left\">
        <br><br<br><br><br<br><br><br<br><br><br<br>
        <!--------------------------------------Tri par categorie stats here------------------------------------------->
        {% for categorie in listcategorie %}
            <ul class=\"list-group\">
                <li class=\"list-group-item d-flex justify-content-between align-items-center\" style=\"color:purple;\">

                    <a href=\"{{ path(\"TriParategorie\",{'idc':categorie.idc}) }}\" >
                        {{ categorie.nomc }}
                        <!--
                       <span class=\"badge badge-primary badge-pill\"> 4 </span>
                        -->
                    </a>
                </li>
            </ul>
        {% endfor %}
        <!--------------------------------------Tri par categorie ends here-------------------------------------------->

        <!----------------------------------Button for All categories stats here--------------------------------------->
        <ul class=\"list-group\">
            <li class=\"list-group-item d-flex justify-content-between align-items-center\" style=\"color:purple;\">

                <a href=\"{{ path(\"afficherPlatFront\") }}\" >
                    All Categories
                    <!--
                   <span class=\"badge badge-primary badge-pill\"> 4 </span>
                    -->
                </a>
            </li>
        </ul>
        <!----------------------------------Button for All categories ends here---------------------------------------->
    </div>




            <div class=\"row offers_items\">
                <!------------------------------Affichage des plats starts here---------------------------------------->
                {% for plat in listplat %}
                <!-- Offers Item -->
                <div class=\"col-lg-6 offers_col\">
                    <div class=\"offers_item\">
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"offers_image_container\">
                                    <div class=\"offers_image_background\" ><img src=\"{{ asset('/images/productImageUploads/' ~ plat.imagep) }}\" height=\"170px\" width=\"200px\" ></div>
                                </div>
                            </div>

                            <div class=\"col-lg-6\">
                                <div class=\"offers_content\">

                                    <div class=\"offers_price\">{{ plat.prixp }}<span>DT</span></div>
                                    <div class=\"rating_r rating_r_4 offers_rating\">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>
                                    <div class=\"offer_name\"><a href=\"#\">{{ plat.nomp }}</a></div>
                                    <p class=\"offers_text\"></p>
                                    <div class=\"offers_icons\">
                                        <ul class=\"offers_icons_list\">
                                            <li class=\"offers_icons_item\"><img src=\"images/post.png\" alt=\"\"></li>
                                            <li class=\"offers_icons_item\"><img src=\"images/compass.png\" alt=\"\"></li>
                                            <li class=\"offers_icons_item\"><img src=\"images/bicycle.png\" alt=\"\"></li>
                                            <li class=\"offers_icons_item\"><img src=\"images/sailboat.png\" alt=\"\"></li>
                                        </ul>
                                    </div>


                                        <a href=\"{{ path('showFront',{'idp':plat.idp}) }}\">read more</a>



                                </div>
                            </div>
                        </div>
                    </div><br><br>
                </div>
                {% endfor %}
                <!--------------------------------Affichage des plats ends here---------------------------------------->
            </div>
        </div>



{% endblock  %}", "plat/afficherPlatFront.html.twig", "C:\\wamp64.1\\www\\pidev0080\\pidev\\back_end\\back_end\\projet\\templates\\plat\\afficherPlatFront.html.twig");
    }
}
