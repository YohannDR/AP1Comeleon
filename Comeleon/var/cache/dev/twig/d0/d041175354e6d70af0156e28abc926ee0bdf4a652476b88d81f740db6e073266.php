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
class __TwigTemplate_4d249ed70e7cd2d46f97fe07c659d4f2f7aa21da2c1da02bd60855b8fdbfd6ff extends Template
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
<div class=\"container\">

        
            <section class=\"Presta\">
                <h2> ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["presta"]) || array_key_exists("presta", $context) ? $context["presta"] : (function () { throw new RuntimeError('Variable "presta" does not exist.', 9, $this->source); })()), "titre", [], "any", false, false, false, 9), "html", null, true);
        echo " </h2>
            <br>
    
                <div class=\"metadata\">Ecrit le ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["presta"]) || array_key_exists("presta", $context) ? $context["presta"] : (function () { throw new RuntimeError('Variable "presta" does not exist.', 12, $this->source); })()), "createdAt", [], "any", false, false, false, 12), "d/m/Y"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["presta"]) || array_key_exists("presta", $context) ? $context["presta"] : (function () { throw new RuntimeError('Variable "presta" does not exist.', 12, $this->source); })()), "createdAt", [], "any", false, false, false, 12), "H:i"), "html", null, true);
        echo "</div>
                    <div class=\"content\">
                        <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["presta"]) || array_key_exists("presta", $context) ? $context["presta"] : (function () { throw new RuntimeError('Variable "presta" does not exist.', 14, $this->source); })()), "image", [], "any", false, false, false, 14), "html", null, true);
        echo "\">
                        <br><br>
                        ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["presta"]) || array_key_exists("presta", $context) ? $context["presta"] : (function () { throw new RuntimeError('Variable "presta" does not exist.', 16, $this->source); })()), "description", [], "any", false, false, false, 16), "html", null, true);
        echo "
                    </div>
                    <br><br>
                    <form method=\"post\" action=\"/prestation\">
                        <button type=\"submit\" class=\"btn btn-secondary\">Retour</button>
                    </form>
                </div>
                
            </section>
            
      

<br><br>

</div>

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
        return array (  84 => 16,  79 => 14,  72 => 12,  66 => 9,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"container\">

        
            <section class=\"Presta\">
                <h2> {{ presta.titre }} </h2>
            <br>
    
                <div class=\"metadata\">Ecrit le {{ presta.createdAt | date('d/m/Y') }} à {{ presta.createdAt | date('H:i') }}</div>
                    <div class=\"content\">
                        <img src=\"{{ presta.image }}\">
                        <br><br>
                        {{ presta.description }}
                    </div>
                    <br><br>
                    <form method=\"post\" action=\"/prestation\">
                        <button type=\"submit\" class=\"btn btn-secondary\">Retour</button>
                    </form>
                </div>
                
            </section>
            
      

<br><br>

</div>

{% endblock %}", "prestation/show.html.twig", "C:\\Users\\Marvine Gaudrée\\OneDrive - Établissement Saint-Adjutor\\AP\\AP1\\AP1Comeleon\\Comeleon\\templates\\prestation\\show.html.twig");
    }
}
