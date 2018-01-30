<?php

/* admin/admin.html.twig */
class __TwigTemplate_fce035e265855a543b50bb1c0d30328442a5aaecef836478350f88cfe81d2cc3 extends Twig_Template
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
        $__internal_b62e404305079a44ad6772c5c76b99ab11da0aa89e7a1554af09bd01d47e820e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b62e404305079a44ad6772c5c76b99ab11da0aa89e7a1554af09bd01d47e820e->enter($__internal_b62e404305079a44ad6772c5c76b99ab11da0aa89e7a1554af09bd01d47e820e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $__internal_d3b823ef0275a647be7b45dc8b289a42847209989014ee9ddec93aa8bf9c2a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b823ef0275a647be7b45dc8b289a42847209989014ee9ddec93aa8bf9c2a71->enter($__internal_d3b823ef0275a647be7b45dc8b289a42847209989014ee9ddec93aa8bf9c2a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

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
        // line 92
        echo "

";
        // line 94
        $this->displayBlock('javascripts', $context, $blocks);
        // line 100
        echo "    </div>
</body>
</html>";
        
        $__internal_b62e404305079a44ad6772c5c76b99ab11da0aa89e7a1554af09bd01d47e820e->leave($__internal_b62e404305079a44ad6772c5c76b99ab11da0aa89e7a1554af09bd01d47e820e_prof);

        
        $__internal_d3b823ef0275a647be7b45dc8b289a42847209989014ee9ddec93aa8bf9c2a71->leave($__internal_d3b823ef0275a647be7b45dc8b289a42847209989014ee9ddec93aa8bf9c2a71_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd71dcbba424f623c275fdf30621554ae142fbf78b05b706ce954d795b2fbda2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd71dcbba424f623c275fdf30621554ae142fbf78b05b706ce954d795b2fbda2->enter($__internal_cd71dcbba424f623c275fdf30621554ae142fbf78b05b706ce954d795b2fbda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_18f9fd376c1a44bdf493d990bfd23d958e7fc69b90452929f8d89ffc244a3fe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f9fd376c1a44bdf493d990bfd23d958e7fc69b90452929f8d89ffc244a3fe5->enter($__internal_18f9fd376c1a44bdf493d990bfd23d958e7fc69b90452929f8d89ffc244a3fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper";
        
        $__internal_18f9fd376c1a44bdf493d990bfd23d958e7fc69b90452929f8d89ffc244a3fe5->leave($__internal_18f9fd376c1a44bdf493d990bfd23d958e7fc69b90452929f8d89ffc244a3fe5_prof);

        
        $__internal_cd71dcbba424f623c275fdf30621554ae142fbf78b05b706ce954d795b2fbda2->leave($__internal_cd71dcbba424f623c275fdf30621554ae142fbf78b05b706ce954d795b2fbda2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a1ddf2665f0928caddd1785285feeb1fa0006be56116a98020ec350cbc4bbdd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1ddf2665f0928caddd1785285feeb1fa0006be56116a98020ec350cbc4bbdd0->enter($__internal_a1ddf2665f0928caddd1785285feeb1fa0006be56116a98020ec350cbc4bbdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3a29fd4f32170163d14156a07904e99ceaa7b80bce7133da9810b7df412a8c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a29fd4f32170163d14156a07904e99ceaa7b80bce7133da9810b7df412a8c30->enter($__internal_3a29fd4f32170163d14156a07904e99ceaa7b80bce7133da9810b7df412a8c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_3a29fd4f32170163d14156a07904e99ceaa7b80bce7133da9810b7df412a8c30->leave($__internal_3a29fd4f32170163d14156a07904e99ceaa7b80bce7133da9810b7df412a8c30_prof);

        
        $__internal_a1ddf2665f0928caddd1785285feeb1fa0006be56116a98020ec350cbc4bbdd0->leave($__internal_a1ddf2665f0928caddd1785285feeb1fa0006be56116a98020ec350cbc4bbdd0_prof);

    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_61ee2c85e0f9abd858ee3c69b5583c8c7df8100d1ea29a19f0b0fcd3135cbc7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61ee2c85e0f9abd858ee3c69b5583c8c7df8100d1ea29a19f0b0fcd3135cbc7b->enter($__internal_61ee2c85e0f9abd858ee3c69b5583c8c7df8100d1ea29a19f0b0fcd3135cbc7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_0bd225612462b1c8827aeec1d88a9acdfffbbc5a3bad7d0bd2496480bfeaf0cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd225612462b1c8827aeec1d88a9acdfffbbc5a3bad7d0bd2496480bfeaf0cd->enter($__internal_0bd225612462b1c8827aeec1d88a9acdfffbbc5a3bad7d0bd2496480bfeaf0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
            echo "                                <li class=\"nav-item active\">
                                    <p class=\"nav-link\" style=\"color: black;\">Hello, <span class=\"text-uppercase\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 37, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo "</span></p>
                                </li>
                                <li class=\"nav-item text-uppercase\">
                                    <a class=\"nav-link badge badge-danger\" id=\"singUpBtn\" href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" style=\"color: white\">Logout</a>
                                </li>
                            ";
        }
        // line 43
        echo "                            ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 44
            echo "                            <li class=\"nav-item text-uppercase\">
                            <a class=\"nav-link badge badge-danger\" id=\"singUpBtn\" href=\"#\" style=\"color: white\">User Test</a>
                            </li>
                            ";
        }
        // line 48
        echo "                        </ul>
                    </div>
                </nav>
        <div class=\"container-fluid\">
            <table class=\"table\">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Registration Date</th>
                    <th>Listing Count</th>
                    <th>Account Type</th>

                </tr>
                </thead>
                <tbody>
                ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 65, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
            // line 66
            echo "                <tr>
                    <th scope=\"row\">";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "user_Id", array()), "html", null, true);
            echo "</th>
                    <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "username", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "email", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "regDate", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 71, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 72
                echo "                        ";
                if (($context["key"] == twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "user_Id", array()))) {
                    // line 73
                    echo "                          ";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "
                        ";
                }
                // line 75
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                    </td>
                    <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "accountType", array()), "html", null, true);
            echo "</td>
                    ";
            // line 79
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "accountType", array()) == "free")) {
                // line 80
                echo "                    <td><a class=\"nav-link badge badge-info\" id=\"singUpBtn\" href='";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_adminEdit");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "user_Id", array()), "html", null, true);
                echo "' style=\"color: white\">Update to PRO</a></td>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),             // line 81
$context["users"], "accountType", array()) == "pro")) {
                // line 82
                echo "                        <td><a class=\"nav-link badge badge-danger\" id=\"singUpBtn\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_adminEdit");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "user_Id", array()), "html", null, true);
                echo "\" style=\"color: white\">Update to Free</a></td>
                    ";
            }
            // line 84
            echo "                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                </tbody>
            </table>
        </div>
    </div>

            ";
        
        $__internal_0bd225612462b1c8827aeec1d88a9acdfffbbc5a3bad7d0bd2496480bfeaf0cd->leave($__internal_0bd225612462b1c8827aeec1d88a9acdfffbbc5a3bad7d0bd2496480bfeaf0cd_prof);

        
        $__internal_61ee2c85e0f9abd858ee3c69b5583c8c7df8100d1ea29a19f0b0fcd3135cbc7b->leave($__internal_61ee2c85e0f9abd858ee3c69b5583c8c7df8100d1ea29a19f0b0fcd3135cbc7b_prof);

    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_acb10f880e0e8d1f8871b259276979c540395fb6f56b9cfb24892eaed9321fb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acb10f880e0e8d1f8871b259276979c540395fb6f56b9cfb24892eaed9321fb0->enter($__internal_acb10f880e0e8d1f8871b259276979c540395fb6f56b9cfb24892eaed9321fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_948b7c4b97ecbafce7365ab1ee4e064f58d7fd0cf4616c3134da59cfadcd4276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_948b7c4b97ecbafce7365ab1ee4e064f58d7fd0cf4616c3134da59cfadcd4276->enter($__internal_948b7c4b97ecbafce7365ab1ee4e064f58d7fd0cf4616c3134da59cfadcd4276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 95
        echo "    <!-- Scripts -->
    <script src=\"assets/js/core.min.js\"></script>
    <script src=\"assets/js/app.min.js\"></script>
    <script src=\"assets/js/script.min.js\"></script>
";
        
        $__internal_948b7c4b97ecbafce7365ab1ee4e064f58d7fd0cf4616c3134da59cfadcd4276->leave($__internal_948b7c4b97ecbafce7365ab1ee4e064f58d7fd0cf4616c3134da59cfadcd4276_prof);

        
        $__internal_acb10f880e0e8d1f8871b259276979c540395fb6f56b9cfb24892eaed9321fb0->leave($__internal_acb10f880e0e8d1f8871b259276979c540395fb6f56b9cfb24892eaed9321fb0_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  282 => 95,  273 => 94,  258 => 86,  251 => 84,  243 => 82,  241 => 81,  234 => 80,  231 => 79,  227 => 77,  224 => 76,  218 => 75,  212 => 73,  209 => 72,  205 => 71,  201 => 70,  197 => 69,  193 => 68,  189 => 67,  186 => 66,  182 => 65,  163 => 48,  157 => 44,  154 => 43,  148 => 40,  142 => 37,  139 => 36,  137 => 35,  128 => 28,  119 => 27,  97 => 11,  88 => 10,  70 => 6,  58 => 100,  56 => 94,  52 => 92,  50 => 27,  45 => 24,  43 => 10,  36 => 6,  29 => 1,);
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
                        </ul>
                    </div>
                </nav>
        <div class=\"container-fluid\">
            <table class=\"table\">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Registration Date</th>
                    <th>Listing Count</th>
                    <th>Account Type</th>

                </tr>
                </thead>
                <tbody>
                {% for users in user %}
                <tr>
                    <th scope=\"row\">{{ users.user_Id }}</th>
                    <td>{{ users.username }}</td>
                    <td>{{ users.email }}</td>
                    <td>{{ users.regDate }}</td>
                    <td>{% for key,value in count %}
                        {% if key == users.user_Id %}
                          {{ value }}
                        {% endif %}
                        {% endfor %}
                    </td>
                    <td>{{ users.accountType }}</td>
                    {#{% for color in list.color %}#}
                    {% if users.accountType == 'free' %}
                    <td><a class=\"nav-link badge badge-info\" id=\"singUpBtn\" href='{{ path('app_adminEdit') }}/{{ users.user_Id }}' style=\"color: white\">Update to PRO</a></td>
                    {% elseif users.accountType == 'pro' %}
                        <td><a class=\"nav-link badge badge-danger\" id=\"singUpBtn\" href=\"{{ path('app_adminEdit') }}/{{ users.user_Id }}\" style=\"color: white\">Update to Free</a></td>
                    {% endif %}
                </tr>
                {% endfor %}
                </tbody>
            </table>
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
</html>", "admin/admin.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\admin\\admin.html.twig");
    }
}
