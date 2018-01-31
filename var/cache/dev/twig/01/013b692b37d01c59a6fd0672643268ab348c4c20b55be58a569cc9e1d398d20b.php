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
        $__internal_1ae0b3d307da4fe1778b6bf080d77e13f80fb695f91ba688320ea1df2d58e3eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ae0b3d307da4fe1778b6bf080d77e13f80fb695f91ba688320ea1df2d58e3eb->enter($__internal_1ae0b3d307da4fe1778b6bf080d77e13f80fb695f91ba688320ea1df2d58e3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/list.html.twig"));

        $__internal_7a6224c3c3e2598c4699dcd15f8a5b77b4172d866fd59650bc6cd3e0703c8c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a6224c3c3e2598c4699dcd15f8a5b77b4172d866fd59650bc6cd3e0703c8c96->enter($__internal_7a6224c3c3e2598c4699dcd15f8a5b77b4172d866fd59650bc6cd3e0703c8c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/list.html.twig"));

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
            if (((isset($context["listCount"]) || array_key_exists("listCount", $context) ? $context["listCount"] : (function () { throw new Twig_Error_Runtime('Variable "listCount" does not exist.', 37, $this->getSourceContext()); })()) < 25)) {
                // line 38
                echo "                    <li class=\"nav-item badge-success\" style=\"height: 33px;\">
                        <a class=\"nav-link\" href=\"";
                // line 39
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_listCreate");
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["master"]) || array_key_exists("master", $context) ? $context["master"] : (function () { throw new Twig_Error_Runtime('Variable "master" does not exist.', 39, $this->getSourceContext()); })()), "html", null, true);
                echo "\" style=\"color: white\">Create Listing</a>
                    </li>
                ";
            }
            // line 42
            echo "                    <li class=\"nav-item\" style=\"height: 33px;\">
                        <p class=\"nav-link\">Hello, ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 43, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo "</p>
                    </li>
                    <li class=\"nav-item \" style=\"height: 33px;\">
                        <a class=\"nav-link\" href=\"";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" style=\"color: white\">Logout</a>
                    </li>
                ";
            // line 48
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 49
                echo "                    <li class=\"nav-item \" style=\"height: 33px;\">
                        <a class=\"nav-link badge-danger\" href=\"";
                // line 50
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_admin");
                echo "\" style=\"color: white\">Admin</a>
                    </li>
                ";
            }
            // line 53
            echo "                ";
        }
        // line 54
        echo "            </ul>
        </div>
    </div>
</nav>
<div class=\"container-fluid\" id=\"listing-creator\" style=\"margin-top: 10px;\">
            ";
        // line 59
        $this->displayBlock('navigation', $context, $blocks);
        // line 240
        echo "

";
        // line 242
        $this->displayBlock('javascripts', $context, $blocks);
        // line 248
        echo "    </div>
