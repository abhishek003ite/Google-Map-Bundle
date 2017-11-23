<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_a8fe31633b9cd1e0d8dfdf67957bf2215e880f4eb9ac23dc01494eb68caecbb9 extends Twig_Template
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
        $__internal_842c7044c0006019d18ef1ea9b83f7ab2c1a2fff5786497d44cb908f4473939a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_842c7044c0006019d18ef1ea9b83f7ab2c1a2fff5786497d44cb908f4473939a->enter($__internal_842c7044c0006019d18ef1ea9b83f7ab2c1a2fff5786497d44cb908f4473939a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_6fc91defb248331ca6960a7e9e21605979e82868dd57faff3dca1d8659e5cb36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fc91defb248331ca6960a7e9e21605979e82868dd57faff3dca1d8659e5cb36->enter($__internal_6fc91defb248331ca6960a7e9e21605979e82868dd57faff3dca1d8659e5cb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_842c7044c0006019d18ef1ea9b83f7ab2c1a2fff5786497d44cb908f4473939a->leave($__internal_842c7044c0006019d18ef1ea9b83f7ab2c1a2fff5786497d44cb908f4473939a_prof);

        
        $__internal_6fc91defb248331ca6960a7e9e21605979e82868dd57faff3dca1d8659e5cb36->leave($__internal_6fc91defb248331ca6960a7e9e21605979e82868dd57faff3dca1d8659e5cb36_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/Users/sadhya/Desktop/Symfony/googleMapProject/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
