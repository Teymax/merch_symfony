<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_c6c30a1384ca4a40b8cc741fa9bc056b3e9cc1e4bed13136400fddb877854929 extends Twig_Template
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
        $__internal_e0a62d31f071f643b78216b92fd572819b355949aafe6d245e9aa0e9b72f0662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0a62d31f071f643b78216b92fd572819b355949aafe6d245e9aa0e9b72f0662->enter($__internal_e0a62d31f071f643b78216b92fd572819b355949aafe6d245e9aa0e9b72f0662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_1e4232ab9ad39abe15604fd827359485a126a9c875fc2aa28e937c0d2e62c422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e4232ab9ad39abe15604fd827359485a126a9c875fc2aa28e937c0d2e62c422->enter($__internal_1e4232ab9ad39abe15604fd827359485a126a9c875fc2aa28e937c0d2e62c422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_e0a62d31f071f643b78216b92fd572819b355949aafe6d245e9aa0e9b72f0662->leave($__internal_e0a62d31f071f643b78216b92fd572819b355949aafe6d245e9aa0e9b72f0662_prof);

        
        $__internal_1e4232ab9ad39abe15604fd827359485a126a9c875fc2aa28e937c0d2e62c422->leave($__internal_1e4232ab9ad39abe15604fd827359485a126a9c875fc2aa28e937c0d2e62c422_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
