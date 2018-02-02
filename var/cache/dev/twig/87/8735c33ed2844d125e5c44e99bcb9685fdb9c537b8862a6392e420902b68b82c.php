<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_364ee4b058eacd02a7f5f616922a70dbd6009a5075fd929dc114577429629e7a extends Twig_Template
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
        $__internal_47628170e29a2b8511bb487646b7975225d58500f77dcbdde8d575fd53527e23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47628170e29a2b8511bb487646b7975225d58500f77dcbdde8d575fd53527e23->enter($__internal_47628170e29a2b8511bb487646b7975225d58500f77dcbdde8d575fd53527e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_b6a485e6f35bf9f63bdd55be392a2d5501b706ab3e62e4871c1f3386f0c2ab12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a485e6f35bf9f63bdd55be392a2d5501b706ab3e62e4871c1f3386f0c2ab12->enter($__internal_b6a485e6f35bf9f63bdd55be392a2d5501b706ab3e62e4871c1f3386f0c2ab12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_47628170e29a2b8511bb487646b7975225d58500f77dcbdde8d575fd53527e23->leave($__internal_47628170e29a2b8511bb487646b7975225d58500f77dcbdde8d575fd53527e23_prof);

        
        $__internal_b6a485e6f35bf9f63bdd55be392a2d5501b706ab3e62e4871c1f3386f0c2ab12->leave($__internal_b6a485e6f35bf9f63bdd55be392a2d5501b706ab3e62e4871c1f3386f0c2ab12_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
