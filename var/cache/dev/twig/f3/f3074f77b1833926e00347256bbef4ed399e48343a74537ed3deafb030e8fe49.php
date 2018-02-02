<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ecafb48eb2f175dab855a55db909f24af72e1e136718db3a999c512acbb1cdac extends Twig_Template
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
        $__internal_16590869bfe73d2fcc512ad26ad1d75f517ed6ca34b83ec5581a23104fcdf1b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16590869bfe73d2fcc512ad26ad1d75f517ed6ca34b83ec5581a23104fcdf1b8->enter($__internal_16590869bfe73d2fcc512ad26ad1d75f517ed6ca34b83ec5581a23104fcdf1b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_d7c08e26c495d8e855aeacb97bda8c573311b5f79aad08cf57a0d1f464ff5c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c08e26c495d8e855aeacb97bda8c573311b5f79aad08cf57a0d1f464ff5c32->enter($__internal_d7c08e26c495d8e855aeacb97bda8c573311b5f79aad08cf57a0d1f464ff5c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_16590869bfe73d2fcc512ad26ad1d75f517ed6ca34b83ec5581a23104fcdf1b8->leave($__internal_16590869bfe73d2fcc512ad26ad1d75f517ed6ca34b83ec5581a23104fcdf1b8_prof);

        
        $__internal_d7c08e26c495d8e855aeacb97bda8c573311b5f79aad08cf57a0d1f464ff5c32->leave($__internal_d7c08e26c495d8e855aeacb97bda8c573311b5f79aad08cf57a0d1f464ff5c32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
