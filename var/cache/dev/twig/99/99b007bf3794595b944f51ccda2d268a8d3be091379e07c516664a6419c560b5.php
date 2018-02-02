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
        $__internal_ffc5db2b40d6146181d5361434846f43a64f05febe3c47373b4f1530957bd6fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffc5db2b40d6146181d5361434846f43a64f05febe3c47373b4f1530957bd6fa->enter($__internal_ffc5db2b40d6146181d5361434846f43a64f05febe3c47373b4f1530957bd6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "masterList/masterListEdit.html.twig"));

        $__internal_a1dad784287cc2b63e7ef7c6eb403d6186f1ebcc1f9b0de8c7c352d39b495793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1dad784287cc2b63e7ef7c6eb403d6186f1ebcc1f9b0de8c7c352d39b495793->enter($__internal_a1dad784287cc2b63e7ef7c6eb403d6186f1ebcc1f9b0de8c7c352d39b495793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "masterList/masterListEdit.html.twig"));

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
            ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->getSourceContext()); })()), 'form_end');
        echo "
            <br>
            <button type=\"submit\" class=\"btn btn-info\" style=\"margin-top: 15px\">Save</button>
        </div>
        <div id=\"preview\" class=\"col-md-4\">
            <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/image/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["master"]) || array_key_exists("master", $context) ? $context["master"] : (function () { throw new Twig_Error_Runtime('Variable "master" does not exist.', 56, $this->getSourceContext()); })()), "filename", array()))), "html", null, true);
        echo "\">
            <figcaption style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529;\">Preview PNG</figcaption>
        </div>
    </div>

</div>




";
        // line 66
        $this->displayBlock('javascripts', $context, $blocks);
        // line 72
        echo "</div>
</body>
</html>";
        
        $__internal_ffc5db2b40d6146181d5361434846f43a64f05febe3c47373b4f1530957bd6fa->leave($__internal_ffc5db2b40d6146181d5361434846f43a64f05febe3c47373b4f1530957bd6fa_prof);

        
        $__internal_a1dad784287cc2b63e7ef7c6eb403d6186f1ebcc1f9b0de8c7c352d39b495793->leave($__internal_a1dad784287cc2b63e7ef7c6eb403d6186f1ebcc1f9b0de8c7c352d39b495793_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0016ed5632fd2a40126ea5014b72a274979cdf5ab24bfec76a5eef1c6b7f31aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0016ed5632fd2a40126ea5014b72a274979cdf5ab24bfec76a5eef1c6b7f31aa->enter($__internal_0016ed5632fd2a40126ea5014b72a274979cdf5ab24bfec76a5eef1c6b7f31aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_508fb14941cfdb1bea08a44aa2c60ae940a226fe0f079da70f49b858f90af635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_508fb14941cfdb1bea08a44aa2c60ae940a226fe0f079da70f49b858f90af635->enter($__internal_508fb14941cfdb1bea08a44aa2c60ae940a226fe0f079da70f49b858f90af635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper | Master Listing Editor";
        
        $__internal_508fb14941cfdb1bea08a44aa2c60ae940a226fe0f079da70f49b858f90af635->leave($__internal_508fb14941cfdb1bea08a44aa2c60ae940a226fe0f079da70f49b858f90af635_prof);

        
        $__internal_0016ed5632fd2a40126ea5014b72a274979cdf5ab24bfec76a5eef1c6b7f31aa->leave($__internal_0016ed5632fd2a40126ea5014b72a274979cdf5ab24bfec76a5eef1c6b7f31aa_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_66988228b450691db997acd6dab65c3e9ce0f1d15ac399115b0cac391602e1e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66988228b450691db997acd6dab65c3e9ce0f1d15ac399115b0cac391602e1e6->enter($__internal_66988228b450691db997acd6dab65c3e9ce0f1d15ac399115b0cac391602e1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6158574e58f3aab2ac6a2536b080794f1a23eabebe2b5de5f74b9e9d3be3e254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6158574e58f3aab2ac6a2536b080794f1a23eabebe2b5de5f74b9e9d3be3e254->enter($__internal_6158574e58f3aab2ac6a2536b080794f1a23eabebe2b5de5f74b9e9d3be3e254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6158574e58f3aab2ac6a2536b080794f1a23eabebe2b5de5f74b9e9d3be3e254->leave($__internal_6158574e58f3aab2ac6a2536b080794f1a23eabebe2b5de5f74b9e9d3be3e254_prof);

        
        $__internal_66988228b450691db997acd6dab65c3e9ce0f1d15ac399115b0cac391602e1e6->leave($__internal_66988228b450691db997acd6dab65c3e9ce0f1d15ac399115b0cac391602e1e6_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c8617081a851f979ee1105c5b28867e777019a20a6251e7f34ccd7ff90fe7ab7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8617081a851f979ee1105c5b28867e777019a20a6251e7f34ccd7ff90fe7ab7->enter($__internal_c8617081a851f979ee1105c5b28867e777019a20a6251e7f34ccd7ff90fe7ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_505b5c92d61d51acf493bb076ad524c00a8b74bc0405b09d884f5af563fc6ef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_505b5c92d61d51acf493bb076ad524c00a8b74bc0405b09d884f5af563fc6ef2->enter($__internal_505b5c92d61d51acf493bb076ad524c00a8b74bc0405b09d884f5af563fc6ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "    <!-- Scripts -->
    <script src=\"../assets/js/core.min.js\"></script>
    <script src=\"../assets/js/app.min.js\"></script>
    <script src=\"../assets/js/script.min.js\"></script>
";
        
        $__internal_505b5c92d61d51acf493bb076ad524c00a8b74bc0405b09d884f5af563fc6ef2->leave($__internal_505b5c92d61d51acf493bb076ad524c00a8b74bc0405b09d884f5af563fc6ef2_prof);

        
        $__internal_c8617081a851f979ee1105c5b28867e777019a20a6251e7f34ccd7ff90fe7ab7->leave($__internal_c8617081a851f979ee1105c5b28867e777019a20a6251e7f34ccd7ff90fe7ab7_prof);

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
        return array (  184 => 67,  175 => 66,  153 => 10,  144 => 9,  126 => 5,  114 => 72,  112 => 66,  99 => 56,  91 => 51,  87 => 50,  83 => 49,  79 => 48,  74 => 46,  69 => 44,  56 => 34,  43 => 23,  41 => 9,  34 => 5,  28 => 1,);
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
            {{ form_end(form) }}
            <br>
            <button type=\"submit\" class=\"btn btn-info\" style=\"margin-top: 15px\">Save</button>
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
