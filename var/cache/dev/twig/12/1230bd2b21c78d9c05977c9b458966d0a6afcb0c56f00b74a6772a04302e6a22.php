<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_13ca009cc0ee53eddb64a012f4ad79c076632b8127a7587d5f2414b07415121a extends Twig_Template
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
        $__internal_3c571258a678a5ec9d1797ee3ce223724f3bbbffc7f5bab91f55271f9232d6d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c571258a678a5ec9d1797ee3ce223724f3bbbffc7f5bab91f55271f9232d6d1->enter($__internal_3c571258a678a5ec9d1797ee3ce223724f3bbbffc7f5bab91f55271f9232d6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_49ff084c11dbcdd26873e9868e87f2f6ca4ca6ac6592c0d3e680646645b0a01d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ff084c11dbcdd26873e9868e87f2f6ca4ca6ac6592c0d3e680646645b0a01d->enter($__internal_49ff084c11dbcdd26873e9868e87f2f6ca4ca6ac6592c0d3e680646645b0a01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_3c571258a678a5ec9d1797ee3ce223724f3bbbffc7f5bab91f55271f9232d6d1->leave($__internal_3c571258a678a5ec9d1797ee3ce223724f3bbbffc7f5bab91f55271f9232d6d1_prof);

        
        $__internal_49ff084c11dbcdd26873e9868e87f2f6ca4ca6ac6592c0d3e680646645b0a01d->leave($__internal_49ff084c11dbcdd26873e9868e87f2f6ca4ca6ac6592c0d3e680646645b0a01d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
