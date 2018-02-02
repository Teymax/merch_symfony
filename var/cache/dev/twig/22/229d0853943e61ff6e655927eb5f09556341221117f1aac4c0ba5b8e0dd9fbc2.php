<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_949d5ab43052d5db030a3bfbc07989f5582b772e7b4d1cd3b388fc95b38eab23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f536a55390bd9e730e6e1ee2feb48ca9b6391018ab5a08451f95ebf95272324f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f536a55390bd9e730e6e1ee2feb48ca9b6391018ab5a08451f95ebf95272324f->enter($__internal_f536a55390bd9e730e6e1ee2feb48ca9b6391018ab5a08451f95ebf95272324f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_157827d7b69cb63e88abd53d6e78724e9c8f6ec64393c2e82f04a4671bd1849b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_157827d7b69cb63e88abd53d6e78724e9c8f6ec64393c2e82f04a4671bd1849b->enter($__internal_157827d7b69cb63e88abd53d6e78724e9c8f6ec64393c2e82f04a4671bd1849b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_f536a55390bd9e730e6e1ee2feb48ca9b6391018ab5a08451f95ebf95272324f->leave($__internal_f536a55390bd9e730e6e1ee2feb48ca9b6391018ab5a08451f95ebf95272324f_prof);

        
        $__internal_157827d7b69cb63e88abd53d6e78724e9c8f6ec64393c2e82f04a4671bd1849b->leave($__internal_157827d7b69cb63e88abd53d6e78724e9c8f6ec64393c2e82f04a4671bd1849b_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_b19720fd63cda62616f9e7d57b0ad77cf7a8b38565c809b94db217a7e030bf08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b19720fd63cda62616f9e7d57b0ad77cf7a8b38565c809b94db217a7e030bf08->enter($__internal_b19720fd63cda62616f9e7d57b0ad77cf7a8b38565c809b94db217a7e030bf08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_71ac12e7d8f43b3bf4303ef434a8b13a0484c262e9cd164699280d80db2947d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71ac12e7d8f43b3bf4303ef434a8b13a0484c262e9cd164699280d80db2947d5->enter($__internal_71ac12e7d8f43b3bf4303ef434a8b13a0484c262e9cd164699280d80db2947d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_71ac12e7d8f43b3bf4303ef434a8b13a0484c262e9cd164699280d80db2947d5->leave($__internal_71ac12e7d8f43b3bf4303ef434a8b13a0484c262e9cd164699280d80db2947d5_prof);

        
        $__internal_b19720fd63cda62616f9e7d57b0ad77cf7a8b38565c809b94db217a7e030bf08->leave($__internal_b19720fd63cda62616f9e7d57b0ad77cf7a8b38565c809b94db217a7e030bf08_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_7ea9164b7cdf58dd6965ef1c9e8bebf7ffb4b3792e971faf0b54fe3dafbec113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ea9164b7cdf58dd6965ef1c9e8bebf7ffb4b3792e971faf0b54fe3dafbec113->enter($__internal_7ea9164b7cdf58dd6965ef1c9e8bebf7ffb4b3792e971faf0b54fe3dafbec113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_43268d4d0b6bcb1c0a101aef884c2ae00557b2046ae2c070445f3336dc0dd1a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43268d4d0b6bcb1c0a101aef884c2ae00557b2046ae2c070445f3336dc0dd1a0->enter($__internal_43268d4d0b6bcb1c0a101aef884c2ae00557b2046ae2c070445f3336dc0dd1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 11, $this->getSourceContext()); })()) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 14, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_43268d4d0b6bcb1c0a101aef884c2ae00557b2046ae2c070445f3336dc0dd1a0->leave($__internal_43268d4d0b6bcb1c0a101aef884c2ae00557b2046ae2c070445f3336dc0dd1a0_prof);

        
        $__internal_7ea9164b7cdf58dd6965ef1c9e8bebf7ffb4b3792e971faf0b54fe3dafbec113->leave($__internal_7ea9164b7cdf58dd6965ef1c9e8bebf7ffb4b3792e971faf0b54fe3dafbec113_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_9f752cff88e7d2f8e4035a08034885416ffe53ad3cc3ba5a1d397b8efed481a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f752cff88e7d2f8e4035a08034885416ffe53ad3cc3ba5a1d397b8efed481a0->enter($__internal_9f752cff88e7d2f8e4035a08034885416ffe53ad3cc3ba5a1d397b8efed481a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_7fbbbf0e4bdd2900f1a796a0d8e47d1ff4e38ea910675f7215c7dc12fd294e72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fbbbf0e4bdd2900f1a796a0d8e47d1ff4e38ea910675f7215c7dc12fd294e72->enter($__internal_7fbbbf0e4bdd2900f1a796a0d8e47d1ff4e38ea910675f7215c7dc12fd294e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_7fbbbf0e4bdd2900f1a796a0d8e47d1ff4e38ea910675f7215c7dc12fd294e72->leave($__internal_7fbbbf0e4bdd2900f1a796a0d8e47d1ff4e38ea910675f7215c7dc12fd294e72_prof);

        
        $__internal_9f752cff88e7d2f8e4035a08034885416ffe53ad3cc3ba5a1d397b8efed481a0->leave($__internal_9f752cff88e7d2f8e4035a08034885416ffe53ad3cc3ba5a1d397b8efed481a0_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9e0c7820674426525224db4b3d4d180fd99ef7584ac0396b3f5da6ba568ce640 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e0c7820674426525224db4b3d4d180fd99ef7584ac0396b3f5da6ba568ce640->enter($__internal_9e0c7820674426525224db4b3d4d180fd99ef7584ac0396b3f5da6ba568ce640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a3667aeffeeade39ceb3d320e5274db50ca579a8bdcac3906527cd2a9d615d34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3667aeffeeade39ceb3d320e5274db50ca579a8bdcac3906527cd2a9d615d34->enter($__internal_a3667aeffeeade39ceb3d320e5274db50ca579a8bdcac3906527cd2a9d615d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 26, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 26, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 26, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_a3667aeffeeade39ceb3d320e5274db50ca579a8bdcac3906527cd2a9d615d34->leave($__internal_a3667aeffeeade39ceb3d320e5274db50ca579a8bdcac3906527cd2a9d615d34_prof);

        
        $__internal_9e0c7820674426525224db4b3d4d180fd99ef7584ac0396b3f5da6ba568ce640->leave($__internal_9e0c7820674426525224db4b3d4d180fd99ef7584ac0396b3f5da6ba568ce640_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_22ae833ed55b2d64ffd3bfc4061bbae56590b0d392dc249fdbca4a766c9a074e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22ae833ed55b2d64ffd3bfc4061bbae56590b0d392dc249fdbca4a766c9a074e->enter($__internal_22ae833ed55b2d64ffd3bfc4061bbae56590b0d392dc249fdbca4a766c9a074e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_8aef48ea5c2896516818385fca3d4ce2d1f36f6468fad63914b8547e576ce736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aef48ea5c2896516818385fca3d4ce2d1f36f6468fad63914b8547e576ce736->enter($__internal_8aef48ea5c2896516818385fca3d4ce2d1f36f6468fad63914b8547e576ce736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_8aef48ea5c2896516818385fca3d4ce2d1f36f6468fad63914b8547e576ce736->leave($__internal_8aef48ea5c2896516818385fca3d4ce2d1f36f6468fad63914b8547e576ce736_prof);

        
        $__internal_22ae833ed55b2d64ffd3bfc4061bbae56590b0d392dc249fdbca4a766c9a074e->leave($__internal_22ae833ed55b2d64ffd3bfc4061bbae56590b0d392dc249fdbca4a766c9a074e_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_5d337f2f05780f32bf84ef7340371bb68eef148b833781322253c925dc747e49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d337f2f05780f32bf84ef7340371bb68eef148b833781322253c925dc747e49->enter($__internal_5d337f2f05780f32bf84ef7340371bb68eef148b833781322253c925dc747e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_fcc35c16738578e91768d6657c162d3ec7b094b68ebcc31c9ab63bd592d08a67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc35c16738578e91768d6657c162d3ec7b094b68ebcc31c9ab63bd592d08a67->enter($__internal_fcc35c16738578e91768d6657c162d3ec7b094b68ebcc31c9ab63bd592d08a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_fcc35c16738578e91768d6657c162d3ec7b094b68ebcc31c9ab63bd592d08a67->leave($__internal_fcc35c16738578e91768d6657c162d3ec7b094b68ebcc31c9ab63bd592d08a67_prof);

        
        $__internal_5d337f2f05780f32bf84ef7340371bb68eef148b833781322253c925dc747e49->leave($__internal_5d337f2f05780f32bf84ef7340371bb68eef148b833781322253c925dc747e49_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_76c90abd3296bed91de58d3d865d8e979901c58d2217b1060b3fcf1b71aac67c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76c90abd3296bed91de58d3d865d8e979901c58d2217b1060b3fcf1b71aac67c->enter($__internal_76c90abd3296bed91de58d3d865d8e979901c58d2217b1060b3fcf1b71aac67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_9a6a7406af2673bf3f2e7d92cef95f879fccf735cd78d2cea7d7619297904028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a6a7406af2673bf3f2e7d92cef95f879fccf735cd78d2cea7d7619297904028->enter($__internal_9a6a7406af2673bf3f2e7d92cef95f879fccf735cd78d2cea7d7619297904028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_9a6a7406af2673bf3f2e7d92cef95f879fccf735cd78d2cea7d7619297904028->leave($__internal_9a6a7406af2673bf3f2e7d92cef95f879fccf735cd78d2cea7d7619297904028_prof);

        
        $__internal_76c90abd3296bed91de58d3d865d8e979901c58d2217b1060b3fcf1b71aac67c->leave($__internal_76c90abd3296bed91de58d3d865d8e979901c58d2217b1060b3fcf1b71aac67c_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_414c0ca00d25f70a7e964e4c0c1044e389dfe223a9e9730a40ce4d546e0fa226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_414c0ca00d25f70a7e964e4c0c1044e389dfe223a9e9730a40ce4d546e0fa226->enter($__internal_414c0ca00d25f70a7e964e4c0c1044e389dfe223a9e9730a40ce4d546e0fa226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_af8c96144fbf544de683bf33335fd66c2c773680b807a755e7ba43fce309133d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af8c96144fbf544de683bf33335fd66c2c773680b807a755e7ba43fce309133d->enter($__internal_af8c96144fbf544de683bf33335fd66c2c773680b807a755e7ba43fce309133d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_af8c96144fbf544de683bf33335fd66c2c773680b807a755e7ba43fce309133d->leave($__internal_af8c96144fbf544de683bf33335fd66c2c773680b807a755e7ba43fce309133d_prof);

        
        $__internal_414c0ca00d25f70a7e964e4c0c1044e389dfe223a9e9730a40ce4d546e0fa226->leave($__internal_414c0ca00d25f70a7e964e4c0c1044e389dfe223a9e9730a40ce4d546e0fa226_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 64,  318 => 63,  316 => 62,  314 => 61,  310 => 60,  306 => 59,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  262 => 50,  260 => 49,  258 => 48,  254 => 47,  250 => 46,  248 => 45,  239 => 44,  229 => 41,  227 => 40,  225 => 39,  221 => 38,  217 => 37,  215 => 36,  206 => 35,  196 => 32,  193 => 31,  191 => 30,  189 => 29,  185 => 28,  183 => 27,  177 => 26,  168 => 25,  158 => 20,  149 => 19,  138 => 15,  136 => 14,  131 => 12,  129 => 11,  120 => 10,  110 => 5,  108 => 4,  99 => 3,  89 => 57,  86 => 56,  84 => 53,  81 => 52,  79 => 44,  76 => 43,  74 => 35,  71 => 34,  69 => 25,  66 => 24,  63 => 22,  61 => 19,  58 => 18,  56 => 10,  53 => 9,  50 => 7,  48 => 3,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
