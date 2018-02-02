<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_667d7df0e2fac836c48a3e2636720dc1a42d615caa78b173296a1f0a5f9d35f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1d10259320d0cb8389d5ef47f8cd6e25dbbe31323d4c90c754b50e53fb6f80f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1d10259320d0cb8389d5ef47f8cd6e25dbbe31323d4c90c754b50e53fb6f80f->enter($__internal_b1d10259320d0cb8389d5ef47f8cd6e25dbbe31323d4c90c754b50e53fb6f80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_44a1ea5eae631eb3f302053efdd574e875784b13da4dac7230662121734f7b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a1ea5eae631eb3f302053efdd574e875784b13da4dac7230662121734f7b27->enter($__internal_44a1ea5eae631eb3f302053efdd574e875784b13da4dac7230662121734f7b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_b1d10259320d0cb8389d5ef47f8cd6e25dbbe31323d4c90c754b50e53fb6f80f->leave($__internal_b1d10259320d0cb8389d5ef47f8cd6e25dbbe31323d4c90c754b50e53fb6f80f_prof);

        
        $__internal_44a1ea5eae631eb3f302053efdd574e875784b13da4dac7230662121734f7b27->leave($__internal_44a1ea5eae631eb3f302053efdd574e875784b13da4dac7230662121734f7b27_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
