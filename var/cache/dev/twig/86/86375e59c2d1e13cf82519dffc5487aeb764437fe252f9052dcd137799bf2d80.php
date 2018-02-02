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
        $__internal_6b8cd5caee24a364194fb21d0449cf337149c84d1e2cb29c483d28fad0b3cb3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b8cd5caee24a364194fb21d0449cf337149c84d1e2cb29c483d28fad0b3cb3f->enter($__internal_6b8cd5caee24a364194fb21d0449cf337149c84d1e2cb29c483d28fad0b3cb3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8c37d0a8a94df6d1a6da289462f7e776abdb938c2e8800db907be213e261a8d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c37d0a8a94df6d1a6da289462f7e776abdb938c2e8800db907be213e261a8d9->enter($__internal_8c37d0a8a94df6d1a6da289462f7e776abdb938c2e8800db907be213e261a8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b8cd5caee24a364194fb21d0449cf337149c84d1e2cb29c483d28fad0b3cb3f->leave($__internal_6b8cd5caee24a364194fb21d0449cf337149c84d1e2cb29c483d28fad0b3cb3f_prof);

        
        $__internal_8c37d0a8a94df6d1a6da289462f7e776abdb938c2e8800db907be213e261a8d9->leave($__internal_8c37d0a8a94df6d1a6da289462f7e776abdb938c2e8800db907be213e261a8d9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_91c1ac9c15358553b75e64c4f88f98395c27ae57e906042ea3ed9c5c58ca9574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91c1ac9c15358553b75e64c4f88f98395c27ae57e906042ea3ed9c5c58ca9574->enter($__internal_91c1ac9c15358553b75e64c4f88f98395c27ae57e906042ea3ed9c5c58ca9574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4473ce9c1900248de391e45c0daaa1d4af3d1a07be7cf5aa60470bb70e385451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4473ce9c1900248de391e45c0daaa1d4af3d1a07be7cf5aa60470bb70e385451->enter($__internal_4473ce9c1900248de391e45c0daaa1d4af3d1a07be7cf5aa60470bb70e385451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_4473ce9c1900248de391e45c0daaa1d4af3d1a07be7cf5aa60470bb70e385451->leave($__internal_4473ce9c1900248de391e45c0daaa1d4af3d1a07be7cf5aa60470bb70e385451_prof);

        
        $__internal_91c1ac9c15358553b75e64c4f88f98395c27ae57e906042ea3ed9c5c58ca9574->leave($__internal_91c1ac9c15358553b75e64c4f88f98395c27ae57e906042ea3ed9c5c58ca9574_prof);

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
