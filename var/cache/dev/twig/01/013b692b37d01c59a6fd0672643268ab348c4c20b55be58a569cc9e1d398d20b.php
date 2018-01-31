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
        $__internal_430fdaef1506bb64df0df23fbb30c2f527c29098962555155866b0e44a96fe64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_430fdaef1506bb64df0df23fbb30c2f527c29098962555155866b0e44a96fe64->enter($__internal_430fdaef1506bb64df0df23fbb30c2f527c29098962555155866b0e44a96fe64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/list.html.twig"));

        $__internal_29a6f29dcb343835e297ab416771ada94c5e3bfba34db6add6a6e9cb561cc1c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29a6f29dcb343835e297ab416771ada94c5e3bfba34db6add6a6e9cb561cc1c1->enter($__internal_29a6f29dcb343835e297ab416771ada94c5e3bfba34db6add6a6e9cb561cc1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/list.html.twig"));

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
                    ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 37, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
                // line 38
                echo "                    ";
                if ((((isset($context["listCount"]) || array_key_exists("listCount", $context) ? $context["listCount"] : (function () { throw new Twig_Error_Runtime('Variable "listCount" does not exist.', 38, $this->getSourceContext()); })()) < 5) || (twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "accountType", array()) == "pro"))) {
                    // line 39
                    echo "
                    <li class=\"nav-item badge-success\" style=\"height: 33px;\">
                        <a class=\"nav-link\" href=\"";
                    // line 41
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_listCreate");
                    echo "/";
                    echo twig_escape_filter($this->env, (isset($context["master"]) || array_key_exists("master", $context) ? $context["master"] : (function () { throw new Twig_Error_Runtime('Variable "master" does not exist.', 41, $this->getSourceContext()); })()), "html", null, true);
                    echo "\" style=\"color: white\">Create Listing</a>
                    </li>
                ";
                }
                // line 44
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                    <li class=\"nav-item\" style=\"height: 33px;\">
                        <p class=\"nav-link\">Hello, ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 46, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo "</p>
                    </li>
                    <li class=\"nav-item \" style=\"height: 33px;\">
                        <a class=\"nav-link\" href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" style=\"color: white\">Logout</a>
                    </li>
                ";
            // line 51
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 52
                echo "                    <li class=\"nav-item \" style=\"height: 33px;\">
                        <a class=\"nav-link badge-danger\" href=\"";
                // line 53
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin");
                echo "\" style=\"color: white\">Admin</a>
                    </li>
                ";
            }
            // line 56
            echo "                ";
        }
        // line 57
        echo "            </ul>
        </div>
    </div>
</nav>
<div class=\"container-fluid\" id=\"listing-creator\" style=\"margin-top: 10px;\">
            ";
        // line 62
        $this->displayBlock('navigation', $context, $blocks);
        // line 246
        echo "

";
        // line 248
        $this->displayBlock('javascripts', $context, $blocks);
        // line 254
        echo "    </div>
