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

/* menu/user.html.twig */
class __TwigTemplate_f925b8c5d0550d7e946661bd5aa4fca662d19a6a01feeb1c6d1dece29039c72b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu/user.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu/user.html.twig"));

        // line 1
        echo "<li class=\"nav-item has-treeview menu-open\">
    <a href=\"#\" class=\"nav-link\" style=\"background-color:yellowgreen;\">
        ";
        // line 4
        echo "        <i class=\"nav-icon fas   fa-users\"></i>
        <p>
            Utilisateur
            <i class=\"right fas fa-angle-left\"></i>
        </p>
    </a>
    <ul class=\"nav nav-treeview sous-menu-sidebar-left\">
        <li class=\"nav-item\">
            <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_add");
        echo "\" class=\"nav-link\">
                <i class=\"nav-icon fas fa-plus-circle\"></i>
                <p>Ajouter utilisateur</p>
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user");
        echo "\" class=\"nav-link\">
                <i class=\"fas fa-list-alt\"></i>
                <p>Listes des utilisateurs</p>
            </a>
        </li>
    </ul>
</li>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "menu/user.html.twig";
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
        <i class=\"nav-icon fas   fa-users\"></i>
        <p>
            Utilisateur
            <i class=\"right fas fa-angle-left\"></i>
        </p>
    </a>
    <ul class=\"nav nav-treeview sous-menu-sidebar-left\">
        <li class=\"nav-item\">
            <a href=\"{{path('user_add')}}\" class=\"nav-link\">
                <i class=\"nav-icon fas fa-plus-circle\"></i>
                <p>Ajouter utilisateur</p>
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"{{path('user')}}\" class=\"nav-link\">
                <i class=\"fas fa-list-alt\"></i>
                <p>Listes des utilisateurs</p>
            </a>
        </li>
    </ul>
</li>", "menu/user.html.twig", "/var/www/html/eric/psi/templates/menu/user.html.twig");
    }
}
