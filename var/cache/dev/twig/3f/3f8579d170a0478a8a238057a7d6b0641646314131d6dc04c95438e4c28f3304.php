<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_e86853b4cb4d1c61b38bea0397c68850c64706571a6155cbb4a390deb90a3baa extends Twig_Template
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
        $__internal_052733231e0ca4d39a16c0e2b808a4e5399b2739e605e995fbb11c5bc23c1cf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_052733231e0ca4d39a16c0e2b808a4e5399b2739e605e995fbb11c5bc23c1cf5->enter($__internal_052733231e0ca4d39a16c0e2b808a4e5399b2739e605e995fbb11c5bc23c1cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_a9089b791088843dc29b68310ae4ea732d23f252a8beeea5657e5d846a925ff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9089b791088843dc29b68310ae4ea732d23f252a8beeea5657e5d846a925ff8->enter($__internal_a9089b791088843dc29b68310ae4ea732d23f252a8beeea5657e5d846a925ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_052733231e0ca4d39a16c0e2b808a4e5399b2739e605e995fbb11c5bc23c1cf5->leave($__internal_052733231e0ca4d39a16c0e2b808a4e5399b2739e605e995fbb11c5bc23c1cf5_prof);

        
        $__internal_a9089b791088843dc29b68310ae4ea732d23f252a8beeea5657e5d846a925ff8->leave($__internal_a9089b791088843dc29b68310ae4ea732d23f252a8beeea5657e5d846a925ff8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
