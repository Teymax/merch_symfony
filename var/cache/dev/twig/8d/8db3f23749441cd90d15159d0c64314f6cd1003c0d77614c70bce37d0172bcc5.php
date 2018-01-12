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
        $__internal_2794a5e8da8846355dffaa8c5908cea42825705835321ac25e7e2ebe715cd727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2794a5e8da8846355dffaa8c5908cea42825705835321ac25e7e2ebe715cd727->enter($__internal_2794a5e8da8846355dffaa8c5908cea42825705835321ac25e7e2ebe715cd727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d35eae65e1fd7f6b725ddf532cb993e20d3fd6c4fa5ae95294156daa76257a75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d35eae65e1fd7f6b725ddf532cb993e20d3fd6c4fa5ae95294156daa76257a75->enter($__internal_d35eae65e1fd7f6b725ddf532cb993e20d3fd6c4fa5ae95294156daa76257a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2794a5e8da8846355dffaa8c5908cea42825705835321ac25e7e2ebe715cd727->leave($__internal_2794a5e8da8846355dffaa8c5908cea42825705835321ac25e7e2ebe715cd727_prof);

        
        $__internal_d35eae65e1fd7f6b725ddf532cb993e20d3fd6c4fa5ae95294156daa76257a75->leave($__internal_d35eae65e1fd7f6b725ddf532cb993e20d3fd6c4fa5ae95294156daa76257a75_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cacecec8ee6671758ac76e3b54e00555a9b76968d79f98ef7e4f4cb0caded113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cacecec8ee6671758ac76e3b54e00555a9b76968d79f98ef7e4f4cb0caded113->enter($__internal_cacecec8ee6671758ac76e3b54e00555a9b76968d79f98ef7e4f4cb0caded113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eb22b00cbb0a260e22c679f7c1b7134dd45fe2a5845223f484407ee86ad560bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb22b00cbb0a260e22c679f7c1b7134dd45fe2a5845223f484407ee86ad560bc->enter($__internal_eb22b00cbb0a260e22c679f7c1b7134dd45fe2a5845223f484407ee86ad560bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_eb22b00cbb0a260e22c679f7c1b7134dd45fe2a5845223f484407ee86ad560bc->leave($__internal_eb22b00cbb0a260e22c679f7c1b7134dd45fe2a5845223f484407ee86ad560bc_prof);

        
        $__internal_cacecec8ee6671758ac76e3b54e00555a9b76968d79f98ef7e4f4cb0caded113->leave($__internal_cacecec8ee6671758ac76e3b54e00555a9b76968d79f98ef7e4f4cb0caded113_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_47b19f67fb175f1396207839753c063d3439b65b545a727e72bf9cba699cb711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47b19f67fb175f1396207839753c063d3439b65b545a727e72bf9cba699cb711->enter($__internal_47b19f67fb175f1396207839753c063d3439b65b545a727e72bf9cba699cb711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e8231dd85fe507bf6dc4415ad7ec55d0727cb032580924be2ce325ef34d0b3b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8231dd85fe507bf6dc4415ad7ec55d0727cb032580924be2ce325ef34d0b3b9->enter($__internal_e8231dd85fe507bf6dc4415ad7ec55d0727cb032580924be2ce325ef34d0b3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_e8231dd85fe507bf6dc4415ad7ec55d0727cb032580924be2ce325ef34d0b3b9->leave($__internal_e8231dd85fe507bf6dc4415ad7ec55d0727cb032580924be2ce325ef34d0b3b9_prof);

        
        $__internal_47b19f67fb175f1396207839753c063d3439b65b545a727e72bf9cba699cb711->leave($__internal_47b19f67fb175f1396207839753c063d3439b65b545a727e72bf9cba699cb711_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a648ce2381c06ccc8a69bc7a8bf5d598a788e03c0c6e357398fa97693a8b17f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a648ce2381c06ccc8a69bc7a8bf5d598a788e03c0c6e357398fa97693a8b17f6->enter($__internal_a648ce2381c06ccc8a69bc7a8bf5d598a788e03c0c6e357398fa97693a8b17f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2d415dab4c4f6fc16928a28bfa0b77e327c8ef18427153334a1612a40dea2b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d415dab4c4f6fc16928a28bfa0b77e327c8ef18427153334a1612a40dea2b82->enter($__internal_2d415dab4c4f6fc16928a28bfa0b77e327c8ef18427153334a1612a40dea2b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_2d415dab4c4f6fc16928a28bfa0b77e327c8ef18427153334a1612a40dea2b82->leave($__internal_2d415dab4c4f6fc16928a28bfa0b77e327c8ef18427153334a1612a40dea2b82_prof);

        
        $__internal_a648ce2381c06ccc8a69bc7a8bf5d598a788e03c0c6e357398fa97693a8b17f6->leave($__internal_a648ce2381c06ccc8a69bc7a8bf5d598a788e03c0c6e357398fa97693a8b17f6_prof);

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
