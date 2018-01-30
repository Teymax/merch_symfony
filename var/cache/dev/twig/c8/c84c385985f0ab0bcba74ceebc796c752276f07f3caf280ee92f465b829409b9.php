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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e88265cfcec352f516568a4f3e28b64c95cdf6122fa257f2a7eb82c49a02c4ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e88265cfcec352f516568a4f3e28b64c95cdf6122fa257f2a7eb82c49a02c4ef->enter($__internal_e88265cfcec352f516568a4f3e28b64c95cdf6122fa257f2a7eb82c49a02c4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/listEdit.html.twig"));

        $__internal_f5804da888a515eb6f0d7f803c93dde8cb1c4289c28f3dd54f7bdc6ae51ee828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5804da888a515eb6f0d7f803c93dde8cb1c4289c28f3dd54f7bdc6ae51ee828->enter($__internal_f5804da888a515eb6f0d7f803c93dde8cb1c4289c28f3dd54f7bdc6ae51ee828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/listEdit.html.twig"));

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
                <label class=\"custom-control custom-checkbox\" title=\"Heather Blue\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_2\" name=\"form[color][]\" value=\"3\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #767ae0;\"></span>
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
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"royal\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #1C4086;\"></span>
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
        // line 231
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 231, $this->getSourceContext()); })()), "cost", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 232
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 232, $this->getSourceContext()); })()), "brand", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 233
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 233, $this->getSourceContext()); })()), "title", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 234
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 234, $this->getSourceContext()); })()), "bulletOne", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 235
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 235, $this->getSourceContext()); })()), "bulletTwo", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 236
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 236, $this->getSourceContext()); })()), "description", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 237
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 237, $this->getSourceContext()); })()), "userId", array()), 'row', array("attr" => array("id" => "user_ID")));
        echo "
            ";
        // line 238
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 238, $this->getSourceContext()); })()), "master_id", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            <button type=\"submit\" class=\"btn btn-info\">Edit!</button>
            ";
        // line 240
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 240, $this->getSourceContext()); })()), 'form_end');
        echo "
        </div>
        <div id=\"color-preview\">
            <div id=\"tshirt-placeholder\" class=\"";
        // line 243
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listing"]) || array_key_exists("listing", $context) ? $context["listing"] : (function () { throw new Twig_Error_Runtime('Variable "listing" does not exist.', 243, $this->getSourceContext()); })()), "type", array()), "html", null, true);
        echo " form_color_2\">
                <div id=\"preview\">
                    <img src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/image/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["master"]) || array_key_exists("master", $context) ? $context["master"] : (function () { throw new Twig_Error_Runtime('Variable "master" does not exist.', 245, $this->getSourceContext()); })()), "filename", array()))), "html", null, true);
        echo "\">
                </div>
            </div>
        </div>

    </div>
</div>
";
        // line 252
        $this->displayBlock('javascripts', $context, $blocks);
        // line 262
        echo "</div>
