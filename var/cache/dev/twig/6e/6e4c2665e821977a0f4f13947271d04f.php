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

/* front/profile.html.twig */
class __TwigTemplate_89726ec51ca924e26e05ea3eda9f828f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/profile.html.twig"));

        // line 1
        $this->loadTemplate("front/header.html.twig", "front/profile.html.twig", 1)->display($context);
        // line 2
        $this->displayBlock('inside', $context, $blocks);
        // line 170
        $this->loadTemplate("front/footer.html.twig", "front/profile.html.twig", 170)->display($context);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_inside($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inside"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inside"));

        // line 3
        echo "    <!-- Breadcrumb Section Begin -->
    <section class=\"breadcrumb-section set-bg\" data-setbg=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("profile.jpg"), "html", null, true);
        echo "\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"breadcrumb__text\">
                        <h2>Profile</h2>
                        <div class=\"breadcrumb__option\">
                            <a href=\"/\">Home</a>
                            <span>Profile</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
<section class=\"blog spad\">
    <div class=\"container\">
        <div class=\"row gutters-sm\">
            <div class=\"col-md-4 mb-3\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <div class=\"d-flex flex-column align-items-center text-center\">
                    <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("../uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "getImage", [], "method", false, false, false, 27))), "html", null, true);
        echo "\" alt=\"Admin\" class=\"rounded-circle\" width=\"150\">
                    <div class=\"mt-3\">
                      <h4>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "getNom", [], "method", false, false, false, 29)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "getPrenom", [], "method", false, false, false, 29)), "html", null, true);
        echo "</h4>
                      <p class=\"text-secondary mb-1\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "getEmail", [], "method", false, false, false, 30), "html", null, true);
        echo "</p>
                      <button class=\"btn btn-primary\">Wish List</button>
                      <button class=\"btn btn-outline-primary\">Messages</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"card mt-3\">
                <ul class=\"list-group list-group-flush\">
                    <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                        <span>
                            <button type=\"button\" class=\"btn btn-link\">
<img width=\"50\" height=\"50\" src=\"https://img.icons8.com/clouds/100/lock-2.png\" alt=\"lock-2\"/>
                                Change Password
                            </button>
                        </span>
                        <span class=\"text-secondary\">Secure account</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                        <span>
                            <button type=\"button\" class=\"btn btn-link\">
<img width=\"50\" height=\"50\" src=\"https://img.icons8.com/clouds/100/group.png\" alt=\"group\"/>
                                Followed Sellers
                            </button>
                        </span>
                        <span class=\"text-secondary\">List your sellers</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                        <span>
                            <button type=\"button\" class=\"btn btn-link\">
<img width=\"50\" height=\"50\" src=\"https://img.icons8.com/clouds/100/online-shop-card-payment.png\" alt=\"online-shop-card-payment\"/>
                                Vouchers
                            </button>
                        </span>
                        <span class=\"text-secondary\">Your vouchers</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                        <span>
                            <button type=\"button\" class=\"btn btn-link\">
<img width=\"50\" height=\"50\" src=\"https://img.icons8.com/clouds/100/favorite-cart.png\" alt=\"favorite-cart\"/>
                                Commands
                            </button>
                        </span>
                        <span class=\"text-secondary\">Check History</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                            <span class=\"mb-0\">
                            <h6 class=\"mb-0\">
                                <button type=\"button\" class=\"btn btn-link\">
<img width=\"50\" height=\"50\" src=\"https://img.icons8.com/clouds/100/good-quality.png\" alt=\"good-quality\"/>                                My Reviews
                                </button>   
                            </h6>
                            </span>
                            <span class=\"text-secondary\">Check your reviews</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                        <span class=\"mb-0\">
                        <h6 class=\"mb-0\">
                            <button type=\"button\" class=\"btn btn-link\">
<img width=\"50\" height=\"50\" src=\"https://img.icons8.com/clouds/100/visible--v2.png\" alt=\"visible--v2\"/>                            Recently Seen
                            </button>
                        </h6>
                        </span>
                        <span class=\"text-secondary\">Last Seen products</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                        <span>
                            <button type=\"button\" class=\"btn btn-link\">
<img width=\"50\" height=\"50\" src=\"https://img.icons8.com/clouds/100/megaphone.png\" alt=\"megaphone\"/>
                                Newsletters
                            </button>
                        </span>
                        <span class=\"text-secondary\">Subscribe</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                        <span>
                            <button type=\"button\" class=\"btn btn-link\">
