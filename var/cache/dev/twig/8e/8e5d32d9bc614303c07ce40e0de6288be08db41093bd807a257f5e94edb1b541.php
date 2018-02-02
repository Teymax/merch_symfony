<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_e866157cc09cec9a36d5d85cde95c50637ed17bd8dec2a16bbe0c9cafec2017b extends Twig_Template
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
        $__internal_18d3cf5801d9f69dee6d7066946ae76bad23a4737054df838b1ba2090959dd0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18d3cf5801d9f69dee6d7066946ae76bad23a4737054df838b1ba2090959dd0e->enter($__internal_18d3cf5801d9f69dee6d7066946ae76bad23a4737054df838b1ba2090959dd0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_c34d981cd14b6af4b4f7b2e2eb029791397371444d0615bf2714fefdc4ad9c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c34d981cd14b6af4b4f7b2e2eb029791397371444d0615bf2714fefdc4ad9c0a->enter($__internal_c34d981cd14b6af4b4f7b2e2eb029791397371444d0615bf2714fefdc4ad9c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_18d3cf5801d9f69dee6d7066946ae76bad23a4737054df838b1ba2090959dd0e->leave($__internal_18d3cf5801d9f69dee6d7066946ae76bad23a4737054df838b1ba2090959dd0e_prof);

        
        $__internal_c34d981cd14b6af4b4f7b2e2eb029791397371444d0615bf2714fefdc4ad9c0a->leave($__internal_c34d981cd14b6af4b4f7b2e2eb029791397371444d0615bf2714fefdc4ad9c0a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
