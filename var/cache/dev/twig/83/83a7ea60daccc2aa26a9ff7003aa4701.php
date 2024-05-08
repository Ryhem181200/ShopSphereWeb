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

/* security/login.html.twig */
class __TwigTemplate_ea143c23ce2bb2b7e438da9476f63123 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <!-- Required meta tags -->
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <title>Admin Login</title>
  <link rel=\"icon\" type=\"image/x-icon\" href=\"../favicon-32x32.png\">
  <!-- plugins:css -->
  <link rel=\"stylesheet\" href=\"../back/vendors/feather/feather.css\">
  <link rel=\"stylesheet\" href=\"../back/vendors/ti-icons/css/themify-icons.css\">
  <link rel=\"stylesheet\" href=\"../back/vendors/css/vendor.bundle.base.css\">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel=\"stylesheet\" href=\"../back/css/vertical-layout-light/style.css\">
  <!-- endinject -->
</head>

<body>
  <div class=\"container-scroller\">
  ";
        // line 24
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 24, $this->source); })())) {
            // line 25
            echo "\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 25, $this->source); })()), "messageKey", [], "any", false, false, false, 25), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 25, $this->source); })()), "messageData", [], "any", false, false, false, 25), "security"), "html", null, true);
            echo "</div>
\t\t\t\t";
        }
        // line 27
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27)) {
            // line 28
            echo "\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\tYou are logged in as ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "userIdentifier", [], "any", false, false, false, 29), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 32
        echo "\t\t\t\t";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32)) {
            // line 33
            echo "    <div class=\"container-fluid page-body-wrapper full-page-wrapper\">
      <div class=\"content-wrapper d-flex align-items-center auth px-0\">
        <div class=\"row w-100 mx-0\">
          <div class=\"col-lg-4 mx-auto\">
            <div class=\"auth-form-light text-left py-5 px-4 px-sm-5\">
              <div class=\"brand-logo\">
                <img src=\"../userlogin/assets/images/blacklogo.png\" alt=\"logo\" style=\"center\">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class=\"font-weight-light\">Sign in to continue.</h6>
              <form class=\"pt-3\" method=\"post\">
                <div class=\"form-group\">
                  <input type=\"email\" value=\"";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 45, $this->source); })()), "html", null, true);
            echo "\" name=\"email\" id=\"exampleInputEmail1\" placeholder=\"Email\" class=\"form-control form-control-lg\" autocomplete=\"email\" required autofocus>
                </div>
                <div class=\"form-group\">
\t\t\t\t<input type=\"password\" name=\"password\" id=\"exampleInputPassword1\"  class=\"form-control form-control-lg\" placeholder=\"Password\" autocomplete=\"current-password\" required>
                </div>
                ";
            // line 51
            echo "\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\">
                <div class=\"mt-3\">
                    <input type=\"submit\" name=\"login\" id=\"login\" class=\"btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn\" type=\"button\" value=\"Login\" required>
                </div>
                <div class=\"my-2 d-flex justify-content-between align-items-center\">
                  <div class=\"form-check\">
                    <label class=\"form-check-label text-muted\">
                      <input type=\"checkbox\" class=\"form-check-input\">
                      Keep me signed in
                    </label>
                  </div>
                  <a href=\"#\" class=\"auth-link text-black\">Forgot password?</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
\t  
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  ";
        }
        // line 75
        echo "  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
  <script src=\"../back/vendors/js/vendor.bundle.base.js\"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src=\"../back/js/off-canvas.js\"></script>
  <script src=\"../back/js/hoverable-collapse.js\"></script>
  <script src=\"../back/js/template.js\"></script>
  <script src=\"../back/js/settings.js\"></script>
  <script src=\"../back/js/todolist.js\"></script>
  <!-- endinject -->
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
        return "security/login.html.twig";
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
        return array (  143 => 75,  115 => 51,  107 => 45,  93 => 33,  90 => 32,  82 => 29,  79 => 28,  76 => 27,  70 => 25,  68 => 24,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <!-- Required meta tags -->
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <title>Admin Login</title>
  <link rel=\"icon\" type=\"image/x-icon\" href=\"../favicon-32x32.png\">
  <!-- plugins:css -->
  <link rel=\"stylesheet\" href=\"../back/vendors/feather/feather.css\">
  <link rel=\"stylesheet\" href=\"../back/vendors/ti-icons/css/themify-icons.css\">
  <link rel=\"stylesheet\" href=\"../back/vendors/css/vendor.bundle.base.css\">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel=\"stylesheet\" href=\"../back/css/vertical-layout-light/style.css\">
  <!-- endinject -->
</head>

<body>
  <div class=\"container-scroller\">
  {% if error %}
\t\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t\t{% endif %}
\t\t\t\t{% if app.user %}
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\tYou are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t{% if not app.user %}
    <div class=\"container-fluid page-body-wrapper full-page-wrapper\">
      <div class=\"content-wrapper d-flex align-items-center auth px-0\">
        <div class=\"row w-100 mx-0\">
          <div class=\"col-lg-4 mx-auto\">
            <div class=\"auth-form-light text-left py-5 px-4 px-sm-5\">
              <div class=\"brand-logo\">
                <img src=\"../userlogin/assets/images/blacklogo.png\" alt=\"logo\" style=\"center\">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class=\"font-weight-light\">Sign in to continue.</h6>
              <form class=\"pt-3\" method=\"post\">
                <div class=\"form-group\">
                  <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"exampleInputEmail1\" placeholder=\"Email\" class=\"form-control form-control-lg\" autocomplete=\"email\" required autofocus>
                </div>
                <div class=\"form-group\">
\t\t\t\t<input type=\"password\" name=\"password\" id=\"exampleInputPassword1\"  class=\"form-control form-control-lg\" placeholder=\"Password\" autocomplete=\"current-password\" required>
                </div>
                {# login.html.twig #}
\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                <div class=\"mt-3\">
                    <input type=\"submit\" name=\"login\" id=\"login\" class=\"btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn\" type=\"button\" value=\"Login\" required>
                </div>
                <div class=\"my-2 d-flex justify-content-between align-items-center\">
                  <div class=\"form-check\">
                    <label class=\"form-check-label text-muted\">
                      <input type=\"checkbox\" class=\"form-check-input\">
                      Keep me signed in
                    </label>
                  </div>
                  <a href=\"#\" class=\"auth-link text-black\">Forgot password?</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
\t  
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  {% endif %}
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
  <script src=\"../back/vendors/js/vendor.bundle.base.js\"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src=\"../back/js/off-canvas.js\"></script>
  <script src=\"../back/js/hoverable-collapse.js\"></script>
  <script src=\"../back/js/template.js\"></script>
  <script src=\"../back/js/settings.js\"></script>
  <script src=\"../back/js/todolist.js\"></script>
  <!-- endinject -->
</body>

</html>
", "security/login.html.twig", "C:\\Users\\antho\\Desktop\\webdev\\test1\\ShopSphere\\testing.symfony.auth\\testing.auth.symfony\\templates\\security\\login.html.twig");
    }
}
