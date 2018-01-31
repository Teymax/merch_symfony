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
        $__internal_b657937528ec4c71354f3b2b4e33ba5d157f4b0f5879101516da505438b06307 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b657937528ec4c71354f3b2b4e33ba5d157f4b0f5879101516da505438b06307->enter($__internal_b657937528ec4c71354f3b2b4e33ba5d157f4b0f5879101516da505438b06307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/list.html.twig"));

        $__internal_a09f29d9c67cb01c10b82d592684342eb368dde1a373ad80ffd5c9eefec3a3ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a09f29d9c67cb01c10b82d592684342eb368dde1a373ad80ffd5c9eefec3a3ff->enter($__internal_a09f29d9c67cb01c10b82d592684342eb368dde1a373ad80ffd5c9eefec3a3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/list.html.twig"));

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
        // line 23
        echo "</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"#\">MerchByAmazon Listing</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
                ";
        // line 33
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 34
            echo "                    <li class=\"nav-item \" style=\"height: 33px;\">
                        <a class=\"nav-link\" href=\"";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_masterList");
            echo "\" style=\"color: white\" >Back</a>
                    </li>
                    <li class=\"nav-item badge-success\" style=\"height: 33px;\">
                        <a class=\"nav-link\" href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_listCreate");
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["master"]) || array_key_exists("master", $context) ? $context["master"] : (function () { throw new Twig_Error_Runtime('Variable "master" does not exist.', 38, $this->getSourceContext()); })()), "html", null, true);
            echo "\" style=\"color: white\">Create Listing</a>
                    </li>
                    <li class=\"nav-item\" style=\"height: 33px;\">
                        <p class=\"nav-link\">Hello, ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 41, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo "</p>
                    </li>
                    <li class=\"nav-item \" style=\"height: 33px;\">
                        <a class=\"nav-link\" href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" style=\"color: white\">Logout</a>
                    </li>
                ";
            // line 46
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 47
                echo "                    <li class=\"nav-item \" style=\"height: 33px;\">
                        <a class=\"nav-link badge-danger\" href=\"";
                // line 48
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin");
                echo "\" style=\"color: white\">Admin</a>
                    </li>
                ";
            }
            // line 51
            echo "                ";
        }
        // line 52
        echo "            </ul>
        </div>
    </div>
</nav>
<div class=\"container-fluid\" id=\"listing-creator\" style=\"margin-top: 10px;\">
            ";
        // line 57
        $this->displayBlock('navigation', $context, $blocks);
        // line 235
        echo "

";
        // line 237
        $this->displayBlock('javascripts', $context, $blocks);
        // line 243
        echo "    </div>
