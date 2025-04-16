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

/* Admin/Gestionespace/Liste.html.twig */
class __TwigTemplate_a8462394733da097d956bd2ad08789c0 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'admin_content' => [$this, 'block_admin_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "Admin/Gestionespace/admin_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Gestionespace/Liste.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Gestionespace/Liste.html.twig"));

        $this->parent = $this->loadTemplate("Admin/Gestionespace/admin_base.html.twig", "Admin/Gestionespace/Liste.html.twig", 1);
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

        yield "Eventopia | Liste des Espaces";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <style>
        :root {
            --primary: #0f4c75;
            --primary-light: #3282b8;
            --primary-lighter: #bbe1fa;
            --light: #f8f9fc;
            --border: #e0e3e8;
            --text: #2d3748;
            --text-light: #718096;
            --sidebar-width: 280px;
            --success: #4fd69c;
            --warning: #ffc107;
            --danger: #ff6b6b;
        }

        /* Structure principale améliorée */
        .admin-content-container {
            padding: 1.5rem 1.5rem 1.5rem 1rem;
            margin-left: var(--sidebar-width);
            background: var(--light);
            min-height: 100vh;
            width: calc(100% - var(--sidebar-width));
        }

        /* En-tête modernisé */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--primary-lighter);
        }

        .page-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            margin: 0;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .page-title i {
            color: var(--primary-light);
        }

        /* Nouveau design de tableau */
        .events-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 8px;
            background: transparent;
        }

        .events-table th {
            background-color: var(--primary-lighter);
            color: var(--primary);
            padding: 15px;
            text-align: left;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 0.5px;
            border-radius: 8px; /* Rounded corners */
        }

        .events-table td {
            padding: 15px;
            vertical-align: middle;
        }

        .events-table tbody tr {
            background: white;
            border-radius: 8px; /* Rounded corners for rows */
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }

        .events-table tbody tr:hover {
            transform: translateY(-2px); /* Slight lift effect */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15); /* Enhanced shadow on hover */
        }

        /* Status Badge */
        .status-badge {
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .status-badge.available {
            background: var(--success);
            color: white;
        }

        .status-badge.unavailable {
            background: var(--danger);
            color: white;
        }

        /* Thumbnail */
        .thumbnail {
            max-width: 50px;
            height: auto;
            border-radius: 8px;
        }

        /* Search Bar and Filters */
        .table-controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .search-box {
            position: relative;
            width: 300px;
        }

        .search-input {
            width: 100%;
            padding: 10px 15px 10px 40px;
            border: 1px solid var(--border);
            border-radius: 8px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .search-input:focus {
            border-color: var(--primary-light);
            box-shadow: 0 0 0 3px rgba(50, 130, 184, 0.2);
            outline: none;
        }

        .search-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-light);
        }

        .search-clear {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-light);
            cursor: pointer;
            display: none;
        }

        .search-clear.active {
            display: block;
        }

        .table-filters {
            display: flex;
            gap: 10px;
        }

        .filter-btn {
            padding: 8px 15px;
            border-radius: 8px;
            background: white;
            border: 1px solid var(--border);
            font-size: 0.85rem;
            font-weight: 500;
            color: var(--text-light);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-btn.active {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        /* Action Buttons */
        .action-btn {
            width: 34px;
            height: 34px;
            border-radius: 8px; /* Rounded corners */
            display: flex;
            align-items: center;
            justify-content: center;
            background: white;
            border: none;
            color: var(--text-light);
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05); /* Subtle shadow */
        }

        .action-btn:hover {
            transform: translateY(-2px); /* Slight lift effect */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Enhanced shadow on hover */
        }

        .action-btn.edit {
            color: var(--primary-light); /* Blue icon for Edit */
        }

        .action-btn.edit:hover {
            background: var(--primary-light); /* Blue background on hover */
            color: white; /* White icon on hover */
        }

        .action-btn.delete {
            color: var(--danger); /* Red icon for Delete */
        }

        .action-btn.delete:hover {
            background: var(--danger); /* Red background on hover */
            color: white; /* White icon on hover */
        }

        /* Empty State */
        .empty-state {
            background: white;
            border-radius: 12px;
            padding: 3rem 2rem;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            margin-top: 20px;
        }

        .empty-icon {
            font-size: 3rem;
            color: var(--text-light);
            margin-bottom: 1rem;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .table-controls {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }

            .search-box {
                width: 100%;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 260
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_admin_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "admin_content"));

        // line 261
        yield "    <div class=\"admin-content-container\">
        <div class=\"page-header\">
            <h1 class=\"page-title\"><i class=\"fas fa-list\"></i> Liste des Espaces</h1>
        </div>

        ";
        // line 267
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 267, $this->source); })()), "flashes", [], "any", false, false, false, 267));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 268
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 269
                yield "                <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 271
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 272
        yield "
        ";
        // line 274
        yield "        <div class=\"action-buttons mb-3\">
            <a href=\"";
        // line 275
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_espace_create");
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus\"></i> Ajouter un Espace
            </a>
        </div>

        ";
        // line 281
        yield "        <form method=\"get\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_espace_list");
        yield "\" class=\"table-controls mb-4\">
            <div class=\"search-box\">
                <i class=\"fas fa-search search-icon\"></i>
                <input type=\"text\" name=\"q\" class=\"search-input\" placeholder=\"Rechercher un espace...\" value=\"";
        // line 284
        yield (((array_key_exists("searchTerm", $context) &&  !(null === $context["searchTerm"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["searchTerm"], "html", null, true)) : (""));
        yield "\">
                ";
        // line 285
        if ((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 285, $this->source); })())) {
            // line 286
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_espace_list");
            yield "\" class=\"search-clear active\" title=\"Effacer la recherche\">
                        <i class=\"fas fa-times\"></i>
                    </a>
                ";
        }
        // line 290
        yield "            </div>
            <div class=\"table-filters\">
                <button type=\"button\" class=\"filter-btn active\" data-filter=\"all\">Tous</button>
                <button type=\"button\" class=\"filter-btn\" data-filter=\"DISPONIBLE\">Disponible</button>
                <button type=\"button\" class=\"filter-btn\" data-filter=\"INDISPONIBLE\">Indisponible</button>
            </div>
        </form>

        ";
        // line 299
        yield "        <table class=\"events-table\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Localisation</th>
                    <th>Type d'Espace</th>
                    <th>État</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 311
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["espaces"]) || array_key_exists("espaces", $context) ? $context["espaces"] : (function () { throw new RuntimeError('Variable "espaces" does not exist.', 311, $this->source); })())) > 0)) {
            // line 312
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["espaces"]) || array_key_exists("espaces", $context) ? $context["espaces"] : (function () { throw new RuntimeError('Variable "espaces" does not exist.', 312, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["espace"]) {
                // line 313
                yield "                        <tr data-etat=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "etat", [], "any", false, false, false, 313), "html", null, true);
                yield "\">
                            <td>";
                // line 314
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "nom", [], "any", false, false, false, 314), "html", null, true);
                yield "</td>
                            <td>";
                // line 315
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "localisation", [], "any", false, false, false, 315), "html", null, true);
                yield "</td>
                            <td>";
                // line 316
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "typeEspace", [], "any", false, false, false, 316), "type", [], "any", false, false, false, 316), "html", null, true);
                yield "</td>
                            <td>
                                <span class=\"status-badge ";
                // line 318
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "etat", [], "any", false, false, false, 318) == "DISPONIBLE")) ? ("available") : ("unavailable"));
                yield "\">
                                    ";
                // line 319
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "etat", [], "any", false, false, false, 319), "html", null, true);
                yield "
                                </span>
                            </td>
                            <td>
                                ";
                // line 323
                if (CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "imageUrl", [], "any", false, false, false, 323)) {
                    // line 324
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "imageUrl", [], "any", false, false, false, 324))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "nom", [], "any", false, false, false, 324), "html", null, true);
                    yield "\" class=\"thumbnail\">
                                ";
                } else {
                    // line 326
                    yield "                                    <span>Aucune image</span>
                                ";
                }
                // line 328
                yield "                            </td>
                            <td>
                                <a href=\"";
                // line 330
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_espace_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "id", [], "any", false, false, false, 330)]), "html", null, true);
                yield "\" class=\"action-btn edit\" title=\"Modifier\">
                                    <i class=\"fas fa-pencil-alt\"></i>
                                </a>
                                <form action=\"";
                // line 333
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_espace_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "id", [], "any", false, false, false, 333)]), "html", null, true);
                yield "\" method=\"POST\" class=\"inline-form\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 334
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "id", [], "any", false, false, false, 334))), "html", null, true);
                yield "\">
                                    <button type=\"submit\" class=\"action-btn delete\" title=\"Supprimer\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet espace ?')\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['espace'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 342
            yield "                ";
        } else {
            // line 343
            yield "                    <tr>
                        <td colspan=\"6\" class=\"empty-state\">
                            <i class=\"fas fa-exclamation-circle empty-icon\"></i>
                            <p>Aucun espace trouvé.</p>
                        </td>
                    </tr>
                ";
        }
        // line 350
        yield "            </tbody>
        </table>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 355
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

        // line 356
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        // Recherche automatique après délai
        const searchInput = document.querySelector('.search-input');
        let searchTimer;
        searchInput.addEventListener('input', function () {
            clearTimeout(searchTimer);
            searchTimer = setTimeout(() => {
                this.closest('form').submit();
            }, 500);
        });

        // Effacer la recherche
        const searchClear = document.querySelector('.search-clear');
        if (searchClear) {
            searchClear.addEventListener('click', function (e) {
                e.preventDefault();
                window.location.href = this.href;
            });
        }

        // Afficher/masquer le bouton clear
        searchInput.addEventListener('input', function () {
            searchClear.style.display = this.value.trim() ? 'block' : 'none';
        });

        // Filter by etat functionality
        const filterBtns = document.querySelectorAll('.filter-btn');
        const tableRows = document.querySelectorAll('.events-table tbody tr');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                // Remove 'active' class from all buttons
                filterBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active'); // Add 'active' class to the clicked button

                const filter = this.dataset.filter; // Get the selected filter value

                tableRows.forEach(row => {
                    const etat = row.dataset.etat; // Get the row's etat
                    if (filter === 'all' || etat === filter) {
                        row.style.display = ''; // Show the row
                    } else {
                        row.style.display = 'none'; // Hide the row
                    }
                });
            });
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
        return "Admin/Gestionespace/Liste.html.twig";
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
        return array (  590 => 356,  577 => 355,  563 => 350,  554 => 343,  551 => 342,  537 => 334,  533 => 333,  527 => 330,  523 => 328,  519 => 326,  511 => 324,  509 => 323,  502 => 319,  498 => 318,  493 => 316,  489 => 315,  485 => 314,  480 => 313,  475 => 312,  473 => 311,  459 => 299,  449 => 290,  441 => 286,  439 => 285,  435 => 284,  428 => 281,  420 => 275,  417 => 274,  414 => 272,  408 => 271,  397 => 269,  392 => 268,  387 => 267,  380 => 261,  367 => 260,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'Admin/Gestionespace/admin_base.html.twig' %}

