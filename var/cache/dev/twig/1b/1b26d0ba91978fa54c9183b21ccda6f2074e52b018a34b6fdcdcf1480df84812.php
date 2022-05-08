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

/* back/maps-vector.html.twig */
class __TwigTemplate_434f4de9f61de4f072436ec2d3b0d670d559fc3a960a3569211228452913b25e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/maps-vector.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/maps-vector.html.twig"));

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

    <link rel=\"stylesheet\" href=\"vendors/jqvmap/dist/jqvmap.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/style.css\">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <!-- Left Panel -->

    <aside id=\"left-panel\" class=\"left-panel\">
        <nav class=\"navbar navbar-expand-sm navbar-default\">

            <div class=\"navbar-header\">
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#main-menu\" aria-controls=\"main-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <i class=\"fa fa-bars\"></i>
                </button>
                <a class=\"navbar-brand\" href=\"./\"><img src=\"images/logo.png\" alt=\"Logo\"></a>
                <a class=\"navbar-brand hidden\" href=\"./\"><img src=\"images/logo2.png\" alt=\"Logo\"></a>
            </div>

            <div id=\"main-menu\" class=\"main-menu collapse navbar-collapse\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"index.html\"> <i class=\"menu-icon fa fa-dashboard\"></i>Dashboard </a>
                    </li>
                    <h3 class=\"menu-title\">UI elements</h3><!-- /.menu-title -->
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-laptop\"></i>Components</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"fa fa-puzzle-piece\"></i><a href=\"ui-buttons.html\">Buttons</a></li>
                            <li><i class=\"fa fa-id-badge\"></i><a href=\"ui-badges.html\">Badges</a></li>
                            <li><i class=\"fa fa-bars\"></i><a href=\"ui-tabs.html\">Tabs</a></li>
                            <li><i class=\"fa fa-share-square-o\"></i><a href=\"ui-social-buttons.html\">Social Buttons</a></li>
                            <li><i class=\"fa fa-id-card-o\"></i><a href=\"ui-cards.html\">Cards</a></li>
                            <li><i class=\"fa fa-exclamation-triangle\"></i><a href=\"ui-alerts.html\">Alerts</a></li>
                            <li><i class=\"fa fa-spinner\"></i><a href=\"ui-progressbar.html\">Progress Bars</a></li>
                            <li><i class=\"fa fa-fire\"></i><a href=\"ui-modals.html\">Modals</a></li>
                            <li><i class=\"fa fa-book\"></i><a href=\"ui-switches.html\">Switches</a></li>
                            <li><i class=\"fa fa-th\"></i><a href=\"ui-grids.html\">Grids</a></li>
                            <li><i class=\"fa fa-file-word-o\"></i><a href=\"ui-typgraphy.html\">Typography</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-table\"></i>Tables</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"fa fa-table\"></i><a href=\"tables-basic.html\">Basic Table</a></li>
                            <li><i class=\"fa fa-table\"></i><a href=\"tables-data.html\">Data Table</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-th\"></i>Forms</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-th\"></i><a href=\"forms-basic.html\">Basic Form</a></li>
                            <li><i class=\"menu-icon fa fa-th\"></i><a href=\"forms-advanced.html\">Advanced Form</a></li>
                        </ul>
                    </li>

                    <h3 class=\"menu-title\">Icons</h3><!-- /.menu-title -->

                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-tasks\"></i>Icons</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-fort-awesome\"></i><a href=\"font-fontawesome.html\">Font Awesome</a></li>
                            <li><i class=\"menu-icon ti-themify-logo\"></i><a href=\"font-themify.html\">Themefy Icons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"widgets.html\"> <i class=\"menu-icon ti-email\"></i>Widgets </a>
                    </li>
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-bar-chart\"></i>Charts</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-line-chart\"></i><a href=\"charts-chartjs.html\">Chart JS</a></li>
                            <li><i class=\"menu-icon fa fa-area-chart\"></i><a href=\"charts-flot.html\">Flot Chart</a></li>
                            <li><i class=\"menu-icon fa fa-pie-chart\"></i><a href=\"charts-peity.html\">Peity Chart</a></li>
                        </ul>
                    </li>

                    <li class=\"menu-item-has-children active dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-area-chart\"></i>Maps</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-map-o\"></i><a href=\"maps-gmap.html\">Google Maps</a></li>
                            <li><i class=\"menu-icon fa fa-street-view\"></i><a href=\"maps-vector.html\">Vector Maps</a></li>
                        </ul>
                    </li>
                    <h3 class=\"menu-title\">Extras</h3><!-- /.menu-title -->
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-glass\"></i>Pages</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-sign-in\"></i><a href=\"page-login.html\">Login</a></li>
                            <li><i class=\"menu-icon fa fa-sign-in\"></i><a href=\"page-register.html\">Register</a></li>
                            <li><i class=\"menu-icon fa fa-paper-plane\"></i><a href=\"pages-forget.html\">Forget Pass</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

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
                            <li><a href=\"#\">Map</a></li>
                            <li class=\"active\">Vector map</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"content mt-3\">
            <div class=\"animated fadeIn\">

                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4>World</h4>
                            </div>
                            <div class=\"Vector-map-js\">
                                <div id=\"vmap\" class=\"vmap\"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class=\"col-lg-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4>Algeria</h4>
                            </div>
                            <div class=\"Vector-map-js\">
                                <div id=\"vmap2\" class=\"vmap\"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class=\"col-lg-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4>Argentina</h4>
                            </div>
                            <div class=\"Vector-map-js\">
                                <div id=\"vmap3\" class=\"vmap\"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class=\"col-lg-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4>Brazil</h4>
                            </div>
                            <div class=\"Vector-map-js\">
                                <div id=\"vmap4\" class=\"vmap\"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class=\"col-lg-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4>France</h4>
                            </div>
                            <div class=\"Vector-map-js\">
                                <div id=\"vmap5\" class=\"vmap\"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class=\"col-lg-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4>Germany</h4>
                            </div>
                            <div class=\"Vector-map-js\">
                                <div id=\"vmap6\" class=\"vmap\"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class=\"col-lg-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4>Greece</h4>
                            </div>
                            <div class=\"Vector-map-js\">
                                <div id=\"vmap7\" class=\"vmap\"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class=\"col-lg-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4>Russia</h4>
                            </div>
                            <div class=\"Vector-map-js\">
                                <div id=\"vmap10\" class=\"vmap\"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class=\"col-lg-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4>Tunisia</h4>
                            </div>
                            <div class=\"Vector-map-js\">
                                <div id=\"vmap11\" class=\"vmap\"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class=\"col-lg-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4>Europe</h4>
                            </div>
                            <div class=\"Vector-map-js\">
                                <div id=\"vmap12\" class=\"vmap\"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class=\"col-lg-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4>USA</h4>
                            </div>
                            <div class=\"Vector-map-js\">
                                <div id=\"vmap13\" class=\"vmap\"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class=\"col-lg-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4>Turkey</h4>
                            </div>
                            <div class=\"Vector-map-js\">
                                <div id=\"vmap14\" class=\"vmap\"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class=\"col-lg-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4>Inactive Regions</h4>
                            </div>
                            <div class=\"Vector-map-js\">
                                <div id=\"vmap15\" class=\"vmap\"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->



                </div>
                <!-- /# row -->


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src=\"vendors/jquery/dist/jquery.min.js\"></script>
    <script src=\"vendors/popper.js/dist/umd/popper.min.js\"></script>
    <script src=\"vendors/bootstrap/dist/js/bootstrap.min.js\"></script>
    <script src=\"assets/js/main.js\"></script>

    <script src=\"vendors/jqvmap/dist/jquery.vmap.min.js\"></script>

    <script src=\"vendors/jqvmap/examples/js/jquery.vmap.sampledata.js\"></script>
    <!-- scripit init-->
    <script src=\"vendors/jqvmap/dist/maps/jquery.vmap.world.js\"></script>
    <!-- scripit init-->
    <script src=\"vendors/jqvmap/dist/maps/jquery.vmap.algeria.js\"></script>
    <!-- scripit init-->
    <script src=\"vendors/jqvmap/dist/maps/jquery.vmap.argentina.js\"></script>
    <!-- scripit init-->
    <script src=\"vendors/jqvmap/dist/maps/jquery.vmap.brazil.js\"></script>
    <!-- scripit init-->
    <script src=\"vendors/jqvmap/dist/maps/jquery.vmap.france.js\"></script>
    <!-- scripit init-->
    <script src=\"vendors/jqvmap/dist/maps/jquery.vmap.germany.js\"></script>
    <!-- scripit init-->
    <script src=\"vendors/jqvmap/dist/maps/jquery.vmap.greece.js\"></script>
    <!-- scripit init-->
    <script src=\"vendors/jqvmap/dist/maps/jquery.vmap.iran.js\"></script>
    <!-- scripit init-->
    <script src=\"vendors/jqvmap/dist/maps/jquery.vmap.iraq.js\"></script>
    <!-- scripit init-->
    <script src=\"vendors/jqvmap/dist/maps/jquery.vmap.russia.js\"></script>
    <!-- scripit init-->
    <script src=\"vendors/jqvmap/dist/maps/jquery.vmap.tunisia.js\"></script>
    <!-- scripit init-->
    <script src=\"vendors/jqvmap/dist/maps/jquery.vmap.europe.js\"></script>
    <!-- scripit init-->
    <script src=\"vendors/jqvmap/dist/maps/jquery.vmap.usa.js\"></script>
    <!-- scripit init-->
    <script src=\"vendors/jqvmap/dist/maps/jquery.vmap.turkey.js\"></script>
    <!-- scripit init-->
    <script src=\"assets/js/init-scripts/vector-map/vector.init.js\"></script>




