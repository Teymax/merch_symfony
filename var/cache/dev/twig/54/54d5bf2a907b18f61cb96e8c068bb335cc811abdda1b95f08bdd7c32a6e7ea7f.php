<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7b16c57533173002e3dcde5301467b1b6434d38b6c9e435c45951bf5d40628a1 extends Twig_Template
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
        $__internal_5749208c7b1f853974b32c7103ac7eabf9ebbe5f2c49d4196c3b97b1ec8374f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5749208c7b1f853974b32c7103ac7eabf9ebbe5f2c49d4196c3b97b1ec8374f6->enter($__internal_5749208c7b1f853974b32c7103ac7eabf9ebbe5f2c49d4196c3b97b1ec8374f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_482567601dbfb179aa63aefc07c72a52b3901cf2329871ea1d498c22b980d83c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_482567601dbfb179aa63aefc07c72a52b3901cf2329871ea1d498c22b980d83c->enter($__internal_482567601dbfb179aa63aefc07c72a52b3901cf2329871ea1d498c22b980d83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_5749208c7b1f853974b32c7103ac7eabf9ebbe5f2c49d4196c3b97b1ec8374f6->leave($__internal_5749208c7b1f853974b32c7103ac7eabf9ebbe5f2c49d4196c3b97b1ec8374f6_prof);

        
        $__internal_482567601dbfb179aa63aefc07c72a52b3901cf2329871ea1d498c22b980d83c->leave($__internal_482567601dbfb179aa63aefc07c72a52b3901cf2329871ea1d498c22b980d83c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
