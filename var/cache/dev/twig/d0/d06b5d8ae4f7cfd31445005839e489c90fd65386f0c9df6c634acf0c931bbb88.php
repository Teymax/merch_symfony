<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_468206e4fdf699ee112e65294c82848998f9080c34f527de6b5e8e8e373d5928 extends Twig_Template
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
        $__internal_acc9a3f15f2ca12eb2931603b8251b4a1ad6fbb825403b6fb9ea135cef50b924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acc9a3f15f2ca12eb2931603b8251b4a1ad6fbb825403b6fb9ea135cef50b924->enter($__internal_acc9a3f15f2ca12eb2931603b8251b4a1ad6fbb825403b6fb9ea135cef50b924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_37343569cfd46c6d1e80f90f0c6cfbfe89e664dd9d789b07e9ceb4b966d185b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37343569cfd46c6d1e80f90f0c6cfbfe89e664dd9d789b07e9ceb4b966d185b2->enter($__internal_37343569cfd46c6d1e80f90f0c6cfbfe89e664dd9d789b07e9ceb4b966d185b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_acc9a3f15f2ca12eb2931603b8251b4a1ad6fbb825403b6fb9ea135cef50b924->leave($__internal_acc9a3f15f2ca12eb2931603b8251b4a1ad6fbb825403b6fb9ea135cef50b924_prof);

        
        $__internal_37343569cfd46c6d1e80f90f0c6cfbfe89e664dd9d789b07e9ceb4b966d185b2->leave($__internal_37343569cfd46c6d1e80f90f0c6cfbfe89e664dd9d789b07e9ceb4b966d185b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
