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

/* back/gruntfile.js */
class __TwigTemplate_5fc6e8c8c022971f6cf9a5e6a5bae7e765c6eb3da7a8edb4f87e9209f5592549 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/gruntfile.js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/gruntfile.js"));

        // line 1
        echo "module.exports = function(grunt) {

    const sass = require('node-sass');
  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    sass: {
            options: {
                implementation: sass,
                sourceMap: true
            },
            dist: {
                files: {
                    'assets/css/style.css': 'assets/scss/style.scss'
                }
            }
        },

    pleeease: {
    custom: {
      options: {
        autoprefixer: {'browsers': ['last 4 versions', 'ios 6']},
        filters: {'oldIE': true},
        rem: ['12px'],
        minifier: false,
        import: {'path': \"assets/css/\"}
      },
      files: {
        'assets/css/style.css': 'assets/css/style.css'
      }
    }
    },

    lintspaces: {
            options: {
                editorconfig: '.editorconfig'
            },
            sass: {
                src: [
                    'assets/scss/*.scss'
                ]
            },
            html: {
                src: [
                    '*.html'
                ]
            }
        },


  });

  // Load the plugins
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-pleeease');
  grunt.loadNpmTasks('grunt-lintspaces');

  // Default task(s).
  grunt.registerTask('default', ['lintspaces','sass','pleeease']);

};
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "back/gruntfile.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("module.exports = function(grunt) {

    const sass = require('node-sass');
  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    sass: {
            options: {
                implementation: sass,
                sourceMap: true
            },
            dist: {
                files: {
                    'assets/css/style.css': 'assets/scss/style.scss'
                }
            }
        },

    pleeease: {
    custom: {
      options: {
        autoprefixer: {'browsers': ['last 4 versions', 'ios 6']},
        filters: {'oldIE': true},
        rem: ['12px'],
        minifier: false,
        import: {'path': \"assets/css/\"}
      },
      files: {
        'assets/css/style.css': 'assets/css/style.css'
      }
    }
    },

    lintspaces: {
            options: {
                editorconfig: '.editorconfig'
            },
            sass: {
                src: [
                    'assets/scss/*.scss'
                ]
            },
            html: {
                src: [
                    '*.html'
                ]
            }
        },


  });

  // Load the plugins
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-pleeease');
  grunt.loadNpmTasks('grunt-lintspaces');

  // Default task(s).
  grunt.registerTask('default', ['lintspaces','sass','pleeease']);

};
", "back/gruntfile.js", "/home/skander/Downloads/fitnessnyi_web-main (1)/fitnessnyi_web-main/templates/back/gruntfile.js");
    }
}
