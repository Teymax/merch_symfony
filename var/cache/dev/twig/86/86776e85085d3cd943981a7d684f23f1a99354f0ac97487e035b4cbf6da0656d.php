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
        $__internal_f475d049be7c1c5a2c5cb69a98a12a6e32815697703baa8018126a9cbf2784e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f475d049be7c1c5a2c5cb69a98a12a6e32815697703baa8018126a9cbf2784e4->enter($__internal_f475d049be7c1c5a2c5cb69a98a12a6e32815697703baa8018126a9cbf2784e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "masterList/masterList.html.twig"));

        $__internal_76197c76a569f41f4b8cc9281c0124bf7ebfa147065b1cbdf82455d253656071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76197c76a569f41f4b8cc9281c0124bf7ebfa147065b1cbdf82455d253656071->enter($__internal_76197c76a569f41f4b8cc9281c0124bf7ebfa147065b1cbdf82455d253656071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "masterList/masterList.html.twig"));

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
            echo "                    <li class=\"nav-item badge-success\">
                        <a class=\"nav-link\" href=\"";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_masterCreate");
            echo "\" style=\"color: white\">Create Master Listing</a>
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
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 65, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["master"]) {
            // line 66
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["master"], "master_id", array()), "html", null, true);
            echo "</th>
                        <td> ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["master"], "title", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["master"], "userId", array()), "html", null, true);
            echo "</td>
                        <td><a class=\"badge badge-info\" href=\"";
            // line 70
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_list");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["master"], "master_id", array()), "html", null, true);
            echo "\">View</a></td>
                        <td><a class=\"badge badge-info\" href=\"";
            // line 71
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_masterEdit");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["master"], "master_id", array()), "html", null, true);
            echo "\">Edit</a></td>
                        <td><a class=\"badge badge-danger\" href=\"";
            // line 72
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
        // line 75
        echo "                </tbody>
            </table>
        </div>
    </div>



";
        // line 82
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "    </div>
</body>
</html>";
        
        $__internal_f475d049be7c1c5a2c5cb69a98a12a6e32815697703baa8018126a9cbf2784e4->leave($__internal_f475d049be7c1c5a2c5cb69a98a12a6e32815697703baa8018126a9cbf2784e4_prof);

        
        $__internal_76197c76a569f41f4b8cc9281c0124bf7ebfa147065b1cbdf82455d253656071->leave($__internal_76197c76a569f41f4b8cc9281c0124bf7ebfa147065b1cbdf82455d253656071_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3371ec6c8da573144b66c30edef8be9438fd191d6203d5c717f2407145fe8403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3371ec6c8da573144b66c30edef8be9438fd191d6203d5c717f2407145fe8403->enter($__internal_3371ec6c8da573144b66c30edef8be9438fd191d6203d5c717f2407145fe8403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4be32d5e84bad1026fdfd7b57e71c2dc7a9fcc649f73d091c30c7ed4638f4c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4be32d5e84bad1026fdfd7b57e71c2dc7a9fcc649f73d091c30c7ed4638f4c2a->enter($__internal_4be32d5e84bad1026fdfd7b57e71c2dc7a9fcc649f73d091c30c7ed4638f4c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchByAmazon | Master Listing";
        
        $__internal_4be32d5e84bad1026fdfd7b57e71c2dc7a9fcc649f73d091c30c7ed4638f4c2a->leave($__internal_4be32d5e84bad1026fdfd7b57e71c2dc7a9fcc649f73d091c30c7ed4638f4c2a_prof);

        
        $__internal_3371ec6c8da573144b66c30edef8be9438fd191d6203d5c717f2407145fe8403->leave($__internal_3371ec6c8da573144b66c30edef8be9438fd191d6203d5c717f2407145fe8403_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bd0675e1ef1cc27db5cf1a94636e66b6c33ccec935bfd71dab895f4740dcc2ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd0675e1ef1cc27db5cf1a94636e66b6c33ccec935bfd71dab895f4740dcc2ed->enter($__internal_bd0675e1ef1cc27db5cf1a94636e66b6c33ccec935bfd71dab895f4740dcc2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_961dab4e335308d71013548d7f92ddfd163bf507488ab9e4728a65e4b602cd0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_961dab4e335308d71013548d7f92ddfd163bf507488ab9e4728a65e4b602cd0a->enter($__internal_961dab4e335308d71013548d7f92ddfd163bf507488ab9e4728a65e4b602cd0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_961dab4e335308d71013548d7f92ddfd163bf507488ab9e4728a65e4b602cd0a->leave($__internal_961dab4e335308d71013548d7f92ddfd163bf507488ab9e4728a65e4b602cd0a_prof);

        
        $__internal_bd0675e1ef1cc27db5cf1a94636e66b6c33ccec935bfd71dab895f4740dcc2ed->leave($__internal_bd0675e1ef1cc27db5cf1a94636e66b6c33ccec935bfd71dab895f4740dcc2ed_prof);

    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_374d99d37d4f09049ddfa47fbcd51828eba430852ebb443cc481b3ba0623d1bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_374d99d37d4f09049ddfa47fbcd51828eba430852ebb443cc481b3ba0623d1bd->enter($__internal_374d99d37d4f09049ddfa47fbcd51828eba430852ebb443cc481b3ba0623d1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_55aaff302f1fa6a35470acd1e6091d325d9a6ba03d8e4ac770d10e2dc3bd7ef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55aaff302f1fa6a35470acd1e6091d325d9a6ba03d8e4ac770d10e2dc3bd7ef8->enter($__internal_55aaff302f1fa6a35470acd1e6091d325d9a6ba03d8e4ac770d10e2dc3bd7ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 83
        echo "    <!-- Scripts -->
    <script src=\"../assets/js/core.min.js\"></script>
    <script src=\"../assets/js/app.min.js\"></script>
    <script src=\"../assets/js/script.min.js\"></script>
";
        
        $__internal_55aaff302f1fa6a35470acd1e6091d325d9a6ba03d8e4ac770d10e2dc3bd7ef8->leave($__internal_55aaff302f1fa6a35470acd1e6091d325d9a6ba03d8e4ac770d10e2dc3bd7ef8_prof);

        
        $__internal_374d99d37d4f09049ddfa47fbcd51828eba430852ebb443cc481b3ba0623d1bd->leave($__internal_374d99d37d4f09049ddfa47fbcd51828eba430852ebb443cc481b3ba0623d1bd_prof);

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
        return array (  232 => 83,  223 => 82,  201 => 11,  192 => 10,  174 => 6,  162 => 88,  160 => 82,  151 => 75,  140 => 72,  134 => 71,  128 => 70,  124 => 69,  120 => 68,  116 => 67,  113 => 66,  109 => 65,  92 => 50,  89 => 49,  83 => 46,  80 => 45,  78 => 44,  73 => 42,  67 => 39,  61 => 36,  58 => 35,  56 => 34,  44 => 24,  42 => 10,  35 => 6,  28 => 1,);
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
                    <li class=\"nav-item badge-success\">
                        <a class=\"nav-link\" href=\"{{ path('app_masterCreate') }}\" style=\"color: white\">Create Master Listing</a>
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
