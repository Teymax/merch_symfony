<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_e00aff14fe1de910acf31aefefea2924b280e8a9c66e5881812310a6e36d26c5 extends Twig_Template
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
        $__internal_d1631c05cd94a1415e570fc291614e3339b149a354e5d0de5a15377ffd81556e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1631c05cd94a1415e570fc291614e3339b149a354e5d0de5a15377ffd81556e->enter($__internal_d1631c05cd94a1415e570fc291614e3339b149a354e5d0de5a15377ffd81556e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_b041d64793e2df04395d4f00a1befeb158595f426aeb4dcd167a35d3aaa99d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b041d64793e2df04395d4f00a1befeb158595f426aeb4dcd167a35d3aaa99d20->enter($__internal_b041d64793e2df04395d4f00a1befeb158595f426aeb4dcd167a35d3aaa99d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d1631c05cd94a1415e570fc291614e3339b149a354e5d0de5a15377ffd81556e->leave($__internal_d1631c05cd94a1415e570fc291614e3339b149a354e5d0de5a15377ffd81556e_prof);

        
        $__internal_b041d64793e2df04395d4f00a1befeb158595f426aeb4dcd167a35d3aaa99d20->leave($__internal_b041d64793e2df04395d4f00a1befeb158595f426aeb4dcd167a35d3aaa99d20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
