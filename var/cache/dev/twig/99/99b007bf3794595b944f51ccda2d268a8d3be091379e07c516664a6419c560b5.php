<?php

/* masterList/masterListEdit.html.twig */
class __TwigTemplate_c86fdcf53a52c5f370578ae4b6689b34a2a11036d54b3cd6e8b1a83b8d5fa849 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7eca2652fc1ff62191835433d26fe2198c3e903cc8adee23e799c3e7ef4002c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7eca2652fc1ff62191835433d26fe2198c3e903cc8adee23e799c3e7ef4002c->enter($__internal_d7eca2652fc1ff62191835433d26fe2198c3e903cc8adee23e799c3e7ef4002c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "masterList/masterListEdit.html.twig"));

        $__internal_2c34f790393a5dda1605e3714c7b36be6e341365298a5f6771b1155ecea05c62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c34f790393a5dda1605e3714c7b36be6e341365298a5f6771b1155ecea05c62->enter($__internal_2c34f790393a5dda1605e3714c7b36be6e341365298a5f6771b1155ecea05c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "masterList/masterListEdit.html.twig"));

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
        <a class=\"navbar-brand\" href=\"#\">MerchByAmazon Master Listing Editor</a>
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
<div class=\"container-fluid\">

    <div class=\"row\">
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

            <br>
            <button type=\"submit\" class=\"btn btn-info\" style=\"margin-top: 15px\">Save</button>
            ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->getSourceContext()); })()), 'form_end');
        echo "
        </div>
        <div id=\"preview\" class=\"col-md-4\">
            <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/image/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["master"]) || array_key_exists("master", $context) ? $context["master"] : (function () { throw new Twig_Error_Runtime('Variable "master" does not exist.', 57, $this->getSourceContext()); })()), "filename", array()))), "html", null, true);
        echo "\">
            <figcaption style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529;\">Preview PNG</figcaption>
        </div>
    </div>

</div>




";
        // line 67
        $this->displayBlock('javascripts', $context, $blocks);
        // line 73
        echo "</div>
