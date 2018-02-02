<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_08f15e6282d965b4983a4b33dfea9cea11e0ec5232953b7631bcf7313d871fa9 extends Twig_Template
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
        $__internal_a4b6cb726a6760275c873cdf1c9145703d1cf592fbfe2678ffc7b86d29df8339 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4b6cb726a6760275c873cdf1c9145703d1cf592fbfe2678ffc7b86d29df8339->enter($__internal_a4b6cb726a6760275c873cdf1c9145703d1cf592fbfe2678ffc7b86d29df8339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_012e5089b41bd2e930a6efdc8a10e2edc50d215d9d3005ae6faac5eef095fb6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_012e5089b41bd2e930a6efdc8a10e2edc50d215d9d3005ae6faac5eef095fb6a->enter($__internal_012e5089b41bd2e930a6efdc8a10e2edc50d215d9d3005ae6faac5eef095fb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_a4b6cb726a6760275c873cdf1c9145703d1cf592fbfe2678ffc7b86d29df8339->leave($__internal_a4b6cb726a6760275c873cdf1c9145703d1cf592fbfe2678ffc7b86d29df8339_prof);

        
        $__internal_012e5089b41bd2e930a6efdc8a10e2edc50d215d9d3005ae6faac5eef095fb6a->leave($__internal_012e5089b41bd2e930a6efdc8a10e2edc50d215d9d3005ae6faac5eef095fb6a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
