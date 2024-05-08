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

/* back/base2.html.twig */
class __TwigTemplate_5ee43a102fc89e27e00687e3eeaa5f92 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'inserthefuckinscipt' => [$this, 'block_inserthefuckinscipt'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/base2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/base2.html.twig"));

        // line 1
        echo "
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class=\"footer\">
          <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
            <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">Copyright © 2021.  Mohamed. All rights reserved.</span>
            <span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center\">Hand-crafted & made with <i class=\"ti-heart text-danger ml-1\"></i></span>
          </div>
        </footer> 
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendors/js/vendor.bundle.base.js"), "html", null, true);
        echo "\"></script>

  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendors/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendors/datatables.net/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendors/datatables.net-bs4/dataTables.bootstrap4.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/dataTables.select.min.js"), "html", null, true);
        echo "\"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/off-canvas.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/hoverable-collapse.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/template.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/settings.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/todolist.js"), "html", null, true);
        echo "\"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendors/js/vendor.bundle.base.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/dashboard.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/Chart.roundedBarCharts.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/vendors/js/vendor.bundle.base.js"), "html", null, true);
        echo "\"></script>
  <!-- End custom js for this page-->
";
        // line 43
        $this->displayBlock('inserthefuckinscipt', $context, $blocks);
        // line 46
        echo "


</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 43
    public function block_inserthefuckinscipt($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inserthefuckinscipt"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inserthefuckinscipt"));

        // line 44
        echo "  
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/base2.html.twig";
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
        return array (  158 => 44,  148 => 43,  132 => 46,  130 => 43,  125 => 41,  121 => 40,  117 => 39,  113 => 38,  107 => 35,  103 => 34,  99 => 33,  95 => 32,  91 => 31,  84 => 27,  80 => 26,  76 => 25,  72 => 24,  65 => 20,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class=\"footer\">
          <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
            <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">Copyright © 2021.  Mohamed. All rights reserved.</span>
            <span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center\">Hand-crafted & made with <i class=\"ti-heart text-danger ml-1\"></i></span>
          </div>
        </footer> 
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
    <script src=\"{{ asset('back/vendors/js/vendor.bundle.base.js')}}\"></script>

  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src=\"{{ asset('back/vendors/chart.js/Chart.min.js')}}\"></script>
  <script src=\"{{ asset('back/vendors/datatables.net/jquery.dataTables.js')}}\"></script>
  <script src=\"{{ asset('back/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}\"></script>
  <script src=\"{{ asset('back/js/dataTables.select.min.js')}}\"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src=\"{{ asset('back/js/off-canvas.js')}}\"></script>
  <script src=\"{{ asset('back/js/hoverable-collapse.js')}}\"></script>
  <script src=\"{{ asset('back/js/template.js')}}\"></script>
  <script src=\"{{ asset('back/js/settings.js')}}\"></script>
  <script src=\"{{ asset('back/js/todolist.js')}}\"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src=\"{{ asset('back/vendors/js/vendor.bundle.base.js')}}\"></script>
  <script src=\"{{ asset('back/js/dashboard.js')}}\"></script>
  <script src=\"{{ asset('back/js/Chart.roundedBarCharts.js')}}\"></script>
<script src=\"{{ asset('back/vendors/js/vendor.bundle.base.js')}}\"></script>
  <!-- End custom js for this page-->
{% block inserthefuckinscipt %}
  
{% endblock %}



</body>

</html>
", "back/base2.html.twig", "C:\\Users\\antho\\Desktop\\webdev\\test1\\ShopSphere\\testing.symfony.auth\\testing.auth.symfony\\templates\\back\\base2.html.twig");
    }
}
