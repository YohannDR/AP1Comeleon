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

/* prestation/show.html.twig */
class __TwigTemplate_fe940f9cf2b6e7cca112d2cd8e963c013d84bfc7f5c3dd5662aa31ff673e93a3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prestation/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "prestation/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<section class=\"articles\">
    <h2>Titre de la prestation</h2>
    <div class=\"content\">
        <img src=\"http://placehold.it/350x150\">
        <p>PARAGRAPHE DE LA PRESTATION
        dzd hqzbdjkzqbdjzqbkfbzqf</p>

        <p>dnekjbfnzfe nfnenflzkfndlkzfc sdjkcsk cskcds
        contentdc
        ds
        vdsv csjkdnkjesbvcs </p>
    </div>
</section>
<form method=\"get\" action=\"/prestation\">
    <button type=\"submit\" class=\"btn btn-secondary\">Retour</button>
</form>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "prestation/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<section class=\"articles\">
    <h2>Titre de la prestation</h2>
    <div class=\"content\">
        <img src=\"http://placehold.it/350x150\">
        <p>PARAGRAPHE DE LA PRESTATION
        dzd hqzbdjkzqbdjzqbkfbzqf</p>

        <p>dnekjbfnzfe nfnenflzkfndlkzfc sdjkcsk cskcds
        contentdc
        ds
        vdsv csjkdnkjesbvcs </p>
    </div>
</section>
<form method=\"get\" action=\"/prestation\">
    <button type=\"submit\" class=\"btn btn-secondary\">Retour</button>
</form>

{% endblock %}", "prestation/show.html.twig", "C:\\Users\\gaudreem\\Documents\\Workspace\\AP1Comeleon\\Comeleon\\templates\\prestation\\show.html.twig");
    }
}
