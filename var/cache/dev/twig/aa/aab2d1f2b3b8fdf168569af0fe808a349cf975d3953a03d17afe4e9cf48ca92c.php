<?php

/* default/index.html.twig */
class __TwigTemplate_dbec7830f8afa513fbd2ea8da862be6953187088e4bac4ff92d8f3925eaf0dd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_2c7e9c37f5765b07688ee971d6460032ca589c2dd8b5e6c61f9edaa545a2e5df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c7e9c37f5765b07688ee971d6460032ca589c2dd8b5e6c61f9edaa545a2e5df->enter($__internal_2c7e9c37f5765b07688ee971d6460032ca589c2dd8b5e6c61f9edaa545a2e5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_e03f99ef4c427a1359d9415c874de564e735dee51e56be4999a785c8a7eb4410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e03f99ef4c427a1359d9415c874de564e735dee51e56be4999a785c8a7eb4410->enter($__internal_e03f99ef4c427a1359d9415c874de564e735dee51e56be4999a785c8a7eb4410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c7e9c37f5765b07688ee971d6460032ca589c2dd8b5e6c61f9edaa545a2e5df->leave($__internal_2c7e9c37f5765b07688ee971d6460032ca589c2dd8b5e6c61f9edaa545a2e5df_prof);

        
        $__internal_e03f99ef4c427a1359d9415c874de564e735dee51e56be4999a785c8a7eb4410->leave($__internal_e03f99ef4c427a1359d9415c874de564e735dee51e56be4999a785c8a7eb4410_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_18b6a660b49421f4be999d7e72615842f9de8464b4e476b9aec79e5abd5102f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18b6a660b49421f4be999d7e72615842f9de8464b4e476b9aec79e5abd5102f9->enter($__internal_18b6a660b49421f4be999d7e72615842f9de8464b4e476b9aec79e5abd5102f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_513ae23763305689812bed2da97a0f5fd8c1732f496d14d720071cc184f6e500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_513ae23763305689812bed2da97a0f5fd8c1732f496d14d720071cc184f6e500->enter($__internal_513ae23763305689812bed2da97a0f5fd8c1732f496d14d720071cc184f6e500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_513ae23763305689812bed2da97a0f5fd8c1732f496d14d720071cc184f6e500->leave($__internal_513ae23763305689812bed2da97a0f5fd8c1732f496d14d720071cc184f6e500_prof);

        
        $__internal_18b6a660b49421f4be999d7e72615842f9de8464b4e476b9aec79e5abd5102f9->leave($__internal_18b6a660b49421f4be999d7e72615842f9de8464b4e476b9aec79e5abd5102f9_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
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
", "default/index.html.twig", "/Users/sadhya/Desktop/Symfony/googleMapProject/app/Resources/views/default/index.html.twig");
    }
}
