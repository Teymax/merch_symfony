<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_7eecc9010a3ba2fcdf3b3debbb8ba9bb895860bad3c0f51b588892ff1a511008 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_415de1992cbc2e2a4e5861c935a328901e1cf441cdfeefcdcb925ad57b32e9a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_415de1992cbc2e2a4e5861c935a328901e1cf441cdfeefcdcb925ad57b32e9a7->enter($__internal_415de1992cbc2e2a4e5861c935a328901e1cf441cdfeefcdcb925ad57b32e9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_1c9ae7271e59a08274f3cce29e335cb4916ccc548b7f1b1fa4e4a095ceea3843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9ae7271e59a08274f3cce29e335cb4916ccc548b7f1b1fa4e4a095ceea3843->enter($__internal_1c9ae7271e59a08274f3cce29e335cb4916ccc548b7f1b1fa4e4a095ceea3843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('submit_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('reset_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_415de1992cbc2e2a4e5861c935a328901e1cf441cdfeefcdcb925ad57b32e9a7->leave($__internal_415de1992cbc2e2a4e5861c935a328901e1cf441cdfeefcdcb925ad57b32e9a7_prof);

        
        $__internal_1c9ae7271e59a08274f3cce29e335cb4916ccc548b7f1b1fa4e4a095ceea3843->leave($__internal_1c9ae7271e59a08274f3cce29e335cb4916ccc548b7f1b1fa4e4a095ceea3843_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ec50add252756f11bcd3aa0b12f31c4666a8907af8fd47075e4fa5b7f6dee071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec50add252756f11bcd3aa0b12f31c4666a8907af8fd47075e4fa5b7f6dee071->enter($__internal_ec50add252756f11bcd3aa0b12f31c4666a8907af8fd47075e4fa5b7f6dee071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_6791bec6bfdc4724607f912e054b5971902784c55f5d448b473bcb27a31603f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6791bec6bfdc4724607f912e054b5971902784c55f5d448b473bcb27a31603f3->enter($__internal_6791bec6bfdc4724607f912e054b5971902784c55f5d448b473bcb27a31603f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 6, $this->getSourceContext()); })()) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !(isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 9, $this->getSourceContext()); })()))) {
                // line 10
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 10, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 12, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_6791bec6bfdc4724607f912e054b5971902784c55f5d448b473bcb27a31603f3->leave($__internal_6791bec6bfdc4724607f912e054b5971902784c55f5d448b473bcb27a31603f3_prof);

        
        $__internal_ec50add252756f11bcd3aa0b12f31c4666a8907af8fd47075e4fa5b7f6dee071->leave($__internal_ec50add252756f11bcd3aa0b12f31c4666a8907af8fd47075e4fa5b7f6dee071_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_2eb42b69aa4a5d75d4cba15c2fe85ed7618240a277774853313d438d93b6939a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eb42b69aa4a5d75d4cba15c2fe85ed7618240a277774853313d438d93b6939a->enter($__internal_2eb42b69aa4a5d75d4cba15c2fe85ed7618240a277774853313d438d93b6939a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_8e2e8ad823cd76426f87e9a41babfad8226eb4a7451ca7e034e51a3167d00266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e2e8ad823cd76426f87e9a41babfad8226eb4a7451ca7e034e51a3167d00266->enter($__internal_8e2e8ad823cd76426f87e9a41babfad8226eb4a7451ca7e034e51a3167d00266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_8e2e8ad823cd76426f87e9a41babfad8226eb4a7451ca7e034e51a3167d00266->leave($__internal_8e2e8ad823cd76426f87e9a41babfad8226eb4a7451ca7e034e51a3167d00266_prof);

        
        $__internal_2eb42b69aa4a5d75d4cba15c2fe85ed7618240a277774853313d438d93b6939a->leave($__internal_2eb42b69aa4a5d75d4cba15c2fe85ed7618240a277774853313d438d93b6939a_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_edb8f05d0b75261cdbc3a050335f4de524eaa18f25fe582c6565a2e760a28927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edb8f05d0b75261cdbc3a050335f4de524eaa18f25fe582c6565a2e760a28927->enter($__internal_edb8f05d0b75261cdbc3a050335f4de524eaa18f25fe582c6565a2e760a28927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_dd4f28bc0f273226ebae6d0c052e17ee539c9f3d3122dc9818c56fa2fd5a2690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd4f28bc0f273226ebae6d0c052e17ee539c9f3d3122dc9818c56fa2fd5a2690->enter($__internal_dd4f28bc0f273226ebae6d0c052e17ee539c9f3d3122dc9818c56fa2fd5a2690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && (isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 24, $this->getSourceContext()); })()))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 27, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 27, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 27, $this->getSourceContext()); })()))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'widget');
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'errors');
            // line 32
            echo "</div>
    ";
            // line 33
            echo "</div>";
        }
        
        $__internal_dd4f28bc0f273226ebae6d0c052e17ee539c9f3d3122dc9818c56fa2fd5a2690->leave($__internal_dd4f28bc0f273226ebae6d0c052e17ee539c9f3d3122dc9818c56fa2fd5a2690_prof);

        
        $__internal_edb8f05d0b75261cdbc3a050335f4de524eaa18f25fe582c6565a2e760a28927->leave($__internal_edb8f05d0b75261cdbc3a050335f4de524eaa18f25fe582c6565a2e760a28927_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_bc27ba6ff8083ca37b785cb7db2d6937beb3484f79bcb84185991073a3bb7a08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc27ba6ff8083ca37b785cb7db2d6937beb3484f79bcb84185991073a3bb7a08->enter($__internal_bc27ba6ff8083ca37b785cb7db2d6937beb3484f79bcb84185991073a3bb7a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_5f7b704ceba673c890e881c6aba3a44bc056f1c6c29f43476c8c8ab6baad8441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f7b704ceba673c890e881c6aba3a44bc056f1c6c29f43476c8c8ab6baad8441->enter($__internal_5f7b704ceba673c890e881c6aba3a44bc056f1c6c29f43476c8c8ab6baad8441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 38
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 39
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 39, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 39, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 39, $this->getSourceContext()); })()))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), 'label');
        // line 41
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'widget');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), 'errors');
        // line 44
        echo "</div>
        </div>
