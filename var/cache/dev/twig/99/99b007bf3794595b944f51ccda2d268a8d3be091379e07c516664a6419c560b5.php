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
        $__internal_97cf5228c5ba2edb50ccd2d51654343517578a93634b7352597fad9ffe25f424 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97cf5228c5ba2edb50ccd2d51654343517578a93634b7352597fad9ffe25f424->enter($__internal_97cf5228c5ba2edb50ccd2d51654343517578a93634b7352597fad9ffe25f424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "masterList/masterListEdit.html.twig"));

        $__internal_8ed8e9e3ba442282b8383d938b64500372547cfbbcfd144e883cf7dde347f6aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed8e9e3ba442282b8383d938b64500372547cfbbcfd144e883cf7dde347f6aa->enter($__internal_8ed8e9e3ba442282b8383d938b64500372547cfbbcfd144e883cf7dde347f6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "masterList/masterListEdit.html.twig"));

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
        
        $__internal_97cf5228c5ba2edb50ccd2d51654343517578a93634b7352597fad9ffe25f424->leave($__internal_97cf5228c5ba2edb50ccd2d51654343517578a93634b7352597fad9ffe25f424_prof);

        
        $__internal_8ed8e9e3ba442282b8383d938b64500372547cfbbcfd144e883cf7dde347f6aa->leave($__internal_8ed8e9e3ba442282b8383d938b64500372547cfbbcfd144e883cf7dde347f6aa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0bc205e1d410f1b15b2d6546419531c349711db9b0e11aae39af3a99b6085365 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bc205e1d410f1b15b2d6546419531c349711db9b0e11aae39af3a99b6085365->enter($__internal_0bc205e1d410f1b15b2d6546419531c349711db9b0e11aae39af3a99b6085365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7987436c483e3aff3a9c6f38b04b0505cea89af3933224022909a36e1f976704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7987436c483e3aff3a9c6f38b04b0505cea89af3933224022909a36e1f976704->enter($__internal_7987436c483e3aff3a9c6f38b04b0505cea89af3933224022909a36e1f976704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper | Master Listing Editor";
        
        $__internal_7987436c483e3aff3a9c6f38b04b0505cea89af3933224022909a36e1f976704->leave($__internal_7987436c483e3aff3a9c6f38b04b0505cea89af3933224022909a36e1f976704_prof);

        
        $__internal_0bc205e1d410f1b15b2d6546419531c349711db9b0e11aae39af3a99b6085365->leave($__internal_0bc205e1d410f1b15b2d6546419531c349711db9b0e11aae39af3a99b6085365_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0cc27f8814ee727d37d12cf44246b668d8839b49a90ef9cfe6d13c35730362de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cc27f8814ee727d37d12cf44246b668d8839b49a90ef9cfe6d13c35730362de->enter($__internal_0cc27f8814ee727d37d12cf44246b668d8839b49a90ef9cfe6d13c35730362de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1e8a33a146bcb479d02c29448474ce48337f82892a266c5c525a3f6de4a8ee69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e8a33a146bcb479d02c29448474ce48337f82892a266c5c525a3f6de4a8ee69->enter($__internal_1e8a33a146bcb479d02c29448474ce48337f82892a266c5c525a3f6de4a8ee69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1e8a33a146bcb479d02c29448474ce48337f82892a266c5c525a3f6de4a8ee69->leave($__internal_1e8a33a146bcb479d02c29448474ce48337f82892a266c5c525a3f6de4a8ee69_prof);

        
        $__internal_0cc27f8814ee727d37d12cf44246b668d8839b49a90ef9cfe6d13c35730362de->leave($__internal_0cc27f8814ee727d37d12cf44246b668d8839b49a90ef9cfe6d13c35730362de_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5479f1b97c61256e46d068e388f03a333f1ec27ecfd20413143e648384ba3b36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5479f1b97c61256e46d068e388f03a333f1ec27ecfd20413143e648384ba3b36->enter($__internal_5479f1b97c61256e46d068e388f03a333f1ec27ecfd20413143e648384ba3b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_823b391cbe72d14de7c95ff46e414bda2aeafe16602c12ba242064456ab8574f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_823b391cbe72d14de7c95ff46e414bda2aeafe16602c12ba242064456ab8574f->enter($__internal_823b391cbe72d14de7c95ff46e414bda2aeafe16602c12ba242064456ab8574f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "    <!-- Scripts -->
    <script src=\"../assets/js/core.min.js\"></script>
    <script src=\"../assets/js/app.min.js\"></script>
    <script src=\"../assets/js/script.min.js\"></script>
";
        
        $__internal_823b391cbe72d14de7c95ff46e414bda2aeafe16602c12ba242064456ab8574f->leave($__internal_823b391cbe72d14de7c95ff46e414bda2aeafe16602c12ba242064456ab8574f_prof);

        
        $__internal_5479f1b97c61256e46d068e388f03a333f1ec27ecfd20413143e648384ba3b36->leave($__internal_5479f1b97c61256e46d068e388f03a333f1ec27ecfd20413143e648384ba3b36_prof);

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
