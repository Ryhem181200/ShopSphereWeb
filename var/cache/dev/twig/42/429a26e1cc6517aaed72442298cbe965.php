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

/* back/dashboard.html.twig */
class __TwigTemplate_f0adc7247bc8673f0c0a28ca63faea19 extends Template
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
            'inserthefuckinscipt' => [$this, 'block_inserthefuckinscipt'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/dashboard.html.twig"));

        // line 1
        $this->loadTemplate("back/base.html.twig", "back/dashboard.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('inside', $context, $blocks);
        // line 82
        echo "

";
        // line 84
        $this->loadTemplate("back/base2.html.twig", "back/dashboard.html.twig", 84)->display($context);
        // line 85
        $this->displayBlock('inserthefuckinscipt', $context, $blocks);
        
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
        echo "
<div class=\"row\">
    <div id=\"chat-app\">
        <div id=\"chat-messages\"></div>
        <input type=\"text\" id=\"chat-input\" placeholder=\"Type your message...\" />
        <button id=\"chat-send\">Send</button>
    </div>
    <script>
            document.addEventListener('DOMContentLoaded', function() {
            const chatMessages = document.getElementById('chat-messages');
            const chatInput = document.getElementById('chat-input');
            const chatSendButton = document.getElementById('chat-send');

            const eventSource = new EventSource('";
        // line 17
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Component\Mercure\Twig\MercureExtension']->mercure("chat/messages"), "js"), "html", null, true);
        echo "');
            eventSource.addEventListener('message', (event) => {
                const data = JSON.parse(event.data);
                const messageElement = document.createElement('div');
                messageElement.textContent = data.message;
                chatMessages.appendChild(messageElement);
            });

            chatSendButton.addEventListener('click', function() {
                const message = chatInput.value;
                fetch('";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_publish");
        echo "', {
                    method: 'POST',
                    body: new URLSearchParams({ message: message })
                });
                chatInput.value = '';
            });
        });
</script>
</div>
    <div class=\"row\">
        <div class=\"col-lg-6 grid-margin stretch-card\">
            <div class=\"card\">
                <div class=\"card-body\">
                  <h4 class=\"card-title\">Server Statistics</h4>
                    <ul>
                        <li>Server Load: ";
        // line 42
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["serverLoad"]) || array_key_exists("serverLoad", $context) ? $context["serverLoad"] : (function () { throw new RuntimeError('Variable "serverLoad" does not exist.', 42, $this->source); })()), 2), "html", null, true);
        echo "</li>
                        <li>Memory Usage: ";
        // line 43
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["memoryUsage"]) || array_key_exists("memoryUsage", $context) ? $context["memoryUsage"] : (function () { throw new RuntimeError('Variable "memoryUsage" does not exist.', 43, $this->source); })()), 2), "html", null, true);
        echo "%</li>
                        <li>Uptime: ";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["uptime"]) || array_key_exists("uptime", $context) ? $context["uptime"] : (function () { throw new RuntimeError('Variable "uptime" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "</li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-6 grid-margin stretch-card\">
                <div class=\"card\">
                    <div class=\"card-body\">
                    <h4 class=\"card-title\">Our Users</h4>
                        <ul>
                            <li>Number of Users: ";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["numberOfUsers"]) || array_key_exists("numberOfUsers", $context) ? $context["numberOfUsers"] : (function () { throw new RuntimeError('Variable "numberOfUsers" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "</li>
                            <li>Number of Admins: ";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["numberOfAdmins"]) || array_key_exists("numberOfAdmins", $context) ? $context["numberOfAdmins"] : (function () { throw new RuntimeError('Variable "numberOfAdmins" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "</li>
                            <li>Number of Others: ";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["numberOfOthers"]) || array_key_exists("numberOfOthers", $context) ? $context["numberOfOthers"] : (function () { throw new RuntimeError('Variable "numberOfOthers" does not exist.', 55, $this->source); })()), "html", null, true);
        echo "</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
<div class=\"row\">
        <div class=\"col-lg-6 grid-margin grid-margin-lg-0 stretch-card\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">User By Role</h4>
                    <canvas id=\"pieChart\"></canvas>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6 grid-margin stretch-card\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Users By Country</h4>
                    <canvas id=\"barChart\"></canvas>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 85
    public function block_inserthefuckinscipt($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inserthefuckinscipt"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inserthefuckinscipt"));

        // line 86
        echo "<script>
