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
        $__internal_055b2be0da5a0f07e88646786968c8700819739c7052cd314748db3558f677f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_055b2be0da5a0f07e88646786968c8700819739c7052cd314748db3558f677f0->enter($__internal_055b2be0da5a0f07e88646786968c8700819739c7052cd314748db3558f677f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "masterList/masterList.html.twig"));

        $__internal_d990014faa448c6fb1bebb7a158a102dc18e533806b3305d808da89879ef484f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d990014faa448c6fb1bebb7a158a102dc18e533806b3305d808da89879ef484f->enter($__internal_d990014faa448c6fb1bebb7a158a102dc18e533806b3305d808da89879ef484f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "masterList/masterList.html.twig"));

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
            echo "                    ";
            if (((isset($context["masterCount"]) || array_key_exists("masterCount", $context) ? $context["masterCount"] : (function () { throw new Twig_Error_Runtime('Variable "masterCount" does not exist.', 35, $this->getSourceContext()); })()) < 25)) {
                // line 36
                echo "                        <li class=\"nav-item badge-success\">
                            <a class=\"nav-link\" href=\"";
                // line 37
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_masterCreate");
                echo "\" style=\"color: white\">Create Master Listing</a>
                        </li>
                    ";
            }
            // line 40
            echo "
                    <li class=\"nav-item\" style=\"height: 33px;\">
                        <p class=\"nav-link\">Hello, ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 42, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo "</p>
                    </li>
                    <li class=\"nav-item \" style=\"height: 33px;\">
                        <a class=\"nav-link\" href=\"";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" style=\"color: white\">Logout</a>
                    </li>
                    ";
            // line 47
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 48
                echo "                        <li class=\"nav-item \" style=\"height: 33px;\">
                            <a class=\"nav-link badge-danger\" href=\"";
                // line 49
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin");
                echo "\" style=\"color: white\">Admin</a>
                        </li>
                    ";
            }
            // line 52
            echo "                ";
        }
        // line 53
        echo "            </ul>
        </div>
    </div>
</nav>
    <div class=\"container-fluid\" id=\"main_container\">
        <div class=\"container-fluid\">
            <table class=\"table\">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>User ID</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 68, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["master"]) {
            // line 69
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["master"], "master_id", array()), "html", null, true);
            echo "</th>
                        <td> ";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["master"], "title", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["master"], "userId", array()), "html", null, true);
            echo "</td>
                        <td><a class=\"badge badge-info\" href=\"";
            // line 73
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_list");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["master"], "master_id", array()), "html", null, true);
            echo "\">View</a></td>
                        <td><a class=\"badge badge-info\" href=\"";
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_masterEdit");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["master"], "master_id", array()), "html", null, true);
            echo "\">Edit</a></td>
                        <td><a class=\"badge badge-danger\" href=\"";
            // line 75
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
        // line 78
        echo "                </tbody>
            </table>
        </div>
    </div>



";
        // line 85
        $this->displayBlock('javascripts', $context, $blocks);
        // line 91
        echo "    </div>
