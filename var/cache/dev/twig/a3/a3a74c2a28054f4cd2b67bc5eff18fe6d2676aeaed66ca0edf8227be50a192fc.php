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
        $__internal_ddafc676f948b76ae9bae76e3e13b0683c795567cf086d21e8e55b8a16cc2b39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddafc676f948b76ae9bae76e3e13b0683c795567cf086d21e8e55b8a16cc2b39->enter($__internal_ddafc676f948b76ae9bae76e3e13b0683c795567cf086d21e8e55b8a16cc2b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $__internal_dc2b5357aa93333f7d5780f3e9f4a3137fe989c17be85bd51f63bf6509e5b76f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc2b5357aa93333f7d5780f3e9f4a3137fe989c17be85bd51f63bf6509e5b76f->enter($__internal_dc2b5357aa93333f7d5780f3e9f4a3137fe989c17be85bd51f63bf6509e5b76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

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
        // line 69
        echo "

";
        // line 71
        $this->displayBlock('javascripts', $context, $blocks);
        // line 77
        echo "</div>
</body>
</html>";
        
        $__internal_ddafc676f948b76ae9bae76e3e13b0683c795567cf086d21e8e55b8a16cc2b39->leave($__internal_ddafc676f948b76ae9bae76e3e13b0683c795567cf086d21e8e55b8a16cc2b39_prof);

        
        $__internal_dc2b5357aa93333f7d5780f3e9f4a3137fe989c17be85bd51f63bf6509e5b76f->leave($__internal_dc2b5357aa93333f7d5780f3e9f4a3137fe989c17be85bd51f63bf6509e5b76f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_a892e61c65c6bea53581817d20798331a48d6d7da8ac99ee75bb4ea448a3df1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a892e61c65c6bea53581817d20798331a48d6d7da8ac99ee75bb4ea448a3df1e->enter($__internal_a892e61c65c6bea53581817d20798331a48d6d7da8ac99ee75bb4ea448a3df1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f5ca779ccf110230f3b7ce631970bc4479381a328c8efb86535c47b9957d4650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ca779ccf110230f3b7ce631970bc4479381a328c8efb86535c47b9957d4650->enter($__internal_f5ca779ccf110230f3b7ce631970bc4479381a328c8efb86535c47b9957d4650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchByAmazon | Login";
        
        $__internal_f5ca779ccf110230f3b7ce631970bc4479381a328c8efb86535c47b9957d4650->leave($__internal_f5ca779ccf110230f3b7ce631970bc4479381a328c8efb86535c47b9957d4650_prof);

        
        $__internal_a892e61c65c6bea53581817d20798331a48d6d7da8ac99ee75bb4ea448a3df1e->leave($__internal_a892e61c65c6bea53581817d20798331a48d6d7da8ac99ee75bb4ea448a3df1e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_341e11de309b40232a845487b9f3f4028a648d85f970fec09beb1873ecf9e7de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_341e11de309b40232a845487b9f3f4028a648d85f970fec09beb1873ecf9e7de->enter($__internal_341e11de309b40232a845487b9f3f4028a648d85f970fec09beb1873ecf9e7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f4457c0e2075a677d27b9d28a46f0ab5064f80fca719f57ccb3b321677f22bf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4457c0e2075a677d27b9d28a46f0ab5064f80fca719f57ccb3b321677f22bf6->enter($__internal_f4457c0e2075a677d27b9d28a46f0ab5064f80fca719f57ccb3b321677f22bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_f4457c0e2075a677d27b9d28a46f0ab5064f80fca719f57ccb3b321677f22bf6->leave($__internal_f4457c0e2075a677d27b9d28a46f0ab5064f80fca719f57ccb3b321677f22bf6_prof);

        
        $__internal_341e11de309b40232a845487b9f3f4028a648d85f970fec09beb1873ecf9e7de->leave($__internal_341e11de309b40232a845487b9f3f4028a648d85f970fec09beb1873ecf9e7de_prof);

    }

    // line 42
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_0dc2dc0cc6cda3482ed1398284ed7edaafe7a042d3f447e580ad4b43aa55819c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dc2dc0cc6cda3482ed1398284ed7edaafe7a042d3f447e580ad4b43aa55819c->enter($__internal_0dc2dc0cc6cda3482ed1398284ed7edaafe7a042d3f447e580ad4b43aa55819c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_8c8919d7604cac0cc00b83a18e979708c2ac3c00f06b4cb197db7bd6e5e972aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c8919d7604cac0cc00b83a18e979708c2ac3c00f06b4cb197db7bd6e5e972aa->enter($__internal_8c8919d7604cac0cc00b83a18e979708c2ac3c00f06b4cb197db7bd6e5e972aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 43
        echo "    <div class=\"p-3 mb-2 text-white container col-3\" id=\"logIn_form\" style=\"margin: 0 auto;\">
            <div class=\"form-group\">
                ";
        // line 45
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 45, $this->getSourceContext()); })())) {
            // line 46
            echo "                    <div class=\"bg-danger\" style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: center;\">";
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
                    <a class=\"btn btn-link\" href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_forgot");
        echo "\">Forgot Your Password?</a>
                </form>
            </div>
    </div>
</div>
";
        
        $__internal_8c8919d7604cac0cc00b83a18e979708c2ac3c00f06b4cb197db7bd6e5e972aa->leave($__internal_8c8919d7604cac0cc00b83a18e979708c2ac3c00f06b4cb197db7bd6e5e972aa_prof);

        
        $__internal_0dc2dc0cc6cda3482ed1398284ed7edaafe7a042d3f447e580ad4b43aa55819c->leave($__internal_0dc2dc0cc6cda3482ed1398284ed7edaafe7a042d3f447e580ad4b43aa55819c_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_afc5ad47c98aa1db260e1804253c52a8b942d21b8e645bf411271f5520316998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afc5ad47c98aa1db260e1804253c52a8b942d21b8e645bf411271f5520316998->enter($__internal_afc5ad47c98aa1db260e1804253c52a8b942d21b8e645bf411271f5520316998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6030bd3b7ab159823c1c9ac32ea72901d63604d5587f1249f1e12c3c0c9ef641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6030bd3b7ab159823c1c9ac32ea72901d63604d5587f1249f1e12c3c0c9ef641->enter($__internal_6030bd3b7ab159823c1c9ac32ea72901d63604d5587f1249f1e12c3c0c9ef641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
";
        
        $__internal_6030bd3b7ab159823c1c9ac32ea72901d63604d5587f1249f1e12c3c0c9ef641->leave($__internal_6030bd3b7ab159823c1c9ac32ea72901d63604d5587f1249f1e12c3c0c9ef641_prof);

        
        $__internal_afc5ad47c98aa1db260e1804253c52a8b942d21b8e645bf411271f5520316998->leave($__internal_afc5ad47c98aa1db260e1804253c52a8b942d21b8e645bf411271f5520316998_prof);

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
        return array (  203 => 72,  194 => 71,  178 => 63,  174 => 61,  166 => 51,  161 => 49,  158 => 48,  152 => 46,  150 => 45,  146 => 43,  137 => 42,  115 => 11,  106 => 10,  88 => 6,  76 => 77,  74 => 71,  70 => 69,  68 => 42,  58 => 35,  45 => 24,  43 => 10,  36 => 6,  29 => 1,);
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
                    <div class=\"bg-danger\" style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: center;\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
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
                    <a class=\"btn btn-link\" href=\"{{ path('app_forgot') }}\">Forgot Your Password?</a>
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
