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

/* hebergement/new.html.twig */
class __TwigTemplate_0a0216c1760e3ea8f5f6105804894831 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hebergement/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hebergement/new.html.twig"));

        $this->parent = $this->loadTemplate("base3.html.twig", "hebergement/new.html.twig", 1);
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
        yield "<div class=\"form-container\">
  <h1>Créer un nouvel Hébergement</h1>

  ";
        // line 7
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        yield "

  <div class=\"form-group\">
      ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "nom", [], "any", false, false, false, 10), 'label');
        yield "
      ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "nom", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "form-control", "id" => "hebergement_nom"]]);
        yield "
      <div class=\"error-message\">
          ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "nom", [], "any", false, false, false, 13), 'errors');
        yield "
      </div>
  </div>

  <div class=\"form-group\">
      ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "type", [], "any", false, false, false, 18), 'label');
        yield "
      ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "type", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control", "id" => "hebergement_type"]]);
        yield "
      <div class=\"error-message\">
          ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "type", [], "any", false, false, false, 21), 'errors');
        yield "
      </div>
  </div>

  <div class=\"form-group\">
      ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "adresse", [], "any", false, false, false, 26), 'label');
        yield "
      ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "adresse", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control", "id" => "hebergement_adresse"]]);
        yield "
      <div class=\"error-message\">
          ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "adresse", [], "any", false, false, false, 29), 'errors');
        yield "
      </div>
  </div>

  <div class=\"form-group\">
      ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "capacite", [], "any", false, false, false, 34), 'label');
        yield "
      ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "capacite", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control", "id" => "hebergement_capacite"]]);
        yield "
      <div class=\"error-message\">
          ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "capacite", [], "any", false, false, false, 37), 'errors');
        yield "
      </div>
  </div>

  <div class=\"form-group\">
      ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "description", [], "any", false, false, false, 42), 'label');
        yield "
      ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "description", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control", "id" => "hebergement_description"]]);
        yield "
      <div class=\"error-message\">
          ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "description", [], "any", false, false, false, 45), 'errors');
        yield "
      </div>
  </div>

  <div class=\"form-group\">
      ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "image", [], "any", false, false, false, 50), 'label');
        yield "
      ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "image", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control", "id" => "hebergement_image"]]);
        yield "
      <div class=\"error-message\">
          ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "image", [], "any", false, false, false, 53), 'errors');
        yield "
      </div>
  </div>

  <button type=\"submit\" class=\"btn btn-success\">Créer</button>

  ";
        // line 59
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), 'form_end');
        yield "
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
      const form = document.querySelector('form');
      form.addEventListener('submit', function(event) {
          let errors = [];

          const nom = document.querySelector('#hebergement_nom');
          const type = document.querySelector('#hebergement_type');
          const adresse = document.querySelector('#hebergement_adresse');
          const capacite = document.querySelector('#hebergement_capacite');
          const description = document.querySelector('#hebergement_description');
          const image = document.querySelector('#hebergement_image');

          // Effacer les erreurs affichées
          const errorElements = document.querySelectorAll('.error-message');
          errorElements.forEach(function(element) {
              element.innerHTML = '';
          });

          // Validation des champs
          if (nom.value.length < 5) {
              errors.push({ field: 'nom', message: \"Le nom doit contenir au moins 5 caractères.\" });
          }

          if (type.value === '') {
              errors.push({ field: 'type', message: \"Le type doit être sélectionné.\" });
          }

          if (adresse.value.length < 10) {
              errors.push({ field: 'adresse', message: \"L'adresse doit contenir au moins 10 caractères.\" });
          }

          if (capacite.value <= 0) {
              errors.push({ field: 'capacite', message: \"La capacité doit être supérieure à 0.\" });
          }

          if (description.value.length < 10) {
              errors.push({ field: 'description', message: \"La description doit contenir au moins 10 caractères.\" });
          }

          if (image.files.length === 0) {
              errors.push({ field: 'image', message: \"Veuillez télécharger une image.\" });
          }

          // Si des erreurs existent, les afficher devant les champs
          if (errors.length > 0) {
              event.preventDefault(); // Bloquer la soumission du formulaire

              errors.forEach(function(error) {
                  const errorContainer = document.querySelector(`#hebergement_\${error.field}`).parentNode.querySelector('.error-message');
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
        return "hebergement/new.html.twig";
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
        return array (  190 => 59,  181 => 53,  176 => 51,  172 => 50,  164 => 45,  159 => 43,  155 => 42,  147 => 37,  142 => 35,  138 => 34,  130 => 29,  125 => 27,  121 => 26,  113 => 21,  108 => 19,  104 => 18,  96 => 13,  91 => 11,  87 => 10,  81 => 7,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base3.html.twig' %}

{% block body %}
<div class=\"form-container\">
  <h1>Créer un nouvel Hébergement</h1>

  {{ form_start(form, {'attr': {'enctype': 'multipart/form-data'}}) }}

  <div class=\"form-group\">
      {{ form_label(form.nom) }}
      {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'id': 'hebergement_nom'}}) }}
      <div class=\"error-message\">
          {{ form_errors(form.nom) }}
      </div>
  </div>

  <div class=\"form-group\">
      {{ form_label(form.type) }}
      {{ form_widget(form.type, {'attr': {'class': 'form-control', 'id': 'hebergement_type'}}) }}
      <div class=\"error-message\">
          {{ form_errors(form.type) }}
      </div>
  </div>

  <div class=\"form-group\">
      {{ form_label(form.adresse) }}
      {{ form_widget(form.adresse, {'attr': {'class': 'form-control', 'id': 'hebergement_adresse'}}) }}
      <div class=\"error-message\">
          {{ form_errors(form.adresse) }}
      </div>
  </div>

  <div class=\"form-group\">
      {{ form_label(form.capacite) }}
      {{ form_widget(form.capacite, {'attr': {'class': 'form-control', 'id': 'hebergement_capacite'}}) }}
      <div class=\"error-message\">
          {{ form_errors(form.capacite) }}
      </div>
  </div>

  <div class=\"form-group\">
      {{ form_label(form.description) }}
      {{ form_widget(form.description, {'attr': {'class': 'form-control', 'id': 'hebergement_description'}}) }}
      <div class=\"error-message\">
          {{ form_errors(form.description) }}
      </div>
  </div>

  <div class=\"form-group\">
      {{ form_label(form.image) }}
      {{ form_widget(form.image, {'attr': {'class': 'form-control', 'id': 'hebergement_image'}}) }}
      <div class=\"error-message\">
          {{ form_errors(form.image) }}
      </div>
  </div>

  <button type=\"submit\" class=\"btn btn-success\">Créer</button>

  {{ form_end(form) }}
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
      const form = document.querySelector('form');
      form.addEventListener('submit', function(event) {
          let errors = [];

          const nom = document.querySelector('#hebergement_nom');
          const type = document.querySelector('#hebergement_type');
          const adresse = document.querySelector('#hebergement_adresse');
          const capacite = document.querySelector('#hebergement_capacite');
          const description = document.querySelector('#hebergement_description');
          const image = document.querySelector('#hebergement_image');

          // Effacer les erreurs affichées
          const errorElements = document.querySelectorAll('.error-message');
          errorElements.forEach(function(element) {
              element.innerHTML = '';
          });

          // Validation des champs
          if (nom.value.length < 5) {
              errors.push({ field: 'nom', message: \"Le nom doit contenir au moins 5 caractères.\" });
          }

          if (type.value === '') {
              errors.push({ field: 'type', message: \"Le type doit être sélectionné.\" });
          }

          if (adresse.value.length < 10) {
              errors.push({ field: 'adresse', message: \"L'adresse doit contenir au moins 10 caractères.\" });
          }

          if (capacite.value <= 0) {
              errors.push({ field: 'capacite', message: \"La capacité doit être supérieure à 0.\" });
          }

          if (description.value.length < 10) {
              errors.push({ field: 'description', message: \"La description doit contenir au moins 10 caractères.\" });
          }

          if (image.files.length === 0) {
              errors.push({ field: 'image', message: \"Veuillez télécharger une image.\" });
          }

          // Si des erreurs existent, les afficher devant les champs
          if (errors.length > 0) {
              event.preventDefault(); // Bloquer la soumission du formulaire

              errors.forEach(function(error) {
                  const errorContainer = document.querySelector(`#hebergement_\${error.field}`).parentNode.querySelector('.error-message');
                  if (errorContainer) {
                      errorContainer.innerHTML = error.message;
                  }
              });
          }
      });
  });
</script>

{% endblock %}
", "hebergement/new.html.twig", "C:\\Users\\riadh.chawachi\\Desktop\\TuniVibe-abir\\templates\\hebergement\\new.html.twig");
    }
}
