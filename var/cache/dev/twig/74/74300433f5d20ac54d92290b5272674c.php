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

/* base2.html.twig */
class __TwigTemplate_d7b16915fa8795ff7fa258c3a4207469 extends Template
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
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 1
        yield "<!doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>Topic Listing Contact Page</title>



        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>

        <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap\" rel=\"stylesheet\">

         <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css\" integrity=\"sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
                         






        <link href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

        <link href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/css/bootstrap-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

        <link href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/css/templatemo-topic-listing.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/style.css"), "html", null, true);
        yield "\">
        

<!--

TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

-->
    </head>
    
    <body class=\"topics-listing-page\" id=\"top\">

        <main>
<nav class=\"navbar navbar-expand-lg\">
    <div class=\"container\">
        <a class=\"logo\"><img src=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/tunivibe.png"), "html", null, true);
        yield "\" alt=\"TuniVibe Logo\" class=\"logo-img\"></a>
        <a class=\"navbar-brand\" href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
            <span>TuniVibe</span>
        </a>

        <div class=\"d-lg-none ms-auto me-4\">
            <a href=\"#top\" class=\"navbar-icon bi-person smoothscroll\"></a>
        </div>

        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ms-lg-5 me-lg-auto\">
                ";
        // line 65
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65)) {
            // line 66
            yield "                    <li class=\"nav-item\">
                        <a class=\"nav-link click-scroll\" href=\"";
            // line 67
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_acceuil");
            yield "\">Acceuil</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link click-scroll\" href=\"#\">Workshops</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link click-scroll\" href=\"#\">Événements</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link click-scroll\" href=\"";
            // line 76
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestionhebergement_index");
            yield "\">Hébergements</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link click-scroll\" href=\"#\">Vlogs</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link click-scroll\" href=\"#\">Bibliothèque</a>
                    </li>
                ";
        } else {
            // line 85
            yield "                    <ul class=\"navbar-nav ms-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 87
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            yield "\">Home</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 90
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Login</a>
                        </li>
                        <li class=\"nav-item\">
                             <a class=\"nav-link\" href=\"";
            // line 93
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">Register</a>
                       </li>
</ul>
                ";
        }
        // line 97
        yield "            </ul>

            ";
        // line 99
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "user", [], "any", false, false, false, 99)) {
            // line 100
            yield "                <button id=\"toggleSidebar\" class=\"toggle-btn\">☰</button>
                <div id=\"sidebar\" class=\"sidebar\">
                    <ul class=\"nav flex-column\">
                        <li class=\"nav-item\">
                            <a href=\"";
            // line 104
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user");
            yield "\" class=\"nav-link\">
                                <i class=\"bi bi-person\"></i> Profile
                            </a>
                        </li>
                        ";
            // line 108
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EDITOR")) {
                // line 109
                yield "                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">Mes Workshops</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">Mes Événements</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
                // line 116
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hebergement_index");
                yield "\" class=\"nav-link\">Mes Hébergements</a>
                            </li>
                        ";
            }
            // line 119
            yield "                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link\">Mes Vlogs</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link\">Ma Bibliothèque</a>
                        </li>
                        <li class=\"nav-item\">
                            <form action=\"";
            // line 126
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" method=\"post\" class=\"d-inline\">
                                <button type=\"submit\" class=\"nav-link btn btn-link\" >
                                    Déconnexion
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            ";
        }
        // line 135
        yield "        </div>
    </div>
