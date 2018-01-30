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
        $__internal_1695296b5cf3a15e01e6f477e832cfd8a73e19ca4add171b93fe6ede6d992c79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1695296b5cf3a15e01e6f477e832cfd8a73e19ca4add171b93fe6ede6d992c79->enter($__internal_1695296b5cf3a15e01e6f477e832cfd8a73e19ca4add171b93fe6ede6d992c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "masterList/masterList.html.twig"));

        $__internal_e52491be0ed3debd3e169d9df93d76fc97ebaf7a777b2718257169d2705c82d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e52491be0ed3debd3e169d9df93d76fc97ebaf7a777b2718257169d2705c82d4->enter($__internal_e52491be0ed3debd3e169d9df93d76fc97ebaf7a777b2718257169d2705c82d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "masterList/masterList.html.twig"));

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
        
        $__internal_1695296b5cf3a15e01e6f477e832cfd8a73e19ca4add171b93fe6ede6d992c79->leave($__internal_1695296b5cf3a15e01e6f477e832cfd8a73e19ca4add171b93fe6ede6d992c79_prof);

        
        $__internal_e52491be0ed3debd3e169d9df93d76fc97ebaf7a777b2718257169d2705c82d4->leave($__internal_e52491be0ed3debd3e169d9df93d76fc97ebaf7a777b2718257169d2705c82d4_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1bc6c6555a54eba353c98632b8f4a0e87e3212a62cd5b06339c84a0678fbffc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1bc6c6555a54eba353c98632b8f4a0e87e3212a62cd5b06339c84a0678fbffc->enter($__internal_b1bc6c6555a54eba353c98632b8f4a0e87e3212a62cd5b06339c84a0678fbffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ad0b614553b19e056974834e1b78513675b88cab321c4efd2345d53c7214a165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad0b614553b19e056974834e1b78513675b88cab321c4efd2345d53c7214a165->enter($__internal_ad0b614553b19e056974834e1b78513675b88cab321c4efd2345d53c7214a165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper";
        
        $__internal_ad0b614553b19e056974834e1b78513675b88cab321c4efd2345d53c7214a165->leave($__internal_ad0b614553b19e056974834e1b78513675b88cab321c4efd2345d53c7214a165_prof);

        
        $__internal_b1bc6c6555a54eba353c98632b8f4a0e87e3212a62cd5b06339c84a0678fbffc->leave($__internal_b1bc6c6555a54eba353c98632b8f4a0e87e3212a62cd5b06339c84a0678fbffc_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9509b372fe313a91a748e971cfab91465b916e326842fb343449d39de57a6739 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9509b372fe313a91a748e971cfab91465b916e326842fb343449d39de57a6739->enter($__internal_9509b372fe313a91a748e971cfab91465b916e326842fb343449d39de57a6739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c243cf651f845338e43b7614fef0ec3f11975ba3d637cdc6da37ad72904d5359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c243cf651f845338e43b7614fef0ec3f11975ba3d637cdc6da37ad72904d5359->enter($__internal_c243cf651f845338e43b7614fef0ec3f11975ba3d637cdc6da37ad72904d5359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c243cf651f845338e43b7614fef0ec3f11975ba3d637cdc6da37ad72904d5359->leave($__internal_c243cf651f845338e43b7614fef0ec3f11975ba3d637cdc6da37ad72904d5359_prof);

        
        $__internal_9509b372fe313a91a748e971cfab91465b916e326842fb343449d39de57a6739->leave($__internal_9509b372fe313a91a748e971cfab91465b916e326842fb343449d39de57a6739_prof);

    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_1b6f8150bbf61d81be1dffc7cdfaf96d17ff6d2eb86ee3d7e84cc7ae6f40a05f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b6f8150bbf61d81be1dffc7cdfaf96d17ff6d2eb86ee3d7e84cc7ae6f40a05f->enter($__internal_1b6f8150bbf61d81be1dffc7cdfaf96d17ff6d2eb86ee3d7e84cc7ae6f40a05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_cb9331986878584bb061bc7a23215c3147920dfc30b43815b2063cb0721e43ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb9331986878584bb061bc7a23215c3147920dfc30b43815b2063cb0721e43ef->enter($__internal_cb9331986878584bb061bc7a23215c3147920dfc30b43815b2063cb0721e43ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_cb9331986878584bb061bc7a23215c3147920dfc30b43815b2063cb0721e43ef->leave($__internal_cb9331986878584bb061bc7a23215c3147920dfc30b43815b2063cb0721e43ef_prof);

        
        $__internal_1b6f8150bbf61d81be1dffc7cdfaf96d17ff6d2eb86ee3d7e84cc7ae6f40a05f->leave($__internal_1b6f8150bbf61d81be1dffc7cdfaf96d17ff6d2eb86ee3d7e84cc7ae6f40a05f_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ecdfd4aebb8701c9581dc0a3bce820daa2753d26306565f426b534fa4d0c16e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecdfd4aebb8701c9581dc0a3bce820daa2753d26306565f426b534fa4d0c16e0->enter($__internal_ecdfd4aebb8701c9581dc0a3bce820daa2753d26306565f426b534fa4d0c16e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_41e12844b5da26e1ccae6c3fd612cac22180b44ffa21b13cee202092ed221f26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e12844b5da26e1ccae6c3fd612cac22180b44ffa21b13cee202092ed221f26->enter($__internal_41e12844b5da26e1ccae6c3fd612cac22180b44ffa21b13cee202092ed221f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "    <!-- Scripts -->
    <script src=\"../assets/js/core.min.js\"></script>
    <script src=\"../assets/js/app.min.js\"></script>
    <script src=\"../assets/js/script.min.js\"></script>
";
        
        $__internal_41e12844b5da26e1ccae6c3fd612cac22180b44ffa21b13cee202092ed221f26->leave($__internal_41e12844b5da26e1ccae6c3fd612cac22180b44ffa21b13cee202092ed221f26_prof);

        
        $__internal_ecdfd4aebb8701c9581dc0a3bce820daa2753d26306565f426b534fa4d0c16e0->leave($__internal_ecdfd4aebb8701c9581dc0a3bce820daa2753d26306565f426b534fa4d0c16e0_prof);

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
