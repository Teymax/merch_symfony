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
        $__internal_9e1b772d2065f3faea3a1f828bc5c9fbb059bb63ed9c49b334f6b6fba4263711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e1b772d2065f3faea3a1f828bc5c9fbb059bb63ed9c49b334f6b6fba4263711->enter($__internal_9e1b772d2065f3faea3a1f828bc5c9fbb059bb63ed9c49b334f6b6fba4263711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/list.html.twig"));

        $__internal_0ae78ca8564ab0939c1a933269ea73849752ec560503b3ac297c232cac47d02d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ae78ca8564ab0939c1a933269ea73849752ec560503b3ac297c232cac47d02d->enter($__internal_0ae78ca8564ab0939c1a933269ea73849752ec560503b3ac297c232cac47d02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/list.html.twig"));

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
        // line 57
        echo "

";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
        echo "    </div>
</body>
</html>";
        
        $__internal_9e1b772d2065f3faea3a1f828bc5c9fbb059bb63ed9c49b334f6b6fba4263711->leave($__internal_9e1b772d2065f3faea3a1f828bc5c9fbb059bb63ed9c49b334f6b6fba4263711_prof);

        
        $__internal_0ae78ca8564ab0939c1a933269ea73849752ec560503b3ac297c232cac47d02d->leave($__internal_0ae78ca8564ab0939c1a933269ea73849752ec560503b3ac297c232cac47d02d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_746057ce83531b1ffdf3204c7e4e0cc4ae705e0f13d399ae745b5773ed4ff900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_746057ce83531b1ffdf3204c7e4e0cc4ae705e0f13d399ae745b5773ed4ff900->enter($__internal_746057ce83531b1ffdf3204c7e4e0cc4ae705e0f13d399ae745b5773ed4ff900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3aa0a6892e7afb84ac6d34093cddeb2e16baf2757cecbe1e17633ab7cf6d5c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aa0a6892e7afb84ac6d34093cddeb2e16baf2757cecbe1e17633ab7cf6d5c5b->enter($__internal_3aa0a6892e7afb84ac6d34093cddeb2e16baf2757cecbe1e17633ab7cf6d5c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper";
        
        $__internal_3aa0a6892e7afb84ac6d34093cddeb2e16baf2757cecbe1e17633ab7cf6d5c5b->leave($__internal_3aa0a6892e7afb84ac6d34093cddeb2e16baf2757cecbe1e17633ab7cf6d5c5b_prof);

        
        $__internal_746057ce83531b1ffdf3204c7e4e0cc4ae705e0f13d399ae745b5773ed4ff900->leave($__internal_746057ce83531b1ffdf3204c7e4e0cc4ae705e0f13d399ae745b5773ed4ff900_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2d0770d42d84e68ef14dd3a8091369bd6c8772ae652fb03d8ab8d47743f9484b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d0770d42d84e68ef14dd3a8091369bd6c8772ae652fb03d8ab8d47743f9484b->enter($__internal_2d0770d42d84e68ef14dd3a8091369bd6c8772ae652fb03d8ab8d47743f9484b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8678170a8f4ad052559c74300262d48ed2ea12cc04cde112b184dca43e7592ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8678170a8f4ad052559c74300262d48ed2ea12cc04cde112b184dca43e7592ff->enter($__internal_8678170a8f4ad052559c74300262d48ed2ea12cc04cde112b184dca43e7592ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_8678170a8f4ad052559c74300262d48ed2ea12cc04cde112b184dca43e7592ff->leave($__internal_8678170a8f4ad052559c74300262d48ed2ea12cc04cde112b184dca43e7592ff_prof);

        
        $__internal_2d0770d42d84e68ef14dd3a8091369bd6c8772ae652fb03d8ab8d47743f9484b->leave($__internal_2d0770d42d84e68ef14dd3a8091369bd6c8772ae652fb03d8ab8d47743f9484b_prof);

    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_595d21dea37f3190d23226b190ccfa8cbdb28c9a67b311f1f4ceb84cebbaefd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_595d21dea37f3190d23226b190ccfa8cbdb28c9a67b311f1f4ceb84cebbaefd5->enter($__internal_595d21dea37f3190d23226b190ccfa8cbdb28c9a67b311f1f4ceb84cebbaefd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_9b05e5e2b5e9221e16e8c6e9e2d5aaa60c7b62727754f9f5a0ef78620a5d8bd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b05e5e2b5e9221e16e8c6e9e2d5aaa60c7b62727754f9f5a0ef78620a5d8bd1->enter($__internal_9b05e5e2b5e9221e16e8c6e9e2d5aaa60c7b62727754f9f5a0ef78620a5d8bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 28
        echo "                <nav class=\"navbar sticky-top navbar-expand-lg navbar-light bg-light\">
                    <a class=\"navbar-brand\" href=\"#\">Merch Helper</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse col\" id=\"navbarSupportedContent\">
                        <ul class=\"nav justify-content-end main_menu ml-auto\">
                            <li class=\"nav-item text-uppercase\">
                                <a class=\"nav-link\" id=\"home\" href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Home</a>
                            </li>
                            <li class=\"nav-item text-uppercase\">
                                <a class=\"nav-link\" id=\"about\" href=\"#\">About</a>
                            </li>
                            <li class=\"nav-item text-uppercase\">
                                <a class=\"nav-link\" id=\"contact\" href=\"#\">Contact</a>
                            </li>
                            ";
        // line 44
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 45
            echo "                                <li class=\"nav-item active\">
                                    <p class=\"nav-link\" style=\"color: black;\">Hello, <span class=\"text-uppercase\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 46, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo "</span></p>
                                </li>
                                <li class=\"nav-item text-uppercase\">
                                    <a class=\"nav-link badge badge-danger\" id=\"singUpBtn\" href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" style=\"color: white\">Logout</a>
                                </li>
                            ";
        }
        // line 52
        echo "                        </ul>
                    </div>
                </nav>
    </div>
            ";
        
        $__internal_9b05e5e2b5e9221e16e8c6e9e2d5aaa60c7b62727754f9f5a0ef78620a5d8bd1->leave($__internal_9b05e5e2b5e9221e16e8c6e9e2d5aaa60c7b62727754f9f5a0ef78620a5d8bd1_prof);

        
        $__internal_595d21dea37f3190d23226b190ccfa8cbdb28c9a67b311f1f4ceb84cebbaefd5->leave($__internal_595d21dea37f3190d23226b190ccfa8cbdb28c9a67b311f1f4ceb84cebbaefd5_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_15044cf9cc6ceef8e3a01a5ac30faf8ea2d4e3aaad2ff758b17c22b9f15b8186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15044cf9cc6ceef8e3a01a5ac30faf8ea2d4e3aaad2ff758b17c22b9f15b8186->enter($__internal_15044cf9cc6ceef8e3a01a5ac30faf8ea2d4e3aaad2ff758b17c22b9f15b8186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_504e36afe9d5488e9e3c200476926819de35e8e34e53a00e78ad4307006cf4c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_504e36afe9d5488e9e3c200476926819de35e8e34e53a00e78ad4307006cf4c9->enter($__internal_504e36afe9d5488e9e3c200476926819de35e8e34e53a00e78ad4307006cf4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
";
        
        $__internal_504e36afe9d5488e9e3c200476926819de35e8e34e53a00e78ad4307006cf4c9->leave($__internal_504e36afe9d5488e9e3c200476926819de35e8e34e53a00e78ad4307006cf4c9_prof);

        
        $__internal_15044cf9cc6ceef8e3a01a5ac30faf8ea2d4e3aaad2ff758b17c22b9f15b8186->leave($__internal_15044cf9cc6ceef8e3a01a5ac30faf8ea2d4e3aaad2ff758b17c22b9f15b8186_prof);

    }

    public function getTemplateName()
    {
        return "list/list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  189 => 60,  180 => 59,  166 => 52,  160 => 49,  154 => 46,  151 => 45,  149 => 44,  138 => 36,  128 => 28,  119 => 27,  97 => 11,  88 => 10,  70 => 6,  58 => 65,  56 => 59,  52 => 57,  50 => 27,  45 => 24,  43 => 10,  36 => 6,  29 => 1,);
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
                            <li class=\"nav-item text-uppercase\">
                                <a class=\"nav-link\" id=\"home\" href=\"{{ path('index') }}\">Home</a>
                            </li>
                            <li class=\"nav-item text-uppercase\">
                                <a class=\"nav-link\" id=\"about\" href=\"#\">About</a>
                            </li>
                            <li class=\"nav-item text-uppercase\">
                                <a class=\"nav-link\" id=\"contact\" href=\"#\">Contact</a>
                            </li>
                            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
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
</html>", "list/list.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\list\\list.html.twig");
    }
}
