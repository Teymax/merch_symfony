<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_0f6243835686079ac6b65bf260f4f039340b2f183d0abe95379fd88ed5c66bf2 extends Twig_Template
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
        $__internal_5f9b3a6741f5167b741a966be4bca9c4c2454c6a2bd11ddd48800402ab8feb7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f9b3a6741f5167b741a966be4bca9c4c2454c6a2bd11ddd48800402ab8feb7f->enter($__internal_5f9b3a6741f5167b741a966be4bca9c4c2454c6a2bd11ddd48800402ab8feb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_3fa731a27bc1201996c57cf3080467d834598dd9b876073d16eb617d3ed23637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fa731a27bc1201996c57cf3080467d834598dd9b876073d16eb617d3ed23637->enter($__internal_3fa731a27bc1201996c57cf3080467d834598dd9b876073d16eb617d3ed23637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_5f9b3a6741f5167b741a966be4bca9c4c2454c6a2bd11ddd48800402ab8feb7f->leave($__internal_5f9b3a6741f5167b741a966be4bca9c4c2454c6a2bd11ddd48800402ab8feb7f_prof);

        
        $__internal_3fa731a27bc1201996c57cf3080467d834598dd9b876073d16eb617d3ed23637->leave($__internal_3fa731a27bc1201996c57cf3080467d834598dd9b876073d16eb617d3ed23637_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
