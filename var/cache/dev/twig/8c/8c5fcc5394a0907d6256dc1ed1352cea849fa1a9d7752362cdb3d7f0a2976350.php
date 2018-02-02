<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_9b1dd1110214af21eb1414445a7225b2a0078be60f71019ea3bf9b5f55cfdf8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86026532655c522f284c99c37b2fd0ea47114e001edb0f1bb4f307f556394c94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86026532655c522f284c99c37b2fd0ea47114e001edb0f1bb4f307f556394c94->enter($__internal_86026532655c522f284c99c37b2fd0ea47114e001edb0f1bb4f307f556394c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_f27b6156c334c1089a05dbca1f72cc3ba218077d4d96637eeb4bbeada8109cc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f27b6156c334c1089a05dbca1f72cc3ba218077d4d96637eeb4bbeada8109cc0->enter($__internal_f27b6156c334c1089a05dbca1f72cc3ba218077d4d96637eeb4bbeada8109cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86026532655c522f284c99c37b2fd0ea47114e001edb0f1bb4f307f556394c94->leave($__internal_86026532655c522f284c99c37b2fd0ea47114e001edb0f1bb4f307f556394c94_prof);

        
        $__internal_f27b6156c334c1089a05dbca1f72cc3ba218077d4d96637eeb4bbeada8109cc0->leave($__internal_f27b6156c334c1089a05dbca1f72cc3ba218077d4d96637eeb4bbeada8109cc0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_894fe4063af3a939e07bafce603b45216343b3fc24ee40a93722fc3ab6f00265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_894fe4063af3a939e07bafce603b45216343b3fc24ee40a93722fc3ab6f00265->enter($__internal_894fe4063af3a939e07bafce603b45216343b3fc24ee40a93722fc3ab6f00265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ff76fc3e9bb34ef005d8cf883ebdef4467f2ec2eee9c73bc1f4a9b0748d7f7f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff76fc3e9bb34ef005d8cf883ebdef4467f2ec2eee9c73bc1f4a9b0748d7f7f9->enter($__internal_ff76fc3e9bb34ef005d8cf883ebdef4467f2ec2eee9c73bc1f4a9b0748d7f7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ff76fc3e9bb34ef005d8cf883ebdef4467f2ec2eee9c73bc1f4a9b0748d7f7f9->leave($__internal_ff76fc3e9bb34ef005d8cf883ebdef4467f2ec2eee9c73bc1f4a9b0748d7f7f9_prof);

        
        $__internal_894fe4063af3a939e07bafce603b45216343b3fc24ee40a93722fc3ab6f00265->leave($__internal_894fe4063af3a939e07bafce603b45216343b3fc24ee40a93722fc3ab6f00265_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a13f61c35ee19165f3c6b536cb2fb886a560261f07f5546718c7d4335fffe098 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a13f61c35ee19165f3c6b536cb2fb886a560261f07f5546718c7d4335fffe098->enter($__internal_a13f61c35ee19165f3c6b536cb2fb886a560261f07f5546718c7d4335fffe098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9d8f23ece7d83c81574924b4bb410500ba74a0f8cdca62244b5c3b5b8de08fbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d8f23ece7d83c81574924b4bb410500ba74a0f8cdca62244b5c3b5b8de08fbc->enter($__internal_9d8f23ece7d83c81574924b4bb410500ba74a0f8cdca62244b5c3b5b8de08fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_9d8f23ece7d83c81574924b4bb410500ba74a0f8cdca62244b5c3b5b8de08fbc->leave($__internal_9d8f23ece7d83c81574924b4bb410500ba74a0f8cdca62244b5c3b5b8de08fbc_prof);

        
        $__internal_a13f61c35ee19165f3c6b536cb2fb886a560261f07f5546718c7d4335fffe098->leave($__internal_a13f61c35ee19165f3c6b536cb2fb886a560261f07f5546718c7d4335fffe098_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
