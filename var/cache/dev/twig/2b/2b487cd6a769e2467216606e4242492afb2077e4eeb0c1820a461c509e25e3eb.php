<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_edf50c91ddd6c29e371db178ae9fb4e2cb91fbc62e3a6cba2ad5cff953cd800b extends Twig_Template
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
        $__internal_ed900b032329c963e6b5341b0568fca59afc1a20d9ed051453d0107e644b5d1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed900b032329c963e6b5341b0568fca59afc1a20d9ed051453d0107e644b5d1b->enter($__internal_ed900b032329c963e6b5341b0568fca59afc1a20d9ed051453d0107e644b5d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_6a7e200e363e9e94633e70fc5f8cc204731293648b1a2b360684fa42ae5df7e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a7e200e363e9e94633e70fc5f8cc204731293648b1a2b360684fa42ae5df7e1->enter($__internal_6a7e200e363e9e94633e70fc5f8cc204731293648b1a2b360684fa42ae5df7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ed900b032329c963e6b5341b0568fca59afc1a20d9ed051453d0107e644b5d1b->leave($__internal_ed900b032329c963e6b5341b0568fca59afc1a20d9ed051453d0107e644b5d1b_prof);

        
        $__internal_6a7e200e363e9e94633e70fc5f8cc204731293648b1a2b360684fa42ae5df7e1->leave($__internal_6a7e200e363e9e94633e70fc5f8cc204731293648b1a2b360684fa42ae5df7e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
