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
        $__internal_52bbe5af3686a58dd4ebd82380a556ced037367ccd7ea7b5418731abb777504d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52bbe5af3686a58dd4ebd82380a556ced037367ccd7ea7b5418731abb777504d->enter($__internal_52bbe5af3686a58dd4ebd82380a556ced037367ccd7ea7b5418731abb777504d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d8d9b5c7833572c80a1136486295ac77bc435014f049c8e289126037c263032b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8d9b5c7833572c80a1136486295ac77bc435014f049c8e289126037c263032b->enter($__internal_d8d9b5c7833572c80a1136486295ac77bc435014f049c8e289126037c263032b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_52bbe5af3686a58dd4ebd82380a556ced037367ccd7ea7b5418731abb777504d->leave($__internal_52bbe5af3686a58dd4ebd82380a556ced037367ccd7ea7b5418731abb777504d_prof);

        
        $__internal_d8d9b5c7833572c80a1136486295ac77bc435014f049c8e289126037c263032b->leave($__internal_d8d9b5c7833572c80a1136486295ac77bc435014f049c8e289126037c263032b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b1b003b7e7d3261e178ee82ec5a4e4d131e5155a9faccd6e20685e6e48f4f38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b1b003b7e7d3261e178ee82ec5a4e4d131e5155a9faccd6e20685e6e48f4f38->enter($__internal_7b1b003b7e7d3261e178ee82ec5a4e4d131e5155a9faccd6e20685e6e48f4f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d2f1be7879570bc8d6d9d51832e50ee9b93e6243f3e92d996c7834bab098d69b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2f1be7879570bc8d6d9d51832e50ee9b93e6243f3e92d996c7834bab098d69b->enter($__internal_d2f1be7879570bc8d6d9d51832e50ee9b93e6243f3e92d996c7834bab098d69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchByAmazon";
        
        $__internal_d2f1be7879570bc8d6d9d51832e50ee9b93e6243f3e92d996c7834bab098d69b->leave($__internal_d2f1be7879570bc8d6d9d51832e50ee9b93e6243f3e92d996c7834bab098d69b_prof);

        
        $__internal_7b1b003b7e7d3261e178ee82ec5a4e4d131e5155a9faccd6e20685e6e48f4f38->leave($__internal_7b1b003b7e7d3261e178ee82ec5a4e4d131e5155a9faccd6e20685e6e48f4f38_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_21973af41858975cbd2050543e09c9d48c9f2f1df20a6d9dd7c369c2fd1019bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21973af41858975cbd2050543e09c9d48c9f2f1df20a6d9dd7c369c2fd1019bc->enter($__internal_21973af41858975cbd2050543e09c9d48c9f2f1df20a6d9dd7c369c2fd1019bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6cca897cdffc9cd641e93172903319383083069d36604adf5aae0cf046624f31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cca897cdffc9cd641e93172903319383083069d36604adf5aae0cf046624f31->enter($__internal_6cca897cdffc9cd641e93172903319383083069d36604adf5aae0cf046624f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6cca897cdffc9cd641e93172903319383083069d36604adf5aae0cf046624f31->leave($__internal_6cca897cdffc9cd641e93172903319383083069d36604adf5aae0cf046624f31_prof);

        
        $__internal_21973af41858975cbd2050543e09c9d48c9f2f1df20a6d9dd7c369c2fd1019bc->leave($__internal_21973af41858975cbd2050543e09c9d48c9f2f1df20a6d9dd7c369c2fd1019bc_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c496a287ec78e72f83b360b51354ebeec8c952f4602c7e308aa778edf72dd6d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c496a287ec78e72f83b360b51354ebeec8c952f4602c7e308aa778edf72dd6d3->enter($__internal_c496a287ec78e72f83b360b51354ebeec8c952f4602c7e308aa778edf72dd6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2c3fe3e5d349b72e5bef9d80bf00f2fc06eac31084a2f2f1ad044d512c68226c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c3fe3e5d349b72e5bef9d80bf00f2fc06eac31084a2f2f1ad044d512c68226c->enter($__internal_2c3fe3e5d349b72e5bef9d80bf00f2fc06eac31084a2f2f1ad044d512c68226c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
";
        
        $__internal_2c3fe3e5d349b72e5bef9d80bf00f2fc06eac31084a2f2f1ad044d512c68226c->leave($__internal_2c3fe3e5d349b72e5bef9d80bf00f2fc06eac31084a2f2f1ad044d512c68226c_prof);

        
        $__internal_c496a287ec78e72f83b360b51354ebeec8c952f4602c7e308aa778edf72dd6d3->leave($__internal_c496a287ec78e72f83b360b51354ebeec8c952f4602c7e308aa778edf72dd6d3_prof);

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
