<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7a29f0db4c1ddea397685ab9481743b6dfff683da9a1638c84d9d5b668565b28 extends Twig_Template
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
        $__internal_e7f44601f6b0dcc59df3b6f591113189d4f774dad94cc0c88d7b8241d56c3c69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7f44601f6b0dcc59df3b6f591113189d4f774dad94cc0c88d7b8241d56c3c69->enter($__internal_e7f44601f6b0dcc59df3b6f591113189d4f774dad94cc0c88d7b8241d56c3c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_ecbbbabde600e3f0cda55facf5f11460f3513ef60e75b911cd62418dc717eb0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecbbbabde600e3f0cda55facf5f11460f3513ef60e75b911cd62418dc717eb0f->enter($__internal_ecbbbabde600e3f0cda55facf5f11460f3513ef60e75b911cd62418dc717eb0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e7f44601f6b0dcc59df3b6f591113189d4f774dad94cc0c88d7b8241d56c3c69->leave($__internal_e7f44601f6b0dcc59df3b6f591113189d4f774dad94cc0c88d7b8241d56c3c69_prof);

        
        $__internal_ecbbbabde600e3f0cda55facf5f11460f3513ef60e75b911cd62418dc717eb0f->leave($__internal_ecbbbabde600e3f0cda55facf5f11460f3513ef60e75b911cd62418dc717eb0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
