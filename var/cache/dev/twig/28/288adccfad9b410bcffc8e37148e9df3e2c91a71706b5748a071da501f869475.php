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
        $__internal_f68fca5f94ab918e8eba7fb92460a1f3e8de0326650c5beb8c3216d91304f3e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f68fca5f94ab918e8eba7fb92460a1f3e8de0326650c5beb8c3216d91304f3e3->enter($__internal_f68fca5f94ab918e8eba7fb92460a1f3e8de0326650c5beb8c3216d91304f3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_34f7424ee0c32259205f6671460d94d3b55d71b1a2d01e95f52597648d3529c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34f7424ee0c32259205f6671460d94d3b55d71b1a2d01e95f52597648d3529c7->enter($__internal_34f7424ee0c32259205f6671460d94d3b55d71b1a2d01e95f52597648d3529c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_f68fca5f94ab918e8eba7fb92460a1f3e8de0326650c5beb8c3216d91304f3e3->leave($__internal_f68fca5f94ab918e8eba7fb92460a1f3e8de0326650c5beb8c3216d91304f3e3_prof);

        
        $__internal_34f7424ee0c32259205f6671460d94d3b55d71b1a2d01e95f52597648d3529c7->leave($__internal_34f7424ee0c32259205f6671460d94d3b55d71b1a2d01e95f52597648d3529c7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_351c94ab2f584a758a7318214c540ffe0004211a0de7017d96763a1b86a7b71e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_351c94ab2f584a758a7318214c540ffe0004211a0de7017d96763a1b86a7b71e->enter($__internal_351c94ab2f584a758a7318214c540ffe0004211a0de7017d96763a1b86a7b71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8663c49a41da305df27c996c4a67067297367674db8fa0a4381e38826902c248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8663c49a41da305df27c996c4a67067297367674db8fa0a4381e38826902c248->enter($__internal_8663c49a41da305df27c996c4a67067297367674db8fa0a4381e38826902c248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8663c49a41da305df27c996c4a67067297367674db8fa0a4381e38826902c248->leave($__internal_8663c49a41da305df27c996c4a67067297367674db8fa0a4381e38826902c248_prof);

        
        $__internal_351c94ab2f584a758a7318214c540ffe0004211a0de7017d96763a1b86a7b71e->leave($__internal_351c94ab2f584a758a7318214c540ffe0004211a0de7017d96763a1b86a7b71e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_2824ede794968d7c73b4fd4e203e769542ca62ed1cb186842a002b4bc9fa279f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2824ede794968d7c73b4fd4e203e769542ca62ed1cb186842a002b4bc9fa279f->enter($__internal_2824ede794968d7c73b4fd4e203e769542ca62ed1cb186842a002b4bc9fa279f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e7664e5ef686ebf989351caf760c7320d8ebe8db0b1597f743c20b03a6904f00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7664e5ef686ebf989351caf760c7320d8ebe8db0b1597f743c20b03a6904f00->enter($__internal_e7664e5ef686ebf989351caf760c7320d8ebe8db0b1597f743c20b03a6904f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e7664e5ef686ebf989351caf760c7320d8ebe8db0b1597f743c20b03a6904f00->leave($__internal_e7664e5ef686ebf989351caf760c7320d8ebe8db0b1597f743c20b03a6904f00_prof);

        
        $__internal_2824ede794968d7c73b4fd4e203e769542ca62ed1cb186842a002b4bc9fa279f->leave($__internal_2824ede794968d7c73b4fd4e203e769542ca62ed1cb186842a002b4bc9fa279f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_6adf38c5b6c873d0747122d0ad64a048c3f5c255a051adfb895490c4f609a839 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6adf38c5b6c873d0747122d0ad64a048c3f5c255a051adfb895490c4f609a839->enter($__internal_6adf38c5b6c873d0747122d0ad64a048c3f5c255a051adfb895490c4f609a839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e0b38a824387cb6a5866e7b0422bf9150e46657c06fd6b0a669e5f726ec6dbbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b38a824387cb6a5866e7b0422bf9150e46657c06fd6b0a669e5f726ec6dbbf->enter($__internal_e0b38a824387cb6a5866e7b0422bf9150e46657c06fd6b0a669e5f726ec6dbbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e0b38a824387cb6a5866e7b0422bf9150e46657c06fd6b0a669e5f726ec6dbbf->leave($__internal_e0b38a824387cb6a5866e7b0422bf9150e46657c06fd6b0a669e5f726ec6dbbf_prof);

        
        $__internal_6adf38c5b6c873d0747122d0ad64a048c3f5c255a051adfb895490c4f609a839->leave($__internal_6adf38c5b6c873d0747122d0ad64a048c3f5c255a051adfb895490c4f609a839_prof);

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
