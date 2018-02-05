<?php

/* default/password-recovery.html.twig */
class __TwigTemplate_ee195e835b2e93a625628dc88b91bf98e78203fa5fcf6047c96740a0740f2d22 extends Twig_Template
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
        $__internal_071353f4b5a1dfaff8dc43faf977013f7daae00a9573a817ac6cd438714e7c54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_071353f4b5a1dfaff8dc43faf977013f7daae00a9573a817ac6cd438714e7c54->enter($__internal_071353f4b5a1dfaff8dc43faf977013f7daae00a9573a817ac6cd438714e7c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/password-recovery.html.twig"));

        $__internal_5c1feff6fbb6db1f64f7e44852580b9e92d7b70b955e1b4a8a0140cc1dd754fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c1feff6fbb6db1f64f7e44852580b9e92d7b70b955e1b4a8a0140cc1dd754fb->enter($__internal_5c1feff6fbb6db1f64f7e44852580b9e92d7b70b955e1b4a8a0140cc1dd754fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/password-recovery.html.twig"));

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
        
        $__internal_071353f4b5a1dfaff8dc43faf977013f7daae00a9573a817ac6cd438714e7c54->leave($__internal_071353f4b5a1dfaff8dc43faf977013f7daae00a9573a817ac6cd438714e7c54_prof);

        
        $__internal_5c1feff6fbb6db1f64f7e44852580b9e92d7b70b955e1b4a8a0140cc1dd754fb->leave($__internal_5c1feff6fbb6db1f64f7e44852580b9e92d7b70b955e1b4a8a0140cc1dd754fb_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c3c58a4140a1c6c5371e796d0edfca212787c2e9f507ffba098b83021a45fcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c3c58a4140a1c6c5371e796d0edfca212787c2e9f507ffba098b83021a45fcb->enter($__internal_8c3c58a4140a1c6c5371e796d0edfca212787c2e9f507ffba098b83021a45fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bc7ac42b7f2a8be92760262e9bb1112877b5a7a8fefcff602f3cf20eaa671a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc7ac42b7f2a8be92760262e9bb1112877b5a7a8fefcff602f3cf20eaa671a46->enter($__internal_bc7ac42b7f2a8be92760262e9bb1112877b5a7a8fefcff602f3cf20eaa671a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchByAmazon | Login";
        
        $__internal_bc7ac42b7f2a8be92760262e9bb1112877b5a7a8fefcff602f3cf20eaa671a46->leave($__internal_bc7ac42b7f2a8be92760262e9bb1112877b5a7a8fefcff602f3cf20eaa671a46_prof);

        
        $__internal_8c3c58a4140a1c6c5371e796d0edfca212787c2e9f507ffba098b83021a45fcb->leave($__internal_8c3c58a4140a1c6c5371e796d0edfca212787c2e9f507ffba098b83021a45fcb_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_34e88833ba330a0d44aa3d2dce13570b8fe35f1bab890b827215b977b996769b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34e88833ba330a0d44aa3d2dce13570b8fe35f1bab890b827215b977b996769b->enter($__internal_34e88833ba330a0d44aa3d2dce13570b8fe35f1bab890b827215b977b996769b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_52ab764789085642c12a19c75aacccd489049a8822d5d4efdc53e4976fcd768c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52ab764789085642c12a19c75aacccd489049a8822d5d4efdc53e4976fcd768c->enter($__internal_52ab764789085642c12a19c75aacccd489049a8822d5d4efdc53e4976fcd768c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
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
        
        $__internal_52ab764789085642c12a19c75aacccd489049a8822d5d4efdc53e4976fcd768c->leave($__internal_52ab764789085642c12a19c75aacccd489049a8822d5d4efdc53e4976fcd768c_prof);

        
        $__internal_34e88833ba330a0d44aa3d2dce13570b8fe35f1bab890b827215b977b996769b->leave($__internal_34e88833ba330a0d44aa3d2dce13570b8fe35f1bab890b827215b977b996769b_prof);

    }

    // line 42
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_80dfba0d0aa0da6c1020964ae3140360cdcdd20ccb7c4041418c9a3bbc7f6680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80dfba0d0aa0da6c1020964ae3140360cdcdd20ccb7c4041418c9a3bbc7f6680->enter($__internal_80dfba0d0aa0da6c1020964ae3140360cdcdd20ccb7c4041418c9a3bbc7f6680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_aeb7b3a299fa7293d4cf4dc5da8218f1ab62faabc5ac0a920c55af388d459d60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeb7b3a299fa7293d4cf4dc5da8218f1ab62faabc5ac0a920c55af388d459d60->enter($__internal_aeb7b3a299fa7293d4cf4dc5da8218f1ab62faabc5ac0a920c55af388d459d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 43
        echo "    <div class=\"p-3 mb-2 text-white container col-3\" id=\"logIn_form\" style=\"margin: 0 auto;\">
            <div class=\"form-group\">
                ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->getSourceContext()); })()), 'form_start');
        echo "
                <label  style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left;\" for=\"username\">Password:</label>
                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()), "plainPassword", array()), "first", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                </br>
                <label  style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left;\" for=\"username\">Repeat Password:</label>
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), "plainPassword", array()), "second", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                </br>
                <button type=\"submit\" class=\"btn btn-info\">Save!</button>
                ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), 'form_end');
        echo "
            </div>
    </div>
