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

/* workshop/show.html.twig */
class __TwigTemplate_106b5fd2a89b677f9d3860f10de82ecc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "workshop/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "workshop/show.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "workshop/show.html.twig", 1);
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
        yield "<header class=\"site-header d-flex flex-column justify-content-center align-items-center\">
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
                <h2 class=\"text-white\">Liste des Séances</h2>
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
        yield "
<div class=\"text-center mt-3\">
    <a href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seance_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
        yield "\" class=\"btn btn-success\">
        <i class=\"fa-solid fa-plus\"></i> Ajouter une Séance
    </a>
</div>




<div class=\"container mt-5\" data-aos=\"fade-up\" data-aos-delay=\"100\">
    <div class=\"row\">
        <div class=\"col-lg-4\">
            <div class=\"card shadow-lg p-3 bg-white rounded\">
                <div class=\"d-flex align-items-center mb-3 p-3 bg-light rounded\">
                    <div class=\"user-placeholder rounded-circle bg-secondary d-flex align-items-center justify-content-center\" 
                         style=\"width: 60px; height: 60px; object-fit: cover; margin-right: 10px;\">
                        <i class=\"bi bi-person text-white\" style=\"font-size: 30px;\"></i>
                    </div>
                    <span class=\"font-weight-bold\">Nom de l'utilisateur</span>
                </div>
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
        // line 55
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 55, $this->source); })()), "image", [], "any", false, false, false, 55)) {
            // line 56
            yield "                            <div class=\"swiper-slide\">
                                <img src=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 57, $this->source); })()), "image", [], "any", false, false, false, 57))), "html", null, true);
            yield "\" 
                                     alt=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 58, $this->source); })()), "titre", [], "any", false, false, false, 58), "html", null, true);
            yield "\" 
                                     style=\"width: 100%; height: 100%; object-fit: cover;\">
                            </div>
                        ";
        } else {
            // line 62
            yield "                            <p>Pas d'image disponible pour ce workshop.</p>
                        ";
        }
        // line 64
        yield "                    </div>
                    <div class=\"swiper-pagination\"></div>
                </div>
                <div class=\"mt-3\">
                    <h3 class=\"text-center\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 68, $this->source); })()), "titre", [], "any", false, false, false, 68), "html", null, true);
        yield "</h3>
                    <hr>
                    <p><strong>Catégorie:</strong> ";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 70, $this->source); })()), "categorie", [], "any", false, false, false, 70), "nom", [], "any", false, false, false, 70), "html", null, true);
        yield "</p>
                    <p><strong>Date de début:</strong> ";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 71, $this->source); })()), "dateDebut", [], "any", false, false, false, 71), "d/m/Y H:i"), "html", null, true);
        yield "</p>
                    <p><strong>Date de fin:</strong> ";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 72, $this->source); })()), "dateFin", [], "any", false, false, false, 72), "d/m/Y H:i"), "html", null, true);
        yield "</p>
                    <hr>
                    <p>";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 74, $this->source); })()), "description", [], "any", false, false, false, 74), "html", null, true);
        yield "</p>
                </div>
                <div class=\"d-flex justify-content-center mt-3\">
    <!-- Bouton Modifier -->
    <a href=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("workshop_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 78, $this->source); })()), "id", [], "any", false, false, false, 78)]), "html", null, true);
        yield "\" class=\"btn btn-warning mx-2\">
        <i class=\"fa-solid fa-file-pen\"></i> 
    </a>

    <!-- Bouton Supprimer -->
    <form method=\"post\" action=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("workshop_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 83, $this->source); })()), "id", [], "any", false, false, false, 83)]), "html", null, true);
        yield "\" 
          onsubmit=\"return confirm('Confirmer la suppression de ce workshop ?');\">
        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 85, $this->source); })()), "id", [], "any", false, false, false, 85))), "html", null, true);
        yield "\">
        <button type=\"submit\" class=\"btn btn-danger mx-2\">
            <i class=\"fa-solid fa-trash\"></i> 
        </button>
    </form>
