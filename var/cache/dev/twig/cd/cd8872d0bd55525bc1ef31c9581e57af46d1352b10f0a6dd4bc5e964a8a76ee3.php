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

/* front/barre.html.twig */
class __TwigTemplate_8d21cfd9b5d031a56e1bd7229057c850266ae96e81326fa5fb35d74bf03ce751 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/barre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/barre.html.twig"));

        // line 1
        echo "<!-- Offcanvas Menu Section Begin -->
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
            <li><a >Home</a></li>
            <li><a >About Us</a></li>
            <li><a >Classes</a></li>
            <li><a >Services</a></li>
            <li><a >Our Team</a></li>
            <li><a href=\"#\">Pages</a>
                <ul class=\"dropdown\">
                    <li><a >About us</a></li>
                    <li><a >Classes timetable</a></li>
                    <li><a >Bmi calculate</a></li>
                    <li><a >Our team</a></li>
                    <li><a >Gallery</a></li>
                    <li><a >Our blog</a></li>
                    <li><a >404</a></li>
                </ul>
            </li>
            <li><a >Contact</a></li>







                <a >Sign in </a>
                <a >Sign up </a>

        </ul>
    </nav>
    <div id=\"mobile-menu-wrap\"></div>
    <div class=\"canvas-social\">
        <a href=\"#\">login<i class=\"btn btn-primary\"></i></a>
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
                    <a >
                        <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"\">
                    </a>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <nav class=\"nav-menu\">
                    <ul>
                        <li class=\"active\"><a href=\"\">Home</a></li>
                        <li><a href=\"\">About Us</a></li>
                        <li><a href=\"\">Classes</a></li>
                        <li><a href=\"\">Services</a></li>

                        <li><a href=\"\">Our Team</a></li>
                        <li><a href=\"#\">Pages</a>
                            <ul class=\"dropdown\">
                                <li><a href=\"\">About us</a></li>
                                <li><a href=\"\">Classes timetable</a></li>
                                <li><a href=\"\">Bmi calculate</a></li>
                                <li><a href=\"\">Our team</a></li>
                                <li><a href=\"\">Gallery</a></li>
                                <li><a href=\"\">Our blog</a></li>
                                <li><a href=\"\">404</a></li>
                            </ul>
                        </li>
                        <li><a href=\"\">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"top-option\">
                    <div class=\"to-social\">


                            <a href=\"\">Sign in </a>
                            <a href=\"\">Sign up </a>

                    </div>
                </div>
            </div>
        </div>
        <div class=\"canvas-open\">
            <i class=\"fa fa-bars\"></i>
        </div>
    </div>
</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "front/barre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 59,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Offcanvas Menu Section Begin -->
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
            <li><a >Home</a></li>
            <li><a >About Us</a></li>
            <li><a >Classes</a></li>
            <li><a >Services</a></li>
            <li><a >Our Team</a></li>
            <li><a href=\"#\">Pages</a>
                <ul class=\"dropdown\">
                    <li><a >About us</a></li>
                    <li><a >Classes timetable</a></li>
                    <li><a >Bmi calculate</a></li>
                    <li><a >Our team</a></li>
                    <li><a >Gallery</a></li>
                    <li><a >Our blog</a></li>
                    <li><a >404</a></li>
                </ul>
            </li>
            <li><a >Contact</a></li>







                <a >Sign in </a>
                <a >Sign up </a>

        </ul>
    </nav>
    <div id=\"mobile-menu-wrap\"></div>
    <div class=\"canvas-social\">
        <a href=\"#\">login<i class=\"btn btn-primary\"></i></a>
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
                    <a >
                        <img src=\"{{ asset('img/logo.png')}}\" alt=\"\">
                    </a>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <nav class=\"nav-menu\">
                    <ul>
                        <li class=\"active\"><a href=\"\">Home</a></li>
                        <li><a href=\"\">About Us</a></li>
                        <li><a href=\"\">Classes</a></li>
                        <li><a href=\"\">Services</a></li>

                        <li><a href=\"\">Our Team</a></li>
                        <li><a href=\"#\">Pages</a>
                            <ul class=\"dropdown\">
                                <li><a href=\"\">About us</a></li>
                                <li><a href=\"\">Classes timetable</a></li>
                                <li><a href=\"\">Bmi calculate</a></li>
                                <li><a href=\"\">Our team</a></li>
                                <li><a href=\"\">Gallery</a></li>
                                <li><a href=\"\">Our blog</a></li>
                                <li><a href=\"\">404</a></li>
                            </ul>
                        </li>
                        <li><a href=\"\">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"top-option\">
                    <div class=\"to-social\">


                            <a href=\"\">Sign in </a>
                            <a href=\"\">Sign up </a>

                    </div>
                </div>
            </div>
        </div>
        <div class=\"canvas-open\">
            <i class=\"fa fa-bars\"></i>
        </div>
    </div>
</header>", "front/barre.html.twig", "/home/skander/Downloads/fitnessnyi_web-main (1)/fitnessnyi_web-main/templates/front/barre.html.twig");
    }
}
