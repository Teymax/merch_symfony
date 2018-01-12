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
        $__internal_466d0cf02e2231048d0ea106448579acb8bd3ba224092aab12e6b24e82ed2033 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_466d0cf02e2231048d0ea106448579acb8bd3ba224092aab12e6b24e82ed2033->enter($__internal_466d0cf02e2231048d0ea106448579acb8bd3ba224092aab12e6b24e82ed2033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a3549d9a1b74c8421230cd3ca30742a9901d3763789594cae883e264c6c99119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3549d9a1b74c8421230cd3ca30742a9901d3763789594cae883e264c6c99119->enter($__internal_a3549d9a1b74c8421230cd3ca30742a9901d3763789594cae883e264c6c99119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_466d0cf02e2231048d0ea106448579acb8bd3ba224092aab12e6b24e82ed2033->leave($__internal_466d0cf02e2231048d0ea106448579acb8bd3ba224092aab12e6b24e82ed2033_prof);

        
        $__internal_a3549d9a1b74c8421230cd3ca30742a9901d3763789594cae883e264c6c99119->leave($__internal_a3549d9a1b74c8421230cd3ca30742a9901d3763789594cae883e264c6c99119_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bdd4388a50ebccf009809f863d0fdab81e7c80e48793e7317c35a9b582e69f94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdd4388a50ebccf009809f863d0fdab81e7c80e48793e7317c35a9b582e69f94->enter($__internal_bdd4388a50ebccf009809f863d0fdab81e7c80e48793e7317c35a9b582e69f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_027b234b0d75dac74cac381bab86ef55d3e94c4ce3367f63475fb01fd50b4c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_027b234b0d75dac74cac381bab86ef55d3e94c4ce3367f63475fb01fd50b4c8a->enter($__internal_027b234b0d75dac74cac381bab86ef55d3e94c4ce3367f63475fb01fd50b4c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_027b234b0d75dac74cac381bab86ef55d3e94c4ce3367f63475fb01fd50b4c8a->leave($__internal_027b234b0d75dac74cac381bab86ef55d3e94c4ce3367f63475fb01fd50b4c8a_prof);

        
        $__internal_bdd4388a50ebccf009809f863d0fdab81e7c80e48793e7317c35a9b582e69f94->leave($__internal_bdd4388a50ebccf009809f863d0fdab81e7c80e48793e7317c35a9b582e69f94_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3c04455e34fbee1f93dfe9fc53f8da1dbdde8ca7ec31de4305fb4a206734592c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c04455e34fbee1f93dfe9fc53f8da1dbdde8ca7ec31de4305fb4a206734592c->enter($__internal_3c04455e34fbee1f93dfe9fc53f8da1dbdde8ca7ec31de4305fb4a206734592c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1ab37c42a9abaffdba6ff24f83cd332ace4c9f9a116d805af9ca67c72f21de91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab37c42a9abaffdba6ff24f83cd332ace4c9f9a116d805af9ca67c72f21de91->enter($__internal_1ab37c42a9abaffdba6ff24f83cd332ace4c9f9a116d805af9ca67c72f21de91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1ab37c42a9abaffdba6ff24f83cd332ace4c9f9a116d805af9ca67c72f21de91->leave($__internal_1ab37c42a9abaffdba6ff24f83cd332ace4c9f9a116d805af9ca67c72f21de91_prof);

        
        $__internal_3c04455e34fbee1f93dfe9fc53f8da1dbdde8ca7ec31de4305fb4a206734592c->leave($__internal_3c04455e34fbee1f93dfe9fc53f8da1dbdde8ca7ec31de4305fb4a206734592c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9775fad16b32030aee0556fa7efb6d5ebf44bd67a069b0c25c52dcb38b7d30ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9775fad16b32030aee0556fa7efb6d5ebf44bd67a069b0c25c52dcb38b7d30ce->enter($__internal_9775fad16b32030aee0556fa7efb6d5ebf44bd67a069b0c25c52dcb38b7d30ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_849c86fee8e9160d3f9b1586e306c93612e9f127c9001d2c8e1f278564bb1ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_849c86fee8e9160d3f9b1586e306c93612e9f127c9001d2c8e1f278564bb1ac0->enter($__internal_849c86fee8e9160d3f9b1586e306c93612e9f127c9001d2c8e1f278564bb1ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_849c86fee8e9160d3f9b1586e306c93612e9f127c9001d2c8e1f278564bb1ac0->leave($__internal_849c86fee8e9160d3f9b1586e306c93612e9f127c9001d2c8e1f278564bb1ac0_prof);

        
        $__internal_9775fad16b32030aee0556fa7efb6d5ebf44bd67a069b0c25c52dcb38b7d30ce->leave($__internal_9775fad16b32030aee0556fa7efb6d5ebf44bd67a069b0c25c52dcb38b7d30ce_prof);

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
