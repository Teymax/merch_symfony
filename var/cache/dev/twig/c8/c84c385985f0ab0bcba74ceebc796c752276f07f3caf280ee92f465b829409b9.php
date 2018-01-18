<?php

/* list/listEdit.html.twig */
class __TwigTemplate_9132899343b3a1925fd42c992a4ff7839396bc70ec8101aa2e55c23bcd97e037 extends Twig_Template
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
        $__internal_1e7ccbd5cf58be09a614904d17c446770ab1977991727332cccc72a54fe27e85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e7ccbd5cf58be09a614904d17c446770ab1977991727332cccc72a54fe27e85->enter($__internal_1e7ccbd5cf58be09a614904d17c446770ab1977991727332cccc72a54fe27e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/listEdit.html.twig"));

        $__internal_478a576c16e5bda7b3c8047e0ebb69e062a458963b189ca68279686b2e4ce788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478a576c16e5bda7b3c8047e0ebb69e062a458963b189ca68279686b2e4ce788->enter($__internal_478a576c16e5bda7b3c8047e0ebb69e062a458963b189ca68279686b2e4ce788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/listEdit.html.twig"));

        // line 1
        echo "            <a href=\"\">View brochure (PDF)</a>
            <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/brochures/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app_list"]) || array_key_exists("app_list", $context) ? $context["app_list"] : (function () { throw new Twig_Error_Runtime('Variable "app_list" does not exist.', 2, $this->getSourceContext()); })()), "brochure", array()))), "html", null, true);
        echo "\" width=\"189\" height=\"255\" alt=\"lorem\">
";
        
        $__internal_1e7ccbd5cf58be09a614904d17c446770ab1977991727332cccc72a54fe27e85->leave($__internal_1e7ccbd5cf58be09a614904d17c446770ab1977991727332cccc72a54fe27e85_prof);

        
        $__internal_478a576c16e5bda7b3c8047e0ebb69e062a458963b189ca68279686b2e4ce788->leave($__internal_478a576c16e5bda7b3c8047e0ebb69e062a458963b189ca68279686b2e4ce788_prof);

    }

    public function getTemplateName()
    {
        return "list/listEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("            <a href=\"\">View brochure (PDF)</a>
            <img src=\"{{ asset('uploads/brochures/' ~ app_list.brochure) }}\" width=\"189\" height=\"255\" alt=\"lorem\">
", "list/listEdit.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\list\\listEdit.html.twig");
    }
}
