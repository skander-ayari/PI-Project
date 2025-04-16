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

/* Front/EspaceDetail.html.twig */
class __TwigTemplate_d427467191a819525e05ea7ae897ac21 extends Template
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
            'navbar' => [$this, 'block_navbar'],
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/EspaceDetail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/EspaceDetail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Front/EspaceDetail.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["espace"]) || array_key_exists("espace", $context) ? $context["espace"] : (function () { throw new RuntimeError('Variable "espace" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        yield " - Détails de l'Espace - Eventopia";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 6
        yield "    <div style=\"background-color:white; margin-bottom:95px;\">
        ";
        // line 7
        yield from $this->loadTemplate("Front/navbar.html.twig", "Front/EspaceDetail.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
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

        // line 12
        yield "    <!-- Hero Banner -->
    

    <!-- Space Details -->
    <div class=\"container\">
        <div class=\"row\">
            <!-- Left Column: Image -->
            <div class=\"col-md-6\">
                <img src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["espace"]) || array_key_exists("espace", $context) ? $context["espace"] : (function () { throw new RuntimeError('Variable "espace" does not exist.', 20, $this->source); })()), "imageUrl", [], "any", false, false, false, 20))), "html", null, true);
        yield "\" 
                     alt=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["espace"]) || array_key_exists("espace", $context) ? $context["espace"] : (function () { throw new RuntimeError('Variable "espace" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), "html", null, true);
        yield "\" 
                     class=\"img-fluid rounded\" 
                     style=\"width: 100%; height: auto; object-fit: cover;\">
            </div>

            <!-- Right Column: Details -->
            <div class=\"col-md-6\">
                <div class=\"card-body\">
                    <h2 class=\"card-title\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["espace"]) || array_key_exists("espace", $context) ? $context["espace"] : (function () { throw new RuntimeError('Variable "espace" does not exist.', 29, $this->source); })()), "nom", [], "any", false, false, false, 29), "html", null, true);
        yield "</h2>
                    <p class=\"card-text text-muted\">
                        <i class=\"fas fa-map-marker-alt me-2\"></i>";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["espace"]) || array_key_exists("espace", $context) ? $context["espace"] : (function () { throw new RuntimeError('Variable "espace" does not exist.', 31, $this->source); })()), "typeEspace", [], "any", false, false, false, 31), "type", [], "any", false, false, false, 31), "html", null, true);
        yield "
                    </p>
                    <p class=\"card-text text-muted\">
                        <i class=\"fas fa-map-marker-alt me-2\"></i>";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["espace"]) || array_key_exists("espace", $context) ? $context["espace"] : (function () { throw new RuntimeError('Variable "espace" does not exist.', 34, $this->source); })()), "localisation", [], "any", false, false, false, 34), "html", null, true);
        yield "
                    </p>
                    <p class=\"card-text\">
                        <span class=\"status-badge ";
        // line 37
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["espace"]) || array_key_exists("espace", $context) ? $context["espace"] : (function () { throw new RuntimeError('Variable "espace" does not exist.', 37, $this->source); })()), "etat", [], "any", false, false, false, 37) == "DISPONIBLE")) ? ("available") : ("unavailable"));
        yield "\">
                            ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["espace"]) || array_key_exists("espace", $context) ? $context["espace"] : (function () { throw new RuntimeError('Variable "espace" does not exist.', 38, $this->source); })()), "etat", [], "any", false, false, false, 38), "html", null, true);
        yield "
                        </span>
                    </p>
                    <p class=\"card-text\">
                        <strong>Description:</strong><br>
                        ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["espace"] ?? null), "description", [], "any", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["espace"]) || array_key_exists("espace", $context) ? $context["espace"] : (function () { throw new RuntimeError('Variable "espace" does not exist.', 43, $this->source); })()), "description", [], "any", false, false, false, 43), "Aucune description disponible")) : ("Aucune description disponible")), "html", null, true);
        yield "
                    </p>
                    <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_espace_list");
        yield "\" 
                       class=\"btn btn-primary w-100\" 
                       style=\"font-weight: 600;\">Retour à la liste</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 54
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 55
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        /* Hero Banner */
        .hero-banner {
            background-size: cover;
            background-position: center;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        /* Status Badges */
        .status-badge {
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
        }
        .status-badge.available {
            background: #4FD69C;
            color: white;
        }
        .status-badge.unavailable {
            background: #FF6B6B;
            color: white;
        }

        /* Card Styling */
        .card-body {
            padding: 2rem;
        }
        .card-title {
            font-size: 1.75rem;
            margin-bottom: 0.75rem;
        }
        .card-text {
            margin-bottom: 1rem;
            font-size: 1rem;
            color: #333;
        }
        .card-text.text-muted {
            color: #6B7280;
        }

        /* Back Button */
        .btn-primary {
            background: var(--primary);
            border: none;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background: var(--accent);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 114
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 115
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        // Add any JavaScript logic here if needed
    </script>
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
        return "Front/EspaceDetail.html.twig";
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
        return array (  308 => 115,  295 => 114,  225 => 55,  212 => 54,  193 => 45,  188 => 43,  180 => 38,  176 => 37,  170 => 34,  164 => 31,  159 => 29,  148 => 21,  144 => 20,  134 => 12,  121 => 11,  109 => 8,  107 => 7,  104 => 6,  91 => 5,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ espace.nom }} - Détails de l'Espace - Eventopia{% endblock %}

{% block navbar %}
    <div style=\"background-color:white; margin-bottom:95px;\">
        {% include 'Front/navbar.html.twig' %}
    </div>
{% endblock %}

{% block body %}
    <!-- Hero Banner -->
    

    <!-- Space Details -->
    <div class=\"container\">
        <div class=\"row\">
            <!-- Left Column: Image -->
            <div class=\"col-md-6\">
                <img src=\"{{ asset('uploads/images/' ~ espace.imageUrl) }}\" 
                     alt=\"{{ espace.nom }}\" 
                     class=\"img-fluid rounded\" 
                     style=\"width: 100%; height: auto; object-fit: cover;\">
            </div>

            <!-- Right Column: Details -->
            <div class=\"col-md-6\">
                <div class=\"card-body\">
                    <h2 class=\"card-title\">{{ espace.nom }}</h2>
                    <p class=\"card-text text-muted\">
                        <i class=\"fas fa-map-marker-alt me-2\"></i>{{ espace.typeEspace.type }}
                    </p>
                    <p class=\"card-text text-muted\">
                        <i class=\"fas fa-map-marker-alt me-2\"></i>{{ espace.localisation }}
                    </p>
                    <p class=\"card-text\">
                        <span class=\"status-badge {{ espace.etat == 'DISPONIBLE' ? 'available' : 'unavailable' }}\">
                            {{ espace.etat }}
                        </span>
                    </p>
                    <p class=\"card-text\">
                        <strong>Description:</strong><br>
                        {{ espace.description|default('Aucune description disponible') }}
                    </p>
                    <a href=\"{{ path('app_espace_list') }}\" 
                       class=\"btn btn-primary w-100\" 
                       style=\"font-weight: 600;\">Retour à la liste</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        /* Hero Banner */
        .hero-banner {
            background-size: cover;
            background-position: center;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        /* Status Badges */
        .status-badge {
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
        }
        .status-badge.available {
            background: #4FD69C;
            color: white;
        }
        .status-badge.unavailable {
            background: #FF6B6B;
            color: white;
        }

        /* Card Styling */
        .card-body {
            padding: 2rem;
        }
        .card-title {
            font-size: 1.75rem;
            margin-bottom: 0.75rem;
        }
        .card-text {
            margin-bottom: 1rem;
            font-size: 1rem;
            color: #333;
        }
        .card-text.text-muted {
            color: #6B7280;
        }

        /* Back Button */
        .btn-primary {
            background: var(--primary);
            border: none;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background: var(--accent);
        }
    </style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        // Add any JavaScript logic here if needed
    </script>
{% endblock %}", "Front/EspaceDetail.html.twig", "C:\\Users\\dell\\Desktop\\eventopia (1)\\eventopia\\eventopia\\templates\\Front\\EspaceDetail.html.twig");
    }
}
