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
        $__internal_a78d39ad50941d1301ea6341338821b0b6f790950feb969e6da9911fc10177fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a78d39ad50941d1301ea6341338821b0b6f790950feb969e6da9911fc10177fd->enter($__internal_a78d39ad50941d1301ea6341338821b0b6f790950feb969e6da9911fc10177fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "masterList/masterListCreate.html.twig"));

        $__internal_7c7be7b7dae52bcd8263c7b701c1502a8618d0ccf3a3318608e669a888b72037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c7be7b7dae52bcd8263c7b701c1502a8618d0ccf3a3318608e669a888b72037->enter($__internal_7c7be7b7dae52bcd8263c7b701c1502a8618d0ccf3a3318608e669a888b72037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "masterList/masterListCreate.html.twig"));

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
        
        $__internal_a78d39ad50941d1301ea6341338821b0b6f790950feb969e6da9911fc10177fd->leave($__internal_a78d39ad50941d1301ea6341338821b0b6f790950feb969e6da9911fc10177fd_prof);

        
        $__internal_7c7be7b7dae52bcd8263c7b701c1502a8618d0ccf3a3318608e669a888b72037->leave($__internal_7c7be7b7dae52bcd8263c7b701c1502a8618d0ccf3a3318608e669a888b72037_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_27f327748e8fd888f278f4e784d4bcc452e5cc93e5fae20f6e2971a4673a4499 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27f327748e8fd888f278f4e784d4bcc452e5cc93e5fae20f6e2971a4673a4499->enter($__internal_27f327748e8fd888f278f4e784d4bcc452e5cc93e5fae20f6e2971a4673a4499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7ce6fe7287577037f0ebb102d094f44cd03cad2b1852e1ec59d31bed0e7380d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce6fe7287577037f0ebb102d094f44cd03cad2b1852e1ec59d31bed0e7380d2->enter($__internal_7ce6fe7287577037f0ebb102d094f44cd03cad2b1852e1ec59d31bed0e7380d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchByAmazon | Master Listing Creator";
        
        $__internal_7ce6fe7287577037f0ebb102d094f44cd03cad2b1852e1ec59d31bed0e7380d2->leave($__internal_7ce6fe7287577037f0ebb102d094f44cd03cad2b1852e1ec59d31bed0e7380d2_prof);

        
        $__internal_27f327748e8fd888f278f4e784d4bcc452e5cc93e5fae20f6e2971a4673a4499->leave($__internal_27f327748e8fd888f278f4e784d4bcc452e5cc93e5fae20f6e2971a4673a4499_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f4c43114c7c17a80ac2ab7c8523b4ac218af3eb67ae1dc74c3408cafe64eda85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4c43114c7c17a80ac2ab7c8523b4ac218af3eb67ae1dc74c3408cafe64eda85->enter($__internal_f4c43114c7c17a80ac2ab7c8523b4ac218af3eb67ae1dc74c3408cafe64eda85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_26a49a612b5d69e7a69af679c99ef1e1c6ec4fcb7b2c0348fa200d542bfbf71e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a49a612b5d69e7a69af679c99ef1e1c6ec4fcb7b2c0348fa200d542bfbf71e->enter($__internal_26a49a612b5d69e7a69af679c99ef1e1c6ec4fcb7b2c0348fa200d542bfbf71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_26a49a612b5d69e7a69af679c99ef1e1c6ec4fcb7b2c0348fa200d542bfbf71e->leave($__internal_26a49a612b5d69e7a69af679c99ef1e1c6ec4fcb7b2c0348fa200d542bfbf71e_prof);

        
        $__internal_f4c43114c7c17a80ac2ab7c8523b4ac218af3eb67ae1dc74c3408cafe64eda85->leave($__internal_f4c43114c7c17a80ac2ab7c8523b4ac218af3eb67ae1dc74c3408cafe64eda85_prof);

    }

    // line 41
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_473aaebe32b40580d0518b8a28f2a2977ad5e1821d5bd67258564ff762da5a92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_473aaebe32b40580d0518b8a28f2a2977ad5e1821d5bd67258564ff762da5a92->enter($__internal_473aaebe32b40580d0518b8a28f2a2977ad5e1821d5bd67258564ff762da5a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_f78998cfd549453bc6b4355a711f0e6de5a6ec146163743840b631918b74d9d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f78998cfd549453bc6b4355a711f0e6de5a6ec146163743840b631918b74d9d3->enter($__internal_f78998cfd549453bc6b4355a711f0e6de5a6ec146163743840b631918b74d9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_f78998cfd549453bc6b4355a711f0e6de5a6ec146163743840b631918b74d9d3->leave($__internal_f78998cfd549453bc6b4355a711f0e6de5a6ec146163743840b631918b74d9d3_prof);

        
        $__internal_473aaebe32b40580d0518b8a28f2a2977ad5e1821d5bd67258564ff762da5a92->leave($__internal_473aaebe32b40580d0518b8a28f2a2977ad5e1821d5bd67258564ff762da5a92_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3c1f16a85a09e38c7c16e90f260e31ffbe727df6a351029d15f197ac181c6c87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c1f16a85a09e38c7c16e90f260e31ffbe727df6a351029d15f197ac181c6c87->enter($__internal_3c1f16a85a09e38c7c16e90f260e31ffbe727df6a351029d15f197ac181c6c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_73b96251b07cebca3c9691277ca9d20c437f754a70dd33a3f27b951fa08f8c0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73b96251b07cebca3c9691277ca9d20c437f754a70dd33a3f27b951fa08f8c0e->enter($__internal_73b96251b07cebca3c9691277ca9d20c437f754a70dd33a3f27b951fa08f8c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_73b96251b07cebca3c9691277ca9d20c437f754a70dd33a3f27b951fa08f8c0e->leave($__internal_73b96251b07cebca3c9691277ca9d20c437f754a70dd33a3f27b951fa08f8c0e_prof);

        
        $__internal_3c1f16a85a09e38c7c16e90f260e31ffbe727df6a351029d15f197ac181c6c87->leave($__internal_3c1f16a85a09e38c7c16e90f260e31ffbe727df6a351029d15f197ac181c6c87_prof);

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
