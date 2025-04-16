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

/* Admin/Gestionespace/Typeliste.html.twig */
class __TwigTemplate_d36515788b39247f08ef9b1b85076b57 extends Template
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
            'admin_content' => [$this, 'block_admin_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Gestionespace/Typeliste.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Gestionespace/Typeliste.html.twig"));

        $this->parent = $this->loadTemplate("Admin/Gestionespace/admin_base.html.twig", "Admin/Gestionespace/Typeliste.html.twig", 1);
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

        yield "Eventopia | Liste des Types d'Espaces";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <div class=\"form-container\">
        <div class=\"form-card\">
            <h1 class=\"admin-title\"><i class=\"fas fa-list\"></i> Liste des Types d'Espaces</h1>
            <p class=\"admin-subtitle\">Voici la liste de tous les types d'espaces disponibles.</p>

            ";
        // line 12
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 13
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                yield "                    <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 27
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["typeEspaces"]) || array_key_exists("typeEspaces", $context) ? $context["typeEspaces"] : (function () { throw new RuntimeError('Variable "typeEspaces" does not exist.', 27, $this->source); })())) > 0)) {
            // line 28
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["typeEspaces"]) || array_key_exists("typeEspaces", $context) ? $context["typeEspaces"] : (function () { throw new RuntimeError('Variable "typeEspaces" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["typeEspace"]) {
                // line 29
                yield "                            <tr>
                                <td>";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["typeEspace"], "type", [], "any", false, false, false, 30), "html", null, true);
                yield "</td>
                                <td>";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["typeEspace"], "description", [], "any", false, false, false, 31), "html", null, true);
                yield "</td>
                                <td>
                                    <a href=\"";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_type_espace_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["typeEspace"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                yield "\" class=\"btn btn-edit\">
                                        <i class=\"fas fa-edit\"></i> Modifier
                                    </a>
                                    <form action=\"";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_type_espace_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["typeEspace"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                yield "\" method=\"POST\" style=\"display: inline;\">
                                        <button type=\"submit\" class=\"btn btn-delete\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce type d\\'espace ?');\">
                                            <i class=\"fas fa-trash\"></i> Supprimer
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['typeEspace'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "                    ";
        } else {
            // line 45
            yield "                        <tr>
                            <td colspan=\"3\">Aucun type d'espace trouvé.</td>
                        </tr>
                    ";
        }
        // line 49
        yield "                </tbody>
            </table>

            <a href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_type_espace_create");
        yield "\" class=\"btn btn-submit\">
                <i class=\"fas fa-plus\"></i> Ajouter un Type d'Espace
            </a>
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
        return "Admin/Gestionespace/Typeliste.html.twig";
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
        return array (  199 => 52,  194 => 49,  188 => 45,  185 => 44,  171 => 36,  165 => 33,  160 => 31,  156 => 30,  153 => 29,  148 => 28,  146 => 27,  134 => 17,  128 => 16,  117 => 14,  112 => 13,  107 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'Admin/Gestionespace/admin_base.html.twig' %}

{% block title %}Eventopia | Liste des Types d'Espaces{% endblock %}

{% block admin_content %}
    <div class=\"form-container\">
        <div class=\"form-card\">
            <h1 class=\"admin-title\"><i class=\"fas fa-list\"></i> Liste des Types d'Espaces</h1>
            <p class=\"admin-subtitle\">Voici la liste de tous les types d'espaces disponibles.</p>

            {# Display flash messages #}
            {% for type, messages in app.flashes %}
                {% for message in messages %}
                    <div class=\"alert alert-{{ type }}\">{{ message }}</div>
                {% endfor %}
            {% endfor %}

            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% if typeEspaces|length > 0 %}
                        {% for typeEspace in typeEspaces %}
                            <tr>
                                <td>{{ typeEspace.type }}</td>
                                <td>{{ typeEspace.description }}</td>
                                <td>
                                    <a href=\"{{ path('app_type_espace_edit', {'id': typeEspace.id}) }}\" class=\"btn btn-edit\">
                                        <i class=\"fas fa-edit\"></i> Modifier
                                    </a>
                                    <form action=\"{{ path('app_type_espace_delete', {'id': typeEspace.id}) }}\" method=\"POST\" style=\"display: inline;\">
                                        <button type=\"submit\" class=\"btn btn-delete\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce type d\\'espace ?');\">
                                            <i class=\"fas fa-trash\"></i> Supprimer
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        {% endfor %}
                    {% else %}
                        <tr>
                            <td colspan=\"3\">Aucun type d'espace trouvé.</td>
                        </tr>
                    {% endif %}
                </tbody>
            </table>

            <a href=\"{{ path('app_type_espace_create') }}\" class=\"btn btn-submit\">
                <i class=\"fas fa-plus\"></i> Ajouter un Type d'Espace
            </a>
        </div>
    </div>
{% endblock %}", "Admin/Gestionespace/Typeliste.html.twig", "C:\\Users\\dell\\Desktop\\eventopia (1)\\eventopia\\eventopia\\templates\\Admin\\Gestionespace\\Typeliste.html.twig");
    }
}
