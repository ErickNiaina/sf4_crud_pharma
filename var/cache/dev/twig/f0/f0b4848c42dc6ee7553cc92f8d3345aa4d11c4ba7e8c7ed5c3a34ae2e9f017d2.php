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

/* laboratory/view.html.twig */
class __TwigTemplate_4aa5912563b1e411e09d0745586df8b7c6251c6e7f274c3abcd81552f1f4aa70 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "laboratory/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "laboratory/view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "laboratory/view.html.twig", 1);
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

        echo "Labo";
        
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

        echo "Vue d'un laboratoire";
        
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
                    <h3 class=\"card-title\">Laboratoire</h3>
            
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("laboratory");
        echo "\">Retour liste</a></li>
                                                            <li class=\"page-item\"><a class=\"page-link\" data-role=\"button\" data-icon=\"arrow-l\" data-iconpos=\"left\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("laboratory");
        echo "\">></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                    <table class=\"table table-responsive-md table-condensed\">
                                                        <tr>
                                                            <th class=\"fieldrequired\">#</th>
                                                            <td>
                                                                <div class=\"refid\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["onelabo"]) || array_key_exists("onelabo", $context) ? $context["onelabo"] : (function () { throw new RuntimeError('Variable "onelabo" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54), "html", null, true);
        echo "</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">Nom du laboratoire</th>
                                                            <td>";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["onelabo"]) || array_key_exists("onelabo", $context) ? $context["onelabo"] : (function () { throw new RuntimeError('Variable "onelabo" does not exist.', 59, $this->source); })()), "namelaboratory", [], "any", false, false, false, 59), "html", null, true);
        echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">Code</td>
                                                                <td>
                                                                    ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["onelabo"]) || array_key_exists("onelabo", $context) ? $context["onelabo"] : (function () { throw new RuntimeError('Variable "onelabo" does not exist.', 64, $this->source); })()), "codelaboratory", [], "any", false, false, false, 64), "html", null, true);
        echo "
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">Date de création :</th>
                                                            <td>";
        // line 69
        echo twig_escape_filter($this->env, (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["onelabo"]) || array_key_exists("onelabo", $context) ? $context["onelabo"] : (function () { throw new RuntimeError('Variable "onelabo" does not exist.', 69, $this->source); })()), "creele", [], "any", false, false, false, 69))) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["onelabo"]) || array_key_exists("onelabo", $context) ? $context["onelabo"] : (function () { throw new RuntimeError('Variable "onelabo" does not exist.', 69, $this->source); })()), "creele", [], "any", false, false, false, 69), "d/m/Y H:i:s")) : (twig_get_attribute($this->env, $this->source, (isset($context["onelabo"]) || array_key_exists("onelabo", $context) ? $context["onelabo"] : (function () { throw new RuntimeError('Variable "onelabo" does not exist.', 69, $this->source); })()), "creele", [], "any", false, false, false, 69))), "html", null, true);
        echo " </td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">Cré(e) Par :</th>
                                                            <td>";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["onelabo"]) || array_key_exists("onelabo", $context) ? $context["onelabo"] : (function () { throw new RuntimeError('Variable "onelabo" does not exist.', 73, $this->source); })()), "creePar", [], "any", false, false, false, 73), "html", null, true);
        echo " </td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">Date de modifcation :</th>
                                                            <td>";
        // line 77
        echo twig_escape_filter($this->env, (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["onelabo"]) || array_key_exists("onelabo", $context) ? $context["onelabo"] : (function () { throw new RuntimeError('Variable "onelabo" does not exist.', 77, $this->source); })()), "modifieLe", [], "any", false, false, false, 77))) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["onelabo"]) || array_key_exists("onelabo", $context) ? $context["onelabo"] : (function () { throw new RuntimeError('Variable "onelabo" does not exist.', 77, $this->source); })()), "modifieLe", [], "any", false, false, false, 77), "d/m/Y H:i:s")) : (twig_get_attribute($this->env, $this->source, (isset($context["onelabo"]) || array_key_exists("onelabo", $context) ? $context["onelabo"] : (function () { throw new RuntimeError('Variable "onelabo" does not exist.', 77, $this->source); })()), "modifieLe", [], "any", false, false, false, 77))), "html", null, true);
        echo " </td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">Modifié(e) Par :</th>
                                                            <td>";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["onelabo"]) || array_key_exists("onelabo", $context) ? $context["onelabo"] : (function () { throw new RuntimeError('Variable "onelabo" does not exist.', 81, $this->source); })()), "modifiePar", [], "any", false, false, false, 81), "html", null, true);
        echo " </td>
                                                        </tr>
                                                    </table>
                                                <br>
                                                <div class=\"clearfix\">
                                                    <div class=\"float-right\">
                                                        <div class=\"float-right\"><a class=\"btn btn-outline-success\" href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_laboratory", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["onelabo"]) || array_key_exists("onelabo", $context) ? $context["onelabo"] : (function () { throw new RuntimeError('Variable "onelabo" does not exist.', 87, $this->source); })()), "id", [], "any", false, false, false, 87)]), "html", null, true);
        echo "\">Modifier</a>&nbsp;&nbsp;
                                                            <a class=\"btn btn-outline-danger\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_laboratory", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["onelabo"]) || array_key_exists("onelabo", $context) ? $context["onelabo"] : (function () { throw new RuntimeError('Variable "onelabo" does not exist.', 88, $this->source); })()), "id", [], "any", false, false, false, 88)]), "html", null, true);
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
        return "laboratory/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 88,  218 => 87,  209 => 81,  202 => 77,  195 => 73,  188 => 69,  180 => 64,  172 => 59,  164 => 54,  153 => 46,  149 => 45,  108 => 6,  98 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Labo{% endblock %}
{% block titre_contenu %}Vue d'un laboratoire{% endblock %}
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
                    <h3 class=\"card-title\">Laboratoire</h3>
            
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
                                                            <li class=\"page-item noborder litext\"><a class=\"page-link\" data-role=\"button\" data-iconpos=\"left\" href=\"{{path('laboratory')}}\">Retour liste</a></li>
                                                            <li class=\"page-item\"><a class=\"page-link\" data-role=\"button\" data-icon=\"arrow-l\" data-iconpos=\"left\" href=\"{{path('laboratory')}}\">></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                    <table class=\"table table-responsive-md table-condensed\">
                                                        <tr>
                                                            <th class=\"fieldrequired\">#</th>
                                                            <td>
                                                                <div class=\"refid\">{{onelabo.id}}</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">Nom du laboratoire</th>
                                                            <td>{{onelabo.namelaboratory}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">Code</td>
                                                                <td>
                                                                    {{onelabo.codelaboratory}}
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">Date de création :</th>
                                                            <td>{{onelabo.creele is not null ? onelabo.creele|date(\"d/m/Y H:i:s\") : onelabo.creele}} </td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">Cré(e) Par :</th>
                                                            <td>{{onelabo.creePar}} </td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">Date de modifcation :</th>
                                                            <td>{{onelabo.modifieLe is not null ? onelabo.modifieLe|date(\"d/m/Y H:i:s\") : onelabo.modifieLe}} </td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">Modifié(e) Par :</th>
                                                            <td>{{onelabo.modifiePar}} </td>
                                                        </tr>
                                                    </table>
                                                <br>
                                                <div class=\"clearfix\">
                                                    <div class=\"float-right\">
                                                        <div class=\"float-right\"><a class=\"btn btn-outline-success\" href=\"{{path('edit_laboratory',{'id': onelabo.id})}}\">Modifier</a>&nbsp;&nbsp;
                                                            <a class=\"btn btn-outline-danger\" href=\"{{ path('delete_laboratory', {'id': onelabo.id}) }}\">Supprimer</a></div>
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
  




           

", "laboratory/view.html.twig", "/var/www/html/eric/psi/templates/laboratory/view.html.twig");
    }
}
