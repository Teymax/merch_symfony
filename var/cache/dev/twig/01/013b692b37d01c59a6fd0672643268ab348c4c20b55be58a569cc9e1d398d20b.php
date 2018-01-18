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
        $__internal_f933c430c558804f179cef8be96869623ab7685ffb6c6cfe823704c350c93c1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f933c430c558804f179cef8be96869623ab7685ffb6c6cfe823704c350c93c1c->enter($__internal_f933c430c558804f179cef8be96869623ab7685ffb6c6cfe823704c350c93c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/list.html.twig"));

        $__internal_f59cae8ee788daf4cfee205d7eb21ebaec30bb585e1dfb7c551e850d6022f62e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f59cae8ee788daf4cfee205d7eb21ebaec30bb585e1dfb7c551e850d6022f62e->enter($__internal_f59cae8ee788daf4cfee205d7eb21ebaec30bb585e1dfb7c551e850d6022f62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/list.html.twig"));

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
        // line 67
        echo "

";
        // line 69
        $this->displayBlock('javascripts', $context, $blocks);
        // line 75
        echo "    </div>
</body>
</html>";
        
        $__internal_f933c430c558804f179cef8be96869623ab7685ffb6c6cfe823704c350c93c1c->leave($__internal_f933c430c558804f179cef8be96869623ab7685ffb6c6cfe823704c350c93c1c_prof);

        
        $__internal_f59cae8ee788daf4cfee205d7eb21ebaec30bb585e1dfb7c551e850d6022f62e->leave($__internal_f59cae8ee788daf4cfee205d7eb21ebaec30bb585e1dfb7c551e850d6022f62e_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_56678491b4e557259582b6da8895e9b3db35badc8b9ec0d64af5ed5b1d57aacd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56678491b4e557259582b6da8895e9b3db35badc8b9ec0d64af5ed5b1d57aacd->enter($__internal_56678491b4e557259582b6da8895e9b3db35badc8b9ec0d64af5ed5b1d57aacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fe1160be91bc1ac6bdd33688253306b4ffc87537e3a493b7e57493b211bcb377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe1160be91bc1ac6bdd33688253306b4ffc87537e3a493b7e57493b211bcb377->enter($__internal_fe1160be91bc1ac6bdd33688253306b4ffc87537e3a493b7e57493b211bcb377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper";
        
        $__internal_fe1160be91bc1ac6bdd33688253306b4ffc87537e3a493b7e57493b211bcb377->leave($__internal_fe1160be91bc1ac6bdd33688253306b4ffc87537e3a493b7e57493b211bcb377_prof);

        
        $__internal_56678491b4e557259582b6da8895e9b3db35badc8b9ec0d64af5ed5b1d57aacd->leave($__internal_56678491b4e557259582b6da8895e9b3db35badc8b9ec0d64af5ed5b1d57aacd_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_52757db91974b1d57617549dab4d67bd1067359558b4afdf950a99752407bb7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52757db91974b1d57617549dab4d67bd1067359558b4afdf950a99752407bb7a->enter($__internal_52757db91974b1d57617549dab4d67bd1067359558b4afdf950a99752407bb7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_79ea8443fdb517beffa566677e8f938dd89fb9be077bca1d3a91c8a8209187b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79ea8443fdb517beffa566677e8f938dd89fb9be077bca1d3a91c8a8209187b8->enter($__internal_79ea8443fdb517beffa566677e8f938dd89fb9be077bca1d3a91c8a8209187b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_79ea8443fdb517beffa566677e8f938dd89fb9be077bca1d3a91c8a8209187b8->leave($__internal_79ea8443fdb517beffa566677e8f938dd89fb9be077bca1d3a91c8a8209187b8_prof);

        
        $__internal_52757db91974b1d57617549dab4d67bd1067359558b4afdf950a99752407bb7a->leave($__internal_52757db91974b1d57617549dab4d67bd1067359558b4afdf950a99752407bb7a_prof);

    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_33025f03b9d59a55bb6d553f9a3ea5e2d808910abea8c43a91d8e2060f11eefd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33025f03b9d59a55bb6d553f9a3ea5e2d808910abea8c43a91d8e2060f11eefd->enter($__internal_33025f03b9d59a55bb6d553f9a3ea5e2d808910abea8c43a91d8e2060f11eefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_288a0f3115e80199e7ff0bce1d1b901626d4e23df7c7d1b5629577ac26c882f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_288a0f3115e80199e7ff0bce1d1b901626d4e23df7c7d1b5629577ac26c882f2->enter($__internal_288a0f3115e80199e7ff0bce1d1b901626d4e23df7c7d1b5629577ac26c882f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_listCreate");
            echo "\" style=\"color: white\">Create Listing</a>
                                </li>
                                <li class=\"nav-item text-uppercase\">
                                    <a class=\"nav-link badge badge-info\" id=\"singUpBtn\" href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_listEdit");
            echo "\" style=\"color: white\">Edit Listing</a>
                                </li>
                                <li class=\"nav-item text-uppercase\">
                                    <a class=\"nav-link badge badge-danger\" id=\"singUpBtn\" href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_listDelete");
            echo "\" style=\"color: white\">Delete Listing</a>
                                </li>
                                <li class=\"nav-item active\">
                                    <p class=\"nav-link\" style=\"color: black;\">Hello, <span class=\"text-uppercase\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 46, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo "</span></p>
                                </li>
                                <li class=\"nav-item text-uppercase\">
                                    <a class=\"nav-link badge badge-danger\" id=\"singUpBtn\" href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" style=\"color: white\">Logout</a>
                                </li>
                            ";
        }
        // line 52
        echo "                            ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 53
            echo "                            <li class=\"nav-item text-uppercase\">
                            <a class=\"nav-link badge badge-danger\" id=\"singUpBtn\" href=\"#\" style=\"color: white\">User Test</a>
                            </li>
                            ";
        }
        // line 57
        echo "                            ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 58
            echo "                                <li class=\"nav-item text-uppercase\">
                                    <a class=\"nav-link badge badge-danger\" id=\"singUpBtn\" href=\"#\" style=\"color: white\">Admin Test</a>
                                </li>
                            ";
        }
        // line 62
        echo "                        </ul>
                    </div>
                </nav>
    </div>
            ";
        
        $__internal_288a0f3115e80199e7ff0bce1d1b901626d4e23df7c7d1b5629577ac26c882f2->leave($__internal_288a0f3115e80199e7ff0bce1d1b901626d4e23df7c7d1b5629577ac26c882f2_prof);

        
        $__internal_33025f03b9d59a55bb6d553f9a3ea5e2d808910abea8c43a91d8e2060f11eefd->leave($__internal_33025f03b9d59a55bb6d553f9a3ea5e2d808910abea8c43a91d8e2060f11eefd_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0d62301b685c4a06dfb590c30bbf694ce8857a3133430af4e460d0b2ed1264f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d62301b685c4a06dfb590c30bbf694ce8857a3133430af4e460d0b2ed1264f1->enter($__internal_0d62301b685c4a06dfb590c30bbf694ce8857a3133430af4e460d0b2ed1264f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3c44f55dcf81f873ce28ea485571c1aa71c009bff1c3a34d222a1b20191f5714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c44f55dcf81f873ce28ea485571c1aa71c009bff1c3a34d222a1b20191f5714->enter($__internal_3c44f55dcf81f873ce28ea485571c1aa71c009bff1c3a34d222a1b20191f5714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 70
        echo "    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
";
        
        $__internal_3c44f55dcf81f873ce28ea485571c1aa71c009bff1c3a34d222a1b20191f5714->leave($__internal_3c44f55dcf81f873ce28ea485571c1aa71c009bff1c3a34d222a1b20191f5714_prof);

        
        $__internal_0d62301b685c4a06dfb590c30bbf694ce8857a3133430af4e460d0b2ed1264f1->leave($__internal_0d62301b685c4a06dfb590c30bbf694ce8857a3133430af4e460d0b2ed1264f1_prof);

    }

    public function getTemplateName()
    {
        return "list/list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  213 => 70,  204 => 69,  190 => 62,  184 => 58,  181 => 57,  175 => 53,  172 => 52,  166 => 49,  160 => 46,  154 => 43,  148 => 40,  142 => 37,  139 => 36,  137 => 35,  128 => 28,  119 => 27,  97 => 11,  88 => 10,  70 => 6,  58 => 75,  56 => 69,  52 => 67,  50 => 27,  45 => 24,  43 => 10,  36 => 6,  29 => 1,);
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
                                    <a class=\"nav-link badge badge-success\" id=\"singUpBtn\" href=\"{{ path('app_listCreate') }}\" style=\"color: white\">Create Listing</a>
                                </li>
                                <li class=\"nav-item text-uppercase\">
                                    <a class=\"nav-link badge badge-info\" id=\"singUpBtn\" href=\"{{ path('app_listEdit') }}\" style=\"color: white\">Edit Listing</a>
                                </li>
                                <li class=\"nav-item text-uppercase\">
                                    <a class=\"nav-link badge badge-danger\" id=\"singUpBtn\" href=\"{{ path('app_listDelete') }}\" style=\"color: white\">Delete Listing</a>
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
