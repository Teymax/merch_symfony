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
        $__internal_6d55cf7a96e4405de52c40ebe2ae76b44192da3aa697d701274230f751f297bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d55cf7a96e4405de52c40ebe2ae76b44192da3aa697d701274230f751f297bf->enter($__internal_6d55cf7a96e4405de52c40ebe2ae76b44192da3aa697d701274230f751f297bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_46223d2e4db622e3b853edd87793dff7060be3df3391599ad197c12505229a34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46223d2e4db622e3b853edd87793dff7060be3df3391599ad197c12505229a34->enter($__internal_46223d2e4db622e3b853edd87793dff7060be3df3391599ad197c12505229a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d55cf7a96e4405de52c40ebe2ae76b44192da3aa697d701274230f751f297bf->leave($__internal_6d55cf7a96e4405de52c40ebe2ae76b44192da3aa697d701274230f751f297bf_prof);

        
        $__internal_46223d2e4db622e3b853edd87793dff7060be3df3391599ad197c12505229a34->leave($__internal_46223d2e4db622e3b853edd87793dff7060be3df3391599ad197c12505229a34_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_39393a2a84fde2c3dede6558a384188017675aa0b600372d5ca7832b41cc5703 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39393a2a84fde2c3dede6558a384188017675aa0b600372d5ca7832b41cc5703->enter($__internal_39393a2a84fde2c3dede6558a384188017675aa0b600372d5ca7832b41cc5703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d4a45d58bc3bf6302cbb91e367a343ccc4689958d88c6573ffff60eb2c7d5c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4a45d58bc3bf6302cbb91e367a343ccc4689958d88c6573ffff60eb2c7d5c6f->enter($__internal_d4a45d58bc3bf6302cbb91e367a343ccc4689958d88c6573ffff60eb2c7d5c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d4a45d58bc3bf6302cbb91e367a343ccc4689958d88c6573ffff60eb2c7d5c6f->leave($__internal_d4a45d58bc3bf6302cbb91e367a343ccc4689958d88c6573ffff60eb2c7d5c6f_prof);

        
        $__internal_39393a2a84fde2c3dede6558a384188017675aa0b600372d5ca7832b41cc5703->leave($__internal_39393a2a84fde2c3dede6558a384188017675aa0b600372d5ca7832b41cc5703_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_84ba59629862047559e6aa35b9dda580b10b0eef82cace9db1447f22ab35ad12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84ba59629862047559e6aa35b9dda580b10b0eef82cace9db1447f22ab35ad12->enter($__internal_84ba59629862047559e6aa35b9dda580b10b0eef82cace9db1447f22ab35ad12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_947fd06a34bffe6803b5f61f03e2664accff77070e4a09f5057ae5dd5789f7f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_947fd06a34bffe6803b5f61f03e2664accff77070e4a09f5057ae5dd5789f7f2->enter($__internal_947fd06a34bffe6803b5f61f03e2664accff77070e4a09f5057ae5dd5789f7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_947fd06a34bffe6803b5f61f03e2664accff77070e4a09f5057ae5dd5789f7f2->leave($__internal_947fd06a34bffe6803b5f61f03e2664accff77070e4a09f5057ae5dd5789f7f2_prof);

        
        $__internal_84ba59629862047559e6aa35b9dda580b10b0eef82cace9db1447f22ab35ad12->leave($__internal_84ba59629862047559e6aa35b9dda580b10b0eef82cace9db1447f22ab35ad12_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ca97240d65956177fffb4e1b0528cffcbb8419b5d647bd44ccb68b73333aca93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca97240d65956177fffb4e1b0528cffcbb8419b5d647bd44ccb68b73333aca93->enter($__internal_ca97240d65956177fffb4e1b0528cffcbb8419b5d647bd44ccb68b73333aca93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ec4016a9c78f87a9ebe272e4bea885e1e74cd81e39cfc7fb6892f06099d2c724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec4016a9c78f87a9ebe272e4bea885e1e74cd81e39cfc7fb6892f06099d2c724->enter($__internal_ec4016a9c78f87a9ebe272e4bea885e1e74cd81e39cfc7fb6892f06099d2c724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ec4016a9c78f87a9ebe272e4bea885e1e74cd81e39cfc7fb6892f06099d2c724->leave($__internal_ec4016a9c78f87a9ebe272e4bea885e1e74cd81e39cfc7fb6892f06099d2c724_prof);

        
        $__internal_ca97240d65956177fffb4e1b0528cffcbb8419b5d647bd44ccb68b73333aca93->leave($__internal_ca97240d65956177fffb4e1b0528cffcbb8419b5d647bd44ccb68b73333aca93_prof);

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
