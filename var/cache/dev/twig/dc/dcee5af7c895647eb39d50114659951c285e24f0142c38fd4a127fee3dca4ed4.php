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
        $__internal_bbeda3123a7e6618641ed9764cf489c166ffab6148d5632f86e438e8f74adcd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbeda3123a7e6618641ed9764cf489c166ffab6148d5632f86e438e8f74adcd7->enter($__internal_bbeda3123a7e6618641ed9764cf489c166ffab6148d5632f86e438e8f74adcd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/listCreate.html.twig"));

        $__internal_ca573346f57c11c494f3b8e216907e74118f374952263d8af7a330eb996cd1ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca573346f57c11c494f3b8e216907e74118f374952263d8af7a330eb996cd1ae->enter($__internal_ca573346f57c11c494f3b8e216907e74118f374952263d8af7a330eb996cd1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/listCreate.html.twig"));

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
        // line 51
        echo "

";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 59
        echo "</div>
</body>
</html>
";
        
        $__internal_bbeda3123a7e6618641ed9764cf489c166ffab6148d5632f86e438e8f74adcd7->leave($__internal_bbeda3123a7e6618641ed9764cf489c166ffab6148d5632f86e438e8f74adcd7_prof);

        
        $__internal_ca573346f57c11c494f3b8e216907e74118f374952263d8af7a330eb996cd1ae->leave($__internal_ca573346f57c11c494f3b8e216907e74118f374952263d8af7a330eb996cd1ae_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a9cf97198b994119dc4326c5d5d7bf79db118fa5edea0fdaafcfdc90ca132ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a9cf97198b994119dc4326c5d5d7bf79db118fa5edea0fdaafcfdc90ca132ff->enter($__internal_5a9cf97198b994119dc4326c5d5d7bf79db118fa5edea0fdaafcfdc90ca132ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bcc5d86f9587ec29c76fd882c39ac3c0bdda41adbdd7b04a9392a6c6aa440778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc5d86f9587ec29c76fd882c39ac3c0bdda41adbdd7b04a9392a6c6aa440778->enter($__internal_bcc5d86f9587ec29c76fd882c39ac3c0bdda41adbdd7b04a9392a6c6aa440778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper";
        
        $__internal_bcc5d86f9587ec29c76fd882c39ac3c0bdda41adbdd7b04a9392a6c6aa440778->leave($__internal_bcc5d86f9587ec29c76fd882c39ac3c0bdda41adbdd7b04a9392a6c6aa440778_prof);

        
        $__internal_5a9cf97198b994119dc4326c5d5d7bf79db118fa5edea0fdaafcfdc90ca132ff->leave($__internal_5a9cf97198b994119dc4326c5d5d7bf79db118fa5edea0fdaafcfdc90ca132ff_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6404643f5c42dd8b683ecf20c37f6b40206a027e63d8001bb49d80a0a472fb2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6404643f5c42dd8b683ecf20c37f6b40206a027e63d8001bb49d80a0a472fb2e->enter($__internal_6404643f5c42dd8b683ecf20c37f6b40206a027e63d8001bb49d80a0a472fb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a09f5b2518da3e0c7af70fdf1ef19bf13237ef8541dfac463f7984c1c99434bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a09f5b2518da3e0c7af70fdf1ef19bf13237ef8541dfac463f7984c1c99434bb->enter($__internal_a09f5b2518da3e0c7af70fdf1ef19bf13237ef8541dfac463f7984c1c99434bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_a09f5b2518da3e0c7af70fdf1ef19bf13237ef8541dfac463f7984c1c99434bb->leave($__internal_a09f5b2518da3e0c7af70fdf1ef19bf13237ef8541dfac463f7984c1c99434bb_prof);

        
        $__internal_6404643f5c42dd8b683ecf20c37f6b40206a027e63d8001bb49d80a0a472fb2e->leave($__internal_6404643f5c42dd8b683ecf20c37f6b40206a027e63d8001bb49d80a0a472fb2e_prof);

    }

    // line 26
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_ec2da238ae55eb465e50fbab1a56019fdc00b4a9c383f41e6891b3a41312594f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec2da238ae55eb465e50fbab1a56019fdc00b4a9c383f41e6891b3a41312594f->enter($__internal_ec2da238ae55eb465e50fbab1a56019fdc00b4a9c383f41e6891b3a41312594f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_83025f268e0b1ffda92ea1c13a7ebb8938c14e8ed29e8c514779baf3141ab267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83025f268e0b1ffda92ea1c13a7ebb8938c14e8ed29e8c514779baf3141ab267->enter($__internal_83025f268e0b1ffda92ea1c13a7ebb8938c14e8ed29e8c514779baf3141ab267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 27
        echo "        <div class=\"p-3 mb-2 bg-success text-white container col-3\" id=\"logIn_form\" style=\"margin: 0 auto;\">
                <header>
                        <h2>Create List</h2>
                </header>
                <div class=\"form-group\">
                    ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 32, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
        echo "
                    ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), 'form_start');
        echo "
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "type", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), "fit", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "color", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), "cost", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->getSourceContext()); })()), "brand", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), "title", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), "bulletOne", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->getSourceContext()); })()), "bulletTwo", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), "description", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), "image", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->getSourceContext()); })()), "userId", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        <button type=\"submit\" class=\"btn btn-info\">Create!</button>
                    ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->getSourceContext()); })()), 'form_end');
        echo "
                </div>
        </div>
