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
            'navigation' => array($this, 'block_navigation'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b98fe1ef03903546bda5c34d9d0ffeae14904891f672cc8d13ab7427b0790321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b98fe1ef03903546bda5c34d9d0ffeae14904891f672cc8d13ab7427b0790321->enter($__internal_b98fe1ef03903546bda5c34d9d0ffeae14904891f672cc8d13ab7427b0790321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "masterList/masterListEdit.html.twig"));

        $__internal_7e77b26e2483af278683dedd0690ae1e3f898af56e84edf3b0f29f70a5a45bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e77b26e2483af278683dedd0690ae1e3f898af56e84edf3b0f29f70a5a45bb9->enter($__internal_7e77b26e2483af278683dedd0690ae1e3f898af56e84edf3b0f29f70a5a45bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "masterList/masterListEdit.html.twig"));

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
        // line 47
        echo "

";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "</div>
</body>
</html>";
        
        $__internal_b98fe1ef03903546bda5c34d9d0ffeae14904891f672cc8d13ab7427b0790321->leave($__internal_b98fe1ef03903546bda5c34d9d0ffeae14904891f672cc8d13ab7427b0790321_prof);

        
        $__internal_7e77b26e2483af278683dedd0690ae1e3f898af56e84edf3b0f29f70a5a45bb9->leave($__internal_7e77b26e2483af278683dedd0690ae1e3f898af56e84edf3b0f29f70a5a45bb9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_df097f1af471d27205c4eeb40a0bd9eb534e94da1b38c60260d987b20a915de7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df097f1af471d27205c4eeb40a0bd9eb534e94da1b38c60260d987b20a915de7->enter($__internal_df097f1af471d27205c4eeb40a0bd9eb534e94da1b38c60260d987b20a915de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d1e7f25028ad2509254a999b5907305ea7b1be9dc7106fef5db6518063788fd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e7f25028ad2509254a999b5907305ea7b1be9dc7106fef5db6518063788fd9->enter($__internal_d1e7f25028ad2509254a999b5907305ea7b1be9dc7106fef5db6518063788fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper | Master Listing Edit";
        
        $__internal_d1e7f25028ad2509254a999b5907305ea7b1be9dc7106fef5db6518063788fd9->leave($__internal_d1e7f25028ad2509254a999b5907305ea7b1be9dc7106fef5db6518063788fd9_prof);

        
        $__internal_df097f1af471d27205c4eeb40a0bd9eb534e94da1b38c60260d987b20a915de7->leave($__internal_df097f1af471d27205c4eeb40a0bd9eb534e94da1b38c60260d987b20a915de7_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_98e9e7f458fe9a99d91fe032555c6fdf563f977feb2d05bede292087887c954f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98e9e7f458fe9a99d91fe032555c6fdf563f977feb2d05bede292087887c954f->enter($__internal_98e9e7f458fe9a99d91fe032555c6fdf563f977feb2d05bede292087887c954f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8f08085921479042fddf7b3f77cab6e62f89f19751b202a7471ebe0a23bea5cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f08085921479042fddf7b3f77cab6e62f89f19751b202a7471ebe0a23bea5cb->enter($__internal_8f08085921479042fddf7b3f77cab6e62f89f19751b202a7471ebe0a23bea5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_8f08085921479042fddf7b3f77cab6e62f89f19751b202a7471ebe0a23bea5cb->leave($__internal_8f08085921479042fddf7b3f77cab6e62f89f19751b202a7471ebe0a23bea5cb_prof);

        
        $__internal_98e9e7f458fe9a99d91fe032555c6fdf563f977feb2d05bede292087887c954f->leave($__internal_98e9e7f458fe9a99d91fe032555c6fdf563f977feb2d05bede292087887c954f_prof);

    }

    // line 26
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_2c750210e9e727217372c4ef96b70ff83bf892a0510d093be82c08625affd8df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c750210e9e727217372c4ef96b70ff83bf892a0510d093be82c08625affd8df->enter($__internal_2c750210e9e727217372c4ef96b70ff83bf892a0510d093be82c08625affd8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_13f2dc42b747d4e6d3426a2c69c6d2605f8a1857ac16747978b7c87564c0b2eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13f2dc42b747d4e6d3426a2c69c6d2605f8a1857ac16747978b7c87564c0b2eb->enter($__internal_13f2dc42b747d4e6d3426a2c69c6d2605f8a1857ac16747978b7c87564c0b2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 27
        echo "    <div class=\"p-3 mb-2 bg-success text-white container col-3\" id=\"logIn_form\" style=\"margin: 0 auto;\">
        <header>
            <h2>Master Listing Edit</h2>
        </header>

            <a class=\"nav-link badge badge-info\" id=\"singUpBtn\" onclick=\"history.back()\" href=\"#\" style=\"color: white\">Back</a>
        <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/image/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["master"]) || array_key_exists("master", $context) ? $context["master"] : (function () { throw new Twig_Error_Runtime('Variable "master" does not exist.', 33, $this->getSourceContext()); })()), "filename", array()))), "html", null, true);
        echo "\">
        <div class=\"form-group\">
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), 'form_start');
        echo "
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "title", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), "title", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->getSourceContext()); })()), "title", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), "userId", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), "filename", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            <button type=\"submit\" class=\"btn btn-info\">Save</button>
            ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'form_end');
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_13f2dc42b747d4e6d3426a2c69c6d2605f8a1857ac16747978b7c87564c0b2eb->leave($__internal_13f2dc42b747d4e6d3426a2c69c6d2605f8a1857ac16747978b7c87564c0b2eb_prof);

        
        $__internal_2c750210e9e727217372c4ef96b70ff83bf892a0510d093be82c08625affd8df->leave($__internal_2c750210e9e727217372c4ef96b70ff83bf892a0510d093be82c08625affd8df_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d8e371c52f5f2261cfb50130c88eb40b7a04d27d915dee7dac512b7b420dfe4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8e371c52f5f2261cfb50130c88eb40b7a04d27d915dee7dac512b7b420dfe4e->enter($__internal_d8e371c52f5f2261cfb50130c88eb40b7a04d27d915dee7dac512b7b420dfe4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a6ceb16cbf4485ac5b35c6221595a045baa56ecb109df513ae38ab3e3e0c5bd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6ceb16cbf4485ac5b35c6221595a045baa56ecb109df513ae38ab3e3e0c5bd1->enter($__internal_a6ceb16cbf4485ac5b35c6221595a045baa56ecb109df513ae38ab3e3e0c5bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "    <!-- Scripts -->
    <script src=\"../assets/js/core.min.js\"></script>
    <script src=\"../assets/js/app.min.js\"></script>
    <script src=\"../assets/js/script.min.js\"></script>
";
        
        $__internal_a6ceb16cbf4485ac5b35c6221595a045baa56ecb109df513ae38ab3e3e0c5bd1->leave($__internal_a6ceb16cbf4485ac5b35c6221595a045baa56ecb109df513ae38ab3e3e0c5bd1_prof);

        
        $__internal_d8e371c52f5f2261cfb50130c88eb40b7a04d27d915dee7dac512b7b420dfe4e->leave($__internal_d8e371c52f5f2261cfb50130c88eb40b7a04d27d915dee7dac512b7b420dfe4e_prof);

    }

    public function getTemplateName()
    {
        return "masterList/masterListEdit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  189 => 50,  180 => 49,  165 => 42,  160 => 40,  156 => 39,  152 => 38,  148 => 37,  144 => 36,  140 => 35,  135 => 33,  127 => 27,  118 => 26,  96 => 10,  87 => 9,  69 => 5,  57 => 55,  55 => 49,  51 => 47,  49 => 26,  44 => 23,  42 => 9,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>{% block title %}MerchHelper | Master Listing Edit{% endblock %}</title>
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
<div class=\"container-fluid\" id=\"main_container\">
    {% block navigation %}
    <div class=\"p-3 mb-2 bg-success text-white container col-3\" id=\"logIn_form\" style=\"margin: 0 auto;\">
        <header>
            <h2>Master Listing Edit</h2>
        </header>

            <a class=\"nav-link badge badge-info\" id=\"singUpBtn\" onclick=\"history.back()\" href=\"#\" style=\"color: white\">Back</a>
        <img src=\"{{ asset('uploads/image/' ~ master.filename) }}\">
        <div class=\"form-group\">
            {{ form_start(form) }}
            {{ form_row(form.title, { 'attr': {'class': 'form-control'} }) }}
            {{ form_row(form.title, { 'attr': {'class': 'form-control'} }) }}
            {{ form_row(form.title, { 'attr': {'class': 'form-control'} }) }}
            {{ form_row(form.userId, { 'attr': {'class': 'form-control'} }) }}
            {{ form_row(form.filename, { 'attr': {'class': 'form-control'} }) }}
            <button type=\"submit\" class=\"btn btn-info\">Save</button>
            {{ form_end(form) }}
        </div>
    </div>
</div>
{% endblock %}


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
