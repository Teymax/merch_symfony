<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_bab73fba98c3582f88e6064b9d1b1c5c6a7b74534788c92e488b6412b5cdd744 extends Twig_Template
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
        $__internal_c5298ef1c8790bffae57be20929de9f30002a9aaeb9fbed7d549a36a2b174c64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5298ef1c8790bffae57be20929de9f30002a9aaeb9fbed7d549a36a2b174c64->enter($__internal_c5298ef1c8790bffae57be20929de9f30002a9aaeb9fbed7d549a36a2b174c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_89b8c176c1fc2e92eae70e906e0d683d7b9acc19e6bd222f19ee21a85b35183e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89b8c176c1fc2e92eae70e906e0d683d7b9acc19e6bd222f19ee21a85b35183e->enter($__internal_89b8c176c1fc2e92eae70e906e0d683d7b9acc19e6bd222f19ee21a85b35183e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c5298ef1c8790bffae57be20929de9f30002a9aaeb9fbed7d549a36a2b174c64->leave($__internal_c5298ef1c8790bffae57be20929de9f30002a9aaeb9fbed7d549a36a2b174c64_prof);

        
        $__internal_89b8c176c1fc2e92eae70e906e0d683d7b9acc19e6bd222f19ee21a85b35183e->leave($__internal_89b8c176c1fc2e92eae70e906e0d683d7b9acc19e6bd222f19ee21a85b35183e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
