<?php

/* masterList/masterList.html.twig */
class __TwigTemplate_9b0591c6412b5bb31b8c7b29bbd2269b2ff00c59bd3b7aea6501ae53ba341542 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_feeff5141ee2cd90d74f3fd2bc8182898d4037ed8acd1f8feba17bcd2ca99343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feeff5141ee2cd90d74f3fd2bc8182898d4037ed8acd1f8feba17bcd2ca99343->enter($__internal_feeff5141ee2cd90d74f3fd2bc8182898d4037ed8acd1f8feba17bcd2ca99343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "masterList/masterList.html.twig"));

        $__internal_244ab372d25ad08111fef38380a5c5b4a235b341f5ce28b63596a685d6e29de7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_244ab372d25ad08111fef38380a5c5b4a235b341f5ce28b63596a685d6e29de7->enter($__internal_244ab372d25ad08111fef38380a5c5b4a235b341f5ce28b63596a685d6e29de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "masterList/masterList.html.twig"));

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
        <a class=\"navbar-brand\" href=\"#\">MerchByAmazon Master Listing</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
                ";
        // line 34
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 35
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 35, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
                // line 36
                echo "                ";
                if ((((isset($context["masterCount"]) || array_key_exists("masterCount", $context) ? $context["masterCount"] : (function () { throw new Twig_Error_Runtime('Variable "masterCount" does not exist.', 36, $this->getSourceContext()); })()) < 25) || (twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "accountType", array()) == "pro"))) {
                    // line 37
                    echo "                        <li class=\"nav-item badge-success\">
                            <a class=\"nav-link\" href=\"";
                    // line 38
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_masterCreate");
                    echo "\" style=\"color: white\">Create Master Listing</a>
                        </li>
                    ";
                }
                // line 41
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "
                    <li class=\"nav-item\" style=\"height: 33px;\">
                        <p class=\"nav-link\">Hello, ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 44, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo "</p>
                    </li>
                    <li class=\"nav-item \" style=\"height: 33px;\">
                        <a class=\"nav-link\" href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" style=\"color: white\">Logout</a>
                    </li>
                    ";
            // line 49
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 50
                echo "                        <li class=\"nav-item \" style=\"height: 33px;\">
                            <a class=\"nav-link badge-danger\" href=\"";
                // line 51
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin");
                echo "\" style=\"color: white\">Admin</a>
                        </li>
                    ";
            }
            // line 54
            echo "                ";
        }
        // line 55
        echo "            </ul>
        </div>
    </div>
</nav>
    <div class=\"container-fluid\" id=\"main_container\">
        <div class=\"container-fluid\">
            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 61, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
            // line 62
            echo "
                ";
            // line 63
            if ((((isset($context["masterCount"]) || array_key_exists("masterCount", $context) ? $context["masterCount"] : (function () { throw new Twig_Error_Runtime('Variable "masterCount" does not exist.', 63, $this->getSourceContext()); })()) >= 25) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "accountType", array()) == "free"))) {
                // line 64
                echo "                    <div class=\"row\">Contact the administrator to improve your account</div>
                ";
            }
            // line 66
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "            <table class=\"table\">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>User ID</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 76, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["master"]) {
            // line 77
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["master"], "master_id", array()), "html", null, true);
            echo "</th>
                        <td> ";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["master"], "title", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["master"], "userId", array()), "html", null, true);
            echo "</td>
                        <td><a class=\"badge badge-info\" href=\"";
            // line 81
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_list");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["master"], "master_id", array()), "html", null, true);
            echo "\">View</a></td>
                        <td><a class=\"badge badge-info\" href=\"";
            // line 82
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_masterEdit");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["master"], "master_id", array()), "html", null, true);
            echo "\">Edit</a></td>
                        <td><a class=\"badge badge-danger\" href=\"";
            // line 83
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_masterDelete");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["master"], "master_id", array()), "html", null, true);
            echo "\">Delete</a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['master'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                </tbody>
            </table>
        </div>
    </div>



";
        // line 93
        $this->displayBlock('javascripts', $context, $blocks);
        // line 99
        echo "    </div>