</body>
</html>";
        
        $__internal_b657937528ec4c71354f3b2b4e33ba5d157f4b0f5879101516da505438b06307->leave($__internal_b657937528ec4c71354f3b2b4e33ba5d157f4b0f5879101516da505438b06307_prof);

        
        $__internal_a09f29d9c67cb01c10b82d592684342eb368dde1a373ad80ffd5c9eefec3a3ff->leave($__internal_a09f29d9c67cb01c10b82d592684342eb368dde1a373ad80ffd5c9eefec3a3ff_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c3443e82c3a7b3d3049dc6834353099b6e9cdcad1d0e9e0fbfa0099481b9f04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c3443e82c3a7b3d3049dc6834353099b6e9cdcad1d0e9e0fbfa0099481b9f04->enter($__internal_4c3443e82c3a7b3d3049dc6834353099b6e9cdcad1d0e9e0fbfa0099481b9f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a5cb6eb4befe597e2922f5ea9169368eb57912ca7dbf6b53980f7f71104553da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5cb6eb4befe597e2922f5ea9169368eb57912ca7dbf6b53980f7f71104553da->enter($__internal_a5cb6eb4befe597e2922f5ea9169368eb57912ca7dbf6b53980f7f71104553da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchByAmazon | Listing";
        
        $__internal_a5cb6eb4befe597e2922f5ea9169368eb57912ca7dbf6b53980f7f71104553da->leave($__internal_a5cb6eb4befe597e2922f5ea9169368eb57912ca7dbf6b53980f7f71104553da_prof);

        
        $__internal_4c3443e82c3a7b3d3049dc6834353099b6e9cdcad1d0e9e0fbfa0099481b9f04->leave($__internal_4c3443e82c3a7b3d3049dc6834353099b6e9cdcad1d0e9e0fbfa0099481b9f04_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9061e34d1b8f79b043db088015e80803fa5994b27567dabb0c78652f942c5f25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9061e34d1b8f79b043db088015e80803fa5994b27567dabb0c78652f942c5f25->enter($__internal_9061e34d1b8f79b043db088015e80803fa5994b27567dabb0c78652f942c5f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_83739e4f183317764fd0a4dd08cb80a266d46f4281ffb0cc95af71e5ecc455c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83739e4f183317764fd0a4dd08cb80a266d46f4281ffb0cc95af71e5ecc455c8->enter($__internal_83739e4f183317764fd0a4dd08cb80a266d46f4281ffb0cc95af71e5ecc455c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <!-- Fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i\" rel=\"stylesheet\">

        <!-- Styles -->
        <link href=\"../assets/css/core.min.css\" rel=\"stylesheet\">
        <link href=\"../assets/css/app.min.css\" rel=\"stylesheet\">
        <link href=\"../assets/css/main.css\" rel=\"stylesheet\">

        <!-- Favicons -->
        <link rel=\"apple-touch-icon\" href=\"../assets/img/apple-touch-icon.png\">
        <link rel=\"icon\" href=\"../assets/img/favicon.png\">
    ";
        
        $__internal_83739e4f183317764fd0a4dd08cb80a266d46f4281ffb0cc95af71e5ecc455c8->leave($__internal_83739e4f183317764fd0a4dd08cb80a266d46f4281ffb0cc95af71e5ecc455c8_prof);

        
        $__internal_9061e34d1b8f79b043db088015e80803fa5994b27567dabb0c78652f942c5f25->leave($__internal_9061e34d1b8f79b043db088015e80803fa5994b27567dabb0c78652f942c5f25_prof);

    }

    // line 57
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_33c14fcb24369508464ecd22e7195d273cd05624f3f93ae90e64cb6b60e374aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33c14fcb24369508464ecd22e7195d273cd05624f3f93ae90e64cb6b60e374aa->enter($__internal_33c14fcb24369508464ecd22e7195d273cd05624f3f93ae90e64cb6b60e374aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_0618999bc232f7401374dcb07fa3b6062dfb65eff2f9b67d794dc3c58612f914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0618999bc232f7401374dcb07fa3b6062dfb65eff2f9b67d794dc3c58612f914->enter($__internal_0618999bc232f7401374dcb07fa3b6062dfb65eff2f9b67d794dc3c58612f914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 58
        echo "        <div class=\"container-fluid\">
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
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 75, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 76
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "listing_id", array()), "html", null, true);
            echo "</th>
                        <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "title", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "brand", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "type", array()), "html", null, true);
            echo "</td>
                        <td>
                        ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "fit", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["fit"]) {
                // line 83
                echo "                            ";
                echo twig_escape_filter($this->env, $context["fit"], "html", null, true);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "                        </td>
                        <td>
                        ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "color", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
                // line 88
                echo "                            ";
                if (($context["color"] == 1)) {
                    // line 89
                    echo "                                    <label class=\"custom-control custom-checkbox\" title=\"Dark Heather\">
                                        <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"dark_heather\">
                                        <span class=\"custom-control-indicator\" style=\"background-color: #474d4d;\"></span>
                                        <span class=\"custom-control-description\"></span>
                                    </label>
                            ";
                } elseif ((                // line 94
$context["color"] == 2)) {
                    // line 95
                    echo "                            <label class=\"custom-control\" title=\"Heather Grey\">
                                <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"heather_grey\">
                                <span class=\"custom-control-indicator\" style=\"background-color: #d4d8d9;\"></span>
                                <span class=\"custom-control-description\"></span>
                            </label>
                            ";
                } elseif ((                // line 100
$context["color"] == 3)) {
                    // line 101
                    echo "                                <label class=\"custom-control\" title=\"Heather Blue\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"heather_blue\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #767ae0;\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 106
$context["color"] == 4)) {
                    // line 107
                    echo "                                <label class=\"custom-control\" title=\"Black\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"black\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #000000\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>

                            ";
                } elseif ((                // line 113
$context["color"] == 5)) {
                    // line 114
                    echo "                                <label class=\"custom-control\" title=\"Navy\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"navy\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #15232b\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 119
$context["color"] == 6)) {
                    // line 120
                    echo "                                <label class=\"custom-control\" title=\"Silver\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"silver\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #cfd1d1\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 125
$context["color"] == 7)) {
                    // line 126
                    echo "                                <label class=\"custom-control\" title=\"Royal Blue\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"royal\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #1c4086\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 131
$context["color"] == 8)) {
                    // line 132
                    echo "                                <label class=\"custom-control\" title=\"Brown\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"brown\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #31261d\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 137
$context["color"] == 9)) {
                    // line 138
                    echo "                                <label class=\"custom-control\" title=\"Slate\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"slate\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #818189\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 143
$context["color"] == 10)) {
                    // line 144
                    echo "                                <label class=\"custom-control\" title=\"Red\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"red\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #b71111\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 149
$context["color"] == 11)) {
                    // line 150
                    echo "                                <label class=\"custom-control\" title=\"Apshalt\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"asphalt\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #3f3e3c\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 155
$context["color"] == 12)) {
                    // line 156
                    echo "                                <label class=\"custom-control\" title=\"Grass\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"grass\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #5e9444\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 161
$context["color"] == 13)) {
                    // line 162
                    echo "                                <label class=\"custom-control\" title=\"Olive\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"olive\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #4a4f26\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 167
$context["color"] == 14)) {
                    // line 168
                    echo "                                <label class=\"custom-control\" title=\"Kellygreen\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"kelly_green\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #006136\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 173
$context["color"] == 15)) {
                    // line 174
                    echo "                                <label class=\"custom-control\" title=\"Babyblue\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"baby_blue\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #8fb8db\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 179
$context["color"] == 16)) {
                    // line 180
                    echo "                                <label class=\"custom-control\" title=\"White\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"white\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #ffffff\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>

                            ";
                } elseif ((                // line 186
$context["color"] == 17)) {
                    // line 187
                    echo "                                <label class=\"custom-control\" title=\"Lemon\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"lemon\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #f0e87b\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 192
$context["color"] == 18)) {
                    // line 193
                    echo "                                <label class=\"custom-control\" title=\"Cranberry\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"cranberry\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #6e0a25\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 198
$context["color"] == 19)) {
                    // line 199
                    echo "                                <label class=\"custom-control\" title=\"Pink\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"pink\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #f8a3bc\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 204
$context["color"] == 20)) {
                    // line 205
                    echo "                                <label class=\"custom-control\" title=\"Orange\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"orange\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #ff5c39\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 210
$context["color"] == 21)) {
                    // line 211
                    echo "                                <label class=\"custom-control\" title=\"Purple\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"purple\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #514689\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } else {
                    // line 217
                    echo "                                ";
                    echo twig_escape_filter($this->env, $context["color"], "html", null, true);
                    echo "
                            ";
                }
                // line 219
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 221
            echo "                        </td>
                        <td>";
            // line 222
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "cost", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 223
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "bulletOne", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 224
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "bulletTwo", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 225
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "description", array()), "html", null, true);
            echo "</td>
                        <td><a class=\"badge badge-info\" href=\"";
            // line 226
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_listEdit");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "listing_id", array()), "html", null, true);
            echo "\">Edit</a></td>
                        <td><a class=\"badge badge-danger\" href=\"";
            // line 227
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
        // line 230
        echo "                </tbody>
            </table>
        </div>
    </div>
            ";
        
        $__internal_0618999bc232f7401374dcb07fa3b6062dfb65eff2f9b67d794dc3c58612f914->leave($__internal_0618999bc232f7401374dcb07fa3b6062dfb65eff2f9b67d794dc3c58612f914_prof);

        
        $__internal_33c14fcb24369508464ecd22e7195d273cd05624f3f93ae90e64cb6b60e374aa->leave($__internal_33c14fcb24369508464ecd22e7195d273cd05624f3f93ae90e64cb6b60e374aa_prof);

    }

    // line 237
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_65e8d0dc111a01d69ee200c80ebe331d66b8899c46528f8cfe307495a13a0394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65e8d0dc111a01d69ee200c80ebe331d66b8899c46528f8cfe307495a13a0394->enter($__internal_65e8d0dc111a01d69ee200c80ebe331d66b8899c46528f8cfe307495a13a0394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_93fbc019e6840f34977f081405a0bc01a41b280796d37db577811913ef40cf69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93fbc019e6840f34977f081405a0bc01a41b280796d37db577811913ef40cf69->enter($__internal_93fbc019e6840f34977f081405a0bc01a41b280796d37db577811913ef40cf69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 238
        echo "    <!-- Scripts -->
    <script src=\"../assets/js/core.min.js\"></script>
    <script src=\"../assets/js/app.min.js\"></script>
    <script src=\"../assets/js/script.min.js\"></script>
";
        
        $__internal_93fbc019e6840f34977f081405a0bc01a41b280796d37db577811913ef40cf69->leave($__internal_93fbc019e6840f34977f081405a0bc01a41b280796d37db577811913ef40cf69_prof);

        
        $__internal_65e8d0dc111a01d69ee200c80ebe331d66b8899c46528f8cfe307495a13a0394->leave($__internal_65e8d0dc111a01d69ee200c80ebe331d66b8899c46528f8cfe307495a13a0394_prof);

    }

    public function getTemplateName()
    {
        return "list/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  514 => 238,  505 => 237,  491 => 230,  480 => 227,  474 => 226,  470 => 225,  466 => 224,  462 => 223,  458 => 222,  455 => 221,  448 => 219,  442 => 217,  434 => 211,  432 => 210,  425 => 205,  423 => 204,  416 => 199,  414 => 198,  407 => 193,  405 => 192,  398 => 187,  396 => 186,  388 => 180,  386 => 179,  379 => 174,  377 => 173,  370 => 168,  368 => 167,  361 => 162,  359 => 161,  352 => 156,  350 => 155,  343 => 150,  341 => 149,  334 => 144,  332 => 143,  325 => 138,  323 => 137,  316 => 132,  314 => 131,  307 => 126,  305 => 125,  298 => 120,  296 => 119,  289 => 114,  287 => 113,  279 => 107,  277 => 106,  270 => 101,  268 => 100,  261 => 95,  259 => 94,  252 => 89,  249 => 88,  245 => 87,  241 => 85,  232 => 83,  228 => 82,  223 => 80,  219 => 79,  215 => 78,  211 => 77,  208 => 76,  204 => 75,  185 => 58,  176 => 57,  155 => 11,  146 => 10,  128 => 6,  116 => 243,  114 => 237,  110 => 235,  108 => 57,  101 => 52,  98 => 51,  92 => 48,  89 => 47,  87 => 46,  82 => 44,  76 => 41,  68 => 38,  62 => 35,  59 => 34,  57 => 33,  45 => 23,  43 => 10,  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>{% block title %}MerchByAmazon | Listing{% endblock %}</title>
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    {% block stylesheets %}
        <!-- Fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i\" rel=\"stylesheet\">

        <!-- Styles -->
        <link href=\"../assets/css/core.min.css\" rel=\"stylesheet\">
        <link href=\"../assets/css/app.min.css\" rel=\"stylesheet\">
        <link href=\"../assets/css/main.css\" rel=\"stylesheet\">

        <!-- Favicons -->
        <link rel=\"apple-touch-icon\" href=\"../assets/img/apple-touch-icon.png\">
        <link rel=\"icon\" href=\"../assets/img/favicon.png\">
    {% endblock %}
</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"#\">MerchByAmazon Listing</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    <li class=\"nav-item \" style=\"height: 33px;\">
                        <a class=\"nav-link\" href=\"{{ path('app_masterList') }}\" style=\"color: white\" >Back</a>
                    </li>
                    <li class=\"nav-item badge-success\" style=\"height: 33px;\">
                        <a class=\"nav-link\" href=\"{{ path('app_listCreate') }}/{{ master }}\" style=\"color: white\">Create Listing</a>
                    </li>
                    <li class=\"nav-item\" style=\"height: 33px;\">
                        <p class=\"nav-link\">Hello, {{ app.user.username }}</p>
                    </li>
                    <li class=\"nav-item \" style=\"height: 33px;\">
                        <a class=\"nav-link\" href=\"{{ path('logout') }}\" style=\"color: white\">Logout</a>
                    </li>
                {% if is_granted('ROLE_ADMIN') %}
                    <li class=\"nav-item \" style=\"height: 33px;\">
                        <a class=\"nav-link badge-danger\" href=\"{{ path('app_admin') }}\" style=\"color: white\">Admin</a>
                    </li>
                {% endif %}
                {% endif %}
            </ul>
        </div>
    </div>
</nav>
<div class=\"container-fluid\" id=\"listing-creator\" style=\"margin-top: 10px;\">
            {% block navigation %}
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
