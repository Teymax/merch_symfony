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
        $__internal_1c1cbd191d0699f9d19470bae928eaa2f9e250dd6143e840a4c9fdad8bf200c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c1cbd191d0699f9d19470bae928eaa2f9e250dd6143e840a4c9fdad8bf200c0->enter($__internal_1c1cbd191d0699f9d19470bae928eaa2f9e250dd6143e840a4c9fdad8bf200c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_15c3851cbf6b6b53090b5cb761f3db9c003936c1903ffc8f91aa79b12396a31d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15c3851cbf6b6b53090b5cb761f3db9c003936c1903ffc8f91aa79b12396a31d->enter($__internal_15c3851cbf6b6b53090b5cb761f3db9c003936c1903ffc8f91aa79b12396a31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_1c1cbd191d0699f9d19470bae928eaa2f9e250dd6143e840a4c9fdad8bf200c0->leave($__internal_1c1cbd191d0699f9d19470bae928eaa2f9e250dd6143e840a4c9fdad8bf200c0_prof);

        
        $__internal_15c3851cbf6b6b53090b5cb761f3db9c003936c1903ffc8f91aa79b12396a31d->leave($__internal_15c3851cbf6b6b53090b5cb761f3db9c003936c1903ffc8f91aa79b12396a31d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3075d3ea22f157b733fe7a9d4138cf079dea579d0b950275bcb945d0927a506f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3075d3ea22f157b733fe7a9d4138cf079dea579d0b950275bcb945d0927a506f->enter($__internal_3075d3ea22f157b733fe7a9d4138cf079dea579d0b950275bcb945d0927a506f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_59298652a5d19e186db41989477dc835cfe61b1bd0f6fc783fc879c6b0a5104d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59298652a5d19e186db41989477dc835cfe61b1bd0f6fc783fc879c6b0a5104d->enter($__internal_59298652a5d19e186db41989477dc835cfe61b1bd0f6fc783fc879c6b0a5104d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_59298652a5d19e186db41989477dc835cfe61b1bd0f6fc783fc879c6b0a5104d->leave($__internal_59298652a5d19e186db41989477dc835cfe61b1bd0f6fc783fc879c6b0a5104d_prof);

        
        $__internal_3075d3ea22f157b733fe7a9d4138cf079dea579d0b950275bcb945d0927a506f->leave($__internal_3075d3ea22f157b733fe7a9d4138cf079dea579d0b950275bcb945d0927a506f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1edfb06f9b4ddc10be4e5994a1cc4704426ca4c76f94e28f1f76c49f4fdb59a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1edfb06f9b4ddc10be4e5994a1cc4704426ca4c76f94e28f1f76c49f4fdb59a4->enter($__internal_1edfb06f9b4ddc10be4e5994a1cc4704426ca4c76f94e28f1f76c49f4fdb59a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_29d6601f1cf404cb2a6d32f1a58ca440227464a9c3a6c22dfe733ff03319f458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29d6601f1cf404cb2a6d32f1a58ca440227464a9c3a6c22dfe733ff03319f458->enter($__internal_29d6601f1cf404cb2a6d32f1a58ca440227464a9c3a6c22dfe733ff03319f458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_29d6601f1cf404cb2a6d32f1a58ca440227464a9c3a6c22dfe733ff03319f458->leave($__internal_29d6601f1cf404cb2a6d32f1a58ca440227464a9c3a6c22dfe733ff03319f458_prof);

        
        $__internal_1edfb06f9b4ddc10be4e5994a1cc4704426ca4c76f94e28f1f76c49f4fdb59a4->leave($__internal_1edfb06f9b4ddc10be4e5994a1cc4704426ca4c76f94e28f1f76c49f4fdb59a4_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_06cfdef749da9e0e8e7781252913a4626e6a0f70628ae1f5ea4a75aa25671234 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06cfdef749da9e0e8e7781252913a4626e6a0f70628ae1f5ea4a75aa25671234->enter($__internal_06cfdef749da9e0e8e7781252913a4626e6a0f70628ae1f5ea4a75aa25671234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_15f45b5e8174d6f90bcd915414c15f95176ccdd6a535d70bf19da279e271535c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15f45b5e8174d6f90bcd915414c15f95176ccdd6a535d70bf19da279e271535c->enter($__internal_15f45b5e8174d6f90bcd915414c15f95176ccdd6a535d70bf19da279e271535c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_15f45b5e8174d6f90bcd915414c15f95176ccdd6a535d70bf19da279e271535c->leave($__internal_15f45b5e8174d6f90bcd915414c15f95176ccdd6a535d70bf19da279e271535c_prof);

        
        $__internal_06cfdef749da9e0e8e7781252913a4626e6a0f70628ae1f5ea4a75aa25671234->leave($__internal_06cfdef749da9e0e8e7781252913a4626e6a0f70628ae1f5ea4a75aa25671234_prof);

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