<img width=\"50\" height=\"50\" src=\"https://img.icons8.com/clouds/100/voice-id.png\" alt=\"voice-id\"/>
                                2FA
                            </button>
                        </span>
                        <span class=\"text-secondary\">Secure your account</span>
                    </li>
                </ul>
              </div>
            </div>
            <div class=\"col-md-8\">
              <div class=\"card mb-3\">
                <div class=\"card-body\">
                  <div class=\"row\">
                    <div class=\"col-sm-3\">
                      <h6 class=\"mb-0\">Full Name</h6>
                    </div>
                    <div class=\"col-sm-9 text-secondary\">
                      ";
        // line 124
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "user", [], "any", false, false, false, 124), "getNom", [], "method", false, false, false, 124)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "user", [], "any", false, false, false, 124), "getPrenom", [], "method", false, false, false, 124)), "html", null, true);
        echo "
                    </div>
                  </div>
                  <hr>
                  <div class=\"row\">
                    <div class=\"col-sm-3\">
                      <h6 class=\"mb-0\">Email</h6>
                    </div>
                    <div class=\"col-sm-9 text-secondary\">
                      ";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "user", [], "any", false, false, false, 133), "getEmail", [], "method", false, false, false, 133), "html", null, true);
        echo "
                    </div>
                  </div>
                  <hr>
                  <div class=\"row\">
                    <div class=\"col-sm-3\">
                      <h6 class=\"mb-0\">Phone</h6>
                    </div>
                    <div class=\"col-sm-9 text-secondary\">
                      (216) ";
        // line 142
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 142, $this->source); })()), "user", [], "any", false, false, false, 142), "getTelephone", [], "method", false, false, false, 142), "html", null, true);
        echo "
                    </div>
                  </div>
                  <hr>
                  <div class=\"row\">
                    <div class=\"col-sm-3\">
                      <h6 class=\"mb-0\">Address</h6>
                    </div>
                    <div class=\"col-sm-9 text-secondary\">
                      ";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "user", [], "any", false, false, false, 151), "getAdresse", [], "method", false, false, false, 151), "html", null, true);
        echo "
                    </div>
                  </div>
                  <hr>
                  <div class=\"row\">
                    <div class=\"col-sm-12\">
                      <a class=\"btn btn-info \" target=\"__blank\" href=\"https://www.bootdey.com/snippets/view/profile-edit-data-and-skills\">Edit</a>
                    </div>
                  </div>
                </div>
              </div>

              
            </div>
          </div>
    </div>
