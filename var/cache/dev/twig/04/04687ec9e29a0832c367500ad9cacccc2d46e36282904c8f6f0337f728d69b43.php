<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_0d244519ce0ab3c477a08e6d6d5980c0b21a8ce711838e0e6980e0f06105cba3 extends Twig_Template
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
        $__internal_c29d25585227e5a9552e9ff2f690f716d3723877cf90fb7144f5015588fe73fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c29d25585227e5a9552e9ff2f690f716d3723877cf90fb7144f5015588fe73fd->enter($__internal_c29d25585227e5a9552e9ff2f690f716d3723877cf90fb7144f5015588fe73fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_2e6ea632b367ab594ac988609fef6c311c5d80586a68e6d5d2642eb537b15f3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e6ea632b367ab594ac988609fef6c311c5d80586a68e6d5d2642eb537b15f3d->enter($__internal_2e6ea632b367ab594ac988609fef6c311c5d80586a68e6d5d2642eb537b15f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c29d25585227e5a9552e9ff2f690f716d3723877cf90fb7144f5015588fe73fd->leave($__internal_c29d25585227e5a9552e9ff2f690f716d3723877cf90fb7144f5015588fe73fd_prof);

        
        $__internal_2e6ea632b367ab594ac988609fef6c311c5d80586a68e6d5d2642eb537b15f3d->leave($__internal_2e6ea632b367ab594ac988609fef6c311c5d80586a68e6d5d2642eb537b15f3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
