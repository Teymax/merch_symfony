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
        $__internal_34458c4c6df69480106324090a206574629dc4fdc0a1c70dc3b49fa69a971f86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34458c4c6df69480106324090a206574629dc4fdc0a1c70dc3b49fa69a971f86->enter($__internal_34458c4c6df69480106324090a206574629dc4fdc0a1c70dc3b49fa69a971f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_5cfea4cedf1dbd94feb46523c153258be5804ec4a5fa1f29bcc961788b267da7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cfea4cedf1dbd94feb46523c153258be5804ec4a5fa1f29bcc961788b267da7->enter($__internal_5cfea4cedf1dbd94feb46523c153258be5804ec4a5fa1f29bcc961788b267da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34458c4c6df69480106324090a206574629dc4fdc0a1c70dc3b49fa69a971f86->leave($__internal_34458c4c6df69480106324090a206574629dc4fdc0a1c70dc3b49fa69a971f86_prof);

        
        $__internal_5cfea4cedf1dbd94feb46523c153258be5804ec4a5fa1f29bcc961788b267da7->leave($__internal_5cfea4cedf1dbd94feb46523c153258be5804ec4a5fa1f29bcc961788b267da7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_398a1c263749a4606615bb7f489ff09c1ecd03cadb19672b998e5fdec51a058b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_398a1c263749a4606615bb7f489ff09c1ecd03cadb19672b998e5fdec51a058b->enter($__internal_398a1c263749a4606615bb7f489ff09c1ecd03cadb19672b998e5fdec51a058b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_99cb8069e30858a42c2cf07206708e8fbf52bc7f2392c3ccdbbb1bae00b22a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99cb8069e30858a42c2cf07206708e8fbf52bc7f2392c3ccdbbb1bae00b22a70->enter($__internal_99cb8069e30858a42c2cf07206708e8fbf52bc7f2392c3ccdbbb1bae00b22a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_99cb8069e30858a42c2cf07206708e8fbf52bc7f2392c3ccdbbb1bae00b22a70->leave($__internal_99cb8069e30858a42c2cf07206708e8fbf52bc7f2392c3ccdbbb1bae00b22a70_prof);

        
        $__internal_398a1c263749a4606615bb7f489ff09c1ecd03cadb19672b998e5fdec51a058b->leave($__internal_398a1c263749a4606615bb7f489ff09c1ecd03cadb19672b998e5fdec51a058b_prof);

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
