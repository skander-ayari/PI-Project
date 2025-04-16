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

/* Admin/Gestionevenement/sidebar.html.twig */
class __TwigTemplate_b292b29cf0f6decfad5e2cfcc54df069 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Gestionevenement/sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/Gestionevenement/sidebar.html.twig"));

        // line 1
        yield "<aside class=\"admin-sidebar\" style=\"
    width: var(--sidebar-width);
    background: var(--sidebar-bg);
    color: white;
    position: fixed;
    height: 100vh;
    left: 0;
    top: 0;
    z-index: 1000;
    display: flex;
    flex-direction: column;
    border-right: 1px solid rgba(255,255,255,0.1);
\">

    <!-- Header -->
    <div style=\"padding: 25px; border-bottom: 1px solid rgba(255,255,255,0.1); text-align: center;\">
        <h3 style=\"margin: 0; font-weight: 600; letter-spacing: 1px;\">EVENTOPIA</h3>
    </div>

    <!-- Menu principal -->
    <nav style=\"flex: 1; padding: 20px 0; display: flex; flex-direction: column;\">
        <!-- Liste des événements -->
        <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_liste");
        yield "\" 
           style=\"color: white; 
                  padding: 14px 25px; 
                  margin: 5px 15px; 
                  display: flex; 
                  align-items: center; 
                  text-decoration: none; 
                  border-radius: 6px;
                  transition: all 0.3s;
                  ";
        // line 32
        if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, false, 32), "attributes", [], "any", false, false, false, 32), "get", ["_route"], "method", false, false, false, 32)) && is_string($_v1 = "admin_evenement_liste") && str_starts_with($_v0, $_v1))) {
            yield "background: rgba(255,255,255,0.15);";
        }
        yield "\"
           class=\"menu-item\">
           <i class=\"fas fa-calendar-alt\" style=\"margin-right: 15px; font-size: 1.1rem;\"></i>
           <span>Events</span>
        </a>

        <!-- Ajouter événement -->
        <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_evenement_ajouter");
        yield "\" 
           style=\"color: white; 
                  padding: 14px 25px; 
                  margin: 5px 15px; 
                  display: flex; 
                  align-items: center; 
                  text-decoration: none; 
                  border-radius: 6px;
                  transition: all 0.3s;
                  ";
        // line 48
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "request", [], "any", false, false, false, 48), "attributes", [], "any", false, false, false, 48), "get", ["_route"], "method", false, false, false, 48) == "admin_evenement_ajouter")) {
            yield "background: rgba(255,255,255,0.15);";
        }
        yield "\"
           class=\"menu-item\">
           <i class=\"fas fa-plus-circle\" style=\"margin-right: 15px; font-size: 1.1rem;\"></i>
           <span>Add events </span>
        </a>
    </nav>

    <!-- Section utilisateur (simplifiée sans déconnexion) -->
    <div style=\"padding: 20px; border-top: 1px solid rgba(255,255,255,0.1); background: rgba(0,0,0,0.1);\">
        <div style=\"display: flex; align-items: center;\">
            <div style=\"width: 45px; height: 45px; border-radius: 50%; background: rgba(255,255,255,0.1); 
                     display: flex; align-items: center; justify-content: center; margin-right: 15px;
                     border: 2px solid #bbe1fa;\">
                <i class=\"fas fa-user\"></i>
            </div>
            <div>
                <div style=\"font-weight: 500;\">Administrateur</div>
            </div>
        </div>
    </div>
</aside>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Admin/Gestionevenement/sidebar.html.twig";
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
        return array (  108 => 48,  96 => 39,  84 => 32,  72 => 23,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<aside class=\"admin-sidebar\" style=\"
    width: var(--sidebar-width);
    background: var(--sidebar-bg);
    color: white;
    position: fixed;
    height: 100vh;
    left: 0;
    top: 0;
    z-index: 1000;
    display: flex;
    flex-direction: column;
    border-right: 1px solid rgba(255,255,255,0.1);
\">

    <!-- Header -->
    <div style=\"padding: 25px; border-bottom: 1px solid rgba(255,255,255,0.1); text-align: center;\">
        <h3 style=\"margin: 0; font-weight: 600; letter-spacing: 1px;\">EVENTOPIA</h3>
    </div>

    <!-- Menu principal -->
    <nav style=\"flex: 1; padding: 20px 0; display: flex; flex-direction: column;\">
        <!-- Liste des événements -->
        <a href=\"{{ path('admin_evenement_liste') }}\" 
           style=\"color: white; 
                  padding: 14px 25px; 
                  margin: 5px 15px; 
                  display: flex; 
                  align-items: center; 
                  text-decoration: none; 
                  border-radius: 6px;
                  transition: all 0.3s;
                  {% if app.request.attributes.get('_route') starts with 'admin_evenement_liste' %}background: rgba(255,255,255,0.15);{% endif %}\"
           class=\"menu-item\">
           <i class=\"fas fa-calendar-alt\" style=\"margin-right: 15px; font-size: 1.1rem;\"></i>
           <span>Events</span>
        </a>

        <!-- Ajouter événement -->
        <a href=\"{{ path('admin_evenement_ajouter') }}\" 
           style=\"color: white; 
                  padding: 14px 25px; 
                  margin: 5px 15px; 
                  display: flex; 
                  align-items: center; 
                  text-decoration: none; 
                  border-radius: 6px;
                  transition: all 0.3s;
                  {% if app.request.attributes.get('_route') == 'admin_evenement_ajouter' %}background: rgba(255,255,255,0.15);{% endif %}\"
           class=\"menu-item\">
           <i class=\"fas fa-plus-circle\" style=\"margin-right: 15px; font-size: 1.1rem;\"></i>
           <span>Add events </span>
        </a>
    </nav>

    <!-- Section utilisateur (simplifiée sans déconnexion) -->
    <div style=\"padding: 20px; border-top: 1px solid rgba(255,255,255,0.1); background: rgba(0,0,0,0.1);\">
        <div style=\"display: flex; align-items: center;\">
            <div style=\"width: 45px; height: 45px; border-radius: 50%; background: rgba(255,255,255,0.1); 
                     display: flex; align-items: center; justify-content: center; margin-right: 15px;
                     border: 2px solid #bbe1fa;\">
                <i class=\"fas fa-user\"></i>
            </div>
            <div>
                <div style=\"font-weight: 500;\">Administrateur</div>
            </div>
        </div>
    </div>
</aside>", "Admin/Gestionevenement/sidebar.html.twig", "C:\\Users\\dell\\Desktop\\eventopia (1)\\eventopia\\eventopia\\templates\\Admin\\Gestionevenement\\sidebar.html.twig");
    }
}
