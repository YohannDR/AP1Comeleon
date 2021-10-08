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

/* prestation/_card.html.twig */
class __TwigTemplate_55f12c5f5adcea46269e444d6b48d141974dc0774c7e72f1611d7965b33c68dd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prestation/_card.html.twig"));

        // line 1
        echo "<div class=\"card\">
    <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prestation"]) || array_key_exists("prestation", $context) ? $context["prestation"] : (function () { throw new RuntimeError('Variable "prestation" does not exist.', 2, $this->source); })()), "image", [], "any", false, false, false, 2), "html", null, true);
        echo "\" alt=\"\" class=\"card-img-top\">
    <div class=\"card-body\">
        <h5 class=\"card-title\">";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prestation"]) || array_key_exists("prestation", $context) ? $context["prestation"] : (function () { throw new RuntimeError('Variable "prestation" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), "html", null, true);
        echo "</h5>
        <div class=\"card-title\">
            <p>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prestation"]) || array_key_exists("prestation", $context) ? $context["prestation"] : (function () { throw new RuntimeError('Variable "prestation" does not exist.', 6, $this->source); })()), "price", [], "any", false, false, false, 6), "html", null, true);
        echo " €</p>
        </div>
        <p class=\"text text-muted\"> ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prestation"]) || array_key_exists("prestation", $context) ? $context["prestation"] : (function () { throw new RuntimeError('Variable "prestation" does not exist.', 8, $this->source); })()), "description", [], "any", false, false, false, 8), "html", null, true);
        echo "</p>
    </div>
    <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prestation_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["prestation"]) || array_key_exists("prestation", $context) ? $context["prestation"] : (function () { throw new RuntimeError('Variable "prestation" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Voir la prestation</a>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "prestation/_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 10,  58 => 8,  53 => 6,  48 => 4,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\">
    <img src=\"{{ prestation.image }}\" alt=\"\" class=\"card-img-top\">
    <div class=\"card-body\">
        <h5 class=\"card-title\">{{ prestation.title }}</h5>
        <div class=\"card-title\">
            <p>{{ prestation.price }} €</p>
        </div>
        <p class=\"text text-muted\"> {{ prestation.description }}</p>
    </div>
    <a href=\"{{ path('prestation_show', {'id': prestation.id}) }}\" class=\"btn btn-primary\">Voir la prestation</a>
</div>", "prestation/_card.html.twig", "C:\\Users\\gaudreem\\Desktop\\AP1Comeleon\\Comeleon\\templates\\prestation\\_card.html.twig");
    }
}
