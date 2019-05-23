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

/* C:\xampp\htdocs\october_test/themes/grey/pages/home.htm */
class __TwigTemplate_88bf71ebe775fd77804212f981e5c24c5a4625b4bb30a18c7f211f6f4cb04250 extends \Twig\Template
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
<!-- Header -->
  <header class=\"masthead\">
    <div class=\"container d-flex h-100 align-items-center\">
      <div class=\"mx-auto text-center\">
        <h1 class=\"mx-auto my-0 text-uppercase\">Grayscale</h1>
        <h2 class=\"text-white-50 mx-auto mt-2 mb-5\">A free, responsive, one page Bootstrap theme created by Start Bootstrap.</h2>
        <a href=\"#about\" class=\"btn btn-primary js-scroll-trigger\">Get Started</a>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section id=\"about\" class=\"about-section text-center\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-8 mx-auto\">
          <h2 class=\"text-white mb-4\">Built with Bootstrap 4</h2>
          <p class=\"text-white-50\">Grayscale is a free Bootstrap theme created by Start Bootstrap. It can be yours right now, simply download the template on
            <a href=\"http://startbootstrap.com/template-overviews/grayscale/\">the preview page</a>. The theme is open source, and you can use it for any purpose, personal or commercial.</p>
        </div>
      </div>
      <img src=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/ipad.png");
        echo "\" class=\"img-fluid\" alt=\"\">
    </div>
  </section>

  <!-- Projects Section -->
  <section id=\"projects\" class=\"projects-section bg-light\">
    <div class=\"container\">

      <!-- Featured Project Row -->
      <!-- <div class=\"row align-items-center no-gutters mb-4 mb-lg-5\">
        <div class=\"col-xl-8 col-lg-7\">
          <img class=\"img-fluid mb-3 mb-lg-0\" src=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg-masthead.jpg");
        echo "\" alt=\"\">
        </div>
        <div class=\"col-xl-4 col-lg-5\">
          <div class=\"featured-text text-center text-lg-left\">
            <h4>Shoreline</h4>
            <p class=\"text-black-50 mb-0\">Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!</p>
          </div>
        </div>
      </div> -->

      <!-- Featured Project Row -->
      ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 52
            echo "      ";
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "featured", [], "any", false, false, false, 52) == 1)) {
                // line 53
                echo "      <div class=\"row align-items-center no-gutters mb-4 mb-lg-5\">
          <div class=\"col-xl-8 col-lg-7\">
            <img class=\"img-fluid mb-3 mb-lg-0\" src=\"";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "watchPic", [], "any", false, false, false, 55), "path", [], "any", false, false, false, 55), "html", null, true);
                echo "\" alt=\"\">
          </div>
          <div class=\"col-xl-4 col-lg-5\">
            <div class=\"featured-text text-center text-lg-left\">
              <h4>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "watch_name", [], "any", false, false, false, 59), "html", null, true);
                echo "</h4>
              <p class=\"text-black-50 mb-0\">";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "watch_description", [], "any", false, false, false, 60), "html", null, true);
                echo "</p>
            </div>
          </div>
        </div>
        ";
            }
            // line 65
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
      <!-- Project One Row -->
      ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 69
            echo "      ";
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "featured", [], "any", false, false, false, 69) == 0)) {
                // line 70
                echo "      <div class=\"row justify-content-center no-gutters mb-5 mb-lg-0\">
        <div class=\"col-lg-6\">
          <img class=\"img-fluid\" src=\"";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "watchPic", [], "any", false, false, false, 72), "path", [], "any", false, false, false, 72), "html", null, true);
                echo "\" alt=\"\">
        </div>
        <div class=\"col-lg-6\">
          <div class=\"bg-black text-center h-100 project\">
            <div class=\"d-flex h-100\">
              <div class=\"project-text w-100 my-auto text-center text-lg-left\">
                <h4 class=\"text-white\">";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "watch_name", [], "any", false, false, false, 78), "html", null, true);
                echo "</h4>
                
                <p class=\"mb-0 text-white-50\">";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "watch_description", [], "any", false, false, false, 80), "html", null, true);
                echo "</p>
                <hr class=\"d-none d-lg-block mb-0 ml-0\">
              </div>
            </div>
          </div>
        </div>
      </div>
      ";
            }
            // line 88
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "
      <!-- Project Two Row -->
      <!-- <div class=\"row justify-content-center no-gutters\">
        <div class=\"col-lg-6\">
          <img class=\"img-fluid\" src=\"";
        // line 93
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/demo-image-02.jpg");
        echo "\" alt=\"\">
        </div>
        <div class=\"col-lg-6 order-lg-first\">
          <div class=\"bg-black text-center h-100 project\">
            <div class=\"d-flex h-100\">
              <div class=\"project-text w-100 my-auto text-center text-lg-right\">
                <h4 class=\"text-white\">Mountains</h4>
                <p class=\"mb-0 text-white-50\">Another example of a project with its respective description. These sections work well responsively as well, try this theme on a small screen!</p>
                <hr class=\"d-none d-lg-block mb-0 mr-0\">
              </div>
            </div>
          </div>
        </div>
      </div> -->

    </div>
  </section>

  <!-- Signup Section -->
  <section id=\"signup\" class=\"signup-section\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-10 col-lg-8 mx-auto text-center\">

          <i class=\"far fa-paper-plane fa-2x mb-2 text-white\"></i>
          <h2 class=\"text-white mb-5\">Subscribe to receive updates!</h2>

          <form class=\"form-inline d-flex\">
            <input type=\"email\" class=\"form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0\" id=\"inputEmail\" placeholder=\"Enter email address...\">
            <button type=\"submit\" class=\"btn btn-primary mx-auto\">Subscribe</button>
          </form>

        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class=\"contact-section bg-black\">
    <div class=\"container\">

      <div class=\"row\">

        <div class=\"col-md-4 mb-3 mb-md-0\">
          <div class=\"card py-4 h-100\">
            <div class=\"card-body text-center\">
              <i class=\"fas fa-map-marked-alt text-primary mb-2\"></i>
              <h4 class=\"text-uppercase m-0\">Address</h4>
              <hr class=\"my-4\">
              <div class=\"small text-black-50\">4923 Market Street, Orlando FL</div>
            </div>
          </div>
        </div>

        <div class=\"col-md-4 mb-3 mb-md-0\">
          <div class=\"card py-4 h-100\">
            <div class=\"card-body text-center\">
              <i class=\"fas fa-envelope text-primary mb-2\"></i>
              <h4 class=\"text-uppercase m-0\">Email</h4>
              <hr class=\"my-4\">
              <div class=\"small text-black-50\">
                <a href=\"#\">hello@yourdomain.com</a>
              </div>
            </div>
          </div>
        </div>

        <div class=\"col-md-4 mb-3 mb-md-0\">
          <div class=\"card py-4 h-100\">
            <div class=\"card-body text-center\">
              <i class=\"fas fa-mobile-alt text-primary mb-2\"></i>
              <h4 class=\"text-uppercase m-0\">Phone</h4>
              <hr class=\"my-4\">
              <div class=\"small text-black-50\">+1 (555) 902-8832</div>
            </div>
          </div>
        </div>
      </div>

      <div class=\"social d-flex justify-content-center\">
        <a href=\"#\" class=\"mx-2\">
          <i class=\"fab fa-twitter\"></i>
        </a>
        <a href=\"#\" class=\"mx-2\">
          <i class=\"fab fa-facebook-f\"></i>
        </a>
        <a href=\"#\" class=\"mx-2\">
          <i class=\"fab fa-github\"></i>
        </a>
      </div>

    </div>
  </section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\october_test/themes/grey/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 93,  181 => 89,  175 => 88,  164 => 80,  159 => 78,  150 => 72,  146 => 70,  143 => 69,  139 => 68,  135 => 66,  129 => 65,  121 => 60,  117 => 59,  110 => 55,  106 => 53,  103 => 52,  99 => 51,  85 => 40,  71 => 29,  47 => 7,  45 => 6,  43 => 5,  41 => 4,  39 => 3,  37 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}

