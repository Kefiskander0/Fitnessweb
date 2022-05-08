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

/* inscription/index.html.twig */
class __TwigTemplate_cce3efccf6e8273354abb83be71ad65e2e2e9e023b56b9f8156fc2170ab923b8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription/index.html.twig"));

        $this->parent = $this->loadTemplate("base_front.html.twig", "inscription/index.html.twig", 1);
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
        echo "    <div class=\"login100-form \" style=\"margin-top: -200px\" >
        <img style=\"width:250px;height:250px;margin-left: 100px\"  src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontassets/images/logo.png"), "html", null, true);
        echo "\">

        <span class=\"login100-form-title p-b-43\">
\t\t\t\t\t\tMerci de vous inscrire
\t\t\t\t\t</span>


        ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

        <div class=\"wrap-input100 \" >
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), 'errors');
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Nom"]]);
        echo "
            <span class=\"focus-input100\"></span>
        </div><br>
        <div class=\"wrap-input100 \" >
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "prenom", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Prénom"]]);
        echo "
            <span class=\"focus-input100\"></span>
        </div><br>

        <div class=\"wrap-input100 \" >
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "adresse", [], "any", false, false, false, 25), 'errors');
        echo "
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "adresse", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Adresse"]]);
        echo "
            <span class=\"focus-input100\"></span>
        </div>
        <br>
        <div class=\"wrap-input100 \" >
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "numTel", [], "any", false, false, false, 31), 'errors');
        echo "
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "numTel", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Num° Téléphone"]]);
        echo "
            <span class=\"focus-input100\"></span>
        </div>
        <br>
        <div class=\"wrap-input100 \" >
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "password", [], "any", false, false, false, 37), 'errors');
        echo "
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "password", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Mot de passe"]]);
        echo "
            <span class=\"focus-input100\"></span>
        </div>
        <br>
        <div class=\"wrap-input100 \" >
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "mailAdress", [], "any", false, false, false, 43), 'errors');
        echo "
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "mailAdress", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Adresse mail"]]);
        echo "
            <span class=\"focus-input100\"></span>
        </div>
        <br>

        <br>
        <div style=\"margin-left: 0px\">
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "dateNaissance", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Date de naissance"]]);
        echo "
            <span class=\"focus-input100\"></span></div>
        <br><br>
        <div style=\"margin-left: 0px\">
            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "whoami", [], "any", false, false, false, 55), 'errors');
        echo "
            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "whoami", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Qui êtes-vous?"]]);
        echo "
            <span class=\"focus-input100\"></span></div>
        <br><br>
        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "captchaCode", [], "any", false, false, false, 59), 'errors');
        echo "
        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "captchaCode", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Concentrez-vous ..."]]);
        echo "
<br><br>
        <div style=\"margin-left: 0px\">
            ";
        // line 63
        if (true) {
            // line 64
            echo "                ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "blocRaison", [], "any", false, false, false, 64), "setRendered", [], "method", false, false, false, 64);
            // line 65
            echo "            ";
        }
        // line 66
        echo "            <span class=\"focus-input100\"></span></div>


        <div style=\"margin-left: 0px\">
            ";
        // line 70
        if (true) {
            // line 71
            echo "                ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "blocRaison", [], "any", false, false, false, 71), "setRendered", [], "method", false, false, false, 71);
            // line 72
            echo "            ";
        }
        // line 73
        echo "            <span class=\"focus-input100\"></span></div>

        <div style=\"margin-left: 0px\">
            ";
        // line 76
        if (true) {
            // line 77
            echo "                ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "unbloc", [], "any", false, false, false, 77), "setRendered", [], "method", false, false, false, 77);
            // line 78
            echo "            ";
        }
        // line 79
        echo "            <span class=\"focus-input100\"></span></div>



        <button class=\"login100-form-btn\">";
        // line 83
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 83, $this->source); })()), "Créer")) : ("Créer")), "html", null, true);
        echo "</button>
        ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'form_end');
        echo "


        <br>
        <a style=\"margin-left: 350px\" href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_userlogin");
        echo "\">Se connecter</a>


    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "inscription/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 88,  228 => 84,  224 => 83,  218 => 79,  215 => 78,  212 => 77,  210 => 76,  205 => 73,  202 => 72,  199 => 71,  197 => 70,  191 => 66,  188 => 65,  185 => 64,  183 => 63,  177 => 60,  173 => 59,  167 => 56,  163 => 55,  156 => 51,  146 => 44,  142 => 43,  134 => 38,  130 => 37,  122 => 32,  118 => 31,  110 => 26,  106 => 25,  98 => 20,  91 => 16,  87 => 15,  81 => 12,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block form %}
    <div class=\"login100-form \" style=\"margin-top: -200px\" >
        <img style=\"width:250px;height:250px;margin-left: 100px\"  src=\"{{ asset('frontassets/images/logo.png') }}\">

        <span class=\"login100-form-title p-b-43\">
