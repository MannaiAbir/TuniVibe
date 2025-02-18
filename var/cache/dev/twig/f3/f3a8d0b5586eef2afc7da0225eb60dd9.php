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
class __TwigTemplate_d08974696e12a24d8c335b72fb37575d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "workshop/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "workshop/show.html.twig"));

        $this->parent = $this->loadTemplate("base3.html.twig", "workshop/show.html.twig", 1);
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
        yield "                <h2 class=\"text-white\">Liste des Séances</h2>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "
<div class=\"text-center mt-3\">
    <a href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seance_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        yield "\" class=\"btn btn-success\">
        <i class=\"fa-solid fa-plus\"></i> Ajouter une Séance
    </a>
</div>




<div class=\"container mt-5\" data-aos=\"fade-up\" data-aos-delay=\"100\">
    <div class=\"row\">
        <div class=\"col-lg-4\">
            <div class=\"card shadow-lg p-3 bg-white rounded\">

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
        // line 34
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 34, $this->source); })()), "image", [], "any", false, false, false, 34)) {
            // line 35
            yield "                            <div class=\"swiper-slide\">
                                <img src=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 36, $this->source); })()), "image", [], "any", false, false, false, 36))), "html", null, true);
            yield "\" 
                                     alt=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 37, $this->source); })()), "titre", [], "any", false, false, false, 37), "html", null, true);
            yield "\" 
                                     style=\"width: 100%; height: 100%; object-fit: cover;\">
                            </div>
                        ";
        } else {
            // line 41
            yield "                            <p>Pas d'image disponible pour ce workshop.</p>
                        ";
        }
        // line 43
        yield "                    </div>
                    <div class=\"swiper-pagination\"></div>
                </div>
                <div class=\"mt-3\">
                    <h3 class=\"text-center\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 47, $this->source); })()), "titre", [], "any", false, false, false, 47), "html", null, true);
        yield "</h3>
                    <hr>
                    <p><strong>Catégorie:</strong> ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 49, $this->source); })()), "categorie", [], "any", false, false, false, 49), "nom", [], "any", false, false, false, 49), "html", null, true);
        yield "</p>
                    <p><strong>Date de début:</strong> ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 50, $this->source); })()), "dateDebut", [], "any", false, false, false, 50), "d/m/Y H:i"), "html", null, true);
        yield "</p>
                    <p><strong>Date de fin:</strong> ";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 51, $this->source); })()), "dateFin", [], "any", false, false, false, 51), "d/m/Y H:i"), "html", null, true);
        yield "</p>
                    <hr>
                    <p>";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 53, $this->source); })()), "description", [], "any", false, false, false, 53), "html", null, true);
        yield "</p>
                </div>
                <div class=\"d-flex justify-content-center mt-3\">
    <!-- Bouton Modifier -->
    <a href=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("workshop_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57)]), "html", null, true);
        yield "\" class=\"btn btn-warning mx-2\">
        <i class=\"fa-solid fa-file-pen\"></i> 
    </a>

    <!-- Bouton Supprimer -->
    <form method=\"post\" action=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("workshop_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 62, $this->source); })()), "id", [], "any", false, false, false, 62)]), "html", null, true);
        yield "\" 
          onsubmit=\"return confirm('Confirmer la suppression de ce workshop ?');\">
        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64))), "html", null, true);
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
        // line 75
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 75, $this->source); })()), "seances", [], "any", false, false, false, 75)) > 0)) {
            // line 76
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 76, $this->source); })()), "seances", [], "any", false, false, false, 76));
            foreach ($context['_seq'] as $context["_key"] => $context["seance"]) {
                // line 77
                yield "                        <div class=\"col-md-6 mb-4\">
                            <div class=\"card shadow-lg border-2 rounded-lg p-3\">
                                <div class=\"card-body text-center\">
                                    <h5 class=\"card-title font-weight-bold\">";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "titre", [], "any", false, false, false, 80), "html", null, true);
                yield "</h5>
                                    <p class=\"card-text\"><strong>Date:</strong> ";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "date", [], "any", false, false, false, 81), "d/m/Y"), "html", null, true);
                yield "</p>
                                    <p class=\"card-text\"><strong>Heure:</strong> ";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "temps", [], "any", false, false, false, 82), "H:i"), "html", null, true);
                yield "</p>
                                    <p class=\"card-text\"><strong>Durée:</strong> ";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "duree", [], "any", false, false, false, 83), "html", null, true);
                yield " Heure</p>
                                    <a href=\"#\" class=\"btn btn-primary mt-3\">
                                        <i class=\"fas fa-camera\"></i>
                                    </a>
                                    <!-- Bouton Modifier -->
                                    <a href=\"";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seance_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "id", [], "any", false, false, false, 88)]), "html", null, true);
                yield "\" class=\"btn btn-warning mt-3 mx-2\">
                                        <i class=\"fa-solid fa-file-pen\"></i>
                                    </a>
                                    <!-- Bouton Supprimer -->
                                    <form method=\"post\" action=\"";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seance_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "id", [], "any", false, false, false, 92)]), "html", null, true);
                yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression de cette séance ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "id", [], "any", false, false, false, 93))), "html", null, true);
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
            // line 102
            yield "                ";
        } else {
            // line 103
            yield "                    <div class=\"col-12\">
                        <p class=\"text-center\">Aucune séance enregistrée pour ce workshop.</p>
                    </div>
                ";
        }
        // line 107
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
        return array (  278 => 107,  272 => 103,  269 => 102,  254 => 93,  250 => 92,  243 => 88,  235 => 83,  231 => 82,  227 => 81,  223 => 80,  218 => 77,  213 => 76,  211 => 75,  197 => 64,  192 => 62,  184 => 57,  177 => 53,  172 => 51,  168 => 50,  164 => 49,  159 => 47,  153 => 43,  149 => 41,  142 => 37,  138 => 36,  135 => 35,  133 => 34,  106 => 10,  102 => 8,  89 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base3.html.twig' %}

{% block header %}
                <h2 class=\"text-white\">Liste des Séances</h2>
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
", "workshop/show.html.twig", "C:\\Users\\riadh.chawachi\\Desktop\\TuniVibe-abir\\templates\\workshop\\show.html.twig");
    }
}
