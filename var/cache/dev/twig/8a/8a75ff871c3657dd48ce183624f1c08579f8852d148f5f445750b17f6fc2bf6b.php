<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_878876933b82657b0713051c69a28c826212d8ff4aefe88546a7de9326aa4cc4 extends Twig_Template
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
        $__internal_4482d83878d87e927acf850514d6949e05e9e5543b0983cec237a9247f162bfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4482d83878d87e927acf850514d6949e05e9e5543b0983cec237a9247f162bfe->enter($__internal_4482d83878d87e927acf850514d6949e05e9e5543b0983cec237a9247f162bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_f51c772b3d48681435e2880ec26bab49c7e5d460254150d35e31d6358c196708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f51c772b3d48681435e2880ec26bab49c7e5d460254150d35e31d6358c196708->enter($__internal_f51c772b3d48681435e2880ec26bab49c7e5d460254150d35e31d6358c196708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_4482d83878d87e927acf850514d6949e05e9e5543b0983cec237a9247f162bfe->leave($__internal_4482d83878d87e927acf850514d6949e05e9e5543b0983cec237a9247f162bfe_prof);

        
        $__internal_f51c772b3d48681435e2880ec26bab49c7e5d460254150d35e31d6358c196708->leave($__internal_f51c772b3d48681435e2880ec26bab49c7e5d460254150d35e31d6358c196708_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
