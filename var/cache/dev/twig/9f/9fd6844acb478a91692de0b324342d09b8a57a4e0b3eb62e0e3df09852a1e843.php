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
        $__internal_529602f13c8b4847cffa025a3db0e25cc540d70142bae48781b112c19095ea6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_529602f13c8b4847cffa025a3db0e25cc540d70142bae48781b112c19095ea6c->enter($__internal_529602f13c8b4847cffa025a3db0e25cc540d70142bae48781b112c19095ea6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_de72412cfbcfd83b9941bc9c993b0180dc36c0164e5a479aa26d18d3c48139a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de72412cfbcfd83b9941bc9c993b0180dc36c0164e5a479aa26d18d3c48139a9->enter($__internal_de72412cfbcfd83b9941bc9c993b0180dc36c0164e5a479aa26d18d3c48139a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_529602f13c8b4847cffa025a3db0e25cc540d70142bae48781b112c19095ea6c->leave($__internal_529602f13c8b4847cffa025a3db0e25cc540d70142bae48781b112c19095ea6c_prof);

        
        $__internal_de72412cfbcfd83b9941bc9c993b0180dc36c0164e5a479aa26d18d3c48139a9->leave($__internal_de72412cfbcfd83b9941bc9c993b0180dc36c0164e5a479aa26d18d3c48139a9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4d5020803a252565497d05ec920bc2a527d9a05a520e1eb5210a439136d93a9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d5020803a252565497d05ec920bc2a527d9a05a520e1eb5210a439136d93a9e->enter($__internal_4d5020803a252565497d05ec920bc2a527d9a05a520e1eb5210a439136d93a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d38b8ac4010bbc96ef1962f82143115ccacfe1fa89d43f4e4d8a59356e5a1c44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d38b8ac4010bbc96ef1962f82143115ccacfe1fa89d43f4e4d8a59356e5a1c44->enter($__internal_d38b8ac4010bbc96ef1962f82143115ccacfe1fa89d43f4e4d8a59356e5a1c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d38b8ac4010bbc96ef1962f82143115ccacfe1fa89d43f4e4d8a59356e5a1c44->leave($__internal_d38b8ac4010bbc96ef1962f82143115ccacfe1fa89d43f4e4d8a59356e5a1c44_prof);

        
        $__internal_4d5020803a252565497d05ec920bc2a527d9a05a520e1eb5210a439136d93a9e->leave($__internal_4d5020803a252565497d05ec920bc2a527d9a05a520e1eb5210a439136d93a9e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ecbabdf60ab6f15145ffa36a0d4e5c092a528bd0b2c1377490664f83d9653a2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecbabdf60ab6f15145ffa36a0d4e5c092a528bd0b2c1377490664f83d9653a2d->enter($__internal_ecbabdf60ab6f15145ffa36a0d4e5c092a528bd0b2c1377490664f83d9653a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ed26103cab5f42efbd355ea8d1b49207c0b9b515ea6da78377728656bfda8be7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed26103cab5f42efbd355ea8d1b49207c0b9b515ea6da78377728656bfda8be7->enter($__internal_ed26103cab5f42efbd355ea8d1b49207c0b9b515ea6da78377728656bfda8be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ed26103cab5f42efbd355ea8d1b49207c0b9b515ea6da78377728656bfda8be7->leave($__internal_ed26103cab5f42efbd355ea8d1b49207c0b9b515ea6da78377728656bfda8be7_prof);

        
        $__internal_ecbabdf60ab6f15145ffa36a0d4e5c092a528bd0b2c1377490664f83d9653a2d->leave($__internal_ecbabdf60ab6f15145ffa36a0d4e5c092a528bd0b2c1377490664f83d9653a2d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1dc0e289db4dcddee3c2cd80402fbe5f05e27239fad9e67e15f19736de0646fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dc0e289db4dcddee3c2cd80402fbe5f05e27239fad9e67e15f19736de0646fd->enter($__internal_1dc0e289db4dcddee3c2cd80402fbe5f05e27239fad9e67e15f19736de0646fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dc26bc18e2c62c457ff600eb0097d04f67aeedbc71f5aef992ab6a59af2fda48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc26bc18e2c62c457ff600eb0097d04f67aeedbc71f5aef992ab6a59af2fda48->enter($__internal_dc26bc18e2c62c457ff600eb0097d04f67aeedbc71f5aef992ab6a59af2fda48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_dc26bc18e2c62c457ff600eb0097d04f67aeedbc71f5aef992ab6a59af2fda48->leave($__internal_dc26bc18e2c62c457ff600eb0097d04f67aeedbc71f5aef992ab6a59af2fda48_prof);

        
        $__internal_1dc0e289db4dcddee3c2cd80402fbe5f05e27239fad9e67e15f19736de0646fd->leave($__internal_1dc0e289db4dcddee3c2cd80402fbe5f05e27239fad9e67e15f19736de0646fd_prof);

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
