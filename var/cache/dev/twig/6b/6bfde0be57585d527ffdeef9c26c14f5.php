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

/* atelier/index.html.twig */
class __TwigTemplate_1f0d81f165736c1b0728723217448d34 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "atelier/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "atelier/index.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "atelier/index.html.twig", 1);
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
        yield "            <header class=\"site-header d-flex flex-column justify-content-center align-items-center\">
                <div class=\"container\">
                    <div class=\"row align-items-center\">

                        <div class=\"col-lg-5 col-12\">
                            <h2 class=\"text-white\">Liste des Workshops</h2>
                        </div>
                    </div>
                </div>
            </header>
   ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 17
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

        // line 18
        yield "    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["workshops"]) || array_key_exists("workshops", $context) ? $context["workshops"] : (function () { throw new RuntimeError('Variable "workshops" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["workshop"]) {
            // line 21
            yield "                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card shadow-lg border-2 rounded-lg p-3\">
                        <div class=\"d-flex align-items-center mb-3 p-3 bg-light rounded\">
                            <div class=\"user-placeholder rounded-circle bg-secondary d-flex align-items-center justify-content-center\" 
                               style=\"width: 60px; height: 60px; object-fit: cover; margin-right: 10px;\">
                               <i class=\"bi bi-person text-white\" style=\"font-size: 30px;\"></i>
                           </div>
                           <p class=\"card-text\"><strong>Créé par :</strong> ";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "user", [], "any", false, false, false, 28), "username", [], "any", false, false, false, 28), "html", null, true);
            yield "</p>

            </div>
                        <!-- Image cliquable menant à la page 'show' -->
                        <a href=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("atelier_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            yield "\">
                            <img src=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "image", [], "any", false, false, false, 33))), "html", null, true);
            yield "\" class=\"card-img-top img-fluid rounded\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "titre", [], "any", false, false, false, 33), "html", null, true);
            yield "\">
                        </a>
                        <div class=\"card-body text-center\">
                            <h5 class=\"card-title font-weight-bold\">";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "titre", [], "any", false, false, false, 36), "html", null, true);
            yield "</h5>
                            <p class=\"card-text\"><strong>Catégorie :</strong> <span class=\"text-muted\">";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "categorie", [], "any", false, false, false, 37), "nom", [], "any", false, false, false, 37), "html", null, true);
            yield "</span></p>
                        </div>
                    </div>
                </div><!-- End Workshop Card -->
            ";
            $context['_iterated'] = true;
        }
        // line 41
        if (!$context['_iterated']) {
            // line 42
            yield "                <div class=\"col-12\">
                    <p class=\"text-center\">Aucun workshop trouvé.</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['workshop'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
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
        return "atelier/index.html.twig";
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
        return array (  172 => 46,  163 => 42,  161 => 41,  152 => 37,  148 => 36,  140 => 33,  136 => 32,  129 => 28,  120 => 21,  115 => 20,  111 => 18,  98 => 17,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}

    {% block header %}
            <header class=\"site-header d-flex flex-column justify-content-center align-items-center\">
                <div class=\"container\">
                    <div class=\"row align-items-center\">

                        <div class=\"col-lg-5 col-12\">
                            <h2 class=\"text-white\">Liste des Workshops</h2>
                        </div>
                    </div>
                </div>
            </header>
   {% endblock %}


{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            {% for workshop in workshops %}
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card shadow-lg border-2 rounded-lg p-3\">
                        <div class=\"d-flex align-items-center mb-3 p-3 bg-light rounded\">
                            <div class=\"user-placeholder rounded-circle bg-secondary d-flex align-items-center justify-content-center\" 
                               style=\"width: 60px; height: 60px; object-fit: cover; margin-right: 10px;\">
                               <i class=\"bi bi-person text-white\" style=\"font-size: 30px;\"></i>
                           </div>
                           <p class=\"card-text\"><strong>Créé par :</strong> {{ workshop.user.username }}</p>

            </div>
                        <!-- Image cliquable menant à la page 'show' -->
                        <a href=\"{{ path('atelier_show', {'id': workshop.id}) }}\">
                            <img src=\"{{ asset('uploads/images/' ~ workshop.image) }}\" class=\"card-img-top img-fluid rounded\" alt=\"{{ workshop.titre }}\">
                        </a>
                        <div class=\"card-body text-center\">
                            <h5 class=\"card-title font-weight-bold\">{{ workshop.titre }}</h5>
                            <p class=\"card-text\"><strong>Catégorie :</strong> <span class=\"text-muted\">{{ workshop.categorie.nom }}</span></p>
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



", "atelier/index.html.twig", "C:\\Users\\riadh.chawachi\\Desktop\\TuniVibe-abir\\templates\\atelier\\index.html.twig");
    }
}
