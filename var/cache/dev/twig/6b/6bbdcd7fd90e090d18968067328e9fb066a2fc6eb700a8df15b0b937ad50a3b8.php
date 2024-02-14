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
            'body' => [$this, 'block_body'],
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
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <main id=\"main\" class=\"main\">

        <div class=\"pagetitle\">
            <h1>Dashboard</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                    <li class=\"breadcrumb-item active\">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class=\"section dashboard\">
            <div class=\"row\">

                <!-- Left side columns -->
                <div class=\"col-lg-8\">
                    <div class=\"row\">

                        <!-- Sales Card -->
                        <div class=\"col-xxl-4 col-md-6\">
                            <div class=\"card info-card sales-card\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Sales <span>| Today</span></h5>

                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                            <i class=\"bi bi-cart\"></i>
                                        </div>
                                        <div class=\"ps-3\">
                                            <h6>145</h6>
                                            <span class=\"text-success small pt-1 fw-bold\">12%</span> <span class=\"text-muted small pt-2 ps-1\">increase</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class=\"col-xxl-4 col-md-6\">
                            <div class=\"card info-card revenue-card\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Revenue <span>| This Month</span></h5>

                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                            <i class=\"bi bi-currency-dollar\"></i>
                                        </div>
                                        <div class=\"ps-3\">
                                            <h6>\$3,264</h6>
                                            <span class=\"text-success small pt-1 fw-bold\">8%</span> <span class=\"text-muted small pt-2 ps-1\">increase</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class=\"col-xxl-4 col-xl-12\">

                            <div class=\"card info-card customers-card\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Customers <span>| This Year</span></h5>

                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                            <i class=\"bi bi-people\"></i>
                                        </div>
                                        <div class=\"ps-3\">
                                            <h6>1244</h6>
                                            <span class=\"text-danger small pt-1 fw-bold\">12%</span> <span class=\"text-muted small pt-2 ps-1\">decrease</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->

                     

                        <!-- Recent Sales -->
                        <div class=\"col-12\">
                            <div class=\"card recent-sales overflow-auto\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Recent Sales <span>| Today</span></h5>

                                    <table class=\"table table-borderless datatable\">
                                        <thead>
                                            <table border=\"3\">

                                                <tr>
                                                    <th scope=\"col\">id</th>
                                                    <th scope=\"col\">nom</th>
                                                    <th scope=\"col\">Prix</th>
                                                    <th scope=\"col\">date</th>
                                                    <th scope=\"col\">quantity</th>
                                                </tr>
                                                ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allocation"]) || array_key_exists("allocation", $context) ? $context["allocation"] : (function () { throw new RuntimeError('Variable "allocation" does not exist.', 164, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 165
            echo "                                                <tr >
                                                    <td>";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 166), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "nom", [], "any", false, false, false, 167), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "prix", [], "any", false, false, false, 168), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 169
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "date", [], "any", false, false, false, 169), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 170
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "quantity", [], "any", false, false, false, 170), "html", null, true);
            echo "</td>
                                                    <td><a href=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editallocation", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 171)]), "html", null, true);
            echo "\">edit</a></td>
                                                    <td><a href=\"";
            // line 172
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteallocation", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 172)]), "html", null, true);
            echo "\">delete</a></td>
                                                </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "                                            </table>
                                            </thead>
                                        <tbody>
                                                                                
                                        
                                        
                                        </tbody>
                                    </table>

                                </div>

                          


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
        return array (  270 => 175,  261 => 172,  257 => 171,  253 => 170,  249 => 169,  245 => 168,  241 => 167,  237 => 166,  234 => 165,  230 => 164,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block body %}

    <main id=\"main\" class=\"main\">

        <div class=\"pagetitle\">
            <h1>Dashboard</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                    <li class=\"breadcrumb-item active\">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class=\"section dashboard\">
            <div class=\"row\">

                <!-- Left side columns -->
                <div class=\"col-lg-8\">
                    <div class=\"row\">

                        <!-- Sales Card -->
                        <div class=\"col-xxl-4 col-md-6\">
                            <div class=\"card info-card sales-card\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Sales <span>| Today</span></h5>

                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                            <i class=\"bi bi-cart\"></i>
                                        </div>
                                        <div class=\"ps-3\">
                                            <h6>145</h6>
                                            <span class=\"text-success small pt-1 fw-bold\">12%</span> <span class=\"text-muted small pt-2 ps-1\">increase</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class=\"col-xxl-4 col-md-6\">
                            <div class=\"card info-card revenue-card\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Revenue <span>| This Month</span></h5>

                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                            <i class=\"bi bi-currency-dollar\"></i>
                                        </div>
                                        <div class=\"ps-3\">
                                            <h6>\$3,264</h6>
                                            <span class=\"text-success small pt-1 fw-bold\">8%</span> <span class=\"text-muted small pt-2 ps-1\">increase</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class=\"col-xxl-4 col-xl-12\">

                            <div class=\"card info-card customers-card\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Customers <span>| This Year</span></h5>

                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                                            <i class=\"bi bi-people\"></i>
                                        </div>
                                        <div class=\"ps-3\">
                                            <h6>1244</h6>
                                            <span class=\"text-danger small pt-1 fw-bold\">12%</span> <span class=\"text-muted small pt-2 ps-1\">decrease</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->

                     

                        <!-- Recent Sales -->
                        <div class=\"col-12\">
                            <div class=\"card recent-sales overflow-auto\">

                                <div class=\"filter\">
                                    <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                                    <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                                        <li class=\"dropdown-header text-start\">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                                        <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                                    </ul>
                                </div>

                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Recent Sales <span>| Today</span></h5>

                                    <table class=\"table table-borderless datatable\">
                                        <thead>
                                            <table border=\"3\">

                                                <tr>
                                                    <th scope=\"col\">id</th>
                                                    <th scope=\"col\">nom</th>
                                                    <th scope=\"col\">Prix</th>
                                                    <th scope=\"col\">date</th>
                                                    <th scope=\"col\">quantity</th>
                                                </tr>
                                                {% for i in allocation%}
                                                <tr >
                                                    <td>{{ i.id }}</td>
                                                    <td>{{ i.nom }}</td>
                                                    <td>{{ i.prix }}</td>
                                                    <td>{{ i.date |date('Y-m-d H:i:s') }}</td>
                                                    <td>{{ i.quantity }}</td>
                                                    <td><a href=\"{{path('editallocation',{'id':i.id})}}\">edit</a></td>
                                                    <td><a href=\"{{path('deleteallocation',{'id':i.id})}}\">delete</a></td>
                                                </tr>
                                                {% endfor%}
                                            </table>
                                            </thead>
                                        <tbody>
                                                                                
                                        
                                        
                                        </tbody>
                                    </table>

                                </div>

                          


{% endblock %}", "admin/index.html.twig", "C:\\Users\\Yosser\\Eventeasy\\templates\\admin\\index.html.twig");
    }
}
