<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_66c35594a5592aad9d45be6683a82ee68c80de21c25431d3c0ccf88bbe501749 extends Twig_Template
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
        $__internal_ad9f8b3cde6af7cd55abd5d84d46a1d877bb42cff68582f5fa68840e4259ab50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad9f8b3cde6af7cd55abd5d84d46a1d877bb42cff68582f5fa68840e4259ab50->enter($__internal_ad9f8b3cde6af7cd55abd5d84d46a1d877bb42cff68582f5fa68840e4259ab50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_8ecfa2758bb1e1427907bbbfacbef8a96966ef24fd30a2c20cd1b5e733d57666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ecfa2758bb1e1427907bbbfacbef8a96966ef24fd30a2c20cd1b5e733d57666->enter($__internal_8ecfa2758bb1e1427907bbbfacbef8a96966ef24fd30a2c20cd1b5e733d57666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_ad9f8b3cde6af7cd55abd5d84d46a1d877bb42cff68582f5fa68840e4259ab50->leave($__internal_ad9f8b3cde6af7cd55abd5d84d46a1d877bb42cff68582f5fa68840e4259ab50_prof);

        
        $__internal_8ecfa2758bb1e1427907bbbfacbef8a96966ef24fd30a2c20cd1b5e733d57666->leave($__internal_8ecfa2758bb1e1427907bbbfacbef8a96966ef24fd30a2c20cd1b5e733d57666_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
