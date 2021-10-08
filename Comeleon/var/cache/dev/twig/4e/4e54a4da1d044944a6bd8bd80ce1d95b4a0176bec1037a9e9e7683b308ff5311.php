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

/* prestation/create.html.twig */
class __TwigTemplate_5c916a4483715865ec4e1015e0121dfb11fd559d8d5ed3de3da54c999061dfec extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prestation/create.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formPrestation"]) || array_key_exists("formPrestation", $context) ? $context["formPrestation"] : (function () { throw new RuntimeError('Variable "formPrestation" does not exist.', 3, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "prestation/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <h1>";
        // line 7
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "            Modifier
        ";
        } else {
            // line 10
            echo "            Ajouter la prestation
        ";
        }
        // line 11
        echo "</h1>

    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPrestation"]) || array_key_exists("formPrestation", $context) ? $context["formPrestation"] : (function () { throw new RuntimeError('Variable "formPrestation" does not exist.', 13, $this->source); })()), 'form_start');
        echo "

    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPrestation"]) || array_key_exists("formPrestation", $context) ? $context["formPrestation"] : (function () { throw new RuntimeError('Variable "formPrestation" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), 'row', ["attr" => ["placeholder" => "Titre de la prestation"]]);
        echo "

    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPrestation"]) || array_key_exists("formPrestation", $context) ? $context["formPrestation"] : (function () { throw new RuntimeError('Variable "formPrestation" does not exist.', 17, $this->source); })()), "categorie", [], "any", false, false, false, 17), 'row');
        echo "

    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPrestation"]) || array_key_exists("formPrestation", $context) ? $context["formPrestation"] : (function () { throw new RuntimeError('Variable "formPrestation" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19), 'row', ["attr" => ["placeholder" => "Description de la prestation"]]);
        echo "
   
    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPrestation"]) || array_key_exists("formPrestation", $context) ? $context["formPrestation"] : (function () { throw new RuntimeError('Variable "formPrestation" does not exist.', 21, $this->source); })()), "image", [], "any", false, false, false, 21), 'row', ["attr" => ["placeholder" => "URL de l'image"]]);
        echo "

    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPrestation"]) || array_key_exists("formPrestation", $context) ? $context["formPrestation"] : (function () { throw new RuntimeError('Variable "formPrestation" does not exist.', 23, $this->source); })()), "price", [], "any", false, false, false, 23), 'row', ["attr" => ["placeholder" => "Prix de la prestation"]]);
        echo "

    <br>
    <button type=\"submit\" class=\"btn btn-success\">
        ";
        // line 27
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 27, $this->source); })())) {
            // line 28
            echo "            Enregistrer les modifications
        ";
        } else {
            // line 30
            echo "            Ajouter la prestation
        ";
        }
        // line 32
        echo "    </button>

    ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPrestation"]) || array_key_exists("formPrestation", $context) ? $context["formPrestation"] : (function () { throw new RuntimeError('Variable "formPrestation" does not exist.', 34, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "prestation/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 34,  121 => 32,  117 => 30,  113 => 28,  111 => 27,  104 => 23,  99 => 21,  94 => 19,  89 => 17,  84 => 15,  79 => 13,  75 => 11,  71 => 10,  67 => 8,  65 => 7,  62 => 6,  55 => 5,  47 => 1,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% form_theme formPrestation 'bootstrap_4_layout.html.twig' %}

{% block body %}

    <h1>{% if editMode %}
            Modifier
        {% else %}
            Ajouter la prestation
        {% endif %}</h1>

    {{ form_start(formPrestation) }}

    {{ form_row(formPrestation.title, {'attr': {'placeholder': \"Titre de la prestation\"}} ) }}

    {{ form_row(formPrestation.categorie) }}

    {{ form_row(formPrestation.description, {'attr': {'placeholder': \"Description de la prestation\"}} ) }}
   
    {{ form_row(formPrestation.image, {'attr': {'placeholder': \"URL de l'image\"}} ) }}

    {{form_row(formPrestation.price, {'attr': {'placeholder': \"Prix de la prestation\"}} ) }}

    <br>
    <button type=\"submit\" class=\"btn btn-success\">
        {% if editMode %}
            Enregistrer les modifications
        {% else %}
            Ajouter la prestation
        {% endif %}
    </button>

    {{ form_end(formPrestation) }}

{% endblock %}", "prestation/create.html.twig", "C:\\Users\\gaudreem\\Desktop\\AP1Comeleon\\Comeleon\\templates\\prestation\\create.html.twig");
    }
}
