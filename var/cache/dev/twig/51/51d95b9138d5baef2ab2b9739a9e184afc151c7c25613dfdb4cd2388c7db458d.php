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

/* user/list.html.twig */
class __TwigTemplate_e502d2a9fe7080a9bb13abdb4d5b5867910c4e4c9ec5647f9dd69f47aa15296d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Listes des Utilisateurs!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<body class=\"sidebar-mini sidebar-collapse\" style=\"height: auto;\">
  <div class=\"wrapper\">
    <div class=\"content-wrapper\" style=\"min-height: 1416.81px;\">
      <!-- Content Header (Page header) -->
      <section class=\"content-header\">
        <div class=\"container-fluid\">
          <div class=\"row mb-2\">
            <div class=\"col-sm-6\">
              <h1>Utilisateurs</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class=\"content\">
  
        <!-- Default box -->
        <div class=\"card\">
          <div class=\"card-header\">
            <h3 class=\"card-title\">Listes</h3>
  
            <div class=\"card-tools\">
              <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                <i class=\"fas fa-minus\"></i></button>
              <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                <i class=\"fas fa-times\"></i></button>
            </div>
          </div>
          <div class=\"card-body p-0\">
            <table class=\"table table-striped projects\">
                <thead>
                    <tr>
                        <th style=\"width: 1%\">
                            #
                        </th>
                        <th style=\"width: 20%\">
                            Nom d'utilisateur
                        </th>
                        <th style=\"width: 30%\">
                             Membres
                        </th>
                        <th>
                            Email
                        </th>
                        <th style=\"width: 20%\">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
            // line 57
            echo "                    <tr>
                        <td>
                            ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "id", [], "any", false, false, false, 59), "html", null, true);
            echo "
                        </td>
                        <td>
                            <a>
                                ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "username", [], "any", false, false, false, 63), "html", null, true);
            echo "
                            </a>
                            
                        </td>
                        <td>
                            <ul class=\"list-inline\">
                                <li class=\"list-inline-item\">
                                    <img alt=\"Avatar\" class=\"table-avatar\" src=\"../../dist/img/avatar.png\">
                                </li>
                                <li class=\"list-inline-item\">
                                    <img alt=\"Avatar\" class=\"table-avatar\" src=\"../../dist/img/avatar2.png\">
                                </li>
                                <li class=\"list-inline-item\">
                                    <img alt=\"Avatar\" class=\"table-avatar\" src=\"../../dist/img/avatar3.png\">
                                </li>
                                <li class=\"list-inline-item\">
                                    <img alt=\"Avatar\" class=\"table-avatar\" src=\"../../dist/img/avatar04.png\">
                                </li>
                            </ul>
                        </td>
                        <td class=\"project_progress\">
                            ";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "email", [], "any", false, false, false, 84), "html", null, true);
            echo "
                        </td>
                        <td class=\"project-actions text-right\">
                            <a class=\"btn btn-primary btn-sm\" href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_view", ["id" => twig_get_attribute($this->env, $this->source, $context["users"], "id", [], "any", false, false, false, 87)]), "html", null, true);
            echo "\">
                                <i class=\"fas fa-folder\">
                                </i>
                                View
                            </a>
                            <a class=\"btn btn-info btn-sm\" href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["users"], "id", [], "any", false, false, false, 92)]), "html", null, true);
            echo "\">
                                <i class=\"fas fa-pencil-alt\">
                                </i>
                                Edit
                            </a>
                            <a class=\"btn btn-danger btn-sm\" href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["users"], "id", [], "any", false, false, false, 97)]), "html", null, true);
            echo "\">
                                <i class=\"fas fa-trash\">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
  
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  
    <footer class=\"main-footer\">
      <div class=\"float-right d-none d-sm-block\">
        <b>Version</b> 3.0.3
      </div>
      <strong>Copyright © 2014-2019 <a href=\"http://adminlte.io\">AdminLTE.io</a>.</strong> All rights
      reserved.
    </footer>
  
    <!-- Control Sidebar -->
    <aside class=\"control-sidebar control-sidebar-dark\">
      <!-- Control sidebar content goes here -->
    <div class=\"p-3 control-sidebar-content\"><h5>Customize AdminLTE</h5><hr class=\"mb-2\"><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>No Navbar border</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Body small text</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Navbar small text</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Sidebar nav small text</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Footer small text</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Sidebar nav flat style</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Sidebar nav legacy style</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Sidebar nav compact</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Sidebar nav child indent</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Main Sidebar disable hover/focus auto expand</span></div><div class=\"mb-4\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Brand small text</span></div><h6>Navbar Variants</h6><div class=\"d-flex\"><div class=\"d-flex flex-wrap mb-3\"><div class=\"bg-primary elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-secondary elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-info elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-success elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-danger elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-indigo elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-purple elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-pink elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-navy elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-lightblue elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-teal elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-cyan elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-dark elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-gray-dark elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-gray elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-light elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-warning elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-white elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-orange elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div></div></div><h6>Accent Color Variants</h6><div class=\"d-flex\"></div><div class=\"d-flex flex-wrap mb-3\"><div class=\"bg-primary elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-warning elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-info elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-danger elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-success elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-indigo elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-lightblue elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-navy elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-purple elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-fuchsia elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-pink elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-maroon elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-orange elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-lime elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-teal elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-olive elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div></div><h6>Dark Sidebar Variants</h6><div class=\"d-flex\"></div><div class=\"d-flex flex-wrap mb-3\"><div class=\"bg-primary elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-warning elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-info elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-danger elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-success elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-indigo elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-lightblue elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-navy elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-purple elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-fuchsia elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-pink elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-maroon elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-orange elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-lime elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-teal elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-olive elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div></div><h6>Light Sidebar Variants</h6><div class=\"d-flex\"></div><div class=\"d-flex flex-wrap mb-3\"><div class=\"bg-primary elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-warning elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-info elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-danger elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-success elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-indigo elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-lightblue elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-navy elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-purple elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-fuchsia elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-pink elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-maroon elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-orange elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-lime elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-teal elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-olive elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div></div><h6>Brand Logo Variants</h6><div class=\"d-flex\"></div><div class=\"d-flex flex-wrap mb-3\"><div class=\"bg-primary elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-secondary elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-info elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-success elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-danger elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-indigo elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-purple elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-pink elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-navy elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-lightblue elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-teal elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-cyan elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-dark elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-gray-dark elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-gray elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-light elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-warning elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-white elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-orange elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><a href=\"javascript:void(0)\">clear</a></div></div></aside>
    <!-- /.control-sidebar -->
  <div id=\"sidebar-overlay\"></div></div>
  <!-- ./wrapper -->
  
  <!-- jQuery -->
  <script src=\"../../plugins/jquery/jquery.min.js\"></script>
  <!-- Bootstrap 4 -->
  <script src=\"../../plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
  <!-- AdminLTE App -->
  <script src=\"../../dist/js/adminlte.min.js\"></script>
  <!-- AdminLTE for demo purposes -->
  <script src=\"../../dist/js/demo.js\"></script>
  
  
  </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 105,  201 => 97,  193 => 92,  185 => 87,  179 => 84,  155 => 63,  148 => 59,  144 => 57,  140 => 56,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Listes des Utilisateurs!{% endblock %}

