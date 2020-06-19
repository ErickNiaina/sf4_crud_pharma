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

/* menu/produit.html.twig */
class __TwigTemplate_f341a3758bb28ef24e4d0f74109c383a0f3d5d9f0cc150b15992f3c73e02419e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu/produit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu/produit.html.twig"));

        // line 1
        echo "<li class=\"nav-item has-treeview menu-open\">
    <a href=\"#\" class=\"nav-link\" style=\"background-color:yellowgreen;\">
        ";
        // line 4
        echo "        <i class=\"nav-icon fas  fa-industry\"></i>
        <p>
            Produit
            <i class=\"right fas fa-angle-left\"></i>
        </p>
    </a>
    <ul class=\"nav nav-treeview sous-menu-sidebar-left\">
        <li class=\"nav-item\">
            <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_product");
        echo "\" class=\"nav-link\">
                <i class=\"nav-icon fas fa-plus-circle\"></i>
                <p>Ajouter produit</p>
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product");
        echo "\" class=\"nav-link\">
                <i class=\"fas fa-list-alt\"></i>
                <p>Listes des produits</p>
            </a>
        </li>
    </ul>
</li>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "menu/produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  57 => 12,  47 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<li class=\"nav-item has-treeview menu-open\">
    <a href=\"#\" class=\"nav-link\" style=\"background-color:yellowgreen;\">
        {# <i class=\"nav-icon fas fa-th\"></i> #}
        <i class=\"nav-icon fas  fa-industry\"></i>
        <p>
            Produit
            <i class=\"right fas fa-angle-left\"></i>
        </p>
    </a>
    <ul class=\"nav nav-treeview sous-menu-sidebar-left\">
        <li class=\"nav-item\">
            <a href=\"{{path('add_product')}}\" class=\"nav-link\">
                <i class=\"nav-icon fas fa-plus-circle\"></i>
                <p>Ajouter produit</p>
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"{{path('product')}}\" class=\"nav-link\">
                <i class=\"fas fa-list-alt\"></i>
                <p>Listes des produits</p>
            </a>
        </li>
    </ul>
</li>", "menu/produit.html.twig", "/var/www/html/eric/psi/templates/menu/produit.html.twig");
    }
}
