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
        $__internal_c67792693a457c7273084c634cedcf76ae392e7c6815ce37d905d1479955fa77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c67792693a457c7273084c634cedcf76ae392e7c6815ce37d905d1479955fa77->enter($__internal_c67792693a457c7273084c634cedcf76ae392e7c6815ce37d905d1479955fa77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/listCreate.html.twig"));

        $__internal_0f933f41ec13429b0c492f17b9aa1fa8c414f50c15e0c471c2ae57bb0ee63fd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f933f41ec13429b0c492f17b9aa1fa8c414f50c15e0c471c2ae57bb0ee63fd7->enter($__internal_0f933f41ec13429b0c492f17b9aa1fa8c414f50c15e0c471c2ae57bb0ee63fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/listCreate.html.twig"));

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
        // line 22
        echo "</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"#\">MerchByAmazon Listing Creator</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_list");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["master"]) || array_key_exists("master", $context) ? $context["master"] : (function () { throw new Twig_Error_Runtime('Variable "master" does not exist.', 33, $this->getSourceContext()); })()), "master_id", array()), "html", null, true);
        echo "\">Back <span class=\"sr-only\">(current)</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class=\"container-fluid\" id=\"listing-creator\">
    ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), 'form_start');
        echo "
    <div class=\"row\">
        <div class=\"col-md-4 offset-md-8\">
            <br>
        </div>

        <div class=\"col-md-8\" >
            <h3>Listing</h3><br>

            <div class=\"form-check form-check-inline\">
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), "type", array()), 'widget', array("attr" => array("class" => "form-check form-check-inline")));
        echo "
            </div>

            <span style=\"color:#dddddd;\">|</span>
            &nbsp;&nbsp;

            <div class=\"form-check form-check-inline\">
                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->getSourceContext()); })()), "fit", array()), 'row', array("attr" => array("class" => "form-check form-check-inline")));
        echo "
            </div>

            <br>

            <div class=\"row\">
                <div class=\"col-md-2\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\">\$</span>
                        <!--<input type=\"text\" class=\"form-control\" aria-label=\"Text input with checkbox\">-->
                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 67, $this->getSourceContext()); })()), "cost", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        <small class=\"invalid-feedback\">Price can't be empty. &emsp;</small>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 72, $this->getSourceContext()); })()), "brand", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    <small class=\"invalid-feedback\">Brand can't be empty. &emsp;</small>
                    <small class=\"form-inline-text text-muted allowed-chars\">50 of 50 characters left</small><small id=\"check-brand-link\"> &nbsp;&nbsp;&nbsp; <a href=\"#\" target=\"_blank\">Check Brand</a></small><br><br>
                </div>
                <div class=\"col-md-6\">

                    ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 78, $this->getSourceContext()); })()), "title", array()), 'row', array("attr" => array("class" => "form-control listing-field ")));
        echo "

                    <small class=\"invalid-feedback\">Title can't be empty. &emsp;</small>
                    <small class=\"form-text text-muted allowed-chars\">60 of 60 characters left</small><br>
                </div>
            </div>


            ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 86, $this->getSourceContext()); })()), "bulletOne", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

            <small class=\"form-text text-muted allowed-chars\">255 of 255 characters left</small><br>


            ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 91, $this->getSourceContext()); })()), "bulletTwo", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

            <small class=\"form-text text-muted allowed-chars\">255 of 255 characters left</small><br>


            ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 96, $this->getSourceContext()); })()), "description", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "


            <div class=\"row\">
                <div class=\"col-md-2\">
                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), "userId", array()), 'row', array("attr" => array("id" => "user_ID")));
        echo "
                    ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->getSourceContext()); })()), "master_id", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    <button class=\"btn btn-primary\" type=\"submit\" id=\"add-to-list\">Add to list</button>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"row\" style=\"padding-left:20px;\">
                <!-- Colorpicker Anvil & Premium -->
                <div id=\"colorpicker\">
                    ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 111, $this->getSourceContext()); })()), "color", array()), 'row', array("attr" => array("style" => "display: none")));
        echo "
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
                        <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_6\" name=\"form[color][]\" value=\"7\">
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
                </div>    </div>
            <br>

            <div class=\"row\">
                <div id=\"color-preview\">
                    <div id=\"tshirt-placeholder\" class=\"Anvil form_color_2\">
                        <div id=\"preview\">
                            <img src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/image/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["master"]) || array_key_exists("master", $context) ? $context["master"] : (function () { throw new Twig_Error_Runtime('Variable "master" does not exist.', 312, $this->getSourceContext()); })()), "filename", array()))), "html", null, true);
        echo "\">
                        </div>
                    </div>
                </div>
            </div>
            ";
        // line 317
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 317, $this->getSourceContext()); })()), 'form_end');
        echo "
        </div>        </div>

