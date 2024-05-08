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

/* Termsofuse.html.twig */
class __TwigTemplate_e8e6320adf1dc5a0251efd5c824f52f2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Termsofuse.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Termsofuse.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Terms of Use</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }
        
        p {
            line-height: 1.6;
            color: #555;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <h1>Terms of Use</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ullamcorper metus et mauris auctor, non eleifend dui consectetur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin pulvinar, nisl et placerat lacinia, eros metus vehicula neque, vel bibendum velit neque et felis. In hac habitasse platea dictumst.
        </p>
        <p>
            Sed in felis sit amet dui vulputate rhoncus. Fusce sed arcu in justo sollicitudin gravida. Praesent sed lorem sed ex lacinia lacinia. Cras sit amet mi a est consequat cursus non vel justo. Nullam ut purus et erat interdum malesuada. Vivamus accumsan quam sit amet purus egestas, sed suscipit dolor imperdiet.
        </p>
        <p>
            Phasellus tempor orci nec faucibus vestibulum. Ut iaculis risus eu eros varius, vel cursus dui rutrum. Mauris ac tincidunt mauris. Curabitur eu faucibus nunc. Sed pretium nulla in pellentesque lacinia. Aenean quis eros id lectus convallis eleifend eget eget elit. Donec ut volutpat lectus.
        </p>
    </div>
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
        return "Termsofuse.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Terms of Use</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }
        
        p {
            line-height: 1.6;
            color: #555;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <h1>Terms of Use</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ullamcorper metus et mauris auctor, non eleifend dui consectetur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin pulvinar, nisl et placerat lacinia, eros metus vehicula neque, vel bibendum velit neque et felis. In hac habitasse platea dictumst.
        </p>
        <p>
            Sed in felis sit amet dui vulputate rhoncus. Fusce sed arcu in justo sollicitudin gravida. Praesent sed lorem sed ex lacinia lacinia. Cras sit amet mi a est consequat cursus non vel justo. Nullam ut purus et erat interdum malesuada. Vivamus accumsan quam sit amet purus egestas, sed suscipit dolor imperdiet.
        </p>
        <p>
            Phasellus tempor orci nec faucibus vestibulum. Ut iaculis risus eu eros varius, vel cursus dui rutrum. Mauris ac tincidunt mauris. Curabitur eu faucibus nunc. Sed pretium nulla in pellentesque lacinia. Aenean quis eros id lectus convallis eleifend eget eget elit. Donec ut volutpat lectus.
        </p>
    </div>
</body>
</html>", "Termsofuse.html.twig", "C:\\Users\\antho\\Desktop\\webdev\\test1\\ShopSphere\\testing.symfony.auth\\testing.auth.symfony\\templates\\Termsofuse.html.twig");
    }
}
