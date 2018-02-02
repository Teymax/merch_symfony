<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_967d2da043b1095fd1e14943ab6120f73fa25174796321ddce78de49dd374a73 extends Twig_Template
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
        $__internal_aeeb9178080eaf9ac22089a55ab891cff542b7038a3703a743ed7454451dc03c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeeb9178080eaf9ac22089a55ab891cff542b7038a3703a743ed7454451dc03c->enter($__internal_aeeb9178080eaf9ac22089a55ab891cff542b7038a3703a743ed7454451dc03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_2de327f5ceae92b55f43b2049cac3af2d9f2f084c9db3ccffff0ad9e88db9967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de327f5ceae92b55f43b2049cac3af2d9f2f084c9db3ccffff0ad9e88db9967->enter($__internal_2de327f5ceae92b55f43b2049cac3af2d9f2f084c9db3ccffff0ad9e88db9967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_aeeb9178080eaf9ac22089a55ab891cff542b7038a3703a743ed7454451dc03c->leave($__internal_aeeb9178080eaf9ac22089a55ab891cff542b7038a3703a743ed7454451dc03c_prof);

        
        $__internal_2de327f5ceae92b55f43b2049cac3af2d9f2f084c9db3ccffff0ad9e88db9967->leave($__internal_2de327f5ceae92b55f43b2049cac3af2d9f2f084c9db3ccffff0ad9e88db9967_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