</body>
</html>";
        
        $__internal_1ae0b3d307da4fe1778b6bf080d77e13f80fb695f91ba688320ea1df2d58e3eb->leave($__internal_1ae0b3d307da4fe1778b6bf080d77e13f80fb695f91ba688320ea1df2d58e3eb_prof);

        
        $__internal_7a6224c3c3e2598c4699dcd15f8a5b77b4172d866fd59650bc6cd3e0703c8c96->leave($__internal_7a6224c3c3e2598c4699dcd15f8a5b77b4172d866fd59650bc6cd3e0703c8c96_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ad9d7bcc3b5ff29368598eaecd30cf640b42d55b20605877a95bad3624961e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ad9d7bcc3b5ff29368598eaecd30cf640b42d55b20605877a95bad3624961e1->enter($__internal_8ad9d7bcc3b5ff29368598eaecd30cf640b42d55b20605877a95bad3624961e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f23fd0a5ef697914b77f8a3a19ad9343fb674b698ce6dd9d50eaeb6d318d4d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23fd0a5ef697914b77f8a3a19ad9343fb674b698ce6dd9d50eaeb6d318d4d84->enter($__internal_f23fd0a5ef697914b77f8a3a19ad9343fb674b698ce6dd9d50eaeb6d318d4d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchByAmazon | Listing";
        
        $__internal_f23fd0a5ef697914b77f8a3a19ad9343fb674b698ce6dd9d50eaeb6d318d4d84->leave($__internal_f23fd0a5ef697914b77f8a3a19ad9343fb674b698ce6dd9d50eaeb6d318d4d84_prof);

        
        $__internal_8ad9d7bcc3b5ff29368598eaecd30cf640b42d55b20605877a95bad3624961e1->leave($__internal_8ad9d7bcc3b5ff29368598eaecd30cf640b42d55b20605877a95bad3624961e1_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b28afcff9ba73152d045e298314a1e7143001bcaa42c7c93b7e4df6391c86cea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b28afcff9ba73152d045e298314a1e7143001bcaa42c7c93b7e4df6391c86cea->enter($__internal_b28afcff9ba73152d045e298314a1e7143001bcaa42c7c93b7e4df6391c86cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f29bac1e95bdfe54d24019f633bc631e24f9c680e54100be391dc1e39bac67df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29bac1e95bdfe54d24019f633bc631e24f9c680e54100be391dc1e39bac67df->enter($__internal_f29bac1e95bdfe54d24019f633bc631e24f9c680e54100be391dc1e39bac67df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_f29bac1e95bdfe54d24019f633bc631e24f9c680e54100be391dc1e39bac67df->leave($__internal_f29bac1e95bdfe54d24019f633bc631e24f9c680e54100be391dc1e39bac67df_prof);

        
        $__internal_b28afcff9ba73152d045e298314a1e7143001bcaa42c7c93b7e4df6391c86cea->leave($__internal_b28afcff9ba73152d045e298314a1e7143001bcaa42c7c93b7e4df6391c86cea_prof);

    }

    // line 59
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_13a6fed0da50a69f4f26e124c8db8043d8088c1a928540b50a725969e424a5d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13a6fed0da50a69f4f26e124c8db8043d8088c1a928540b50a725969e424a5d7->enter($__internal_13a6fed0da50a69f4f26e124c8db8043d8088c1a928540b50a725969e424a5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_762efde1f5b0541213f104a898b1256bc70c2d8acca5db33839816890e4c5ef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762efde1f5b0541213f104a898b1256bc70c2d8acca5db33839816890e4c5ef2->enter($__internal_762efde1f5b0541213f104a898b1256bc70c2d8acca5db33839816890e4c5ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 60
        echo "        <div class=\"container-fluid\">
            ";
        // line 61
        if (((isset($context["listCount"]) || array_key_exists("listCount", $context) ? $context["listCount"] : (function () { throw new Twig_Error_Runtime('Variable "listCount" does not exist.', 61, $this->getSourceContext()); })()) >= 25)) {
            // line 62
            echo "                <div class=\"row\">Contact the administrator to improve your account</div>
            ";
        }
        // line 64
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
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 80, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 81
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "listing_id", array()), "html", null, true);
            echo "</th>
                        <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "title", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "brand", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "type", array()), "html", null, true);
            echo "</td>
                        <td>
                        ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "fit", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["fit"]) {
                // line 88
                echo "                            ";
                echo twig_escape_filter($this->env, $context["fit"], "html", null, true);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "                        </td>
                        <td>
                        ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "color", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
                // line 93
                echo "                            ";
                if (($context["color"] == 1)) {
                    // line 94
                    echo "                                    <label class=\"custom-control custom-checkbox\" title=\"Dark Heather\">
                                        <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"dark_heather\">
                                        <span class=\"custom-control-indicator\" style=\"background-color: #474d4d;\"></span>
                                        <span class=\"custom-control-description\"></span>
                                    </label>
                            ";
                } elseif ((                // line 99
$context["color"] == 2)) {
                    // line 100
                    echo "                            <label class=\"custom-control\" title=\"Heather Grey\">
                                <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"heather_grey\">
                                <span class=\"custom-control-indicator\" style=\"background-color: #d4d8d9;\"></span>
                                <span class=\"custom-control-description\"></span>
                            </label>
                            ";
                } elseif ((                // line 105
$context["color"] == 3)) {
                    // line 106
                    echo "                                <label class=\"custom-control\" title=\"Heather Blue\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"heather_blue\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #767ae0;\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 111
$context["color"] == 4)) {
                    // line 112
                    echo "                                <label class=\"custom-control\" title=\"Black\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"black\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #000000\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>

                            ";
                } elseif ((                // line 118
$context["color"] == 5)) {
                    // line 119
                    echo "                                <label class=\"custom-control\" title=\"Navy\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"navy\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #15232b\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 124
$context["color"] == 6)) {
                    // line 125
                    echo "                                <label class=\"custom-control\" title=\"Silver\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"silver\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #cfd1d1\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 130
$context["color"] == 7)) {
                    // line 131
                    echo "                                <label class=\"custom-control\" title=\"Royal Blue\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"royal\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #1c4086\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 136
$context["color"] == 8)) {
                    // line 137
                    echo "                                <label class=\"custom-control\" title=\"Brown\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"brown\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #31261d\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 142
$context["color"] == 9)) {
                    // line 143
                    echo "                                <label class=\"custom-control\" title=\"Slate\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"slate\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #818189\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 148
$context["color"] == 10)) {
                    // line 149
                    echo "                                <label class=\"custom-control\" title=\"Red\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"red\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #b71111\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 154
$context["color"] == 11)) {
                    // line 155
                    echo "                                <label class=\"custom-control\" title=\"Apshalt\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"asphalt\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #3f3e3c\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 160
$context["color"] == 12)) {
                    // line 161
                    echo "                                <label class=\"custom-control\" title=\"Grass\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"grass\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #5e9444\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 166
$context["color"] == 13)) {
                    // line 167
                    echo "                                <label class=\"custom-control\" title=\"Olive\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"olive\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #4a4f26\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 172
$context["color"] == 14)) {
                    // line 173
                    echo "                                <label class=\"custom-control\" title=\"Kellygreen\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"kelly_green\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #006136\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 178
$context["color"] == 15)) {
                    // line 179
                    echo "                                <label class=\"custom-control\" title=\"Babyblue\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"baby_blue\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #8fb8db\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 184
$context["color"] == 16)) {
                    // line 185
                    echo "                                <label class=\"custom-control\" title=\"White\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"white\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #ffffff\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>

                            ";
                } elseif ((                // line 191
$context["color"] == 17)) {
                    // line 192
                    echo "                                <label class=\"custom-control\" title=\"Lemon\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"lemon\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #f0e87b\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 197
$context["color"] == 18)) {
                    // line 198
                    echo "                                <label class=\"custom-control\" title=\"Cranberry\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"cranberry\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #6e0a25\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 203
$context["color"] == 19)) {
                    // line 204
                    echo "                                <label class=\"custom-control\" title=\"Pink\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"pink\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #f8a3bc\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 209
$context["color"] == 20)) {
                    // line 210
                    echo "                                <label class=\"custom-control\" title=\"Orange\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"orange\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #ff5c39\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } elseif ((                // line 215
$context["color"] == 21)) {
                    // line 216
                    echo "                                <label class=\"custom-control\" title=\"Purple\">
                                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"purple\">
                                    <span class=\"custom-control-indicator\" style=\"background-color: #514689\"></span>
                                    <span class=\"custom-control-description\"></span>
                                </label>
                            ";
                } else {
                    // line 222
                    echo "                                ";
                    echo twig_escape_filter($this->env, $context["color"], "html", null, true);
                    echo "
                            ";
                }
                // line 224
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 226
            echo "                        </td>
                        <td>";
            // line 227
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "cost", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 228
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "bulletOne", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 229
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "bulletTwo", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 230
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "description", array()), "html", null, true);
            echo "</td>
                        <td><a class=\"badge badge-info\" href=\"";
            // line 231
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_listEdit");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["list"], "listing_id", array()), "html", null, true);
            echo "\">Edit</a></td>
                        <td><a class=\"badge badge-danger\" href=\"";
            // line 232
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
        // line 235
        echo "                </tbody>
            </table>
        </div>
    </div>
            ";
        
        $__internal_762efde1f5b0541213f104a898b1256bc70c2d8acca5db33839816890e4c5ef2->leave($__internal_762efde1f5b0541213f104a898b1256bc70c2d8acca5db33839816890e4c5ef2_prof);

        
        $__internal_13a6fed0da50a69f4f26e124c8db8043d8088c1a928540b50a725969e424a5d7->leave($__internal_13a6fed0da50a69f4f26e124c8db8043d8088c1a928540b50a725969e424a5d7_prof);

    }

    // line 242
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2f700b3a1330914162feb731564e279592a8f1746906ae05a55cf0756ba52130 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f700b3a1330914162feb731564e279592a8f1746906ae05a55cf0756ba52130->enter($__internal_2f700b3a1330914162feb731564e279592a8f1746906ae05a55cf0756ba52130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2d5dd97ca79b8a19aff5ba839e7a22d5b3f1d9cf76870d8a47a49c93e4777e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d5dd97ca79b8a19aff5ba839e7a22d5b3f1d9cf76870d8a47a49c93e4777e71->enter($__internal_2d5dd97ca79b8a19aff5ba839e7a22d5b3f1d9cf76870d8a47a49c93e4777e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 243
        echo "    <!-- Scripts -->
    <script src=\"../assets/js/core.min.js\"></script>
    <script src=\"../assets/js/app.min.js\"></script>
    <script src=\"../assets/js/script.min.js\"></script>
";
        
        $__internal_2d5dd97ca79b8a19aff5ba839e7a22d5b3f1d9cf76870d8a47a49c93e4777e71->leave($__internal_2d5dd97ca79b8a19aff5ba839e7a22d5b3f1d9cf76870d8a47a49c93e4777e71_prof);

        
        $__internal_2f700b3a1330914162feb731564e279592a8f1746906ae05a55cf0756ba52130->leave($__internal_2f700b3a1330914162feb731564e279592a8f1746906ae05a55cf0756ba52130_prof);

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
        return array (  529 => 243,  520 => 242,  506 => 235,  495 => 232,  489 => 231,  485 => 230,  481 => 229,  477 => 228,  473 => 227,  470 => 226,  463 => 224,  457 => 222,  449 => 216,  447 => 215,  440 => 210,  438 => 209,  431 => 204,  429 => 203,  422 => 198,  420 => 197,  413 => 192,  411 => 191,  403 => 185,  401 => 184,  394 => 179,  392 => 178,  385 => 173,  383 => 172,  376 => 167,  374 => 166,  367 => 161,  365 => 160,  358 => 155,  356 => 154,  349 => 149,  347 => 148,  340 => 143,  338 => 142,  331 => 137,  329 => 136,  322 => 131,  320 => 130,  313 => 125,  311 => 124,  304 => 119,  302 => 118,  294 => 112,  292 => 111,  285 => 106,  283 => 105,  276 => 100,  274 => 99,  267 => 94,  264 => 93,  260 => 92,  256 => 90,  247 => 88,  243 => 87,  238 => 85,  234 => 84,  230 => 83,  226 => 82,  223 => 81,  219 => 80,  201 => 64,  197 => 62,  195 => 61,  192 => 60,  183 => 59,  162 => 11,  153 => 10,  135 => 6,  123 => 248,  121 => 242,  117 => 240,  115 => 59,  108 => 54,  105 => 53,  99 => 50,  96 => 49,  94 => 48,  89 => 46,  83 => 43,  80 => 42,  72 => 39,  69 => 38,  67 => 37,  62 => 35,  59 => 34,  57 => 33,  45 => 23,  43 => 10,  36 => 6,  29 => 1,);
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
                {% if listCount <25 %}
                    <li class=\"nav-item badge-success\" style=\"height: 33px;\">
                        <a class=\"nav-link\" href=\"{{ path('app_listCreate') }}/{{ master }}\" style=\"color: white\">Create Listing</a>
                    </li>
                {% endif %}
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
            {% if listCount >=25 %}
                <div class=\"row\">Contact the administrator to improve your account</div>
            {% endif %}
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