{% block body %}
<body class=\"sidebar-mini sidebar-collapse\" style=\"height: auto;\">
  <div class=\"wrapper\">
    <div class=\"content-wrapper\" style=\"min-height: 1416.81px;\">
      <!-- Content Header (Page header) -->
      <section class=\"content-header\">
        <div class=\"container-fluid\">
          <div class=\"row mb-2\">
            <div class=\"col-sm-6\">
              <h1>Utilisateurs</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class=\"content\">
  
        <!-- Default box -->
        <div class=\"card\">
          <div class=\"card-header\">
            <h3 class=\"card-title\">Listes</h3>
  
            <div class=\"card-tools\">
              <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                <i class=\"fas fa-minus\"></i></button>
              <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                <i class=\"fas fa-times\"></i></button>
            </div>
          </div>
          <div class=\"card-body p-0\">
            <table class=\"table table-striped projects\">
                <thead>
                    <tr>
                        <th style=\"width: 1%\">
                            #
                        </th>
                        <th style=\"width: 20%\">
                            Nom d'utilisateur
                        </th>
                        <th style=\"width: 30%\">
                             Membres
                        </th>
                        <th>
                            Email
                        </th>
                        <th style=\"width: 20%\">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    {% for users in user %}
                    <tr>
                        <td>
                            {{ users.id }}
                        </td>
                        <td>
                            <a>
                                {{users.username}}
                            </a>
                            
                        </td>
                        <td>
                            <ul class=\"list-inline\">
                                <li class=\"list-inline-item\">
                                    <img alt=\"Avatar\" class=\"table-avatar\" src=\"../../dist/img/avatar.png\">
                                </li>
                                <li class=\"list-inline-item\">
                                    <img alt=\"Avatar\" class=\"table-avatar\" src=\"../../dist/img/avatar2.png\">
                                </li>
                                <li class=\"list-inline-item\">
                                    <img alt=\"Avatar\" class=\"table-avatar\" src=\"../../dist/img/avatar3.png\">
                                </li>
                                <li class=\"list-inline-item\">
                                    <img alt=\"Avatar\" class=\"table-avatar\" src=\"../../dist/img/avatar04.png\">
                                </li>
                            </ul>
                        </td>
                        <td class=\"project_progress\">
                            {{ users.email }}
                        </td>
                        <td class=\"project-actions text-right\">
                            <a class=\"btn btn-primary btn-sm\" href=\"{{path('user_view',{'id': users.id }) }}\">
                                <i class=\"fas fa-folder\">
                                </i>
                                View
                            </a>
                            <a class=\"btn btn-info btn-sm\" href=\"{{path('user_edit',{'id': users.id }) }}\">
                                <i class=\"fas fa-pencil-alt\">
                                </i>
                                Edit
                            </a>
                            <a class=\"btn btn-danger btn-sm\" href=\"{{path('user_delete',{'id': users.id }) }}\">
                                <i class=\"fas fa-trash\">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
  
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  
    <footer class=\"main-footer\">
      <div class=\"float-right d-none d-sm-block\">
        <b>Version</b> 3.0.3
      </div>
      <strong>Copyright © 2014-2019 <a href=\"http://adminlte.io\">AdminLTE.io</a>.</strong> All rights
      reserved.
    </footer>
  
    <!-- Control Sidebar -->
    <aside class=\"control-sidebar control-sidebar-dark\">
      <!-- Control sidebar content goes here -->
    <div class=\"p-3 control-sidebar-content\"><h5>Customize AdminLTE</h5><hr class=\"mb-2\"><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>No Navbar border</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Body small text</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Navbar small text</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Sidebar nav small text</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Footer small text</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Sidebar nav flat style</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Sidebar nav legacy style</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Sidebar nav compact</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Sidebar nav child indent</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Main Sidebar disable hover/focus auto expand</span></div><div class=\"mb-4\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Brand small text</span></div><h6>Navbar Variants</h6><div class=\"d-flex\"><div class=\"d-flex flex-wrap mb-3\"><div class=\"bg-primary elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-secondary elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-info elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-success elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-danger elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-indigo elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-purple elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-pink elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-navy elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-lightblue elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-teal elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-cyan elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-dark elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-gray-dark elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-gray elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-light elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-warning elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-white elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-orange elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div></div></div><h6>Accent Color Variants</h6><div class=\"d-flex\"></div><div class=\"d-flex flex-wrap mb-3\"><div class=\"bg-primary elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-warning elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-info elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-danger elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-success elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-indigo elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-lightblue elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-navy elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-purple elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-fuchsia elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-pink elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-maroon elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-orange elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-lime elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-teal elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-olive elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div></div><h6>Dark Sidebar Variants</h6><div class=\"d-flex\"></div><div class=\"d-flex flex-wrap mb-3\"><div class=\"bg-primary elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-warning elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-info elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-danger elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-success elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-indigo elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-lightblue elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-navy elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-purple elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-fuchsia elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-pink elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-maroon elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-orange elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-lime elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-teal elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-olive elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div></div><h6>Light Sidebar Variants</h6><div class=\"d-flex\"></div><div class=\"d-flex flex-wrap mb-3\"><div class=\"bg-primary elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-warning elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-info elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-danger elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-success elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-indigo elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-lightblue elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-navy elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-purple elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-fuchsia elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-pink elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-maroon elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-orange elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-lime elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-teal elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-olive elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div></div><h6>Brand Logo Variants</h6><div class=\"d-flex\"></div><div class=\"d-flex flex-wrap mb-3\"><div class=\"bg-primary elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-secondary elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-info elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-success elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-danger elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-indigo elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-purple elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-pink elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-navy elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-lightblue elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-teal elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-cyan elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-dark elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-gray-dark elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-gray elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-light elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-warning elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-white elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-orange elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><a href=\"javascript:void(0)\">clear</a></div></div></aside>
    <!-- /.control-sidebar -->
  <div id=\"sidebar-overlay\"></div></div>
  <!-- ./wrapper -->
  
  <!-- jQuery -->
  <script src=\"../../plugins/jquery/jquery.min.js\"></script>
  <!-- Bootstrap 4 -->
  <script src=\"../../plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
  <!-- AdminLTE App -->
  <script src=\"../../dist/js/adminlte.min.js\"></script>
  <!-- AdminLTE for demo purposes -->
  <script src=\"../../dist/js/demo.js\"></script>
  
  
  </body>
{% endblock %}
", "user/list.html.twig", "/var/www/html/eric/psi/templates/user/list.html.twig");
    }
}
