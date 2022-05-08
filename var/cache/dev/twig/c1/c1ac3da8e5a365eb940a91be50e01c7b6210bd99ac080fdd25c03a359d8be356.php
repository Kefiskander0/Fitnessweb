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

/* userlogin/index.html.twig */
class __TwigTemplate_cbcd8745b34ee63beee021a1760d8da60b2e0b75dae12fe090984baf6a964d4a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form' => [$this, 'block_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "userlogin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "userlogin/index.html.twig"));

        $this->parent = $this->loadTemplate("base_front.html.twig", "userlogin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        // line 4
        echo "
    <form  action=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"login100-form \" style=\"margin-top: -200px\">
        <img style=\"width:250px;height:250px;margin-left: 100px\"  src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontassets/images/logo.png"), "html", null, true);
        echo "\">

        <span class=\"login100-form-title p-b-43\">
\t\t\t\t\t\tConnectez-vous pour continuer
\t\t\t\t\t</span>


        <div class=\"wrap-input100 \" >
            <input class=\"input100\"  id=\"mailAdresse\" type=\"text\" name=\"mailAdresse\">
            <span class=\"focus-input100\"></span>
            <span class=\"label-input100\">Adresse mail</span>
        </div>


        <div class=\"wrap-input100 \">
            <input class=\"input100\"  id=\"passworde\" type=\"password\" name=\"passworde\">
            <span class=\"focus-input100\"></span>
            <span class=\"label-input100\">Mot de passe</span>
        </div>

        <div class=\"flex-sb-m w-full p-t-3 p-b-32\">


            <div>
                <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pwdrecup");
        echo "\" class=\"txt1\">
                    Mot de passe oublié?
                </a>
            </div>
        </div>

        <div class=\"container-login100-form-btn\">
            <button class=\"login100-form-btn\">
                Connexion
            </button>
            <br>
        </div>

        <br>
        <br>
        <a style=\"margin-left: 380px\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new_inscri");
        echo "\">S'inscrire</a>


    </form>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "userlogin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 45,  102 => 30,  75 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block form %}

    <form  action=\"{{ path('app_login') }}\" class=\"login100-form \" style=\"margin-top: -200px\">
        <img style=\"width:250px;height:250px;margin-left: 100px\"  src=\"{{ asset('frontassets/images/logo.png') }}\">

        <span class=\"login100-form-title p-b-43\">
\t\t\t\t\t\tConnectez-vous pour continuer
\t\t\t\t\t</span>


        <div class=\"wrap-input100 \" >
            <input class=\"input100\"  id=\"mailAdresse\" type=\"text\" name=\"mailAdresse\">
            <span class=\"focus-input100\"></span>
            <span class=\"label-input100\">Adresse mail</span>
        </div>


        <div class=\"wrap-input100 \">
            <input class=\"input100\"  id=\"passworde\" type=\"password\" name=\"passworde\">
            <span class=\"focus-input100\"></span>
            <span class=\"label-input100\">Mot de passe</span>
        </div>

        <div class=\"flex-sb-m w-full p-t-3 p-b-32\">


            <div>
                <a href=\"{{ path('app_pwdrecup') }}\" class=\"txt1\">
                    Mot de passe oublié?
                </a>
            </div>
        </div>

        <div class=\"container-login100-form-btn\">
            <button class=\"login100-form-btn\">
                Connexion
            </button>
            <br>
        </div>

        <br>
        <br>
        <a style=\"margin-left: 380px\" href=\"{{ path('app_user_new_inscri') }}\">S'inscrire</a>


    </form>


{% endblock %}", "userlogin/index.html.twig", "/home/skander/Downloads/fitnessnyi_web-main (1)/fitnessnyi_web-main/templates/userlogin/index.html.twig");
    }
}