</div>

            </div>
        </div>
        <div class=\"col-lg-8\">
            <div class=\"row\">
                ";
        // line 96
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 96, $this->source); })()), "seances", [], "any", false, false, false, 96)) > 0)) {
            // line 97
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 97, $this->source); })()), "seances", [], "any", false, false, false, 97));
            foreach ($context['_seq'] as $context["_key"] => $context["seance"]) {
                // line 98
                yield "                        <div class=\"col-md-6 mb-4\">
                            <div class=\"card shadow-lg border-2 rounded-lg p-3\">
                                <div class=\"card-body text-center\">
                                    <h5 class=\"card-title font-weight-bold\">";
                // line 101
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "titre", [], "any", false, false, false, 101), "html", null, true);
                yield "</h5>
                                    <p class=\"card-text\"><strong>Date:</strong> ";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "date", [], "any", false, false, false, 102), "d/m/Y"), "html", null, true);
                yield "</p>
                                    <p class=\"card-text\"><strong>Heure:</strong> ";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "temps", [], "any", false, false, false, 103), "H:i"), "html", null, true);
                yield "</p>
                                    <p class=\"card-text\"><strong>Durée:</strong> ";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "duree", [], "any", false, false, false, 104), "html", null, true);
                yield " Heure</p>
                                    <a href=\"#\" class=\"btn btn-primary mt-3\">
                                        <i class=\"fas fa-camera\"></i>
                                    </a>
                                    <!-- Bouton Modifier -->
                                    <a href=\"";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seance_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "id", [], "any", false, false, false, 109)]), "html", null, true);
                yield "\" class=\"btn btn-warning mt-3 mx-2\">
                                        <i class=\"fa-solid fa-file-pen\"></i>
                                    </a>
                                    <!-- Bouton Supprimer -->
                                    <form method=\"post\" action=\"";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seance_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "id", [], "any", false, false, false, 113)]), "html", null, true);
                yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression de cette séance ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "id", [], "any", false, false, false, 114))), "html", null, true);
                yield "\">
                                        <button type=\"submit\" class=\"btn btn-danger mt-3 mx-2\">
                                            <i class=\"fa-solid fa-trash\"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['seance'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            yield "                ";
        } else {
            // line 124
            yield "                    <div class=\"col-12\">
                        <p class=\"text-center\">Aucune séance enregistrée pour ce workshop.</p>
                    </div>
                ";
        }
        // line 128
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
        return "workshop/show.html.twig";
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
        return array (  299 => 128,  293 => 124,  290 => 123,  275 => 114,  271 => 113,  264 => 109,  256 => 104,  252 => 103,  248 => 102,  244 => 101,  239 => 98,  234 => 97,  232 => 96,  218 => 85,  213 => 83,  205 => 78,  198 => 74,  193 => 72,  189 => 71,  185 => 70,  180 => 68,  174 => 64,  170 => 62,  163 => 58,  159 => 57,  156 => 56,  154 => 55,  121 => 25,  117 => 23,  104 => 22,  77 => 4,  64 => 3,  41 => 1,);
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
                <h2 class=\"text-white\">Liste des Séances</h2>
            </div>
        </div>
    </div>
</header>
{% endblock %}

{% block body %}

<div class=\"text-center mt-3\">
    <a href=\"{{ path('seance_new', {'id': workshop.id}) }}\" class=\"btn btn-success\">
        <i class=\"fa-solid fa-plus\"></i> Ajouter une Séance
    </a>
</div>




<div class=\"container mt-5\" data-aos=\"fade-up\" data-aos-delay=\"100\">
    <div class=\"row\">
        <div class=\"col-lg-4\">
            <div class=\"card shadow-lg p-3 bg-white rounded\">
                <div class=\"d-flex align-items-center mb-3 p-3 bg-light rounded\">
                    <div class=\"user-placeholder rounded-circle bg-secondary d-flex align-items-center justify-content-center\" 
                         style=\"width: 60px; height: 60px; object-fit: cover; margin-right: 10px;\">
                        <i class=\"bi bi-person text-white\" style=\"font-size: 30px;\"></i>
                    </div>
                    <span class=\"font-weight-bold\">Nom de l'utilisateur</span>
                </div>
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
                <div class=\"mt-3\">
                    <h3 class=\"text-center\">{{ workshop.titre }}</h3>
                    <hr>
                    <p><strong>Catégorie:</strong> {{ workshop.categorie.nom }}</p>
                    <p><strong>Date de début:</strong> {{ workshop.dateDebut|date('d/m/Y H:i') }}</p>
                    <p><strong>Date de fin:</strong> {{ workshop.dateFin|date('d/m/Y H:i') }}</p>
                    <hr>
                    <p>{{ workshop.description }}</p>
                </div>
                <div class=\"d-flex justify-content-center mt-3\">
    <!-- Bouton Modifier -->
    <a href=\"{{ path('workshop_edit', {'id': workshop.id}) }}\" class=\"btn btn-warning mx-2\">
        <i class=\"fa-solid fa-file-pen\"></i> 
    </a>

    <!-- Bouton Supprimer -->
    <form method=\"post\" action=\"{{ path('workshop_delete', {'id': workshop.id}) }}\" 
          onsubmit=\"return confirm('Confirmer la suppression de ce workshop ?');\">
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ workshop.id) }}\">
        <button type=\"submit\" class=\"btn btn-danger mx-2\">
            <i class=\"fa-solid fa-trash\"></i> 
        </button>
    </form>
</div>

            </div>
        </div>
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
                                    <!-- Bouton Modifier -->
                                    <a href=\"{{ path('seance_edit', {'id': seance.id}) }}\" class=\"btn btn-warning mt-3 mx-2\">
                                        <i class=\"fa-solid fa-file-pen\"></i>
                                    </a>
                                    <!-- Bouton Supprimer -->
                                    <form method=\"post\" action=\"{{ path('seance_delete', {'id': seance.id}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression de cette séance ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ seance.id) }}\">
                                        <button type=\"submit\" class=\"btn btn-danger mt-3 mx-2\">
                                            <i class=\"fa-solid fa-trash\"></i>
                                        </button>
                                    </form>
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
", "workshop/show.html.twig", "C:\\project\\symfony\\PROJETPI\\TuniVibe\\templates\\workshop\\show.html.twig");
    }
}
