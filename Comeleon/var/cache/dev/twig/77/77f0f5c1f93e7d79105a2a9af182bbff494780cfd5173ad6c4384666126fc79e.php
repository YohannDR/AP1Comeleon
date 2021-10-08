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

/* contact/contact.html.twig */
class __TwigTemplate_812c300ae3b46f2b5788c619478a751fdde2b3dc4c452abbc5b661c0b2868ead extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div class=\"container\">
    <h1>Page de contact</h1>
";
        // line 18
        echo "
    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
    <br>

    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), 'row', ["attr" => ["placeholder" => "Votre nom"]]);
        echo "
<br>
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 24, $this->source); })()), "prenom", [], "any", false, false, false, 24), 'row', ["attr" => ["placeholder" => "Votre prénom"]]);
        echo "
<br>
    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 26, $this->source); })()), "mail", [], "any", false, false, false, 26), 'row', ["attr" => ["placeholder" => "Votre Email"]]);
        echo "
<br>
    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 28, $this->source); })()), "telephone", [], "any", false, false, false, 28), 'row', ["attr" => ["placeholder" => "Votre numéro de téléphone"]]);
        echo "
<br>
    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), 'row', ["attr" => ["placeholder" => "Votre message"]]);
        echo "

    <br><br>

    <button type=\"submit\" class=\"btn btn-success\">Envoyer le message</button>

    ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new RuntimeError('Variable "formContact" does not exist.', 36, $this->source); })()), 'form_end');
        echo "
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contact/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 36,  93 => 30,  88 => 28,  83 => 26,  78 => 24,  73 => 22,  67 => 19,  64 => 18,  59 => 5,  52 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}

<div class=\"container\">
    <h1>Page de contact</h1>
{#
    <form method=\"post\" action=\"\">
        <input type=\"text\" name=\"nom\" placeholder=\"Votre nom\">
        <input type=\"text\" name=\"prenom\" placeholder=\"Votre prénom\">
        <input type=\"text\" name=\"mail\" placeholder=\"Votre email\">
        <input type=\"text\" name=\"telephone\" placeholder=\"Votre numéro de téléphone\">
        <textarea name=\"description\" placeholder=\"Votre message\"></textarea>
        <button type=\"submit\">Enregitrer</button>
    </form
    #}

    {{ form_start(formContact) }}
    <br>

    {{ form_row(formContact.nom, {'attr': {placeholder: \"Votre nom\"}}) }}
<br>
    {{ form_row(formContact.prenom, {'attr': {placeholder: \"Votre prénom\"}}) }}
<br>
    {{ form_row(formContact.mail, {'attr': {placeholder: \"Votre Email\"}}) }}
<br>
    {{ form_row(formContact.telephone, {'attr': {placeholder: \"Votre numéro de téléphone\"}}) }}
<br>
    {{ form_row(formContact.description, {'attr': {placeholder: \"Votre message\"}}) }}

    <br><br>

    <button type=\"submit\" class=\"btn btn-success\">Envoyer le message</button>

    {{ form_end(formContact) }}
    </div>

{% endblock %}
", "contact/contact.html.twig", "C:\\Users\\gaudreem\\Desktop\\AP1Comeleon\\Comeleon\\templates\\contact\\contact.html.twig");
    }
}
