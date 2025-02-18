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

/* hebergement/index.html.twig */
class __TwigTemplate_dede4343c5643a16d871fb940a6766c6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hebergement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hebergement/index.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "hebergement/index.html.twig", 1);
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

        yield "Liste des Hébergements";
        
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
        yield "<h1 class=\"text-center my-4\">Liste des Hébergements</h1>

<div class=\"container mb-4\">
    <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hebergement_new");
        yield "\" class=\"btn btn-primary\">Ajouter un Nouvel Hébergement</a>
</div>

<div class=\"container\">
    <div class=\"row\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["hebergements"]) || array_key_exists("hebergements", $context) ? $context["hebergements"] : (function () { throw new RuntimeError('Variable "hebergements" does not exist.', 14, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
            // line 15
            yield "            <div class=\"col-lg-4 col-md-6 mb-4\">
                <div class=\"card shadow-lg border-2 rounded-lg p-3\">
                    <a href=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hebergement_show", ["idhebergement" => CoreExtension::getAttribute($this->env, $this->source, $context["h"], "idhebergement", [], "any", false, false, false, 17)]), "html", null, true);
            yield "\">
                        ";
            // line 18
            if (CoreExtension::getAttribute($this->env, $this->source, $context["h"], "image", [], "any", false, false, false, 18)) {
                // line 19
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["h"], "image", [], "any", false, false, false, 19))), "html", null, true);
                yield "\" class=\"card-img-top img-fluid rounded\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "nom", [], "any", false, false, false, 19), "html", null, true);
                yield "\">
                        ";
            } else {
                // line 21
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/default-image.jpg"), "html", null, true);
                yield "\" class=\"card-img-top img-fluid rounded\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "nom", [], "any", false, false, false, 21), "html", null, true);
                yield "\">
                        ";
            }
            // line 23
            yield "                    </a>
                    <div class=\"card-body text-center\">
                        <h5 class=\"card-title font-weight-bold\">";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "nom", [], "any", false, false, false, 25), "html", null, true);
            yield "</h5>
                        <p class=\"card-text\"><strong>Type :</strong> <span class=\"text-muted\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "type", [], "any", false, false, false, 26), "html", null, true);
            yield "</span></p>
                        <p class=\"card-text\"><strong>Adresse :</strong> <span class=\"text-muted\">";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "adresse", [], "any", false, false, false, 27), "html", null, true);
            yield "</span></p>
                        <p class=\"card-text\"><strong>Capacité :</strong> <span class=\"text-muted\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "capacite", [], "any", false, false, false, 28), "html", null, true);
            yield "</span></p>
                        <p class=\"card-text\"><strong>Description :</strong> <span class=\"text-muted\">";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "description", [], "any", false, false, false, 29), "html", null, true);
            yield "</span></p>

                        <div class=\"d-flex justify-content-center\">
                            <a href=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hebergement_show", ["idhebergement" => CoreExtension::getAttribute($this->env, $this->source, $context["h"], "idhebergement", [], "any", false, false, false, 32)]), "html", null, true);
            yield "\" class=\"btn btn-info mx-2\">Voir</a>
                            <a href=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hebergement_edit", ["idhebergement" => CoreExtension::getAttribute($this->env, $this->source, $context["h"], "idhebergement", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\" class=\"btn btn-warning mx-2\">Modifier</a>

                            <form action=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hebergement_delete", ["idhebergement" => CoreExtension::getAttribute($this->env, $this->source, $context["h"], "idhebergement", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\" method=\"post\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet hébergement ?');\">
                                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 42
        if (!$context['_iterated']) {
            // line 43
            yield "            <div class=\"col-12\">
                <p class=\"text-center\">Aucun hébergement trouvé.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['h'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "    </div>
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
        return "hebergement/index.html.twig";
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
        return array (  202 => 47,  193 => 43,  191 => 42,  179 => 35,  174 => 33,  170 => 32,  164 => 29,  160 => 28,  156 => 27,  152 => 26,  148 => 25,  144 => 23,  136 => 21,  128 => 19,  126 => 18,  122 => 17,  118 => 15,  113 => 14,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Liste des Hébergements{% endblock %}

{% block body %}
<h1 class=\"text-center my-4\">Liste des Hébergements</h1>

<div class=\"container mb-4\">
    <a href=\"{{ path('hebergement_new') }}\" class=\"btn btn-primary\">Ajouter un Nouvel Hébergement</a>
</div>

<div class=\"container\">
    <div class=\"row\">
        {% for h in hebergements %}
            <div class=\"col-lg-4 col-md-6 mb-4\">
                <div class=\"card shadow-lg border-2 rounded-lg p-3\">
                    <a href=\"{{ path('hebergement_show', {'idhebergement': h.idhebergement}) }}\">
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

                        <div class=\"d-flex justify-content-center\">
                            <a href=\"{{ path('hebergement_show', {'idhebergement': h.idhebergement}) }}\" class=\"btn btn-info mx-2\">Voir</a>
                            <a href=\"{{ path('hebergement_edit', {'idhebergement': h.idhebergement}) }}\" class=\"btn btn-warning mx-2\">Modifier</a>

                            <form action=\"{{ path('hebergement_delete', {'idhebergement': h.idhebergement}) }}\" method=\"post\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet hébergement ?');\">
                                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12\">
                <p class=\"text-center\">Aucun hébergement trouvé.</p>
            </div>
        {% endfor %}
    </div>
</div>
{% endblock %}
", "hebergement/index.html.twig", "C:\\Users\\riadh.chawachi\\Desktop\\TuniVibe-abir\\templates\\hebergement\\index.html.twig");
    }
}
