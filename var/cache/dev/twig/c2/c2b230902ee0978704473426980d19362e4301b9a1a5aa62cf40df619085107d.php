<?php

/* registration/register.html.twig */
class __TwigTemplate_7e5512f7ee29c529149fae1d2358305b9c0660ff76e73bf26be0332f267b120d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66b05f9b5a18be004acfde5a6b40c659997320927074008fd3c0a761001e260b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66b05f9b5a18be004acfde5a6b40c659997320927074008fd3c0a761001e260b->enter($__internal_66b05f9b5a18be004acfde5a6b40c659997320927074008fd3c0a761001e260b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_4d06403c4a22d31bc5f1d2d8952d439838131eb4495f1d5f548e88667f9d7654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d06403c4a22d31bc5f1d2d8952d439838131eb4495f1d5f548e88667f9d7654->enter($__internal_4d06403c4a22d31bc5f1d2d8952d439838131eb4495f1d5f548e88667f9d7654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        echo "            ";
        // line 2
        echo "            ";
        // line 3
        echo "            ";
        // line 4
        echo "            ";
        // line 5
        echo "            ";
        // line 6
        echo "            ";
        // line 7
        echo "
            ";
        // line 9
        echo "            ";
        // line 10
        echo "            <!DOCTYPE html>
            <html>
            <head>
                <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
                <title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
                <!--[if lt IE 9]>
                <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
                <![endif]-->
                ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "            </head>
            <body>
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
                <div class=\"container-fluid\">
                    <a class=\"navbar-brand\" href=\"#\">MerchByAmazon Registeration</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                        <ul class=\"navbar-nav ml-auto\">
                            <li class=\"nav-item active\">
                                <a class=\"nav-link\" href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Back <span class=\"sr-only\">(current)</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class=\"container-fluid\" id=\"main_container\">
                ";
        // line 50
        $this->displayBlock('navigation', $context, $blocks);
        // line 74
        echo "

            ";
        // line 76
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "            </div>
            </body>
            </html>
";
        
        $__internal_66b05f9b5a18be004acfde5a6b40c659997320927074008fd3c0a761001e260b->leave($__internal_66b05f9b5a18be004acfde5a6b40c659997320927074008fd3c0a761001e260b_prof);

        
        $__internal_4d06403c4a22d31bc5f1d2d8952d439838131eb4495f1d5f548e88667f9d7654->leave($__internal_4d06403c4a22d31bc5f1d2d8952d439838131eb4495f1d5f548e88667f9d7654_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_efae058ec480cdb510d47d472065446e08e34fe92b8ae8839a4d8d6c9f63a29f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efae058ec480cdb510d47d472065446e08e34fe92b8ae8839a4d8d6c9f63a29f->enter($__internal_efae058ec480cdb510d47d472065446e08e34fe92b8ae8839a4d8d6c9f63a29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d4779ac037d14a5384f80c26f9f1c5a3804f5ad3775bbc76cbf8198743eca3df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4779ac037d14a5384f80c26f9f1c5a3804f5ad3775bbc76cbf8198743eca3df->enter($__internal_d4779ac037d14a5384f80c26f9f1c5a3804f5ad3775bbc76cbf8198743eca3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MerchByAmazon | Registeration";
        
        $__internal_d4779ac037d14a5384f80c26f9f1c5a3804f5ad3775bbc76cbf8198743eca3df->leave($__internal_d4779ac037d14a5384f80c26f9f1c5a3804f5ad3775bbc76cbf8198743eca3df_prof);

        
        $__internal_efae058ec480cdb510d47d472065446e08e34fe92b8ae8839a4d8d6c9f63a29f->leave($__internal_efae058ec480cdb510d47d472065446e08e34fe92b8ae8839a4d8d6c9f63a29f_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2b438c2643ad3dd9f3b9052fd8b8f01acd76c24f4d1148c7a575e9711ac6409b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b438c2643ad3dd9f3b9052fd8b8f01acd76c24f4d1148c7a575e9711ac6409b->enter($__internal_2b438c2643ad3dd9f3b9052fd8b8f01acd76c24f4d1148c7a575e9711ac6409b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_744552c565778c714ac7d439f049f7f0e0b07e129d891c1135814621b97d044c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_744552c565778c714ac7d439f049f7f0e0b07e129d891c1135814621b97d044c->enter($__internal_744552c565778c714ac7d439f049f7f0e0b07e129d891c1135814621b97d044c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "                    <!-- Fonts -->
                    <link href=\"https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i\" rel=\"stylesheet\">

                    <!-- Styles -->
                    <link href=\"assets/css/core.min.css\" rel=\"stylesheet\">
                    <link href=\"assets/css/app.min.css\" rel=\"stylesheet\">
                    <link href=\"assets/css/style.min.css\" rel=\"stylesheet\">
                    <link href=\"assets/css/main.css\" rel=\"stylesheet\">

                    <!-- Favicons -->
                    <link rel=\"apple-touch-icon\" href=\"assets/img/apple-touch-icon.png\">
                    <link rel=\"icon\" href=\"assets/img/favicon.png\">
                ";
        
        $__internal_744552c565778c714ac7d439f049f7f0e0b07e129d891c1135814621b97d044c->leave($__internal_744552c565778c714ac7d439f049f7f0e0b07e129d891c1135814621b97d044c_prof);

        
        $__internal_2b438c2643ad3dd9f3b9052fd8b8f01acd76c24f4d1148c7a575e9711ac6409b->leave($__internal_2b438c2643ad3dd9f3b9052fd8b8f01acd76c24f4d1148c7a575e9711ac6409b_prof);

    }

    // line 50
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_999c8647a43c8d1166a1aadfc95be1cb76fd97fbc55b1f6b65496e56225b571d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_999c8647a43c8d1166a1aadfc95be1cb76fd97fbc55b1f6b65496e56225b571d->enter($__internal_999c8647a43c8d1166a1aadfc95be1cb76fd97fbc55b1f6b65496e56225b571d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_67f7bcea2a18cd7c7bfa58d5cfb7759a9bc2b47447488a99aed9acda9a1688a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67f7bcea2a18cd7c7bfa58d5cfb7759a9bc2b47447488a99aed9acda9a1688a1->enter($__internal_67f7bcea2a18cd7c7bfa58d5cfb7759a9bc2b47447488a99aed9acda9a1688a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 51
        echo "                <div class=\"p-3 mb-2 text-white container col-3\" id=\"logIn_form\" style=\"margin: 0 auto;\">
                    <div class=\"form-group\">
                        ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), 'form_start');
        echo "
                        <label  style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left;\" for=\"username\">Username:</label>
                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->getSourceContext()); })()), "username", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        </br>
                        <label  style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left;\" for=\"username\">Email:</label>
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->getSourceContext()); })()), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        </br>
                        <label  style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left;\" for=\"username\">Password:</label>
                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), "plainPassword", array()), "first", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        </br>
                        <label  style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left;\" for=\"username\">Repeat Password:</label>
                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 64, $this->getSourceContext()); })()), "plainPassword", array()), "second", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                        </br>
                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->getSourceContext()); })()), "regDate", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

                        <button type=\"submit\" class=\"btn btn-info\">Register!</button>
                        ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 69, $this->getSourceContext()); })()), 'form_end');
        echo "
                    </div>
                </div>
            </div>
            ";
        
        $__internal_67f7bcea2a18cd7c7bfa58d5cfb7759a9bc2b47447488a99aed9acda9a1688a1->leave($__internal_67f7bcea2a18cd7c7bfa58d5cfb7759a9bc2b47447488a99aed9acda9a1688a1_prof);

        
        $__internal_999c8647a43c8d1166a1aadfc95be1cb76fd97fbc55b1f6b65496e56225b571d->leave($__internal_999c8647a43c8d1166a1aadfc95be1cb76fd97fbc55b1f6b65496e56225b571d_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_088f2c97b4915a83e7ba720deaba59403f98f431f7cdc22e8be7ad352c736760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_088f2c97b4915a83e7ba720deaba59403f98f431f7cdc22e8be7ad352c736760->enter($__internal_088f2c97b4915a83e7ba720deaba59403f98f431f7cdc22e8be7ad352c736760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_27a1875216111fd3fa77023de0e81366ae7132e793dd5020b3c8b5e08f81ee89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27a1875216111fd3fa77023de0e81366ae7132e793dd5020b3c8b5e08f81ee89->enter($__internal_27a1875216111fd3fa77023de0e81366ae7132e793dd5020b3c8b5e08f81ee89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "                <!-- Scripts -->
                <script src=\"assets/js/core.min.js\"></script>
                <script src=\"assets/js/app.min.js\"></script>
                <script src=\"assets/js/script.min.js\"></script>
            ";
        
        $__internal_27a1875216111fd3fa77023de0e81366ae7132e793dd5020b3c8b5e08f81ee89->leave($__internal_27a1875216111fd3fa77023de0e81366ae7132e793dd5020b3c8b5e08f81ee89_prof);

        
        $__internal_088f2c97b4915a83e7ba720deaba59403f98f431f7cdc22e8be7ad352c736760->leave($__internal_088f2c97b4915a83e7ba720deaba59403f98f431f7cdc22e8be7ad352c736760_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 77,  216 => 76,  201 => 69,  195 => 66,  190 => 64,  184 => 61,  178 => 58,  172 => 55,  167 => 53,  163 => 51,  154 => 50,  132 => 19,  123 => 18,  105 => 14,  92 => 82,  90 => 76,  86 => 74,  84 => 50,  74 => 43,  61 => 32,  59 => 18,  52 => 14,  46 => 10,  44 => 9,  41 => 7,  39 => 6,  37 => 5,  35 => 4,  33 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("            {#{{ form_start(form) }}#}
            {#{{ form_row(form.username, { 'attr': {'class': 'form-control'} }) }}#}
            {#{{ form_row(form.email, { 'attr': {'class': 'form-control'} }) }}#}
            {#{{ form_row(form.plainPassword.first, { 'attr': {'class': 'form-control'} }) }}#}
            {#{{ form_row(form.plainPassword.second, { 'attr': {'class': 'form-control'} }) }}#}
            {#{{ form_row(form.regDate, { 'attr': {'class': 'form-control'} }) }}#}

            {#<button type=\"submit\" class=\"btn btn-info\">Register!</button>#}
            {#{{ form_end(form) }}#}
            <!DOCTYPE html>
            <html>
            <head>
                <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
                <title>{% block title %}MerchByAmazon | Registeration{% endblock %}</title>
                <!--[if lt IE 9]>
                <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
                <![endif]-->
                {% block stylesheets %}
                    <!-- Fonts -->
                    <link href=\"https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i\" rel=\"stylesheet\">

                    <!-- Styles -->
                    <link href=\"assets/css/core.min.css\" rel=\"stylesheet\">
                    <link href=\"assets/css/app.min.css\" rel=\"stylesheet\">
                    <link href=\"assets/css/style.min.css\" rel=\"stylesheet\">
                    <link href=\"assets/css/main.css\" rel=\"stylesheet\">

                    <!-- Favicons -->
                    <link rel=\"apple-touch-icon\" href=\"assets/img/apple-touch-icon.png\">
                    <link rel=\"icon\" href=\"assets/img/favicon.png\">
                {% endblock %}
            </head>
            <body>
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
                <div class=\"container-fluid\">
                    <a class=\"navbar-brand\" href=\"#\">MerchByAmazon Registeration</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                        <ul class=\"navbar-nav ml-auto\">
                            <li class=\"nav-item active\">
                                <a class=\"nav-link\" href=\"{{ path('index') }}\">Back <span class=\"sr-only\">(current)</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class=\"container-fluid\" id=\"main_container\">
                {% block navigation %}
                <div class=\"p-3 mb-2 text-white container col-3\" id=\"logIn_form\" style=\"margin: 0 auto;\">
                    <div class=\"form-group\">
                        {{ form_start(form) }}
                        <label  style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left;\" for=\"username\">Username:</label>
                        {{ form_row(form.username, { 'attr': {'class': 'form-control'} }) }}
                        </br>
                        <label  style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left;\" for=\"username\">Email:</label>
                        {{ form_row(form.email, { 'attr': {'class': 'form-control'} }) }}
                        </br>
                        <label  style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left;\" for=\"username\">Password:</label>
                        {{ form_row(form.plainPassword.first, { 'attr': {'class': 'form-control'} }) }}
                        </br>
                        <label  style=\"font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left;\" for=\"username\">Repeat Password:</label>
                        {{ form_row(form.plainPassword.second, { 'attr': {'class': 'form-control'} }) }}
                        </br>
                        {{ form_row(form.regDate, { 'attr': {'class': 'form-control'} }) }}

                        <button type=\"submit\" class=\"btn btn-info\">Register!</button>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
            {% endblock %}


            {% block javascripts %}
                <!-- Scripts -->
                <script src=\"assets/js/core.min.js\"></script>
                <script src=\"assets/js/app.min.js\"></script>
                <script src=\"assets/js/script.min.js\"></script>
            {% endblock %}
            </div>
            </body>
            </html>
", "registration/register.html.twig", "D:\\OSPanel\\domains\\merch\\templates\\registration\\register.html.twig");
    }
}