\t\t\t\t\t\tMerci de vous inscrire
\t\t\t\t\t</span>


        {{ form_start(form,{'attr': {'novalidate': 'novalidate'}} ) }}

        <div class=\"wrap-input100 \" >
            {{ form_errors(form.nom) }}
            {{ form_widget(form.nom,{'attr':{'class':'input100','placeholder':'Nom'}}) }}
            <span class=\"focus-input100\"></span>
        </div><br>
        <div class=\"wrap-input100 \" >
            {{ form_widget(form.prenom,{'attr':{'class':'input100','placeholder':'Prénom'}}) }}
            <span class=\"focus-input100\"></span>
        </div><br>

        <div class=\"wrap-input100 \" >
            {{ form_errors(form.adresse) }}
            {{ form_widget(form.adresse,{'attr':{'class':'input100','placeholder':'Adresse'}}) }}
            <span class=\"focus-input100\"></span>
        </div>
        <br>
        <div class=\"wrap-input100 \" >
            {{ form_errors(form.numTel) }}
            {{ form_widget(form.numTel,{'attr':{'class':'input100','placeholder':'Num° Téléphone'}}) }}
            <span class=\"focus-input100\"></span>
        </div>
        <br>
        <div class=\"wrap-input100 \" >
            {{ form_errors(form.password) }}
            {{ form_widget(form.password,{'attr':{'class':'input100','placeholder':'Mot de passe'}}) }}
            <span class=\"focus-input100\"></span>
        </div>
        <br>
        <div class=\"wrap-input100 \" >
            {{ form_errors(form.mailAdress) }}
            {{ form_widget(form.mailAdress,{'attr':{'class':'input100','placeholder':'Adresse mail'}}) }}
            <span class=\"focus-input100\"></span>
        </div>
        <br>

        <br>
        <div style=\"margin-left: 0px\">
            {{ form_widget(form.dateNaissance,{'attr':{'class':'input100','placeholder':'Date de naissance'}}) }}
            <span class=\"focus-input100\"></span></div>
        <br><br>
        <div style=\"margin-left: 0px\">
            {{ form_errors(form.whoami) }}
            {{ form_widget(form.whoami,{'attr':{'class':'input100','placeholder':'Qui êtes-vous?'}}) }}
            <span class=\"focus-input100\"></span></div>
        <br><br>
        {{ form_errors(form.captchaCode) }}
        {{ form_widget(form.captchaCode,{'attr':{'class':'input100','placeholder':'Concentrez-vous ...'}}) }}
<br><br>
        <div style=\"margin-left: 0px\">
            {% if true %}
                {% do form.blocRaison.setRendered() %}
            {% endif %}
            <span class=\"focus-input100\"></span></div>


        <div style=\"margin-left: 0px\">
            {% if true %}
                {% do form.blocRaison.setRendered() %}
            {% endif %}
            <span class=\"focus-input100\"></span></div>

        <div style=\"margin-left: 0px\">
            {% if true %}
                {% do form.unbloc.setRendered() %}
            {% endif %}
            <span class=\"focus-input100\"></span></div>



        <button class=\"login100-form-btn\">{{ button_label|default('Créer') }}</button>
        {{ form_end(form) }}


        <br>
        <a style=\"margin-left: 350px\" href=\"{{ path('app_userlogin') }}\">Se connecter</a>


    </div>


{% endblock %}

", "inscription/index.html.twig", "/home/skander/Downloads/fitnessnyi_web-main (1)/fitnessnyi_web-main/templates/inscription/index.html.twig");
    }
}
