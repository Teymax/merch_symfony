<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4564e3d00dafa2de10b2364ac42ad8744e1e2165c6bfe8b02dee6eee73dcd230 extends Twig_Template
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
        $__internal_904b637c8bd7b874a07bd7ac5edc2719a74250de4fb24de209318855a3c97738 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_904b637c8bd7b874a07bd7ac5edc2719a74250de4fb24de209318855a3c97738->enter($__internal_904b637c8bd7b874a07bd7ac5edc2719a74250de4fb24de209318855a3c97738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_b61e033b0acfb37e394b76b105fc8635818711399611e518c5f1030662f3853a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b61e033b0acfb37e394b76b105fc8635818711399611e518c5f1030662f3853a->enter($__internal_b61e033b0acfb37e394b76b105fc8635818711399611e518c5f1030662f3853a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_904b637c8bd7b874a07bd7ac5edc2719a74250de4fb24de209318855a3c97738->leave($__internal_904b637c8bd7b874a07bd7ac5edc2719a74250de4fb24de209318855a3c97738_prof);

        
        $__internal_b61e033b0acfb37e394b76b105fc8635818711399611e518c5f1030662f3853a->leave($__internal_b61e033b0acfb37e394b76b105fc8635818711399611e518c5f1030662f3853a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
