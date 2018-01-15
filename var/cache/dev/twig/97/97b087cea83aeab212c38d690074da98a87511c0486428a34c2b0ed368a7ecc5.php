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
        $__internal_ff6c57103e5e21a467adebac5903536d0dbedd2890072db5fc66ae93f7b0382a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff6c57103e5e21a467adebac5903536d0dbedd2890072db5fc66ae93f7b0382a->enter($__internal_ff6c57103e5e21a467adebac5903536d0dbedd2890072db5fc66ae93f7b0382a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_609d55ed1613339b4ff6e5a1ac71b2fcd18c4abd2923ed200897d40497edb065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_609d55ed1613339b4ff6e5a1ac71b2fcd18c4abd2923ed200897d40497edb065->enter($__internal_609d55ed1613339b4ff6e5a1ac71b2fcd18c4abd2923ed200897d40497edb065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ff6c57103e5e21a467adebac5903536d0dbedd2890072db5fc66ae93f7b0382a->leave($__internal_ff6c57103e5e21a467adebac5903536d0dbedd2890072db5fc66ae93f7b0382a_prof);

        
        $__internal_609d55ed1613339b4ff6e5a1ac71b2fcd18c4abd2923ed200897d40497edb065->leave($__internal_609d55ed1613339b4ff6e5a1ac71b2fcd18c4abd2923ed200897d40497edb065_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_bedf54e4bb33d479a6649e3f0641cec61d4b4b9cc6a2a67cebf8722bd06b00e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bedf54e4bb33d479a6649e3f0641cec61d4b4b9cc6a2a67cebf8722bd06b00e3->enter($__internal_bedf54e4bb33d479a6649e3f0641cec61d4b4b9cc6a2a67cebf8722bd06b00e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3f490440a36bcd4da25a9908fe7273c5caf57acad4a2f102e32177077fdfe54d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f490440a36bcd4da25a9908fe7273c5caf57acad4a2f102e32177077fdfe54d->enter($__internal_3f490440a36bcd4da25a9908fe7273c5caf57acad4a2f102e32177077fdfe54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper";
        
        $__internal_3f490440a36bcd4da25a9908fe7273c5caf57acad4a2f102e32177077fdfe54d->leave($__internal_3f490440a36bcd4da25a9908fe7273c5caf57acad4a2f102e32177077fdfe54d_prof);

        
        $__internal_bedf54e4bb33d479a6649e3f0641cec61d4b4b9cc6a2a67cebf8722bd06b00e3->leave($__internal_bedf54e4bb33d479a6649e3f0641cec61d4b4b9cc6a2a67cebf8722bd06b00e3_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e6a51ce6b790034c264337b1d14d1ea9c4ff98d730f362c9b97fb0c28f70fccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6a51ce6b790034c264337b1d14d1ea9c4ff98d730f362c9b97fb0c28f70fccf->enter($__internal_e6a51ce6b790034c264337b1d14d1ea9c4ff98d730f362c9b97fb0c28f70fccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_87f0c480e8e38ddfbac59def42992f220548bfdb654dab9f2e043fd71bb380d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87f0c480e8e38ddfbac59def42992f220548bfdb654dab9f2e043fd71bb380d1->enter($__internal_87f0c480e8e38ddfbac59def42992f220548bfdb654dab9f2e043fd71bb380d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_87f0c480e8e38ddfbac59def42992f220548bfdb654dab9f2e043fd71bb380d1->leave($__internal_87f0c480e8e38ddfbac59def42992f220548bfdb654dab9f2e043fd71bb380d1_prof);

        
        $__internal_e6a51ce6b790034c264337b1d14d1ea9c4ff98d730f362c9b97fb0c28f70fccf->leave($__internal_e6a51ce6b790034c264337b1d14d1ea9c4ff98d730f362c9b97fb0c28f70fccf_prof);

    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_044f96ef9b0c95a1488272c03db3d9a72a6ec8600760cb1abfbcd641fa9c8fb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_044f96ef9b0c95a1488272c03db3d9a72a6ec8600760cb1abfbcd641fa9c8fb7->enter($__internal_044f96ef9b0c95a1488272c03db3d9a72a6ec8600760cb1abfbcd641fa9c8fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_706000ffa6f8b43f90c59ec9ea11b73e8152c194a6812a86d096946dfb3f6694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_706000ffa6f8b43f90c59ec9ea11b73e8152c194a6812a86d096946dfb3f6694->enter($__internal_706000ffa6f8b43f90c59ec9ea11b73e8152c194a6812a86d096946dfb3f6694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
                                <a class=\"nav-link badge badge-dark\" id=\"singUpBtn\" href=\"register\" style=\"color: white\">Sing-Up</a>
                            </li>
                        </ul>
                    </div>
                </nav>
    </div>
            ";
        
        $__internal_706000ffa6f8b43f90c59ec9ea11b73e8152c194a6812a86d096946dfb3f6694->leave($__internal_706000ffa6f8b43f90c59ec9ea11b73e8152c194a6812a86d096946dfb3f6694_prof);

        
        $__internal_044f96ef9b0c95a1488272c03db3d9a72a6ec8600760cb1abfbcd641fa9c8fb7->leave($__internal_044f96ef9b0c95a1488272c03db3d9a72a6ec8600760cb1abfbcd641fa9c8fb7_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_83b75c6e035da96a004b34c20405af45a8bc7fb9b5bed73d5048b6a717a3ea69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83b75c6e035da96a004b34c20405af45a8bc7fb9b5bed73d5048b6a717a3ea69->enter($__internal_83b75c6e035da96a004b34c20405af45a8bc7fb9b5bed73d5048b6a717a3ea69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cc549e484a295e25b9d37d3f428dcf44fa4535062bd6ab7cc111b2176b4844d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc549e484a295e25b9d37d3f428dcf44fa4535062bd6ab7cc111b2176b4844d8->enter($__internal_cc549e484a295e25b9d37d3f428dcf44fa4535062bd6ab7cc111b2176b4844d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
";
        
        $__internal_cc549e484a295e25b9d37d3f428dcf44fa4535062bd6ab7cc111b2176b4844d8->leave($__internal_cc549e484a295e25b9d37d3f428dcf44fa4535062bd6ab7cc111b2176b4844d8_prof);

        
        $__internal_83b75c6e035da96a004b34c20405af45a8bc7fb9b5bed73d5048b6a717a3ea69->leave($__internal_83b75c6e035da96a004b34c20405af45a8bc7fb9b5bed73d5048b6a717a3ea69_prof);

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
                                <a class=\"nav-link badge badge-dark\" id=\"singUpBtn\" href=\"register\" style=\"color: white\">Sing-Up</a>
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
