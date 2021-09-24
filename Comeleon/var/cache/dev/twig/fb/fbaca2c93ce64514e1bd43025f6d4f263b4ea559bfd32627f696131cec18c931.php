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

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>


<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-5\">
            <section class=\"articles\">
                <h2>Titre de la prestation n°1</h2>
                <div class=\"content\">
                    <img src=\"http://placehold.it/350x150\">
                    <p>PARAGRAPHE DE LA PRESTATION</p>
                    <p>dzd hqzbdjkzqbdjzqbkfbzqf</p>
                    <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prestation_show");
        echo "\" class=\"btn btn-primary\">Lire la suite</a>
                </div>
            </section>
        </div>
        <div class=\"col-lg-5\">
            <section class=\"articles\">
                <h2>Titre de la prestation n°2</h2>
                <div class=\"content\">
                    <img src=\"http://placehold.it/350x150\">
                    <p>PARAGRAPHE DE LA PRESTATION</p>
                    <p>dzd hqzbdjkzqbdjzqbkfbzqf</p>
                    <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prestation_show");
        echo "\" class=\"btn btn-primary\">Lire la suite</a>
                </div>
            </section>
        </div>
    </div>
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
        return array (  104 => 32,  90 => 21,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Prestations{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>


<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-5\">
            <section class=\"articles\">
                <h2>Titre de la prestation n°1</h2>
                <div class=\"content\">
                    <img src=\"http://placehold.it/350x150\">
                    <p>PARAGRAPHE DE LA PRESTATION</p>
                    <p>dzd hqzbdjkzqbdjzqbkfbzqf</p>
                    <a href=\"{{ path('prestation_show') }}\" class=\"btn btn-primary\">Lire la suite</a>
                </div>
            </section>
        </div>
        <div class=\"col-lg-5\">
            <section class=\"articles\">
                <h2>Titre de la prestation n°2</h2>
                <div class=\"content\">
                    <img src=\"http://placehold.it/350x150\">
                    <p>PARAGRAPHE DE LA PRESTATION</p>
                    <p>dzd hqzbdjkzqbdjzqbkfbzqf</p>
                    <a href=\"{{ path('prestation_show') }}\" class=\"btn btn-primary\">Lire la suite</a>
                </div>
            </section>
        </div>
    </div>
</div>

{% endblock %}", "prestation/prestation.html.twig", "C:\\Users\\gaudreem\\Documents\\Workspace\\AP1Comeleon\\Comeleon\\templates\\prestation\\prestation.html.twig");
    }
}
