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

/* back/bower.json */
class __TwigTemplate_6f8c2d766634c9fe8552692a50f6065e83f0166614110aa951aa740ced864ab1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/bower.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/bower.json"));

        // line 1
        echo "{
  \"name\": \"sufee-admin-dashboard\",
  \"homepage\": \"https://colorlib.com/polygon/sufee/index.html\",
  \"authors\": [
    \"Aigars Silkalns\"
  ],
  \"description\": \"Sufee is a responsive Bootstrap 4 Admin Template.\",
  \"keywords\": [
    \"css\",
    \"js\",
    \"html\",
    \"template\",
    \"admin\",
    \"bootstrap\",
    \"theme\",
    \"backend\",
    \"responsive\"
  ],
  \"license\": \"MIT\",
  \"ignore\": [
    \"**/.*\",
    \"documentation\"
  ],
  \"devDependencies\": {
    \"jquery\": \"^2.2.4\",
    \"bootstrap\": \"^4.1.3\",
    \"font-awesome\": \"fontawesome#^4.7.0\",
    \"chart.js\": \"^2.7.2\",
    \"popper.js\": \"^1.14.4\",
    \"chosen\": \"^1.8.7\",
    \"jszip\": \"^3.1.5\",
    \"pdfmake\": \"^0.1.38\",
    \"datatables.net-bs4\": \"^1.10.19\",
    \"datatables.net-buttons-bs4\": \"^1.5.3\",
    \"flot\": \"^0.8.3\",
    \"gaugejs\": \"^1.3.5\",
    \"gmaps\": \"^0.4.24\",
    \"peity\": \"^3.3.0\",
    \"jqvmap\": \"^1.5.1\",
    \"animate.css\": \"^3.7.0\",
    \"flag-icon-css\": \"^3.2.0\",
    \"@icon/themify-icons\": \"^0.1.2\",
    \"selectFX\": \"git://github.com/codrops/SelectInspiration/\",
    \"jquery-validation-unobtrusive\": \"^3.2.10\",
    \"jquery-validation\": \"^1.18.0\"

  },
  \"resolutions\": {
    \"jquery\": \"^2.2.4\"
  }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "back/bower.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\": \"sufee-admin-dashboard\",
  \"homepage\": \"https://colorlib.com/polygon/sufee/index.html\",
  \"authors\": [
    \"Aigars Silkalns\"
  ],
  \"description\": \"Sufee is a responsive Bootstrap 4 Admin Template.\",
  \"keywords\": [
    \"css\",
    \"js\",
    \"html\",
    \"template\",
    \"admin\",
    \"bootstrap\",
    \"theme\",
    \"backend\",
    \"responsive\"
  ],
  \"license\": \"MIT\",
  \"ignore\": [
    \"**/.*\",
    \"documentation\"
  ],
  \"devDependencies\": {
    \"jquery\": \"^2.2.4\",
    \"bootstrap\": \"^4.1.3\",
    \"font-awesome\": \"fontawesome#^4.7.0\",
    \"chart.js\": \"^2.7.2\",
    \"popper.js\": \"^1.14.4\",
    \"chosen\": \"^1.8.7\",
    \"jszip\": \"^3.1.5\",
    \"pdfmake\": \"^0.1.38\",
    \"datatables.net-bs4\": \"^1.10.19\",
    \"datatables.net-buttons-bs4\": \"^1.5.3\",
    \"flot\": \"^0.8.3\",
    \"gaugejs\": \"^1.3.5\",
    \"gmaps\": \"^0.4.24\",
    \"peity\": \"^3.3.0\",
    \"jqvmap\": \"^1.5.1\",
    \"animate.css\": \"^3.7.0\",
    \"flag-icon-css\": \"^3.2.0\",
    \"@icon/themify-icons\": \"^0.1.2\",
    \"selectFX\": \"git://github.com/codrops/SelectInspiration/\",
    \"jquery-validation-unobtrusive\": \"^3.2.10\",
    \"jquery-validation\": \"^1.18.0\"

  },
  \"resolutions\": {
    \"jquery\": \"^2.2.4\"
  }
}
", "back/bower.json", "/home/skander/Downloads/fitnessnyi_web-main (1)/fitnessnyi_web-main/templates/back/bower.json");
    }
}
