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
        $__internal_ba61302794bb12f2496b1a13b757ca2cac21ea3f10127dc6dc425a6c2e880760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba61302794bb12f2496b1a13b757ca2cac21ea3f10127dc6dc425a6c2e880760->enter($__internal_ba61302794bb12f2496b1a13b757ca2cac21ea3f10127dc6dc425a6c2e880760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $__internal_c86eccdff32a623cb7d19c3b37bf123ca35153725d989c1be954fd19d303416e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c86eccdff32a623cb7d19c3b37bf123ca35153725d989c1be954fd19d303416e->enter($__internal_c86eccdff32a623cb7d19c3b37bf123ca35153725d989c1be954fd19d303416e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

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
        <a class=\"navbar-brand\" href=\"#\">MerchByAmazon Registeration</a>
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
        
        $__internal_ba61302794bb12f2496b1a13b757ca2cac21ea3f10127dc6dc425a6c2e880760->leave($__internal_ba61302794bb12f2496b1a13b757ca2cac21ea3f10127dc6dc425a6c2e880760_prof);

        
        $__internal_c86eccdff32a623cb7d19c3b37bf123ca35153725d989c1be954fd19d303416e->leave($__internal_c86eccdff32a623cb7d19c3b37bf123ca35153725d989c1be954fd19d303416e_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_296b124e7e5736657487ec06f846acd6f63b39c07331f3347b01ff46a79827ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_296b124e7e5736657487ec06f846acd6f63b39c07331f3347b01ff46a79827ca->enter($__internal_296b124e7e5736657487ec06f846acd6f63b39c07331f3347b01ff46a79827ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_01beeec627fa0ce41aac0e0b3d1c56489213410930d5e1b2bfe92f0d64f52c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01beeec627fa0ce41aac0e0b3d1c56489213410930d5e1b2bfe92f0d64f52c75->enter($__internal_01beeec627fa0ce41aac0e0b3d1c56489213410930d5e1b2bfe92f0d64f52c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper";
        
        $__internal_01beeec627fa0ce41aac0e0b3d1c56489213410930d5e1b2bfe92f0d64f52c75->leave($__internal_01beeec627fa0ce41aac0e0b3d1c56489213410930d5e1b2bfe92f0d64f52c75_prof);

        
        $__internal_296b124e7e5736657487ec06f846acd6f63b39c07331f3347b01ff46a79827ca->leave($__internal_296b124e7e5736657487ec06f846acd6f63b39c07331f3347b01ff46a79827ca_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2ad47d1413f9031f3bbf64222179e6953c8bbf5d3e47cb18952354a3f0d75e17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ad47d1413f9031f3bbf64222179e6953c8bbf5d3e47cb18952354a3f0d75e17->enter($__internal_2ad47d1413f9031f3bbf64222179e6953c8bbf5d3e47cb18952354a3f0d75e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a4a938bf7bec5302b0e5acfa504aa3562c1f7a23d85d977f8b4aeb8132e8dbe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a938bf7bec5302b0e5acfa504aa3562c1f7a23d85d977f8b4aeb8132e8dbe5->enter($__internal_a4a938bf7bec5302b0e5acfa504aa3562c1f7a23d85d977f8b4aeb8132e8dbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_a4a938bf7bec5302b0e5acfa504aa3562c1f7a23d85d977f8b4aeb8132e8dbe5->leave($__internal_a4a938bf7bec5302b0e5acfa504aa3562c1f7a23d85d977f8b4aeb8132e8dbe5_prof);

        
        $__internal_2ad47d1413f9031f3bbf64222179e6953c8bbf5d3e47cb18952354a3f0d75e17->leave($__internal_2ad47d1413f9031f3bbf64222179e6953c8bbf5d3e47cb18952354a3f0d75e17_prof);

    }

    // line 42
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_144ad9ee3f3c80275131b18a46515572c32e48c95f72837e633c6eed27cc369a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_144ad9ee3f3c80275131b18a46515572c32e48c95f72837e633c6eed27cc369a->enter($__internal_144ad9ee3f3c80275131b18a46515572c32e48c95f72837e633c6eed27cc369a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_2499cb1d264727dad5a0b50aa40ebe84a9685dfd0a61e6d46c2be5b24e62b87d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2499cb1d264727dad5a0b50aa40ebe84a9685dfd0a61e6d46c2be5b24e62b87d->enter($__internal_2499cb1d264727dad5a0b50aa40ebe84a9685dfd0a61e6d46c2be5b24e62b87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_2499cb1d264727dad5a0b50aa40ebe84a9685dfd0a61e6d46c2be5b24e62b87d->leave($__internal_2499cb1d264727dad5a0b50aa40ebe84a9685dfd0a61e6d46c2be5b24e62b87d_prof);

        
        $__internal_144ad9ee3f3c80275131b18a46515572c32e48c95f72837e633c6eed27cc369a->leave($__internal_144ad9ee3f3c80275131b18a46515572c32e48c95f72837e633c6eed27cc369a_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_68ee4eaeb4f27435a40109b19a841ce6257324b9cb7911218200159fcee836f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68ee4eaeb4f27435a40109b19a841ce6257324b9cb7911218200159fcee836f8->enter($__internal_68ee4eaeb4f27435a40109b19a841ce6257324b9cb7911218200159fcee836f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_12d52f344cafb7023a03248fbcf5785944862fb9ed043cd51f3d7608389b27b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12d52f344cafb7023a03248fbcf5785944862fb9ed043cd51f3d7608389b27b2->enter($__internal_12d52f344cafb7023a03248fbcf5785944862fb9ed043cd51f3d7608389b27b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 71
        echo "    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
";
        
        $__internal_12d52f344cafb7023a03248fbcf5785944862fb9ed043cd51f3d7608389b27b2->leave($__internal_12d52f344cafb7023a03248fbcf5785944862fb9ed043cd51f3d7608389b27b2_prof);

        
        $__internal_68ee4eaeb4f27435a40109b19a841ce6257324b9cb7911218200159fcee836f8->leave($__internal_68ee4eaeb4f27435a40109b19a841ce6257324b9cb7911218200159fcee836f8_prof);

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
    <title>{% block title %}MerchHelper{% endblock %}</title>
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
