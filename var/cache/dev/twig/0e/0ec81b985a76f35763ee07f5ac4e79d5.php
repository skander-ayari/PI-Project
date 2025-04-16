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

/* Admin/Gestionespace/Ajoutespace.html.twig */
class __TwigTemplate_50aaf620c048027f739919b28a12f66d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Gestionespace/Ajoutespace.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Gestionespace/Ajoutespace.html.twig"));

        $this->parent = $this->loadTemplate("Admin/Gestionespace/admin_base.html.twig", "Admin/Gestionespace/Ajoutespace.html.twig", 1);
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

        yield "Eventopia | Ajout d'Espace";
        
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
            <h1 class=\"admin-title\"><i class=\"fas fa-plus\"></i> Créer un Espace</h1>
            <p class=\"admin-subtitle\">Remplissez les détails pour ajouter un nouvel espace.</p>

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
            ";
        // line 18
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start');
        yield "
                <div class=\"form-group\">
                    ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), 'label', ["label" => "Nom de l'espace"]);
        yield "
                    ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "localisation", [], "any", false, false, false, 26), 'label', ["label" => "Localisation"]);
        yield "
                    ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "localisation", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "localisation", [], "any", false, false, false, 28), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "etat", [], "any", false, false, false, 32), 'label', ["label" => "État"]);
        yield "
                    ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "etat", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "etat", [], "any", false, false, false, 34), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "typeEspace", [], "any", false, false, false, 38), 'label', ["label" => "Type d'espace"]);
        yield "
                    ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "typeEspace", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "typeEspace", [], "any", false, false, false, 40), 'errors');
        yield "
                </div>

                <div class=\"form-group\">
                    <label>Image principale</label>
                    <div class=\"upload-container\">
                        <div class=\"image-upload-wrapper\">
                            <i class=\"fas fa-cloud-upload-alt upload-icon\"></i>
                            <div class=\"upload-text\">Cliquez pour téléverser une image</div>
                            <div class=\"upload-hint\">Formats acceptés: JPG, PNG (max 5MB)</div>
                        </div>
                        ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "image", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "image-input", "accept" => "image/*", "id" => "espace_image"]]);
        yield "
                        <img id=\"imagePreview\" class=\"image-preview\">
                    </div>
                    ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "image", [], "any", false, false, false, 54), 'errors');
        yield "
                </div>

                <div class=\"form-actions\">
                    <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_espace_list");
        yield "\" class=\"btn btn-return\">
                        <i class=\"fas fa-arrow-left\"></i> Retour
                    </a>
                    <button type=\"submit\" class=\"btn btn-submit\">
                        <i class=\"fas fa-check\"></i> Enregistrer
                    </button>
                </div>
            ";
        // line 65
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 70
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

        // line 71
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const imageInput = document.getElementById('espace_image');
            const preview = document.getElementById('imagePreview');
            const uploadWrapper = document.querySelector('.image-upload-wrapper');
            const originalContent = uploadWrapper.innerHTML;

            // Open file explorer when the wrapper is clicked
            uploadWrapper.addEventListener('click', function (e) {
                e.preventDefault();
                imageInput.click();
            });

            // Handle image selection
            imageInput.addEventListener('change', function (e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        preview.src = e.target.result;
                        preview.style.display = 'block';
                        uploadWrapper.innerHTML = '';
                        uploadWrapper.appendChild(preview);
                    };
                    reader.readAsDataURL(file);
                } else {
                    preview.style.display = 'none';
                    uploadWrapper.innerHTML = originalContent;
                }
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
        return "Admin/Gestionespace/Ajoutespace.html.twig";
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
        return array (  261 => 71,  248 => 70,  233 => 65,  223 => 58,  216 => 54,  210 => 51,  196 => 40,  192 => 39,  188 => 38,  181 => 34,  177 => 33,  173 => 32,  166 => 28,  162 => 27,  158 => 26,  151 => 22,  147 => 21,  143 => 20,  138 => 18,  135 => 17,  129 => 16,  118 => 14,  113 => 13,  108 => 12,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'Admin/Gestionespace/admin_base.html.twig' %}

{% block title %}Eventopia | Ajout d'Espace{% endblock %}

{% block admin_content %}
    <div class=\"form-container\">
        <div class=\"form-card\">
            <h1 class=\"admin-title\"><i class=\"fas fa-plus\"></i> Créer un Espace</h1>
            <p class=\"admin-subtitle\">Remplissez les détails pour ajouter un nouvel espace.</p>

            {# Display flash messages #}
            {% for type, messages in app.flashes %}
                {% for message in messages %}
                    <div class=\"alert alert-{{ type }}\">{{ message }}</div>
                {% endfor %}
            {% endfor %}

            {{ form_start(form) }}
                <div class=\"form-group\">
                    {{ form_label(form.nom, 'Nom de l\\'espace') }}
                    {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
                    {{ form_errors(form.nom) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.localisation, 'Localisation') }}
                    {{ form_widget(form.localisation, {'attr': {'class': 'form-control'}}) }}
                    {{ form_errors(form.localisation) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.etat, 'État') }}
                    {{ form_widget(form.etat, {'attr': {'class': 'form-control'}}) }}
                    {{ form_errors(form.etat) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.typeEspace, 'Type d\\'espace') }}
                    {{ form_widget(form.typeEspace, {'attr': {'class': 'form-control'}}) }}
                    {{ form_errors(form.typeEspace) }}
                </div>

                <div class=\"form-group\">
                    <label>Image principale</label>
                    <div class=\"upload-container\">
                        <div class=\"image-upload-wrapper\">
                            <i class=\"fas fa-cloud-upload-alt upload-icon\"></i>
                            <div class=\"upload-text\">Cliquez pour téléverser une image</div>
                            <div class=\"upload-hint\">Formats acceptés: JPG, PNG (max 5MB)</div>
                        </div>
                        {{ form_widget(form.image, {'attr': {'class': 'image-input', 'accept': 'image/*', 'id': 'espace_image'}}) }}
                        <img id=\"imagePreview\" class=\"image-preview\">
                    </div>
                    {{ form_errors(form.image) }}
                </div>

                <div class=\"form-actions\">
                    <a href=\"{{ path('admin_espace_list') }}\" class=\"btn btn-return\">
                        <i class=\"fas fa-arrow-left\"></i> Retour
                    </a>
                    <button type=\"submit\" class=\"btn btn-submit\">
                        <i class=\"fas fa-check\"></i> Enregistrer
                    </button>
                </div>
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const imageInput = document.getElementById('espace_image');
            const preview = document.getElementById('imagePreview');
            const uploadWrapper = document.querySelector('.image-upload-wrapper');
            const originalContent = uploadWrapper.innerHTML;

            // Open file explorer when the wrapper is clicked
            uploadWrapper.addEventListener('click', function (e) {
                e.preventDefault();
                imageInput.click();
            });

            // Handle image selection
            imageInput.addEventListener('change', function (e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        preview.src = e.target.result;
                        preview.style.display = 'block';
                        uploadWrapper.innerHTML = '';
                        uploadWrapper.appendChild(preview);
                    };
                    reader.readAsDataURL(file);
                } else {
                    preview.style.display = 'none';
                    uploadWrapper.innerHTML = originalContent;
                }
            });
        });
    </script>
{% endblock %}", "Admin/Gestionespace/Ajoutespace.html.twig", "C:\\Users\\dell\\Desktop\\eventopia (1)\\eventopia\\eventopia\\templates\\Admin\\Gestionespace\\Ajoutespace.html.twig");
    }
}
