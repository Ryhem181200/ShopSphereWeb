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

/* front/header.html.twig */
class __TwigTemplate_e6e14992a70668f0a8c521281de6cb50 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/header.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"Ogani Template\">
    <meta name=\"keywords\" content=\"Ogani, unica, creative, html\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Shopsphere</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon-32x32.png"), "html", null, true);
        echo "\">
    <!-- Google Font -->
    <link href=\"https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap\" rel=\"stylesheet\">

    <!-- Css Styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/elegant-icons.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/nice-select.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/jquery-ui.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/owl.carousel.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/slicknav.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <style>
    .inline-links a {
        display: inline-block;
        margin-right: 10px;
    }
</style>
</head>

<body>
    <!-- Page Preloder -->
    <div id=\"preloder\">
        <div class=\"loader\"></div>
    </div>
    <!-- Header Section Begin -->
    <header class=\"header\">
        <div class=\"header__top\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"header__top__left\">
                            <ul>
                                <li><i class=\"fa fa-envelope\"></i> contact@shopsphere.com</li>
                                <li>Free Shipping for all Order of \$99</li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"header__top__right\">
                            <div class=\"header__top__right__social\">
                                <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a>
                            </div>
                            <div class=\"header__top__right__language\">
                                <img src=";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/language.png"), "html", null, true);
        echo " alt=\"\">
                                <div>English</div>
                                <span class=\"arrow_carrot-down\"></span>
                                <ul>
                                    <li><a href=\"#\">French</a></li>
                                </ul>
                            </div>
                            <div class=\"header__top__right__auth\">
                                ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67)) {
            // line 68
            echo "                                <div class=\"inline-links\">
                                    <a href=\"";
            // line 69
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile");
            echo "\"><i class=\"fa fa-user\"></i> Profile</a>
                                    <a href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><i class=\"fa fa-sign-out\"></i> Logout</a>
                                </div>
                                ";
        } else {
            // line 73
            echo "                                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><i class=\"fa fa-user\"></i> Login</a>
                                ";
        }
        // line 75
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"header__logo\">
                        <a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("userlogin/assets/images/blacklogo.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 180px; height: auto;\"></a>
                    </div>
                </div>

                <div class=\"col-lg-6\">
                    <nav class=\"header__menu\">
                        <ul>
                            <li class=\"active\"><a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main");
        echo "\">Home</a></li>
                            <li><a href=\"./shop-grid.html\">Shop</a></li>
                            <li><a href=\"#\">Pages</a>
                                <ul class=\"header__menu__dropdown\">
                                    <li><a href=\"./shop-details.html\">Shop Details</a></li>
                                    <li><a href=\"./shoping-cart.html\">Shoping Cart</a></li>
                                    <li><a href=\"./checkout.html\">Check Out</a></li>
                                    <li><a href=\"./blog-details.html\">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href=\"./blog.html\">Blog</a></li>
                            <li><a href=\"./contact.html\">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"header__cart\">
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-heart\"></i> <span>5</span></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-shopping-bag\"></i> <span>3</span></a></li>
                        </ul>
                        <div class=\"header__cart__price\">item: <span>\$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class=\"humberger__open\">
                <i class=\"fa fa-bars\"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    ";
        // line 123
        $this->displayBlock('inside', $context, $blocks);
        // line 125
        echo "    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 123
    public function block_inside($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inside"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inside"));

        // line 124
        echo "\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/header.html.twig";
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
        return array (  243 => 124,  233 => 123,  223 => 125,  221 => 123,  187 => 92,  175 => 85,  163 => 75,  157 => 73,  151 => 70,  147 => 69,  144 => 68,  142 => 67,  131 => 59,  92 => 23,  88 => 22,  84 => 21,  80 => 20,  76 => 19,  72 => 18,  68 => 17,  64 => 16,  56 => 11,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"Ogani Template\">
    <meta name=\"keywords\" content=\"Ogani, unica, creative, html\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Shopsphere</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon-32x32.png') }}\">
    <!-- Google Font -->
    <link href=\"https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap\" rel=\"stylesheet\">

    <!-- Css Styles -->
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/bootstrap.min.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/font-awesome.min.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/elegant-icons.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/nice-select.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/jquery-ui.min.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/owl.carousel.min.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/slicknav.min.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/style.css')}}\" type=\"text/css\">
    <style>
    .inline-links a {
        display: inline-block;
        margin-right: 10px;
    }
</style>
</head>

<body>
    <!-- Page Preloder -->
    <div id=\"preloder\">
        <div class=\"loader\"></div>
    </div>
    <!-- Header Section Begin -->
    <header class=\"header\">
        <div class=\"header__top\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"header__top__left\">
                            <ul>
                                <li><i class=\"fa fa-envelope\"></i> contact@shopsphere.com</li>
                                <li>Free Shipping for all Order of \$99</li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"header__top__right\">
                            <div class=\"header__top__right__social\">
                                <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a>
                            </div>
                            <div class=\"header__top__right__language\">
                                <img src={{ asset('front/img/language.png')}} alt=\"\">
                                <div>English</div>
                                <span class=\"arrow_carrot-down\"></span>
                                <ul>
                                    <li><a href=\"#\">French</a></li>
                                </ul>
                            </div>
                            <div class=\"header__top__right__auth\">
                                {% if app.user %}
                                <div class=\"inline-links\">
                                    <a href=\"{{path('app_user_profile')}}\"><i class=\"fa fa-user\"></i> Profile</a>
                                    <a href=\"{{ path('app_logout') }}\"><i class=\"fa fa-sign-out\"></i> Logout</a>
                                </div>
                                {% else %}
                                    <a href=\"{{ path('app_login') }}\"><i class=\"fa fa-user\"></i> Login</a>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"header__logo\">
                        <a href=\"{{path('app_main')}}\"><img src=\"{{ asset('userlogin/assets/images/blacklogo.png')}}\" alt=\"\" style=\"width: 180px; height: auto;\"></a>
                    </div>
                </div>

                <div class=\"col-lg-6\">
                    <nav class=\"header__menu\">
                        <ul>
                            <li class=\"active\"><a href=\"{{path('app_main')}}\">Home</a></li>
                            <li><a href=\"./shop-grid.html\">Shop</a></li>
                            <li><a href=\"#\">Pages</a>
                                <ul class=\"header__menu__dropdown\">
                                    <li><a href=\"./shop-details.html\">Shop Details</a></li>
                                    <li><a href=\"./shoping-cart.html\">Shoping Cart</a></li>
                                    <li><a href=\"./checkout.html\">Check Out</a></li>
                                    <li><a href=\"./blog-details.html\">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href=\"./blog.html\">Blog</a></li>
                            <li><a href=\"./contact.html\">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"header__cart\">
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-heart\"></i> <span>5</span></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-shopping-bag\"></i> <span>3</span></a></li>
                        </ul>
                        <div class=\"header__cart__price\">item: <span>\$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class=\"humberger__open\">
                <i class=\"fa fa-bars\"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    {% block inside %}
\t{% endblock %}
    ", "front/header.html.twig", "C:\\Users\\antho\\Desktop\\webdev\\test1\\ShopSphere\\testing.symfony.auth\\testing.auth.symfony\\templates\\front\\header.html.twig");
    }
}
