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

/* cart/index.html.twig */
class __TwigTemplate_c39dc84dd8cf79c801ceb5349b214916d56a86f53cafac1d7a403dfd69a99f6a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"bg-light blue p-3\">
    <h1>Votre panier</h1>
</div>

";
        // line 13
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 13, $this->source); })())), 0))) {
            // line 14
            echo "    <table class=\"table\">
        <thead>
            <tr>
                <th>Prestation</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Total</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 26
                echo "                <tr>
                    <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "prestations", [], "any", false, false, false, 27), "title", [], "any", false, false, false, 27), "html", null, true);
                echo "</td>
                    <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "prestations", [], "any", false, false, false, 28), "price", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
                    <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 29), "html", null, true);
                echo "</td>
                    <td>";
                // line 30
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "prestations", [], "any", false, false, false, 30), "price", [], "any", false, false, false, 30) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 30)), "html", null, true);
                echo " € </td>
                    <td>
                        <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "prestations", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32)]), "html", null, true);
                echo "\" class=\"btn btn-danger btn-sm\">Supprimer
                            <i class=\"fas fa-trash\"></i>
                        </a>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "        </tbody>
        <tfoot>
            <tr>
                <td colspan=\"3\" class=\"text-right\">Total :</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 42, $this->source); })()), "html", null, true);
            echo " €</td>
                <td></td>
            </tr>
        </tfoot>
    </table>
";
        } else {
            // line 48
            echo "    <p>Votre panier est vide.</p>
";
        }
        // line 50
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 50,  136 => 48,  127 => 42,  121 => 38,  109 => 32,  104 => 30,  100 => 29,  96 => 28,  92 => 27,  89 => 26,  85 => 25,  72 => 14,  70 => 13,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"bg-light blue p-3\">
    <h1>Votre panier</h1>
</div>

{% if items | length > 0 %}
    <table class=\"table\">
        <thead>
            <tr>
                <th>Prestation</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Total</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {% for item in items %}
                <tr>
                    <td>{{ item.prestations.title }}</td>
                    <td>{{ item.prestations.price }}</td>
                    <td>{{ item.quantity }}</td>
                    <td>{{ item.prestations.price * item.quantity }} € </td>
                    <td>
                        <a href=\"{{ path('cart_remove', {'id' : item.prestations.id}) }}\" class=\"btn btn-danger btn-sm\">Supprimer
                            <i class=\"fas fa-trash\"></i>
                        </a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
        <tfoot>
            <tr>
                <td colspan=\"3\" class=\"text-right\">Total :</td>
                <td>{{ total }} €</td>
                <td></td>
            </tr>
        </tfoot>
    </table>
{% else %}
    <p>Votre panier est vide.</p>
{% endif %}

{% endblock %}
", "cart/index.html.twig", "C:\\Users\\gaudreem\\Desktop\\AP1Comeleon\\Comeleon\\templates\\cart\\index.html.twig");
    }
}