";
        // line 46
        echo "</fieldset>";
        
        $__internal_5f7b704ceba673c890e881c6aba3a44bc056f1c6c29f43476c8c8ab6baad8441->leave($__internal_5f7b704ceba673c890e881c6aba3a44bc056f1c6c29f43476c8c8ab6baad8441_prof);

        
        $__internal_bc27ba6ff8083ca37b785cb7db2d6937beb3484f79bcb84185991073a3bb7a08->leave($__internal_bc27ba6ff8083ca37b785cb7db2d6937beb3484f79bcb84185991073a3bb7a08_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_90ebd36cc9062060bb420eb8e789e7c419246dc1a547b14ad946fad6dd8c4d8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90ebd36cc9062060bb420eb8e789e7c419246dc1a547b14ad946fad6dd8c4d8d->enter($__internal_90ebd36cc9062060bb420eb8e789e7c419246dc1a547b14ad946fad6dd8c4d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_071f2788a5f7836c0b02fc33f870e59a5bff50eab2881260e6b240424c55d90e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_071f2788a5f7836c0b02fc33f870e59a5bff50eab2881260e6b240424c55d90e->enter($__internal_071f2788a5f7836c0b02fc33f870e59a5bff50eab2881260e6b240424c55d90e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 50
        echo "<div class=\"form-group row\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
        
        $__internal_071f2788a5f7836c0b02fc33f870e59a5bff50eab2881260e6b240424c55d90e->leave($__internal_071f2788a5f7836c0b02fc33f870e59a5bff50eab2881260e6b240424c55d90e_prof);

        
        $__internal_90ebd36cc9062060bb420eb8e789e7c419246dc1a547b14ad946fad6dd8c4d8d->leave($__internal_90ebd36cc9062060bb420eb8e789e7c419246dc1a547b14ad946fad6dd8c4d8d_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_eec0cd57bd6e4918faf0e9b6b9a6643dac489f29a3a08f1ad2f6902faaf7f18a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eec0cd57bd6e4918faf0e9b6b9a6643dac489f29a3a08f1ad2f6902faaf7f18a->enter($__internal_eec0cd57bd6e4918faf0e9b6b9a6643dac489f29a3a08f1ad2f6902faaf7f18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_61c4bbc36553c55041bc74433349ec76f0cd0ab1539eaaf847316e4b7fad4a38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c4bbc36553c55041bc74433349ec76f0cd0ab1539eaaf847316e4b7fad4a38->enter($__internal_61c4bbc36553c55041bc74433349ec76f0cd0ab1539eaaf847316e4b7fad4a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 59
        echo "<div class=\"form-group row\">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_61c4bbc36553c55041bc74433349ec76f0cd0ab1539eaaf847316e4b7fad4a38->leave($__internal_61c4bbc36553c55041bc74433349ec76f0cd0ab1539eaaf847316e4b7fad4a38_prof);

        
        $__internal_eec0cd57bd6e4918faf0e9b6b9a6643dac489f29a3a08f1ad2f6902faaf7f18a->leave($__internal_eec0cd57bd6e4918faf0e9b6b9a6643dac489f29a3a08f1ad2f6902faaf7f18a_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_8e1ff49bb7bfe76ce69bf7d9cb4cd71fbc935094d4e2816fea517503a382d2f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e1ff49bb7bfe76ce69bf7d9cb4cd71fbc935094d4e2816fea517503a382d2f6->enter($__internal_8e1ff49bb7bfe76ce69bf7d9cb4cd71fbc935094d4e2816fea517503a382d2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_c2331737f8a5a0eecab30b068409fe53064600efe6a13334470176a14acf5039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2331737f8a5a0eecab30b068409fe53064600efe6a13334470176a14acf5039->enter($__internal_c2331737f8a5a0eecab30b068409fe53064600efe6a13334470176a14acf5039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_c2331737f8a5a0eecab30b068409fe53064600efe6a13334470176a14acf5039->leave($__internal_c2331737f8a5a0eecab30b068409fe53064600efe6a13334470176a14acf5039_prof);

        
        $__internal_8e1ff49bb7bfe76ce69bf7d9cb4cd71fbc935094d4e2816fea517503a382d2f6->leave($__internal_8e1ff49bb7bfe76ce69bf7d9cb4cd71fbc935094d4e2816fea517503a382d2f6_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_d95e1d0de7ab2fdb158af09b8f2c2e69bf5fb685c63e87c4dd6545926bc31470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d95e1d0de7ab2fdb158af09b8f2c2e69bf5fb685c63e87c4dd6545926bc31470->enter($__internal_d95e1d0de7ab2fdb158af09b8f2c2e69bf5fb685c63e87c4dd6545926bc31470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_fcef015fc9b2dc95bb304df5122fc06276074a216dd50eea674dc1cea56c3078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcef015fc9b2dc95bb304df5122fc06276074a216dd50eea674dc1cea56c3078->enter($__internal_fcef015fc9b2dc95bb304df5122fc06276074a216dd50eea674dc1cea56c3078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 72
        echo "<div class=\"form-group row\">";
        // line 73
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 74
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->getSourceContext()); })()), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), 'errors');
        // line 77
        echo "</div>";
        // line 78
        echo "</div>";
        
        $__internal_fcef015fc9b2dc95bb304df5122fc06276074a216dd50eea674dc1cea56c3078->leave($__internal_fcef015fc9b2dc95bb304df5122fc06276074a216dd50eea674dc1cea56c3078_prof);

        
        $__internal_d95e1d0de7ab2fdb158af09b8f2c2e69bf5fb685c63e87c4dd6545926bc31470->leave($__internal_d95e1d0de7ab2fdb158af09b8f2c2e69bf5fb685c63e87c4dd6545926bc31470_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 78,  345 => 77,  343 => 76,  341 => 75,  337 => 74,  333 => 73,  331 => 72,  322 => 71,  312 => 68,  303 => 67,  293 => 64,  291 => 63,  289 => 62,  285 => 61,  281 => 60,  279 => 59,  270 => 58,  260 => 55,  258 => 54,  256 => 53,  252 => 52,  248 => 51,  246 => 50,  237 => 49,  227 => 46,  223 => 44,  221 => 43,  219 => 42,  215 => 41,  213 => 40,  208 => 39,  205 => 38,  196 => 37,  185 => 33,  182 => 32,  180 => 31,  178 => 30,  174 => 29,  172 => 28,  166 => 27,  163 => 25,  161 => 24,  152 => 23,  142 => 18,  133 => 17,  122 => 13,  120 => 12,  117 => 10,  115 => 9,  110 => 7,  108 => 6,  99 => 5,  89 => 71,  86 => 70,  84 => 67,  81 => 66,  79 => 58,  76 => 57,  74 => 49,  71 => 48,  69 => 37,  66 => 36,  64 => 23,  61 => 22,  58 => 20,  56 => 17,  53 => 16,  51 => 5,  48 => 4,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_4_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- if expanded is not defined or not expanded -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        <div class=\"form-group row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
    {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    <fieldset class=\"form-group\">
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
{##}</fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group row\">{#--#}
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
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}
", "bootstrap_4_horizontal_layout.html.twig", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_4_horizontal_layout.html.twig");
    }
}
