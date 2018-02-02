<?php

/* default/login.html.twig */
class __TwigTemplate_bab45728ef6cf4f9e7abc88f125c05ea643b4e2d88e79243ee2eaf527318adca extends Twig_Template
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
        $__internal_0dba3ffb93706df4c23d00a294bd9f5695c2301ee507cac2078f5a4f613247c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dba3ffb93706df4c23d00a294bd9f5695c2301ee507cac2078f5a4f613247c1->enter($__internal_0dba3ffb93706df4c23d00a294bd9f5695c2301ee507cac2078f5a4f613247c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $__internal_320195437c3772637f368a8b7076219cbe596bc27413216ef24a5da09a268bd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_320195437c3772637f368a8b7076219cbe596bc27413216ef24a5da09a268bd2->enter($__internal_320195437c3772637f368a8b7076219cbe596bc27413216ef24a5da09a268bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

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
        // line 68
        echo "

";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 76
        echo "</div>
</body>
</html>";
        
        $__internal_0dba3ffb93706df4c23d00a294bd9f5695c2301ee507cac2078f5a4f613247c1->leave($__internal_0dba3ffb93706df4c23d00a294bd9f5695c2301ee507cac2078f5a4f613247c1_prof);

        
        $__internal_320195437c3772637f368a8b7076219cbe596bc27413216ef24a5da09a268bd2->leave($__internal_320195437c3772637f368a8b7076219cbe596bc27413216ef24a5da09a268bd2_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ad58db7c70ff82332e1e44221aec95bc851674fa2222b2dd729b6353911e58b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ad58db7c70ff82332e1e44221aec95bc851674fa2222b2dd729b6353911e58b->enter($__internal_7ad58db7c70ff82332e1e44221aec95bc851674fa2222b2dd729b6353911e58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9232116676704429adca9205bc681c69d0dfcd6662db25b34a1819b15bb3e249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9232116676704429adca9205bc681c69d0dfcd6662db25b34a1819b15bb3e249->enter($__internal_9232116676704429adca9205bc681c69d0dfcd6662db25b34a1819b15bb3e249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchByAmazon | Login";
        
        $__internal_9232116676704429adca9205bc681c69d0dfcd6662db25b34a1819b15bb3e249->leave($__internal_9232116676704429adca9205bc681c69d0dfcd6662db25b34a1819b15bb3e249_prof);

        
        $__internal_7ad58db7c70ff82332e1e44221aec95bc851674fa2222b2dd729b6353911e58b->leave($__internal_7ad58db7c70ff82332e1e44221aec95bc851674fa2222b2dd729b6353911e58b_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f2e1862df972e3de9f40e06ddb512c485370ff0e1c543710642f4c825a760b61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2e1862df972e3de9f40e06ddb512c485370ff0e1c543710642f4c825a760b61->enter($__internal_f2e1862df972e3de9f40e06ddb512c485370ff0e1c543710642f4c825a760b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_edf70ace57c59168cfa855691b4e1580240c094778b837f5b46e3ee4674245f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edf70ace57c59168cfa855691b4e1580240c094778b837f5b46e3ee4674245f6->enter($__internal_edf70ace57c59168cfa855691b4e1580240c094778b837f5b46e3ee4674245f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_edf70ace57c59168cfa855691b4e1580240c094778b837f5b46e3ee4674245f6->leave($__internal_edf70ace57c59168cfa855691b4e1580240c094778b837f5b46e3ee4674245f6_prof);

        
        $__internal_f2e1862df972e3de9f40e06ddb512c485370ff0e1c543710642f4c825a760b61->leave($__internal_f2e1862df972e3de9f40e06ddb512c485370ff0e1c543710642f4c825a760b61_prof);

    }

    // line 42
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_73b97b73dfdcc7d78596880e7b5db919115b000ad55145fee5f8dbb10bf14a39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73b97b73dfdcc7d78596880e7b5db919115b000ad55145fee5f8dbb10bf14a39->enter($__internal_73b97b73dfdcc7d78596880e7b5db919115b000ad55145fee5f8dbb10bf14a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_7806a21e22a10d39f669455289529be4b04f74a26662f2439ca1920ce68a87c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7806a21e22a10d39f669455289529be4b04f74a26662f2439ca1920ce68a87c9->enter($__internal_7806a21e22a10d39f669455289529be4b04f74a26662f2439ca1920ce68a87c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 43
        echo "    <div class=\"p-3 mb-2 text-white container col-3\" id=\"logIn_form\" style=\"margin: 0 auto;\">
            <div class=\"form-group\">
                ";
        // line 45
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 45, $this->getSourceContext()); })())) {
            // line 46
            echo "                    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 46, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 46, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 48
        echo "
                <form action=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
                    <label  style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left;\" for=\"username\">Username:</label>
                    <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 51, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
                    </br>
                    <label  style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left;\"  for=\"password\">Password:</label>
                    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" />

                    ";
        // line 61
        echo "                    </br>
                    <button type=\"submit\" class=\"btn btn-info\">Login</button>
                </form>
            </div>
    </div>
</div>
";
        
        $__internal_7806a21e22a10d39f669455289529be4b04f74a26662f2439ca1920ce68a87c9->leave($__internal_7806a21e22a10d39f669455289529be4b04f74a26662f2439ca1920ce68a87c9_prof);

        
        $__internal_73b97b73dfdcc7d78596880e7b5db919115b000ad55145fee5f8dbb10bf14a39->leave($__internal_73b97b73dfdcc7d78596880e7b5db919115b000ad55145fee5f8dbb10bf14a39_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9bc11ec37aa06beaa869bf646390a7cf8dbbf6a77ff882cf6566edc1a1e8e679 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bc11ec37aa06beaa869bf646390a7cf8dbbf6a77ff882cf6566edc1a1e8e679->enter($__internal_9bc11ec37aa06beaa869bf646390a7cf8dbbf6a77ff882cf6566edc1a1e8e679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c1cfd6c660797c0f619bdc341eb955fa4bb5d40ca55c67082cc42d4d39c4c506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1cfd6c660797c0f619bdc341eb955fa4bb5d40ca55c67082cc42d4d39c4c506->enter($__internal_c1cfd6c660797c0f619bdc341eb955fa4bb5d40ca55c67082cc42d4d39c4c506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 71
        echo "    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
";
        
        $__internal_c1cfd6c660797c0f619bdc341eb955fa4bb5d40ca55c67082cc42d4d39c4c506->leave($__internal_c1cfd6c660797c0f619bdc341eb955fa4bb5d40ca55c67082cc42d4d39c4c506_prof);

        
        $__internal_9bc11ec37aa06beaa869bf646390a7cf8dbbf6a77ff882cf6566edc1a1e8e679->leave($__internal_9bc11ec37aa06beaa869bf646390a7cf8dbbf6a77ff882cf6566edc1a1e8e679_prof);

    }

    public function getTemplateName()
    {
        return "default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 71,  190 => 70,  174 => 61,  166 => 51,  161 => 49,  158 => 48,  152 => 46,  150 => 45,  146 => 43,  137 => 42,  115 => 11,  106 => 10,  88 => 6,  76 => 76,  74 => 70,  70 => 68,  68 => 42,  58 => 35,  45 => 24,  43 => 10,  36 => 6,  29 => 1,);
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
                {% if error %}
                    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}

                <form action=\"{{ path('login') }}\" method=\"post\">
                    <label  style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left;\" for=\"username\">Username:</label>
                    <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"{{ last_username }}\" />
                    </br>
                    <label  style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left;\"  for=\"password\">Password:</label>
                    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" />

                    {#
                        If you want to control the URL the user
                        is redirected to on success (more details below)
                        <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
                    #}
                    </br>
                    <button type=\"submit\" class=\"btn btn-info\">Login</button>
                </form>
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
</html>", "default/login.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\default\\login.html.twig");
    }
}
