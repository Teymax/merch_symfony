<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_8ee1c31d40e56565f861fdd25804617c85065b3a207ff1ded371d9013b3369b4 extends Twig_Template
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
        $__internal_6925e08baa1fa0d56e22fc4930ae39512584cf882d9f4828ee1bfbe1b726cd09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6925e08baa1fa0d56e22fc4930ae39512584cf882d9f4828ee1bfbe1b726cd09->enter($__internal_6925e08baa1fa0d56e22fc4930ae39512584cf882d9f4828ee1bfbe1b726cd09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_9831dc1a868b5c8d2e98b2c9f82e96c0c221635757866e1f1a23bc8f42f8910f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9831dc1a868b5c8d2e98b2c9f82e96c0c221635757866e1f1a23bc8f42f8910f->enter($__internal_9831dc1a868b5c8d2e98b2c9f82e96c0c221635757866e1f1a23bc8f42f8910f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_6925e08baa1fa0d56e22fc4930ae39512584cf882d9f4828ee1bfbe1b726cd09->leave($__internal_6925e08baa1fa0d56e22fc4930ae39512584cf882d9f4828ee1bfbe1b726cd09_prof);

        
        $__internal_9831dc1a868b5c8d2e98b2c9f82e96c0c221635757866e1f1a23bc8f42f8910f->leave($__internal_9831dc1a868b5c8d2e98b2c9f82e96c0c221635757866e1f1a23bc8f42f8910f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "D:\\OSPanel\\domains\\merch\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
