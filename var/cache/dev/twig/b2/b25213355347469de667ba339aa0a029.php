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

/* programme/new.html.twig */
class __TwigTemplate_c893d8d72ac2e63b769f29148e9f122d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "programme/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "programme/new.html.twig"));

        $this->parent = $this->loadTemplate("base3.html.twig", "programme/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "
<div class=\"form-container\">

  <h1>Ajouter un Programme pour l'hébergement : ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>

  ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

  <div class=\"form-group\">
      ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), 'label');
        yield "
      ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "nom", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control", "id" => "programme_nom"]]);
        yield "
      <div class=\"error-message\">
          ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), 'errors');
        yield "
      </div>
  </div>

  <div class=\"form-group\">
      ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "lieu", [], "any", false, false, false, 20), 'label');
        yield "
      ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "lieu", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control", "id" => "programme_lieu"]]);
        yield "
      <div class=\"error-message\">
          ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "lieu", [], "any", false, false, false, 23), 'errors');
        yield "
      </div>
  </div>

  <div class=\"form-group\">
      ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "dateDebut", [], "any", false, false, false, 28), 'label');
        yield "
      ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "dateDebut", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control", "id" => "programme_dateDebut"]]);
        yield "
      <div class=\"error-message\">
          ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "dateDebut", [], "any", false, false, false, 31), 'errors');
        yield "
      </div>
  </div>

  <div class=\"form-group\">
      ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "dateFin", [], "any", false, false, false, 36), 'label');
        yield "
      ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "dateFin", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control", "id" => "programme_dateFin"]]);
        yield "
      <div class=\"error-message\">
          ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "dateFin", [], "any", false, false, false, 39), 'errors');
        yield "
      </div>
  </div>

  <div class=\"form-group\">
      ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "description", [], "any", false, false, false, 44), 'label');
        yield "
      ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "description", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control", "id" => "programme_description"]]);
        yield "
      <div class=\"error-message\">
          ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "description", [], "any", false, false, false, 47), 'errors');
        yield "
      </div>
  </div>

  <button type=\"submit\" class=\"btn btn-success\">Ajouter</button>

  ";
        // line 53
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'form_end');
        yield "
</div>


<script>
  document.addEventListener('DOMContentLoaded', function() {
      const form = document.querySelector('form');
      form.addEventListener('submit', function(event) {
          let errors = [];

          const nom = document.querySelector('#programme_nom');
          const lieu = document.querySelector('#programme_lieu');
          const dateDebut = document.querySelector('#programme_dateDebut');
          const dateFin = document.querySelector('#programme_dateFin');
          const description = document.querySelector('#programme_description');

          const errorElements = document.querySelectorAll('.error-message');
          errorElements.forEach(function(element) {
              element.innerHTML = '';
          });

          if (nom.value.length < 5) {
              errors.push({ field: 'nom', message: \"Le nom doit contenir au moins 5 caractères.\" });
          }

          if (lieu.value === '') {
              errors.push({ field: 'lieu', message: \"Le lieu doit être rempli.\" });
          }

          if (!dateDebut.value) {
              errors.push({ field: 'dateDebut', message: \"La date de début est requise.\" });
          }

          if (!dateFin.value) {
              errors.push({ field: 'dateFin', message: \"La date de fin est requise.\" });
          }

          if (description.value.length < 10) {
              errors.push({ field: 'description', message: \"La description doit contenir au moins 10 caractères.\" });
          }

          if (errors.length > 0) {
              event.preventDefault();
              errors.forEach(function(error) {
                  const errorContainer = document.querySelector(`#programme_\${error.field}`).parentNode.querySelector('.error-message');
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
        return "programme/new.html.twig";
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
        return array (  178 => 53,  169 => 47,  164 => 45,  160 => 44,  152 => 39,  147 => 37,  143 => 36,  135 => 31,  130 => 29,  126 => 28,  118 => 23,  113 => 21,  109 => 20,  101 => 15,  96 => 13,  92 => 12,  86 => 9,  81 => 7,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base3.html.twig' %}

{% block body %}

<div class=\"form-container\">

  <h1>Ajouter un Programme pour l'hébergement : {{ hebergement.nom }}</h1>

  {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

  <div class=\"form-group\">
      {{ form_label(form.nom) }}
      {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'id': 'programme_nom'}}) }}
      <div class=\"error-message\">
          {{ form_errors(form.nom) }}
      </div>
  </div>

  <div class=\"form-group\">
      {{ form_label(form.lieu) }}
      {{ form_widget(form.lieu, {'attr': {'class': 'form-control', 'id': 'programme_lieu'}}) }}
      <div class=\"error-message\">
          {{ form_errors(form.lieu) }}
      </div>
  </div>

  <div class=\"form-group\">
      {{ form_label(form.dateDebut) }}
      {{ form_widget(form.dateDebut, {'attr': {'class': 'form-control', 'id': 'programme_dateDebut'}}) }}
      <div class=\"error-message\">
          {{ form_errors(form.dateDebut) }}
      </div>
  </div>

  <div class=\"form-group\">
      {{ form_label(form.dateFin) }}
      {{ form_widget(form.dateFin, {'attr': {'class': 'form-control', 'id': 'programme_dateFin'}}) }}
      <div class=\"error-message\">
          {{ form_errors(form.dateFin) }}
      </div>
  </div>

  <div class=\"form-group\">
      {{ form_label(form.description) }}
      {{ form_widget(form.description, {'attr': {'class': 'form-control', 'id': 'programme_description'}}) }}
      <div class=\"error-message\">
          {{ form_errors(form.description) }}
      </div>
  </div>

  <button type=\"submit\" class=\"btn btn-success\">Ajouter</button>

  {{ form_end(form) }}
</div>


<script>
  document.addEventListener('DOMContentLoaded', function() {
      const form = document.querySelector('form');
      form.addEventListener('submit', function(event) {
          let errors = [];

          const nom = document.querySelector('#programme_nom');
          const lieu = document.querySelector('#programme_lieu');
          const dateDebut = document.querySelector('#programme_dateDebut');
          const dateFin = document.querySelector('#programme_dateFin');
          const description = document.querySelector('#programme_description');

          const errorElements = document.querySelectorAll('.error-message');
          errorElements.forEach(function(element) {
              element.innerHTML = '';
          });

          if (nom.value.length < 5) {
              errors.push({ field: 'nom', message: \"Le nom doit contenir au moins 5 caractères.\" });
          }

          if (lieu.value === '') {
              errors.push({ field: 'lieu', message: \"Le lieu doit être rempli.\" });
          }

          if (!dateDebut.value) {
              errors.push({ field: 'dateDebut', message: \"La date de début est requise.\" });
          }

          if (!dateFin.value) {
              errors.push({ field: 'dateFin', message: \"La date de fin est requise.\" });
          }

          if (description.value.length < 10) {
              errors.push({ field: 'description', message: \"La description doit contenir au moins 10 caractères.\" });
          }

          if (errors.length > 0) {
              event.preventDefault();
              errors.forEach(function(error) {
                  const errorContainer = document.querySelector(`#programme_\${error.field}`).parentNode.querySelector('.error-message');
                  if (errorContainer) {
                      errorContainer.innerHTML = error.message;
                  }
              });
          }
      });
  });
</script>

{% endblock %}
", "programme/new.html.twig", "C:\\Users\\riadh.chawachi\\Desktop\\TuniVibe-abir\\templates\\programme\\new.html.twig");
    }
}
