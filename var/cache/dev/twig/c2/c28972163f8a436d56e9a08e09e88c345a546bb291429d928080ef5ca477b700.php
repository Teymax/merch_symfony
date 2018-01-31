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
        $__internal_88c3b1bc762a4b121b723cb2e3cfa99cd0f7093c0b290e2b755d14b2d09cdf51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88c3b1bc762a4b121b723cb2e3cfa99cd0f7093c0b290e2b755d14b2d09cdf51->enter($__internal_88c3b1bc762a4b121b723cb2e3cfa99cd0f7093c0b290e2b755d14b2d09cdf51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $__internal_1eb6a2f978aba433ec5d4b5145b0f1e64636204cd02eff53a0e0dcb084de0215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eb6a2f978aba433ec5d4b5145b0f1e64636204cd02eff53a0e0dcb084de0215->enter($__internal_1eb6a2f978aba433ec5d4b5145b0f1e64636204cd02eff53a0e0dcb084de0215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

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
        
        $__internal_88c3b1bc762a4b121b723cb2e3cfa99cd0f7093c0b290e2b755d14b2d09cdf51->leave($__internal_88c3b1bc762a4b121b723cb2e3cfa99cd0f7093c0b290e2b755d14b2d09cdf51_prof);

        
        $__internal_1eb6a2f978aba433ec5d4b5145b0f1e64636204cd02eff53a0e0dcb084de0215->leave($__internal_1eb6a2f978aba433ec5d4b5145b0f1e64636204cd02eff53a0e0dcb084de0215_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_d604191aa4584007c980a24ea3676943f791f8d3078160b9a5577b6bafdc6457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d604191aa4584007c980a24ea3676943f791f8d3078160b9a5577b6bafdc6457->enter($__internal_d604191aa4584007c980a24ea3676943f791f8d3078160b9a5577b6bafdc6457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6e15a356233a417770699df893eac1fa3d2066c4cd3e541a564da32e7252d9c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e15a356233a417770699df893eac1fa3d2066c4cd3e541a564da32e7252d9c9->enter($__internal_6e15a356233a417770699df893eac1fa3d2066c4cd3e541a564da32e7252d9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper";
        
        $__internal_6e15a356233a417770699df893eac1fa3d2066c4cd3e541a564da32e7252d9c9->leave($__internal_6e15a356233a417770699df893eac1fa3d2066c4cd3e541a564da32e7252d9c9_prof);

        
        $__internal_d604191aa4584007c980a24ea3676943f791f8d3078160b9a5577b6bafdc6457->leave($__internal_d604191aa4584007c980a24ea3676943f791f8d3078160b9a5577b6bafdc6457_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fdfe6c22036d1cf8182f89c7168cba871d22142e1d801c26e461c81eda0e8b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdfe6c22036d1cf8182f89c7168cba871d22142e1d801c26e461c81eda0e8b80->enter($__internal_fdfe6c22036d1cf8182f89c7168cba871d22142e1d801c26e461c81eda0e8b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3d4e769f309a35bc2c7ba0b3f7a64d91624c298a577599c6d315b51f9ff8ab42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d4e769f309a35bc2c7ba0b3f7a64d91624c298a577599c6d315b51f9ff8ab42->enter($__internal_3d4e769f309a35bc2c7ba0b3f7a64d91624c298a577599c6d315b51f9ff8ab42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_3d4e769f309a35bc2c7ba0b3f7a64d91624c298a577599c6d315b51f9ff8ab42->leave($__internal_3d4e769f309a35bc2c7ba0b3f7a64d91624c298a577599c6d315b51f9ff8ab42_prof);

        
        $__internal_fdfe6c22036d1cf8182f89c7168cba871d22142e1d801c26e461c81eda0e8b80->leave($__internal_fdfe6c22036d1cf8182f89c7168cba871d22142e1d801c26e461c81eda0e8b80_prof);

    }

    // line 55
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_a93454058298e5c12ad1f0007a19ed04aeb94699091118f26f8b243d53c3ccd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a93454058298e5c12ad1f0007a19ed04aeb94699091118f26f8b243d53c3ccd5->enter($__internal_a93454058298e5c12ad1f0007a19ed04aeb94699091118f26f8b243d53c3ccd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_52760464f2ba5c4992c450985590b52c54db04dd87ee7d452fd102f3b16ed290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52760464f2ba5c4992c450985590b52c54db04dd87ee7d452fd102f3b16ed290->enter($__internal_52760464f2ba5c4992c450985590b52c54db04dd87ee7d452fd102f3b16ed290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_52760464f2ba5c4992c450985590b52c54db04dd87ee7d452fd102f3b16ed290->leave($__internal_52760464f2ba5c4992c450985590b52c54db04dd87ee7d452fd102f3b16ed290_prof);

        
        $__internal_a93454058298e5c12ad1f0007a19ed04aeb94699091118f26f8b243d53c3ccd5->leave($__internal_a93454058298e5c12ad1f0007a19ed04aeb94699091118f26f8b243d53c3ccd5_prof);

    }

    // line 99
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_35cd7d1f5a37255fe16f8e653bb4a8a62188a1ffc9eff8e195e4faa1100f4832 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35cd7d1f5a37255fe16f8e653bb4a8a62188a1ffc9eff8e195e4faa1100f4832->enter($__internal_35cd7d1f5a37255fe16f8e653bb4a8a62188a1ffc9eff8e195e4faa1100f4832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6cecb8c10306ac3ede7f8c4d25db5bca3dba015e6c28a5136ad2b39672b01739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cecb8c10306ac3ede7f8c4d25db5bca3dba015e6c28a5136ad2b39672b01739->enter($__internal_6cecb8c10306ac3ede7f8c4d25db5bca3dba015e6c28a5136ad2b39672b01739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 100
        echo "    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
";
        
        $__internal_6cecb8c10306ac3ede7f8c4d25db5bca3dba015e6c28a5136ad2b39672b01739->leave($__internal_6cecb8c10306ac3ede7f8c4d25db5bca3dba015e6c28a5136ad2b39672b01739_prof);

        
        $__internal_35cd7d1f5a37255fe16f8e653bb4a8a62188a1ffc9eff8e195e4faa1100f4832->leave($__internal_35cd7d1f5a37255fe16f8e653bb4a8a62188a1ffc9eff8e195e4faa1100f4832_prof);

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
