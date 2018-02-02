<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_861d66b43b56356f9416177f4ab00ec5dc5dd31e87ba4cfa2c8dc9c6aafcc49c extends Twig_Template
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
        $__internal_69724012ee310c7e378c7cc66867e0b41c04c0723f733d1ea117a7caf1be1ceb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69724012ee310c7e378c7cc66867e0b41c04c0723f733d1ea117a7caf1be1ceb->enter($__internal_69724012ee310c7e378c7cc66867e0b41c04c0723f733d1ea117a7caf1be1ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_4650197dd8e585441c72e2a525b410d2107d3a19c33d82116c034c5bd657a69d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4650197dd8e585441c72e2a525b410d2107d3a19c33d82116c034c5bd657a69d->enter($__internal_4650197dd8e585441c72e2a525b410d2107d3a19c33d82116c034c5bd657a69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_69724012ee310c7e378c7cc66867e0b41c04c0723f733d1ea117a7caf1be1ceb->leave($__internal_69724012ee310c7e378c7cc66867e0b41c04c0723f733d1ea117a7caf1be1ceb_prof);

        
        $__internal_4650197dd8e585441c72e2a525b410d2107d3a19c33d82116c034c5bd657a69d->leave($__internal_4650197dd8e585441c72e2a525b410d2107d3a19c33d82116c034c5bd657a69d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
