<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_cd572461d76da67530efeb62b6bf575b835b7972b7828a5e2cf11bbf3a57f988 extends Twig_Template
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
        $__internal_61e359e11b5b7cf9cbe41f154d9e0db601536c6925921fdb1023ec710dd55a5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61e359e11b5b7cf9cbe41f154d9e0db601536c6925921fdb1023ec710dd55a5f->enter($__internal_61e359e11b5b7cf9cbe41f154d9e0db601536c6925921fdb1023ec710dd55a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_52aed4e2c908a77e96d3de78d3c55061fb2efae19f80eabed87122caa743ccee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52aed4e2c908a77e96d3de78d3c55061fb2efae19f80eabed87122caa743ccee->enter($__internal_52aed4e2c908a77e96d3de78d3c55061fb2efae19f80eabed87122caa743ccee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_61e359e11b5b7cf9cbe41f154d9e0db601536c6925921fdb1023ec710dd55a5f->leave($__internal_61e359e11b5b7cf9cbe41f154d9e0db601536c6925921fdb1023ec710dd55a5f_prof);

        
        $__internal_52aed4e2c908a77e96d3de78d3c55061fb2efae19f80eabed87122caa743ccee->leave($__internal_52aed4e2c908a77e96d3de78d3c55061fb2efae19f80eabed87122caa743ccee_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
