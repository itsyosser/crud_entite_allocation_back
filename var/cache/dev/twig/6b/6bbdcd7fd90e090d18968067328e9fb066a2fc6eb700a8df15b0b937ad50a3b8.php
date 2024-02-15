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

/* admin/index.html.twig */
class __TwigTemplate_a8af0e0f9768c0706e3a18ac980b2cfc421983bf8e11209634f5798e58262700 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Tables / Data ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        $this->displayBlock('sidebar', $context, $blocks);
        // line 244
        echo "

  <main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Data Tables</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
          <li class=\"breadcrumb-item\">Tables</li>
          <li class=\"breadcrumb-item active\">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class=\"section\">
      <div class=\"row\">
        <div class=\"col-lg-12\">

          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Datatables</h5>
              <p>Add lightweight datatables to your project with using the <a href=\"https://github.com/fiduswriter/Simple-DataTables\" target=\"_blank\">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>

              <!-- Table with stripped rows -->
              <table class=\"table datatable\">
                <thead>
                  <tr>
                    <th scope=\"col\">id</th>
                    <th scope=\"col\">Nom</th>
                    <th scope=\"col\">prix</th>
                    <th scope=\"col\">date</th>
                      <th scope=\"col\">quantity</th>
                      <th scope=\"col\">image</th>
                   
                    
                    <th scope=\"col\">edit</th>
                      <th scope=\"col\">delete</th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 285
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allocation"]) || array_key_exists("allocation", $context) ? $context["allocation"] : (function () { throw new RuntimeError('Variable "allocation" does not exist.', 285, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 286
            echo "                  <tr>
                    <td>";
            // line 287
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 287), "html", null, true);
            echo "</td>
                    <td>";
            // line 288
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "nom", [], "any", false, false, false, 288), "html", null, true);
            echo "</td>
                    <td>";
            // line 289
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "prix", [], "any", false, false, false, 289), "html", null, true);
            echo "</td>
                    <td>";
            // line 290
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "date", [], "any", false, false, false, 290), "Y-m-d"), "html", null, true);
            echo "</td>
                      <td>";
            // line 291
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "quantity", [], "any", false, false, false, 291), "html", null, true);
            echo "</td>
                      <td><img src=\"";
            // line 292
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "image", [], "any", false, false, false, 292), "html", null, true);
            echo "\" alt=\"Image\" style=\"max-width: 100px; max-height: 100px;\"></td>
          <td> <a class=\"btn btn-success\" href=\"";
            // line 293
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editallocation", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 293)]), "html", null, true);
            echo "\" >EDIT</a></td>
                    <td><a class=\"btn btn-danger\" href=\"";
            // line 294
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteallocation", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 294)]), "html", null, true);
            echo "\">DELETE</a></td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 297
        echo "                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 8
        echo "  <aside id=\"sidebar\" class=\"sidebar\">

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"index.html\">
          <i class=\"bi bi-grid\"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#components-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-menu-button-wide\"></i><span>Components</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"components-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li>
            <a href=\"components-alerts.html\">
              <i class=\"bi bi-circle\"></i><span>Alerts</span>
            </a>
          </li>
          <li>
            <a href=\"components-accordion.html\">
              <i class=\"bi bi-circle\"></i><span>Accordion</span>
            </a>
          </li>
          <li>
            <a href=\"components-badges.html\">
              <i class=\"bi bi-circle\"></i><span>Badges</span>
            </a>
          </li>
          <li>
            <a href=\"components-breadcrumbs.html\">
              <i class=\"bi bi-circle\"></i><span>Breadcrumbs</span>
            </a>
          </li>
          <li>
            <a href=\"components-buttons.html\">
              <i class=\"bi bi-circle\"></i><span>Buttons</span>
            </a>
          </li>
          <li>
            <a href=\"components-cards.html\">
              <i class=\"bi bi-circle\"></i><span>Cards</span>
            </a>
          </li>
          <li>
            <a href=\"components-carousel.html\">
              <i class=\"bi bi-circle\"></i><span>Carousel</span>
            </a>
          </li>
          <li>
            <a href=\"components-list-group.html\">
              <i class=\"bi bi-circle\"></i><span>List group</span>
            </a>
          </li>
          <li>
            <a href=\"components-modal.html\">
              <i class=\"bi bi-circle\"></i><span>Modal</span>
            </a>
          </li>
          <li>
            <a href=\"components-tabs.html\">
              <i class=\"bi bi-circle\"></i><span>Tabs</span>
            </a>
          </li>
          <li>
            <a href=\"components-pagination.html\">
              <i class=\"bi bi-circle\"></i><span>Pagination</span>
            </a>
          </li>
          <li>
            <a href=\"components-progress.html\">
              <i class=\"bi bi-circle\"></i><span>Progress</span>
            </a>
          </li>
          <li>
            <a href=\"components-spinners.html\">
              <i class=\"bi bi-circle\"></i><span>Spinners</span>
            </a>
          </li>
          <li>
            <a href=\"components-tooltips.html\">
              <i class=\"bi bi-circle\"></i><span>Tooltips</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-journal-text\"></i><span>Forms</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"forms-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li>
            <a href=\"forms-elements.html\">
              <i class=\"bi bi-circle\"></i><span>Form Elements</span>
            </a>
          </li>
          <li>
            <a href=\"forms-layouts.html\">
              <i class=\"bi bi-circle\"></i><span>Form Layouts</span>
            </a>
          </li>
          <li>
            <a href=\"forms-editors.html\">
              <i class=\"bi bi-circle\"></i><span>Form Editors</span>
            </a>
          </li>
          <li>
            <a href=\"forms-validation.html\">
              <i class=\"bi bi-circle\"></i><span>Form Validation</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link \" data-bs-target=\"#tables-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-layout-text-window-reverse\"></i><span>Tables</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"tables-nav\" class=\"nav-content collapse show\" data-bs-parent=\"#sidebar-nav\">
          <li>
            <a href=\"tables-general.html\">
              <i class=\"bi bi-circle\"></i><span>General Tables</span>
            </a>
          </li>
          <li>
            <a href=\"tables-data.html\" class=\"active\">
              <i class=\"bi bi-circle\"></i><span>Data Tables</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#charts-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-bar-chart\"></i><span>Charts</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"charts-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li>
            <a href=\"charts-chartjs.html\">
              <i class=\"bi bi-circle\"></i><span>Chart.js</span>
            </a>
          </li>
          <li>
            <a href=\"charts-apexcharts.html\">
              <i class=\"bi bi-circle\"></i><span>ApexCharts</span>
            </a>
          </li>
          <li>
            <a href=\"charts-echarts.html\">
              <i class=\"bi bi-circle\"></i><span>ECharts</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#icons-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-gem\"></i><span>Icons</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"icons-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li>
            <a href=\"icons-bootstrap.html\">
              <i class=\"bi bi-circle\"></i><span>Bootstrap Icons</span>
            </a>
          </li>
          <li>
            <a href=\"icons-remix.html\">
              <i class=\"bi bi-circle\"></i><span>Remix Icons</span>
            </a>
          </li>
          <li>
            <a href=\"icons-boxicons.html\">
              <i class=\"bi bi-circle\"></i><span>Boxicons</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class=\"nav-heading\">Pages</li>

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"users-profile.html\">
          <i class=\"bi bi-person\"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-faq.html\">
          <i class=\"bi bi-question-circle\"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-contact.html\">
          <i class=\"bi bi-envelope\"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-register.html\">
          <i class=\"bi bi-card-list\"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-login.html\">
          <i class=\"bi bi-box-arrow-in-right\"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-error-404.html\">
          <i class=\"bi bi-dash-circle\"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-blank.html\">
          <i class=\"bi bi-file-earmark\"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  213 => 8,  203 => 7,  181 => 297,  172 => 294,  168 => 293,  164 => 292,  160 => 291,  156 => 290,  152 => 289,  148 => 288,  144 => 287,  141 => 286,  137 => 285,  94 => 244,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block title %}Tables / Data {% endblock %}

