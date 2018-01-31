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
        $__internal_33a344ccf9cd9c6116ffce8b99fcf19b16f2c11cdfbc7061e0298cd2608ab443 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33a344ccf9cd9c6116ffce8b99fcf19b16f2c11cdfbc7061e0298cd2608ab443->enter($__internal_33a344ccf9cd9c6116ffce8b99fcf19b16f2c11cdfbc7061e0298cd2608ab443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $__internal_068f2b7850d775a67f287c463fbcd289daf768ca305b7192569511835e020412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_068f2b7850d775a67f287c463fbcd289daf768ca305b7192569511835e020412->enter($__internal_068f2b7850d775a67f287c463fbcd289daf768ca305b7192569511835e020412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

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
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 40, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo "</p>
                    </li>
                    <li class=\"nav-item \" style=\"height: 33px;\">
                        <a class=\"nav-link\" href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" style=\"color: white\">Logout</a>
                    </li>
                    ";
            // line 45
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 46
                echo "                        <li class=\"nav-item \" style=\"height: 33px;\">
                            <a class=\"nav-link badge-danger\" href=\"";
                // line 47
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin");
                echo "\" style=\"color: white\">Admin</a>
                        </li>
                    ";
            }
            // line 50
            echo "                ";
        }
        // line 51
        echo "            </ul>
        </div>
    </div>
</nav>
    <div class=\"container-fluid\" id=\"main_container\">
            ";
        // line 56
        $this->displayBlock('navigation', $context, $blocks);
        // line 98
        echo "

";
        // line 100
        $this->displayBlock('javascripts', $context, $blocks);
        // line 106
        echo "    </div>
