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
        $__internal_2de8e2e1bee264ff93e8e386766cc425fb5ad2d59a0a830d34e4dc93567f4b9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2de8e2e1bee264ff93e8e386766cc425fb5ad2d59a0a830d34e4dc93567f4b9b->enter($__internal_2de8e2e1bee264ff93e8e386766cc425fb5ad2d59a0a830d34e4dc93567f4b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_bd8a5e4677d69d690be39950fd10cdf45d3c4fa8dab94c019d3c33f86df9220a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd8a5e4677d69d690be39950fd10cdf45d3c4fa8dab94c019d3c33f86df9220a->enter($__internal_bd8a5e4677d69d690be39950fd10cdf45d3c4fa8dab94c019d3c33f86df9220a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_2de8e2e1bee264ff93e8e386766cc425fb5ad2d59a0a830d34e4dc93567f4b9b->leave($__internal_2de8e2e1bee264ff93e8e386766cc425fb5ad2d59a0a830d34e4dc93567f4b9b_prof);

        
        $__internal_bd8a5e4677d69d690be39950fd10cdf45d3c4fa8dab94c019d3c33f86df9220a->leave($__internal_bd8a5e4677d69d690be39950fd10cdf45d3c4fa8dab94c019d3c33f86df9220a_prof);

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