</body>
</html>";
        
        $__internal_430fdaef1506bb64df0df23fbb30c2f527c29098962555155866b0e44a96fe64->leave($__internal_430fdaef1506bb64df0df23fbb30c2f527c29098962555155866b0e44a96fe64_prof);

        
        $__internal_29a6f29dcb343835e297ab416771ada94c5e3bfba34db6add6a6e9cb561cc1c1->leave($__internal_29a6f29dcb343835e297ab416771ada94c5e3bfba34db6add6a6e9cb561cc1c1_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_842ed80ae820c7c9493190347851b4417ffd954a7550aaae3b8cdc7eb9ef54e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_842ed80ae820c7c9493190347851b4417ffd954a7550aaae3b8cdc7eb9ef54e4->enter($__internal_842ed80ae820c7c9493190347851b4417ffd954a7550aaae3b8cdc7eb9ef54e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2479ad187083c6fb19d469c2ab75c06458c55aa03db51396d640fab35857b7da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2479ad187083c6fb19d469c2ab75c06458c55aa03db51396d640fab35857b7da->enter($__internal_2479ad187083c6fb19d469c2ab75c06458c55aa03db51396d640fab35857b7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchByAmazon | Listing";
        
        $__internal_2479ad187083c6fb19d469c2ab75c06458c55aa03db51396d640fab35857b7da->leave($__internal_2479ad187083c6fb19d469c2ab75c06458c55aa03db51396d640fab35857b7da_prof);

        
        $__internal_842ed80ae820c7c9493190347851b4417ffd954a7550aaae3b8cdc7eb9ef54e4->leave($__internal_842ed80ae820c7c9493190347851b4417ffd954a7550aaae3b8cdc7eb9ef54e4_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3ffcbd1f6aa86f8954a638c352712f327973a6d8a869943027f4dfb75d5f77ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ffcbd1f6aa86f8954a638c352712f327973a6d8a869943027f4dfb75d5f77ee->enter($__internal_3ffcbd1f6aa86f8954a638c352712f327973a6d8a869943027f4dfb75d5f77ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_976c4def0b9bf5d7ab008d51d29aa24753070726070abfb4dd31bdb62edd4389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_976c4def0b9bf5d7ab008d51d29aa24753070726070abfb4dd31bdb62edd4389->enter($__internal_976c4def0b9bf5d7ab008d51d29aa24753070726070abfb4dd31bdb62edd4389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_976c4def0b9bf5d7ab008d51d29aa24753070726070abfb4dd31bdb62edd4389->leave($__internal_976c4def0b9bf5d7ab008d51d29aa24753070726070abfb4dd31bdb62edd4389_prof);

        
        $__internal_3ffcbd1f6aa86f8954a638c352712f327973a6d8a869943027f4dfb75d5f77ee->leave($__internal_3ffcbd1f6aa86f8954a638c352712f327973a6d8a869943027f4dfb75d5f77ee_prof);

    }

    // line 62
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_053c8f31db1ab98188483b3fd79129d31777b5fd28116ec459e3de7265d1ed03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_053c8f31db1ab98188483b3fd79129d31777b5fd28116ec459e3de7265d1ed03->enter($__internal_053c8f31db1ab98188483b3fd79129d31777b5fd28116ec459e3de7265d1ed03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_04234e4a73124e30116a4dad3e1a042d8e71b933a731017947994f7ebb64a3d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04234e4a73124e30116a4dad3e1a042d8e71b933a731017947994f7ebb64a3d7->enter($__internal_04234e4a73124e30116a4dad3e1a042d8e71b933a731017947994f7ebb64a3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 63
        echo "        <div class=\"container-fluid\">
            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 64, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
            // line 65
            echo "
            ";
            // line 66
            if ((((isset($context["listCount"]) || array_key_exists("listCount", $context) ? $context["listCount"] : (function () { throw new Twig_Error_Runtime('Variable "listCount" does not exist.', 66, $this->getSourceContext()); })()) >= 25) || (twig_get_attribute($this->env, $this->getSourceContext(), $context["users"], "accountType", array()) == "free"))) {
                // line 67
                echo "                <div class=\"row\">Contact the administrator to improve your account</div>
            ";
            }
            // line 69
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "            <table class=\"table\">
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
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 86, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 87
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "listing_id", array()), "html", null, true);
            echo "</th>
                        <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "title", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "brand", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "type", array()), "html", null, true);
            echo "</td>
                        <td>
                        ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "fit", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["fit"]) {
                // line 94
                echo "                            ";
                echo twig_escape_filter($this->env, $context["fit"], "html", null, true);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "                        </td>
                        <td>
                        ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "color", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
                // line 99
                echo "                            ";
                if (($context["color"] == 1)) {
                    // line 100
                    echo "                                    <label class=\"custom-control custom-checkbox\" title=\"Dark Heather\">
                                        <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"dark_heather\">
                                        <span class=\"custom-control-indicator\" style=\"background-color: #474d4d;\"></span>
                                        <span class=\"custom-control-description\"></span>
                                    </label>
                            ";
                } elseif ((                // line 105
$context["color"] == 2)) {
                    // line 106
                    echo "                            <label class=\"custom-control\" title=\"Heather Grey\">
                                <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"heather_grey\">
                                <span class=\"custom-control-indicator\" style=\"background-color: #d4d8d9;\"></span>
                                <span class=\"custom-control-description\"></span>
                            </label>
                            ";
                } elseif ((                // line 111
$context["color"] == 3)) {
                    // line 112
                    echo "                                <label class=\"custom-control\" title=\"Heather Blue\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"heather_blue\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #767ae0;\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 117
$context["color"] == 4)) {
                    // line 118
                    echo "                                <label class=\"custom-control\" title=\"Black\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"black\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #000000\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>

                            ";
                } elseif ((                // line 124
$context["color"] == 5)) {
                    // line 125
                    echo "                                <label class=\"custom-control\" title=\"Navy\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"navy\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #15232b\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 130
$context["color"] == 6)) {
                    // line 131
                    echo "                                <label class=\"custom-control\" title=\"Silver\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"silver\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #cfd1d1\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 136
$context["color"] == 7)) {
                    // line 137
                    echo "                                <label class=\"custom-control\" title=\"Royal Blue\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"royal\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #1c4086\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 142
$context["color"] == 8)) {
                    // line 143
                    echo "                                <label class=\"custom-control\" title=\"Brown\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"brown\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #31261d\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 148
$context["color"] == 9)) {
                    // line 149
                    echo "                                <label class=\"custom-control\" title=\"Slate\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"slate\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #818189\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 154
$context["color"] == 10)) {
                    // line 155
                    echo "                                <label class=\"custom-control\" title=\"Red\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"red\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #b71111\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 160
$context["color"] == 11)) {
                    // line 161
                    echo "                                <label class=\"custom-control\" title=\"Apshalt\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"asphalt\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #3f3e3c\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 166
$context["color"] == 12)) {
                    // line 167
                    echo "                                <label class=\"custom-control\" title=\"Grass\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"grass\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #5e9444\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 172
$context["color"] == 13)) {
                    // line 173
                    echo "                                <label class=\"custom-control\" title=\"Olive\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"olive\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #4a4f26\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 178
$context["color"] == 14)) {
                    // line 179
                    echo "                                <label class=\"custom-control\" title=\"Kellygreen\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"kelly_green\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #006136\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 184
$context["color"] == 15)) {
                    // line 185
                    echo "                                <label class=\"custom-control\" title=\"Babyblue\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"baby_blue\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #8fb8db\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 190
$context["color"] == 16)) {
                    // line 191
                    echo "                                <label class=\"custom-control\" title=\"White\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"white\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #ffffff\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>

                            ";
                } elseif ((                // line 197
$context["color"] == 17)) {
                    // line 198
                    echo "                                <label class=\"custom-control\" title=\"Lemon\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"lemon\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #f0e87b\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 203
$context["color"] == 18)) {
                    // line 204
                    echo "                                <label class=\"custom-control\" title=\"Cranberry\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"cranberry\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #6e0a25\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 209
$context["color"] == 19)) {
                    // line 210
                    echo "                                <label class=\"custom-control\" title=\"Pink\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"pink\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #f8a3bc\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 215
$context["color"] == 20)) {
                    // line 216
                    echo "                                <label class=\"custom-control\" title=\"Orange\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"orange\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #ff5c39\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 221
$context["color"] == 21)) {
                    // line 222
                    echo "                                <label class=\"custom-control\" title=\"Purple\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"purple\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #514689\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } else {
                    // line 228
                    echo "                                ";
                    echo twig_escape_filter($this->env, $context["color"], "html", null, true);
                    echo "
                            ";
                }
                // line 230
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 232
            echo "                        </td>
                        <td>";
            // line 233
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "cost", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 234
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "bulletOne", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 235
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "bulletTwo", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 236
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "description", array()), "html", null, true);
            echo "</td>
                        <td><a class=\"badge badge-info\" href=\"";
            // line 237
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_listEdit");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "listing_id", array()), "html", null, true);
            echo "\">Edit</a></td>
                        <td><a class=\"badge badge-danger\" href=\"";
            // line 238
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
        // line 241
        echo "                </tbody>
            </table>
        </div>
    </div>
            ";
        
        $__internal_04234e4a73124e30116a4dad3e1a042d8e71b933a731017947994f7ebb64a3d7->leave($__internal_04234e4a73124e30116a4dad3e1a042d8e71b933a731017947994f7ebb64a3d7_prof);

        
        $__internal_053c8f31db1ab98188483b3fd79129d31777b5fd28116ec459e3de7265d1ed03->leave($__internal_053c8f31db1ab98188483b3fd79129d31777b5fd28116ec459e3de7265d1ed03_prof);

    }

    // line 248
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f589f9f2ef0d8b6e67ce71c19dacb6b45b139a739df4dbf82e3bf4ffe9d0262a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f589f9f2ef0d8b6e67ce71c19dacb6b45b139a739df4dbf82e3bf4ffe9d0262a->enter($__internal_f589f9f2ef0d8b6e67ce71c19dacb6b45b139a739df4dbf82e3bf4ffe9d0262a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3a0e31843445998cd8c5d4ceccae194a7f65f6a0f926906881dd47517c1139ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a0e31843445998cd8c5d4ceccae194a7f65f6a0f926906881dd47517c1139ff->enter($__internal_3a0e31843445998cd8c5d4ceccae194a7f65f6a0f926906881dd47517c1139ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 249
        echo "    <!-- Scripts -->
    <script src=\"../assets/js/core.min.js\"></script>
    <script src=\"../assets/js/app.min.js\"></script>
    <script src=\"../assets/js/script.min.js\"></script>
";
        
        $__internal_3a0e31843445998cd8c5d4ceccae194a7f65f6a0f926906881dd47517c1139ff->leave($__internal_3a0e31843445998cd8c5d4ceccae194a7f65f6a0f926906881dd47517c1139ff_prof);

        
        $__internal_f589f9f2ef0d8b6e67ce71c19dacb6b45b139a739df4dbf82e3bf4ffe9d0262a->leave($__internal_f589f9f2ef0d8b6e67ce71c19dacb6b45b139a739df4dbf82e3bf4ffe9d0262a_prof);

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
        return array (  554 => 249,  545 => 248,  531 => 241,  520 => 238,  514 => 237,  510 => 236,  506 => 235,  502 => 234,  498 => 233,  495 => 232,  488 => 230,  482 => 228,  474 => 222,  472 => 221,  465 => 216,  463 => 215,  456 => 210,  454 => 209,  447 => 204,  445 => 203,  438 => 198,  436 => 197,  428 => 191,  426 => 190,  419 => 185,  417 => 184,  410 => 179,  408 => 178,  401 => 173,  399 => 172,  392 => 167,  390 => 166,  383 => 161,  381 => 160,  374 => 155,  372 => 154,  365 => 149,  363 => 148,  356 => 143,  354 => 142,  347 => 137,  345 => 136,  338 => 131,  336 => 130,  329 => 125,  327 => 124,  319 => 118,  317 => 117,  310 => 112,  308 => 111,  301 => 106,  299 => 105,  292 => 100,  289 => 99,  285 => 98,  281 => 96,  272 => 94,  268 => 93,  263 => 91,  259 => 90,  255 => 89,  251 => 88,  248 => 87,  244 => 86,  226 => 70,  220 => 69,  216 => 67,  214 => 66,  211 => 65,  207 => 64,  204 => 63,  195 => 62,  174 => 11,  165 => 10,  147 => 6,  135 => 254,  133 => 248,  129 => 246,  127 => 62,  120 => 57,  117 => 56,  111 => 53,  108 => 52,  106 => 51,  101 => 49,  95 => 46,  92 => 45,  86 => 44,  78 => 41,  74 => 39,  71 => 38,  67 => 37,  62 => 35,  59 => 34,  57 => 33,  45 => 23,  43 => 10,  36 => 6,  29 => 1,);
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
                    {% for users in user %}
                    {% if listCount <5 or users.accountType == 'pro' %}

                    <li class=\"nav-item badge-success\" style=\"height: 33px;\">
                        <a class=\"nav-link\" href=\"{{ path('app_listCreate') }}/{{ master }}\" style=\"color: white\">Create Listing</a>
                    </li>
                {% endif %}
                {% endfor %}
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
            {% for users in user %}

            {% if listCount >=25 or users.accountType == 'free' %}
                <div class=\"row\">Contact the administrator to improve your account</div>
            {% endif %}
            {% endfor %}
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
