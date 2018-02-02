<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_d5970c6874ac8a41ce0f50f7db073f90316220616e43d49dbdcb7dab3830e4bf extends Twig_Template
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
        $__internal_3602b6bf9f70e9a2c48e60ff61dc20f984cce87b6ae2e92f6173b2a6e1e29062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3602b6bf9f70e9a2c48e60ff61dc20f984cce87b6ae2e92f6173b2a6e1e29062->enter($__internal_3602b6bf9f70e9a2c48e60ff61dc20f984cce87b6ae2e92f6173b2a6e1e29062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_770461a4f0ff59bac0ef41189e04e73e3fab269a1f93a594de8bd5e247740dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_770461a4f0ff59bac0ef41189e04e73e3fab269a1f93a594de8bd5e247740dfe->enter($__internal_770461a4f0ff59bac0ef41189e04e73e3fab269a1f93a594de8bd5e247740dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_3602b6bf9f70e9a2c48e60ff61dc20f984cce87b6ae2e92f6173b2a6e1e29062->leave($__internal_3602b6bf9f70e9a2c48e60ff61dc20f984cce87b6ae2e92f6173b2a6e1e29062_prof);

        
        $__internal_770461a4f0ff59bac0ef41189e04e73e3fab269a1f93a594de8bd5e247740dfe->leave($__internal_770461a4f0ff59bac0ef41189e04e73e3fab269a1f93a594de8bd5e247740dfe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
