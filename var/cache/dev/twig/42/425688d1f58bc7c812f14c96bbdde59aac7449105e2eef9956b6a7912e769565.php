<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_9319fefee05391d0993c9f77f647a5d92c4f2c56c0cb4839499d0079d7860f08 extends Twig_Template
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
        $__internal_f4ef00d3dea06d1bea35a61fd14bac007bc29d67b73dcea0206f55473f828b98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4ef00d3dea06d1bea35a61fd14bac007bc29d67b73dcea0206f55473f828b98->enter($__internal_f4ef00d3dea06d1bea35a61fd14bac007bc29d67b73dcea0206f55473f828b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_89c4c306285947885e3a7c291dda16055ff7a706b6b22b0a9d4ed7a411076c9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c4c306285947885e3a7c291dda16055ff7a706b6b22b0a9d4ed7a411076c9b->enter($__internal_89c4c306285947885e3a7c291dda16055ff7a706b6b22b0a9d4ed7a411076c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f4ef00d3dea06d1bea35a61fd14bac007bc29d67b73dcea0206f55473f828b98->leave($__internal_f4ef00d3dea06d1bea35a61fd14bac007bc29d67b73dcea0206f55473f828b98_prof);

        
        $__internal_89c4c306285947885e3a7c291dda16055ff7a706b6b22b0a9d4ed7a411076c9b->leave($__internal_89c4c306285947885e3a7c291dda16055ff7a706b6b22b0a9d4ed7a411076c9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
