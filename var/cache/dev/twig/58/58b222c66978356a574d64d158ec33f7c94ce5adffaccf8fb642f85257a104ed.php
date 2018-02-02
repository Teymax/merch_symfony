<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_4bc7e956b77964b88f0686ab9f98c6f43e4dfb00ff0278e1026d53c9d5759fa8 extends Twig_Template
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
        $__internal_28282ecf4fcfe313014b5b64715a863fe4dd0bd36cdb72a7f4b27259558a1d83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28282ecf4fcfe313014b5b64715a863fe4dd0bd36cdb72a7f4b27259558a1d83->enter($__internal_28282ecf4fcfe313014b5b64715a863fe4dd0bd36cdb72a7f4b27259558a1d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_07b1c19a22029e2413ea7364936d6b55a70a736f8d3910400d54f3b667ebd891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b1c19a22029e2413ea7364936d6b55a70a736f8d3910400d54f3b667ebd891->enter($__internal_07b1c19a22029e2413ea7364936d6b55a70a736f8d3910400d54f3b667ebd891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_28282ecf4fcfe313014b5b64715a863fe4dd0bd36cdb72a7f4b27259558a1d83->leave($__internal_28282ecf4fcfe313014b5b64715a863fe4dd0bd36cdb72a7f4b27259558a1d83_prof);

        
        $__internal_07b1c19a22029e2413ea7364936d6b55a70a736f8d3910400d54f3b667ebd891->leave($__internal_07b1c19a22029e2413ea7364936d6b55a70a736f8d3910400d54f3b667ebd891_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
