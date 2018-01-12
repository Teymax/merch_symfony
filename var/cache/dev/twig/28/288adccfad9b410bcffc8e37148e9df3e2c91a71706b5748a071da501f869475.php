<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_883fdca6b493bda885fa6536b44a6a76d2b35b60f74a66059d9975163cd5774e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_641b22847853c037946062063c3cbbee50ffc4487b515cde044e26207bf57c2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_641b22847853c037946062063c3cbbee50ffc4487b515cde044e26207bf57c2f->enter($__internal_641b22847853c037946062063c3cbbee50ffc4487b515cde044e26207bf57c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ee4e4bd16f42016dce80a64e8be64019b70414916397d13c27624d58422baa5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee4e4bd16f42016dce80a64e8be64019b70414916397d13c27624d58422baa5b->enter($__internal_ee4e4bd16f42016dce80a64e8be64019b70414916397d13c27624d58422baa5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_641b22847853c037946062063c3cbbee50ffc4487b515cde044e26207bf57c2f->leave($__internal_641b22847853c037946062063c3cbbee50ffc4487b515cde044e26207bf57c2f_prof);

        
        $__internal_ee4e4bd16f42016dce80a64e8be64019b70414916397d13c27624d58422baa5b->leave($__internal_ee4e4bd16f42016dce80a64e8be64019b70414916397d13c27624d58422baa5b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6912fe375c9de3b3316ee2912a93e1672e4fb3217a2ac3c6edabc7c34a26c344 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6912fe375c9de3b3316ee2912a93e1672e4fb3217a2ac3c6edabc7c34a26c344->enter($__internal_6912fe375c9de3b3316ee2912a93e1672e4fb3217a2ac3c6edabc7c34a26c344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ec388fc6bbd5897510de88748198147729c91fba7458b28595bc46dd6cf82c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec388fc6bbd5897510de88748198147729c91fba7458b28595bc46dd6cf82c5d->enter($__internal_ec388fc6bbd5897510de88748198147729c91fba7458b28595bc46dd6cf82c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ec388fc6bbd5897510de88748198147729c91fba7458b28595bc46dd6cf82c5d->leave($__internal_ec388fc6bbd5897510de88748198147729c91fba7458b28595bc46dd6cf82c5d_prof);

        
        $__internal_6912fe375c9de3b3316ee2912a93e1672e4fb3217a2ac3c6edabc7c34a26c344->leave($__internal_6912fe375c9de3b3316ee2912a93e1672e4fb3217a2ac3c6edabc7c34a26c344_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6c7122d338f7ab51bfdc6e6e14b0e12ef0f9a6f45f51e043ba62fd77865b4640 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c7122d338f7ab51bfdc6e6e14b0e12ef0f9a6f45f51e043ba62fd77865b4640->enter($__internal_6c7122d338f7ab51bfdc6e6e14b0e12ef0f9a6f45f51e043ba62fd77865b4640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_71c10dfa2191f8c40856d29f07d2330f1f3f4bd678f87f4e8279caf7c7f1875f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71c10dfa2191f8c40856d29f07d2330f1f3f4bd678f87f4e8279caf7c7f1875f->enter($__internal_71c10dfa2191f8c40856d29f07d2330f1f3f4bd678f87f4e8279caf7c7f1875f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_71c10dfa2191f8c40856d29f07d2330f1f3f4bd678f87f4e8279caf7c7f1875f->leave($__internal_71c10dfa2191f8c40856d29f07d2330f1f3f4bd678f87f4e8279caf7c7f1875f_prof);

        
        $__internal_6c7122d338f7ab51bfdc6e6e14b0e12ef0f9a6f45f51e043ba62fd77865b4640->leave($__internal_6c7122d338f7ab51bfdc6e6e14b0e12ef0f9a6f45f51e043ba62fd77865b4640_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_afd5eb19b3d25400a12b64753ac288e5371b0ff7e459f19541e9100195dfd299 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afd5eb19b3d25400a12b64753ac288e5371b0ff7e459f19541e9100195dfd299->enter($__internal_afd5eb19b3d25400a12b64753ac288e5371b0ff7e459f19541e9100195dfd299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89f46ea351e4d360a8329f3b98a9ef4ef1b30b0718cbd2aef0352ae317032610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89f46ea351e4d360a8329f3b98a9ef4ef1b30b0718cbd2aef0352ae317032610->enter($__internal_89f46ea351e4d360a8329f3b98a9ef4ef1b30b0718cbd2aef0352ae317032610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_89f46ea351e4d360a8329f3b98a9ef4ef1b30b0718cbd2aef0352ae317032610->leave($__internal_89f46ea351e4d360a8329f3b98a9ef4ef1b30b0718cbd2aef0352ae317032610_prof);

        
        $__internal_afd5eb19b3d25400a12b64753ac288e5371b0ff7e459f19541e9100195dfd299->leave($__internal_afd5eb19b3d25400a12b64753ac288e5371b0ff7e459f19541e9100195dfd299_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\twig-bundle\\Resources\\views\\layout.html.twig");
    }
}