</body>
</html>";
        
        $__internal_33a344ccf9cd9c6116ffce8b99fcf19b16f2c11cdfbc7061e0298cd2608ab443->leave($__internal_33a344ccf9cd9c6116ffce8b99fcf19b16f2c11cdfbc7061e0298cd2608ab443_prof);

        
        $__internal_068f2b7850d775a67f287c463fbcd289daf768ca305b7192569511835e020412->leave($__internal_068f2b7850d775a67f287c463fbcd289daf768ca305b7192569511835e020412_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_6656a97735e17da041f2c7ba64019cf86fb90c03c084bba01bf841ae0756ffa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6656a97735e17da041f2c7ba64019cf86fb90c03c084bba01bf841ae0756ffa9->enter($__internal_6656a97735e17da041f2c7ba64019cf86fb90c03c084bba01bf841ae0756ffa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_11c2f120bc8871e67ea1f868a880e7ba4ebb30b0110a2089f5f152db09ed95ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11c2f120bc8871e67ea1f868a880e7ba4ebb30b0110a2089f5f152db09ed95ec->enter($__internal_11c2f120bc8871e67ea1f868a880e7ba4ebb30b0110a2089f5f152db09ed95ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper";
        
        $__internal_11c2f120bc8871e67ea1f868a880e7ba4ebb30b0110a2089f5f152db09ed95ec->leave($__internal_11c2f120bc8871e67ea1f868a880e7ba4ebb30b0110a2089f5f152db09ed95ec_prof);

        
        $__internal_6656a97735e17da041f2c7ba64019cf86fb90c03c084bba01bf841ae0756ffa9->leave($__internal_6656a97735e17da041f2c7ba64019cf86fb90c03c084bba01bf841ae0756ffa9_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0208289f145964a875dd7ee1d5ecbf57b51d0db4765158993e90de724df22d46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0208289f145964a875dd7ee1d5ecbf57b51d0db4765158993e90de724df22d46->enter($__internal_0208289f145964a875dd7ee1d5ecbf57b51d0db4765158993e90de724df22d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_906efe2436cb5af2fdcb15fa2b3d75c74110d560824672f6c1c6fec7dd57579a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_906efe2436cb5af2fdcb15fa2b3d75c74110d560824672f6c1c6fec7dd57579a->enter($__internal_906efe2436cb5af2fdcb15fa2b3d75c74110d560824672f6c1c6fec7dd57579a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_906efe2436cb5af2fdcb15fa2b3d75c74110d560824672f6c1c6fec7dd57579a->leave($__internal_906efe2436cb5af2fdcb15fa2b3d75c74110d560824672f6c1c6fec7dd57579a_prof);

        
        $__internal_0208289f145964a875dd7ee1d5ecbf57b51d0db4765158993e90de724df22d46->leave($__internal_0208289f145964a875dd7ee1d5ecbf57b51d0db4765158993e90de724df22d46_prof);

    }

    // line 56
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_f98c772564e44342e69d8efe639f4e967a45aee20bc5c08a0b7c653d08e0158a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f98c772564e44342e69d8efe639f4e967a45aee20bc5c08a0b7c653d08e0158a->enter($__internal_f98c772564e44342e69d8efe639f4e967a45aee20bc5c08a0b7c653d08e0158a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_776b61468ecdc35a2f13cb24d074e36295f0ab8564ebeead753b860b0a6e4c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_776b61468ecdc35a2f13cb24d074e36295f0ab8564ebeead753b860b0a6e4c0c->enter($__internal_776b61468ecdc35a2f13cb24d074e36295f0ab8564ebeead753b860b0a6e4c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 57
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
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 71, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
            // line 72
            echo "                <tr>
                    <th scope=\"row\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "user_Id", array()), "html", null, true);
            echo "</th>
                    <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "username", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "email", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "regDate", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 77, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 78
                echo "                        ";
                if (($context["key"] == twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "user_Id", array()))) {
                    // line 79
                    echo "                          ";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "
                        ";
                }
                // line 81
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                    </td>
                    <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "accountType", array()), "html", null, true);
            echo "</td>
                    ";
            // line 85
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "accountType", array()) == "free")) {
                // line 86
                echo "                    <td><a class=\"nav-link badge badge-info\" id=\"singUpBtn\" href='";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_adminEdit");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "user_Id", array()), "html", null, true);
                echo "' style=\"color: white\">Update to PRO</a></td>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),             // line 87
$context["users"], "accountType", array()) == "pro")) {
                // line 88
                echo "                        <td><a class=\"nav-link badge badge-danger\" id=\"singUpBtn\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_adminEdit");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "user_Id", array()), "html", null, true);
                echo "\" style=\"color: white\">Update to Free</a></td>
                    ";
            }
            // line 90
            echo "                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                </tbody>
            </table>
        </div>
    </div>

            ";
        
        $__internal_776b61468ecdc35a2f13cb24d074e36295f0ab8564ebeead753b860b0a6e4c0c->leave($__internal_776b61468ecdc35a2f13cb24d074e36295f0ab8564ebeead753b860b0a6e4c0c_prof);

        
        $__internal_f98c772564e44342e69d8efe639f4e967a45aee20bc5c08a0b7c653d08e0158a->leave($__internal_f98c772564e44342e69d8efe639f4e967a45aee20bc5c08a0b7c653d08e0158a_prof);

    }

    // line 100
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f71cf4909fd1bba610103abf5d0ac9134f3b36161e92fcdaa70cfd7f89754ade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f71cf4909fd1bba610103abf5d0ac9134f3b36161e92fcdaa70cfd7f89754ade->enter($__internal_f71cf4909fd1bba610103abf5d0ac9134f3b36161e92fcdaa70cfd7f89754ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a27e43f0d72c73ecf9bfeaa3e2544d925656fe82ed9bba341052c6c1f6c010e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a27e43f0d72c73ecf9bfeaa3e2544d925656fe82ed9bba341052c6c1f6c010e5->enter($__internal_a27e43f0d72c73ecf9bfeaa3e2544d925656fe82ed9bba341052c6c1f6c010e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 101
        echo "    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
";
        
        $__internal_a27e43f0d72c73ecf9bfeaa3e2544d925656fe82ed9bba341052c6c1f6c010e5->leave($__internal_a27e43f0d72c73ecf9bfeaa3e2544d925656fe82ed9bba341052c6c1f6c010e5_prof);

        
        $__internal_f71cf4909fd1bba610103abf5d0ac9134f3b36161e92fcdaa70cfd7f89754ade->leave($__internal_f71cf4909fd1bba610103abf5d0ac9134f3b36161e92fcdaa70cfd7f89754ade_prof);

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
        return array (  295 => 101,  286 => 100,  271 => 92,  264 => 90,  256 => 88,  254 => 87,  247 => 86,  244 => 85,  240 => 83,  237 => 82,  231 => 81,  225 => 79,  222 => 78,  218 => 77,  214 => 76,  210 => 75,  206 => 74,  202 => 73,  199 => 72,  195 => 71,  179 => 57,  170 => 56,  148 => 11,  139 => 10,  121 => 6,  109 => 106,  107 => 100,  103 => 98,  101 => 56,  94 => 51,  91 => 50,  85 => 47,  82 => 46,  80 => 45,  75 => 43,  69 => 40,  62 => 36,  59 => 35,  57 => 34,  45 => 24,  43 => 10,  36 => 6,  29 => 1,);
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
