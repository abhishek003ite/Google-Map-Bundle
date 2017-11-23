<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_59376f8f17caee83a6c462eebaa666862a05768aae5e8a1e520390be4274954d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6665dd26354a1a8a613f598163de1f80c6b050505a098d0cb29b6e183dc0ab23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6665dd26354a1a8a613f598163de1f80c6b050505a098d0cb29b6e183dc0ab23->enter($__internal_6665dd26354a1a8a613f598163de1f80c6b050505a098d0cb29b6e183dc0ab23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_0140c6c688302c78546a43535374587d8d18d2588233d7fc99d60cf059a799ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0140c6c688302c78546a43535374587d8d18d2588233d7fc99d60cf059a799ef->enter($__internal_0140c6c688302c78546a43535374587d8d18d2588233d7fc99d60cf059a799ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6665dd26354a1a8a613f598163de1f80c6b050505a098d0cb29b6e183dc0ab23->leave($__internal_6665dd26354a1a8a613f598163de1f80c6b050505a098d0cb29b6e183dc0ab23_prof);

        
        $__internal_0140c6c688302c78546a43535374587d8d18d2588233d7fc99d60cf059a799ef->leave($__internal_0140c6c688302c78546a43535374587d8d18d2588233d7fc99d60cf059a799ef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7c0d06317cf5a233a2b0f1c0d0e02348a50de24603dd0203440973ab6932e755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c0d06317cf5a233a2b0f1c0d0e02348a50de24603dd0203440973ab6932e755->enter($__internal_7c0d06317cf5a233a2b0f1c0d0e02348a50de24603dd0203440973ab6932e755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_50e9c4c29c829c965f57a5234f460fa1979c77ad76b4d220e44607b73796e13e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e9c4c29c829c965f57a5234f460fa1979c77ad76b4d220e44607b73796e13e->enter($__internal_50e9c4c29c829c965f57a5234f460fa1979c77ad76b4d220e44607b73796e13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_50e9c4c29c829c965f57a5234f460fa1979c77ad76b4d220e44607b73796e13e->leave($__internal_50e9c4c29c829c965f57a5234f460fa1979c77ad76b4d220e44607b73796e13e_prof);

        
        $__internal_7c0d06317cf5a233a2b0f1c0d0e02348a50de24603dd0203440973ab6932e755->leave($__internal_7c0d06317cf5a233a2b0f1c0d0e02348a50de24603dd0203440973ab6932e755_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8172255ce4d360c2155612d38dab6ebd454d8ac3c769e90ad038f3045bc845f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8172255ce4d360c2155612d38dab6ebd454d8ac3c769e90ad038f3045bc845f->enter($__internal_b8172255ce4d360c2155612d38dab6ebd454d8ac3c769e90ad038f3045bc845f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ecd0d5b629eba2093d13bdd6e0e4709f900af257b128b23f057e7c9d99cf7efa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd0d5b629eba2093d13bdd6e0e4709f900af257b128b23f057e7c9d99cf7efa->enter($__internal_ecd0d5b629eba2093d13bdd6e0e4709f900af257b128b23f057e7c9d99cf7efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_ecd0d5b629eba2093d13bdd6e0e4709f900af257b128b23f057e7c9d99cf7efa->leave($__internal_ecd0d5b629eba2093d13bdd6e0e4709f900af257b128b23f057e7c9d99cf7efa_prof);

        
        $__internal_b8172255ce4d360c2155612d38dab6ebd454d8ac3c769e90ad038f3045bc845f->leave($__internal_b8172255ce4d360c2155612d38dab6ebd454d8ac3c769e90ad038f3045bc845f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/Users/sadhya/Desktop/Symfony/googleMapProject/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
