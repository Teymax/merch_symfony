<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_6faf367a2e7c78ffa814368c2ce48513d57100efc40edf3a0bd377fc7c0fed45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38d708e768f4f800bf58ca5b365da1e98920ad547c63a887440fd6636ae50a94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38d708e768f4f800bf58ca5b365da1e98920ad547c63a887440fd6636ae50a94->enter($__internal_38d708e768f4f800bf58ca5b365da1e98920ad547c63a887440fd6636ae50a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_32fe9497265fcb968147e95acdf69e912c3800f2c2168a648718e31ece27fe97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32fe9497265fcb968147e95acdf69e912c3800f2c2168a648718e31ece27fe97->enter($__internal_32fe9497265fcb968147e95acdf69e912c3800f2c2168a648718e31ece27fe97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38d708e768f4f800bf58ca5b365da1e98920ad547c63a887440fd6636ae50a94->leave($__internal_38d708e768f4f800bf58ca5b365da1e98920ad547c63a887440fd6636ae50a94_prof);

        
        $__internal_32fe9497265fcb968147e95acdf69e912c3800f2c2168a648718e31ece27fe97->leave($__internal_32fe9497265fcb968147e95acdf69e912c3800f2c2168a648718e31ece27fe97_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_6e8b96f44db389f6f90521d484092f604dacfbf33261833bf5e86f44c88674fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e8b96f44db389f6f90521d484092f604dacfbf33261833bf5e86f44c88674fa->enter($__internal_6e8b96f44db389f6f90521d484092f604dacfbf33261833bf5e86f44c88674fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_204b3c41ca53135fa00c029edbb9d8da67b19169f9ade005b3c38df7926ee2fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_204b3c41ca53135fa00c029edbb9d8da67b19169f9ade005b3c38df7926ee2fa->enter($__internal_204b3c41ca53135fa00c029edbb9d8da67b19169f9ade005b3c38df7926ee2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_204b3c41ca53135fa00c029edbb9d8da67b19169f9ade005b3c38df7926ee2fa->leave($__internal_204b3c41ca53135fa00c029edbb9d8da67b19169f9ade005b3c38df7926ee2fa_prof);

        
        $__internal_6e8b96f44db389f6f90521d484092f604dacfbf33261833bf5e86f44c88674fa->leave($__internal_6e8b96f44db389f6f90521d484092f604dacfbf33261833bf5e86f44c88674fa_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a5d9751e0f0e77e71ee143a9f862460cdcbd507804499ef17a3cd4825f437212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5d9751e0f0e77e71ee143a9f862460cdcbd507804499ef17a3cd4825f437212->enter($__internal_a5d9751e0f0e77e71ee143a9f862460cdcbd507804499ef17a3cd4825f437212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4c3a33f113b5cd8ba6577e42e586c032e3c1c9d945ceba570654918ddd3acbc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c3a33f113b5cd8ba6577e42e586c032e3c1c9d945ceba570654918ddd3acbc8->enter($__internal_4c3a33f113b5cd8ba6577e42e586c032e3c1c9d945ceba570654918ddd3acbc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_4c3a33f113b5cd8ba6577e42e586c032e3c1c9d945ceba570654918ddd3acbc8->leave($__internal_4c3a33f113b5cd8ba6577e42e586c032e3c1c9d945ceba570654918ddd3acbc8_prof);

        
        $__internal_a5d9751e0f0e77e71ee143a9f862460cdcbd507804499ef17a3cd4825f437212->leave($__internal_a5d9751e0f0e77e71ee143a9f862460cdcbd507804499ef17a3cd4825f437212_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
