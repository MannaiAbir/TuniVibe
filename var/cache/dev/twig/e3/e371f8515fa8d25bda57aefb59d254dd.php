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

/* user_workshop/index.html.twig */
class __TwigTemplate_b53378ecc87b4de941d19e78ad322c77 extends Template
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
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_workshop/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_workshop/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>Esprit Template - Index</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"img/favicon.png\" rel=\"icon\">
  <link href=\"img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- Libraries CSS Files -->
  ";
        // line 20
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 31
        yield "

</head>

<body>

  <!-- ======= Header ======= -->
  <header id=\"header\" >
    <div class=\"container-fluid d-flex justify-content-between align-items-center\">

      <h1 class=\"logo\"><a href=\"index.html\">TuniVibe</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      

      <nav class=\"nav-menu d-none d-lg-block\">
        <ul>
          <li><a href=\"about.html\">Home</a></li>
          <li class=\"active\"><a href=\"index.html\">Workshop</a></li>
          <li><a href=\"resume.html\">Evenement</a></li>
          <li><a href=\"services.html\">Hebergement</a></li>
          <li><a href=\"portfolio.html\">Vlog</a></li>
          <li><a href=\"contact.html\">Bibliiotheque</a></li>
        </ul>
      </nav><!-- .nav-menu -->

<div class=\"header-user-profile\">
  <a href=\"/profil\"> <!-- Remplacez '/profil' par le chemin vers le profil de l'utilisateur -->
    <div class=\"user-image\">
      
    </div>
  </a>
</div>


  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section >












";
        // line 81
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 107
        yield "










  </section><!-- End Hero -->

  <!-- ======= Footer ======= -->
  <footer id=\"footer\">
    <div class=\"container\">
      <div class=\"copyright\">
        &copy; Copyright <strong><span>TuniVibet</span></strong>. All Rights Reserved
      </div>
      <div class=\"credits\">
        Designed by <a href=\"https://bootstrapmade.com/\">Tunivibes</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id=\"preloader\"></div>
  <a href=\"#\" class=\"back-to-top\"><i class=\"bx bx-up-arrow-alt\"></i></a>

  <!-- Libraries JS Files -->
    ";
        // line 136
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 151
        yield "
</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 21
        yield "  <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/icofont/icofont.min.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/owl.carousel/assets/owl.carousel.min.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/boxicons/css/boxicons.min.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/venobox/venobox.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/aos/aos.css"), "html", null, true);
        yield "\">

  <!-- Template Main CSS File -->
  <link rel=\"stylesheet\" href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\">
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 81
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

        // line 82
        yield "    <h1 class=\"text-center my-4\">Liste des Workshops</h1>

    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["workshops"]) || array_key_exists("workshops", $context) ? $context["workshops"] : (function () { throw new RuntimeError('Variable "workshops" does not exist.', 86, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["workshop"]) {
            // line 87
            yield "                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card shadow-lg border-2 rounded-lg p-3\">
                        <!-- Image cliquable menant à la page 'show' -->
                        <a href=\"";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "id", [], "any", false, false, false, 90)]), "html", null, true);
            yield "\">
                            <img src=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "image", [], "any", false, false, false, 91))), "html", null, true);
            yield "\" class=\"card-img-top img-fluid rounded\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "titre", [], "any", false, false, false, 91), "html", null, true);
            yield "\">
                        </a>
                        <div class=\"card-body text-center\">
                            <h5 class=\"card-title font-weight-bold\">";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "titre", [], "any", false, false, false, 94), "html", null, true);
            yield "</h5>
                            <p class=\"card-text\"><strong>Catégorie :</strong> <span class=\"text-muted\">";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "categorie", [], "any", false, false, false, 95), "nom", [], "any", false, false, false, 95), "html", null, true);
            yield "</span></p>
                        </div>
                    </div>
                </div><!-- End Workshop Card -->
            ";
            $context['_iterated'] = true;
        }
        // line 103
        if (!$context['_iterated']) {
            // line 100
            yield "                <div class=\"col-12\">
                    <p class=\"text-center\">Aucun workshop trouvé.</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['workshop'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        yield "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 136
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 137
        yield "  <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/jquery/jquery.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/jquery.easing/jquery.easing.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/php-email-form/validate.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/waypoints/jquery.waypoints.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/counterup/counterup.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/owl.carousel/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/venobox/venobox.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/aos/aos.js"), "html", null, true);
        yield "\"></script>

  <!-- Template Main JS File -->
  <script src=\"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>
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
        return "user_workshop/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  363 => 149,  357 => 146,  353 => 145,  349 => 144,  345 => 143,  341 => 142,  337 => 141,  333 => 140,  329 => 139,  325 => 138,  320 => 137,  307 => 136,  294 => 104,  285 => 100,  283 => 103,  274 => 95,  270 => 94,  262 => 91,  258 => 90,  253 => 87,  248 => 86,  242 => 82,  229 => 81,  216 => 29,  210 => 26,  206 => 25,  202 => 24,  198 => 23,  194 => 22,  189 => 21,  176 => 20,  161 => 151,  159 => 136,  128 => 107,  126 => 81,  74 => 31,  72 => 20,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>Esprit Template - Index</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"img/favicon.png\" rel=\"icon\">
  <link href=\"img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- Libraries CSS Files -->
  {% block css %}
  <link rel=\"stylesheet\" href=\"{{ asset('libraries/bootstrap/css/bootstrap.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('libraries/icofont/icofont.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('libraries/owl.carousel/assets/owl.carousel.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('libraries/boxicons/css/boxicons.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('libraries/venobox/venobox.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('libraries/aos/aos.css') }}\">

  <!-- Template Main CSS File -->
  <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
  {% endblock %}


