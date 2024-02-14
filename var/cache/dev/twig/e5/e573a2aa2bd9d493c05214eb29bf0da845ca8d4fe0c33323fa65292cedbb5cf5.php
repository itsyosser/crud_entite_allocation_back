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

/* admin/editallocation.html.twig */
class __TwigTemplate_43417b4f29900884407d25073ca0ca68000c6c409c086fbbaba61a329bba9613 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/editallocation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/editallocation.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "admin/editallocation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Form Places</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
          <li class=\"breadcrumb-item\">Forms</li>
          <li class=\"breadcrumb-item active\">Places</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class=\"section\">
      <div class=\"row\">
        

          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Add Places</h5>

              <!-- General Form Elements -->
              ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_start');
        echo "
             
                
                <div class=\"row mb-3\">
                  <label for=\"inputNumber\" class=\"col-sm-2 col-form-label\">nom</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "nom", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                  </div>
                </div>
               
                <div class=\"row mb-3\">
                  <label for=\"inputText\" class=\"col-sm-2 col-form-label\">quantity</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "prix", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                  </div>
                </div>

                <div class=\"row mb-3\">
                  <label for=\"inputDate\" class=\"col-sm-2 col-form-label\">Date</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "date", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                  </div>

                <div class=\"row mb-3\">
                  <label for=\"inputText\" class=\"col-sm-2 col-form-label\">quantity</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "quantity", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                  </div>
                </div>
                
                

                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\"></label>
                  <div class=\"col-sm-10\">
                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "save", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
                  </div>
                </div>

                ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_end');
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
        return "admin/editallocation.html.twig";
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
        return array (  150 => 65,  143 => 61,  131 => 52,  122 => 46,  112 => 39,  102 => 32,  93 => 26,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}
{% block body %}

<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Form Places</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
          <li class=\"breadcrumb-item\">Forms</li>
          <li class=\"breadcrumb-item active\">Places</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class=\"section\">
      <div class=\"row\">
        

          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Add Places</h5>

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
", "admin/editallocation.html.twig", "C:\\Users\\Yosser\\Eventeasy\\templates\\admin\\editallocation.html.twig");
    }
}
