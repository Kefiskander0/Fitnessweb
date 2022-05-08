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

/* user/New_Users_from_admin/newgerant.html.twig */
class __TwigTemplate_f7135b7c8a7b104158f5c1d3285ddd501a56d60e3a24176c482374cdc1fc0d7c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/New_Users_from_admin/newgerant.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/New_Users_from_admin/newgerant.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "user/New_Users_from_admin/newgerant.html.twig", 1);
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

        echo "Gérant";
        
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
        echo "    <h1>Nouveau Gérant :</h1>
    <br>


    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

    <div class=\"wrap-input100 \" >
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "nom", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Nom"]]);
        echo "
        <span class=\"focus-input100\"></span>
    </div>
    <div class=\"wrap-input100 \" >
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "prenom", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Prénom"]]);
        echo "
        <span class=\"focus-input100\"></span>
    </div>

    <div class=\"wrap-input100 \" >
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "adresse", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Adresse"]]);
        echo "
        <span class=\"focus-input100\"></span>
    </div>

    <div class=\"wrap-input100 \" >
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "numTel", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Num° Téléphone"]]);
        echo "
        <span class=\"focus-input100\"></span>
    </div>

    <div class=\"wrap-input100 \" >
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "password", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Mot de passe"]]);
        echo "
        <span class=\"focus-input100\"></span>
    </div>

    <div class=\"wrap-input100 \" >
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "mailAdress", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Adresse mail"]]);
        echo "
        <span class=\"focus-input100\"></span>
    </div>


    <br>
    <div style=\"margin-left: 0px\">
        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "dateNaissance", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Date de naissance"]]);
        echo "
        <span class=\"focus-input100\"></span></div>
    <br>
    <div style=\"margin-left: 0px\">
        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "whoami", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "input100", "placeholder" => "whoami", "value" => "Gérant"]]);
        echo "
        <span class=\"focus-input100\"></span></div>
    <br>


    <div style=\"margin-left: 0px\">
        ";
        // line 54
        if (true) {
            // line 55
            echo "            ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "blocRaison", [], "any", false, false, false, 55), "setRendered", [], "method", false, false, false, 55);
            // line 56
            echo "        ";
        }
        // line 57
        echo "        <span class=\"focus-input100\"></span></div>


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
        // line 67
        if (true) {
            // line 68
            echo "            ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "unbloc", [], "any", false, false, false, 68), "setRendered", [], "method", false, false, false, 68);
            // line 69
            echo "        ";
        }
        // line 70
        echo "        <span class=\"focus-input100\"></span></div>

    ";
        // line 72
        if (true) {
            // line 73
            echo "        ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "captchaCode", [], "any", false, false, false, 73), "setRendered", [], "method", false, false, false, 73);
            // line 74
            echo "    ";
        }
        // line 75
        echo "    <span class=\"focus-input100\"></span>

    <br>


    <button class=\"login100-form-btn\">";
        // line 80
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 80, $this->source); })()), "Créer")) : ("Créer")), "html", null, true);
        echo "</button>
    ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form_end');
        echo "




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/New_Users_from_admin/newgerant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 81,  219 => 80,  212 => 75,  209 => 74,  206 => 73,  204 => 72,  200 => 70,  197 => 69,  194 => 68,  192 => 67,  187 => 64,  184 => 63,  181 => 62,  179 => 61,  173 => 57,  170 => 56,  167 => 55,  165 => 54,  156 => 48,  149 => 44,  139 => 37,  131 => 32,  123 => 27,  115 => 22,  107 => 17,  100 => 13,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Gérant{% endblock %}

{% block body %}
    <h1>Nouveau Gérant :</h1>
    <br>


    {{ form_start(form,{'attr': {'novalidate': 'novalidate'}} ) }}

    <div class=\"wrap-input100 \" >
        {{ form_widget(form.nom,{'attr':{'class':'input100','placeholder':'Nom'}}) }}
        <span class=\"focus-input100\"></span>
    </div>
    <div class=\"wrap-input100 \" >
        {{ form_widget(form.prenom,{'attr':{'class':'input100','placeholder':'Prénom'}}) }}
        <span class=\"focus-input100\"></span>
    </div>

    <div class=\"wrap-input100 \" >
        {{ form_widget(form.adresse,{'attr':{'class':'input100','placeholder':'Adresse'}}) }}
        <span class=\"focus-input100\"></span>
    </div>

    <div class=\"wrap-input100 \" >
        {{ form_widget(form.numTel,{'attr':{'class':'input100','placeholder':'Num° Téléphone'}}) }}
        <span class=\"focus-input100\"></span>
    </div>

    <div class=\"wrap-input100 \" >
        {{ form_widget(form.password,{'attr':{'class':'input100','placeholder':'Mot de passe'}}) }}
        <span class=\"focus-input100\"></span>
    </div>

    <div class=\"wrap-input100 \" >
        {{ form_widget(form.mailAdress,{'attr':{'class':'input100','placeholder':'Adresse mail'}}) }}
        <span class=\"focus-input100\"></span>
    </div>


    <br>
    <div style=\"margin-left: 0px\">
        {{ form_widget(form.dateNaissance,{'attr':{'class':'input100','placeholder':'Date de naissance'}}) }}
        <span class=\"focus-input100\"></span></div>
    <br>
    <div style=\"margin-left: 0px\">
        {{ form_widget(form.whoami,{'attr':{'class':'input100','placeholder':'whoami','value':'Gérant'}}) }}
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
", "user/New_Users_from_admin/newgerant.html.twig", "/home/skander/Downloads/fitnessnyi_web-main (1)/fitnessnyi_web-main/templates/user/New_Users_from_admin/newgerant.html.twig");
    }
}
