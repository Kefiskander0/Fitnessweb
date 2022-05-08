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

/* back/admin-barre.html.twig */
class __TwigTemplate_7136a1696ff1d202b1e45372d328eea1ec376ffa414dc6afba6829942d351878 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'connectedblock' => [$this, 'block_connectedblock'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/admin-barre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/admin-barre.html.twig"));

        // line 1
        echo "
<aside id=\"left-panel\" class=\"left-panel\">
    <nav class=\"navbar navbar-expand-sm navbar-default\">

        <div class=\"navbar-header\">
            ";
        // line 6
        $this->displayBlock('connectedblock', $context, $blocks);
        // line 7
        echo "
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#main-menu\" aria-controls=\"main-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <i class=\"fa fa-bars\"></i>
            </button>
            <a class=\"navbar-brand\" href=\"./\"><img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"Logo\"></a>
            <a class=\"navbar-brand hidden\" href=\"./\"><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo2.png"), "html", null, true);
        echo "\" alt=\"Logo\"></a>
        </div>

        <div id=\"main-menu\" class=\"main-menu collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\">
                    <a href=\"\"> <i class=\"menu-icon fa fa-dashboard\"></i>Dashboard </a>
                </li>
                <h3 class=\"menu-title\"><div class=\"\"><a>     Utilisateurs</a></div></h3><!-- /.menu-title -->
                </li>

                <li class=\"menu-item-has-children dropdown\">
                    <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"fa fa-users\"></i> Coaches</a>
                    <ul class=\"sub-menu children dropdown-menu\">
                        <li><i ></i><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        echo "\">Nouveau </a></li>
                        <li><i ></i><a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaches");
        echo "\">Tous </a></li>

                    </ul>
                </li>

                <li class=\"menu-item-has-children dropdown\">
                    <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"fa fa-users\"></i> Sportifs</a>
                    <ul class=\"sub-menu children dropdown-menu\">
                        <li><i ></i><a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new_sporitf");
        echo "\">Nouveau </a></li>
                        <li><i ></i><a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sportifs");
        echo "\">Tous </a></li>

                    </ul>
                </li>

                <li class=\"menu-item-has-children dropdown\">
                    <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"fa fa-users\"></i> Admins</a>
                    <ul class=\"sub-menu children dropdown-menu\">
                        <li><i ></i><a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new_admin");
        echo "\">Nouveau </a></li>
                        <li><i ></i><a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admins");
        echo "\">Tous </a></li>

                    </ul>
                </li>

                <li class=\"menu-item-has-children dropdown\">
                    <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"fa fa-users\"></i> Gérants</a>
                    <ul class=\"sub-menu children dropdown-menu\">
                        <li><i ></i><a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new_gerant");
        echo "\">Nouveau </a></li>
                        <li><i ></i><a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_gérants");
        echo "\">Tous </a></li>

                    </ul>
                </li>

                <li class=\"menu-item-has-children dropdown\">
                    <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"fa fa-users\"></i> Tous</a>
                    <ul class=\"sub-menu children dropdown-menu\">

                        <li><i ></i><a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\">Tous </a></li>

                    </ul>
                </li>



            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_connectedblock($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "connectedblock"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "connectedblock"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back/admin-barre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 6,  141 => 63,  129 => 54,  125 => 53,  114 => 45,  110 => 44,  99 => 36,  95 => 35,  84 => 27,  80 => 26,  63 => 12,  59 => 11,  53 => 7,  51 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<aside id=\"left-panel\" class=\"left-panel\">
    <nav class=\"navbar navbar-expand-sm navbar-default\">

        <div class=\"navbar-header\">
            {% block connectedblock %}{% endblock %}

            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#main-menu\" aria-controls=\"main-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <i class=\"fa fa-bars\"></i>
            </button>
            <a class=\"navbar-brand\" href=\"./\"><img src=\"{{ asset('images/logo.png')}}\" alt=\"Logo\"></a>
            <a class=\"navbar-brand hidden\" href=\"./\"><img src=\"{{ asset('images/logo2.png')}}\" alt=\"Logo\"></a>
        </div>

        <div id=\"main-menu\" class=\"main-menu collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\">
                    <a href=\"\"> <i class=\"menu-icon fa fa-dashboard\"></i>Dashboard </a>
                </li>
                <h3 class=\"menu-title\"><div class=\"\"><a>     Utilisateurs</a></div></h3><!-- /.menu-title -->
                </li>

                <li class=\"menu-item-has-children dropdown\">
                    <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"fa fa-users\"></i> Coaches</a>
                    <ul class=\"sub-menu children dropdown-menu\">
                        <li><i ></i><a href=\"{{ path('app_user_new') }}\">Nouveau </a></li>
                        <li><i ></i><a href=\"{{ path('app_coaches') }}\">Tous </a></li>

                    </ul>
                </li>

                <li class=\"menu-item-has-children dropdown\">
                    <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"fa fa-users\"></i> Sportifs</a>
                    <ul class=\"sub-menu children dropdown-menu\">
                        <li><i ></i><a href=\"{{ path('app_user_new_sporitf') }}\">Nouveau </a></li>
                        <li><i ></i><a href=\"{{ path('app_sportifs') }}\">Tous </a></li>

                    </ul>
                </li>

                <li class=\"menu-item-has-children dropdown\">
                    <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"fa fa-users\"></i> Admins</a>
                    <ul class=\"sub-menu children dropdown-menu\">
                        <li><i ></i><a href=\"{{ path('app_user_new_admin') }}\">Nouveau </a></li>
                        <li><i ></i><a href=\"{{ path('app_admins') }}\">Tous </a></li>

                    </ul>
                </li>

                <li class=\"menu-item-has-children dropdown\">
                    <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"fa fa-users\"></i> Gérants</a>
                    <ul class=\"sub-menu children dropdown-menu\">
                        <li><i ></i><a href=\"{{ path('app_user_new_gerant') }}\">Nouveau </a></li>
                        <li><i ></i><a href=\"{{ path('app_gérants') }}\">Tous </a></li>

                    </ul>
                </li>

                <li class=\"menu-item-has-children dropdown\">
                    <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"fa fa-users\"></i> Tous</a>
                    <ul class=\"sub-menu children dropdown-menu\">

                        <li><i ></i><a href=\"{{ path('app_user_index') }}\">Tous </a></li>

                    </ul>
                </li>



            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->
", "back/admin-barre.html.twig", "/home/skander/Downloads/fitnessnyi_web-main (1)/fitnessnyi_web-main/templates/back/admin-barre.html.twig");
    }
}
