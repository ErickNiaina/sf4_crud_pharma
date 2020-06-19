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

/* menu/laboratoire.html.twig */
class __TwigTemplate_474cda50513482c324767db05d63a9a87a569588b0e459d73f420cadfe21ee26 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu/laboratoire.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu/laboratoire.html.twig"));

        // line 1
        echo "<li class=\"nav-item has-treeview menu-open\">
    <a href=\"#\" class=\"nav-link\" style=\"background-color:yellowgreen;\">
        <i class=\"nav-icon fas  fa-stethoscope\"></i>
        <p>
            Laboratoire
            <i class=\"right fas fa-angle-left\"></i>
        </p>
    </a>
    <ul class=\"nav nav-treeview sous-menu-sidebar-left\">
        <li class=\"nav-item\">
            <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_laboratory");
        echo "\" class=\"nav-link\">
                <i class=\"nav-icon fas fa-plus-circle\"></i>
                <p>Ajouter Laboratoire</p>
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("laboratory");
        echo "\" class=\"nav-link\">
                <i class=\"fas fa-list-alt\"></i>
                <p>Listes des laboratoires</p>
            </a>
        </li>
    </ul>
</li>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "menu/laboratoire.html.twig";
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
        <i class=\"nav-icon fas  fa-stethoscope\"></i>
        <p>
            Laboratoire
            <i class=\"right fas fa-angle-left\"></i>
        </p>
    </a>
    <ul class=\"nav nav-treeview sous-menu-sidebar-left\">
        <li class=\"nav-item\">
            <a href=\"{{path('add_laboratory')}}\" class=\"nav-link\">
                <i class=\"nav-icon fas fa-plus-circle\"></i>
                <p>Ajouter Laboratoire</p>
            </a>
        </li>
        <li class=\"nav-item\">
            <a href=\"{{path('laboratory')}}\" class=\"nav-link\">
                <i class=\"fas fa-list-alt\"></i>
                <p>Listes des laboratoires</p>
            </a>
        </li>
    </ul>
</li>", "menu/laboratoire.html.twig", "/var/www/html/eric/psi/templates/menu/laboratoire.html.twig");
    }
}
