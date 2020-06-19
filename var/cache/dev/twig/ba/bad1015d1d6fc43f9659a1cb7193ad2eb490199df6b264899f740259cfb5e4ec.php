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

/* base.html.twig */
class __TwigTemplate_ae7ebbbc328b1a624e9653d1339de64e2eab3926a9f96511cc74e61726aca5d8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"https://fonts.googleapis.com/css?family=Comfortaa:300,400,500,600,700&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap\"
        rel=\"stylesheet\" type='text/css' media='all' />
    
        <!-- Font Awesome Icons -->
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/plugins/fontawesome-free/css/all.min.css\">
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\"> 
        
        <!-- Daterange picker -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/dist/css/jquery-ui-timepicker-addon.css\">
        
        <!-- Select2 -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/plugins/select2/css/select2.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css\">
        
        <!-- bootstrap 4 
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/dist/css/bootstrap.min.css\">-->
        
        <!-- Tempusdominus -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css\">
        
        <!-- Theme style -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/dist/css/adminlte.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/dist/css/bootstrap-datepicker.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/dist/css/custom.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/dist/css/animate.css\">

        <!-- jQuery -->
        <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/plugins/jquery/jquery.js\"></script>
        
        <!-- popper -->
        <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/plugins/popper/popper.js\"></script>
        
        <!-- Bootstrap 4 -->
        <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/plugins/bootstrap/js/bootstrap.js\"></script>
        
        <!--<script src=\"template/dist/js/bootstrap-datepicker.min.js\"></script>-->
        <!-- daterangepicker -->
        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/plugins/moment/moment.min.js\"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js\"></script>
        
        <!-- DataTables -->
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/plugins/datatables/jquery.dataTables.js\"></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/plugins/datatables-bs4/js/dataTables.bootstrap4.js\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/dist/js/datatables.buttons.min.js\"></script>
        <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/dist/js/buttons.flash.min.js\"></script>
        <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/dist/js/jszip.min.js\"></script>
        <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/dist/js/pdfmake.min.js\"></script>
        <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/dist/js/vfs_fonts.js\"></script>
        <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/dist/js/buttons.html5.min.js\"></script>
        <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/dist/js/buttons.print.min.js\"></script>

        <!-- Select2 -->
        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/plugins/select2/js/select2.full.min.js\"></script>
        <!-- SweetAlert2 -->
        <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/plugins/sweetalert2/sweetalert2.min.js\"></script>   

        <!-- date picker 
        <script src=\"../template/dist/js/bootstrap-datepicker.js\"></script>-->
        
        <!-- AdminLTE App -->
        <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/dist/js/adminlte.js\"></script>
        <!-- <script src=\"../template/dist/js/demo.js\"></script> -->

        <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/dist/js/custom.js\"></script> 
        
        ";
        // line 73
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 74
        echo "    </head>
        <body id=\"swup\" class=\"transition-fade hold-transition sidebar-mini\" onload=\"autoclick();\">
            <div class=\"wrapper\">
                ";
        // line 77
        $this->loadTemplate("default/navbar.html.twig", "base.html.twig", 77)->display($context);
        // line 78
        echo "                ";
        $this->loadTemplate("default/sidebar.html.twig", "base.html.twig", 78)->display($context);
        // line 79
        echo "                <div>
                  <div id=\"myNav\" class=\"op-overlay\">
                    <div class=\"op-overlay-content\">
                      <a href=\"\"></a>
                    </div>
                  </div>
                </div>           
                    <div class=\"animated fadeInUp delay-1s content op-content\">
                        ";
        // line 87
        $this->displayBlock('body', $context, $blocks);
        // line 88
        echo "                    </div>
                </div>
            </div>
        ";
        // line 91
        $this->displayBlock('javascripts', $context, $blocks);
        // line 160
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "            <script>
  \$(function () {
    //Initialize Select2 Elements
    \$('.select2').select2()

    //Datemask dd/mm/yyyy
    \$('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    \$('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    \$('[data-mask]').inputmask()

    //Date range picker
    \$('#reservation').daterangepicker()
    //Date range picker with time picker
    \$('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, locale: { format: 'MM/DD/YYYY hh:mm A' }})
    //Date range as a button
    \$('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        \$('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    \$('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    \$('input[type=\"checkbox\"].minimal, input[type=\"radio\"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    \$('input[type=\"checkbox\"].minimal-red, input[type=\"radio\"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    \$('input[type=\"checkbox\"].flat-red, input[type=\"radio\"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    \$('.my-colorpicker1').colorpicker()
    //color picker with addon
    \$('.my-colorpicker2').colorpicker()

    //Timepicker
    \$('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 92,  306 => 91,  288 => 87,  270 => 73,  251 => 5,  239 => 160,  237 => 91,  232 => 88,  230 => 87,  220 => 79,  217 => 78,  215 => 77,  210 => 74,  208 => 73,  203 => 71,  197 => 68,  188 => 62,  183 => 60,  177 => 57,  173 => 56,  169 => 55,  165 => 54,  161 => 53,  157 => 52,  153 => 51,  149 => 50,  145 => 49,  139 => 46,  134 => 44,  127 => 40,  121 => 37,  115 => 34,  109 => 31,  105 => 30,  101 => 29,  97 => 28,  91 => 25,  85 => 22,  79 => 19,  75 => 18,  69 => 15,  62 => 11,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link href=\"https://fonts.googleapis.com/css?family=Comfortaa:300,400,500,600,700&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap\"
        rel=\"stylesheet\" type='text/css' media='all' />
    
        <!-- Font Awesome Icons -->
        <link rel=\"stylesheet\" href=\"{{server_url()}}/plugins/fontawesome-free/css/all.min.css\">
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\"> 
        
        <!-- Daterange picker -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{server_url()}}/dist/css/jquery-ui-timepicker-addon.css\">
        
        <!-- Select2 -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{server_url()}}/plugins/select2/css/select2.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{server_url()}}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css\">
        
        <!-- bootstrap 4 
        <link rel=\"stylesheet\" href=\"{{server_url()}}/dist/css/bootstrap.min.css\">-->
        
        <!-- Tempusdominus -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{server_url()}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css\">
        
        <!-- Theme style -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{server_url()}}/dist/css/adminlte.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{server_url()}}/dist/css/bootstrap-datepicker.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{server_url()}}/dist/css/custom.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{server_url()}}/dist/css/animate.css\">

        <!-- jQuery -->
        <script src=\"{{server_url()}}/plugins/jquery/jquery.js\"></script>
        
        <!-- popper -->
        <script src=\"{{server_url()}}/plugins/popper/popper.js\"></script>
        
        <!-- Bootstrap 4 -->
        <script src=\"{{server_url()}}/plugins/bootstrap/js/bootstrap.js\"></script>
        
        <!--<script src=\"template/dist/js/bootstrap-datepicker.min.js\"></script>-->
        <!-- daterangepicker -->
        <script src=\"{{server_url()}}/plugins/moment/moment.min.js\"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src=\"{{server_url()}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js\"></script>
        
        <!-- DataTables -->
        <script src=\"{{server_url()}}/plugins/datatables/jquery.dataTables.js\"></script>
        <script src=\"{{server_url()}}/plugins/datatables-bs4/js/dataTables.bootstrap4.js\"></script>
        <script src=\"{{server_url()}}/dist/js/datatables.buttons.min.js\"></script>
        <script src=\"{{server_url()}}/dist/js/buttons.flash.min.js\"></script>
        <script src=\"{{server_url()}}/dist/js/jszip.min.js\"></script>
        <script src=\"{{server_url()}}/dist/js/pdfmake.min.js\"></script>
        <script src=\"{{server_url()}}/dist/js/vfs_fonts.js\"></script>
        <script src=\"{{server_url()}}/dist/js/buttons.html5.min.js\"></script>
        <script src=\"{{server_url()}}/dist/js/buttons.print.min.js\"></script>

        <!-- Select2 -->
        <script src=\"{{server_url()}}/plugins/select2/js/select2.full.min.js\"></script>
        <!-- SweetAlert2 -->
        <script src=\"{{server_url()}}/plugins/sweetalert2/sweetalert2.min.js\"></script>   

        <!-- date picker 
        <script src=\"../template/dist/js/bootstrap-datepicker.js\"></script>-->
        
        <!-- AdminLTE App -->
        <script src=\"{{server_url()}}/dist/js/adminlte.js\"></script>
        <!-- <script src=\"../template/dist/js/demo.js\"></script> -->

        <script src=\"{{server_url()}}/dist/js/custom.js\"></script> 
        
        {% block stylesheets %}{% endblock %}
    </head>
        <body id=\"swup\" class=\"transition-fade hold-transition sidebar-mini\" onload=\"autoclick();\">
            <div class=\"wrapper\">
                {% include 'default/navbar.html.twig' %}
                {% include 'default/sidebar.html.twig' %}
                <div>
                  <div id=\"myNav\" class=\"op-overlay\">
                    <div class=\"op-overlay-content\">
                      <a href=\"\"></a>
                    </div>
                  </div>
                </div>           
                    <div class=\"animated fadeInUp delay-1s content op-content\">
                        {% block body %}{% endblock %}
                    </div>
                </div>
            </div>
        {% block javascripts %}
            <script>
  \$(function () {
    //Initialize Select2 Elements
    \$('.select2').select2()

    //Datemask dd/mm/yyyy
    \$('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    \$('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    \$('[data-mask]').inputmask()

    //Date range picker
    \$('#reservation').daterangepicker()
    //Date range picker with time picker
    \$('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, locale: { format: 'MM/DD/YYYY hh:mm A' }})
    //Date range as a button
    \$('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        \$('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    \$('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    \$('input[type=\"checkbox\"].minimal, input[type=\"radio\"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    \$('input[type=\"checkbox\"].minimal-red, input[type=\"radio\"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    \$('input[type=\"checkbox\"].flat-red, input[type=\"radio\"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    \$('.my-colorpicker1').colorpicker()
    //color picker with addon
    \$('.my-colorpicker2').colorpicker()

    //Timepicker
    \$('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/eric/psi/templates/base.html.twig");
    }
}