</div>

";
        // line 322
        $this->displayBlock('javascripts', $context, $blocks);
        // line 332
        echo "
</body>
</html>
";
        
        $__internal_c67792693a457c7273084c634cedcf76ae392e7c6815ce37d905d1479955fa77->leave($__internal_c67792693a457c7273084c634cedcf76ae392e7c6815ce37d905d1479955fa77_prof);

        
        $__internal_0f933f41ec13429b0c492f17b9aa1fa8c414f50c15e0c471c2ae57bb0ee63fd7->leave($__internal_0f933f41ec13429b0c492f17b9aa1fa8c414f50c15e0c471c2ae57bb0ee63fd7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_58bdb6bf16fec3a0ba462654101cb1ae1b7942964ef3daf1f1d8275b5733d454 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58bdb6bf16fec3a0ba462654101cb1ae1b7942964ef3daf1f1d8275b5733d454->enter($__internal_58bdb6bf16fec3a0ba462654101cb1ae1b7942964ef3daf1f1d8275b5733d454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_13c558ce9030b1eea41ac9a7cbf66c8e12c1a1979c082f253ef384ddd567a449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13c558ce9030b1eea41ac9a7cbf66c8e12c1a1979c082f253ef384ddd567a449->enter($__internal_13c558ce9030b1eea41ac9a7cbf66c8e12c1a1979c082f253ef384ddd567a449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchByAmazon | Listing Creator";
        
        $__internal_13c558ce9030b1eea41ac9a7cbf66c8e12c1a1979c082f253ef384ddd567a449->leave($__internal_13c558ce9030b1eea41ac9a7cbf66c8e12c1a1979c082f253ef384ddd567a449_prof);

        
        $__internal_58bdb6bf16fec3a0ba462654101cb1ae1b7942964ef3daf1f1d8275b5733d454->leave($__internal_58bdb6bf16fec3a0ba462654101cb1ae1b7942964ef3daf1f1d8275b5733d454_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2793c30bd56428800a775a76da6a1e7481a70a39cdaa18795133ccfabd42b52b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2793c30bd56428800a775a76da6a1e7481a70a39cdaa18795133ccfabd42b52b->enter($__internal_2793c30bd56428800a775a76da6a1e7481a70a39cdaa18795133ccfabd42b52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_012dc73c516a7aa5e1739f419b3a9dffaa15557205c00dcf23faec44e275e362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_012dc73c516a7aa5e1739f419b3a9dffaa15557205c00dcf23faec44e275e362->enter($__internal_012dc73c516a7aa5e1739f419b3a9dffaa15557205c00dcf23faec44e275e362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
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
        
        $__internal_012dc73c516a7aa5e1739f419b3a9dffaa15557205c00dcf23faec44e275e362->leave($__internal_012dc73c516a7aa5e1739f419b3a9dffaa15557205c00dcf23faec44e275e362_prof);

        
        $__internal_2793c30bd56428800a775a76da6a1e7481a70a39cdaa18795133ccfabd42b52b->leave($__internal_2793c30bd56428800a775a76da6a1e7481a70a39cdaa18795133ccfabd42b52b_prof);

    }

    // line 322
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0d516e73336743a031101da751c776ceca8b010649157bc206b9d2a268501100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d516e73336743a031101da751c776ceca8b010649157bc206b9d2a268501100->enter($__internal_0d516e73336743a031101da751c776ceca8b010649157bc206b9d2a268501100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2ea6c73965952aadb7b3c803bc22ccc736ae1299d106d2a4cdef88b7785d8ebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea6c73965952aadb7b3c803bc22ccc736ae1299d106d2a4cdef88b7785d8ebb->enter($__internal_2ea6c73965952aadb7b3c803bc22ccc736ae1299d106d2a4cdef88b7785d8ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 323
        echo "    <!-- Scripts -->

    <script type=\"text/javascript\">
    </script>
    <script src=\"../assets/js/core.min.js\"></script>
    <script src=\"../assets/js/app.min.js\"></script>
    <script src=\"../assets/js/script.min.js\"></script>
    <script src=\"../assets/js/script.js\"></script>
";
        
        $__internal_2ea6c73965952aadb7b3c803bc22ccc736ae1299d106d2a4cdef88b7785d8ebb->leave($__internal_2ea6c73965952aadb7b3c803bc22ccc736ae1299d106d2a4cdef88b7785d8ebb_prof);

        
        $__internal_0d516e73336743a031101da751c776ceca8b010649157bc206b9d2a268501100->leave($__internal_0d516e73336743a031101da751c776ceca8b010649157bc206b9d2a268501100_prof);

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
        return array (  464 => 323,  455 => 322,  434 => 10,  425 => 9,  407 => 5,  394 => 332,  392 => 322,  384 => 317,  376 => 312,  172 => 111,  160 => 102,  156 => 101,  148 => 96,  140 => 91,  132 => 86,  121 => 78,  112 => 72,  104 => 67,  91 => 57,  81 => 50,  68 => 40,  56 => 33,  43 => 22,  41 => 9,  34 => 5,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>{% block title %}MerchByAmazon | Listing Creator{% endblock %}</title>
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
        <a class=\"navbar-brand\" href=\"#\">MerchByAmazon Listing Creator</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"{{ path('app_list') }}/{{ master.master_id }}\">Back <span class=\"sr-only\">(current)</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class=\"container-fluid\" id=\"listing-creator\">
    {{ form_start(form) }}
    <div class=\"row\">
        <div class=\"col-md-4 offset-md-8\">
            <br>
        </div>

        <div class=\"col-md-8\" >
            <h3>Listing</h3><br>

            <div class=\"form-check form-check-inline\">
                {{ form_widget(form.type, { 'attr': {'class': 'form-check form-check-inline'} }) }}
            </div>

            <span style=\"color:#dddddd;\">|</span>
            &nbsp;&nbsp;

            <div class=\"form-check form-check-inline\">
                {{ form_row(form.fit, { 'attr': {'class': 'form-check form-check-inline'} }) }}
            </div>

            <br>

            <div class=\"row\">
                <div class=\"col-md-2\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\">\$</span>
                        <!--<input type=\"text\" class=\"form-control\" aria-label=\"Text input with checkbox\">-->
                        {{ form_row(form.cost, { 'attr': {'class': 'form-control'} }) }}
                        <small class=\"invalid-feedback\">Price can't be empty. &emsp;</small>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    {{ form_row(form.brand, { 'attr': {'class': 'form-control'} }) }}
                    <small class=\"invalid-feedback\">Brand can't be empty. &emsp;</small>
                    <small class=\"form-inline-text text-muted allowed-chars\">50 of 50 characters left</small><small id=\"check-brand-link\"> &nbsp;&nbsp;&nbsp; <a href=\"#\" target=\"_blank\">Check Brand</a></small><br><br>
                </div>
                <div class=\"col-md-6\">

                    {{ form_row(form.title, { 'attr': {'class': 'form-control listing-field '} }) }}

                    <small class=\"invalid-feedback\">Title can't be empty. &emsp;</small>
                    <small class=\"form-text text-muted allowed-chars\">60 of 60 characters left</small><br>
                </div>
            </div>


            {{ form_row(form.bulletOne, { 'attr': {'class': 'form-control'} }) }}

            <small class=\"form-text text-muted allowed-chars\">255 of 255 characters left</small><br>


            {{ form_row(form.bulletTwo, { 'attr': {'class': 'form-control'} }) }}

            <small class=\"form-text text-muted allowed-chars\">255 of 255 characters left</small><br>


            {{ form_row(form.description, { 'attr': {'class': 'form-control'} }) }}


            <div class=\"row\">
                <div class=\"col-md-2\">
                    {{ form_row(form.userId, { 'attr': {'id': 'user_ID'} }) }}
                    {{ form_row(form.master_id, { 'attr': {'class': 'form-control'} }) }}
                    <button class=\"btn btn-primary\" type=\"submit\" id=\"add-to-list\">Add to list</button>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"row\" style=\"padding-left:20px;\">
                <!-- Colorpicker Anvil & Premium -->
                <div id=\"colorpicker\">
                    {{ form_row(form.color, { 'attr': {'style': 'display: none'} }) }}
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
                        <input type=\"checkbox\" class=\"custom-control-input color-check\" id=\"form_color_6\" name=\"form[color][]\" value=\"7\">
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
                </div>    </div>
            <br>

            <div class=\"row\">
                <div id=\"color-preview\">
                    <div id=\"tshirt-placeholder\" class=\"Anvil form_color_2\">
                        <div id=\"preview\">
                            <img src=\"{{ asset('uploads/image/' ~ master.filename) }}\">
                        </div>
                    </div>
                </div>
            </div>
            {{ form_end(form) }}
        </div>        </div>

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

</body>
</html>
", "list/listCreate.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\list\\listCreate.html.twig");
    }
}
