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
            'navigation' => array($this, 'block_navigation'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6faa70feadf731a9642748b5ce9e3841208b888f337a316f558e959d5faa7bd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6faa70feadf731a9642748b5ce9e3841208b888f337a316f558e959d5faa7bd2->enter($__internal_6faa70feadf731a9642748b5ce9e3841208b888f337a316f558e959d5faa7bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "masterList/masterList.html.twig"));

        $__internal_2108d5173d93df807a98e83aaa5cd2fcab1cf8dea54c70d21a34a03ecf69a716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2108d5173d93df807a98e83aaa5cd2fcab1cf8dea54c70d21a34a03ecf69a716->enter($__internal_2108d5173d93df807a98e83aaa5cd2fcab1cf8dea54c70d21a34a03ecf69a716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "masterList/masterList.html.twig"));

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
    <div class=\"container-fluid\" id=\"main_container\">
            ";
        // line 27
        $this->displayBlock('navigation', $context, $blocks);
        // line 50
        echo "        <div class=\"container-fluid\">
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
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 60, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["master"]) {
            // line 61
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["master"], "master_id", array()), "html", null, true);
            echo "</th>
                        <td> ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["master"], "title", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["master"], "userId", array()), "html", null, true);
            echo "</td>
                        <td><a class=\"badge badge-info\" href=\"";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_list");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["master"], "master_id", array()), "html", null, true);
            echo "\">View</a></td>
                        <td><a class=\"badge badge-info\" href=\"";
            // line 66
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_masterEdit");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["master"], "master_id", array()), "html", null, true);
            echo "\">Edit</a></td>
                        <td><a class=\"badge badge-danger\" href=\"";
            // line 67
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
        // line 70
        echo "                </tbody>
            </table>
        </div>
    </div>



";
        // line 77
        $this->displayBlock('javascripts', $context, $blocks);
        // line 83
        echo "    </div>
