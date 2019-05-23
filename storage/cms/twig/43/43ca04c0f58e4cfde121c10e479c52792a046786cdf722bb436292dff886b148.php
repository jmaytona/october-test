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

/* C:\xampp\htdocs\october_test/themes/grey/partials/nav.htm */
class __TwigTemplate_739f714f100ff1446037a3950a24acbf237a3d868e24ec053d395f2642049c81 extends \Twig\Template
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
        echo "<nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
    <div class=\"container\">
      <a class=\"navbar-brand js-scroll-trigger\" href=\"#page-top\">Watch</a>
      <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        Menu
        <i class=\"fas fa-bars\"></i>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
        <ul class=\"navbar-nav ml-auto\">
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"#about\">About</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"#projects\">Products</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"#signup\">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october_test/themes/grey/partials/nav.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
    <div class=\"container\">
      <a class=\"navbar-brand js-scroll-trigger\" href=\"#page-top\">Watch</a>
      <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        Menu
        <i class=\"fas fa-bars\"></i>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
        <ul class=\"navbar-nav ml-auto\">
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"#about\">About</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"#projects\">Products</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link js-scroll-trigger\" href=\"#signup\">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>", "C:\\xampp\\htdocs\\october_test/themes/grey/partials/nav.htm", "");
    }
}
