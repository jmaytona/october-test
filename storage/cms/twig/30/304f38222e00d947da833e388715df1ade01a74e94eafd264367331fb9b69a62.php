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

/* C:\xampp\htdocs\october_test/themes/grey/partials/footer.htm */
class __TwigTemplate_7cc11dd63647c0a61f0b07139be6c6aa5ab1e0b48eb5ea671f3a57af8ded3d9a extends \Twig\Template
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
        echo "<footer class=\"bg-black small text-center text-white-50\">
    <div class=\"container\">
      Copyright &copy; Your Website 2019
    </div>
  </footer>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october_test/themes/grey/partials/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"bg-black small text-center text-white-50\">
    <div class=\"container\">
      Copyright &copy; Your Website 2019
    </div>
  </footer>", "C:\\xampp\\htdocs\\october_test/themes/grey/partials/footer.htm", "");
    }
}