</body>
</html>";
        
        $__internal_055b2be0da5a0f07e88646786968c8700819739c7052cd314748db3558f677f0->leave($__internal_055b2be0da5a0f07e88646786968c8700819739c7052cd314748db3558f677f0_prof);

        
        $__internal_d990014faa448c6fb1bebb7a158a102dc18e533806b3305d808da89879ef484f->leave($__internal_d990014faa448c6fb1bebb7a158a102dc18e533806b3305d808da89879ef484f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e3c69b78770c2c1f21cc985661fa528bbfc1bc56186aae7f24a40cb62bc2c04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e3c69b78770c2c1f21cc985661fa528bbfc1bc56186aae7f24a40cb62bc2c04->enter($__internal_3e3c69b78770c2c1f21cc985661fa528bbfc1bc56186aae7f24a40cb62bc2c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_687b19454d26c8d69173b555b212cbce2d9ff9298d518e9c3a36c5698e70fd26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_687b19454d26c8d69173b555b212cbce2d9ff9298d518e9c3a36c5698e70fd26->enter($__internal_687b19454d26c8d69173b555b212cbce2d9ff9298d518e9c3a36c5698e70fd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchByAmazon | Master Listing";
        
        $__internal_687b19454d26c8d69173b555b212cbce2d9ff9298d518e9c3a36c5698e70fd26->leave($__internal_687b19454d26c8d69173b555b212cbce2d9ff9298d518e9c3a36c5698e70fd26_prof);

        
        $__internal_3e3c69b78770c2c1f21cc985661fa528bbfc1bc56186aae7f24a40cb62bc2c04->leave($__internal_3e3c69b78770c2c1f21cc985661fa528bbfc1bc56186aae7f24a40cb62bc2c04_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9c3724d6115cc7d0df271f027383dc14d07e245f26553299711ee276d9b4ab06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c3724d6115cc7d0df271f027383dc14d07e245f26553299711ee276d9b4ab06->enter($__internal_9c3724d6115cc7d0df271f027383dc14d07e245f26553299711ee276d9b4ab06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d18f349fc055db0f999d737edc6afe397f7e79fc71e3f353718d545374a5d7d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d18f349fc055db0f999d737edc6afe397f7e79fc71e3f353718d545374a5d7d2->enter($__internal_d18f349fc055db0f999d737edc6afe397f7e79fc71e3f353718d545374a5d7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d18f349fc055db0f999d737edc6afe397f7e79fc71e3f353718d545374a5d7d2->leave($__internal_d18f349fc055db0f999d737edc6afe397f7e79fc71e3f353718d545374a5d7d2_prof);

        
        $__internal_9c3724d6115cc7d0df271f027383dc14d07e245f26553299711ee276d9b4ab06->leave($__internal_9c3724d6115cc7d0df271f027383dc14d07e245f26553299711ee276d9b4ab06_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_840297951629380d9aec80afdf743a4cfd2a178e4889d4b93920e108b1b4890c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_840297951629380d9aec80afdf743a4cfd2a178e4889d4b93920e108b1b4890c->enter($__internal_840297951629380d9aec80afdf743a4cfd2a178e4889d4b93920e108b1b4890c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7c9661fa8968683dc3e40b57a2bc224049d8da63d9dec970ded73d981d29a906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c9661fa8968683dc3e40b57a2bc224049d8da63d9dec970ded73d981d29a906->enter($__internal_7c9661fa8968683dc3e40b57a2bc224049d8da63d9dec970ded73d981d29a906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 86
        echo "    <!-- Scripts -->
    <script src=\"../assets/js/core.min.js\"></script>
    <script src=\"../assets/js/app.min.js\"></script>
    <script src=\"../assets/js/script.min.js\"></script>
";
        
        $__internal_7c9661fa8968683dc3e40b57a2bc224049d8da63d9dec970ded73d981d29a906->leave($__internal_7c9661fa8968683dc3e40b57a2bc224049d8da63d9dec970ded73d981d29a906_prof);

        
        $__internal_840297951629380d9aec80afdf743a4cfd2a178e4889d4b93920e108b1b4890c->leave($__internal_840297951629380d9aec80afdf743a4cfd2a178e4889d4b93920e108b1b4890c_prof);

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
        return array (  239 => 86,  230 => 85,  208 => 11,  199 => 10,  181 => 6,  169 => 91,  167 => 85,  158 => 78,  147 => 75,  141 => 74,  135 => 73,  131 => 72,  127 => 71,  123 => 70,  120 => 69,  116 => 68,  99 => 53,  96 => 52,  90 => 49,  87 => 48,  85 => 47,  80 => 45,  74 => 42,  70 => 40,  64 => 37,  61 => 36,  58 => 35,  56 => 34,  44 => 24,  42 => 10,  35 => 6,  28 => 1,);
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
                    {% if masterCount <25 %}
                        <li class=\"nav-item badge-success\">
                            <a class=\"nav-link\" href=\"{{ path('app_masterCreate') }}\" style=\"color: white\">Create Master Listing</a>
                        </li>
                    {% endif %}

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
