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

/* front/footer.html.twig */
class __TwigTemplate_9b962a0f00fae4b47e170083b659b549 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/footer.html.twig"));

        // line 1
        echo "<!-- Footer Section Begin -->
    <footer class=\"footer spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"footer__about\">
                        <div class=\"footer__about__logo\">
                            <a href=\"./index.html\"><img src=\"img/logo.png\" alt=\"\"></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 Esprit</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: contact@shopsphere.com</li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 col-sm-6 offset-lg-1\">
                    <div class=\"footer__widget\">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href=\"#\">About Us</a></li>
                            <li><a href=\"#\">FAQ</a></li>
                            <li><a href=\"#\">Terms of use</a></li>
                            <li><a href=\"#\">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12\">
                    <div class=\"footer__widget\">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action=\"#\">
                            <input type=\"text\" placeholder=\"Enter your mail\">
                            <button type=\"submit\" class=\"site-btn\">Subscribe</button>
                        </form>
                        <div class=\"footer__widget__social\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-pinterest\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"footer__copyright\">
                        <div class=\"footer__copyright__text\"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class=\"footer__copyright__payment\"><img src=\"img/payment-item.png\" alt=\"\"></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>

    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.slicknav.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/mixitup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/main.js"), "html", null, true);
        echo "\"></script>



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
        return "front/footer.html.twig";
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
        return array (  134 => 69,  130 => 68,  126 => 67,  122 => 66,  118 => 65,  114 => 64,  110 => 63,  106 => 62,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer Section Begin -->
    <footer class=\"footer spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"footer__about\">
                        <div class=\"footer__about__logo\">
                            <a href=\"./index.html\"><img src=\"img/logo.png\" alt=\"\"></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 Esprit</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: contact@shopsphere.com</li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 col-sm-6 offset-lg-1\">
                    <div class=\"footer__widget\">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href=\"#\">About Us</a></li>
                            <li><a href=\"#\">FAQ</a></li>
                            <li><a href=\"#\">Terms of use</a></li>
                            <li><a href=\"#\">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12\">
                    <div class=\"footer__widget\">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action=\"#\">
                            <input type=\"text\" placeholder=\"Enter your mail\">
                            <button type=\"submit\" class=\"site-btn\">Subscribe</button>
                        </form>
                        <div class=\"footer__widget__social\">
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-pinterest\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"footer__copyright\">
                        <div class=\"footer__copyright__text\"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class=\"footer__copyright__payment\"><img src=\"img/payment-item.png\" alt=\"\"></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>

    <script src=\"{{ asset('front/js/jquery-3.3.1.min.js')}}\"></script>
    <script src=\"{{ asset('front/js/bootstrap.min.js')}}\"></script>
    <script src=\"{{ asset('front/js/jquery.nice-select.min.js')}}\"></script>
    <script src=\"{{ asset('front/js/jquery-ui.min.js')}}\"></script>
    <script src=\"{{ asset('front/js/jquery.slicknav.js')}}\"></script>
    <script src=\"{{ asset('front/js/mixitup.min.js')}}\"></script>
    <script src=\"{{ asset('front/js/owl.carousel.min.js')}}\"></script>
    <script src=\"{{ asset('front/js/main.js')}}\"></script>



</body>

</html>", "front/footer.html.twig", "C:\\Users\\antho\\Desktop\\webdev\\test1\\ShopSphere\\testing.symfony.auth\\testing.auth.symfony\\templates\\front\\footer.html.twig");
    }
}
