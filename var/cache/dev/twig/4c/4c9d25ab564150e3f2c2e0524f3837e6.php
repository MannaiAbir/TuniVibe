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

/* base3.html.twig */
class __TwigTemplate_01f9031a8b83be48dc7af105548689e3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base3.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base3.html.twig"));

        // line 1
        yield "<!doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>Topic Listing Contact Page</title>

        <!-- CSS FILES -->        
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>

        <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap\" rel=\"stylesheet\">

        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css\" integrity=\"sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />

        <link href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

        <link href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/css/bootstrap-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

        <link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/css/templatemo-topic-listing.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
          <link rel=\"stylesheet\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/style.css"), "html", null, true);
        yield "\">
<!--

TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

-->
    </head>
    
    <body class=\"topics-listing-page\" id=\"top\">

        <main>
           


            <header class=\"site-header d-flex flex-column justify-content-center align-items-center\">
                <div class=\"container\">
                    <div class=\"row align-items-center\">

                        <div class=\"col-lg-5 col-12\">
                            <nav aria-label=\"breadcrumb\">
                                <ol class=\"breadcrumb\">
                                    <a href=\"javascript:history.back()\" class=\"btn btn-secondary mt-3\">
                                        <i class=\"fa-solid fa-arrow-left\"></i> Retour
                                    </a>
                                </ol>
                            </nav>

                              ";
        // line 55
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 58
        yield "                        </div>

                    </div>
                </div>
            </header>




            <section class=\"section-padding section-bg\">
              ";
        // line 68
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 73
        yield "            </section>
        </main>

        <footer class=\"site-footer section-padding\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-lg-3 col-12 mb-4 pb-2\">
                        <a class=\"navbar-brand mb-2\" href=\"#\">
                            <i class=\"bi-back\"></i>
                            <span>Topic</span>
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
                                <a href=\"#\" class=\"site-footer-link\">FAQs</a>
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
                                305-240-9671
                            </a>
                        </p>

                        <p class=\"text-white d-flex\">
                            <a href=\"mailto:info@company.com\" class=\"site-footer-link\">
                                info@company.com
                            </a>
                        </p>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto\">
                        <div class=\"dropdown\">
                            <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            English</button>

                            <ul class=\"dropdown-menu\">
                                <li><button class=\"dropdown-item\" type=\"button\">Thai</button></li>

                                <li><button class=\"dropdown-item\" type=\"button\">Myanmar</button></li>

                                <li><button class=\"dropdown-item\" type=\"button\">Arabic</button></li>
                            </ul>
                        </div>

                        <p class=\"copyright-text mt-lg-5 mt-4\">Copyright © 2048 Topic Listing Center. All rights reserved.
                        <br><br>Design: <a rel=\"nofollow\" href=\"https://templatemo.com\" target=\"_blank\">TemplateMo</a></p>
                        
                    </div>

                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src=\"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/js/jquery.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/js/jquery.sticky.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("content/js/custom.js"), "html", null, true);
        yield "\"></script>

    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 55
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

        // line 56
        yield "
                              ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 68
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

        // line 69
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
        return "base3.html.twig";
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
        return array (  277 => 69,  264 => 68,  252 => 56,  239 => 55,  224 => 152,  220 => 151,  216 => 150,  212 => 149,  134 => 73,  132 => 68,  120 => 58,  118 => 55,  86 => 26,  82 => 25,  77 => 23,  72 => 21,  50 => 1,);
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

        <!-- CSS FILES -->        
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
           


            <header class=\"site-header d-flex flex-column justify-content-center align-items-center\">
                <div class=\"container\">
                    <div class=\"row align-items-center\">

                        <div class=\"col-lg-5 col-12\">
                            <nav aria-label=\"breadcrumb\">
                                <ol class=\"breadcrumb\">
                                    <a href=\"javascript:history.back()\" class=\"btn btn-secondary mt-3\">
                                        <i class=\"fa-solid fa-arrow-left\"></i> Retour
                                    </a>
                                </ol>
                            </nav>

                              {% block header %}

                              {% endblock %}
                        </div>

                    </div>
                </div>
            </header>




            <section class=\"section-padding section-bg\">
              {% block body %}



               {% endblock %}
            </section>
        </main>

        <footer class=\"site-footer section-padding\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-lg-3 col-12 mb-4 pb-2\">
                        <a class=\"navbar-brand mb-2\" href=\"#\">
                            <i class=\"bi-back\"></i>
                            <span>Topic</span>
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
                                <a href=\"#\" class=\"site-footer-link\">FAQs</a>
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
                                305-240-9671
                            </a>
                        </p>

                        <p class=\"text-white d-flex\">
                            <a href=\"mailto:info@company.com\" class=\"site-footer-link\">
                                info@company.com
                            </a>
                        </p>
                    </div>

                    <div class=\"col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto\">
                        <div class=\"dropdown\">
                            <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            English</button>

                            <ul class=\"dropdown-menu\">
                                <li><button class=\"dropdown-item\" type=\"button\">Thai</button></li>

                                <li><button class=\"dropdown-item\" type=\"button\">Myanmar</button></li>

                                <li><button class=\"dropdown-item\" type=\"button\">Arabic</button></li>
                            </ul>
                        </div>

                        <p class=\"copyright-text mt-lg-5 mt-4\">Copyright © 2048 Topic Listing Center. All rights reserved.
                        <br><br>Design: <a rel=\"nofollow\" href=\"https://templatemo.com\" target=\"_blank\">TemplateMo</a></p>
                        
                    </div>

                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src=\"{{ asset('content/js/jquery.min.js')}}\"></script>
        <script src=\"{{ asset('content/js/bootstrap.bundle.min.js')}}\"></script>
        <script src=\"{{ asset('content/js/jquery.sticky.js')}}\"></script>
        <script src=\"{{ asset('content/js/custom.js')}}\"></script>

    </body>
</html>", "base3.html.twig", "C:\\Users\\riadh.chawachi\\Desktop\\TuniVibe-abir\\templates\\base3.html.twig");
    }
}
