<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_1e002bb3a8f4e029c700fbff9d9d697e7a65b07b9c1cc1f77fc67d0542bd6170 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e1b76efe9fe9a5f0e73b5f405e619f2542852133a4f9af17c058f89d5cd0d1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e1b76efe9fe9a5f0e73b5f405e619f2542852133a4f9af17c058f89d5cd0d1c->enter($__internal_7e1b76efe9fe9a5f0e73b5f405e619f2542852133a4f9af17c058f89d5cd0d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2fc5a5730e97384010b1d91dcfb23af5c67f5e87eb23eaa2523e01d5a7a314f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fc5a5730e97384010b1d91dcfb23af5c67f5e87eb23eaa2523e01d5a7a314f8->enter($__internal_2fc5a5730e97384010b1d91dcfb23af5c67f5e87eb23eaa2523e01d5a7a314f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e1b76efe9fe9a5f0e73b5f405e619f2542852133a4f9af17c058f89d5cd0d1c->leave($__internal_7e1b76efe9fe9a5f0e73b5f405e619f2542852133a4f9af17c058f89d5cd0d1c_prof);

        
        $__internal_2fc5a5730e97384010b1d91dcfb23af5c67f5e87eb23eaa2523e01d5a7a314f8->leave($__internal_2fc5a5730e97384010b1d91dcfb23af5c67f5e87eb23eaa2523e01d5a7a314f8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_50d97fbfa6d23c807d34c46fa049cd6d7d026f6bf2f1d529c76003c60c7c8a92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50d97fbfa6d23c807d34c46fa049cd6d7d026f6bf2f1d529c76003c60c7c8a92->enter($__internal_50d97fbfa6d23c807d34c46fa049cd6d7d026f6bf2f1d529c76003c60c7c8a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_69ec076dbb47d8b322f139fbe709e894e2ceccac5ae816ba845b5eaeac14eb5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69ec076dbb47d8b322f139fbe709e894e2ceccac5ae816ba845b5eaeac14eb5f->enter($__internal_69ec076dbb47d8b322f139fbe709e894e2ceccac5ae816ba845b5eaeac14eb5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_69ec076dbb47d8b322f139fbe709e894e2ceccac5ae816ba845b5eaeac14eb5f->leave($__internal_69ec076dbb47d8b322f139fbe709e894e2ceccac5ae816ba845b5eaeac14eb5f_prof);

        
        $__internal_50d97fbfa6d23c807d34c46fa049cd6d7d026f6bf2f1d529c76003c60c7c8a92->leave($__internal_50d97fbfa6d23c807d34c46fa049cd6d7d026f6bf2f1d529c76003c60c7c8a92_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a6e3dce2391aeb4380d6e8276db978e9705f97810b13f2425bba900a27a79d20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6e3dce2391aeb4380d6e8276db978e9705f97810b13f2425bba900a27a79d20->enter($__internal_a6e3dce2391aeb4380d6e8276db978e9705f97810b13f2425bba900a27a79d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_284d47090bd0fe89154193fbcb90bff39d5de30558ba22b704797fe2b599a141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284d47090bd0fe89154193fbcb90bff39d5de30558ba22b704797fe2b599a141->enter($__internal_284d47090bd0fe89154193fbcb90bff39d5de30558ba22b704797fe2b599a141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_284d47090bd0fe89154193fbcb90bff39d5de30558ba22b704797fe2b599a141->leave($__internal_284d47090bd0fe89154193fbcb90bff39d5de30558ba22b704797fe2b599a141_prof);

        
        $__internal_a6e3dce2391aeb4380d6e8276db978e9705f97810b13f2425bba900a27a79d20->leave($__internal_a6e3dce2391aeb4380d6e8276db978e9705f97810b13f2425bba900a27a79d20_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d19917cfa9cfc5ca4ebaf2213f2b52466ccd419e39ddd6aa94b5b948438ca0f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d19917cfa9cfc5ca4ebaf2213f2b52466ccd419e39ddd6aa94b5b948438ca0f8->enter($__internal_d19917cfa9cfc5ca4ebaf2213f2b52466ccd419e39ddd6aa94b5b948438ca0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ae3b969d5be55321259d17df6f3cf8a380a12968749dc9111e625112745d1d93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae3b969d5be55321259d17df6f3cf8a380a12968749dc9111e625112745d1d93->enter($__internal_ae3b969d5be55321259d17df6f3cf8a380a12968749dc9111e625112745d1d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_ae3b969d5be55321259d17df6f3cf8a380a12968749dc9111e625112745d1d93->leave($__internal_ae3b969d5be55321259d17df6f3cf8a380a12968749dc9111e625112745d1d93_prof);

        
        $__internal_d19917cfa9cfc5ca4ebaf2213f2b52466ccd419e39ddd6aa94b5b948438ca0f8->leave($__internal_d19917cfa9cfc5ca4ebaf2213f2b52466ccd419e39ddd6aa94b5b948438ca0f8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
