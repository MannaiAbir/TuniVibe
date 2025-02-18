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

/* programme/index.html.twig */
class __TwigTemplate_d879ae1b548a56fcc48536a498ae0c8d extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "programme/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "programme/index.html.twig"));

        // line 2
        yield "
<h1>Liste des Programmes</h1>

<ul>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["programmes"]) || array_key_exists("programmes", $context) ? $context["programmes"] : (function () { throw new RuntimeError('Variable "programmes" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["programme"]) {
            // line 7
            yield "        <li>
            <strong>Nom:</strong> ";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["programme"], "nom", [], "any", false, false, false, 8), "html", null, true);
            yield " <br>
             <strong>Lieu:</strong> ";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["programme"], "lieu", [], "any", false, false, false, 9), "html", null, true);
            yield " <br>
             <strong>Date début:</strong> ";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["programme"], "dateDebut", [], "any", false, false, false, 10), "d/m/Y H:i"), "html", null, true);
            yield " <br>
            <strong>Date fin:</strong> ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["programme"], "dateFin", [], "any", false, false, false, 11), "d/m/Y H:i"), "html", null, true);
            yield " <br>
            <strong>Description:</strong> ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["programme"], "description", [], "any", false, false, false, 12), "html", null, true);
            yield " <br>

            <a href=\"";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("programme_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["programme"], "id", [], "any", false, false, false, 14)]), "html", null, true);
            yield "\">Voir</a>
            <a href=\"";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("programme_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["programme"], "id", [], "any", false, false, false, 15)]), "html", null, true);
            yield "\">Modifier</a>
            <a href=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("programme_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["programme"], "id", [], "any", false, false, false, 16)]), "html", null, true);
            yield "\">Supprimer</a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['programme'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "</ul>

<a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("programme_new");
        yield "\">Ajouter un nouveau programme</a>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "programme/index.html.twig";
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
        return array (  103 => 21,  99 => 19,  90 => 16,  86 => 15,  82 => 14,  77 => 12,  73 => 11,  69 => 10,  65 => 9,  61 => 8,  58 => 7,  54 => 6,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/programme/index.html.twig #}

<h1>Liste des Programmes</h1>

<ul>
    {% for programme in programmes %}
        <li>
            <strong>Nom:</strong> {{ programme.nom }} <br>
             <strong>Lieu:</strong> {{ programme.lieu }} <br>
             <strong>Date début:</strong> {{ programme.dateDebut|date('d/m/Y H:i') }} <br>
            <strong>Date fin:</strong> {{ programme.dateFin|date('d/m/Y H:i') }} <br>
            <strong>Description:</strong> {{ programme.description }} <br>

            <a href=\"{{ path('programme_show', {'id': programme.id}) }}\">Voir</a>
            <a href=\"{{ path('programme_edit', {'id': programme.id}) }}\">Modifier</a>
            <a href=\"{{ path('programme_delete', {'id': programme.id}) }}\">Supprimer</a>
        </li>
    {% endfor %}
</ul>

<a href=\"{{ path('programme_new') }}\">Ajouter un nouveau programme</a>
", "programme/index.html.twig", "C:\\Users\\riadh.chawachi\\Desktop\\TuniVibe-abir\\templates\\programme\\index.html.twig");
    }
}
