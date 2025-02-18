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

/* gestion_hebergement/index.html.twig */
class __TwigTemplate_f35e3c6db87f5598401a2934292b2eba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_hebergement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_hebergement/index.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "gestion_hebergement/index.html.twig", 1);
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
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["hebergements"]) || array_key_exists("hebergements", $context) ? $context["hebergements"] : (function () { throw new RuntimeError('Variable "hebergements" does not exist.', 18, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["hebergement"]) {
            // line 19
            yield "                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card shadow-lg border-2 rounded-lg p-3\">
                        <div class=\"d-flex align-items-center mb-3 p-3 bg-light rounded\">
                            <div class=\"user-placeholder rounded-circle bg-secondary d-flex align-items-center justify-content-center\" 
                                style=\"width: 60px; height: 60px; object-fit: cover; margin-right: 10px;\">
                                <i class=\"bi bi-person text-white\" style=\"font-size: 30px;\"></i>
                            </div>
                            <p class=\"card-text\"><strong>Propriétaire :</strong> ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "user", [], "any", false, false, false, 26), "username", [], "any", false, false, false, 26), "html", null, true);
            yield "</p>
                        </div>

                        <!-- Image cliquable menant à la page 'show' -->
                        <a href=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestionhebergement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\">
                            <img src=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "image", [], "any", false, false, false, 31))), "html", null, true);
            yield "\" class=\"card-img-top img-fluid rounded\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "nom", [], "any", false, false, false, 31), "html", null, true);
            yield "\">
                        </a>

                        <div class=\"card-body text-center\">
                            <h5 class=\"card-title font-weight-bold\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "nom", [], "any", false, false, false, 35), "html", null, true);
            yield "</h5>
                            <p class=\"card-text\"><strong>Capacité :</strong> <span class=\"text-muted\">";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hebergement"], "nbrePersonne", [], "any", false, false, false, 36), "html", null, true);
            yield " personnes</span></p>
                        </div>
                    </div>
                </div><!-- End Hébergement Card -->
            ";
            $context['_iterated'] = true;
        }
        // line 40
        if (!$context['_iterated']) {
            // line 41
            yield "                <div class=\"col-12\">
                    <p class=\"text-center\">Aucun hébergement trouvé.</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['hebergement'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
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
        return "gestion_hebergement/index.html.twig";
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
        return array (  172 => 45,  163 => 41,  161 => 40,  152 => 36,  148 => 35,  139 => 31,  135 => 30,  128 => 26,  119 => 19,  114 => 18,  110 => 16,  97 => 15,  77 => 4,  64 => 3,  41 => 1,);
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
            {% for hebergement in hebergements %}
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card shadow-lg border-2 rounded-lg p-3\">
                        <div class=\"d-flex align-items-center mb-3 p-3 bg-light rounded\">
                            <div class=\"user-placeholder rounded-circle bg-secondary d-flex align-items-center justify-content-center\" 
                                style=\"width: 60px; height: 60px; object-fit: cover; margin-right: 10px;\">
                                <i class=\"bi bi-person text-white\" style=\"font-size: 30px;\"></i>
                            </div>
                            <p class=\"card-text\"><strong>Propriétaire :</strong> {{ hebergement.user.username }}</p>
                        </div>

                        <!-- Image cliquable menant à la page 'show' -->
                        <a href=\"{{ path('gestionhebergement_show', {'id': hebergement.id}) }}\">
                            <img src=\"{{ asset('uploads/images/' ~ hebergement.image) }}\" class=\"card-img-top img-fluid rounded\" alt=\"{{ hebergement.nom }}\">
                        </a>

                        <div class=\"card-body text-center\">
                            <h5 class=\"card-title font-weight-bold\">{{ hebergement.nom }}</h5>
                            <p class=\"card-text\"><strong>Capacité :</strong> <span class=\"text-muted\">{{ hebergement.nbrePersonne }} personnes</span></p>
                        </div>
                    </div>
                </div><!-- End Hébergement Card -->
            {% else %}
                <div class=\"col-12\">
                    <p class=\"text-center\">Aucun hébergement trouvé.</p>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "gestion_hebergement/index.html.twig", "C:\\Users\\riadh.chawachi\\Desktop\\TuniVibe-abir\\templates\\gestion_hebergement\\index.html.twig");
    }
}
