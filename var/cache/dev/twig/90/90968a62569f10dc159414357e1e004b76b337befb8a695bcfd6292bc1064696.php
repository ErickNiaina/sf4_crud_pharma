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

/* product/view.html.twig */
class __TwigTemplate_13959857e313d28ad71c754671e88abaa3b11c7f4e043f7e047d8b3cf37ea7ca extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'titre_contenu' => [$this, 'block_titre_contenu'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/view.html.twig", 1);
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

        echo "Produit";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_titre_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre_contenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre_contenu"));

        echo "Vue d'un Produit";
        
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
        echo "        <body class=\"sidebar-mini sidebar-collapse\" style=\"height: auto;\">
            <div class=\"wrapper\">
            <div class=\"content-wrapper\" style=\"min-height: 1416.81px;\">
                
                <section class=\"content-header\">
                <div class=\"container-fluid\">
                    <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1>Detail d'un</h1>
                    </div>
                    </div>
                </div>
                </section>
            
                
                <section class=\"content\">
            
                
                <div class=\"card\">
                    <div class=\"card-header\">
                    <h3 class=\"card-title\">Produit</h3>
            
                    <div class=\"card-tools\">
                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                        <i class=\"fas fa-minus\"></i></button>
                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                        <i class=\"fas fa-times\"></i></button>
                    </div>
                    </div>
                    <div class=\"card-body p-0\">
                        <div class=\"animated fadeInRight delay-1s content\">
                            <div class=\"container-fluid\">
                                <div class=\"row\">
                                    <div class=\"col-xl-12\">
                                        <div class=\"card\">
                                            <div class=\"card-body\">
                                                <div class=\"clearfix\">
                                                    <div class=\"float-right\">
                                                        <ul class=\"pagination\">
                                                            <li class=\"page-item noborder litext\"><a class=\"page-link\" data-role=\"button\" data-iconpos=\"left\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("family");
        echo "\">Retour liste</a></li>
                                                            <li class=\"page-item\"><a class=\"page-link\" data-role=\"button\" data-icon=\"arrow-l\" data-iconpos=\"left\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("family");
        echo "\">></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                            
                                                    <table class=\"table table-responsive-md table-condensed\">
                                                        <tr>
                                                            <th class=\"fieldrequired\">#</th>
                                                            <td>
                                                                <div class=\"refid\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["oneproduct"]) || array_key_exists("oneproduct", $context) ? $context["oneproduct"] : (function () { throw new RuntimeError('Variable "oneproduct" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55), "html", null, true);
        echo "</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">libelle</th>
                                                            <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["oneproduct"]) || array_key_exists("oneproduct", $context) ? $context["oneproduct"] : (function () { throw new RuntimeError('Variable "oneproduct" does not exist.', 60, $this->source); })()), "libelle", [], "any", false, false, false, 60), "html", null, true);
        echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">Laboratoire</td>
                                                                <td>
                                                                    ";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["oneproduct"]) || array_key_exists("oneproduct", $context) ? $context["oneproduct"] : (function () { throw new RuntimeError('Variable "oneproduct" does not exist.', 65, $this->source); })()), "laboratory", [], "any", false, false, false, 65), "namelaboratory", [], "any", false, false, false, 65), "html", null, true);
        echo "
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">Date de création :</th>
                                                            <td>";
        // line 70
        echo twig_escape_filter($this->env, (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["oneproduct"]) || array_key_exists("oneproduct", $context) ? $context["oneproduct"] : (function () { throw new RuntimeError('Variable "oneproduct" does not exist.', 70, $this->source); })()), "creeLe", [], "any", false, false, false, 70))) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["oneproduct"]) || array_key_exists("oneproduct", $context) ? $context["oneproduct"] : (function () { throw new RuntimeError('Variable "oneproduct" does not exist.', 70, $this->source); })()), "creele", [], "any", false, false, false, 70), "d/m/Y H:i:s")) : (twig_get_attribute($this->env, $this->source, (isset($context["oneproduct"]) || array_key_exists("oneproduct", $context) ? $context["oneproduct"] : (function () { throw new RuntimeError('Variable "oneproduct" does not exist.', 70, $this->source); })()), "creele", [], "any", false, false, false, 70))), "html", null, true);
        echo " </td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">Cré(e) Par :</th>
                                                            <td>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["oneproduct"]) || array_key_exists("oneproduct", $context) ? $context["oneproduct"] : (function () { throw new RuntimeError('Variable "oneproduct" does not exist.', 74, $this->source); })()), "creePar", [], "any", false, false, false, 74), "html", null, true);
        echo " </td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">Date de modifcation :</th>
                                                            <td>";
        // line 78
        echo twig_escape_filter($this->env, (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["oneproduct"]) || array_key_exists("oneproduct", $context) ? $context["oneproduct"] : (function () { throw new RuntimeError('Variable "oneproduct" does not exist.', 78, $this->source); })()), "modifieLe", [], "any", false, false, false, 78))) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["oneproduct"]) || array_key_exists("oneproduct", $context) ? $context["oneproduct"] : (function () { throw new RuntimeError('Variable "oneproduct" does not exist.', 78, $this->source); })()), "modifieLe", [], "any", false, false, false, 78), "d/m/Y H:i:s")) : (twig_get_attribute($this->env, $this->source, (isset($context["oneproduct"]) || array_key_exists("oneproduct", $context) ? $context["oneproduct"] : (function () { throw new RuntimeError('Variable "oneproduct" does not exist.', 78, $this->source); })()), "modifieLe", [], "any", false, false, false, 78))), "html", null, true);
        echo " </td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">Modifié(e) Par :</th>
                                                            <td>";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["oneproduct"]) || array_key_exists("oneproduct", $context) ? $context["oneproduct"] : (function () { throw new RuntimeError('Variable "oneproduct" does not exist.', 82, $this->source); })()), "modifiePar", [], "any", false, false, false, 82), "html", null, true);
        echo " </td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">Categorie :</th>
                                                            <td>";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["oneproduct"]) || array_key_exists("oneproduct", $context) ? $context["oneproduct"] : (function () { throw new RuntimeError('Variable "oneproduct" does not exist.', 86, $this->source); })()), "category", [], "any", false, false, false, 86), "libelle", [], "any", false, false, false, 86), "html", null, true);
        echo " </td>
                                                        </tr>
                                                    </table>
                                                <br>
                                                <div class=\"clearfix\">
                                                    <div class=\"float-right\">
                                                        <div class=\"float-right\"><a class=\"btn btn-outline-success\" href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_product", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["oneproduct"]) || array_key_exists("oneproduct", $context) ? $context["oneproduct"] : (function () { throw new RuntimeError('Variable "oneproduct" does not exist.', 92, $this->source); })()), "id", [], "any", false, false, false, 92)]), "html", null, true);
        echo "\">Modifier</a>&nbsp;&nbsp;
                                                            <a class=\"btn btn-outline-danger\" href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_product", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["oneproduct"]) || array_key_exists("oneproduct", $context) ? $context["oneproduct"] : (function () { throw new RuntimeError('Variable "oneproduct" does not exist.', 93, $this->source); })()), "id", [], "any", false, false, false, 93)]), "html", null, true);
        echo "\">Supprimer</a></div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
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
        return "product/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 93,  226 => 92,  217 => 86,  210 => 82,  203 => 78,  196 => 74,  189 => 70,  181 => 65,  173 => 60,  165 => 55,  153 => 46,  149 => 45,  108 => 6,  98 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Produit{% endblock %}
{% block titre_contenu %}Vue d'un Produit{% endblock %}
{% block body %}
        <body class=\"sidebar-mini sidebar-collapse\" style=\"height: auto;\">
            <div class=\"wrapper\">
            <div class=\"content-wrapper\" style=\"min-height: 1416.81px;\">
                
                <section class=\"content-header\">
                <div class=\"container-fluid\">
                    <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1>Detail d'un</h1>
                    </div>
                    </div>
                </div>
                </section>
            
                
                <section class=\"content\">
            
                
                <div class=\"card\">
                    <div class=\"card-header\">
                    <h3 class=\"card-title\">Produit</h3>
            
                    <div class=\"card-tools\">
                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                        <i class=\"fas fa-minus\"></i></button>
                        <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                        <i class=\"fas fa-times\"></i></button>
                    </div>
                    </div>
                    <div class=\"card-body p-0\">
                        <div class=\"animated fadeInRight delay-1s content\">
                            <div class=\"container-fluid\">
                                <div class=\"row\">
                                    <div class=\"col-xl-12\">
                                        <div class=\"card\">
                                            <div class=\"card-body\">
                                                <div class=\"clearfix\">
                                                    <div class=\"float-right\">
                                                        <ul class=\"pagination\">
                                                            <li class=\"page-item noborder litext\"><a class=\"page-link\" data-role=\"button\" data-iconpos=\"left\" href=\"{{path('family')}}\">Retour liste</a></li>
                                                            <li class=\"page-item\"><a class=\"page-link\" data-role=\"button\" data-icon=\"arrow-l\" data-iconpos=\"left\" href=\"{{path('family')}}\">></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                            
                                                    <table class=\"table table-responsive-md table-condensed\">
                                                        <tr>
                                                            <th class=\"fieldrequired\">#</th>
                                                            <td>
                                                                <div class=\"refid\">{{oneproduct.id}}</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">libelle</th>
                                                            <td>{{oneproduct.libelle}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">Laboratoire</td>
                                                                <td>
                                                                    {{oneproduct.laboratory.namelaboratory}}
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">Date de création :</th>
                                                            <td>{{oneproduct.creeLe is not null ? oneproduct.creele|date(\"d/m/Y H:i:s\") : oneproduct.creele}} </td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">Cré(e) Par :</th>
                                                            <td>{{oneproduct.creePar}} </td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">Date de modifcation :</th>
                                                            <td>{{oneproduct.modifieLe is not null ? oneproduct.modifieLe|date(\"d/m/Y H:i:s\") : oneproduct.modifieLe}} </td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">Modifié(e) Par :</th>
                                                            <td>{{oneproduct.modifiePar}} </td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">Categorie :</th>
                                                            <td>{{oneproduct.category.libelle}} </td>
                                                        </tr>
                                                    </table>
                                                <br>
                                                <div class=\"clearfix\">
                                                    <div class=\"float-right\">
                                                        <div class=\"float-right\"><a class=\"btn btn-outline-success\" href=\"{{path('edit_product',{'id': oneproduct.id})}}\">Modifier</a>&nbsp;&nbsp;
                                                            <a class=\"btn btn-outline-danger\" href=\"{{ path('delete_product', {'id': oneproduct.id}) }}\">Supprimer</a></div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
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
  




           

", "product/view.html.twig", "/var/www/html/eric/psi/templates/product/view.html.twig");
    }
}
