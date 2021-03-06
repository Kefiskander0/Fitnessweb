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

/* back/add-diets.html.twig */
class __TwigTemplate_3f51e40e5d63add8b956213bb36e4a7f968ab6659fd0107822460424defe1b34 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/add-diets.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/add-diets.html.twig"));

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

<body>
    <!-- Left Panel -->
    ";
        // line 36
        echo twig_include($this->env, $context, "back/nut-barre.html.twig");
        echo "

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id=\"right-panel\" class=\"right-panel\">

        <!-- Header-->
        <header id=\"header\" class=\"header\">

            <div class=\"header-menu\">

                <div class=\"col-sm-7\">
                    <a id=\"menuToggle\" class=\"menutoggle pull-left\"><i class=\"fa fa fa-tasks\"></i></a>
                    <div class=\"header-left\">
                        <button class=\"search-trigger\"><i class=\"fa fa-search\"></i></button>
                        <div class=\"form-inline\">
                            <form class=\"search-form\">
                                <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search ...\" aria-label=\"Search\">
                                <button class=\"search-close\" type=\"submit\"><i class=\"fa fa-close\"></i></button>
                            </form>
                        </div>

                        <div class=\"dropdown for-notification\">
                            <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"notification\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fa fa-bell\"></i>
                                <span class=\"count bg-danger\">5</span>
                            </button>
                            <div class=\"dropdown-menu\" aria-labelledby=\"notification\">
                                <p class=\"red\">You have 3 Notification</p>
                                <a class=\"dropdown-item media bg-flat-color-1\" href=\"#\">
                                <i class=\"fa fa-check\"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                                <a class=\"dropdown-item media bg-flat-color-4\" href=\"#\">
                                <i class=\"fa fa-info\"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                                <a class=\"dropdown-item media bg-flat-color-5\" href=\"#\">
                                <i class=\"fa fa-warning\"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                            </div>
                        </div>

                        <div class=\"dropdown for-message\">
                            <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\"
                                id=\"message\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"ti-email\"></i>
                                <span class=\"count bg-primary\">9</span>
                            </button>
                            <div class=\"dropdown-menu\" aria-labelledby=\"message\">
                                <p class=\"red\">You have 4 Mails</p>
                                <a class=\"dropdown-item media bg-flat-color-1\" href=\"#\">
                                <span class=\"photo media-left\"><img alt=\"avatar\" src=\"images/avatar/1.jpg\"></span>
                                <span class=\"message media-body\">
                                    <span class=\"name float-left\">Jonathan Smith</span>
                                    <span class=\"time float-right\">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class=\"dropdown-item media bg-flat-color-4\" href=\"#\">
                                <span class=\"photo media-left\"><img alt=\"avatar\" src=\"images/avatar/2.jpg\"></span>
                                <span class=\"message media-body\">
                                    <span class=\"name float-left\">Jack Sanders</span>
                                    <span class=\"time float-right\">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class=\"dropdown-item media bg-flat-color-5\" href=\"#\">
                                <span class=\"photo media-left\"><img alt=\"avatar\" src=\"images/avatar/3.jpg\"></span>
                                <span class=\"message media-body\">
                                    <span class=\"name float-left\">Cheryl Wheeler</span>
                                    <span class=\"time float-right\">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class=\"dropdown-item media bg-flat-color-3\" href=\"#\">
                                <span class=\"photo media-left\"><img alt=\"avatar\" src=\"images/avatar/4.jpg\"></span>
                                <span class=\"message media-body\">
                                    <span class=\"name float-left\">Rachel Santos</span>
                                    <span class=\"time float-right\">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-5\">
                    <div class=\"user-area dropdown float-right\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <img class=\"user-avatar rounded-circle\" src=\"images/admin.jpg\" alt=\"User Avatar\">
                        </a>

                        <div class=\"user-menu dropdown-menu\">
                            <a class=\"nav-link\" href=\"#\"><i class=\"fa fa-user\"></i> My Profile</a>

                            <a class=\"nav-link\" href=\"#\"><i class=\"fa fa-user\"></i> Notifications <span class=\"count\">13</span></a>

                            <a class=\"nav-link\" href=\"#\"><i class=\"fa fa-cog\"></i> Settings</a>

                            <a class=\"nav-link\" href=\"#\"><i class=\"fa fa-power-off\"></i> Logout</a>
                        </div>
                    </div>

                    <div class=\"language-select dropdown\" id=\"language-select\">
                        <a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\"  id=\"language\" aria-haspopup=\"true\" aria-expanded=\"true\">
                            <i class=\"flag-icon flag-icon-us\"></i>
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"language\">
                            <div class=\"dropdown-item\">
                                <span class=\"flag-icon flag-icon-fr\"></span>
                            </div>
                            <div class=\"dropdown-item\">
                                <i class=\"flag-icon flag-icon-es\"></i>
                            </div>
                            <div class=\"dropdown-item\">
                                <i class=\"flag-icon flag-icon-us\"></i>
                            </div>
                            <div class=\"dropdown-item\">
                                <i class=\"flag-icon flag-icon-it\"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class=\"breadcrumbs\">
            <div class=\"col-sm-4\">
                <div class=\"page-header float-left\">
                    <div class=\"page-title\">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-8\">
                <div class=\"page-header float-right\">
                    <div class=\"page-title\">
                        <ol class=\"breadcrumb text-right\">
                            <li><a href=\"#\">Dashboard</a></li>
                            <li><a href=\"#\">Forms</a></li>
                            <li class=\"active\">Basic</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        ";
        // line 240
        echo "                                        </div><!-- .animated -->
                                    </div><!-- .content -->
                                </div><!-- /#right-panel --></center>
                                <!-- Right Panel -->


                            <script src=\"vendors/jquery/dist/jquery.min.js\"></script>
                            <script src=\"vendors/popper.js/dist/umd/popper.min.js\"></script>

                            <script src=\"vendors/jquery-validation/dist/jquery.validate.min.js\"></script>
                            <script src=\"vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js\"></script>

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
        return "back/add-diets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 240,  80 => 36,  43 => 1,);
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

