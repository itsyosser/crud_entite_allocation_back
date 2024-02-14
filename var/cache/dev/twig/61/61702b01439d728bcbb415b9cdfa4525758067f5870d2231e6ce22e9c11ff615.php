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

/* admin/addformallocation.html.twig */
class __TwigTemplate_c8b92b6de6e6fb1f3662172dffc17800bb40312193fc896c777a023cb4384003 extends Template
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
        // line 4
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/addformallocation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/addformallocation.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "admin/addformallocation.html.twig", 4);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>FORM ALLOCATION</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
          <li class=\"breadcrumb-item\">Forms</li>
          <li class=\"breadcrumb-item active\">allocation</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class=\"section\">
      <div class=\"row\">
        

          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">AJOUTER ALLOCATION</h5>

              <!-- General Form Elements -->
              ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_start');
        echo "
             
                
                <div class=\"row mb-3\">
                  <label for=\"inputNumber\" class=\"col-sm-2 col-form-label\">nom</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "nom", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                  </div>
                </div>
               
                <div class=\"row mb-3\">
                  <label for=\"inputText\" class=\"col-sm-2 col-form-label\">quantity</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "prix", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                  </div>
                </div>

                <div class=\"row mb-3\">
                  <label for=\"inputDate\" class=\"col-sm-2 col-form-label\">Date</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "date", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                  </div>

                <div class=\"row mb-3\">
                  <label for=\"inputText\" class=\"col-sm-2 col-form-label\">quantity</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "quantity", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                  </div>
                </div>
                
                

                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\"></label>
                  <div class=\"col-sm-10\">
                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "save", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
                  </div>
                </div>

                ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'form_end');
        echo "<!-- End General Form Elements -->

            </div>
          </div>

        

        
      </div>
    </section>

  </main><!-- End #main -->     
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/addformallocation.html.twig";
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
        return array (  150 => 68,  143 => 64,  131 => 55,  122 => 49,  112 => 42,  102 => 35,  93 => 29,  68 => 6,  58 => 5,  35 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("


{% extends 'base1.html.twig' %}
{% block body %}

<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>FORM ALLOCATION</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
          <li class=\"breadcrumb-item\">Forms</li>
          <li class=\"breadcrumb-item active\">allocation</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class=\"section\">
      <div class=\"row\">
        

          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">AJOUTER ALLOCATION</h5>

              <!-- General Form Elements -->
              {{ form_start(form) }}
             
                
                <div class=\"row mb-3\">
                  <label for=\"inputNumber\" class=\"col-sm-2 col-form-label\">nom</label>
                  <div class=\"col-sm-10\">
                    {{ form_widget(form.nom,{'attr':{'class':'form-control'}}) }}
                  </div>
                </div>
               
                <div class=\"row mb-3\">
                  <label for=\"inputText\" class=\"col-sm-2 col-form-label\">quantity</label>
                  <div class=\"col-sm-10\">
                    {{ form_widget(form.prix,{'attr':{'class':'form-control'}}) }}
                  </div>
                </div>

                <div class=\"row mb-3\">
                  <label for=\"inputDate\" class=\"col-sm-2 col-form-label\">Date</label>
                  <div class=\"col-sm-10\">
                    {{ form_widget(form.date,{'attr':{'class':'form-control'}}) }}
                  </div>

                <div class=\"row mb-3\">
                  <label for=\"inputText\" class=\"col-sm-2 col-form-label\">quantity</label>
                  <div class=\"col-sm-10\">
                    {{ form_widget(form.quantity,{'attr':{'class':'form-control'}}) }}
                  </div>
                </div>
                
                

                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\"></label>
                  <div class=\"col-sm-10\">
                    {{ form_widget(form.save,{'attr':{'class':'btn btn-primary'}}) }}
                  </div>
                </div>

                {{form_end(form)}}<!-- End General Form Elements -->

            </div>
          </div>

        

        
      </div>
    </section>

  </main><!-- End #main -->     
{% endblock %}
", "admin/addformallocation.html.twig", "C:\\Users\\Yosser\\Eventeasy\\templates\\admin\\addformallocation.html.twig");
    }
}
