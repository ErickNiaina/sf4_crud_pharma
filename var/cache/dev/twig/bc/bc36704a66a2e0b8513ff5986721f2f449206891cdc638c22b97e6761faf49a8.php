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

/* default/navbar.html.twig */
class __TwigTemplate_7846f1b35b238ab09cac1ed06dc6c4ac27a2c596f94658363472ccc541d9beb8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/navbar.html.twig"));

        // line 1
        echo "<nav class=\"main-header navbar navbar-expand ";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "getHost", [], "method", false, false, false, 1) == "openflex.admin")) ? ("navbar-gray-dark") : ("navbar-success"));
        echo " navbar-dark\">
    <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
            <a class=\"nav-link d-lg-none\" data-widget=\"pushmenu\" href=\"#\"><img src=\"\" alt=\"\"></a>
        </li>
        <li class=\"nav-item d-none d-sm-none d-md-inline-block\">
            <a href=\"\" class=\"nav-link\">PHARMAPLUS</a>
        </li>
    </ul>

    <div class=\"ml-auto\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item \">
                <a href=\"\" class=\"nav-link\"><i class=\"fas fa-arrow-left\"></i> <span class=\"d-none d-sm-none d-md-inline-block\">Accueil</span></a>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                    <i class=\"fas fa-user\"></i> &nbsp;
                    <span class=\"d-none d-sm-none d-md-inline-block\">";
        // line 19
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 19), "username", [], "any", true, true, false, 19)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "username", [], "any", false, false, false, 19), "html", null, true);
            echo "</span>
                        ";
        } else {
            // line 21
            echo "                        Anonymous
                        ";
        }
        // line 23
        echo "                </a>
                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"";
        // line 26
        echo "\" class=\"dropdown-item dropdown-footer\">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 26,  76 => 23,  72 => 21,  65 => 19,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"main-header navbar navbar-expand {{ app.request.getHost() == 'openflex.admin' ? 'navbar-gray-dark' : 'navbar-success' }} navbar-dark\">
    <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
            <a class=\"nav-link d-lg-none\" data-widget=\"pushmenu\" href=\"#\"><img src=\"\" alt=\"\"></a>
        </li>
        <li class=\"nav-item d-none d-sm-none d-md-inline-block\">
            <a href=\"\" class=\"nav-link\">PHARMAPLUS</a>
        </li>
    </ul>

    <div class=\"ml-auto\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item \">
                <a href=\"\" class=\"nav-link\"><i class=\"fas fa-arrow-left\"></i> <span class=\"d-none d-sm-none d-md-inline-block\">Accueil</span></a>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                    <i class=\"fas fa-user\"></i> &nbsp;
                    <span class=\"d-none d-sm-none d-md-inline-block\">{% if app.user.username is defined %} {{app.user.username}}</span>
                        {% else %}
                        Anonymous
                        {% endif %}
                </a>
                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"{#{path('app_logout')}#}\" class=\"dropdown-item dropdown-footer\">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>", "default/navbar.html.twig", "/var/www/html/eric/psi/templates/default/navbar.html.twig");
    }
}