document.addEventListener('DOMContentLoaded', function() {
    const chatMessages = document.getElementById('chat-messages');
    const chatInput = document.getElementById('chat-input');
    const chatSendButton = document.getElementById('chat-send');

    const eventSource = new EventSource('/chat/publish');
    eventSource.addEventListener('message', function(event) {
        const message = JSON.parse(event.data);
        const messageElement = document.createElement('div');
        messageElement.textContent = message.message;
        chatMessages.appendChild(messageElement);
    });

    chatSendButton.addEventListener('click', function() {
        const message = chatInput.value;
        fetch('/chat/publish', {
            method: 'POST',
            body: new URLSearchParams({ message: message })
        });
        chatInput.value = '';
    });
});
</script>
    <script>
\$(function() {

    var chartData = {
        labels: ['Tunisia'],
        datasets: [{
            data: [";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["countByAdresse"]) || array_key_exists("countByAdresse", $context) ? $context["countByAdresse"] : (function () { throw new RuntimeError('Variable "countByAdresse" does not exist.', 116, $this->source); })()), "html", null, true);
        echo "],
            backgroundColor: [
                'rgba(255, 99, 132, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(255, 206, 86, 0.5)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
            ]
        }]
    };

    var options = {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        legend: {
            display: false
        },
        elements: {
            point: {
                radius: 0
            }
        }
    };

    var doughnutPieData = {
        datasets: [{
            data: [";
        // line 150
        echo twig_escape_filter($this->env, (isset($context["numberOfUsers"]) || array_key_exists("numberOfUsers", $context) ? $context["numberOfUsers"] : (function () { throw new RuntimeError('Variable "numberOfUsers" does not exist.', 150, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["numberOfAdmins"]) || array_key_exists("numberOfAdmins", $context) ? $context["numberOfAdmins"] : (function () { throw new RuntimeError('Variable "numberOfAdmins" does not exist.', 150, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["numberOfOthers"]) || array_key_exists("numberOfOthers", $context) ? $context["numberOfOthers"] : (function () { throw new RuntimeError('Variable "numberOfOthers" does not exist.', 150, $this->source); })()), "html", null, true);
        echo "],
            backgroundColor: [
                'rgba(255, 99, 132, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(255, 206, 86, 0.5)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
            ]
        }],
        labels: [
            'Users',
            'Admins',
            'Others'
        ]
    };

    var doughnutPieOptions = {
        responsive: true,
        animation: {
            animateScale: true,
            animateRotate: true
        }
    };

    // Get context with jQuery - using jQuery's .get() method.
    if (\$(\"#barChart\").length) {
        var barChartCanvas = \$(\"#barChart\").get(0).getContext(\"2d\");
        // This will get the first returned node in the jQuery collection.
        var barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: chartData,
            options: options
        });
    }

    if (\$(\"#pieChart\").length) {
        var pieChartCanvas = \$(\"#pieChart\").get(0).getContext(\"2d\");
        var pieChart = new Chart(pieChartCanvas, {
            type: 'pie',
            data: doughnutPieData,
            options: doughnutPieOptions
        });
    }
});
</script>
<script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("chat.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/dashboard.html.twig";
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
        return array (  323 => 198,  268 => 150,  231 => 116,  199 => 86,  189 => 85,  152 => 55,  148 => 54,  144 => 53,  132 => 44,  128 => 43,  124 => 42,  106 => 27,  93 => 17,  78 => 4,  68 => 3,  58 => 85,  56 => 84,  52 => 82,  50 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include \"back/base.html.twig\" %}

{% block inside %}

<div class=\"row\">
    <div id=\"chat-app\">
        <div id=\"chat-messages\"></div>
        <input type=\"text\" id=\"chat-input\" placeholder=\"Type your message...\" />
        <button id=\"chat-send\">Send</button>
    </div>
    <script>
            document.addEventListener('DOMContentLoaded', function() {
            const chatMessages = document.getElementById('chat-messages');
            const chatInput = document.getElementById('chat-input');
            const chatSendButton = document.getElementById('chat-send');

            const eventSource = new EventSource('{{ mercure(\"chat/messages\")|escape(\"js\") }}');
            eventSource.addEventListener('message', (event) => {
                const data = JSON.parse(event.data);
                const messageElement = document.createElement('div');
                messageElement.textContent = data.message;
                chatMessages.appendChild(messageElement);
            });

            chatSendButton.addEventListener('click', function() {
                const message = chatInput.value;
                fetch('{{ path(\"chat_publish\") }}', {
                    method: 'POST',
                    body: new URLSearchParams({ message: message })
                });
                chatInput.value = '';
            });
        });
</script>
</div>
    <div class=\"row\">
        <div class=\"col-lg-6 grid-margin stretch-card\">
            <div class=\"card\">
                <div class=\"card-body\">
                  <h4 class=\"card-title\">Server Statistics</h4>
                    <ul>
                        <li>Server Load: {{ serverLoad|number_format(2) }}</li>
                        <li>Memory Usage: {{ memoryUsage|number_format(2) }}%</li>
                        <li>Uptime: {{ uptime }}</li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-6 grid-margin stretch-card\">
                <div class=\"card\">
                    <div class=\"card-body\">
                    <h4 class=\"card-title\">Our Users</h4>
                        <ul>
                            <li>Number of Users: {{ numberOfUsers }}</li>
                            <li>Number of Admins: {{ numberOfAdmins }}</li>
                            <li>Number of Others: {{ numberOfOthers }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
<div class=\"row\">
        <div class=\"col-lg-6 grid-margin grid-margin-lg-0 stretch-card\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">User By Role</h4>
                    <canvas id=\"pieChart\"></canvas>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6 grid-margin stretch-card\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">Users By Country</h4>
                    <canvas id=\"barChart\"></canvas>
                </div>
            </div>
        </div>
    </div>
{% endblock %}


{% include \"back/base2.html.twig\" %}
{% block inserthefuckinscipt %}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const chatMessages = document.getElementById('chat-messages');
    const chatInput = document.getElementById('chat-input');
    const chatSendButton = document.getElementById('chat-send');

    const eventSource = new EventSource('/chat/publish');
    eventSource.addEventListener('message', function(event) {
        const message = JSON.parse(event.data);
        const messageElement = document.createElement('div');
        messageElement.textContent = message.message;
        chatMessages.appendChild(messageElement);
    });

    chatSendButton.addEventListener('click', function() {
        const message = chatInput.value;
        fetch('/chat/publish', {
            method: 'POST',
            body: new URLSearchParams({ message: message })
        });
        chatInput.value = '';
    });
});
</script>
    <script>
\$(function() {

    var chartData = {
        labels: ['Tunisia'],
        datasets: [{
            data: [{{ countByAdresse }}],
            backgroundColor: [
                'rgba(255, 99, 132, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(255, 206, 86, 0.5)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
            ]
        }]
    };

    var options = {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        legend: {
            display: false
        },
        elements: {
            point: {
                radius: 0
            }
        }
    };

    var doughnutPieData = {
        datasets: [{
            data: [{{ numberOfUsers }}, {{ numberOfAdmins }}, {{ numberOfOthers }}],
            backgroundColor: [
                'rgba(255, 99, 132, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(255, 206, 86, 0.5)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
            ]
        }],
        labels: [
            'Users',
            'Admins',
            'Others'
        ]
    };

    var doughnutPieOptions = {
        responsive: true,
        animation: {
            animateScale: true,
            animateRotate: true
        }
    };

    // Get context with jQuery - using jQuery's .get() method.
    if (\$(\"#barChart\").length) {
        var barChartCanvas = \$(\"#barChart\").get(0).getContext(\"2d\");
        // This will get the first returned node in the jQuery collection.
        var barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: chartData,
            options: options
        });
    }

    if (\$(\"#pieChart\").length) {
        var pieChartCanvas = \$(\"#pieChart\").get(0).getContext(\"2d\");
        var pieChart = new Chart(pieChartCanvas, {
            type: 'pie',
            data: doughnutPieData,
            options: doughnutPieOptions
        });
    }
});
</script>
<script src=\"{{ asset('chat.js') }}\"></script>
{% endblock %}", "back/dashboard.html.twig", "C:\\Users\\antho\\Desktop\\webdev\\test1\\ShopSphere\\testing.symfony.auth\\testing.auth.symfony\\templates\\back\\dashboard.html.twig");
    }
}
