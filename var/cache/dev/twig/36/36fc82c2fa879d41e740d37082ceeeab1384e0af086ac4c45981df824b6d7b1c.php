<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_6feda3c616f2c13a96265c133e2526ee5b4950cdfabe31a6064e5d8280493460 extends Twig_Template
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
        $__internal_be19585935f71ea05e42770154e76f472293926356fca4a985c8f4203a2b96c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be19585935f71ea05e42770154e76f472293926356fca4a985c8f4203a2b96c3->enter($__internal_be19585935f71ea05e42770154e76f472293926356fca4a985c8f4203a2b96c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_2c8b8987d7f48eb95b1343ca9716d3ed4d7579f0bdd10ef0c363948bee4be3b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c8b8987d7f48eb95b1343ca9716d3ed4d7579f0bdd10ef0c363948bee4be3b4->enter($__internal_2c8b8987d7f48eb95b1343ca9716d3ed4d7579f0bdd10ef0c363948bee4be3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_be19585935f71ea05e42770154e76f472293926356fca4a985c8f4203a2b96c3->leave($__internal_be19585935f71ea05e42770154e76f472293926356fca4a985c8f4203a2b96c3_prof);

        
        $__internal_2c8b8987d7f48eb95b1343ca9716d3ed4d7579f0bdd10ef0c363948bee4be3b4->leave($__internal_2c8b8987d7f48eb95b1343ca9716d3ed4d7579f0bdd10ef0c363948bee4be3b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
