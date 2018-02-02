<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_55d0df3d27ad6f8a40d7948bb635897356912c28f409a12c60a9757214dec16d extends Twig_Template
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
        $__internal_238b3d66713a3a845f34c1b1b213edbb595934aeb8297697280e7843cbe220aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_238b3d66713a3a845f34c1b1b213edbb595934aeb8297697280e7843cbe220aa->enter($__internal_238b3d66713a3a845f34c1b1b213edbb595934aeb8297697280e7843cbe220aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_40e924f69c0d4de70ed115e5c543d2676b0a05ac34a0b482be33b2e3f5dbc169 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40e924f69c0d4de70ed115e5c543d2676b0a05ac34a0b482be33b2e3f5dbc169->enter($__internal_40e924f69c0d4de70ed115e5c543d2676b0a05ac34a0b482be33b2e3f5dbc169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_238b3d66713a3a845f34c1b1b213edbb595934aeb8297697280e7843cbe220aa->leave($__internal_238b3d66713a3a845f34c1b1b213edbb595934aeb8297697280e7843cbe220aa_prof);

        
        $__internal_40e924f69c0d4de70ed115e5c543d2676b0a05ac34a0b482be33b2e3f5dbc169->leave($__internal_40e924f69c0d4de70ed115e5c543d2676b0a05ac34a0b482be33b2e3f5dbc169_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
