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

/* family/add.html.twig */
class __TwigTemplate_2bdd198a0b658382be3571fac4b719c21ad3c33fb08e34fc27a3df069748b40a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "family/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "family/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "family/add.html.twig", 1);
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

        echo "Ajouter  famille";
        
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
              <h1>Enregistrement de :</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class=\"content\">
  
        <!-- Default box -->
        <div class=\"card\">
          <div class=\"card-header\">
            <div class=\"card card-default\">
                <form action=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("family_add");
        echo "\" method=\"POST\">
                    <div class=\"card-header\">
                        <div class=\"card-tools\">
                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                            <i class=\"fas fa-minus\"></i></button>
                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                            <i class=\"fas fa-times\"></i></button>
                        </div>
                    <h3 class=\"card-title\"><b>Famille-categorie</b></h3>
                    </div>
                    <div class=\"card-body\">
                    <input class=\"form-control form-control-lg\" type=\"text\" placeholder=\"inserez votre libelle de famille\" name=\"libelle\">
                        <br>
                    <input class=\"form-control\" type=\"text\" placeholder=\"inserez votre code\" name=\"code\">
                        <br>
                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-1\">
                          <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                              <lable for=\"DateDeNaissance\" class=\"text-bold\">Date de création </label>
                          </div>
                          <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                              <div class=\"input-group\">
                                  <input  name=\"creele\" type=\"datetime-local\" class=\"form-control docs-date\" autocomplete=\"off\" data-toggle=\"datepicker_add\" placeholder=\"date de création\" required>
                                  <div class=\"input-group-append\">
                                      <div class=\"input-group-text docs-datepicker-trigger\"><i class=\"fas fa-calendar\" style=\"font-size: 18px;\"></i></div>
                                  </div>
                                  <div class=\"docs-datepicker-container\"></div>
                              </div>
                          </div>
                      </div>
                    </div>

                    </div>
                    <div class=\"offset-4 col-8 pt-2\">
                        <input type=\"hidden\" name=\"token\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("add-family"), "html", null, true);
        echo "\"/>
                    </div>
                    <button type=\"submit\" class=\"btn btn-default float-right\">Enregistrer</button>
                </form>  
            </div>
                    

                </div>
              </div>
          </div>
        </div>
      </section>
    </div>
    
  
    <footer class=\"main-footer\">
      <div class=\"float-right d-none d-sm-block\">
        <b>Version</b> 3.0.3
      </div>
      <strong>Copyright © 2014-2019 <a href=\"http://adminlte.io\">AdminLTE.io</a>.</strong> All rights
      reserved.
    </footer>
  
    
    <aside class=\"control-sidebar control-sidebar-dark\">
    <div class=\"p-3 control-sidebar-content\"><h5>Customize AdminLTE</h5><hr class=\"mb-2\"><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>No Navbar border</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Body small text</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Navbar small text</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Sidebar nav small text</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Footer small text</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Sidebar nav flat style</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Sidebar nav legacy style</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Sidebar nav compact</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Sidebar nav child indent</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Main Sidebar disable hover/focus auto expand</span></div><div class=\"mb-4\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Brand small text</span></div><h6>Navbar Variants</h6><div class=\"d-flex\"><div class=\"d-flex flex-wrap mb-3\"><div class=\"bg-primary elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-secondary elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-info elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-success elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-danger elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-indigo elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-purple elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-pink elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-navy elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-lightblue elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-teal elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-cyan elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-dark elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-gray-dark elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-gray elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-light elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-warning elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-white elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-orange elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div></div></div><h6>Accent Color Variants</h6><div class=\"d-flex\"></div><div class=\"d-flex flex-wrap mb-3\"><div class=\"bg-primary elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-warning elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-info elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-danger elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-success elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-indigo elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-lightblue elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-navy elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-purple elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-fuchsia elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-pink elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-maroon elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-orange elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-lime elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-teal elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-olive elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div></div><h6>Dark Sidebar Variants</h6><div class=\"d-flex\"></div><div class=\"d-flex flex-wrap mb-3\"><div class=\"bg-primary elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-warning elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-info elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-danger elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-success elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-indigo elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-lightblue elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-navy elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-purple elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-fuchsia elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-pink elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-maroon elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-orange elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-lime elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-teal elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-olive elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div></div><h6>Light Sidebar Variants</h6><div class=\"d-flex\"></div><div class=\"d-flex flex-wrap mb-3\"><div class=\"bg-primary elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-warning elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-info elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-danger elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-success elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-indigo elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-lightblue elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-navy elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-purple elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-fuchsia elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-pink elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-maroon elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-orange elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-lime elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-teal elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-olive elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div></div><h6>Brand Logo Variants</h6><div class=\"d-flex\"></div><div class=\"d-flex flex-wrap mb-3\"><div class=\"bg-primary elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-secondary elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-info elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-success elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-danger elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-indigo elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-purple elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-pink elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-navy elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-lightblue elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-teal elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-cyan elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-dark elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-gray-dark elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-gray elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-light elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-warning elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-white elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-orange elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><a href=\"javascript:void(0)\">clear</a></div></div></aside>
  <div id=\"sidebar-overlay\"></div></div>
  
  
  
  <script src=\"../../plugins/jquery/jquery.min.js\"></script>
  <script src=\"../../plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
  <script src=\"../../dist/js/adminlte.min.js\"></script>
  <script src=\"../../dist/js/demo.js\"></script>
  
  
  </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "family/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 60,  111 => 27,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter  famille{% endblock %}

