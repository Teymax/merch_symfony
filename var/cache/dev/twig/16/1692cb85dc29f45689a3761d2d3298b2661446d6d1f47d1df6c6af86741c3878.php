<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_def94c7a7fc36b2a32177d259957a9d157c329c7e463884113957ba0737f5ee8 extends Twig_Template
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
        $__internal_85bfc67620be664301f8ad2de8f8d79afe2f4bdeb47d4984de43742c13b1d2d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85bfc67620be664301f8ad2de8f8d79afe2f4bdeb47d4984de43742c13b1d2d1->enter($__internal_85bfc67620be664301f8ad2de8f8d79afe2f4bdeb47d4984de43742c13b1d2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_f97440c91866c2af23aae93bab0fc4bd393be72911bb660a72874d7fc7d300f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f97440c91866c2af23aae93bab0fc4bd393be72911bb660a72874d7fc7d300f4->enter($__internal_f97440c91866c2af23aae93bab0fc4bd393be72911bb660a72874d7fc7d300f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_85bfc67620be664301f8ad2de8f8d79afe2f4bdeb47d4984de43742c13b1d2d1->leave($__internal_85bfc67620be664301f8ad2de8f8d79afe2f4bdeb47d4984de43742c13b1d2d1_prof);

        
        $__internal_f97440c91866c2af23aae93bab0fc4bd393be72911bb660a72874d7fc7d300f4->leave($__internal_f97440c91866c2af23aae93bab0fc4bd393be72911bb660a72874d7fc7d300f4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