{% block title %}Eventopia | Liste des Espaces{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <style>
        :root {
            --primary: #0f4c75;
            --primary-light: #3282b8;
            --primary-lighter: #bbe1fa;
            --light: #f8f9fc;
            --border: #e0e3e8;
            --text: #2d3748;
            --text-light: #718096;
            --sidebar-width: 280px;
            --success: #4fd69c;
            --warning: #ffc107;
            --danger: #ff6b6b;
        }

        /* Structure principale améliorée */
        .admin-content-container {
            padding: 1.5rem 1.5rem 1.5rem 1rem;
            margin-left: var(--sidebar-width);
            background: var(--light);
            min-height: 100vh;
            width: calc(100% - var(--sidebar-width));
        }

        /* En-tête modernisé */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--primary-lighter);
        }

        .page-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            margin: 0;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .page-title i {
            color: var(--primary-light);
        }

        /* Nouveau design de tableau */
        .events-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 8px;
            background: transparent;
        }

        .events-table th {
            background-color: var(--primary-lighter);
            color: var(--primary);
            padding: 15px;
            text-align: left;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 0.5px;
            border-radius: 8px; /* Rounded corners */
        }

        .events-table td {
            padding: 15px;
            vertical-align: middle;
        }

        .events-table tbody tr {
            background: white;
            border-radius: 8px; /* Rounded corners for rows */
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }

        .events-table tbody tr:hover {
            transform: translateY(-2px); /* Slight lift effect */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15); /* Enhanced shadow on hover */
        }

        /* Status Badge */
        .status-badge {
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .status-badge.available {
            background: var(--success);
            color: white;
        }

        .status-badge.unavailable {
            background: var(--danger);
            color: white;
        }

        /* Thumbnail */
        .thumbnail {
            max-width: 50px;
            height: auto;
            border-radius: 8px;
        }

        /* Search Bar and Filters */
        .table-controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .search-box {
            position: relative;
            width: 300px;
        }

        .search-input {
            width: 100%;
            padding: 10px 15px 10px 40px;
            border: 1px solid var(--border);
            border-radius: 8px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .search-input:focus {
            border-color: var(--primary-light);
            box-shadow: 0 0 0 3px rgba(50, 130, 184, 0.2);
            outline: none;
        }

        .search-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-light);
        }

        .search-clear {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-light);
            cursor: pointer;
            display: none;
        }

        .search-clear.active {
            display: block;
        }

        .table-filters {
            display: flex;
            gap: 10px;
        }

        .filter-btn {
            padding: 8px 15px;
            border-radius: 8px;
            background: white;
            border: 1px solid var(--border);
            font-size: 0.85rem;
            font-weight: 500;
            color: var(--text-light);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-btn.active {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        /* Action Buttons */
        .action-btn {
            width: 34px;
            height: 34px;
            border-radius: 8px; /* Rounded corners */
            display: flex;
            align-items: center;
            justify-content: center;
            background: white;
            border: none;
            color: var(--text-light);
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05); /* Subtle shadow */
        }

        .action-btn:hover {
            transform: translateY(-2px); /* Slight lift effect */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Enhanced shadow on hover */
        }

        .action-btn.edit {
            color: var(--primary-light); /* Blue icon for Edit */
        }

        .action-btn.edit:hover {
            background: var(--primary-light); /* Blue background on hover */
            color: white; /* White icon on hover */
        }

        .action-btn.delete {
            color: var(--danger); /* Red icon for Delete */
        }

        .action-btn.delete:hover {
            background: var(--danger); /* Red background on hover */
            color: white; /* White icon on hover */
        }

        /* Empty State */
        .empty-state {
            background: white;
            border-radius: 12px;
            padding: 3rem 2rem;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            margin-top: 20px;
        }

        .empty-icon {
            font-size: 3rem;
            color: var(--text-light);
            margin-bottom: 1rem;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .table-controls {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }

            .search-box {
                width: 100%;
            }
        }
    </style>
{% endblock %}

{% block admin_content %}
    <div class=\"admin-content-container\">
        <div class=\"page-header\">
            <h1 class=\"page-title\"><i class=\"fas fa-list\"></i> Liste des Espaces</h1>
        </div>

        {# Display flash messages #}
        {% for type, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert alert-{{ type }}\">{{ message }}</div>
            {% endfor %}
        {% endfor %}

        {# Add new espace button #}
        <div class=\"action-buttons mb-3\">
            <a href=\"{{ path('admin_espace_create') }}\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus\"></i> Ajouter un Espace
            </a>
        </div>

        {# Search Bar and Filters #}
        <form method=\"get\" action=\"{{ path('admin_espace_list') }}\" class=\"table-controls mb-4\">
            <div class=\"search-box\">
                <i class=\"fas fa-search search-icon\"></i>
                <input type=\"text\" name=\"q\" class=\"search-input\" placeholder=\"Rechercher un espace...\" value=\"{{ searchTerm ?? '' }}\">
                {% if searchTerm %}
                    <a href=\"{{ path('admin_espace_list') }}\" class=\"search-clear active\" title=\"Effacer la recherche\">
                        <i class=\"fas fa-times\"></i>
                    </a>
                {% endif %}
            </div>
            <div class=\"table-filters\">
                <button type=\"button\" class=\"filter-btn active\" data-filter=\"all\">Tous</button>
                <button type=\"button\" class=\"filter-btn\" data-filter=\"DISPONIBLE\">Disponible</button>
                <button type=\"button\" class=\"filter-btn\" data-filter=\"INDISPONIBLE\">Indisponible</button>
            </div>
        </form>

        {# Espace Table #}
        <table class=\"events-table\">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Localisation</th>
                    <th>Type d'Espace</th>
                    <th>État</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% if espaces|length > 0 %}
                    {% for espace in espaces %}
                        <tr data-etat=\"{{ espace.etat }}\">
                            <td>{{ espace.nom }}</td>
                            <td>{{ espace.localisation }}</td>
                            <td>{{ espace.typeEspace.type }}</td>
                            <td>
                                <span class=\"status-badge {{ espace.etat == 'DISPONIBLE' ? 'available' : 'unavailable' }}\">
                                    {{ espace.etat }}
                                </span>
                            </td>
                            <td>
                                {% if espace.imageUrl %}
                                    <img src=\"{{ asset('uploads/images/' ~ espace.imageUrl) }}\" alt=\"{{ espace.nom }}\" class=\"thumbnail\">
                                {% else %}
                                    <span>Aucune image</span>
                                {% endif %}
                            </td>
                            <td>
                                <a href=\"{{ path('admin_espace_edit', {'id': espace.id}) }}\" class=\"action-btn edit\" title=\"Modifier\">
                                    <i class=\"fas fa-pencil-alt\"></i>
                                </a>
                                <form action=\"{{ path('admin_espace_delete', {'id': espace.id}) }}\" method=\"POST\" class=\"inline-form\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ espace.id) }}\">
                                    <button type=\"submit\" class=\"action-btn delete\" title=\"Supprimer\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet espace ?')\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    {% endfor %}
                {% else %}
                    <tr>
                        <td colspan=\"6\" class=\"empty-state\">
                            <i class=\"fas fa-exclamation-circle empty-icon\"></i>
                            <p>Aucun espace trouvé.</p>
                        </td>
                    </tr>
                {% endif %}
            </tbody>
        </table>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        // Recherche automatique après délai
        const searchInput = document.querySelector('.search-input');
        let searchTimer;
        searchInput.addEventListener('input', function () {
            clearTimeout(searchTimer);
            searchTimer = setTimeout(() => {
                this.closest('form').submit();
            }, 500);
        });

        // Effacer la recherche
        const searchClear = document.querySelector('.search-clear');
        if (searchClear) {
            searchClear.addEventListener('click', function (e) {
                e.preventDefault();
                window.location.href = this.href;
            });
        }

        // Afficher/masquer le bouton clear
        searchInput.addEventListener('input', function () {
            searchClear.style.display = this.value.trim() ? 'block' : 'none';
        });

        // Filter by etat functionality
        const filterBtns = document.querySelectorAll('.filter-btn');
        const tableRows = document.querySelectorAll('.events-table tbody tr');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                // Remove 'active' class from all buttons
                filterBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active'); // Add 'active' class to the clicked button

                const filter = this.dataset.filter; // Get the selected filter value

                tableRows.forEach(row => {
                    const etat = row.dataset.etat; // Get the row's etat
                    if (filter === 'all' || etat === filter) {
                        row.style.display = ''; // Show the row
                    } else {
                        row.style.display = 'none'; // Hide the row
                    }
                });
            });
        });
    </script>
{% endblock %}", "Admin/Gestionespace/Liste.html.twig", "C:\\Users\\dell\\Desktop\\eventopia (1)\\eventopia\\eventopia\\templates\\Admin\\Gestionespace\\Liste.html.twig");
    }
}
