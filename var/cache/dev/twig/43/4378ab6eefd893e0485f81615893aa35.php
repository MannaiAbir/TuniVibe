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

/* workshop/index.html.twig */
class __TwigTemplate_cc5d851abf70b5858252ac757245df2f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "workshop/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "workshop/index.html.twig"));

        $this->parent = $this->loadTemplate("base3.html.twig", "workshop/index.html.twig", 1);
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
        yield "
                            <h2 class=\"text-white\">Liste de mes Workshops</h2>

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
        yield "

    <div class=\"container mb-4\">
        <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("workshop_new");
        yield "\" class=\"btn btn-primary\">Créer un Workshop</a>
    </div>

    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["workshops"]) || array_key_exists("workshops", $context) ? $context["workshops"] : (function () { throw new RuntimeError('Variable "workshops" does not exist.', 17, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["workshop"]) {
            // line 18
            yield "                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card shadow-lg border-2 rounded-lg p-3\">
                        <!-- Image cliquable menant à la page 'show' -->
                        <a href=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("workshop_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            yield "\">
                            <img src=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "image", [], "any", false, false, false, 22))), "html", null, true);
            yield "\" class=\"card-img-top img-fluid rounded\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "titre", [], "any", false, false, false, 22), "html", null, true);
            yield "\">
                        </a>
<div class=\"card-body text-center\">
    <h5 class=\"card-title font-weight-bold\">";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "titre", [], "any", false, false, false, 25), "html", null, true);
            yield "</h5>
    <p class=\"card-text\"><strong>Catégorie :</strong> <span class=\"text-muted\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "categorie", [], "any", false, false, false, 26), "nom", [], "any", false, false, false, 26), "html", null, true);
            yield "</span></p>
    
    <div class=\"d-flex justify-content-center\">
        <!-- Bouton Modifier -->
        <a href=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("workshop_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\" class=\"btn btn-warning mt-3 mx-2\">
            <i class=\"fa-solid fa-file-pen\"></i>
        </a>

        <!-- Bouton Supprimer -->
        <form method=\"post\" action=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("workshop_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression ?');\">
            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "id", [], "any", false, false, false, 36))), "html", null, true);
            yield "\">
            <button type=\"submit\" class=\"btn btn-danger mt-3 mx-2\">
                <i class=\"fa-solid fa-trash\"></i>
            </button>
        </form>
    </div>
</div>
                    </div>
                </div><!-- End Workshop Card -->
            ";
            $context['_iterated'] = true;
        }
        // line 45
        if (!$context['_iterated']) {
            // line 46
            yield "                <div class=\"col-12\">
                    <p class=\"text-center\">Aucun workshop trouvé.</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['workshop'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
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
        return "workshop/index.html.twig";
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
        return array (  187 => 50,  178 => 46,  176 => 45,  162 => 36,  158 => 35,  150 => 30,  143 => 26,  139 => 25,  131 => 22,  127 => 21,  122 => 18,  117 => 17,  109 => 12,  104 => 9,  91 => 8,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base3.html.twig' %}

             {% block header %}

                            <h2 class=\"text-white\">Liste de mes Workshops</h2>

            {% endblock %}
    {% block body %}


    <div class=\"container mb-4\">
        <a href=\"{{ path('workshop_new') }}\" class=\"btn btn-primary\">Créer un Workshop</a>
    </div>

    <div class=\"container\">
        <div class=\"row\">
            {% for workshop in workshops %}
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card shadow-lg border-2 rounded-lg p-3\">
                        <!-- Image cliquable menant à la page 'show' -->
                        <a href=\"{{ path('workshop_show', {'id': workshop.id}) }}\">
                            <img src=\"{{ asset('uploads/images/' ~ workshop.image) }}\" class=\"card-img-top img-fluid rounded\" alt=\"{{ workshop.titre }}\">
                        </a>
<div class=\"card-body text-center\">
    <h5 class=\"card-title font-weight-bold\">{{ workshop.titre }}</h5>
    <p class=\"card-text\"><strong>Catégorie :</strong> <span class=\"text-muted\">{{ workshop.categorie.nom }}</span></p>
    
    <div class=\"d-flex justify-content-center\">
        <!-- Bouton Modifier -->
        <a href=\"{{ path('workshop_edit', {'id': workshop.id}) }}\" class=\"btn btn-warning mt-3 mx-2\">
            <i class=\"fa-solid fa-file-pen\"></i>
        </a>

        <!-- Bouton Supprimer -->
        <form method=\"post\" action=\"{{ path('workshop_delete', {'id': workshop.id}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression ?');\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ workshop.id) }}\">
            <button type=\"submit\" class=\"btn btn-danger mt-3 mx-2\">
                <i class=\"fa-solid fa-trash\"></i>
            </button>
        </form>
    </div>
</div>
                    </div>
                </div><!-- End Workshop Card -->
            {% else %}
                <div class=\"col-12\">
                    <p class=\"text-center\">Aucun workshop trouvé.</p>
                </div>
            {% endfor %}
        </div>
    </div>
    {% endblock %}
", "workshop/index.html.twig", "C:\\Users\\riadh.chawachi\\Desktop\\TuniVibe-abir\\templates\\workshop\\index.html.twig");
    }
}
