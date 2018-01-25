<?php

/* list/listCreate.html.twig */
class __TwigTemplate_e6f9b17383f23d8975a4ec4c137dd758cd619fc8a739d69a3afcadf453e4fae2 extends Twig_Template
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
        $__internal_7bbcae5083d9bdf825ffc3e94ea9180a7fe3a8acbbe37b173f9209decbd611d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bbcae5083d9bdf825ffc3e94ea9180a7fe3a8acbbe37b173f9209decbd611d2->enter($__internal_7bbcae5083d9bdf825ffc3e94ea9180a7fe3a8acbbe37b173f9209decbd611d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/listCreate.html.twig"));

        $__internal_1fb84598405cd48ddc695ea40e1acf3a381c8c29fb45fcbefe28b0c141b50b97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb84598405cd48ddc695ea40e1acf3a381c8c29fb45fcbefe28b0c141b50b97->enter($__internal_1fb84598405cd48ddc695ea40e1acf3a381c8c29fb45fcbefe28b0c141b50b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/listCreate.html.twig"));

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
        // line 50
        echo "

";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "</div>
</body>
</html>
";
        
        $__internal_7bbcae5083d9bdf825ffc3e94ea9180a7fe3a8acbbe37b173f9209decbd611d2->leave($__internal_7bbcae5083d9bdf825ffc3e94ea9180a7fe3a8acbbe37b173f9209decbd611d2_prof);

        
        $__internal_1fb84598405cd48ddc695ea40e1acf3a381c8c29fb45fcbefe28b0c141b50b97->leave($__internal_1fb84598405cd48ddc695ea40e1acf3a381c8c29fb45fcbefe28b0c141b50b97_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9896964fbcb84d2a3a926e550cfa5f216bf614f52896ee4f9a0796be2fd4e8dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9896964fbcb84d2a3a926e550cfa5f216bf614f52896ee4f9a0796be2fd4e8dc->enter($__internal_9896964fbcb84d2a3a926e550cfa5f216bf614f52896ee4f9a0796be2fd4e8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_613527f09cf39e4499ff4fb8852fb9985924d78f5253a5560c032884d1ee0ba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_613527f09cf39e4499ff4fb8852fb9985924d78f5253a5560c032884d1ee0ba9->enter($__internal_613527f09cf39e4499ff4fb8852fb9985924d78f5253a5560c032884d1ee0ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper";
        
        $__internal_613527f09cf39e4499ff4fb8852fb9985924d78f5253a5560c032884d1ee0ba9->leave($__internal_613527f09cf39e4499ff4fb8852fb9985924d78f5253a5560c032884d1ee0ba9_prof);

        
        $__internal_9896964fbcb84d2a3a926e550cfa5f216bf614f52896ee4f9a0796be2fd4e8dc->leave($__internal_9896964fbcb84d2a3a926e550cfa5f216bf614f52896ee4f9a0796be2fd4e8dc_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3249d79162a27044dde53194675daf6296934533fa0b66be5752f39e7637dc49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3249d79162a27044dde53194675daf6296934533fa0b66be5752f39e7637dc49->enter($__internal_3249d79162a27044dde53194675daf6296934533fa0b66be5752f39e7637dc49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_467477486b2524b4b7c7efde50565925f3a75b349608afedc80705472c709de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_467477486b2524b4b7c7efde50565925f3a75b349608afedc80705472c709de9->enter($__internal_467477486b2524b4b7c7efde50565925f3a75b349608afedc80705472c709de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <!-- Fonts -->
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
        
        $__internal_467477486b2524b4b7c7efde50565925f3a75b349608afedc80705472c709de9->leave($__internal_467477486b2524b4b7c7efde50565925f3a75b349608afedc80705472c709de9_prof);

        
        $__internal_3249d79162a27044dde53194675daf6296934533fa0b66be5752f39e7637dc49->leave($__internal_3249d79162a27044dde53194675daf6296934533fa0b66be5752f39e7637dc49_prof);

    }

    // line 26
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_13aacbf432624ecbf0c5eeedb81386f1f1f2a5d84e46111a3a624287244439cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13aacbf432624ecbf0c5eeedb81386f1f1f2a5d84e46111a3a624287244439cc->enter($__internal_13aacbf432624ecbf0c5eeedb81386f1f1f2a5d84e46111a3a624287244439cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_be8348188d05416f1f32e372106eb1a83c1f9980fd83fed56bf5e981b7808f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be8348188d05416f1f32e372106eb1a83c1f9980fd83fed56bf5e981b7808f53->enter($__internal_be8348188d05416f1f32e372106eb1a83c1f9980fd83fed56bf5e981b7808f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 27
        echo "        <div class=\"p-3 mb-2 bg-success text-white container col-3\" id=\"logIn_form\" style=\"margin: 0 auto;\">
                <header>
                        <h2>Create List</h2>
                </header>
                <div class=\"form-group\">
                    ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), 'form_start');
        echo "
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), "type", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "fit", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), "color", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "cost", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), "brand", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->getSourceContext()); })()), "title", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), "bulletOne", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), "bulletTwo", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->getSourceContext()); })()), "description", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), "userId", array()), 'row', array("attr" => array("id" => "user_ID")));
        echo "
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), "master_id", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        <button type=\"submit\" class=\"btn btn-info\">Create!</button>
                    ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->getSourceContext()); })()), 'form_end');
        echo "
                </div>
        </div>
