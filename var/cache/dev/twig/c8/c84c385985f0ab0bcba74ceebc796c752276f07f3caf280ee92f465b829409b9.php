<?php

/* list/listEdit.html.twig */
class __TwigTemplate_9132899343b3a1925fd42c992a4ff7839396bc70ec8101aa2e55c23bcd97e037 extends Twig_Template
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
        $__internal_26d38e914e5458bf82ac7b0a416b0506a7a23fb1e6353e9e06031e9d77f8c30c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26d38e914e5458bf82ac7b0a416b0506a7a23fb1e6353e9e06031e9d77f8c30c->enter($__internal_26d38e914e5458bf82ac7b0a416b0506a7a23fb1e6353e9e06031e9d77f8c30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/listEdit.html.twig"));

        $__internal_5740b023436953b56c91109a25955bf1ead433c6fd23f2b14f208099ac72ee69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5740b023436953b56c91109a25955bf1ead433c6fd23f2b14f208099ac72ee69->enter($__internal_5740b023436953b56c91109a25955bf1ead433c6fd23f2b14f208099ac72ee69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/listEdit.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "</head>
<body>
<div class=\"container-fluid\" id=\"main_container\">
    ";
        // line 26
        $this->displayBlock('navigation', $context, $blocks);
        // line 186
        echo "

";
        // line 188
        $this->displayBlock('javascripts', $context, $blocks);
        // line 194
        echo "</div>
</body>
</html>";
        
        $__internal_26d38e914e5458bf82ac7b0a416b0506a7a23fb1e6353e9e06031e9d77f8c30c->leave($__internal_26d38e914e5458bf82ac7b0a416b0506a7a23fb1e6353e9e06031e9d77f8c30c_prof);

        
        $__internal_5740b023436953b56c91109a25955bf1ead433c6fd23f2b14f208099ac72ee69->leave($__internal_5740b023436953b56c91109a25955bf1ead433c6fd23f2b14f208099ac72ee69_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b03c5aefd1cd5626052469dd08a103145a1873739f74f599df5e4d6215929d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b03c5aefd1cd5626052469dd08a103145a1873739f74f599df5e4d6215929d9->enter($__internal_8b03c5aefd1cd5626052469dd08a103145a1873739f74f599df5e4d6215929d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8d521ecb803ee41412e99944373be7022de70854b352300d6be06fead86cad8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d521ecb803ee41412e99944373be7022de70854b352300d6be06fead86cad8b->enter($__internal_8d521ecb803ee41412e99944373be7022de70854b352300d6be06fead86cad8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper | List Edit";
        
        $__internal_8d521ecb803ee41412e99944373be7022de70854b352300d6be06fead86cad8b->leave($__internal_8d521ecb803ee41412e99944373be7022de70854b352300d6be06fead86cad8b_prof);

        
        $__internal_8b03c5aefd1cd5626052469dd08a103145a1873739f74f599df5e4d6215929d9->leave($__internal_8b03c5aefd1cd5626052469dd08a103145a1873739f74f599df5e4d6215929d9_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c70dc9a921ffea91630e1648df4a2312e3665f91eeeddbe1d993b6c3c98ffe02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c70dc9a921ffea91630e1648df4a2312e3665f91eeeddbe1d993b6c3c98ffe02->enter($__internal_c70dc9a921ffea91630e1648df4a2312e3665f91eeeddbe1d993b6c3c98ffe02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_045d4f2b3a6b2624cfc49a41ce2a08970e44b6d5c1f9b5bf73b45957c8bb5eaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_045d4f2b3a6b2624cfc49a41ce2a08970e44b6d5c1f9b5bf73b45957c8bb5eaa->enter($__internal_045d4f2b3a6b2624cfc49a41ce2a08970e44b6d5c1f9b5bf73b45957c8bb5eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
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
        
        $__internal_045d4f2b3a6b2624cfc49a41ce2a08970e44b6d5c1f9b5bf73b45957c8bb5eaa->leave($__internal_045d4f2b3a6b2624cfc49a41ce2a08970e44b6d5c1f9b5bf73b45957c8bb5eaa_prof);

        
        $__internal_c70dc9a921ffea91630e1648df4a2312e3665f91eeeddbe1d993b6c3c98ffe02->leave($__internal_c70dc9a921ffea91630e1648df4a2312e3665f91eeeddbe1d993b6c3c98ffe02_prof);

    }

    // line 26
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_a681b2ae6a8878b04bec4a573a625fe141a804b0cdf8a48f33c266a85ba23ddd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a681b2ae6a8878b04bec4a573a625fe141a804b0cdf8a48f33c266a85ba23ddd->enter($__internal_a681b2ae6a8878b04bec4a573a625fe141a804b0cdf8a48f33c266a85ba23ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_75d2d55d6d4b799aced2a4e08db1c314816177316b0b144322af83e619f789fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75d2d55d6d4b799aced2a4e08db1c314816177316b0b144322af83e619f789fd->enter($__internal_75d2d55d6d4b799aced2a4e08db1c314816177316b0b144322af83e619f789fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 27
        echo "    <div class=\"p-3 mb-2 bg-success text-white container col-3\" id=\"logIn_form\" style=\"margin: 0 auto;\">
        <header>
            <h2>List Edit</h2>
        </header>

            <a class=\"nav-link badge badge-info\" id=\"singUpBtn\" onclick=\"history.back()\" href=\"#\" style=\"color: white\">Back</a>

        <div class=\"form-group\">
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), 'form_start');
        echo "
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "type", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), "fit", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->getSourceContext()); })()), "color", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            <div id=\"colorpicker\">
                <label class=\"custom-control custom-checkbox\" title=\"Dark Heather\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_0\" name=\"form[color][]\" value=\"1\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #474d4d;\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <label class=\"custom-control custom-checkbox\" title=\"Heather Grey\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_1\" name=\"form[color][]\" value=\"2\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #d4d8d9;\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <label class=\"custom-control custom-checkbox\" title=\"Heather Blue\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_2\" name=\"form[color][]\" value=\"3\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #767ae0;\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <label class=\"custom-control custom-checkbox\" title=\"Black\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_3\" name=\"form[color][]\" value=\"4\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #000000\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <label class=\"custom-control custom-checkbox\" title=\"Navy\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_4\" name=\"form[color][]\" value=\"5\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #15232b\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <label class=\"custom-control custom-checkbox\" title=\"Silver\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_5\" name=\"form[color][]\" value=\"6\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #cfd1d1\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <br>

                <label class=\"custom-control custom-checkbox\" title=\"Royal Blue\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_6\" name=\"form[color][]\" value=\"7\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #1c4086\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <label class=\"custom-control custom-checkbox\" title=\"Brown\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_7\" name=\"form[color][]\" value=\"8\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #31261d\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <label class=\"custom-control custom-checkbox\" title=\"Slate\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_8\" name=\"form[color][]\" value=\"9\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #818189\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <label class=\"custom-control custom-checkbox\" title=\"Red\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_9\" name=\"form[color][]\" value=\"10\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #b71111\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <label class=\"custom-control custom-checkbox\" title=\"Apshalt\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_10\" name=\"form[color][]\" value=\"11\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #3f3e3c\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <label class=\"custom-control custom-checkbox\" title=\"Grass\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_11\" name=\"form[color][]\" value=\"12\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #5e9444\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <br>

                <label class=\"custom-control custom-checkbox\" title=\"Olive\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_12\" name=\"form[color][]\" value=\"13\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #4a4f26\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <label class=\"custom-control custom-checkbox\" title=\"Kellygreen\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_13\" name=\"form[color][]\" value=\"14\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #006136\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <label class=\"custom-control custom-checkbox\" title=\"Babyblue\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_14\" name=\"form[color][]\" value=\"15\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #8fb8db\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <label class=\"custom-control custom-checkbox\" title=\"White\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_15\" name=\"form[color][]\" value=\"16\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #ffffff\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <label class=\"custom-control custom-checkbox\" title=\"Lemon\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_16\" name=\"form[color][]\" value=\"17\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #f0e87b\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <label class=\"custom-control custom-checkbox\" title=\"Cranberry\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_17\" name=\"form[color][]\" value=\"18\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #6e0a25\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <br>

                <label class=\"custom-control custom-checkbox\" title=\"Pink\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_18\" name=\"form[color][]\" value=\"19\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #f8a3bc\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <label class=\"custom-control custom-checkbox\" title=\"Orange\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_19\" name=\"form[color][]\" value=\"20\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #ff5c39\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <label class=\"custom-control custom-checkbox\" title=\"Purple\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_20\" name=\"form[color][]\" value=\"21\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #514689\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>
            </div>
            ";
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 172, $this->getSourceContext()); })()), "cost", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 173, $this->getSourceContext()); })()), "brand", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 174, $this->getSourceContext()); })()), "title", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 175, $this->getSourceContext()); })()), "bulletOne", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 176, $this->getSourceContext()); })()), "bulletTwo", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 177, $this->getSourceContext()); })()), "description", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 178, $this->getSourceContext()); })()), "userId", array()), 'row', array("attr" => array("id" => "user_ID")));
        echo "
            ";
        // line 179
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 179, $this->getSourceContext()); })()), "master_id", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            <button type=\"submit\" class=\"btn btn-info\">Save!</button>
            ";
        // line 181
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 181, $this->getSourceContext()); })()), 'form_end');
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_75d2d55d6d4b799aced2a4e08db1c314816177316b0b144322af83e619f789fd->leave($__internal_75d2d55d6d4b799aced2a4e08db1c314816177316b0b144322af83e619f789fd_prof);

        
        $__internal_a681b2ae6a8878b04bec4a573a625fe141a804b0cdf8a48f33c266a85ba23ddd->leave($__internal_a681b2ae6a8878b04bec4a573a625fe141a804b0cdf8a48f33c266a85ba23ddd_prof);

    }

    // line 188
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d7b80efd2136f09b2c77f6ea84ff0cf3dcddc5bc77e776b3c22c6fff4455c8d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7b80efd2136f09b2c77f6ea84ff0cf3dcddc5bc77e776b3c22c6fff4455c8d4->enter($__internal_d7b80efd2136f09b2c77f6ea84ff0cf3dcddc5bc77e776b3c22c6fff4455c8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_398c054014b83283eacf04cda561a4afa42317b691ed4ec86119cfacb13a69d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398c054014b83283eacf04cda561a4afa42317b691ed4ec86119cfacb13a69d1->enter($__internal_398c054014b83283eacf04cda561a4afa42317b691ed4ec86119cfacb13a69d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 189
        echo "    <!-- Scripts -->
    <script src=\"../assets/js/core.min.js\"></script>
    <script src=\"../assets/js/app.min.js\"></script>
    <script src=\"../assets/js/script.min.js\"></script>
";
        
        $__internal_398c054014b83283eacf04cda561a4afa42317b691ed4ec86119cfacb13a69d1->leave($__internal_398c054014b83283eacf04cda561a4afa42317b691ed4ec86119cfacb13a69d1_prof);

        
        $__internal_d7b80efd2136f09b2c77f6ea84ff0cf3dcddc5bc77e776b3c22c6fff4455c8d4->leave($__internal_d7b80efd2136f09b2c77f6ea84ff0cf3dcddc5bc77e776b3c22c6fff4455c8d4_prof);

    }

    public function getTemplateName()
    {
        return "list/listEdit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  343 => 189,  334 => 188,  319 => 181,  314 => 179,  310 => 178,  306 => 177,  302 => 176,  298 => 175,  294 => 174,  290 => 173,  286 => 172,  149 => 38,  145 => 37,  141 => 36,  137 => 35,  127 => 27,  118 => 26,  96 => 10,  87 => 9,  69 => 5,  57 => 194,  55 => 188,  51 => 186,  49 => 26,  44 => 23,  42 => 9,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>{% block title %}MerchHelper | List Edit{% endblock %}</title>
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
    <div class=\"p-3 mb-2 bg-success text-white container col-3\" id=\"logIn_form\" style=\"margin: 0 auto;\">
        <header>
            <h2>List Edit</h2>
        </header>

            <a class=\"nav-link badge badge-info\" id=\"singUpBtn\" onclick=\"history.back()\" href=\"#\" style=\"color: white\">Back</a>

        <div class=\"form-group\">
            {{ form_start(form) }}
            {{ form_row(form.type, { 'attr': {'class': 'form-control'} }) }}
            {{ form_row(form.fit, { 'attr': {'class': 'form-control'} }) }}
            {{ form_row(form.color, { 'attr': {'class': 'form-control'} }) }}
            <div id=\"colorpicker\">
                <label class=\"custom-control custom-checkbox\" title=\"Dark Heather\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_0\" name=\"form[color][]\" value=\"1\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #474d4d;\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <label class=\"custom-control custom-checkbox\" title=\"Heather Grey\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_1\" name=\"form[color][]\" value=\"2\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #d4d8d9;\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <label class=\"custom-control custom-checkbox\" title=\"Heather Blue\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_2\" name=\"form[color][]\" value=\"3\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #767ae0;\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <label class=\"custom-control custom-checkbox\" title=\"Black\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_3\" name=\"form[color][]\" value=\"4\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #000000\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <label class=\"custom-control custom-checkbox\" title=\"Navy\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_4\" name=\"form[color][]\" value=\"5\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #15232b\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <label class=\"custom-control custom-checkbox\" title=\"Silver\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_5\" name=\"form[color][]\" value=\"6\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #cfd1d1\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <br>

                <label class=\"custom-control custom-checkbox\" title=\"Royal Blue\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_6\" name=\"form[color][]\" value=\"7\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #1c4086\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <label class=\"custom-control custom-checkbox\" title=\"Brown\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_7\" name=\"form[color][]\" value=\"8\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #31261d\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <label class=\"custom-control custom-checkbox\" title=\"Slate\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_8\" name=\"form[color][]\" value=\"9\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #818189\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <label class=\"custom-control custom-checkbox\" title=\"Red\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_9\" name=\"form[color][]\" value=\"10\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #b71111\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <label class=\"custom-control custom-checkbox\" title=\"Apshalt\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_10\" name=\"form[color][]\" value=\"11\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #3f3e3c\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <label class=\"custom-control custom-checkbox\" title=\"Grass\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_11\" name=\"form[color][]\" value=\"12\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #5e9444\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <br>

                <label class=\"custom-control custom-checkbox\" title=\"Olive\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_12\" name=\"form[color][]\" value=\"13\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #4a4f26\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <label class=\"custom-control custom-checkbox\" title=\"Kellygreen\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_13\" name=\"form[color][]\" value=\"14\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #006136\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <label class=\"custom-control custom-checkbox\" title=\"Babyblue\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_14\" name=\"form[color][]\" value=\"15\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #8fb8db\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <label class=\"custom-control custom-checkbox\" title=\"White\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_15\" name=\"form[color][]\" value=\"16\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #ffffff\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <label class=\"custom-control custom-checkbox\" title=\"Lemon\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_16\" name=\"form[color][]\" value=\"17\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #f0e87b\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <label class=\"custom-control custom-checkbox\" title=\"Cranberry\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_17\" name=\"form[color][]\" value=\"18\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #6e0a25\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <br>

                <label class=\"custom-control custom-checkbox\" title=\"Pink\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_18\" name=\"form[color][]\" value=\"19\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #f8a3bc\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <label class=\"custom-control custom-checkbox\" title=\"Orange\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_19\" name=\"form[color][]\" value=\"20\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #ff5c39\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>

                <label class=\"custom-control custom-checkbox\" title=\"Purple\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_20\" name=\"form[color][]\" value=\"21\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #514689\"></span>
                    <span class=\"custom-control-description\"></span>
                </label>
            </div>
            {{ form_row(form.cost, { 'attr': {'class': 'form-control'} }) }}
            {{ form_row(form.brand, { 'attr': {'class': 'form-control'} }) }}
            {{ form_row(form.title, { 'attr': {'class': 'form-control'} }) }}
            {{ form_row(form.bulletOne, { 'attr': {'class': 'form-control'} }) }}
            {{ form_row(form.bulletTwo, { 'attr': {'class': 'form-control'} }) }}
            {{ form_row(form.description, { 'attr': {'class': 'form-control'} }) }}
            {{ form_row(form.userId, { 'attr': {'id': 'user_ID'} }) }}
            {{ form_row(form.master_id, { 'attr': {'class': 'form-control'} }) }}
            <button type=\"submit\" class=\"btn btn-info\">Save!</button>
            {{ form_end(form) }}
        </div>
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
</html>", "list/listEdit.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\list\\listEdit.html.twig");
    }
}
