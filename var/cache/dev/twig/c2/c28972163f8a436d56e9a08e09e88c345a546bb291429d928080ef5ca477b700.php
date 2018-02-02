<?php

/* admin/admin.html.twig */
class __TwigTemplate_fce035e265855a543b50bb1c0d30328442a5aaecef836478350f88cfe81d2cc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8fac560b4168afb9499fb9a21ba3442bdf1ef56d08887a736acd7b253d07ce23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fac560b4168afb9499fb9a21ba3442bdf1ef56d08887a736acd7b253d07ce23->enter($__internal_8fac560b4168afb9499fb9a21ba3442bdf1ef56d08887a736acd7b253d07ce23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $__internal_476477f8e53974175f7a76c6aefd92ded02bc7017cc5a3959ff353f097c368b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_476477f8e53974175f7a76c6aefd92ded02bc7017cc5a3959ff353f097c368b8->enter($__internal_476477f8e53974175f7a76c6aefd92ded02bc7017cc5a3959ff353f097c368b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"#\">MerchByAmazon Listing</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
                ";
        // line 34
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 35
            echo "                    <li class=\"nav-item \" style=\"height: 33px;\">
                        <a class=\"nav-link\" href=\"";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_masterList");
            echo "\" style=\"color: white\" >Back</a>
                    </li>
                    <li class=\"nav-item\" style=\"height: 33px;\">
                        <p class=\"nav-link\">Hello, ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 39, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo "</p>
                    </li>
                    <li class=\"nav-item \" style=\"height: 33px;\">
                        <a class=\"nav-link\" href=\"";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" style=\"color: white\">Logout</a>
                    </li>
                    ";
            // line 44
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 45
                echo "                        <li class=\"nav-item \" style=\"height: 33px;\">
                            <a class=\"nav-link badge-danger\" href=\"";
                // line 46
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin");
                echo "\" style=\"color: white\">Admin</a>
                        </li>
                    ";
            }
            // line 49
            echo "                ";
        }
        // line 50
        echo "            </ul>
        </div>
    </div>
</nav>
    <div class=\"container-fluid\" id=\"main_container\">
            ";
        // line 55
        $this->displayBlock('navigation', $context, $blocks);
        // line 97
        echo "

";
        // line 99
        $this->displayBlock('javascripts', $context, $blocks);
        // line 105
        echo "    </div>
