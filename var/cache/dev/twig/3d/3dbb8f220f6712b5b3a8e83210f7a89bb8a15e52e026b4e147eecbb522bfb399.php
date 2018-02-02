<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_e308f1193b1ad8fbe3b38c01db82ed2e469fb92cd56bbf7b24162d8a3493aa0b extends Twig_Template
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
        $__internal_49f473160814248add71f0d79258d246cb3ffafa96299be7f4eb94ee7f1efb60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49f473160814248add71f0d79258d246cb3ffafa96299be7f4eb94ee7f1efb60->enter($__internal_49f473160814248add71f0d79258d246cb3ffafa96299be7f4eb94ee7f1efb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_c619b00ad22c7ebddb4d7fbd04ab45c261461e07d17a5bab1cba7e60e08639ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c619b00ad22c7ebddb4d7fbd04ab45c261461e07d17a5bab1cba7e60e08639ac->enter($__internal_c619b00ad22c7ebddb4d7fbd04ab45c261461e07d17a5bab1cba7e60e08639ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_49f473160814248add71f0d79258d246cb3ffafa96299be7f4eb94ee7f1efb60->leave($__internal_49f473160814248add71f0d79258d246cb3ffafa96299be7f4eb94ee7f1efb60_prof);

        
        $__internal_c619b00ad22c7ebddb4d7fbd04ab45c261461e07d17a5bab1cba7e60e08639ac->leave($__internal_c619b00ad22c7ebddb4d7fbd04ab45c261461e07d17a5bab1cba7e60e08639ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
