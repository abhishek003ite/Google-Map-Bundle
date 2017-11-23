<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_42ad1cda4129fb7dd270a17c73e9d777ce83a5593fdd83dab77160909243549d extends Twig_Template
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
        $__internal_c1d36f8042a022af7e2867d91549568cfc96ef054532c3713cb7e1a6d33b42d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1d36f8042a022af7e2867d91549568cfc96ef054532c3713cb7e1a6d33b42d0->enter($__internal_c1d36f8042a022af7e2867d91549568cfc96ef054532c3713cb7e1a6d33b42d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a57f3c34e6d80fe7b6c8fb0807798319b83d60a20534f4822a79fa94cacb130c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a57f3c34e6d80fe7b6c8fb0807798319b83d60a20534f4822a79fa94cacb130c->enter($__internal_a57f3c34e6d80fe7b6c8fb0807798319b83d60a20534f4822a79fa94cacb130c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_c1d36f8042a022af7e2867d91549568cfc96ef054532c3713cb7e1a6d33b42d0->leave($__internal_c1d36f8042a022af7e2867d91549568cfc96ef054532c3713cb7e1a6d33b42d0_prof);

        
        $__internal_a57f3c34e6d80fe7b6c8fb0807798319b83d60a20534f4822a79fa94cacb130c->leave($__internal_a57f3c34e6d80fe7b6c8fb0807798319b83d60a20534f4822a79fa94cacb130c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f975297dd17ab25059215c7497265defeb9bf98ea20cae52ef42fde63aa42fda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f975297dd17ab25059215c7497265defeb9bf98ea20cae52ef42fde63aa42fda->enter($__internal_f975297dd17ab25059215c7497265defeb9bf98ea20cae52ef42fde63aa42fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2555a561235260086c5affe3ffcb7ea5cb286f54b6112d43a1f74ec5609c40d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2555a561235260086c5affe3ffcb7ea5cb286f54b6112d43a1f74ec5609c40d4->enter($__internal_2555a561235260086c5affe3ffcb7ea5cb286f54b6112d43a1f74ec5609c40d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2555a561235260086c5affe3ffcb7ea5cb286f54b6112d43a1f74ec5609c40d4->leave($__internal_2555a561235260086c5affe3ffcb7ea5cb286f54b6112d43a1f74ec5609c40d4_prof);

        
        $__internal_f975297dd17ab25059215c7497265defeb9bf98ea20cae52ef42fde63aa42fda->leave($__internal_f975297dd17ab25059215c7497265defeb9bf98ea20cae52ef42fde63aa42fda_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_85760bc384e27d584f569ee95815eab607ae2dd690f5c1a199b24d555e2866e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85760bc384e27d584f569ee95815eab607ae2dd690f5c1a199b24d555e2866e7->enter($__internal_85760bc384e27d584f569ee95815eab607ae2dd690f5c1a199b24d555e2866e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_88892688d2f35d1647b924cd7e27fe58c983e274c4b99c2bc06876bc926691bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88892688d2f35d1647b924cd7e27fe58c983e274c4b99c2bc06876bc926691bb->enter($__internal_88892688d2f35d1647b924cd7e27fe58c983e274c4b99c2bc06876bc926691bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_88892688d2f35d1647b924cd7e27fe58c983e274c4b99c2bc06876bc926691bb->leave($__internal_88892688d2f35d1647b924cd7e27fe58c983e274c4b99c2bc06876bc926691bb_prof);

        
        $__internal_85760bc384e27d584f569ee95815eab607ae2dd690f5c1a199b24d555e2866e7->leave($__internal_85760bc384e27d584f569ee95815eab607ae2dd690f5c1a199b24d555e2866e7_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_19794dcccdb898c6f77bf5bd028d3cd2a932f6f88eab0ddbc2eb3d36d0916fac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19794dcccdb898c6f77bf5bd028d3cd2a932f6f88eab0ddbc2eb3d36d0916fac->enter($__internal_19794dcccdb898c6f77bf5bd028d3cd2a932f6f88eab0ddbc2eb3d36d0916fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b2135fab76e303051e7f7f222588d89524c1574174dbaf11761d09252b9ff9fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2135fab76e303051e7f7f222588d89524c1574174dbaf11761d09252b9ff9fd->enter($__internal_b2135fab76e303051e7f7f222588d89524c1574174dbaf11761d09252b9ff9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b2135fab76e303051e7f7f222588d89524c1574174dbaf11761d09252b9ff9fd->leave($__internal_b2135fab76e303051e7f7f222588d89524c1574174dbaf11761d09252b9ff9fd_prof);

        
        $__internal_19794dcccdb898c6f77bf5bd028d3cd2a932f6f88eab0ddbc2eb3d36d0916fac->leave($__internal_19794dcccdb898c6f77bf5bd028d3cd2a932f6f88eab0ddbc2eb3d36d0916fac_prof);

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
", "@Twig/layout.html.twig", "/Users/sadhya/Desktop/Symfony/googleMapProject/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
