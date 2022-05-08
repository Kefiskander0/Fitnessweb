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

/* front/fresh-base.html.twig */
class __TwigTemplate_e54d93102a639d7d79382cc3f676ce39306d8776b6a50cbc9e67258641360cf9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'pagetitle' => [$this, 'block_pagetitle'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/fresh-base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/fresh-base.html.twig"));

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
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/flaticon.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/barfiller.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slicknav.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/test.css"), "html", null, true);
        echo "\" >
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700\" rel=\"stylesheet\">

</head>

<body>
<!-- Page Preloder -->
<div id=\"preloder\">
    <div class=\"loader\"></div>
</div>

<!-- Offcanvas Menu Section Begin -->
";
        // line 37
        echo twig_include($this->env, $context, "front/barre.html.twig");
        echo "
<!-- Header End -->

<!-- Breadcrumb Section Begin -->
<section class=\"breadcrumb-section set-bg\" data-setbg=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/breadcrumb-bg.jpg"), "html", null, true);
        echo "\">
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <div class=\"breadcrumb-text\">
                    ";
        // line 47
        $this->displayBlock('header', $context, $blocks);
        // line 53
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- ChoseUs Section Begin -->
<section class=\"choseus-section spad\">
    <div class=\"container\">
        ";
        // line 64
        $this->displayBlock('body', $context, $blocks);
        // line 66
        echo "    </div>
</section>
<!-- ChoseUs Section End -->
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
                        <a href=\"#\">login<i class=\"btn btn-primary\"></i></a>
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
<script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/masonry.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.barfiller.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.slicknav.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>


</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 47
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 48
        echo "                    <h2>";
        $this->displayBlock('pagetitle', $context, $blocks);
        echo "</h2>
                    <div class=\"bt-option\">
                            <a href=\"\">Home</a>
                        <span>Products</span>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_pagetitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagetitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pagetitle"));

        echo "Products";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 65
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/fresh-base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 65,  355 => 64,  321 => 48,  311 => 47,  295 => 194,  291 => 193,  287 => 192,  283 => 191,  279 => 190,  275 => 189,  271 => 188,  267 => 187,  144 => 66,  142 => 64,  129 => 53,  127 => 47,  118 => 41,  111 => 37,  96 => 25,  92 => 24,  88 => 23,  84 => 22,  80 => 21,  76 => 20,  72 => 19,  68 => 18,  64 => 17,  46 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.min.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/flaticon.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/owl.carousel.min.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/barfiller.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/magnific-popup.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/slicknav.min.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/test.css')}}\" >
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700\" rel=\"stylesheet\">

</head>

<body>
<!-- Page Preloder -->
<div id=\"preloder\">
    <div class=\"loader\"></div>
</div>

<!-- Offcanvas Menu Section Begin -->
{{ include('front/barre.html.twig') }}
<!-- Header End -->

<!-- Breadcrumb Section Begin -->
<section class=\"breadcrumb-section set-bg\" data-setbg=\"{{ asset('img/breadcrumb-bg.jpg')}}\">
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <div class=\"breadcrumb-text\">
                    {% block header %}
                    <h2>{% block pagetitle %}Products{% endblock %}</h2>
                    <div class=\"bt-option\">
                            <a href=\"\">Home</a>
                        <span>Products</span>
                        {% endblock %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- ChoseUs Section Begin -->
<section class=\"choseus-section spad\">
    <div class=\"container\">
        {% block body %}
        {% endblock %}
    </div>
</section>
<!-- ChoseUs Section End -->
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
                        <a href=\"#\">login<i class=\"btn btn-primary\"></i></a>
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
<script src=\"{{ asset('js/jquery-3.3.1.min.js')}}\"></script>
<script src=\"{{ asset('js/bootstrap.min.js')}}\"></script>
<script src=\"{{ asset('js/jquery.magnific-popup.min.js')}}\"></script>
<script src=\"{{ asset('js/masonry.pkgd.min.js')}}\"></script>
<script src=\"{{ asset('js/jquery.barfiller.js')}}\"></script>
<script src=\"{{ asset('js/jquery.slicknav.js')}}\"></script>
<script src=\"{{ asset('js/owl.carousel.min.js')}}\"></script>
<script src=\"{{ asset('js/main.js')}}\"></script>


</body>

</html>", "front/fresh-base.html.twig", "/home/skander/Downloads/fitnessnyi_web-main (1)/fitnessnyi_web-main/templates/front/fresh-base.html.twig");
    }
}
