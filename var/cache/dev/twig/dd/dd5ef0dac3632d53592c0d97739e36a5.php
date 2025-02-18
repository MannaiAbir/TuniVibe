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

/* base.html.twig */
class __TwigTemplate_2d24a949b171c6be0012c1a2385bafe2 extends Template
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
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
  <header id=\"header\" class=\"fixed-top\">
    <div class=\"container-fluid d-flex justify-content-between align-items-center\">

      <h1 class=\"logo\"><a href=\"index.html\">Esprit</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      

      <nav class=\"nav-menu d-none d-lg-block\">
        <ul>
          <li class=\"active\"><a href=\"index.html\">Home</a></li>
          <li><a href=\"about.html\">About</a></li>
          <li><a href=\"resume.html\">Resume</a></li>
          <li><a href=\"services.html\">Services</a></li>
          <li><a href=\"portfolio.html\">Portfolio</a></li>
          <li><a href=\"contact.html\">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <div class=\"header-social-links\">
        <a href=\"#\" class=\"twitter\"><i class=\"icofont-twitter\"></i></a>
        <a href=\"#\" class=\"facebook\"><i class=\"icofont-facebook\"></i></a>
        <a href=\"#\" class=\"instagram\"><i class=\"icofont-instagram\"></i></a>
        <a href=\"#\" class=\"linkedin\"><i class=\"icofont-linkedin\"></i></i></a>
      </div>

    </div>

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"d-flex align-items-center\">
    <div class=\"container d-flex flex-column align-items-center\" data-aos=\"zoom-in\" data-aos-delay=\"100\">











































    

    </div>
  </section><!-- End Hero -->

  <!-- ======= Footer ======= -->
  <footer id=\"footer\">
    <div class=\"container\">
      <div class=\"copyright\">
        &copy; Copyright <strong><span>Esprit</span></strong>. All Rights Reserved
      </div>
      <div class=\"credits\">
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id=\"preloader\"></div>
  <a href=\"#\" class=\"back-to-top\"><i class=\"bx bx-up-arrow-alt\"></i></a>

  <!-- Libraries JS Files -->
    ";
        // line 134
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 149
        yield "
</body>

</html>";
        
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

    // line 134
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

        // line 135
        yield "  <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/jquery/jquery.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/jquery.easing/jquery.easing.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/php-email-form/validate.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/waypoints/jquery.waypoints.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/counterup/counterup.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/owl.carousel/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/venobox/venobox.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/aos/aos.js"), "html", null, true);
        yield "\"></script>

  <!-- Template Main JS File -->
  <script src=\"";
        // line 147
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
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  303 => 147,  297 => 144,  293 => 143,  289 => 142,  285 => 141,  281 => 140,  277 => 139,  273 => 138,  269 => 137,  265 => 136,  260 => 135,  247 => 134,  234 => 29,  228 => 26,  224 => 25,  220 => 24,  216 => 23,  212 => 22,  207 => 21,  194 => 20,  180 => 149,  178 => 134,  73 => 31,  71 => 20,  50 => 1,);
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
  <header id=\"header\" class=\"fixed-top\">
    <div class=\"container-fluid d-flex justify-content-between align-items-center\">

      <h1 class=\"logo\"><a href=\"index.html\">Esprit</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      

      <nav class=\"nav-menu d-none d-lg-block\">
        <ul>
          <li class=\"active\"><a href=\"index.html\">Home</a></li>
          <li><a href=\"about.html\">About</a></li>
          <li><a href=\"resume.html\">Resume</a></li>
          <li><a href=\"services.html\">Services</a></li>
          <li><a href=\"portfolio.html\">Portfolio</a></li>
          <li><a href=\"contact.html\">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <div class=\"header-social-links\">
        <a href=\"#\" class=\"twitter\"><i class=\"icofont-twitter\"></i></a>
        <a href=\"#\" class=\"facebook\"><i class=\"icofont-facebook\"></i></a>
        <a href=\"#\" class=\"instagram\"><i class=\"icofont-instagram\"></i></a>
        <a href=\"#\" class=\"linkedin\"><i class=\"icofont-linkedin\"></i></i></a>
      </div>

    </div>

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"d-flex align-items-center\">
    <div class=\"container d-flex flex-column align-items-center\" data-aos=\"zoom-in\" data-aos-delay=\"100\">











































    

    </div>
  </section><!-- End Hero -->

  <!-- ======= Footer ======= -->
  <footer id=\"footer\">
    <div class=\"container\">
      <div class=\"copyright\">
        &copy; Copyright <strong><span>Esprit</span></strong>. All Rights Reserved
      </div>
      <div class=\"credits\">
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
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

</html>", "base.html.twig", "C:\\project\\symfony\\PROJETPI\\TuniVibe\\templates\\base.html.twig");
    }
}
