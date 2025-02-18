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

/* user_workshop/show.html.twig */
class __TwigTemplate_f5cdc0e8d18fbf00173d79fd9bfee5ce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_workshop/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_workshop/show.html.twig"));

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
        // line 19
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 30
        yield "
</head>

<body>

  <!-- ======= Header ======= -->
  <header id=\"header-box\" >
    <div class=\"container-fluid d-flex justify-content-between align-items-center\">
        <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
        yield "\" class=\"btn btn-secondary\"> Workshops</a>
      <!-- Uncomment below if you prefer to use an image logo -->
      

      <nav class=\"nav-menu d-none d-lg-block\">

      <!-- Titre et description du workshop sous le box -->
      <div class=\"workshop-details\" style=\"margin-top: 2cm;\">
        <h3><strong>";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 46, $this->source); })()), "titre", [], "any", false, false, false, 46), "html", null, true);
        yield "</strong></h3>
        <p>";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 47, $this->source); })()), "description", [], "any", false, false, false, 47), "html", null, true);
        yield "</p>
      </div>
    </nav><!-- .nav-menu -->
    <div class=\"header-user-profile\">
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section >





";
        // line 60
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 161
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
        // line 180
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 195
        yield "
</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 19
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

        // line 20
        yield "  <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/icofont/icofont.min.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/owl.carousel/assets/owl.carousel.min.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/boxicons/css/boxicons.min.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/venobox/venobox.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/aos/aos.css"), "html", null, true);
        yield "\">

  <!-- Template Main CSS File -->
  <link rel=\"stylesheet\" href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\">
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 60
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

        // line 61
        yield "  <!-- Portfolio Details Section -->
  <section id=\"portfolio-details\" class=\"portfolio-details section\">
    <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

      <div class=\"row gy-4\">
        <!-- Conteneur pour l'image -->
        <div class=\"col-lg-4\" style=\"margin-bottom: 3cm;\">
          <div class=\"portfolio-details-slider swiper init-swiper\" style=\"box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);\">
            <script type=\"application/json\" class=\"swiper-config\">
              {
                \"loop\": true,
                \"speed\": 600,
                \"autoplay\": {
                  \"delay\": 5000
                },
                \"slidesPerView\": \"auto\",
                \"pagination\": {
                  \"el\": \".swiper-pagination\",
                  \"type\": \"bullets\",
                  \"clickable\": true
                }
              }
            </script>

            <div class=\"swiper-wrapper align-items-center\">
              ";
        // line 86
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 86, $this->source); })()), "image", [], "any", false, false, false, 86)) {
            // line 87
            yield "                <div class=\"swiper-slide\">
                  <img src=\"";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 88, $this->source); })()), "image", [], "any", false, false, false, 88))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 88, $this->source); })()), "titre", [], "any", false, false, false, 88), "html", null, true);
            yield "\" style=\"width: 100%; height: 100%; object-fit: cover; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);\">
                </div>
              ";
        } else {
            // line 91
            yield "                <p>Pas d'image disponible pour ce workshop.</p>
              ";
        }
        // line 93
        yield "            </div>
            <div class=\"swiper-pagination\"></div>
          </div>
        </div>

        <!-- Conteneur pour le box des informations -->
        <div class=\"col-lg-8\">
          <div class=\"portfolio-info\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"info-box\" style=\"border: 1px solid #dcdcdc; padding: 20px; border-radius: 10px; background-color: #fff; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);\">
              <!-- Titre centré avec ligne en dessous -->
              <h3 style=\"text-align: center; margin-bottom: 20px;\">Informations du Workshop</h3>
              <hr style=\"border: 1px solid #ddd; margin-bottom: 20px;\">
              <ul style=\"list-style-type: none; padding: 0; margin-bottom: 20px;\">
                <li><strong>Catégorie:</strong> ";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 106, $this->source); })()), "categorie", [], "any", false, false, false, 106), "nom", [], "any", false, false, false, 106), "html", null, true);
        yield "</li>
                <li><strong>Date de début:</strong> ";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 107, $this->source); })()), "dateDebut", [], "any", false, false, false, 107), "d/m/Y H:i"), "html", null, true);
        yield "</li>
                <li><strong>Date de fin:</strong> ";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 108, $this->source); })()), "dateFin", [], "any", false, false, false, 108), "d/m/Y H:i"), "html", null, true);
        yield "</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <hr>









