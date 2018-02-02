<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_3a2d04587a46d592ceed576297ac81d4a220f3d13a013621de1c0021f7fe0df0 extends Twig_Template
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
        $__internal_ff39610f5ba6f45b1cc375c47ae9208fb61fab10047a615e079e60d458141f2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff39610f5ba6f45b1cc375c47ae9208fb61fab10047a615e079e60d458141f2f->enter($__internal_ff39610f5ba6f45b1cc375c47ae9208fb61fab10047a615e079e60d458141f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_1142aeb503c385224b9e38a8149d8fcf1ac0c99fadbb4811a5c30700d191a4f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1142aeb503c385224b9e38a8149d8fcf1ac0c99fadbb4811a5c30700d191a4f9->enter($__internal_1142aeb503c385224b9e38a8149d8fcf1ac0c99fadbb4811a5c30700d191a4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_ff39610f5ba6f45b1cc375c47ae9208fb61fab10047a615e079e60d458141f2f->leave($__internal_ff39610f5ba6f45b1cc375c47ae9208fb61fab10047a615e079e60d458141f2f_prof);

        
        $__internal_1142aeb503c385224b9e38a8149d8fcf1ac0c99fadbb4811a5c30700d191a4f9->leave($__internal_1142aeb503c385224b9e38a8149d8fcf1ac0c99fadbb4811a5c30700d191a4f9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