</body>
</html>
";
        
        $__internal_e88265cfcec352f516568a4f3e28b64c95cdf6122fa257f2a7eb82c49a02c4ef->leave($__internal_e88265cfcec352f516568a4f3e28b64c95cdf6122fa257f2a7eb82c49a02c4ef_prof);

        
        $__internal_f5804da888a515eb6f0d7f803c93dde8cb1c4289c28f3dd54f7bdc6ae51ee828->leave($__internal_f5804da888a515eb6f0d7f803c93dde8cb1c4289c28f3dd54f7bdc6ae51ee828_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a28b4f00586c07847ca385c56a95a2dc7ba66e021b059cf0c79304ca349b111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a28b4f00586c07847ca385c56a95a2dc7ba66e021b059cf0c79304ca349b111->enter($__internal_5a28b4f00586c07847ca385c56a95a2dc7ba66e021b059cf0c79304ca349b111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_43a9873a21ed50f55b6c751dcb8f33a9feabda9c1b044b589589522dd55dee24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43a9873a21ed50f55b6c751dcb8f33a9feabda9c1b044b589589522dd55dee24->enter($__internal_43a9873a21ed50f55b6c751dcb8f33a9feabda9c1b044b589589522dd55dee24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchHelper";
        
        $__internal_43a9873a21ed50f55b6c751dcb8f33a9feabda9c1b044b589589522dd55dee24->leave($__internal_43a9873a21ed50f55b6c751dcb8f33a9feabda9c1b044b589589522dd55dee24_prof);

        
        $__internal_5a28b4f00586c07847ca385c56a95a2dc7ba66e021b059cf0c79304ca349b111->leave($__internal_5a28b4f00586c07847ca385c56a95a2dc7ba66e021b059cf0c79304ca349b111_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bccd9487689b529e08f70f39b644be37e96e084930f25e5a7271d1228330ef67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bccd9487689b529e08f70f39b644be37e96e084930f25e5a7271d1228330ef67->enter($__internal_bccd9487689b529e08f70f39b644be37e96e084930f25e5a7271d1228330ef67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_70f57d92e5277696e288c2bc8812dfb1a52e7fff9873568e0b8b0423a0e35c1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70f57d92e5277696e288c2bc8812dfb1a52e7fff9873568e0b8b0423a0e35c1c->enter($__internal_70f57d92e5277696e288c2bc8812dfb1a52e7fff9873568e0b8b0423a0e35c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_70f57d92e5277696e288c2bc8812dfb1a52e7fff9873568e0b8b0423a0e35c1c->leave($__internal_70f57d92e5277696e288c2bc8812dfb1a52e7fff9873568e0b8b0423a0e35c1c_prof);

        
        $__internal_bccd9487689b529e08f70f39b644be37e96e084930f25e5a7271d1228330ef67->leave($__internal_bccd9487689b529e08f70f39b644be37e96e084930f25e5a7271d1228330ef67_prof);

    }

    // line 252
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_769e200a6f02d30db120ac1e62c874fefcb7756e67868212173fe7cb69169cc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_769e200a6f02d30db120ac1e62c874fefcb7756e67868212173fe7cb69169cc7->enter($__internal_769e200a6f02d30db120ac1e62c874fefcb7756e67868212173fe7cb69169cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_94de5f01ff45e6137bb1e79a9cd86a00b451dc9f5f42f9da71cc0ec6c3a6e535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94de5f01ff45e6137bb1e79a9cd86a00b451dc9f5f42f9da71cc0ec6c3a6e535->enter($__internal_94de5f01ff45e6137bb1e79a9cd86a00b451dc9f5f42f9da71cc0ec6c3a6e535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 253
        echo "    <!-- Scripts -->

    <script type=\"text/javascript\">
    </script>
    <script src=\"../assets/js/core.min.js\"></script>
    <script src=\"../assets/js/app.min.js\"></script>
    <script src=\"../assets/js/script.min.js\"></script>
    <script src=\"../assets/js/script.js\"></script>
";
        
        $__internal_94de5f01ff45e6137bb1e79a9cd86a00b451dc9f5f42f9da71cc0ec6c3a6e535->leave($__internal_94de5f01ff45e6137bb1e79a9cd86a00b451dc9f5f42f9da71cc0ec6c3a6e535_prof);

        
        $__internal_769e200a6f02d30db120ac1e62c874fefcb7756e67868212173fe7cb69169cc7->leave($__internal_769e200a6f02d30db120ac1e62c874fefcb7756e67868212173fe7cb69169cc7_prof);

    }

    public function getTemplateName()
    {
        return "list/listEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 253,  383 => 252,  361 => 10,  352 => 9,  334 => 5,  321 => 262,  319 => 252,  309 => 245,  304 => 243,  298 => 240,  293 => 238,  289 => 237,  285 => 236,  281 => 235,  277 => 234,  273 => 233,  269 => 232,  265 => 231,  66 => 35,  62 => 34,  58 => 33,  54 => 32,  43 => 23,  41 => 9,  34 => 5,  28 => 1,);
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
                <label class=\"custom-control custom-checkbox\" title=\"Heather Blue\">
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_2\" name=\"form[color][]\" value=\"3\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #767ae0;\"></span>
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
                    <input type=\"checkbox\" class=\"custom-control-input color-check\" name=\"color[]\" value=\"royal\">
                    <span class=\"custom-control-indicator\" style=\"background-color: #1C4086;\"></span>
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
            <button type=\"submit\" class=\"btn btn-info\">Edit!</button>
            {{ form_end(form) }}
        </div>
        <div id=\"color-preview\">
            <div id=\"tshirt-placeholder\" class=\"{{ listing.type }} form_color_2\">
                <div id=\"preview\">
                    <img src=\"{{ asset('uploads/image/' ~ master.filename) }}\">
                </div>
            </div>
        </div>

    </div>
</div>
{% block javascripts %}
    <!-- Scripts -->

    <script type=\"text/javascript\">
    </script>
    <script src=\"../assets/js/core.min.js\"></script>
    <script src=\"../assets/js/app.min.js\"></script>
    <script src=\"../assets/js/script.min.js\"></script>
    <script src=\"../assets/js/script.js\"></script>
{% endblock %}
</div>
</body>
</html>
", "list/listEdit.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\list\\listEdit.html.twig");
    }
}
