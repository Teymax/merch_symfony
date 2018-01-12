<?php

/* base.html.twig */
class __TwigTemplate_f66fb7b04dec026bc26e1743f6df5239ff9ba2b2aa8faefe5b31a65fe4f05a80 extends Twig_Template
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
        $__internal_078dc2fd19a7818d1c54f1ce0b19621e2543732ca8c8fa94b4f0109ac665cdcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_078dc2fd19a7818d1c54f1ce0b19621e2543732ca8c8fa94b4f0109ac665cdcb->enter($__internal_078dc2fd19a7818d1c54f1ce0b19621e2543732ca8c8fa94b4f0109ac665cdcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4977ec70fdd4ba184a06da9bf372afd4f8366ba18fafbb7f760b64ff0b65cdf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4977ec70fdd4ba184a06da9bf372afd4f8366ba18fafbb7f760b64ff0b65cdf1->enter($__internal_4977ec70fdd4ba184a06da9bf372afd4f8366ba18fafbb7f760b64ff0b65cdf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 55
        echo "

";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "    </div>
</body>
</html>";
        
        $__internal_078dc2fd19a7818d1c54f1ce0b19621e2543732ca8c8fa94b4f0109ac665cdcb->leave($__internal_078dc2fd19a7818d1c54f1ce0b19621e2543732ca8c8fa94b4f0109ac665cdcb_prof);

        
        $__internal_4977ec70fdd4ba184a06da9bf372afd4f8366ba18fafbb7f760b64ff0b65cdf1->leave($__internal_4977ec70fdd4ba184a06da9bf372afd4f8366ba18fafbb7f760b64ff0b65cdf1_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd8a41e8e9796a046f2fff0ba6c76a74f6cdb4a7d9aa401b817c7136bcb4057c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd8a41e8e9796a046f2fff0ba6c76a74f6cdb4a7d9aa401b817c7136bcb4057c->enter($__internal_fd8a41e8e9796a046f2fff0ba6c76a74f6cdb4a7d9aa401b817c7136bcb4057c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f441baa29b0d125659cc46710fba8fa2091bf3ac871c7328709dabc364903eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f441baa29b0d125659cc46710fba8fa2091bf3ac871c7328709dabc364903eb5->enter($__internal_f441baa29b0d125659cc46710fba8fa2091bf3ac871c7328709dabc364903eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper";
        
        $__internal_f441baa29b0d125659cc46710fba8fa2091bf3ac871c7328709dabc364903eb5->leave($__internal_f441baa29b0d125659cc46710fba8fa2091bf3ac871c7328709dabc364903eb5_prof);

        
        $__internal_fd8a41e8e9796a046f2fff0ba6c76a74f6cdb4a7d9aa401b817c7136bcb4057c->leave($__internal_fd8a41e8e9796a046f2fff0ba6c76a74f6cdb4a7d9aa401b817c7136bcb4057c_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c815ca10af48aaf610a522bc72126e7b8bc1b7f2bc7d81dbb1def03cdc8df1cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c815ca10af48aaf610a522bc72126e7b8bc1b7f2bc7d81dbb1def03cdc8df1cf->enter($__internal_c815ca10af48aaf610a522bc72126e7b8bc1b7f2bc7d81dbb1def03cdc8df1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0992fe4d9f78a2e9b85e70e1e3e90a5fae007cecdc19ab7ba625996d85ab646c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0992fe4d9f78a2e9b85e70e1e3e90a5fae007cecdc19ab7ba625996d85ab646c->enter($__internal_0992fe4d9f78a2e9b85e70e1e3e90a5fae007cecdc19ab7ba625996d85ab646c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_0992fe4d9f78a2e9b85e70e1e3e90a5fae007cecdc19ab7ba625996d85ab646c->leave($__internal_0992fe4d9f78a2e9b85e70e1e3e90a5fae007cecdc19ab7ba625996d85ab646c_prof);

        
        $__internal_c815ca10af48aaf610a522bc72126e7b8bc1b7f2bc7d81dbb1def03cdc8df1cf->leave($__internal_c815ca10af48aaf610a522bc72126e7b8bc1b7f2bc7d81dbb1def03cdc8df1cf_prof);

    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_21e1643f60b7831ac3867894c2542fa6c55a03b414ec7238e4689e002d7478d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21e1643f60b7831ac3867894c2542fa6c55a03b414ec7238e4689e002d7478d0->enter($__internal_21e1643f60b7831ac3867894c2542fa6c55a03b414ec7238e4689e002d7478d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_778f9f524ec7f929f39dc73808d3794ab4724d18584c54b2af5ffae66152d2cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_778f9f524ec7f929f39dc73808d3794ab4724d18584c54b2af5ffae66152d2cf->enter($__internal_778f9f524ec7f929f39dc73808d3794ab4724d18584c54b2af5ffae66152d2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 28
        echo "                <nav class=\"navbar sticky-top navbar-expand-lg navbar-light bg-light\">
                    <a class=\"navbar-brand\" href=\"#\">Merch Helper</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse col\" id=\"navbarSupportedContent\">
                        <ul class=\"nav justify-content-end main_menu\">
                            <li class=\"nav-item text-uppercase\">
                                <a class=\"nav-link\" id=\"home\" href=\"#\">Home</a>
                            </li>
                            <li class=\"nav-item text-uppercase\">
                                <a class=\"nav-link\" id=\"about\" href=\"#\">About</a>
                            </li>
                            <li class=\"nav-item text-uppercase\">
                                <a class=\"nav-link\" id=\"contact\" href=\"#\">Contact</a>
                            </li>
                            <li class=\"nav-item text-uppercase\">
                                <a class=\"nav-link badge badge-info\" id=\"logInBtn\" href=\"login\" style=\"color: white\">Log-In</a>
                            </li>
                            <li class=\"nav-item text-uppercase\">
                                <a class=\"nav-link badge badge-dark\" id=\"singUpBtn\" href=\"sing-up\" style=\"color: white\">Sing-Up</a>
                            </li>
                        </ul>
                    </div>
                </nav>
    </div>
            ";
        
        $__internal_778f9f524ec7f929f39dc73808d3794ab4724d18584c54b2af5ffae66152d2cf->leave($__internal_778f9f524ec7f929f39dc73808d3794ab4724d18584c54b2af5ffae66152d2cf_prof);

        
        $__internal_21e1643f60b7831ac3867894c2542fa6c55a03b414ec7238e4689e002d7478d0->leave($__internal_21e1643f60b7831ac3867894c2542fa6c55a03b414ec7238e4689e002d7478d0_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c8e5cd6a8d6b59435e6fe3ebb39da46173a93079750513109f5788ca8ca4ed47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8e5cd6a8d6b59435e6fe3ebb39da46173a93079750513109f5788ca8ca4ed47->enter($__internal_c8e5cd6a8d6b59435e6fe3ebb39da46173a93079750513109f5788ca8ca4ed47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6b43de68aa4c7d9b2a5df3267e7a181f763ee0354a9fe2da18a421fca2396010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b43de68aa4c7d9b2a5df3267e7a181f763ee0354a9fe2da18a421fca2396010->enter($__internal_6b43de68aa4c7d9b2a5df3267e7a181f763ee0354a9fe2da18a421fca2396010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
";
        
        $__internal_6b43de68aa4c7d9b2a5df3267e7a181f763ee0354a9fe2da18a421fca2396010->leave($__internal_6b43de68aa4c7d9b2a5df3267e7a181f763ee0354a9fe2da18a421fca2396010_prof);

        
        $__internal_c8e5cd6a8d6b59435e6fe3ebb39da46173a93079750513109f5788ca8ca4ed47->leave($__internal_c8e5cd6a8d6b59435e6fe3ebb39da46173a93079750513109f5788ca8ca4ed47_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  173 => 58,  164 => 57,  128 => 28,  119 => 27,  97 => 11,  88 => 10,  70 => 6,  58 => 63,  56 => 57,  52 => 55,  50 => 27,  45 => 24,  43 => 10,  36 => 6,  29 => 1,);
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
                        <ul class=\"nav justify-content-end main_menu\">
                            <li class=\"nav-item text-uppercase\">
                                <a class=\"nav-link\" id=\"home\" href=\"#\">Home</a>
                            </li>
                            <li class=\"nav-item text-uppercase\">
                                <a class=\"nav-link\" id=\"about\" href=\"#\">About</a>
                            </li>
                            <li class=\"nav-item text-uppercase\">
                                <a class=\"nav-link\" id=\"contact\" href=\"#\">Contact</a>
                            </li>
                            <li class=\"nav-item text-uppercase\">
                                <a class=\"nav-link badge badge-info\" id=\"logInBtn\" href=\"login\" style=\"color: white\">Log-In</a>
                            </li>
                            <li class=\"nav-item text-uppercase\">
                                <a class=\"nav-link badge badge-dark\" id=\"singUpBtn\" href=\"sing-up\" style=\"color: white\">Sing-Up</a>
                            </li>
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
</html>", "base.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\base.html.twig");
    }
}
