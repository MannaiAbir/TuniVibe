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

/* gestionhebergement/index.html.twig */
class __TwigTemplate_84cf4aab2e7a8daaa0392f219b5c651b extends Template
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
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionhebergement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionhebergement/index.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "gestionhebergement/index.html.twig", 1);
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
        yield "    <header class=\"site-header d-flex flex-column justify-content-center align-items-center\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-5 col-12\">
                    <h2 class=\"text-white\">Liste des Hébergements</h2>
                </div>
            </div>
        </div>
    </header>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 15
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

        // line 16
        yield "    <div class=\"container\">
       
        <div class=\"row\">
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["hebergements"]) || array_key_exists("hebergements", $context) ? $context["hebergements"] : (function () { throw new RuntimeError('Variable "hebergements" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
            // line 20
            yield "                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card shadow-lg border-2 rounded-lg p-3\">
                        <div class=\"d-flex align-items-center mb-3 p-3 bg-light rounded\">
                            <div class=\"user-placeholder rounded-circle bg-secondary d-flex align-items-center justify-content-center\"
                                 style=\"width: 60px; height: 60px; object-fit: cover; margin-right: 10px;\">
                                <i class=\"bi bi-person text-white\" style=\"font-size: 30px;\"></i>
                            </div>
                            <p class=\"card-text\"><strong>Créé par :</strong> ";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["h"], "user", [], "any", false, false, false, 27), "username", [], "any", false, false, false, 27), "html", null, true);
            yield "</p>
                        </div>
                        <!-- Image cliquable menant à la page 'show' -->
                        <a href=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestionhebergement_show", ["idhebergement" => CoreExtension::getAttribute($this->env, $this->source, $context["h"], "idhebergement", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\">
                            ";
            // line 31
            if (CoreExtension::getAttribute($this->env, $this->source, $context["h"], "image", [], "any", false, false, false, 31)) {
                // line 32
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["h"], "image", [], "any", false, false, false, 32))), "html", null, true);
                yield "\" class=\"card-img-top img-fluid rounded\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "nom", [], "any", false, false, false, 32), "html", null, true);
                yield "\">
                            ";
            } else {
                // line 34
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/default-image.jpg"), "html", null, true);
                yield "\" class=\"card-img-top img-fluid rounded\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "nom", [], "any", false, false, false, 34), "html", null, true);
                yield "\">
                            ";
            }
            // line 36
            yield "                        </a>
                        <div class=\"card-body text-center\">
                            <h5 class=\"card-title font-weight-bold\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "nom", [], "any", false, false, false, 38), "html", null, true);
            yield "</h5>
                            <p class=\"card-text\"><strong>Type :</strong> <span class=\"text-muted\">";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "type", [], "any", false, false, false, 39), "html", null, true);
            yield "</span></p>
                            <p class=\"card-text\"><strong>Adresse :</strong> <span class=\"text-muted\">";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "adresse", [], "any", false, false, false, 40), "html", null, true);
            yield "</span></p>
                            <p class=\"card-text\"><strong>Capacité :</strong> <span class=\"text-muted\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "capacite", [], "any", false, false, false, 41), "html", null, true);
            yield "</span></p>
                            <p class=\"card-text\"><strong>Description :</strong> <span class=\"text-muted\">";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "description", [], "any", false, false, false, 42), "html", null, true);
            yield "</span></p>

                 
                        </div>
                    </div>
                </div><!-- End Hebergement Card -->
            ";
            $context['_iterated'] = true;
        }
        // line 48
        if (!$context['_iterated']) {
            // line 49
            yield "                <div class=\"col-12\">
                    <p class=\"text-center\">Aucun hébergement trouvé.</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['h'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "        </div>
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
        return "gestionhebergement/index.html.twig";
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
        return array (  199 => 53,  190 => 49,  188 => 48,  177 => 42,  173 => 41,  169 => 40,  165 => 39,  161 => 38,  157 => 36,  149 => 34,  141 => 32,  139 => 31,  135 => 30,  129 => 27,  120 => 20,  115 => 19,  110 => 16,  97 => 15,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block header %}
    <header class=\"site-header d-flex flex-column justify-content-center align-items-center\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-5 col-12\">
                    <h2 class=\"text-white\">Liste des Hébergements</h2>
                </div>
            </div>
        </div>
    </header>
{% endblock %}

{% block body %}
    <div class=\"container\">
       
        <div class=\"row\">
            {% for h in hebergements %}
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card shadow-lg border-2 rounded-lg p-3\">
                        <div class=\"d-flex align-items-center mb-3 p-3 bg-light rounded\">
                            <div class=\"user-placeholder rounded-circle bg-secondary d-flex align-items-center justify-content-center\"
                                 style=\"width: 60px; height: 60px; object-fit: cover; margin-right: 10px;\">
                                <i class=\"bi bi-person text-white\" style=\"font-size: 30px;\"></i>
                            </div>
                            <p class=\"card-text\"><strong>Créé par :</strong> {{ h.user.username }}</p>
                        </div>
                        <!-- Image cliquable menant à la page 'show' -->
                        <a href=\"{{ path('gestionhebergement_show', {'idhebergement': h.idhebergement}) }}\">
                            {% if h.image %}
                                <img src=\"{{ asset('uploads/images/' ~ h.image) }}\" class=\"card-img-top img-fluid rounded\" alt=\"{{ h.nom }}\">
                            {% else %}
                                <img src=\"{{ asset('img/default-image.jpg') }}\" class=\"card-img-top img-fluid rounded\" alt=\"{{ h.nom }}\">
                            {% endif %}
                        </a>
                        <div class=\"card-body text-center\">
                            <h5 class=\"card-title font-weight-bold\">{{ h.nom }}</h5>
                            <p class=\"card-text\"><strong>Type :</strong> <span class=\"text-muted\">{{ h.type }}</span></p>
                            <p class=\"card-text\"><strong>Adresse :</strong> <span class=\"text-muted\">{{ h.adresse }}</span></p>
                            <p class=\"card-text\"><strong>Capacité :</strong> <span class=\"text-muted\">{{ h.capacite }}</span></p>
                            <p class=\"card-text\"><strong>Description :</strong> <span class=\"text-muted\">{{ h.description }}</span></p>

                 
                        </div>
                    </div>
                </div><!-- End Hebergement Card -->
            {% else %}
                <div class=\"col-12\">
                    <p class=\"text-center\">Aucun hébergement trouvé.</p>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "gestionhebergement/index.html.twig", "C:\\Users\\riadh.chawachi\\Desktop\\TuniVibe-abir\\templates\\gestionhebergement\\index.html.twig");
    }
}
