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

/* user/New_Users_from_admin/newsportif.html.twig */
class __TwigTemplate_01358d9f3389e4d1b6267edc9318187f343c403b2e8ee47e80f5debebf2dd9d5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/New_Users_from_admin/newsportif.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/New_Users_from_admin/newsportif.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "user/New_Users_from_admin/newsportif.html.twig", 1);
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

        echo "Sportif";
        
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
        echo "    <h1>Nouveau sportif :</h1>
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "prenom", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Prénom"]]);
        echo "
        <span class=\"focus-input100\"></span>
    </div>

    <div class=\"wrap-input100 \" >
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "adresse", [], "any", false, false, false, 23), 'errors');
        echo "
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "adresse", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Adresse"]]);
        echo "
        <span class=\"focus-input100\"></span>
    </div>

    <div class=\"wrap-input100 \" >
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "numTel", [], "any", false, false, false, 29), 'errors');
        echo "
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "numTel", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Num° Téléphone"]]);
        echo "
        <span class=\"focus-input100\"></span>
    </div>

    <div class=\"wrap-input100 \" >
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "password", [], "any", false, false, false, 35), 'errors');
        echo "
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "password", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Mot de passe"]]);
        echo "
        <span class=\"focus-input100\"></span>
    </div>

    <div class=\"wrap-input100 \" >
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "mailAdress", [], "any", false, false, false, 41), 'errors');
        echo "
        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "mailAdress", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Adresse mail"]]);
        echo "
        <span class=\"focus-input100\"></span>
    </div>


    <br>
    <div style=\"margin-left: 0px\">
        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "dateNaissance", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Date de naissance"]]);
        echo "
        <span class=\"focus-input100\"></span></div>
    <br>
    <div style=\"margin-left: 0px\">
        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "whoami", [], "any", false, false, false, 53), 'errors');
        echo "
        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "whoami", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "input100", "placeholder" => "whoami", "value" => "Sportif"]]);
        echo "
        <span class=\"focus-input100\"></span></div>
    <br>


    <div style=\"margin-left: 0px\">
        ";
        // line 60
        if (true) {
            // line 61
            echo "            ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "blocRaison", [], "any", false, false, false, 61), "setRendered", [], "method", false, false, false, 61);
            // line 62
            echo "        ";
        }
        // line 63
        echo "        <span class=\"focus-input100\"></span></div>


    <div style=\"margin-left: 0px\">
        ";
        // line 67
        if (true) {
            // line 68
            echo "            ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "blocRaison", [], "any", false, false, false, 68), "setRendered", [], "method", false, false, false, 68);
            // line 69
            echo "        ";
        }
        // line 70
        echo "        <span class=\"focus-input100\"></span></div>

    <div style=\"margin-left: 0px\">
        ";
        // line 73
        if (true) {
            // line 74
            echo "            ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "unbloc", [], "any", false, false, false, 74), "setRendered", [], "method", false, false, false, 74);
            // line 75
            echo "        ";
        }
        // line 76
        echo "        <span class=\"focus-input100\"></span></div>
    ";
        // line 77
        if (true) {
            // line 78
            echo "        ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "captchaCode", [], "any", false, false, false, 78), "setRendered", [], "method", false, false, false, 78);
            // line 79
            echo "    ";
        }
        // line 80
        echo "    <span class=\"focus-input100\"></span>

    <br>


    <button class=\"login100-form-btn\">";
        // line 85
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 85, $this->source); })()), "Créer")) : ("Créer")), "html", null, true);
        echo "</button>
    ";
        // line 86
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), 'form_end');
        echo "



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/New_Users_from_admin/newsportif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 86,  242 => 85,  235 => 80,  232 => 79,  229 => 78,  227 => 77,  224 => 76,  221 => 75,  218 => 74,  216 => 73,  211 => 70,  208 => 69,  205 => 68,  203 => 67,  197 => 63,  194 => 62,  191 => 61,  189 => 60,  180 => 54,  176 => 53,  169 => 49,  159 => 42,  155 => 41,  147 => 36,  143 => 35,  135 => 30,  131 => 29,  123 => 24,  119 => 23,  111 => 18,  104 => 14,  100 => 13,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Sportif{% endblock %}

{% block body %}
    <h1>Nouveau sportif :</h1>
    <br>


    {{ form_start(form,{'attr': {'novalidate': 'novalidate'}} ) }}

    <div class=\"wrap-input100 \" >
        {{ form_errors(form.nom) }}
        {{ form_widget(form.nom,{'attr':{'class':'input100','placeholder':'Nom'}}) }}
        <span class=\"focus-input100\"></span>
    </div>
    <div class=\"wrap-input100 \" >
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
        {{ form_widget(form.whoami,{'attr':{'class':'input100','placeholder':'whoami','value':'Sportif'}}) }}
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
", "user/New_Users_from_admin/newsportif.html.twig", "/home/skander/Downloads/fitnessnyi_web-main (1)/fitnessnyi_web-main/templates/user/New_Users_from_admin/newsportif.html.twig");
    }
}
