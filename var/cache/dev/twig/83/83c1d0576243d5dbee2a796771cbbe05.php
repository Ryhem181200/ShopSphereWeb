<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* back/profile.html.twig */
class __TwigTemplate_6744cd8bf0ecd9ce7c1e39dea5506fe8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'inside' => [$this, 'block_inside'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/profile.html.twig"));

        // line 1
        $this->loadTemplate("back/base.html.twig", "back/profile.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('inside', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->loadTemplate("back/base2.html.twig", "back/profile.html.twig", 45)->display($context);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_inside($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inside"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inside"));

        // line 4
        echo "<div class=\"col-12 grid-margin stretch-card\">
<div class=\"card\">
<div class=\"card-body d-flex\">
<div class=\"col-md-6\">
<h4 class=\"card-title\">User Information</h4>
<p class=\"card-description\">
Your account information
</p>
<div class=\"form-group\">
<label for=\"exampleInputNom1\" class=\"font-weight-bold\">Nom:</label>
<p id=\"exampleInputNom1\" class=\"mb-0 font-size-16\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "getNom", [], "method", false, false, false, 14), "html", null, true);
        echo "</p>
</div>
<div class=\"form-group\">
<label for=\"exampleInputPrenom\" class=\"font-weight-bold\">Prenom:</label>
<p id=\"exampleInputPrenom1\" class=\"mb-0 font-size-16\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "getPrenom", [], "method", false, false, false, 18), "html", null, true);
        echo "</p>
</div>
<div class=\"form-group\">
<label for=\"exampleInputEmail3\" class=\"font-weight-bold\">Email address:</label>
<p id=\"exampleInputEmail3\" class=\"mb-0 font-size-16\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "getEmail", [], "method", false, false, false, 22), "html", null, true);
        echo "</p>
</div>
<div class=\"form-group\">
<label for=\"exampleInputTelephone\" class=\"font-weight-bold\">Telephone:</label>
<p id=\"exampleInputTelephone1\" class=\"mb-0 font-size-16\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "getTelephone", [], "method", false, false, false, 26), "html", null, true);
        echo "</p>
</div>
<div class=\"form-group\">
<label for=\"exampleInputAddresse1\" class=\"font-weight-bold\">Addresse:</label>
<p id=\"exampleInputAddresse1\" class=\"mb-0 font-size-16\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "getAdresse", [], "method", false, false, false, 30), "html", null, true);
        echo "</p>
</div>
</div>
<div class=\"col-md-6 d-flex justify-content-center align-items-center\">
";
        // line 34
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "getImage", [], "method", false, false, false, 34)) {
            // line 35
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("../uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "getImage", [], "method", false, false, false, 35))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "getNom", [], "method", false, false, false, 35), "html", null, true);
            echo "\" class=\"img-fluid rounded-circle\" style=\"max-width: 200px;\">
";
        } else {
            // line 37
            echo "<i class=\"mdi mdi-account-circle\" style=\"font-size: 200px;\"></i>
";
        }
        // line 39
        echo "</div>
</div>
</div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/profile.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  135 => 39,  131 => 37,  123 => 35,  121 => 34,  114 => 30,  107 => 26,  100 => 22,  93 => 18,  86 => 14,  74 => 4,  64 => 3,  54 => 45,  51 => 44,  49 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include \"back/base.html.twig\" %}

{% block inside %}
<div class=\"col-12 grid-margin stretch-card\">
<div class=\"card\">
<div class=\"card-body d-flex\">
<div class=\"col-md-6\">
<h4 class=\"card-title\">User Information</h4>
<p class=\"card-description\">
Your account information
</p>
<div class=\"form-group\">
<label for=\"exampleInputNom1\" class=\"font-weight-bold\">Nom:</label>
<p id=\"exampleInputNom1\" class=\"mb-0 font-size-16\">{{ app.user.getNom() }}</p>
</div>
<div class=\"form-group\">
<label for=\"exampleInputPrenom\" class=\"font-weight-bold\">Prenom:</label>
<p id=\"exampleInputPrenom1\" class=\"mb-0 font-size-16\">{{ app.user.getPrenom() }}</p>
</div>
<div class=\"form-group\">
<label for=\"exampleInputEmail3\" class=\"font-weight-bold\">Email address:</label>
<p id=\"exampleInputEmail3\" class=\"mb-0 font-size-16\">{{ app.user.getEmail() }}</p>
</div>
<div class=\"form-group\">
<label for=\"exampleInputTelephone\" class=\"font-weight-bold\">Telephone:</label>
<p id=\"exampleInputTelephone1\" class=\"mb-0 font-size-16\">{{ app.user.getTelephone() }}</p>
</div>
<div class=\"form-group\">
<label for=\"exampleInputAddresse1\" class=\"font-weight-bold\">Addresse:</label>
<p id=\"exampleInputAddresse1\" class=\"mb-0 font-size-16\">{{ app.user.getAdresse() }}</p>
</div>
</div>
<div class=\"col-md-6 d-flex justify-content-center align-items-center\">
{% if app.user.getImage() %}
<img src=\"{{ asset('../uploads/' ~ app.user.getImage()) }}\" alt=\"{{ app.user.getNom() }}\" class=\"img-fluid rounded-circle\" style=\"max-width: 200px;\">
{% else %}
<i class=\"mdi mdi-account-circle\" style=\"font-size: 200px;\"></i>
{% endif %}
</div>
</div>
</div>
</div>
{% endblock %}

{% include \"back/base2.html.twig\" %}", "back/profile.html.twig", "C:\\Users\\antho\\Desktop\\webdev\\test1\\ShopSphere\\testing.symfony.auth\\testing.auth.symfony\\templates\\back\\profile.html.twig");
    }
}
