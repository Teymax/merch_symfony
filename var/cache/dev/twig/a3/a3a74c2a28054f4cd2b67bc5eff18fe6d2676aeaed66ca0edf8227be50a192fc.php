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
        $__internal_142d547ee0a8026e6c84c847607f1482b5ecbbcc8f0e2428dc87333d86cee1e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_142d547ee0a8026e6c84c847607f1482b5ecbbcc8f0e2428dc87333d86cee1e5->enter($__internal_142d547ee0a8026e6c84c847607f1482b5ecbbcc8f0e2428dc87333d86cee1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $__internal_3b6cd5c2777c1c8f550f4ffaf999048144528a41e2fdb1257fa3f554952f73ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6cd5c2777c1c8f550f4ffaf999048144528a41e2fdb1257fa3f554952f73ce->enter($__internal_3b6cd5c2777c1c8f550f4ffaf999048144528a41e2fdb1257fa3f554952f73ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

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
        
        $__internal_142d547ee0a8026e6c84c847607f1482b5ecbbcc8f0e2428dc87333d86cee1e5->leave($__internal_142d547ee0a8026e6c84c847607f1482b5ecbbcc8f0e2428dc87333d86cee1e5_prof);

        
        $__internal_3b6cd5c2777c1c8f550f4ffaf999048144528a41e2fdb1257fa3f554952f73ce->leave($__internal_3b6cd5c2777c1c8f550f4ffaf999048144528a41e2fdb1257fa3f554952f73ce_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_dfddb2d66083e84b29dd6e9b03a74da12098f2afe8439ba37623698da0183455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfddb2d66083e84b29dd6e9b03a74da12098f2afe8439ba37623698da0183455->enter($__internal_dfddb2d66083e84b29dd6e9b03a74da12098f2afe8439ba37623698da0183455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6b7d1cd62c59f01ced1b358ca417a0436c619eea7b3b73987f1c599b2af44761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b7d1cd62c59f01ced1b358ca417a0436c619eea7b3b73987f1c599b2af44761->enter($__internal_6b7d1cd62c59f01ced1b358ca417a0436c619eea7b3b73987f1c599b2af44761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchByAmazon | Login";
        
        $__internal_6b7d1cd62c59f01ced1b358ca417a0436c619eea7b3b73987f1c599b2af44761->leave($__internal_6b7d1cd62c59f01ced1b358ca417a0436c619eea7b3b73987f1c599b2af44761_prof);

        
        $__internal_dfddb2d66083e84b29dd6e9b03a74da12098f2afe8439ba37623698da0183455->leave($__internal_dfddb2d66083e84b29dd6e9b03a74da12098f2afe8439ba37623698da0183455_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e31adcc917e1cf4d945c5fd353ff7e2f122df1c6d099b29dd874ea46e4b688dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e31adcc917e1cf4d945c5fd353ff7e2f122df1c6d099b29dd874ea46e4b688dc->enter($__internal_e31adcc917e1cf4d945c5fd353ff7e2f122df1c6d099b29dd874ea46e4b688dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_60e7572036b5868a1f4463d0aebadbc083d920880d3694f0a7b15705e9d16342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60e7572036b5868a1f4463d0aebadbc083d920880d3694f0a7b15705e9d16342->enter($__internal_60e7572036b5868a1f4463d0aebadbc083d920880d3694f0a7b15705e9d16342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_60e7572036b5868a1f4463d0aebadbc083d920880d3694f0a7b15705e9d16342->leave($__internal_60e7572036b5868a1f4463d0aebadbc083d920880d3694f0a7b15705e9d16342_prof);

        
        $__internal_e31adcc917e1cf4d945c5fd353ff7e2f122df1c6d099b29dd874ea46e4b688dc->leave($__internal_e31adcc917e1cf4d945c5fd353ff7e2f122df1c6d099b29dd874ea46e4b688dc_prof);

    }

    // line 42
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_71061084a0b23db0d4a63fc44826a62fbf275322d0c00e5fc284e586a9efec1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71061084a0b23db0d4a63fc44826a62fbf275322d0c00e5fc284e586a9efec1b->enter($__internal_71061084a0b23db0d4a63fc44826a62fbf275322d0c00e5fc284e586a9efec1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_ffc524af99c84da11a818fe098f7cdc2ef10bbc29bb39596e815ed3d5625786b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc524af99c84da11a818fe098f7cdc2ef10bbc29bb39596e815ed3d5625786b->enter($__internal_ffc524af99c84da11a818fe098f7cdc2ef10bbc29bb39596e815ed3d5625786b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_ffc524af99c84da11a818fe098f7cdc2ef10bbc29bb39596e815ed3d5625786b->leave($__internal_ffc524af99c84da11a818fe098f7cdc2ef10bbc29bb39596e815ed3d5625786b_prof);

        
        $__internal_71061084a0b23db0d4a63fc44826a62fbf275322d0c00e5fc284e586a9efec1b->leave($__internal_71061084a0b23db0d4a63fc44826a62fbf275322d0c00e5fc284e586a9efec1b_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9718b85648251823b187c9c55b4d76d7831ea25b1fcd9e10bba90a472a101bb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9718b85648251823b187c9c55b4d76d7831ea25b1fcd9e10bba90a472a101bb7->enter($__internal_9718b85648251823b187c9c55b4d76d7831ea25b1fcd9e10bba90a472a101bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cffc3b875048d8494c508ca490966a1cfbabe36cc13e84ecdee53f3a43785a2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cffc3b875048d8494c508ca490966a1cfbabe36cc13e84ecdee53f3a43785a2a->enter($__internal_cffc3b875048d8494c508ca490966a1cfbabe36cc13e84ecdee53f3a43785a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 71
        echo "    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
";
        
        $__internal_cffc3b875048d8494c508ca490966a1cfbabe36cc13e84ecdee53f3a43785a2a->leave($__internal_cffc3b875048d8494c508ca490966a1cfbabe36cc13e84ecdee53f3a43785a2a_prof);

        
        $__internal_9718b85648251823b187c9c55b4d76d7831ea25b1fcd9e10bba90a472a101bb7->leave($__internal_9718b85648251823b187c9c55b4d76d7831ea25b1fcd9e10bba90a472a101bb7_prof);

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
