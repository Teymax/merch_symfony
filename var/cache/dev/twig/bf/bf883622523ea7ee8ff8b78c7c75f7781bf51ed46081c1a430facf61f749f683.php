<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_fd16a226f3e8779c9cab8a6dd0623fbf821f4832937698512befef074ba3a20e extends Twig_Template
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
        $__internal_de584797b22025b340b00ba5bfae331a609b45a3c7c2ce7766baa02eb7c55b4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de584797b22025b340b00ba5bfae331a609b45a3c7c2ce7766baa02eb7c55b4f->enter($__internal_de584797b22025b340b00ba5bfae331a609b45a3c7c2ce7766baa02eb7c55b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_bd43a15f9708c47dc8ca92e5e8359ca184f85de43b9d9311b224ba7f95eba674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd43a15f9708c47dc8ca92e5e8359ca184f85de43b9d9311b224ba7f95eba674->enter($__internal_bd43a15f9708c47dc8ca92e5e8359ca184f85de43b9d9311b224ba7f95eba674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_de584797b22025b340b00ba5bfae331a609b45a3c7c2ce7766baa02eb7c55b4f->leave($__internal_de584797b22025b340b00ba5bfae331a609b45a3c7c2ce7766baa02eb7c55b4f_prof);

        
        $__internal_bd43a15f9708c47dc8ca92e5e8359ca184f85de43b9d9311b224ba7f95eba674->leave($__internal_bd43a15f9708c47dc8ca92e5e8359ca184f85de43b9d9311b224ba7f95eba674_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
