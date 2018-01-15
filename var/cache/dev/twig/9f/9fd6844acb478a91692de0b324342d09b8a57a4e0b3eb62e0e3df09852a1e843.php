<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c6fcd94c99d9b12c337677b16f8b7f065e1884d18761f4e01644fa185edcf05b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_aad6e7f23a944f2ab27b5bae5b09a97f185351fa31e23ac4769bce37799efb9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aad6e7f23a944f2ab27b5bae5b09a97f185351fa31e23ac4769bce37799efb9f->enter($__internal_aad6e7f23a944f2ab27b5bae5b09a97f185351fa31e23ac4769bce37799efb9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ac876d8bf0e19813829ee3293d416d34e4f973e3cdd367177dca29a2f67a4341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac876d8bf0e19813829ee3293d416d34e4f973e3cdd367177dca29a2f67a4341->enter($__internal_ac876d8bf0e19813829ee3293d416d34e4f973e3cdd367177dca29a2f67a4341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aad6e7f23a944f2ab27b5bae5b09a97f185351fa31e23ac4769bce37799efb9f->leave($__internal_aad6e7f23a944f2ab27b5bae5b09a97f185351fa31e23ac4769bce37799efb9f_prof);

        
        $__internal_ac876d8bf0e19813829ee3293d416d34e4f973e3cdd367177dca29a2f67a4341->leave($__internal_ac876d8bf0e19813829ee3293d416d34e4f973e3cdd367177dca29a2f67a4341_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b0c7b196ab8e7061fd418a14bf84f91f00a61747b7e989dd38841d96646e9179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0c7b196ab8e7061fd418a14bf84f91f00a61747b7e989dd38841d96646e9179->enter($__internal_b0c7b196ab8e7061fd418a14bf84f91f00a61747b7e989dd38841d96646e9179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1a63c3e4ed1a660f33e7f4c1f4a7ef591991ed4f3eda0dd3401c5f23fa27577a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a63c3e4ed1a660f33e7f4c1f4a7ef591991ed4f3eda0dd3401c5f23fa27577a->enter($__internal_1a63c3e4ed1a660f33e7f4c1f4a7ef591991ed4f3eda0dd3401c5f23fa27577a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1a63c3e4ed1a660f33e7f4c1f4a7ef591991ed4f3eda0dd3401c5f23fa27577a->leave($__internal_1a63c3e4ed1a660f33e7f4c1f4a7ef591991ed4f3eda0dd3401c5f23fa27577a_prof);

        
        $__internal_b0c7b196ab8e7061fd418a14bf84f91f00a61747b7e989dd38841d96646e9179->leave($__internal_b0c7b196ab8e7061fd418a14bf84f91f00a61747b7e989dd38841d96646e9179_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_79acf4299651dfff1ee6ea1ee0b7408952e6fb8e96f80e9fb268ea8ad5bec651 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79acf4299651dfff1ee6ea1ee0b7408952e6fb8e96f80e9fb268ea8ad5bec651->enter($__internal_79acf4299651dfff1ee6ea1ee0b7408952e6fb8e96f80e9fb268ea8ad5bec651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_699d05e05508622facb7dd6fe6ab20e300afb6f74c2a95c66c991f7033766701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_699d05e05508622facb7dd6fe6ab20e300afb6f74c2a95c66c991f7033766701->enter($__internal_699d05e05508622facb7dd6fe6ab20e300afb6f74c2a95c66c991f7033766701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_699d05e05508622facb7dd6fe6ab20e300afb6f74c2a95c66c991f7033766701->leave($__internal_699d05e05508622facb7dd6fe6ab20e300afb6f74c2a95c66c991f7033766701_prof);

        
        $__internal_79acf4299651dfff1ee6ea1ee0b7408952e6fb8e96f80e9fb268ea8ad5bec651->leave($__internal_79acf4299651dfff1ee6ea1ee0b7408952e6fb8e96f80e9fb268ea8ad5bec651_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c5a743c98cf792fb9f9babe0148a7c4e72e3542a4556c5363b7a7ba9064faa2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5a743c98cf792fb9f9babe0148a7c4e72e3542a4556c5363b7a7ba9064faa2c->enter($__internal_c5a743c98cf792fb9f9babe0148a7c4e72e3542a4556c5363b7a7ba9064faa2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1c46904a135a480cb0a9897bd3e2734fa13aa12ca3539cdacd5fcef67efe17d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c46904a135a480cb0a9897bd3e2734fa13aa12ca3539cdacd5fcef67efe17d5->enter($__internal_1c46904a135a480cb0a9897bd3e2734fa13aa12ca3539cdacd5fcef67efe17d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_1c46904a135a480cb0a9897bd3e2734fa13aa12ca3539cdacd5fcef67efe17d5->leave($__internal_1c46904a135a480cb0a9897bd3e2734fa13aa12ca3539cdacd5fcef67efe17d5_prof);

        
        $__internal_c5a743c98cf792fb9f9babe0148a7c4e72e3542a4556c5363b7a7ba9064faa2c->leave($__internal_c5a743c98cf792fb9f9babe0148a7c4e72e3542a4556c5363b7a7ba9064faa2c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
