<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_ccb0dc09e24e24f6d712939b516577736d8728adf8103ca57c128034a25b4cfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0fef97ca8047c93931f847f2b83ef7eb84fcf70ca1fdc722c63f74fd787bfdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0fef97ca8047c93931f847f2b83ef7eb84fcf70ca1fdc722c63f74fd787bfdc->enter($__internal_d0fef97ca8047c93931f847f2b83ef7eb84fcf70ca1fdc722c63f74fd787bfdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_54cd9869537cf6d2d0a0ff6e8f542d0024b6ae5a69a0c1c2171648b2451c08ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54cd9869537cf6d2d0a0ff6e8f542d0024b6ae5a69a0c1c2171648b2451c08ef->enter($__internal_54cd9869537cf6d2d0a0ff6e8f542d0024b6ae5a69a0c1c2171648b2451c08ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0fef97ca8047c93931f847f2b83ef7eb84fcf70ca1fdc722c63f74fd787bfdc->leave($__internal_d0fef97ca8047c93931f847f2b83ef7eb84fcf70ca1fdc722c63f74fd787bfdc_prof);

        
        $__internal_54cd9869537cf6d2d0a0ff6e8f542d0024b6ae5a69a0c1c2171648b2451c08ef->leave($__internal_54cd9869537cf6d2d0a0ff6e8f542d0024b6ae5a69a0c1c2171648b2451c08ef_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0434e0e026e625515d1ecae1265b6b6deca995a2c82cbff16067ba778aa4a715 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0434e0e026e625515d1ecae1265b6b6deca995a2c82cbff16067ba778aa4a715->enter($__internal_0434e0e026e625515d1ecae1265b6b6deca995a2c82cbff16067ba778aa4a715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f9957640d1db9a9c8665d234b1384900c37148cbcaabeaf6f136ae98a3943e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9957640d1db9a9c8665d234b1384900c37148cbcaabeaf6f136ae98a3943e15->enter($__internal_f9957640d1db9a9c8665d234b1384900c37148cbcaabeaf6f136ae98a3943e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_f9957640d1db9a9c8665d234b1384900c37148cbcaabeaf6f136ae98a3943e15->leave($__internal_f9957640d1db9a9c8665d234b1384900c37148cbcaabeaf6f136ae98a3943e15_prof);

        
        $__internal_0434e0e026e625515d1ecae1265b6b6deca995a2c82cbff16067ba778aa4a715->leave($__internal_0434e0e026e625515d1ecae1265b6b6deca995a2c82cbff16067ba778aa4a715_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
