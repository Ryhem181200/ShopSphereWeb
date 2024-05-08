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

/* back/base.html.twig */
class __TwigTemplate_69ae49c4b0ffd3dcfebd57fe3062f867 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <!-- Required meta tags -->
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <title>Shopsphere Admin</title>
  <!-- plugins:css -->
  <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendors/feather/feather.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendors/css/vendor.bundle.base.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        echo "\">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendors/datatables.net-bs4/dataTables.bootstrap4.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/select.dataTables.min.css"), "html", null, true);
        echo "\">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/css/vertical-layout-light/style.css"), "html", null, true);
        echo "\">
  <!-- endinject -->
  <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon-32x32.png"), "html", null, true);
        echo "\">
</head>
<body>
  <div class=\"container-scroller\">
    <!-- partial:partials/_navbar.html -->
    <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
      <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-center\">
        <a class=\"navbar-brand brand-logo mr-5\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("userlogin/assets/images/blacklogo.png"), "html", null, true);
        echo "\" class=\"mr-2\" alt=\"logo\"/></a>
        <a class=\"navbar-brand brand-logo-mini\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("userlogin/assets/images/blacklogo.png"), "html", null, true);
        echo "\" alt=\"logo\"/></a>
      </div>
      <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
        <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
          <span class=\"icon-menu\"></span>
        </button>
        <ul class=\"navbar-nav mr-lg-2\">
          <li class=\"nav-item nav-search d-none d-lg-block\">
            <div class=\"input-group\">
              <div class=\"input-group-prepend hover-cursor\" id=\"navbar-search-icon\">
                <span class=\"input-group-text\" id=\"search\">
                  <i class=\"icon-search\"></i>
                </span>
              </div>
              <input type=\"text\" class=\"form-control\" id=\"navbar-search-input\" placeholder=\"Search now\" aria-label=\"search\" aria-describedby=\"search\">
            </div>
          </li>
        </ul>
        <ul class=\"navbar-nav navbar-nav-right\">
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
              <i class=\"icon-bell mx-0\"></i>
              <span class=\"count\"></span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
              <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Notifications</p>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-success\">
                    <i class=\"ti-info-alt mx-0\"></i>
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <h6 class=\"preview-subject font-weight-normal\">Application Error</h6>
                  <p class=\"font-weight-light small-text mb-0 text-muted\">
                    Just now
                  </p>
                </div>
              </a>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-warning\">
                    <i class=\"ti-settings mx-0\"></i>
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <h6 class=\"preview-subject font-weight-normal\">Settings</h6>
                  <p class=\"font-weight-light small-text mb-0 text-muted\">
                    Private message
                  </p>
                </div>
              </a>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-info\">
                    <i class=\"ti-user mx-0\"></i>
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <h6 class=\"preview-subject font-weight-normal\">New user registration</h6>
                  <p class=\"font-weight-light small-text mb-0 text-muted\">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class=\"nav-item nav-profile dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" id=\"profileDropdown\">
              <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "user", [], "any", false, false, false, 100), "getImage", [], "method", false, false, false, 100))), "html", null, true);
        echo "\" alt=\"profile\"/>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
              <a class=\"dropdown-item\" href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_profile");
        echo "\">
                <i class=\"ti-eye text-primary\"></i>
                Personal Profile
              </a>
              <a class=\"dropdown-item\" href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_settings");
        echo "\">
                <i class=\"ti-settings text-primary\"></i>
                Settings
              </a>
