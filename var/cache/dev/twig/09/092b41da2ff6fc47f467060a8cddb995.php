<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* seance/new.html.twig */
class __TwigTemplate_1abba5256dc5f000e0c3674f76e755a2 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base3.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seance/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seance/new.html.twig"));

        $this->parent = $this->loadTemplate("base3.html.twig", "seance/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 4
        yield "    <h2 class=\"text-white\">Créer une Séance pour \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 4, $this->source); })()), "titre", [], "any", false, false, false, 4), "html", null, true);
        yield "\"</h2>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "  <div class=\"form-container\">


    ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        yield "

        <div class=\"form-group\">
          ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "titre", [], "any", false, false, false, 14), 'label');
        yield "
          ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "titre", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
          <div class=\"error-message\">
              ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "titre", [], "any", false, false, false, 17), 'errors');
        yield "
           </div>
        </div>

        <div class=\"form-group\">
          ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "date", [], "any", false, false, false, 22), 'label');
        yield "
          ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "date", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
          <div class=\"error-message\">
             ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "date", [], "any", false, false, false, 25), 'errors');
        yield "
          </div>
        </div>

        <div class=\"form-group\">
          ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "temps", [], "any", false, false, false, 30), 'label');
        yield "
          ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "temps", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
          <div class=\"error-message\">
            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "temps", [], "any", false, false, false, 33), 'errors');
        yield "
          </div>
        </div>

        <div class=\"form-group\">
          ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "duree", [], "any", false, false, false, 38), 'label');
        yield "
          ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "duree", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
          <div class=\"error-message\">
            ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "duree", [], "any", false, false, false, 41), 'errors');
        yield "
          </div>
        </div>

        <button type=\"submit\" class=\"btn-success\">Créer</button>

        ";
        // line 47
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'form_end');
        yield "
    </div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('seance-form');

        form.addEventListener('submit', function (event) {
            let errors = [];

            // Sélection des champs par leur nom
            const titre = document.querySelector('#seance_titre');
            const date = document.querySelector('#seance_date').value;
            const temps = document.querySelector('#seance_temps').value;
            const duree = document.querySelector('#seance_duree').value;

            // Effacer les erreurs affichées
            const errorElements = document.querySelectorAll('.error-message');
            errorElements.forEach(function(element) {
                element.innerHTML = '';
            });

            // Vérifications
            if (titre.value.length < 5) {
                errors.push({ field: \"titre\", message: \"Le titre doit contenir au moins 3 caractères.\" });
            }

            if (!date) {
                errors.push({ field: \"date\", message: \"Veuillez sélectionner une date valide.\" });
            }

            if (!temps) {
                errors.push({ field: \"temps\", message: \"Veuillez sélectionner une heure valide.\" });
            }

            if ((duree <= 0)&& (duree >= 5)) {
                errors.push({ field: \"duree\", message: \"La durée doit être supérieure etre entre 1 rt 5.\" });
            }

            // Affichage des erreurs et empêchement de la soumission
            if (errors.length > 0) {
                event.preventDefault();

                errors.forEach(function(error) {
                    const errorContainer = document.querySelector(`#seance_\${error.field}`).parentNode.querySelector('.error-message');
                    if (errorContainer) {
                        errorContainer.innerHTML = error.message;
                    }
                });
            }
        });
    });
  </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "seance/new.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  184 => 47,  175 => 41,  170 => 39,  166 => 38,  158 => 33,  153 => 31,  149 => 30,  141 => 25,  136 => 23,  132 => 22,  124 => 17,  119 => 15,  115 => 14,  109 => 11,  104 => 8,  91 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base3.html.twig' %}

{% block header %}
    <h2 class=\"text-white\">Créer une Séance pour \"{{ workshop.titre }}\"</h2>
{% endblock %}

{% block body %}
  <div class=\"form-container\">


    {{ form_start(form, {'attr': {'enctype': 'multipart/form-data'}}) }}

        <div class=\"form-group\">
          {{ form_label(form.titre) }}
          {{ form_widget(form.titre, {'attr': {'class': 'form-control'}}) }}
          <div class=\"error-message\">
              {{ form_errors(form.titre) }}
           </div>
        </div>

        <div class=\"form-group\">
          {{ form_label(form.date) }}
          {{ form_widget(form.date, {'attr': {'class': 'form-control'}}) }}
          <div class=\"error-message\">
             {{ form_errors(form.date) }}
          </div>
        </div>

        <div class=\"form-group\">
          {{ form_label(form.temps) }}
          {{ form_widget(form.temps, {'attr': {'class': 'form-control'}}) }}
          <div class=\"error-message\">
            {{ form_errors(form.temps) }}
          </div>
        </div>

        <div class=\"form-group\">
          {{ form_label(form.duree) }}
          {{ form_widget(form.duree, {'attr': {'class': 'form-control'}}) }}
          <div class=\"error-message\">
            {{ form_errors(form.duree) }}
          </div>
        </div>

        <button type=\"submit\" class=\"btn-success\">Créer</button>

        {{ form_end(form) }}
    </div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('seance-form');

        form.addEventListener('submit', function (event) {
            let errors = [];

            // Sélection des champs par leur nom
            const titre = document.querySelector('#seance_titre');
            const date = document.querySelector('#seance_date').value;
            const temps = document.querySelector('#seance_temps').value;
            const duree = document.querySelector('#seance_duree').value;

            // Effacer les erreurs affichées
            const errorElements = document.querySelectorAll('.error-message');
            errorElements.forEach(function(element) {
                element.innerHTML = '';
            });

            // Vérifications
            if (titre.value.length < 5) {
                errors.push({ field: \"titre\", message: \"Le titre doit contenir au moins 3 caractères.\" });
            }

            if (!date) {
                errors.push({ field: \"date\", message: \"Veuillez sélectionner une date valide.\" });
            }

            if (!temps) {
                errors.push({ field: \"temps\", message: \"Veuillez sélectionner une heure valide.\" });
            }

            if ((duree <= 0)&& (duree >= 5)) {
                errors.push({ field: \"duree\", message: \"La durée doit être supérieure etre entre 1 rt 5.\" });
            }

            // Affichage des erreurs et empêchement de la soumission
            if (errors.length > 0) {
                event.preventDefault();

                errors.forEach(function(error) {
                    const errorContainer = document.querySelector(`#seance_\${error.field}`).parentNode.querySelector('.error-message');
                    if (errorContainer) {
                        errorContainer.innerHTML = error.message;
                    }
                });
            }
        });
    });
  </script>
{% endblock %}
", "seance/new.html.twig", "C:\\Users\\riadh.chawachi\\Desktop\\TuniVibe-abir\\templates\\seance\\new.html.twig");
    }
}
