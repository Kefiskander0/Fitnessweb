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

/* front/bmi-calculator.html.twig */
class __TwigTemplate_2cd0ddc6046e46c441ea8253643d80b9a7c1b028f5bf0b563a84d9295ba9c377 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/bmi-calculator.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/bmi-calculator.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"Gym Template\">
    <meta name=\"keywords\" content=\"Gym, unica, creative, html\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Gym | Template</title>

    <!-- Google Font -->
    <link href=\"https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap\" rel=\"stylesheet\">

    <!-- Css Styles -->
    <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/font-awesome.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/flaticon.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/owl.carousel.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/barfiller.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/magnific-popup.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/slicknav.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/style.css\" type=\"text/css\">
</head>

<body>
    <!-- Page Preloder -->
    <div id=\"preloder\">
        <div class=\"loader\"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class=\"offcanvas-menu-overlay\"></div>
    <div class=\"offcanvas-menu-wrapper\">
        <div class=\"canvas-close\">
            <i class=\"fa fa-close\"></i>
        </div>
        <div class=\"canvas-search search-switch\">
            <i class=\"fa fa-search\"></i>
        </div>
        <nav class=\"canvas-menu mobile-menu\">
            <ul>
                <li><a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front");
        echo "\">Home</a></li>
                <li><a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">About Us</a></li>
                <li><a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("classes");
        echo "\">Classes</a></li>
                <li><a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services");
        echo "\">Services</a></li>
                <li><a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team");
        echo "\">Our Team</a></li>
                <li><a href=\"#\">Pages</a>
                    <ul class=\"dropdown\">
                        <li><a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">About us</a></li>
                        <li><a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("classes_timp");
        echo "\">Classes timetable</a></li>
                        <li><a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calcul");
        echo "\">Bmi calculate</a></li>
                        <li><a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team");
        echo "\">Our team</a></li>
                        <li><a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery");
        echo "\">Gallery</a></li>
                        <li><a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\">Our blog</a></li>
                        <li><a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("404");
        echo "\">404</a></li>
                    </ul>
                </li>
                <li><a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a></li>
            </ul>
        </nav>
        <div id=\"mobile-menu-wrap\"></div>
        <div class=\"canvas-social\">
            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
            <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class=\"header-section\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"logo\">
                        <a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front");
        echo "\">
                            <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"\">
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <nav class=\"nav-menu\">
                        <ul>
                            <li class=\"active\"><a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front");
        echo "\">Home</a></li>
                            <li><a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">About Us</a></li>
                            <li><a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("classes");
        echo "\">Classes</a></li>
                            <li><a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services");
        echo "\">Services</a></li>
                            <li><a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team");
        echo "\">Our Team</a></li>
                            <li><a href=\"#\">Pages</a>
                                <ul class=\"dropdown\">
                                    <li><a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">About us</a></li>
                                    <li><a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("classes_timp");
        echo "\">Classes timetable</a></li>
                                    <li><a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calcul");
        echo "\">Bmi calculate</a></li>
                                    <li><a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team");
        echo "\">Our team</a></li>
                                    <li><a href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery");
        echo "\">Gallery</a></li>
                                    <li><a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\">Our blog</a></li>
                                    <li><a href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("404");
        echo "\">404</a></li>
                                </ul>
                            </li>
                            <li><a href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"top-option\">
                        <div class=\"to-search search-switch\">
                            <i class=\"fa fa-search\"></i>
                        </div>
                        <div class=\"to-social\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"canvas-open\">
                <i class=\"fa fa-bars\"></i>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <!-- Breadcrumb Section Begin -->
    <section class=\"breadcrumb-section set-bg\" data-setbg=\"img/breadcrumb-bg.jpg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"breadcrumb-text\">
                        <h2>BMI calculator</h2>
                        <div class=\"bt-option\">
                            <a href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front");
        echo "\">Home</a>
                            <a href=\"#\">Pages</a>
                            <span>BMI calculator</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- BMI Calculator Section Begin -->
    <section class=\"bmi-calculator-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"section-title chart-title\">
                        <span>check your body</span>
                        <h2>BMI CALCULATOR CHART</h2>
                    </div>
                    <div class=\"chart-table\">
                        <table>
                            <thead>
                                <tr>
                                    <th>Bmi</th>
                                    <th>WEIGHT STATUS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class=\"point\">Below 18.5</td>
                                    <td>Underweight</td>
                                </tr>
                                <tr>
                                    <td class=\"point\">18.5 - 24.9</td>
                                    <td>Healthy</td>
                                </tr>
                                <tr>
                                    <td class=\"point\">25.0 - 29.9</td>
                                    <td>Overweight</td>
                                </tr>
                                <tr>
                                    <td class=\"point\">30.0 - and Above</td>
                                    <td>Obese</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"section-title chart-calculate-title\">
                        <span>check your body</span>
                        <h2>CALCULATE YOUR BMI</h2>
                    </div>
                    <div class=\"chart-calculate-form\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                            viverra maecenas accumsan lacus vel facilisis.</p>
                        <form action=\"#\">
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <input type=\"text\" placeholder=\"Height / cm\">
                                </div>
                                <div class=\"col-sm-6\">
                                    <input type=\"text\" placeholder=\"Weight / kg\">
                                </div>
                                <div class=\"col-sm-6\">
                                    <input type=\"text\" placeholder=\"Age\">
                                </div>
                                <div class=\"col-sm-6\">
                                    <input type=\"text\" placeholder=\"Sex\">
                                </div>
                                <div class=\"col-lg-12\">
                                    <button type=\"submit\">Calculate</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BMI Calculator Section End -->

    <!-- Get In Touch Section Begin -->
    <div class=\"gettouch-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"gt-text\">
                        <i class=\"fa fa-map-marker\"></i>
                        <p>333 Middle Winchendon Rd, Rindge,<br/> NH 03461</p>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"gt-text\">
                        <i class=\"fa fa-mobile\"></i>
                        <ul>
                            <li>125-711-811</li>
                            <li>125-668-886</li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"gt-text email\">
                        <i class=\"fa fa-envelope\"></i>
                        <p>Support.gymcenter@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get In Touch Section End -->

    <!-- Footer Section Begin -->
    <section class=\"footer-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"fs-about\">
                        <div class=\"fa-logo\">
                            <a href=\"#\"><img src=\"img/logo.png\" alt=\"\"></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore dolore magna aliqua endisse ultrices gravida lorem.</p>
                        <div class=\"fa-social\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            <a href=\"#\"><i class=\"fa  fa-envelope-o\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div class=\"fs-widget\">
                        <h4>Useful links</h4>
                        <ul>
                            <li><a href=\"#\">About</a></li>
                            <li><a href=\"#\">Blog</a></li>
                            <li><a href=\"#\">Classes</a></li>
                            <li><a href=\"#\">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div class=\"fs-widget\">
                        <h4>Support</h4>
                        <ul>
                            <li><a href=\"#\">Login</a></li>
                            <li><a href=\"#\">My account</a></li>
                            <li><a href=\"#\">Subscribe</a></li>
                            <li><a href=\"#\">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"fs-widget\">
                        <h4>Tips & Guides</h4>
                        <div class=\"fw-recent\">
                            <h6><a href=\"#\">Physical fitness may help prevent depression, anxiety</a></h6>
                            <ul>
                                <li>3 min read</li>
                                <li>20 Comment</li>
                            </ul>
                        </div>
                        <div class=\"fw-recent\">
                            <h6><a href=\"#\">Fitness: The best exercise to lose belly fat and tone up...</a></h6>
                            <ul>
                                <li>3 min read</li>
                                <li>20 Comment</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"copyright-text\">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class=\"search-model\">
        <div class=\"h-100 d-flex align-items-center justify-content-center\">
            <div class=\"search-close-switch\">+</div>
            <form class=\"search-model-form\">
                <input type=\"text\" id=\"search-input\" placeholder=\"Search here.....\">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src=\"js/jquery-3.3.1.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/jquery.magnific-popup.min.js\"></script>
    <script src=\"js/masonry.pkgd.min.js\"></script>
    <script src=\"js/jquery.barfiller.js\"></script>
    <script src=\"js/jquery.slicknav.js\"></script>
    <script src=\"js/owl.carousel.min.js\"></script>
    <script src=\"js/main.js\"></script>



