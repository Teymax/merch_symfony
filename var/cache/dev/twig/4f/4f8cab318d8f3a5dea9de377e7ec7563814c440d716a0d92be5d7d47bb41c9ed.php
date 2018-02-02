<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_3b561a6f21425b8f354cb11f515f28166588c1e3b7818b72c55bfda6004fd19c extends Twig_Template
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
        $__internal_89ff56ae18e789a35d13ec4f85767dd1063f3f25e4f1bde3ae9febf9c40110e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89ff56ae18e789a35d13ec4f85767dd1063f3f25e4f1bde3ae9febf9c40110e1->enter($__internal_89ff56ae18e789a35d13ec4f85767dd1063f3f25e4f1bde3ae9febf9c40110e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_515fbf208127ad05bd22e28d41df38f44062bfbcd0199630cd7f7a9dae9de794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_515fbf208127ad05bd22e28d41df38f44062bfbcd0199630cd7f7a9dae9de794->enter($__internal_515fbf208127ad05bd22e28d41df38f44062bfbcd0199630cd7f7a9dae9de794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_89ff56ae18e789a35d13ec4f85767dd1063f3f25e4f1bde3ae9febf9c40110e1->leave($__internal_89ff56ae18e789a35d13ec4f85767dd1063f3f25e4f1bde3ae9febf9c40110e1_prof);

        
        $__internal_515fbf208127ad05bd22e28d41df38f44062bfbcd0199630cd7f7a9dae9de794->leave($__internal_515fbf208127ad05bd22e28d41df38f44062bfbcd0199630cd7f7a9dae9de794_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
