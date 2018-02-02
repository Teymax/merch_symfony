<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_bc28eaf4e21fe45e31499267f6d937f07663ecb24bf11ad313d1de6ac86027fd extends Twig_Template
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
        $__internal_c563c6aea7c59b14905f11e3f056ca92ea34b99a69498f9b14c03369e96c1fb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c563c6aea7c59b14905f11e3f056ca92ea34b99a69498f9b14c03369e96c1fb0->enter($__internal_c563c6aea7c59b14905f11e3f056ca92ea34b99a69498f9b14c03369e96c1fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_ee714ecfd78fde8f0868dcf97e7f87ac8403d667d7acb3e9abd1aa0e69fd5e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee714ecfd78fde8f0868dcf97e7f87ac8403d667d7acb3e9abd1aa0e69fd5e96->enter($__internal_ee714ecfd78fde8f0868dcf97e7f87ac8403d667d7acb3e9abd1aa0e69fd5e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_c563c6aea7c59b14905f11e3f056ca92ea34b99a69498f9b14c03369e96c1fb0->leave($__internal_c563c6aea7c59b14905f11e3f056ca92ea34b99a69498f9b14c03369e96c1fb0_prof);

        
        $__internal_ee714ecfd78fde8f0868dcf97e7f87ac8403d667d7acb3e9abd1aa0e69fd5e96->leave($__internal_ee714ecfd78fde8f0868dcf97e7f87ac8403d667d7acb3e9abd1aa0e69fd5e96_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
