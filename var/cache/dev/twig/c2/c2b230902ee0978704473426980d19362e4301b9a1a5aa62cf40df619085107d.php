<?php

/* registration/register.html.twig */
class __TwigTemplate_7e5512f7ee29c529149fae1d2358305b9c0660ff76e73bf26be0332f267b120d extends Twig_Template
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
        $__internal_683fd00616f333c660d05ca17dbe9840218539eef5b0f5d9239dda4cd201bd36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_683fd00616f333c660d05ca17dbe9840218539eef5b0f5d9239dda4cd201bd36->enter($__internal_683fd00616f333c660d05ca17dbe9840218539eef5b0f5d9239dda4cd201bd36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_59b17e7d2580b9a59c3132a5acbce472b17153dd57912f7de568e3a5e9e2f0f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b17e7d2580b9a59c3132a5acbce472b17153dd57912f7de568e3a5e9e2f0f9->enter($__internal_59b17e7d2580b9a59c3132a5acbce472b17153dd57912f7de568e3a5e9e2f0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "</head>
<body>
<div class=\"container-fluid\" id=\"main_container\">
    ";
        // line 26
        $this->displayBlock('navigation', $context, $blocks);
        // line 45
        echo "

";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "</div>
</body>
</html>";
        
        $__internal_683fd00616f333c660d05ca17dbe9840218539eef5b0f5d9239dda4cd201bd36->leave($__internal_683fd00616f333c660d05ca17dbe9840218539eef5b0f5d9239dda4cd201bd36_prof);

        
        $__internal_59b17e7d2580b9a59c3132a5acbce472b17153dd57912f7de568e3a5e9e2f0f9->leave($__internal_59b17e7d2580b9a59c3132a5acbce472b17153dd57912f7de568e3a5e9e2f0f9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ad7e2e14239bbd2099498545ec34b3369d323b556b1624d71fbebfc4ca2093b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ad7e2e14239bbd2099498545ec34b3369d323b556b1624d71fbebfc4ca2093b->enter($__internal_5ad7e2e14239bbd2099498545ec34b3369d323b556b1624d71fbebfc4ca2093b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5f73d849dfcdc570d89485cef90beaed375aebe04a9fc8dca89c3d46000aeeef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f73d849dfcdc570d89485cef90beaed375aebe04a9fc8dca89c3d46000aeeef->enter($__internal_5f73d849dfcdc570d89485cef90beaed375aebe04a9fc8dca89c3d46000aeeef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper";
        
        $__internal_5f73d849dfcdc570d89485cef90beaed375aebe04a9fc8dca89c3d46000aeeef->leave($__internal_5f73d849dfcdc570d89485cef90beaed375aebe04a9fc8dca89c3d46000aeeef_prof);

        
        $__internal_5ad7e2e14239bbd2099498545ec34b3369d323b556b1624d71fbebfc4ca2093b->leave($__internal_5ad7e2e14239bbd2099498545ec34b3369d323b556b1624d71fbebfc4ca2093b_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a27011ce5523e4db1104b3afb6039b58fd4e17935e0993881c0386de96b1df94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a27011ce5523e4db1104b3afb6039b58fd4e17935e0993881c0386de96b1df94->enter($__internal_a27011ce5523e4db1104b3afb6039b58fd4e17935e0993881c0386de96b1df94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_195af55d8ce24d2052c35a9c6b40382d1341b4752c5558dda078d1677e102c52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_195af55d8ce24d2052c35a9c6b40382d1341b4752c5558dda078d1677e102c52->enter($__internal_195af55d8ce24d2052c35a9c6b40382d1341b4752c5558dda078d1677e102c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
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
        
        $__internal_195af55d8ce24d2052c35a9c6b40382d1341b4752c5558dda078d1677e102c52->leave($__internal_195af55d8ce24d2052c35a9c6b40382d1341b4752c5558dda078d1677e102c52_prof);

        
        $__internal_a27011ce5523e4db1104b3afb6039b58fd4e17935e0993881c0386de96b1df94->leave($__internal_a27011ce5523e4db1104b3afb6039b58fd4e17935e0993881c0386de96b1df94_prof);

    }

    // line 26
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_01ad6e559f876927c6f29a7f0203e0e2179f2056dd81eb88d82d5dd2fd62e29f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01ad6e559f876927c6f29a7f0203e0e2179f2056dd81eb88d82d5dd2fd62e29f->enter($__internal_01ad6e559f876927c6f29a7f0203e0e2179f2056dd81eb88d82d5dd2fd62e29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_ae11676980ee2e8bf498116a7bff849ad7b92eba94433891cea508e09293c9b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae11676980ee2e8bf498116a7bff849ad7b92eba94433891cea508e09293c9b1->enter($__internal_ae11676980ee2e8bf498116a7bff849ad7b92eba94433891cea508e09293c9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 27
        echo "    <div class=\"p-3 mb-2 bg-success text-white container col-3\" id=\"logIn_form\" style=\"margin: 0 auto;\">
        <header>
            <h2>Register</h2>
        </header>
        <div class=\"form-group\">
            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), 'form_start');
        echo "
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), "username", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), "plainPassword", array()), "first", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "plainPassword", array()), "second", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), "regDate", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

            <button type=\"submit\" class=\"btn btn-info\">Register!</button>
            ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), 'form_end');
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_ae11676980ee2e8bf498116a7bff849ad7b92eba94433891cea508e09293c9b1->leave($__internal_ae11676980ee2e8bf498116a7bff849ad7b92eba94433891cea508e09293c9b1_prof);

        
        $__internal_01ad6e559f876927c6f29a7f0203e0e2179f2056dd81eb88d82d5dd2fd62e29f->leave($__internal_01ad6e559f876927c6f29a7f0203e0e2179f2056dd81eb88d82d5dd2fd62e29f_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_02cc419d320b9deee3442e681de1766f23fddc2d9a44f2ea357104e938f293e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02cc419d320b9deee3442e681de1766f23fddc2d9a44f2ea357104e938f293e0->enter($__internal_02cc419d320b9deee3442e681de1766f23fddc2d9a44f2ea357104e938f293e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f657e967180be88d06058ff94bde190d85de26f7ece1690f39b39b4a6080a2af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f657e967180be88d06058ff94bde190d85de26f7ece1690f39b39b4a6080a2af->enter($__internal_f657e967180be88d06058ff94bde190d85de26f7ece1690f39b39b4a6080a2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
";
        
        $__internal_f657e967180be88d06058ff94bde190d85de26f7ece1690f39b39b4a6080a2af->leave($__internal_f657e967180be88d06058ff94bde190d85de26f7ece1690f39b39b4a6080a2af_prof);

        
        $__internal_02cc419d320b9deee3442e681de1766f23fddc2d9a44f2ea357104e938f293e0->leave($__internal_02cc419d320b9deee3442e681de1766f23fddc2d9a44f2ea357104e938f293e0_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  184 => 48,  175 => 47,  160 => 40,  154 => 37,  150 => 36,  146 => 35,  142 => 34,  138 => 33,  134 => 32,  127 => 27,  118 => 26,  96 => 10,  87 => 9,  69 => 5,  57 => 53,  55 => 47,  51 => 45,  49 => 26,  44 => 23,  42 => 9,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
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
            <h2>Register</h2>
        </header>
        <div class=\"form-group\">
            {{ form_start(form) }}
            {{ form_row(form.username, { 'attr': {'class': 'form-control'} }) }}
            {{ form_row(form.email, { 'attr': {'class': 'form-control'} }) }}
            {{ form_row(form.plainPassword.first, { 'attr': {'class': 'form-control'} }) }}
            {{ form_row(form.plainPassword.second, { 'attr': {'class': 'form-control'} }) }}
            {{ form_row(form.regDate, { 'attr': {'class': 'form-control'} }) }}

            <button type=\"submit\" class=\"btn btn-info\">Register!</button>
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
</html>", "registration/register.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\registration\\register.html.twig");
    }
}
