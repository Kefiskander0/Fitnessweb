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

/* back/package.json */
class __TwigTemplate_2e2dd7f68d08fcd5723bc9aa63a0a1cc560c85dae69d74c3e581831ca2179b06 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/package.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/package.json"));

        // line 1
        echo "{
  \"name\": \"sufee-admin-dashboard\",
  \"version\": \"1.0.0\",
  \"description\": \"Sufee Admin Dashboard\",
  \"main\": \"assets/js/main.js\",
  \"scripts\": {
    \"test\": \"test\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git+git@github.com:sarangaem/sufee-admin-dashboard.git\"
  },
  \"keywords\": [
    \"html\",
    \"js\",
    \"css\"
  ],
  \"author\": \"Aigars Silkalns\",
  \"license\": \"MIT\",
  \"homepage\": \"https://colorlib.com/polygon/sufee/index.html\",
  \"devDependencies\": {
    \"grunt\": \"^1.0.3\",
    \"grunt-lintspaces\": \"^0.8.3\",
    \"grunt-pleeease\": \"^1.4.0\",
    \"grunt-sass\": \"^3.0.1\",
    \"node-sass\": \"^4.9.3\"
  }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "back/package.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\": \"sufee-admin-dashboard\",
  \"version\": \"1.0.0\",
  \"description\": \"Sufee Admin Dashboard\",
  \"main\": \"assets/js/main.js\",
  \"scripts\": {
    \"test\": \"test\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git+git@github.com:sarangaem/sufee-admin-dashboard.git\"
  },
  \"keywords\": [
    \"html\",
    \"js\",
    \"css\"
  ],
  \"author\": \"Aigars Silkalns\",
  \"license\": \"MIT\",
  \"homepage\": \"https://colorlib.com/polygon/sufee/index.html\",
  \"devDependencies\": {
    \"grunt\": \"^1.0.3\",
    \"grunt-lintspaces\": \"^0.8.3\",
    \"grunt-pleeease\": \"^1.4.0\",
    \"grunt-sass\": \"^3.0.1\",
    \"node-sass\": \"^4.9.3\"
  }
}
", "back/package.json", "/home/skander/Downloads/fitnessnyi_web-main (1)/fitnessnyi_web-main/templates/back/package.json");
    }
}
