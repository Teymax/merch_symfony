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
        $__internal_0e55a5ea167845ac2044a4107931fc5a7822fa1d8bddac7eae6e336e9c0b3ad2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e55a5ea167845ac2044a4107931fc5a7822fa1d8bddac7eae6e336e9c0b3ad2->enter($__internal_0e55a5ea167845ac2044a4107931fc5a7822fa1d8bddac7eae6e336e9c0b3ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_0258c019d83a0efda14d635f7bb964ef26fcc69088ebff3c30e72aaeb89559ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0258c019d83a0efda14d635f7bb964ef26fcc69088ebff3c30e72aaeb89559ad->enter($__internal_0258c019d83a0efda14d635f7bb964ef26fcc69088ebff3c30e72aaeb89559ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e55a5ea167845ac2044a4107931fc5a7822fa1d8bddac7eae6e336e9c0b3ad2->leave($__internal_0e55a5ea167845ac2044a4107931fc5a7822fa1d8bddac7eae6e336e9c0b3ad2_prof);

        
        $__internal_0258c019d83a0efda14d635f7bb964ef26fcc69088ebff3c30e72aaeb89559ad->leave($__internal_0258c019d83a0efda14d635f7bb964ef26fcc69088ebff3c30e72aaeb89559ad_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f8f2fcb9d5429b056103ad91392bef1fa9105c6bcfcf06405f4f65ac95aa8b21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8f2fcb9d5429b056103ad91392bef1fa9105c6bcfcf06405f4f65ac95aa8b21->enter($__internal_f8f2fcb9d5429b056103ad91392bef1fa9105c6bcfcf06405f4f65ac95aa8b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_932c9615fab96c492754440a233721c9d2b8290a98094aa5443dc856e6441229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_932c9615fab96c492754440a233721c9d2b8290a98094aa5443dc856e6441229->enter($__internal_932c9615fab96c492754440a233721c9d2b8290a98094aa5443dc856e6441229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_932c9615fab96c492754440a233721c9d2b8290a98094aa5443dc856e6441229->leave($__internal_932c9615fab96c492754440a233721c9d2b8290a98094aa5443dc856e6441229_prof);

        
        $__internal_f8f2fcb9d5429b056103ad91392bef1fa9105c6bcfcf06405f4f65ac95aa8b21->leave($__internal_f8f2fcb9d5429b056103ad91392bef1fa9105c6bcfcf06405f4f65ac95aa8b21_prof);

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
