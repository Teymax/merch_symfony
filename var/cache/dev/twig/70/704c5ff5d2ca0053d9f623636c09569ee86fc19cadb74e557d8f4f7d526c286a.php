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
        $__internal_233b5a673cb0497116a632c238045b5176467baa48b851b82c48e44281f4c723 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_233b5a673cb0497116a632c238045b5176467baa48b851b82c48e44281f4c723->enter($__internal_233b5a673cb0497116a632c238045b5176467baa48b851b82c48e44281f4c723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "masterList/masterListCreate.html.twig"));

        $__internal_97dbb17efed1740a7a85d31330ed130dd22e745ebe62c8ded7503ef42282cbaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97dbb17efed1740a7a85d31330ed130dd22e745ebe62c8ded7503ef42282cbaa->enter($__internal_97dbb17efed1740a7a85d31330ed130dd22e745ebe62c8ded7503ef42282cbaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "masterList/masterListCreate.html.twig"));

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
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"#\">MerchByAmazon Master Listing Creator</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_masterList");
        echo "\">Back <span class=\"sr-only\">(current)</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class=\"container-fluid\" id=\"main_container\">
    ";
        // line 41
        $this->displayBlock('navigation', $context, $blocks);
        // line 58
        echo "

";
        // line 60
        $this->displayBlock('javascripts', $context, $blocks);
        // line 72
        echo "</div>
</body>
</html>
";
        
        $__internal_233b5a673cb0497116a632c238045b5176467baa48b851b82c48e44281f4c723->leave($__internal_233b5a673cb0497116a632c238045b5176467baa48b851b82c48e44281f4c723_prof);

        
        $__internal_97dbb17efed1740a7a85d31330ed130dd22e745ebe62c8ded7503ef42282cbaa->leave($__internal_97dbb17efed1740a7a85d31330ed130dd22e745ebe62c8ded7503ef42282cbaa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_449f27eb1468c8cb08cd2cbf5abd379c8b9f781ac7e3ef408e2eade0bc2d2c6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_449f27eb1468c8cb08cd2cbf5abd379c8b9f781ac7e3ef408e2eade0bc2d2c6e->enter($__internal_449f27eb1468c8cb08cd2cbf5abd379c8b9f781ac7e3ef408e2eade0bc2d2c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6b91417ab0147f652e91548fe99f79d8f4b936091498c17305c8b6bc60bdae06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b91417ab0147f652e91548fe99f79d8f4b936091498c17305c8b6bc60bdae06->enter($__internal_6b91417ab0147f652e91548fe99f79d8f4b936091498c17305c8b6bc60bdae06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchByAmazon | Master Listing Creator";
        
        $__internal_6b91417ab0147f652e91548fe99f79d8f4b936091498c17305c8b6bc60bdae06->leave($__internal_6b91417ab0147f652e91548fe99f79d8f4b936091498c17305c8b6bc60bdae06_prof);

        
        $__internal_449f27eb1468c8cb08cd2cbf5abd379c8b9f781ac7e3ef408e2eade0bc2d2c6e->leave($__internal_449f27eb1468c8cb08cd2cbf5abd379c8b9f781ac7e3ef408e2eade0bc2d2c6e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d527c15ea05af069a4e8cb9ce5307583d896b108225978cbd8f54d9021a2d357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d527c15ea05af069a4e8cb9ce5307583d896b108225978cbd8f54d9021a2d357->enter($__internal_d527c15ea05af069a4e8cb9ce5307583d896b108225978cbd8f54d9021a2d357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7050cb2b7131ce97942d2392373c60a7bbc56c5d5ec78e5c5df9414f2279584e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7050cb2b7131ce97942d2392373c60a7bbc56c5d5ec78e5c5df9414f2279584e->enter($__internal_7050cb2b7131ce97942d2392373c60a7bbc56c5d5ec78e5c5df9414f2279584e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7050cb2b7131ce97942d2392373c60a7bbc56c5d5ec78e5c5df9414f2279584e->leave($__internal_7050cb2b7131ce97942d2392373c60a7bbc56c5d5ec78e5c5df9414f2279584e_prof);

        
        $__internal_d527c15ea05af069a4e8cb9ce5307583d896b108225978cbd8f54d9021a2d357->leave($__internal_d527c15ea05af069a4e8cb9ce5307583d896b108225978cbd8f54d9021a2d357_prof);

    }

    // line 41
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_8bffe2125140a245e3396fe29ed0880128349e85d03691985dd05624af0bdb72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bffe2125140a245e3396fe29ed0880128349e85d03691985dd05624af0bdb72->enter($__internal_8bffe2125140a245e3396fe29ed0880128349e85d03691985dd05624af0bdb72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_44ea4e87819d0afbb055697cea67e3e196276ead5b37236223b9c8b218d2a5b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ea4e87819d0afbb055697cea67e3e196276ead5b37236223b9c8b218d2a5b2->enter($__internal_44ea4e87819d0afbb055697cea67e3e196276ead5b37236223b9c8b218d2a5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 42
        echo "    <div class=\"row\">
        <div class=\"col-md-4\">
            ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->getSourceContext()); })()), 'form_start');
        echo "
            <label  style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left;\">Enter Title</label>
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->getSourceContext()); })()), "title", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            <label style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left;\">Upload PNG</label>
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), "filename", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->getSourceContext()); })()), "userId", array()), 'row', array("attr" => array("id" => "user_ID")));
        echo "
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), "filename", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->getSourceContext()); })()), 'form_end');
        echo "
            <br>
            <button type=\"submit\" class=\"btn btn-info\" style=\"margin-top: 15px\">Save</button>
        </div>
    </div>
