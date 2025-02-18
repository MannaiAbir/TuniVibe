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

/* home/index.html.twig */
class __TwigTemplate_ca64c18a431bf7cf4f021193a270fa5b extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "home/index.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Home";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    

<div class=\"header-carousel owl-carousel\">
    <!-- Slide 1 -->
    <div class=\"header-carousel-item\">
        <img src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/cul1.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100\" alt=\"Image\">
        <div class=\"carousel-caption\">
            <div class=\"carousel-caption-content p-3\">
                <h5 class=\"text-white text-uppercase fw-bold mb-4\" style=\"letter-spacing: 3px;\">EXPÉRIENCE CULTURELLE</h5>
                <h1 class=\"display-1 text-capitalize text-white mb-4\">Découvrez le Monde avec TuniVibe</h1>
                <p class=\"mb-5 fs-5\">
                    Plongez dans une aventure culturelle unique et connectez-vous avec des personnes partageant les mêmes passions.
                </p>
                <a class=\"btn custom-carousel-btn rounded-pill py-3 px-5\" href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">Rejoindre la Communauté</a>
            </div>
        </div>
    </div>

    <!-- Slide 2 -->
    <div class=\"header-carousel-item\">
        <img src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/cul2.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100\" alt=\"Image\">
        <div class=\"carousel-caption\">
            <div class=\"carousel-caption-content p-3\">
                <h5 class=\"text-white text-uppercase fw-bold mb-4\" style=\"letter-spacing: 3px;\">EXPÉRIENCE SOCIALE</h5>
                <h1 class=\"display-1 text-capitalize text-white mb-4\">Rencontrez, Partagez, Échangez</h1>
                <p class=\"mb-5 fs-5 animated slideInDown\">
                    Participez à des événements, ateliers et rencontres enrichissantes avec notre communauté dynamique.
                </p>
                <a class=\"btn custom-carousel-btn rounded-pill py-3 px-5\" href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">Rejoindre la Communauté</a>
            </div>
        </div>
    </div>

    <!-- Slide 3 -->
    <div class=\"header-carousel-item\">
        <img src=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/cul3.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100\" alt=\"Image\">
        <div class=\"carousel-caption\">
            <div class=\"carousel-caption-content p-3\">
                <h5 class=\"text-white text-uppercase fw-bold mb-4\" style=\"letter-spacing: 3px;\">TUNIVIBE</h5>
                <h1 class=\"display-1 text-capitalize text-white mb-4\">Vivez des Moments Inoubliables</h1>
                <p class=\"mb-5 fs-5 animated slideInDown\">
                    Élargissez vos horizons à travers des voyages, des découvertes culturelles et des activités immersives.
                </p>
                <a class=\"btn custom-carousel-btn rounded-pill \" href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">Rejoindre la Communauté</a>
            </div>
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
        return "home/index.html.twig";
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
        return array (  160 => 50,  149 => 42,  139 => 35,  128 => 27,  118 => 20,  107 => 12,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/home/index.html.twig #}
{% extends 'base2.html.twig' %}

{% block title %}Home{% endblock %}

{% block body %}
    

<div class=\"header-carousel owl-carousel\">
    <!-- Slide 1 -->
    <div class=\"header-carousel-item\">
        <img src=\"{{ asset('front/img/cul1.jpg') }}\" class=\"img-fluid w-100\" alt=\"Image\">
        <div class=\"carousel-caption\">
            <div class=\"carousel-caption-content p-3\">
                <h5 class=\"text-white text-uppercase fw-bold mb-4\" style=\"letter-spacing: 3px;\">EXPÉRIENCE CULTURELLE</h5>
                <h1 class=\"display-1 text-capitalize text-white mb-4\">Découvrez le Monde avec TuniVibe</h1>
                <p class=\"mb-5 fs-5\">
                    Plongez dans une aventure culturelle unique et connectez-vous avec des personnes partageant les mêmes passions.
                </p>
                <a class=\"btn custom-carousel-btn rounded-pill py-3 px-5\" href=\"{{ path('app_register') }}\">Rejoindre la Communauté</a>
            </div>
        </div>
    </div>

    <!-- Slide 2 -->
    <div class=\"header-carousel-item\">
        <img src=\"{{ asset('front/img/cul2.jpg') }}\" class=\"img-fluid w-100\" alt=\"Image\">
        <div class=\"carousel-caption\">
            <div class=\"carousel-caption-content p-3\">
                <h5 class=\"text-white text-uppercase fw-bold mb-4\" style=\"letter-spacing: 3px;\">EXPÉRIENCE SOCIALE</h5>
                <h1 class=\"display-1 text-capitalize text-white mb-4\">Rencontrez, Partagez, Échangez</h1>
                <p class=\"mb-5 fs-5 animated slideInDown\">
                    Participez à des événements, ateliers et rencontres enrichissantes avec notre communauté dynamique.
                </p>
                <a class=\"btn custom-carousel-btn rounded-pill py-3 px-5\" href=\"{{ path('app_register') }}\">Rejoindre la Communauté</a>
            </div>
        </div>
    </div>

    <!-- Slide 3 -->
    <div class=\"header-carousel-item\">
        <img src=\"{{ asset('front/img/cul3.jpg') }}\" class=\"img-fluid w-100\" alt=\"Image\">
        <div class=\"carousel-caption\">
            <div class=\"carousel-caption-content p-3\">
                <h5 class=\"text-white text-uppercase fw-bold mb-4\" style=\"letter-spacing: 3px;\">TUNIVIBE</h5>
                <h1 class=\"display-1 text-capitalize text-white mb-4\">Vivez des Moments Inoubliables</h1>
                <p class=\"mb-5 fs-5 animated slideInDown\">
                    Élargissez vos horizons à travers des voyages, des découvertes culturelles et des activités immersives.
                </p>
                <a class=\"btn custom-carousel-btn rounded-pill \" href=\"{{ path('app_register') }}\">Rejoindre la Communauté</a>
            </div>
        </div>
    </div>
</div>


{% endblock %}





", "home/index.html.twig", "C:\\Users\\riadh.chawachi\\Desktop\\TuniVibe-abir\\templates\\home\\index.html.twig");
    }
}
