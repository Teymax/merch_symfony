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
        $__internal_ca1cbb7a094d1395f025c03c5b732298d3eac40e5fcb23249c287c39d212486a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca1cbb7a094d1395f025c03c5b732298d3eac40e5fcb23249c287c39d212486a->enter($__internal_ca1cbb7a094d1395f025c03c5b732298d3eac40e5fcb23249c287c39d212486a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7bd43da0b8bed4f93e6e0d6974db0eac6aec991ca9dbbf14a97213c0f7e530af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd43da0b8bed4f93e6e0d6974db0eac6aec991ca9dbbf14a97213c0f7e530af->enter($__internal_7bd43da0b8bed4f93e6e0d6974db0eac6aec991ca9dbbf14a97213c0f7e530af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca1cbb7a094d1395f025c03c5b732298d3eac40e5fcb23249c287c39d212486a->leave($__internal_ca1cbb7a094d1395f025c03c5b732298d3eac40e5fcb23249c287c39d212486a_prof);

        
        $__internal_7bd43da0b8bed4f93e6e0d6974db0eac6aec991ca9dbbf14a97213c0f7e530af->leave($__internal_7bd43da0b8bed4f93e6e0d6974db0eac6aec991ca9dbbf14a97213c0f7e530af_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9aadf991cc53d7f26a5eb6baede77a3d9cccc9a683770009c2db41f5b2b79bef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aadf991cc53d7f26a5eb6baede77a3d9cccc9a683770009c2db41f5b2b79bef->enter($__internal_9aadf991cc53d7f26a5eb6baede77a3d9cccc9a683770009c2db41f5b2b79bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_06e198aa9b76c1b6870dabb6227fe53894c160a62dbba21daed32c8dfba18521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06e198aa9b76c1b6870dabb6227fe53894c160a62dbba21daed32c8dfba18521->enter($__internal_06e198aa9b76c1b6870dabb6227fe53894c160a62dbba21daed32c8dfba18521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_06e198aa9b76c1b6870dabb6227fe53894c160a62dbba21daed32c8dfba18521->leave($__internal_06e198aa9b76c1b6870dabb6227fe53894c160a62dbba21daed32c8dfba18521_prof);

        
        $__internal_9aadf991cc53d7f26a5eb6baede77a3d9cccc9a683770009c2db41f5b2b79bef->leave($__internal_9aadf991cc53d7f26a5eb6baede77a3d9cccc9a683770009c2db41f5b2b79bef_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_39ebcd08c8a61f578a0bc73d69b96971ce67087edb66b1dacbfefadcfff2bc4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39ebcd08c8a61f578a0bc73d69b96971ce67087edb66b1dacbfefadcfff2bc4c->enter($__internal_39ebcd08c8a61f578a0bc73d69b96971ce67087edb66b1dacbfefadcfff2bc4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c4739e028ecc591a5ab7b40b5063b4edb50d0ab80684aa3e9e7bf766f29d7f95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4739e028ecc591a5ab7b40b5063b4edb50d0ab80684aa3e9e7bf766f29d7f95->enter($__internal_c4739e028ecc591a5ab7b40b5063b4edb50d0ab80684aa3e9e7bf766f29d7f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c4739e028ecc591a5ab7b40b5063b4edb50d0ab80684aa3e9e7bf766f29d7f95->leave($__internal_c4739e028ecc591a5ab7b40b5063b4edb50d0ab80684aa3e9e7bf766f29d7f95_prof);

        
        $__internal_39ebcd08c8a61f578a0bc73d69b96971ce67087edb66b1dacbfefadcfff2bc4c->leave($__internal_39ebcd08c8a61f578a0bc73d69b96971ce67087edb66b1dacbfefadcfff2bc4c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_12421afe347e007728ce1e28088ff0eb83069cc838ea1f6d08247f5ece9103dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12421afe347e007728ce1e28088ff0eb83069cc838ea1f6d08247f5ece9103dc->enter($__internal_12421afe347e007728ce1e28088ff0eb83069cc838ea1f6d08247f5ece9103dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aa8f42902ecb659dade20ae86c8df24578dad53668c19ea310400edcfc963c90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8f42902ecb659dade20ae86c8df24578dad53668c19ea310400edcfc963c90->enter($__internal_aa8f42902ecb659dade20ae86c8df24578dad53668c19ea310400edcfc963c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_aa8f42902ecb659dade20ae86c8df24578dad53668c19ea310400edcfc963c90->leave($__internal_aa8f42902ecb659dade20ae86c8df24578dad53668c19ea310400edcfc963c90_prof);

        
        $__internal_12421afe347e007728ce1e28088ff0eb83069cc838ea1f6d08247f5ece9103dc->leave($__internal_12421afe347e007728ce1e28088ff0eb83069cc838ea1f6d08247f5ece9103dc_prof);

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
