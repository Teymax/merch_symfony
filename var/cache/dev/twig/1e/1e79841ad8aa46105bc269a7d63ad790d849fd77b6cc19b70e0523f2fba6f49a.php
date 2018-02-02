<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_e8ec883cafdd66b5afb5985de904b46a130812260f9a16dab848686c508cf29b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70de21a4b6a7e325a61bccf54677bc143f7c914ba79b120c21ac89fe2ba4daee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70de21a4b6a7e325a61bccf54677bc143f7c914ba79b120c21ac89fe2ba4daee->enter($__internal_70de21a4b6a7e325a61bccf54677bc143f7c914ba79b120c21ac89fe2ba4daee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_d7eda05ed758f020b41e396f0b0583d611fbc062f268a4a180b9ec7c88d4994c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7eda05ed758f020b41e396f0b0583d611fbc062f268a4a180b9ec7c88d4994c->enter($__internal_d7eda05ed758f020b41e396f0b0583d611fbc062f268a4a180b9ec7c88d4994c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70de21a4b6a7e325a61bccf54677bc143f7c914ba79b120c21ac89fe2ba4daee->leave($__internal_70de21a4b6a7e325a61bccf54677bc143f7c914ba79b120c21ac89fe2ba4daee_prof);

        
        $__internal_d7eda05ed758f020b41e396f0b0583d611fbc062f268a4a180b9ec7c88d4994c->leave($__internal_d7eda05ed758f020b41e396f0b0583d611fbc062f268a4a180b9ec7c88d4994c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8d95b9755ed07cfd976084f922c4748c7ee065665fb6757fa24210f3b67adba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d95b9755ed07cfd976084f922c4748c7ee065665fb6757fa24210f3b67adba5->enter($__internal_8d95b9755ed07cfd976084f922c4748c7ee065665fb6757fa24210f3b67adba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f813b56413d467a549abaae85771b07e0186fb839e1f9b437e1d1ba0e5ff1c7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f813b56413d467a549abaae85771b07e0186fb839e1f9b437e1d1ba0e5ff1c7e->enter($__internal_f813b56413d467a549abaae85771b07e0186fb839e1f9b437e1d1ba0e5ff1c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f813b56413d467a549abaae85771b07e0186fb839e1f9b437e1d1ba0e5ff1c7e->leave($__internal_f813b56413d467a549abaae85771b07e0186fb839e1f9b437e1d1ba0e5ff1c7e_prof);

        
        $__internal_8d95b9755ed07cfd976084f922c4748c7ee065665fb6757fa24210f3b67adba5->leave($__internal_8d95b9755ed07cfd976084f922c4748c7ee065665fb6757fa24210f3b67adba5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_42507652107caded3609727243e4dd138a7ccc54b75a6e2e8e0731c47dbf205d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42507652107caded3609727243e4dd138a7ccc54b75a6e2e8e0731c47dbf205d->enter($__internal_42507652107caded3609727243e4dd138a7ccc54b75a6e2e8e0731c47dbf205d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_175ad84efafa016a677ab82fccb9e6d6f95a92f3f8c66b1133acb22684227361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_175ad84efafa016a677ab82fccb9e6d6f95a92f3f8c66b1133acb22684227361->enter($__internal_175ad84efafa016a677ab82fccb9e6d6f95a92f3f8c66b1133acb22684227361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_175ad84efafa016a677ab82fccb9e6d6f95a92f3f8c66b1133acb22684227361->leave($__internal_175ad84efafa016a677ab82fccb9e6d6f95a92f3f8c66b1133acb22684227361_prof);

        
        $__internal_42507652107caded3609727243e4dd138a7ccc54b75a6e2e8e0731c47dbf205d->leave($__internal_42507652107caded3609727243e4dd138a7ccc54b75a6e2e8e0731c47dbf205d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
