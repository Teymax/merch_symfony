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
        $__internal_0528fe7ef8192e302790b2deecc7494ed0a72672ca982affc80f9723c2414ee0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0528fe7ef8192e302790b2deecc7494ed0a72672ca982affc80f9723c2414ee0->enter($__internal_0528fe7ef8192e302790b2deecc7494ed0a72672ca982affc80f9723c2414ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/list.html.twig"));

        $__internal_8a0320a849953c990637bf134f7f04908229f9b05a71b2333fcc664b2580ce0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0320a849953c990637bf134f7f04908229f9b05a71b2333fcc664b2580ce0f->enter($__internal_8a0320a849953c990637bf134f7f04908229f9b05a71b2333fcc664b2580ce0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/list.html.twig"));

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
        // line 229
        echo "

";
        // line 231
        $this->displayBlock('javascripts', $context, $blocks);
        // line 237
        echo "    </div>
</body>
</html>";
        
        $__internal_0528fe7ef8192e302790b2deecc7494ed0a72672ca982affc80f9723c2414ee0->leave($__internal_0528fe7ef8192e302790b2deecc7494ed0a72672ca982affc80f9723c2414ee0_prof);

        
        $__internal_8a0320a849953c990637bf134f7f04908229f9b05a71b2333fcc664b2580ce0f->leave($__internal_8a0320a849953c990637bf134f7f04908229f9b05a71b2333fcc664b2580ce0f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a73ba6186ce51af07cf4eb77aff3be15f72532633dcc8ce9817101a39183631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a73ba6186ce51af07cf4eb77aff3be15f72532633dcc8ce9817101a39183631->enter($__internal_0a73ba6186ce51af07cf4eb77aff3be15f72532633dcc8ce9817101a39183631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e20e5052030dbce24d20a29f1c860a788c3fc0c43d2be0e6a7c8a4a0084d8479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e20e5052030dbce24d20a29f1c860a788c3fc0c43d2be0e6a7c8a4a0084d8479->enter($__internal_e20e5052030dbce24d20a29f1c860a788c3fc0c43d2be0e6a7c8a4a0084d8479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper";
        
        $__internal_e20e5052030dbce24d20a29f1c860a788c3fc0c43d2be0e6a7c8a4a0084d8479->leave($__internal_e20e5052030dbce24d20a29f1c860a788c3fc0c43d2be0e6a7c8a4a0084d8479_prof);

        
        $__internal_0a73ba6186ce51af07cf4eb77aff3be15f72532633dcc8ce9817101a39183631->leave($__internal_0a73ba6186ce51af07cf4eb77aff3be15f72532633dcc8ce9817101a39183631_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fd23808d7942db1d29493128773332b189888d615d9486d3e1810debea330839 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd23808d7942db1d29493128773332b189888d615d9486d3e1810debea330839->enter($__internal_fd23808d7942db1d29493128773332b189888d615d9486d3e1810debea330839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_73544418ec7fdb0542b627b3321c3929be44ffd1d20285ee76214e00a36f3ed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73544418ec7fdb0542b627b3321c3929be44ffd1d20285ee76214e00a36f3ed8->enter($__internal_73544418ec7fdb0542b627b3321c3929be44ffd1d20285ee76214e00a36f3ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <!-- Fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i\" rel=\"stylesheet\">

        <!-- Styles -->
        <link href=\"../assets/css/core.min.css\" rel=\"stylesheet\">
        <link href=\"../assets/css/app.min.css\" rel=\"stylesheet\">
        <link href=\"../assets/css/style.min.css\" rel=\"stylesheet\">
        <link href=\"../assets/css/main.css\" rel=\"stylesheet\">

        <!-- Favicons -->
        <link rel=\"apple-touch-icon\" href=\"../assets/img/apple-touch-icon.png\">
        <link rel=\"icon\" href=\"../assets/img/favicon.png\">
    ";
        
        $__internal_73544418ec7fdb0542b627b3321c3929be44ffd1d20285ee76214e00a36f3ed8->leave($__internal_73544418ec7fdb0542b627b3321c3929be44ffd1d20285ee76214e00a36f3ed8_prof);

        
        $__internal_fd23808d7942db1d29493128773332b189888d615d9486d3e1810debea330839->leave($__internal_fd23808d7942db1d29493128773332b189888d615d9486d3e1810debea330839_prof);

    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_fc994c741a597e5f3ad7db901563e6ffdcea882c9c41a269b39f6d4713c310ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc994c741a597e5f3ad7db901563e6ffdcea882c9c41a269b39f6d4713c310ac->enter($__internal_fc994c741a597e5f3ad7db901563e6ffdcea882c9c41a269b39f6d4713c310ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_9f22e7fa2ad6bc28344003e5ff553ac11166c157f45ec921938b0ceb0c629e47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f22e7fa2ad6bc28344003e5ff553ac11166c157f45ec921938b0ceb0c629e47->enter($__internal_9f22e7fa2ad6bc28344003e5ff553ac11166c157f45ec921938b0ceb0c629e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
                                    <a class=\"nav-link badge badge-info\" id=\"singUpBtn\" onclick=\"history.back()\" href=\"#\" style=\"color: white\">Back</a>
                                </li>
                                <li class=\"nav-item text-uppercase\">
                                    <a class=\"nav-link badge badge-success\" id=\"singUpBtn\" href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_listCreate");
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["master"]) || array_key_exists("master", $context) ? $context["master"] : (function () { throw new Twig_Error_Runtime('Variable "master" does not exist.', 40, $this->getSourceContext()); })()), "html", null, true);
            echo "\" style=\"color: white\">Create Listing</a>
                                </li>
                                <li class=\"nav-item active\">
                                    <p class=\"nav-link\" style=\"color: black;\">Hello, <span class=\"text-uppercase\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 43, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo "</span></p>
                                </li>
                                <li class=\"nav-item text-uppercase\">
                                    <a class=\"nav-link badge badge-danger\" id=\"singUpBtn\" href=\"";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" style=\"color: white\">Logout</a>
                                </li>
                            ";
        }
        // line 49
        echo "                        </ul>
                    </div>
                </nav>
        <div class=\"container-fluid\">
            <table class=\"table\">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Brand</th>
                    <th>Type</th>
                    <th>Fit</th>
                    <th>Color</th>
                    <th>Cost</th>
                    <th>Bullet One</th>
                    <th>Bullet Two</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 69, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 70
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "listing_id", array()), "html", null, true);
            echo "</th>
                        <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "title", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "brand", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "type", array()), "html", null, true);
            echo "</td>
                        <td>
                        ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "fit", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["fit"]) {
                // line 77
                echo "                            ";
                echo twig_escape_filter($this->env, $context["fit"], "html", null, true);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                        </td>
                        <td>
                        ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "color", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
                // line 82
                echo "                            ";
                if (($context["color"] == 1)) {
                    // line 83
                    echo "                                    <label class=\"custom-control custom-checkbox\" title=\"Dark Heather\">
                                        <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"dark_heather\">
                                        <span class=\"custom-control-indicator\" style=\"background-color: #474d4d;\"></span>
                                        <span class=\"custom-control-description\"></span>
                                    </label>
                            ";
                } elseif ((                // line 88
$context["color"] == 2)) {
                    // line 89
                    echo "                            <label class=\"custom-control\" title=\"Heather Grey\">
                                <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"heather_grey\">
                                <span class=\"custom-control-indicator\" style=\"background-color: #d4d8d9;\"></span>
                                <span class=\"custom-control-description\"></span>
                            </label>
                            ";
                } elseif ((                // line 94
$context["color"] == 3)) {
                    // line 95
                    echo "                                <label class=\"custom-control\" title=\"Heather Blue\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"heather_blue\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #767ae0;\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 100
$context["color"] == 4)) {
                    // line 101
                    echo "                                <label class=\"custom-control\" title=\"Black\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"black\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #000000\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>

                            ";
                } elseif ((                // line 107
$context["color"] == 5)) {
                    // line 108
                    echo "                                <label class=\"custom-control\" title=\"Navy\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"navy\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #15232b\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 113
$context["color"] == 6)) {
                    // line 114
                    echo "                                <label class=\"custom-control\" title=\"Silver\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"silver\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #cfd1d1\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 119
$context["color"] == 7)) {
                    // line 120
                    echo "                                <label class=\"custom-control\" title=\"Royal Blue\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"royal\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #1c4086\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 125
$context["color"] == 8)) {
                    // line 126
                    echo "                                <label class=\"custom-control\" title=\"Brown\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"brown\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #31261d\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 131
$context["color"] == 9)) {
                    // line 132
                    echo "                                <label class=\"custom-control\" title=\"Slate\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"slate\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #818189\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 137
$context["color"] == 10)) {
                    // line 138
                    echo "                                <label class=\"custom-control\" title=\"Red\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"red\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #b71111\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 143
$context["color"] == 11)) {
                    // line 144
                    echo "                                <label class=\"custom-control\" title=\"Apshalt\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"asphalt\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #3f3e3c\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 149
$context["color"] == 12)) {
                    // line 150
                    echo "                                <label class=\"custom-control\" title=\"Grass\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"grass\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #5e9444\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 155
$context["color"] == 13)) {
                    // line 156
                    echo "                                <label class=\"custom-control\" title=\"Olive\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"olive\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #4a4f26\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 161
$context["color"] == 14)) {
                    // line 162
                    echo "                                <label class=\"custom-control\" title=\"Kellygreen\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"kelly_green\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #006136\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 167
$context["color"] == 15)) {
                    // line 168
                    echo "                                <label class=\"custom-control\" title=\"Babyblue\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"baby_blue\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #8fb8db\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 173
$context["color"] == 16)) {
                    // line 174
                    echo "                                <label class=\"custom-control\" title=\"White\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"white\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #ffffff\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>

                            ";
                } elseif ((                // line 180
$context["color"] == 17)) {
                    // line 181
                    echo "                                <label class=\"custom-control\" title=\"Lemon\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"lemon\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #f0e87b\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 186
$context["color"] == 18)) {
                    // line 187
                    echo "                                <label class=\"custom-control\" title=\"Cranberry\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"cranberry\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #6e0a25\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 192
$context["color"] == 19)) {
                    // line 193
                    echo "                                <label class=\"custom-control\" title=\"Pink\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"pink\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #f8a3bc\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 198
$context["color"] == 20)) {
                    // line 199
                    echo "                                <label class=\"custom-control\" title=\"Orange\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"orange\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #ff5c39\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 204
$context["color"] == 21)) {
                    // line 205
                    echo "                                <label class=\"custom-control\" title=\"Purple\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"purple\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #514689\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } else {
                    // line 211
                    echo "                                ";
                    echo twig_escape_filter($this->env, $context["color"], "html", null, true);
                    echo "
                            ";
                }
                // line 213
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            echo "                        </td>
                        <td>";
            // line 216
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "cost", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 217
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "bulletOne", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 218
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "bulletTwo", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 219
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "description", array()), "html", null, true);
            echo "</td>
                        <td><a class=\"badge badge-info\" href=\"";
            // line 220
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_listEdit");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "listing_id", array()), "html", null, true);
            echo "\">Edit</a></td>
                        <td><a class=\"badge badge-danger\" href=\"";
            // line 221
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_listDelete");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "listing_id", array()), "html", null, true);
            echo "\">Delete</a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        echo "                </tbody>
            </table>
        </div>
    </div>
            ";
        
        $__internal_9f22e7fa2ad6bc28344003e5ff553ac11166c157f45ec921938b0ceb0c629e47->leave($__internal_9f22e7fa2ad6bc28344003e5ff553ac11166c157f45ec921938b0ceb0c629e47_prof);

        
        $__internal_fc994c741a597e5f3ad7db901563e6ffdcea882c9c41a269b39f6d4713c310ac->leave($__internal_fc994c741a597e5f3ad7db901563e6ffdcea882c9c41a269b39f6d4713c310ac_prof);

    }

    // line 231
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6000e2743cc1ca86c0f688835b971bfd702aa1d16c203233600cd7bff6f83c0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6000e2743cc1ca86c0f688835b971bfd702aa1d16c203233600cd7bff6f83c0d->enter($__internal_6000e2743cc1ca86c0f688835b971bfd702aa1d16c203233600cd7bff6f83c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d0017204d6ecc12115f3fe869b98fb116019904f4a0180df6555dfe5763c68c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0017204d6ecc12115f3fe869b98fb116019904f4a0180df6555dfe5763c68c3->enter($__internal_d0017204d6ecc12115f3fe869b98fb116019904f4a0180df6555dfe5763c68c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 232
        echo "    <!-- Scripts -->
    <script src=\"../assets/js/core.min.js\"></script>
    <script src=\"../assets/js/app.min.js\"></script>
    <script src=\"../assets/js/script.min.js\"></script>
";
        
        $__internal_d0017204d6ecc12115f3fe869b98fb116019904f4a0180df6555dfe5763c68c3->leave($__internal_d0017204d6ecc12115f3fe869b98fb116019904f4a0180df6555dfe5763c68c3_prof);

        
        $__internal_6000e2743cc1ca86c0f688835b971bfd702aa1d16c203233600cd7bff6f83c0d->leave($__internal_6000e2743cc1ca86c0f688835b971bfd702aa1d16c203233600cd7bff6f83c0d_prof);

    }

    public function getTemplateName()
    {
        return "list/list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  497 => 232,  488 => 231,  474 => 224,  463 => 221,  457 => 220,  453 => 219,  449 => 218,  445 => 217,  441 => 216,  438 => 215,  431 => 213,  425 => 211,  417 => 205,  415 => 204,  408 => 199,  406 => 198,  399 => 193,  397 => 192,  390 => 187,  388 => 186,  381 => 181,  379 => 180,  371 => 174,  369 => 173,  362 => 168,  360 => 167,  353 => 162,  351 => 161,  344 => 156,  342 => 155,  335 => 150,  333 => 149,  326 => 144,  324 => 143,  317 => 138,  315 => 137,  308 => 132,  306 => 131,  299 => 126,  297 => 125,  290 => 120,  288 => 119,  281 => 114,  279 => 113,  272 => 108,  270 => 107,  262 => 101,  260 => 100,  253 => 95,  251 => 94,  244 => 89,  242 => 88,  235 => 83,  232 => 82,  228 => 81,  224 => 79,  215 => 77,  211 => 76,  206 => 74,  202 => 73,  198 => 72,  194 => 71,  191 => 70,  187 => 69,  165 => 49,  159 => 46,  153 => 43,  145 => 40,  139 => 36,  137 => 35,  128 => 28,  119 => 27,  97 => 11,  88 => 10,  70 => 6,  58 => 237,  56 => 231,  52 => 229,  50 => 27,  45 => 24,  43 => 10,  36 => 6,  29 => 1,);
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
        <link href=\"../assets/css/core.min.css\" rel=\"stylesheet\">
        <link href=\"../assets/css/app.min.css\" rel=\"stylesheet\">
        <link href=\"../assets/css/style.min.css\" rel=\"stylesheet\">
        <link href=\"../assets/css/main.css\" rel=\"stylesheet\">

        <!-- Favicons -->
        <link rel=\"apple-touch-icon\" href=\"../assets/img/apple-touch-icon.png\">
        <link rel=\"icon\" href=\"../assets/img/favicon.png\">
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
                                    <a class=\"nav-link badge badge-info\" id=\"singUpBtn\" onclick=\"history.back()\" href=\"#\" style=\"color: white\">Back</a>
                                </li>
                                <li class=\"nav-item text-uppercase\">
                                    <a class=\"nav-link badge badge-success\" id=\"singUpBtn\" href=\"{{ path('app_listCreate') }}/{{ master }}\" style=\"color: white\">Create Listing</a>
                                </li>
                                <li class=\"nav-item active\">
                                    <p class=\"nav-link\" style=\"color: black;\">Hello, <span class=\"text-uppercase\">{{ app.user.username }}</span></p>
                                </li>
                                <li class=\"nav-item text-uppercase\">
                                    <a class=\"nav-link badge badge-danger\" id=\"singUpBtn\" href=\"{{ path('logout') }}\" style=\"color: white\">Logout</a>
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
                    <th>Title</th>
                    <th>Brand</th>
                    <th>Type</th>
                    <th>Fit</th>
                    <th>Color</th>
                    <th>Cost</th>
                    <th>Bullet One</th>
                    <th>Bullet Two</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>
                {% for list in posts %}
                    <tr>
                        <th scope=\"row\">{{ list.listing_id }}</th>
                        <td>{{ list.title }}</td>
                        <td>{{ list.brand }}</td>
                        <td>{{ list.type }}</td>
                        <td>
                        {% for fit in list.fit %}
                            {{ fit }}
                        {% endfor %}
                        </td>
                        <td>
                        {% for color in list.color %}
                            {% if color == 1 %}
                                    <label class=\"custom-control custom-checkbox\" title=\"Dark Heather\">
                                        <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"dark_heather\">
                                        <span class=\"custom-control-indicator\" style=\"background-color: #474d4d;\"></span>
                                        <span class=\"custom-control-description\"></span>
                                    </label>
                            {% elseif color == 2 %}
                            <label class=\"custom-control\" title=\"Heather Grey\">
                                <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"heather_grey\">
                                <span class=\"custom-control-indicator\" style=\"background-color: #d4d8d9;\"></span>
                                <span class=\"custom-control-description\"></span>
                            </label>
                            {% elseif color == 3 %}
                                <label class=\"custom-control\" title=\"Heather Blue\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"heather_blue\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #767ae0;\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            {% elseif color == 4 %}
                                <label class=\"custom-control\" title=\"Black\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"black\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #000000\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>

                            {% elseif color == 5 %}
                                <label class=\"custom-control\" title=\"Navy\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"navy\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #15232b\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            {% elseif color == 6 %}
                                <label class=\"custom-control\" title=\"Silver\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"silver\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #cfd1d1\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            {% elseif color == 7 %}
                                <label class=\"custom-control\" title=\"Royal Blue\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"royal\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #1c4086\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            {% elseif color == 8 %}
                                <label class=\"custom-control\" title=\"Brown\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"brown\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #31261d\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            {% elseif color == 9 %}
                                <label class=\"custom-control\" title=\"Slate\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"slate\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #818189\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            {% elseif color == 10 %}
                                <label class=\"custom-control\" title=\"Red\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"red\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #b71111\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            {% elseif color == 11 %}
                                <label class=\"custom-control\" title=\"Apshalt\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"asphalt\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #3f3e3c\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            {% elseif color == 12 %}
                                <label class=\"custom-control\" title=\"Grass\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"grass\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #5e9444\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            {% elseif color == 13 %}
                                <label class=\"custom-control\" title=\"Olive\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"olive\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #4a4f26\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            {% elseif color == 14 %}
                                <label class=\"custom-control\" title=\"Kellygreen\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"kelly_green\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #006136\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            {% elseif color == 15 %}
                                <label class=\"custom-control\" title=\"Babyblue\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"baby_blue\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #8fb8db\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            {% elseif color == 16 %}
                                <label class=\"custom-control\" title=\"White\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"white\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #ffffff\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>

                            {% elseif color == 17 %}
                                <label class=\"custom-control\" title=\"Lemon\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"lemon\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #f0e87b\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            {% elseif color == 18 %}
                                <label class=\"custom-control\" title=\"Cranberry\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"cranberry\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #6e0a25\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            {% elseif color == 19 %}
                                <label class=\"custom-control\" title=\"Pink\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"pink\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #f8a3bc\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            {% elseif color == 20 %}
                                <label class=\"custom-control\" title=\"Orange\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"orange\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #ff5c39\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            {% elseif color == 21 %}
                                <label class=\"custom-control\" title=\"Purple\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"purple\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #514689\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            {% else %}
                                {{ color }}
                            {% endif %}

                        {% endfor %}
                        </td>
                        <td>{{ list.cost }}</td>
                        <td>{{ list.bulletOne }}</td>
                        <td>{{ list.bulletTwo }}</td>
                        <td>{{ list.description }}</td>
                        <td><a class=\"badge badge-info\" href=\"{{ path('app_listEdit')}}/{{ list.listing_id}}\">Edit</a></td>
                        <td><a class=\"badge badge-danger\" href=\"{{ path('app_listDelete')}}/{{ list.listing_id }}\">Delete</a></td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
            {% endblock %}


{% block javascripts %}
    <!-- Scripts -->
    <script src=\"../assets/js/core.min.js\"></script>
    <script src=\"../assets/js/app.min.js\"></script>
    <script src=\"../assets/js/script.min.js\"></script>
{% endblock %}
    </div>
</body>
</html>", "list/list.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\list\\list.html.twig");
    }
}
