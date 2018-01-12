<?php

/* default/login.html.twig */
class __TwigTemplate_bab45728ef6cf4f9e7abc88f125c05ea643b4e2d88e79243ee2eaf527318adca extends Twig_Template
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
        $__internal_1134d892eb607a6541e640639dfdf21221d2e1b01646aa961b9bbabb98216666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1134d892eb607a6541e640639dfdf21221d2e1b01646aa961b9bbabb98216666->enter($__internal_1134d892eb607a6541e640639dfdf21221d2e1b01646aa961b9bbabb98216666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $__internal_f84880629b14fa512daf38a8364ba2de6a786a0da35f40f4c498ebe27c51ea44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84880629b14fa512daf38a8364ba2de6a786a0da35f40f4c498ebe27c51ea44->enter($__internal_f84880629b14fa512daf38a8364ba2de6a786a0da35f40f4c498ebe27c51ea44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        // line 1
        echo "
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
        // line 40
        echo "

";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "</div>
</body>
</html>";
        
        $__internal_1134d892eb607a6541e640639dfdf21221d2e1b01646aa961b9bbabb98216666->leave($__internal_1134d892eb607a6541e640639dfdf21221d2e1b01646aa961b9bbabb98216666_prof);

        
        $__internal_f84880629b14fa512daf38a8364ba2de6a786a0da35f40f4c498ebe27c51ea44->leave($__internal_f84880629b14fa512daf38a8364ba2de6a786a0da35f40f4c498ebe27c51ea44_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3effe55d218bcee0546270ceee48173bbdb0f237f32c01d6cf1914df986c8267 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3effe55d218bcee0546270ceee48173bbdb0f237f32c01d6cf1914df986c8267->enter($__internal_3effe55d218bcee0546270ceee48173bbdb0f237f32c01d6cf1914df986c8267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8fd2ef93b3199ee7acb5d6daba2748ea91012666175822e8bee3112145e955f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fd2ef93b3199ee7acb5d6daba2748ea91012666175822e8bee3112145e955f8->enter($__internal_8fd2ef93b3199ee7acb5d6daba2748ea91012666175822e8bee3112145e955f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper";
        
        $__internal_8fd2ef93b3199ee7acb5d6daba2748ea91012666175822e8bee3112145e955f8->leave($__internal_8fd2ef93b3199ee7acb5d6daba2748ea91012666175822e8bee3112145e955f8_prof);

        
        $__internal_3effe55d218bcee0546270ceee48173bbdb0f237f32c01d6cf1914df986c8267->leave($__internal_3effe55d218bcee0546270ceee48173bbdb0f237f32c01d6cf1914df986c8267_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_174404456aa8cf035b45fd18ce47029ac9d86544c4983c4ca9871f747d929d9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_174404456aa8cf035b45fd18ce47029ac9d86544c4983c4ca9871f747d929d9b->enter($__internal_174404456aa8cf035b45fd18ce47029ac9d86544c4983c4ca9871f747d929d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_695c72cf4fee4ef5158b1d1521fd3060570bed904a11cae26eec11fb3bc2960c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_695c72cf4fee4ef5158b1d1521fd3060570bed904a11cae26eec11fb3bc2960c->enter($__internal_695c72cf4fee4ef5158b1d1521fd3060570bed904a11cae26eec11fb3bc2960c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_695c72cf4fee4ef5158b1d1521fd3060570bed904a11cae26eec11fb3bc2960c->leave($__internal_695c72cf4fee4ef5158b1d1521fd3060570bed904a11cae26eec11fb3bc2960c_prof);

        
        $__internal_174404456aa8cf035b45fd18ce47029ac9d86544c4983c4ca9871f747d929d9b->leave($__internal_174404456aa8cf035b45fd18ce47029ac9d86544c4983c4ca9871f747d929d9b_prof);

    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_613b4f80f568e378b8c0932447bfea7a385bf37f20bc42e24f943926c12bb3f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_613b4f80f568e378b8c0932447bfea7a385bf37f20bc42e24f943926c12bb3f5->enter($__internal_613b4f80f568e378b8c0932447bfea7a385bf37f20bc42e24f943926c12bb3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_ffebabdb1b0c6cd13d5a393053e24c8cc71a4644c45a6322ff08dad8bcc0ca15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffebabdb1b0c6cd13d5a393053e24c8cc71a4644c45a6322ff08dad8bcc0ca15->enter($__internal_ffebabdb1b0c6cd13d5a393053e24c8cc71a4644c45a6322ff08dad8bcc0ca15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 28
        echo "    <div class=\"p-3 mb-2 bg-success text-white container col-3\" id=\"logIn_form\" style=\"margin: 0 auto;\">
        <header>
            <h2>Login</h2>
        </header>
            <div class=\"form-group\">
                ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), 'form_start');
        echo "
                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'widget');
        echo "
                ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), 'form_end');
        echo "
            </div>
    </div>
</div>
";
        
        $__internal_ffebabdb1b0c6cd13d5a393053e24c8cc71a4644c45a6322ff08dad8bcc0ca15->leave($__internal_ffebabdb1b0c6cd13d5a393053e24c8cc71a4644c45a6322ff08dad8bcc0ca15_prof);

        
        $__internal_613b4f80f568e378b8c0932447bfea7a385bf37f20bc42e24f943926c12bb3f5->leave($__internal_613b4f80f568e378b8c0932447bfea7a385bf37f20bc42e24f943926c12bb3f5_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_83e4c72bae469ed6bec6c9dd4b8287333317932ed448efb60328607cdff88a63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83e4c72bae469ed6bec6c9dd4b8287333317932ed448efb60328607cdff88a63->enter($__internal_83e4c72bae469ed6bec6c9dd4b8287333317932ed448efb60328607cdff88a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1e9e4e4cda30a8bf161eb95a10b370258cb1ef0e1be3f479aecb8b5618abcc85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e9e4e4cda30a8bf161eb95a10b370258cb1ef0e1be3f479aecb8b5618abcc85->enter($__internal_1e9e4e4cda30a8bf161eb95a10b370258cb1ef0e1be3f479aecb8b5618abcc85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
";
        
        $__internal_1e9e4e4cda30a8bf161eb95a10b370258cb1ef0e1be3f479aecb8b5618abcc85->leave($__internal_1e9e4e4cda30a8bf161eb95a10b370258cb1ef0e1be3f479aecb8b5618abcc85_prof);

        
        $__internal_83e4c72bae469ed6bec6c9dd4b8287333317932ed448efb60328607cdff88a63->leave($__internal_83e4c72bae469ed6bec6c9dd4b8287333317932ed448efb60328607cdff88a63_prof);

    }

    public function getTemplateName()
    {
        return "default/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  167 => 43,  158 => 42,  143 => 35,  139 => 34,  135 => 33,  128 => 28,  119 => 27,  97 => 11,  88 => 10,  70 => 6,  58 => 48,  56 => 42,  52 => 40,  50 => 27,  45 => 24,  43 => 10,  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
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
    <div class=\"p-3 mb-2 bg-success text-white container col-3\" id=\"logIn_form\" style=\"margin: 0 auto;\">
        <header>
            <h2>Login</h2>
        </header>
            <div class=\"form-group\">
                {{ form_start(form) }}
                {{ form_widget(form) }}
                {{ form_end(form) }}
            </div>
    </div>
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
</html>", "default/login.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\default\\login.html.twig");
    }
}
