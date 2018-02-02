<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_50c2e9726523dad4aae085b3eb798ff9acd90f16688e5bfcd839292e47a218ff extends Twig_Template
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
        $__internal_a77b5db824a0715e1a219e5504cdd49f1d669386a1439c4a2576ddcd61542945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a77b5db824a0715e1a219e5504cdd49f1d669386a1439c4a2576ddcd61542945->enter($__internal_a77b5db824a0715e1a219e5504cdd49f1d669386a1439c4a2576ddcd61542945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_610d52eaa5763c20991142d3adcb825a7f73ef9a27d09eb498291e0b6da0d448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_610d52eaa5763c20991142d3adcb825a7f73ef9a27d09eb498291e0b6da0d448->enter($__internal_610d52eaa5763c20991142d3adcb825a7f73ef9a27d09eb498291e0b6da0d448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a77b5db824a0715e1a219e5504cdd49f1d669386a1439c4a2576ddcd61542945->leave($__internal_a77b5db824a0715e1a219e5504cdd49f1d669386a1439c4a2576ddcd61542945_prof);

        
        $__internal_610d52eaa5763c20991142d3adcb825a7f73ef9a27d09eb498291e0b6da0d448->leave($__internal_610d52eaa5763c20991142d3adcb825a7f73ef9a27d09eb498291e0b6da0d448_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
