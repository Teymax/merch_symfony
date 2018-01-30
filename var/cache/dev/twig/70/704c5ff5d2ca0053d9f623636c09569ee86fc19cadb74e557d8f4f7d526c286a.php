<?php

/* masterList/masterListCreate.html.twig */
class __TwigTemplate_6e07784e1f7ed95dd6a46f6188c6cf0018a203be698a10f51c4dc5bca12f85cd extends Twig_Template
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
        $__internal_05a1190ef256303b81f7315a1fa3a1d5387b2c7ac165c2e5b5e213c91a814af2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05a1190ef256303b81f7315a1fa3a1d5387b2c7ac165c2e5b5e213c91a814af2->enter($__internal_05a1190ef256303b81f7315a1fa3a1d5387b2c7ac165c2e5b5e213c91a814af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "masterList/masterListCreate.html.twig"));

        $__internal_561b1bf1e242a019c40594f56f1ea1a2fce7677949b4f9c314d03b9cab6a80f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_561b1bf1e242a019c40594f56f1ea1a2fce7677949b4f9c314d03b9cab6a80f5->enter($__internal_561b1bf1e242a019c40594f56f1ea1a2fce7677949b4f9c314d03b9cab6a80f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "masterList/masterListCreate.html.twig"));

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
        // line 59
        echo "</div>
</body>
</html>
";
        
        $__internal_05a1190ef256303b81f7315a1fa3a1d5387b2c7ac165c2e5b5e213c91a814af2->leave($__internal_05a1190ef256303b81f7315a1fa3a1d5387b2c7ac165c2e5b5e213c91a814af2_prof);

        
        $__internal_561b1bf1e242a019c40594f56f1ea1a2fce7677949b4f9c314d03b9cab6a80f5->leave($__internal_561b1bf1e242a019c40594f56f1ea1a2fce7677949b4f9c314d03b9cab6a80f5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c5343c06c22f03e6185fe6593d81b67839698e06182bed434c928105cdd61d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c5343c06c22f03e6185fe6593d81b67839698e06182bed434c928105cdd61d9->enter($__internal_4c5343c06c22f03e6185fe6593d81b67839698e06182bed434c928105cdd61d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b83dc40a206be704dc74bae1b22803f6813737c3144fb4ddd138d4b1aee59c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b83dc40a206be704dc74bae1b22803f6813737c3144fb4ddd138d4b1aee59c07->enter($__internal_b83dc40a206be704dc74bae1b22803f6813737c3144fb4ddd138d4b1aee59c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper";
        
        $__internal_b83dc40a206be704dc74bae1b22803f6813737c3144fb4ddd138d4b1aee59c07->leave($__internal_b83dc40a206be704dc74bae1b22803f6813737c3144fb4ddd138d4b1aee59c07_prof);

        
        $__internal_4c5343c06c22f03e6185fe6593d81b67839698e06182bed434c928105cdd61d9->leave($__internal_4c5343c06c22f03e6185fe6593d81b67839698e06182bed434c928105cdd61d9_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2bd793402e9e68068dee4b508f7c4b06f079cf339d32fcbf13905cdeac3bd534 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bd793402e9e68068dee4b508f7c4b06f079cf339d32fcbf13905cdeac3bd534->enter($__internal_2bd793402e9e68068dee4b508f7c4b06f079cf339d32fcbf13905cdeac3bd534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6ba5486dba019c62cca771d8d36155ec5c548309bb316367a0aff93daf428374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba5486dba019c62cca771d8d36155ec5c548309bb316367a0aff93daf428374->enter($__internal_6ba5486dba019c62cca771d8d36155ec5c548309bb316367a0aff93daf428374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6ba5486dba019c62cca771d8d36155ec5c548309bb316367a0aff93daf428374->leave($__internal_6ba5486dba019c62cca771d8d36155ec5c548309bb316367a0aff93daf428374_prof);

        
        $__internal_2bd793402e9e68068dee4b508f7c4b06f079cf339d32fcbf13905cdeac3bd534->leave($__internal_2bd793402e9e68068dee4b508f7c4b06f079cf339d32fcbf13905cdeac3bd534_prof);

    }

    // line 26
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_0c867769c90dd01bc92434589bb1968a1a6dad21fcad514793862ba3d649381a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c867769c90dd01bc92434589bb1968a1a6dad21fcad514793862ba3d649381a->enter($__internal_0c867769c90dd01bc92434589bb1968a1a6dad21fcad514793862ba3d649381a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_f0affcb08c0577c0d23556c27d6465ebfe471d5d096b642c280c906b11de8412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0affcb08c0577c0d23556c27d6465ebfe471d5d096b642c280c906b11de8412->enter($__internal_f0affcb08c0577c0d23556c27d6465ebfe471d5d096b642c280c906b11de8412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 27
        echo "        <div class=\"p-3 mb-2 bg-success text-white container col-3\" id=\"logIn_form\" style=\"margin: 0 auto;\">
                <header>
                        <h2>Create List</h2>
                </header>

                <a class=\"nav-link badge badge-info\" id=\"singUpBtn\" onclick=\"history.back()\" href=\"#\" style=\"color: white\">Back</a>

                <div class=\"form-group\">
                    ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), 'form_start');
        echo "
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "title", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), "filename", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->getSourceContext()); })()), "userId", array()), 'row', array("attr" => array("id" => "user_ID")));
        echo "
                        <button type=\"submit\" class=\"btn btn-info\">Create!</button>
                    ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), 'form_end');
        echo "
                </div>
        </div>
