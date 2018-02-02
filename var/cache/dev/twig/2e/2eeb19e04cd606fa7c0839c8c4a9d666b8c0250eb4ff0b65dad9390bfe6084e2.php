<?php

/* form_div_layout.html.twig */
class __TwigTemplate_411b877da165e993a44ce2db1509d4b8cece2a51ed5d75fe079b9367fe83b7b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'tel_widget' => array($this, 'block_tel_widget'),
            'color_widget' => array($this, 'block_color_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d20dd6e73be0123505976228cb7180bbfd8f47ad852c949bb19e891fd3462430 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d20dd6e73be0123505976228cb7180bbfd8f47ad852c949bb19e891fd3462430->enter($__internal_d20dd6e73be0123505976228cb7180bbfd8f47ad852c949bb19e891fd3462430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        $__internal_374e3212739fd77cd108905acec4eb3ac0587d2995fabb8dd575ffd6fd6b714c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_374e3212739fd77cd108905acec4eb3ac0587d2995fabb8dd575ffd6fd6b714c->enter($__internal_374e3212739fd77cd108905acec4eb3ac0587d2995fabb8dd575ffd6fd6b714c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 168
        $this->displayBlock('number_widget', $context, $blocks);
        // line 174
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 179
        $this->displayBlock('money_widget', $context, $blocks);
        // line 183
        $this->displayBlock('url_widget', $context, $blocks);
        // line 188
        $this->displayBlock('search_widget', $context, $blocks);
        // line 193
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 198
        $this->displayBlock('password_widget', $context, $blocks);
        // line 203
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 208
        $this->displayBlock('email_widget', $context, $blocks);
        // line 213
        $this->displayBlock('range_widget', $context, $blocks);
        // line 218
        $this->displayBlock('button_widget', $context, $blocks);
        // line 232
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 237
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 242
        $this->displayBlock('tel_widget', $context, $blocks);
        // line 247
        $this->displayBlock('color_widget', $context, $blocks);
        // line 254
        $this->displayBlock('form_label', $context, $blocks);
        // line 276
        $this->displayBlock('button_label', $context, $blocks);
        // line 280
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 288
        $this->displayBlock('form_row', $context, $blocks);
        // line 296
        $this->displayBlock('button_row', $context, $blocks);
        // line 302
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 308
        $this->displayBlock('form', $context, $blocks);
        // line 314
        $this->displayBlock('form_start', $context, $blocks);
        // line 328
        $this->displayBlock('form_end', $context, $blocks);
        // line 335
        $this->displayBlock('form_errors', $context, $blocks);
        // line 345
        $this->displayBlock('form_rest', $context, $blocks);
        // line 366
        echo "
";
        // line 369
        $this->displayBlock('form_rows', $context, $blocks);
        // line 375
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 382
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 387
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 392
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_d20dd6e73be0123505976228cb7180bbfd8f47ad852c949bb19e891fd3462430->leave($__internal_d20dd6e73be0123505976228cb7180bbfd8f47ad852c949bb19e891fd3462430_prof);

        
        $__internal_374e3212739fd77cd108905acec4eb3ac0587d2995fabb8dd575ffd6fd6b714c->leave($__internal_374e3212739fd77cd108905acec4eb3ac0587d2995fabb8dd575ffd6fd6b714c_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_c47f3d0a4430fa060a04750c69fbc69bfcdf691fd5ed6e9593b566089e8c6950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c47f3d0a4430fa060a04750c69fbc69bfcdf691fd5ed6e9593b566089e8c6950->enter($__internal_c47f3d0a4430fa060a04750c69fbc69bfcdf691fd5ed6e9593b566089e8c6950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_c02672af72f34dc568068cf13f39548ab9b6b321707050d0129c350fd64d4c73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c02672af72f34dc568068cf13f39548ab9b6b321707050d0129c350fd64d4c73->enter($__internal_c02672af72f34dc568068cf13f39548ab9b6b321707050d0129c350fd64d4c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_c02672af72f34dc568068cf13f39548ab9b6b321707050d0129c350fd64d4c73->leave($__internal_c02672af72f34dc568068cf13f39548ab9b6b321707050d0129c350fd64d4c73_prof);

        
        $__internal_c47f3d0a4430fa060a04750c69fbc69bfcdf691fd5ed6e9593b566089e8c6950->leave($__internal_c47f3d0a4430fa060a04750c69fbc69bfcdf691fd5ed6e9593b566089e8c6950_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_401ad0741de291daf37b213156d210d9ade7d33ae77c26063a5e0944bbefa537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_401ad0741de291daf37b213156d210d9ade7d33ae77c26063a5e0944bbefa537->enter($__internal_401ad0741de291daf37b213156d210d9ade7d33ae77c26063a5e0944bbefa537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_83e40b562820bff9e0dad6756c54e6f46d84565f549ba5b62bad19242786a537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e40b562820bff9e0dad6756c54e6f46d84565f549ba5b62bad19242786a537->enter($__internal_83e40b562820bff9e0dad6756c54e6f46d84565f549ba5b62bad19242786a537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 12, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_83e40b562820bff9e0dad6756c54e6f46d84565f549ba5b62bad19242786a537->leave($__internal_83e40b562820bff9e0dad6756c54e6f46d84565f549ba5b62bad19242786a537_prof);

        
        $__internal_401ad0741de291daf37b213156d210d9ade7d33ae77c26063a5e0944bbefa537->leave($__internal_401ad0741de291daf37b213156d210d9ade7d33ae77c26063a5e0944bbefa537_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_aedb6dcec8e8f7e120b5dec9a96ce16f02e19a9badce0d007b4e4bc8c5c10e50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aedb6dcec8e8f7e120b5dec9a96ce16f02e19a9badce0d007b4e4bc8c5c10e50->enter($__internal_aedb6dcec8e8f7e120b5dec9a96ce16f02e19a9badce0d007b4e4bc8c5c10e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_cf3cf08054fba17096418057c200570e2952736fb4365dda2fe2db2a9c432cb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf3cf08054fba17096418057c200570e2952736fb4365dda2fe2db2a9c432cb1->enter($__internal_cf3cf08054fba17096418057c200570e2952736fb4365dda2fe2db2a9c432cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()))) {
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_cf3cf08054fba17096418057c200570e2952736fb4365dda2fe2db2a9c432cb1->leave($__internal_cf3cf08054fba17096418057c200570e2952736fb4365dda2fe2db2a9c432cb1_prof);

        
        $__internal_aedb6dcec8e8f7e120b5dec9a96ce16f02e19a9badce0d007b4e4bc8c5c10e50->leave($__internal_aedb6dcec8e8f7e120b5dec9a96ce16f02e19a9badce0d007b4e4bc8c5c10e50_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_b53c23155221d4faa27a558af91be6d273ed458a894356ee758a792c82e3d53d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b53c23155221d4faa27a558af91be6d273ed458a894356ee758a792c82e3d53d->enter($__internal_b53c23155221d4faa27a558af91be6d273ed458a894356ee758a792c82e3d53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_18cf74d692b7c8838cb8885cd7a51ded244a38d2e503116d4ed880090b0047b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18cf74d692b7c8838cb8885cd7a51ded244a38d2e503116d4ed880090b0047b1->enter($__internal_18cf74d692b7c8838cb8885cd7a51ded244a38d2e503116d4ed880090b0047b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 28, $this->getSourceContext()); })()), array("data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 28, $this->getSourceContext()); })()), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_18cf74d692b7c8838cb8885cd7a51ded244a38d2e503116d4ed880090b0047b1->leave($__internal_18cf74d692b7c8838cb8885cd7a51ded244a38d2e503116d4ed880090b0047b1_prof);

        
        $__internal_b53c23155221d4faa27a558af91be6d273ed458a894356ee758a792c82e3d53d->leave($__internal_b53c23155221d4faa27a558af91be6d273ed458a894356ee758a792c82e3d53d_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_987b4b700d675e4cf78cb476400408698fdbc36fc81200b7aeebf82aeacf31de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_987b4b700d675e4cf78cb476400408698fdbc36fc81200b7aeebf82aeacf31de->enter($__internal_987b4b700d675e4cf78cb476400408698fdbc36fc81200b7aeebf82aeacf31de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_690b148c83bffb2d7f0fde4bd37ab3318b4adf0f57bf8b6cc140491effe09400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_690b148c83bffb2d7f0fde4bd37ab3318b4adf0f57bf8b6cc140491effe09400->enter($__internal_690b148c83bffb2d7f0fde4bd37ab3318b4adf0f57bf8b6cc140491effe09400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>";
        
        $__internal_690b148c83bffb2d7f0fde4bd37ab3318b4adf0f57bf8b6cc140491effe09400->leave($__internal_690b148c83bffb2d7f0fde4bd37ab3318b4adf0f57bf8b6cc140491effe09400_prof);

        
        $__internal_987b4b700d675e4cf78cb476400408698fdbc36fc81200b7aeebf82aeacf31de->leave($__internal_987b4b700d675e4cf78cb476400408698fdbc36fc81200b7aeebf82aeacf31de_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_76f94a853d4b3f790bf0b794800b7f3251b2b6dd65b7b82203abbd9e45fb1fff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76f94a853d4b3f790bf0b794800b7f3251b2b6dd65b7b82203abbd9e45fb1fff->enter($__internal_76f94a853d4b3f790bf0b794800b7f3251b2b6dd65b7b82203abbd9e45fb1fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        $__internal_b599d9ac18cf9bd12555a620ca5b7351ac26dc5fbb81a4d832496731e244c3fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b599d9ac18cf9bd12555a620ca5b7351ac26dc5fbb81a4d832496731e244c3fa->enter($__internal_b599d9ac18cf9bd12555a620ca5b7351ac26dc5fbb81a4d832496731e244c3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 38, $this->getSourceContext()); })())) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_b599d9ac18cf9bd12555a620ca5b7351ac26dc5fbb81a4d832496731e244c3fa->leave($__internal_b599d9ac18cf9bd12555a620ca5b7351ac26dc5fbb81a4d832496731e244c3fa_prof);

        
        $__internal_76f94a853d4b3f790bf0b794800b7f3251b2b6dd65b7b82203abbd9e45fb1fff->leave($__internal_76f94a853d4b3f790bf0b794800b7f3251b2b6dd65b7b82203abbd9e45fb1fff_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_99454ef85bff7be92ed48fe0e0c583f46b74b7a36552171798a36b081d53b3db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99454ef85bff7be92ed48fe0e0c583f46b74b7a36552171798a36b081d53b3db->enter($__internal_99454ef85bff7be92ed48fe0e0c583f46b74b7a36552171798a36b081d53b3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_e524fef5ecb2595ce7303f1f7220a6776ed20023ef667a460417be2e4187dcf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e524fef5ecb2595ce7303f1f7220a6776ed20023ef667a460417be2e4187dcf9->enter($__internal_e524fef5ecb2595ce7303f1f7220a6776ed20023ef667a460417be2e4187dcf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 49, $this->getSourceContext()); })())));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_e524fef5ecb2595ce7303f1f7220a6776ed20023ef667a460417be2e4187dcf9->leave($__internal_e524fef5ecb2595ce7303f1f7220a6776ed20023ef667a460417be2e4187dcf9_prof);

        
        $__internal_99454ef85bff7be92ed48fe0e0c583f46b74b7a36552171798a36b081d53b3db->leave($__internal_99454ef85bff7be92ed48fe0e0c583f46b74b7a36552171798a36b081d53b3db_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_ffb2cebb6ecfc0e29747f6212ef477411b9b9f570d5512d8d9c4ab9008e2db95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffb2cebb6ecfc0e29747f6212ef477411b9b9f570d5512d8d9c4ab9008e2db95->enter($__internal_ffb2cebb6ecfc0e29747f6212ef477411b9b9f570d5512d8d9c4ab9008e2db95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_76e1d73fde74ab168e58135a3b164294f1340cb4bb399d2691797e60ea22375b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76e1d73fde74ab168e58135a3b164294f1340cb4bb399d2691797e60ea22375b->enter($__internal_76e1d73fde74ab168e58135a3b164294f1340cb4bb399d2691797e60ea22375b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 55, $this->getSourceContext()); })()) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 55, $this->getSourceContext()); })()))) &&  !(isset($context["placeholder_in_choices"]) || array_key_exists("placeholder_in_choices", $context) ? $context["placeholder_in_choices"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder_in_choices" does not exist.', 55, $this->getSourceContext()); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 55, $this->getSourceContext()); })())) && ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "size", array(), "any", true, true) || (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 55, $this->getSourceContext()); })()), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 59, $this->getSourceContext()); })()))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 60, $this->getSourceContext()); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 60, $this->getSourceContext()); })())))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()) != "")) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()) === false)) ? ((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 62, $this->getSourceContext()); })())) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 63, $this->getSourceContext()); })());
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 65, $this->getSourceContext()); })())) > 0) &&  !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 65, $this->getSourceContext()); })())))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 66, $this->getSourceContext()); })()), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 69, $this->getSourceContext()); })());
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_76e1d73fde74ab168e58135a3b164294f1340cb4bb399d2691797e60ea22375b->leave($__internal_76e1d73fde74ab168e58135a3b164294f1340cb4bb399d2691797e60ea22375b_prof);

        
        $__internal_ffb2cebb6ecfc0e29747f6212ef477411b9b9f570d5512d8d9c4ab9008e2db95->leave($__internal_ffb2cebb6ecfc0e29747f6212ef477411b9b9f570d5512d8d9c4ab9008e2db95_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_6935ee7122334a334ede49ca5ecdf8654192f494c61f0394baa7ef4ab3a1acac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6935ee7122334a334ede49ca5ecdf8654192f494c61f0394baa7ef4ab3a1acac->enter($__internal_6935ee7122334a334ede49ca5ecdf8654192f494c61f0394baa7ef4ab3a1acac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        $__internal_4fadda05dca6f2a57be7ea604706829986063ddef64dfb9506888df78895fc30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fadda05dca6f2a57be7ea604706829986063ddef64dfb9506888df78895fc30->enter($__internal_4fadda05dca6f2a57be7ea604706829986063ddef64dfb9506888df78895fc30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 75, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })()) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })())))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array())) {
                    $__internal_43b838a72182934e38420bad356fbc79a4e6d1cb8e5a8c89b91aee44050622c2 = array("attr" => twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array()));
                    if (!is_array($__internal_43b838a72182934e38420bad356fbc79a4e6d1cb8e5a8c89b91aee44050622c2)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_43b838a72182934e38420bad356fbc79a4e6d1cb8e5a8c89b91aee44050622c2);
                    $this->displayBlock("attributes", $context, $blocks);
                    $context = $context['_parent'];
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 82, $this->getSourceContext()); })()))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })()) === false)) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })())))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_4fadda05dca6f2a57be7ea604706829986063ddef64dfb9506888df78895fc30->leave($__internal_4fadda05dca6f2a57be7ea604706829986063ddef64dfb9506888df78895fc30_prof);

        
        $__internal_6935ee7122334a334ede49ca5ecdf8654192f494c61f0394baa7ef4ab3a1acac->leave($__internal_6935ee7122334a334ede49ca5ecdf8654192f494c61f0394baa7ef4ab3a1acac_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_757bf988763170c693ed55cbef25a6137f6e2ab4d8680ef3ed6e0c38ac3a1b0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_757bf988763170c693ed55cbef25a6137f6e2ab4d8680ef3ed6e0c38ac3a1b0f->enter($__internal_757bf988763170c693ed55cbef25a6137f6e2ab4d8680ef3ed6e0c38ac3a1b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_89239fcc4a7ea7dfacfb48381dab452f6d789a4427207b5b6e57e9bf69f67c5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89239fcc4a7ea7dfacfb48381dab452f6d789a4427207b5b6e57e9bf69f67c5c->enter($__internal_89239fcc4a7ea7dfacfb48381dab452f6d789a4427207b5b6e57e9bf69f67c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 88, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 88, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_89239fcc4a7ea7dfacfb48381dab452f6d789a4427207b5b6e57e9bf69f67c5c->leave($__internal_89239fcc4a7ea7dfacfb48381dab452f6d789a4427207b5b6e57e9bf69f67c5c_prof);

        
        $__internal_757bf988763170c693ed55cbef25a6137f6e2ab4d8680ef3ed6e0c38ac3a1b0f->leave($__internal_757bf988763170c693ed55cbef25a6137f6e2ab4d8680ef3ed6e0c38ac3a1b0f_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_5a45ddd8dd7ddbd173e93e1cbfe3ed5772c3a231a35f0f2aa19bbba8679443f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a45ddd8dd7ddbd173e93e1cbfe3ed5772c3a231a35f0f2aa19bbba8679443f0->enter($__internal_5a45ddd8dd7ddbd173e93e1cbfe3ed5772c3a231a35f0f2aa19bbba8679443f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_edfee8836d39ba40da038153891f2b3a4ea9fced16d770e9bdf3e292f7d35f5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edfee8836d39ba40da038153891f2b3a4ea9fced16d770e9bdf3e292f7d35f5e->enter($__internal_edfee8836d39ba40da038153891f2b3a4ea9fced16d770e9bdf3e292f7d35f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 92, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 92, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_edfee8836d39ba40da038153891f2b3a4ea9fced16d770e9bdf3e292f7d35f5e->leave($__internal_edfee8836d39ba40da038153891f2b3a4ea9fced16d770e9bdf3e292f7d35f5e_prof);

        
        $__internal_5a45ddd8dd7ddbd173e93e1cbfe3ed5772c3a231a35f0f2aa19bbba8679443f0->leave($__internal_5a45ddd8dd7ddbd173e93e1cbfe3ed5772c3a231a35f0f2aa19bbba8679443f0_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_6372c9f6b5a239f9109d195242917a19e93df05bc26e85f6b7af771321540383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6372c9f6b5a239f9109d195242917a19e93df05bc26e85f6b7af771321540383->enter($__internal_6372c9f6b5a239f9109d195242917a19e93df05bc26e85f6b7af771321540383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_841d9a528fa65656588e05e0bd413d3492fa60af84473a51854ed4a9d991aae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_841d9a528fa65656588e05e0bd413d3492fa60af84473a51854ed4a9d991aae6->enter($__internal_841d9a528fa65656588e05e0bd413d3492fa60af84473a51854ed4a9d991aae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 96, $this->getSourceContext()); })()) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 100, $this->getSourceContext()); })()), "date", array()), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), "time", array()), 'errors');
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->getSourceContext()); })()), "date", array()), 'widget');
            // line 103
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 103, $this->getSourceContext()); })()), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_841d9a528fa65656588e05e0bd413d3492fa60af84473a51854ed4a9d991aae6->leave($__internal_841d9a528fa65656588e05e0bd413d3492fa60af84473a51854ed4a9d991aae6_prof);

        
        $__internal_6372c9f6b5a239f9109d195242917a19e93df05bc26e85f6b7af771321540383->leave($__internal_6372c9f6b5a239f9109d195242917a19e93df05bc26e85f6b7af771321540383_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_439d30f435c53acc4667feaae3853183a06a1d1bc04ef54afbe23a26ac57fd4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_439d30f435c53acc4667feaae3853183a06a1d1bc04ef54afbe23a26ac57fd4c->enter($__internal_439d30f435c53acc4667feaae3853183a06a1d1bc04ef54afbe23a26ac57fd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_5fb0a2fd6d22a2aa3721a0ac305f8a12d3e9fa5be7d3b3fdcfa8eeeb59b214ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb0a2fd6d22a2aa3721a0ac305f8a12d3e9fa5be7d3b3fdcfa8eeeb59b214ec->enter($__internal_5fb0a2fd6d22a2aa3721a0ac305f8a12d3e9fa5be7d3b3fdcfa8eeeb59b214ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 109, $this->getSourceContext()); })()) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 113, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 114
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 114, $this->getSourceContext()); })()), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 115, $this->getSourceContext()); })()), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 116, $this->getSourceContext()); })()), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_5fb0a2fd6d22a2aa3721a0ac305f8a12d3e9fa5be7d3b3fdcfa8eeeb59b214ec->leave($__internal_5fb0a2fd6d22a2aa3721a0ac305f8a12d3e9fa5be7d3b3fdcfa8eeeb59b214ec_prof);

        
        $__internal_439d30f435c53acc4667feaae3853183a06a1d1bc04ef54afbe23a26ac57fd4c->leave($__internal_439d30f435c53acc4667feaae3853183a06a1d1bc04ef54afbe23a26ac57fd4c_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_c07dd18a9f446386b492fe4aec19d2478a35ff9c624453f351b5e187a0989c57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c07dd18a9f446386b492fe4aec19d2478a35ff9c624453f351b5e187a0989c57->enter($__internal_c07dd18a9f446386b492fe4aec19d2478a35ff9c624453f351b5e187a0989c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_076893edf448ebbacafdbb8d63a749954c78e7d164522ca9de5f8ccc050c33d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_076893edf448ebbacafdbb8d63a749954c78e7d164522ca9de5f8ccc050c33d8->enter($__internal_076893edf448ebbacafdbb8d63a749954c78e7d164522ca9de5f8ccc050c33d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 123, $this->getSourceContext()); })()) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 126, $this->getSourceContext()); })()) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "hour", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "minute", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "second", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_076893edf448ebbacafdbb8d63a749954c78e7d164522ca9de5f8ccc050c33d8->leave($__internal_076893edf448ebbacafdbb8d63a749954c78e7d164522ca9de5f8ccc050c33d8_prof);

        
        $__internal_c07dd18a9f446386b492fe4aec19d2478a35ff9c624453f351b5e187a0989c57->leave($__internal_c07dd18a9f446386b492fe4aec19d2478a35ff9c624453f351b5e187a0989c57_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_35c9ebe5fde8ccc53e2b07a7a1da94f00d2e3e35016607f426087ce1591a491c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35c9ebe5fde8ccc53e2b07a7a1da94f00d2e3e35016607f426087ce1591a491c->enter($__internal_35c9ebe5fde8ccc53e2b07a7a1da94f00d2e3e35016607f426087ce1591a491c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_e43a86b203d77c2c0eae31f468d7657baa1c660df92fa3f8825c51b4bd19f35b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e43a86b203d77c2c0eae31f468d7657baa1c660df92fa3f8825c51b4bd19f35b->enter($__internal_e43a86b203d77c2c0eae31f468d7657baa1c660df92fa3f8825c51b4bd19f35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 134
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 134, $this->getSourceContext()); })()) == "single_text")) {
            // line 135
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 137
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 138
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 138, $this->getSourceContext()); })()), 'errors');
            // line 139
            echo "<table class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) || array_key_exists("table_class", $context) ? $context["table_class"] : (function () { throw new Twig_Error_Runtime('Variable "table_class" does not exist.', 139, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
            echo "\">
                <thead>
                    <tr>";
            // line 142
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 142, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 142, $this->getSourceContext()); })()), "years", array()), 'label');
                echo "</th>";
            }
            // line 143
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 143, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()), "months", array()), 'label');
                echo "</th>";
            }
            // line 144
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 144, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 144, $this->getSourceContext()); })()), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 145
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 145, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 145, $this->getSourceContext()); })()), "days", array()), 'label');
                echo "</th>";
            }
            // line 146
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 146, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 146, $this->getSourceContext()); })()), "hours", array()), 'label');
                echo "</th>";
            }
            // line 147
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 147, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 147, $this->getSourceContext()); })()), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 148
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 148, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 148, $this->getSourceContext()); })()), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 149
            echo "</tr>
                </thead>
                <tbody>
                    <tr>";
            // line 153
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 153, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 153, $this->getSourceContext()); })()), "years", array()), 'widget');
                echo "</td>";
            }
            // line 154
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 154, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 154, $this->getSourceContext()); })()), "months", array()), 'widget');
                echo "</td>";
            }
            // line 155
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 155, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 155, $this->getSourceContext()); })()), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 156
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 156, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 156, $this->getSourceContext()); })()), "days", array()), 'widget');
                echo "</td>";
            }
            // line 157
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 157, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 157, $this->getSourceContext()); })()), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 158
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 158, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 158, $this->getSourceContext()); })()), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 159
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 159, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 159, $this->getSourceContext()); })()), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 160
            echo "</tr>
                </tbody>
            </table>";
            // line 163
            if ((isset($context["with_invert"]) || array_key_exists("with_invert", $context) ? $context["with_invert"] : (function () { throw new Twig_Error_Runtime('Variable "with_invert" does not exist.', 163, $this->getSourceContext()); })())) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 163, $this->getSourceContext()); })()), "invert", array()), 'widget');
            }
            // line 164
            echo "</div>";
        }
        
        $__internal_e43a86b203d77c2c0eae31f468d7657baa1c660df92fa3f8825c51b4bd19f35b->leave($__internal_e43a86b203d77c2c0eae31f468d7657baa1c660df92fa3f8825c51b4bd19f35b_prof);

        
        $__internal_35c9ebe5fde8ccc53e2b07a7a1da94f00d2e3e35016607f426087ce1591a491c->leave($__internal_35c9ebe5fde8ccc53e2b07a7a1da94f00d2e3e35016607f426087ce1591a491c_prof);

    }

    // line 168
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_6d966db2f059ab842490df4287e41bca43351e1c201fac4b1a518fc549a8634b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d966db2f059ab842490df4287e41bca43351e1c201fac4b1a518fc549a8634b->enter($__internal_6d966db2f059ab842490df4287e41bca43351e1c201fac4b1a518fc549a8634b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_0eb9563aed1a8a429fd642f587d8f3fc4fc012423fba6cc32174a096e27f409e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eb9563aed1a8a429fd642f587d8f3fc4fc012423fba6cc32174a096e27f409e->enter($__internal_0eb9563aed1a8a429fd642f587d8f3fc4fc012423fba6cc32174a096e27f409e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 170, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0eb9563aed1a8a429fd642f587d8f3fc4fc012423fba6cc32174a096e27f409e->leave($__internal_0eb9563aed1a8a429fd642f587d8f3fc4fc012423fba6cc32174a096e27f409e_prof);

        
        $__internal_6d966db2f059ab842490df4287e41bca43351e1c201fac4b1a518fc549a8634b->leave($__internal_6d966db2f059ab842490df4287e41bca43351e1c201fac4b1a518fc549a8634b_prof);

    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_c84b59922ad3633b85e8f52e7f4b49fda70ad50db391489284db67333b34e1cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c84b59922ad3633b85e8f52e7f4b49fda70ad50db391489284db67333b34e1cc->enter($__internal_c84b59922ad3633b85e8f52e7f4b49fda70ad50db391489284db67333b34e1cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        $__internal_5e7713b09948a5f744774c78f8123764131a7541cd5cb4df246d5a784b59eabc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7713b09948a5f744774c78f8123764131a7541cd5cb4df246d5a784b59eabc->enter($__internal_5e7713b09948a5f744774c78f8123764131a7541cd5cb4df246d5a784b59eabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 175, $this->getSourceContext()); })()), "number")) : ("number"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_5e7713b09948a5f744774c78f8123764131a7541cd5cb4df246d5a784b59eabc->leave($__internal_5e7713b09948a5f744774c78f8123764131a7541cd5cb4df246d5a784b59eabc_prof);

        
        $__internal_c84b59922ad3633b85e8f52e7f4b49fda70ad50db391489284db67333b34e1cc->leave($__internal_c84b59922ad3633b85e8f52e7f4b49fda70ad50db391489284db67333b34e1cc_prof);

    }

    // line 179
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_4041f4ffc93e19eec79229f5b61b67ac1cf47c9dd0fb7b6aa29996960ab10517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4041f4ffc93e19eec79229f5b61b67ac1cf47c9dd0fb7b6aa29996960ab10517->enter($__internal_4041f4ffc93e19eec79229f5b61b67ac1cf47c9dd0fb7b6aa29996960ab10517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_f50a3d08abcfa58062ae0b065ca756733bb7c39629e9afce9d9ef5a2b5ba997d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f50a3d08abcfa58062ae0b065ca756733bb7c39629e9afce9d9ef5a2b5ba997d->enter($__internal_f50a3d08abcfa58062ae0b065ca756733bb7c39629e9afce9d9ef5a2b5ba997d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 180
        echo twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 180, $this->getSourceContext()); })()), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_f50a3d08abcfa58062ae0b065ca756733bb7c39629e9afce9d9ef5a2b5ba997d->leave($__internal_f50a3d08abcfa58062ae0b065ca756733bb7c39629e9afce9d9ef5a2b5ba997d_prof);

        
        $__internal_4041f4ffc93e19eec79229f5b61b67ac1cf47c9dd0fb7b6aa29996960ab10517->leave($__internal_4041f4ffc93e19eec79229f5b61b67ac1cf47c9dd0fb7b6aa29996960ab10517_prof);

    }

    // line 183
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_da7fd7541ec2e6dc514668b068e92c3dbb05d5124d57ab4ef97a08f5ea66e645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da7fd7541ec2e6dc514668b068e92c3dbb05d5124d57ab4ef97a08f5ea66e645->enter($__internal_da7fd7541ec2e6dc514668b068e92c3dbb05d5124d57ab4ef97a08f5ea66e645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        $__internal_6fb6bff6214406afd8c77179bf64d2cf918f7ed6952fdfd69779b0f5e69b69b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb6bff6214406afd8c77179bf64d2cf918f7ed6952fdfd69779b0f5e69b69b3->enter($__internal_6fb6bff6214406afd8c77179bf64d2cf918f7ed6952fdfd69779b0f5e69b69b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 184, $this->getSourceContext()); })()), "url")) : ("url"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_6fb6bff6214406afd8c77179bf64d2cf918f7ed6952fdfd69779b0f5e69b69b3->leave($__internal_6fb6bff6214406afd8c77179bf64d2cf918f7ed6952fdfd69779b0f5e69b69b3_prof);

        
        $__internal_da7fd7541ec2e6dc514668b068e92c3dbb05d5124d57ab4ef97a08f5ea66e645->leave($__internal_da7fd7541ec2e6dc514668b068e92c3dbb05d5124d57ab4ef97a08f5ea66e645_prof);

    }

    // line 188
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_b8b049ef8fbd71429e5c49f8b74e9d739897be0ff3e75006249738ec92679a95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8b049ef8fbd71429e5c49f8b74e9d739897be0ff3e75006249738ec92679a95->enter($__internal_b8b049ef8fbd71429e5c49f8b74e9d739897be0ff3e75006249738ec92679a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        $__internal_bfb67c8b0789c1186e0d258c8043c989d455272c3703e0c912ad2feb4bafce3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfb67c8b0789c1186e0d258c8043c989d455272c3703e0c912ad2feb4bafce3a->enter($__internal_bfb67c8b0789c1186e0d258c8043c989d455272c3703e0c912ad2feb4bafce3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 189, $this->getSourceContext()); })()), "search")) : ("search"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_bfb67c8b0789c1186e0d258c8043c989d455272c3703e0c912ad2feb4bafce3a->leave($__internal_bfb67c8b0789c1186e0d258c8043c989d455272c3703e0c912ad2feb4bafce3a_prof);

        
        $__internal_b8b049ef8fbd71429e5c49f8b74e9d739897be0ff3e75006249738ec92679a95->leave($__internal_b8b049ef8fbd71429e5c49f8b74e9d739897be0ff3e75006249738ec92679a95_prof);

    }

    // line 193
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_333b1ce930559d264d2da85d553fc1f20275f194faace33b2d5e7650d8050357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_333b1ce930559d264d2da85d553fc1f20275f194faace33b2d5e7650d8050357->enter($__internal_333b1ce930559d264d2da85d553fc1f20275f194faace33b2d5e7650d8050357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_a1592c684e239b62aef7ac309288048682e68efc1a7d8dd3715e9684d91ba25f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1592c684e239b62aef7ac309288048682e68efc1a7d8dd3715e9684d91ba25f->enter($__internal_a1592c684e239b62aef7ac309288048682e68efc1a7d8dd3715e9684d91ba25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 194, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_a1592c684e239b62aef7ac309288048682e68efc1a7d8dd3715e9684d91ba25f->leave($__internal_a1592c684e239b62aef7ac309288048682e68efc1a7d8dd3715e9684d91ba25f_prof);

        
        $__internal_333b1ce930559d264d2da85d553fc1f20275f194faace33b2d5e7650d8050357->leave($__internal_333b1ce930559d264d2da85d553fc1f20275f194faace33b2d5e7650d8050357_prof);

    }

    // line 198
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_a6b217225075ae6eb0ee81ee9d7175fd08e9afd73b4a871c9d47be52c9056186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6b217225075ae6eb0ee81ee9d7175fd08e9afd73b4a871c9d47be52c9056186->enter($__internal_a6b217225075ae6eb0ee81ee9d7175fd08e9afd73b4a871c9d47be52c9056186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        $__internal_8e625ea4050943a461d5d173c5835a2a3e75aac232b645ee8729d6078f092578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e625ea4050943a461d5d173c5835a2a3e75aac232b645ee8729d6078f092578->enter($__internal_8e625ea4050943a461d5d173c5835a2a3e75aac232b645ee8729d6078f092578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 199, $this->getSourceContext()); })()), "password")) : ("password"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_8e625ea4050943a461d5d173c5835a2a3e75aac232b645ee8729d6078f092578->leave($__internal_8e625ea4050943a461d5d173c5835a2a3e75aac232b645ee8729d6078f092578_prof);

        
        $__internal_a6b217225075ae6eb0ee81ee9d7175fd08e9afd73b4a871c9d47be52c9056186->leave($__internal_a6b217225075ae6eb0ee81ee9d7175fd08e9afd73b4a871c9d47be52c9056186_prof);

    }

    // line 203
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_5de137429a59635a647d87b7f175e7b4a171c80cbaf7788b558558da4ee6cce6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5de137429a59635a647d87b7f175e7b4a171c80cbaf7788b558558da4ee6cce6->enter($__internal_5de137429a59635a647d87b7f175e7b4a171c80cbaf7788b558558da4ee6cce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        $__internal_bd09527a8ed625a74e754abf0b8852cbefd826f74d5b2dca42271d0705fbb104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd09527a8ed625a74e754abf0b8852cbefd826f74d5b2dca42271d0705fbb104->enter($__internal_bd09527a8ed625a74e754abf0b8852cbefd826f74d5b2dca42271d0705fbb104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 204, $this->getSourceContext()); })()), "hidden")) : ("hidden"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_bd09527a8ed625a74e754abf0b8852cbefd826f74d5b2dca42271d0705fbb104->leave($__internal_bd09527a8ed625a74e754abf0b8852cbefd826f74d5b2dca42271d0705fbb104_prof);

        
        $__internal_5de137429a59635a647d87b7f175e7b4a171c80cbaf7788b558558da4ee6cce6->leave($__internal_5de137429a59635a647d87b7f175e7b4a171c80cbaf7788b558558da4ee6cce6_prof);

    }

    // line 208
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_83402315854809cc19924b05d083abc9217358748cc1357fedc399aaab921b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83402315854809cc19924b05d083abc9217358748cc1357fedc399aaab921b8d->enter($__internal_83402315854809cc19924b05d083abc9217358748cc1357fedc399aaab921b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_636f3d9109270a750c06af4573c1d28fedfc6eddaabd9e3c069d439d0c5ca84d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_636f3d9109270a750c06af4573c1d28fedfc6eddaabd9e3c069d439d0c5ca84d->enter($__internal_636f3d9109270a750c06af4573c1d28fedfc6eddaabd9e3c069d439d0c5ca84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 209, $this->getSourceContext()); })()), "email")) : ("email"));
        // line 210
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_636f3d9109270a750c06af4573c1d28fedfc6eddaabd9e3c069d439d0c5ca84d->leave($__internal_636f3d9109270a750c06af4573c1d28fedfc6eddaabd9e3c069d439d0c5ca84d_prof);

        
        $__internal_83402315854809cc19924b05d083abc9217358748cc1357fedc399aaab921b8d->leave($__internal_83402315854809cc19924b05d083abc9217358748cc1357fedc399aaab921b8d_prof);

    }

    // line 213
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_7c52547f005cbafbd3c17872a3eb8729f30dde6765eedbc1d584f0bf2d1ea377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c52547f005cbafbd3c17872a3eb8729f30dde6765eedbc1d584f0bf2d1ea377->enter($__internal_7c52547f005cbafbd3c17872a3eb8729f30dde6765eedbc1d584f0bf2d1ea377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        $__internal_ffa93651b768d89a2991e580e833d7ccf778d364b995c82a46ce041ac1b5430a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffa93651b768d89a2991e580e833d7ccf778d364b995c82a46ce041ac1b5430a->enter($__internal_ffa93651b768d89a2991e580e833d7ccf778d364b995c82a46ce041ac1b5430a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 214, $this->getSourceContext()); })()), "range")) : ("range"));
        // line 215
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_ffa93651b768d89a2991e580e833d7ccf778d364b995c82a46ce041ac1b5430a->leave($__internal_ffa93651b768d89a2991e580e833d7ccf778d364b995c82a46ce041ac1b5430a_prof);

        
        $__internal_7c52547f005cbafbd3c17872a3eb8729f30dde6765eedbc1d584f0bf2d1ea377->leave($__internal_7c52547f005cbafbd3c17872a3eb8729f30dde6765eedbc1d584f0bf2d1ea377_prof);

    }

    // line 218
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_10efa9a890e3255dc49dc3a08d29ffb7b38f474017d0334d4bcdb516f941cd74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10efa9a890e3255dc49dc3a08d29ffb7b38f474017d0334d4bcdb516f941cd74->enter($__internal_10efa9a890e3255dc49dc3a08d29ffb7b38f474017d0334d4bcdb516f941cd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_51c09fa46a450b66393147ee98a432782e2c97298ace7518517d0c0d14adbfd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c09fa46a450b66393147ee98a432782e2c97298ace7518517d0c0d14adbfd8->enter($__internal_51c09fa46a450b66393147ee98a432782e2c97298ace7518517d0c0d14adbfd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 219
        if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 219, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 219, $this->getSourceContext()); })())))) {
            // line 220
            if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 220, $this->getSourceContext()); })()))) {
                // line 221
                $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 221, $this->getSourceContext()); })()), array("%name%" =>                 // line 222
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 222, $this->getSourceContext()); })()), "%id%" =>                 // line 223
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 223, $this->getSourceContext()); })())));
            } else {
                // line 226
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 226, $this->getSourceContext()); })()));
            }
        }
        // line 229
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 229, $this->getSourceContext()); })()), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 229, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 229, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 229, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 229, $this->getSourceContext()); })())))), "html", null, true);
        echo "</button>";
        
        $__internal_51c09fa46a450b66393147ee98a432782e2c97298ace7518517d0c0d14adbfd8->leave($__internal_51c09fa46a450b66393147ee98a432782e2c97298ace7518517d0c0d14adbfd8_prof);

        
        $__internal_10efa9a890e3255dc49dc3a08d29ffb7b38f474017d0334d4bcdb516f941cd74->leave($__internal_10efa9a890e3255dc49dc3a08d29ffb7b38f474017d0334d4bcdb516f941cd74_prof);

    }

    // line 232
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_39ef359293db469ba2fb22b4107881f6d323c8ad1d7866df12db98ae738a987a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39ef359293db469ba2fb22b4107881f6d323c8ad1d7866df12db98ae738a987a->enter($__internal_39ef359293db469ba2fb22b4107881f6d323c8ad1d7866df12db98ae738a987a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        $__internal_d09b5c621fce42d53ffd7f62cd35374ea04728b833a70c4bdac4a8fe7ded3734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d09b5c621fce42d53ffd7f62cd35374ea04728b833a70c4bdac4a8fe7ded3734->enter($__internal_d09b5c621fce42d53ffd7f62cd35374ea04728b833a70c4bdac4a8fe7ded3734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 233
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 233, $this->getSourceContext()); })()), "submit")) : ("submit"));
        // line 234
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_d09b5c621fce42d53ffd7f62cd35374ea04728b833a70c4bdac4a8fe7ded3734->leave($__internal_d09b5c621fce42d53ffd7f62cd35374ea04728b833a70c4bdac4a8fe7ded3734_prof);

        
        $__internal_39ef359293db469ba2fb22b4107881f6d323c8ad1d7866df12db98ae738a987a->leave($__internal_39ef359293db469ba2fb22b4107881f6d323c8ad1d7866df12db98ae738a987a_prof);

    }

    // line 237
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_8e0052160c32d0788800a95b0ac145da7448cb1357c4a31e0a2ca61869586037 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e0052160c32d0788800a95b0ac145da7448cb1357c4a31e0a2ca61869586037->enter($__internal_8e0052160c32d0788800a95b0ac145da7448cb1357c4a31e0a2ca61869586037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        $__internal_a2eac1ea3b32477e6b6e3f4c402f9ba4dc7e4593b39f7a885137a2088e33f29f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2eac1ea3b32477e6b6e3f4c402f9ba4dc7e4593b39f7a885137a2088e33f29f->enter($__internal_a2eac1ea3b32477e6b6e3f4c402f9ba4dc7e4593b39f7a885137a2088e33f29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 238
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 238, $this->getSourceContext()); })()), "reset")) : ("reset"));
        // line 239
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_a2eac1ea3b32477e6b6e3f4c402f9ba4dc7e4593b39f7a885137a2088e33f29f->leave($__internal_a2eac1ea3b32477e6b6e3f4c402f9ba4dc7e4593b39f7a885137a2088e33f29f_prof);

        
        $__internal_8e0052160c32d0788800a95b0ac145da7448cb1357c4a31e0a2ca61869586037->leave($__internal_8e0052160c32d0788800a95b0ac145da7448cb1357c4a31e0a2ca61869586037_prof);

    }

    // line 242
    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_863bc12f39e2754d46a03d4b32b569e42e69cb84f786f84c1a6386a3a64b6efa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_863bc12f39e2754d46a03d4b32b569e42e69cb84f786f84c1a6386a3a64b6efa->enter($__internal_863bc12f39e2754d46a03d4b32b569e42e69cb84f786f84c1a6386a3a64b6efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        $__internal_8309f9bbbf638ce5acdc4f3800a22eb9cbef22d66ec7bddc10a6c3b52a8779ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8309f9bbbf638ce5acdc4f3800a22eb9cbef22d66ec7bddc10a6c3b52a8779ed->enter($__internal_8309f9bbbf638ce5acdc4f3800a22eb9cbef22d66ec7bddc10a6c3b52a8779ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 243
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 243, $this->getSourceContext()); })()), "tel")) : ("tel"));
        // line 244
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_8309f9bbbf638ce5acdc4f3800a22eb9cbef22d66ec7bddc10a6c3b52a8779ed->leave($__internal_8309f9bbbf638ce5acdc4f3800a22eb9cbef22d66ec7bddc10a6c3b52a8779ed_prof);

        
        $__internal_863bc12f39e2754d46a03d4b32b569e42e69cb84f786f84c1a6386a3a64b6efa->leave($__internal_863bc12f39e2754d46a03d4b32b569e42e69cb84f786f84c1a6386a3a64b6efa_prof);

    }

    // line 247
    public function block_color_widget($context, array $blocks = array())
    {
        $__internal_fec59e5836abe1d06a99cf64c6226dd47504dfb633dcfc5698011a22b4b0c8b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fec59e5836abe1d06a99cf64c6226dd47504dfb633dcfc5698011a22b4b0c8b6->enter($__internal_fec59e5836abe1d06a99cf64c6226dd47504dfb633dcfc5698011a22b4b0c8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        $__internal_16e07b1244da939ce89a82d49537ee4e92c35522b3f0d5aff4d95f5f873be4a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16e07b1244da939ce89a82d49537ee4e92c35522b3f0d5aff4d95f5f873be4a3->enter($__internal_16e07b1244da939ce89a82d49537ee4e92c35522b3f0d5aff4d95f5f873be4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        // line 248
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 248, $this->getSourceContext()); })()), "color")) : ("color"));
        // line 249
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_16e07b1244da939ce89a82d49537ee4e92c35522b3f0d5aff4d95f5f873be4a3->leave($__internal_16e07b1244da939ce89a82d49537ee4e92c35522b3f0d5aff4d95f5f873be4a3_prof);

        
        $__internal_fec59e5836abe1d06a99cf64c6226dd47504dfb633dcfc5698011a22b4b0c8b6->leave($__internal_fec59e5836abe1d06a99cf64c6226dd47504dfb633dcfc5698011a22b4b0c8b6_prof);

    }

    // line 254
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_82584017b4c2625c065fb13c223c5bb4aa47649fadc78273c0e7c0d160fdd171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82584017b4c2625c065fb13c223c5bb4aa47649fadc78273c0e7c0d160fdd171->enter($__internal_82584017b4c2625c065fb13c223c5bb4aa47649fadc78273c0e7c0d160fdd171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_17efed551eba4cecd43c996318b92b9cb14e41b486db5920935e333d85002402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17efed551eba4cecd43c996318b92b9cb14e41b486db5920935e333d85002402->enter($__internal_17efed551eba4cecd43c996318b92b9cb14e41b486db5920935e333d85002402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 255
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 255, $this->getSourceContext()); })()) === false)) {
            // line 256
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 256, $this->getSourceContext()); })())) {
                // line 257
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 257, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 257, $this->getSourceContext()); })())));
            }
            // line 259
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 259, $this->getSourceContext()); })())) {
                // line 260
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 260, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 262
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 262, $this->getSourceContext()); })()))) {
                // line 263
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 263, $this->getSourceContext()); })()))) {
                    // line 264
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 264, $this->getSourceContext()); })()), array("%name%" =>                     // line 265
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 265, $this->getSourceContext()); })()), "%id%" =>                     // line 266
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 266, $this->getSourceContext()); })())));
                } else {
                    // line 269
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 269, $this->getSourceContext()); })()));
                }
            }
            // line 272
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 272, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            if ((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 272, $this->getSourceContext()); })())) {
                $__internal_851c2e5509728aacdb7d5b2dc22084fcfd404d27833548c3919943db477db613 = array("attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 272, $this->getSourceContext()); })()));
                if (!is_array($__internal_851c2e5509728aacdb7d5b2dc22084fcfd404d27833548c3919943db477db613)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_851c2e5509728aacdb7d5b2dc22084fcfd404d27833548c3919943db477db613);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })())))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 272, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_17efed551eba4cecd43c996318b92b9cb14e41b486db5920935e333d85002402->leave($__internal_17efed551eba4cecd43c996318b92b9cb14e41b486db5920935e333d85002402_prof);

        
        $__internal_82584017b4c2625c065fb13c223c5bb4aa47649fadc78273c0e7c0d160fdd171->leave($__internal_82584017b4c2625c065fb13c223c5bb4aa47649fadc78273c0e7c0d160fdd171_prof);

    }

    // line 276
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_76736a64fdbcbba52450e74b3a10ba9a4e50e55a925b94627f81c49b37e2ab7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76736a64fdbcbba52450e74b3a10ba9a4e50e55a925b94627f81c49b37e2ab7d->enter($__internal_76736a64fdbcbba52450e74b3a10ba9a4e50e55a925b94627f81c49b37e2ab7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        $__internal_d5d61ed4f177a8c3df16fe4f7686c1503da1c4c8d99d1a941d779ac1c698a695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5d61ed4f177a8c3df16fe4f7686c1503da1c4c8d99d1a941d779ac1c698a695->enter($__internal_d5d61ed4f177a8c3df16fe4f7686c1503da1c4c8d99d1a941d779ac1c698a695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_d5d61ed4f177a8c3df16fe4f7686c1503da1c4c8d99d1a941d779ac1c698a695->leave($__internal_d5d61ed4f177a8c3df16fe4f7686c1503da1c4c8d99d1a941d779ac1c698a695_prof);

        
        $__internal_76736a64fdbcbba52450e74b3a10ba9a4e50e55a925b94627f81c49b37e2ab7d->leave($__internal_76736a64fdbcbba52450e74b3a10ba9a4e50e55a925b94627f81c49b37e2ab7d_prof);

    }

    // line 280
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_0fbe784ad3297d88a092c0747eeacc416e73d3615656a0b55ce58f5796fd7e98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fbe784ad3297d88a092c0747eeacc416e73d3615656a0b55ce58f5796fd7e98->enter($__internal_0fbe784ad3297d88a092c0747eeacc416e73d3615656a0b55ce58f5796fd7e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        $__internal_34fca159d677fa727f9ae1afc4b8ba24d9f522e5a3991d56867ae832a153181b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34fca159d677fa727f9ae1afc4b8ba24d9f522e5a3991d56867ae832a153181b->enter($__internal_34fca159d677fa727f9ae1afc4b8ba24d9f522e5a3991d56867ae832a153181b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 285
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_34fca159d677fa727f9ae1afc4b8ba24d9f522e5a3991d56867ae832a153181b->leave($__internal_34fca159d677fa727f9ae1afc4b8ba24d9f522e5a3991d56867ae832a153181b_prof);

        
        $__internal_0fbe784ad3297d88a092c0747eeacc416e73d3615656a0b55ce58f5796fd7e98->leave($__internal_0fbe784ad3297d88a092c0747eeacc416e73d3615656a0b55ce58f5796fd7e98_prof);

    }

    // line 288
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9c2b5f2dd929f88a760b973c54007709b08be7fc31c23acaf069bfaedc582c00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c2b5f2dd929f88a760b973c54007709b08be7fc31c23acaf069bfaedc582c00->enter($__internal_9c2b5f2dd929f88a760b973c54007709b08be7fc31c23acaf069bfaedc582c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_f75b1710988cc3772364436e2688a3916046f07ca5d453f0ce8ab4ae65691e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75b1710988cc3772364436e2688a3916046f07ca5d453f0ce8ab4ae65691e24->enter($__internal_f75b1710988cc3772364436e2688a3916046f07ca5d453f0ce8ab4ae65691e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 289
        echo "<div>";
        // line 290
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 290, $this->getSourceContext()); })()), 'label');
        // line 291
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 291, $this->getSourceContext()); })()), 'errors');
        // line 292
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 292, $this->getSourceContext()); })()), 'widget');
        // line 293
        echo "</div>";
        
        $__internal_f75b1710988cc3772364436e2688a3916046f07ca5d453f0ce8ab4ae65691e24->leave($__internal_f75b1710988cc3772364436e2688a3916046f07ca5d453f0ce8ab4ae65691e24_prof);

        
        $__internal_9c2b5f2dd929f88a760b973c54007709b08be7fc31c23acaf069bfaedc582c00->leave($__internal_9c2b5f2dd929f88a760b973c54007709b08be7fc31c23acaf069bfaedc582c00_prof);

    }

    // line 296
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_b2f0d0b03c2efc5605c02c0cdbceeb4326d62fc24dd017c5a619a86ba89f5fcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2f0d0b03c2efc5605c02c0cdbceeb4326d62fc24dd017c5a619a86ba89f5fcf->enter($__internal_b2f0d0b03c2efc5605c02c0cdbceeb4326d62fc24dd017c5a619a86ba89f5fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_b2380706526e184349ba0322368737cc6ebaafa4f5a33f0854191a47353446e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2380706526e184349ba0322368737cc6ebaafa4f5a33f0854191a47353446e5->enter($__internal_b2380706526e184349ba0322368737cc6ebaafa4f5a33f0854191a47353446e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 297
        echo "<div>";
        // line 298
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 298, $this->getSourceContext()); })()), 'widget');
        // line 299
        echo "</div>";
        
        $__internal_b2380706526e184349ba0322368737cc6ebaafa4f5a33f0854191a47353446e5->leave($__internal_b2380706526e184349ba0322368737cc6ebaafa4f5a33f0854191a47353446e5_prof);

        
        $__internal_b2f0d0b03c2efc5605c02c0cdbceeb4326d62fc24dd017c5a619a86ba89f5fcf->leave($__internal_b2f0d0b03c2efc5605c02c0cdbceeb4326d62fc24dd017c5a619a86ba89f5fcf_prof);

    }

    // line 302
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_28ce3e01f7234c9adb8b5781c4cb5305dbb0be485dbe04ebc71f49a3219c7cbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28ce3e01f7234c9adb8b5781c4cb5305dbb0be485dbe04ebc71f49a3219c7cbd->enter($__internal_28ce3e01f7234c9adb8b5781c4cb5305dbb0be485dbe04ebc71f49a3219c7cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_b91beaafd4161950131b13cb06e062b9ab2fe17daf8951a4f86b879ada9c2574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b91beaafd4161950131b13cb06e062b9ab2fe17daf8951a4f86b879ada9c2574->enter($__internal_b91beaafd4161950131b13cb06e062b9ab2fe17daf8951a4f86b879ada9c2574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 303, $this->getSourceContext()); })()), 'widget');
        
        $__internal_b91beaafd4161950131b13cb06e062b9ab2fe17daf8951a4f86b879ada9c2574->leave($__internal_b91beaafd4161950131b13cb06e062b9ab2fe17daf8951a4f86b879ada9c2574_prof);

        
        $__internal_28ce3e01f7234c9adb8b5781c4cb5305dbb0be485dbe04ebc71f49a3219c7cbd->leave($__internal_28ce3e01f7234c9adb8b5781c4cb5305dbb0be485dbe04ebc71f49a3219c7cbd_prof);

    }

    // line 308
    public function block_form($context, array $blocks = array())
    {
        $__internal_6e365bee19441dfdb7deef4c4d60681e4e7fc17e0c9d8dcb389c2b3683bb1d63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e365bee19441dfdb7deef4c4d60681e4e7fc17e0c9d8dcb389c2b3683bb1d63->enter($__internal_6e365bee19441dfdb7deef4c4d60681e4e7fc17e0c9d8dcb389c2b3683bb1d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_c28f3a75c27817ea9ef6981caa81d47561fb3497d18a1b14a0f91edcfaa5046f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c28f3a75c27817ea9ef6981caa81d47561fb3497d18a1b14a0f91edcfaa5046f->enter($__internal_c28f3a75c27817ea9ef6981caa81d47561fb3497d18a1b14a0f91edcfaa5046f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 309
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 309, $this->getSourceContext()); })()), 'form_start');
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 310, $this->getSourceContext()); })()), 'widget');
        // line 311
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 311, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_c28f3a75c27817ea9ef6981caa81d47561fb3497d18a1b14a0f91edcfaa5046f->leave($__internal_c28f3a75c27817ea9ef6981caa81d47561fb3497d18a1b14a0f91edcfaa5046f_prof);

        
        $__internal_6e365bee19441dfdb7deef4c4d60681e4e7fc17e0c9d8dcb389c2b3683bb1d63->leave($__internal_6e365bee19441dfdb7deef4c4d60681e4e7fc17e0c9d8dcb389c2b3683bb1d63_prof);

    }

    // line 314
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_1d6c91baa52d036a41979d9557760c63d19ed45afb46d24e68884a45e1769f2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d6c91baa52d036a41979d9557760c63d19ed45afb46d24e68884a45e1769f2a->enter($__internal_1d6c91baa52d036a41979d9557760c63d19ed45afb46d24e68884a45e1769f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_4a4f843dae7af3e0323210b4a9c55c48bf707c539b7aa48192de197c4334edc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a4f843dae7af3e0323210b4a9c55c48bf707c539b7aa48192de197c4334edc9->enter($__internal_4a4f843dae7af3e0323210b4a9c55c48bf707c539b7aa48192de197c4334edc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 315
        twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 315, $this->getSourceContext()); })()), "setMethodRendered", array(), "method");
        // line 316
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 316, $this->getSourceContext()); })()));
        // line 317
        if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 317, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
            // line 318
            $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 318, $this->getSourceContext()); })());
        } else {
            // line 320
            $context["form_method"] = "POST";
        }
        // line 322
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 322, $this->getSourceContext()); })()), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 322, $this->getSourceContext()); })())), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 322, $this->getSourceContext()); })()) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 322, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 322, $this->getSourceContext()); })()));
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
        if ((isset($context["multipart"]) || array_key_exists("multipart", $context) ? $context["multipart"] : (function () { throw new Twig_Error_Runtime('Variable "multipart" does not exist.', 322, $this->getSourceContext()); })())) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 323
        if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 323, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 323, $this->getSourceContext()); })()))) {
            // line 324
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 324, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />";
        }
        
        $__internal_4a4f843dae7af3e0323210b4a9c55c48bf707c539b7aa48192de197c4334edc9->leave($__internal_4a4f843dae7af3e0323210b4a9c55c48bf707c539b7aa48192de197c4334edc9_prof);

        
        $__internal_1d6c91baa52d036a41979d9557760c63d19ed45afb46d24e68884a45e1769f2a->leave($__internal_1d6c91baa52d036a41979d9557760c63d19ed45afb46d24e68884a45e1769f2a_prof);

    }

    // line 328
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_982729e9a8daa7f6955dfacbacb6b26a45e48099da051c2fee0aecc697af210c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_982729e9a8daa7f6955dfacbacb6b26a45e48099da051c2fee0aecc697af210c->enter($__internal_982729e9a8daa7f6955dfacbacb6b26a45e48099da051c2fee0aecc697af210c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        $__internal_29c56ba01c7d3f3376b5a9329c9d61736b18ce19f903da3f206c51aaaed0be6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29c56ba01c7d3f3376b5a9329c9d61736b18ce19f903da3f206c51aaaed0be6e->enter($__internal_29c56ba01c7d3f3376b5a9329c9d61736b18ce19f903da3f206c51aaaed0be6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 329
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new Twig_Error_Runtime('Variable "render_rest" does not exist.', 329, $this->getSourceContext()); })()))) {
            // line 330
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 330, $this->getSourceContext()); })()), 'rest');
        }
        // line 332
        echo "</form>";
        
        $__internal_29c56ba01c7d3f3376b5a9329c9d61736b18ce19f903da3f206c51aaaed0be6e->leave($__internal_29c56ba01c7d3f3376b5a9329c9d61736b18ce19f903da3f206c51aaaed0be6e_prof);

        
        $__internal_982729e9a8daa7f6955dfacbacb6b26a45e48099da051c2fee0aecc697af210c->leave($__internal_982729e9a8daa7f6955dfacbacb6b26a45e48099da051c2fee0aecc697af210c_prof);

    }

    // line 335
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_430fa2205fb0c0cdb93134e4b8db824c3a4903634c74c030bd523fbbea117d6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_430fa2205fb0c0cdb93134e4b8db824c3a4903634c74c030bd523fbbea117d6e->enter($__internal_430fa2205fb0c0cdb93134e4b8db824c3a4903634c74c030bd523fbbea117d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_b65be5522ccdccb684981ca2ef2ad12b8381cdf9ad42ef1416bd79c174435202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b65be5522ccdccb684981ca2ef2ad12b8381cdf9ad42ef1416bd79c174435202->enter($__internal_b65be5522ccdccb684981ca2ef2ad12b8381cdf9ad42ef1416bd79c174435202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 336
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 336, $this->getSourceContext()); })())) > 0)) {
            // line 337
            echo "<ul>";
            // line 338
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 338, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 339
                echo "<li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 341
            echo "</ul>";
        }
        
        $__internal_b65be5522ccdccb684981ca2ef2ad12b8381cdf9ad42ef1416bd79c174435202->leave($__internal_b65be5522ccdccb684981ca2ef2ad12b8381cdf9ad42ef1416bd79c174435202_prof);

        
        $__internal_430fa2205fb0c0cdb93134e4b8db824c3a4903634c74c030bd523fbbea117d6e->leave($__internal_430fa2205fb0c0cdb93134e4b8db824c3a4903634c74c030bd523fbbea117d6e_prof);

    }

    // line 345
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_ec3b87aeea40bea07cd6d8a4184f7855122830baf5c273ca7127707efa917f41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec3b87aeea40bea07cd6d8a4184f7855122830baf5c273ca7127707efa917f41->enter($__internal_ec3b87aeea40bea07cd6d8a4184f7855122830baf5c273ca7127707efa917f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        $__internal_5d76600dbdf11f0ec2473626f0934623eb619acf5e46229ea330ca3d74a16a9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d76600dbdf11f0ec2473626f0934623eb619acf5e46229ea330ca3d74a16a9c->enter($__internal_5d76600dbdf11f0ec2473626f0934623eb619acf5e46229ea330ca3d74a16a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 346
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 346, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 347
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "rendered", array())) {
                // line 348
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 352
        if (( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 352, $this->getSourceContext()); })()), "methodRendered", array()) && Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 352, $this->getSourceContext()); })())))) {
            // line 353
            twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 353, $this->getSourceContext()); })()), "setMethodRendered", array(), "method");
            // line 354
            $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 354, $this->getSourceContext()); })()));
            // line 355
            if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 355, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
                // line 356
                $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 356, $this->getSourceContext()); })());
            } else {
                // line 358
                $context["form_method"] = "POST";
            }
            // line 361
            if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 361, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 361, $this->getSourceContext()); })()))) {
                // line 362
                echo "<input type=\"hidden\" name=\"_method\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 362, $this->getSourceContext()); })()), "html", null, true);
                echo "\" />";
            }
        }
        
        $__internal_5d76600dbdf11f0ec2473626f0934623eb619acf5e46229ea330ca3d74a16a9c->leave($__internal_5d76600dbdf11f0ec2473626f0934623eb619acf5e46229ea330ca3d74a16a9c_prof);

        
        $__internal_ec3b87aeea40bea07cd6d8a4184f7855122830baf5c273ca7127707efa917f41->leave($__internal_ec3b87aeea40bea07cd6d8a4184f7855122830baf5c273ca7127707efa917f41_prof);

    }

    // line 369
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_0c7a9817516e68524af15fc9f6cc7cdfd2a5ca33d7112bce5ba32bd31d73b824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c7a9817516e68524af15fc9f6cc7cdfd2a5ca33d7112bce5ba32bd31d73b824->enter($__internal_0c7a9817516e68524af15fc9f6cc7cdfd2a5ca33d7112bce5ba32bd31d73b824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        $__internal_fd63375bd5f3f26eb283727e7e787bb2f453197f77f0a2a9545c1531942df13a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd63375bd5f3f26eb283727e7e787bb2f453197f77f0a2a9545c1531942df13a->enter($__internal_fd63375bd5f3f26eb283727e7e787bb2f453197f77f0a2a9545c1531942df13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 370
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 370, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 371
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_fd63375bd5f3f26eb283727e7e787bb2f453197f77f0a2a9545c1531942df13a->leave($__internal_fd63375bd5f3f26eb283727e7e787bb2f453197f77f0a2a9545c1531942df13a_prof);

        
        $__internal_0c7a9817516e68524af15fc9f6cc7cdfd2a5ca33d7112bce5ba32bd31d73b824->leave($__internal_0c7a9817516e68524af15fc9f6cc7cdfd2a5ca33d7112bce5ba32bd31d73b824_prof);

    }

    // line 375
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_eeb7f1eff0c8966da482428eac075d2370f30cefbcea5364057900b903f6c45c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeb7f1eff0c8966da482428eac075d2370f30cefbcea5364057900b903f6c45c->enter($__internal_eeb7f1eff0c8966da482428eac075d2370f30cefbcea5364057900b903f6c45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_db1de6c45ff08e6265579659fdc18847ca083df0676d3f47b80502450073b61a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1de6c45ff08e6265579659fdc18847ca083df0676d3f47b80502450073b61a->enter($__internal_db1de6c45ff08e6265579659fdc18847ca083df0676d3f47b80502450073b61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 376
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 376, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 376, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        // line 377
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 377, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 378
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 378, $this->getSourceContext()); })())) {
            echo " required=\"required\"";
        }
        // line 379
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_db1de6c45ff08e6265579659fdc18847ca083df0676d3f47b80502450073b61a->leave($__internal_db1de6c45ff08e6265579659fdc18847ca083df0676d3f47b80502450073b61a_prof);

        
        $__internal_eeb7f1eff0c8966da482428eac075d2370f30cefbcea5364057900b903f6c45c->leave($__internal_eeb7f1eff0c8966da482428eac075d2370f30cefbcea5364057900b903f6c45c_prof);

    }

    // line 382
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_e2cf97ad2b59126a536277cd1e25e305c6068b4e21fca0b6f91629938a893eb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2cf97ad2b59126a536277cd1e25e305c6068b4e21fca0b6f91629938a893eb1->enter($__internal_e2cf97ad2b59126a536277cd1e25e305c6068b4e21fca0b6f91629938a893eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        $__internal_a1405e54e2eefff6f1297adcfc7a39a5053ae8be621956b42b7b387b8e010bf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1405e54e2eefff6f1297adcfc7a39a5053ae8be621956b42b7b387b8e010bf0->enter($__internal_a1405e54e2eefff6f1297adcfc7a39a5053ae8be621956b42b7b387b8e010bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 383
        if ( !twig_test_empty((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        // line 384
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_a1405e54e2eefff6f1297adcfc7a39a5053ae8be621956b42b7b387b8e010bf0->leave($__internal_a1405e54e2eefff6f1297adcfc7a39a5053ae8be621956b42b7b387b8e010bf0_prof);

        
        $__internal_e2cf97ad2b59126a536277cd1e25e305c6068b4e21fca0b6f91629938a893eb1->leave($__internal_e2cf97ad2b59126a536277cd1e25e305c6068b4e21fca0b6f91629938a893eb1_prof);

    }

    // line 387
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_a93038a949d049ce9c2450107a6026192c20818179e844bf2b1441bff072107b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a93038a949d049ce9c2450107a6026192c20818179e844bf2b1441bff072107b->enter($__internal_a93038a949d049ce9c2450107a6026192c20818179e844bf2b1441bff072107b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        $__internal_4d67e4b93f1e5cb1a38424e158d86f8ae49502df057a58c13916c4857d0d65c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d67e4b93f1e5cb1a38424e158d86f8ae49502df057a58c13916c4857d0d65c2->enter($__internal_4d67e4b93f1e5cb1a38424e158d86f8ae49502df057a58c13916c4857d0d65c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 388
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 388, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 388, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 388, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 389
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_4d67e4b93f1e5cb1a38424e158d86f8ae49502df057a58c13916c4857d0d65c2->leave($__internal_4d67e4b93f1e5cb1a38424e158d86f8ae49502df057a58c13916c4857d0d65c2_prof);

        
        $__internal_a93038a949d049ce9c2450107a6026192c20818179e844bf2b1441bff072107b->leave($__internal_a93038a949d049ce9c2450107a6026192c20818179e844bf2b1441bff072107b_prof);

    }

    // line 392
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_d9cc794cea7dd37af2ffc248b0ca146d7412d74b76455e982070f42de261b6b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9cc794cea7dd37af2ffc248b0ca146d7412d74b76455e982070f42de261b6b0->enter($__internal_d9cc794cea7dd37af2ffc248b0ca146d7412d74b76455e982070f42de261b6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        $__internal_df2dd0ea9315cba7014c67917e758e8ada1ca08ba2e00bd02a05382a2a04edf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df2dd0ea9315cba7014c67917e758e8ada1ca08ba2e00bd02a05382a2a04edf2->enter($__internal_df2dd0ea9315cba7014c67917e758e8ada1ca08ba2e00bd02a05382a2a04edf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 393
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 393, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 394
            echo " ";
            // line 395
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 396
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 396, $this->getSourceContext()); })()) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 396, $this->getSourceContext()); })())))), "html", null, true);
                echo "\"";
            } elseif ((            // line 397
$context["attrvalue"] === true)) {
                // line 398
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 399
$context["attrvalue"] === false)) {
                // line 400
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_df2dd0ea9315cba7014c67917e758e8ada1ca08ba2e00bd02a05382a2a04edf2->leave($__internal_df2dd0ea9315cba7014c67917e758e8ada1ca08ba2e00bd02a05382a2a04edf2_prof);

        
        $__internal_d9cc794cea7dd37af2ffc248b0ca146d7412d74b76455e982070f42de261b6b0->leave($__internal_d9cc794cea7dd37af2ffc248b0ca146d7412d74b76455e982070f42de261b6b0_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1654 => 400,  1652 => 399,  1647 => 398,  1645 => 397,  1640 => 396,  1638 => 395,  1636 => 394,  1632 => 393,  1623 => 392,  1613 => 389,  1604 => 388,  1595 => 387,  1585 => 384,  1579 => 383,  1570 => 382,  1560 => 379,  1556 => 378,  1552 => 377,  1546 => 376,  1537 => 375,  1523 => 371,  1519 => 370,  1510 => 369,  1496 => 362,  1494 => 361,  1491 => 358,  1488 => 356,  1486 => 355,  1484 => 354,  1482 => 353,  1480 => 352,  1473 => 348,  1471 => 347,  1467 => 346,  1458 => 345,  1447 => 341,  1439 => 339,  1435 => 338,  1433 => 337,  1431 => 336,  1422 => 335,  1412 => 332,  1409 => 330,  1407 => 329,  1398 => 328,  1385 => 324,  1383 => 323,  1356 => 322,  1353 => 320,  1350 => 318,  1348 => 317,  1346 => 316,  1344 => 315,  1335 => 314,  1325 => 311,  1323 => 310,  1321 => 309,  1312 => 308,  1302 => 303,  1293 => 302,  1283 => 299,  1281 => 298,  1279 => 297,  1270 => 296,  1260 => 293,  1258 => 292,  1256 => 291,  1254 => 290,  1252 => 289,  1243 => 288,  1233 => 285,  1224 => 280,  1207 => 276,  1180 => 272,  1176 => 269,  1173 => 266,  1172 => 265,  1171 => 264,  1169 => 263,  1167 => 262,  1164 => 260,  1162 => 259,  1159 => 257,  1157 => 256,  1155 => 255,  1146 => 254,  1136 => 249,  1134 => 248,  1125 => 247,  1115 => 244,  1113 => 243,  1104 => 242,  1094 => 239,  1092 => 238,  1083 => 237,  1073 => 234,  1071 => 233,  1062 => 232,  1046 => 229,  1042 => 226,  1039 => 223,  1038 => 222,  1037 => 221,  1035 => 220,  1033 => 219,  1024 => 218,  1014 => 215,  1012 => 214,  1003 => 213,  993 => 210,  991 => 209,  982 => 208,  972 => 205,  970 => 204,  961 => 203,  951 => 200,  949 => 199,  940 => 198,  929 => 195,  927 => 194,  918 => 193,  908 => 190,  906 => 189,  897 => 188,  887 => 185,  885 => 184,  876 => 183,  866 => 180,  857 => 179,  847 => 176,  845 => 175,  836 => 174,  826 => 171,  824 => 170,  815 => 168,  804 => 164,  800 => 163,  796 => 160,  790 => 159,  784 => 158,  778 => 157,  772 => 156,  766 => 155,  760 => 154,  754 => 153,  749 => 149,  743 => 148,  737 => 147,  731 => 146,  725 => 145,  719 => 144,  713 => 143,  707 => 142,  701 => 139,  699 => 138,  695 => 137,  692 => 135,  690 => 134,  681 => 133,  670 => 129,  660 => 128,  655 => 127,  653 => 126,  650 => 124,  648 => 123,  639 => 122,  628 => 118,  626 => 116,  625 => 115,  624 => 114,  623 => 113,  619 => 112,  616 => 110,  614 => 109,  605 => 108,  594 => 104,  592 => 103,  590 => 102,  588 => 101,  586 => 100,  582 => 99,  579 => 97,  577 => 96,  568 => 95,  548 => 92,  539 => 91,  519 => 88,  510 => 87,  469 => 82,  466 => 80,  464 => 79,  462 => 78,  457 => 77,  455 => 76,  438 => 75,  429 => 74,  419 => 71,  417 => 70,  415 => 69,  409 => 66,  407 => 65,  405 => 64,  403 => 63,  401 => 62,  392 => 60,  390 => 59,  383 => 58,  380 => 56,  378 => 55,  369 => 54,  359 => 51,  353 => 49,  351 => 48,  347 => 47,  343 => 46,  334 => 45,  323 => 41,  320 => 39,  318 => 38,  309 => 37,  295 => 34,  286 => 33,  276 => 30,  273 => 28,  271 => 27,  262 => 26,  252 => 23,  250 => 22,  248 => 21,  245 => 19,  243 => 18,  239 => 17,  230 => 16,  210 => 13,  208 => 12,  199 => 11,  188 => 7,  185 => 5,  183 => 4,  174 => 3,  164 => 392,  162 => 387,  160 => 382,  158 => 375,  156 => 369,  153 => 366,  151 => 345,  149 => 335,  147 => 328,  145 => 314,  143 => 308,  141 => 302,  139 => 296,  137 => 288,  135 => 280,  133 => 276,  131 => 254,  129 => 247,  127 => 242,  125 => 237,  123 => 232,  121 => 218,  119 => 213,  117 => 208,  115 => 203,  113 => 198,  111 => 193,  109 => 188,  107 => 183,  105 => 179,  103 => 174,  101 => 168,  99 => 133,  97 => 122,  95 => 108,  93 => 95,  91 => 91,  89 => 87,  87 => 74,  85 => 54,  83 => 45,  81 => 37,  79 => 33,  77 => 26,  75 => 16,  73 => 11,  71 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form is rootform -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %}{% with { attr: choice.attr } %}{{ block('attributes') }}{% endwith %}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <table class=\"{{ table_class|default('') }}\">
                <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                </tbody>
            </table>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is not same as(false) and label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{%- block tel_widget -%}
    {%- set type = type|default('tel') -%}
    {{ block('form_widget_simple') }}
{%- endblock tel_widget -%}

{%- block color_widget -%}
    {%- set type = type|default('color') -%}
    {{ block('form_widget_simple') }}
{%- endblock color_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <{{ element|default('label') }}{% if label_attr %}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}{% endif %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</{{ element|default('label') }}>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {%- do form.setMethodRendered() -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor -%}

    {% if not form.methodRendered and form is rootform %}
        {%- do form.setMethodRendered() -%}
        {% set method = method|upper %}
        {%- if method in [\"GET\", \"POST\"] -%}
            {% set form_method = method %}
        {%- else -%}
            {% set form_method = \"POST\" %}
        {%- endif -%}

        {%- if form_method != method -%}
            <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
        {%- endif -%}
    {% endif -%}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {{ block('attributes') }}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "form_div_layout.html.twig", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\form_div_layout.html.twig");
    }
}
