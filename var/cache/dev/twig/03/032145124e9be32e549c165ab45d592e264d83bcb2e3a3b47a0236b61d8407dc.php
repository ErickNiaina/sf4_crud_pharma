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

/* default/sidebar.html.twig */
class __TwigTemplate_7717f9fd2695404306e440326432aae401b3f4c609cf620c3076949338d2c041 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/sidebar.html.twig"));

        // line 1
        echo "<aside class=\"main-sidebar sidebar-light-primary elevation-1\">
    <a href=\"#\" class=\"brand-link\" data-widget=\"pushmenu\">
        <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/images/med.jpg\" alt=\"Bio\" width=\"50%\" height=\"30%\">
        <span class=\"brand-text font-weight-light title-text\" style=\"visibility: hidden;\">pharmaco</span>
    </a>
  
    <div class=\"sidebar\">
        <nav class=\"mt-2 menu-sidebar-left\">
            <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                ";
        // line 10
        $this->loadTemplate("menu/categorie.html.twig", "default/sidebar.html.twig", 10)->display($context);
        // line 11
        echo "                ";
        $this->loadTemplate("menu/laboratoire.html.twig", "default/sidebar.html.twig", 11)->display($context);
        // line 12
        echo "                ";
        $this->loadTemplate("menu/produit.html.twig", "default/sidebar.html.twig", 12)->display($context);
        // line 13
        echo "                ";
        $this->loadTemplate("menu/famille_categorie.html.twig", "default/sidebar.html.twig", 13)->display($context);
        // line 14
        echo "                ";
        $this->loadTemplate("menu/user.html.twig", "default/sidebar.html.twig", 14)->display($context);
        // line 15
        echo "            </ul>
        </nav>
  
        
    </div>
   
  </aside>
  <aside class=\"control-sidebar control-sidebar-light\">
      <div class=\"\">
          <ul id=\"menu-right-mobile\" class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"true\">
              <li class=\"nav-item has-treeview menu-open\">
                      <li class=\"nav-item\">
                          <a href=\"\" class=\"nav-link active\">PHARMAPLUS</a>
                      </li>
              </li>
          </ul>
      </div>
  </aside>
  ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 15,  68 => 14,  65 => 13,  62 => 12,  59 => 11,  57 => 10,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<aside class=\"main-sidebar sidebar-light-primary elevation-1\">
    <a href=\"#\" class=\"brand-link\" data-widget=\"pushmenu\">
        <img src=\"{{server_url()}}/images/med.jpg\" alt=\"Bio\" width=\"50%\" height=\"30%\">
        <span class=\"brand-text font-weight-light title-text\" style=\"visibility: hidden;\">pharmaco</span>
    </a>
  
    <div class=\"sidebar\">
        <nav class=\"mt-2 menu-sidebar-left\">
            <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                {% include 'menu/categorie.html.twig' %}
                {% include 'menu/laboratoire.html.twig' %}
                {% include 'menu/produit.html.twig' %}
                {% include 'menu/famille_categorie.html.twig' %}
                {% include 'menu/user.html.twig' %}
            </ul>
        </nav>
  
        
    </div>
   
  </aside>
  <aside class=\"control-sidebar control-sidebar-light\">
      <div class=\"\">
          <ul id=\"menu-right-mobile\" class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"true\">
              <li class=\"nav-item has-treeview menu-open\">
                      <li class=\"nav-item\">
                          <a href=\"\" class=\"nav-link active\">PHARMAPLUS</a>
                      </li>
              </li>
          </ul>
      </div>
  </aside>
  ", "default/sidebar.html.twig", "/var/www/html/eric/psi/templates/default/sidebar.html.twig");
    }
}
