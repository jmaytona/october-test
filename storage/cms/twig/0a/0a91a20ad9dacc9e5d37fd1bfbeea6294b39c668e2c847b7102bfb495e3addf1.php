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

/* C:\xampp\htdocs\october_test/themes/grey/layouts/default.htm */
class __TwigTemplate_14f90332b81bd5b47ea033611762961157115642d51da838d287cd24cfc2cda0 extends \Twig\Template
{
    private $source;

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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">

  <title>Grayscale - Watch</title>

  <!-- Bootstrap core CSS -->
  <link href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap/css/bootstrap.min.css");
        echo "\" rel=\"stylesheet\">

  <!-- Custom fonts for this template -->
  <link href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/fontawesome-free/css/all.min.css");
        echo "\" rel=\"stylesheet\">
  <link href=\"https://fonts.googleapis.com/css?family=Varela+Round\" rel=\"stylesheet\">
  <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

  <!-- Custom styles for this template -->
  <link href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/grayscale.min.css");
        echo "\" rel=\"stylesheet\">

</head>

<body id=\"page-top\">

  <!-- Navigation -->
  ";
        // line 29
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "
  <!-- Content -->
  <section id=\"layout-content\">
    ";
        // line 33
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 34
        echo "  </section>

  <!-- Footer -->
  ";
        // line 37
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 38
        echo "
  <!-- Bootstrap core JavaScript -->
  <script src=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery/jquery.min.js");
        echo "\"></script>
  <script src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap/js/bootstrap.bundle.min.js");
        echo "\"></script>

  <!-- Plugin JavaScript -->
  <script src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery-easing/jquery.easing.min.js");
        echo "\"></script>

  <!-- Custom scripts for this template -->
  <script src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/grayscale.min.js");
        echo "\"></script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october_test/themes/grey/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 47,  108 => 44,  102 => 41,  98 => 40,  94 => 38,  90 => 37,  85 => 34,  83 => 33,  78 => 30,  74 => 29,  64 => 22,  56 => 17,  50 => 14,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">

  <title>Grayscale - Watch</title>

  <!-- Bootstrap core CSS -->
  <link href=\"{{ 'assets/vendor/bootstrap/css/bootstrap.min.css'|theme }}\" rel=\"stylesheet\">

  <!-- Custom fonts for this template -->
  <link href=\"{{ 'assets/vendor/fontawesome-free/css/all.min.css'|theme }}\" rel=\"stylesheet\">
  <link href=\"https://fonts.googleapis.com/css?family=Varela+Round\" rel=\"stylesheet\">
  <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

  <!-- Custom styles for this template -->
  <link href=\"{{ 'assets/css/grayscale.min.css'|theme }}\" rel=\"stylesheet\">

</head>

<body id=\"page-top\">

  <!-- Navigation -->
  {% partial 'nav' %}

  <!-- Content -->
  <section id=\"layout-content\">
    {% page %}
  </section>

  <!-- Footer -->
  {% partial 'footer' %}

  <!-- Bootstrap core JavaScript -->
  <script src=\"{{ 'assets/vendor/jquery/jquery.min.js'|theme }}\"></script>
  <script src=\"{{ 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'|theme }}\"></script>

  <!-- Plugin JavaScript -->
  <script src=\"{{ 'assets/vendor/jquery-easing/jquery.easing.min.js'|theme }}\"></script>

  <!-- Custom scripts for this template -->
  <script src=\"{{ 'assets/js/grayscale.min.js'|theme }}\"></script>

</body>

</html>", "C:\\xampp\\htdocs\\october_test/themes/grey/layouts/default.htm", "");
    }
}
