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
            'navigation' => array($this, 'block_navigation'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f847aef921e570cbe5cf255ad0b9fe4c769cc858e63df062e8d84758d434ef6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f847aef921e570cbe5cf255ad0b9fe4c769cc858e63df062e8d84758d434ef6a->enter($__internal_f847aef921e570cbe5cf255ad0b9fe4c769cc858e63df062e8d84758d434ef6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_dfff2b5112826821d54cc62e3b426d431fa716a2c8c4dca8fd32b680eae722ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfff2b5112826821d54cc62e3b426d431fa716a2c8c4dca8fd32b680eae722ef->enter($__internal_dfff2b5112826821d54cc62e3b426d431fa716a2c8c4dca8fd32b680eae722ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 55
        echo "

";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "    </div>
</body>
</html>";
        
        $__internal_f847aef921e570cbe5cf255ad0b9fe4c769cc858e63df062e8d84758d434ef6a->leave($__internal_f847aef921e570cbe5cf255ad0b9fe4c769cc858e63df062e8d84758d434ef6a_prof);

        
        $__internal_dfff2b5112826821d54cc62e3b426d431fa716a2c8c4dca8fd32b680eae722ef->leave($__internal_dfff2b5112826821d54cc62e3b426d431fa716a2c8c4dca8fd32b680eae722ef_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_bfb80e2e0c74c0c0124f174988f04986baf5b31be3aeced6ca930b226827f5f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfb80e2e0c74c0c0124f174988f04986baf5b31be3aeced6ca930b226827f5f0->enter($__internal_bfb80e2e0c74c0c0124f174988f04986baf5b31be3aeced6ca930b226827f5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_337c3ee87b2599234bf84d43d641e80d605534e05cefec7d901bfbf26ceceea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_337c3ee87b2599234bf84d43d641e80d605534e05cefec7d901bfbf26ceceea4->enter($__internal_337c3ee87b2599234bf84d43d641e80d605534e05cefec7d901bfbf26ceceea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper";
        
        $__internal_337c3ee87b2599234bf84d43d641e80d605534e05cefec7d901bfbf26ceceea4->leave($__internal_337c3ee87b2599234bf84d43d641e80d605534e05cefec7d901bfbf26ceceea4_prof);

        
        $__internal_bfb80e2e0c74c0c0124f174988f04986baf5b31be3aeced6ca930b226827f5f0->leave($__internal_bfb80e2e0c74c0c0124f174988f04986baf5b31be3aeced6ca930b226827f5f0_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_80393bedf1b1d413c62466786bd7b14592b437cb7ddf3c571bc4769780b76481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80393bedf1b1d413c62466786bd7b14592b437cb7ddf3c571bc4769780b76481->enter($__internal_80393bedf1b1d413c62466786bd7b14592b437cb7ddf3c571bc4769780b76481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_036207c96fcd408f678982d0da0f4249d67ed9502bcd971860dec8b1d0de80d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_036207c96fcd408f678982d0da0f4249d67ed9502bcd971860dec8b1d0de80d5->enter($__internal_036207c96fcd408f678982d0da0f4249d67ed9502bcd971860dec8b1d0de80d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_036207c96fcd408f678982d0da0f4249d67ed9502bcd971860dec8b1d0de80d5->leave($__internal_036207c96fcd408f678982d0da0f4249d67ed9502bcd971860dec8b1d0de80d5_prof);

        
        $__internal_80393bedf1b1d413c62466786bd7b14592b437cb7ddf3c571bc4769780b76481->leave($__internal_80393bedf1b1d413c62466786bd7b14592b437cb7ddf3c571bc4769780b76481_prof);

    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_c0114766c0face169e79e6f3859f860c8da588413aa148dcd381ce3d4a6c8e65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0114766c0face169e79e6f3859f860c8da588413aa148dcd381ce3d4a6c8e65->enter($__internal_c0114766c0face169e79e6f3859f860c8da588413aa148dcd381ce3d4a6c8e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_4e41f20dba8d92fcbe02f9888fce864bf8325ba05dd76b35d76ca5c0a3e59c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e41f20dba8d92fcbe02f9888fce864bf8325ba05dd76b35d76ca5c0a3e59c75->enter($__internal_4e41f20dba8d92fcbe02f9888fce864bf8325ba05dd76b35d76ca5c0a3e59c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 28
        echo "                <nav class=\"navbar sticky-top navbar-expand-lg navbar-light bg-light\">
                    <a class=\"navbar-brand\" href=\"#\">Merch Helper</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse col\" id=\"navbarSupportedContent\">
                        <ul class=\"nav justify-content-end main_menu\">
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
                                <a class=\"nav-link badge badge-info\" id=\"logInBtn\" href=\"log-in\" style=\"color: white\">Log-In</a>
                            </li>
                            <li class=\"nav-item text-uppercase\">
                                <a class=\"nav-link badge badge-dark\" id=\"singUpBtn\" href=\"sing-up\" style=\"color: white\">Sing-Up</a>
                            </li>
                        </ul>
                    </div>
                </nav>
    </div>
            ";
        
        $__internal_4e41f20dba8d92fcbe02f9888fce864bf8325ba05dd76b35d76ca5c0a3e59c75->leave($__internal_4e41f20dba8d92fcbe02f9888fce864bf8325ba05dd76b35d76ca5c0a3e59c75_prof);

        
        $__internal_c0114766c0face169e79e6f3859f860c8da588413aa148dcd381ce3d4a6c8e65->leave($__internal_c0114766c0face169e79e6f3859f860c8da588413aa148dcd381ce3d4a6c8e65_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7deae6751afd06182f364dc49c6e1d9f13301722c62eaac9f7533e7d756c2007 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7deae6751afd06182f364dc49c6e1d9f13301722c62eaac9f7533e7d756c2007->enter($__internal_7deae6751afd06182f364dc49c6e1d9f13301722c62eaac9f7533e7d756c2007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9abd51225eb72a411e0a150e8580df9a32c1a193d99d7b6ef51fdcc99055c22f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9abd51225eb72a411e0a150e8580df9a32c1a193d99d7b6ef51fdcc99055c22f->enter($__internal_9abd51225eb72a411e0a150e8580df9a32c1a193d99d7b6ef51fdcc99055c22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
";
        
        $__internal_9abd51225eb72a411e0a150e8580df9a32c1a193d99d7b6ef51fdcc99055c22f->leave($__internal_9abd51225eb72a411e0a150e8580df9a32c1a193d99d7b6ef51fdcc99055c22f_prof);

        
        $__internal_7deae6751afd06182f364dc49c6e1d9f13301722c62eaac9f7533e7d756c2007->leave($__internal_7deae6751afd06182f364dc49c6e1d9f13301722c62eaac9f7533e7d756c2007_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  173 => 58,  164 => 57,  128 => 28,  119 => 27,  97 => 11,  88 => 10,  70 => 6,  58 => 63,  56 => 57,  52 => 55,  50 => 27,  45 => 24,  43 => 10,  36 => 6,  29 => 1,);
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
                        <ul class=\"nav justify-content-end main_menu\">
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
                                <a class=\"nav-link badge badge-info\" id=\"logInBtn\" href=\"log-in\" style=\"color: white\">Log-In</a>
                            </li>
                            <li class=\"nav-item text-uppercase\">
                                <a class=\"nav-link badge badge-dark\" id=\"singUpBtn\" href=\"sing-up\" style=\"color: white\">Sing-Up</a>
                            </li>
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
</html>", "base.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\base.html.twig");
    }
}
