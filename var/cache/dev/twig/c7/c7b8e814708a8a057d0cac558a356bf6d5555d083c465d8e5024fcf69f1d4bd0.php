<?php

/* form_table_layout.html.twig */
class __TwigTemplate_0f284d3441800c3fc4b4efe299d82bc6828e917721bbe372a99f02ed89a2cf4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c42d49295c382e0f71f3d219e1b9a50d661aee832dceecbd9aa4ac02f8165c3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c42d49295c382e0f71f3d219e1b9a50d661aee832dceecbd9aa4ac02f8165c3a->enter($__internal_c42d49295c382e0f71f3d219e1b9a50d661aee832dceecbd9aa4ac02f8165c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_04f05ba00df1718f6aaf08b5b2d4f1598860857dc721d8685a5922b4fef0ccfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04f05ba00df1718f6aaf08b5b2d4f1598860857dc721d8685a5922b4fef0ccfa->enter($__internal_04f05ba00df1718f6aaf08b5b2d4f1598860857dc721d8685a5922b4fef0ccfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_c42d49295c382e0f71f3d219e1b9a50d661aee832dceecbd9aa4ac02f8165c3a->leave($__internal_c42d49295c382e0f71f3d219e1b9a50d661aee832dceecbd9aa4ac02f8165c3a_prof);

        
        $__internal_04f05ba00df1718f6aaf08b5b2d4f1598860857dc721d8685a5922b4fef0ccfa->leave($__internal_04f05ba00df1718f6aaf08b5b2d4f1598860857dc721d8685a5922b4fef0ccfa_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9f18eb989b769d32a91655a73fe93b11f210293fbc6392989623a760de3307df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f18eb989b769d32a91655a73fe93b11f210293fbc6392989623a760de3307df->enter($__internal_9f18eb989b769d32a91655a73fe93b11f210293fbc6392989623a760de3307df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_ca6bd6fb384f2e278ff5da2941b5c2b5dd3b61d1782750683829f6e9ea5e7c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca6bd6fb384f2e278ff5da2941b5c2b5dd3b61d1782750683829f6e9ea5e7c35->enter($__internal_ca6bd6fb384f2e278ff5da2941b5c2b5dd3b61d1782750683829f6e9ea5e7c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_ca6bd6fb384f2e278ff5da2941b5c2b5dd3b61d1782750683829f6e9ea5e7c35->leave($__internal_ca6bd6fb384f2e278ff5da2941b5c2b5dd3b61d1782750683829f6e9ea5e7c35_prof);

        
        $__internal_9f18eb989b769d32a91655a73fe93b11f210293fbc6392989623a760de3307df->leave($__internal_9f18eb989b769d32a91655a73fe93b11f210293fbc6392989623a760de3307df_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_d11584b11c5a6f31fb4a6125d952e22de4e86fe82d85a8bc8e48801ffd9b1a55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d11584b11c5a6f31fb4a6125d952e22de4e86fe82d85a8bc8e48801ffd9b1a55->enter($__internal_d11584b11c5a6f31fb4a6125d952e22de4e86fe82d85a8bc8e48801ffd9b1a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_454a32fbfb10165af610912a4adc31603999e9c6eb1f944a6f567da0f2db40b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_454a32fbfb10165af610912a4adc31603999e9c6eb1f944a6f567da0f2db40b7->enter($__internal_454a32fbfb10165af610912a4adc31603999e9c6eb1f944a6f567da0f2db40b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_454a32fbfb10165af610912a4adc31603999e9c6eb1f944a6f567da0f2db40b7->leave($__internal_454a32fbfb10165af610912a4adc31603999e9c6eb1f944a6f567da0f2db40b7_prof);

        
        $__internal_d11584b11c5a6f31fb4a6125d952e22de4e86fe82d85a8bc8e48801ffd9b1a55->leave($__internal_d11584b11c5a6f31fb4a6125d952e22de4e86fe82d85a8bc8e48801ffd9b1a55_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_e2376f424506985cfdd03864a200db2b4bfd156f29c0ecba29ccf45541e4b499 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2376f424506985cfdd03864a200db2b4bfd156f29c0ecba29ccf45541e4b499->enter($__internal_e2376f424506985cfdd03864a200db2b4bfd156f29c0ecba29ccf45541e4b499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_de8c40880cfad45564f4025eb87fa41f2ffde14939eff25cd363b8d73580bda3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de8c40880cfad45564f4025eb87fa41f2ffde14939eff25cd363b8d73580bda3->enter($__internal_de8c40880cfad45564f4025eb87fa41f2ffde14939eff25cd363b8d73580bda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_de8c40880cfad45564f4025eb87fa41f2ffde14939eff25cd363b8d73580bda3->leave($__internal_de8c40880cfad45564f4025eb87fa41f2ffde14939eff25cd363b8d73580bda3_prof);

        
        $__internal_e2376f424506985cfdd03864a200db2b4bfd156f29c0ecba29ccf45541e4b499->leave($__internal_e2376f424506985cfdd03864a200db2b4bfd156f29c0ecba29ccf45541e4b499_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_fb5ef53c7428c5d26120aef6931779755a925abd71bb4b7e9449ae5863fbd063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb5ef53c7428c5d26120aef6931779755a925abd71bb4b7e9449ae5863fbd063->enter($__internal_fb5ef53c7428c5d26120aef6931779755a925abd71bb4b7e9449ae5863fbd063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_5aa33a2f759c1bf3ec247d4a2cdd3774075407fb0ae136deaacf8aa83d6f7c90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aa33a2f759c1bf3ec247d4a2cdd3774075407fb0ae136deaacf8aa83d6f7c90->enter($__internal_5aa33a2f759c1bf3ec247d4a2cdd3774075407fb0ae136deaacf8aa83d6f7c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_5aa33a2f759c1bf3ec247d4a2cdd3774075407fb0ae136deaacf8aa83d6f7c90->leave($__internal_5aa33a2f759c1bf3ec247d4a2cdd3774075407fb0ae136deaacf8aa83d6f7c90_prof);

        
        $__internal_fb5ef53c7428c5d26120aef6931779755a925abd71bb4b7e9449ae5863fbd063->leave($__internal_fb5ef53c7428c5d26120aef6931779755a925abd71bb4b7e9449ae5863fbd063_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
