<?php

/* masterList/masterList.html.twig */
class __TwigTemplate_9b0591c6412b5bb31b8c7b29bbd2269b2ff00c59bd3b7aea6501ae53ba341542 extends Twig_Template
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
        $__internal_d61e37522f856801cbb28d27e4dabb6fcba9b605264ae7db874edbbfd0595d0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d61e37522f856801cbb28d27e4dabb6fcba9b605264ae7db874edbbfd0595d0a->enter($__internal_d61e37522f856801cbb28d27e4dabb6fcba9b605264ae7db874edbbfd0595d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "masterList/masterList.html.twig"));

        $__internal_9515248cc4cb73f01b003852b7eb2eb7983dbc42885b56607bcc29ee8e862baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9515248cc4cb73f01b003852b7eb2eb7983dbc42885b56607bcc29ee8e862baf->enter($__internal_9515248cc4cb73f01b003852b7eb2eb7983dbc42885b56607bcc29ee8e862baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "masterList/masterList.html.twig"));

        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
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
        // line 70
        echo "

";
        // line 72
        $this->displayBlock('javascripts', $context, $blocks);
        // line 78
        echo "    </div>
</body>
</html>";
        
        $__internal_d61e37522f856801cbb28d27e4dabb6fcba9b605264ae7db874edbbfd0595d0a->leave($__internal_d61e37522f856801cbb28d27e4dabb6fcba9b605264ae7db874edbbfd0595d0a_prof);

        
        $__internal_9515248cc4cb73f01b003852b7eb2eb7983dbc42885b56607bcc29ee8e862baf->leave($__internal_9515248cc4cb73f01b003852b7eb2eb7983dbc42885b56607bcc29ee8e862baf_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_a89f384dcd7e0b1ce8e606279feded4b430aa33f618cddd150a2392d65648a3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a89f384dcd7e0b1ce8e606279feded4b430aa33f618cddd150a2392d65648a3b->enter($__internal_a89f384dcd7e0b1ce8e606279feded4b430aa33f618cddd150a2392d65648a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_55bb7d64420167b95a309ad911d9b2aba5718bf52963572c6f86cb6b5717bff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55bb7d64420167b95a309ad911d9b2aba5718bf52963572c6f86cb6b5717bff2->enter($__internal_55bb7d64420167b95a309ad911d9b2aba5718bf52963572c6f86cb6b5717bff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper";
        
        $__internal_55bb7d64420167b95a309ad911d9b2aba5718bf52963572c6f86cb6b5717bff2->leave($__internal_55bb7d64420167b95a309ad911d9b2aba5718bf52963572c6f86cb6b5717bff2_prof);

        
        $__internal_a89f384dcd7e0b1ce8e606279feded4b430aa33f618cddd150a2392d65648a3b->leave($__internal_a89f384dcd7e0b1ce8e606279feded4b430aa33f618cddd150a2392d65648a3b_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0c93ed76bcf9fcbe9e54157ed7e7ec6c374caf21e3b1de8d0ad4946da92138b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c93ed76bcf9fcbe9e54157ed7e7ec6c374caf21e3b1de8d0ad4946da92138b2->enter($__internal_0c93ed76bcf9fcbe9e54157ed7e7ec6c374caf21e3b1de8d0ad4946da92138b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6609de9fd8a908745d07ff1147ce1f7f923e909a5886f0e454b980caf6decac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6609de9fd8a908745d07ff1147ce1f7f923e909a5886f0e454b980caf6decac5->enter($__internal_6609de9fd8a908745d07ff1147ce1f7f923e909a5886f0e454b980caf6decac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6609de9fd8a908745d07ff1147ce1f7f923e909a5886f0e454b980caf6decac5->leave($__internal_6609de9fd8a908745d07ff1147ce1f7f923e909a5886f0e454b980caf6decac5_prof);

        
        $__internal_0c93ed76bcf9fcbe9e54157ed7e7ec6c374caf21e3b1de8d0ad4946da92138b2->leave($__internal_0c93ed76bcf9fcbe9e54157ed7e7ec6c374caf21e3b1de8d0ad4946da92138b2_prof);

    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_7b05dc6f4a190f49e6e103d34a7fe2440524506ae5333e54c07079da068a0c74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b05dc6f4a190f49e6e103d34a7fe2440524506ae5333e54c07079da068a0c74->enter($__internal_7b05dc6f4a190f49e6e103d34a7fe2440524506ae5333e54c07079da068a0c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_b66df6927717ede39c41b4dfefed0e318bd4eb41484d3965e213920e2e395553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b66df6927717ede39c41b4dfefed0e318bd4eb41484d3965e213920e2e395553->enter($__internal_b66df6927717ede39c41b4dfefed0e318bd4eb41484d3965e213920e2e395553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 28
        echo "                <nav class=\"navbar sticky-top navbar-expand-lg navbar-light bg-light\">
                    <a class=\"navbar-brand\" href=\"#\">Merch Helper</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse col\" id=\"navbarSupportedContent\">
                        <ul class=\"nav justify-content-end main_menu ml-auto\">
                            ";
        // line 35
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 36
            echo "                                <li class=\"nav-item text-uppercase\">
                                    <a class=\"nav-link badge badge-success\" id=\"singUpBtn\" href=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_masterCreate");
            echo "\" style=\"color: white\">Create Listing</a>
                                </li>
                                <li class=\"nav-item active\">
                                    <p class=\"nav-link\" style=\"color: black;\">Hello, <span class=\"text-uppercase\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 40, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo "</span></p>
                                </li>
                                <li class=\"nav-item text-uppercase\">
                                    <a class=\"nav-link badge badge-danger\" id=\"singUpBtn\" href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" style=\"color: white\">Logout</a>
                                </li>
                            ";
        }
        // line 46
        echo "                            ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 47
            echo "                            <li class=\"nav-item text-uppercase\">
                            <a class=\"nav-link badge badge-danger\" id=\"singUpBtn\" href=\"#\" style=\"color: white\">User Test</a>
                            </li>
                            ";
        }
        // line 51
        echo "                            ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 52
            echo "                                <li class=\"nav-item text-uppercase\">
                                    <a class=\"nav-link badge badge-danger\" id=\"singUpBtn\" href=\"#\" style=\"color: white\">Admin Test</a>
                                </li>
                            ";
        }
        // line 56
        echo "                        </ul>
                    </div>
                </nav>
    </div>
    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 60, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["master"]) {
            // line 61
            echo "         <li>
             <span>Master ID: </span>  ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["master"], "master_id", array()), "html", null, true);
            echo " <br>
             <span>title: </span>  <a href=\"";
            // line 63
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_list");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["master"], "master_id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["master"], "title", array()), "html", null, true);
            echo " <br></a>
          <span>user ID: </span> ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["master"], "userId", array()), "html", null, true);
            echo " <br>
             <a href=\"";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_masterEdit");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["master"], "master_id", array()), "html", null, true);
            echo "\">Edit</a>
             <a href=\"";
            // line 66
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_masterDelete");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["master"], "master_id", array()), "html", null, true);
            echo "\">Delete</a>
         </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['master'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "            ";
        
        $__internal_b66df6927717ede39c41b4dfefed0e318bd4eb41484d3965e213920e2e395553->leave($__internal_b66df6927717ede39c41b4dfefed0e318bd4eb41484d3965e213920e2e395553_prof);

        
        $__internal_7b05dc6f4a190f49e6e103d34a7fe2440524506ae5333e54c07079da068a0c74->leave($__internal_7b05dc6f4a190f49e6e103d34a7fe2440524506ae5333e54c07079da068a0c74_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a519333911fde660b955e5bd73ebd90b86bff001f3803facceac8b6a50880397 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a519333911fde660b955e5bd73ebd90b86bff001f3803facceac8b6a50880397->enter($__internal_a519333911fde660b955e5bd73ebd90b86bff001f3803facceac8b6a50880397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e7f78f4790c33bf71da8e47cba89348722d05b68c483b5bb585dcbb32e810b18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f78f4790c33bf71da8e47cba89348722d05b68c483b5bb585dcbb32e810b18->enter($__internal_e7f78f4790c33bf71da8e47cba89348722d05b68c483b5bb585dcbb32e810b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 73
        echo "    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
";
        
        $__internal_e7f78f4790c33bf71da8e47cba89348722d05b68c483b5bb585dcbb32e810b18->leave($__internal_e7f78f4790c33bf71da8e47cba89348722d05b68c483b5bb585dcbb32e810b18_prof);

        
        $__internal_a519333911fde660b955e5bd73ebd90b86bff001f3803facceac8b6a50880397->leave($__internal_a519333911fde660b955e5bd73ebd90b86bff001f3803facceac8b6a50880397_prof);

    }

    public function getTemplateName()
    {
        return "masterList/masterList.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  243 => 73,  234 => 72,  224 => 69,  213 => 66,  207 => 65,  203 => 64,  195 => 63,  191 => 62,  188 => 61,  184 => 60,  178 => 56,  172 => 52,  169 => 51,  163 => 47,  160 => 46,  154 => 43,  148 => 40,  142 => 37,  139 => 36,  137 => 35,  128 => 28,  119 => 27,  97 => 11,  88 => 10,  70 => 6,  58 => 78,  56 => 72,  52 => 70,  50 => 27,  45 => 24,  43 => 10,  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- app/Resources/views/base.html.twig -->
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
                <nav class=\"navbar sticky-top navbar-expand-lg navbar-light bg-light\">
                    <a class=\"navbar-brand\" href=\"#\">Merch Helper</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse col\" id=\"navbarSupportedContent\">
                        <ul class=\"nav justify-content-end main_menu ml-auto\">
                            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                                <li class=\"nav-item text-uppercase\">
                                    <a class=\"nav-link badge badge-success\" id=\"singUpBtn\" href=\"{{ path('app_masterCreate') }}\" style=\"color: white\">Create Listing</a>
                                </li>
                                <li class=\"nav-item active\">
                                    <p class=\"nav-link\" style=\"color: black;\">Hello, <span class=\"text-uppercase\">{{ app.user.username }}</span></p>
                                </li>
                                <li class=\"nav-item text-uppercase\">
                                    <a class=\"nav-link badge badge-danger\" id=\"singUpBtn\" href=\"{{ path('logout') }}\" style=\"color: white\">Logout</a>
                                </li>
                            {% endif %}
                            {% if is_granted('ROLE_USER') %}
                            <li class=\"nav-item text-uppercase\">
                            <a class=\"nav-link badge badge-danger\" id=\"singUpBtn\" href=\"#\" style=\"color: white\">User Test</a>
                            </li>
                            {% endif %}
                            {% if is_granted('ROLE_ADMIN') %}
                                <li class=\"nav-item text-uppercase\">
                                    <a class=\"nav-link badge badge-danger\" id=\"singUpBtn\" href=\"#\" style=\"color: white\">Admin Test</a>
                                </li>
                            {% endif %}
                        </ul>
                    </div>
                </nav>
    </div>
    {% for master in posts %}
         <li>
             <span>Master ID: </span>  {{ master.master_id }} <br>
             <span>title: </span>  <a href=\"{{ path('app_list')}}/{{ master.master_id}}\"> {{ master.title }} <br></a>
          <span>user ID: </span> {{ master.userId }} <br>
             <a href=\"{{ path('app_masterEdit')}}/{{ master.master_id}}\">Edit</a>
             <a href=\"{{ path('app_masterDelete')}}/{{ master.master_id}}\">Delete</a>
         </li>
    {% endfor %}
            {% endblock %}


{% block javascripts %}
    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
{% endblock %}
    </div>
</body>
</html>", "masterList/masterList.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\masterList\\masterList.html.twig");
    }
}
