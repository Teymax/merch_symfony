<?php

/* default/new.html.twig */
class __TwigTemplate_01ed32a0dd25970ed5a8b2eed4ae5d1f0e02af0622c22b4ca7d4e7e049a69226 extends Twig_Template
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
        $__internal_bd1546b3ce6a241fe4ad397ce0a5e81636a1e6dcbca2093322cb21e42252cc8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd1546b3ce6a241fe4ad397ce0a5e81636a1e6dcbca2093322cb21e42252cc8e->enter($__internal_bd1546b3ce6a241fe4ad397ce0a5e81636a1e6dcbca2093322cb21e42252cc8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/new.html.twig"));

        $__internal_babf59f8d0e5ce967db1fe4ad85ff8eacfd6a814f3c9be0f82fed68f48ebde95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_babf59f8d0e5ce967db1fe4ad85ff8eacfd6a814f3c9be0f82fed68f48ebde95->enter($__internal_babf59f8d0e5ce967db1fe4ad85ff8eacfd6a814f3c9be0f82fed68f48ebde95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/new.html.twig"));

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
        
        $__internal_bd1546b3ce6a241fe4ad397ce0a5e81636a1e6dcbca2093322cb21e42252cc8e->leave($__internal_bd1546b3ce6a241fe4ad397ce0a5e81636a1e6dcbca2093322cb21e42252cc8e_prof);

        
        $__internal_babf59f8d0e5ce967db1fe4ad85ff8eacfd6a814f3c9be0f82fed68f48ebde95->leave($__internal_babf59f8d0e5ce967db1fe4ad85ff8eacfd6a814f3c9be0f82fed68f48ebde95_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_485cad1594891f8555001058286f3e0e3a51d9e7ee8ce01fa523854a72015d79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_485cad1594891f8555001058286f3e0e3a51d9e7ee8ce01fa523854a72015d79->enter($__internal_485cad1594891f8555001058286f3e0e3a51d9e7ee8ce01fa523854a72015d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d45d9c7be332e6777353b54d5f0d6adcbfff59713d4033f773315d5e4a2cb9b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d45d9c7be332e6777353b54d5f0d6adcbfff59713d4033f773315d5e4a2cb9b7->enter($__internal_d45d9c7be332e6777353b54d5f0d6adcbfff59713d4033f773315d5e4a2cb9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper";
        
        $__internal_d45d9c7be332e6777353b54d5f0d6adcbfff59713d4033f773315d5e4a2cb9b7->leave($__internal_d45d9c7be332e6777353b54d5f0d6adcbfff59713d4033f773315d5e4a2cb9b7_prof);

        
        $__internal_485cad1594891f8555001058286f3e0e3a51d9e7ee8ce01fa523854a72015d79->leave($__internal_485cad1594891f8555001058286f3e0e3a51d9e7ee8ce01fa523854a72015d79_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_959afdbbcff24138690606c2b6f9d40faeb972b5f136e331f824093ab8a5b1f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_959afdbbcff24138690606c2b6f9d40faeb972b5f136e331f824093ab8a5b1f9->enter($__internal_959afdbbcff24138690606c2b6f9d40faeb972b5f136e331f824093ab8a5b1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b9e4cf117a080f4ed066cdce248f9171f9159e5da0908279dab00cce7a18ec7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e4cf117a080f4ed066cdce248f9171f9159e5da0908279dab00cce7a18ec7c->enter($__internal_b9e4cf117a080f4ed066cdce248f9171f9159e5da0908279dab00cce7a18ec7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b9e4cf117a080f4ed066cdce248f9171f9159e5da0908279dab00cce7a18ec7c->leave($__internal_b9e4cf117a080f4ed066cdce248f9171f9159e5da0908279dab00cce7a18ec7c_prof);

        
        $__internal_959afdbbcff24138690606c2b6f9d40faeb972b5f136e331f824093ab8a5b1f9->leave($__internal_959afdbbcff24138690606c2b6f9d40faeb972b5f136e331f824093ab8a5b1f9_prof);

    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_858e1ac80ff2855a2913803a87f976c825a3e322767e6225ebaea008f03c3f69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_858e1ac80ff2855a2913803a87f976c825a3e322767e6225ebaea008f03c3f69->enter($__internal_858e1ac80ff2855a2913803a87f976c825a3e322767e6225ebaea008f03c3f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_f565d9a40ee1a4b12fb8ce502790f093d41a399ece5b835c819ee828c3917145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f565d9a40ee1a4b12fb8ce502790f093d41a399ece5b835c819ee828c3917145->enter($__internal_f565d9a40ee1a4b12fb8ce502790f093d41a399ece5b835c819ee828c3917145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 28
        echo "    <div class=\"p-3 mb-2 bg-success text-white container col-3\" id=\"logIn_form\" style=\"margin: 0 auto;\">
        <header>
            Register
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
        
        $__internal_f565d9a40ee1a4b12fb8ce502790f093d41a399ece5b835c819ee828c3917145->leave($__internal_f565d9a40ee1a4b12fb8ce502790f093d41a399ece5b835c819ee828c3917145_prof);

        
        $__internal_858e1ac80ff2855a2913803a87f976c825a3e322767e6225ebaea008f03c3f69->leave($__internal_858e1ac80ff2855a2913803a87f976c825a3e322767e6225ebaea008f03c3f69_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d506d53084634f5a3930f1a751b8176c4014da122ca0bc4334cce15d00e1f4ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d506d53084634f5a3930f1a751b8176c4014da122ca0bc4334cce15d00e1f4ce->enter($__internal_d506d53084634f5a3930f1a751b8176c4014da122ca0bc4334cce15d00e1f4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fd0cbf0016c77820bb8229feeb5461c516492990ea4700daf75e4101157e1d60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd0cbf0016c77820bb8229feeb5461c516492990ea4700daf75e4101157e1d60->enter($__internal_fd0cbf0016c77820bb8229feeb5461c516492990ea4700daf75e4101157e1d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
";
        
        $__internal_fd0cbf0016c77820bb8229feeb5461c516492990ea4700daf75e4101157e1d60->leave($__internal_fd0cbf0016c77820bb8229feeb5461c516492990ea4700daf75e4101157e1d60_prof);

        
        $__internal_d506d53084634f5a3930f1a751b8176c4014da122ca0bc4334cce15d00e1f4ce->leave($__internal_d506d53084634f5a3930f1a751b8176c4014da122ca0bc4334cce15d00e1f4ce_prof);

    }

    public function getTemplateName()
    {
        return "default/new.html.twig";
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
            Register
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
</html>", "default/new.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\default\\new.html.twig");
    }
}
