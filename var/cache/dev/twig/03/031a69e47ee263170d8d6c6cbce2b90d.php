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

/* categorie/index.html.twig */
class __TwigTemplate_059359f4f1270e7c14695278df3658db extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/index.html.twig"));

        // line 1
        yield "

";
        // line 3
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 4
        yield "
";
        // line 5
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
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

        yield "Liste des Catégories";
        
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
        yield "    <div class=\"container mt-4\">
        <h2>Liste des Catégories</h2>
        <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_new");
        yield "\" class=\"btn btn-success mb-3\">Ajouter une Catégorie</a>

        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 20
            yield "                    <tr>
                        <td>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 21), "html", null, true);
            yield "</td>
                        <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
                        <td>
                            <a href=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">Voir</a>
                            <a href=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">Modifier</a>
                            <form method=\"post\" action=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            yield "\" style=\"display:inline;\"
                                  onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette catégorie ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 28))), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 37
        if (!$context['_iterated']) {
            // line 34
            yield "                    <tr>
                        <td colspan=\"3\">Aucune catégorie trouvée.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "            </tbody>
        </table>
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
        return "categorie/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  175 => 38,  166 => 34,  164 => 37,  154 => 28,  149 => 26,  145 => 25,  141 => 24,  136 => 22,  132 => 21,  129 => 20,  124 => 19,  110 => 8,  106 => 6,  93 => 5,  70 => 3,  59 => 5,  56 => 4,  54 => 3,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("

{% block title %}Liste des Catégories{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h2>Liste des Catégories</h2>
        <a href=\"{{ path('categorie_new') }}\" class=\"btn btn-success mb-3\">Ajouter une Catégorie</a>

        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for categorie in categories %}
                    <tr>
                        <td>{{ categorie.id }}</td>
                        <td>{{ categorie.nom }}</td>
                        <td>
                            <a href=\"{{ path('categorie_show', {'id': categorie.id}) }}\" class=\"btn btn-info btn-sm\">Voir</a>
                            <a href=\"{{ path('categorie_edit', {'id': categorie.id}) }}\" class=\"btn btn-warning btn-sm\">Modifier</a>
                            <form method=\"post\" action=\"{{ path('categorie_delete', {'id': categorie.id}) }}\" style=\"display:inline;\"
                                  onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette catégorie ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ categorie.id) }}\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"3\">Aucune catégorie trouvée.</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}
", "categorie/index.html.twig", "C:\\project\\symfony\\PROJETPI\\TuniVibe\\templates\\categorie\\index.html.twig");
    }
}
