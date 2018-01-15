<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_0d4eb7ef9689588b9ab1c46c770e541c6c0da3225fdf16a99527802866f8f7c5 extends Twig_Template
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
        $__internal_5407934f8d635858367a440c420243cc36b70a143dbd6ac48b74f3e53da086ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5407934f8d635858367a440c420243cc36b70a143dbd6ac48b74f3e53da086ed->enter($__internal_5407934f8d635858367a440c420243cc36b70a143dbd6ac48b74f3e53da086ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_60844bea1453def42d01b2a20ce768f7c08b7d6efd0734d6a922893f195940e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60844bea1453def42d01b2a20ce768f7c08b7d6efd0734d6a922893f195940e6->enter($__internal_60844bea1453def42d01b2a20ce768f7c08b7d6efd0734d6a922893f195940e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_5407934f8d635858367a440c420243cc36b70a143dbd6ac48b74f3e53da086ed->leave($__internal_5407934f8d635858367a440c420243cc36b70a143dbd6ac48b74f3e53da086ed_prof);

        
        $__internal_60844bea1453def42d01b2a20ce768f7c08b7d6efd0734d6a922893f195940e6->leave($__internal_60844bea1453def42d01b2a20ce768f7c08b7d6efd0734d6a922893f195940e6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
