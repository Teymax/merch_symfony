<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_e19218dfac6d71833317271e3033d765a94c952c6de57509c6cab2c5c723faa3 extends Twig_Template
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
        $__internal_baf9805c212adf690272fd41cc041665e00242b60ad7cc2f6b7e9d6fdadb46b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baf9805c212adf690272fd41cc041665e00242b60ad7cc2f6b7e9d6fdadb46b3->enter($__internal_baf9805c212adf690272fd41cc041665e00242b60ad7cc2f6b7e9d6fdadb46b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_0da45db603d17bdf7c88ec7e1c0d533d39e713f4caa750db8e2d83adab91e423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da45db603d17bdf7c88ec7e1c0d533d39e713f4caa750db8e2d83adab91e423->enter($__internal_0da45db603d17bdf7c88ec7e1c0d533d39e713f4caa750db8e2d83adab91e423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_baf9805c212adf690272fd41cc041665e00242b60ad7cc2f6b7e9d6fdadb46b3->leave($__internal_baf9805c212adf690272fd41cc041665e00242b60ad7cc2f6b7e9d6fdadb46b3_prof);

        
        $__internal_0da45db603d17bdf7c88ec7e1c0d533d39e713f4caa750db8e2d83adab91e423->leave($__internal_0da45db603d17bdf7c88ec7e1c0d533d39e713f4caa750db8e2d83adab91e423_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