<h1 class=\"text-center my-4\">Liste des Séances</h1> 
<div class=\"container\">
    <div class=\"row\">
        ";
        // line 128
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 128, $this->source); })()), "seances", [], "any", false, false, false, 128)) > 0)) {
            // line 129
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 129, $this->source); })()), "seances", [], "any", false, false, false, 129));
            foreach ($context['_seq'] as $context["_key"] => $context["seance"]) {
                // line 130
                yield "                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card shadow-lg border-2 rounded-lg p-3\">
                        <!-- Information de la séance -->
                        <div class=\"card-body text-center\">
                            <h5 class=\"card-title font-weight-bold\">";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "titre", [], "any", false, false, false, 134), "html", null, true);
                yield "</h5>
                            <p class=\"card-text\"><strong>Date:</strong> ";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "date", [], "any", false, false, false, 135), "d/m/Y"), "html", null, true);
                yield "</p>
                            <p class=\"card-text\"><strong>Heure:</strong> ";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "temps", [], "any", false, false, false, 136), "H:i"), "html", null, true);
                yield "</p>
                            <p class=\"card-text\"><strong>Durée:</strong> ";
                // line 137
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["seance"], "duree", [], "any", false, false, false, 137), "html", null, true);
                yield " Heure</p>
                            
                            <!-- Bouton caméra -->
                            <a href=\"#\" class=\"btn btn-primary mt-3\">
                                <i class=\"fas fa-camera\"></i> Rejoindre
                            </a>
                        </div>
                    </div>
                </div><!-- End Seance Card -->
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['seance'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            yield "        ";
        } else {
            // line 148
            yield "            <div class=\"col-12\">
                <p class=\"text-center\">Aucune séance enregistrée pour ce workshop.</p>
            </div>
        ";
        }
        // line 152
        yield "    </div>
</div>




    </div>
  </section><!-- /Portfolio Details Section -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 180
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

        // line 181
        yield "  <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/jquery/jquery.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/jquery.easing/jquery.easing.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/php-email-form/validate.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/waypoints/jquery.waypoints.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/counterup/counterup.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/owl.carousel/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/venobox/venobox.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/aos/aos.js"), "html", null, true);
        yield "\"></script>

  <!-- Template Main JS File -->
  <script src=\"";
        // line 193
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
        return "user_workshop/show.html.twig";
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
        return array (  435 => 193,  429 => 190,  425 => 189,  421 => 188,  417 => 187,  413 => 186,  409 => 185,  405 => 184,  401 => 183,  397 => 182,  392 => 181,  379 => 180,  360 => 152,  354 => 148,  351 => 147,  335 => 137,  331 => 136,  327 => 135,  323 => 134,  317 => 130,  312 => 129,  310 => 128,  287 => 108,  283 => 107,  279 => 106,  264 => 93,  260 => 91,  252 => 88,  249 => 87,  247 => 86,  220 => 61,  207 => 60,  194 => 28,  188 => 25,  184 => 24,  180 => 23,  176 => 22,  172 => 21,  167 => 20,  154 => 19,  139 => 195,  137 => 180,  116 => 161,  114 => 60,  98 => 47,  94 => 46,  83 => 38,  73 => 30,  71 => 19,  51 => 1,);
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
  <header id=\"header-box\" >
    <div class=\"container-fluid d-flex justify-content-between align-items-center\">
        <a href=\"{{ path('user_index') }}\" class=\"btn btn-secondary\"> Workshops</a>
      <!-- Uncomment below if you prefer to use an image logo -->
      

      <nav class=\"nav-menu d-none d-lg-block\">

      <!-- Titre et description du workshop sous le box -->
      <div class=\"workshop-details\" style=\"margin-top: 2cm;\">
        <h3><strong>{{ workshop.titre }}</strong></h3>
        <p>{{ workshop.description }}</p>
      </div>
    </nav><!-- .nav-menu -->
    <div class=\"header-user-profile\">
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section >





