<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_9291cb4c103d7d8522902289455884f4f9d2c5020a6680e5ab60e22def36b186 extends Twig_Template
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
        $__internal_b93ed31a55aa7861f0321c2d9b2b4c0a3850958f8c48ec27a0a241e770f9fdd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b93ed31a55aa7861f0321c2d9b2b4c0a3850958f8c48ec27a0a241e770f9fdd6->enter($__internal_b93ed31a55aa7861f0321c2d9b2b4c0a3850958f8c48ec27a0a241e770f9fdd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_a54f2d9c836ff962a25775864b60a6268e4658ef39dd0cd311eda8d3ade16ebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a54f2d9c836ff962a25775864b60a6268e4658ef39dd0cd311eda8d3ade16ebe->enter($__internal_a54f2d9c836ff962a25775864b60a6268e4658ef39dd0cd311eda8d3ade16ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_b93ed31a55aa7861f0321c2d9b2b4c0a3850958f8c48ec27a0a241e770f9fdd6->leave($__internal_b93ed31a55aa7861f0321c2d9b2b4c0a3850958f8c48ec27a0a241e770f9fdd6_prof);

        
        $__internal_a54f2d9c836ff962a25775864b60a6268e4658ef39dd0cd311eda8d3ade16ebe->leave($__internal_a54f2d9c836ff962a25775864b60a6268e4658ef39dd0cd311eda8d3ade16ebe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
