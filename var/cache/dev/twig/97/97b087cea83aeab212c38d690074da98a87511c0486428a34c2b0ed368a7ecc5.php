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
        $__internal_84b215e29aa6ae1a3d5b9b191b245765e8d5e66ee801347b0df90634b11f9e7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84b215e29aa6ae1a3d5b9b191b245765e8d5e66ee801347b0df90634b11f9e7b->enter($__internal_84b215e29aa6ae1a3d5b9b191b245765e8d5e66ee801347b0df90634b11f9e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_be8cd965207063dea292badaf768224072ddd0d23fc9fd3f453c4f182e730a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be8cd965207063dea292badaf768224072ddd0d23fc9fd3f453c4f182e730a1e->enter($__internal_be8cd965207063dea292badaf768224072ddd0d23fc9fd3f453c4f182e730a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_84b215e29aa6ae1a3d5b9b191b245765e8d5e66ee801347b0df90634b11f9e7b->leave($__internal_84b215e29aa6ae1a3d5b9b191b245765e8d5e66ee801347b0df90634b11f9e7b_prof);

        
        $__internal_be8cd965207063dea292badaf768224072ddd0d23fc9fd3f453c4f182e730a1e->leave($__internal_be8cd965207063dea292badaf768224072ddd0d23fc9fd3f453c4f182e730a1e_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c64107592c02bd97c64dd37205653a46d88ff4892e0b297873232df08abd53f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c64107592c02bd97c64dd37205653a46d88ff4892e0b297873232df08abd53f->enter($__internal_9c64107592c02bd97c64dd37205653a46d88ff4892e0b297873232df08abd53f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7bd12489ba05b16cdb98d8f95a50aa1b1a42d0f33ee76153f057a30653cf5c98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd12489ba05b16cdb98d8f95a50aa1b1a42d0f33ee76153f057a30653cf5c98->enter($__internal_7bd12489ba05b16cdb98d8f95a50aa1b1a42d0f33ee76153f057a30653cf5c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchByAmazon";
        
        $__internal_7bd12489ba05b16cdb98d8f95a50aa1b1a42d0f33ee76153f057a30653cf5c98->leave($__internal_7bd12489ba05b16cdb98d8f95a50aa1b1a42d0f33ee76153f057a30653cf5c98_prof);

        
        $__internal_9c64107592c02bd97c64dd37205653a46d88ff4892e0b297873232df08abd53f->leave($__internal_9c64107592c02bd97c64dd37205653a46d88ff4892e0b297873232df08abd53f_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_839d8706c5bba55d62d02fe8e1988c3adb8963267a33f050ebb529cabd368628 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_839d8706c5bba55d62d02fe8e1988c3adb8963267a33f050ebb529cabd368628->enter($__internal_839d8706c5bba55d62d02fe8e1988c3adb8963267a33f050ebb529cabd368628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_156f27d015142546306bda0052bb8bbaa13169a018b84a2a0f8d7d725585e5b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156f27d015142546306bda0052bb8bbaa13169a018b84a2a0f8d7d725585e5b9->enter($__internal_156f27d015142546306bda0052bb8bbaa13169a018b84a2a0f8d7d725585e5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_156f27d015142546306bda0052bb8bbaa13169a018b84a2a0f8d7d725585e5b9->leave($__internal_156f27d015142546306bda0052bb8bbaa13169a018b84a2a0f8d7d725585e5b9_prof);

        
        $__internal_839d8706c5bba55d62d02fe8e1988c3adb8963267a33f050ebb529cabd368628->leave($__internal_839d8706c5bba55d62d02fe8e1988c3adb8963267a33f050ebb529cabd368628_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2f026d96259cce3d42e2d1368076840c25d903f17eca81de73ddf4ceaa321880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f026d96259cce3d42e2d1368076840c25d903f17eca81de73ddf4ceaa321880->enter($__internal_2f026d96259cce3d42e2d1368076840c25d903f17eca81de73ddf4ceaa321880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1b6cbbf0ae1e2dffbd259ff4408e7c0a99211feab8207cf22ba037cd899f485f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b6cbbf0ae1e2dffbd259ff4408e7c0a99211feab8207cf22ba037cd899f485f->enter($__internal_1b6cbbf0ae1e2dffbd259ff4408e7c0a99211feab8207cf22ba037cd899f485f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
";
        
        $__internal_1b6cbbf0ae1e2dffbd259ff4408e7c0a99211feab8207cf22ba037cd899f485f->leave($__internal_1b6cbbf0ae1e2dffbd259ff4408e7c0a99211feab8207cf22ba037cd899f485f_prof);

        
        $__internal_2f026d96259cce3d42e2d1368076840c25d903f17eca81de73ddf4ceaa321880->leave($__internal_2f026d96259cce3d42e2d1368076840c25d903f17eca81de73ddf4ceaa321880_prof);

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