{% block body %}
  <!-- Portfolio Details Section -->
  <section id=\"portfolio-details\" class=\"portfolio-details section\">
    <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

      <div class=\"row gy-4\">
        <!-- Conteneur pour l'image -->
        <div class=\"col-lg-4\" style=\"margin-bottom: 3cm;\">
          <div class=\"portfolio-details-slider swiper init-swiper\" style=\"box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);\">
            <script type=\"application/json\" class=\"swiper-config\">
              {
                \"loop\": true,
                \"speed\": 600,
                \"autoplay\": {
                  \"delay\": 5000
                },
                \"slidesPerView\": \"auto\",
                \"pagination\": {
                  \"el\": \".swiper-pagination\",
                  \"type\": \"bullets\",
                  \"clickable\": true
                }
              }
            </script>

            <div class=\"swiper-wrapper align-items-center\">
              {% if workshop.image %}
                <div class=\"swiper-slide\">
                  <img src=\"{{ asset('uploads/images/' ~ workshop.image) }}\" alt=\"{{ workshop.titre }}\" style=\"width: 100%; height: 100%; object-fit: cover; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);\">
                </div>
              {% else %}
                <p>Pas d'image disponible pour ce workshop.</p>
              {% endif %}
            </div>
            <div class=\"swiper-pagination\"></div>
          </div>
        </div>

        <!-- Conteneur pour le box des informations -->
        <div class=\"col-lg-8\">
          <div class=\"portfolio-info\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"info-box\" style=\"border: 1px solid #dcdcdc; padding: 20px; border-radius: 10px; background-color: #fff; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);\">
              <!-- Titre centré avec ligne en dessous -->
              <h3 style=\"text-align: center; margin-bottom: 20px;\">Informations du Workshop</h3>
              <hr style=\"border: 1px solid #ddd; margin-bottom: 20px;\">
              <ul style=\"list-style-type: none; padding: 0; margin-bottom: 20px;\">
                <li><strong>Catégorie:</strong> {{ workshop.categorie.nom }}</li>
                <li><strong>Date de début:</strong> {{ workshop.dateDebut|date('d/m/Y H:i') }}</li>
                <li><strong>Date de fin:</strong> {{ workshop.dateFin|date('d/m/Y H:i') }}</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <hr>









<h1 class=\"text-center my-4\">Liste des Séances</h1> 
<div class=\"container\">
    <div class=\"row\">
        {% if workshop.seances|length > 0 %}
            {% for seance in workshop.seances %}
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card shadow-lg border-2 rounded-lg p-3\">
                        <!-- Information de la séance -->
                        <div class=\"card-body text-center\">
                            <h5 class=\"card-title font-weight-bold\">{{ seance.titre }}</h5>
                            <p class=\"card-text\"><strong>Date:</strong> {{ seance.date|date('d/m/Y') }}</p>
                            <p class=\"card-text\"><strong>Heure:</strong> {{ seance.temps|date('H:i') }}</p>
                            <p class=\"card-text\"><strong>Durée:</strong> {{ seance.duree }} Heure</p>
                            
                            <!-- Bouton caméra -->
                            <a href=\"#\" class=\"btn btn-primary mt-3\">
                                <i class=\"fas fa-camera\"></i> Rejoindre
                            </a>
                        </div>
                    </div>
                </div><!-- End Seance Card -->
            {% endfor %}
        {% else %}
            <div class=\"col-12\">
                <p class=\"text-center\">Aucune séance enregistrée pour ce workshop.</p>
            </div>
        {% endif %}
    </div>
</div>




    </div>
  </section><!-- /Portfolio Details Section -->
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
", "user_workshop/show.html.twig", "C:\\project\\symfony\\PROJETPI\\TuniVibe\\templates\\user_workshop\\show.html.twig");
    }
}