</body>
</html>";
        
        $__internal_8fac560b4168afb9499fb9a21ba3442bdf1ef56d08887a736acd7b253d07ce23->leave($__internal_8fac560b4168afb9499fb9a21ba3442bdf1ef56d08887a736acd7b253d07ce23_prof);

        
        $__internal_476477f8e53974175f7a76c6aefd92ded02bc7017cc5a3959ff353f097c368b8->leave($__internal_476477f8e53974175f7a76c6aefd92ded02bc7017cc5a3959ff353f097c368b8_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_fee1db296511ab63ab5672f7c851975ef1421738f87e3d51fc7e58998aebb0c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fee1db296511ab63ab5672f7c851975ef1421738f87e3d51fc7e58998aebb0c7->enter($__internal_fee1db296511ab63ab5672f7c851975ef1421738f87e3d51fc7e58998aebb0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d9b4396b75eb779c2947b556e520ae0a2a0abd16e7edca97d7c4036f9313eca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b4396b75eb779c2947b556e520ae0a2a0abd16e7edca97d7c4036f9313eca5->enter($__internal_d9b4396b75eb779c2947b556e520ae0a2a0abd16e7edca97d7c4036f9313eca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper";
        
        $__internal_d9b4396b75eb779c2947b556e520ae0a2a0abd16e7edca97d7c4036f9313eca5->leave($__internal_d9b4396b75eb779c2947b556e520ae0a2a0abd16e7edca97d7c4036f9313eca5_prof);

        
        $__internal_fee1db296511ab63ab5672f7c851975ef1421738f87e3d51fc7e58998aebb0c7->leave($__internal_fee1db296511ab63ab5672f7c851975ef1421738f87e3d51fc7e58998aebb0c7_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eafa64360a0b9d39c122216bc5b0fdd08031a61cfa7b9ca48bcad08cdaa1881c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eafa64360a0b9d39c122216bc5b0fdd08031a61cfa7b9ca48bcad08cdaa1881c->enter($__internal_eafa64360a0b9d39c122216bc5b0fdd08031a61cfa7b9ca48bcad08cdaa1881c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_82131bc755650266baa89c35927d7cc07baf7d3be7d80edfa26316c20cfad8fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82131bc755650266baa89c35927d7cc07baf7d3be7d80edfa26316c20cfad8fa->enter($__internal_82131bc755650266baa89c35927d7cc07baf7d3be7d80edfa26316c20cfad8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <!-- Fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i\" rel=\"stylesheet\">

        <!-- Styles -->
        <link href=\"assets/css/core.min.css\" rel=\"stylesheet\">
        <link href=\"assets/css/app.min.css\" rel=\"stylesheet\">
        <link href=\"assets/css/style.min.css\" rel=\"stylesheet\">
        <link href=\"assets/css/main.css\" rel=\"stylesheet\">

        <!-- Favicons -->
        <link rel=\"apple-touch-icon\" href=\"assets/img/apple-touch-icon.png\">
        <link rel=\"icon\" href=\"assets/img/favicon.png\">
    ";
        
        $__internal_82131bc755650266baa89c35927d7cc07baf7d3be7d80edfa26316c20cfad8fa->leave($__internal_82131bc755650266baa89c35927d7cc07baf7d3be7d80edfa26316c20cfad8fa_prof);

        
        $__internal_eafa64360a0b9d39c122216bc5b0fdd08031a61cfa7b9ca48bcad08cdaa1881c->leave($__internal_eafa64360a0b9d39c122216bc5b0fdd08031a61cfa7b9ca48bcad08cdaa1881c_prof);

    }

    // line 55
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_149b3c00c7d29ad2d9513b7b5fc16a337c36be898b509de3eee74cb682324390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_149b3c00c7d29ad2d9513b7b5fc16a337c36be898b509de3eee74cb682324390->enter($__internal_149b3c00c7d29ad2d9513b7b5fc16a337c36be898b509de3eee74cb682324390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_b476e24b1d2529cbc0061cc921bd1b0851172c1ddb8fdc1345644f56e8fd7da7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b476e24b1d2529cbc0061cc921bd1b0851172c1ddb8fdc1345644f56e8fd7da7->enter($__internal_b476e24b1d2529cbc0061cc921bd1b0851172c1ddb8fdc1345644f56e8fd7da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 56
        echo "        <div class=\"container-fluid\">
            <table class=\"table\">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Registration Date</th>
                    <th>Listing Count</th>
                    <th>Account Type</th>

                </tr>
                </thead>
                <tbody>
                ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 70, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
            // line 71
            echo "                <tr>
                    <th scope=\"row\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "user_Id", array()), "html", null, true);
            echo "</th>
                    <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "username", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "email", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "regDate", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 76, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 77
                echo "                        ";
                if (($context["key"] == twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "user_Id", array()))) {
                    // line 78
                    echo "                          ";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "
                        ";
                }
                // line 80
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                    </td>
                    <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "accountType", array()), "html", null, true);
            echo "</td>
                    ";
            // line 84
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "accountType", array()) == "free")) {
                // line 85
                echo "                    <td><a class=\"nav-link badge badge-info\" id=\"singUpBtn\" href='";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_adminEdit");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "user_Id", array()), "html", null, true);
                echo "' style=\"color: white\">Update to PRO</a></td>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),             // line 86
$context["users"], "accountType", array()) == "pro")) {
                // line 87
                echo "                        <td><a class=\"nav-link badge badge-danger\" id=\"singUpBtn\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_adminEdit");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "user_Id", array()), "html", null, true);
                echo "\" style=\"color: white\">Update to Free</a></td>
                    ";
            }
            // line 89
            echo "                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                </tbody>
            </table>
        </div>
    </div>

            ";
        
        $__internal_b476e24b1d2529cbc0061cc921bd1b0851172c1ddb8fdc1345644f56e8fd7da7->leave($__internal_b476e24b1d2529cbc0061cc921bd1b0851172c1ddb8fdc1345644f56e8fd7da7_prof);

        
        $__internal_149b3c00c7d29ad2d9513b7b5fc16a337c36be898b509de3eee74cb682324390->leave($__internal_149b3c00c7d29ad2d9513b7b5fc16a337c36be898b509de3eee74cb682324390_prof);

    }

    // line 99
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_79c402905d9c915735edd35379e3ef01af9dfb9fdae45835ba1009881841eb08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79c402905d9c915735edd35379e3ef01af9dfb9fdae45835ba1009881841eb08->enter($__internal_79c402905d9c915735edd35379e3ef01af9dfb9fdae45835ba1009881841eb08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fa988825abb669b661a89a890e6f92f51201f9797d757b38e6fc294f4d9d231b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa988825abb669b661a89a890e6f92f51201f9797d757b38e6fc294f4d9d231b->enter($__internal_fa988825abb669b661a89a890e6f92f51201f9797d757b38e6fc294f4d9d231b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 100
        echo "    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
";
        
        $__internal_fa988825abb669b661a89a890e6f92f51201f9797d757b38e6fc294f4d9d231b->leave($__internal_fa988825abb669b661a89a890e6f92f51201f9797d757b38e6fc294f4d9d231b_prof);

        
        $__internal_79c402905d9c915735edd35379e3ef01af9dfb9fdae45835ba1009881841eb08->leave($__internal_79c402905d9c915735edd35379e3ef01af9dfb9fdae45835ba1009881841eb08_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 100,  285 => 99,  270 => 91,  263 => 89,  255 => 87,  253 => 86,  246 => 85,  243 => 84,  239 => 82,  236 => 81,  230 => 80,  224 => 78,  221 => 77,  217 => 76,  213 => 75,  209 => 74,  205 => 73,  201 => 72,  198 => 71,  194 => 70,  178 => 56,  169 => 55,  147 => 11,  138 => 10,  120 => 6,  108 => 105,  106 => 99,  102 => 97,  100 => 55,  93 => 50,  90 => 49,  84 => 46,  81 => 45,  79 => 44,  74 => 42,  68 => 39,  62 => 36,  59 => 35,  57 => 34,  45 => 24,  43 => 10,  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>{% block title %}MerchHelper{% endblock %}</title>
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    {% block stylesheets %}
        <!-- Fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i\" rel=\"stylesheet\">

        <!-- Styles -->
        <link href=\"assets/css/core.min.css\" rel=\"stylesheet\">
        <link href=\"assets/css/app.min.css\" rel=\"stylesheet\">
        <link href=\"assets/css/style.min.css\" rel=\"stylesheet\">
        <link href=\"assets/css/main.css\" rel=\"stylesheet\">

        <!-- Favicons -->
        <link rel=\"apple-touch-icon\" href=\"assets/img/apple-touch-icon.png\">
        <link rel=\"icon\" href=\"assets/img/favicon.png\">
    {% endblock %}
</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"#\">MerchByAmazon Listing</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    <li class=\"nav-item \" style=\"height: 33px;\">
                        <a class=\"nav-link\" href=\"{{ path('app_masterList') }}\" style=\"color: white\" >Back</a>
                    </li>
                    <li class=\"nav-item\" style=\"height: 33px;\">
                        <p class=\"nav-link\">Hello, {{ app.user.username }}</p>
                    </li>
                    <li class=\"nav-item \" style=\"height: 33px;\">
                        <a class=\"nav-link\" href=\"{{ path('logout') }}\" style=\"color: white\">Logout</a>
                    </li>
                    {% if is_granted('ROLE_ADMIN') %}
                        <li class=\"nav-item \" style=\"height: 33px;\">
                            <a class=\"nav-link badge-danger\" href=\"{{ path('app_admin') }}\" style=\"color: white\">Admin</a>
                        </li>
                    {% endif %}
                {% endif %}
            </ul>
        </div>
    </div>
</nav>
    <div class=\"container-fluid\" id=\"main_container\">
            {% block navigation %}
        <div class=\"container-fluid\">
            <table class=\"table\">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Registration Date</th>
                    <th>Listing Count</th>
                    <th>Account Type</th>

                </tr>
                </thead>
                <tbody>
                {% for users in user %}
                <tr>
                    <th scope=\"row\">{{ users.user_Id }}</th>
                    <td>{{ users.username }}</td>
                    <td>{{ users.email }}</td>
                    <td>{{ users.regDate }}</td>
                    <td>{% for key,value in count %}
                        {% if key == users.user_Id %}
                          {{ value }}
                        {% endif %}
                        {% endfor %}
                    </td>
                    <td>{{ users.accountType }}</td>
                    {#{% for color in list.color %}#}
                    {% if users.accountType == 'free' %}
                    <td><a class=\"nav-link badge badge-info\" id=\"singUpBtn\" href='{{ path('app_adminEdit') }}/{{ users.user_Id }}' style=\"color: white\">Update to PRO</a></td>
                    {% elseif users.accountType == 'pro' %}
                        <td><a class=\"nav-link badge badge-danger\" id=\"singUpBtn\" href=\"{{ path('app_adminEdit') }}/{{ users.user_Id }}\" style=\"color: white\">Update to Free</a></td>
                    {% endif %}
                </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>

            {% endblock %}


{% block javascripts %}
    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
{% endblock %}
    </div>
</body>
</html>", "admin/admin.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\admin\\admin.html.twig");
    }
}
