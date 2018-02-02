<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_5933b81e65483bf132c3e5c2d0c47da4e5a2315c59f7ca860dce1ee9149e43a1 extends Twig_Template
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
        $__internal_9995845f9ce22ff997f901f63a45dee4b2ec92b4a2b7d016edbb1fdb1c710e83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9995845f9ce22ff997f901f63a45dee4b2ec92b4a2b7d016edbb1fdb1c710e83->enter($__internal_9995845f9ce22ff997f901f63a45dee4b2ec92b4a2b7d016edbb1fdb1c710e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_c925992290510b48db723f4039efc6a2dca83528122c6cb078859f9087c6bc5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c925992290510b48db723f4039efc6a2dca83528122c6cb078859f9087c6bc5e->enter($__internal_c925992290510b48db723f4039efc6a2dca83528122c6cb078859f9087c6bc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_9995845f9ce22ff997f901f63a45dee4b2ec92b4a2b7d016edbb1fdb1c710e83->leave($__internal_9995845f9ce22ff997f901f63a45dee4b2ec92b4a2b7d016edbb1fdb1c710e83_prof);

        
        $__internal_c925992290510b48db723f4039efc6a2dca83528122c6cb078859f9087c6bc5e->leave($__internal_c925992290510b48db723f4039efc6a2dca83528122c6cb078859f9087c6bc5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