</div>
";
        
        $__internal_be8348188d05416f1f32e372106eb1a83c1f9980fd83fed56bf5e981b7808f53->leave($__internal_be8348188d05416f1f32e372106eb1a83c1f9980fd83fed56bf5e981b7808f53_prof);

        
        $__internal_13aacbf432624ecbf0c5eeedb81386f1f1f2a5d84e46111a3a624287244439cc->leave($__internal_13aacbf432624ecbf0c5eeedb81386f1f1f2a5d84e46111a3a624287244439cc_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a8cb6010109d3181ba3ab1a3526f66481fe63a5ea5c7420a9f51112b636db1c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8cb6010109d3181ba3ab1a3526f66481fe63a5ea5c7420a9f51112b636db1c3->enter($__internal_a8cb6010109d3181ba3ab1a3526f66481fe63a5ea5c7420a9f51112b636db1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e8015d26504a327657a334221ec164e4078c9c46892c13543362a634eceace30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8015d26504a327657a334221ec164e4078c9c46892c13543362a634eceace30->enter($__internal_e8015d26504a327657a334221ec164e4078c9c46892c13543362a634eceace30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "        <!-- Scripts -->
        <script src=\"assets/js/core.min.js\"></script>
        <script type=\"text/javascript\">
            ";
        // line 57
        echo "            ";
        // line 58
        echo "        </script>
        <script src=\"assets/js/app.min.js\"></script>
        <script src=\"assets/js/script.min.js\"></script>
";
        
        $__internal_e8015d26504a327657a334221ec164e4078c9c46892c13543362a634eceace30->leave($__internal_e8015d26504a327657a334221ec164e4078c9c46892c13543362a634eceace30_prof);

        
        $__internal_a8cb6010109d3181ba3ab1a3526f66481fe63a5ea5c7420a9f51112b636db1c3->leave($__internal_a8cb6010109d3181ba3ab1a3526f66481fe63a5ea5c7420a9f51112b636db1c3_prof);

    }

    public function getTemplateName()
    {
        return "list/listCreate.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  215 => 58,  213 => 57,  208 => 53,  199 => 52,  184 => 45,  179 => 43,  175 => 42,  171 => 41,  167 => 40,  163 => 39,  159 => 38,  155 => 37,  151 => 36,  147 => 35,  143 => 34,  139 => 33,  135 => 32,  128 => 27,  119 => 26,  97 => 10,  88 => 9,  70 => 5,  57 => 62,  55 => 52,  51 => 50,  49 => 26,  44 => 23,  42 => 9,  35 => 5,  29 => 1,);
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
                        <h2>Create List</h2>
                </header>
                <div class=\"form-group\">
                    {{ form_start(form) }}
                    {{ form_row(form.type, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_row(form.fit, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_row(form.color, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_row(form.cost, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_row(form.brand, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_row(form.title, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_row(form.bulletOne, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_row(form.bulletTwo, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_row(form.description, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_row(form.userId, { 'attr': {'id': 'user_ID'} }) }}
                    {{ form_row(form.master_id, { 'attr': {'class': 'form-control'} }) }}
                        <button type=\"submit\" class=\"btn btn-info\">Create!</button>
                    {{ form_end(form) }}
                </div>
        </div>
</div>
{% endblock %}


{% block javascripts %}
        <!-- Scripts -->
        <script src=\"assets/js/core.min.js\"></script>
        <script type=\"text/javascript\">
            {#document.getElementById('form_userId').value = {{ app.user.user_id }};#}
            {#document.getElementById('form_master_id').value = {{ app.user.user_id }};#}
        </script>
        <script src=\"assets/js/app.min.js\"></script>
        <script src=\"assets/js/script.min.js\"></script>
{% endblock %}
</div>
</body>
</html>
", "list/listCreate.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\list\\listCreate.html.twig");
    }
}