</div>
";
        
        $__internal_f0affcb08c0577c0d23556c27d6465ebfe471d5d096b642c280c906b11de8412->leave($__internal_f0affcb08c0577c0d23556c27d6465ebfe471d5d096b642c280c906b11de8412_prof);

        
        $__internal_0c867769c90dd01bc92434589bb1968a1a6dad21fcad514793862ba3d649381a->leave($__internal_0c867769c90dd01bc92434589bb1968a1a6dad21fcad514793862ba3d649381a_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a125b13bcc7d6a313eabb2ce2674f91e91f2c3aed547831aefa2a8b6a0d807fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a125b13bcc7d6a313eabb2ce2674f91e91f2c3aed547831aefa2a8b6a0d807fd->enter($__internal_a125b13bcc7d6a313eabb2ce2674f91e91f2c3aed547831aefa2a8b6a0d807fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_aff511ab35fba8bf5e466892f34217fe6560449d5bcbebdbc055f94b65b996ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff511ab35fba8bf5e466892f34217fe6560449d5bcbebdbc055f94b65b996ca->enter($__internal_aff511ab35fba8bf5e466892f34217fe6560449d5bcbebdbc055f94b65b996ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "        <!-- Scripts -->
        <script src=\"assets/js/core.min.js\"></script>
        <script type=\"text/javascript\">
            ";
        // line 52
        echo "            ";
        // line 53
        echo "            document.getElementById('form_userId').value = ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 53, $this->getSourceContext()); })()), "user", array()), "user_id", array()), "html", null, true);
        echo ";
            ";
        // line 55
        echo "        </script>
        <script src=\"assets/js/app.min.js\"></script>
        <script src=\"assets/js/script.min.js\"></script>
";
        
        $__internal_aff511ab35fba8bf5e466892f34217fe6560449d5bcbebdbc055f94b65b996ca->leave($__internal_aff511ab35fba8bf5e466892f34217fe6560449d5bcbebdbc055f94b65b996ca_prof);

        
        $__internal_a125b13bcc7d6a313eabb2ce2674f91e91f2c3aed547831aefa2a8b6a0d807fd->leave($__internal_a125b13bcc7d6a313eabb2ce2674f91e91f2c3aed547831aefa2a8b6a0d807fd_prof);

    }

    public function getTemplateName()
    {
        return "masterList/masterListCreate.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  191 => 55,  186 => 53,  184 => 52,  179 => 48,  170 => 47,  155 => 40,  150 => 38,  146 => 37,  142 => 36,  138 => 35,  128 => 27,  119 => 26,  97 => 10,  88 => 9,  70 => 5,  57 => 59,  55 => 47,  51 => 45,  49 => 26,  44 => 23,  42 => 9,  35 => 5,  29 => 1,);
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

                <a class=\"nav-link badge badge-info\" id=\"singUpBtn\" onclick=\"history.back()\" href=\"#\" style=\"color: white\">Back</a>

                <div class=\"form-group\">
                    {{ form_start(form) }}
                    {{ form_row(form.title, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_row(form.filename, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_row(form.userId, { 'attr': {'id': 'user_ID'} }) }}
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
            {#\$('#user_ID').val({{ app.user.user_id }});#}
            {#alert({{ app.user.user_id }});#}
            document.getElementById('form_userId').value = {{ app.user.user_id }};
            {#document.getElementById('user_ID').value = {{ app.user.user_id }};#}
        </script>
        <script src=\"assets/js/app.min.js\"></script>
        <script src=\"assets/js/script.min.js\"></script>
{% endblock %}
</div>
</body>
</html>
", "masterList/masterListCreate.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\masterList\\masterListCreate.html.twig");
    }
}