</div>
";
        
        $__internal_44ea4e87819d0afbb055697cea67e3e196276ead5b37236223b9c8b218d2a5b2->leave($__internal_44ea4e87819d0afbb055697cea67e3e196276ead5b37236223b9c8b218d2a5b2_prof);

        
        $__internal_8bffe2125140a245e3396fe29ed0880128349e85d03691985dd05624af0bdb72->leave($__internal_8bffe2125140a245e3396fe29ed0880128349e85d03691985dd05624af0bdb72_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_21d14906ea2dd4f8a07d1b068d5c977c311f73d184c04e1f490af6690369ac74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21d14906ea2dd4f8a07d1b068d5c977c311f73d184c04e1f490af6690369ac74->enter($__internal_21d14906ea2dd4f8a07d1b068d5c977c311f73d184c04e1f490af6690369ac74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_91448b0b82fe53dfb1e50aca14f93d1e5683cf62563542797c9019b258b07519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91448b0b82fe53dfb1e50aca14f93d1e5683cf62563542797c9019b258b07519->enter($__internal_91448b0b82fe53dfb1e50aca14f93d1e5683cf62563542797c9019b258b07519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "        <!-- Scripts -->
        <script src=\"assets/js/core.min.js\"></script>
        <script type=\"text/javascript\">
            ";
        // line 65
        echo "            ";
        // line 66
        echo "            document.getElementById('form_userId').value = ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 66, $this->getSourceContext()); })()), "user", array()), "user_id", array()), "html", null, true);
        echo ";
            ";
        // line 68
        echo "        </script>
        <script src=\"assets/js/app.min.js\"></script>
        <script src=\"assets/js/script.min.js\"></script>
";
        
        $__internal_91448b0b82fe53dfb1e50aca14f93d1e5683cf62563542797c9019b258b07519->leave($__internal_91448b0b82fe53dfb1e50aca14f93d1e5683cf62563542797c9019b258b07519_prof);

        
        $__internal_21d14906ea2dd4f8a07d1b068d5c977c311f73d184c04e1f490af6690369ac74->leave($__internal_21d14906ea2dd4f8a07d1b068d5c977c311f73d184c04e1f490af6690369ac74_prof);

    }

    public function getTemplateName()
    {
        return "masterList/masterListCreate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 68,  205 => 66,  203 => 65,  198 => 61,  189 => 60,  172 => 51,  168 => 50,  164 => 49,  160 => 48,  155 => 46,  150 => 44,  146 => 42,  137 => 41,  115 => 10,  106 => 9,  88 => 5,  75 => 72,  73 => 60,  69 => 58,  67 => 41,  57 => 34,  44 => 23,  42 => 9,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>{% block title %}MerchByAmazon | Master Listing Creator{% endblock %}</title>
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
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"#\">MerchByAmazon Master Listing Creator</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"{{ path('app_masterList') }}\">Back <span class=\"sr-only\">(current)</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class=\"container-fluid\" id=\"main_container\">
    {% block navigation %}
    <div class=\"row\">
        <div class=\"col-md-4\">
            {{ form_start(form) }}
            <label  style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left;\">Enter Title</label>
            {{ form_row(form.title, { 'attr': {'class': 'form-control'} }) }}
            <label style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left;\">Upload PNG</label>
            {{ form_row(form.filename, { 'attr': {'class': 'form-control'} }) }}
            {{ form_row(form.userId, { 'attr': {'id': 'user_ID'} }) }}
            {{ form_row(form.filename, { 'attr': {'class': 'form-control'} }) }}
            {{ form_end(form) }}
            <br>
            <button type=\"submit\" class=\"btn btn-info\" style=\"margin-top: 15px\">Save</button>
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
