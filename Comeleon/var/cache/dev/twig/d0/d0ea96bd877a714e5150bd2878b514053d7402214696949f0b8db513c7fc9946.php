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

/* avis/avisListe.html.twig */
class __TwigTemplate_72ec881c7d149069a695435cff4a9517e80b0751405813ba2e78b49492ab129e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/avisListe.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "avis/avisListe.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Avis";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        if ((0 !== twig_compare(twig_length_filter($this->env, (isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 7, $this->source); })())), 0))) {
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 8, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["A"]) {
                // line 9
                echo "<div style=\"margin-left:7%; margin-left:7%; margin-top:3%\">
<div class=\"card border-secondary mb-3\" style=\"max-width: 80rem;\">
  ";
                // line 12
                echo "  <div class=\"card-header\" style=\"font-size:20px;\">Avis de ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["A"], "nomUser", [], "any", false, false, false, 12), "html", null, true);
                echo "</div>
  <div class=\"card-body\">
    ";
                // line 15
                echo "    <h4 class=\"card-title\">Titre : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["A"], "titre", [], "any", false, false, false, 15), "html", null, true);
                echo "</h4>
    ";
                // line 17
                echo "    <p class=\"card-text\">Commentaire : ";
                echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["A"], "commentaire", [], "any", false, false, false, 17), "html", null, true));
                echo "</p>
  </div>
</div>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['A'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 23
            echo "</br>
<center><h1>Aucun avis disponible</h1></center>
";
        }
        // line 26
        echo "</br>
";
        // line 28
        echo "<center><div class=\"d-grid gap-2\" style=\"width:10%\">
  <button class=\"btn btn-lg btn-primary\" type=\"button\" onclick=\"window.location.href='/avis/ajouter';\">Écrire un avis</button>
</div></center>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "avis/avisListe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 28,  112 => 26,  107 => 23,  94 => 17,  89 => 15,  83 => 12,  79 => 9,  75 => 8,  73 => 7,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Avis{% endblock %}

{% block body %}
{# Foreach sur chaque avis #}
{% if avis|length != 0 %}
{% for A in avis %}
<div style=\"margin-left:7%; margin-left:7%; margin-top:3%\">
<div class=\"card border-secondary mb-3\" style=\"max-width: 80rem;\">
  {# Ajoute le nom d'utilisateur #}
  <div class=\"card-header\" style=\"font-size:20px;\">Avis de {{ A.nomUser }}</div>
  <div class=\"card-body\">
    {# Ajoute titre de l'avis #}
    <h4 class=\"card-title\">Titre : {{ A.titre }}</h4>
    {# Ajoute commentaire de l'avis avis nl2br pour les caractères d'échappemnts #}
    <p class=\"card-text\">Commentaire : {{ A.commentaire|nl2br }}</p>
  </div>
</div>
</div>
{% endfor %}
{% else %}
</br>
<center><h1>Aucun avis disponible</h1></center>
{% endif %}
</br>
{# Bouton pour ajouter un avis #}
<center><div class=\"d-grid gap-2\" style=\"width:10%\">
  <button class=\"btn btn-lg btn-primary\" type=\"button\" onclick=\"window.location.href='/avis/ajouter';\">Écrire un avis</button>
</div></center>
{% endblock %}
", "avis/avisListe.html.twig", "C:\\Workspace\\AP1Comeleon\\Comeleon\\templates\\avis\\avisListe.html.twig");
    }
}
