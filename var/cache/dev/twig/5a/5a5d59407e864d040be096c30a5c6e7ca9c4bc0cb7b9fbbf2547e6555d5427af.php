<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_ad6b096f6f219607933382210edec69d9b35e4e0c0590daf8b6dbce07a698f46 extends Twig_Template
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
        $__internal_2bf2f6c499c2ce882483b7d7f72bd61b1d737a369e17a7b688988998397c58e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bf2f6c499c2ce882483b7d7f72bd61b1d737a369e17a7b688988998397c58e9->enter($__internal_2bf2f6c499c2ce882483b7d7f72bd61b1d737a369e17a7b688988998397c58e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_0c1ddc6d6de1a464574525f60cc9ac1fdce9566a2642661cf023525168a2a487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c1ddc6d6de1a464574525f60cc9ac1fdce9566a2642661cf023525168a2a487->enter($__internal_0c1ddc6d6de1a464574525f60cc9ac1fdce9566a2642661cf023525168a2a487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_2bf2f6c499c2ce882483b7d7f72bd61b1d737a369e17a7b688988998397c58e9->leave($__internal_2bf2f6c499c2ce882483b7d7f72bd61b1d737a369e17a7b688988998397c58e9_prof);

        
        $__internal_0c1ddc6d6de1a464574525f60cc9ac1fdce9566a2642661cf023525168a2a487->leave($__internal_0c1ddc6d6de1a464574525f60cc9ac1fdce9566a2642661cf023525168a2a487_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