</body>
</html>";
        
        $__internal_feeff5141ee2cd90d74f3fd2bc8182898d4037ed8acd1f8feba17bcd2ca99343->leave($__internal_feeff5141ee2cd90d74f3fd2bc8182898d4037ed8acd1f8feba17bcd2ca99343_prof);

        
        $__internal_244ab372d25ad08111fef38380a5c5b4a235b341f5ce28b63596a685d6e29de7->leave($__internal_244ab372d25ad08111fef38380a5c5b4a235b341f5ce28b63596a685d6e29de7_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_5152daae8802dca83c88bb86c3542b0a56b3262c65c9dc80440a9b05009ff327 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5152daae8802dca83c88bb86c3542b0a56b3262c65c9dc80440a9b05009ff327->enter($__internal_5152daae8802dca83c88bb86c3542b0a56b3262c65c9dc80440a9b05009ff327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ef7ad213d1009424edc1c834f5a806ccc4bf9692c75929e6357f119b4d6376fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef7ad213d1009424edc1c834f5a806ccc4bf9692c75929e6357f119b4d6376fd->enter($__internal_ef7ad213d1009424edc1c834f5a806ccc4bf9692c75929e6357f119b4d6376fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchByAmazon | Master Listing";
        
        $__internal_ef7ad213d1009424edc1c834f5a806ccc4bf9692c75929e6357f119b4d6376fd->leave($__internal_ef7ad213d1009424edc1c834f5a806ccc4bf9692c75929e6357f119b4d6376fd_prof);

        
        $__internal_5152daae8802dca83c88bb86c3542b0a56b3262c65c9dc80440a9b05009ff327->leave($__internal_5152daae8802dca83c88bb86c3542b0a56b3262c65c9dc80440a9b05009ff327_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ead98314cd81ac06fc6f58015128d16f88527ef794f9e9e95573959898d35cf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ead98314cd81ac06fc6f58015128d16f88527ef794f9e9e95573959898d35cf0->enter($__internal_ead98314cd81ac06fc6f58015128d16f88527ef794f9e9e95573959898d35cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_70d176b730b2dd533d1a766b7ce4026b258719b3dedb0c316cacf38009e89b12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70d176b730b2dd533d1a766b7ce4026b258719b3dedb0c316cacf38009e89b12->enter($__internal_70d176b730b2dd533d1a766b7ce4026b258719b3dedb0c316cacf38009e89b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <!-- Fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i\" rel=\"stylesheet\">

        <!-- Styles -->
        <link href=\"../assets/css/core.min.css\" rel=\"stylesheet\">
        <link href=\"../assets/css/app.min.css\" rel=\"stylesheet\">
        <link href=\"../assets/css/style.min.css\" rel=\"stylesheet\">
        <link href=\"../assets/css/main.css\" rel=\"stylesheet\">

        <!-- Favicons -->
        <link rel=\"apple-touch-icon\" href=\"../assets/img/apple-touch-icon.png\">
        <link rel=\"icon\" href=\"../assets/img/favicon.png\">
    ";
        
        $__internal_70d176b730b2dd533d1a766b7ce4026b258719b3dedb0c316cacf38009e89b12->leave($__internal_70d176b730b2dd533d1a766b7ce4026b258719b3dedb0c316cacf38009e89b12_prof);

        
        $__internal_ead98314cd81ac06fc6f58015128d16f88527ef794f9e9e95573959898d35cf0->leave($__internal_ead98314cd81ac06fc6f58015128d16f88527ef794f9e9e95573959898d35cf0_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b36587f98ecd9e47ac5eac359a227a87fa50f6a3ab0743b5ea2321f94552024b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b36587f98ecd9e47ac5eac359a227a87fa50f6a3ab0743b5ea2321f94552024b->enter($__internal_b36587f98ecd9e47ac5eac359a227a87fa50f6a3ab0743b5ea2321f94552024b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dbedf654bdfbb89ed7ebb88d2428e62db7a0e69dba9c7070c212c492363aa258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbedf654bdfbb89ed7ebb88d2428e62db7a0e69dba9c7070c212c492363aa258->enter($__internal_dbedf654bdfbb89ed7ebb88d2428e62db7a0e69dba9c7070c212c492363aa258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        echo "    <!-- Scripts -->
    <script src=\"../assets/js/core.min.js\"></script>
    <script src=\"../assets/js/app.min.js\"></script>
    <script src=\"../assets/js/script.min.js\"></script>
";
        
        $__internal_dbedf654bdfbb89ed7ebb88d2428e62db7a0e69dba9c7070c212c492363aa258->leave($__internal_dbedf654bdfbb89ed7ebb88d2428e62db7a0e69dba9c7070c212c492363aa258_prof);

        
        $__internal_b36587f98ecd9e47ac5eac359a227a87fa50f6a3ab0743b5ea2321f94552024b->leave($__internal_b36587f98ecd9e47ac5eac359a227a87fa50f6a3ab0743b5ea2321f94552024b_prof);

    }

    public function getTemplateName()
    {
        return "masterList/masterList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 94,  262 => 93,  240 => 11,  231 => 10,  213 => 6,  201 => 99,  199 => 93,  190 => 86,  179 => 83,  173 => 82,  167 => 81,  163 => 80,  159 => 79,  155 => 78,  152 => 77,  148 => 76,  137 => 67,  131 => 66,  127 => 64,  125 => 63,  122 => 62,  118 => 61,  110 => 55,  107 => 54,  101 => 51,  98 => 50,  96 => 49,  91 => 47,  85 => 44,  81 => 42,  75 => 41,  69 => 38,  66 => 37,  63 => 36,  58 => 35,  56 => 34,  44 => 24,  42 => 10,  35 => 6,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>{% block title %}MerchByAmazon | Master Listing{% endblock %}</title>
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    {% block stylesheets %}
        <!-- Fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i\" rel=\"stylesheet\">

        <!-- Styles -->
        <link href=\"../assets/css/core.min.css\" rel=\"stylesheet\">
        <link href=\"../assets/css/app.min.css\" rel=\"stylesheet\">
        <link href=\"../assets/css/style.min.css\" rel=\"stylesheet\">
        <link href=\"../assets/css/main.css\" rel=\"stylesheet\">

        <!-- Favicons -->
        <link rel=\"apple-touch-icon\" href=\"../assets/img/apple-touch-icon.png\">
        <link rel=\"icon\" href=\"../assets/img/favicon.png\">
    {% endblock %}
</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"#\">MerchByAmazon Master Listing</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                {% for users in user %}
                {% if masterCount <25 or users.accountType == 'pro' %}
                        <li class=\"nav-item badge-success\">
                            <a class=\"nav-link\" href=\"{{ path('app_masterCreate') }}\" style=\"color: white\">Create Master Listing</a>
                        </li>
                    {% endif %}
                    {% endfor %}

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
        <div class=\"container-fluid\">
            {% for users in user %}

                {% if masterCount >=25 and users.accountType == 'free' %}
                    <div class=\"row\">Contact the administrator to improve your account</div>
                {% endif %}
            {% endfor %}
            <table class=\"table\">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>User ID</th>
                </tr>
                </thead>
                <tbody>
                {% for master in posts %}
                    <tr>
                        <th scope=\"row\">{{ master.master_id }}</th>
                        <td> {{ master.title }}</td>
                        <td>{{ master.userId }}</td>
                        <td><a class=\"badge badge-info\" href=\"{{ path('app_list')}}/{{ master.master_id}}\">View</a></td>
                        <td><a class=\"badge badge-info\" href=\"{{ path('app_masterEdit')}}/{{ master.master_id}}\">Edit</a></td>
                        <td><a class=\"badge badge-danger\" href=\"{{ path('app_masterDelete')}}/{{ master.master_id}}\">Delete</a></td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>



{% block javascripts %}
    <!-- Scripts -->
    <script src=\"../assets/js/core.min.js\"></script>
    <script src=\"../assets/js/app.min.js\"></script>
    <script src=\"../assets/js/script.min.js\"></script>
{% endblock %}
    </div>
</body>
</html>", "masterList/masterList.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\masterList\\masterList.html.twig");
    }
}