</div>
";
        
        $__internal_aeb7b3a299fa7293d4cf4dc5da8218f1ab62faabc5ac0a920c55af388d459d60->leave($__internal_aeb7b3a299fa7293d4cf4dc5da8218f1ab62faabc5ac0a920c55af388d459d60_prof);

        
        $__internal_80dfba0d0aa0da6c1020964ae3140360cdcdd20ccb7c4041418c9a3bbc7f6680->leave($__internal_80dfba0d0aa0da6c1020964ae3140360cdcdd20ccb7c4041418c9a3bbc7f6680_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e8147de432dac0f055c24d4ccf4527100df0bc27885482e980bb0e9d89fc94c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8147de432dac0f055c24d4ccf4527100df0bc27885482e980bb0e9d89fc94c0->enter($__internal_e8147de432dac0f055c24d4ccf4527100df0bc27885482e980bb0e9d89fc94c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_76c46941758034edf23710bad700848c9cd49c26730b783198dd4136f6b29e85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76c46941758034edf23710bad700848c9cd49c26730b783198dd4136f6b29e85->enter($__internal_76c46941758034edf23710bad700848c9cd49c26730b783198dd4136f6b29e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "    <!-- Scripts -->
    <script src=\"../assets/js/core.min.js\"></script>
    <script src=\"../assets/js/app.min.js\"></script>
    <script src=\"../assets/js/script.min.js\"></script>
";
        
        $__internal_76c46941758034edf23710bad700848c9cd49c26730b783198dd4136f6b29e85->leave($__internal_76c46941758034edf23710bad700848c9cd49c26730b783198dd4136f6b29e85_prof);

        
        $__internal_e8147de432dac0f055c24d4ccf4527100df0bc27885482e980bb0e9d89fc94c0->leave($__internal_e8147de432dac0f055c24d4ccf4527100df0bc27885482e980bb0e9d89fc94c0_prof);

    }

    public function getTemplateName()
    {
        return "default/password-recovery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 61,  182 => 60,  167 => 53,  161 => 50,  155 => 47,  150 => 45,  146 => 43,  137 => 42,  115 => 11,  106 => 10,  88 => 6,  76 => 66,  74 => 60,  70 => 58,  68 => 42,  58 => 35,  45 => 24,  43 => 10,  36 => 6,  29 => 1,);
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
                {{ form_start(form) }}
                <label  style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left;\" for=\"username\">Password:</label>
                {{ form_row(form.plainPassword.first, { 'attr': {'class': 'form-control'} }) }}
                </br>
                <label  style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left;\" for=\"username\">Repeat Password:</label>
                {{ form_row(form.plainPassword.second, { 'attr': {'class': 'form-control'} }) }}
                </br>
                <button type=\"submit\" class=\"btn btn-info\">Save!</button>
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
</html>", "default/password-recovery.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\default\\password-recovery.html.twig");
    }
}