</nav>

             ";
        // line 139
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 144
        yield "
            <section class=\"section-padding section-bg\">
              ";
        // line 146
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 151
        yield "            </section>
        </main>

        <footer class=\"site-footer section-padding\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-lg-3 col-12 mb-4 pb-2\">
                     <a class=\"logo\"><img src=\"";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/tunivibe.png"), "html", null, true);
        yield "\" alt=\"TuniVibe Logo\" class=\"logo-img\"></a>
                    <a class=\"navbar-brand\" href=\"#\">
                        
                        <span>TuniVibe</span>
                    </a>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-6\">
                        <h6 class=\"site-footer-title mb-3\">Resources</h6>

                        <ul class=\"site-footer-links\">
                            <li class=\"site-footer-link-item\">
                                <a href=\"#\" class=\"site-footer-link\">Home</a>
                            </li>

                            <li class=\"site-footer-link-item\">
                                <a href=\"#\" class=\"site-footer-link\">How it works</a>
                            </li>

                            <li class=\"site-footer-link-item\">
                                <a href=\"#\" class=\"site-footer-link\">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-6 mb-4 mb-lg-0\">
                        <h6 class=\"site-footer-title mb-3\">Information</h6>

                        <p class=\"text-white d-flex mb-1\">
                            <a href=\"tel: 305-240-9671\" class=\"site-footer-link\">
                                55-760-128
                            </a>
                        </p>

                        <p class=\"text-white d-flex\">
                            <a href=\"mailto:info@company.com\" class=\"site-footer-link\">
                                tunivibe@gmail.com
                            </a>
                        </p>



                </div>
            </div>
        </footer>

        <script src=\"";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/js/jquery.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/js/jquery.sticky.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/js/custom.js"), "html", null, true);
        yield "\"></script>

    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 139
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

        // line 140
        yield "


               ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 146
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

        // line 147
        yield "


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
        return "base2.html.twig";
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
        return array (  383 => 147,  370 => 146,  356 => 140,  343 => 139,  328 => 208,  324 => 207,  320 => 206,  316 => 205,  267 => 159,  257 => 151,  255 => 146,  251 => 144,  249 => 139,  243 => 135,  231 => 126,  222 => 119,  216 => 116,  207 => 109,  205 => 108,  198 => 104,  192 => 100,  190 => 99,  186 => 97,  179 => 93,  173 => 90,  167 => 87,  163 => 85,  151 => 76,  139 => 67,  136 => 66,  134 => 65,  117 => 51,  113 => 50,  93 => 33,  89 => 32,  84 => 30,  79 => 28,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>Topic Listing Contact Page</title>



        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>

        <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap\" rel=\"stylesheet\">

         <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css\" integrity=\"sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
                         






        <link href=\"{{ asset('content/css/bootstrap.min.css')}}\" rel=\"stylesheet\">

        <link href=\"{{ asset('content/css/bootstrap-icons.css')}}\" rel=\"stylesheet\">

        <link href=\"{{ asset('content/css/templatemo-topic-listing.css')}}\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"{{ asset('front/css/style.css') }}\">
        

<!--

TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

-->
    </head>
    
    <body class=\"topics-listing-page\" id=\"top\">

        <main>
<nav class=\"navbar navbar-expand-lg\">
    <div class=\"container\">
        <a class=\"logo\"><img src=\"{{ asset('front/img/tunivibe.png') }}\" alt=\"TuniVibe Logo\" class=\"logo-img\"></a>
        <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">
            <span>TuniVibe</span>
        </a>

        <div class=\"d-lg-none ms-auto me-4\">
            <a href=\"#top\" class=\"navbar-icon bi-person smoothscroll\"></a>
        </div>

        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ms-lg-5 me-lg-auto\">
                {% if app.user %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link click-scroll\" href=\"{{ path('app_acceuil') }}\">Acceuil</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link click-scroll\" href=\"#\">Workshops</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link click-scroll\" href=\"#\">Événements</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link click-scroll\" href=\"{{ path('gestionhebergement_index') }}\">Hébergements</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link click-scroll\" href=\"#\">Vlogs</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link click-scroll\" href=\"#\">Bibliothèque</a>
                    </li>
                {% else %}
                    <ul class=\"navbar-nav ms-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_home') }}\">Home</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_login') }}\">Login</a>
                        </li>
                        <li class=\"nav-item\">
                             <a class=\"nav-link\" href=\"{{ path('app_register') }}\">Register</a>
                       </li>
</ul>
                {% endif %}
            </ul>

            {% if app.user %}
                <button id=\"toggleSidebar\" class=\"toggle-btn\">☰</button>
                <div id=\"sidebar\" class=\"sidebar\">
                    <ul class=\"nav flex-column\">
                        <li class=\"nav-item\">
                            <a href=\"{{ path('app_user') }}\" class=\"nav-link\">
                                <i class=\"bi bi-person\"></i> Profile
                            </a>
                        </li>
                        {% if is_granted('ROLE_EDITOR') %}
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">Mes Workshops</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">Mes Événements</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ path('hebergement_index') }}\" class=\"nav-link\">Mes Hébergements</a>
                            </li>
                        {% endif %}
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link\">Mes Vlogs</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link\">Ma Bibliothèque</a>
                        </li>
                        <li class=\"nav-item\">
                            <form action=\"{{ path('app_logout') }}\" method=\"post\" class=\"d-inline\">
                                <button type=\"submit\" class=\"nav-link btn btn-link\" >
                                    Déconnexion
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            {% endif %}
        </div>
    </div>
</nav>

             {% block header %}



               {% endblock %}

            <section class=\"section-padding section-bg\">
              {% block body %}



               {% endblock %}
            </section>
        </main>

        <footer class=\"site-footer section-padding\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-lg-3 col-12 mb-4 pb-2\">
                     <a class=\"logo\"><img src=\"{{ asset('front/img/tunivibe.png') }}\" alt=\"TuniVibe Logo\" class=\"logo-img\"></a>
                    <a class=\"navbar-brand\" href=\"#\">
                        
                        <span>TuniVibe</span>
                    </a>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-6\">
                        <h6 class=\"site-footer-title mb-3\">Resources</h6>

                        <ul class=\"site-footer-links\">
                            <li class=\"site-footer-link-item\">
                                <a href=\"#\" class=\"site-footer-link\">Home</a>
                            </li>

                            <li class=\"site-footer-link-item\">
                                <a href=\"#\" class=\"site-footer-link\">How it works</a>
                            </li>

                            <li class=\"site-footer-link-item\">
                                <a href=\"#\" class=\"site-footer-link\">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-6 mb-4 mb-lg-0\">
                        <h6 class=\"site-footer-title mb-3\">Information</h6>

                        <p class=\"text-white d-flex mb-1\">
                            <a href=\"tel: 305-240-9671\" class=\"site-footer-link\">
                                55-760-128
                            </a>
                        </p>

                        <p class=\"text-white d-flex\">
                            <a href=\"mailto:info@company.com\" class=\"site-footer-link\">
                                tunivibe@gmail.com
                            </a>
                        </p>



                </div>
            </div>
        </footer>

        <script src=\"{{ asset('content/js/jquery.min.js')}}\"></script>
        <script src=\"{{ asset('content/js/bootstrap.bundle.min.js')}}\"></script>
        <script src=\"{{ asset('content/js/jquery.sticky.js')}}\"></script>
        <script src=\"{{ asset('content/js/custom.js')}}\"></script>

    </body>
</html>", "base2.html.twig", "C:\\Users\\riadh.chawachi\\Desktop\\TuniVibe-abir - Copie\\templates\\base2.html.twig");
    }
}
