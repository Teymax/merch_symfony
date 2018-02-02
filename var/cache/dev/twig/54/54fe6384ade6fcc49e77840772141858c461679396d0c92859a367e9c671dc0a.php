<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6c5238d25e558ab0712ba60ebeb4861ce05cfd15327fa97855d638c5209d07c7 extends Twig_Template
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
        $__internal_38a50bab978ea1d3fce1dd630f65608fe023813cd9885dbb978953f5e2488242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38a50bab978ea1d3fce1dd630f65608fe023813cd9885dbb978953f5e2488242->enter($__internal_38a50bab978ea1d3fce1dd630f65608fe023813cd9885dbb978953f5e2488242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_1b77811f22474e00347adf15efd99c8a72df5c5b78f3d2ac86fd0a33f95da557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b77811f22474e00347adf15efd99c8a72df5c5b78f3d2ac86fd0a33f95da557->enter($__internal_1b77811f22474e00347adf15efd99c8a72df5c5b78f3d2ac86fd0a33f95da557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_38a50bab978ea1d3fce1dd630f65608fe023813cd9885dbb978953f5e2488242->leave($__internal_38a50bab978ea1d3fce1dd630f65608fe023813cd9885dbb978953f5e2488242_prof);

        
        $__internal_1b77811f22474e00347adf15efd99c8a72df5c5b78f3d2ac86fd0a33f95da557->leave($__internal_1b77811f22474e00347adf15efd99c8a72df5c5b78f3d2ac86fd0a33f95da557_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
