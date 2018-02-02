<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_6ab0b63fe3e6018c276b5e1476d0204b286e65baacd9a2abc63c5405d2f69b55 extends Twig_Template
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
        $__internal_c0f32827d7abec5ed77db1b6477a06e679ea104415c3f5e032b3fa2feb4227d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0f32827d7abec5ed77db1b6477a06e679ea104415c3f5e032b3fa2feb4227d1->enter($__internal_c0f32827d7abec5ed77db1b6477a06e679ea104415c3f5e032b3fa2feb4227d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_6594100661ff389c29d09e1e547f29e98804d3bb1ebac6f7908f2db7210a3785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6594100661ff389c29d09e1e547f29e98804d3bb1ebac6f7908f2db7210a3785->enter($__internal_6594100661ff389c29d09e1e547f29e98804d3bb1ebac6f7908f2db7210a3785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c0f32827d7abec5ed77db1b6477a06e679ea104415c3f5e032b3fa2feb4227d1->leave($__internal_c0f32827d7abec5ed77db1b6477a06e679ea104415c3f5e032b3fa2feb4227d1_prof);

        
        $__internal_6594100661ff389c29d09e1e547f29e98804d3bb1ebac6f7908f2db7210a3785->leave($__internal_6594100661ff389c29d09e1e547f29e98804d3bb1ebac6f7908f2db7210a3785_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
