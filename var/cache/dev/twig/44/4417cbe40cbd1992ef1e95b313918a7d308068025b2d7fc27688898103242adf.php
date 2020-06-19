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

/* family/view.html.twig */
class __TwigTemplate_f3b26249abdf7f4cd81473b7aaa64fac96bb54545c816e41dbfb4d7d892e8198 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "family/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "family/view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "family/view.html.twig", 1);
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

        echo "Famille";
        
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

        echo "Vue d'une famille";
        
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
                        <h1>Detail d'une</h1>
                    </div>
                    </div>
                </div>
                </section>
            
                
                <section class=\"content\">
            
                
                <div class=\"card\">
                    <div class=\"card-header\">
                    <h3 class=\"card-title\">Famille-Categorie</h3>
            
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["onefamily"]) || array_key_exists("onefamily", $context) ? $context["onefamily"] : (function () { throw new RuntimeError('Variable "onefamily" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55), "html", null, true);
        echo "</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">libelle</th>
                                                            <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["onefamily"]) || array_key_exists("onefamily", $context) ? $context["onefamily"] : (function () { throw new RuntimeError('Variable "onefamily" does not exist.', 60, $this->source); })()), "libelle", [], "any", false, false, false, 60), "html", null, true);
        echo "</td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">Code</td>
                                                                <td>
                                                                    ";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["onefamily"]) || array_key_exists("onefamily", $context) ? $context["onefamily"] : (function () { throw new RuntimeError('Variable "onefamily" does not exist.', 65, $this->source); })()), "codefamily", [], "any", false, false, false, 65), "html", null, true);
        echo "
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">Date de création :</th>
                                                            <td>";
        // line 70
        echo twig_escape_filter($this->env, (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["onefamily"]) || array_key_exists("onefamily", $context) ? $context["onefamily"] : (function () { throw new RuntimeError('Variable "onefamily" does not exist.', 70, $this->source); })()), "creeLe", [], "any", false, false, false, 70))) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["onefamily"]) || array_key_exists("onefamily", $context) ? $context["onefamily"] : (function () { throw new RuntimeError('Variable "onefamily" does not exist.', 70, $this->source); })()), "creele", [], "any", false, false, false, 70), "d/m/Y H:i:s")) : (twig_get_attribute($this->env, $this->source, (isset($context["onefamily"]) || array_key_exists("onefamily", $context) ? $context["onefamily"] : (function () { throw new RuntimeError('Variable "onefamily" does not exist.', 70, $this->source); })()), "creele", [], "any", false, false, false, 70))), "html", null, true);
        echo " </td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">Cré(e) Par :</th>
                                                            <td>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["onefamily"]) || array_key_exists("onefamily", $context) ? $context["onefamily"] : (function () { throw new RuntimeError('Variable "onefamily" does not exist.', 74, $this->source); })()), "creePar", [], "any", false, false, false, 74), "html", null, true);
        echo " </td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">Date de modifcation :</th>
                                                            <td>";
        // line 78
        echo twig_escape_filter($this->env, (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["onefamily"]) || array_key_exists("onefamily", $context) ? $context["onefamily"] : (function () { throw new RuntimeError('Variable "onefamily" does not exist.', 78, $this->source); })()), "modifieLe", [], "any", false, false, false, 78))) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["onefamily"]) || array_key_exists("onefamily", $context) ? $context["onefamily"] : (function () { throw new RuntimeError('Variable "onefamily" does not exist.', 78, $this->source); })()), "modifieLe", [], "any", false, false, false, 78), "d/m/Y H:i:s")) : (twig_get_attribute($this->env, $this->source, (isset($context["onefamily"]) || array_key_exists("onefamily", $context) ? $context["onefamily"] : (function () { throw new RuntimeError('Variable "onefamily" does not exist.', 78, $this->source); })()), "modifieLe", [], "any", false, false, false, 78))), "html", null, true);
        echo " </td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">Modifié(e) Par :</th>
                                                            <td>";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["onefamily"]) || array_key_exists("onefamily", $context) ? $context["onefamily"] : (function () { throw new RuntimeError('Variable "onefamily" does not exist.', 82, $this->source); })()), "modifiePar", [], "any", false, false, false, 82), "html", null, true);
        echo " </td>
                                                        </tr>
                                                    </table>
                                                <br>
                                                <div class=\"clearfix\">
                                                    <div class=\"float-right\">
                                                        <div class=\"float-right\"><a class=\"btn btn-outline-success\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("family_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["onefamily"]) || array_key_exists("onefamily", $context) ? $context["onefamily"] : (function () { throw new RuntimeError('Variable "onefamily" does not exist.', 88, $this->source); })()), "id", [], "any", false, false, false, 88)]), "html", null, true);
        echo "\">Modifier</a>&nbsp;&nbsp;
                                                            <a class=\"btn btn-outline-danger\" href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("family_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["onefamily"]) || array_key_exists("onefamily", $context) ? $context["onefamily"] : (function () { throw new RuntimeError('Variable "onefamily" does not exist.', 89, $this->source); })()), "id", [], "any", false, false, false, 89)]), "html", null, true);
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
        return "family/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 89,  219 => 88,  210 => 82,  203 => 78,  196 => 74,  189 => 70,  181 => 65,  173 => 60,  165 => 55,  153 => 46,  149 => 45,  108 => 6,  98 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Famille{% endblock %}
{% block titre_contenu %}Vue d'une famille{% endblock %}
{% block body %}
        <body class=\"sidebar-mini sidebar-collapse\" style=\"height: auto;\">
            <div class=\"wrapper\">
            <div class=\"content-wrapper\" style=\"min-height: 1416.81px;\">
                
                <section class=\"content-header\">
                <div class=\"container-fluid\">
                    <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1>Detail d'une</h1>
                    </div>
                    </div>
                </div>
                </section>
            
                
                <section class=\"content\">
            
                
                <div class=\"card\">
                    <div class=\"card-header\">
                    <h3 class=\"card-title\">Famille-Categorie</h3>
            
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
                                                                <div class=\"refid\">{{onefamily.id}}</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">libelle</th>
                                                            <td>{{onefamily.libelle}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">Code</td>
                                                                <td>
                                                                    {{onefamily.codefamily}}
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">Date de création :</th>
                                                            <td>{{onefamily.creeLe is not null ? onefamily.creele|date(\"d/m/Y H:i:s\") : onefamily.creele}} </td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">Cré(e) Par :</th>
                                                            <td>{{onefamily.creePar}} </td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">Date de modifcation :</th>
                                                            <td>{{onefamily.modifieLe is not null ? onefamily.modifieLe|date(\"d/m/Y H:i:s\") : onefamily.modifieLe}} </td>
                                                        </tr>
                                                        <tr>
                                                            <th class=\"nowrap\">Modifié(e) Par :</th>
                                                            <td>{{onefamily.modifiePar}} </td>
                                                        </tr>
                                                    </table>
                                                <br>
                                                <div class=\"clearfix\">
                                                    <div class=\"float-right\">
                                                        <div class=\"float-right\"><a class=\"btn btn-outline-success\" href=\"{{path('family_edit',{'id': onefamily.id}) }}\">Modifier</a>&nbsp;&nbsp;
                                                            <a class=\"btn btn-outline-danger\" href=\"{{ path('family_delete', {'id': onefamily.id}) }}\">Supprimer</a></div>
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
  




           

", "family/view.html.twig", "/var/www/html/eric/psi/templates/family/view.html.twig");
    }
}
