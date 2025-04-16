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

/* Front/Espaces.html.twig */
class __TwigTemplate_f1fc94026f9cefad9e7fd66f88a1f480 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/Espaces.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/Espaces.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Front/Espaces.html.twig", 1);
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

        yield "Eventopia - Espaces";
        
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
        yield from $this->loadTemplate("Front/navbar.html.twig", "Front/Espaces.html.twig", 7)->unwrap()->yield($context);
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
    <div class=\"container-fluid mt-5 mb-5\" style=\"padding-left:4%; padding-right:4%;\">
        <div style=\"width: 100%; text-align: center; margin-bottom: 50px; background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1506784628326-3015c406b71d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1932&q=80'); background-size: cover; background-position: center; height: 300px; display: flex; align-items: center; justify-content: center; color: white;\">
            <h1 style=\"font-size: 3rem; font-weight: bold;\">Découvrez nos Espaces</h1>
        </div>
    </div>

    <!-- Search Bar -->
    <div class=\"container mb-5\">
        <div class=\"search-container\">
            <i class=\"fas fa-search search-icon-left\"></i>
            <input type=\"text\" id=\"searchInput\" class=\"search-input\" placeholder=\"Rechercher un espace par nom ou localisation...\">
            <i class=\"fas fa-times search-clear\" id=\"clearSearch\" style=\"display: none;\"></i>
        </div>
    </div>

    <!-- Spaces Grid -->
    <div class=\"container\">
        <div id=\"spacesContainer\" class=\"row\">
            ";
        // line 31
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["espaces"]) || array_key_exists("espaces", $context) ? $context["espaces"] : (function () { throw new RuntimeError('Variable "espaces" does not exist.', 31, $this->source); })())) > 0)) {
            // line 32
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["espaces"]) || array_key_exists("espaces", $context) ? $context["espaces"] : (function () { throw new RuntimeError('Variable "espaces" does not exist.', 32, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["espace"]) {
                // line 33
                yield "                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card espace-card\" style=\"border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.1);\">
                            <img src=\"";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "imageUrl", [], "any", false, false, false, 35))), "html", null, true);
                yield "\" 
                                 alt=\"";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "nom", [], "any", false, false, false, 36), "html", null, true);
                yield "\" 
                                 class=\"img-fluid\" 
                                 style=\"height: 200px; object-fit: cover;\">
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "nom", [], "any", false, false, false, 40), "html", null, true);
                yield "</h4>
                                <p class=\"card-text text-muted\">
                                    <i class=\"fas fa-map-marker-alt me-2\"></i>";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "typeEspace", [], "any", false, false, false, 42), "type", [], "any", false, false, false, 42), "html", null, true);
                yield "
                                </p>
                                <p class=\"card-text text-muted\">
                                    <i class=\"fas fa-map-marker-alt me-2\"></i>";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "localisation", [], "any", false, false, false, 45), "html", null, true);
                yield "
                                </p>
                                <p class=\"card-text\">
                                    <span class=\"status-badge ";
                // line 48
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "etat", [], "any", false, false, false, 48) == "DISPONIBLE")) ? ("available") : ("unavailable"));
                yield "\">
                                        ";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "etat", [], "any", false, false, false, 49), "html", null, true);
                yield "
                                    </span>
                                </p>
                                <a href=\"";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_espace_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                yield "\" 
                                   class=\"btn btn-primary w-100\" 
                                   style=\"font-weight: 600;\">Voir Détails</a>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['espace'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            yield "            ";
        } else {
            // line 60
            yield "                <div class=\"alert alert-info\">Aucun espace trouvé.</div>
            ";
        }
        // line 62
        yield "        </div>
        <div id=\"noResults\" class=\"alert alert-info\" style=\"display: none;\">Aucun espace trouvé correspondant à votre recherche.</div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 67
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

        // line 68
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

        /* Search Bar */
        .search-container {
            position: relative;
            display: flex;
            align-items: center;
            background: white;
            border-radius: 30px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.08);
            overflow: hidden;
            transition: all 0.3s ease;
            border: 1px solid #e0e0e0;
            padding: 0.8rem 1.5rem;
        }
        .search-container:focus-within {
            box-shadow: 0 2px 20px rgba(0,0,0,0.12);
            border-color: #a777e3;
        }
        .search-icon-left {
            margin-right: 12px;
            display: flex;
            align-items: center;
        }
        .search-input {
            flex: 1;
            border: none;
            padding: 0.2rem 0;
            font-size: 1.05rem;
            outline: none;
            background: transparent;
            color: #333;
            font-weight: 400;
        }
        .search-input::placeholder {
            color: #aaa;
        }
        .search-clear {
            margin-left: 12px;
            cursor: pointer;
            display: flex;
            align-items: center;
            transition: all 0.2s ease;
        }
        .search-clear:hover {
            transform: scale(1.1);
        }

        /* Space Cards */
        .espace-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .espace-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
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

        /* No Results Message */
        #noResults {
            border-radius: 10px;
            background: #f8f9fa;
            border: 1px solid #e0e0e0;
            color: #6c757d;
            text-align: center;
            padding: 1.5rem;
            margin-top: 2rem;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 166
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

        // line 167
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('searchInput');
            const clearSearch = document.getElementById('clearSearch');
            const spacesContainer = document.getElementById('spacesContainer');
            const noResults = document.getElementById('noResults');

            // Clear search input
            clearSearch.addEventListener('click', function () {
                searchInput.value = '';
                clearSearch.style.display = 'none';
                filterSpaces();
            });

            // Filter spaces based on search input
            searchInput.addEventListener('input', function () {
                clearSearch.style.display = searchInput.value ? 'flex' : 'none';
                filterSpaces();
            });

            function filterSpaces() {
                const query = searchInput.value.trim().toLowerCase();
                let hasResults = false;

                Array.from(spacesContainer.children).forEach(card => {
                    const name = card.querySelector('.card-title').innerText.toLowerCase();
                    const location = card.querySelector('.card-text:nth-of-type(2)').innerText.toLowerCase();

                    if (name.includes(query) || location.includes(query)) {
                        card.style.display = 'block';
                        hasResults = true;
                    } else {
                        card.style.display = 'none';
                    }
                });

                noResults.style.display = hasResults ? 'none' : 'block';
            }
        });
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
        return "Front/Espaces.html.twig";
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
        return array (  372 => 167,  359 => 166,  250 => 68,  237 => 67,  223 => 62,  219 => 60,  216 => 59,  203 => 52,  197 => 49,  193 => 48,  187 => 45,  181 => 42,  176 => 40,  169 => 36,  165 => 35,  161 => 33,  156 => 32,  154 => 31,  133 => 12,  120 => 11,  108 => 8,  106 => 7,  103 => 6,  90 => 5,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Eventopia - Espaces{% endblock %}

{% block navbar %}
    <div style=\"background-color:white; margin-bottom:95px;\">
        {% include 'Front/navbar.html.twig' %}
    </div>
{% endblock %}

{% block body %}
    <!-- Hero Banner -->
    <div class=\"container-fluid mt-5 mb-5\" style=\"padding-left:4%; padding-right:4%;\">
        <div style=\"width: 100%; text-align: center; margin-bottom: 50px; background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1506784628326-3015c406b71d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1932&q=80'); background-size: cover; background-position: center; height: 300px; display: flex; align-items: center; justify-content: center; color: white;\">
            <h1 style=\"font-size: 3rem; font-weight: bold;\">Découvrez nos Espaces</h1>
        </div>
    </div>

    <!-- Search Bar -->
    <div class=\"container mb-5\">
        <div class=\"search-container\">
            <i class=\"fas fa-search search-icon-left\"></i>
            <input type=\"text\" id=\"searchInput\" class=\"search-input\" placeholder=\"Rechercher un espace par nom ou localisation...\">
            <i class=\"fas fa-times search-clear\" id=\"clearSearch\" style=\"display: none;\"></i>
        </div>
    </div>

    <!-- Spaces Grid -->
    <div class=\"container\">
        <div id=\"spacesContainer\" class=\"row\">
            {% if espaces|length > 0 %}
                {% for espace in espaces %}
                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card espace-card\" style=\"border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.1);\">
                            <img src=\"{{ asset('uploads/images/' ~ espace.imageUrl) }}\" 
                                 alt=\"{{ espace.nom }}\" 
                                 class=\"img-fluid\" 
                                 style=\"height: 200px; object-fit: cover;\">
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">{{ espace.nom }}</h4>
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
                                <a href=\"{{ path('app_espace_detail', {'id': espace.id}) }}\" 
                                   class=\"btn btn-primary w-100\" 
                                   style=\"font-weight: 600;\">Voir Détails</a>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            {% else %}
                <div class=\"alert alert-info\">Aucun espace trouvé.</div>
            {% endif %}
        </div>
        <div id=\"noResults\" class=\"alert alert-info\" style=\"display: none;\">Aucun espace trouvé correspondant à votre recherche.</div>
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

        /* Search Bar */
        .search-container {
            position: relative;
            display: flex;
            align-items: center;
            background: white;
            border-radius: 30px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.08);
            overflow: hidden;
            transition: all 0.3s ease;
            border: 1px solid #e0e0e0;
            padding: 0.8rem 1.5rem;
        }
        .search-container:focus-within {
            box-shadow: 0 2px 20px rgba(0,0,0,0.12);
            border-color: #a777e3;
        }
        .search-icon-left {
            margin-right: 12px;
            display: flex;
            align-items: center;
        }
        .search-input {
            flex: 1;
            border: none;
            padding: 0.2rem 0;
            font-size: 1.05rem;
            outline: none;
            background: transparent;
            color: #333;
            font-weight: 400;
        }
        .search-input::placeholder {
            color: #aaa;
        }
        .search-clear {
            margin-left: 12px;
            cursor: pointer;
            display: flex;
            align-items: center;
            transition: all 0.2s ease;
        }
        .search-clear:hover {
            transform: scale(1.1);
        }

        /* Space Cards */
        .espace-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .espace-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
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

        /* No Results Message */
        #noResults {
            border-radius: 10px;
            background: #f8f9fa;
            border: 1px solid #e0e0e0;
            color: #6c757d;
            text-align: center;
            padding: 1.5rem;
            margin-top: 2rem;
        }
    </style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('searchInput');
            const clearSearch = document.getElementById('clearSearch');
            const spacesContainer = document.getElementById('spacesContainer');
            const noResults = document.getElementById('noResults');

            // Clear search input
            clearSearch.addEventListener('click', function () {
                searchInput.value = '';
                clearSearch.style.display = 'none';
                filterSpaces();
            });

            // Filter spaces based on search input
            searchInput.addEventListener('input', function () {
                clearSearch.style.display = searchInput.value ? 'flex' : 'none';
                filterSpaces();
            });

            function filterSpaces() {
                const query = searchInput.value.trim().toLowerCase();
                let hasResults = false;

                Array.from(spacesContainer.children).forEach(card => {
                    const name = card.querySelector('.card-title').innerText.toLowerCase();
                    const location = card.querySelector('.card-text:nth-of-type(2)').innerText.toLowerCase();

                    if (name.includes(query) || location.includes(query)) {
                        card.style.display = 'block';
                        hasResults = true;
                    } else {
                        card.style.display = 'none';
                    }
                });

                noResults.style.display = hasResults ? 'none' : 'block';
            }
        });
    </script>
{% endblock %}", "Front/Espaces.html.twig", "C:\\Users\\dell\\Desktop\\eventopia (1)\\eventopia\\eventopia\\templates\\Front\\Espaces.html.twig");
    }
}
