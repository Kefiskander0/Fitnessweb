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

/* user/block.html.twig */
class __TwigTemplate_23a3a3167ff2657b57ef63856b57673ce1149ab03ffb4b96ea9ad673e5b1be6e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/block.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/block.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "user/block.html.twig", 1);
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

        echo "Bloquer l'utilisateur";
        
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
        echo "    <h1>Bloquer l'utilisateur</h1>
<br><br>

    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["blockform"]) || array_key_exists("blockform", $context) ? $context["blockform"] : (function () { throw new RuntimeError('Variable "blockform" does not exist.', 9, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "




    <div style=\"margin-left: 0px\">
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["blockform"]) || array_key_exists("blockform", $context) ? $context["blockform"] : (function () { throw new RuntimeError('Variable "blockform" does not exist.', 15, $this->source); })()), "unbloc", [], "any", false, false, false, 15), 'errors');
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["blockform"]) || array_key_exists("blockform", $context) ? $context["blockform"] : (function () { throw new RuntimeError('Variable "blockform" does not exist.', 16, $this->source); })()), "unbloc", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Jusqu à quand ?", "type" => "Date"]]);
        echo "
        <span class=\"focus-input100\"></span></div>
    <br>


    <div style=\"margin-left: 0px\">
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["blockform"]) || array_key_exists("blockform", $context) ? $context["blockform"] : (function () { throw new RuntimeError('Variable "blockform" does not exist.', 22, $this->source); })()), "blocRaison", [], "any", false, false, false, 22), 'errors');
        echo "
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["blockform"]) || array_key_exists("blockform", $context) ? $context["blockform"] : (function () { throw new RuntimeError('Variable "blockform" does not exist.', 23, $this->source); })()), "blocRaison", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Pourquoi ?"]]);
        echo "
        <span class=\"focus-input100\"></span></div>
    <br>



    <div style=\"margin-left: 0px\">
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["blockform"]) || array_key_exists("blockform", $context) ? $context["blockform"] : (function () { throw new RuntimeError('Variable "blockform" does not exist.', 30, $this->source); })()), "captchaCod", [], "any", false, false, false, 30), 'errors');
        echo "
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["blockform"]) || array_key_exists("blockform", $context) ? $context["blockform"] : (function () { throw new RuntimeError('Variable "blockform" does not exist.', 31, $this->source); })()), "captchaCod", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Concentrez-vous"]]);
        echo "
        <span class=\"focus-input100\"></span></div>
    <br>


    <span class=\"focus-input100\"></span>
    <br>


    <button class=\"login100-form-btn\">";
        // line 40
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 40, $this->source); })()), "Bloquer")) : ("Bloquer")), "html", null, true);
        echo "</button>
    ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["blockform"]) || array_key_exists("blockform", $context) ? $context["blockform"] : (function () { throw new RuntimeError('Variable "blockform" does not exist.', 41, $this->source); })()), 'form_end');
        echo "



    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\"><button style=\"margin-left: 0px; width: 64px\" class=\"btn btn-sm btn-outline-info\">Retour</button></a>
    <br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 45,  149 => 41,  145 => 40,  133 => 31,  129 => 30,  119 => 23,  115 => 22,  106 => 16,  102 => 15,  93 => 9,  88 => 6,  78 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_back.html.twig' %}


{% block title %}Bloquer l'utilisateur{% endblock %}
{% block body %}
    <h1>Bloquer l'utilisateur</h1>
<br><br>

    {{ form_start(blockform,{'attr': {'novalidate': 'novalidate'}} ) }}




    <div style=\"margin-left: 0px\">
        {{ form_errors(blockform.unbloc) }}
        {{ form_widget(blockform.unbloc,{'attr':{'class':'input100','placeholder':'Jusqu à quand ?','type':'Date'}}) }}
        <span class=\"focus-input100\"></span></div>
    <br>


    <div style=\"margin-left: 0px\">
        {{ form_errors(blockform.blocRaison) }}
        {{ form_widget(blockform.blocRaison,{'attr':{'class':'input100','placeholder':'Pourquoi ?'}}) }}
        <span class=\"focus-input100\"></span></div>
    <br>



    <div style=\"margin-left: 0px\">
        {{ form_errors(blockform.captchaCod) }}
        {{ form_widget(blockform.captchaCod,{'attr':{'class':'input100','placeholder':'Concentrez-vous'}}) }}
        <span class=\"focus-input100\"></span></div>
    <br>


    <span class=\"focus-input100\"></span>
    <br>


    <button class=\"login100-form-btn\">{{ button_label|default('Bloquer') }}</button>
    {{ form_end(blockform) }}



    <a href=\"{{ path('app_user_index') }}\"><button style=\"margin-left: 0px; width: 64px\" class=\"btn btn-sm btn-outline-info\">Retour</button></a>
    <br>
{% endblock %}
", "user/block.html.twig", "/home/skander/Downloads/fitnessnyi_web-main (1)/fitnessnyi_web-main/templates/user/block.html.twig");
    }
}
