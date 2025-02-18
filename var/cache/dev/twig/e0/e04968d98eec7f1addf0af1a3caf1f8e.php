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
class __TwigTemplate_f54c6ae15d6a546bbcbe88911e3b79dd extends Template
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

    // line 10
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

        // line 11
        yield "  <div class=\"form-container\">


    ";
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        yield "

    <div class=\"form-group\">
        ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "titre", [], "any", false, false, false, 17), 'label');
        yield "
        ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "titre", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        <!-- Affichage des erreurs juste devant le champ -->
        <div class=\"error-message\">
            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "titre", [], "any", false, false, false, 21), 'errors');
        yield "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "description", [], "any", false, false, false, 26), 'label');
        yield "
        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        <!-- Affichage des erreurs juste devant le champ -->
        <div class=\"error-message\">
            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), 'errors');
        yield "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "dateDebut", [], "any", false, false, false, 35), 'label');
        yield "
        ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "dateDebut", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        <!-- Affichage des erreurs juste devant le champ -->
        <div class=\"error-message\">
            ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "dateDebut", [], "any", false, false, false, 39), 'errors');
        yield "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "dateFin", [], "any", false, false, false, 44), 'label');
        yield "
        ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "dateFin", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        <!-- Affichage des erreurs juste devant le champ -->
        <div class=\"error-message\">
            ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "dateFin", [], "any", false, false, false, 48), 'errors');
        yield "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "categorie", [], "any", false, false, false, 53), 'label');
        yield "
        ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "categorie", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        <!-- Affichage des erreurs juste devant le champ -->
        <div class=\"error-message\">
            ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "categorie", [], "any", false, false, false, 57), 'errors');
        yield "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "image", [], "any", false, false, false, 62), 'label');
        yield "
        ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "image", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        <!-- Affichage des erreurs juste devant le champ -->
        <div class=\"error-message\">
            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "image", [], "any", false, false, false, 66), 'errors');
        yield "
        </div>
    </div>

    <button type=\"submit\" class=\"btn btn-success\">Créer</button>

    ";
        // line 72
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'form_end');
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
        return array (  222 => 72,  213 => 66,  207 => 63,  203 => 62,  195 => 57,  189 => 54,  185 => 53,  177 => 48,  171 => 45,  167 => 44,  159 => 39,  153 => 36,  149 => 35,  141 => 30,  135 => 27,  131 => 26,  123 => 21,  117 => 18,  113 => 17,  107 => 14,  102 => 11,  89 => 10,  77 => 6,  64 => 5,  41 => 1,);
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
  ", "workshop/new.html.twig", "C:\\Users\\riadh.chawachi\\Desktop\\TuniVibe-abir\\templates\\workshop\\new.html.twig");
    }
}