\t\t\t        <a class=\"dropdown-item\" href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_password");
        echo "\">
                <i class=\"ti-key text-primary\"></i>
                Change Password
              </a>
              <a class=\"dropdown-item\" href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
                <i class=\"ti-power-off text-primary\"></i>
                Logout
              </a>
            </div>
          </li>
          <li class=\"nav-item nav-settings d-none d-lg-flex\">
            <a class=\"nav-link\" href=\"#\">
              <i class=\"icon-ellipsis\"></i>
            </a>
          </li>
        </ul>
        <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
          <span class=\"icon-menu\"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class=\"container-fluid page-body-wrapper\">
      <!-- partial:partials/_settings-panel.html -->
      <div class=\"theme-setting-wrapper\">
        <div id=\"settings-trigger\"><i class=\"ti-settings\"></i></div>
        <div id=\"theme-settings\" class=\"settings-panel\">
          <i class=\"settings-close ti-close\"></i>
          <p class=\"settings-heading\">SIDEBAR SKINS</p>
          <div class=\"sidebar-bg-options selected\" id=\"sidebar-light-theme\"><div class=\"img-ss rounded-circle bg-light border mr-3\"></div>Light</div>
          <div class=\"sidebar-bg-options\" id=\"sidebar-dark-theme\"><div class=\"img-ss rounded-circle bg-dark border mr-3\"></div>Dark</div>
          <p class=\"settings-heading mt-2\">HEADER SKINS</p>
          <div class=\"color-tiles mx-0 px-4\">
            <div class=\"tiles success\"></div>
            <div class=\"tiles warning\"></div>
            <div class=\"tiles danger\"></div>
            <div class=\"tiles info\"></div>
            <div class=\"tiles dark\"></div>
            <div class=\"tiles default\"></div>
          </div>
        </div>
      </div>
      <div id=\"right-sidebar\" class=\"settings-panel\">
        <i class=\"settings-close ti-close\"></i>
        <ul class=\"nav nav-tabs border-top\" id=\"setting-panel\" role=\"tablist\">
          <li class=\"nav-item\">
            <a class=\"nav-link active\" id=\"todo-tab\" data-toggle=\"tab\" href=\"#todo-section\" role=\"tab\" aria-controls=\"todo-section\" aria-expanded=\"true\">TO DO LIST</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" id=\"chats-tab\" data-toggle=\"tab\" href=\"#chats-section\" role=\"tab\" aria-controls=\"chats-section\">CHATS</a>
          </li>
        </ul>
        <div class=\"tab-content\" id=\"setting-content\">
          <div class=\"tab-pane fade show active scroll-wrapper\" id=\"todo-section\" role=\"tabpanel\" aria-labelledby=\"todo-section\">
            <div class=\"add-items d-flex px-3 mb-0\">
              <form class=\"form w-100\">
                <div class=\"form-group d-flex\">
                  <input type=\"text\" class=\"form-control todo-list-input\" placeholder=\"Add To-do\">
                  <button type=\"submit\" class=\"add btn btn-primary todo-list-add-btn\" id=\"add-task\">Add</button>
                </div>
              </form>
            </div>
            <div class=\"list-wrapper px-3\">
              <ul class=\"d-flex flex-column-reverse todo-list\">
                <li>
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class=\"remove ti-close\"></i>
                </li>
                <li>
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class=\"remove ti-close\"></i>
                </li>
                <li>
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class=\"remove ti-close\"></i>
                </li>
                <li class=\"completed\">
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class=\"remove ti-close\"></i>
                </li>
                <li class=\"completed\">
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\" checked>
                      Project review
                    </label>
                  </div>
                  <i class=\"remove ti-close\"></i>
                </li>
              </ul>
            </div>
            <h4 class=\"px-3 text-muted mt-5 font-weight-light mb-0\">Events</h4>
            <div class=\"events pt-4 px-3\">
              <div class=\"wrapper d-flex mb-2\">
                <i class=\"ti-control-record text-primary mr-2\"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class=\"mb-0 font-weight-thin text-gray\">Creating component page build a js</p>
              <p class=\"text-gray mb-0\">The total number of sessions</p>
            </div>
            <div class=\"events pt-4 px-3\">
              <div class=\"wrapper d-flex mb-2\">
                <i class=\"ti-control-record text-primary mr-2\"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class=\"mb-0 font-weight-thin text-gray\">Meeting with Alisa</p>
              <p class=\"text-gray mb-0 \">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class=\"tab-pane fade\" id=\"chats-section\" role=\"tabpanel\" aria-labelledby=\"chats-section\">
            <div class=\"d-flex align-items-center justify-content-between border-bottom\">
              <p class=\"settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0\">Friends</p>
              <small class=\"settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal\">See All</small>
            </div>
            <ul class=\"chat-list\">
              <li class=\"list active\">
                <div class=\"profile\"><img src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/faces/face1.jpg"), "html", null, true);
        echo "\" alt=\"image\"><span class=\"online\"></span></div>
                <div class=\"info\">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class=\"text-muted my-auto\">19 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/faces/face2.jpg"), "html", null, true);
        echo "\" alt=\"image\"><span class=\"offline\"></span></div>
                <div class=\"info\">
                  <div class=\"wrapper d-flex\">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class=\"badge badge-success badge-pill my-auto mx-2\">4</div>
                <small class=\"text-muted my-auto\">23 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/faces/face3.jpg"), "html", null, true);
        echo "\" alt=\"image\"><span class=\"online\"></span></div>
                <div class=\"info\">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class=\"text-muted my-auto\">14 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/faces/face4.jpg"), "html", null, true);
        echo "\" alt=\"image\"><span class=\"offline\"></span></div>
                <div class=\"info\">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class=\"text-muted my-auto\">2 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/faces/face5.jpg"), "html", null, true);
        echo "\" alt=\"image\"><span class=\"online\"></span></div>
                <div class=\"info\">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class=\"text-muted my-auto\">5 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/images/faces/face6.jpg"), "html", null, true);
        echo "\" alt=\"image\"><span class=\"online\"></span></div>
                <div class=\"info\">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class=\"text-muted my-auto\">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <ul class=\"nav\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 308
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        echo "\">
              <i class=\"icon-grid menu-icon\"></i>
              <span class=\"menu-title\">Dashboard</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 314
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        echo "\">
              <i class=\"mdi mdi-account-multiple-outline menu-icon\"></i>
              <span class=\"menu-title\">Users</span>
            </a>
          </li>
        </ul>
        
      </nav>
      <!-- partial -->
      <div class=\"main-panel\">
        <div class=\"content-wrapper\">
          <div class=\"row\">
            <div class=\"col-md-12 grid-margin\">
              <div class=\"row\">
                <div class=\"col-12 col-xl-8 mb-4 mb-xl-0\">
                  <h2 class=\"font-weight-bold\">Welcome ";
        // line 329
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 329, $this->source); })()), "user", [], "any", false, false, false, 329), "getNom", [], "method", false, false, false, 329)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 329, $this->source); })()), "user", [], "any", false, false, false, 329), "getPrenom", [], "method", false, false, false, 329)), "html", null, true);
        echo "</h2>
                </div>
              </div>
            </div>
          </div>
