<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_7b61e826c7a9426865ab097c0c1f5e884dcca6b25957dd04981db40d0744e0df extends Twig_Template
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
        $__internal_b888020599c66a8e4016ec23dbd9722639a55ef17c82c50b3f043395ec30579b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b888020599c66a8e4016ec23dbd9722639a55ef17c82c50b3f043395ec30579b->enter($__internal_b888020599c66a8e4016ec23dbd9722639a55ef17c82c50b3f043395ec30579b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_b93a32974d492daa1dc2096a0c1afa83d993b56083b539aa5b27e021fefa23ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b93a32974d492daa1dc2096a0c1afa83d993b56083b539aa5b27e021fefa23ea->enter($__internal_b93a32974d492daa1dc2096a0c1afa83d993b56083b539aa5b27e021fefa23ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_b888020599c66a8e4016ec23dbd9722639a55ef17c82c50b3f043395ec30579b->leave($__internal_b888020599c66a8e4016ec23dbd9722639a55ef17c82c50b3f043395ec30579b_prof);

        
        $__internal_b93a32974d492daa1dc2096a0c1afa83d993b56083b539aa5b27e021fefa23ea->leave($__internal_b93a32974d492daa1dc2096a0c1afa83d993b56083b539aa5b27e021fefa23ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