<!-- Header -->
  <header class=\"masthead\">
    <div class=\"container d-flex h-100 align-items-center\">
      <div class=\"mx-auto text-center\">
        <h1 class=\"mx-auto my-0 text-uppercase\">Grayscale</h1>
        <h2 class=\"text-white-50 mx-auto mt-2 mb-5\">A free, responsive, one page Bootstrap theme created by Start Bootstrap.</h2>
        <a href=\"#about\" class=\"btn btn-primary js-scroll-trigger\">Get Started</a>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section id=\"about\" class=\"about-section text-center\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-8 mx-auto\">
          <h2 class=\"text-white mb-4\">Built with Bootstrap 4</h2>
          <p class=\"text-white-50\">Grayscale is a free Bootstrap theme created by Start Bootstrap. It can be yours right now, simply download the template on
            <a href=\"http://startbootstrap.com/template-overviews/grayscale/\">the preview page</a>. The theme is open source, and you can use it for any purpose, personal or commercial.</p>
        </div>
      </div>
      <img src=\"{{ 'assets/img/ipad.png'|theme }}\" class=\"img-fluid\" alt=\"\">
    </div>
  </section>

  <!-- Projects Section -->
  <section id=\"projects\" class=\"projects-section bg-light\">
    <div class=\"container\">

      <!-- Featured Project Row -->
      <!-- <div class=\"row align-items-center no-gutters mb-4 mb-lg-5\">
        <div class=\"col-xl-8 col-lg-7\">
          <img class=\"img-fluid mb-3 mb-lg-0\" src=\"{{ 'assets/img/bg-masthead.jpg'|theme }}\" alt=\"\">
        </div>
        <div class=\"col-xl-4 col-lg-5\">
          <div class=\"featured-text text-center text-lg-left\">
            <h4>Shoreline</h4>
            <p class=\"text-black-50 mb-0\">Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!</p>
          </div>
        </div>
      </div> -->

      <!-- Featured Project Row -->
      {% for record in records %}
      {% if record.featured == 1 %}
      <div class=\"row align-items-center no-gutters mb-4 mb-lg-5\">
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
        {% endif %}
        {% endfor %}

      <!-- Project One Row -->
      {% for record in records %}
      {% if record.featured == 0 %}
      <div class=\"row justify-content-center no-gutters mb-5 mb-lg-0\">
        <div class=\"col-lg-6\">
          <img class=\"img-fluid\" src=\"{{ record.watchPic.path }}\" alt=\"\">
        </div>
        <div class=\"col-lg-6\">
          <div class=\"bg-black text-center h-100 project\">
            <div class=\"d-flex h-100\">
              <div class=\"project-text w-100 my-auto text-center text-lg-left\">
                <h4 class=\"text-white\">{{ record.watch_name }}</h4>
                
                <p class=\"mb-0 text-white-50\">{{ record.watch_description }}</p>
                <hr class=\"d-none d-lg-block mb-0 ml-0\">
              </div>
            </div>
          </div>
        </div>
      </div>
      {% endif %}
      {% endfor %}

      <!-- Project Two Row -->
      <!-- <div class=\"row justify-content-center no-gutters\">
        <div class=\"col-lg-6\">
          <img class=\"img-fluid\" src=\"{{ 'assets/img/demo-image-02.jpg'|theme }}\" alt=\"\">
        </div>
        <div class=\"col-lg-6 order-lg-first\">
          <div class=\"bg-black text-center h-100 project\">
            <div class=\"d-flex h-100\">
              <div class=\"project-text w-100 my-auto text-center text-lg-right\">
                <h4 class=\"text-white\">Mountains</h4>
                <p class=\"mb-0 text-white-50\">Another example of a project with its respective description. These sections work well responsively as well, try this theme on a small screen!</p>
                <hr class=\"d-none d-lg-block mb-0 mr-0\">
              </div>
            </div>
          </div>
        </div>
      </div> -->

    </div>
  </section>

  <!-- Signup Section -->
  <section id=\"signup\" class=\"signup-section\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-10 col-lg-8 mx-auto text-center\">

          <i class=\"far fa-paper-plane fa-2x mb-2 text-white\"></i>
          <h2 class=\"text-white mb-5\">Subscribe to receive updates!</h2>

          <form class=\"form-inline d-flex\">
            <input type=\"email\" class=\"form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0\" id=\"inputEmail\" placeholder=\"Enter email address...\">
            <button type=\"submit\" class=\"btn btn-primary mx-auto\">Subscribe</button>
          </form>

        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class=\"contact-section bg-black\">
    <div class=\"container\">

      <div class=\"row\">

        <div class=\"col-md-4 mb-3 mb-md-0\">
          <div class=\"card py-4 h-100\">
            <div class=\"card-body text-center\">
              <i class=\"fas fa-map-marked-alt text-primary mb-2\"></i>
              <h4 class=\"text-uppercase m-0\">Address</h4>
              <hr class=\"my-4\">
              <div class=\"small text-black-50\">4923 Market Street, Orlando FL</div>
            </div>
          </div>
        </div>

        <div class=\"col-md-4 mb-3 mb-md-0\">
          <div class=\"card py-4 h-100\">
            <div class=\"card-body text-center\">
              <i class=\"fas fa-envelope text-primary mb-2\"></i>
              <h4 class=\"text-uppercase m-0\">Email</h4>
              <hr class=\"my-4\">
              <div class=\"small text-black-50\">
                <a href=\"#\">hello@yourdomain.com</a>
              </div>
            </div>
          </div>
        </div>

        <div class=\"col-md-4 mb-3 mb-md-0\">
          <div class=\"card py-4 h-100\">
            <div class=\"card-body text-center\">
              <i class=\"fas fa-mobile-alt text-primary mb-2\"></i>
              <h4 class=\"text-uppercase m-0\">Phone</h4>
              <hr class=\"my-4\">
              <div class=\"small text-black-50\">+1 (555) 902-8832</div>
            </div>
          </div>
        </div>
      </div>

      <div class=\"social d-flex justify-content-center\">
        <a href=\"#\" class=\"mx-2\">
          <i class=\"fab fa-twitter\"></i>
        </a>
        <a href=\"#\" class=\"mx-2\">
          <i class=\"fab fa-facebook-f\"></i>
        </a>
        <a href=\"#\" class=\"mx-2\">
          <i class=\"fab fa-github\"></i>
        </a>
      </div>

    </div>
  </section>", "C:\\xampp\\htdocs\\october_test/themes/grey/pages/home.htm", "");
    }
}
