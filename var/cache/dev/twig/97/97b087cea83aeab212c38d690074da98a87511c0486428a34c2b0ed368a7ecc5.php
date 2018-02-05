<?php

/* base.html.twig */
class __TwigTemplate_f66fb7b04dec026bc26e1743f6df5239ff9ba2b2aa8faefe5b31a65fe4f05a80 extends Twig_Template
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
        $__internal_a207eae6ba114411f6270ecb35a554a6f266dc3150bb32cda4a3da745ecac43b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a207eae6ba114411f6270ecb35a554a6f266dc3150bb32cda4a3da745ecac43b->enter($__internal_a207eae6ba114411f6270ecb35a554a6f266dc3150bb32cda4a3da745ecac43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_0b5f4e3bd8df3198fa58e36f1644ac90d3478bc5bab2e94438d203a3a4ccccec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b5f4e3bd8df3198fa58e36f1644ac90d3478bc5bab2e94438d203a3a4ccccec->enter($__internal_0b5f4e3bd8df3198fa58e36f1644ac90d3478bc5bab2e94438d203a3a4ccccec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <a class=\"navbar-brand\" href=\"#\">MerchByAmazon</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item text-uppercase\">
                    <a class=\"nav-link\" id=\"home\" href=\"#\">Home</a>
                </li>
                <li class=\"nav-item text-uppercase\">
                    <a class=\"nav-link\" id=\"about\" href=\"#\">About</a>
                </li>
                <li class=\"nav-item text-uppercase\">
                    <a class=\"nav-link\" id=\"contact\" href=\"#\">Contact</a>
                </li>
                <li class=\"nav-item text-uppercase\">
                    <a class=\"nav-link badge badge-info\" id=\"logInBtn\" href=\"login\" style=\"color: white\">Log-In</a>
                </li>
                <li class=\"nav-item text-uppercase\">
                    <a class=\"nav-link badge badge-dark\" id=\"singUpBtn\" href=\"register\" style=\"color: white\">Sing-Up</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <div class=\"container-fluid\" id=\"main_container\">


";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "    </div>
</body>
</html>";
        
        $__internal_a207eae6ba114411f6270ecb35a554a6f266dc3150bb32cda4a3da745ecac43b->leave($__internal_a207eae6ba114411f6270ecb35a554a6f266dc3150bb32cda4a3da745ecac43b_prof);

        
        $__internal_0b5f4e3bd8df3198fa58e36f1644ac90d3478bc5bab2e94438d203a3a4ccccec->leave($__internal_0b5f4e3bd8df3198fa58e36f1644ac90d3478bc5bab2e94438d203a3a4ccccec_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b77ef14e7d5879731a8a82d21c463a09114022a72d628f262e8198e73f5e3ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b77ef14e7d5879731a8a82d21c463a09114022a72d628f262e8198e73f5e3ca->enter($__internal_8b77ef14e7d5879731a8a82d21c463a09114022a72d628f262e8198e73f5e3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b257eba5a498189dcb84011ff14e71a962b7fa3011df8ea1295bc4cce9ef2719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b257eba5a498189dcb84011ff14e71a962b7fa3011df8ea1295bc4cce9ef2719->enter($__internal_b257eba5a498189dcb84011ff14e71a962b7fa3011df8ea1295bc4cce9ef2719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchByAmazon";
        
        $__internal_b257eba5a498189dcb84011ff14e71a962b7fa3011df8ea1295bc4cce9ef2719->leave($__internal_b257eba5a498189dcb84011ff14e71a962b7fa3011df8ea1295bc4cce9ef2719_prof);

        
        $__internal_8b77ef14e7d5879731a8a82d21c463a09114022a72d628f262e8198e73f5e3ca->leave($__internal_8b77ef14e7d5879731a8a82d21c463a09114022a72d628f262e8198e73f5e3ca_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c1d877e8a18b57042517ef32a0a4a86e61787a7bd6567c2c94a56ef42e9e5b7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1d877e8a18b57042517ef32a0a4a86e61787a7bd6567c2c94a56ef42e9e5b7c->enter($__internal_c1d877e8a18b57042517ef32a0a4a86e61787a7bd6567c2c94a56ef42e9e5b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_557ea7eaa4fc2fb003574e334bd8d5a07830443fa46203943a2700e470b6fe1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557ea7eaa4fc2fb003574e334bd8d5a07830443fa46203943a2700e470b6fe1d->enter($__internal_557ea7eaa4fc2fb003574e334bd8d5a07830443fa46203943a2700e470b6fe1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_557ea7eaa4fc2fb003574e334bd8d5a07830443fa46203943a2700e470b6fe1d->leave($__internal_557ea7eaa4fc2fb003574e334bd8d5a07830443fa46203943a2700e470b6fe1d_prof);

        
        $__internal_c1d877e8a18b57042517ef32a0a4a86e61787a7bd6567c2c94a56ef42e9e5b7c->leave($__internal_c1d877e8a18b57042517ef32a0a4a86e61787a7bd6567c2c94a56ef42e9e5b7c_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c38bee67a71390ffc67e2e30ed4ef57f5f2500505e289f0edd00d1e36ac6fd0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c38bee67a71390ffc67e2e30ed4ef57f5f2500505e289f0edd00d1e36ac6fd0b->enter($__internal_c38bee67a71390ffc67e2e30ed4ef57f5f2500505e289f0edd00d1e36ac6fd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ee85ad29edebb78c80b9c58388e749a69c00d73e9517c9aaf5ed36fb14d69ac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee85ad29edebb78c80b9c58388e749a69c00d73e9517c9aaf5ed36fb14d69ac5->enter($__internal_ee85ad29edebb78c80b9c58388e749a69c00d73e9517c9aaf5ed36fb14d69ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
";
        
        $__internal_ee85ad29edebb78c80b9c58388e749a69c00d73e9517c9aaf5ed36fb14d69ac5->leave($__internal_ee85ad29edebb78c80b9c58388e749a69c00d73e9517c9aaf5ed36fb14d69ac5_prof);

        
        $__internal_c38bee67a71390ffc67e2e30ed4ef57f5f2500505e289f0edd00d1e36ac6fd0b->leave($__internal_c38bee67a71390ffc67e2e30ed4ef57f5f2500505e289f0edd00d1e36ac6fd0b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  150 => 57,  141 => 56,  119 => 11,  110 => 10,  92 => 6,  80 => 62,  78 => 56,  44 => 24,  42 => 10,  35 => 6,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>{% block title %}MerchByAmazon{% endblock %}</title>
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
        <a class=\"navbar-brand\" href=\"#\">MerchByAmazon</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item text-uppercase\">
                    <a class=\"nav-link\" id=\"home\" href=\"#\">Home</a>
                </li>
                <li class=\"nav-item text-uppercase\">
                    <a class=\"nav-link\" id=\"about\" href=\"#\">About</a>
                </li>
                <li class=\"nav-item text-uppercase\">
                    <a class=\"nav-link\" id=\"contact\" href=\"#\">Contact</a>
                </li>
                <li class=\"nav-item text-uppercase\">
                    <a class=\"nav-link badge badge-info\" id=\"logInBtn\" href=\"login\" style=\"color: white\">Log-In</a>
                </li>
                <li class=\"nav-item text-uppercase\">
                    <a class=\"nav-link badge badge-dark\" id=\"singUpBtn\" href=\"register\" style=\"color: white\">Sing-Up</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <div class=\"container-fluid\" id=\"main_container\">


{% block javascripts %}
    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
{% endblock %}
    </div>
</body>
</html>", "base.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\base.html.twig");
    }
}
