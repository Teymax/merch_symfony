<?php

/* list/list.html.twig */
class __TwigTemplate_5c444136e0c8aa60c5f668b7a4be291533955e4c6f75df03eb68fa2be9f891cd extends Twig_Template
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
        $__internal_748cd67070200c8fba03c060eba5421d6bcd8a0f26874129eeb38e7eaa042a91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_748cd67070200c8fba03c060eba5421d6bcd8a0f26874129eeb38e7eaa042a91->enter($__internal_748cd67070200c8fba03c060eba5421d6bcd8a0f26874129eeb38e7eaa042a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/list.html.twig"));

        $__internal_77109a99d8fdf62d9d28357f3ef79e3e9274aebf8609851f424ead2cfe7e7964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77109a99d8fdf62d9d28357f3ef79e3e9274aebf8609851f424ead2cfe7e7964->enter($__internal_77109a99d8fdf62d9d28357f3ef79e3e9274aebf8609851f424ead2cfe7e7964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/list.html.twig"));

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
        // line 61
        echo "

";
        // line 63
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "    </div>
</body>
</html>";
        
        $__internal_748cd67070200c8fba03c060eba5421d6bcd8a0f26874129eeb38e7eaa042a91->leave($__internal_748cd67070200c8fba03c060eba5421d6bcd8a0f26874129eeb38e7eaa042a91_prof);

        
        $__internal_77109a99d8fdf62d9d28357f3ef79e3e9274aebf8609851f424ead2cfe7e7964->leave($__internal_77109a99d8fdf62d9d28357f3ef79e3e9274aebf8609851f424ead2cfe7e7964_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_f23a9c1c6e3765337915615c267cd07b907adb6c2c0cbfc2ce962e40b2db007c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f23a9c1c6e3765337915615c267cd07b907adb6c2c0cbfc2ce962e40b2db007c->enter($__internal_f23a9c1c6e3765337915615c267cd07b907adb6c2c0cbfc2ce962e40b2db007c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_13b901266c5dbbad3682b28bd2e7858300acab5193445d31a8897903e1a423bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b901266c5dbbad3682b28bd2e7858300acab5193445d31a8897903e1a423bb->enter($__internal_13b901266c5dbbad3682b28bd2e7858300acab5193445d31a8897903e1a423bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper";
        
        $__internal_13b901266c5dbbad3682b28bd2e7858300acab5193445d31a8897903e1a423bb->leave($__internal_13b901266c5dbbad3682b28bd2e7858300acab5193445d31a8897903e1a423bb_prof);

        
        $__internal_f23a9c1c6e3765337915615c267cd07b907adb6c2c0cbfc2ce962e40b2db007c->leave($__internal_f23a9c1c6e3765337915615c267cd07b907adb6c2c0cbfc2ce962e40b2db007c_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b4ab5c35547a75d3031fa37ba119ec155b5cc43b729fc2351600006ace2dd899 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4ab5c35547a75d3031fa37ba119ec155b5cc43b729fc2351600006ace2dd899->enter($__internal_b4ab5c35547a75d3031fa37ba119ec155b5cc43b729fc2351600006ace2dd899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_22e91361676125474423b18284a86487712860efe9b1d8c0ee69a96da65d358f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22e91361676125474423b18284a86487712860efe9b1d8c0ee69a96da65d358f->enter($__internal_22e91361676125474423b18284a86487712860efe9b1d8c0ee69a96da65d358f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_22e91361676125474423b18284a86487712860efe9b1d8c0ee69a96da65d358f->leave($__internal_22e91361676125474423b18284a86487712860efe9b1d8c0ee69a96da65d358f_prof);

        
        $__internal_b4ab5c35547a75d3031fa37ba119ec155b5cc43b729fc2351600006ace2dd899->leave($__internal_b4ab5c35547a75d3031fa37ba119ec155b5cc43b729fc2351600006ace2dd899_prof);

    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_f091d047b5fd8d06efa56b249c7d9a35bb984a6dd2cc2bbbccb23d34f0116e4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f091d047b5fd8d06efa56b249c7d9a35bb984a6dd2cc2bbbccb23d34f0116e4c->enter($__internal_f091d047b5fd8d06efa56b249c7d9a35bb984a6dd2cc2bbbccb23d34f0116e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_d34b09658c05f4b3528e7d0c0902f2d014b5ab563a9d6e4fb38c4673e9a6bcae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d34b09658c05f4b3528e7d0c0902f2d014b5ab563a9d6e4fb38c4673e9a6bcae->enter($__internal_d34b09658c05f4b3528e7d0c0902f2d014b5ab563a9d6e4fb38c4673e9a6bcae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_d34b09658c05f4b3528e7d0c0902f2d014b5ab563a9d6e4fb38c4673e9a6bcae->leave($__internal_d34b09658c05f4b3528e7d0c0902f2d014b5ab563a9d6e4fb38c4673e9a6bcae_prof);

        
        $__internal_f091d047b5fd8d06efa56b249c7d9a35bb984a6dd2cc2bbbccb23d34f0116e4c->leave($__internal_f091d047b5fd8d06efa56b249c7d9a35bb984a6dd2cc2bbbccb23d34f0116e4c_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ec72da61d3f8697066ac9c9e5095aa1b1f66ba03443a3f49210cfa957df0f441 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec72da61d3f8697066ac9c9e5095aa1b1f66ba03443a3f49210cfa957df0f441->enter($__internal_ec72da61d3f8697066ac9c9e5095aa1b1f66ba03443a3f49210cfa957df0f441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cb4bce96c674be8970515be8b7f23d4ad58403eaaf7db162fd592ede0ffff119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb4bce96c674be8970515be8b7f23d4ad58403eaaf7db162fd592ede0ffff119->enter($__internal_cb4bce96c674be8970515be8b7f23d4ad58403eaaf7db162fd592ede0ffff119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
";
        
        $__internal_cb4bce96c674be8970515be8b7f23d4ad58403eaaf7db162fd592ede0ffff119->leave($__internal_cb4bce96c674be8970515be8b7f23d4ad58403eaaf7db162fd592ede0ffff119_prof);

        
        $__internal_ec72da61d3f8697066ac9c9e5095aa1b1f66ba03443a3f49210cfa957df0f441->leave($__internal_ec72da61d3f8697066ac9c9e5095aa1b1f66ba03443a3f49210cfa957df0f441_prof);

    }

    public function getTemplateName()
    {
        return "list/list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  201 => 64,  192 => 63,  178 => 56,  172 => 52,  169 => 51,  163 => 47,  160 => 46,  154 => 43,  148 => 40,  142 => 37,  139 => 36,  137 => 35,  128 => 28,  119 => 27,  97 => 11,  88 => 10,  70 => 6,  58 => 69,  56 => 63,  52 => 61,  50 => 27,  45 => 24,  43 => 10,  36 => 6,  29 => 1,);
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
            {% endblock %}


{% block javascripts %}
    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
{% endblock %}
    </div>
</body>
</html>", "list/list.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\list\\list.html.twig");
    }
}
