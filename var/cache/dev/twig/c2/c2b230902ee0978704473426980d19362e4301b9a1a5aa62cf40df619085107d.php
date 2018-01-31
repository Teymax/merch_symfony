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
        $__internal_d6f3056457015ded16f1c24763c557888fcb9b398d78d59b178fbdcdc5c72036 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6f3056457015ded16f1c24763c557888fcb9b398d78d59b178fbdcdc5c72036->enter($__internal_d6f3056457015ded16f1c24763c557888fcb9b398d78d59b178fbdcdc5c72036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_56559341fef3687f721dbe77a0c293a8ccbfa48443a8fc9ee8aefebe33bdccb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56559341fef3687f721dbe77a0c293a8ccbfa48443a8fc9ee8aefebe33bdccb8->enter($__internal_56559341fef3687f721dbe77a0c293a8ccbfa48443a8fc9ee8aefebe33bdccb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        echo "            ";
        // line 2
        echo "            ";
        // line 3
        echo "            ";
        // line 4
        echo "            ";
        // line 5
        echo "            ";
        // line 6
        echo "            ";
        // line 7
        echo "
            ";
        // line 9
        echo "            ";
        // line 10
        echo "            <!DOCTYPE html>
            <html>
            <head>
                <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
                <title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
                <!--[if lt IE 9]>
                <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
                <![endif]-->
                ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "            </head>
            <body>
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
                <div class=\"container-fluid\">
                    <a class=\"navbar-brand\" href=\"#\">MerchByAmazon Registeration</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                        <ul class=\"navbar-nav ml-auto\">
                            <li class=\"nav-item active\">
                                <a class=\"nav-link\" href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Back <span class=\"sr-only\">(current)</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class=\"container-fluid\" id=\"main_container\">
                ";
        // line 50
        $this->displayBlock('navigation', $context, $blocks);
        // line 74
        echo "

            ";
        // line 76
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "            </div>
            </body>
            </html>
";
        
        $__internal_d6f3056457015ded16f1c24763c557888fcb9b398d78d59b178fbdcdc5c72036->leave($__internal_d6f3056457015ded16f1c24763c557888fcb9b398d78d59b178fbdcdc5c72036_prof);

        
        $__internal_56559341fef3687f721dbe77a0c293a8ccbfa48443a8fc9ee8aefebe33bdccb8->leave($__internal_56559341fef3687f721dbe77a0c293a8ccbfa48443a8fc9ee8aefebe33bdccb8_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_a72e584013551b0ed664b5d77ee362adb3cd558e362c591eeeecee54e7076aef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a72e584013551b0ed664b5d77ee362adb3cd558e362c591eeeecee54e7076aef->enter($__internal_a72e584013551b0ed664b5d77ee362adb3cd558e362c591eeeecee54e7076aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b19a46e8402137eede65560e4f3007693420c15bb9d5115351854b265a29b822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b19a46e8402137eede65560e4f3007693420c15bb9d5115351854b265a29b822->enter($__internal_b19a46e8402137eede65560e4f3007693420c15bb9d5115351854b265a29b822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchByAmazon | Registeration";
        
        $__internal_b19a46e8402137eede65560e4f3007693420c15bb9d5115351854b265a29b822->leave($__internal_b19a46e8402137eede65560e4f3007693420c15bb9d5115351854b265a29b822_prof);

        
        $__internal_a72e584013551b0ed664b5d77ee362adb3cd558e362c591eeeecee54e7076aef->leave($__internal_a72e584013551b0ed664b5d77ee362adb3cd558e362c591eeeecee54e7076aef_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5ac6221062c0a2fb0d0b618d088b13ec6fac33e706baf652cbffb2d1bd1706d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ac6221062c0a2fb0d0b618d088b13ec6fac33e706baf652cbffb2d1bd1706d0->enter($__internal_5ac6221062c0a2fb0d0b618d088b13ec6fac33e706baf652cbffb2d1bd1706d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f7029527fa779af4d8ca0e6894f9fbee39839ff295196da75fdd32163eedab7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7029527fa779af4d8ca0e6894f9fbee39839ff295196da75fdd32163eedab7c->enter($__internal_f7029527fa779af4d8ca0e6894f9fbee39839ff295196da75fdd32163eedab7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "                    <!-- Fonts -->
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
        
        $__internal_f7029527fa779af4d8ca0e6894f9fbee39839ff295196da75fdd32163eedab7c->leave($__internal_f7029527fa779af4d8ca0e6894f9fbee39839ff295196da75fdd32163eedab7c_prof);

        
        $__internal_5ac6221062c0a2fb0d0b618d088b13ec6fac33e706baf652cbffb2d1bd1706d0->leave($__internal_5ac6221062c0a2fb0d0b618d088b13ec6fac33e706baf652cbffb2d1bd1706d0_prof);

    }

    // line 50
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_71181cd7bb2360c7a4f60cace143cac7edf7390080984a575b4072eb4ccce3ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71181cd7bb2360c7a4f60cace143cac7edf7390080984a575b4072eb4ccce3ed->enter($__internal_71181cd7bb2360c7a4f60cace143cac7edf7390080984a575b4072eb4ccce3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_9bf82a53eaa8b6e207ade8965a45fcb6bcdf769058f9882d4e9d2543b567745e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf82a53eaa8b6e207ade8965a45fcb6bcdf769058f9882d4e9d2543b567745e->enter($__internal_9bf82a53eaa8b6e207ade8965a45fcb6bcdf769058f9882d4e9d2543b567745e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 51
        echo "                <div class=\"p-3 mb-2 text-white container col-3\" id=\"logIn_form\" style=\"margin: 0 auto;\">
                    <div class=\"form-group\">
                        ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), 'form_start');
        echo "
                        <label  style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left;\" for=\"username\">Username:</label>
                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->getSourceContext()); })()), "username", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        </br>
                        <label  style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left;\" for=\"username\">Email:</label>
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->getSourceContext()); })()), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        </br>
                        <label  style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left;\" for=\"username\">Password:</label>
                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), "plainPassword", array()), "first", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        </br>
                        <label  style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left;\" for=\"username\">Repeat Password:</label>
                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 64, $this->getSourceContext()); })()), "plainPassword", array()), "second", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        </br>
                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->getSourceContext()); })()), "regDate", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

                        <button type=\"submit\" class=\"btn btn-info\">Register!</button>
                        ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 69, $this->getSourceContext()); })()), 'form_end');
        echo "
                    </div>
                </div>
            </div>
            ";
        
        $__internal_9bf82a53eaa8b6e207ade8965a45fcb6bcdf769058f9882d4e9d2543b567745e->leave($__internal_9bf82a53eaa8b6e207ade8965a45fcb6bcdf769058f9882d4e9d2543b567745e_prof);

        
        $__internal_71181cd7bb2360c7a4f60cace143cac7edf7390080984a575b4072eb4ccce3ed->leave($__internal_71181cd7bb2360c7a4f60cace143cac7edf7390080984a575b4072eb4ccce3ed_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fbe03ad7b2f1dcc5a74699288751ce812fb10cb485e251355842d825e60ac51f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbe03ad7b2f1dcc5a74699288751ce812fb10cb485e251355842d825e60ac51f->enter($__internal_fbe03ad7b2f1dcc5a74699288751ce812fb10cb485e251355842d825e60ac51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c09892c2de49f919edeaaec8b67f5327a4cccf8d68987bceea3ded7e3d247d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09892c2de49f919edeaaec8b67f5327a4cccf8d68987bceea3ded7e3d247d16->enter($__internal_c09892c2de49f919edeaaec8b67f5327a4cccf8d68987bceea3ded7e3d247d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "                <!-- Scripts -->
                <script src=\"assets/js/core.min.js\"></script>
                <script src=\"assets/js/app.min.js\"></script>
                <script src=\"assets/js/script.min.js\"></script>
            ";
        
        $__internal_c09892c2de49f919edeaaec8b67f5327a4cccf8d68987bceea3ded7e3d247d16->leave($__internal_c09892c2de49f919edeaaec8b67f5327a4cccf8d68987bceea3ded7e3d247d16_prof);

        
        $__internal_fbe03ad7b2f1dcc5a74699288751ce812fb10cb485e251355842d825e60ac51f->leave($__internal_fbe03ad7b2f1dcc5a74699288751ce812fb10cb485e251355842d825e60ac51f_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 77,  216 => 76,  201 => 69,  195 => 66,  190 => 64,  184 => 61,  178 => 58,  172 => 55,  167 => 53,  163 => 51,  154 => 50,  132 => 19,  123 => 18,  105 => 14,  92 => 82,  90 => 76,  86 => 74,  84 => 50,  74 => 43,  61 => 32,  59 => 18,  52 => 14,  46 => 10,  44 => 9,  41 => 7,  39 => 6,  37 => 5,  35 => 4,  33 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("            {#{{ form_start(form) }}#}
            {#{{ form_row(form.username, { 'attr': {'class': 'form-control'} }) }}#}
            {#{{ form_row(form.email, { 'attr': {'class': 'form-control'} }) }}#}
            {#{{ form_row(form.plainPassword.first, { 'attr': {'class': 'form-control'} }) }}#}
            {#{{ form_row(form.plainPassword.second, { 'attr': {'class': 'form-control'} }) }}#}
            {#{{ form_row(form.regDate, { 'attr': {'class': 'form-control'} }) }}#}

            {#<button type=\"submit\" class=\"btn btn-info\">Register!</button>#}
            {#{{ form_end(form) }}#}
            <!DOCTYPE html>
            <html>
            <head>
                <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
                <title>{% block title %}MerchByAmazon | Registeration{% endblock %}</title>
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
                    <a class=\"navbar-brand\" href=\"#\">MerchByAmazon Registeration</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                        <ul class=\"navbar-nav ml-auto\">
                            <li class=\"nav-item active\">
                                <a class=\"nav-link\" href=\"{{ path('index') }}\">Back <span class=\"sr-only\">(current)</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class=\"container-fluid\" id=\"main_container\">
                {% block navigation %}
                <div class=\"p-3 mb-2 text-white container col-3\" id=\"logIn_form\" style=\"margin: 0 auto;\">
                    <div class=\"form-group\">
                        {{ form_start(form) }}
                        <label  style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left;\" for=\"username\">Username:</label>
                        {{ form_row(form.username, { 'attr': {'class': 'form-control'} }) }}
                        </br>
                        <label  style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left;\" for=\"username\">Email:</label>
                        {{ form_row(form.email, { 'attr': {'class': 'form-control'} }) }}
                        </br>
                        <label  style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left;\" for=\"username\">Password:</label>
                        {{ form_row(form.plainPassword.first, { 'attr': {'class': 'form-control'} }) }}
                        </br>
                        <label  style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left;\" for=\"username\">Repeat Password:</label>
                        {{ form_row(form.plainPassword.second, { 'attr': {'class': 'form-control'} }) }}
                        </br>
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
            </html>
", "registration/register.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\registration\\register.html.twig");
    }
}
