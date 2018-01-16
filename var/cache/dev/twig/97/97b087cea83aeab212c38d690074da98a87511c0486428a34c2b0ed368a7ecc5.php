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
        $__internal_14e1534b994ac01040698f9e91d9c1789c738b6a96860d69c0217ae5559710f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14e1534b994ac01040698f9e91d9c1789c738b6a96860d69c0217ae5559710f4->enter($__internal_14e1534b994ac01040698f9e91d9c1789c738b6a96860d69c0217ae5559710f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_25c4f85c444de69d7ecae93cf8a21a0326e5688c3025d2067b452fb3fc4d79a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25c4f85c444de69d7ecae93cf8a21a0326e5688c3025d2067b452fb3fc4d79a4->enter($__internal_25c4f85c444de69d7ecae93cf8a21a0326e5688c3025d2067b452fb3fc4d79a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_14e1534b994ac01040698f9e91d9c1789c738b6a96860d69c0217ae5559710f4->leave($__internal_14e1534b994ac01040698f9e91d9c1789c738b6a96860d69c0217ae5559710f4_prof);

        
        $__internal_25c4f85c444de69d7ecae93cf8a21a0326e5688c3025d2067b452fb3fc4d79a4->leave($__internal_25c4f85c444de69d7ecae93cf8a21a0326e5688c3025d2067b452fb3fc4d79a4_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8b8f3ab0d96a3946fd3259981068cbc153dbb82f8c794795e4a46fd0e187c05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8b8f3ab0d96a3946fd3259981068cbc153dbb82f8c794795e4a46fd0e187c05->enter($__internal_f8b8f3ab0d96a3946fd3259981068cbc153dbb82f8c794795e4a46fd0e187c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_68ecb1ef766d51120fc888beaa87e08e9d54149060374553a9f82b6936f9af6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ecb1ef766d51120fc888beaa87e08e9d54149060374553a9f82b6936f9af6a->enter($__internal_68ecb1ef766d51120fc888beaa87e08e9d54149060374553a9f82b6936f9af6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper";
        
        $__internal_68ecb1ef766d51120fc888beaa87e08e9d54149060374553a9f82b6936f9af6a->leave($__internal_68ecb1ef766d51120fc888beaa87e08e9d54149060374553a9f82b6936f9af6a_prof);

        
        $__internal_f8b8f3ab0d96a3946fd3259981068cbc153dbb82f8c794795e4a46fd0e187c05->leave($__internal_f8b8f3ab0d96a3946fd3259981068cbc153dbb82f8c794795e4a46fd0e187c05_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cf2e0b371df29e814d80c2bda8f835ced2c6606924ac43426c13961708171a8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf2e0b371df29e814d80c2bda8f835ced2c6606924ac43426c13961708171a8d->enter($__internal_cf2e0b371df29e814d80c2bda8f835ced2c6606924ac43426c13961708171a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d344bf4b563c2d07fe6b3480c73667d1be56594b0c05e1e8f9070aab7eb95877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d344bf4b563c2d07fe6b3480c73667d1be56594b0c05e1e8f9070aab7eb95877->enter($__internal_d344bf4b563c2d07fe6b3480c73667d1be56594b0c05e1e8f9070aab7eb95877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d344bf4b563c2d07fe6b3480c73667d1be56594b0c05e1e8f9070aab7eb95877->leave($__internal_d344bf4b563c2d07fe6b3480c73667d1be56594b0c05e1e8f9070aab7eb95877_prof);

        
        $__internal_cf2e0b371df29e814d80c2bda8f835ced2c6606924ac43426c13961708171a8d->leave($__internal_cf2e0b371df29e814d80c2bda8f835ced2c6606924ac43426c13961708171a8d_prof);

    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_83ab811ef39428116fb52497f3a38bbe4a4c44105ed0a5034f5e2f3a7df0090f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83ab811ef39428116fb52497f3a38bbe4a4c44105ed0a5034f5e2f3a7df0090f->enter($__internal_83ab811ef39428116fb52497f3a38bbe4a4c44105ed0a5034f5e2f3a7df0090f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_b16780e56b05dfba706eb48938172c33bc96200ac3cf16c92a14c321b784d9d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b16780e56b05dfba706eb48938172c33bc96200ac3cf16c92a14c321b784d9d7->enter($__internal_b16780e56b05dfba706eb48938172c33bc96200ac3cf16c92a14c321b784d9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 28
        echo "                <nav class=\"navbar sticky-top navbar-expand-lg navbar-light bg-light justify-content-end main_menu\">
                    <a class=\"navbar-brand\" href=\"#\">Merch Helper</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse col\" id=\"navbarSupportedContent\">
                        <ul class=\"nav justify-content-end main_menu ml-auto\">
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
                            ";
        // line 51
        echo "                                ";
        // line 52
        echo "                                ";
        // line 53
        echo "                                    ";
        // line 54
        echo "                                ";
        // line 55
        echo "                            ";
        // line 56
        echo "                            ";
        // line 57
        echo "                                ";
        // line 58
        echo "                                    ";
        // line 59
        echo "                                ";
        // line 60
        echo "                            ";
        // line 61
        echo "
                        </ul>
                    </div>
                </nav>
    </div>
            ";
        
        $__internal_b16780e56b05dfba706eb48938172c33bc96200ac3cf16c92a14c321b784d9d7->leave($__internal_b16780e56b05dfba706eb48938172c33bc96200ac3cf16c92a14c321b784d9d7_prof);

        
        $__internal_83ab811ef39428116fb52497f3a38bbe4a4c44105ed0a5034f5e2f3a7df0090f->leave($__internal_83ab811ef39428116fb52497f3a38bbe4a4c44105ed0a5034f5e2f3a7df0090f_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c6ab155a2c79b3007f558bcb95c586c4f7d424f5cb41982f76ae52bd6ce1158b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6ab155a2c79b3007f558bcb95c586c4f7d424f5cb41982f76ae52bd6ce1158b->enter($__internal_c6ab155a2c79b3007f558bcb95c586c4f7d424f5cb41982f76ae52bd6ce1158b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_23e3916a38343337932e61a77651f48c7af994119c53658c76e3adc126097089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23e3916a38343337932e61a77651f48c7af994119c53658c76e3adc126097089->enter($__internal_23e3916a38343337932e61a77651f48c7af994119c53658c76e3adc126097089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 70
        echo "    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
";
        
        $__internal_23e3916a38343337932e61a77651f48c7af994119c53658c76e3adc126097089->leave($__internal_23e3916a38343337932e61a77651f48c7af994119c53658c76e3adc126097089_prof);

        
        $__internal_c6ab155a2c79b3007f558bcb95c586c4f7d424f5cb41982f76ae52bd6ce1158b->leave($__internal_c6ab155a2c79b3007f558bcb95c586c4f7d424f5cb41982f76ae52bd6ce1158b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  196 => 70,  187 => 69,  172 => 61,  170 => 60,  168 => 59,  166 => 58,  164 => 57,  162 => 56,  160 => 55,  158 => 54,  156 => 53,  154 => 52,  152 => 51,  128 => 28,  119 => 27,  97 => 11,  88 => 10,  70 => 6,  58 => 75,  56 => 69,  52 => 67,  50 => 27,  45 => 24,  43 => 10,  36 => 6,  29 => 1,);
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
                <nav class=\"navbar sticky-top navbar-expand-lg navbar-light bg-light justify-content-end main_menu\">
                    <a class=\"navbar-brand\" href=\"#\">Merch Helper</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse col\" id=\"navbarSupportedContent\">
                        <ul class=\"nav justify-content-end main_menu ml-auto\">
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
                            {#{% if is_granted('IS_AUTHENTICATED_FULLY') %}#}
                                {#<p>{{ app.user.username }}</p>#}
                                {#<li class=\"nav-item text-uppercase\">#}
                                    {#<a class=\"nav-link badge badge-danger\" id=\"singUpBtn\" href=\"{{ path('logout') }}\" style=\"color: white\">Logout</a>#}
                                {#</li>#}
                            {#{% endif %}#}
                            {#{% if is_granted('ROLE_USER') %}#}
                                {#<li class=\"nav-item text-uppercase\">#}
                                    {#<a class=\"nav-link badge badge-danger\" id=\"singUpBtn\" href=\"#\" style=\"color: white\">Delete</a>#}
                                {#</li>#}
                            {#{% endif %}#}

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