<body>
    <!-- Left Panel -->
    {{ include('back/nut-barre.html.twig') }}

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id=\"right-panel\" class=\"right-panel\">

        <!-- Header-->
        <header id=\"header\" class=\"header\">

            <div class=\"header-menu\">

                <div class=\"col-sm-7\">
                    <a id=\"menuToggle\" class=\"menutoggle pull-left\"><i class=\"fa fa fa-tasks\"></i></a>
                    <div class=\"header-left\">
                        <button class=\"search-trigger\"><i class=\"fa fa-search\"></i></button>
                        <div class=\"form-inline\">
                            <form class=\"search-form\">
                                <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search ...\" aria-label=\"Search\">
                                <button class=\"search-close\" type=\"submit\"><i class=\"fa fa-close\"></i></button>
                            </form>
                        </div>

                        <div class=\"dropdown for-notification\">
                            <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"notification\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fa fa-bell\"></i>
                                <span class=\"count bg-danger\">5</span>
                            </button>
                            <div class=\"dropdown-menu\" aria-labelledby=\"notification\">
                                <p class=\"red\">You have 3 Notification</p>
                                <a class=\"dropdown-item media bg-flat-color-1\" href=\"#\">
                                <i class=\"fa fa-check\"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                                <a class=\"dropdown-item media bg-flat-color-4\" href=\"#\">
                                <i class=\"fa fa-info\"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                                <a class=\"dropdown-item media bg-flat-color-5\" href=\"#\">
                                <i class=\"fa fa-warning\"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                            </div>
                        </div>

                        <div class=\"dropdown for-message\">
                            <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\"
                                id=\"message\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"ti-email\"></i>
                                <span class=\"count bg-primary\">9</span>
                            </button>
                            <div class=\"dropdown-menu\" aria-labelledby=\"message\">
                                <p class=\"red\">You have 4 Mails</p>
                                <a class=\"dropdown-item media bg-flat-color-1\" href=\"#\">
                                <span class=\"photo media-left\"><img alt=\"avatar\" src=\"images/avatar/1.jpg\"></span>
                                <span class=\"message media-body\">
                                    <span class=\"name float-left\">Jonathan Smith</span>
                                    <span class=\"time float-right\">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class=\"dropdown-item media bg-flat-color-4\" href=\"#\">
                                <span class=\"photo media-left\"><img alt=\"avatar\" src=\"images/avatar/2.jpg\"></span>
                                <span class=\"message media-body\">
                                    <span class=\"name float-left\">Jack Sanders</span>
                                    <span class=\"time float-right\">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class=\"dropdown-item media bg-flat-color-5\" href=\"#\">
                                <span class=\"photo media-left\"><img alt=\"avatar\" src=\"images/avatar/3.jpg\"></span>
                                <span class=\"message media-body\">
                                    <span class=\"name float-left\">Cheryl Wheeler</span>
                                    <span class=\"time float-right\">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class=\"dropdown-item media bg-flat-color-3\" href=\"#\">
                                <span class=\"photo media-left\"><img alt=\"avatar\" src=\"images/avatar/4.jpg\"></span>
                                <span class=\"message media-body\">
                                    <span class=\"name float-left\">Rachel Santos</span>
                                    <span class=\"time float-right\">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-5\">
                    <div class=\"user-area dropdown float-right\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <img class=\"user-avatar rounded-circle\" src=\"images/admin.jpg\" alt=\"User Avatar\">
                        </a>

                        <div class=\"user-menu dropdown-menu\">
                            <a class=\"nav-link\" href=\"#\"><i class=\"fa fa-user\"></i> My Profile</a>

                            <a class=\"nav-link\" href=\"#\"><i class=\"fa fa-user\"></i> Notifications <span class=\"count\">13</span></a>

                            <a class=\"nav-link\" href=\"#\"><i class=\"fa fa-cog\"></i> Settings</a>

                            <a class=\"nav-link\" href=\"#\"><i class=\"fa fa-power-off\"></i> Logout</a>
                        </div>
                    </div>

                    <div class=\"language-select dropdown\" id=\"language-select\">
                        <a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\"  id=\"language\" aria-haspopup=\"true\" aria-expanded=\"true\">
                            <i class=\"flag-icon flag-icon-us\"></i>
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"language\">
                            <div class=\"dropdown-item\">
                                <span class=\"flag-icon flag-icon-fr\"></span>
                            </div>
                            <div class=\"dropdown-item\">
                                <i class=\"flag-icon flag-icon-es\"></i>
                            </div>
                            <div class=\"dropdown-item\">
                                <i class=\"flag-icon flag-icon-us\"></i>
                            </div>
                            <div class=\"dropdown-item\">
                                <i class=\"flag-icon flag-icon-it\"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class=\"breadcrumbs\">
            <div class=\"col-sm-4\">
                <div class=\"page-header float-left\">
                    <div class=\"page-title\">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-8\">
                <div class=\"page-header float-right\">
                    <div class=\"page-title\">
                        <ol class=\"breadcrumb text-right\">
                            <li><a href=\"#\">Dashboard</a></li>
                            <li><a href=\"#\">Forms</a></li>
                            <li class=\"active\">Basic</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        {#            <center class=\"col-lg-8\" >
                        <div class=\"card\">
                            <center><div class=\"card-header\">
                                <strong>Ajouter un r??gime</strong>
                            </div>
                            <div class=\"card-body card-block\">
                                <form action=\"\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                                    <div class=\"row form-group\">
                                        <div class=\"col col-md-3\"><label class=\" form-control-label\">Nom du client</label></div>
                                        <div class=\"col-12 col-md-9\">
                                            <p class=\"form-control-static\">Username</p>
                                        </div>
                                    </div>
                                    <div class=\"row form-group\">
                                        <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Nom de r??gime</label></div>
                                        <div class=\"col-12 col-md-9\"><input type=\"text\" id=\"text-input\" name=\"text-input\" placeholder=\"Text\" class=\"form-control\"><small class=\"form-text text-muted\">This is a help text</small></div>
                                    </div>
                                    <div class=\"row form-group\">
                                        <div class=\"col col-md-3\"><label for=\"text-input\" class=\" form-control-label\">Type de r??gime</label></div>
                                        <div class=\"col-12 col-md-9\">
                                            <select name=\"selectSm\" id=\"SelectLm\" class=\"form-control-sm form-control\">
                                                <option value=\"0\">Please select</option>
                                                <option value=\"1\">Option #1</option>
                                                <option value=\"2\">Option #2</option>
                                                <option value=\"3\">Option #3</option>
                                                <option value=\"4\">Option #4</option>
                                                <option value=\"5\">Option #5</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class=\"row form-group\">
                                        <div class=\"col col-md-3\"><label for=\"textarea-input\" class=\" form-control-label\">R??gime</label></div>
                                        <div class=\"col-12 col-md-9\"><textarea name=\"textarea-input\" id=\"textarea-input\" rows=\"9\" placeholder=\"Content...\" class=\"form-control\"></textarea></div>
                                    </div>

                            <div class=\"card-footer\">
                                <button type=\"submit\" class=\"btn btn-primary btn-sm\">
                                    <i class=\"fa fa-dot-circle-o\"></i> Submit
                                </button>
                                <button type=\"reset\" class=\"btn btn-danger btn-sm\">
                                    <i class=\"fa fa-ban\"></i> Reset
                                </button>
                            </div>
                        </div>
                        </div> #}
                                        </div><!-- .animated -->
                                    </div><!-- .content -->
                                </div><!-- /#right-panel --></center>
                                <!-- Right Panel -->


                            <script src=\"vendors/jquery/dist/jquery.min.js\"></script>
                            <script src=\"vendors/popper.js/dist/umd/popper.min.js\"></script>

                            <script src=\"vendors/jquery-validation/dist/jquery.validate.min.js\"></script>
                            <script src=\"vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js\"></script>

                            <script src=\"vendors/bootstrap/dist/js/bootstrap.min.js\"></script>
                            <script src=\"assets/js/main.js\"></script>
</body>
</html>
", "back/add-diets.html.twig", "/home/skander/Downloads/fitnessnyi_web-main (1)/fitnessnyi_web-main/templates/back/add-diets.html.twig");
    }
}
