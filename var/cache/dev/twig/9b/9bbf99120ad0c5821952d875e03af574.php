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

/* registration/register.html.twig */
class __TwigTemplate_3524e6644025ce487037d4d1bca48b1d extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "registration/register.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Inscription";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <h1 class=\"text-center\">Inscription</h1>

                ";
        // line 12
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", ["error"], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            yield "                    <div class=\"alert alert-danger\">
                        ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", ["success"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            yield "                <div class=\"alert alert-success\">
                    ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                 </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "
                ";
        // line 24
        yield "                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 24, $this->source); })()), 'errors');
        yield "

                ";
        // line 27
        yield "                ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), 'form_start', ["attr" => ["class" => "mt-4"]]);
        yield "

                    ";
        // line 30
        yield "                    <div class=\"mb-3\">
                        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), "username", [], "any", false, false, false, 31), 'row', ["attr" => ["class" => "form-control"], "label_attr" => ["class" => "form-label"], "label" => "Nom d'utilisateur"]);
        // line 35
        yield "
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), 'row', ["attr" => ["class" => "form-control"], "label_attr" => ["class" => "form-label"], "label" => "Email"]);
        // line 43
        yield "
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "numeroTelephone", [], "any", false, false, false, 47), 'row', ["attr" => ["class" => "form-control"], "label_attr" => ["class" => "form-label"], "label" => "Numéro de téléphone"]);
        // line 51
        yield "
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), "adresse", [], "any", false, false, false, 55), 'row', ["attr" => ["class" => "form-control"], "label_attr" => ["class" => "form-label"], "label" => "Adresse"]);
        // line 59
        yield "
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), "roles", [], "any", false, false, false, 63), 'row', ["attr" => ["class" => "form-control"], "label_attr" => ["class" => "form-label"], "label" => "Rôles"]);
        // line 67
        yield "
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), "plainPassword", [], "any", false, false, false, 71), 'row', ["label" => "Mot de passe", "attr" => ["class" => "form-control"], "label_attr" => ["class" => "form-label"]]);
        // line 75
        yield "
                    </div>

                    <div class=\"mb-3 form-check\">
                        ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 79, $this->source); })()), "agreeTerms", [], "any", false, false, false, 79), 'row', ["attr" => ["class" => "form-check-input"], "label_attr" => ["class" => "form-check-label"], "label" => "J'accepte les conditions d'utilisation"]);
        // line 83
        yield "
                    </div>

                    ";
        // line 87
        yield "                    <button type=\"submit\" class=\"btn btn-primary w-100\">S'inscrire</button>

                    ";
        // line 90
        yield "                    <div class=\"mt-3 text-center\">
                        <p>Vous avez déjà un compte ? <a href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Connectez-vous ici</a>.</p>
                    </div>

                ";
        // line 95
        yield "                ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 95, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
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
        return "registration/register.html.twig";
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
        return array (  227 => 95,  221 => 91,  218 => 90,  214 => 87,  209 => 83,  207 => 79,  201 => 75,  199 => 71,  193 => 67,  191 => 63,  185 => 59,  183 => 55,  177 => 51,  175 => 47,  169 => 43,  167 => 39,  161 => 35,  159 => 31,  156 => 30,  150 => 27,  144 => 24,  141 => 22,  132 => 19,  129 => 18,  124 => 17,  115 => 14,  112 => 13,  107 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Inscription{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <h1 class=\"text-center\">Inscription</h1>

                {# Affichage des messages flash #}
                {% for message in app.flashes('error') %}
                    <div class=\"alert alert-danger\">
                        {{ message }}
                    </div>
                {% endfor %}
                {% for message in app.flashes('success') %}
                <div class=\"alert alert-success\">
                    {{ message }}
                 </div>
                {% endfor %}

                {# Affichage des erreurs du formulaire en haut #}
                {{ form_errors(registrationForm) }}

                {# Début du formulaire #}
                {{ form_start(registrationForm, {'attr': {'class': 'mt-4'}}) }}

                    {# Rendu de chaque champ du formulaire #}
                    <div class=\"mb-3\">
                        {{ form_row(registrationForm.username, {
                            'attr': {'class': 'form-control'},
                            'label_attr': {'class': 'form-label'},
                            'label': 'Nom d\\'utilisateur'
                        }) }}
                    </div>

                    <div class=\"mb-3\">
                        {{ form_row(registrationForm.email, {
                            'attr': {'class': 'form-control'},
                            'label_attr': {'class': 'form-label'},
                            'label': 'Email'
                        }) }}
                    </div>

                    <div class=\"mb-3\">
                        {{ form_row(registrationForm.numeroTelephone, {
                            'attr': {'class': 'form-control'},
                            'label_attr': {'class': 'form-label'},
                            'label': 'Numéro de téléphone'
                        }) }}
                    </div>

                    <div class=\"mb-3\">
                        {{ form_row(registrationForm.adresse, {
                            'attr': {'class': 'form-control'},
                            'label_attr': {'class': 'form-label'},
                            'label': 'Adresse'
                        }) }}
                    </div>

                    <div class=\"mb-3\">
                        {{ form_row(registrationForm.roles, {
                            'attr': {'class': 'form-control'},
                            'label_attr': {'class': 'form-label'},
                            'label': 'Rôles'
                        }) }}
                    </div>

                    <div class=\"mb-3\">
                        {{ form_row(registrationForm.plainPassword, {
                            'label': 'Mot de passe',
                            'attr': {'class': 'form-control'},
                            'label_attr': {'class': 'form-label'}
                        }) }}
                    </div>

                    <div class=\"mb-3 form-check\">
                        {{ form_row(registrationForm.agreeTerms, {
                            'attr': {'class': 'form-check-input'},
                            'label_attr': {'class': 'form-check-label'},
                            'label': 'J\\'accepte les conditions d\\'utilisation'
                        }) }}
                    </div>

                    {# Bouton d\\'enregistrement #}
                    <button type=\"submit\" class=\"btn btn-primary w-100\">S'inscrire</button>

                    {# Lien vers la page de connexion #}
                    <div class=\"mt-3 text-center\">
                        <p>Vous avez déjà un compte ? <a href=\"{{ path('app_login') }}\">Connectez-vous ici</a>.</p>
                    </div>

                {# Fin du formulaire #}
                {{ form_end(registrationForm) }}
            </div>
        </div>
    </div>
{% endblock %}
", "registration/register.html.twig", "C:\\Users\\riadh.chawachi\\Desktop\\TuniVibe-abir\\templates\\registration\\register.html.twig");
    }
}
