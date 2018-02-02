<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_a75068656cd4ef2a14517cc6b09b7b111de1c973e2d05d11532bf87d874e9bb2 extends Twig_Template
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
        $__internal_57aca8984ca17b0eb7a16e3a34da2a1ab4bf3d1345c516441b1167ad2423f6dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57aca8984ca17b0eb7a16e3a34da2a1ab4bf3d1345c516441b1167ad2423f6dd->enter($__internal_57aca8984ca17b0eb7a16e3a34da2a1ab4bf3d1345c516441b1167ad2423f6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_b7ca6b0e9120b62948517fe6aeda60f2e05eddf1b8e1606ca908bc6e4fd380c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7ca6b0e9120b62948517fe6aeda60f2e05eddf1b8e1606ca908bc6e4fd380c1->enter($__internal_b7ca6b0e9120b62948517fe6aeda60f2e05eddf1b8e1606ca908bc6e4fd380c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_57aca8984ca17b0eb7a16e3a34da2a1ab4bf3d1345c516441b1167ad2423f6dd->leave($__internal_57aca8984ca17b0eb7a16e3a34da2a1ab4bf3d1345c516441b1167ad2423f6dd_prof);

        
        $__internal_b7ca6b0e9120b62948517fe6aeda60f2e05eddf1b8e1606ca908bc6e4fd380c1->leave($__internal_b7ca6b0e9120b62948517fe6aeda60f2e05eddf1b8e1606ca908bc6e4fd380c1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
