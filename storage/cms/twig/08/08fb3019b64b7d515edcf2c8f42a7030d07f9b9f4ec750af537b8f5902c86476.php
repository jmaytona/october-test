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

/* C:\xampp\htdocs\october_test/themes/grey/pages/watch.htm */
class __TwigTemplate_18b97e0cc818bbc3c41cb48bae0f172d3b07fbd4624d8f03a1ba9f2a307d18fb extends \Twig\Template
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
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, false, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, false, 2);
        // line 3
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, false, 3);
        // line 4
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, false, 4);
        // line 5
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 5);
        // line 6
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 6);
        // line 7
        echo "
<section id=\"about\" class=\"about-section text-center\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 mx-auto\">
        <h2 class=\"text-white mb-4\">Products</h2>
        <p class=\"text-white-50\">The world’s first GPS solar watch. By connecting to the GPS network, the Astron adjusts
          at the touch of a button to your time zone and, by taking all the energy it
          needs from light alone, never needs a battery change.</p>
      </div>
    </div>
  </div>
</section>

<section id=\"projects\" class=\"projects-section bg-light\">
  <div class=\"container\">
    
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 25
            echo "
    <!-- Include an referenced anchor tag if available -->
    ";
            // line 27
            if (($context["detailsPage"] ?? null)) {
                // line 28
                echo "      <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, false, 28)]);
                echo "\">
    ";
            }
            // line 30
            echo "    <div class=\"row align-items-center no-gutters mb-4 mb-lg-5\" data-aos=\"zoom-in-up\" data-aos-duration=\"1500\">
      <div class=\"col-xl-8 col-lg-7\">
        <img class=\"img-fluid mb-3 mb-lg-0\" src=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "watchPic", [], "any", false, false, false, 32), "path", [], "any", false, false, false, 32), "html", null, true);
            echo "\" alt=\"\">
      </div>
      <div class=\"col-xl-4 col-lg-5\">
        <div class=\"featured-text text-center text-lg-left\">
          <h4>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "watch_name", [], "any", false, false, false, 36), "html", null, true);
            echo "</h4>
          <p class=\"text-black-50 mb-0\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "watch_description", [], "any", false, false, false, 37), "html", null, true);
            echo "</p>
        </div>
      </div>
      
    </div>

    ";
            // line 43
            if (($context["detailsPage"] ?? null)) {
                // line 44
                echo "        </a>
    ";
            }
            // line 46
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october_test/themes/grey/pages/watch.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 48,  112 => 46,  108 => 44,  106 => 43,  97 => 37,  93 => 36,  86 => 32,  82 => 30,  76 => 28,  74 => 27,  70 => 25,  66 => 24,  47 => 7,  45 => 6,  43 => 5,  41 => 4,  39 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}

<section id=\"about\" class=\"about-section text-center\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 mx-auto\">
        <h2 class=\"text-white mb-4\">Products</h2>
        <p class=\"text-white-50\">The world’s first GPS solar watch. By connecting to the GPS network, the Astron adjusts
          at the touch of a button to your time zone and, by taking all the energy it
          needs from light alone, never needs a battery change.</p>
      </div>
    </div>
  </div>
</section>

<section id=\"projects\" class=\"projects-section bg-light\">
  <div class=\"container\">
    
    {% for record in records %}

    <!-- Include an referenced anchor tag if available -->
    {% if detailsPage %}
      <a href=\"{{ detailsPage|page( {(detailsUrlParameter): attribute(record, detailsKeyColumn)} ) }}\">
    {% endif %}
    <div class=\"row align-items-center no-gutters mb-4 mb-lg-5\" data-aos=\"zoom-in-up\" data-aos-duration=\"1500\">
      <div class=\"col-xl-8 col-lg-7\">
        <img class=\"img-fluid mb-3 mb-lg-0\" src=\"{{ record.watchPic.path }}\" alt=\"\">
      </div>
      <div class=\"col-xl-4 col-lg-5\">
        <div class=\"featured-text text-center text-lg-left\">
          <h4>{{ record.watch_name }}</h4>
          <p class=\"text-black-50 mb-0\">{{ record.watch_description }}</p>
        </div>
      </div>
      
    </div>

    {% if detailsPage %}
        </a>
    {% endif %}

    {% endfor %}
  </div>
</section>", "C:\\xampp\\htdocs\\october_test/themes/grey/pages/watch.htm", "");
    }
}
