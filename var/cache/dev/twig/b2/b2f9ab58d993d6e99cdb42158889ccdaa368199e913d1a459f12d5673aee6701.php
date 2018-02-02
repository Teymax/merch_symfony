<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_3511ea575f6f95698f676ecd31e725cd12a58ac4c46fe166f5f1c766d903a6fb extends Twig_Template
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
        $__internal_072232b327038946d60ec93850b110f402ace68c97058f287f8d61117d800fe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_072232b327038946d60ec93850b110f402ace68c97058f287f8d61117d800fe2->enter($__internal_072232b327038946d60ec93850b110f402ace68c97058f287f8d61117d800fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_b5d81df4ae1881d823c12b5a282063be919d8b1b95b1cda72ca8c41162e94467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d81df4ae1881d823c12b5a282063be919d8b1b95b1cda72ca8c41162e94467->enter($__internal_b5d81df4ae1881d823c12b5a282063be919d8b1b95b1cda72ca8c41162e94467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_072232b327038946d60ec93850b110f402ace68c97058f287f8d61117d800fe2->leave($__internal_072232b327038946d60ec93850b110f402ace68c97058f287f8d61117d800fe2_prof);

        
        $__internal_b5d81df4ae1881d823c12b5a282063be919d8b1b95b1cda72ca8c41162e94467->leave($__internal_b5d81df4ae1881d823c12b5a282063be919d8b1b95b1cda72ca8c41162e94467_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