</section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/profile.html.twig";
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
        return array (  243 => 151,  231 => 142,  219 => 133,  205 => 124,  108 => 30,  102 => 29,  97 => 27,  71 => 4,  68 => 3,  58 => 2,  48 => 170,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include \"front/header.html.twig\" %}
{% block inside %}
    <!-- Breadcrumb Section Begin -->
    <section class=\"breadcrumb-section set-bg\" data-setbg=\"{{ asset('profile.jpg')}}\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"breadcrumb__text\">
                        <h2>Profile</h2>
                        <div class=\"breadcrumb__option\">
                            <a href=\"/\">Home</a>
                            <span>Profile</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
<section class=\"blog spad\">
    <div class=\"container\">
        <div class=\"row gutters-sm\">
            <div class=\"col-md-4 mb-3\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <div class=\"d-flex flex-column align-items-center text-center\">
                    <img src=\"{{ asset('../uploads/' ~ app.user.getImage()) }}\" alt=\"Admin\" class=\"rounded-circle\" width=\"150\">
                    <div class=\"mt-3\">
                      <h4>{{ app.user.getNom()|title }} {{ app.user.getPrenom()|title }}</h4>
                      <p class=\"text-secondary mb-1\">{{ app.user.getEmail() }}</p>
                      <button class=\"btn btn-primary\">Wish List</button>
                      <button class=\"btn btn-outline-primary\">Messages</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"card mt-3\">
                <ul class=\"list-group list-group-flush\">
                    <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                        <span>
                            <button type=\"button\" class=\"btn btn-link\">
<img width=\"50\" height=\"50\" src=\"https://img.icons8.com/clouds/100/lock-2.png\" alt=\"lock-2\"/>
                                Change Password
                            </button>
                        </span>
                        <span class=\"text-secondary\">Secure account</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                        <span>
                            <button type=\"button\" class=\"btn btn-link\">
<img width=\"50\" height=\"50\" src=\"https://img.icons8.com/clouds/100/group.png\" alt=\"group\"/>
                                Followed Sellers
                            </button>
                        </span>
                        <span class=\"text-secondary\">List your sellers</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                        <span>
                            <button type=\"button\" class=\"btn btn-link\">
<img width=\"50\" height=\"50\" src=\"https://img.icons8.com/clouds/100/online-shop-card-payment.png\" alt=\"online-shop-card-payment\"/>
                                Vouchers
                            </button>
                        </span>
                        <span class=\"text-secondary\">Your vouchers</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                        <span>
                            <button type=\"button\" class=\"btn btn-link\">
<img width=\"50\" height=\"50\" src=\"https://img.icons8.com/clouds/100/favorite-cart.png\" alt=\"favorite-cart\"/>
                                Commands
                            </button>
                        </span>
                        <span class=\"text-secondary\">Check History</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                            <span class=\"mb-0\">
                            <h6 class=\"mb-0\">
                                <button type=\"button\" class=\"btn btn-link\">
<img width=\"50\" height=\"50\" src=\"https://img.icons8.com/clouds/100/good-quality.png\" alt=\"good-quality\"/>                                My Reviews
                                </button>   
                            </h6>
                            </span>
                            <span class=\"text-secondary\">Check your reviews</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                        <span class=\"mb-0\">
                        <h6 class=\"mb-0\">
                            <button type=\"button\" class=\"btn btn-link\">
<img width=\"50\" height=\"50\" src=\"https://img.icons8.com/clouds/100/visible--v2.png\" alt=\"visible--v2\"/>                            Recently Seen
                            </button>
                        </h6>
                        </span>
                        <span class=\"text-secondary\">Last Seen products</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                        <span>
                            <button type=\"button\" class=\"btn btn-link\">
<img width=\"50\" height=\"50\" src=\"https://img.icons8.com/clouds/100/megaphone.png\" alt=\"megaphone\"/>
                                Newsletters
                            </button>
                        </span>
                        <span class=\"text-secondary\">Subscribe</span>
                    </li>
                    <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                        <span>
                            <button type=\"button\" class=\"btn btn-link\">
<img width=\"50\" height=\"50\" src=\"https://img.icons8.com/clouds/100/voice-id.png\" alt=\"voice-id\"/>
                                2FA
                            </button>
                        </span>
                        <span class=\"text-secondary\">Secure your account</span>
                    </li>
                </ul>
              </div>
            </div>
            <div class=\"col-md-8\">
              <div class=\"card mb-3\">
                <div class=\"card-body\">
                  <div class=\"row\">
                    <div class=\"col-sm-3\">
                      <h6 class=\"mb-0\">Full Name</h6>
                    </div>
                    <div class=\"col-sm-9 text-secondary\">
                      {{ app.user.getNom()|title }} {{ app.user.getPrenom()|title }}
                    </div>
                  </div>
                  <hr>
                  <div class=\"row\">
                    <div class=\"col-sm-3\">
                      <h6 class=\"mb-0\">Email</h6>
                    </div>
                    <div class=\"col-sm-9 text-secondary\">
                      {{ app.user.getEmail() }}
                    </div>
                  </div>
                  <hr>
                  <div class=\"row\">
                    <div class=\"col-sm-3\">
                      <h6 class=\"mb-0\">Phone</h6>
                    </div>
                    <div class=\"col-sm-9 text-secondary\">
                      (216) {{ app.user.getTelephone() }}
                    </div>
                  </div>
                  <hr>
                  <div class=\"row\">
                    <div class=\"col-sm-3\">
                      <h6 class=\"mb-0\">Address</h6>
                    </div>
                    <div class=\"col-sm-9 text-secondary\">
                      {{ app.user.getAdresse() }}
                    </div>
                  </div>
                  <hr>
                  <div class=\"row\">
                    <div class=\"col-sm-12\">
                      <a class=\"btn btn-info \" target=\"__blank\" href=\"https://www.bootdey.com/snippets/view/profile-edit-data-and-skills\">Edit</a>
                    </div>
                  </div>
                </div>
              </div>

              
            </div>
          </div>
    </div>
</section>

{% endblock %}
{% include \"front/footer.html.twig\" %}
", "front/profile.html.twig", "C:\\Users\\antho\\Desktop\\webdev\\test1\\ShopSphere\\testing.symfony.auth\\testing.auth.symfony\\templates\\front\\profile.html.twig");
    }
}
