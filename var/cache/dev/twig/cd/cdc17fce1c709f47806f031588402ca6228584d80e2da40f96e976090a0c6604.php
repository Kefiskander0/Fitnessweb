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

/* user/edit.html.twig */
class __TwigTemplate_ab56a0fa59ae406280dfc1c3f9ea106b992a62ab453b935de86fe5c18659c00f extends Template
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
            'connectedblock' => [$this, 'block_connectedblock'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "user/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Modifier l'utilisateur";
        
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
        echo "    <h1>Modifier l'utilisateur</h1>


    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

    <div class=\"wrap-input100 \" >
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), 'errors');
        echo "
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "adresse", [], "any", false, false, false, 22), 'errors');
        echo "
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "adresse", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Adresse"]]);
        echo "
        <span class=\"focus-input100\"></span>
    </div>

    <div class=\"wrap-input100 \" >
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "numTel", [], "any", false, false, false, 28), 'errors');
        echo "
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "numTel", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Num° Téléphone"]]);
        echo "
        <span class=\"focus-input100\"></span>
    </div>

    <div class=\"wrap-input100 \" >
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "password", [], "any", false, false, false, 34), 'errors');
        echo "
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "password", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Mot de passe"]]);
        echo "
        <span class=\"focus-input100\"></span>
    </div>

    <div class=\"wrap-input100 \" >
        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "mailAdress", [], "any", false, false, false, 40), 'errors');
        echo "
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "mailAdress", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Adresse mail"]]);
        echo "
        <span class=\"focus-input100\"></span>
    </div>


    <br>
    <div style=\"margin-left: 0px\">
        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "dateNaissance", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Date de naissance"]]);
        echo "
        <span class=\"focus-input100\"></span></div>
    <br>
    <div style=\"margin-left: 0px\">
        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "whoami", [], "any", false, false, false, 52), 'errors');
        echo "
        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "whoami", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "input100", "placeholder" => "whoami", "value" => "Administrateur"]]);
        echo "
        <span class=\"focus-input100\"></span></div>
    <br>


    <div style=\"margin-left: 0px\">
        ";
        // line 59
        if (true) {
            // line 60
            echo "            ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "blocRaison", [], "any", false, false, false, 60), "setRendered", [], "method", false, false, false, 60);
            // line 61
            echo "        ";
        }
        // line 62
        echo "        <span class=\"focus-input100\"></span></div>
    <div style=\"margin-left: 0px\">
        ";
        // line 64
        if (true) {
            // line 65
            echo "            ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "image", [], "any", false, false, false, 65), "setRendered", [], "method", false, false, false, 65);
            // line 66
            echo "        ";
        }
        // line 67
        echo "        <span class=\"focus-input100\"></span></div>

    <div style=\"margin-left: 0px\">
        ";
        // line 70
        if (true) {
            // line 71
            echo "            ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "blocRaison", [], "any", false, false, false, 71), "setRendered", [], "method", false, false, false, 71);
            // line 72
            echo "        ";
        }
        // line 73
        echo "        <span class=\"focus-input100\"></span></div>

    <div style=\"margin-left: 0px\">
        ";
        // line 76
        if (true) {
            // line 77
            echo "            ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "unbloc", [], "any", false, false, false, 77), "setRendered", [], "method", false, false, false, 77);
            // line 78
            echo "        ";
        }
        // line 79
        echo "        <span class=\"focus-input100\"></span></div>

    ";
        // line 81
        if (true) {
            // line 82
            echo "        ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "captchaCode", [], "any", false, false, false, 82), "setRendered", [], "method", false, false, false, 82);
            // line 83
            echo "    ";
        }
        // line 84
        echo "    <span class=\"focus-input100\"></span>
    <br>


    <button class=\"login100-form-btn\">";
        // line 88
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 88, $this->source); })()), "Modifier")) : ("Modifier")), "html", null, true);
        echo "</button>
    ";
        // line 89
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), 'form_end');
        echo "



    <a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\"><button style=\"margin-left: 0px; width: 64px\" class=\"btn btn-sm btn-outline-info\">Retour</button></a>
<br>
    ";
        // line 95
        echo twig_include($this->env, $context, "user/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 98
    public function block_connectedblock($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "connectedblock"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "connectedblock"));

        // line 99
        echo "
        <h4> ";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["connected"]) || array_key_exists("connected", $context) ? $context["connected"] : (function () { throw new RuntimeError('Variable "connected" does not exist.', 100, $this->source); })()), "nom", [], "any", false, false, false, 100), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["connected"]) || array_key_exists("connected", $context) ? $context["connected"] : (function () { throw new RuntimeError('Variable "connected" does not exist.', 100, $this->source); })()), "prenom", [], "any", false, false, false, 100), "html", null, true);
        echo "</h4>
        <p><i> connecté en tant que <b>";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["connected"]) || array_key_exists("connected", $context) ? $context["connected"] : (function () { throw new RuntimeError('Variable "connected" does not exist.', 101, $this->source); })()), "whoami", [], "any", false, false, false, 101), "html", null, true);
        echo "</b></i></p>


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 101,  294 => 100,  291 => 99,  281 => 98,  269 => 95,  264 => 93,  257 => 89,  253 => 88,  247 => 84,  244 => 83,  241 => 82,  239 => 81,  235 => 79,  232 => 78,  229 => 77,  227 => 76,  222 => 73,  219 => 72,  216 => 71,  214 => 70,  209 => 67,  206 => 66,  203 => 65,  201 => 64,  197 => 62,  194 => 61,  191 => 60,  189 => 59,  180 => 53,  176 => 52,  169 => 48,  159 => 41,  155 => 40,  147 => 35,  143 => 34,  135 => 29,  131 => 28,  123 => 23,  119 => 22,  111 => 17,  104 => 13,  100 => 12,  94 => 9,  89 => 6,  79 => 5,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_back.html.twig' %}


{% block title %}Modifier l'utilisateur{% endblock %}
{% block body %}
    <h1>Modifier l'utilisateur</h1>


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
        {{ form_widget(form.whoami,{'attr':{'class':'input100','placeholder':'whoami','value':'Administrateur'}}) }}
        <span class=\"focus-input100\"></span></div>
    <br>


    <div style=\"margin-left: 0px\">
        {% if true %}
            {% do form.blocRaison.setRendered() %}
        {% endif %}
        <span class=\"focus-input100\"></span></div>
    <div style=\"margin-left: 0px\">
        {% if true %}
            {% do form.image.setRendered() %}
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


    <button class=\"login100-form-btn\">{{ button_label|default('Modifier') }}</button>
    {{ form_end(form) }}



    <a href=\"{{ path('app_user_index') }}\"><button style=\"margin-left: 0px; width: 64px\" class=\"btn btn-sm btn-outline-info\">Retour</button></a>
<br>
    {{ include('user/_delete_form.html.twig') }}
{% endblock %}

    {% block connectedblock %}

        <h4> {{ connected.nom }} {{ connected.prenom }}</h4>
        <p><i> connecté en tant que <b>{{ connected.whoami }}</b></i></p>


    {% endblock %}
", "user/edit.html.twig", "/home/skander/Downloads/fitnessnyi_web-main (1)/fitnessnyi_web-main/templates/user/edit.html.twig");
    }
}
