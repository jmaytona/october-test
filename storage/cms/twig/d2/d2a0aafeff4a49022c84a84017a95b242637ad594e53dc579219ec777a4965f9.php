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

/* C:\xampp\htdocs\october_test/themes/grey/pages/watch-single.htm */
class __TwigTemplate_bdf15503b2356df9693280c1595f0165029bcea151b16f8d66f30a8421a634d3 extends \Twig\Template
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, false, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "displayColumn", [], "any", false, false, false, 2);
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "notFoundMessage", [], "any", false, false, false, 3);
        // line 4
        $context["counter"] = 1;
        // line 5
        echo "<section class=\"about-section text-center\">
    <div class=\"container\">
";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "featured", [], "any", false, false, false, 7) == 1)) {
            // line 8
            echo "        <div class=\"row\">
            <div class=\"col-lg-8 mx-auto\">
                    <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                            <ol class=\"carousel-indicators\">
                              <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                              <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                              <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                            </ol>
                            <div class=\"carousel-inner\">
                                ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "watchPic2", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 18
                echo "                                ";
                if ((($context["counter"] ?? null) == 1)) {
                    // line 19
                    echo "                                <div class=\"carousel-item active\">
                                ";
                } else {
                    // line 20
                    echo " 
                                <div class=\"carousel-item \">
                                ";
                }
                // line 23
                echo "                                ";
                $context["counter"] = (($context["counter"] ?? null) + 1);
                // line 24
                echo "                                <img class=\"d-block w-100\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 24), "html", null, true);
                echo "\" alt=\"First slide\">
                              </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                            </div>
                            <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                              <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                              <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                              <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                              <span class=\"sr-only\">Next</span>
                            </a>
                          </div>
              <h2 class=\"text-white mb-4\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "watch_name", [], "any", false, false, false, 37), "html", null, true);
            echo "</h2>
              <p class=\"text-white-50\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "watch_description", [], "any", false, false, false, 38), "html", null, true);
            echo "</p>
            </div>
        </div>
        <div data-aos=\"zoom-in-up\" data-aos-duration=\"2000\">
            <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "watchPic", [], "any", false, false, false, 42), "path", [], "any", false, false, false, 42), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"\" >
        </div>
";
        } else {
            // line 45
            echo "        <div class=\"row\">
            <div class=\"col-lg-8 mx-auto\">
              <h2 class=\"text-white mb-4\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "watch_name", [], "any", false, false, false, 47), "html", null, true);
            echo "</h2>
              <p class=\"text-white-50\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "watch_description", [], "any", false, false, false, 48), "html", null, true);
            echo "</p>
            </div>
        </div>
        <div data-aos=\"zoom-in-up\" data-aos-duration=\"2000\">
            <img src=\"";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "watchPic", [], "any", false, false, false, 52), "path", [], "any", false, false, false, 52), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"\" >
        </div>
";
        }
        // line 55
        echo "    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october_test/themes/grey/pages/watch-single.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 55,  133 => 52,  126 => 48,  122 => 47,  118 => 45,  112 => 42,  105 => 38,  101 => 37,  89 => 27,  79 => 24,  76 => 23,  71 => 20,  67 => 19,  64 => 18,  60 => 17,  49 => 8,  47 => 7,  43 => 5,  41 => 4,  39 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}
{% set counter = 1 %}
<section class=\"about-section text-center\">
    <div class=\"container\">
{% if record.featured == 1 %}
        <div class=\"row\">
            <div class=\"col-lg-8 mx-auto\">
                    <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                            <ol class=\"carousel-indicators\">
                              <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                              <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                              <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                            </ol>
                            <div class=\"carousel-inner\">
                                {% for image in record.watchPic2 %}
                                {% if counter == 1 %}
                                <div class=\"carousel-item active\">
                                {% else %} 
                                <div class=\"carousel-item \">
                                {% endif %}
                                {% set counter = counter + 1 %}
                                <img class=\"d-block w-100\" src=\"{{ image.path }}\" alt=\"First slide\">
                              </div>
                                {% endfor %}
                            </div>
                            <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                              <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                              <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                              <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                              <span class=\"sr-only\">Next</span>
                            </a>
                          </div>
              <h2 class=\"text-white mb-4\">{{record.watch_name}}</h2>
              <p class=\"text-white-50\">{{record.watch_description}}</p>
            </div>
        </div>
        <div data-aos=\"zoom-in-up\" data-aos-duration=\"2000\">
            <img src=\"{{ record.watchPic.path }}\" class=\"img-fluid\" alt=\"\" >
        </div>
{% else %}
        <div class=\"row\">
            <div class=\"col-lg-8 mx-auto\">
              <h2 class=\"text-white mb-4\">{{record.watch_name}}</h2>
              <p class=\"text-white-50\">{{record.watch_description}}</p>
            </div>
        </div>
        <div data-aos=\"zoom-in-up\" data-aos-duration=\"2000\">
            <img src=\"{{ record.watchPic.path }}\" class=\"img-fluid\" alt=\"\" >
        </div>
{% endif %}
    </div>
</section>", "C:\\xampp\\htdocs\\october_test/themes/grey/pages/watch-single.htm", "");
    }
}