</head>

<body>

  <!-- ======= Header ======= -->
  <header id=\"header\" >
    <div class=\"container-fluid d-flex justify-content-between align-items-center\">

      <h1 class=\"logo\"><a href=\"index.html\">TuniVibe</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      

      <nav class=\"nav-menu d-none d-lg-block\">
        <ul>
          <li><a href=\"about.html\">Home</a></li>
          <li class=\"active\"><a href=\"index.html\">Workshop</a></li>
          <li><a href=\"resume.html\">Evenement</a></li>
          <li><a href=\"services.html\">Hebergement</a></li>
          <li><a href=\"portfolio.html\">Vlog</a></li>
          <li><a href=\"contact.html\">Bibliiotheque</a></li>
        </ul>
      </nav><!-- .nav-menu -->

<div class=\"header-user-profile\">
  <a href=\"/profil\"> <!-- Remplacez '/profil' par le chemin vers le profil de l'utilisateur -->
    <div class=\"user-image\">
      
    </div>
  </a>
</div>


  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section >












{% block body %}
    <h1 class=\"text-center my-4\">Liste des Workshops</h1>

    <div class=\"container\">
        <div class=\"row\">
            {% for workshop in workshops %}
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card shadow-lg border-2 rounded-lg p-3\">
                        <!-- Image cliquable menant à la page 'show' -->
                        <a href=\"{{ path('user_show', {'id': workshop.id}) }}\">
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











  </section><!-- End Hero -->

  <!-- ======= Footer ======= -->
  <footer id=\"footer\">
    <div class=\"container\">
      <div class=\"copyright\">
        &copy; Copyright <strong><span>TuniVibet</span></strong>. All Rights Reserved
      </div>
      <div class=\"credits\">
        Designed by <a href=\"https://bootstrapmade.com/\">Tunivibes</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id=\"preloader\"></div>
  <a href=\"#\" class=\"back-to-top\"><i class=\"bx bx-up-arrow-alt\"></i></a>

  <!-- Libraries JS Files -->
    {% block js %}
  <script src=\"{{ asset('libraries/jquery/jquery.min.js') }}\"></script>
  <script src=\"{{ asset('libraries/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
  <script src=\"{{ asset('libraries/jquery.easing/jquery.easing.min.js') }}\"></script>
  <script src=\"{{ asset('libraries/php-email-form/validate.js') }}\"></script>
  <script src=\"{{ asset('libraries/waypoints/jquery.waypoints.min.js') }}\"></script>
  <script src=\"{{ asset('libraries/counterup/counterup.min.js') }}\"></script>
  <script src=\"{{ asset('libraries/owl.carousel/owl.carousel.min.js') }}\"></script>
  <script src=\"{{ asset('libraries/isotope-layout/isotope.pkgd.min.js') }}\"></script>
  <script src=\"{{ asset('libraries/venobox/venobox.min.js') }}\"></script>
  <script src=\"{{ asset('libraries/aos/aos.js') }}\"></script>

  <!-- Template Main JS File -->
  <script src=\"{{ asset('js/main.js') }}\"></script>
    {% endblock %}

</body>

</html>
", "user_workshop/index.html.twig", "C:\\project\\symfony\\PROJETPI\\TuniVibe\\templates\\user_workshop\\index.html.twig");
    }
}
