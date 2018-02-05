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
        $__internal_8652184ae9c62151db99ac704bf863ac495bd3a0cd4bd65014d76b2619f64368 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8652184ae9c62151db99ac704bf863ac495bd3a0cd4bd65014d76b2619f64368->enter($__internal_8652184ae9c62151db99ac704bf863ac495bd3a0cd4bd65014d76b2619f64368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_dbd2ba6f1e405599030c42588016260fd5843f0bd77892e2bf45e0e153f6a35f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd2ba6f1e405599030c42588016260fd5843f0bd77892e2bf45e0e153f6a35f->enter($__internal_dbd2ba6f1e405599030c42588016260fd5843f0bd77892e2bf45e0e153f6a35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8652184ae9c62151db99ac704bf863ac495bd3a0cd4bd65014d76b2619f64368->leave($__internal_8652184ae9c62151db99ac704bf863ac495bd3a0cd4bd65014d76b2619f64368_prof);

        
        $__internal_dbd2ba6f1e405599030c42588016260fd5843f0bd77892e2bf45e0e153f6a35f->leave($__internal_dbd2ba6f1e405599030c42588016260fd5843f0bd77892e2bf45e0e153f6a35f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_90311ef42e3e4108a28b045447c3a3b1a4ece27e50f40dd329aced3887d6481e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90311ef42e3e4108a28b045447c3a3b1a4ece27e50f40dd329aced3887d6481e->enter($__internal_90311ef42e3e4108a28b045447c3a3b1a4ece27e50f40dd329aced3887d6481e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_386ffa5677d1f72e74b614036f0376bb180a179ed27268350f727ac403524c0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_386ffa5677d1f72e74b614036f0376bb180a179ed27268350f727ac403524c0f->enter($__internal_386ffa5677d1f72e74b614036f0376bb180a179ed27268350f727ac403524c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_386ffa5677d1f72e74b614036f0376bb180a179ed27268350f727ac403524c0f->leave($__internal_386ffa5677d1f72e74b614036f0376bb180a179ed27268350f727ac403524c0f_prof);

        
        $__internal_90311ef42e3e4108a28b045447c3a3b1a4ece27e50f40dd329aced3887d6481e->leave($__internal_90311ef42e3e4108a28b045447c3a3b1a4ece27e50f40dd329aced3887d6481e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa54a4611c9d2a966f738cab0943ee0198019b0a0ffea5a482e56f24f9c1b6fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa54a4611c9d2a966f738cab0943ee0198019b0a0ffea5a482e56f24f9c1b6fc->enter($__internal_aa54a4611c9d2a966f738cab0943ee0198019b0a0ffea5a482e56f24f9c1b6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_12de200e2470bacb42fbafc259802cabab911009662e2bf0df3346f7d5658404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12de200e2470bacb42fbafc259802cabab911009662e2bf0df3346f7d5658404->enter($__internal_12de200e2470bacb42fbafc259802cabab911009662e2bf0df3346f7d5658404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_12de200e2470bacb42fbafc259802cabab911009662e2bf0df3346f7d5658404->leave($__internal_12de200e2470bacb42fbafc259802cabab911009662e2bf0df3346f7d5658404_prof);

        
        $__internal_aa54a4611c9d2a966f738cab0943ee0198019b0a0ffea5a482e56f24f9c1b6fc->leave($__internal_aa54a4611c9d2a966f738cab0943ee0198019b0a0ffea5a482e56f24f9c1b6fc_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_eee9b7eb4d73bb984aeeb0f42f67e1ec4f58e03479d973b94f8d33131a95f6d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eee9b7eb4d73bb984aeeb0f42f67e1ec4f58e03479d973b94f8d33131a95f6d6->enter($__internal_eee9b7eb4d73bb984aeeb0f42f67e1ec4f58e03479d973b94f8d33131a95f6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b1645711beb5eb000a99c370fa4197bf9e33c3dd3ba4d49c87ebae9617d349b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b1645711beb5eb000a99c370fa4197bf9e33c3dd3ba4d49c87ebae9617d349b->enter($__internal_4b1645711beb5eb000a99c370fa4197bf9e33c3dd3ba4d49c87ebae9617d349b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_4b1645711beb5eb000a99c370fa4197bf9e33c3dd3ba4d49c87ebae9617d349b->leave($__internal_4b1645711beb5eb000a99c370fa4197bf9e33c3dd3ba4d49c87ebae9617d349b_prof);

        
        $__internal_eee9b7eb4d73bb984aeeb0f42f67e1ec4f58e03479d973b94f8d33131a95f6d6->leave($__internal_eee9b7eb4d73bb984aeeb0f42f67e1ec4f58e03479d973b94f8d33131a95f6d6_prof);

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
