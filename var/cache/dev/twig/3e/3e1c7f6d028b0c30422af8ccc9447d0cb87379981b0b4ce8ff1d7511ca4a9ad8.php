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

/* user/New_Users_from_admin/newcoach.html.twig */
class __TwigTemplate_e6c7621ec898726f4ed3dc7d983b600bf3f7458312c8cc8221f90bb9cd237ec0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/New_Users_from_admin/newcoach.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/New_Users_from_admin/newcoach.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "user/New_Users_from_admin/newcoach.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Coach";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Nouveau Coach :</h1>
<br>


    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

    <div class=\"wrap-input100 \" >
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "nom", [], "any", false, false, false, 13), 'errors');
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Nom"]]);
        echo "
        <span class=\"focus-input100\"></span>
    </div>
    <div class=\"wrap-input100 \" >
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "prenom", [], "any", false, false, false, 18), 'errors');
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "prenom", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Prénom"]]);
        echo "
        <span class=\"focus-input100\"></span>
    </div>

    <div class=\"wrap-input100 \" >
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "adresse", [], "any", false, false, false, 24), 'errors');
        echo "
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "adresse", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Adresse"]]);
        echo "
        <span class=\"focus-input100\"></span>
    </div>

    <div class=\"wrap-input100 \" >
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "numTel", [], "any", false, false, false, 30), 'errors');
        echo "
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "numTel", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Num° Téléphone"]]);
        echo "
        <span class=\"focus-input100\"></span>
    </div>

    <div class=\"wrap-input100 \" >
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "password", [], "any", false, false, false, 36), 'errors');
        echo "
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "password", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Mot de passe"]]);
        echo "
        <span class=\"focus-input100\"></span>
    </div>

    <div class=\"wrap-input100 \" >
        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "mailAdress", [], "any", false, false, false, 42), 'errors');
        echo "
        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "mailAdress", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Adresse mail"]]);
        echo "
        <span class=\"focus-input100\"></span>
    </div>


    <br>
    <div style=\"margin-left: 0px\">
        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "dateNaissance", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Date de naissance"]]);
        echo "
        <span class=\"focus-input100\"></span></div>
<br>
    <div style=\"margin-left: 0px\">
        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "whoami", [], "any", false, false, false, 54), 'errors');
        echo "
        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "whoami", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "input100", "placeholder" => "whoami", "value" => "Coach"]]);
        echo "
        <span class=\"focus-input100\"></span></div>
<br>


    <div style=\"margin-left: 0px\">
        ";
        // line 61
        if (true) {
            // line 62
            echo "            ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "blocRaison", [], "any", false, false, false, 62), "setRendered", [], "method", false, false, false, 62);
            // line 63
            echo "        ";
        }
        // line 64
        echo "        <span class=\"focus-input100\"></span></div>


    <div style=\"margin-left: 0px\">
        ";
        // line 68
        if (true) {
            // line 69
            echo "            ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "blocRaison", [], "any", false, false, false, 69), "setRendered", [], "method", false, false, false, 69);
            // line 70
            echo "        ";
        }
        // line 71
        echo "        <span class=\"focus-input100\"></span></div>

    <div style=\"margin-left: 0px\">
        ";
        // line 74
        if (true) {
            // line 75
            echo "            ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "unbloc", [], "any", false, false, false, 75), "setRendered", [], "method", false, false, false, 75);
            // line 76
            echo "        ";
        }
        // line 77
        echo "        <span class=\"focus-input100\"></span></div>

    ";
        // line 79
        if (true) {
            // line 80
            echo "        ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "captchaCode", [], "any", false, false, false, 80), "setRendered", [], "method", false, false, false, 80);
            // line 81
            echo "    ";
        }
        // line 82
        echo "    <span class=\"focus-input100\"></span>

    <br>


    <button class=\"login100-form-btn\">";
        // line 87
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 87, $this->source); })()), "Créer")) : ("Créer")), "html", null, true);
        echo "</button>
    ";
        // line 88
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), 'form_end');
        echo "




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/New_Users_from_admin/newcoach.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 88,  247 => 87,  240 => 82,  237 => 81,  234 => 80,  232 => 79,  228 => 77,  225 => 76,  222 => 75,  220 => 74,  215 => 71,  212 => 70,  209 => 69,  207 => 68,  201 => 64,  198 => 63,  195 => 62,  193 => 61,  184 => 55,  180 => 54,  173 => 50,  163 => 43,  159 => 42,  151 => 37,  147 => 36,  139 => 31,  135 => 30,  127 => 25,  123 => 24,  115 => 19,  111 => 18,  104 => 14,  100 => 13,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Coach{% endblock %}

{% block body %}
    <h1>Nouveau Coach :</h1>
<br>


    {{ form_start(form,{'attr': {'novalidate': 'novalidate'}} ) }}

    <div class=\"wrap-input100 \" >
        {{ form_errors(form.nom) }}
        {{ form_widget(form.nom,{'attr':{'class':'input100','placeholder':'Nom'}}) }}
        <span class=\"focus-input100\"></span>
    </div>
    <div class=\"wrap-input100 \" >
        {{ form_errors(form.prenom) }}
        {{ form_widget(form.prenom,{'attr':{'class':'input100','placeholder':'Prénom'}}) }}
        <span class=\"focus-input100\"></span>
    </div>

    <div class=\"wrap-input100 \" >
        {{ form_errors(form.adresse) }}
        {{ form_widget(form.adresse,{'attr':{'class':'input100','placeholder':'Adresse'}}) }}
        <span class=\"focus-input100\"></span>
    </div>

    <div class=\"wrap-input100 \" >
        {{ form_errors(form.numTel) }}
        {{ form_widget(form.numTel,{'attr':{'class':'input100','placeholder':'Num° Téléphone'}}) }}
        <span class=\"focus-input100\"></span>
    </div>

    <div class=\"wrap-input100 \" >
        {{ form_errors(form.password) }}
        {{ form_widget(form.password,{'attr':{'class':'input100','placeholder':'Mot de passe'}}) }}
        <span class=\"focus-input100\"></span>
    </div>

    <div class=\"wrap-input100 \" >
        {{ form_errors(form.mailAdress) }}
        {{ form_widget(form.mailAdress,{'attr':{'class':'input100','placeholder':'Adresse mail'}}) }}
        <span class=\"focus-input100\"></span>
    </div>


    <br>
    <div style=\"margin-left: 0px\">
        {{ form_widget(form.dateNaissance,{'attr':{'class':'input100','placeholder':'Date de naissance'}}) }}
        <span class=\"focus-input100\"></span></div>
<br>
    <div style=\"margin-left: 0px\">
        {{ form_errors(form.whoami) }}
        {{ form_widget(form.whoami,{'attr':{'class':'input100','placeholder':'whoami','value':'Coach'}}) }}
        <span class=\"focus-input100\"></span></div>
<br>


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

    {% if true %}
        {% do form.captchaCode.setRendered() %}
    {% endif %}
    <span class=\"focus-input100\"></span>

    <br>


    <button class=\"login100-form-btn\">{{ button_label|default('Créer') }}</button>
    {{ form_end(form) }}




{% endblock %}
", "user/New_Users_from_admin/newcoach.html.twig", "/home/skander/Downloads/fitnessnyi_web-main (1)/fitnessnyi_web-main/templates/user/New_Users_from_admin/newcoach.html.twig");
    }
}
