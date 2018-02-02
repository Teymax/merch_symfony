<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_12f52f7ee60d0491dcdaf9efbf7aeda4ed9a59e17058ad9559bdf5a8e0a2c5e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_96f750cdbf005401077a9948a8f86cfd6b4af49c94f1567de5cb5760337c4ab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96f750cdbf005401077a9948a8f86cfd6b4af49c94f1567de5cb5760337c4ab3->enter($__internal_96f750cdbf005401077a9948a8f86cfd6b4af49c94f1567de5cb5760337c4ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_028163197a76f6fb8580d463281b68cb331a64fc29899222ac53d9bfc108eeb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_028163197a76f6fb8580d463281b68cb331a64fc29899222ac53d9bfc108eeb5->enter($__internal_028163197a76f6fb8580d463281b68cb331a64fc29899222ac53d9bfc108eeb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96f750cdbf005401077a9948a8f86cfd6b4af49c94f1567de5cb5760337c4ab3->leave($__internal_96f750cdbf005401077a9948a8f86cfd6b4af49c94f1567de5cb5760337c4ab3_prof);

        
        $__internal_028163197a76f6fb8580d463281b68cb331a64fc29899222ac53d9bfc108eeb5->leave($__internal_028163197a76f6fb8580d463281b68cb331a64fc29899222ac53d9bfc108eeb5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0dd090c9a742c38c009e728de96fe80b0293c8f89640e0a4d86650d83cd5f0e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dd090c9a742c38c009e728de96fe80b0293c8f89640e0a4d86650d83cd5f0e0->enter($__internal_0dd090c9a742c38c009e728de96fe80b0293c8f89640e0a4d86650d83cd5f0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7da0657bf0181e4f25581a22e90262d5b9cb87f7a2f8bd8e2081acff286dfb15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7da0657bf0181e4f25581a22e90262d5b9cb87f7a2f8bd8e2081acff286dfb15->enter($__internal_7da0657bf0181e4f25581a22e90262d5b9cb87f7a2f8bd8e2081acff286dfb15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_7da0657bf0181e4f25581a22e90262d5b9cb87f7a2f8bd8e2081acff286dfb15->leave($__internal_7da0657bf0181e4f25581a22e90262d5b9cb87f7a2f8bd8e2081acff286dfb15_prof);

        
        $__internal_0dd090c9a742c38c009e728de96fe80b0293c8f89640e0a4d86650d83cd5f0e0->leave($__internal_0dd090c9a742c38c009e728de96fe80b0293c8f89640e0a4d86650d83cd5f0e0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5c1ff662d185a6ec0e19c4e229c463b7501273fbd9646a3c04316e30694bd67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5c1ff662d185a6ec0e19c4e229c463b7501273fbd9646a3c04316e30694bd67->enter($__internal_f5c1ff662d185a6ec0e19c4e229c463b7501273fbd9646a3c04316e30694bd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d07dd6c3e65f9465bc826e30db3d62ead96d52222989d05d90eed669303ccf67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d07dd6c3e65f9465bc826e30db3d62ead96d52222989d05d90eed669303ccf67->enter($__internal_d07dd6c3e65f9465bc826e30db3d62ead96d52222989d05d90eed669303ccf67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_d07dd6c3e65f9465bc826e30db3d62ead96d52222989d05d90eed669303ccf67->leave($__internal_d07dd6c3e65f9465bc826e30db3d62ead96d52222989d05d90eed669303ccf67_prof);

        
        $__internal_f5c1ff662d185a6ec0e19c4e229c463b7501273fbd9646a3c04316e30694bd67->leave($__internal_f5c1ff662d185a6ec0e19c4e229c463b7501273fbd9646a3c04316e30694bd67_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1cd9f52627914104bf2d27a51102d92b0e1582e386a504aeae12e42caa8a3fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1cd9f52627914104bf2d27a51102d92b0e1582e386a504aeae12e42caa8a3fa->enter($__internal_e1cd9f52627914104bf2d27a51102d92b0e1582e386a504aeae12e42caa8a3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e0eb2d0613ddd31f128470e2b87a615048402e11e85cbb25884a6ba8cb8a2be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0eb2d0613ddd31f128470e2b87a615048402e11e85cbb25884a6ba8cb8a2be4->enter($__internal_e0eb2d0613ddd31f128470e2b87a615048402e11e85cbb25884a6ba8cb8a2be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e0eb2d0613ddd31f128470e2b87a615048402e11e85cbb25884a6ba8cb8a2be4->leave($__internal_e0eb2d0613ddd31f128470e2b87a615048402e11e85cbb25884a6ba8cb8a2be4_prof);

        
        $__internal_e1cd9f52627914104bf2d27a51102d92b0e1582e386a504aeae12e42caa8a3fa->leave($__internal_e1cd9f52627914104bf2d27a51102d92b0e1582e386a504aeae12e42caa8a3fa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
