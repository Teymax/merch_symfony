<?php

/* admin/admin1.html.twig */
class __TwigTemplate_dc8e1ba4e2481a3573013edf9983173f1284dbbd8cd5ce8bb6782318eb28b033 extends Twig_Template
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
        $__internal_3db81fb478fa4f3d2c94962f39fbd0eb5d999387ba4a2663abcc5fee7f29980a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3db81fb478fa4f3d2c94962f39fbd0eb5d999387ba4a2663abcc5fee7f29980a->enter($__internal_3db81fb478fa4f3d2c94962f39fbd0eb5d999387ba4a2663abcc5fee7f29980a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin1.html.twig"));

        $__internal_84f9774b0dd85ae6308ec8affd06f8a11c08da414342085d9f00dc632ac4bc26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f9774b0dd85ae6308ec8affd06f8a11c08da414342085d9f00dc632ac4bc26->enter($__internal_84f9774b0dd85ae6308ec8affd06f8a11c08da414342085d9f00dc632ac4bc26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin1.html.twig"));

        // line 1
        echo "           ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), 'form_start');
        echo "
            <button type=\"submit\" class=\"btn btn-info\" style=\"display: none\">Update</button>
            ";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_end');
        echo "
           <!-- Scripts -->
    <script src=\"../assets/js/core.min.js\"></script>
    <script type=\"text/javascript\">
        \$( document ).ready(function() {
            \$( \"form:first\" ).submit();
        });
    </script>
    <script src=\"../assets/js/app.min.js\"></script>
    <script src=\"../assets/js/script.min.js\"></script>
";
        
        $__internal_3db81fb478fa4f3d2c94962f39fbd0eb5d999387ba4a2663abcc5fee7f29980a->leave($__internal_3db81fb478fa4f3d2c94962f39fbd0eb5d999387ba4a2663abcc5fee7f29980a_prof);

        
        $__internal_84f9774b0dd85ae6308ec8affd06f8a11c08da414342085d9f00dc632ac4bc26->leave($__internal_84f9774b0dd85ae6308ec8affd06f8a11c08da414342085d9f00dc632ac4bc26_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("           {{ form_start(form) }}
            <button type=\"submit\" class=\"btn btn-info\" style=\"display: none\">Update</button>
            {{ form_end(form) }}
           <!-- Scripts -->
    <script src=\"../assets/js/core.min.js\"></script>
    <script type=\"text/javascript\">
        \$( document ).ready(function() {
            \$( \"form:first\" ).submit();
        });
    </script>
    <script src=\"../assets/js/app.min.js\"></script>
    <script src=\"../assets/js/script.min.js\"></script>
", "admin/admin1.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\admin\\admin1.html.twig");
    }
}
