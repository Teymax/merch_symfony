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
        $__internal_a19f153fc6571b78bfff00dba50e6f6c19d009eb418a474defdb239a55ceac49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a19f153fc6571b78bfff00dba50e6f6c19d009eb418a474defdb239a55ceac49->enter($__internal_a19f153fc6571b78bfff00dba50e6f6c19d009eb418a474defdb239a55ceac49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "masterList/masterListCreate.html.twig"));

        $__internal_2df7fb11d674c84938344050f6bc53e79d7df78ce28573908dbbc8d24853033b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2df7fb11d674c84938344050f6bc53e79d7df78ce28573908dbbc8d24853033b->enter($__internal_2df7fb11d674c84938344050f6bc53e79d7df78ce28573908dbbc8d24853033b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "masterList/masterListCreate.html.twig"));

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
        // line 42
        echo "

";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "</div>
</body>
</html>
";
        
        $__internal_a19f153fc6571b78bfff00dba50e6f6c19d009eb418a474defdb239a55ceac49->leave($__internal_a19f153fc6571b78bfff00dba50e6f6c19d009eb418a474defdb239a55ceac49_prof);

        
        $__internal_2df7fb11d674c84938344050f6bc53e79d7df78ce28573908dbbc8d24853033b->leave($__internal_2df7fb11d674c84938344050f6bc53e79d7df78ce28573908dbbc8d24853033b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_330ec0fbea636c3bd5a4da7a46ab3ef0c3b526b6a535c3a4d076172759e19b46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_330ec0fbea636c3bd5a4da7a46ab3ef0c3b526b6a535c3a4d076172759e19b46->enter($__internal_330ec0fbea636c3bd5a4da7a46ab3ef0c3b526b6a535c3a4d076172759e19b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2979a8073781503a39d082720d33d707001cbcf8d4346a460ad37e7167cc88e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2979a8073781503a39d082720d33d707001cbcf8d4346a460ad37e7167cc88e4->enter($__internal_2979a8073781503a39d082720d33d707001cbcf8d4346a460ad37e7167cc88e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper";
        
        $__internal_2979a8073781503a39d082720d33d707001cbcf8d4346a460ad37e7167cc88e4->leave($__internal_2979a8073781503a39d082720d33d707001cbcf8d4346a460ad37e7167cc88e4_prof);

        
        $__internal_330ec0fbea636c3bd5a4da7a46ab3ef0c3b526b6a535c3a4d076172759e19b46->leave($__internal_330ec0fbea636c3bd5a4da7a46ab3ef0c3b526b6a535c3a4d076172759e19b46_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_87723624ff772dd6bbd344cd07acbac99a22e304e3d6554c682a6a7de14553f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87723624ff772dd6bbd344cd07acbac99a22e304e3d6554c682a6a7de14553f5->enter($__internal_87723624ff772dd6bbd344cd07acbac99a22e304e3d6554c682a6a7de14553f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_98af5b4ceca8e3b95c006f7087e78bbf3fc75f6a80ff080017924e71d27385e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98af5b4ceca8e3b95c006f7087e78bbf3fc75f6a80ff080017924e71d27385e6->enter($__internal_98af5b4ceca8e3b95c006f7087e78bbf3fc75f6a80ff080017924e71d27385e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_98af5b4ceca8e3b95c006f7087e78bbf3fc75f6a80ff080017924e71d27385e6->leave($__internal_98af5b4ceca8e3b95c006f7087e78bbf3fc75f6a80ff080017924e71d27385e6_prof);

        
        $__internal_87723624ff772dd6bbd344cd07acbac99a22e304e3d6554c682a6a7de14553f5->leave($__internal_87723624ff772dd6bbd344cd07acbac99a22e304e3d6554c682a6a7de14553f5_prof);

    }

    // line 26
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_4e288813623fd13e40bf13604326cebce6117ed40996a9b0fb7248690e988c76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e288813623fd13e40bf13604326cebce6117ed40996a9b0fb7248690e988c76->enter($__internal_4e288813623fd13e40bf13604326cebce6117ed40996a9b0fb7248690e988c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_5c3a94a927136dabce55d46d27a571a3db4fe909c635be6b239772db81af8382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c3a94a927136dabce55d46d27a571a3db4fe909c635be6b239772db81af8382->enter($__internal_5c3a94a927136dabce55d46d27a571a3db4fe909c635be6b239772db81af8382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), "title", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "filename", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), "userId", array()), 'row', array("attr" => array("id" => "user_ID")));
        echo "
                        <button type=\"submit\" class=\"btn btn-info\">Create!</button>
                    ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'form_end');
        echo "
                </div>
        </div>
</div>
";
        
        $__internal_5c3a94a927136dabce55d46d27a571a3db4fe909c635be6b239772db81af8382->leave($__internal_5c3a94a927136dabce55d46d27a571a3db4fe909c635be6b239772db81af8382_prof);

        
        $__internal_4e288813623fd13e40bf13604326cebce6117ed40996a9b0fb7248690e988c76->leave($__internal_4e288813623fd13e40bf13604326cebce6117ed40996a9b0fb7248690e988c76_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3aebce357762fc70d32322265f7f8fec06f6f0f65e18e4d9b2c3880b4e3278ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aebce357762fc70d32322265f7f8fec06f6f0f65e18e4d9b2c3880b4e3278ea->enter($__internal_3aebce357762fc70d32322265f7f8fec06f6f0f65e18e4d9b2c3880b4e3278ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c52e4b803525239435ef9f2e22c4505e5be08b571aa3c513fa98ee75a473fe5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c52e4b803525239435ef9f2e22c4505e5be08b571aa3c513fa98ee75a473fe5a->enter($__internal_c52e4b803525239435ef9f2e22c4505e5be08b571aa3c513fa98ee75a473fe5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "        <!-- Scripts -->
        <script src=\"assets/js/core.min.js\"></script>
        <script type=\"text/javascript\">
            ";
        // line 49
        echo "            ";
        // line 50
        echo "            document.getElementById('form_userId').value = ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 50, $this->getSourceContext()); })()), "user", array()), "user_id", array()), "html", null, true);
        echo ";
            ";
        // line 52
        echo "        </script>
        <script src=\"assets/js/app.min.js\"></script>
        <script src=\"assets/js/script.min.js\"></script>
";
        
        $__internal_c52e4b803525239435ef9f2e22c4505e5be08b571aa3c513fa98ee75a473fe5a->leave($__internal_c52e4b803525239435ef9f2e22c4505e5be08b571aa3c513fa98ee75a473fe5a_prof);

        
        $__internal_3aebce357762fc70d32322265f7f8fec06f6f0f65e18e4d9b2c3880b4e3278ea->leave($__internal_3aebce357762fc70d32322265f7f8fec06f6f0f65e18e4d9b2c3880b4e3278ea_prof);

    }

    public function getTemplateName()
    {
        return "masterList/masterListCreate.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  188 => 52,  183 => 50,  181 => 49,  176 => 45,  167 => 44,  152 => 37,  147 => 35,  143 => 34,  139 => 33,  135 => 32,  128 => 27,  119 => 26,  97 => 10,  88 => 9,  70 => 5,  57 => 56,  55 => 44,  51 => 42,  49 => 26,  44 => 23,  42 => 9,  35 => 5,  29 => 1,);
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
