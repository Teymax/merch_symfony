<?php

/* list/listCreate.html.twig */
class __TwigTemplate_e6f9b17383f23d8975a4ec4c137dd758cd619fc8a739d69a3afcadf453e4fae2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1e352e957e0c1d073eabaa7814696c685694190b0272b71958dfff2ad3d6ddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1e352e957e0c1d073eabaa7814696c685694190b0272b71958dfff2ad3d6ddc->enter($__internal_f1e352e957e0c1d073eabaa7814696c685694190b0272b71958dfff2ad3d6ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/listCreate.html.twig"));

        $__internal_fa2d9d7a45a95cafe24648a945d1fb81dcac636ff6e534eaa1fe6b1728032f14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa2d9d7a45a95cafe24648a945d1fb81dcac636ff6e534eaa1fe6b1728032f14->enter($__internal_fa2d9d7a45a95cafe24648a945d1fb81dcac636ff6e534eaa1fe6b1728032f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/listCreate.html.twig"));

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
        <div class=\"p-3 mb-2 bg-success text-white container col-3\" id=\"logIn_form\" style=\"margin: 0 auto;\">
                <header>
                        <h2>Create List</h2>
                </header>
                <a class=\"nav-link badge badge-info\" id=\"singUpBtn\" onclick=\"history.back()\" href=\"#\" style=\"color: white\">Back</a>
                <div class=\"form-group\">
                    ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), 'form_start');
        echo "
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), "type", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "fit", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), "color", array()), 'row', array("attr" => array("style" => "display: none")));
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
                            <span class=\"custom-control-indicator\" style=\"background-color: #381f18\"></span>
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

                        <label class=\"custom-control custom-checkbox\" title=\"Purple\" id=\"color_20\">
                            <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_20\" name=\"form[color][]\" value=\"21\">
                            <span class=\"custom-control-indicator\" style=\"background-color: #514689\"></span>
                            <span class=\"custom-control-description\"></span>
                        </label>
                    </div>
                    <div id=\"colorpicker-longsleeve\" style=\"display: none;\">
                        <label class=\"custom-control custom-checkbox\" title=\"Heather Grey\">
                            <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_1\" name=\"form[color][]\" value=\"2\">
                            <span class=\"custom-control-indicator\" style=\"background-color: #d4d8d9;\"></span>
                            <span class=\"custom-control-description\"></span>
                        </label>

                        <label class=\"custom-control custom-checkbox\" title=\"Dark Heather\">
                            <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_0\" name=\"form[color][]\" value=\"1\">
                            <span class=\"custom-control-indicator\" style=\"background-color: #474d4d;\"></span>
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

                        <label class=\"custom-control custom-checkbox\" title=\"Royal Blue\">
                            <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_6\" name=\"form[color][]\" value=\"7\">
                            <span class=\"custom-control-indicator\" style=\"background-color: #1C4086;\"></span>
                            <span class=\"custom-control-description\"></span>
                        </label>
                    </div>
                    ";
        // line 200
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 200, $this->getSourceContext()); })()), "cost", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 201
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 201, $this->getSourceContext()); })()), "brand", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 202
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 202, $this->getSourceContext()); })()), "title", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 203
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 203, $this->getSourceContext()); })()), "bulletOne", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 204
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 204, $this->getSourceContext()); })()), "bulletTwo", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 205
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 205, $this->getSourceContext()); })()), "description", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 206
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 206, $this->getSourceContext()); })()), "userId", array()), 'row', array("attr" => array("id" => "user_ID")));
        echo "
                    ";
        // line 207
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 207, $this->getSourceContext()); })()), "master_id", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        <button type=\"submit\" class=\"btn btn-info\">Create!</button>
                    ";
        // line 209
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 209, $this->getSourceContext()); })()), 'form_end');
        echo "
                </div>
            <div id=\"color-preview\">
                <div id=\"tshirt-placeholder\" class=\"Anvil form_color_20\">
                    <div id=\"preview\">
                        <img src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/image/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["master"]) || array_key_exists("master", $context) ? $context["master"] : (function () { throw new Twig_Error_Runtime('Variable "master" does not exist.', 214, $this->getSourceContext()); })()), "filename", array()))), "html", null, true);
        echo "\">
                    </div>
                </div>
            </div>

        </div>
