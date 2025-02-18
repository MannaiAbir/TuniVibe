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

/* hebergement/show.html.twig */
class __TwigTemplate_3d597ce52616bc39b8dc394eedefcce8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hebergement/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hebergement/show.html.twig"));

        $this->parent = $this->loadTemplate("base3.html.twig", "hebergement/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "  <section>
    <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">
      <h1 class=\"text-center mb-4\">Détails de l'Hébergement : ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), "html", null, true);
        yield "</h1>

      <div style=\"display: flex; justify-content: flex-start; align-items: flex-start; gap: 20px;\">
        <!-- Affichage de l'image à gauche -->
        ";
        // line 10
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 10, $this->source); })()), "image", [], "any", false, false, false, 10)) {
            // line 11
            yield "          <div class=\"text-center mb-4\">
            <img src=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 12, $this->source); })()), "image", [], "any", false, false, false, 12))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), "html", null, true);
            yield "\" style=\"max-width: 300px; border-radius: 10px;\">
          </div>
        ";
        }
        // line 15
        yield "
        <!-- Informations de l'hébergement -->
        <div>
          <p><strong>Titre Hébergement:</strong> ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), "html", null, true);
        yield "</p>
          <p><strong>Type :</strong> ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 19, $this->source); })()), "type", [], "any", false, false, false, 19), "html", null, true);
        yield "</p>
          <p><strong>Adresse :</strong> ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 20, $this->source); })()), "adresse", [], "any", false, false, false, 20), "html", null, true);
        yield "</p>
          <p><strong>Capacité :</strong> ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 21, $this->source); })()), "capacite", [], "any", false, false, false, 21), "html", null, true);
        yield "</p> <!-- Mis à jour -->
          <p><strong>Description :</strong> ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 22, $this->source); })()), "description", [], "any", false, false, false, 22), "html", null, true);
        yield "</p>

          <!-- Boutons de suppression et modification -->
          <div class=\"mt-3\">
            <form action=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hebergement_delete", ["idhebergement" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 26, $this->source); })()), "idhebergement", [], "any", false, false, false, 26)]), "html", null, true);
        yield "\" method=\"post\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet hébergement ?');\">
              <input type=\"hidden\" name=\"_token\" value=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 27, $this->source); })()), "idhebergement", [], "any", false, false, false, 27))), "html", null, true);
        yield "\">
              <button type=\"submit\" class=\"btn btn-primary\"><i class=\"bi bi-trash\"></i> Supprimer</button>
            </form>

            <a href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hebergement_edit", ["idhebergement" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 31, $this->source); })()), "idhebergement", [], "any", false, false, false, 31)]), "html", null, true);
        yield "\" class=\"btn btn-primary\"><i class=\"bi bi-pencil\"></i> Modifier</a>
          </div>
        </div>
      </div>

      <hr>

      <!-- Liste des Programmes Associés -->
      <h3>Programmes associés :</h3>
      <ul class=\"list-group\">
        ";
        // line 41
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["programmes"]) || array_key_exists("programmes", $context) ? $context["programmes"] : (function () { throw new RuntimeError('Variable "programmes" does not exist.', 41, $this->source); })()))) {
            // line 42
            yield "          <li class=\"list-group-item\">Aucun programme associé</li>
        ";
        } else {
            // line 44
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["programmes"]) || array_key_exists("programmes", $context) ? $context["programmes"] : (function () { throw new RuntimeError('Variable "programmes" does not exist.', 44, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["programme"]) {
                // line 45
                yield "            <li class=\"list-group-item\">
              <strong>Nom :</strong> ";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["programme"], "nom", [], "any", false, false, false, 46), "html", null, true);
                yield " <br>
              <strong>Lieu :</strong> ";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["programme"], "lieu", [], "any", false, false, false, 47), "html", null, true);
                yield " <br>

              <strong>Date début :</strong> ";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["programme"], "dateDebut", [], "any", false, false, false, 49), "d/m/Y H:i"), "html", null, true);
                yield " <br>
              <strong>Date fin :</strong> ";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["programme"], "dateFin", [], "any", false, false, false, 50), "d/m/Y H:i"), "html", null, true);
                yield " <br>
              <strong>Description :</strong> ";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["programme"], "description", [], "any", false, false, false, 51), "html", null, true);
                yield " <br>

     <a href=\"";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("programme_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["programme"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                yield "\" class=\"btn btn-primary\">
    <i class=\"bi bi-pencil\"></i> Modifier
</a>
<form method=\"post\" action=\"";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("programme_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["programme"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression de ce programme ?');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["programme"], "id", [], "any", false, false, false, 57))), "html", null, true);
                yield "\">
    <button type=\"submit\" class=\"btn btn-primary\">
        <i class=\"bi bi-trash\"></i> Supprimer
    </button>
</form>
            </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['programme'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            yield "        ";
        }
        // line 65
        yield "      </ul>

      <!-- Ajouter un programme -->
      <a href=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("programme_new", ["hebergementId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["hebergement"]) || array_key_exists("hebergement", $context) ? $context["hebergement"] : (function () { throw new RuntimeError('Variable "hebergement" does not exist.', 68, $this->source); })()), "idhebergement", [], "any", false, false, false, 68)]), "html", null, true);
        yield "\" class=\"btn btn-primary mt-3\"><i class=\"bi bi-plus-circle\"></i> Ajouter un programme</a>
    </div>
  </section>

  <!-- Footer et autres parties HTML ici... -->

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
        return "hebergement/show.html.twig";
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
        return array (  219 => 68,  214 => 65,  211 => 64,  198 => 57,  194 => 56,  188 => 53,  183 => 51,  179 => 50,  175 => 49,  170 => 47,  166 => 46,  163 => 45,  158 => 44,  154 => 42,  152 => 41,  139 => 31,  132 => 27,  128 => 26,  121 => 22,  117 => 21,  113 => 20,  109 => 19,  105 => 18,  100 => 15,  92 => 12,  89 => 11,  87 => 10,  80 => 6,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base3.html.twig' %}

{% block body %}
  <section>
    <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">
      <h1 class=\"text-center mb-4\">Détails de l'Hébergement : {{ hebergement.nom }}</h1>

      <div style=\"display: flex; justify-content: flex-start; align-items: flex-start; gap: 20px;\">
        <!-- Affichage de l'image à gauche -->
        {% if hebergement.image %}
          <div class=\"text-center mb-4\">
            <img src=\"{{ asset('uploads/images/' ~ hebergement.image) }}\" alt=\"{{ hebergement.nom }}\" style=\"max-width: 300px; border-radius: 10px;\">
          </div>
        {% endif %}

        <!-- Informations de l'hébergement -->
        <div>
          <p><strong>Titre Hébergement:</strong> {{ hebergement.nom }}</p>
          <p><strong>Type :</strong> {{ hebergement.type }}</p>
          <p><strong>Adresse :</strong> {{ hebergement.adresse }}</p>
          <p><strong>Capacité :</strong> {{ hebergement.capacite }}</p> <!-- Mis à jour -->
          <p><strong>Description :</strong> {{ hebergement.description }}</p>

          <!-- Boutons de suppression et modification -->
          <div class=\"mt-3\">
            <form action=\"{{ path('hebergement_delete', {'idhebergement': hebergement.idhebergement}) }}\" method=\"post\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet hébergement ?');\">
              <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ hebergement.idhebergement) }}\">
              <button type=\"submit\" class=\"btn btn-primary\"><i class=\"bi bi-trash\"></i> Supprimer</button>
            </form>

            <a href=\"{{ path('hebergement_edit', {'idhebergement': hebergement.idhebergement}) }}\" class=\"btn btn-primary\"><i class=\"bi bi-pencil\"></i> Modifier</a>
          </div>
        </div>
      </div>

      <hr>

      <!-- Liste des Programmes Associés -->
      <h3>Programmes associés :</h3>
      <ul class=\"list-group\">
        {% if programmes is empty %}
          <li class=\"list-group-item\">Aucun programme associé</li>
        {% else %}
          {% for programme in programmes %}
            <li class=\"list-group-item\">
              <strong>Nom :</strong> {{ programme.nom }} <br>
              <strong>Lieu :</strong> {{ programme.lieu}} <br>

              <strong>Date début :</strong> {{ programme.dateDebut|date('d/m/Y H:i') }} <br>
              <strong>Date fin :</strong> {{ programme.dateFin|date('d/m/Y H:i') }} <br>
              <strong>Description :</strong> {{ programme.description }} <br>

     <a href=\"{{ path('programme_edit', {'id': programme.id}) }}\" class=\"btn btn-primary\">
    <i class=\"bi bi-pencil\"></i> Modifier
</a>
<form method=\"post\" action=\"{{ path('programme_delete', {'id': programme.id}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression de ce programme ?');\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ programme.id) }}\">
    <button type=\"submit\" class=\"btn btn-primary\">
        <i class=\"bi bi-trash\"></i> Supprimer
    </button>
</form>
            </li>
          {% endfor %}
        {% endif %}
      </ul>

      <!-- Ajouter un programme -->
      <a href=\"{{ path('programme_new', {'hebergementId': hebergement.idhebergement}) }}\" class=\"btn btn-primary mt-3\"><i class=\"bi bi-plus-circle\"></i> Ajouter un programme</a>
    </div>
  </section>

  <!-- Footer et autres parties HTML ici... -->

{% endblock %}
", "hebergement/show.html.twig", "C:\\Users\\riadh.chawachi\\Desktop\\TuniVibe-abir\\templates\\hebergement\\show.html.twig");
    }
}
