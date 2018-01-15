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
        $__internal_dd4c3d7f8616fefa49aadf63ae1b5b29003b2cae089b649d7cce26b277bfc131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd4c3d7f8616fefa49aadf63ae1b5b29003b2cae089b649d7cce26b277bfc131->enter($__internal_dd4c3d7f8616fefa49aadf63ae1b5b29003b2cae089b649d7cce26b277bfc131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $__internal_0de228d7df1a619b736007a2d9b99d20f168c75984a42565ce960e3ca711a186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0de228d7df1a619b736007a2d9b99d20f168c75984a42565ce960e3ca711a186->enter($__internal_0de228d7df1a619b736007a2d9b99d20f168c75984a42565ce960e3ca711a186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

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
<div class=\"container-fluid\" id=\"main_container\">
    ";
        // line 27
        $this->displayBlock('navigation', $context, $blocks);
        // line 56
        echo "

";
        // line 58
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "</div>
</body>
</html>";
        
        $__internal_dd4c3d7f8616fefa49aadf63ae1b5b29003b2cae089b649d7cce26b277bfc131->leave($__internal_dd4c3d7f8616fefa49aadf63ae1b5b29003b2cae089b649d7cce26b277bfc131_prof);

        
        $__internal_0de228d7df1a619b736007a2d9b99d20f168c75984a42565ce960e3ca711a186->leave($__internal_0de228d7df1a619b736007a2d9b99d20f168c75984a42565ce960e3ca711a186_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_b47a7d37ab59287b82c1df578e6c8d070e7a2ee2c044cc5fe8afe1a2916c649e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b47a7d37ab59287b82c1df578e6c8d070e7a2ee2c044cc5fe8afe1a2916c649e->enter($__internal_b47a7d37ab59287b82c1df578e6c8d070e7a2ee2c044cc5fe8afe1a2916c649e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f3cfd57132c78aa5f982618627d81389e8dee1a0f3d4efb4984db37987a686e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3cfd57132c78aa5f982618627d81389e8dee1a0f3d4efb4984db37987a686e8->enter($__internal_f3cfd57132c78aa5f982618627d81389e8dee1a0f3d4efb4984db37987a686e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper";
        
        $__internal_f3cfd57132c78aa5f982618627d81389e8dee1a0f3d4efb4984db37987a686e8->leave($__internal_f3cfd57132c78aa5f982618627d81389e8dee1a0f3d4efb4984db37987a686e8_prof);

        
        $__internal_b47a7d37ab59287b82c1df578e6c8d070e7a2ee2c044cc5fe8afe1a2916c649e->leave($__internal_b47a7d37ab59287b82c1df578e6c8d070e7a2ee2c044cc5fe8afe1a2916c649e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3d9d77ba670f0f1f0a1ed4e3c97098909876dfcac1f729757ca922c768ec0796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d9d77ba670f0f1f0a1ed4e3c97098909876dfcac1f729757ca922c768ec0796->enter($__internal_3d9d77ba670f0f1f0a1ed4e3c97098909876dfcac1f729757ca922c768ec0796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8864af1794c57df9532f29acb49181a4aa0e8ebfdde0e5d8bde81676b5b30f64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8864af1794c57df9532f29acb49181a4aa0e8ebfdde0e5d8bde81676b5b30f64->enter($__internal_8864af1794c57df9532f29acb49181a4aa0e8ebfdde0e5d8bde81676b5b30f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_8864af1794c57df9532f29acb49181a4aa0e8ebfdde0e5d8bde81676b5b30f64->leave($__internal_8864af1794c57df9532f29acb49181a4aa0e8ebfdde0e5d8bde81676b5b30f64_prof);

        
        $__internal_3d9d77ba670f0f1f0a1ed4e3c97098909876dfcac1f729757ca922c768ec0796->leave($__internal_3d9d77ba670f0f1f0a1ed4e3c97098909876dfcac1f729757ca922c768ec0796_prof);

    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_b7633533ffba8c01be7c359f4c444443bf2e09dd437ef07a93ee82db41be43ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7633533ffba8c01be7c359f4c444443bf2e09dd437ef07a93ee82db41be43ce->enter($__internal_b7633533ffba8c01be7c359f4c444443bf2e09dd437ef07a93ee82db41be43ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_7f5d684f1f864b8d40bdad1a7daad5e11ae3f5f75bac4fe723b4225caf51febd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f5d684f1f864b8d40bdad1a7daad5e11ae3f5f75bac4fe723b4225caf51febd->enter($__internal_7f5d684f1f864b8d40bdad1a7daad5e11ae3f5f75bac4fe723b4225caf51febd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 28
        echo "    <div class=\"p-3 mb-2 bg-success text-white container col-3\" id=\"logIn_form\" style=\"margin: 0 auto;\">
        <header>
            <h2>Login</h2>
        </header>
            <div class=\"form-group\">
                ";
        // line 33
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 33, $this->getSourceContext()); })())) {
            // line 34
            echo "                    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 34, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 34, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 36
        echo "
                <form action=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
                    <label for=\"username\">Username:</label>
                    <input type=\"text\" id=\"username\" class=\"form-group\" name=\"_username\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 39, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />

                    <label for=\"password\">Password:</label>
                    <input type=\"password\" class=\"form-group\" id=\"password\" name=\"_password\" />

                    ";
        // line 49
        echo "
                    <button type=\"submit\" class=\"btn btn-info\">login</button>
                </form>
            </div>
    </div>
</div>
";
        
        $__internal_7f5d684f1f864b8d40bdad1a7daad5e11ae3f5f75bac4fe723b4225caf51febd->leave($__internal_7f5d684f1f864b8d40bdad1a7daad5e11ae3f5f75bac4fe723b4225caf51febd_prof);

        
        $__internal_b7633533ffba8c01be7c359f4c444443bf2e09dd437ef07a93ee82db41be43ce->leave($__internal_b7633533ffba8c01be7c359f4c444443bf2e09dd437ef07a93ee82db41be43ce_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6931773dfd07ea8a7220ee1749f27abb517173c71cab9c324851419fc3bb2b00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6931773dfd07ea8a7220ee1749f27abb517173c71cab9c324851419fc3bb2b00->enter($__internal_6931773dfd07ea8a7220ee1749f27abb517173c71cab9c324851419fc3bb2b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_491e83dcdf0f443333c9127caf8ad59760cd6f2aee59a592a26b5dd2676e9b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_491e83dcdf0f443333c9127caf8ad59760cd6f2aee59a592a26b5dd2676e9b27->enter($__internal_491e83dcdf0f443333c9127caf8ad59760cd6f2aee59a592a26b5dd2676e9b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
";
        
        $__internal_491e83dcdf0f443333c9127caf8ad59760cd6f2aee59a592a26b5dd2676e9b27->leave($__internal_491e83dcdf0f443333c9127caf8ad59760cd6f2aee59a592a26b5dd2676e9b27_prof);

        
        $__internal_6931773dfd07ea8a7220ee1749f27abb517173c71cab9c324851419fc3bb2b00->leave($__internal_6931773dfd07ea8a7220ee1749f27abb517173c71cab9c324851419fc3bb2b00_prof);

    }

    public function getTemplateName()
    {
        return "default/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  184 => 59,  175 => 58,  159 => 49,  151 => 39,  146 => 37,  143 => 36,  137 => 34,  135 => 33,  128 => 28,  119 => 27,  97 => 11,  88 => 10,  70 => 6,  58 => 64,  56 => 58,  52 => 56,  50 => 27,  45 => 24,  43 => 10,  36 => 6,  29 => 1,);
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
<div class=\"container-fluid\" id=\"main_container\">
    {% block navigation %}
    <div class=\"p-3 mb-2 bg-success text-white container col-3\" id=\"logIn_form\" style=\"margin: 0 auto;\">
        <header>
            <h2>Login</h2>
        </header>
            <div class=\"form-group\">
                {% if error %}
                    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}

                <form action=\"{{ path('login') }}\" method=\"post\">
                    <label for=\"username\">Username:</label>
                    <input type=\"text\" id=\"username\" class=\"form-group\" name=\"_username\" value=\"{{ last_username }}\" />

                    <label for=\"password\">Password:</label>
                    <input type=\"password\" class=\"form-group\" id=\"password\" name=\"_password\" />

                    {#
                        If you want to control the URL the user
                        is redirected to on success (more details below)
                        <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
                    #}

                    <button type=\"submit\" class=\"btn btn-info\">login</button>
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
