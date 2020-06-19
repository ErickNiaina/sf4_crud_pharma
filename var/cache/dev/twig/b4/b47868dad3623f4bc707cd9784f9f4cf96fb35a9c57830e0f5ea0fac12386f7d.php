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

/* menu/famille_categorie.html.twig */
class __TwigTemplate_eab465928431fb480ea9dd3bdb7140802f2e29e962e28e0b010f13bfa25658fa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu/famille_categorie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu/famille_categorie.html.twig"));

        // line 1
        echo "<li class=\"nav-item has-treeview menu-open\">
    <a href=\"#\" class=\"nav-link\" style=\"background-color:yellowgreen;\">
        <i class=\"nav-icon fas  fa-bookmark\"></i>
        <p>
            Famille-Categorie
            <i class=\"right fas fa-angle-left\"></i>
        </p>
    </a>
    <ul class=\"nav nav-treeview sous-menu-sidebar-left\">
        <li class=\"nav-item\">
            <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("family_add");
        echo "\" class=\"nav-link\">
                <i class=\"nav-icon fas fa-plus-circle\"></i>
                <p>Ajouter famille</p>
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("family");
        echo "\" class=\"nav-link\">
                <i class=\"fas fa-list-alt\"></i>
                <p>Listes des familles</p>
            </a>
        </li>
    </ul>
</li>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "menu/famille_categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 17,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<li class=\"nav-item has-treeview menu-open\">
    <a href=\"#\" class=\"nav-link\" style=\"background-color:yellowgreen;\">
        <i class=\"nav-icon fas  fa-bookmark\"></i>
        <p>
            Famille-Categorie
            <i class=\"right fas fa-angle-left\"></i>
        </p>
    </a>
    <ul class=\"nav nav-treeview sous-menu-sidebar-left\">
        <li class=\"nav-item\">
            <a href=\"{{path('family_add')}}\" class=\"nav-link\">
                <i class=\"nav-icon fas fa-plus-circle\"></i>
                <p>Ajouter famille</p>
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"{{path('family')}}\" class=\"nav-link\">
                <i class=\"fas fa-list-alt\"></i>
                <p>Listes des familles</p>
            </a>
        </li>
    </ul>
</li>", "menu/famille_categorie.html.twig", "/var/www/html/eric/psi/templates/menu/famille_categorie.html.twig");
    }
}
