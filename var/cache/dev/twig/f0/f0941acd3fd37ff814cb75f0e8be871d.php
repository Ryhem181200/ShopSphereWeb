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

/* back/users.html.twig */
class __TwigTemplate_a4fe355f123501e290595e7d8e9f8a61 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/users.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/users.html.twig"));

        // line 1
        $this->loadTemplate("back/base.html.twig", "back/users.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('inside', $context, $blocks);
        // line 103
        echo "
";
        // line 104
        $this->loadTemplate("back/base2.html.twig", "back/users.html.twig", 104)->display($context);
        
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
        echo " <div class=\"col-lg-12 grid-margin stretch-card\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <h4 class=\"card-title\">Users</h4>
                  <p class=\"card-description\">
                    All The Users Information
                  </p>
                  <div class=\"d-flex justify-content-between mb-3\">
                    <form action=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        echo "\" method=\"GET\" class=\"form-inline\">
                      <div class=\"form-group mr-2\">
                        <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"Search...\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "get", ["search"], "method", false, false, false, 14), "html", null, true);
        echo "\">
                      </div>
                      <button type=\"submit\" class=\"btn btn-primary\">Search</button>
                    </form>
                  </div>
                  <div class=\"table-responsive\">
                    <table class=\"table table-striped\">
                      <thead>
                        <tr>
                          <th>
                            User
                          </th>
                          <th>
                                <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["orderBy" => "nom", "orderDirection" => (((((isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 27, $this->source); })()) == "nom") && ((isset($context["orderDirection"]) || array_key_exists("orderDirection", $context) ? $context["orderDirection"] : (function () { throw new RuntimeError('Variable "orderDirection" does not exist.', 27, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC"))]), "html", null, true);
        echo "\">
                                    Nom
                                    ";
        // line 29
        if (((isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 29, $this->source); })()) == "nom")) {
            // line 30
            echo "                                        <i class=\"mdi mdi-arrow-";
            if (((isset($context["orderDirection"]) || array_key_exists("orderDirection", $context) ? $context["orderDirection"] : (function () { throw new RuntimeError('Variable "orderDirection" does not exist.', 30, $this->source); })()) == "ASC")) {
                echo "up";
            } else {
                echo "down";
            }
            echo "\"></i>
                                    ";
        }
        // line 32
        echo "                                </a>
                            </th>
                          <th>
                                <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["orderBy" => "prenom", "orderDirection" => (((((isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 35, $this->source); })()) == "prenom") && ((isset($context["orderDirection"]) || array_key_exists("orderDirection", $context) ? $context["orderDirection"] : (function () { throw new RuntimeError('Variable "orderDirection" does not exist.', 35, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC"))]), "html", null, true);
        echo "\">
                                    Prenom
                                    ";
        // line 37
        if (((isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 37, $this->source); })()) == "prenom")) {
            // line 38
            echo "                                        <i class=\"mdi mdi-arrow-";
            if (((isset($context["orderDirection"]) || array_key_exists("orderDirection", $context) ? $context["orderDirection"] : (function () { throw new RuntimeError('Variable "orderDirection" does not exist.', 38, $this->source); })()) == "ASC")) {
                echo "up";
            } else {
                echo "down";
            }
            echo "\"></i>
                                    ";
        }
        // line 40
        echo "                                </a>
                            </th>
                          <th>
                                <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["orderBy" => "email", "orderDirection" => (((((isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 43, $this->source); })()) == "email") && ((isset($context["orderDirection"]) || array_key_exists("orderDirection", $context) ? $context["orderDirection"] : (function () { throw new RuntimeError('Variable "orderDirection" does not exist.', 43, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC"))]), "html", null, true);
        echo "\">
                                    Email
                                    ";
        // line 45
        if (((isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 45, $this->source); })()) == "email")) {
            // line 46
            echo "                                        <i class=\"mdi mdi-arrow-";
            if (((isset($context["orderDirection"]) || array_key_exists("orderDirection", $context) ? $context["orderDirection"] : (function () { throw new RuntimeError('Variable "orderDirection" does not exist.', 46, $this->source); })()) == "ASC")) {
                echo "up";
            } else {
                echo "down";
            }
            echo "\"></i>
                                    ";
        }
        // line 48
        echo "                                </a>
                            </th>
                          <th>
                                <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["orderBy" => "role", "orderDirection" => (((((isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 51, $this->source); })()) == "role") && ((isset($context["orderDirection"]) || array_key_exists("orderDirection", $context) ? $context["orderDirection"] : (function () { throw new RuntimeError('Variable "orderDirection" does not exist.', 51, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC"))]), "html", null, true);
        echo "\">
                                    Role
                                    ";
        // line 53
        if (((isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 53, $this->source); })()) == "role")) {
            // line 54
            echo "                                        <i class=\"mdi mdi-arrow-";
            if (((isset($context["orderDirection"]) || array_key_exists("orderDirection", $context) ? $context["orderDirection"] : (function () { throw new RuntimeError('Variable "orderDirection" does not exist.', 54, $this->source); })()) == "ASC")) {
                echo "up";
            } else {
                echo "down";
            }
            echo "\"></i>
                                    ";
        }
        // line 56
        echo "                                </a>
                           </th>
                          <th>
                                <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["orderBy" => "telephone", "orderDirection" => (((((isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 59, $this->source); })()) == "telephone") && ((isset($context["orderDirection"]) || array_key_exists("orderDirection", $context) ? $context["orderDirection"] : (function () { throw new RuntimeError('Variable "orderDirection" does not exist.', 59, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC"))]), "html", null, true);
        echo "\">
                                    Telephone
                                    ";
        // line 61
        if (((isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 61, $this->source); })()) == "telephone")) {
            // line 62
            echo "                                        <i class=\"mdi mdi-arrow-";
            if (((isset($context["orderDirection"]) || array_key_exists("orderDirection", $context) ? $context["orderDirection"] : (function () { throw new RuntimeError('Variable "orderDirection" does not exist.', 62, $this->source); })()) == "ASC")) {
                echo "up";
            } else {
                echo "down";
            }
            echo "\"></i>
                                    ";
        }
        // line 64
        echo "                                </a>
                           </th>
                          <th>
                                <a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users", ["orderBy" => "adresse", "orderDirection" => (((((isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 67, $this->source); })()) == "adresse") && ((isset($context["orderDirection"]) || array_key_exists("orderDirection", $context) ? $context["orderDirection"] : (function () { throw new RuntimeError('Variable "orderDirection" does not exist.', 67, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC"))]), "html", null, true);
        echo "\">
                                    Addresse
                                    ";
        // line 69
        if (((isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 69, $this->source); })()) == "adresse")) {
            // line 70
            echo "                                        <i class=\"mdi mdi-arrow-";
            if (((isset($context["orderDirection"]) || array_key_exists("orderDirection", $context) ? $context["orderDirection"] : (function () { throw new RuntimeError('Variable "orderDirection" does not exist.', 70, $this->source); })()) == "ASC")) {
                echo "up";
            } else {
                echo "down";
            }
            echo "\"></i>
                                    ";
        }
        // line 72
        echo "                                </a>
                           </th>
                           <th> 
                           Actions
                           </th>
                        </tr>
                      </thead>
                      <tbody>
                        ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 80, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 81
            echo "                            <tr>
                                <td class=\"py-1\">
                                    <img src=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["user"], "image", [], "any", false, false, false, 83))), "html", null, true);
            echo "\" alt=\"image\"/>                                </td>
                                <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 84), "html", null, true);
            echo "</td>
                                <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 85), "html", null, true);
            echo "</td>
                                <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 86), "html", null, true);
            echo "</td>
                                <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>
                                <td>+216 ";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "telephone", [], "any", false, false, false, 88), "html", null, true);
            echo "</td>
                                <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "adresse", [], "any", false, false, false, 89), "html", null, true);
            echo "</td>
                                <td>
                                <a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 91)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">Edit</a>
                                <a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 92)]), "html", null, true);
            echo "\" class=\"btn btn-danger btn-sm\">Delete</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                      </tbody>
                    </table>
                  </div>
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
        return "back/users.html.twig";
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
        return array (  293 => 96,  283 => 92,  279 => 91,  274 => 89,  270 => 88,  266 => 87,  262 => 86,  258 => 85,  254 => 84,  250 => 83,  246 => 81,  242 => 80,  232 => 72,  222 => 70,  220 => 69,  215 => 67,  210 => 64,  200 => 62,  198 => 61,  193 => 59,  188 => 56,  178 => 54,  176 => 53,  171 => 51,  166 => 48,  156 => 46,  154 => 45,  149 => 43,  144 => 40,  134 => 38,  132 => 37,  127 => 35,  122 => 32,  112 => 30,  110 => 29,  105 => 27,  89 => 14,  84 => 12,  74 => 4,  64 => 3,  54 => 104,  51 => 103,  49 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include \"back/base.html.twig\" %}

{% block inside %}
 <div class=\"col-lg-12 grid-margin stretch-card\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <h4 class=\"card-title\">Users</h4>
                  <p class=\"card-description\">
                    All The Users Information
                  </p>
                  <div class=\"d-flex justify-content-between mb-3\">
                    <form action=\"{{ path('app_admin_users') }}\" method=\"GET\" class=\"form-inline\">
                      <div class=\"form-group mr-2\">
                        <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"Search...\" value=\"{{ app.request.get('search') }}\">
                      </div>
                      <button type=\"submit\" class=\"btn btn-primary\">Search</button>
                    </form>
                  </div>
                  <div class=\"table-responsive\">
                    <table class=\"table table-striped\">
                      <thead>
                        <tr>
                          <th>
                            User
                          </th>
                          <th>
                                <a href=\"{{ path('app_admin_users', {'orderBy': 'nom', 'orderDirection': orderBy == 'nom' and orderDirection == 'ASC' ? 'DESC' : 'ASC'}) }}\">
                                    Nom
                                    {% if orderBy == 'nom' %}
                                        <i class=\"mdi mdi-arrow-{% if orderDirection == 'ASC' %}up{% else %}down{% endif %}\"></i>
                                    {% endif %}
                                </a>
                            </th>
                          <th>
                                <a href=\"{{ path('app_admin_users', {'orderBy': 'prenom', 'orderDirection': orderBy == 'prenom' and orderDirection == 'ASC' ? 'DESC' : 'ASC'}) }}\">
                                    Prenom
                                    {% if orderBy == 'prenom' %}
                                        <i class=\"mdi mdi-arrow-{% if orderDirection == 'ASC' %}up{% else %}down{% endif %}\"></i>
                                    {% endif %}
                                </a>
                            </th>
                          <th>
                                <a href=\"{{ path('app_admin_users', {'orderBy': 'email', 'orderDirection': orderBy == 'email' and orderDirection == 'ASC' ? 'DESC' : 'ASC'}) }}\">
                                    Email
                                    {% if orderBy == 'email' %}
                                        <i class=\"mdi mdi-arrow-{% if orderDirection == 'ASC' %}up{% else %}down{% endif %}\"></i>
                                    {% endif %}
                                </a>
                            </th>
                          <th>
                                <a href=\"{{ path('app_admin_users', {'orderBy': 'role', 'orderDirection': orderBy == 'role' and orderDirection == 'ASC' ? 'DESC' : 'ASC'}) }}\">
                                    Role
                                    {% if orderBy == 'role' %}
                                        <i class=\"mdi mdi-arrow-{% if orderDirection == 'ASC' %}up{% else %}down{% endif %}\"></i>
                                    {% endif %}
                                </a>
                           </th>
                          <th>
                                <a href=\"{{ path('app_admin_users', {'orderBy': 'telephone', 'orderDirection': orderBy == 'telephone' and orderDirection == 'ASC' ? 'DESC' : 'ASC'}) }}\">
                                    Telephone
                                    {% if orderBy == 'telephone' %}
                                        <i class=\"mdi mdi-arrow-{% if orderDirection == 'ASC' %}up{% else %}down{% endif %}\"></i>
                                    {% endif %}
                                </a>
                           </th>
                          <th>
                                <a href=\"{{ path('app_admin_users', {'orderBy': 'adresse', 'orderDirection': orderBy == 'adresse' and orderDirection == 'ASC' ? 'DESC' : 'ASC'}) }}\">
                                    Addresse
                                    {% if orderBy == 'adresse' %}
                                        <i class=\"mdi mdi-arrow-{% if orderDirection == 'ASC' %}up{% else %}down{% endif %}\"></i>
                                    {% endif %}
                                </a>
                           </th>
                           <th> 
                           Actions
                           </th>
                        </tr>
                      </thead>
                      <tbody>
                        {% for user in users %}
                            <tr>
                                <td class=\"py-1\">
                                    <img src=\"{{ asset('uploads/' ~ user.image) }}\" alt=\"image\"/>                                </td>
                                <td>{{ user.nom }}</td>
                                <td>{{ user.prenom }}</td>
                                <td>{{ user.email }}</td>
                                <td>{{ user.role }}</td>
                                <td>+216 {{ user.telephone }}</td>
                                <td>{{ user.adresse }}</td>
                                <td>
                                <a href=\"{{ path('app_admin_user_edit', {'id': user.id}) }}\" class=\"btn btn-primary btn-sm\">Edit</a>
                                <a href=\"{{ path('app_admin_user_delete', {'id': user.id}) }}\" class=\"btn btn-danger btn-sm\">Delete</a>
                                </td>
                            </tr>
                        {% endfor %}
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
{% endblock %}

{% include \"back/base2.html.twig\" %}", "back/users.html.twig", "C:\\Users\\antho\\Desktop\\webdev\\test1\\ShopSphere\\testing.symfony.auth\\testing.auth.symfony\\templates\\back\\users.html.twig");
    }
}
