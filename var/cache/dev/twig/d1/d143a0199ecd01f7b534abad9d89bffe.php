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

/* registration/register.html.twig */
class __TwigTemplate_d07818fb99d88015094c55d85bb12049 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
  <title>ShopSphere Registration</title>
  <link rel=\"icon\" type=\"image/x-icon\" href=\"favicon-32x32.png\">
  <link href=\"https://fonts.googleapis.com/css?family=Karla:400,700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css\">
  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"userlogin/assets/css/login.css\">
</head>
<body>
  ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15)) {
            // line 16
            echo "  <div class=\"mb-3\">
    You are logged in as ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "username", [], "any", false, false, false, 17), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
  </div>
  ";
        }
        // line 20
        echo "
  ";
        // line 21
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21)) {
            // line 22
            echo "  <main class=\"d-flex align-items-center min-vh-100 py-3 py-md-0\">
    <div class=\"container\">
      <div class=\"card login-card\">
        <div class=\"row no-gutters\">
          <div class=\"col-md-5\">
            <img src=\"userlogin/assets/images/register.jpg\" alt=\"login\" class=\"login-card-img\">
          </div>
          <div class=\"col-md-7\">
            <div class=\"card-body\">
              <div class=\"brand-wrapper\">
                <a href=\"/\">
                  <img src=\"userlogin/assets/images/blacklogo.png\" alt=\"logo\" class=\"logo\">
                </a>
              </div>
              <p class=\"login-card-description\">Create an account</p>
              <form method=\"post\" novalidate>
              ";
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "_token", [], "any", false, false, false, 38), 'widget');
            echo "
                <div class=\"form-group\">
                  <label for=\"nom\" class=\"sr-only\">Nom</label>
                  ";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "nom", [], "any", false, false, false, 41), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Nom", "required" => "required", "autofocus" => "autofocus"]]);
            echo "
                </div>
                <div class=\"form-group\">
                  <label for=\"prenom\" class=\"sr-only\">Prénom</label>
                  ";
            // line 45
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "prenom", [], "any", false, false, false, 45), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Prénom", "required" => "required"]]);
            echo "
                </div>
                <div class=\"form-group\">
                  <label for=\"email\" class=\"sr-only\">Email</label>
                  ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "email", [], "any", false, false, false, 49), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Email address", "required" => "required"]]);
            echo "
                </div>
                <div class=\"form-group\">
                  <label for=\"password\" class=\"sr-only\">Password</label>
                  ";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "password", [], "any", false, false, false, 53), "first", [], "any", false, false, false, 53), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Password", "required" => "required"]]);
            echo "
                </div>
                <div class=\"form-group\">
                  <label for=\"password_second\" class=\"sr-only\">Confirm Password</label>
                  ";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "password", [], "any", false, false, false, 57), "second", [], "any", false, false, false, 57), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Confirm Password", "required" => "required"]]);
            echo "
                </div>
                <div class=\"form-group\">
                  <label for=\"telephone\" class=\"sr-only\">Téléphone</label>
                  ";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "telephone", [], "any", false, false, false, 61), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Téléphone", "required" => "required"]]);
            echo "
                </div>
                <div class=\"form-group\">
                  <label for=\"adresse\" class=\"sr-only\">Adresse</label>
                  ";
            // line 65
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "adresse", [], "any", false, false, false, 65), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Adresse", "required" => "required"]]);
            echo "
                </div>
                <div class=\"form-check\">
                  <input class=\"form-check-input\" name=\"terms\" type=\"checkbox\" value=\"\" id=\"acceptTerms\" required>
                  <label class=\"form-check-label\" for=\"acceptTerms\">I agree and accept the <a href=\"#\">terms and conditions</a></label>
                  <div class=\"invalid-feedback\">You must agree before submitting.</div>
                </div>
                <button class=\"btn btn-primary w-100 mt-3\" type=\"submit\">Create Account</button>
                <p class=\"small mt-3\">Already have an account? <a href=\"/login\" class=\"text-reset\">Log in here</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  ";
        }
        // line 82
        echo "  <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"></script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"></script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "registration/register.html.twig";
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
        return array (  163 => 82,  143 => 65,  136 => 61,  129 => 57,  122 => 53,  115 => 49,  108 => 45,  101 => 41,  95 => 38,  77 => 22,  75 => 21,  72 => 20,  64 => 17,  61 => 16,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
  <title>ShopSphere Registration</title>
  <link rel=\"icon\" type=\"image/x-icon\" href=\"favicon-32x32.png\">
  <link href=\"https://fonts.googleapis.com/css?family=Karla:400,700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css\">
  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"userlogin/assets/css/login.css\">
</head>
<body>
  {% if app.user %}
  <div class=\"mb-3\">
    You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
  </div>
  {% endif %}

  {% if not app.user %}
  <main class=\"d-flex align-items-center min-vh-100 py-3 py-md-0\">
    <div class=\"container\">
      <div class=\"card login-card\">
        <div class=\"row no-gutters\">
          <div class=\"col-md-5\">
            <img src=\"userlogin/assets/images/register.jpg\" alt=\"login\" class=\"login-card-img\">
          </div>
          <div class=\"col-md-7\">
            <div class=\"card-body\">
              <div class=\"brand-wrapper\">
                <a href=\"/\">
                  <img src=\"userlogin/assets/images/blacklogo.png\" alt=\"logo\" class=\"logo\">
                </a>
              </div>
              <p class=\"login-card-description\">Create an account</p>
              <form method=\"post\" novalidate>
              {{ form_widget(form._token) }}
                <div class=\"form-group\">
                  <label for=\"nom\" class=\"sr-only\">Nom</label>
                  {{ form_row(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'Nom', 'required': 'required', 'autofocus': 'autofocus'}}) }}
                </div>
                <div class=\"form-group\">
                  <label for=\"prenom\" class=\"sr-only\">Prénom</label>
                  {{ form_row(form.prenom, {'attr': {'class': 'form-control', 'placeholder': 'Prénom', 'required': 'required'}}) }}
                </div>
                <div class=\"form-group\">
                  <label for=\"email\" class=\"sr-only\">Email</label>
                  {{ form_row(form.email, {'attr': {'class': 'form-control', 'placeholder': 'Email address', 'required': 'required'}}) }}
                </div>
                <div class=\"form-group\">
                  <label for=\"password\" class=\"sr-only\">Password</label>
                  {{ form_row(form.password.first, {'attr': {'class': 'form-control', 'placeholder': 'Password', 'required': 'required'}}) }}
                </div>
                <div class=\"form-group\">
                  <label for=\"password_second\" class=\"sr-only\">Confirm Password</label>
                  {{ form_row(form.password.second, {'attr': {'class': 'form-control', 'placeholder': 'Confirm Password', 'required': 'required'}}) }}
                </div>
                <div class=\"form-group\">
                  <label for=\"telephone\" class=\"sr-only\">Téléphone</label>
                  {{ form_row(form.telephone, {'attr': {'class': 'form-control', 'placeholder': 'Téléphone', 'required': 'required'}}) }}
                </div>
                <div class=\"form-group\">
                  <label for=\"adresse\" class=\"sr-only\">Adresse</label>
                  {{ form_row(form.adresse, {'attr': {'class': 'form-control', 'placeholder': 'Adresse', 'required': 'required'}}) }}
                </div>
                <div class=\"form-check\">
                  <input class=\"form-check-input\" name=\"terms\" type=\"checkbox\" value=\"\" id=\"acceptTerms\" required>
                  <label class=\"form-check-label\" for=\"acceptTerms\">I agree and accept the <a href=\"#\">terms and conditions</a></label>
                  <div class=\"invalid-feedback\">You must agree before submitting.</div>
                </div>
                <button class=\"btn btn-primary w-100 mt-3\" type=\"submit\">Create Account</button>
                <p class=\"small mt-3\">Already have an account? <a href=\"/login\" class=\"text-reset\">Log in here</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  {% endif %}
  <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"></script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"></script>
</body>
</html>", "registration/register.html.twig", "C:\\Users\\antho\\Desktop\\webdev\\test1\\ShopSphere\\testing.symfony.auth\\testing.auth.symfony\\templates\\registration\\register.html.twig");
    }
}
