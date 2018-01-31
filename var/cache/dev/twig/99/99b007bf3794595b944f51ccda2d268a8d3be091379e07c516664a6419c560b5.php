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
        $__internal_6792d0e9148416c58bcf615511b725a69510de2117ba2ec7b034ba54d87e4d4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6792d0e9148416c58bcf615511b725a69510de2117ba2ec7b034ba54d87e4d4e->enter($__internal_6792d0e9148416c58bcf615511b725a69510de2117ba2ec7b034ba54d87e4d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "masterList/masterListEdit.html.twig"));

        $__internal_c009fd5506170ee4f8f1ad10db693d5521f33e1212a7ffe5f8a1bdf51f0f5fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c009fd5506170ee4f8f1ad10db693d5521f33e1212a7ffe5f8a1bdf51f0f5fc5->enter($__internal_c009fd5506170ee4f8f1ad10db693d5521f33e1212a7ffe5f8a1bdf51f0f5fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "masterList/masterListEdit.html.twig"));

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
        
        $__internal_6792d0e9148416c58bcf615511b725a69510de2117ba2ec7b034ba54d87e4d4e->leave($__internal_6792d0e9148416c58bcf615511b725a69510de2117ba2ec7b034ba54d87e4d4e_prof);

        
        $__internal_c009fd5506170ee4f8f1ad10db693d5521f33e1212a7ffe5f8a1bdf51f0f5fc5->leave($__internal_c009fd5506170ee4f8f1ad10db693d5521f33e1212a7ffe5f8a1bdf51f0f5fc5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4371ed353979d7fa46077c1f45cd7d04bf0ebdc89c36bac2c33d751fa5199aaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4371ed353979d7fa46077c1f45cd7d04bf0ebdc89c36bac2c33d751fa5199aaf->enter($__internal_4371ed353979d7fa46077c1f45cd7d04bf0ebdc89c36bac2c33d751fa5199aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b13e867c0c755db85e41a55064c0fb6a51995003ca02d39be1c83da6e53b2e63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b13e867c0c755db85e41a55064c0fb6a51995003ca02d39be1c83da6e53b2e63->enter($__internal_b13e867c0c755db85e41a55064c0fb6a51995003ca02d39be1c83da6e53b2e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper | Master Listing Edit";
        
        $__internal_b13e867c0c755db85e41a55064c0fb6a51995003ca02d39be1c83da6e53b2e63->leave($__internal_b13e867c0c755db85e41a55064c0fb6a51995003ca02d39be1c83da6e53b2e63_prof);

        
        $__internal_4371ed353979d7fa46077c1f45cd7d04bf0ebdc89c36bac2c33d751fa5199aaf->leave($__internal_4371ed353979d7fa46077c1f45cd7d04bf0ebdc89c36bac2c33d751fa5199aaf_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6926d096cb0cf0a721b0a80648eee20eb812333f15d536adfdb206d0ebc5ad10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6926d096cb0cf0a721b0a80648eee20eb812333f15d536adfdb206d0ebc5ad10->enter($__internal_6926d096cb0cf0a721b0a80648eee20eb812333f15d536adfdb206d0ebc5ad10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9c0f94604248371093aa6dde720067ed5d12bbdcd11634eba4570d26b1c24d39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c0f94604248371093aa6dde720067ed5d12bbdcd11634eba4570d26b1c24d39->enter($__internal_9c0f94604248371093aa6dde720067ed5d12bbdcd11634eba4570d26b1c24d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9c0f94604248371093aa6dde720067ed5d12bbdcd11634eba4570d26b1c24d39->leave($__internal_9c0f94604248371093aa6dde720067ed5d12bbdcd11634eba4570d26b1c24d39_prof);

        
        $__internal_6926d096cb0cf0a721b0a80648eee20eb812333f15d536adfdb206d0ebc5ad10->leave($__internal_6926d096cb0cf0a721b0a80648eee20eb812333f15d536adfdb206d0ebc5ad10_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_afe69c851bb56945d77a5abbc832abe607f1b0e383d9d56daec35c6f44cd348c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afe69c851bb56945d77a5abbc832abe607f1b0e383d9d56daec35c6f44cd348c->enter($__internal_afe69c851bb56945d77a5abbc832abe607f1b0e383d9d56daec35c6f44cd348c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_829b7f8a2af930881c657f42421d06f866569bea4d5da353107c013550392f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_829b7f8a2af930881c657f42421d06f866569bea4d5da353107c013550392f15->enter($__internal_829b7f8a2af930881c657f42421d06f866569bea4d5da353107c013550392f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "    <!-- Scripts -->
    <script src=\"../assets/js/core.min.js\"></script>
    <script src=\"../assets/js/app.min.js\"></script>
    <script src=\"../assets/js/script.min.js\"></script>
";
        
        $__internal_829b7f8a2af930881c657f42421d06f866569bea4d5da353107c013550392f15->leave($__internal_829b7f8a2af930881c657f42421d06f866569bea4d5da353107c013550392f15_prof);

        
        $__internal_afe69c851bb56945d77a5abbc832abe607f1b0e383d9d56daec35c6f44cd348c->leave($__internal_afe69c851bb56945d77a5abbc832abe607f1b0e383d9d56daec35c6f44cd348c_prof);

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
