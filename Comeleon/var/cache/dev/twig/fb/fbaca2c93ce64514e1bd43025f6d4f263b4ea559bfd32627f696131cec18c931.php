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

/* prestation/prestation.html.twig */
class __TwigTemplate_6b7cd562f87416cc09107812d3d2a6096c76346de02f9fa3f0fcc49f6d9cf400 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prestation/prestation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "prestation/prestation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Prestations";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <body>
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <div class=\"container-fluid\">
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"navbar-nav me-auto\">
                
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/prestation/new\">Ajouter une prestation</a>
                </li>

                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/prestation/supp\">Supprimer une prestation</a>
                </li>
               
            </ul>
            </div>
        </div>
        </nav>
       
    </body>
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>


<div class=\"container\">
    <div class=\"row\">
       ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prestas"]) || array_key_exists("prestas", $context) ? $context["prestas"] : (function () { throw new RuntimeError('Variable "prestas" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["presta"]) {
            // line 40
            echo "        <div class=\"col-lg-6\">
            <section class=\"Presta\">
                <h2>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["presta"], "titre", [], "any", false, false, false, 42), "html", null, true);
            echo "</h2>
                <div class=\"metadata\">Ecrit le ";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["presta"], "createdAt", [], "any", false, false, false, 43), "d/m/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["presta"], "createdAt", [], "any", false, false, false, 43), "H:i"), "html", null, true);
            echo "</div>
                <div class=\"content\">
                    <img src=\"";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["presta"], "image", [], "any", false, false, false, 45), "html", null, true);
            echo "\">
                    <br><br>
                    ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["presta"], "description", [], "any", false, false, false, 47), "html", null, true);
            echo "
                    <br><br>
                    <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prestation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["presta"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Lire la suite</a>
                </div>
            </section>
            <br><br><br><br>
        </div>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['presta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "prestation/prestation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 55,  136 => 49,  131 => 47,  126 => 45,  119 => 43,  115 => 42,  111 => 40,  107 => 39,  73 => 7,  66 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Prestations{% endblock %}


{% block body %}
    <body>
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <div class=\"container-fluid\">
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"navbar-nav me-auto\">
                
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/prestation/new\">Ajouter une prestation</a>
                </li>

                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/prestation/supp\">Supprimer une prestation</a>
                </li>
               
            </ul>
            </div>
        </div>
        </nav>
       
    </body>
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>


<div class=\"container\">
    <div class=\"row\">
       {% for presta in prestas %}
        <div class=\"col-lg-6\">
            <section class=\"Presta\">
                <h2>{{ presta.titre }}</h2>
                <div class=\"metadata\">Ecrit le {{ presta.createdAt | date('d/m/Y') }} à {{ presta.createdAt | date('H:i') }}</div>
                <div class=\"content\">
                    <img src=\"{{ presta.image }}\">
                    <br><br>
                    {{ presta.description }}
                    <br><br>
                    <a href=\"{{ path('prestation_show', {id: presta.id} ) }}\" class=\"btn btn-primary\">Lire la suite</a>
                </div>
            </section>
            <br><br><br><br>
        </div>
           {% endfor %}
    </div>
</div>

{% endblock %}", "prestation/prestation.html.twig", "C:\\Users\\Marvine Gaudrée\\Documents\\workspace\\AP1Comeleon\\Comeleon\\templates\\prestation\\prestation.html.twig");
    }
}
