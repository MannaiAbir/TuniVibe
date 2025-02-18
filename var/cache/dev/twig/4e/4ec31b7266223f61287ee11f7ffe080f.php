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

/* workshop/new.html.twig */
class __TwigTemplate_f945c3c722a693f0e5dbf483d8c7c30f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "workshop/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "workshop/new.html.twig"));

        $this->parent = $this->loadTemplate("base3.html.twig", "workshop/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        // line 6
        yield "        <h2 class=\"text-white\">Créer un nouveau Workshop</h2>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "  <div class=\"form-container\">


    ";
        // line 12
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        yield "

    <div class=\"form-group\">
        ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "titre", [], "any", false, false, false, 15), 'label');
        yield "
        ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "titre", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        <!-- Affichage des erreurs juste devant le champ -->
        <div class=\"error-message\">
            ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "titre", [], "any", false, false, false, 19), 'errors');
        yield "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24), 'label');
        yield "
        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        <!-- Affichage des erreurs juste devant le champ -->
        <div class=\"error-message\">
            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28), 'errors');
        yield "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "dateDebut", [], "any", false, false, false, 33), 'label');
        yield "
        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "dateDebut", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        <!-- Affichage des erreurs juste devant le champ -->
        <div class=\"error-message\">
            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "dateDebut", [], "any", false, false, false, 37), 'errors');
        yield "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "dateFin", [], "any", false, false, false, 42), 'label');
        yield "
        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "dateFin", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        <!-- Affichage des erreurs juste devant le champ -->
        <div class=\"error-message\">
            ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "dateFin", [], "any", false, false, false, 46), 'errors');
        yield "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "categorie", [], "any", false, false, false, 51), 'label');
        yield "
        ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "categorie", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        <!-- Affichage des erreurs juste devant le champ -->
        <div class=\"error-message\">
            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "categorie", [], "any", false, false, false, 55), 'errors');
        yield "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "image", [], "any", false, false, false, 60), 'label');
        yield "
        ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "image", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        <!-- Affichage des erreurs juste devant le champ -->
        <div class=\"error-message\">
            ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "image", [], "any", false, false, false, 64), 'errors');
        yield "
        </div>
    </div>

    <button type=\"submit\" class=\"btn btn-success\">Créer</button>

    ";
        // line 70
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), 'form_end');
        yield "
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');
        form.addEventListener('submit', function(event) {
            let errors = [];

            const titre = document.querySelector('#workshop_titre');
            const description = document.querySelector('#workshop_description');
            const dateDebut = new Date(document.querySelector('#workshop_dateDebut').value);
            const dateFin = new Date(document.querySelector('#workshop_dateFin').value);

            // Effacer les erreurs affichées
            const errorElements = document.querySelectorAll('.error-message');
            errorElements.forEach(function(element) {
                element.innerHTML = '';
            });

            // Validation des champs
            if (titre.value.length < 5) {
                errors.push({ field: 'titre', message: \"Le titre doit contenir au moins 5 caractères.\" });
            }

            if (description.value.length < 10) {
                errors.push({ field: 'description', message: \"La description doit contenir au moins 10 caractères.\" });
            }

            if (dateFin <= dateDebut) {
                errors.push({ field: 'dateFin', message: \"La date de fin doit être postérieure à la date de début.\" });
            }

            // Si des erreurs existent, les afficher devant les champs
            if (errors.length > 0) {
                event.preventDefault(); // Bloquer la soumission du formulaire

                errors.forEach(function(error) {
                    const errorContainer = document.querySelector(`#workshop_\${error.field}`).parentNode.querySelector('.error-message');
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
        return "workshop/new.html.twig";
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
        return array (  222 => 70,  213 => 64,  207 => 61,  203 => 60,  195 => 55,  189 => 52,  185 => 51,  177 => 46,  171 => 43,  167 => 42,  159 => 37,  153 => 34,  149 => 33,  141 => 28,  135 => 25,  131 => 24,  123 => 19,  117 => 16,  113 => 15,  107 => 12,  102 => 9,  89 => 8,  77 => 6,  64 => 5,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base3.html.twig' %}



    {% block header %}
        <h2 class=\"text-white\">Créer un nouveau Workshop</h2>
    {% endblock %}
  {% block body %}
  <div class=\"form-container\">


    {{ form_start(form, {'attr': {'enctype': 'multipart/form-data'}}) }}

    <div class=\"form-group\">
        {{ form_label(form.titre) }}
        {{ form_widget(form.titre, {'attr': {'class': 'form-control'}}) }}
        <!-- Affichage des erreurs juste devant le champ -->
        <div class=\"error-message\">
            {{ form_errors(form.titre) }}
        </div>
    </div>

    <div class=\"form-group\">
        {{ form_label(form.description) }}
        {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}
        <!-- Affichage des erreurs juste devant le champ -->
        <div class=\"error-message\">
            {{ form_errors(form.description) }}
        </div>
    </div>

    <div class=\"form-group\">
        {{ form_label(form.dateDebut) }}
        {{ form_widget(form.dateDebut, {'attr': {'class': 'form-control'}}) }}
        <!-- Affichage des erreurs juste devant le champ -->
        <div class=\"error-message\">
            {{ form_errors(form.dateDebut) }}
        </div>
    </div>

    <div class=\"form-group\">
        {{ form_label(form.dateFin) }}
        {{ form_widget(form.dateFin, {'attr': {'class': 'form-control'}}) }}
        <!-- Affichage des erreurs juste devant le champ -->
        <div class=\"error-message\">
            {{ form_errors(form.dateFin) }}
        </div>
    </div>

    <div class=\"form-group\">
        {{ form_label(form.categorie) }}
        {{ form_widget(form.categorie, {'attr': {'class': 'form-control'}}) }}
        <!-- Affichage des erreurs juste devant le champ -->
        <div class=\"error-message\">
            {{ form_errors(form.categorie) }}
        </div>
    </div>

    <div class=\"form-group\">
        {{ form_label(form.image) }}
        {{ form_widget(form.image, {'attr': {'class': 'form-control'}}) }}
        <!-- Affichage des erreurs juste devant le champ -->
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

            const titre = document.querySelector('#workshop_titre');
            const description = document.querySelector('#workshop_description');
            const dateDebut = new Date(document.querySelector('#workshop_dateDebut').value);
            const dateFin = new Date(document.querySelector('#workshop_dateFin').value);

            // Effacer les erreurs affichées
            const errorElements = document.querySelectorAll('.error-message');
            errorElements.forEach(function(element) {
                element.innerHTML = '';
            });

            // Validation des champs
            if (titre.value.length < 5) {
                errors.push({ field: 'titre', message: \"Le titre doit contenir au moins 5 caractères.\" });
            }

            if (description.value.length < 10) {
                errors.push({ field: 'description', message: \"La description doit contenir au moins 10 caractères.\" });
            }

            if (dateFin <= dateDebut) {
                errors.push({ field: 'dateFin', message: \"La date de fin doit être postérieure à la date de début.\" });
            }

            // Si des erreurs existent, les afficher devant les champs
            if (errors.length > 0) {
                event.preventDefault(); // Bloquer la soumission du formulaire

                errors.forEach(function(error) {
                    const errorContainer = document.querySelector(`#workshop_\${error.field}`).parentNode.querySelector('.error-message');
                    if (errorContainer) {
                        errorContainer.innerHTML = error.message;
                    }
                });
            }
        });
    });
  </script>

  {% endblock %}
  ", "workshop/new.html.twig", "C:\\project\\symfony\\PROJETPI\\TuniVibe\\templates\\workshop\\new.html.twig");
    }
}
