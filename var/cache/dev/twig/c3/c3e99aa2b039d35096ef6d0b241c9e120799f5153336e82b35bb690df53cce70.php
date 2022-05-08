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

/* back/pages-forget.html.twig */
class __TwigTemplate_9be94824f2e7a46710ca7a843220ed478bae79eb82f8b7c5aec3ae4577c97c85 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/pages-forget.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/pages-forget.html.twig"));

        // line 1
        echo "<!doctype html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\" lang=\"\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\" lang=\"\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=\"no-js\" lang=\"en\">
<!--<![endif]-->

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name=\"description\" content=\"Sufee Admin - HTML5 Admin Template\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel=\"apple-touch-icon\" href=\"apple-icon.png\">
    <link rel=\"shortcut icon\" href=\"favicon.ico\">


    <link rel=\"stylesheet\" href=\"vendors/bootstrap/dist/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"vendors/font-awesome/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"vendors/themify-icons/css/themify-icons.css\">
    <link rel=\"stylesheet\" href=\"vendors/flag-icon-css/css/flag-icon.min.css\">
    <link rel=\"stylesheet\" href=\"vendors/selectFX/css/cs-skin-elastic.css\">

    <link rel=\"stylesheet\" href=\"assets/css/style.css\">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class=\"bg-dark\">


    <div class=\"sufee-login d-flex align-content-center flex-wrap\">
        <div class=\"container\">
            <div class=\"login-content\">
                <div class=\"login-logo\">
                    <a href=\"index.html\">
                        <img class=\"align-content\" src=\"images/logo.png\" alt=\"\">
                    </a>
                </div>
                <div class=\"login-form\">
                    <form>
                        <div class=\"form-group\">
                            <label>Email address</label>
                            <input type=\"email\" class=\"form-control\" placeholder=\"Email\">
                        </div>
                            <button type=\"submit\" class=\"btn btn-primary btn-flat m-b-15\">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src=\"vendors/jquery/dist/jquery.min.js\"></script>
    <script src=\"vendors/popper.js/dist/umd/popper.min.js\"></script>
    <script src=\"vendors/bootstrap/dist/js/bootstrap.min.js\"></script>
    <script src=\"assets/js/main.js\"></script>


</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "back/pages-forget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\" lang=\"\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\" lang=\"\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=\"no-js\" lang=\"en\">
<!--<![endif]-->

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name=\"description\" content=\"Sufee Admin - HTML5 Admin Template\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel=\"apple-touch-icon\" href=\"apple-icon.png\">
    <link rel=\"shortcut icon\" href=\"favicon.ico\">


    <link rel=\"stylesheet\" href=\"vendors/bootstrap/dist/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"vendors/font-awesome/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"vendors/themify-icons/css/themify-icons.css\">
    <link rel=\"stylesheet\" href=\"vendors/flag-icon-css/css/flag-icon.min.css\">
    <link rel=\"stylesheet\" href=\"vendors/selectFX/css/cs-skin-elastic.css\">

    <link rel=\"stylesheet\" href=\"assets/css/style.css\">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class=\"bg-dark\">


    <div class=\"sufee-login d-flex align-content-center flex-wrap\">
        <div class=\"container\">
            <div class=\"login-content\">
                <div class=\"login-logo\">
                    <a href=\"index.html\">
                        <img class=\"align-content\" src=\"images/logo.png\" alt=\"\">
                    </a>
                </div>
                <div class=\"login-form\">
                    <form>
                        <div class=\"form-group\">
                            <label>Email address</label>
                            <input type=\"email\" class=\"form-control\" placeholder=\"Email\">
                        </div>
                            <button type=\"submit\" class=\"btn btn-primary btn-flat m-b-15\">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src=\"vendors/jquery/dist/jquery.min.js\"></script>
    <script src=\"vendors/popper.js/dist/umd/popper.min.js\"></script>
    <script src=\"vendors/bootstrap/dist/js/bootstrap.min.js\"></script>
    <script src=\"assets/js/main.js\"></script>


</body>

</html>
", "back/pages-forget.html.twig", "/home/skander/Downloads/fitnessnyi_web-main (1)/fitnessnyi_web-main/templates/back/pages-forget.html.twig");
    }
}
