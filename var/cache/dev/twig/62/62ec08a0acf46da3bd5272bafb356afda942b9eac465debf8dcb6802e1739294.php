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

/* front/404.html.twig */
class __TwigTemplate_c6bdabe6ab2a1dd699b3087f2b1770eb9cd941f5e2d942ef34dc8098676bf481 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/404.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/404.html.twig"));

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
    <!-- <div id=\"preloder\">
        <div class=\"loader\"></div>
    </div> -->

    <!-- 404 Section Begin -->
    <section class=\"section-404\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"text-404\">
                        <h1>404</h1>
                        <h3>Opps! This page Could Not Be Found!</h3>
                        <p>Sorry bit the page you are looking for does not exist, have been removed or name changed</p>
                        <form action=\"#\" class=\"search-404\">
                            <input type=\"text\" placeholder=\"Enter your keyword\">
                            <button type=\"submit\"><i class=\"fa fa-search\"></i></button>
                        </form>
                        <a href=\"./index.html\"><i class=\"fa fa-home\"></i> Go back home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 404 Section End -->

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
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front");
        echo "\">Home</a></li>
                <li><a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">About Us</a></li>
                <li><a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("classes");
        echo "\">Classes</a></li>
                <li><a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services");
        echo "\">Services</a></li>
                <li><a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team");
        echo "\">Our Team</a></li>
                <li><a href=\"#\">Pages</a>
                    <ul class=\"dropdown\">
                        <li><a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">About us</a></li>
                        <li><a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("classes_timp");
        echo "\">Classes timetable</a></li>
                        <li><a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calcul");
        echo "\">Bmi calculate</a></li>
                        <li><a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team");
        echo "\">Our team</a></li>
                        <li><a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery");
        echo "\">Gallery</a></li>
                        <li><a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\">Our blog</a></li>
                        <li><a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("404");
        echo "\">404</a></li>
                    </ul>
                </li>
                <li><a href=\"";
        // line 81
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
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front");
        echo "\">
                            <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"\">
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <nav class=\"nav-menu\">
                        <ul>
                            <li class=\"active\"><a href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front");
        echo "\">Home</a></li>
                            <li><a href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">About Us</a></li>
                            <li><a href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("classes");
        echo "\">Classes</a></li>
                            <li><a href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services");
        echo "\">Services</a></li>
                            <li><a href=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team");
        echo "\">Our Team</a></li>
                            <li><a href=\"#\">Pages</a>
                                <ul class=\"dropdown\">
                                    <li><a href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">About us</a></li>
                                    <li><a href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("classes_timp");
        echo "\">Classes timetable</a></li>
                                    <li><a href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calcul");
        echo "\">Bmi calculate</a></li>
                                    <li><a href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team");
        echo "\">Our team</a></li>
                                    <li><a href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery");
        echo "\">Gallery</a></li>
                                    <li><a href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\">Our blog</a></li>
                                    <li><a href=\"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("404");
        echo "\">404</a></li>
                                </ul>
                            </li>
                            <li><a href=\"";
        // line 124
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

   <!-- Hero Section Begin -->
   <section class=\"hero-section\">
       <div class=\"hs-slider owl-carousel\">
           <div class=\"hs-item set-bg\" data-setbg=\"img/hero/hero-1.jpg\">
               <div class=\"container\">
                   <div class=\"row\">
                       <div class=\"col-lg-6 offset-lg-6\">
                           <div class=\"hi-text\">
                               <span>Shape your body</span>
                               <h1>Be <strong>strong</strong> traning hard</h1>
                               <a href=\"#\" class=\"primary-btn\">Get info</a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class=\"hs-item set-bg\" data-setbg=\"img/hero/hero-2.jpg\">
               <div class=\"container\">
                   <div class=\"row\">
                       <div class=\"col-lg-6 offset-lg-6\">
                           <div class=\"hi-text\">
                               <span>Shape your body</span>
                               <h1>Be <strong>strong</strong> traning hard</h1>
                               <a href=\"#\" class=\"primary-btn\">Get info</a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- Hero Section End -->

   <!-- ChoseUs Section Begin -->
   <section class=\"choseus-section spad\">
       <div class=\"container\">
           <div class=\"row\">
               <div class=\"col-lg-12\">
                   <div class=\"section-title\">
                       <span>Why chose us?</span>
                       <h2>PUSH YOUR LIMITS FORWARD</h2>
                   </div>
               </div>
           </div>
           <div class=\"row\">
               <div class=\"col-lg-3 col-sm-6\">
                   <div class=\"cs-item\">
                       <span class=\"flaticon-034-stationary-bike\"></span>
                       <h4>Modern equipment</h4>
                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                           dolore facilisis.</p>
                   </div>
               </div>
               <div class=\"col-lg-3 col-sm-6\">
                   <div class=\"cs-item\">
                       <span class=\"flaticon-033-juice\"></span>
                       <h4>Healthy nutrition plan</h4>
                       <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                           facilisis.</p>
                   </div>
               </div>
               <div class=\"col-lg-3 col-sm-6\">
                   <div class=\"cs-item\">
                       <span class=\"flaticon-002-dumbell\"></span>
                       <h4>Proffesponal training plan</h4>
                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                           dolore facilisis.</p>
                   </div>
               </div>
               <div class=\"col-lg-3 col-sm-6\">
                   <div class=\"cs-item\">
                       <span class=\"flaticon-014-heart-beat\"></span>
                       <h4>Unique to your needs</h4>
                       <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                           facilisis.</p>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- ChoseUs Section End -->

   <!-- Classes Section Begin -->
   <section class=\"classes-section spad\">
       <div class=\"container\">
           <div class=\"row\">
               <div class=\"col-lg-12\">
                   <div class=\"section-title\">
                       <span>Our Classes</span>
                       <h2>WHAT WE CAN OFFER</h2>
                   </div>
               </div>
           </div>
           <div class=\"row\">
               <div class=\"col-lg-4 col-md-6\">
                   <div class=\"class-item\">
                       <div class=\"ci-pic\">
                           <img src=\"img/classes/class-1.jpg\" alt=\"\">
                       </div>
                       <div class=\"ci-text\">
                           <span>STRENGTH</span>
                           <h5>Weightlifting</h5>
                           <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                       </div>
                   </div>
               </div>
               <div class=\"col-lg-4 col-md-6\">
                   <div class=\"class-item\">
                       <div class=\"ci-pic\">
                           <img src=\"img/classes/class-2.jpg\" alt=\"\">
                       </div>
                       <div class=\"ci-text\">
                           <span>Cardio</span>
                           <h5>Indoor cycling</h5>
                           <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                       </div>
                   </div>
               </div>
               <div class=\"col-lg-4 col-md-6\">
                   <div class=\"class-item\">
                       <div class=\"ci-pic\">
                           <img src=\"img/classes/class-3.jpg\" alt=\"\">
                       </div>
                       <div class=\"ci-text\">
                           <span>STRENGTH</span>
                           <h5>Kettlebell power</h5>
                           <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                       </div>
                   </div>
               </div>
               <div class=\"col-lg-6 col-md-6\">
                   <div class=\"class-item\">
                       <div class=\"ci-pic\">
                           <img src=\"img/classes/class-4.jpg\" alt=\"\">
                       </div>
                       <div class=\"ci-text\">
                           <span>Cardio</span>
                           <h4>Indoor cycling</h4>
                           <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                       </div>
                   </div>
               </div>
               <div class=\"col-lg-6\">
                   <div class=\"class-item\">
                       <div class=\"ci-pic\">
                           <img src=\"img/classes/class-5.jpg\" alt=\"\">
                       </div>
                       <div class=\"ci-text\">
                           <span>Training</span>
                           <h4>Boxing</h4>
                           <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- ChoseUs Section End -->

   <!-- Banner Section Begin -->
   <section class=\"banner-section set-bg\" data-setbg=\"img/banner-bg.jpg\">
       <div class=\"container\">
           <div class=\"row\">
               <div class=\"col-lg-12 text-center\">
                   <div class=\"bs-text\">
                       <h2>registration now to get more deals</h2>
                       <div class=\"bt-tips\">Where health, beauty and fitness meet.</div>
                       <a href=\"#\" class=\"primary-btn  btn-normal\">Appointment</a>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- Banner Section End -->

   <!-- Pricing Section Begin -->
   <section class=\"pricing-section spad\">
       <div class=\"container\">
           <div class=\"row\">
               <div class=\"col-lg-12\">
                   <div class=\"section-title\">
                       <span>Our Plan</span>
                       <h2>Choose your pricing plan</h2>
                   </div>
               </div>
           </div>
           <div class=\"row justify-content-center\">
               <div class=\"col-lg-4 col-md-8\">
                   <div class=\"ps-item\">
                       <h3>Class drop-in</h3>
                       <div class=\"pi-price\">
                           <h2>\$ 39.0</h2>
                           <span>SINGLE CLASS</span>
                       </div>
                       <ul>
                           <li>Free riding</li>
                           <li>Unlimited equipments</li>
                           <li>Personal trainer</li>
                           <li>Weight losing classes</li>
                           <li>Month to mouth</li>
                           <li>No time restriction</li>
                       </ul>
                       <a href=\"#\" class=\"primary-btn pricing-btn\">Enroll now</a>
                       <a href=\"#\" class=\"thumb-icon\"><i class=\"fa fa-picture-o\"></i></a>
                   </div>
               </div>
               <div class=\"col-lg-4 col-md-8\">
                   <div class=\"ps-item\">
                       <h3>12 Month unlimited</h3>
                       <div class=\"pi-price\">
                           <h2>\$ 99.0</h2>
                           <span>SINGLE CLASS</span>
                       </div>
                       <ul>
                           <li>Free riding</li>
                           <li>Unlimited equipments</li>
                           <li>Personal trainer</li>
                           <li>Weight losing classes</li>
                           <li>Month to mouth</li>
                           <li>No time restriction</li>
                       </ul>
                       <a href=\"#\" class=\"primary-btn pricing-btn\">Enroll now</a>
                       <a href=\"#\" class=\"thumb-icon\"><i class=\"fa fa-picture-o\"></i></a>
                   </div>
               </div>
               <div class=\"col-lg-4 col-md-8\">
                   <div class=\"ps-item\">
                       <h3>6 Month unlimited</h3>
                       <div class=\"pi-price\">
                           <h2>\$ 59.0</h2>
                           <span>SINGLE CLASS</span>
                       </div>
                       <ul>
                           <li>Free riding</li>
                           <li>Unlimited equipments</li>
                           <li>Personal trainer</li>
                           <li>Weight losing classes</li>
                           <li>Month to mouth</li>
                           <li>No time restriction</li>
                       </ul>
                       <a href=\"#\" class=\"primary-btn pricing-btn\">Enroll now</a>
                       <a href=\"#\" class=\"thumb-icon\"><i class=\"fa fa-picture-o\"></i></a>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- Pricing Section End -->

   <!-- Gallery Section Begin -->
   <div class=\"gallery-section\">
       <div class=\"gallery\">
           <div class=\"grid-sizer\"></div>
           <div class=\"gs-item grid-wide set-bg\" data-setbg=\"img/gallery/gallery-1.jpg\">
               <a href=\"img/gallery/gallery-1.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
           </div>
           <div class=\"gs-item set-bg\" data-setbg=\"img/gallery/gallery-2.jpg\">
               <a href=\"img/gallery/gallery-2.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
           </div>
           <div class=\"gs-item set-bg\" data-setbg=\"img/gallery/gallery-3.jpg\">
               <a href=\"img/gallery/gallery-3.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
           </div>
           <div class=\"gs-item set-bg\" data-setbg=\"img/gallery/gallery-4.jpg\">
               <a href=\"img/gallery/gallery-4.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
           </div>
           <div class=\"gs-item set-bg\" data-setbg=\"img/gallery/gallery-5.jpg\">
               <a href=\"img/gallery/gallery-5.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
           </div>
           <div class=\"gs-item grid-wide set-bg\" data-setbg=\"img/gallery/gallery-6.jpg\">
               <a href=\"img/gallery/gallery-6.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
           </div>
       </div>
   </div>
   <!-- Gallery Section End -->

   <!-- Team Section Begin -->
   <section class=\"team-section spad\">
       <div class=\"container\">
           <div class=\"row\">
               <div class=\"col-lg-12\">
                   <div class=\"team-title\">
                       <div class=\"section-title\">
                           <span>Our Team</span>
                           <h2>TRAIN WITH EXPERTS</h2>
                       </div>
                       <a href=\"#\" class=\"primary-btn btn-normal appoinment-btn\">appointment</a>
                   </div>
               </div>
           </div>
           <div class=\"row\">
               <div class=\"ts-slider owl-carousel\">
                   <div class=\"col-lg-4\">
                       <div class=\"ts-item set-bg\" data-setbg=\"img/team/team-1.jpg\">
                           <div class=\"ts_text\">
                               <h4>Athart Rachel</h4>
                               <span>Gym Trainer</span>
                           </div>
                       </div>
                   </div>
                   <div class=\"col-lg-4\">
                       <div class=\"ts-item set-bg\" data-setbg=\"img/team/team-2.jpg\">
                           <div class=\"ts_text\">
                               <h4>Athart Rachel</h4>
                               <span>Gym Trainer</span>
                           </div>
                       </div>
                   </div>
                   <div class=\"col-lg-4\">
                       <div class=\"ts-item set-bg\" data-setbg=\"img/team/team-3.jpg\">
                           <div class=\"ts_text\">
                               <h4>Athart Rachel</h4>
                               <span>Gym Trainer</span>
                           </div>
                       </div>
                   </div>
                   <div class=\"col-lg-4\">
                       <div class=\"ts-item set-bg\" data-setbg=\"img/team/team-4.jpg\">
                           <div class=\"ts_text\">
                               <h4>Athart Rachel</h4>
                               <span>Gym Trainer</span>
                           </div>
                       </div>
                   </div>
                   <div class=\"col-lg-4\">
                       <div class=\"ts-item set-bg\" data-setbg=\"img/team/team-5.jpg\">
                           <div class=\"ts_text\">
                               <h4>Athart Rachel</h4>
                               <span>Gym Trainer</span>
                           </div>
                       </div>
                   </div>
                   <div class=\"col-lg-4\">
                       <div class=\"ts-item set-bg\" data-setbg=\"img/team/team-6.jpg\">
                           <div class=\"ts_text\">
                               <h4>Athart Rachel</h4>
                               <span>Gym Trainer</span>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- Team Section End -->

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
        return "front/404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 124,  243 => 121,  239 => 120,  235 => 119,  231 => 118,  227 => 117,  223 => 116,  219 => 115,  213 => 112,  209 => 111,  205 => 110,  201 => 109,  197 => 108,  187 => 101,  183 => 100,  161 => 81,  155 => 78,  151 => 77,  147 => 76,  143 => 75,  139 => 74,  135 => 73,  131 => 72,  125 => 69,  121 => 68,  117 => 67,  113 => 66,  109 => 65,  43 => 1,);
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
    <!-- <div id=\"preloder\">
        <div class=\"loader\"></div>
    </div> -->

    <!-- 404 Section Begin -->
    <section class=\"section-404\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"text-404\">
                        <h1>404</h1>
                        <h3>Opps! This page Could Not Be Found!</h3>
                        <p>Sorry bit the page you are looking for does not exist, have been removed or name changed</p>
                        <form action=\"#\" class=\"search-404\">
                            <input type=\"text\" placeholder=\"Enter your keyword\">
                            <button type=\"submit\"><i class=\"fa fa-search\"></i></button>
                        </form>
                        <a href=\"./index.html\"><i class=\"fa fa-home\"></i> Go back home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 404 Section End -->

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

   <!-- Hero Section Begin -->
   <section class=\"hero-section\">
       <div class=\"hs-slider owl-carousel\">
           <div class=\"hs-item set-bg\" data-setbg=\"img/hero/hero-1.jpg\">
               <div class=\"container\">
                   <div class=\"row\">
                       <div class=\"col-lg-6 offset-lg-6\">
                           <div class=\"hi-text\">
                               <span>Shape your body</span>
                               <h1>Be <strong>strong</strong> traning hard</h1>
                               <a href=\"#\" class=\"primary-btn\">Get info</a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class=\"hs-item set-bg\" data-setbg=\"img/hero/hero-2.jpg\">
               <div class=\"container\">
                   <div class=\"row\">
                       <div class=\"col-lg-6 offset-lg-6\">
                           <div class=\"hi-text\">
                               <span>Shape your body</span>
                               <h1>Be <strong>strong</strong> traning hard</h1>
                               <a href=\"#\" class=\"primary-btn\">Get info</a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- Hero Section End -->

   <!-- ChoseUs Section Begin -->
   <section class=\"choseus-section spad\">
       <div class=\"container\">
           <div class=\"row\">
               <div class=\"col-lg-12\">
                   <div class=\"section-title\">
                       <span>Why chose us?</span>
                       <h2>PUSH YOUR LIMITS FORWARD</h2>
                   </div>
               </div>
           </div>
           <div class=\"row\">
               <div class=\"col-lg-3 col-sm-6\">
                   <div class=\"cs-item\">
                       <span class=\"flaticon-034-stationary-bike\"></span>
                       <h4>Modern equipment</h4>
                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                           dolore facilisis.</p>
                   </div>
               </div>
               <div class=\"col-lg-3 col-sm-6\">
                   <div class=\"cs-item\">
                       <span class=\"flaticon-033-juice\"></span>
                       <h4>Healthy nutrition plan</h4>
                       <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                           facilisis.</p>
                   </div>
               </div>
               <div class=\"col-lg-3 col-sm-6\">
                   <div class=\"cs-item\">
                       <span class=\"flaticon-002-dumbell\"></span>
                       <h4>Proffesponal training plan</h4>
                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                           dolore facilisis.</p>
                   </div>
               </div>
               <div class=\"col-lg-3 col-sm-6\">
                   <div class=\"cs-item\">
                       <span class=\"flaticon-014-heart-beat\"></span>
                       <h4>Unique to your needs</h4>
                       <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                           facilisis.</p>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- ChoseUs Section End -->

   <!-- Classes Section Begin -->
   <section class=\"classes-section spad\">
       <div class=\"container\">
           <div class=\"row\">
               <div class=\"col-lg-12\">
                   <div class=\"section-title\">
                       <span>Our Classes</span>
                       <h2>WHAT WE CAN OFFER</h2>
                   </div>
               </div>
           </div>
           <div class=\"row\">
               <div class=\"col-lg-4 col-md-6\">
                   <div class=\"class-item\">
                       <div class=\"ci-pic\">
                           <img src=\"img/classes/class-1.jpg\" alt=\"\">
                       </div>
                       <div class=\"ci-text\">
                           <span>STRENGTH</span>
                           <h5>Weightlifting</h5>
                           <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                       </div>
                   </div>
               </div>
               <div class=\"col-lg-4 col-md-6\">
                   <div class=\"class-item\">
                       <div class=\"ci-pic\">
                           <img src=\"img/classes/class-2.jpg\" alt=\"\">
                       </div>
                       <div class=\"ci-text\">
                           <span>Cardio</span>
                           <h5>Indoor cycling</h5>
                           <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                       </div>
                   </div>
               </div>
               <div class=\"col-lg-4 col-md-6\">
                   <div class=\"class-item\">
                       <div class=\"ci-pic\">
                           <img src=\"img/classes/class-3.jpg\" alt=\"\">
                       </div>
                       <div class=\"ci-text\">
                           <span>STRENGTH</span>
                           <h5>Kettlebell power</h5>
                           <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                       </div>
                   </div>
               </div>
               <div class=\"col-lg-6 col-md-6\">
                   <div class=\"class-item\">
                       <div class=\"ci-pic\">
                           <img src=\"img/classes/class-4.jpg\" alt=\"\">
                       </div>
                       <div class=\"ci-text\">
                           <span>Cardio</span>
                           <h4>Indoor cycling</h4>
                           <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                       </div>
                   </div>
               </div>
               <div class=\"col-lg-6\">
                   <div class=\"class-item\">
                       <div class=\"ci-pic\">
                           <img src=\"img/classes/class-5.jpg\" alt=\"\">
                       </div>
                       <div class=\"ci-text\">
                           <span>Training</span>
                           <h4>Boxing</h4>
                           <a href=\"#\"><i class=\"fa fa-angle-right\"></i></a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- ChoseUs Section End -->

   <!-- Banner Section Begin -->
   <section class=\"banner-section set-bg\" data-setbg=\"img/banner-bg.jpg\">
       <div class=\"container\">
           <div class=\"row\">
               <div class=\"col-lg-12 text-center\">
                   <div class=\"bs-text\">
                       <h2>registration now to get more deals</h2>
                       <div class=\"bt-tips\">Where health, beauty and fitness meet.</div>
                       <a href=\"#\" class=\"primary-btn  btn-normal\">Appointment</a>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- Banner Section End -->

   <!-- Pricing Section Begin -->
   <section class=\"pricing-section spad\">
       <div class=\"container\">
           <div class=\"row\">
               <div class=\"col-lg-12\">
                   <div class=\"section-title\">
                       <span>Our Plan</span>
                       <h2>Choose your pricing plan</h2>
                   </div>
               </div>
           </div>
           <div class=\"row justify-content-center\">
               <div class=\"col-lg-4 col-md-8\">
                   <div class=\"ps-item\">
                       <h3>Class drop-in</h3>
                       <div class=\"pi-price\">
                           <h2>\$ 39.0</h2>
                           <span>SINGLE CLASS</span>
                       </div>
                       <ul>
                           <li>Free riding</li>
                           <li>Unlimited equipments</li>
                           <li>Personal trainer</li>
                           <li>Weight losing classes</li>
                           <li>Month to mouth</li>
                           <li>No time restriction</li>
                       </ul>
                       <a href=\"#\" class=\"primary-btn pricing-btn\">Enroll now</a>
                       <a href=\"#\" class=\"thumb-icon\"><i class=\"fa fa-picture-o\"></i></a>
                   </div>
               </div>
               <div class=\"col-lg-4 col-md-8\">
                   <div class=\"ps-item\">
                       <h3>12 Month unlimited</h3>
                       <div class=\"pi-price\">
                           <h2>\$ 99.0</h2>
                           <span>SINGLE CLASS</span>
                       </div>
                       <ul>
                           <li>Free riding</li>
                           <li>Unlimited equipments</li>
                           <li>Personal trainer</li>
                           <li>Weight losing classes</li>
                           <li>Month to mouth</li>
                           <li>No time restriction</li>
                       </ul>
                       <a href=\"#\" class=\"primary-btn pricing-btn\">Enroll now</a>
                       <a href=\"#\" class=\"thumb-icon\"><i class=\"fa fa-picture-o\"></i></a>
                   </div>
               </div>
               <div class=\"col-lg-4 col-md-8\">
                   <div class=\"ps-item\">
                       <h3>6 Month unlimited</h3>
                       <div class=\"pi-price\">
                           <h2>\$ 59.0</h2>
                           <span>SINGLE CLASS</span>
                       </div>
                       <ul>
                           <li>Free riding</li>
                           <li>Unlimited equipments</li>
                           <li>Personal trainer</li>
                           <li>Weight losing classes</li>
                           <li>Month to mouth</li>
                           <li>No time restriction</li>
                       </ul>
                       <a href=\"#\" class=\"primary-btn pricing-btn\">Enroll now</a>
                       <a href=\"#\" class=\"thumb-icon\"><i class=\"fa fa-picture-o\"></i></a>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- Pricing Section End -->

   <!-- Gallery Section Begin -->
   <div class=\"gallery-section\">
       <div class=\"gallery\">
           <div class=\"grid-sizer\"></div>
           <div class=\"gs-item grid-wide set-bg\" data-setbg=\"img/gallery/gallery-1.jpg\">
               <a href=\"img/gallery/gallery-1.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
           </div>
           <div class=\"gs-item set-bg\" data-setbg=\"img/gallery/gallery-2.jpg\">
               <a href=\"img/gallery/gallery-2.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
           </div>
           <div class=\"gs-item set-bg\" data-setbg=\"img/gallery/gallery-3.jpg\">
               <a href=\"img/gallery/gallery-3.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
           </div>
           <div class=\"gs-item set-bg\" data-setbg=\"img/gallery/gallery-4.jpg\">
               <a href=\"img/gallery/gallery-4.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
           </div>
           <div class=\"gs-item set-bg\" data-setbg=\"img/gallery/gallery-5.jpg\">
               <a href=\"img/gallery/gallery-5.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
           </div>
           <div class=\"gs-item grid-wide set-bg\" data-setbg=\"img/gallery/gallery-6.jpg\">
               <a href=\"img/gallery/gallery-6.jpg\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
           </div>
       </div>
   </div>
   <!-- Gallery Section End -->

   <!-- Team Section Begin -->
   <section class=\"team-section spad\">
       <div class=\"container\">
           <div class=\"row\">
               <div class=\"col-lg-12\">
                   <div class=\"team-title\">
                       <div class=\"section-title\">
                           <span>Our Team</span>
                           <h2>TRAIN WITH EXPERTS</h2>
                       </div>
                       <a href=\"#\" class=\"primary-btn btn-normal appoinment-btn\">appointment</a>
                   </div>
               </div>
           </div>
           <div class=\"row\">
               <div class=\"ts-slider owl-carousel\">
                   <div class=\"col-lg-4\">
                       <div class=\"ts-item set-bg\" data-setbg=\"img/team/team-1.jpg\">
                           <div class=\"ts_text\">
                               <h4>Athart Rachel</h4>
                               <span>Gym Trainer</span>
                           </div>
                       </div>
                   </div>
                   <div class=\"col-lg-4\">
                       <div class=\"ts-item set-bg\" data-setbg=\"img/team/team-2.jpg\">
                           <div class=\"ts_text\">
                               <h4>Athart Rachel</h4>
                               <span>Gym Trainer</span>
                           </div>
                       </div>
                   </div>
                   <div class=\"col-lg-4\">
                       <div class=\"ts-item set-bg\" data-setbg=\"img/team/team-3.jpg\">
                           <div class=\"ts_text\">
                               <h4>Athart Rachel</h4>
                               <span>Gym Trainer</span>
                           </div>
                       </div>
                   </div>
                   <div class=\"col-lg-4\">
                       <div class=\"ts-item set-bg\" data-setbg=\"img/team/team-4.jpg\">
                           <div class=\"ts_text\">
                               <h4>Athart Rachel</h4>
                               <span>Gym Trainer</span>
                           </div>
                       </div>
                   </div>
                   <div class=\"col-lg-4\">
                       <div class=\"ts-item set-bg\" data-setbg=\"img/team/team-5.jpg\">
                           <div class=\"ts_text\">
                               <h4>Athart Rachel</h4>
                               <span>Gym Trainer</span>
                           </div>
                       </div>
                   </div>
                   <div class=\"col-lg-4\">
                       <div class=\"ts-item set-bg\" data-setbg=\"img/team/team-6.jpg\">
                           <div class=\"ts_text\">
                               <h4>Athart Rachel</h4>
                               <span>Gym Trainer</span>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- Team Section End -->

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

</html>", "front/404.html.twig", "/home/skander/Downloads/fitnessnyi_web-main (1)/fitnessnyi_web-main/templates/front/404.html.twig");
    }
}
