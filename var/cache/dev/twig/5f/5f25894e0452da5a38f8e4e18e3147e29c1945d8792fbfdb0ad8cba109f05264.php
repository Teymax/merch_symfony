<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_5678bc40d6ea92c1cba51f46de820e4a58c765d3883f18b021d8486d5f4bc672 extends Twig_Template
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
        $__internal_6fb8421ff4bfc58841de2c90ffccb4c62e52986b768e68e415e35fb71d823504 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fb8421ff4bfc58841de2c90ffccb4c62e52986b768e68e415e35fb71d823504->enter($__internal_6fb8421ff4bfc58841de2c90ffccb4c62e52986b768e68e415e35fb71d823504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_cbe5172c8a6566deb5ac20b89acaa90219ca5f384f72d02ffd704d2077c36539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbe5172c8a6566deb5ac20b89acaa90219ca5f384f72d02ffd704d2077c36539->enter($__internal_cbe5172c8a6566deb5ac20b89acaa90219ca5f384f72d02ffd704d2077c36539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_6fb8421ff4bfc58841de2c90ffccb4c62e52986b768e68e415e35fb71d823504->leave($__internal_6fb8421ff4bfc58841de2c90ffccb4c62e52986b768e68e415e35fb71d823504_prof);

        
        $__internal_cbe5172c8a6566deb5ac20b89acaa90219ca5f384f72d02ffd704d2077c36539->leave($__internal_cbe5172c8a6566deb5ac20b89acaa90219ca5f384f72d02ffd704d2077c36539_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_label.html.php");
    }
}
