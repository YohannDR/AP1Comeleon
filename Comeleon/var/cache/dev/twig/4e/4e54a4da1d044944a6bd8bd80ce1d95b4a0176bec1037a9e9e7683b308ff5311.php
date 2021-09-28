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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formPresta"]) || array_key_exists("formPresta", $context) ? $context["formPresta"] : (function () { throw new RuntimeError('Variable "formPresta" does not exist.', 3, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
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
    <h1>Création d'une prestation !</h1>

    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPresta"]) || array_key_exists("formPresta", $context) ? $context["formPresta"] : (function () { throw new RuntimeError('Variable "formPresta" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
    
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPresta"]) || array_key_exists("formPresta", $context) ? $context["formPresta"] : (function () { throw new RuntimeError('Variable "formPresta" does not exist.', 11, $this->source); })()), "titre", [], "any", false, false, false, 11), 'row', ["attr" => ["placeholder" => "Titre de la prestation"]]);
        echo "

    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPresta"]) || array_key_exists("formPresta", $context) ? $context["formPresta"] : (function () { throw new RuntimeError('Variable "formPresta" does not exist.', 13, $this->source); })()), "image", [], "any", false, false, false, 13), 'row', ["attr" => ["placeholder" => "URL de l'image"]]);
        echo "

    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPresta"]) || array_key_exists("formPresta", $context) ? $context["formPresta"] : (function () { throw new RuntimeError('Variable "formPresta" does not exist.', 15, $this->source); })()), "description", [], "any", false, false, false, 15), 'row', ["attr" => ["placeholder" => "Description de la prestation"]]);
        echo "



    <br>
    <button type=\"submit\" class=\"btn btn-success\">
        ";
        // line 21
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 21, $this->source); })())) {
            // line 22
            echo "            Enregistrer les modifications
        ";
        } else {
            // line 24
            echo "            Ajouter l'article
        ";
        }
        // line 26
        echo "    </button>

    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPresta"]) || array_key_exists("formPresta", $context) ? $context["formPresta"] : (function () { throw new RuntimeError('Variable "formPresta" does not exist.', 28, $this->source); })()), 'form_end');
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
        return array (  105 => 28,  101 => 26,  97 => 24,  93 => 22,  91 => 21,  82 => 15,  77 => 13,  72 => 11,  67 => 9,  62 => 6,  55 => 5,  47 => 1,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% form_theme formPresta 'bootstrap_4_layout.html.twig' %}

{% block body %}

    <h1>Création d'une prestation !</h1>

    {{ form_start(formPresta) }}
    
    {{ form_row(formPresta.titre, {'attr': {'placeholder': \"Titre de la prestation\" }}) }}

    {{ form_row(formPresta.image, {'attr': {'placeholder': \"URL de l'image\" }}) }}

    {{ form_row(formPresta.description, {'attr': {'placeholder': \"Description de la prestation\" }}) }}



    <br>
    <button type=\"submit\" class=\"btn btn-success\">
        {% if editMode %}
            Enregistrer les modifications
        {% else %}
            Ajouter l'article
        {% endif %}
    </button>

    {{ form_end(formPresta) }}

{% endblock %}
", "prestation/create.html.twig", "C:\\Users\\Marvine Gaudrée\\OneDrive - Établissement Saint-Adjutor\\AP\\AP1\\AP1Comeleon\\Comeleon\\templates\\prestation\\create.html.twig");
    }
}
