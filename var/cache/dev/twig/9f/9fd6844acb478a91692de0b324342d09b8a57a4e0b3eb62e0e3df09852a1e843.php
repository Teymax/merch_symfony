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
        $__internal_e26e4c7de04e9d9f0e77e877c382acfa1f6484527209e14682454664b6678829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e26e4c7de04e9d9f0e77e877c382acfa1f6484527209e14682454664b6678829->enter($__internal_e26e4c7de04e9d9f0e77e877c382acfa1f6484527209e14682454664b6678829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_566a1e7685daeb16d6e7b7ab8f4ff62bace8be64a89c12ece270f97ab9044f14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_566a1e7685daeb16d6e7b7ab8f4ff62bace8be64a89c12ece270f97ab9044f14->enter($__internal_566a1e7685daeb16d6e7b7ab8f4ff62bace8be64a89c12ece270f97ab9044f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e26e4c7de04e9d9f0e77e877c382acfa1f6484527209e14682454664b6678829->leave($__internal_e26e4c7de04e9d9f0e77e877c382acfa1f6484527209e14682454664b6678829_prof);

        
        $__internal_566a1e7685daeb16d6e7b7ab8f4ff62bace8be64a89c12ece270f97ab9044f14->leave($__internal_566a1e7685daeb16d6e7b7ab8f4ff62bace8be64a89c12ece270f97ab9044f14_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b630b55b88904f9f781d095b0d63b946e1db2563a70ed8e8b8008f59462399d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b630b55b88904f9f781d095b0d63b946e1db2563a70ed8e8b8008f59462399d4->enter($__internal_b630b55b88904f9f781d095b0d63b946e1db2563a70ed8e8b8008f59462399d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0fc4e6cc75f28fb52abe20f6b5c66ab389de9bc13080b534c2c17861551f4058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc4e6cc75f28fb52abe20f6b5c66ab389de9bc13080b534c2c17861551f4058->enter($__internal_0fc4e6cc75f28fb52abe20f6b5c66ab389de9bc13080b534c2c17861551f4058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0fc4e6cc75f28fb52abe20f6b5c66ab389de9bc13080b534c2c17861551f4058->leave($__internal_0fc4e6cc75f28fb52abe20f6b5c66ab389de9bc13080b534c2c17861551f4058_prof);

        
        $__internal_b630b55b88904f9f781d095b0d63b946e1db2563a70ed8e8b8008f59462399d4->leave($__internal_b630b55b88904f9f781d095b0d63b946e1db2563a70ed8e8b8008f59462399d4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ee6d6dc80e29a0e3c8d2fc29146f325383a1af21a3d625d8f77a76adaebc67b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee6d6dc80e29a0e3c8d2fc29146f325383a1af21a3d625d8f77a76adaebc67b3->enter($__internal_ee6d6dc80e29a0e3c8d2fc29146f325383a1af21a3d625d8f77a76adaebc67b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f3aa3b609a73a0baec030121a10d38c6c5f49ffc76025f0c89c856e42ea29fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3aa3b609a73a0baec030121a10d38c6c5f49ffc76025f0c89c856e42ea29fc9->enter($__internal_f3aa3b609a73a0baec030121a10d38c6c5f49ffc76025f0c89c856e42ea29fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f3aa3b609a73a0baec030121a10d38c6c5f49ffc76025f0c89c856e42ea29fc9->leave($__internal_f3aa3b609a73a0baec030121a10d38c6c5f49ffc76025f0c89c856e42ea29fc9_prof);

        
        $__internal_ee6d6dc80e29a0e3c8d2fc29146f325383a1af21a3d625d8f77a76adaebc67b3->leave($__internal_ee6d6dc80e29a0e3c8d2fc29146f325383a1af21a3d625d8f77a76adaebc67b3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5584b9a0f759baa4d8182393f377d705099527f729c202db46131446d8f35e10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5584b9a0f759baa4d8182393f377d705099527f729c202db46131446d8f35e10->enter($__internal_5584b9a0f759baa4d8182393f377d705099527f729c202db46131446d8f35e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d43bace5c3de1ad32556647508d0b1cd645fbae342dee00fa5d9c4ea6b78918a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d43bace5c3de1ad32556647508d0b1cd645fbae342dee00fa5d9c4ea6b78918a->enter($__internal_d43bace5c3de1ad32556647508d0b1cd645fbae342dee00fa5d9c4ea6b78918a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_d43bace5c3de1ad32556647508d0b1cd645fbae342dee00fa5d9c4ea6b78918a->leave($__internal_d43bace5c3de1ad32556647508d0b1cd645fbae342dee00fa5d9c4ea6b78918a_prof);

        
        $__internal_5584b9a0f759baa4d8182393f377d705099527f729c202db46131446d8f35e10->leave($__internal_5584b9a0f759baa4d8182393f377d705099527f729c202db46131446d8f35e10_prof);

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
