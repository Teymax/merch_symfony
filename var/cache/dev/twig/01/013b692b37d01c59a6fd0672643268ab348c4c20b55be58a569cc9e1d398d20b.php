<?php

/* list/list.html.twig */
class __TwigTemplate_5c444136e0c8aa60c5f668b7a4be291533955e4c6f75df03eb68fa2be9f891cd extends Twig_Template
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
        $__internal_305dfa7337e5ff9b4957abc9a961342454854ac09814076dea2eb0d072790974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_305dfa7337e5ff9b4957abc9a961342454854ac09814076dea2eb0d072790974->enter($__internal_305dfa7337e5ff9b4957abc9a961342454854ac09814076dea2eb0d072790974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/list.html.twig"));

        $__internal_afd7d9a6b5ab5dcd1a06cf3c1cdf81f5216579a3a5c2d8d7fff58378a5dd1974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afd7d9a6b5ab5dcd1a06cf3c1cdf81f5216579a3a5c2d8d7fff58378a5dd1974->enter($__internal_afd7d9a6b5ab5dcd1a06cf3c1cdf81f5216579a3a5c2d8d7fff58378a5dd1974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/list.html.twig"));

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
        // line 77
        echo "

";
        // line 79
        $this->displayBlock('javascripts', $context, $blocks);
        // line 85
        echo "    </div>
</body>
</html>";
        
        $__internal_305dfa7337e5ff9b4957abc9a961342454854ac09814076dea2eb0d072790974->leave($__internal_305dfa7337e5ff9b4957abc9a961342454854ac09814076dea2eb0d072790974_prof);

        
        $__internal_afd7d9a6b5ab5dcd1a06cf3c1cdf81f5216579a3a5c2d8d7fff58378a5dd1974->leave($__internal_afd7d9a6b5ab5dcd1a06cf3c1cdf81f5216579a3a5c2d8d7fff58378a5dd1974_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf9036d4eed7ecda4393317e5c1962eb5406736abe6808bc79eda73102aad23c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf9036d4eed7ecda4393317e5c1962eb5406736abe6808bc79eda73102aad23c->enter($__internal_bf9036d4eed7ecda4393317e5c1962eb5406736abe6808bc79eda73102aad23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dd528405d81c19c3171b1b9ec869bd3a5315ac4ddca45ca0b8c621721dc9c763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd528405d81c19c3171b1b9ec869bd3a5315ac4ddca45ca0b8c621721dc9c763->enter($__internal_dd528405d81c19c3171b1b9ec869bd3a5315ac4ddca45ca0b8c621721dc9c763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper";
        
        $__internal_dd528405d81c19c3171b1b9ec869bd3a5315ac4ddca45ca0b8c621721dc9c763->leave($__internal_dd528405d81c19c3171b1b9ec869bd3a5315ac4ddca45ca0b8c621721dc9c763_prof);

        
        $__internal_bf9036d4eed7ecda4393317e5c1962eb5406736abe6808bc79eda73102aad23c->leave($__internal_bf9036d4eed7ecda4393317e5c1962eb5406736abe6808bc79eda73102aad23c_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_75d61939626115d766c83008642a31be661197a170c3c85dbd3f9d37d2f37f8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75d61939626115d766c83008642a31be661197a170c3c85dbd3f9d37d2f37f8d->enter($__internal_75d61939626115d766c83008642a31be661197a170c3c85dbd3f9d37d2f37f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2c00a663e9bf477abe6d44ef83c22c58d1ebb96e155a9fd10e5b2b2aff4d9fa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c00a663e9bf477abe6d44ef83c22c58d1ebb96e155a9fd10e5b2b2aff4d9fa4->enter($__internal_2c00a663e9bf477abe6d44ef83c22c58d1ebb96e155a9fd10e5b2b2aff4d9fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_2c00a663e9bf477abe6d44ef83c22c58d1ebb96e155a9fd10e5b2b2aff4d9fa4->leave($__internal_2c00a663e9bf477abe6d44ef83c22c58d1ebb96e155a9fd10e5b2b2aff4d9fa4_prof);

        
        $__internal_75d61939626115d766c83008642a31be661197a170c3c85dbd3f9d37d2f37f8d->leave($__internal_75d61939626115d766c83008642a31be661197a170c3c85dbd3f9d37d2f37f8d_prof);

    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_f689510f51c63f5c4cbf80aea748afc5b0c27c3d697f52de5e7245ec63091210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f689510f51c63f5c4cbf80aea748afc5b0c27c3d697f52de5e7245ec63091210->enter($__internal_f689510f51c63f5c4cbf80aea748afc5b0c27c3d697f52de5e7245ec63091210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_788061373983d906698825cb8b5aec0325b08c484d51fa812afb00ce8bbf25d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_788061373983d906698825cb8b5aec0325b08c484d51fa812afb00ce8bbf25d0->enter($__internal_788061373983d906698825cb8b5aec0325b08c484d51fa812afb00ce8bbf25d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_listCreate");
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["master"]) || array_key_exists("master", $context) ? $context["master"] : (function () { throw new Twig_Error_Runtime('Variable "master" does not exist.', 37, $this->getSourceContext()); })()), "html", null, true);
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
        echo "                            ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 47
            echo "                            <li class=\"nav-item text-uppercase\">
                            <a class=\"nav-link badge badge-danger\" id=\"singUpBtn\" href=\"#\" style=\"color: white\">User Test</a>
                            </li>
                            ";
        }
        // line 51
        echo "                            ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 52
            echo "                                <li class=\"nav-item text-uppercase\">
                                    <a class=\"nav-link badge badge-danger\" id=\"singUpBtn\" href=\"#\" style=\"color: white\">Admin Test</a>
                                </li>
                            ";
        }
        // line 56
        echo "                        </ul>
                    </div>
                </nav>
    </div>
    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 60, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 61
            echo "        <li>
            <span>List ID: </span>  ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "listing_id", array()), "html", null, true);
            echo " <br>
            <span>Title: </span> ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "title", array()), "html", null, true);
            echo " <br></a>
            <span>Brand: </span>  ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "brand", array()), "html", null, true);
            echo " <br>
            <span>Type: </span>  ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "type", array()), "html", null, true);
            echo " <br>
            <span>Fit: </span>  ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "fit", array()), "html", null, true);
            echo " <br>
            <span>Color: </span>  ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "color", array()), "html", null, true);
            echo " <br>
            <span>Cost: </span>  ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "cost", array()), "html", null, true);
            echo " <br>
            <span>Bullet One: </span>  ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "bulletOne", array()), "html", null, true);
            echo " <br>
            <span>Bullet Two: </span>  ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "bulletOne", array()), "html", null, true);
            echo " <br>
            <span>Description: </span>  ";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "description", array()), "html", null, true);
            echo " <br>
            <a href=\"";
            // line 72
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_listEdit");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "listing_id", array()), "html", null, true);
            echo "\">Edit</a>
            <a href=\"";
            // line 73
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_listDelete");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "listing_id", array()), "html", null, true);
            echo "\">Delete</a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "            ";
        
        $__internal_788061373983d906698825cb8b5aec0325b08c484d51fa812afb00ce8bbf25d0->leave($__internal_788061373983d906698825cb8b5aec0325b08c484d51fa812afb00ce8bbf25d0_prof);

        
        $__internal_f689510f51c63f5c4cbf80aea748afc5b0c27c3d697f52de5e7245ec63091210->leave($__internal_f689510f51c63f5c4cbf80aea748afc5b0c27c3d697f52de5e7245ec63091210_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_94c940a84d03df41bea6cd75fffd92a4e487b4160acc4470c8da6e265903893e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94c940a84d03df41bea6cd75fffd92a4e487b4160acc4470c8da6e265903893e->enter($__internal_94c940a84d03df41bea6cd75fffd92a4e487b4160acc4470c8da6e265903893e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ad36fd4f48b7189765bcb93cba817ccfb5719bb94689998f16c6b8c25c5acdab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad36fd4f48b7189765bcb93cba817ccfb5719bb94689998f16c6b8c25c5acdab->enter($__internal_ad36fd4f48b7189765bcb93cba817ccfb5719bb94689998f16c6b8c25c5acdab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
        echo "    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
";
        
        $__internal_ad36fd4f48b7189765bcb93cba817ccfb5719bb94689998f16c6b8c25c5acdab->leave($__internal_ad36fd4f48b7189765bcb93cba817ccfb5719bb94689998f16c6b8c25c5acdab_prof);

        
        $__internal_94c940a84d03df41bea6cd75fffd92a4e487b4160acc4470c8da6e265903893e->leave($__internal_94c940a84d03df41bea6cd75fffd92a4e487b4160acc4470c8da6e265903893e_prof);

    }

    public function getTemplateName()
    {
        return "list/list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  269 => 80,  260 => 79,  250 => 76,  239 => 73,  233 => 72,  229 => 71,  225 => 70,  221 => 69,  217 => 68,  213 => 67,  209 => 66,  205 => 65,  201 => 64,  197 => 63,  193 => 62,  190 => 61,  186 => 60,  180 => 56,  174 => 52,  171 => 51,  165 => 47,  162 => 46,  156 => 43,  150 => 40,  142 => 37,  139 => 36,  137 => 35,  128 => 28,  119 => 27,  97 => 11,  88 => 10,  70 => 6,  58 => 85,  56 => 79,  52 => 77,  50 => 27,  45 => 24,  43 => 10,  36 => 6,  29 => 1,);
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
                                    <a class=\"nav-link badge badge-success\" id=\"singUpBtn\" href=\"{{ path('app_listCreate') }}/{{ master }}\" style=\"color: white\">Create Listing</a>
                                </li>
                                <li class=\"nav-item active\">
                                    <p class=\"nav-link\" style=\"color: black;\">Hello, <span class=\"text-uppercase\">{{ app.user.username }}</span></p>
                                </li>
                                <li class=\"nav-item text-uppercase\">
                                    <a class=\"nav-link badge badge-danger\" id=\"singUpBtn\" href=\"{{ path('logout') }}\" style=\"color: white\">Logout</a>
                                </li>
                            {% endif %}
                            {% if is_granted('ROLE_USER') %}
                            <li class=\"nav-item text-uppercase\">
                            <a class=\"nav-link badge badge-danger\" id=\"singUpBtn\" href=\"#\" style=\"color: white\">User Test</a>
                            </li>
                            {% endif %}
                            {% if is_granted('ROLE_ADMIN') %}
                                <li class=\"nav-item text-uppercase\">
                                    <a class=\"nav-link badge badge-danger\" id=\"singUpBtn\" href=\"#\" style=\"color: white\">Admin Test</a>
                                </li>
                            {% endif %}
                        </ul>
                    </div>
                </nav>
    </div>
    {% for list in posts %}
        <li>
            <span>List ID: </span>  {{ list.listing_id }} <br>
            <span>Title: </span> {{ list.title }} <br></a>
            <span>Brand: </span>  {{ list.brand }} <br>
            <span>Type: </span>  {{ list.type }} <br>
            <span>Fit: </span>  {{ list.fit }} <br>
            <span>Color: </span>  {{ list.color }} <br>
            <span>Cost: </span>  {{ list.cost }} <br>
            <span>Bullet One: </span>  {{ list.bulletOne }} <br>
            <span>Bullet Two: </span>  {{ list.bulletOne }} <br>
            <span>Description: </span>  {{ list.description }} <br>
            <a href=\"{{ path('app_listEdit')}}/{{ list.listing_id}}\">Edit</a>
            <a href=\"{{ path('app_listDelete')}}/{{ list.listing_id }}\">Delete</a>
        </li>
    {% endfor %}
            {% endblock %}


{% block javascripts %}
    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
{% endblock %}
    </div>
</body>
</html>", "list/list.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\list\\list.html.twig");
    }
}