</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "front/bmi-calculator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 135,  228 => 103,  222 => 100,  218 => 99,  214 => 98,  210 => 97,  206 => 96,  202 => 95,  198 => 94,  192 => 91,  188 => 90,  184 => 89,  180 => 88,  176 => 87,  166 => 80,  162 => 79,  140 => 60,  134 => 57,  130 => 56,  126 => 55,  122 => 54,  118 => 53,  114 => 52,  110 => 51,  104 => 48,  100 => 47,  96 => 46,  92 => 45,  88 => 44,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"Gym Template\">
    <meta name=\"keywords\" content=\"Gym, unica, creative, html\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Gym | Template</title>

    <!-- Google Font -->
    <link href=\"https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap\" rel=\"stylesheet\">

    <!-- Css Styles -->
    <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/font-awesome.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/flaticon.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/owl.carousel.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/barfiller.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/magnific-popup.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/slicknav.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"css/style.css\" type=\"text/css\">
</head>

<body>
    <!-- Page Preloder -->
    <div id=\"preloder\">
        <div class=\"loader\"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class=\"offcanvas-menu-overlay\"></div>
    <div class=\"offcanvas-menu-wrapper\">
        <div class=\"canvas-close\">
            <i class=\"fa fa-close\"></i>
        </div>
        <div class=\"canvas-search search-switch\">
            <i class=\"fa fa-search\"></i>
        </div>
        <nav class=\"canvas-menu mobile-menu\">
            <ul>
                <li><a href=\"{{ path('front') }}\">Home</a></li>
                <li><a href=\"{{ path('about') }}\">About Us</a></li>
                <li><a href=\"{{ path('classes') }}\">Classes</a></li>
                <li><a href=\"{{ path('services') }}\">Services</a></li>
                <li><a href=\"{{ path('team') }}\">Our Team</a></li>
                <li><a href=\"#\">Pages</a>
                    <ul class=\"dropdown\">
                        <li><a href=\"{{ path('about') }}\">About us</a></li>
                        <li><a href=\"{{ path('classes_timp') }}\">Classes timetable</a></li>
                        <li><a href=\"{{ path('calcul') }}\">Bmi calculate</a></li>
                        <li><a href=\"{{ path('team') }}\">Our team</a></li>
                        <li><a href=\"{{ path('gallery') }}\">Gallery</a></li>
                        <li><a href=\"{{ path('blog') }}\">Our blog</a></li>
                        <li><a href=\"{{ path('404') }}\">404</a></li>
                    </ul>
                </li>
                <li><a href=\"{{ path('contact') }}\">Contact</a></li>
            </ul>
        </nav>
        <div id=\"mobile-menu-wrap\"></div>
        <div class=\"canvas-social\">
            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
            <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class=\"header-section\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"logo\">
                        <a href=\"{{ path('front') }}\">
                            <img src=\"{{ asset('img/logo.png')}}\" alt=\"\">
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <nav class=\"nav-menu\">
                        <ul>
                            <li class=\"active\"><a href=\"{{ path('front') }}\">Home</a></li>
                            <li><a href=\"{{ path('about') }}\">About Us</a></li>
                            <li><a href=\"{{ path('classes') }}\">Classes</a></li>
                            <li><a href=\"{{ path('services') }}\">Services</a></li>
                            <li><a href=\"{{ path('team') }}\">Our Team</a></li>
                            <li><a href=\"#\">Pages</a>
                                <ul class=\"dropdown\">
                                    <li><a href=\"{{ path('about') }}\">About us</a></li>
                                    <li><a href=\"{{ path('classes_timp') }}\">Classes timetable</a></li>
                                    <li><a href=\"{{ path('calcul') }}\">Bmi calculate</a></li>
                                    <li><a href=\"{{ path('team') }}\">Our team</a></li>
                                    <li><a href=\"{{ path('gallery') }}\">Gallery</a></li>
                                    <li><a href=\"{{ path('blog') }}\">Our blog</a></li>
                                    <li><a href=\"{{ path('404') }}\">404</a></li>
                                </ul>
                            </li>
                            <li><a href=\"{{ path('contact') }}\">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"top-option\">
                        <div class=\"to-search search-switch\">
                            <i class=\"fa fa-search\"></i>
                        </div>
                        <div class=\"to-social\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"canvas-open\">
                <i class=\"fa fa-bars\"></i>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <!-- Breadcrumb Section Begin -->
    <section class=\"breadcrumb-section set-bg\" data-setbg=\"img/breadcrumb-bg.jpg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"breadcrumb-text\">
                        <h2>BMI calculator</h2>
                        <div class=\"bt-option\">
                            <a href=\"{{ path('front') }}\">Home</a>
                            <a href=\"#\">Pages</a>
                            <span>BMI calculator</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- BMI Calculator Section Begin -->
    <section class=\"bmi-calculator-section spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"section-title chart-title\">
                        <span>check your body</span>
                        <h2>BMI CALCULATOR CHART</h2>
                    </div>
                    <div class=\"chart-table\">
                        <table>
                            <thead>
                                <tr>
                                    <th>Bmi</th>
                                    <th>WEIGHT STATUS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class=\"point\">Below 18.5</td>
                                    <td>Underweight</td>
                                </tr>
                                <tr>
                                    <td class=\"point\">18.5 - 24.9</td>
                                    <td>Healthy</td>
                                </tr>
                                <tr>
                                    <td class=\"point\">25.0 - 29.9</td>
                                    <td>Overweight</td>
                                </tr>
                                <tr>
                                    <td class=\"point\">30.0 - and Above</td>
                                    <td>Obese</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"section-title chart-calculate-title\">
                        <span>check your body</span>
                        <h2>CALCULATE YOUR BMI</h2>
                    </div>
                    <div class=\"chart-calculate-form\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                            viverra maecenas accumsan lacus vel facilisis.</p>
                        <form action=\"#\">
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <input type=\"text\" placeholder=\"Height / cm\">
                                </div>
                                <div class=\"col-sm-6\">
                                    <input type=\"text\" placeholder=\"Weight / kg\">
                                </div>
                                <div class=\"col-sm-6\">
                                    <input type=\"text\" placeholder=\"Age\">
                                </div>
                                <div class=\"col-sm-6\">
                                    <input type=\"text\" placeholder=\"Sex\">
                                </div>
                                <div class=\"col-lg-12\">
                                    <button type=\"submit\">Calculate</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BMI Calculator Section End -->

    <!-- Get In Touch Section Begin -->
    <div class=\"gettouch-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"gt-text\">
                        <i class=\"fa fa-map-marker\"></i>
                        <p>333 Middle Winchendon Rd, Rindge,<br/> NH 03461</p>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"gt-text\">
                        <i class=\"fa fa-mobile\"></i>
                        <ul>
                            <li>125-711-811</li>
                            <li>125-668-886</li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"gt-text email\">
                        <i class=\"fa fa-envelope\"></i>
                        <p>Support.gymcenter@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get In Touch Section End -->

    <!-- Footer Section Begin -->
    <section class=\"footer-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"fs-about\">
                        <div class=\"fa-logo\">
                            <a href=\"#\"><img src=\"img/logo.png\" alt=\"\"></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore dolore magna aliqua endisse ultrices gravida lorem.</p>
                        <div class=\"fa-social\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-youtube-play\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            <a href=\"#\"><i class=\"fa  fa-envelope-o\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div class=\"fs-widget\">
                        <h4>Useful links</h4>
                        <ul>
                            <li><a href=\"#\">About</a></li>
                            <li><a href=\"#\">Blog</a></li>
                            <li><a href=\"#\">Classes</a></li>
                            <li><a href=\"#\">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-sm-6\">
                    <div class=\"fs-widget\">
                        <h4>Support</h4>
                        <ul>
                            <li><a href=\"#\">Login</a></li>
                            <li><a href=\"#\">My account</a></li>
                            <li><a href=\"#\">Subscribe</a></li>
                            <li><a href=\"#\">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"fs-widget\">
                        <h4>Tips & Guides</h4>
                        <div class=\"fw-recent\">
                            <h6><a href=\"#\">Physical fitness may help prevent depression, anxiety</a></h6>
                            <ul>
                                <li>3 min read</li>
                                <li>20 Comment</li>
                            </ul>
                        </div>
                        <div class=\"fw-recent\">
                            <h6><a href=\"#\">Fitness: The best exercise to lose belly fat and tone up...</a></h6>
                            <ul>
                                <li>3 min read</li>
                                <li>20 Comment</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"copyright-text\">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class=\"search-model\">
        <div class=\"h-100 d-flex align-items-center justify-content-center\">
            <div class=\"search-close-switch\">+</div>
            <form class=\"search-model-form\">
                <input type=\"text\" id=\"search-input\" placeholder=\"Search here.....\">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src=\"js/jquery-3.3.1.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/jquery.magnific-popup.min.js\"></script>
    <script src=\"js/masonry.pkgd.min.js\"></script>
    <script src=\"js/jquery.barfiller.js\"></script>
    <script src=\"js/jquery.slicknav.js\"></script>
    <script src=\"js/owl.carousel.min.js\"></script>
    <script src=\"js/main.js\"></script>



</body>

</html>", "front/bmi-calculator.html.twig", "/home/skander/Downloads/fitnessnyi_web-main (1)/fitnessnyi_web-main/templates/front/bmi-calculator.html.twig");
    }
}
