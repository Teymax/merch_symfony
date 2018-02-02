<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_9a9104b8d3c067c61e8903318442595a3be99c00e21064fa7b46b918d6bf2cdb extends Twig_Template
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
        $__internal_a9e85bc62307968235f48ee8744320aac45c3252562dffe0f4e4dcc4af871c3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9e85bc62307968235f48ee8744320aac45c3252562dffe0f4e4dcc4af871c3d->enter($__internal_a9e85bc62307968235f48ee8744320aac45c3252562dffe0f4e4dcc4af871c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_eb4ad8102eede40bfa37bf8700712f1e9f23c2034d1dfc198bbc1b0cf30261f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb4ad8102eede40bfa37bf8700712f1e9f23c2034d1dfc198bbc1b0cf30261f8->enter($__internal_eb4ad8102eede40bfa37bf8700712f1e9f23c2034d1dfc198bbc1b0cf30261f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a9e85bc62307968235f48ee8744320aac45c3252562dffe0f4e4dcc4af871c3d->leave($__internal_a9e85bc62307968235f48ee8744320aac45c3252562dffe0f4e4dcc4af871c3d_prof);

        
        $__internal_eb4ad8102eede40bfa37bf8700712f1e9f23c2034d1dfc198bbc1b0cf30261f8->leave($__internal_eb4ad8102eede40bfa37bf8700712f1e9f23c2034d1dfc198bbc1b0cf30261f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
