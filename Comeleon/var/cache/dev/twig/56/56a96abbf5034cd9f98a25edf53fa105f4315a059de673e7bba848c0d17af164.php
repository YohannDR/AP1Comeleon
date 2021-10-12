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

/* base.html.twig */
class __TwigTemplate_d4ae7e384ff0898b69c83daba9867402a24633d9c7068d8ed74070caa78d4229 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
<<<<<<< HEAD
        // line 11
        echo "
        ";
        // line 12
=======
        // line 12
        echo "        ";
>>>>>>> origin/feature-PagePrestation
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </head>
    <body>
<<<<<<< HEAD
<<<<<<< HEAD
                <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <div class=\"container-fluid\">
=======
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"#\">Accueil</a>
>>>>>>> feature-PageAvis
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"navbar-nav me-auto\">
                <li class=\"nav-item\">
<<<<<<< HEAD
                <a class=\"nav-link active\" href=\"/\">Accueil
                    <span class=\"visually-hidden\">(current)</span>
                </a>
                </li>
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/presentation\">Présentation</a>
                </li>
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/prestation\">Prestation</a>
                </li>
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/avis\">Avis</a>
=======
                <a class=\"nav-link\" href=\"#\">Présentation</a>
                </li>
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Prestation</a>
                </li>
                <li class=\"nav-item dropdown\"><a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Avis</a>
                <div class=\"dropdown-menu\">
                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                    <a class=\"dropdown-item\" href=\"#\">Another action</a>
                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                    </div>
>>>>>>> feature-PageAvis
                </li>
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Contact</a>
                </li>
            </ul>
            </div>
        </div>
<<<<<<< HEAD
        </nav>
        ";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 48
=======
    </nav>
    ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 50
>>>>>>> feature-PageAvis
        echo "    </body>
</html>";
=======
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
  <div class=\"container-fluid\">
    
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
      <ul class=\"navbar-nav me-auto\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"/\">Accueil
            <span class=\"visually-hidden\">(current)</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/prestation\">Prestations</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/contact\">Contact</a>
        </li>
        
      </ul>
     
    </div>
  </div>
</nav>
        ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "    </body>
    <style>
          .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
          }
        </style>
</html>
";
>>>>>>> origin/feature-PagePrestation
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
<<<<<<< HEAD
        echo "            <link rel=\"stylesheet\" href=\"../asset/css/bootstrap.css\"/>
=======
        echo "            ";
        // line 10
        echo "            <link rel=\"stylesheet\" href=\"/asset/css/bootstrap.css\"/>
>>>>>>> origin/feature-PagePrestation
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "            ";
        // line 14
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

<<<<<<< HEAD
<<<<<<< HEAD
    // line 46
=======
    // line 48
>>>>>>> feature-PageAvis
=======
    // line 43
>>>>>>> origin/feature-PagePrestation
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

<<<<<<< HEAD
<<<<<<< HEAD
        // line 47
        echo "        ";
=======
        // line 49
        echo "    ";
>>>>>>> feature-PageAvis
=======
>>>>>>> origin/feature-PagePrestation
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return array (  156 => 47,  149 => 46,  142 => 14,  140 => 13,  133 => 12,  125 => 9,  118 => 8,  105 => 5,  97 => 48,  95 => 46,  62 => 15,  60 => 12,  57 => 11,  54 => 8,  50 => 5,  44 => 1,);
=======
        return array (  158 => 49,  151 => 48,  144 => 14,  142 => 13,  135 => 12,  127 => 9,  120 => 8,  107 => 5,  99 => 50,  97 => 48,  62 => 15,  60 => 12,  57 => 11,  54 => 8,  50 => 5,  44 => 1,);
>>>>>>> feature-PageAvis
=======
        return array (  154 => 43,  147 => 14,  145 => 13,  138 => 12,  130 => 10,  128 => 9,  121 => 8,  108 => 5,  92 => 44,  90 => 43,  60 => 15,  57 => 12,  54 => 8,  50 => 5,  44 => 1,);
>>>>>>> origin/feature-PagePrestation
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
        {% block stylesheets %}
<<<<<<< HEAD
            <link rel=\"stylesheet\" href=\"../asset/css/bootstrap.css\"/>
        {% endblock %}

=======
            {#{{ encore_entry_link_tags('app') }}#}
            <link rel=\"stylesheet\" href=\"/asset/css/bootstrap.css\"/>
        {% endblock %}
>>>>>>> origin/feature-PagePrestation
        {% block javascripts %}
            {#{{ encore_entry_script_tags('app') }}#}
        {% endblock %}
    </head>
    <body>
<<<<<<< HEAD
<<<<<<< HEAD
                <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <div class=\"container-fluid\">
=======
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"#\">Accueil</a>
>>>>>>> feature-PageAvis
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"navbar-nav me-auto\">
                <li class=\"nav-item\">
<<<<<<< HEAD
                <a class=\"nav-link active\" href=\"/\">Accueil
                    <span class=\"visually-hidden\">(current)</span>
                </a>
                </li>
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/presentation\">Présentation</a>
                </li>
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/prestation\">Prestation</a>
                </li>
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/avis\">Avis</a>
=======
                <a class=\"nav-link\" href=\"#\">Présentation</a>
                </li>
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Prestation</a>
                </li>
                <li class=\"nav-item dropdown\"><a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Avis</a>
                <div class=\"dropdown-menu\">
                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                    <a class=\"dropdown-item\" href=\"#\">Another action</a>
                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                    </div>
>>>>>>> feature-PageAvis
                </li>
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Contact</a>
                </li>
            </ul>
            </div>
        </div>
<<<<<<< HEAD
        </nav>
        {% block body %}
        {% endblock %}
    </body>
</html>", "base.html.twig", "C:\\Users\\Marvine Gaudrée\\OneDrive - Établissement Saint-Adjutor\\AP\\AP1\\AP1Comeleon\\Comeleon\\templates\\base.html.twig");
=======
    </nav>
    {% block body %}
    {% endblock %}
    </body>
</html>", "base.html.twig", "C:\\Workspace\\AP1Comeleon\\Comeleon\\templates\\base.html.twig");
>>>>>>> feature-PageAvis
=======
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
  <div class=\"container-fluid\">
    
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
      <ul class=\"navbar-nav me-auto\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"/\">Accueil
            <span class=\"visually-hidden\">(current)</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/prestation\">Prestations</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/contact\">Contact</a>
        </li>
        
      </ul>
     
    </div>
  </div>
</nav>
        {% block body %}{% endblock %}
    </body>
    <style>
          .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
          }
        </style>
</html>
", "base.html.twig", "C:\\Users\\gaudreem\\Desktop\\AP1Comeleon\\Comeleon\\templates\\base.html.twig");
>>>>>>> origin/feature-PagePrestation
    }
}
