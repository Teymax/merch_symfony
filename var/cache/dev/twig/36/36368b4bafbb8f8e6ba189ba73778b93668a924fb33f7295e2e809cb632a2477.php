<?php

/* product/new.html.twig */
class __TwigTemplate_bae5ebceb79d3e49fd913f704a90e03d09f62c8b7c4313ac0c1c57b45d0ba301 extends Twig_Template
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
        $__internal_da128325905f3c262ddb2d81841c19c80d3c396009ebe86c40d057ea100725a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da128325905f3c262ddb2d81841c19c80d3c396009ebe86c40d057ea100725a9->enter($__internal_da128325905f3c262ddb2d81841c19c80d3c396009ebe86c40d057ea100725a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/new.html.twig"));

        $__internal_f310a256fe289b7a35c48aed0eea710eec0fbca180887f3a0a1142efe4987a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f310a256fe289b7a35c48aed0eea710eec0fbca180887f3a0a1142efe4987a0f->enter($__internal_f310a256fe289b7a35c48aed0eea710eec0fbca180887f3a0a1142efe4987a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/new.html.twig"));

        // line 2
        echo "<h1>Adding a new product</h1>

";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'form_start');
        echo "
    ";
        // line 6
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "brochure", array()), 'row');
        echo "
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "

<a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 10, $this->getSourceContext()); })()), "brochure", array()))), "html", null, true);
        echo "\">View brochure (PDF)</a>";
        
        $__internal_da128325905f3c262ddb2d81841c19c80d3c396009ebe86c40d057ea100725a9->leave($__internal_da128325905f3c262ddb2d81841c19c80d3c396009ebe86c40d057ea100725a9_prof);

        
        $__internal_f310a256fe289b7a35c48aed0eea710eec0fbca180887f3a0a1142efe4987a0f->leave($__internal_f310a256fe289b7a35c48aed0eea710eec0fbca180887f3a0a1142efe4987a0f_prof);

    }

    public function getTemplateName()
    {
        return "product/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  40 => 8,  36 => 7,  33 => 6,  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# templates/product/new.html.twig #}
<h1>Adding a new product</h1>

{{ form_start(form) }}
    {# ... #}

    {{ form_row(form.brochure) }}
{{ form_end(form) }}

<a href=\"{{ asset('uploads/brochures/' ~ product.brochure) }}\">View brochure (PDF)</a>", "product/new.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\product\\new.html.twig");
    }
}
