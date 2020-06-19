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

/* security/login.html.twig */
class __TwigTemplate_ffba02ed13ce2ae1b6657cec8865a3abefc269f8384bccea85c2a9a670115e1a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Pharmaplus</title>
    <link rel=\"icon\" type=\"image/png\" href=\"img/favicon.png\" />
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/plugins/fontawesome-free/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/plugins/daterangepicker/daterangepicker.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/plugins/select2/css/select2.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/dist/css/adminlte.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Comfortaa:300,400,500,600,700&display=swap\" rel=\"stylesheet\">
    <link
        href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap\"
        rel=\"stylesheet\" type='text/css' media='all' />

";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "
</head>

 ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 67
        echo " <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/plugins/jquery/jquery.min.js\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/dist/js/adminlte.min.js\"></script>

 ";
        // line 71
        $this->displayBlock('javascripts', $context, $blocks);
        // line 72
        echo "
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
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

    // line 25
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo " <body class=\"hold-transition login-page\">
    <div class=\"login-box\">
        <div class=\"card\">
            <div class=\"card-body login-card-body\">
                <div class=\"login-logo mb-4\">
                    <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\Extension\ServerExtension']->getServerUrl(), "html", null, true);
        echo "/images/c.png\" alt=\"logo Openflex\">
                </div>

<form method=\"post\">
    ";
        // line 35
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 35, $this->source); })())) {
            // line 36
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 36, $this->source); })()), "messageKey", [], "any", false, false, false, 36), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 36, $this->source); })()), "messageData", [], "any", false, false, false, 36), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 38
        echo "
    <div class=\"input-group mb-3\">
    
        <input type=\"text\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Utilisateur\" name=\"email\" id=\"email\" class=\"form-control\" required autofocus>
        <div class=\"input-group-append\">
            <div class=\"input-group-text\">
                <span class=\"fas fa-user\"></span>
            </div>
        </div>
    </div>
    <div class=\"input-group mb-4\">
        <input type=\"password\" placeholder=\"Password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>
        <div class=\"input-group-append\">
            <div class=\"input-group-text\">
                <span class=\"fas fa-lock\"></span>
            </div>
        </div>
    </div>
    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("authenticate"), "html", null, true);
        echo "\">
    <div class=\"row\">
        <div class=\"col-12\">
            <button class=\"btn btn-outline-primary btn-block\" type=\"submit\">
                Sign in
            </button>
        </div>
    </div>
</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 71,  197 => 57,  178 => 41,  173 => 38,  167 => 36,  165 => 35,  158 => 31,  151 => 26,  141 => 25,  123 => 21,  111 => 72,  109 => 71,  104 => 69,  100 => 68,  95 => 67,  93 => 25,  88 => 22,  86 => 21,  77 => 15,  73 => 14,  69 => 13,  65 => 12,  61 => 11,  57 => 10,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Pharmaplus</title>
    <link rel=\"icon\" type=\"image/png\" href=\"img/favicon.png\" />
    <link rel=\"stylesheet\" href=\"{{server_url()}}/plugins/fontawesome-free/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"{{server_url()}}/plugins/daterangepicker/daterangepicker.css\">
    <link rel=\"stylesheet\" href=\"{{server_url()}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css\">
    <link rel=\"stylesheet\" href=\"{{server_url()}}/plugins/select2/css/select2.min.css\">
    <link rel=\"stylesheet\" href=\"{{server_url()}}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css\">
    <link rel=\"stylesheet\" href=\"{{server_url()}}/dist/css/adminlte.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Comfortaa:300,400,500,600,700&display=swap\" rel=\"stylesheet\">
    <link
        href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap\"
        rel=\"stylesheet\" type='text/css' media='all' />

{% block stylesheets %}{% endblock %}

</head>

 {% block body %}
 <body class=\"hold-transition login-page\">
    <div class=\"login-box\">
        <div class=\"card\">
            <div class=\"card-body login-card-body\">
                <div class=\"login-logo mb-4\">
                    <img src=\"{{server_url()}}/images/c.png\" alt=\"logo Openflex\">
                </div>

<form method=\"post\">
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    <div class=\"input-group mb-3\">
    
        <input type=\"text\" value=\"{{ last_username }}\" placeholder=\"Utilisateur\" name=\"email\" id=\"email\" class=\"form-control\" required autofocus>
        <div class=\"input-group-append\">
            <div class=\"input-group-text\">
                <span class=\"fas fa-user\"></span>
            </div>
        </div>
    </div>
    <div class=\"input-group mb-4\">
        <input type=\"password\" placeholder=\"Password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>
        <div class=\"input-group-append\">
            <div class=\"input-group-text\">
                <span class=\"fas fa-lock\"></span>
            </div>
        </div>
    </div>
    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"{{ csrf_token('authenticate') }}\">
    <div class=\"row\">
        <div class=\"col-12\">
            <button class=\"btn btn-outline-primary btn-block\" type=\"submit\">
                Sign in
            </button>
        </div>
    </div>
</form>
{% endblock %}
 <script src=\"{{server_url()}}/plugins/jquery/jquery.min.js\"></script>
    <script src=\"{{server_url()}}/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <script src=\"{{server_url()}}/dist/js/adminlte.min.js\"></script>

 {% block javascripts %}{% endblock %}

</body>
</html>", "security/login.html.twig", "/var/www/html/eric/psi/templates/security/login.html.twig");
    }
}
