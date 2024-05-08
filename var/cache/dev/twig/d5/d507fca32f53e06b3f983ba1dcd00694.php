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

/* security/userlogin.html.twig */
class __TwigTemplate_6c008bc8d7152c6468c216858619c1b8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/userlogin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/userlogin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
  <title>ShopSphere Login</title>
  <link rel=\"icon\" type=\"image/x-icon\" href=\"favicon-32x32.png\">
  <link href=\"https://fonts.googleapis.com/css?family=Karla:400,700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css\">
  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"userlogin/assets/css/login.css\">
</head>
<body>
  ";
        // line 15
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "      <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 16, $this->source); })()), "messageKey", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 16, $this->source); })()), "messageData", [], "any", false, false, false, 16), "security"), "html", null, true);
            echo "</div>
      ";
        }
        // line 18
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18)) {
            // line 19
            echo "      <div class=\"mb-3\">
          You are logged in as ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "username", [], "any", false, false, false, 20), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
      </div>
      ";
        }
        // line 23
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23)) {
            // line 24
            echo "  <main class=\"d-flex align-items-center min-vh-100 py-3 py-md-0\">
    <div class=\"container\">
      <div class=\"card login-card\">
        <div class=\"row no-gutters\">
          <div class=\"col-md-5\">
            <img src=\"userlogin/assets/images/login.jpg\" alt=\"login\" class=\"login-card-img\">
          </div>
          <div class=\"col-md-7\">
            <div class=\"card-body\">
              <div class=\"brand-wrapper\">
                <a href=\"/\">
                  <img src=\"userlogin/assets/images/blacklogo.png\" alt=\"logo\" class=\"logo\">
                  </img>
                </a>
              </div>
              <p class=\"login-card-description\">Sign into your account</p>
              <form method=\"post\" action=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" id=\"loginForm\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\">
    <div class=\"form-group\">
        <label for=\"email\" class=\"sr-only\">Email</label>
        <input type=\"email\" value=\"";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["last_email"]) || array_key_exists("last_email", $context) ? $context["last_email"] : (function () { throw new RuntimeError('Variable "last_email" does not exist.', 44, $this->source); })()), "html", null, true);
            echo "\" name=\"email\" id=\"email\" class=\"form-control\" placeholder=\"Email address\" required autofocus>
    </div>
    <div class=\"form-group mb-4\">
        <label for=\"password\" class=\"sr-only\">Password</label>
        <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control\" placeholder=\"***********\">
    </div>
    <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 50
            echo twig_escape_filter($this->env, (isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 50, $this->source); })()), "html", null, true);
            echo "\" data-callback=\"enableLoginButton\"></div>
    <input type=\"hidden\" name=\"g-recaptcha-response\" id=\"g-recaptcha-response\">
    <br>
    <input type=\"submit\" name=\"login\" id=\"login\" class=\"btn btn-block login-btn mb-4\" value=\"Login\" disabled>
</form>
                <a href=\"#!\" class=\"forgot-password-link\">Forgot password?</a>
                <p class=\"login-card-footer-text\">Don't have an account? <a href=\"/registration\" class=\"text-reset\">Register here</a></p>
                <nav class=\"login-card-footer-nav\">
                  <a href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_terms_of_use");
            echo "\" target=\"_blank\">Terms of use.</a>
                  <a href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_privacy_policy");
            echo "\" target=\"_blank\">Privacy policy</a>
                </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  ";
        }
        // line 68
        echo "<script>
    function enableLoginButton() {
        document.getElementById('login').removeAttribute('disabled');
    }
</script>
    <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
  <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"></script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"></script>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/userlogin.html.twig";
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
        return array (  148 => 68,  136 => 59,  132 => 58,  121 => 50,  112 => 44,  106 => 41,  102 => 40,  84 => 24,  81 => 23,  73 => 20,  70 => 19,  67 => 18,  61 => 16,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
  <title>ShopSphere Login</title>
  <link rel=\"icon\" type=\"image/x-icon\" href=\"favicon-32x32.png\">
  <link href=\"https://fonts.googleapis.com/css?family=Karla:400,700&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css\">
  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"userlogin/assets/css/login.css\">
</head>
<body>
  {% if error %}
      <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
      {% endif %}
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
            <img src=\"userlogin/assets/images/login.jpg\" alt=\"login\" class=\"login-card-img\">
          </div>
          <div class=\"col-md-7\">
            <div class=\"card-body\">
              <div class=\"brand-wrapper\">
                <a href=\"/\">
                  <img src=\"userlogin/assets/images/blacklogo.png\" alt=\"logo\" class=\"logo\">
                  </img>
                </a>
              </div>
              <p class=\"login-card-description\">Sign into your account</p>
              <form method=\"post\" action=\"{{ path('app_login') }}\" id=\"loginForm\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
    <div class=\"form-group\">
        <label for=\"email\" class=\"sr-only\">Email</label>
        <input type=\"email\" value=\"{{ last_email }}\" name=\"email\" id=\"email\" class=\"form-control\" placeholder=\"Email address\" required autofocus>
    </div>
    <div class=\"form-group mb-4\">
        <label for=\"password\" class=\"sr-only\">Password</label>
        <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control\" placeholder=\"***********\">
    </div>
    <div class=\"g-recaptcha\" data-sitekey=\"{{ recaptcha_site_key }}\" data-callback=\"enableLoginButton\"></div>
    <input type=\"hidden\" name=\"g-recaptcha-response\" id=\"g-recaptcha-response\">
    <br>
    <input type=\"submit\" name=\"login\" id=\"login\" class=\"btn btn-block login-btn mb-4\" value=\"Login\" disabled>
</form>
                <a href=\"#!\" class=\"forgot-password-link\">Forgot password?</a>
                <p class=\"login-card-footer-text\">Don't have an account? <a href=\"/registration\" class=\"text-reset\">Register here</a></p>
                <nav class=\"login-card-footer-nav\">
                  <a href=\"{{ path('app_terms_of_use') }}\" target=\"_blank\">Terms of use.</a>
                  <a href=\"{{ path('app_privacy_policy') }}\" target=\"_blank\">Privacy policy</a>
                </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  {% endif %}
<script>
    function enableLoginButton() {
        document.getElementById('login').removeAttribute('disabled');
    }
</script>
    <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
  <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"></script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"></script>
</body>
</html>
", "security/userlogin.html.twig", "C:\\Users\\antho\\Desktop\\webdev\\test1\\ShopSphere\\testing.symfony.auth\\testing.auth.symfony\\templates\\security\\userlogin.html.twig");
    }
}
