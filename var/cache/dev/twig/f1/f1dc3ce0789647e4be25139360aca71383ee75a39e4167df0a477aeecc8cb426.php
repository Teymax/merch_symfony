<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_01ddee956a713c3fc1f021e75ff4b546a01cb426dbfa1c1b88171f6629809dbe extends Twig_Template
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
        $__internal_aec3decc98f6f91bdcb930058893b3513388751c32f9db258555211239317900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aec3decc98f6f91bdcb930058893b3513388751c32f9db258555211239317900->enter($__internal_aec3decc98f6f91bdcb930058893b3513388751c32f9db258555211239317900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_e73b49c273c5d85d48f81bffbc03c0233040aa6dd09b030e29794e79ef25aace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e73b49c273c5d85d48f81bffbc03c0233040aa6dd09b030e29794e79ef25aace->enter($__internal_e73b49c273c5d85d48f81bffbc03c0233040aa6dd09b030e29794e79ef25aace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_aec3decc98f6f91bdcb930058893b3513388751c32f9db258555211239317900->leave($__internal_aec3decc98f6f91bdcb930058893b3513388751c32f9db258555211239317900_prof);

        
        $__internal_e73b49c273c5d85d48f81bffbc03c0233040aa6dd09b030e29794e79ef25aace->leave($__internal_e73b49c273c5d85d48f81bffbc03c0233040aa6dd09b030e29794e79ef25aace_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
