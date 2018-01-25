<?php

/* masterList/masterListEdit.html.twig */
class __TwigTemplate_c86fdcf53a52c5f370578ae4b6689b34a2a11036d54b3cd6e8b1a83b8d5fa849 extends Twig_Template
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
        $__internal_761580dcebb562a00561657fcd96261680e26c2e065d7e0dbc09b7f85bf951c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_761580dcebb562a00561657fcd96261680e26c2e065d7e0dbc09b7f85bf951c7->enter($__internal_761580dcebb562a00561657fcd96261680e26c2e065d7e0dbc09b7f85bf951c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "masterList/masterListEdit.html.twig"));

        $__internal_d2d10cb2bab2da98ea10a49d7253ece1d4432a7884432606524a42af16478437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2d10cb2bab2da98ea10a49d7253ece1d4432a7884432606524a42af16478437->enter($__internal_d2d10cb2bab2da98ea10a49d7253ece1d4432a7884432606524a42af16478437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "masterList/masterListEdit.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), 'form_start');
        echo "
                    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), "type", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), "fit", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), "color", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), "cost", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), "brand", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "title", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), "bulletOne", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "bulletTwo", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "description", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "userId", array()), 'row', array("attr" => array("id" => "user_ID")));
        echo "
                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), "master_id", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
<button type=\"submit\" class=\"btn btn-info\">Create!</button>
";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_761580dcebb562a00561657fcd96261680e26c2e065d7e0dbc09b7f85bf951c7->leave($__internal_761580dcebb562a00561657fcd96261680e26c2e065d7e0dbc09b7f85bf951c7_prof);

        
        $__internal_d2d10cb2bab2da98ea10a49d7253ece1d4432a7884432606524a42af16478437->leave($__internal_d2d10cb2bab2da98ea10a49d7253ece1d4432a7884432606524a42af16478437_prof);

    }

    public function getTemplateName()
    {
        return "masterList/masterListEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 14,  69 => 12,  65 => 11,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  45 => 6,  41 => 5,  37 => 4,  33 => 3,  29 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form) }}
                    {{ form_row(form.type, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_row(form.fit, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_row(form.color, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_row(form.cost, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_row(form.brand, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_row(form.title, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_row(form.bulletOne, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_row(form.bulletTwo, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_row(form.description, { 'attr': {'class': 'form-control'} }) }}
                    {{ form_row(form.userId, { 'attr': {'id': 'user_ID'} }) }}
                    {{ form_row(form.master_id, { 'attr': {'class': 'form-control'} }) }}
<button type=\"submit\" class=\"btn btn-info\">Create!</button>
{{ form_end(form) }}", "masterList/masterListEdit.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\masterList\\masterListEdit.html.twig");
    }
}
