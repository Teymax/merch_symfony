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
        $__internal_347635083f8b3aeb467014e39620d1eae70142b5173d80a7e68a3c26d90937ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_347635083f8b3aeb467014e39620d1eae70142b5173d80a7e68a3c26d90937ba->enter($__internal_347635083f8b3aeb467014e39620d1eae70142b5173d80a7e68a3c26d90937ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_2d56246928e2c30838f2f64b019618d70030fe7e6e0a065bcb29fd97972400f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d56246928e2c30838f2f64b019618d70030fe7e6e0a065bcb29fd97972400f7->enter($__internal_2d56246928e2c30838f2f64b019618d70030fe7e6e0a065bcb29fd97972400f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_347635083f8b3aeb467014e39620d1eae70142b5173d80a7e68a3c26d90937ba->leave($__internal_347635083f8b3aeb467014e39620d1eae70142b5173d80a7e68a3c26d90937ba_prof);

        
        $__internal_2d56246928e2c30838f2f64b019618d70030fe7e6e0a065bcb29fd97972400f7->leave($__internal_2d56246928e2c30838f2f64b019618d70030fe7e6e0a065bcb29fd97972400f7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_64fccca31cf7c3b316d816b78fefb9a56a38b6853df2d9eb84a2181a6052c081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64fccca31cf7c3b316d816b78fefb9a56a38b6853df2d9eb84a2181a6052c081->enter($__internal_64fccca31cf7c3b316d816b78fefb9a56a38b6853df2d9eb84a2181a6052c081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_81ee21c0dfaa51db9752484bc82b7eecea63222d9736d365232e244ad0346593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81ee21c0dfaa51db9752484bc82b7eecea63222d9736d365232e244ad0346593->enter($__internal_81ee21c0dfaa51db9752484bc82b7eecea63222d9736d365232e244ad0346593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_81ee21c0dfaa51db9752484bc82b7eecea63222d9736d365232e244ad0346593->leave($__internal_81ee21c0dfaa51db9752484bc82b7eecea63222d9736d365232e244ad0346593_prof);

        
        $__internal_64fccca31cf7c3b316d816b78fefb9a56a38b6853df2d9eb84a2181a6052c081->leave($__internal_64fccca31cf7c3b316d816b78fefb9a56a38b6853df2d9eb84a2181a6052c081_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_cfd8c4342b646684ae417f85b03af5c0c0c7d7e096a4a7fbfccd7216a7adf8c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfd8c4342b646684ae417f85b03af5c0c0c7d7e096a4a7fbfccd7216a7adf8c3->enter($__internal_cfd8c4342b646684ae417f85b03af5c0c0c7d7e096a4a7fbfccd7216a7adf8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f70f1977cb118a9b7d30f739aa961aa1c841a0f43946716e4e9cd50997b7ace0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f70f1977cb118a9b7d30f739aa961aa1c841a0f43946716e4e9cd50997b7ace0->enter($__internal_f70f1977cb118a9b7d30f739aa961aa1c841a0f43946716e4e9cd50997b7ace0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_f70f1977cb118a9b7d30f739aa961aa1c841a0f43946716e4e9cd50997b7ace0->leave($__internal_f70f1977cb118a9b7d30f739aa961aa1c841a0f43946716e4e9cd50997b7ace0_prof);

        
        $__internal_cfd8c4342b646684ae417f85b03af5c0c0c7d7e096a4a7fbfccd7216a7adf8c3->leave($__internal_cfd8c4342b646684ae417f85b03af5c0c0c7d7e096a4a7fbfccd7216a7adf8c3_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9ede329cdfbd06f3c6c2dd081ddd894260deff2347a737de0ef3ed864a1058c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9ede329cdfbd06f3c6c2dd081ddd894260deff2347a737de0ef3ed864a1058c->enter($__internal_d9ede329cdfbd06f3c6c2dd081ddd894260deff2347a737de0ef3ed864a1058c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_49c9b3f9ddeabe6c23bb1bd15c96f61f53ef682969548596f0c5cda7bc61f2ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49c9b3f9ddeabe6c23bb1bd15c96f61f53ef682969548596f0c5cda7bc61f2ef->enter($__internal_49c9b3f9ddeabe6c23bb1bd15c96f61f53ef682969548596f0c5cda7bc61f2ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_49c9b3f9ddeabe6c23bb1bd15c96f61f53ef682969548596f0c5cda7bc61f2ef->leave($__internal_49c9b3f9ddeabe6c23bb1bd15c96f61f53ef682969548596f0c5cda7bc61f2ef_prof);

        
        $__internal_d9ede329cdfbd06f3c6c2dd081ddd894260deff2347a737de0ef3ed864a1058c->leave($__internal_d9ede329cdfbd06f3c6c2dd081ddd894260deff2347a737de0ef3ed864a1058c_prof);

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