</body>
</html>";
        
        $__internal_d7eca2652fc1ff62191835433d26fe2198c3e903cc8adee23e799c3e7ef4002c->leave($__internal_d7eca2652fc1ff62191835433d26fe2198c3e903cc8adee23e799c3e7ef4002c_prof);

        
        $__internal_2c34f790393a5dda1605e3714c7b36be6e341365298a5f6771b1155ecea05c62->leave($__internal_2c34f790393a5dda1605e3714c7b36be6e341365298a5f6771b1155ecea05c62_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5dcd80e2a37edf1bcb3473d6299acab4c46bb03929a20239f97656c710f123c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dcd80e2a37edf1bcb3473d6299acab4c46bb03929a20239f97656c710f123c6->enter($__internal_5dcd80e2a37edf1bcb3473d6299acab4c46bb03929a20239f97656c710f123c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8dd1f6569a6139f9902c8cf4a62e9a12751ee92ebb8ed5bc461efd2020c5ca9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd1f6569a6139f9902c8cf4a62e9a12751ee92ebb8ed5bc461efd2020c5ca9a->enter($__internal_8dd1f6569a6139f9902c8cf4a62e9a12751ee92ebb8ed5bc461efd2020c5ca9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper | Master Listing Editor";
        
        $__internal_8dd1f6569a6139f9902c8cf4a62e9a12751ee92ebb8ed5bc461efd2020c5ca9a->leave($__internal_8dd1f6569a6139f9902c8cf4a62e9a12751ee92ebb8ed5bc461efd2020c5ca9a_prof);

        
        $__internal_5dcd80e2a37edf1bcb3473d6299acab4c46bb03929a20239f97656c710f123c6->leave($__internal_5dcd80e2a37edf1bcb3473d6299acab4c46bb03929a20239f97656c710f123c6_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b85e488e8d7a5a7f1f09d584b3a6357ed23b7f3a6b92094409690be5167510d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b85e488e8d7a5a7f1f09d584b3a6357ed23b7f3a6b92094409690be5167510d8->enter($__internal_b85e488e8d7a5a7f1f09d584b3a6357ed23b7f3a6b92094409690be5167510d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_be1f13a7f6e6de7550581177f029d7b8cd3d03a0d5a0689dd8bfbe7ed973dcfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be1f13a7f6e6de7550581177f029d7b8cd3d03a0d5a0689dd8bfbe7ed973dcfa->enter($__internal_be1f13a7f6e6de7550581177f029d7b8cd3d03a0d5a0689dd8bfbe7ed973dcfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <!-- Fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i\" rel=\"stylesheet\">

        <!-- Styles -->
        <link href=\"../assets/css/core.min.css\" rel=\"stylesheet\">
        <link href=\"../assets/css/app.min.css\" rel=\"stylesheet\">
        <link href=\"../assets/css/style.min.css\" rel=\"stylesheet\">
        <link href=\"../assets/css/main.css\" rel=\"stylesheet\">

        <!-- Favicons -->
        <link rel=\"apple-touch-icon\" href=\"../assets/img/apple-touch-icon.png\">
        <link rel=\"icon\" href=\"../assets/img/favicon.png\">
    ";
        
        $__internal_be1f13a7f6e6de7550581177f029d7b8cd3d03a0d5a0689dd8bfbe7ed973dcfa->leave($__internal_be1f13a7f6e6de7550581177f029d7b8cd3d03a0d5a0689dd8bfbe7ed973dcfa_prof);

        
        $__internal_b85e488e8d7a5a7f1f09d584b3a6357ed23b7f3a6b92094409690be5167510d8->leave($__internal_b85e488e8d7a5a7f1f09d584b3a6357ed23b7f3a6b92094409690be5167510d8_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_24896759bab9af511c85b52bdaa15a9bc4c54ba8d3cff2c708e92df5e87836b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24896759bab9af511c85b52bdaa15a9bc4c54ba8d3cff2c708e92df5e87836b0->enter($__internal_24896759bab9af511c85b52bdaa15a9bc4c54ba8d3cff2c708e92df5e87836b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5372ddd6d90d152ffe709b4a8185a7c87240d0a413a1b8d2cc1d44289fc22372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5372ddd6d90d152ffe709b4a8185a7c87240d0a413a1b8d2cc1d44289fc22372->enter($__internal_5372ddd6d90d152ffe709b4a8185a7c87240d0a413a1b8d2cc1d44289fc22372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "    <!-- Scripts -->
    <script src=\"../assets/js/core.min.js\"></script>
    <script src=\"../assets/js/app.min.js\"></script>
    <script src=\"../assets/js/script.min.js\"></script>
";
        
        $__internal_5372ddd6d90d152ffe709b4a8185a7c87240d0a413a1b8d2cc1d44289fc22372->leave($__internal_5372ddd6d90d152ffe709b4a8185a7c87240d0a413a1b8d2cc1d44289fc22372_prof);

        
        $__internal_24896759bab9af511c85b52bdaa15a9bc4c54ba8d3cff2c708e92df5e87836b0->leave($__internal_24896759bab9af511c85b52bdaa15a9bc4c54ba8d3cff2c708e92df5e87836b0_prof);

    }

    public function getTemplateName()
    {
        return "masterList/masterListEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 68,  176 => 67,  154 => 10,  145 => 9,  127 => 5,  115 => 73,  113 => 67,  100 => 57,  94 => 54,  87 => 50,  83 => 49,  79 => 48,  74 => 46,  69 => 44,  56 => 34,  43 => 23,  41 => 9,  34 => 5,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>{% block title %}MerchHelper | Master Listing Editor{% endblock %}</title>
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    {% block stylesheets %}
        <!-- Fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i\" rel=\"stylesheet\">

        <!-- Styles -->
        <link href=\"../assets/css/core.min.css\" rel=\"stylesheet\">
        <link href=\"../assets/css/app.min.css\" rel=\"stylesheet\">
        <link href=\"../assets/css/style.min.css\" rel=\"stylesheet\">
        <link href=\"../assets/css/main.css\" rel=\"stylesheet\">

        <!-- Favicons -->
        <link rel=\"apple-touch-icon\" href=\"../assets/img/apple-touch-icon.png\">
        <link rel=\"icon\" href=\"../assets/img/favicon.png\">
    {% endblock %}
</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"#\">MerchByAmazon Master Listing Editor</a>
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
<div class=\"container-fluid\">

    <div class=\"row\">
        <div class=\"col-md-4\">
            {{ form_start(form) }}
            <label  style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left;\">Enter Title</label>
            {{ form_row(form.title, { 'attr': {'class': 'form-control'} }) }}
            <label style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left;\">Upload PNG</label>
            {{ form_row(form.filename, { 'attr': {'class': 'form-control'} }) }}
            {{ form_row(form.userId, { 'attr': {'id': 'user_ID'} }) }}
            {{ form_row(form.filename, { 'attr': {'class': 'form-control'} }) }}

            <br>
            <button type=\"submit\" class=\"btn btn-info\" style=\"margin-top: 15px\">Save</button>
            {{ form_end(form) }}
        </div>
        <div id=\"preview\" class=\"col-md-4\">
            <img src=\"{{ asset('uploads/image/' ~ master.filename) }}\">
            <figcaption style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529;\">Preview PNG</figcaption>
        </div>
    </div>

</div>




{% block javascripts %}
    <!-- Scripts -->
    <script src=\"../assets/js/core.min.js\"></script>
    <script src=\"../assets/js/app.min.js\"></script>
    <script src=\"../assets/js/script.min.js\"></script>
{% endblock %}
</div>
</body>
</html>", "masterList/masterListEdit.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\masterList\\masterListEdit.html.twig");
    }
}
