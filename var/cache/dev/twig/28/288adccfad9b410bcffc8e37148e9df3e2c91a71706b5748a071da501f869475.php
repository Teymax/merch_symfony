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
        $__internal_1336b994ce9910131e6f5078ef3418ebd26713ba147d4c39d2001c16fc95b340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1336b994ce9910131e6f5078ef3418ebd26713ba147d4c39d2001c16fc95b340->enter($__internal_1336b994ce9910131e6f5078ef3418ebd26713ba147d4c39d2001c16fc95b340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_90c8ccc7a045ccb7d0e85fc6f639ba3bb4d8c9b529092b7acd731ea4d5767b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c8ccc7a045ccb7d0e85fc6f639ba3bb4d8c9b529092b7acd731ea4d5767b23->enter($__internal_90c8ccc7a045ccb7d0e85fc6f639ba3bb4d8c9b529092b7acd731ea4d5767b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_1336b994ce9910131e6f5078ef3418ebd26713ba147d4c39d2001c16fc95b340->leave($__internal_1336b994ce9910131e6f5078ef3418ebd26713ba147d4c39d2001c16fc95b340_prof);

        
        $__internal_90c8ccc7a045ccb7d0e85fc6f639ba3bb4d8c9b529092b7acd731ea4d5767b23->leave($__internal_90c8ccc7a045ccb7d0e85fc6f639ba3bb4d8c9b529092b7acd731ea4d5767b23_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_748e0e3a772f91450ba231f75aa6b90184b1e75bdfe8e063320a8de5335bbc95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_748e0e3a772f91450ba231f75aa6b90184b1e75bdfe8e063320a8de5335bbc95->enter($__internal_748e0e3a772f91450ba231f75aa6b90184b1e75bdfe8e063320a8de5335bbc95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4f388ce6b1ba8f76e415288ef7c945a57ee84d7cdd26901c4bf35c9caf8fd7ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f388ce6b1ba8f76e415288ef7c945a57ee84d7cdd26901c4bf35c9caf8fd7ef->enter($__internal_4f388ce6b1ba8f76e415288ef7c945a57ee84d7cdd26901c4bf35c9caf8fd7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4f388ce6b1ba8f76e415288ef7c945a57ee84d7cdd26901c4bf35c9caf8fd7ef->leave($__internal_4f388ce6b1ba8f76e415288ef7c945a57ee84d7cdd26901c4bf35c9caf8fd7ef_prof);

        
        $__internal_748e0e3a772f91450ba231f75aa6b90184b1e75bdfe8e063320a8de5335bbc95->leave($__internal_748e0e3a772f91450ba231f75aa6b90184b1e75bdfe8e063320a8de5335bbc95_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_0d2aaafd825e65297febec775ccd46c7b1985e40d13c3b375ed32a23fcea508f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d2aaafd825e65297febec775ccd46c7b1985e40d13c3b375ed32a23fcea508f->enter($__internal_0d2aaafd825e65297febec775ccd46c7b1985e40d13c3b375ed32a23fcea508f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bed889fc543a9339cbe39f93ffa93b74e9e13723b80e9fdd089fddcd070ea181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bed889fc543a9339cbe39f93ffa93b74e9e13723b80e9fdd089fddcd070ea181->enter($__internal_bed889fc543a9339cbe39f93ffa93b74e9e13723b80e9fdd089fddcd070ea181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_bed889fc543a9339cbe39f93ffa93b74e9e13723b80e9fdd089fddcd070ea181->leave($__internal_bed889fc543a9339cbe39f93ffa93b74e9e13723b80e9fdd089fddcd070ea181_prof);

        
        $__internal_0d2aaafd825e65297febec775ccd46c7b1985e40d13c3b375ed32a23fcea508f->leave($__internal_0d2aaafd825e65297febec775ccd46c7b1985e40d13c3b375ed32a23fcea508f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_84b7e53a0f3bffd0c927f86551e37cd1666979658fa8bb2cbfa41064dc50b4be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84b7e53a0f3bffd0c927f86551e37cd1666979658fa8bb2cbfa41064dc50b4be->enter($__internal_84b7e53a0f3bffd0c927f86551e37cd1666979658fa8bb2cbfa41064dc50b4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_feb08376038312050ff423c71419e9701be7959ac62e134a253251a8b0cc3ed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feb08376038312050ff423c71419e9701be7959ac62e134a253251a8b0cc3ed1->enter($__internal_feb08376038312050ff423c71419e9701be7959ac62e134a253251a8b0cc3ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_feb08376038312050ff423c71419e9701be7959ac62e134a253251a8b0cc3ed1->leave($__internal_feb08376038312050ff423c71419e9701be7959ac62e134a253251a8b0cc3ed1_prof);

        
        $__internal_84b7e53a0f3bffd0c927f86551e37cd1666979658fa8bb2cbfa41064dc50b4be->leave($__internal_84b7e53a0f3bffd0c927f86551e37cd1666979658fa8bb2cbfa41064dc50b4be_prof);

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