</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "back/maps-vector.html.twig";
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

    <link rel=\"stylesheet\" href=\"vendors/jqvmap/dist/jqvmap.min.css\">
    <link rel=\"stylesheet\" href=\"assets/css/style.css\">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <!-- Left Panel -->

    <aside id=\"left-panel\" class=\"left-panel\">
        <nav class=\"navbar navbar-expand-sm navbar-default\">

            <div class=\"navbar-header\">
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#main-menu\" aria-controls=\"main-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <i class=\"fa fa-bars\"></i>
                </button>
                <a class=\"navbar-brand\" href=\"./\"><img src=\"images/logo.png\" alt=\"Logo\"></a>
                <a class=\"navbar-brand hidden\" href=\"./\"><img src=\"images/logo2.png\" alt=\"Logo\"></a>
            </div>

            <div id=\"main-menu\" class=\"main-menu collapse navbar-collapse\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"index.html\"> <i class=\"menu-icon fa fa-dashboard\"></i>Dashboard </a>
                    </li>
                    <h3 class=\"menu-title\">UI elements</h3><!-- /.menu-title -->
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-laptop\"></i>Components</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"fa fa-puzzle-piece\"></i><a href=\"ui-buttons.html\">Buttons</a></li>
                            <li><i class=\"fa fa-id-badge\"></i><a href=\"ui-badges.html\">Badges</a></li>
                            <li><i class=\"fa fa-bars\"></i><a href=\"ui-tabs.html\">Tabs</a></li>
                            <li><i class=\"fa fa-share-square-o\"></i><a href=\"ui-social-buttons.html\">Social Buttons</a></li>
                            <li><i class=\"fa fa-id-card-o\"></i><a href=\"ui-cards.html\">Cards</a></li>
                            <li><i class=\"fa fa-exclamation-triangle\"></i><a href=\"ui-alerts.html\">Alerts</a></li>
                            <li><i class=\"fa fa-spinner\"></i><a href=\"ui-progressbar.html\">Progress Bars</a></li>
                            <li><i class=\"fa fa-fire\"></i><a href=\"ui-modals.html\">Modals</a></li>
                            <li><i class=\"fa fa-book\"></i><a href=\"ui-switches.html\">Switches</a></li>
                            <li><i class=\"fa fa-th\"></i><a href=\"ui-grids.html\">Grids</a></li>
                            <li><i class=\"fa fa-file-word-o\"></i><a href=\"ui-typgraphy.html\">Typography</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-table\"></i>Tables</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"fa fa-table\"></i><a href=\"tables-basic.html\">Basic Table</a></li>
                            <li><i class=\"fa fa-table\"></i><a href=\"tables-data.html\">Data Table</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-th\"></i>Forms</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-th\"></i><a href=\"forms-basic.html\">Basic Form</a></li>
                            <li><i class=\"menu-icon fa fa-th\"></i><a href=\"forms-advanced.html\">Advanced Form</a></li>
                        </ul>
                    </li>

                    <h3 class=\"menu-title\">Icons</h3><!-- /.menu-title -->

                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-tasks\"></i>Icons</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-fort-awesome\"></i><a href=\"font-fontawesome.html\">Font Awesome</a></li>
                            <li><i class=\"menu-icon ti-themify-logo\"></i><a href=\"font-themify.html\">Themefy Icons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"widgets.html\"> <i class=\"menu-icon ti-email\"></i>Widgets </a>
                    </li>
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-bar-chart\"></i>Charts</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-line-chart\"></i><a href=\"charts-chartjs.html\">Chart JS</a></li>
                            <li><i class=\"menu-icon fa fa-area-chart\"></i><a href=\"charts-flot.html\">Flot Chart</a></li>
                            <li><i class=\"menu-icon fa fa-pie-chart\"></i><a href=\"charts-peity.html\">Peity Chart</a></li>
                        </ul>
                    </li>

                    <li class=\"menu-item-has-children active dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-area-chart\"></i>Maps</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-map-o\"></i><a href=\"maps-gmap.html\">Google Maps</a></li>
                            <li><i class=\"menu-icon fa fa-street-view\"></i><a href=\"maps-vector.html\">Vector Maps</a></li>
                        </ul>
                    </li>
                    <h3 class=\"menu-title\">Extras</h3><!-- /.menu-title -->
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-glass\"></i>Pages</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-sign-in\"></i><a href=\"page-login.html\">Login</a></li>
                            <li><i class=\"menu-icon fa fa-sign-in\"></i><a href=\"page-register.html\">Register</a></li>
                            <li><i class=\"menu-icon fa fa-paper-plane\"></i><a href=\"pages-forget.html\">Forget Pass</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

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
                            <li><a href=\"#\">Map</a></li>
                            <li class=\"active\">Vector map</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"content mt-3\">
            <div class=\"animated fadeIn\">

                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4>World</h4>
                            </div>
                            <div class=\"Vector-map-js\">
                                <div id=\"vmap\" class=\"vmap\"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class=\"col-lg-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4>Algeria</h4>
                            </div>
                            <div class=\"Vector-map-js\">
                                <div id=\"vmap2\" class=\"vmap\"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class=\"col-lg-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4>Argentina</h4>
                            </div>
                            <div class=\"Vector-map-js\">
                                <div id=\"vmap3\" class=\"vmap\"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class=\"col-lg-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4>Brazil</h4>
                            </div>
                            <div class=\"Vector-map-js\">
                                <div id=\"vmap4\" class=\"vmap\"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class=\"col-lg-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4>France</h4>
                            </div>
                            <div class=\"Vector-map-js\">
                                <div id=\"vmap5\" class=\"vmap\"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class=\"col-lg-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4>Germany</h4>
                            </div>
                            <div class=\"Vector-map-js\">
                                <div id=\"vmap6\" class=\"vmap\"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class=\"col-lg-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4>Greece</h4>
                            </div>
                            <div class=\"Vector-map-js\">
                                <div id=\"vmap7\" class=\"vmap\"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class=\"col-lg-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4>Russia</h4>
                            </div>
                            <div class=\"Vector-map-js\">
                                <div id=\"vmap10\" class=\"vmap\"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class=\"col-lg-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4>Tunisia</h4>
                            </div>
                            <div class=\"Vector-map-js\">
                                <div id=\"vmap11\" class=\"vmap\"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class=\"col-lg-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4>Europe</h4>
                            </div>
                            <div class=\"Vector-map-js\">
                                <div id=\"vmap12\" class=\"vmap\"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class=\"col-lg-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4>USA</h4>
                            </div>
                            <div class=\"Vector-map-js\">
                                <div id=\"vmap13\" class=\"vmap\"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class=\"col-lg-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4>Turkey</h4>
                            </div>
                            <div class=\"Vector-map-js\">
                                <div id=\"vmap14\" class=\"vmap\"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <div class=\"col-lg-6\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4>Inactive Regions</h4>
                            </div>
                            <div class=\"Vector-map-js\">
                                <div id=\"vmap15\" class=\"vmap\"></div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->



                </div>
                <!-- /# row -->


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src=\"vendors/jquery/dist/jquery.min.js\"></script>
    <script src=\"vendors/popper.js/dist/umd/popper.min.js\"></script>
    <script src=\"vendors/bootstrap/dist/js/bootstrap.min.js\"></script>
    <script src=\"assets/js/main.js\"></script>

    <script src=\"vendors/jqvmap/dist/jquery.vmap.min.js\"></script>

    <script src=\"vendors/jqvmap/examples/js/jquery.vmap.sampledata.js\"></script>
    <!-- scripit init-->
    <script src=\"vendors/jqvmap/dist/maps/jquery.vmap.world.js\"></script>
    <!-- scripit init-->
    <script src=\"vendors/jqvmap/dist/maps/jquery.vmap.algeria.js\"></script>
    <!-- scripit init-->
    <script src=\"vendors/jqvmap/dist/maps/jquery.vmap.argentina.js\"></script>
    <!-- scripit init-->
    <script src=\"vendors/jqvmap/dist/maps/jquery.vmap.brazil.js\"></script>
    <!-- scripit init-->
    <script src=\"vendors/jqvmap/dist/maps/jquery.vmap.france.js\"></script>
    <!-- scripit init-->
    <script src=\"vendors/jqvmap/dist/maps/jquery.vmap.germany.js\"></script>
    <!-- scripit init-->
    <script src=\"vendors/jqvmap/dist/maps/jquery.vmap.greece.js\"></script>
    <!-- scripit init-->
    <script src=\"vendors/jqvmap/dist/maps/jquery.vmap.iran.js\"></script>
    <!-- scripit init-->
    <script src=\"vendors/jqvmap/dist/maps/jquery.vmap.iraq.js\"></script>
    <!-- scripit init-->
    <script src=\"vendors/jqvmap/dist/maps/jquery.vmap.russia.js\"></script>
    <!-- scripit init-->
    <script src=\"vendors/jqvmap/dist/maps/jquery.vmap.tunisia.js\"></script>
    <!-- scripit init-->
    <script src=\"vendors/jqvmap/dist/maps/jquery.vmap.europe.js\"></script>
    <!-- scripit init-->
    <script src=\"vendors/jqvmap/dist/maps/jquery.vmap.usa.js\"></script>
    <!-- scripit init-->
    <script src=\"vendors/jqvmap/dist/maps/jquery.vmap.turkey.js\"></script>
    <!-- scripit init-->
    <script src=\"assets/js/init-scripts/vector-map/vector.init.js\"></script>




</body>

</html>
", "back/maps-vector.html.twig", "/home/skander/Downloads/fitnessnyi_web-main (1)/fitnessnyi_web-main/templates/back/maps-vector.html.twig");
    }
}
