<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_36d60cdd56b6792fef7b0c0a8416f60d41b21d7296290ec05561742f134c961d extends Twig_Template
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
        $__internal_b67a5fa5046451b16cba3f3187022769a021080a315c1f365e54daa88bd90796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b67a5fa5046451b16cba3f3187022769a021080a315c1f365e54daa88bd90796->enter($__internal_b67a5fa5046451b16cba3f3187022769a021080a315c1f365e54daa88bd90796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_41a82d38dd37d6e06d6c63766cf1f848902f59939873e14645dd80f3e9eeb002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41a82d38dd37d6e06d6c63766cf1f848902f59939873e14645dd80f3e9eeb002->enter($__internal_41a82d38dd37d6e06d6c63766cf1f848902f59939873e14645dd80f3e9eeb002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_b67a5fa5046451b16cba3f3187022769a021080a315c1f365e54daa88bd90796->leave($__internal_b67a5fa5046451b16cba3f3187022769a021080a315c1f365e54daa88bd90796_prof);

        
        $__internal_41a82d38dd37d6e06d6c63766cf1f848902f59939873e14645dd80f3e9eeb002->leave($__internal_41a82d38dd37d6e06d6c63766cf1f848902f59939873e14645dd80f3e9eeb002_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
