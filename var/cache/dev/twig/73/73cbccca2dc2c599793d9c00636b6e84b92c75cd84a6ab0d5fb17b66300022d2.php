<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_4a0d7e47026ab6ddacff105531403f2aa50134581de0da9f0892f1183589cf04 extends Twig_Template
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
        $__internal_4bb7da3bc9f2f29abb6f981a1f48e6ac8c5aaa9bae9249ec109aab114e18438a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bb7da3bc9f2f29abb6f981a1f48e6ac8c5aaa9bae9249ec109aab114e18438a->enter($__internal_4bb7da3bc9f2f29abb6f981a1f48e6ac8c5aaa9bae9249ec109aab114e18438a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_5acdcd8b25abd848aa9a8f96e34eba736bff8b1f3d47bcf41fd68b4104320cd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5acdcd8b25abd848aa9a8f96e34eba736bff8b1f3d47bcf41fd68b4104320cd5->enter($__internal_5acdcd8b25abd848aa9a8f96e34eba736bff8b1f3d47bcf41fd68b4104320cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_4bb7da3bc9f2f29abb6f981a1f48e6ac8c5aaa9bae9249ec109aab114e18438a->leave($__internal_4bb7da3bc9f2f29abb6f981a1f48e6ac8c5aaa9bae9249ec109aab114e18438a_prof);

        
        $__internal_5acdcd8b25abd848aa9a8f96e34eba736bff8b1f3d47bcf41fd68b4104320cd5->leave($__internal_5acdcd8b25abd848aa9a8f96e34eba736bff8b1f3d47bcf41fd68b4104320cd5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form.html.php");
    }
}
