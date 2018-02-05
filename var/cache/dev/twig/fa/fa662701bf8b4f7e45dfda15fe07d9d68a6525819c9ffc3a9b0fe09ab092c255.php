<?php

/* default/forgot-password.html.twig */
class __TwigTemplate_fa9717020e7bdc7caf4dc276373853fa650c9a74ec706d522bb7d1b7b8236af8 extends Twig_Template
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
        $__internal_b90eab136eae42ffd737d9c1bb2a2d8256186fc26f9e6d1a81a3fa0171a02131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b90eab136eae42ffd737d9c1bb2a2d8256186fc26f9e6d1a81a3fa0171a02131->enter($__internal_b90eab136eae42ffd737d9c1bb2a2d8256186fc26f9e6d1a81a3fa0171a02131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/forgot-password.html.twig"));

        $__internal_85918a16681cad6a3490f0648c2c132d6879524bbc21d79f070cfd550985cd7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85918a16681cad6a3490f0648c2c132d6879524bbc21d79f070cfd550985cd7d->enter($__internal_85918a16681cad6a3490f0648c2c132d6879524bbc21d79f070cfd550985cd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/forgot-password.html.twig"));

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
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"#\">MerchByAmazon Login</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Back <span class=\"sr-only\">(current)</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class=\"container-fluid\" id=\"main_container\">
    ";
        // line 42
        $this->displayBlock('navigation', $context, $blocks);
        // line 58
        echo "

";
        // line 60
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "</div>
</body>
</html>";
        
        $__internal_b90eab136eae42ffd737d9c1bb2a2d8256186fc26f9e6d1a81a3fa0171a02131->leave($__internal_b90eab136eae42ffd737d9c1bb2a2d8256186fc26f9e6d1a81a3fa0171a02131_prof);

        
        $__internal_85918a16681cad6a3490f0648c2c132d6879524bbc21d79f070cfd550985cd7d->leave($__internal_85918a16681cad6a3490f0648c2c132d6879524bbc21d79f070cfd550985cd7d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3027591a0e584dfe83defbc42f1d3f8e6534b9a116c423b6af6ec853942efc9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3027591a0e584dfe83defbc42f1d3f8e6534b9a116c423b6af6ec853942efc9e->enter($__internal_3027591a0e584dfe83defbc42f1d3f8e6534b9a116c423b6af6ec853942efc9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_26e0521bb33fd648824e132ca8edfe07526294a10020a08523598c189b10e1b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e0521bb33fd648824e132ca8edfe07526294a10020a08523598c189b10e1b1->enter($__internal_26e0521bb33fd648824e132ca8edfe07526294a10020a08523598c189b10e1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchByAmazon | Login";
        
        $__internal_26e0521bb33fd648824e132ca8edfe07526294a10020a08523598c189b10e1b1->leave($__internal_26e0521bb33fd648824e132ca8edfe07526294a10020a08523598c189b10e1b1_prof);

        
        $__internal_3027591a0e584dfe83defbc42f1d3f8e6534b9a116c423b6af6ec853942efc9e->leave($__internal_3027591a0e584dfe83defbc42f1d3f8e6534b9a116c423b6af6ec853942efc9e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_37e68359377bfbdc87da5365922e4832d75e6b2708774599febd162aaf9da99e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37e68359377bfbdc87da5365922e4832d75e6b2708774599febd162aaf9da99e->enter($__internal_37e68359377bfbdc87da5365922e4832d75e6b2708774599febd162aaf9da99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5e13a6b7d18a1f7d3f770366d80420c8094abdd89edcdd5347f64424193150f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e13a6b7d18a1f7d3f770366d80420c8094abdd89edcdd5347f64424193150f5->enter($__internal_5e13a6b7d18a1f7d3f770366d80420c8094abdd89edcdd5347f64424193150f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5e13a6b7d18a1f7d3f770366d80420c8094abdd89edcdd5347f64424193150f5->leave($__internal_5e13a6b7d18a1f7d3f770366d80420c8094abdd89edcdd5347f64424193150f5_prof);

        
        $__internal_37e68359377bfbdc87da5365922e4832d75e6b2708774599febd162aaf9da99e->leave($__internal_37e68359377bfbdc87da5365922e4832d75e6b2708774599febd162aaf9da99e_prof);

    }

    // line 42
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_e24a8498b991f583e705c4ee602f48474e1cff383f349b7e1a26b4cbfb73f5d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e24a8498b991f583e705c4ee602f48474e1cff383f349b7e1a26b4cbfb73f5d1->enter($__internal_e24a8498b991f583e705c4ee602f48474e1cff383f349b7e1a26b4cbfb73f5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_c3723875813842aa9391c4e21f361cdfbbc148c88646c275174d479fe2243b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3723875813842aa9391c4e21f361cdfbbc148c88646c275174d479fe2243b5e->enter($__internal_c3723875813842aa9391c4e21f361cdfbbc148c88646c275174d479fe2243b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 43
        echo "    <div class=\"p-3 mb-2 text-white container col-3\" id=\"logIn_form\" style=\"margin: 0 auto;\">
            <div class=\"form-group\">
                ";
        // line 45
        if (((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 45, $this->getSourceContext()); })()) == true)) {
            // line 46
            echo "                    <div class=\"bg-danger\" style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: center;\">No user found for email </div>
                ";
        }
        // line 48
        echo "                ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), 'form_start');
        echo "
                <label  style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left;\" for=\"username\">Email:</label>
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                </br>
                <button type=\"submit\" class=\"btn btn-info\">Register!</button>
                ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), 'form_end');
        echo "
            </div>
    </div>
</div>
";
        
        $__internal_c3723875813842aa9391c4e21f361cdfbbc148c88646c275174d479fe2243b5e->leave($__internal_c3723875813842aa9391c4e21f361cdfbbc148c88646c275174d479fe2243b5e_prof);

        
        $__internal_e24a8498b991f583e705c4ee602f48474e1cff383f349b7e1a26b4cbfb73f5d1->leave($__internal_e24a8498b991f583e705c4ee602f48474e1cff383f349b7e1a26b4cbfb73f5d1_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_63cb30616b744c00bb786a0a2beaccb999af4ce46e5e3906eaffc444ffe9e71b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63cb30616b744c00bb786a0a2beaccb999af4ce46e5e3906eaffc444ffe9e71b->enter($__internal_63cb30616b744c00bb786a0a2beaccb999af4ce46e5e3906eaffc444ffe9e71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c1f3497a98dfebac37b11e64ff76d45a8a297bec3559b460d3cdf879a60d0bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f3497a98dfebac37b11e64ff76d45a8a297bec3559b460d3cdf879a60d0bf4->enter($__internal_c1f3497a98dfebac37b11e64ff76d45a8a297bec3559b460d3cdf879a60d0bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
";
        
        $__internal_c1f3497a98dfebac37b11e64ff76d45a8a297bec3559b460d3cdf879a60d0bf4->leave($__internal_c1f3497a98dfebac37b11e64ff76d45a8a297bec3559b460d3cdf879a60d0bf4_prof);

        
        $__internal_63cb30616b744c00bb786a0a2beaccb999af4ce46e5e3906eaffc444ffe9e71b->leave($__internal_63cb30616b744c00bb786a0a2beaccb999af4ce46e5e3906eaffc444ffe9e71b_prof);

    }

    public function getTemplateName()
    {
        return "default/forgot-password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 61,  183 => 60,  168 => 53,  162 => 50,  156 => 48,  152 => 46,  150 => 45,  146 => 43,  137 => 42,  115 => 11,  106 => 10,  88 => 6,  76 => 66,  74 => 60,  70 => 58,  68 => 42,  58 => 35,  45 => 24,  43 => 10,  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>{% block title %}MerchByAmazon | Login{% endblock %}</title>
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
        <a class=\"navbar-brand\" href=\"#\">MerchByAmazon Login</a>
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
                {% if error == true %}
                    <div class=\"bg-danger\" style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: center;\">No user found for email </div>
                {% endif %}
                {{ form_start(form) }}
                <label  style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left;\" for=\"username\">Email:</label>
                {{ form_row(form.email, { 'attr': {'class': 'form-control'} }) }}
                </br>
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
</html>", "default/forgot-password.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\default\\forgot-password.html.twig");
    }
}
