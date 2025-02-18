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

/* atelier/show.html.twig */
class __TwigTemplate_bcd67218620fb163e1280a0b0d923d68 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "atelier/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "atelier/show.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "atelier/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        // line 5
        yield "            <header class=\"site-header d-flex flex-column justify-content-center align-items-center\">
                <div class=\"container\">
                    <div class=\"row align-items-center\">

                        <div class=\"col-lg-5 col-12\">
                            <nav aria-label=\"breadcrumb\">
                                <ol class=\"breadcrumb\">
                                    <a href=\"javascript:history.back()\" class=\"btn btn-secondary mt-3\">
                                        <i class=\"fa-solid fa-arrow-left\"></i> Retour
                                    </a>
                                </ol>
                            </nav>

                            <h2 class=\"text-white\">Liste des Seances</h2>
                        </div>

                    </div>
                </div>
            </header>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 25
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

        // line 26
        yield "<div class=\"container mt-5\" data-aos=\"fade-up\" data-aos-delay=\"100\">
    <div class=\"row\">
        <!-- Partie gauche : Tout dans un même conteneur -->
        <div class=\"col-lg-4\">
            <div class=\"card shadow-lg p-3 bg-white rounded\">
                <!-- Espace réservé pour l'utilisateur -->
            <div class=\"d-flex align-items-center mb-3 p-3 bg-light rounded\">
                <div class=\"user-placeholder rounded-circle bg-secondary d-flex align-items-center justify-content-center\" 
                     style=\"width: 60px; height: 60px; object-fit: cover; margin-right: 10px;\">
                    <i class=\"bi bi-person text-white\" style=\"font-size: 30px;\"></i>
                </div>
                <span class=\"font-weight-bold\">Nom de l'utilisateur</span>
            </div>

                <!-- Image du Workshop -->
                <div class=\"portfolio-details-slider swiper init-swiper\">
                    <script type=\"application/json\" class=\"swiper-config\">
                        {
                            \"loop\": true,
                            \"speed\": 600,
                            \"autoplay\": { \"delay\": 5000 },
                            \"slidesPerView\": \"auto\",
                            \"pagination\": { \"el\": \".swiper-pagination\", \"type\": \"bullets\", \"clickable\": true }
                        }
                    </script>
                    <div class=\"swiper-wrapper align-items-center\">
                        ";
        // line 52
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 52, $this->source); })()), "image", [], "any", false, false, false, 52)) {
            // line 53
            yield "                            <div class=\"swiper-slide\">
                                <img src=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 54, $this->source); })()), "image", [], "any", false, false, false, 54))), "html", null, true);
            yield "\" 
                                     alt=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 55, $this->source); })()), "titre", [], "any", false, false, false, 55), "html", null, true);
            yield "\" 
                                     style=\"width: 100%; height: 100%; object-fit: cover;\">
                            </div>
                        ";
        } else {
            // line 59
            yield "                            <p>Pas d'image disponible pour ce workshop.</p>
                        ";
        }
        // line 61
        yield "                    </div>
                    <div class=\"swiper-pagination\"></div>
                </div>

                <!-- Infos Workshop -->
                <div class=\"mt-3\">
                    <h3 class=\"text-center\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 67, $this->source); })()), "titre", [], "any", false, false, false, 67), "html", null, true);
        yield "</h3>
                    <hr>
                    <p><strong>Catégorie:</strong> ";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 69, $this->source); })()), "categorie", [], "any", false, false, false, 69), "nom", [], "any", false, false, false, 69), "html", null, true);
        yield "</p>
                    <p><strong>Date de début:</strong> ";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 70, $this->source); })()), "dateDebut", [], "any", false, false, false, 70), "d/m/Y H:i"), "html", null, true);
        yield "</p>
                    <p><strong>Date de fin:</strong> ";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 71, $this->source); })()), "dateFin", [], "any", false, false, false, 71), "d/m/Y H:i"), "html", null, true);
        yield "</p>
                    <hr>
                    <p>";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 73, $this->source); })()), "description", [], "any", false, false, false, 73), "html", null, true);
        yield "</p>
                </div>
            </div>
        </div>

        <!-- Partie droite : Liste des séances -->
        <div class=\"col-lg-8\">
            <div class=\"row\">
                ";
        // line 81
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 81, $this->source); })()), "seances", [], "any", false, false, false, 81)) > 0)) {
            // line 82
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 82, $this->source); })()), "seances", [], "any", false, false, false, 82));
            foreach ($context['_seq'] as $context["_key"] => $context["seance"]) {
                // line 83
                yield "                        <div class=\"col-md-6 mb-4\">
                            <div class=\"card shadow-lg border-2 rounded-lg p-3\">
                                <div class=\"card-body text-center\">
                                    <h5 class=\"card-title font-weight-bold\">";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "titre", [], "any", false, false, false, 86), "html", null, true);
                yield "</h5>
                                    <p class=\"card-text\"><strong>Date:</strong> ";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "date", [], "any", false, false, false, 87), "d/m/Y"), "html", null, true);
                yield "</p>
                                    <p class=\"card-text\"><strong>Heure:</strong> ";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "temps", [], "any", false, false, false, 88), "H:i"), "html", null, true);
                yield "</p>
                                    <p class=\"card-text\"><strong>Durée:</strong> ";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "duree", [], "any", false, false, false, 89), "html", null, true);
                yield " Heure</p>
                                    <a href=\"#\" class=\"btn btn-primary mt-3\">
                                        <i class=\"fas fa-camera\"></i> 
                                    </a>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['seance'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            yield "                ";
        } else {
            // line 98
            yield "                    <div class=\"col-12\">
                        <p class=\"text-center\">Aucune séance enregistrée pour ce workshop.</p>
                    </div>
                ";
        }
        // line 102
        yield "            </div>
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
        return "atelier/show.html.twig";
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
        return array (  252 => 102,  246 => 98,  243 => 97,  229 => 89,  225 => 88,  221 => 87,  217 => 86,  212 => 83,  207 => 82,  205 => 81,  194 => 73,  189 => 71,  185 => 70,  181 => 69,  176 => 67,  168 => 61,  164 => 59,  157 => 55,  153 => 54,  150 => 53,  148 => 52,  120 => 26,  107 => 25,  77 => 5,  64 => 4,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}


             {% block header %}
            <header class=\"site-header d-flex flex-column justify-content-center align-items-center\">
                <div class=\"container\">
                    <div class=\"row align-items-center\">

                        <div class=\"col-lg-5 col-12\">
                            <nav aria-label=\"breadcrumb\">
                                <ol class=\"breadcrumb\">
                                    <a href=\"javascript:history.back()\" class=\"btn btn-secondary mt-3\">
                                        <i class=\"fa-solid fa-arrow-left\"></i> Retour
                                    </a>
                                </ol>
                            </nav>

                            <h2 class=\"text-white\">Liste des Seances</h2>
                        </div>

                    </div>
                </div>
            </header>
            {% endblock %}
{% block body %}
<div class=\"container mt-5\" data-aos=\"fade-up\" data-aos-delay=\"100\">
    <div class=\"row\">
        <!-- Partie gauche : Tout dans un même conteneur -->
        <div class=\"col-lg-4\">
            <div class=\"card shadow-lg p-3 bg-white rounded\">
                <!-- Espace réservé pour l'utilisateur -->
            <div class=\"d-flex align-items-center mb-3 p-3 bg-light rounded\">
                <div class=\"user-placeholder rounded-circle bg-secondary d-flex align-items-center justify-content-center\" 
                     style=\"width: 60px; height: 60px; object-fit: cover; margin-right: 10px;\">
                    <i class=\"bi bi-person text-white\" style=\"font-size: 30px;\"></i>
                </div>
                <span class=\"font-weight-bold\">Nom de l'utilisateur</span>
            </div>

                <!-- Image du Workshop -->
                <div class=\"portfolio-details-slider swiper init-swiper\">
                    <script type=\"application/json\" class=\"swiper-config\">
                        {
                            \"loop\": true,
                            \"speed\": 600,
                            \"autoplay\": { \"delay\": 5000 },
                            \"slidesPerView\": \"auto\",
                            \"pagination\": { \"el\": \".swiper-pagination\", \"type\": \"bullets\", \"clickable\": true }
                        }
                    </script>
                    <div class=\"swiper-wrapper align-items-center\">
                        {% if workshop.image %}
                            <div class=\"swiper-slide\">
                                <img src=\"{{ asset('uploads/images/' ~ workshop.image) }}\" 
                                     alt=\"{{ workshop.titre }}\" 
                                     style=\"width: 100%; height: 100%; object-fit: cover;\">
                            </div>
                        {% else %}
                            <p>Pas d'image disponible pour ce workshop.</p>
                        {% endif %}
                    </div>
                    <div class=\"swiper-pagination\"></div>
                </div>

                <!-- Infos Workshop -->
                <div class=\"mt-3\">
                    <h3 class=\"text-center\">{{ workshop.titre }}</h3>
                    <hr>
                    <p><strong>Catégorie:</strong> {{ workshop.categorie.nom }}</p>
                    <p><strong>Date de début:</strong> {{ workshop.dateDebut|date('d/m/Y H:i') }}</p>
                    <p><strong>Date de fin:</strong> {{ workshop.dateFin|date('d/m/Y H:i') }}</p>
                    <hr>
                    <p>{{ workshop.description }}</p>
                </div>
            </div>
        </div>

        <!-- Partie droite : Liste des séances -->
        <div class=\"col-lg-8\">
            <div class=\"row\">
                {% if workshop.seances|length > 0 %}
                    {% for seance in workshop.seances %}
                        <div class=\"col-md-6 mb-4\">
                            <div class=\"card shadow-lg border-2 rounded-lg p-3\">
                                <div class=\"card-body text-center\">
                                    <h5 class=\"card-title font-weight-bold\">{{ seance.titre }}</h5>
                                    <p class=\"card-text\"><strong>Date:</strong> {{ seance.date|date('d/m/Y') }}</p>
                                    <p class=\"card-text\"><strong>Heure:</strong> {{ seance.temps|date('H:i') }}</p>
                                    <p class=\"card-text\"><strong>Durée:</strong> {{ seance.duree }} Heure</p>
                                    <a href=\"#\" class=\"btn btn-primary mt-3\">
                                        <i class=\"fas fa-camera\"></i> 
                                    </a>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                {% else %}
                    <div class=\"col-12\">
                        <p class=\"text-center\">Aucune séance enregistrée pour ce workshop.</p>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
</div>

{% endblock %}



", "atelier/show.html.twig", "C:\\project\\symfony\\PROJETPI\\TuniVibe\\templates\\atelier\\show.html.twig");
    }
}