{% block body %}

{% block sidebar %}
  <aside id=\"sidebar\" class=\"sidebar\">

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"index.html\">
          <i class=\"bi bi-grid\"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#components-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-menu-button-wide\"></i><span>Components</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"components-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li>
            <a href=\"components-alerts.html\">
              <i class=\"bi bi-circle\"></i><span>Alerts</span>
            </a>
          </li>
          <li>
            <a href=\"components-accordion.html\">
              <i class=\"bi bi-circle\"></i><span>Accordion</span>
            </a>
          </li>
          <li>
            <a href=\"components-badges.html\">
              <i class=\"bi bi-circle\"></i><span>Badges</span>
            </a>
          </li>
          <li>
            <a href=\"components-breadcrumbs.html\">
              <i class=\"bi bi-circle\"></i><span>Breadcrumbs</span>
            </a>
          </li>
          <li>
            <a href=\"components-buttons.html\">
              <i class=\"bi bi-circle\"></i><span>Buttons</span>
            </a>
          </li>
          <li>
            <a href=\"components-cards.html\">
              <i class=\"bi bi-circle\"></i><span>Cards</span>
            </a>
          </li>
          <li>
            <a href=\"components-carousel.html\">
              <i class=\"bi bi-circle\"></i><span>Carousel</span>
            </a>
          </li>
          <li>
            <a href=\"components-list-group.html\">
              <i class=\"bi bi-circle\"></i><span>List group</span>
            </a>
          </li>
          <li>
            <a href=\"components-modal.html\">
              <i class=\"bi bi-circle\"></i><span>Modal</span>
            </a>
          </li>
          <li>
            <a href=\"components-tabs.html\">
              <i class=\"bi bi-circle\"></i><span>Tabs</span>
            </a>
          </li>
          <li>
            <a href=\"components-pagination.html\">
              <i class=\"bi bi-circle\"></i><span>Pagination</span>
            </a>
          </li>
          <li>
            <a href=\"components-progress.html\">
              <i class=\"bi bi-circle\"></i><span>Progress</span>
            </a>
          </li>
          <li>
            <a href=\"components-spinners.html\">
              <i class=\"bi bi-circle\"></i><span>Spinners</span>
            </a>
          </li>
          <li>
            <a href=\"components-tooltips.html\">
              <i class=\"bi bi-circle\"></i><span>Tooltips</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-journal-text\"></i><span>Forms</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"forms-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li>
            <a href=\"forms-elements.html\">
              <i class=\"bi bi-circle\"></i><span>Form Elements</span>
            </a>
          </li>
          <li>
            <a href=\"forms-layouts.html\">
              <i class=\"bi bi-circle\"></i><span>Form Layouts</span>
            </a>
          </li>
          <li>
            <a href=\"forms-editors.html\">
              <i class=\"bi bi-circle\"></i><span>Form Editors</span>
            </a>
          </li>
          <li>
            <a href=\"forms-validation.html\">
              <i class=\"bi bi-circle\"></i><span>Form Validation</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link \" data-bs-target=\"#tables-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-layout-text-window-reverse\"></i><span>Tables</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"tables-nav\" class=\"nav-content collapse show\" data-bs-parent=\"#sidebar-nav\">
          <li>
            <a href=\"tables-general.html\">
              <i class=\"bi bi-circle\"></i><span>General Tables</span>
            </a>
          </li>
          <li>
            <a href=\"tables-data.html\" class=\"active\">
              <i class=\"bi bi-circle\"></i><span>Data Tables</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#charts-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-bar-chart\"></i><span>Charts</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"charts-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li>
            <a href=\"charts-chartjs.html\">
              <i class=\"bi bi-circle\"></i><span>Chart.js</span>
            </a>
          </li>
          <li>
            <a href=\"charts-apexcharts.html\">
              <i class=\"bi bi-circle\"></i><span>ApexCharts</span>
            </a>
          </li>
          <li>
            <a href=\"charts-echarts.html\">
              <i class=\"bi bi-circle\"></i><span>ECharts</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#icons-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-gem\"></i><span>Icons</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"icons-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li>
            <a href=\"icons-bootstrap.html\">
              <i class=\"bi bi-circle\"></i><span>Bootstrap Icons</span>
            </a>
          </li>
          <li>
            <a href=\"icons-remix.html\">
              <i class=\"bi bi-circle\"></i><span>Remix Icons</span>
            </a>
          </li>
          <li>
            <a href=\"icons-boxicons.html\">
              <i class=\"bi bi-circle\"></i><span>Boxicons</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class=\"nav-heading\">Pages</li>

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"users-profile.html\">
          <i class=\"bi bi-person\"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-faq.html\">
          <i class=\"bi bi-question-circle\"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-contact.html\">
          <i class=\"bi bi-envelope\"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-register.html\">
          <i class=\"bi bi-card-list\"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-login.html\">
          <i class=\"bi bi-box-arrow-in-right\"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-error-404.html\">
          <i class=\"bi bi-dash-circle\"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-blank.html\">
          <i class=\"bi bi-file-earmark\"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
{% endblock %}


  <main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Data Tables</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
          <li class=\"breadcrumb-item\">Tables</li>
          <li class=\"breadcrumb-item active\">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class=\"section\">
      <div class=\"row\">
        <div class=\"col-lg-12\">

          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Datatables</h5>
              <p>Add lightweight datatables to your project with using the <a href=\"https://github.com/fiduswriter/Simple-DataTables\" target=\"_blank\">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>

              <!-- Table with stripped rows -->
              <table class=\"table datatable\">
                <thead>
                  <tr>
                    <th scope=\"col\">id</th>
                    <th scope=\"col\">Nom</th>
                    <th scope=\"col\">prix</th>
                    <th scope=\"col\">date</th>
                      <th scope=\"col\">quantity</th>
                      <th scope=\"col\">image</th>
                   
                    
                    <th scope=\"col\">edit</th>
                      <th scope=\"col\">delete</th>
                  </tr>
                </thead>
                <tbody>
                  {%for a in allocation %}
                  <tr>
                    <td>{{a.id}}</td>
                    <td>{{a.nom}}</td>
                    <td>{{a.prix}}</td>
                    <td>{{a.date|date('Y-m-d')}}</td>
                      <td>{{a.quantity}}</td>
                      <td><img src=\"{{ a.image }}\" alt=\"Image\" style=\"max-width: 100px; max-height: 100px;\"></td>
          <td> <a class=\"btn btn-success\" href=\"{{path('editallocation',{'id':a.id})}}\" >EDIT</a></td>
                    <td><a class=\"btn btn-danger\" href=\"{{path('deleteallocation',{'id':a.id})}}\">DELETE</a></td>
                  </tr>
                  {% endfor %}
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
{% endblock %}", "admin/index.html.twig", "C:\\Users\\Yosser\\Eventeasy\\templates\\admin\\index.html.twig");
    }
}
