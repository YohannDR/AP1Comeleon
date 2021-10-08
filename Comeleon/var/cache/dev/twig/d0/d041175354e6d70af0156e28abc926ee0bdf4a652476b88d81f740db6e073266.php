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
    <section class=\"centrer\">
        <h2> ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prestation"]) || array_key_exists("prestation", $context) ? $context["prestation"] : (function () { throw new RuntimeError('Variable "prestation" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</h2>
        <br>
        <div class=\"metadata\">Ecrit le ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prestation"]) || array_key_exists("prestation", $context) ? $context["prestation"] : (function () { throw new RuntimeError('Variable "prestation" does not exist.', 9, $this->source); })()), "createdAt", [], "any", false, false, false, 9), "d/m/Y"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prestation"]) || array_key_exists("prestation", $context) ? $context["prestation"] : (function () { throw new RuntimeError('Variable "prestation" does not exist.', 9, $this->source); })()), "createdAt", [], "any", false, false, false, 9), "H:i"), "html", null, true);
        echo "
            Dans la catégorie ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["prestation"]) || array_key_exists("prestation", $context) ? $context["prestation"] : (function () { throw new RuntimeError('Variable "prestation" does not exist.', 10, $this->source); })()), "categorie", [], "any", false, false, false, 10), "title", [], "any", false, false, false, 10), "html", null, true);
        echo " </div>
            <div class=\"content\">
                <img src=\" ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prestation"]) || array_key_exists("prestation", $context) ? $context["prestation"] : (function () { throw new RuntimeError('Variable "prestation" does not exist.', 12, $this->source); })()), "image", [], "any", false, false, false, 12), "html", null, true);
        echo " \">
                <br><br>
                ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prestation"]) || array_key_exists("prestation", $context) ? $context["prestation"] : (function () { throw new RuntimeError('Variable "prestation" does not exist.', 14, $this->source); })()), "description", [], "any", false, false, false, 14), "html", null, true);
        echo "
            </div>
            <br><br>
            <p>Prix : ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["prestation"]) || array_key_exists("prestation", $context) ? $context["prestation"] : (function () { throw new RuntimeError('Variable "prestation" does not exist.', 17, $this->source); })()), "price", [], "any", false, false, false, 17), "html", null, true);
        echo " €</p>
            <br>
            <form method=\"post\" action=\"/prestation\">
                <button type=\"submit\" class=\"btn btn-secondary\">Retour</button>
            </form>
            <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["prestation"]) || array_key_exists("prestation", $context) ? $context["prestation"] : (function () { throw new RuntimeError('Variable "prestation" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)]), "html", null, true);
        echo "\" class=\"btn btn-success float-right\">
                <i class=\"fas fa-shopping-cart mr-1\"></i>Ajouter au panier
            </a>

            <br><br><br><br><br>
    </section>
    Commentaires
    <br><br><br><br><br><br>
    <section id=\"commentaire\">
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["prestation"]) || array_key_exists("prestation", $context) ? $context["prestation"] : (function () { throw new RuntimeError('Variable "prestation" does not exist.', 31, $this->source); })()), "commentaires", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 32
            echo "        <div class=\"commentaire\">
            <div class=\"row\">
                <div class=\"col-3\">
                    ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "author", [], "any", false, false, false, 35), "html", null, true);
            echo " (<small>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "createdAt", [], "any", false, false, false, 35), "d/m/Y à H:i"), "html", null, true);
            echo "</small>)
                </div>
            <div class=\"col\">
                ";
            // line 38
            echo twig_get_attribute($this->env, $this->source, $context["commentaire"], "content", [], "any", false, false, false, 38);
            echo "
            </div>
        </div>
        <br><br>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </section>
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
        return array (  140 => 44,  128 => 38,  120 => 35,  115 => 32,  111 => 31,  99 => 22,  91 => 17,  85 => 14,  80 => 12,  75 => 10,  69 => 9,  64 => 7,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"container\">
    <section class=\"centrer\">
        <h2> {{ prestation.title }}</h2>
        <br>
        <div class=\"metadata\">Ecrit le {{ prestation.createdAt | date('d/m/Y') }} à {{ prestation.createdAt | date('H:i') }}
            Dans la catégorie {{ prestation.categorie.title }} </div>
            <div class=\"content\">
                <img src=\" {{ prestation.image }} \">
                <br><br>
                {{ prestation.description }}
            </div>
            <br><br>
            <p>Prix : {{ prestation.price }} €</p>
            <br>
            <form method=\"post\" action=\"/prestation\">
                <button type=\"submit\" class=\"btn btn-secondary\">Retour</button>
            </form>
            <a href=\"{{ path('cart_add', {'id': prestation.id}) }}\" class=\"btn btn-success float-right\">
                <i class=\"fas fa-shopping-cart mr-1\"></i>Ajouter au panier
            </a>

            <br><br><br><br><br>
    </section>
    Commentaires
    <br><br><br><br><br><br>
    <section id=\"commentaire\">
    {% for commentaire in prestation.commentaires %}
        <div class=\"commentaire\">
            <div class=\"row\">
                <div class=\"col-3\">
                    {{ commentaire.author }} (<small>{{commentaire.createdAt | date('d/m/Y à H:i') }}</small>)
                </div>
            <div class=\"col\">
                {{commentaire.content | raw }}
            </div>
        </div>
        <br><br>
</div>
{% endfor %}
    </section>
</div>

{% endblock %}", "prestation/show.html.twig", "C:\\Users\\gaudreem\\Desktop\\AP1Comeleon\\Comeleon\\templates\\prestation\\show.html.twig");
    }
}
