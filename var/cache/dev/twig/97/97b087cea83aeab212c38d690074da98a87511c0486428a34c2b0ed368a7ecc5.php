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
        $__internal_58e1c077be3edbc2f5b7651b5e779ebfc1438a24eb77aa1d56eb6bfa0423e128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58e1c077be3edbc2f5b7651b5e779ebfc1438a24eb77aa1d56eb6bfa0423e128->enter($__internal_58e1c077be3edbc2f5b7651b5e779ebfc1438a24eb77aa1d56eb6bfa0423e128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_22eb742413dbf2a95a7c4d2f337da131520cd06683bc2a063e0f926d800e519d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22eb742413dbf2a95a7c4d2f337da131520cd06683bc2a063e0f926d800e519d->enter($__internal_22eb742413dbf2a95a7c4d2f337da131520cd06683bc2a063e0f926d800e519d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_58e1c077be3edbc2f5b7651b5e779ebfc1438a24eb77aa1d56eb6bfa0423e128->leave($__internal_58e1c077be3edbc2f5b7651b5e779ebfc1438a24eb77aa1d56eb6bfa0423e128_prof);

        
        $__internal_22eb742413dbf2a95a7c4d2f337da131520cd06683bc2a063e0f926d800e519d->leave($__internal_22eb742413dbf2a95a7c4d2f337da131520cd06683bc2a063e0f926d800e519d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_63d70bc10f408fb6c077fa4810a5c151c36eb91fec9c8975cede461e606da933 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63d70bc10f408fb6c077fa4810a5c151c36eb91fec9c8975cede461e606da933->enter($__internal_63d70bc10f408fb6c077fa4810a5c151c36eb91fec9c8975cede461e606da933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_53e87b0b2775e271e75a233ca826debbd671268a406d7b32fc9071cdd28f488c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53e87b0b2775e271e75a233ca826debbd671268a406d7b32fc9071cdd28f488c->enter($__internal_53e87b0b2775e271e75a233ca826debbd671268a406d7b32fc9071cdd28f488c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper";
        
        $__internal_53e87b0b2775e271e75a233ca826debbd671268a406d7b32fc9071cdd28f488c->leave($__internal_53e87b0b2775e271e75a233ca826debbd671268a406d7b32fc9071cdd28f488c_prof);

        
        $__internal_63d70bc10f408fb6c077fa4810a5c151c36eb91fec9c8975cede461e606da933->leave($__internal_63d70bc10f408fb6c077fa4810a5c151c36eb91fec9c8975cede461e606da933_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4f8a35327610250d98ef97fe3b1ff6d8d09aaf3bda75f0784f01fbce35e71c16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f8a35327610250d98ef97fe3b1ff6d8d09aaf3bda75f0784f01fbce35e71c16->enter($__internal_4f8a35327610250d98ef97fe3b1ff6d8d09aaf3bda75f0784f01fbce35e71c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1048975ef3e2ced1a49e182cf3f5a4deccb55a9eca7d5e7ddc4a374506c4907d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1048975ef3e2ced1a49e182cf3f5a4deccb55a9eca7d5e7ddc4a374506c4907d->enter($__internal_1048975ef3e2ced1a49e182cf3f5a4deccb55a9eca7d5e7ddc4a374506c4907d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1048975ef3e2ced1a49e182cf3f5a4deccb55a9eca7d5e7ddc4a374506c4907d->leave($__internal_1048975ef3e2ced1a49e182cf3f5a4deccb55a9eca7d5e7ddc4a374506c4907d_prof);

        
        $__internal_4f8a35327610250d98ef97fe3b1ff6d8d09aaf3bda75f0784f01fbce35e71c16->leave($__internal_4f8a35327610250d98ef97fe3b1ff6d8d09aaf3bda75f0784f01fbce35e71c16_prof);

    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_9e4ce39fc6d11f57c8f8f2848284ddea6d4cd1a3551e9bcd9448437b0498286a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e4ce39fc6d11f57c8f8f2848284ddea6d4cd1a3551e9bcd9448437b0498286a->enter($__internal_9e4ce39fc6d11f57c8f8f2848284ddea6d4cd1a3551e9bcd9448437b0498286a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_42d0f08d614dc658f8cc93af16395f2d82ba87fa7fbd8d4e0bc790b4d5c5dfc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42d0f08d614dc658f8cc93af16395f2d82ba87fa7fbd8d4e0bc790b4d5c5dfc3->enter($__internal_42d0f08d614dc658f8cc93af16395f2d82ba87fa7fbd8d4e0bc790b4d5c5dfc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
                                <a class=\"nav-link badge badge-info\" id=\"logInBtn\" href=\"log-in\">Log-In</a>
                            </li>
                            <li class=\"nav-item text-uppercase\">
                                <a class=\"nav-link badge badge-dark\" id=\"singUpBtn\" href=\"sing-up\">Sing-Up</a>
                            </li>
                        </ul>
                    </div>
                </nav>
    </div>
            ";
        
        $__internal_42d0f08d614dc658f8cc93af16395f2d82ba87fa7fbd8d4e0bc790b4d5c5dfc3->leave($__internal_42d0f08d614dc658f8cc93af16395f2d82ba87fa7fbd8d4e0bc790b4d5c5dfc3_prof);

        
        $__internal_9e4ce39fc6d11f57c8f8f2848284ddea6d4cd1a3551e9bcd9448437b0498286a->leave($__internal_9e4ce39fc6d11f57c8f8f2848284ddea6d4cd1a3551e9bcd9448437b0498286a_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_084bc851ebce3dcfea53b6f7ac67d150cb814b00ce2cc3e43d8b2e60de0c4f76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_084bc851ebce3dcfea53b6f7ac67d150cb814b00ce2cc3e43d8b2e60de0c4f76->enter($__internal_084bc851ebce3dcfea53b6f7ac67d150cb814b00ce2cc3e43d8b2e60de0c4f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ee9be9de18838dee5f1cfbbba620ba5e188d5c25ef32d2b899236ce01f96cbc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee9be9de18838dee5f1cfbbba620ba5e188d5c25ef32d2b899236ce01f96cbc9->enter($__internal_ee9be9de18838dee5f1cfbbba620ba5e188d5c25ef32d2b899236ce01f96cbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
";
        
        $__internal_ee9be9de18838dee5f1cfbbba620ba5e188d5c25ef32d2b899236ce01f96cbc9->leave($__internal_ee9be9de18838dee5f1cfbbba620ba5e188d5c25ef32d2b899236ce01f96cbc9_prof);

        
        $__internal_084bc851ebce3dcfea53b6f7ac67d150cb814b00ce2cc3e43d8b2e60de0c4f76->leave($__internal_084bc851ebce3dcfea53b6f7ac67d150cb814b00ce2cc3e43d8b2e60de0c4f76_prof);

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
                                <a class=\"nav-link badge badge-info\" id=\"logInBtn\" href=\"log-in\">Log-In</a>
                            </li>
                            <li class=\"nav-item text-uppercase\">
                                <a class=\"nav-link badge badge-dark\" id=\"singUpBtn\" href=\"sing-up\">Sing-Up</a>
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
