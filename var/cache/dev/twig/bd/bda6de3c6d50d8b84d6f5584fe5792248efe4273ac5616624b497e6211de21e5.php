<?php

/* base.html.twig */
class __TwigTemplate_6fd77ec57e8ea38fb6d0fd910a35130ec8a283833106810d86d8f168db2383b1 extends Twig_Template
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
        $__internal_331cbbb90045d1ddedf7e81f872ccf59c2608235010b4245846663f9ea3af96c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_331cbbb90045d1ddedf7e81f872ccf59c2608235010b4245846663f9ea3af96c->enter($__internal_331cbbb90045d1ddedf7e81f872ccf59c2608235010b4245846663f9ea3af96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 87
        echo "

";
        // line 89
        $this->displayBlock('javascripts', $context, $blocks);
        // line 113
        echo "    </div>
</body>
</html>";
        
        $__internal_331cbbb90045d1ddedf7e81f872ccf59c2608235010b4245846663f9ea3af96c->leave($__internal_331cbbb90045d1ddedf7e81f872ccf59c2608235010b4245846663f9ea3af96c_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_36d9c85a0896c07da4536dea77ef453bf28b5d6ca5a28ebe4389868fdb40caa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36d9c85a0896c07da4536dea77ef453bf28b5d6ca5a28ebe4389868fdb40caa7->enter($__internal_36d9c85a0896c07da4536dea77ef453bf28b5d6ca5a28ebe4389868fdb40caa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper";
        
        $__internal_36d9c85a0896c07da4536dea77ef453bf28b5d6ca5a28ebe4389868fdb40caa7->leave($__internal_36d9c85a0896c07da4536dea77ef453bf28b5d6ca5a28ebe4389868fdb40caa7_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6f521acfde10980db079554f6cf4689a4269ef9c8369f16345fe0b59856f79f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f521acfde10980db079554f6cf4689a4269ef9c8369f16345fe0b59856f79f7->enter($__internal_6f521acfde10980db079554f6cf4689a4269ef9c8369f16345fe0b59856f79f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6f521acfde10980db079554f6cf4689a4269ef9c8369f16345fe0b59856f79f7->leave($__internal_6f521acfde10980db079554f6cf4689a4269ef9c8369f16345fe0b59856f79f7_prof);

    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_3ae652ac41c3edc5467f56fbccc10788d2267c5c0152c05fa96207a2f2cfa175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ae652ac41c3edc5467f56fbccc10788d2267c5c0152c05fa96207a2f2cfa175->enter($__internal_3ae652ac41c3edc5467f56fbccc10788d2267c5c0152c05fa96207a2f2cfa175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
                                <a class=\"nav-link badge badge-info\" id=\"logInBtn\" href=\"#\">Log-In</a>
                            </li>
                            <li class=\"nav-item text-uppercase\">
                                <a class=\"nav-link badge badge-dark\" id=\"singUpBtn\" href=\"#\">Sing-Up</a>
                            </li>
                        </ul>
                    </div>
                </nav>
        <div class=\"p-3 mb-2 bg-success text-white\" id=\"logIn_form\" style=\"display: none;\">
            <form>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Email address</label>
                    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\">
                    <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Password</label>
                    <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Log-In</button>
            </form>
        </div>
        <div class=\"p-3 mb-2 bg-primary  text-white\" id=\"singUp_form\"  style=\"display: none;\">
            <form>
                <div class=\"form-group\">
                    <label for=\"firstName\">Firstname</label>
                    <input type=\"text\" class=\"form-control\" id=\"firstName\" aria-describedby=\"firstName\" placeholder=\"Enter your Firstname\">
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Email address</label>
                    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\">
                    <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Password</label>
                    <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">
                </div>
                <button type=\"submit\" class=\"btn btn-success\">Sing-Up</button>
            </form>
        </div>
    </div>
            ";
        
        $__internal_3ae652ac41c3edc5467f56fbccc10788d2267c5c0152c05fa96207a2f2cfa175->leave($__internal_3ae652ac41c3edc5467f56fbccc10788d2267c5c0152c05fa96207a2f2cfa175_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_40abbad0bd85b6df78fb9228100cff0f2346835aad24b677f2c652de30dd595f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40abbad0bd85b6df78fb9228100cff0f2346835aad24b677f2c652de30dd595f->enter($__internal_40abbad0bd85b6df78fb9228100cff0f2346835aad24b677f2c652de30dd595f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        echo "    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$('#logInBtn').show();
            \$('#logIn_form').hide();
            \$('#singUpBtn').show();
            \$('#singUp_form').hide();
            \$('#logInBtn').click(function(event) {
                event.preventDefault(); // Для того чтобы при нажатии на ссылку не кидало вверх
                \$('#logIn_form').slideToggle();
                \$('#singUp_form').hide();
            });
            \$('#singUpBtn').click(function(event) {
                event.preventDefault(); // Для того чтобы при нажатии на ссылку не кидало вверх
                \$('#singUp_form').slideToggle();
                \$('#logIn_form').hide();
            });
        });
    </script>
";
        
        $__internal_40abbad0bd85b6df78fb9228100cff0f2346835aad24b677f2c652de30dd595f->leave($__internal_40abbad0bd85b6df78fb9228100cff0f2346835aad24b677f2c652de30dd595f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  178 => 90,  172 => 89,  107 => 28,  101 => 27,  82 => 11,  76 => 10,  64 => 6,  55 => 113,  53 => 89,  49 => 87,  47 => 27,  42 => 24,  40 => 10,  33 => 6,  26 => 1,);
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
                                <a class=\"nav-link badge badge-info\" id=\"logInBtn\" href=\"#\">Log-In</a>
                            </li>
                            <li class=\"nav-item text-uppercase\">
                                <a class=\"nav-link badge badge-dark\" id=\"singUpBtn\" href=\"#\">Sing-Up</a>
                            </li>
                        </ul>
                    </div>
                </nav>
        <div class=\"p-3 mb-2 bg-success text-white\" id=\"logIn_form\" style=\"display: none;\">
            <form>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Email address</label>
                    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\">
                    <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Password</label>
                    <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Log-In</button>
            </form>
        </div>
        <div class=\"p-3 mb-2 bg-primary  text-white\" id=\"singUp_form\"  style=\"display: none;\">
            <form>
                <div class=\"form-group\">
                    <label for=\"firstName\">Firstname</label>
                    <input type=\"text\" class=\"form-control\" id=\"firstName\" aria-describedby=\"firstName\" placeholder=\"Enter your Firstname\">
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Email address</label>
                    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\">
                    <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Password</label>
                    <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">
                </div>
                <button type=\"submit\" class=\"btn btn-success\">Sing-Up</button>
            </form>
        </div>
    </div>
            {% endblock %}


{% block javascripts %}
    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$('#logInBtn').show();
            \$('#logIn_form').hide();
            \$('#singUpBtn').show();
            \$('#singUp_form').hide();
            \$('#logInBtn').click(function(event) {
                event.preventDefault(); // Для того чтобы при нажатии на ссылку не кидало вверх
                \$('#logIn_form').slideToggle();
                \$('#singUp_form').hide();
            });
            \$('#singUpBtn').click(function(event) {
                event.preventDefault(); // Для того чтобы при нажатии на ссылку не кидало вверх
                \$('#singUp_form').slideToggle();
                \$('#logIn_form').hide();
            });
        });
    </script>
{% endblock %}
    </div>
</body>
</html>", "base.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\base.html.twig");
    }
}
