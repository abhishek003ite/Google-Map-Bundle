<?php

/* GoogleApiBundle:Default:index.html.twig */
class __TwigTemplate_be5172cd8b5144540ea9d0b0fef9d95f4b2e0f556c9b8a51bd00cc7ab2b5417a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "GoogleApiBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8c0bee8df0c4cfd11f2d2b9326302c1414dc27252144d2507fa803253d7c1a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8c0bee8df0c4cfd11f2d2b9326302c1414dc27252144d2507fa803253d7c1a6->enter($__internal_f8c0bee8df0c4cfd11f2d2b9326302c1414dc27252144d2507fa803253d7c1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GoogleApiBundle:Default:index.html.twig"));

        $__internal_f247b4cba995dfd5a1911999a2f7d2a597a6ae8097d93303cc2386f39fc30d18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f247b4cba995dfd5a1911999a2f7d2a597a6ae8097d93303cc2386f39fc30d18->enter($__internal_f247b4cba995dfd5a1911999a2f7d2a597a6ae8097d93303cc2386f39fc30d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GoogleApiBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8c0bee8df0c4cfd11f2d2b9326302c1414dc27252144d2507fa803253d7c1a6->leave($__internal_f8c0bee8df0c4cfd11f2d2b9326302c1414dc27252144d2507fa803253d7c1a6_prof);

        
        $__internal_f247b4cba995dfd5a1911999a2f7d2a597a6ae8097d93303cc2386f39fc30d18->leave($__internal_f247b4cba995dfd5a1911999a2f7d2a597a6ae8097d93303cc2386f39fc30d18_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_95e7f4c33129c6d1d6ea0b446c7e4e4d59c2c80e0845e27c435c077393ffbfbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95e7f4c33129c6d1d6ea0b446c7e4e4d59c2c80e0845e27c435c077393ffbfbb->enter($__internal_95e7f4c33129c6d1d6ea0b446c7e4e4d59c2c80e0845e27c435c077393ffbfbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_992b93b0f5088da54db338e068c57c0aa7c0a2b8ec4ef8ee10b4391a4439bdb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_992b93b0f5088da54db338e068c57c0aa7c0a2b8ec4ef8ee10b4391a4439bdb6->enter($__internal_992b93b0f5088da54db338e068c57c0aa7c0a2b8ec4ef8ee10b4391a4439bdb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>My First Map Project</h1>
    <input id=\"lat\" type=\"hidden\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["lat"]) || array_key_exists("lat", $context) ? $context["lat"] : (function () { throw new Twig_Error_Runtime('Variable "lat" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "\"/>
    <input id=\"long\" type=\"hidden\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["long"]) || array_key_exists("long", $context) ? $context["long"] : (function () { throw new Twig_Error_Runtime('Variable "long" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
        echo "\"/>
    <div id=\"googleMap\" style=\"width:100%;height:400px;\"></div>
";
        
        $__internal_992b93b0f5088da54db338e068c57c0aa7c0a2b8ec4ef8ee10b4391a4439bdb6->leave($__internal_992b93b0f5088da54db338e068c57c0aa7c0a2b8ec4ef8ee10b4391a4439bdb6_prof);

        
        $__internal_95e7f4c33129c6d1d6ea0b446c7e4e4d59c2c80e0845e27c435c077393ffbfbb->leave($__internal_95e7f4c33129c6d1d6ea0b446c7e4e4d59c2c80e0845e27c435c077393ffbfbb_prof);

    }

    public function getTemplateName()
    {
        return "GoogleApiBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>My First Map Project</h1>
    <input id=\"lat\" type=\"hidden\" value=\"{{ lat }}\"/>
    <input id=\"long\" type=\"hidden\" value=\"{{ long }}\"/>
    <div id=\"googleMap\" style=\"width:100%;height:400px;\"></div>
{% endblock %}

", "GoogleApiBundle:Default:index.html.twig", "/Users/sadhya/Desktop/Symfony/googleMapProject/src/Abhishek/GoogleApiBundle/Resources/views/Default/index.html.twig");
    }
}
