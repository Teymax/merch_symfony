<?php

/* default/sing-up.html.twig */
class __TwigTemplate_e2353bb2190bb499a1d60e9057fb5189c29504eb2a64238b212c76a9c834b618 extends Twig_Template
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
        $__internal_178b7fe5d6f6855f89cda613ef28fc27712659fa998e01e8bc2fb33391d4668d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_178b7fe5d6f6855f89cda613ef28fc27712659fa998e01e8bc2fb33391d4668d->enter($__internal_178b7fe5d6f6855f89cda613ef28fc27712659fa998e01e8bc2fb33391d4668d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/sing-up.html.twig"));

        $__internal_77be834ca0e07fb1a71fba58e0af57f03371afade2868e1e6959926f808c9830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77be834ca0e07fb1a71fba58e0af57f03371afade2868e1e6959926f808c9830->enter($__internal_77be834ca0e07fb1a71fba58e0af57f03371afade2868e1e6959926f808c9830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/sing-up.html.twig"));

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
        
        $__internal_178b7fe5d6f6855f89cda613ef28fc27712659fa998e01e8bc2fb33391d4668d->leave($__internal_178b7fe5d6f6855f89cda613ef28fc27712659fa998e01e8bc2fb33391d4668d_prof);

        
        $__internal_77be834ca0e07fb1a71fba58e0af57f03371afade2868e1e6959926f808c9830->leave($__internal_77be834ca0e07fb1a71fba58e0af57f03371afade2868e1e6959926f808c9830_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_e90abb60c44552d81f975bb124d7e9e96accfd5776d70fa99f5d87268939c81a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e90abb60c44552d81f975bb124d7e9e96accfd5776d70fa99f5d87268939c81a->enter($__internal_e90abb60c44552d81f975bb124d7e9e96accfd5776d70fa99f5d87268939c81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_960d28dd750b12723d628d1f8996701a51e7b609f8155af6496afd78ad0164b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960d28dd750b12723d628d1f8996701a51e7b609f8155af6496afd78ad0164b4->enter($__internal_960d28dd750b12723d628d1f8996701a51e7b609f8155af6496afd78ad0164b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper";
        
        $__internal_960d28dd750b12723d628d1f8996701a51e7b609f8155af6496afd78ad0164b4->leave($__internal_960d28dd750b12723d628d1f8996701a51e7b609f8155af6496afd78ad0164b4_prof);

        
        $__internal_e90abb60c44552d81f975bb124d7e9e96accfd5776d70fa99f5d87268939c81a->leave($__internal_e90abb60c44552d81f975bb124d7e9e96accfd5776d70fa99f5d87268939c81a_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d094c68c3a08b908ef99b065ac5abdfd214b879a93649b53f405b54d4b08633d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d094c68c3a08b908ef99b065ac5abdfd214b879a93649b53f405b54d4b08633d->enter($__internal_d094c68c3a08b908ef99b065ac5abdfd214b879a93649b53f405b54d4b08633d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_79c460d38e0fa84c863b3460bc14ea38e8d5412c31985f95c1ecba4d9d37834e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79c460d38e0fa84c863b3460bc14ea38e8d5412c31985f95c1ecba4d9d37834e->enter($__internal_79c460d38e0fa84c863b3460bc14ea38e8d5412c31985f95c1ecba4d9d37834e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_79c460d38e0fa84c863b3460bc14ea38e8d5412c31985f95c1ecba4d9d37834e->leave($__internal_79c460d38e0fa84c863b3460bc14ea38e8d5412c31985f95c1ecba4d9d37834e_prof);

        
        $__internal_d094c68c3a08b908ef99b065ac5abdfd214b879a93649b53f405b54d4b08633d->leave($__internal_d094c68c3a08b908ef99b065ac5abdfd214b879a93649b53f405b54d4b08633d_prof);

    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_4aa4d6b4da11aa5fe4e47ee918cd09f842fb538cd0429694eef0560c2b94419f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aa4d6b4da11aa5fe4e47ee918cd09f842fb538cd0429694eef0560c2b94419f->enter($__internal_4aa4d6b4da11aa5fe4e47ee918cd09f842fb538cd0429694eef0560c2b94419f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_d0048456582d98c255a8dd7a66e02111d3784614a8c78088a7c613217a9a4b3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0048456582d98c255a8dd7a66e02111d3784614a8c78088a7c613217a9a4b3b->enter($__internal_d0048456582d98c255a8dd7a66e02111d3784614a8c78088a7c613217a9a4b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 28
        echo "    <div class=\"p-3 mb-2 bg-success text-white container col-3\" id=\"logIn_form\" style=\"margin: 0 auto;\">
        <header>
            <h2>Register</h2>
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
        
        $__internal_d0048456582d98c255a8dd7a66e02111d3784614a8c78088a7c613217a9a4b3b->leave($__internal_d0048456582d98c255a8dd7a66e02111d3784614a8c78088a7c613217a9a4b3b_prof);

        
        $__internal_4aa4d6b4da11aa5fe4e47ee918cd09f842fb538cd0429694eef0560c2b94419f->leave($__internal_4aa4d6b4da11aa5fe4e47ee918cd09f842fb538cd0429694eef0560c2b94419f_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_40d237d708655f249d46f86162284dbe144e90bbac78c3af298cf3c6d6f13566 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40d237d708655f249d46f86162284dbe144e90bbac78c3af298cf3c6d6f13566->enter($__internal_40d237d708655f249d46f86162284dbe144e90bbac78c3af298cf3c6d6f13566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_739823628d8827a922f03b09d663c065e0a3055e2d6f8f58089119ad217cf4bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_739823628d8827a922f03b09d663c065e0a3055e2d6f8f58089119ad217cf4bd->enter($__internal_739823628d8827a922f03b09d663c065e0a3055e2d6f8f58089119ad217cf4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
";
        
        $__internal_739823628d8827a922f03b09d663c065e0a3055e2d6f8f58089119ad217cf4bd->leave($__internal_739823628d8827a922f03b09d663c065e0a3055e2d6f8f58089119ad217cf4bd_prof);

        
        $__internal_40d237d708655f249d46f86162284dbe144e90bbac78c3af298cf3c6d6f13566->leave($__internal_40d237d708655f249d46f86162284dbe144e90bbac78c3af298cf3c6d6f13566_prof);

    }

    public function getTemplateName()
    {
        return "default/sing-up.html.twig";
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
            <h2>Register</h2>
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
</html>", "default/sing-up.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\default\\sing-up.html.twig");
    }
}