</div>
";
        // line 221
        $this->displayBlock('javascripts', $context, $blocks);
        // line 228
        echo "</div>
</body>
</html>
";
        
        $__internal_f1e352e957e0c1d073eabaa7814696c685694190b0272b71958dfff2ad3d6ddc->leave($__internal_f1e352e957e0c1d073eabaa7814696c685694190b0272b71958dfff2ad3d6ddc_prof);

        
        $__internal_fa2d9d7a45a95cafe24648a945d1fb81dcac636ff6e534eaa1fe6b1728032f14->leave($__internal_fa2d9d7a45a95cafe24648a945d1fb81dcac636ff6e534eaa1fe6b1728032f14_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef730467becb5a8ebecec8833ea0679fde79eb2ee4c1f1dd390f11645ec17baf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef730467becb5a8ebecec8833ea0679fde79eb2ee4c1f1dd390f11645ec17baf->enter($__internal_ef730467becb5a8ebecec8833ea0679fde79eb2ee4c1f1dd390f11645ec17baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fdbbc221488c4c16ab9ac4d98512e7e92a22299355f87d2b454df442c25db488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdbbc221488c4c16ab9ac4d98512e7e92a22299355f87d2b454df442c25db488->enter($__internal_fdbbc221488c4c16ab9ac4d98512e7e92a22299355f87d2b454df442c25db488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper";
        
        $__internal_fdbbc221488c4c16ab9ac4d98512e7e92a22299355f87d2b454df442c25db488->leave($__internal_fdbbc221488c4c16ab9ac4d98512e7e92a22299355f87d2b454df442c25db488_prof);

        
        $__internal_ef730467becb5a8ebecec8833ea0679fde79eb2ee4c1f1dd390f11645ec17baf->leave($__internal_ef730467becb5a8ebecec8833ea0679fde79eb2ee4c1f1dd390f11645ec17baf_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c98e5b4adc55d5ca2c37d667e6019b01c62dac5bbfa1a26177a74b7a9bb33d59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c98e5b4adc55d5ca2c37d667e6019b01c62dac5bbfa1a26177a74b7a9bb33d59->enter($__internal_c98e5b4adc55d5ca2c37d667e6019b01c62dac5bbfa1a26177a74b7a9bb33d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9bf27d94b8fc210764f9659d59d234c9d692fe16caf277487973be0ef18af6e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf27d94b8fc210764f9659d59d234c9d692fe16caf277487973be0ef18af6e8->enter($__internal_9bf27d94b8fc210764f9659d59d234c9d692fe16caf277487973be0ef18af6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <!-- Fonts -->
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
        
        $__internal_9bf27d94b8fc210764f9659d59d234c9d692fe16caf277487973be0ef18af6e8->leave($__internal_9bf27d94b8fc210764f9659d59d234c9d692fe16caf277487973be0ef18af6e8_prof);

        
        $__internal_c98e5b4adc55d5ca2c37d667e6019b01c62dac5bbfa1a26177a74b7a9bb33d59->leave($__internal_c98e5b4adc55d5ca2c37d667e6019b01c62dac5bbfa1a26177a74b7a9bb33d59_prof);

    }

    // line 221
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_db22635b753a5b69817fc8387994f8f548df7653baa2b0d6fc38ceb6a8e33820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db22635b753a5b69817fc8387994f8f548df7653baa2b0d6fc38ceb6a8e33820->enter($__internal_db22635b753a5b69817fc8387994f8f548df7653baa2b0d6fc38ceb6a8e33820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7df2873e61db36a13ea390e946ba0672c487251275f35b6ac05eb57e8f5fba1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df2873e61db36a13ea390e946ba0672c487251275f35b6ac05eb57e8f5fba1c->enter($__internal_7df2873e61db36a13ea390e946ba0672c487251275f35b6ac05eb57e8f5fba1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 222
        echo "        <!-- Scripts -->
        <script src=\"../assets/js/core.min.js\"></script>
        <script src=\"../assets/js/app.min.js\"></script>
        <script src=\"../assets/js/script.min.js\"></script>
    <script src=\"../assets/js/script.js\"></script>
";
        
        $__internal_7df2873e61db36a13ea390e946ba0672c487251275f35b6ac05eb57e8f5fba1c->leave($__internal_7df2873e61db36a13ea390e946ba0672c487251275f35b6ac05eb57e8f5fba1c_prof);

        
        $__internal_db22635b753a5b69817fc8387994f8f548df7653baa2b0d6fc38ceb6a8e33820->leave($__internal_db22635b753a5b69817fc8387994f8f548df7653baa2b0d6fc38ceb6a8e33820_prof);

    }

    public function getTemplateName()
    {
        return "list/listCreate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 222,  349 => 221,  327 => 10,  318 => 9,  300 => 5,  287 => 228,  285 => 221,  275 => 214,  267 => 209,  262 => 207,  258 => 206,  254 => 205,  250 => 204,  246 => 203,  242 => 202,  238 => 201,  234 => 200,  66 => 35,  62 => 34,  58 => 33,  54 => 32,  43 => 23,  41 => 9,  34 => 5,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
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
        <div class=\"p-3 mb-2 bg-success text-white container col-3\" id=\"logIn_form\" style=\"margin: 0 auto;\">
                <header>
                        <h2>Create List</h2>
                </header>
                <a class=\"nav-link badge badge-info\" id=\"singUpBtn\" onclick=\"history.back()\" href=\"#\" style=\"color: white\">Back</a>
                <div class=\"form-group\">
                    {{ form_start(form) }}
                    {{ form_row(form.type, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_row(form.fit, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_row(form.color, { 'attr': {'style': 'display: none'} }) }}
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
                            <span class=\"custom-control-indicator\" style=\"background-color: #381f18\"></span>
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

                        <label class=\"custom-control custom-checkbox\" title=\"Purple\" id=\"color_20\">
                            <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_20\" name=\"form[color][]\" value=\"21\">
                            <span class=\"custom-control-indicator\" style=\"background-color: #514689\"></span>
                            <span class=\"custom-control-description\"></span>
                        </label>
                    </div>
                    <div id=\"colorpicker-longsleeve\" style=\"display: none;\">
                        <label class=\"custom-control custom-checkbox\" title=\"Heather Grey\">
                            <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_1\" name=\"form[color][]\" value=\"2\">
                            <span class=\"custom-control-indicator\" style=\"background-color: #d4d8d9;\"></span>
                            <span class=\"custom-control-description\"></span>
                        </label>

                        <label class=\"custom-control custom-checkbox\" title=\"Dark Heather\">
                            <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_0\" name=\"form[color][]\" value=\"1\">
                            <span class=\"custom-control-indicator\" style=\"background-color: #474d4d;\"></span>
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

                        <label class=\"custom-control custom-checkbox\" title=\"Royal Blue\">
                            <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_6\" name=\"form[color][]\" value=\"7\">
                            <span class=\"custom-control-indicator\" style=\"background-color: #1C4086;\"></span>
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
                        <button type=\"submit\" class=\"btn btn-info\">Create!</button>
                    {{ form_end(form) }}
                </div>
            <div id=\"color-preview\">
                <div id=\"tshirt-placeholder\" class=\"Anvil form_color_20\">
                    <div id=\"preview\">
                        <img src=\"{{ asset('uploads/image/' ~ master.filename) }}\">
                    </div>
                </div>
            </div>

        </div>
</div>
{% block javascripts %}
        <!-- Scripts -->
        <script src=\"../assets/js/core.min.js\"></script>
        <script src=\"../assets/js/app.min.js\"></script>
        <script src=\"../assets/js/script.min.js\"></script>
    <script src=\"../assets/js/script.js\"></script>
{% endblock %}
</div>
</body>
</html>
", "list/listCreate.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\list\\listCreate.html.twig");
    }
}
