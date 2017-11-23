<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4fe0126cea834c2021a568bc22188a6a6babe007ed6f1aff9514e87b8ba11595 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a430d70c341796f00d3864801dd76713c6079cd0c28705fa40c90f72f114d73a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a430d70c341796f00d3864801dd76713c6079cd0c28705fa40c90f72f114d73a->enter($__internal_a430d70c341796f00d3864801dd76713c6079cd0c28705fa40c90f72f114d73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_9c9a4047aa87b2782d6bfccbea496bfb477d21ea5c3dd546e992cb66f16c6f16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c9a4047aa87b2782d6bfccbea496bfb477d21ea5c3dd546e992cb66f16c6f16->enter($__internal_9c9a4047aa87b2782d6bfccbea496bfb477d21ea5c3dd546e992cb66f16c6f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a430d70c341796f00d3864801dd76713c6079cd0c28705fa40c90f72f114d73a->leave($__internal_a430d70c341796f00d3864801dd76713c6079cd0c28705fa40c90f72f114d73a_prof);

        
        $__internal_9c9a4047aa87b2782d6bfccbea496bfb477d21ea5c3dd546e992cb66f16c6f16->leave($__internal_9c9a4047aa87b2782d6bfccbea496bfb477d21ea5c3dd546e992cb66f16c6f16_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2b48611e95b8ed0bbb1e97ab898a5a177947bc75a38c5c1b802a5e26a50725a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b48611e95b8ed0bbb1e97ab898a5a177947bc75a38c5c1b802a5e26a50725a1->enter($__internal_2b48611e95b8ed0bbb1e97ab898a5a177947bc75a38c5c1b802a5e26a50725a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2de0447064e1be2b264b136235b2aa33557c0da0dedd8d6b82804feed779d98d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de0447064e1be2b264b136235b2aa33557c0da0dedd8d6b82804feed779d98d->enter($__internal_2de0447064e1be2b264b136235b2aa33557c0da0dedd8d6b82804feed779d98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_2de0447064e1be2b264b136235b2aa33557c0da0dedd8d6b82804feed779d98d->leave($__internal_2de0447064e1be2b264b136235b2aa33557c0da0dedd8d6b82804feed779d98d_prof);

        
        $__internal_2b48611e95b8ed0bbb1e97ab898a5a177947bc75a38c5c1b802a5e26a50725a1->leave($__internal_2b48611e95b8ed0bbb1e97ab898a5a177947bc75a38c5c1b802a5e26a50725a1_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee80ae5803f6e20e01e265498db48de65d8b9ed003cdcebc28711759a3398a59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee80ae5803f6e20e01e265498db48de65d8b9ed003cdcebc28711759a3398a59->enter($__internal_ee80ae5803f6e20e01e265498db48de65d8b9ed003cdcebc28711759a3398a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b5ee9131a3b1e33986ad3115baa50837958fb371538dd3b2c8a45764c9e76dbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5ee9131a3b1e33986ad3115baa50837958fb371538dd3b2c8a45764c9e76dbe->enter($__internal_b5ee9131a3b1e33986ad3115baa50837958fb371538dd3b2c8a45764c9e76dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_b5ee9131a3b1e33986ad3115baa50837958fb371538dd3b2c8a45764c9e76dbe->leave($__internal_b5ee9131a3b1e33986ad3115baa50837958fb371538dd3b2c8a45764c9e76dbe_prof);

        
        $__internal_ee80ae5803f6e20e01e265498db48de65d8b9ed003cdcebc28711759a3398a59->leave($__internal_ee80ae5803f6e20e01e265498db48de65d8b9ed003cdcebc28711759a3398a59_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bc9e47d7c11da0b2a7a4e21844b6116fdb8510b1fc5cbeb84bae520a93bb6b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bc9e47d7c11da0b2a7a4e21844b6116fdb8510b1fc5cbeb84bae520a93bb6b9->enter($__internal_9bc9e47d7c11da0b2a7a4e21844b6116fdb8510b1fc5cbeb84bae520a93bb6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8577fe1a0a709b83ab7e54b5dc2b5ea2b29806934151e4e5581d4a0a7def8248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8577fe1a0a709b83ab7e54b5dc2b5ea2b29806934151e4e5581d4a0a7def8248->enter($__internal_8577fe1a0a709b83ab7e54b5dc2b5ea2b29806934151e4e5581d4a0a7def8248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8577fe1a0a709b83ab7e54b5dc2b5ea2b29806934151e4e5581d4a0a7def8248->leave($__internal_8577fe1a0a709b83ab7e54b5dc2b5ea2b29806934151e4e5581d4a0a7def8248_prof);

        
        $__internal_9bc9e47d7c11da0b2a7a4e21844b6116fdb8510b1fc5cbeb84bae520a93bb6b9->leave($__internal_9bc9e47d7c11da0b2a7a4e21844b6116fdb8510b1fc5cbeb84bae520a93bb6b9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/sadhya/Desktop/Symfony/googleMapProject/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
