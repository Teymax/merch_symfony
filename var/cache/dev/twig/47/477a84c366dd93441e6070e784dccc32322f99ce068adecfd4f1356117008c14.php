<?php

/* emails/password.html.twig */
class __TwigTemplate_54479ffac187cb1a2a440448e4db50eb692dfc0bfa080ce4d86bb2f6a5f0c671 extends Twig_Template
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
        $__internal_02a0bf2f40e59371ee2a6170b15dfe0849f2f3e99502785d8b9862d94616489b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02a0bf2f40e59371ee2a6170b15dfe0849f2f3e99502785d8b9862d94616489b->enter($__internal_02a0bf2f40e59371ee2a6170b15dfe0849f2f3e99502785d8b9862d94616489b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/password.html.twig"));

        $__internal_aad04a4f513219e019c584b42004cd43262eebc2b3f4dce9507994b8a18fd88c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aad04a4f513219e019c584b42004cd43262eebc2b3f4dce9507994b8a18fd88c->enter($__internal_aad04a4f513219e019c584b42004cd43262eebc2b3f4dce9507994b8a18fd88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/password.html.twig"));

        // line 1
        echo "<h3>Password Recover</h3>

To recover your password follow the link:
 <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("password-recovery", array("user_id" => (isset($context["user_id"]) || array_key_exists("user_id", $context) ? $context["user_id"] : (function () { throw new Twig_Error_Runtime('Variable "user_id" does not exist.', 4, $this->getSourceContext()); })()))), "html", null, true);
        echo "\">Reset</a>.

Thanks!
";
        
        $__internal_02a0bf2f40e59371ee2a6170b15dfe0849f2f3e99502785d8b9862d94616489b->leave($__internal_02a0bf2f40e59371ee2a6170b15dfe0849f2f3e99502785d8b9862d94616489b_prof);

        
        $__internal_aad04a4f513219e019c584b42004cd43262eebc2b3f4dce9507994b8a18fd88c->leave($__internal_aad04a4f513219e019c584b42004cd43262eebc2b3f4dce9507994b8a18fd88c_prof);

    }

    public function getTemplateName()
    {
        return "emails/password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>Password Recover</h3>

To recover your password follow the link:
 <a href=\"{{ url('password-recovery', { 'user_id': user_id })}}\">Reset</a>.

Thanks!
", "emails/password.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\emails\\password.html.twig");
    }
}