{% block body %}
<body class=\"sidebar-mini sidebar-collapse\" style=\"height: auto;\">
  <div class=\"wrapper\">
    <div class=\"content-wrapper\" style=\"min-height: 1416.81px;\">
      <!-- Content Header (Page header) -->
      <section class=\"content-header\">
        <div class=\"container-fluid\">
          <div class=\"row mb-2\">
            <div class=\"col-sm-6\">
              <h1>Enregistrement de :</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class=\"content\">
  
        <!-- Default box -->
        <div class=\"card\">
          <div class=\"card-header\">
            <div class=\"card card-default\">
                <form action=\"{{path('family_add')}}\" method=\"POST\">
                    <div class=\"card-header\">
                        <div class=\"card-tools\">
                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                            <i class=\"fas fa-minus\"></i></button>
                            <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                            <i class=\"fas fa-times\"></i></button>
                        </div>
                    <h3 class=\"card-title\"><b>Famille-categorie</b></h3>
                    </div>
                    <div class=\"card-body\">
                    <input class=\"form-control form-control-lg\" type=\"text\" placeholder=\"inserez votre libelle de famille\" name=\"libelle\">
                        <br>
                    <input class=\"form-control\" type=\"text\" placeholder=\"inserez votre code\" name=\"code\">
                        <br>
                        <div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-1\">
                          <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                              <lable for=\"DateDeNaissance\" class=\"text-bold\">Date de création </label>
                          </div>
                          <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2\">  
                              <div class=\"input-group\">
                                  <input  name=\"creele\" type=\"datetime-local\" class=\"form-control docs-date\" autocomplete=\"off\" data-toggle=\"datepicker_add\" placeholder=\"date de création\" required>
                                  <div class=\"input-group-append\">
                                      <div class=\"input-group-text docs-datepicker-trigger\"><i class=\"fas fa-calendar\" style=\"font-size: 18px;\"></i></div>
                                  </div>
                                  <div class=\"docs-datepicker-container\"></div>
                              </div>
                          </div>
                      </div>
                    </div>

                    </div>
                    <div class=\"offset-4 col-8 pt-2\">
                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('add-family') }}\"/>
                    </div>
                    <button type=\"submit\" class=\"btn btn-default float-right\">Enregistrer</button>
                </form>  
            </div>
                    

                </div>
              </div>
          </div>
        </div>
      </section>
    </div>
    
  
    <footer class=\"main-footer\">
      <div class=\"float-right d-none d-sm-block\">
        <b>Version</b> 3.0.3
      </div>
      <strong>Copyright © 2014-2019 <a href=\"http://adminlte.io\">AdminLTE.io</a>.</strong> All rights
      reserved.
    </footer>
  
    
    <aside class=\"control-sidebar control-sidebar-dark\">
    <div class=\"p-3 control-sidebar-content\"><h5>Customize AdminLTE</h5><hr class=\"mb-2\"><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>No Navbar border</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Body small text</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Navbar small text</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Sidebar nav small text</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Footer small text</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Sidebar nav flat style</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Sidebar nav legacy style</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Sidebar nav compact</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Sidebar nav child indent</span></div><div class=\"mb-1\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Main Sidebar disable hover/focus auto expand</span></div><div class=\"mb-4\"><input type=\"checkbox\" value=\"1\" class=\"mr-1\"><span>Brand small text</span></div><h6>Navbar Variants</h6><div class=\"d-flex\"><div class=\"d-flex flex-wrap mb-3\"><div class=\"bg-primary elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-secondary elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-info elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-success elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-danger elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-indigo elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-purple elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-pink elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-navy elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-lightblue elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-teal elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-cyan elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-dark elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-gray-dark elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-gray elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-light elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-warning elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-white elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-orange elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div></div></div><h6>Accent Color Variants</h6><div class=\"d-flex\"></div><div class=\"d-flex flex-wrap mb-3\"><div class=\"bg-primary elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-warning elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-info elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-danger elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-success elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-indigo elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-lightblue elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-navy elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-purple elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-fuchsia elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-pink elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-maroon elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-orange elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-lime elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-teal elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-olive elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div></div><h6>Dark Sidebar Variants</h6><div class=\"d-flex\"></div><div class=\"d-flex flex-wrap mb-3\"><div class=\"bg-primary elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-warning elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-info elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-danger elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-success elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-indigo elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-lightblue elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-navy elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-purple elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-fuchsia elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-pink elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-maroon elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-orange elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-lime elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-teal elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-olive elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div></div><h6>Light Sidebar Variants</h6><div class=\"d-flex\"></div><div class=\"d-flex flex-wrap mb-3\"><div class=\"bg-primary elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-warning elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-info elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-danger elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-success elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-indigo elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-lightblue elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-navy elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-purple elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-fuchsia elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-pink elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-maroon elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-orange elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-lime elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-teal elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-olive elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div></div><h6>Brand Logo Variants</h6><div class=\"d-flex\"></div><div class=\"d-flex flex-wrap mb-3\"><div class=\"bg-primary elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-secondary elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-info elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-success elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-danger elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-indigo elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-purple elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-pink elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-navy elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-lightblue elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-teal elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-cyan elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-dark elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-gray-dark elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-gray elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-light elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-warning elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-white elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><div class=\"bg-orange elevation-2\" style=\"width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;\"></div><a href=\"javascript:void(0)\">clear</a></div></div></aside>
  <div id=\"sidebar-overlay\"></div></div>
  
  
  
  <script src=\"../../plugins/jquery/jquery.min.js\"></script>
  <script src=\"../../plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
  <script src=\"../../dist/js/adminlte.min.js\"></script>
  <script src=\"../../dist/js/demo.js\"></script>
  
  
  </body>
{% endblock %}
", "family/add.html.twig", "/var/www/html/eric/psi/templates/family/add.html.twig");
    }
}
