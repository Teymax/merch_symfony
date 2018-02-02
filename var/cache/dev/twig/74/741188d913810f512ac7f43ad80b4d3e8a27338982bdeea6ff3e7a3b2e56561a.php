<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_a1d229714511d1e71ceb764f1f6d39d0b0e34296afb76b23b9be05fbc88428b7 extends Twig_Template
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
        $__internal_aaec27535bec0a1c6295088a85e9a38b9180feeb0fb2578d914c00c9f9c0a70e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaec27535bec0a1c6295088a85e9a38b9180feeb0fb2578d914c00c9f9c0a70e->enter($__internal_aaec27535bec0a1c6295088a85e9a38b9180feeb0fb2578d914c00c9f9c0a70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_06fb07740e72ff5e574a0a7b5771ca02bccb24d2831ae9407b437cc610b2348a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06fb07740e72ff5e574a0a7b5771ca02bccb24d2831ae9407b437cc610b2348a->enter($__internal_06fb07740e72ff5e574a0a7b5771ca02bccb24d2831ae9407b437cc610b2348a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_aaec27535bec0a1c6295088a85e9a38b9180feeb0fb2578d914c00c9f9c0a70e->leave($__internal_aaec27535bec0a1c6295088a85e9a38b9180feeb0fb2578d914c00c9f9c0a70e_prof);

        
        $__internal_06fb07740e72ff5e574a0a7b5771ca02bccb24d2831ae9407b437cc610b2348a->leave($__internal_06fb07740e72ff5e574a0a7b5771ca02bccb24d2831ae9407b437cc610b2348a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
