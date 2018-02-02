<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_51d3e5b33e5e203ac9fd9d0b4d5d608be7fd9f446d6fc68f07046f584873eb6e extends Twig_Template
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
        $__internal_e278573fb04bcc9cb7acf4518380f949b2f458e78549fd99319084dc42579185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e278573fb04bcc9cb7acf4518380f949b2f458e78549fd99319084dc42579185->enter($__internal_e278573fb04bcc9cb7acf4518380f949b2f458e78549fd99319084dc42579185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_d534fa51202fe328de0ca989f0bbdd90759208e82e1abc276d4b7db1b0c198ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d534fa51202fe328de0ca989f0bbdd90759208e82e1abc276d4b7db1b0c198ff->enter($__internal_d534fa51202fe328de0ca989f0bbdd90759208e82e1abc276d4b7db1b0c198ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_e278573fb04bcc9cb7acf4518380f949b2f458e78549fd99319084dc42579185->leave($__internal_e278573fb04bcc9cb7acf4518380f949b2f458e78549fd99319084dc42579185_prof);

        
        $__internal_d534fa51202fe328de0ca989f0bbdd90759208e82e1abc276d4b7db1b0c198ff->leave($__internal_d534fa51202fe328de0ca989f0bbdd90759208e82e1abc276d4b7db1b0c198ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
