<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_a045e30529f00c3ad87afc34454e49b69fcdd010af47d6498688b7e52b00b42f extends Twig_Template
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
        $__internal_2e18ccc00733b1ccca886ef0aa3aeeda3ade012b166a2ca7a860d39826a99781 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e18ccc00733b1ccca886ef0aa3aeeda3ade012b166a2ca7a860d39826a99781->enter($__internal_2e18ccc00733b1ccca886ef0aa3aeeda3ade012b166a2ca7a860d39826a99781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_83fc229948b7268e0262dacd762ae5d0989a68ebaf8c6890ee33d158856d950c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83fc229948b7268e0262dacd762ae5d0989a68ebaf8c6890ee33d158856d950c->enter($__internal_83fc229948b7268e0262dacd762ae5d0989a68ebaf8c6890ee33d158856d950c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_2e18ccc00733b1ccca886ef0aa3aeeda3ade012b166a2ca7a860d39826a99781->leave($__internal_2e18ccc00733b1ccca886ef0aa3aeeda3ade012b166a2ca7a860d39826a99781_prof);

        
        $__internal_83fc229948b7268e0262dacd762ae5d0989a68ebaf8c6890ee33d158856d950c->leave($__internal_83fc229948b7268e0262dacd762ae5d0989a68ebaf8c6890ee33d158856d950c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