</body>
</html>";
        
        $__internal_6faa70feadf731a9642748b5ce9e3841208b888f337a316f558e959d5faa7bd2->leave($__internal_6faa70feadf731a9642748b5ce9e3841208b888f337a316f558e959d5faa7bd2_prof);

        
        $__internal_2108d5173d93df807a98e83aaa5cd2fcab1cf8dea54c70d21a34a03ecf69a716->leave($__internal_2108d5173d93df807a98e83aaa5cd2fcab1cf8dea54c70d21a34a03ecf69a716_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0a3160b233d62ae0a6d33728ae7830e33bb49653a6c69f51bb56091c5d9574a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0a3160b233d62ae0a6d33728ae7830e33bb49653a6c69f51bb56091c5d9574a->enter($__internal_b0a3160b233d62ae0a6d33728ae7830e33bb49653a6c69f51bb56091c5d9574a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5f7e684e33dad0ee7e1a022cf5a525d25131c03f5ce6507775fce3c9b17f2d24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f7e684e33dad0ee7e1a022cf5a525d25131c03f5ce6507775fce3c9b17f2d24->enter($__internal_5f7e684e33dad0ee7e1a022cf5a525d25131c03f5ce6507775fce3c9b17f2d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper";
        
        $__internal_5f7e684e33dad0ee7e1a022cf5a525d25131c03f5ce6507775fce3c9b17f2d24->leave($__internal_5f7e684e33dad0ee7e1a022cf5a525d25131c03f5ce6507775fce3c9b17f2d24_prof);

        
        $__internal_b0a3160b233d62ae0a6d33728ae7830e33bb49653a6c69f51bb56091c5d9574a->leave($__internal_b0a3160b233d62ae0a6d33728ae7830e33bb49653a6c69f51bb56091c5d9574a_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_07ec909506f1df6e3c201ab763d1e85c1ba832a931b553e56b85f38a8080d059 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07ec909506f1df6e3c201ab763d1e85c1ba832a931b553e56b85f38a8080d059->enter($__internal_07ec909506f1df6e3c201ab763d1e85c1ba832a931b553e56b85f38a8080d059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_14b4a5e87c46fe4e9242d2fd5b000315500f4b7f318c18f284a008a4ac07c8e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14b4a5e87c46fe4e9242d2fd5b000315500f4b7f318c18f284a008a4ac07c8e8->enter($__internal_14b4a5e87c46fe4e9242d2fd5b000315500f4b7f318c18f284a008a4ac07c8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_14b4a5e87c46fe4e9242d2fd5b000315500f4b7f318c18f284a008a4ac07c8e8->leave($__internal_14b4a5e87c46fe4e9242d2fd5b000315500f4b7f318c18f284a008a4ac07c8e8_prof);

        
        $__internal_07ec909506f1df6e3c201ab763d1e85c1ba832a931b553e56b85f38a8080d059->leave($__internal_07ec909506f1df6e3c201ab763d1e85c1ba832a931b553e56b85f38a8080d059_prof);

    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_b61e688b9319814b2c597eb345edfd76944d03c6b31753b24319ba8a5f1e3290 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b61e688b9319814b2c597eb345edfd76944d03c6b31753b24319ba8a5f1e3290->enter($__internal_b61e688b9319814b2c597eb345edfd76944d03c6b31753b24319ba8a5f1e3290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_5d7fc62fcedd1cd0616b056f4b26bac3248e22c0ab2a64c6f048e2e78e96e518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d7fc62fcedd1cd0616b056f4b26bac3248e22c0ab2a64c6f048e2e78e96e518->enter($__internal_5d7fc62fcedd1cd0616b056f4b26bac3248e22c0ab2a64c6f048e2e78e96e518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 28
        echo "                <nav class=\"navbar sticky-top navbar-expand-lg navbar-light bg-light\">
                    <a class=\"navbar-brand\" href=\"#\">Merch Helper</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse col\" id=\"navbarSupportedContent\">
                        <ul class=\"nav justify-content-end main_menu ml-auto\">
                            ";
        // line 35
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 36
            echo "                                <li class=\"nav-item text-uppercase\">
                                    <a class=\"nav-link badge badge-success\" id=\"singUpBtn\" href=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_masterCreate");
            echo "\" style=\"color: white\">Create Listing</a>
                                </li>
                                <li class=\"nav-item active\">
                                    <p class=\"nav-link\" style=\"color: black;\">Hello, <span class=\"text-uppercase\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 40, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo "</span></p>
                                </li>
                                <li class=\"nav-item text-uppercase\">
                                    <a class=\"nav-link badge badge-danger\" id=\"singUpBtn\" href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" style=\"color: white\">Logout</a>
                                </li>
                            ";
        }
        // line 46
        echo "                        </ul>
                    </div>
                </nav>
            ";
        
        $__internal_5d7fc62fcedd1cd0616b056f4b26bac3248e22c0ab2a64c6f048e2e78e96e518->leave($__internal_5d7fc62fcedd1cd0616b056f4b26bac3248e22c0ab2a64c6f048e2e78e96e518_prof);

        
        $__internal_b61e688b9319814b2c597eb345edfd76944d03c6b31753b24319ba8a5f1e3290->leave($__internal_b61e688b9319814b2c597eb345edfd76944d03c6b31753b24319ba8a5f1e3290_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6d4dc525da415b68424cf569dccc7fab3dbeabb51cacbac970f5306d4fc60828 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d4dc525da415b68424cf569dccc7fab3dbeabb51cacbac970f5306d4fc60828->enter($__internal_6d4dc525da415b68424cf569dccc7fab3dbeabb51cacbac970f5306d4fc60828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5736eea998a1da3244c943fe3bc27ca5ab4ffd99037efb9fdb5fee91c8c92137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5736eea998a1da3244c943fe3bc27ca5ab4ffd99037efb9fdb5fee91c8c92137->enter($__internal_5736eea998a1da3244c943fe3bc27ca5ab4ffd99037efb9fdb5fee91c8c92137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "    <!-- Scripts -->
    <script src=\"../assets/js/core.min.js\"></script>
    <script src=\"../assets/js/app.min.js\"></script>
    <script src=\"../assets/js/script.min.js\"></script>
";
        
        $__internal_5736eea998a1da3244c943fe3bc27ca5ab4ffd99037efb9fdb5fee91c8c92137->leave($__internal_5736eea998a1da3244c943fe3bc27ca5ab4ffd99037efb9fdb5fee91c8c92137_prof);

        
        $__internal_6d4dc525da415b68424cf569dccc7fab3dbeabb51cacbac970f5306d4fc60828->leave($__internal_6d4dc525da415b68424cf569dccc7fab3dbeabb51cacbac970f5306d4fc60828_prof);

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
        return array (  241 => 78,  232 => 77,  219 => 46,  213 => 43,  207 => 40,  201 => 37,  198 => 36,  196 => 35,  187 => 28,  178 => 27,  156 => 11,  147 => 10,  129 => 6,  117 => 83,  115 => 77,  106 => 70,  95 => 67,  89 => 66,  83 => 65,  79 => 64,  75 => 63,  71 => 62,  68 => 61,  64 => 60,  52 => 50,  50 => 27,  45 => 24,  43 => 10,  36 => 6,  29 => 1,);
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
    <div class=\"container-fluid\" id=\"main_container\">
            {% block navigation %}
                <nav class=\"navbar sticky-top navbar-expand-lg navbar-light bg-light\">
                    <a class=\"navbar-brand\" href=\"#\">Merch Helper</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse col\" id=\"navbarSupportedContent\">
                        <ul class=\"nav justify-content-end main_menu ml-auto\">
                            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                                <li class=\"nav-item text-uppercase\">
                                    <a class=\"nav-link badge badge-success\" id=\"singUpBtn\" href=\"{{ path('app_masterCreate') }}\" style=\"color: white\">Create Listing</a>
                                </li>
                                <li class=\"nav-item active\">
                                    <p class=\"nav-link\" style=\"color: black;\">Hello, <span class=\"text-uppercase\">{{ app.user.username }}</span></p>
                                </li>
                                <li class=\"nav-item text-uppercase\">
                                    <a class=\"nav-link badge badge-danger\" id=\"singUpBtn\" href=\"{{ path('logout') }}\" style=\"color: white\">Logout</a>
                                </li>
                            {% endif %}
                        </ul>
                    </div>
                </nav>
            {% endblock %}
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
