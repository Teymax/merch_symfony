<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_223a12e51f753c7eacca2b5700477514a2c7328e2321ac3b69d405fe86c75e26 extends Twig_Template
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
        $__internal_6f5c2ffbe25cababf2ca06f7ab64f30bb2790dcc94bca496d115c54727b543c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f5c2ffbe25cababf2ca06f7ab64f30bb2790dcc94bca496d115c54727b543c7->enter($__internal_6f5c2ffbe25cababf2ca06f7ab64f30bb2790dcc94bca496d115c54727b543c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_61d73be626a8bb12e9699e1ce1a9cba0f98545de548e126a40b566b0d5d07738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61d73be626a8bb12e9699e1ce1a9cba0f98545de548e126a40b566b0d5d07738->enter($__internal_61d73be626a8bb12e9699e1ce1a9cba0f98545de548e126a40b566b0d5d07738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_6f5c2ffbe25cababf2ca06f7ab64f30bb2790dcc94bca496d115c54727b543c7->leave($__internal_6f5c2ffbe25cababf2ca06f7ab64f30bb2790dcc94bca496d115c54727b543c7_prof);

        
        $__internal_61d73be626a8bb12e9699e1ce1a9cba0f98545de548e126a40b566b0d5d07738->leave($__internal_61d73be626a8bb12e9699e1ce1a9cba0f98545de548e126a40b566b0d5d07738_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_start.html.php");
    }
}
