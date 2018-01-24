<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_e8ec883cafdd66b5afb5985de904b46a130812260f9a16dab848686c508cf29b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29c161f7fb939b147de130bb4d5655103ef57980701a14a00450d149d889d037 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29c161f7fb939b147de130bb4d5655103ef57980701a14a00450d149d889d037->enter($__internal_29c161f7fb939b147de130bb4d5655103ef57980701a14a00450d149d889d037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_352e6c18a6275706e41ec80ab53a0db546e0ed0377db26fb7ca236f4fdbb056e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_352e6c18a6275706e41ec80ab53a0db546e0ed0377db26fb7ca236f4fdbb056e->enter($__internal_352e6c18a6275706e41ec80ab53a0db546e0ed0377db26fb7ca236f4fdbb056e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29c161f7fb939b147de130bb4d5655103ef57980701a14a00450d149d889d037->leave($__internal_29c161f7fb939b147de130bb4d5655103ef57980701a14a00450d149d889d037_prof);

        
        $__internal_352e6c18a6275706e41ec80ab53a0db546e0ed0377db26fb7ca236f4fdbb056e->leave($__internal_352e6c18a6275706e41ec80ab53a0db546e0ed0377db26fb7ca236f4fdbb056e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_778bf134ac35cf4a3bb436751d5fb513bd070c286e74251965b6f644cfbd59a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_778bf134ac35cf4a3bb436751d5fb513bd070c286e74251965b6f644cfbd59a1->enter($__internal_778bf134ac35cf4a3bb436751d5fb513bd070c286e74251965b6f644cfbd59a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ae2e317ee771deff84e4203d456e927f44600752130db51cf6ebc9abb118058a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae2e317ee771deff84e4203d456e927f44600752130db51cf6ebc9abb118058a->enter($__internal_ae2e317ee771deff84e4203d456e927f44600752130db51cf6ebc9abb118058a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ae2e317ee771deff84e4203d456e927f44600752130db51cf6ebc9abb118058a->leave($__internal_ae2e317ee771deff84e4203d456e927f44600752130db51cf6ebc9abb118058a_prof);

        
        $__internal_778bf134ac35cf4a3bb436751d5fb513bd070c286e74251965b6f644cfbd59a1->leave($__internal_778bf134ac35cf4a3bb436751d5fb513bd070c286e74251965b6f644cfbd59a1_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_037ebfbe50b0160c2f29afe37e0f31b2fc9546d427fe1affce60bb93d7efc44d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_037ebfbe50b0160c2f29afe37e0f31b2fc9546d427fe1affce60bb93d7efc44d->enter($__internal_037ebfbe50b0160c2f29afe37e0f31b2fc9546d427fe1affce60bb93d7efc44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d2a82670291b9fa57ae534c2138cd68f441f61672582ca95b522b47897e94806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2a82670291b9fa57ae534c2138cd68f441f61672582ca95b522b47897e94806->enter($__internal_d2a82670291b9fa57ae534c2138cd68f441f61672582ca95b522b47897e94806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_d2a82670291b9fa57ae534c2138cd68f441f61672582ca95b522b47897e94806->leave($__internal_d2a82670291b9fa57ae534c2138cd68f441f61672582ca95b522b47897e94806_prof);

        
        $__internal_037ebfbe50b0160c2f29afe37e0f31b2fc9546d427fe1affce60bb93d7efc44d->leave($__internal_037ebfbe50b0160c2f29afe37e0f31b2fc9546d427fe1affce60bb93d7efc44d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
