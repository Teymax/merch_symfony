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
        $__internal_23b609b166728ab21e82522c84019e9f4cc138c271373f7da43d0acfe81a753f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23b609b166728ab21e82522c84019e9f4cc138c271373f7da43d0acfe81a753f->enter($__internal_23b609b166728ab21e82522c84019e9f4cc138c271373f7da43d0acfe81a753f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin1.html.twig"));

        $__internal_311414816667d1130afcc96f3e4b781fa58b2929f01477b68167b17be4fb9663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_311414816667d1130afcc96f3e4b781fa58b2929f01477b68167b17be4fb9663->enter($__internal_311414816667d1130afcc96f3e4b781fa58b2929f01477b68167b17be4fb9663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin1.html.twig"));

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
        
        $__internal_23b609b166728ab21e82522c84019e9f4cc138c271373f7da43d0acfe81a753f->leave($__internal_23b609b166728ab21e82522c84019e9f4cc138c271373f7da43d0acfe81a753f_prof);

        
        $__internal_311414816667d1130afcc96f3e4b781fa58b2929f01477b68167b17be4fb9663->leave($__internal_311414816667d1130afcc96f3e4b781fa58b2929f01477b68167b17be4fb9663_prof);

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