</div>
";
        
        $__internal_83025f268e0b1ffda92ea1c13a7ebb8938c14e8ed29e8c514779baf3141ab267->leave($__internal_83025f268e0b1ffda92ea1c13a7ebb8938c14e8ed29e8c514779baf3141ab267_prof);

        
        $__internal_ec2da238ae55eb465e50fbab1a56019fdc00b4a9c383f41e6891b3a41312594f->leave($__internal_ec2da238ae55eb465e50fbab1a56019fdc00b4a9c383f41e6891b3a41312594f_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7fd56974fbf9f7328c7a5e80ed4f020aa576a36bad5957f60966b8cce6e9f982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fd56974fbf9f7328c7a5e80ed4f020aa576a36bad5957f60966b8cce6e9f982->enter($__internal_7fd56974fbf9f7328c7a5e80ed4f020aa576a36bad5957f60966b8cce6e9f982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_da71d062383263d6ae20c6ed4505ad38432589a66462c72ff5368c5a9e2a0ec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da71d062383263d6ae20c6ed4505ad38432589a66462c72ff5368c5a9e2a0ec9->enter($__internal_da71d062383263d6ae20c6ed4505ad38432589a66462c72ff5368c5a9e2a0ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "        <!-- Scripts -->
        <script src=\"assets/js/core.min.js\"></script>
        <script src=\"assets/js/app.min.js\"></script>
        <script src=\"assets/js/script.min.js\"></script>
";
        
        $__internal_da71d062383263d6ae20c6ed4505ad38432589a66462c72ff5368c5a9e2a0ec9->leave($__internal_da71d062383263d6ae20c6ed4505ad38432589a66462c72ff5368c5a9e2a0ec9_prof);

        
        $__internal_7fd56974fbf9f7328c7a5e80ed4f020aa576a36bad5957f60966b8cce6e9f982->leave($__internal_7fd56974fbf9f7328c7a5e80ed4f020aa576a36bad5957f60966b8cce6e9f982_prof);

    }

    public function getTemplateName()
    {
        return "list/listCreate.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  212 => 54,  203 => 53,  188 => 46,  183 => 44,  179 => 43,  175 => 42,  171 => 41,  167 => 40,  163 => 39,  159 => 38,  155 => 37,  151 => 36,  147 => 35,  143 => 34,  139 => 33,  135 => 32,  128 => 27,  119 => 26,  97 => 10,  88 => 9,  70 => 5,  57 => 59,  55 => 53,  51 => 51,  49 => 26,  44 => 23,  42 => 9,  35 => 5,  29 => 1,);
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
                    {{ app.user.username }}
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
                    {{ form_row(form.image, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_row(form.userId, { 'attr': {'class': 'form-control'} }) }}
                        <button type=\"submit\" class=\"btn btn-info\">Create!</button>
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
</html>
", "list/listCreate.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\list\\listCreate.html.twig");
    }
}
