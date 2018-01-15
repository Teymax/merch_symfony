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
        $__internal_772e85b0b78e62cb265c15abddee467bf8bbcb705ed60dfa0367e1eca24e8281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_772e85b0b78e62cb265c15abddee467bf8bbcb705ed60dfa0367e1eca24e8281->enter($__internal_772e85b0b78e62cb265c15abddee467bf8bbcb705ed60dfa0367e1eca24e8281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_336fb2f8257f2458d2c207294a020d9f6086813e2c74363c3628521c79adf22b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_336fb2f8257f2458d2c207294a020d9f6086813e2c74363c3628521c79adf22b->enter($__internal_336fb2f8257f2458d2c207294a020d9f6086813e2c74363c3628521c79adf22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_772e85b0b78e62cb265c15abddee467bf8bbcb705ed60dfa0367e1eca24e8281->leave($__internal_772e85b0b78e62cb265c15abddee467bf8bbcb705ed60dfa0367e1eca24e8281_prof);

        
        $__internal_336fb2f8257f2458d2c207294a020d9f6086813e2c74363c3628521c79adf22b->leave($__internal_336fb2f8257f2458d2c207294a020d9f6086813e2c74363c3628521c79adf22b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_55a6a4356f533921bda150256bec9cca84c23be1f1ac337816e4a4ba303bdfab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55a6a4356f533921bda150256bec9cca84c23be1f1ac337816e4a4ba303bdfab->enter($__internal_55a6a4356f533921bda150256bec9cca84c23be1f1ac337816e4a4ba303bdfab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d157070bfda2e7963cef7e258bdea01c3c3adb4ad5c281e8025e737c4917ef64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d157070bfda2e7963cef7e258bdea01c3c3adb4ad5c281e8025e737c4917ef64->enter($__internal_d157070bfda2e7963cef7e258bdea01c3c3adb4ad5c281e8025e737c4917ef64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d157070bfda2e7963cef7e258bdea01c3c3adb4ad5c281e8025e737c4917ef64->leave($__internal_d157070bfda2e7963cef7e258bdea01c3c3adb4ad5c281e8025e737c4917ef64_prof);

        
        $__internal_55a6a4356f533921bda150256bec9cca84c23be1f1ac337816e4a4ba303bdfab->leave($__internal_55a6a4356f533921bda150256bec9cca84c23be1f1ac337816e4a4ba303bdfab_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_acecba9a42b600516ea6312fb58486bab018dbd44d7b8708f03b86ef385d851c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acecba9a42b600516ea6312fb58486bab018dbd44d7b8708f03b86ef385d851c->enter($__internal_acecba9a42b600516ea6312fb58486bab018dbd44d7b8708f03b86ef385d851c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f15acb49cb079904e20acac24539b9416e26e5322c52cfca3d8d4397eb261234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f15acb49cb079904e20acac24539b9416e26e5322c52cfca3d8d4397eb261234->enter($__internal_f15acb49cb079904e20acac24539b9416e26e5322c52cfca3d8d4397eb261234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f15acb49cb079904e20acac24539b9416e26e5322c52cfca3d8d4397eb261234->leave($__internal_f15acb49cb079904e20acac24539b9416e26e5322c52cfca3d8d4397eb261234_prof);

        
        $__internal_acecba9a42b600516ea6312fb58486bab018dbd44d7b8708f03b86ef385d851c->leave($__internal_acecba9a42b600516ea6312fb58486bab018dbd44d7b8708f03b86ef385d851c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_45b56a690268a68f0799720577fc81dba59af6a1d3802c9be09808287e2d6f14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45b56a690268a68f0799720577fc81dba59af6a1d3802c9be09808287e2d6f14->enter($__internal_45b56a690268a68f0799720577fc81dba59af6a1d3802c9be09808287e2d6f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a102d2c8eb429c8d1cd209a37395fc5f1be2ee661a074535b5a71db6e147a7d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a102d2c8eb429c8d1cd209a37395fc5f1be2ee661a074535b5a71db6e147a7d9->enter($__internal_a102d2c8eb429c8d1cd209a37395fc5f1be2ee661a074535b5a71db6e147a7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a102d2c8eb429c8d1cd209a37395fc5f1be2ee661a074535b5a71db6e147a7d9->leave($__internal_a102d2c8eb429c8d1cd209a37395fc5f1be2ee661a074535b5a71db6e147a7d9_prof);

        
        $__internal_45b56a690268a68f0799720577fc81dba59af6a1d3802c9be09808287e2d6f14->leave($__internal_45b56a690268a68f0799720577fc81dba59af6a1d3802c9be09808287e2d6f14_prof);

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
