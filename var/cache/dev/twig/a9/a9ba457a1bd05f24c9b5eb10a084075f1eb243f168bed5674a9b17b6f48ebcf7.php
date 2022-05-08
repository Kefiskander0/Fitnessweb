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

/* user/_form.html.twig */
class __TwigTemplate_a592a87ed17fe3b950991a257a3831f5f1eab4ef4370526984c168fe6bafb9e1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "


<div class=\"wrap-input100 \" >
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "nom", [], "any", false, false, false, 5), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Nom"]]);
        echo "
    <span class=\"focus-input100\"></span>
</div>

<div class=\"wrap-input100 \" >
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "prenom", [], "any", false, false, false, 10), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Prénom"]]);
        echo "
    <span class=\"focus-input100\"></span>
</div>

<div class=\"wrap-input100 \" >
    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "adresse", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Adresse"]]);
        echo "
    <span class=\"focus-input100\"></span>
</div>

<div class=\"wrap-input100 \" >
    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "numTel", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Num° Téléphone"]]);
        echo "
    <span class=\"focus-input100\"></span>
</div>

<div class=\"wrap-input100 \" >
    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "password", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Mot de passe"]]);
        echo "
    <span class=\"focus-input100\"></span>
</div>

<div class=\"wrap-input100 \" >
    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "mailAdress", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Adresse mail"]]);
        echo "
    <span class=\"focus-input100\"></span>
</div>


<div class=\"wrap-input100 \" >
    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "whoami", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Qui êtes-vous ?"]]);
        echo "
    <span class=\"focus-input100\"></span>
</div>
<br>
<div style=\"margin-left: 0px\">
    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "dateNaissance", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Date de naissance"]]);
        echo "
    <span class=\"focus-input100\"></span></div>
<br>
<br>
<br>
<br>
<h6 style=\"color: #A00000; margin-left: 400px \"><i>Bloquer cet utilisateur ?</i></h6><br>
<div class=\"wrap-input100 \" >
    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "blocRaison", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Pourquoi le bloquer ?"]]);
        echo "
    <span class=\"focus-input100\"></span>
</div>
<br>
<div class=\"wrap-input100 \" >
    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "unbloc", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Jusque quand ?"]]);
        echo "
    <span class=\"focus-input100\"></span>
</div>
<br>
";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "captchaCode", [], "any", false, false, false, 58), 'row');
        echo "

<br>
<br>
<button class=\"login100-form-btn\">";
        // line 62
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 62, $this->source); })()), "Inscrire")) : ("Inscrire")), "html", null, true);
        echo "</button>
";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 63,  140 => 62,  133 => 58,  126 => 54,  118 => 49,  107 => 41,  99 => 36,  90 => 30,  82 => 25,  74 => 20,  66 => 15,  58 => 10,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form,{'attr': {'novalidate': 'novalidate'}} ) }}


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


<div class=\"wrap-input100 \" >
    {{ form_widget(form.whoami,{'attr':{'class':'input100','placeholder':'Qui êtes-vous ?'}}) }}
    <span class=\"focus-input100\"></span>
</div>
<br>
<div style=\"margin-left: 0px\">
    {{ form_widget(form.dateNaissance,{'attr':{'class':'input100','placeholder':'Date de naissance'}}) }}
    <span class=\"focus-input100\"></span></div>
<br>
<br>
<br>
<br>
<h6 style=\"color: #A00000; margin-left: 400px \"><i>Bloquer cet utilisateur ?</i></h6><br>
<div class=\"wrap-input100 \" >
    {{ form_widget(form.blocRaison,{'attr':{'class':'input100','placeholder':'Pourquoi le bloquer ?'}}) }}
    <span class=\"focus-input100\"></span>
</div>
<br>
<div class=\"wrap-input100 \" >
    {{ form_widget(form.unbloc,{'attr':{'class':'input100','placeholder':'Jusque quand ?'}}) }}
    <span class=\"focus-input100\"></span>
</div>
<br>
{{ form_row(form.captchaCode) }}

<br>
<br>
<button class=\"login100-form-btn\">{{ button_label|default('Inscrire') }}</button>
{{ form_end(form) }}
", "user/_form.html.twig", "/home/skander/Downloads/fitnessnyi_web-main (1)/fitnessnyi_web-main/templates/user/_form.html.twig");
    }
}
