<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_f2d83f5d298a02059351828a179c50daaa53da22b97ca3ed0170bc13106a20a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2524d8b30af22400ef80fa6c2210c25aca2a7e22dbd61f7492f99d1a1b85ce11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2524d8b30af22400ef80fa6c2210c25aca2a7e22dbd61f7492f99d1a1b85ce11->enter($__internal_2524d8b30af22400ef80fa6c2210c25aca2a7e22dbd61f7492f99d1a1b85ce11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_dc71326ac701178b7aa3f00ca8994434bc8d019bcacce59a2b1076ba8ec12015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc71326ac701178b7aa3f00ca8994434bc8d019bcacce59a2b1076ba8ec12015->enter($__internal_dc71326ac701178b7aa3f00ca8994434bc8d019bcacce59a2b1076ba8ec12015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('form_label', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('choice_label', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('radio_label', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 88
        echo "
";
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('form_row', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('button_row', $context, $blocks);
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('choice_row', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('date_row', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('time_row', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('radio_row', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_2524d8b30af22400ef80fa6c2210c25aca2a7e22dbd61f7492f99d1a1b85ce11->leave($__internal_2524d8b30af22400ef80fa6c2210c25aca2a7e22dbd61f7492f99d1a1b85ce11_prof);

        
        $__internal_dc71326ac701178b7aa3f00ca8994434bc8d019bcacce59a2b1076ba8ec12015->leave($__internal_dc71326ac701178b7aa3f00ca8994434bc8d019bcacce59a2b1076ba8ec12015_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_ef46591d3106de426de83ee627e0a74347548d9d4a80dffaf88d882bff3c9a71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef46591d3106de426de83ee627e0a74347548d9d4a80dffaf88d882bff3c9a71->enter($__internal_ef46591d3106de426de83ee627e0a74347548d9d4a80dffaf88d882bff3c9a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_a5a379e8d02e5b9e24ceb8a6b224f5f572f1615e97fdc7f44108faa4bdd07aa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5a379e8d02e5b9e24ceb8a6b224f5f572f1615e97fdc7f44108faa4bdd07aa6->enter($__internal_a5a379e8d02e5b9e24ceb8a6b224f5f572f1615e97fdc7f44108faa4bdd07aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a5a379e8d02e5b9e24ceb8a6b224f5f572f1615e97fdc7f44108faa4bdd07aa6->leave($__internal_a5a379e8d02e5b9e24ceb8a6b224f5f572f1615e97fdc7f44108faa4bdd07aa6_prof);

        
        $__internal_ef46591d3106de426de83ee627e0a74347548d9d4a80dffaf88d882bff3c9a71->leave($__internal_ef46591d3106de426de83ee627e0a74347548d9d4a80dffaf88d882bff3c9a71_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_67276b7ff93339cd7cf144d6017e5c0b0ddcd06558f830b21baf67e1a489df3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67276b7ff93339cd7cf144d6017e5c0b0ddcd06558f830b21baf67e1a489df3a->enter($__internal_67276b7ff93339cd7cf144d6017e5c0b0ddcd06558f830b21baf67e1a489df3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_e21535a2d5278868bafa062017ce4dfd0109e9942f7c15250dd66f384237f0db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e21535a2d5278868bafa062017ce4dfd0109e9942f7c15250dd66f384237f0db->enter($__internal_e21535a2d5278868bafa062017ce4dfd0109e9942f7c15250dd66f384237f0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_e21535a2d5278868bafa062017ce4dfd0109e9942f7c15250dd66f384237f0db->leave($__internal_e21535a2d5278868bafa062017ce4dfd0109e9942f7c15250dd66f384237f0db_prof);

        
        $__internal_67276b7ff93339cd7cf144d6017e5c0b0ddcd06558f830b21baf67e1a489df3a->leave($__internal_67276b7ff93339cd7cf144d6017e5c0b0ddcd06558f830b21baf67e1a489df3a_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_b2ec5ee8c5716c7429048777fb3b476b2ea58609f5f68169d9352c081e995a2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2ec5ee8c5716c7429048777fb3b476b2ea58609f5f68169d9352c081e995a2a->enter($__internal_b2ec5ee8c5716c7429048777fb3b476b2ea58609f5f68169d9352c081e995a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_69c1eb0fd35f5df6149aa62ce3ca3650b54dc96c1b94ad676314aad4f9fe838e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69c1eb0fd35f5df6149aa62ce3ca3650b54dc96c1b94ad676314aad4f9fe838e->enter($__internal_69c1eb0fd35f5df6149aa62ce3ca3650b54dc96c1b94ad676314aad4f9fe838e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 18
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 18, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 19
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 19, $this->getSourceContext()); })()))) {
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 22
            echo "<div class=\"checkbox\">";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 24
            echo "</div>";
        }
        
        $__internal_69c1eb0fd35f5df6149aa62ce3ca3650b54dc96c1b94ad676314aad4f9fe838e->leave($__internal_69c1eb0fd35f5df6149aa62ce3ca3650b54dc96c1b94ad676314aad4f9fe838e_prof);

        
        $__internal_b2ec5ee8c5716c7429048777fb3b476b2ea58609f5f68169d9352c081e995a2a->leave($__internal_b2ec5ee8c5716c7429048777fb3b476b2ea58609f5f68169d9352c081e995a2a_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_1b3eb6cd5e5c8ffe0d57b0d9592189cc8e4c8f5e3f27e55df8945188cccf259a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b3eb6cd5e5c8ffe0d57b0d9592189cc8e4c8f5e3f27e55df8945188cccf259a->enter($__internal_1b3eb6cd5e5c8ffe0d57b0d9592189cc8e4c8f5e3f27e55df8945188cccf259a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_d49e9aaa0e156e1300b117087c2139036e46c3ba7ff629153229f483483dcd94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d49e9aaa0e156e1300b117087c2139036e46c3ba7ff629153229f483483dcd94->enter($__internal_d49e9aaa0e156e1300b117087c2139036e46c3ba7ff629153229f483483dcd94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 29
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 29, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 30
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 30, $this->getSourceContext()); })()))) {
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 33
            echo "<div class=\"radio\">";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 35
            echo "</div>";
        }
        
        $__internal_d49e9aaa0e156e1300b117087c2139036e46c3ba7ff629153229f483483dcd94->leave($__internal_d49e9aaa0e156e1300b117087c2139036e46c3ba7ff629153229f483483dcd94_prof);

        
        $__internal_1b3eb6cd5e5c8ffe0d57b0d9592189cc8e4c8f5e3f27e55df8945188cccf259a->leave($__internal_1b3eb6cd5e5c8ffe0d57b0d9592189cc8e4c8f5e3f27e55df8945188cccf259a_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_6347702a5ff6a9adefcd69513af0f38e232b611a4727723f1925770d56bdb104 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6347702a5ff6a9adefcd69513af0f38e232b611a4727723f1925770d56bdb104->enter($__internal_6347702a5ff6a9adefcd69513af0f38e232b611a4727723f1925770d56bdb104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_c8b36c3e7c68af56745dbd77ee3e2095d299b1d2731b9f1fec7317a60561f8f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b36c3e7c68af56745dbd77ee3e2095d299b1d2731b9f1fec7317a60561f8f7->enter($__internal_c8b36c3e7c68af56745dbd77ee3e2095d299b1d2731b9f1fec7317a60561f8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_c8b36c3e7c68af56745dbd77ee3e2095d299b1d2731b9f1fec7317a60561f8f7->leave($__internal_c8b36c3e7c68af56745dbd77ee3e2095d299b1d2731b9f1fec7317a60561f8f7_prof);

        
        $__internal_6347702a5ff6a9adefcd69513af0f38e232b611a4727723f1925770d56bdb104->leave($__internal_6347702a5ff6a9adefcd69513af0f38e232b611a4727723f1925770d56bdb104_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_1834215bb7c0e406a42358abdeb7897e4db9938119c5bde77fc3fb001c42d26a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1834215bb7c0e406a42358abdeb7897e4db9938119c5bde77fc3fb001c42d26a->enter($__internal_1834215bb7c0e406a42358abdeb7897e4db9938119c5bde77fc3fb001c42d26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_6772c5d33ec2bbd1c7f5f14156d515df1640c76eae011e77ba29b445dda814fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6772c5d33ec2bbd1c7f5f14156d515df1640c76eae011e77ba29b445dda814fe->enter($__internal_6772c5d33ec2bbd1c7f5f14156d515df1640c76eae011e77ba29b445dda814fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_6772c5d33ec2bbd1c7f5f14156d515df1640c76eae011e77ba29b445dda814fe->leave($__internal_6772c5d33ec2bbd1c7f5f14156d515df1640c76eae011e77ba29b445dda814fe_prof);

        
        $__internal_1834215bb7c0e406a42358abdeb7897e4db9938119c5bde77fc3fb001c42d26a->leave($__internal_1834215bb7c0e406a42358abdeb7897e4db9938119c5bde77fc3fb001c42d26a_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_917eda55d628116a7649b63dcc260803626ee283de4de64ddd29ced02c554906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_917eda55d628116a7649b63dcc260803626ee283de4de64ddd29ced02c554906->enter($__internal_917eda55d628116a7649b63dcc260803626ee283de4de64ddd29ced02c554906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_a8db6b5b47a566e4188594406e99b957d7fd660a4e1cd51e7d8b48945cb4592e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8db6b5b47a566e4188594406e99b957d7fd660a4e1cd51e7d8b48945cb4592e->enter($__internal_a8db6b5b47a566e4188594406e99b957d7fd660a4e1cd51e7d8b48945cb4592e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_a8db6b5b47a566e4188594406e99b957d7fd660a4e1cd51e7d8b48945cb4592e->leave($__internal_a8db6b5b47a566e4188594406e99b957d7fd660a4e1cd51e7d8b48945cb4592e_prof);

        
        $__internal_917eda55d628116a7649b63dcc260803626ee283de4de64ddd29ced02c554906->leave($__internal_917eda55d628116a7649b63dcc260803626ee283de4de64ddd29ced02c554906_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_46286ae71cbec10fe7c749b80bad4b69c909e028406bb3561644357e599781d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46286ae71cbec10fe7c749b80bad4b69c909e028406bb3561644357e599781d4->enter($__internal_46286ae71cbec10fe7c749b80bad4b69c909e028406bb3561644357e599781d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_962d2bce7988b541c470ef31eb0c2ea69cc49e8bc4cc63cead3c48dccbb60f3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_962d2bce7988b541c470ef31eb0c2ea69cc49e8bc4cc63cead3c48dccbb60f3a->enter($__internal_962d2bce7988b541c470ef31eb0c2ea69cc49e8bc4cc63cead3c48dccbb60f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_962d2bce7988b541c470ef31eb0c2ea69cc49e8bc4cc63cead3c48dccbb60f3a->leave($__internal_962d2bce7988b541c470ef31eb0c2ea69cc49e8bc4cc63cead3c48dccbb60f3a_prof);

        
        $__internal_46286ae71cbec10fe7c749b80bad4b69c909e028406bb3561644357e599781d4->leave($__internal_46286ae71cbec10fe7c749b80bad4b69c909e028406bb3561644357e599781d4_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_c12e4b505701b7a298e652aa8bea04b49b32f6de1d98e4c3605a2cc6c3c1756d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c12e4b505701b7a298e652aa8bea04b49b32f6de1d98e4c3605a2cc6c3c1756d->enter($__internal_c12e4b505701b7a298e652aa8bea04b49b32f6de1d98e4c3605a2cc6c3c1756d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_9e1c9d945319afb58bad341e132a1e81cb4873366cb2e7f8790534c12e4a1ca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e1c9d945319afb58bad341e132a1e81cb4873366cb2e7f8790534c12e4a1ca0->enter($__internal_9e1c9d945319afb58bad341e132a1e81cb4873366cb2e7f8790534c12e4a1ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 66
        if (array_key_exists("widget", $context)) {
            // line 67
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 67, $this->getSourceContext()); })())) {
                // line 68
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 68, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 70
            if (array_key_exists("parent_label_class", $context)) {
                // line 71
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 71, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 71, $this->getSourceContext()); })())))));
            }
            // line 73
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })())))) {
                // line 74
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 74, $this->getSourceContext()); })()))) {
                    // line 75
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 75, $this->getSourceContext()); })()), array("%name%" =>                     // line 76
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 76, $this->getSourceContext()); })()), "%id%" =>                     // line 77
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 77, $this->getSourceContext()); })())));
                } else {
                    // line 80
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 80, $this->getSourceContext()); })()));
                }
            }
            // line 83
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 83, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 84
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 84, $this->getSourceContext()); })());
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            // line 85
            echo "</label>";
        }
        
        $__internal_9e1c9d945319afb58bad341e132a1e81cb4873366cb2e7f8790534c12e4a1ca0->leave($__internal_9e1c9d945319afb58bad341e132a1e81cb4873366cb2e7f8790534c12e4a1ca0_prof);

        
        $__internal_c12e4b505701b7a298e652aa8bea04b49b32f6de1d98e4c3605a2cc6c3c1756d->leave($__internal_c12e4b505701b7a298e652aa8bea04b49b32f6de1d98e4c3605a2cc6c3c1756d_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_29a60dd85a4390c4ab2350a39afa74039f2111e99199a997c1bf0ad54472bba4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29a60dd85a4390c4ab2350a39afa74039f2111e99199a997c1bf0ad54472bba4->enter($__internal_29a60dd85a4390c4ab2350a39afa74039f2111e99199a997c1bf0ad54472bba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_54469a8b843506ad2c63655b7b1c41222226c275ca8d59ace5e4cf78c50f349d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54469a8b843506ad2c63655b7b1c41222226c275ca8d59ace5e4cf78c50f349d->enter($__internal_54469a8b843506ad2c63655b7b1c41222226c275ca8d59ace5e4cf78c50f349d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 92
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 92, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 92, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 92, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->getSourceContext()); })()), 'label');
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->getSourceContext()); })()), 'widget');
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->getSourceContext()); })()), 'errors');
        // line 96
        echo "</div>";
        
        $__internal_54469a8b843506ad2c63655b7b1c41222226c275ca8d59ace5e4cf78c50f349d->leave($__internal_54469a8b843506ad2c63655b7b1c41222226c275ca8d59ace5e4cf78c50f349d_prof);

        
        $__internal_29a60dd85a4390c4ab2350a39afa74039f2111e99199a997c1bf0ad54472bba4->leave($__internal_29a60dd85a4390c4ab2350a39afa74039f2111e99199a997c1bf0ad54472bba4_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_c45d9fb8e7040a8fa24a184423ee50e9251cf7c838fa112ae865afe737fc6276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c45d9fb8e7040a8fa24a184423ee50e9251cf7c838fa112ae865afe737fc6276->enter($__internal_c45d9fb8e7040a8fa24a184423ee50e9251cf7c838fa112ae865afe737fc6276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_4fd307c500f8da1a7c95f8fd7612a571f764f8299ee974998529df4db594af86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd307c500f8da1a7c95f8fd7612a571f764f8299ee974998529df4db594af86->enter($__internal_4fd307c500f8da1a7c95f8fd7612a571f764f8299ee974998529df4db594af86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_4fd307c500f8da1a7c95f8fd7612a571f764f8299ee974998529df4db594af86->leave($__internal_4fd307c500f8da1a7c95f8fd7612a571f764f8299ee974998529df4db594af86_prof);

        
        $__internal_c45d9fb8e7040a8fa24a184423ee50e9251cf7c838fa112ae865afe737fc6276->leave($__internal_c45d9fb8e7040a8fa24a184423ee50e9251cf7c838fa112ae865afe737fc6276_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_1d7588724408b602d16542f2fc78b313ad5d6c4ad0e8aa51b558e57883c8b90b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d7588724408b602d16542f2fc78b313ad5d6c4ad0e8aa51b558e57883c8b90b->enter($__internal_1d7588724408b602d16542f2fc78b313ad5d6c4ad0e8aa51b558e57883c8b90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_22c5085ac4d33fdc8594aafda8326fec657589fb182c95d2f69c69f8cb71a86f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c5085ac4d33fdc8594aafda8326fec657589fb182c95d2f69c69f8cb71a86f->enter($__internal_22c5085ac4d33fdc8594aafda8326fec657589fb182c95d2f69c69f8cb71a86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_22c5085ac4d33fdc8594aafda8326fec657589fb182c95d2f69c69f8cb71a86f->leave($__internal_22c5085ac4d33fdc8594aafda8326fec657589fb182c95d2f69c69f8cb71a86f_prof);

        
        $__internal_1d7588724408b602d16542f2fc78b313ad5d6c4ad0e8aa51b558e57883c8b90b->leave($__internal_1d7588724408b602d16542f2fc78b313ad5d6c4ad0e8aa51b558e57883c8b90b_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_3df1b0d2758d20456581e34275207386c24b736cae79dffb210a46608ef8d358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3df1b0d2758d20456581e34275207386c24b736cae79dffb210a46608ef8d358->enter($__internal_3df1b0d2758d20456581e34275207386c24b736cae79dffb210a46608ef8d358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_d4b22a28f17e72810d444677358664734701e07dcb6ba734586c2085f15e4768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4b22a28f17e72810d444677358664734701e07dcb6ba734586c2085f15e4768->enter($__internal_d4b22a28f17e72810d444677358664734701e07dcb6ba734586c2085f15e4768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d4b22a28f17e72810d444677358664734701e07dcb6ba734586c2085f15e4768->leave($__internal_d4b22a28f17e72810d444677358664734701e07dcb6ba734586c2085f15e4768_prof);

        
        $__internal_3df1b0d2758d20456581e34275207386c24b736cae79dffb210a46608ef8d358->leave($__internal_3df1b0d2758d20456581e34275207386c24b736cae79dffb210a46608ef8d358_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_821ba5b59f2d07661665a2a05fe9542cc72dec3bd06f5568518fd9f985249d84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_821ba5b59f2d07661665a2a05fe9542cc72dec3bd06f5568518fd9f985249d84->enter($__internal_821ba5b59f2d07661665a2a05fe9542cc72dec3bd06f5568518fd9f985249d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_b242dce74b802166b0243137cef68ccfb83f199fe3ca957d38cf269dc08edb87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b242dce74b802166b0243137cef68ccfb83f199fe3ca957d38cf269dc08edb87->enter($__internal_b242dce74b802166b0243137cef68ccfb83f199fe3ca957d38cf269dc08edb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b242dce74b802166b0243137cef68ccfb83f199fe3ca957d38cf269dc08edb87->leave($__internal_b242dce74b802166b0243137cef68ccfb83f199fe3ca957d38cf269dc08edb87_prof);

        
        $__internal_821ba5b59f2d07661665a2a05fe9542cc72dec3bd06f5568518fd9f985249d84->leave($__internal_821ba5b59f2d07661665a2a05fe9542cc72dec3bd06f5568518fd9f985249d84_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_87c36dde53d94181349fc73029d764742728e580f52eb2ece6cdaa459a0aa571 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87c36dde53d94181349fc73029d764742728e580f52eb2ece6cdaa459a0aa571->enter($__internal_87c36dde53d94181349fc73029d764742728e580f52eb2ece6cdaa459a0aa571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_42f3edb077a11623d1fd55bfeb6b79002fe4d41e05df978b9be9f32431deac28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f3edb077a11623d1fd55bfeb6b79002fe4d41e05df978b9be9f32431deac28->enter($__internal_42f3edb077a11623d1fd55bfeb6b79002fe4d41e05df978b9be9f32431deac28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_42f3edb077a11623d1fd55bfeb6b79002fe4d41e05df978b9be9f32431deac28->leave($__internal_42f3edb077a11623d1fd55bfeb6b79002fe4d41e05df978b9be9f32431deac28_prof);

        
        $__internal_87c36dde53d94181349fc73029d764742728e580f52eb2ece6cdaa459a0aa571->leave($__internal_87c36dde53d94181349fc73029d764742728e580f52eb2ece6cdaa459a0aa571_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_d232ded75b94256366c2910297ed838b783245b041fb22d9539532528bd0d142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d232ded75b94256366c2910297ed838b783245b041fb22d9539532528bd0d142->enter($__internal_d232ded75b94256366c2910297ed838b783245b041fb22d9539532528bd0d142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_9fc5c8a0977e8ce944ed0aff4a11e725feb0a0a268ef31f70267a80021602e12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc5c8a0977e8ce944ed0aff4a11e725feb0a0a268ef31f70267a80021602e12->enter($__internal_9fc5c8a0977e8ce944ed0aff4a11e725feb0a0a268ef31f70267a80021602e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 126
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 126, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 127, $this->getSourceContext()); })()), 'widget');
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), 'errors');
        // line 129
        echo "</div>";
        
        $__internal_9fc5c8a0977e8ce944ed0aff4a11e725feb0a0a268ef31f70267a80021602e12->leave($__internal_9fc5c8a0977e8ce944ed0aff4a11e725feb0a0a268ef31f70267a80021602e12_prof);

        
        $__internal_d232ded75b94256366c2910297ed838b783245b041fb22d9539532528bd0d142->leave($__internal_d232ded75b94256366c2910297ed838b783245b041fb22d9539532528bd0d142_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_92b496e125be6da56f368427918129f50be17f1fdb5fbb3ce47cf4a566099bb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92b496e125be6da56f368427918129f50be17f1fdb5fbb3ce47cf4a566099bb9->enter($__internal_92b496e125be6da56f368427918129f50be17f1fdb5fbb3ce47cf4a566099bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_c602b9c586f27e5a00f7929696d8703575461fff38ba383a9c97791c780c4b0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c602b9c586f27e5a00f7929696d8703575461fff38ba383a9c97791c780c4b0d->enter($__internal_c602b9c586f27e5a00f7929696d8703575461fff38ba383a9c97791c780c4b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 133
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 133, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->getSourceContext()); })()), 'widget');
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 135, $this->getSourceContext()); })()), 'errors');
        // line 136
        echo "</div>";
        
        $__internal_c602b9c586f27e5a00f7929696d8703575461fff38ba383a9c97791c780c4b0d->leave($__internal_c602b9c586f27e5a00f7929696d8703575461fff38ba383a9c97791c780c4b0d_prof);

        
        $__internal_92b496e125be6da56f368427918129f50be17f1fdb5fbb3ce47cf4a566099bb9->leave($__internal_92b496e125be6da56f368427918129f50be17f1fdb5fbb3ce47cf4a566099bb9_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_6a0c9814e7ad7f04d811bee553e9817f65029722b057bf99cd67400277bba653 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a0c9814e7ad7f04d811bee553e9817f65029722b057bf99cd67400277bba653->enter($__internal_6a0c9814e7ad7f04d811bee553e9817f65029722b057bf99cd67400277bba653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_ab2601e4a49f3bd3e3178eefa96130f3b7d116184b494758487cec4796e1cd42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab2601e4a49f3bd3e3178eefa96130f3b7d116184b494758487cec4796e1cd42->enter($__internal_ab2601e4a49f3bd3e3178eefa96130f3b7d116184b494758487cec4796e1cd42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 142
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 142, $this->getSourceContext()); })())) > 0)) {
            // line 143
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 144
            echo "    <ul class=\"list-unstyled\">";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 145, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 146
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "</ul>
    ";
            // line 149
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 149, $this->getSourceContext()); })()))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_ab2601e4a49f3bd3e3178eefa96130f3b7d116184b494758487cec4796e1cd42->leave($__internal_ab2601e4a49f3bd3e3178eefa96130f3b7d116184b494758487cec4796e1cd42_prof);

        
        $__internal_6a0c9814e7ad7f04d811bee553e9817f65029722b057bf99cd67400277bba653->leave($__internal_6a0c9814e7ad7f04d811bee553e9817f65029722b057bf99cd67400277bba653_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  650 => 149,  647 => 148,  639 => 146,  635 => 145,  633 => 144,  627 => 143,  625 => 142,  616 => 141,  606 => 136,  604 => 135,  602 => 134,  596 => 133,  587 => 132,  577 => 129,  575 => 128,  573 => 127,  567 => 126,  558 => 125,  548 => 122,  546 => 121,  537 => 120,  527 => 117,  525 => 116,  516 => 115,  506 => 112,  504 => 111,  495 => 110,  485 => 107,  483 => 106,  474 => 105,  464 => 102,  462 => 101,  460 => 100,  451 => 99,  441 => 96,  439 => 95,  437 => 94,  435 => 93,  429 => 92,  420 => 91,  409 => 85,  405 => 84,  390 => 83,  386 => 80,  383 => 77,  382 => 76,  381 => 75,  379 => 74,  377 => 73,  374 => 71,  372 => 70,  369 => 68,  367 => 67,  365 => 66,  356 => 64,  346 => 61,  344 => 59,  335 => 58,  325 => 55,  323 => 53,  314 => 52,  304 => 49,  302 => 48,  293 => 46,  283 => 43,  281 => 42,  272 => 41,  261 => 35,  259 => 34,  257 => 33,  254 => 31,  252 => 30,  250 => 29,  241 => 28,  230 => 24,  228 => 23,  226 => 22,  223 => 20,  221 => 19,  219 => 18,  210 => 17,  200 => 14,  198 => 13,  189 => 12,  179 => 9,  176 => 7,  174 => 6,  165 => 5,  155 => 141,  152 => 140,  149 => 138,  147 => 132,  144 => 131,  142 => 125,  139 => 124,  137 => 120,  134 => 119,  132 => 115,  129 => 114,  127 => 110,  124 => 109,  122 => 105,  119 => 104,  117 => 99,  114 => 98,  112 => 91,  109 => 90,  106 => 88,  104 => 64,  101 => 63,  99 => 58,  96 => 57,  94 => 52,  91 => 51,  89 => 46,  86 => 45,  84 => 41,  81 => 40,  78 => 38,  76 => 28,  73 => 27,  71 => 17,  68 => 16,  66 => 12,  63 => 11,  61 => 5,  58 => 4,  55 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {%- if widget is defined -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
