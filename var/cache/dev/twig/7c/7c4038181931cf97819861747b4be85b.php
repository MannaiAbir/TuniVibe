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

/* gestionhebergement/show.html.twig */
class __TwigTemplate_dbf424212d70ffeb798e625a610b2fd0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionhebergement/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestionhebergement/show.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "gestionhebergement/show.html.twig", 1);
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
                    <nav aria-label=\"breadcrumb\">
                        <ol class=\"breadcrumb\">
                            <a href=\"javascript:history.back()\" class=\"btn btn-secondary mt-3\">
                                <i class=\"fa-solid fa-arrow-left\"></i> Retour
                            </a>
                        </ol>
                    </nav>
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

    // line 22
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

        // line 23
        yield "<div class=\"container mt-5\" data-aos=\"fade-up\" data-aos-delay=\"100\">
    <div class=\"row\">
        <!-- Partie gauche : Hébergement -->
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

                <!-- Image de l'Hébergement -->
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
        // line 49
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 49, $this->source); })()), "image", [], "any", false, false, false, 49)) {
            // line 50
            yield "                            <div class=\"swiper-slide\">
                                <img src=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 51, $this->source); })()), "image", [], "any", false, false, false, 51))), "html", null, true);
            yield "\" 
                                     alt=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 52, $this->source); })()), "nom", [], "any", false, false, false, 52), "html", null, true);
            yield "\" 
                                     style=\"width: 100%; height: 100%; object-fit: cover;\">
                            </div>
                        ";
        } else {
            // line 56
            yield "                            <p>Pas d'image disponible pour cet hébergement.</p>
                        ";
        }
        // line 58
        yield "                    </div>
                    <div class=\"swiper-pagination\"></div>
                </div>

                <!-- Infos Hébergement -->
                <div class=\"mt-3\">
                    <h3 class=\"text-center\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 64, $this->source); })()), "nom", [], "any", false, false, false, 64), "html", null, true);
        yield "</h3>
                    <hr>
                    <p><strong>Type:</strong> ";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 66, $this->source); })()), "type", [], "any", false, false, false, 66), "html", null, true);
        yield "</p>
                    <p><strong>Adresse:</strong> ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 67, $this->source); })()), "adresse", [], "any", false, false, false, 67), "html", null, true);
        yield "</p>
                    <p><strong>Capacité:</strong> ";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 68, $this->source); })()), "capacite", [], "any", false, false, false, 68), "html", null, true);
        yield "</p>
                    <p><strong>Description:</strong> ";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 69, $this->source); })()), "description", [], "any", false, false, false, 69), "html", null, true);
        yield "</p>
                </div>
            </div>
        </div>

        <!-- Partie droite : Programmes Associés -->
        <div class=\"col-lg-8\">
            <div class=\"row\">
                <h3 class=\"mb-3\">Programmes associés :</h3>
                ";
        // line 78
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 78, $this->source); })()), "programmes", [], "any", false, false, false, 78)) > 0)) {
            // line 79
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 79, $this->source); })()), "programmes", [], "any", false, false, false, 79));
            foreach ($context['_seq'] as $context["_key"] => $context["programme"]) {
                // line 80
                yield "                        <div class=\"col-md-6 mb-4\">
                            <div class=\"card shadow-lg border-2 rounded-lg p-3\">
                                <div class=\"card-body text-center\">
                                    <strong>Nom :</strong> ";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["programme"], "nom", [], "any", false, false, false, 83), "html", null, true);
                yield " <br>
                                    <strong>Lieu :</strong> ";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["programme"], "lieu", [], "any", false, false, false, 84), "html", null, true);
                yield " <br>
                                    <strong>Date début :</strong> ";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["programme"], "dateDebut", [], "any", false, false, false, 85), "d/m/Y H:i"), "html", null, true);
                yield " <br>
                                    <strong>Date fin :</strong> ";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["programme"], "dateFin", [], "any", false, false, false, 86), "d/m/Y H:i"), "html", null, true);
                yield " <br>
                                    <strong>Description :</strong> ";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["programme"], "description", [], "any", false, false, false, 87), "html", null, true);
                yield " <br>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['programme'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            yield "                ";
        } else {
            // line 93
            yield "                    <div class=\"col-12\">
                        <p class=\"text-center\">Aucun programme enregistré pour cet hébergement.</p>
                    </div>
                ";
        }
        // line 97
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
        return "gestionhebergement/show.html.twig";
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
        return array (  250 => 97,  244 => 93,  241 => 92,  230 => 87,  226 => 86,  222 => 85,  218 => 84,  214 => 83,  209 => 80,  204 => 79,  202 => 78,  190 => 69,  186 => 68,  182 => 67,  178 => 66,  173 => 64,  165 => 58,  161 => 56,  154 => 52,  150 => 51,  147 => 50,  145 => 49,  117 => 23,  104 => 22,  77 => 4,  64 => 3,  41 => 1,);
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
                    <h2 class=\"text-white\">Liste des Hébergements</h2>
                </div>
            </div>
        </div>
    </header>
{% endblock %}

{% block body %}
<div class=\"container mt-5\" data-aos=\"fade-up\" data-aos-delay=\"100\">
    <div class=\"row\">
        <!-- Partie gauche : Hébergement -->
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

                <!-- Image de l'Hébergement -->
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
                        {% if hebergement.image %}
                            <div class=\"swiper-slide\">
                                <img src=\"{{ asset('uploads/images/' ~ hebergement.image) }}\" 
                                     alt=\"{{ hebergement.nom }}\" 
                                     style=\"width: 100%; height: 100%; object-fit: cover;\">
                            </div>
                        {% else %}
                            <p>Pas d'image disponible pour cet hébergement.</p>
                        {% endif %}
                    </div>
                    <div class=\"swiper-pagination\"></div>
                </div>

                <!-- Infos Hébergement -->
                <div class=\"mt-3\">
                    <h3 class=\"text-center\">{{ hebergement.nom }}</h3>
                    <hr>
                    <p><strong>Type:</strong> {{ hebergement.type }}</p>
                    <p><strong>Adresse:</strong> {{ hebergement.adresse }}</p>
                    <p><strong>Capacité:</strong> {{ hebergement.capacite }}</p>
                    <p><strong>Description:</strong> {{ hebergement.description }}</p>
                </div>
            </div>
        </div>

        <!-- Partie droite : Programmes Associés -->
        <div class=\"col-lg-8\">
            <div class=\"row\">
                <h3 class=\"mb-3\">Programmes associés :</h3>
                {% if hebergement.programmes|length > 0 %}
                    {% for programme in hebergement.programmes %}
                        <div class=\"col-md-6 mb-4\">
                            <div class=\"card shadow-lg border-2 rounded-lg p-3\">
                                <div class=\"card-body text-center\">
                                    <strong>Nom :</strong> {{ programme.nom }} <br>
                                    <strong>Lieu :</strong> {{ programme.lieu }} <br>
                                    <strong>Date début :</strong> {{ programme.dateDebut|date('d/m/Y H:i') }} <br>
                                    <strong>Date fin :</strong> {{ programme.dateFin|date('d/m/Y H:i') }} <br>
                                    <strong>Description :</strong> {{ programme.description }} <br>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                {% else %}
                    <div class=\"col-12\">
                        <p class=\"text-center\">Aucun programme enregistré pour cet hébergement.</p>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "gestionhebergement/show.html.twig", "C:\\Users\\riadh.chawachi\\Desktop\\TuniVibe-abir\\templates\\gestionhebergement\\show.html.twig");
    }
}
