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

/* Front/navbar.html.twig */
class __TwigTemplate_024b570a70ea5e46c09f8b4ab23a1056 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/navbar.html.twig"));

        // line 1
        yield "<nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"";
        // line 3
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" style=\"font-size: 1.8rem; font-weight: bold; color: #03045F;\">
            Eventopia
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\">
            <span class=\"oi oi-menu\"></span>
            Menu
        </button>

        <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item ";
        // line 13
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "get", ["_route"], "method", false, false, false, 13) == "app_home")) ? ("active") : (""));
        yield "\">
                    <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-link\">Home</a>
                </li>
                <li class=\"nav-item ";
        // line 16
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "get", ["_route"], "method", false, false, false, 16) == "app_about")) ? ("active") : (""));
        yield "\">
                    <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\" class=\"nav-link\">About</a>
                </li>
                <li class=\"nav-item ";
        // line 19
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "get", ["_route"], "method", false, false, false, 19) == "app_espace_list")) ? ("active") : (""));
        yield "\">
                    <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_espace_list");
        yield "\" class=\"nav-link\">Espaces</a>
                </li>
                <li class=\"nav-item ";
        // line 22
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "get", ["_route"], "method", false, false, false, 22) == "app_schedule")) ? ("active") : (""));
        yield "\">
                    <a href=\"#\" class=\"nav-link\">Schedule</a>
                </li>
                <li class=\"nav-item ";
        // line 25
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "get", ["_route"], "method", false, false, false, 25) == "app_blog")) ? ("active") : (""));
        yield "\">
                    <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
        yield "\" class=\"nav-link\">Events</a>
                </li>
                <li class=\"nav-item ";
        // line 28
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "get", ["_route"], "method", false, false, false, 28) == "app_feedback")) ? ("active") : (""));
        yield "\">
                    <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_feedback");
        yield "\" class=\"nav-link\">Feedback</a>
                </li>

                <li class=\"nav-item cta mr-md-2\">
                    <img class=\"img-fluid img-responsive rounded-circle mr-1\" src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjDGMp734S91sDuUFqL51_xRTXS15iiRoHew&s\" width=\"50px\" alt=\"User Profile\">
                </li>
            </ul>
        </div>
    </div>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Front/navbar.html.twig";
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
        return array (  111 => 29,  107 => 28,  102 => 26,  98 => 25,  92 => 22,  87 => 20,  83 => 19,  78 => 17,  74 => 16,  69 => 14,  65 => 13,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\" style=\"font-size: 1.8rem; font-weight: bold; color: #03045F;\">
            Eventopia
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\">
            <span class=\"oi oi-menu\"></span>
            Menu
        </button>

        <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item {{ app.request.get('_route') == 'app_home' ? 'active' }}\">
                    <a href=\"{{ path('app_home') }}\" class=\"nav-link\">Home</a>
                </li>
                <li class=\"nav-item {{ app.request.get('_route') == 'app_about' ? 'active' }}\">
                    <a href=\"{{ path('app_about') }}\" class=\"nav-link\">About</a>
                </li>
                <li class=\"nav-item {{ app.request.get('_route') == 'app_espace_list' ? 'active' }}\">
                    <a href=\"{{ path('app_espace_list') }}\" class=\"nav-link\">Espaces</a>
                </li>
                <li class=\"nav-item {{ app.request.get('_route') == 'app_schedule' ? 'active' }}\">
                    <a href=\"#\" class=\"nav-link\">Schedule</a>
                </li>
                <li class=\"nav-item {{ app.request.get('_route') == 'app_blog' ? 'active' }}\">
                    <a href=\"{{ path('app_events') }}\" class=\"nav-link\">Events</a>
                </li>
                <li class=\"nav-item {{ app.request.get('_route') == 'app_feedback' ? 'active' }}\">
                    <a href=\"{{ path('app_feedback') }}\" class=\"nav-link\">Feedback</a>
                </li>

                <li class=\"nav-item cta mr-md-2\">
                    <img class=\"img-fluid img-responsive rounded-circle mr-1\" src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjDGMp734S91sDuUFqL51_xRTXS15iiRoHew&s\" width=\"50px\" alt=\"User Profile\">
                </li>
            </ul>
        </div>
    </div>
</nav>", "Front/navbar.html.twig", "C:\\Users\\dell\\Desktop\\eventopia (1)\\eventopia\\eventopia\\templates\\Front\\navbar.html.twig");
    }
}
