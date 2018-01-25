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
        $__internal_6f0f4f384bb03f8fa6b05ed01ee5c22de37743d44ff80957544e5e075f8a96d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f0f4f384bb03f8fa6b05ed01ee5c22de37743d44ff80957544e5e075f8a96d8->enter($__internal_6f0f4f384bb03f8fa6b05ed01ee5c22de37743d44ff80957544e5e075f8a96d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/list.html.twig"));

        $__internal_ea30f9750d84fa8f7c4d51653d609658352f7b7000a1f8fa3fe47c6a9dcd3d96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea30f9750d84fa8f7c4d51653d609658352f7b7000a1f8fa3fe47c6a9dcd3d96->enter($__internal_ea30f9750d84fa8f7c4d51653d609658352f7b7000a1f8fa3fe47c6a9dcd3d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/list.html.twig"));

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
        // line 77
        echo "

";
        // line 79
        $this->displayBlock('javascripts', $context, $blocks);
        // line 85
        echo "    </div>
</body>
</html>";
        
        $__internal_6f0f4f384bb03f8fa6b05ed01ee5c22de37743d44ff80957544e5e075f8a96d8->leave($__internal_6f0f4f384bb03f8fa6b05ed01ee5c22de37743d44ff80957544e5e075f8a96d8_prof);

        
        $__internal_ea30f9750d84fa8f7c4d51653d609658352f7b7000a1f8fa3fe47c6a9dcd3d96->leave($__internal_ea30f9750d84fa8f7c4d51653d609658352f7b7000a1f8fa3fe47c6a9dcd3d96_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7840dc324e2de89b8f4cd380070f22f32514a0ca427c8b49f7110cbada335a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7840dc324e2de89b8f4cd380070f22f32514a0ca427c8b49f7110cbada335a4->enter($__internal_c7840dc324e2de89b8f4cd380070f22f32514a0ca427c8b49f7110cbada335a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e1cafe96cefc10d7a45529a968742a8b1bdfdf988497964c6cf58a07a99ea6d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1cafe96cefc10d7a45529a968742a8b1bdfdf988497964c6cf58a07a99ea6d2->enter($__internal_e1cafe96cefc10d7a45529a968742a8b1bdfdf988497964c6cf58a07a99ea6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper";
        
        $__internal_e1cafe96cefc10d7a45529a968742a8b1bdfdf988497964c6cf58a07a99ea6d2->leave($__internal_e1cafe96cefc10d7a45529a968742a8b1bdfdf988497964c6cf58a07a99ea6d2_prof);

        
        $__internal_c7840dc324e2de89b8f4cd380070f22f32514a0ca427c8b49f7110cbada335a4->leave($__internal_c7840dc324e2de89b8f4cd380070f22f32514a0ca427c8b49f7110cbada335a4_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cf0cbf905738d8a138f828b4abf0032b160ea609054142a25dc76d06d65e00b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf0cbf905738d8a138f828b4abf0032b160ea609054142a25dc76d06d65e00b2->enter($__internal_cf0cbf905738d8a138f828b4abf0032b160ea609054142a25dc76d06d65e00b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_85f6f0aad158c9c947123210393b78647d5d694ef5317d3646b4a3fdc2f60431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85f6f0aad158c9c947123210393b78647d5d694ef5317d3646b4a3fdc2f60431->enter($__internal_85f6f0aad158c9c947123210393b78647d5d694ef5317d3646b4a3fdc2f60431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_85f6f0aad158c9c947123210393b78647d5d694ef5317d3646b4a3fdc2f60431->leave($__internal_85f6f0aad158c9c947123210393b78647d5d694ef5317d3646b4a3fdc2f60431_prof);

        
        $__internal_cf0cbf905738d8a138f828b4abf0032b160ea609054142a25dc76d06d65e00b2->leave($__internal_cf0cbf905738d8a138f828b4abf0032b160ea609054142a25dc76d06d65e00b2_prof);

    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_f1ad95a1997de36311bfd9c315789ff5d010f511f06c81aad7662491df3b3b9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ad95a1997de36311bfd9c315789ff5d010f511f06c81aad7662491df3b3b9f->enter($__internal_f1ad95a1997de36311bfd9c315789ff5d010f511f06c81aad7662491df3b3b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_f612f43119723dbfd701d7cb08503b919bb2e529bc46756bece25287db902404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f612f43119723dbfd701d7cb08503b919bb2e529bc46756bece25287db902404->enter($__internal_f612f43119723dbfd701d7cb08503b919bb2e529bc46756bece25287db902404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 61
            echo "        <li>
            <span>List ID: </span>  ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "listing_id", array()), "html", null, true);
            echo " <br>
            <span>Title: </span> ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "title", array()), "html", null, true);
            echo " <br></a>
            <span>Brand: </span>  ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "brand", array()), "html", null, true);
            echo " <br>
            <span>Type: </span>  ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "type", array()), "html", null, true);
            echo " <br>
            <span>Fit: </span>  ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "fit", array()), "html", null, true);
            echo " <br>
            <span>Color: </span>  ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "color", array()), "html", null, true);
            echo " <br>
            <span>Cost: </span>  ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "cost", array()), "html", null, true);
            echo " <br>
            <span>Bullet One: </span>  ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "bulletOne", array()), "html", null, true);
            echo " <br>
            <span>Bullet Two: </span>  ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "bulletOne", array()), "html", null, true);
            echo " <br>
            <span>Description: </span>  ";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "description", array()), "html", null, true);
            echo " <br>
            <a href=\"";
            // line 72
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_listEdit");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "listing_id", array()), "html", null, true);
            echo "\">Edit</a>
            <a href=\"";
            // line 73
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_listDelete");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "listing_id", array()), "html", null, true);
            echo "\">Delete</a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "            ";
        
        $__internal_f612f43119723dbfd701d7cb08503b919bb2e529bc46756bece25287db902404->leave($__internal_f612f43119723dbfd701d7cb08503b919bb2e529bc46756bece25287db902404_prof);

        
        $__internal_f1ad95a1997de36311bfd9c315789ff5d010f511f06c81aad7662491df3b3b9f->leave($__internal_f1ad95a1997de36311bfd9c315789ff5d010f511f06c81aad7662491df3b3b9f_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9d84ecaf37d5154002411e88cdb8c3c1c0c7e8a0e4b98d931a6f8bdc8a1db7d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d84ecaf37d5154002411e88cdb8c3c1c0c7e8a0e4b98d931a6f8bdc8a1db7d8->enter($__internal_9d84ecaf37d5154002411e88cdb8c3c1c0c7e8a0e4b98d931a6f8bdc8a1db7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2459fd7510c4da4b079839cd4bc9553053489b10d6cee9db30148fd99e50076f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2459fd7510c4da4b079839cd4bc9553053489b10d6cee9db30148fd99e50076f->enter($__internal_2459fd7510c4da4b079839cd4bc9553053489b10d6cee9db30148fd99e50076f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
        echo "    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
";
        
        $__internal_2459fd7510c4da4b079839cd4bc9553053489b10d6cee9db30148fd99e50076f->leave($__internal_2459fd7510c4da4b079839cd4bc9553053489b10d6cee9db30148fd99e50076f_prof);

        
        $__internal_9d84ecaf37d5154002411e88cdb8c3c1c0c7e8a0e4b98d931a6f8bdc8a1db7d8->leave($__internal_9d84ecaf37d5154002411e88cdb8c3c1c0c7e8a0e4b98d931a6f8bdc8a1db7d8_prof);

    }

    public function getTemplateName()
    {
        return "list/list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  267 => 80,  258 => 79,  248 => 76,  237 => 73,  231 => 72,  227 => 71,  223 => 70,  219 => 69,  215 => 68,  211 => 67,  207 => 66,  203 => 65,  199 => 64,  195 => 63,  191 => 62,  188 => 61,  184 => 60,  178 => 56,  172 => 52,  169 => 51,  163 => 47,  160 => 46,  154 => 43,  148 => 40,  142 => 37,  139 => 36,  137 => 35,  128 => 28,  119 => 27,  97 => 11,  88 => 10,  70 => 6,  58 => 85,  56 => 79,  52 => 77,  50 => 27,  45 => 24,  43 => 10,  36 => 6,  29 => 1,);
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
    {% for list in posts %}
        <li>
            <span>List ID: </span>  {{ list.listing_id }} <br>
            <span>Title: </span> {{ list.title }} <br></a>
            <span>Brand: </span>  {{ list.brand }} <br>
            <span>Type: </span>  {{ list.type }} <br>
            <span>Fit: </span>  {{ list.fit }} <br>
            <span>Color: </span>  {{ list.color }} <br>
            <span>Cost: </span>  {{ list.cost }} <br>
            <span>Bullet One: </span>  {{ list.bulletOne }} <br>
            <span>Bullet Two: </span>  {{ list.bulletOne }} <br>
            <span>Description: </span>  {{ list.description }} <br>
            <a href=\"{{ path('app_listEdit')}}/{{ list.listing_id}}\">Edit</a>
            <a href=\"{{ path('app_listDelete')}}/{{ list.listing_id }}\">Delete</a>
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
</html>", "list/list.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\list\\list.html.twig");
    }
}
