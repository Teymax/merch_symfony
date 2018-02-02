<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_c68f282972e21ee4160a8c75c7e82f20dc5e499d5cd6ac65f400ffb89972b4eb extends Twig_Template
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
        $__internal_8d9f5402e6019292abb0e87cabd15d827ecfefdf3474db0774c8b0cb5f10b004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d9f5402e6019292abb0e87cabd15d827ecfefdf3474db0774c8b0cb5f10b004->enter($__internal_8d9f5402e6019292abb0e87cabd15d827ecfefdf3474db0774c8b0cb5f10b004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_486a82c5a81e5d49dc6bbc35ff68fae1a30bdcdaa1c9faa375d3ce30b0d0b77e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_486a82c5a81e5d49dc6bbc35ff68fae1a30bdcdaa1c9faa375d3ce30b0d0b77e->enter($__internal_486a82c5a81e5d49dc6bbc35ff68fae1a30bdcdaa1c9faa375d3ce30b0d0b77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_8d9f5402e6019292abb0e87cabd15d827ecfefdf3474db0774c8b0cb5f10b004->leave($__internal_8d9f5402e6019292abb0e87cabd15d827ecfefdf3474db0774c8b0cb5f10b004_prof);

        
        $__internal_486a82c5a81e5d49dc6bbc35ff68fae1a30bdcdaa1c9faa375d3ce30b0d0b77e->leave($__internal_486a82c5a81e5d49dc6bbc35ff68fae1a30bdcdaa1c9faa375d3ce30b0d0b77e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