\t\t\t\t\t";
        // line 334
        $this->displayBlock('inside', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_inside($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inside"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inside"));

        // line 335
        echo "\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/base.html.twig";
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
        return array (  479 => 335,  460 => 334,  450 => 329,  432 => 314,  423 => 308,  403 => 291,  392 => 283,  381 => 275,  370 => 267,  356 => 256,  345 => 248,  209 => 115,  202 => 111,  195 => 107,  188 => 103,  182 => 100,  108 => 31,  102 => 30,  92 => 23,  87 => 21,  81 => 18,  77 => 17,  73 => 16,  67 => 13,  63 => 12,  59 => 11,  55 => 10,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <!-- Required meta tags -->
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <title>Shopsphere Admin</title>
  <!-- plugins:css -->
  <link rel=\"stylesheet\" href=\"{{ asset('back/vendors/feather/feather.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('back/vendors/ti-icons/css/themify-icons.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('back/vendors/css/vendor.bundle.base.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('back/vendors/mdi/css/materialdesignicons.min.css') }}\">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel=\"stylesheet\" href=\"{{ asset('back/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('back/vendors/ti-icons/css/themify-icons.css') }}\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('back/js/select.dataTables.min.css') }}\">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel=\"stylesheet\" href=\"{{ asset('back/css/vertical-layout-light/style.css') }}\">
  <!-- endinject -->
  <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon-32x32.png') }}\">
</head>
<body>
  <div class=\"container-scroller\">
    <!-- partial:partials/_navbar.html -->
    <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
      <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-center\">
        <a class=\"navbar-brand brand-logo mr-5\" href=\"{{ path('app_admin_dashboard') }}\"><img src=\"{{ asset('userlogin/assets/images/blacklogo.png')}}\" class=\"mr-2\" alt=\"logo\"/></a>
        <a class=\"navbar-brand brand-logo-mini\" href=\"{{ path('app_admin_dashboard') }}\"><img src=\"{{ asset('userlogin/assets/images/blacklogo.png')}}\" alt=\"logo\"/></a>
      </div>
      <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
        <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
          <span class=\"icon-menu\"></span>
        </button>
        <ul class=\"navbar-nav mr-lg-2\">
          <li class=\"nav-item nav-search d-none d-lg-block\">
            <div class=\"input-group\">
              <div class=\"input-group-prepend hover-cursor\" id=\"navbar-search-icon\">
                <span class=\"input-group-text\" id=\"search\">
                  <i class=\"icon-search\"></i>
                </span>
              </div>
              <input type=\"text\" class=\"form-control\" id=\"navbar-search-input\" placeholder=\"Search now\" aria-label=\"search\" aria-describedby=\"search\">
            </div>
          </li>
        </ul>
        <ul class=\"navbar-nav navbar-nav-right\">
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
              <i class=\"icon-bell mx-0\"></i>
              <span class=\"count\"></span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
              <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Notifications</p>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-success\">
                    <i class=\"ti-info-alt mx-0\"></i>
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <h6 class=\"preview-subject font-weight-normal\">Application Error</h6>
                  <p class=\"font-weight-light small-text mb-0 text-muted\">
                    Just now
                  </p>
                </div>
              </a>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-warning\">
                    <i class=\"ti-settings mx-0\"></i>
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <h6 class=\"preview-subject font-weight-normal\">Settings</h6>
                  <p class=\"font-weight-light small-text mb-0 text-muted\">
                    Private message
                  </p>
                </div>
              </a>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-info\">
                    <i class=\"ti-user mx-0\"></i>
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <h6 class=\"preview-subject font-weight-normal\">New user registration</h6>
                  <p class=\"font-weight-light small-text mb-0 text-muted\">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class=\"nav-item nav-profile dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" id=\"profileDropdown\">
              <img src=\"{{ asset('uploads/' ~ app.user.getImage()) }}\" alt=\"profile\"/>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
              <a class=\"dropdown-item\" href=\"{{ path('app_admin_profile') }}\">
                <i class=\"ti-eye text-primary\"></i>
                Personal Profile
              </a>
              <a class=\"dropdown-item\" href=\"{{ path('app_admin_settings') }}\">
                <i class=\"ti-settings text-primary\"></i>
                Settings
              </a>
\t\t\t        <a class=\"dropdown-item\" href=\"{{ path('app_admin_password') }}\">
                <i class=\"ti-key text-primary\"></i>
                Change Password
              </a>
              <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">
                <i class=\"ti-power-off text-primary\"></i>
                Logout
              </a>
            </div>
          </li>
          <li class=\"nav-item nav-settings d-none d-lg-flex\">
            <a class=\"nav-link\" href=\"#\">
              <i class=\"icon-ellipsis\"></i>
            </a>
          </li>
        </ul>
        <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
          <span class=\"icon-menu\"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class=\"container-fluid page-body-wrapper\">
      <!-- partial:partials/_settings-panel.html -->
      <div class=\"theme-setting-wrapper\">
        <div id=\"settings-trigger\"><i class=\"ti-settings\"></i></div>
        <div id=\"theme-settings\" class=\"settings-panel\">
          <i class=\"settings-close ti-close\"></i>
          <p class=\"settings-heading\">SIDEBAR SKINS</p>
          <div class=\"sidebar-bg-options selected\" id=\"sidebar-light-theme\"><div class=\"img-ss rounded-circle bg-light border mr-3\"></div>Light</div>
          <div class=\"sidebar-bg-options\" id=\"sidebar-dark-theme\"><div class=\"img-ss rounded-circle bg-dark border mr-3\"></div>Dark</div>
          <p class=\"settings-heading mt-2\">HEADER SKINS</p>
          <div class=\"color-tiles mx-0 px-4\">
            <div class=\"tiles success\"></div>
            <div class=\"tiles warning\"></div>
            <div class=\"tiles danger\"></div>
            <div class=\"tiles info\"></div>
            <div class=\"tiles dark\"></div>
            <div class=\"tiles default\"></div>
          </div>
        </div>
      </div>
      <div id=\"right-sidebar\" class=\"settings-panel\">
        <i class=\"settings-close ti-close\"></i>
        <ul class=\"nav nav-tabs border-top\" id=\"setting-panel\" role=\"tablist\">
          <li class=\"nav-item\">
            <a class=\"nav-link active\" id=\"todo-tab\" data-toggle=\"tab\" href=\"#todo-section\" role=\"tab\" aria-controls=\"todo-section\" aria-expanded=\"true\">TO DO LIST</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" id=\"chats-tab\" data-toggle=\"tab\" href=\"#chats-section\" role=\"tab\" aria-controls=\"chats-section\">CHATS</a>
          </li>
        </ul>
        <div class=\"tab-content\" id=\"setting-content\">
          <div class=\"tab-pane fade show active scroll-wrapper\" id=\"todo-section\" role=\"tabpanel\" aria-labelledby=\"todo-section\">
            <div class=\"add-items d-flex px-3 mb-0\">
              <form class=\"form w-100\">
                <div class=\"form-group d-flex\">
                  <input type=\"text\" class=\"form-control todo-list-input\" placeholder=\"Add To-do\">
                  <button type=\"submit\" class=\"add btn btn-primary todo-list-add-btn\" id=\"add-task\">Add</button>
                </div>
              </form>
            </div>
            <div class=\"list-wrapper px-3\">
              <ul class=\"d-flex flex-column-reverse todo-list\">
                <li>
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class=\"remove ti-close\"></i>
                </li>
                <li>
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class=\"remove ti-close\"></i>
                </li>
                <li>
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class=\"remove ti-close\"></i>
                </li>
                <li class=\"completed\">
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class=\"remove ti-close\"></i>
                </li>
                <li class=\"completed\">
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\" checked>
                      Project review
                    </label>
                  </div>
                  <i class=\"remove ti-close\"></i>
                </li>
              </ul>
            </div>
            <h4 class=\"px-3 text-muted mt-5 font-weight-light mb-0\">Events</h4>
            <div class=\"events pt-4 px-3\">
              <div class=\"wrapper d-flex mb-2\">
                <i class=\"ti-control-record text-primary mr-2\"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class=\"mb-0 font-weight-thin text-gray\">Creating component page build a js</p>
              <p class=\"text-gray mb-0\">The total number of sessions</p>
            </div>
            <div class=\"events pt-4 px-3\">
              <div class=\"wrapper d-flex mb-2\">
                <i class=\"ti-control-record text-primary mr-2\"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class=\"mb-0 font-weight-thin text-gray\">Meeting with Alisa</p>
              <p class=\"text-gray mb-0 \">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class=\"tab-pane fade\" id=\"chats-section\" role=\"tabpanel\" aria-labelledby=\"chats-section\">
            <div class=\"d-flex align-items-center justify-content-between border-bottom\">
              <p class=\"settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0\">Friends</p>
              <small class=\"settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal\">See All</small>
            </div>
            <ul class=\"chat-list\">
              <li class=\"list active\">
                <div class=\"profile\"><img src=\"{{ asset('back/images/faces/face1.jpg')}}\" alt=\"image\"><span class=\"online\"></span></div>
                <div class=\"info\">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class=\"text-muted my-auto\">19 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"{{ asset('back/images/faces/face2.jpg')}}\" alt=\"image\"><span class=\"offline\"></span></div>
                <div class=\"info\">
                  <div class=\"wrapper d-flex\">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class=\"badge badge-success badge-pill my-auto mx-2\">4</div>
                <small class=\"text-muted my-auto\">23 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"{{ asset('back/images/faces/face3.jpg')}}\" alt=\"image\"><span class=\"online\"></span></div>
                <div class=\"info\">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class=\"text-muted my-auto\">14 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"{{ asset('back/images/faces/face4.jpg')}}\" alt=\"image\"><span class=\"offline\"></span></div>
                <div class=\"info\">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class=\"text-muted my-auto\">2 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"{{ asset('back/images/faces/face5.jpg')}}\" alt=\"image\"><span class=\"online\"></span></div>
                <div class=\"info\">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class=\"text-muted my-auto\">5 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"{{ asset('back/images/faces/face6.jpg')}}\" alt=\"image\"><span class=\"online\"></span></div>
                <div class=\"info\">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class=\"text-muted my-auto\">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <ul class=\"nav\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_admin_dashboard') }}\">
              <i class=\"icon-grid menu-icon\"></i>
              <span class=\"menu-title\">Dashboard</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_admin_users') }}\">
              <i class=\"mdi mdi-account-multiple-outline menu-icon\"></i>
              <span class=\"menu-title\">Users</span>
            </a>
          </li>
        </ul>
        
      </nav>
      <!-- partial -->
      <div class=\"main-panel\">
        <div class=\"content-wrapper\">
          <div class=\"row\">
            <div class=\"col-md-12 grid-margin\">
              <div class=\"row\">
                <div class=\"col-12 col-xl-8 mb-4 mb-xl-0\">
                  <h2 class=\"font-weight-bold\">Welcome {{app.user.getNom() | title }} {{app.user.getPrenom() | title }}</h2>
                </div>
              </div>
            </div>
          </div>
\t\t\t\t\t{% block inside %}
\t\t\t\t\t{% endblock %}
", "back/base.html.twig", "C:\\Users\\antho\\Desktop\\webdev\\test1\\ShopSphere\\testing.symfony.auth\\testing.auth.symfony\\templates\\back\\base.html.twig");
    }
}
