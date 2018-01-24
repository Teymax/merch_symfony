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
        $__internal_a1d2adb3b335befc72506814b44a303419250fcdddc82b610c1713cd00f69617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1d2adb3b335befc72506814b44a303419250fcdddc82b610c1713cd00f69617->enter($__internal_a1d2adb3b335befc72506814b44a303419250fcdddc82b610c1713cd00f69617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/listCreate.html.twig"));

        $__internal_476f1857a0657eb92f2eb0cc0d1db5ef3783ae4629b07897f20d87dd47ae5c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_476f1857a0657eb92f2eb0cc0d1db5ef3783ae4629b07897f20d87dd47ae5c4c->enter($__internal_476f1857a0657eb92f2eb0cc0d1db5ef3783ae4629b07897f20d87dd47ae5c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/listCreate.html.twig"));

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
        // line 65
        echo "</div>
</body>
</html>
";
        
        $__internal_a1d2adb3b335befc72506814b44a303419250fcdddc82b610c1713cd00f69617->leave($__internal_a1d2adb3b335befc72506814b44a303419250fcdddc82b610c1713cd00f69617_prof);

        
        $__internal_476f1857a0657eb92f2eb0cc0d1db5ef3783ae4629b07897f20d87dd47ae5c4c->leave($__internal_476f1857a0657eb92f2eb0cc0d1db5ef3783ae4629b07897f20d87dd47ae5c4c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1df8493814caea72e7dbcc9c341d3108722cc8ad7cfeba9ff32c08bdbc1d7314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1df8493814caea72e7dbcc9c341d3108722cc8ad7cfeba9ff32c08bdbc1d7314->enter($__internal_1df8493814caea72e7dbcc9c341d3108722cc8ad7cfeba9ff32c08bdbc1d7314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f37bd8669888555b03a2862383d9bc41862440e18ab8789a851f07bb527b0329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f37bd8669888555b03a2862383d9bc41862440e18ab8789a851f07bb527b0329->enter($__internal_f37bd8669888555b03a2862383d9bc41862440e18ab8789a851f07bb527b0329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper";
        
        $__internal_f37bd8669888555b03a2862383d9bc41862440e18ab8789a851f07bb527b0329->leave($__internal_f37bd8669888555b03a2862383d9bc41862440e18ab8789a851f07bb527b0329_prof);

        
        $__internal_1df8493814caea72e7dbcc9c341d3108722cc8ad7cfeba9ff32c08bdbc1d7314->leave($__internal_1df8493814caea72e7dbcc9c341d3108722cc8ad7cfeba9ff32c08bdbc1d7314_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d53b053b81e88c5b30189bf1d4a9b3387a3dfa669f8cb3ef7dee04e9a4039a59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d53b053b81e88c5b30189bf1d4a9b3387a3dfa669f8cb3ef7dee04e9a4039a59->enter($__internal_d53b053b81e88c5b30189bf1d4a9b3387a3dfa669f8cb3ef7dee04e9a4039a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_22bbf90a6e3ae8e5578954c7a1fa670cc3eead0157b7bb079153621131046629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22bbf90a6e3ae8e5578954c7a1fa670cc3eead0157b7bb079153621131046629->enter($__internal_22bbf90a6e3ae8e5578954c7a1fa670cc3eead0157b7bb079153621131046629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_22bbf90a6e3ae8e5578954c7a1fa670cc3eead0157b7bb079153621131046629->leave($__internal_22bbf90a6e3ae8e5578954c7a1fa670cc3eead0157b7bb079153621131046629_prof);

        
        $__internal_d53b053b81e88c5b30189bf1d4a9b3387a3dfa669f8cb3ef7dee04e9a4039a59->leave($__internal_d53b053b81e88c5b30189bf1d4a9b3387a3dfa669f8cb3ef7dee04e9a4039a59_prof);

    }

    // line 26
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_649d7b6e6e9ceaaafa2d1d5f12473da1c5d71be6dd314501230b651b0aa70e3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_649d7b6e6e9ceaaafa2d1d5f12473da1c5d71be6dd314501230b651b0aa70e3b->enter($__internal_649d7b6e6e9ceaaafa2d1d5f12473da1c5d71be6dd314501230b651b0aa70e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_26879a6dcc9676d5e40e2f71249b4ab2e980bfa734dc59f2666e34d609a2bf04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26879a6dcc9676d5e40e2f71249b4ab2e980bfa734dc59f2666e34d609a2bf04->enter($__internal_26879a6dcc9676d5e40e2f71249b4ab2e980bfa734dc59f2666e34d609a2bf04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_26879a6dcc9676d5e40e2f71249b4ab2e980bfa734dc59f2666e34d609a2bf04->leave($__internal_26879a6dcc9676d5e40e2f71249b4ab2e980bfa734dc59f2666e34d609a2bf04_prof);

        
        $__internal_649d7b6e6e9ceaaafa2d1d5f12473da1c5d71be6dd314501230b651b0aa70e3b->leave($__internal_649d7b6e6e9ceaaafa2d1d5f12473da1c5d71be6dd314501230b651b0aa70e3b_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_53e88b02b5ebedcb4655ad3101caa17b84682bd211f8f786c2a31c03b9f9b66f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53e88b02b5ebedcb4655ad3101caa17b84682bd211f8f786c2a31c03b9f9b66f->enter($__internal_53e88b02b5ebedcb4655ad3101caa17b84682bd211f8f786c2a31c03b9f9b66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cdf0152a501ebcc57e2f38fcfd060bb7ca3df499294ee60e0309e77a3a10f41a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf0152a501ebcc57e2f38fcfd060bb7ca3df499294ee60e0309e77a3a10f41a->enter($__internal_cdf0152a501ebcc57e2f38fcfd060bb7ca3df499294ee60e0309e77a3a10f41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "        <!-- Scripts -->
        <script src=\"assets/js/core.min.js\"></script>
        <script type=\"text/javascript\">
            ";
        // line 57
        echo "            ";
        // line 58
        echo "            document.getElementById('form_userId').value = ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 58, $this->getSourceContext()); })()), "user", array()), "user_id", array()), "html", null, true);
        echo ";
            document.getElementById('form_master_id').value = ";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 59, $this->getSourceContext()); })()), "user", array()), "user_id", array()), "html", null, true);
        echo ";
            ";
        // line 61
        echo "        </script>
        <script src=\"assets/js/app.min.js\"></script>
        <script src=\"assets/js/script.min.js\"></script>
";
        
        $__internal_cdf0152a501ebcc57e2f38fcfd060bb7ca3df499294ee60e0309e77a3a10f41a->leave($__internal_cdf0152a501ebcc57e2f38fcfd060bb7ca3df499294ee60e0309e77a3a10f41a_prof);

        
        $__internal_53e88b02b5ebedcb4655ad3101caa17b84682bd211f8f786c2a31c03b9f9b66f->leave($__internal_53e88b02b5ebedcb4655ad3101caa17b84682bd211f8f786c2a31c03b9f9b66f_prof);

    }

    public function getTemplateName()
    {
        return "list/listCreate.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  224 => 61,  220 => 59,  215 => 58,  213 => 57,  208 => 53,  199 => 52,  184 => 45,  179 => 43,  175 => 42,  171 => 41,  167 => 40,  163 => 39,  159 => 38,  155 => 37,  151 => 36,  147 => 35,  143 => 34,  139 => 33,  135 => 32,  128 => 27,  119 => 26,  97 => 10,  88 => 9,  70 => 5,  57 => 65,  55 => 52,  51 => 50,  49 => 26,  44 => 23,  42 => 9,  35 => 5,  29 => 1,);
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
            {#\$('#user_ID').val({{ app.user.user_id }});#}
            {#alert({{ app.user.user_id }});#}
            document.getElementById('form_userId').value = {{ app.user.user_id }};
            document.getElementById('form_master_id').value = {{ app.user.user_id }};
            {#document.getElementById('user_ID').value = {{ app.user.user_id }};#}
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
