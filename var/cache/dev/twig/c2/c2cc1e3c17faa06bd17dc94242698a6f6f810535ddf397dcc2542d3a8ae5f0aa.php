<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_504b4c769556d0dec363c5a1ba46cd1ccd966e1af8d1a9aa5a5f438d60d29ae7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6269b042b397f2d9b0f668d0bf264d147e607dc41c640aaa14ef047413768ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6269b042b397f2d9b0f668d0bf264d147e607dc41c640aaa14ef047413768ad->enter($__internal_f6269b042b397f2d9b0f668d0bf264d147e607dc41c640aaa14ef047413768ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_be884fa8c47d5c9daeda92a2a4eceb85f1bf61e8fdbfd0ebb400a66e5756bec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be884fa8c47d5c9daeda92a2a4eceb85f1bf61e8fdbfd0ebb400a66e5756bec6->enter($__internal_be884fa8c47d5c9daeda92a2a4eceb85f1bf61e8fdbfd0ebb400a66e5756bec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6269b042b397f2d9b0f668d0bf264d147e607dc41c640aaa14ef047413768ad->leave($__internal_f6269b042b397f2d9b0f668d0bf264d147e607dc41c640aaa14ef047413768ad_prof);

        
        $__internal_be884fa8c47d5c9daeda92a2a4eceb85f1bf61e8fdbfd0ebb400a66e5756bec6->leave($__internal_be884fa8c47d5c9daeda92a2a4eceb85f1bf61e8fdbfd0ebb400a66e5756bec6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_39fedce326af82c7d049acc29554a54a0e8711140763ec64a34ebc7b6ed7594e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39fedce326af82c7d049acc29554a54a0e8711140763ec64a34ebc7b6ed7594e->enter($__internal_39fedce326af82c7d049acc29554a54a0e8711140763ec64a34ebc7b6ed7594e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5013248acaa2bda2ada34979d4d8428b1b5ef0101917a36df59d7a7e5cb80df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5013248acaa2bda2ada34979d4d8428b1b5ef0101917a36df59d7a7e5cb80df9->enter($__internal_5013248acaa2bda2ada34979d4d8428b1b5ef0101917a36df59d7a7e5cb80df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5013248acaa2bda2ada34979d4d8428b1b5ef0101917a36df59d7a7e5cb80df9->leave($__internal_5013248acaa2bda2ada34979d4d8428b1b5ef0101917a36df59d7a7e5cb80df9_prof);

        
        $__internal_39fedce326af82c7d049acc29554a54a0e8711140763ec64a34ebc7b6ed7594e->leave($__internal_39fedce326af82c7d049acc29554a54a0e8711140763ec64a34ebc7b6ed7594e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_26a5a217aded864d7b52d071112180ab4a6ece709e3a455b3331746f0b251d9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26a5a217aded864d7b52d071112180ab4a6ece709e3a455b3331746f0b251d9e->enter($__internal_26a5a217aded864d7b52d071112180ab4a6ece709e3a455b3331746f0b251d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_75dece4fa82d49a688354439062199f540fce989c9b30dc4464fc6b68704db4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75dece4fa82d49a688354439062199f540fce989c9b30dc4464fc6b68704db4d->enter($__internal_75dece4fa82d49a688354439062199f540fce989c9b30dc4464fc6b68704db4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_75dece4fa82d49a688354439062199f540fce989c9b30dc4464fc6b68704db4d->leave($__internal_75dece4fa82d49a688354439062199f540fce989c9b30dc4464fc6b68704db4d_prof);

        
        $__internal_26a5a217aded864d7b52d071112180ab4a6ece709e3a455b3331746f0b251d9e->leave($__internal_26a5a217aded864d7b52d071112180ab4a6ece709e3a455b3331746f0b251d9e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5a9293b7114afdbf81e6d8d9fc6d4e7779435e4b072378925fe4e585689ae8c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a9293b7114afdbf81e6d8d9fc6d4e7779435e4b072378925fe4e585689ae8c2->enter($__internal_5a9293b7114afdbf81e6d8d9fc6d4e7779435e4b072378925fe4e585689ae8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9af02a3cae0f4281051951ef4848c98f77543bcf1c21bca5398932a3b9b9812c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9af02a3cae0f4281051951ef4848c98f77543bcf1c21bca5398932a3b9b9812c->enter($__internal_9af02a3cae0f4281051951ef4848c98f77543bcf1c21bca5398932a3b9b9812c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_9af02a3cae0f4281051951ef4848c98f77543bcf1c21bca5398932a3b9b9812c->leave($__internal_9af02a3cae0f4281051951ef4848c98f77543bcf1c21bca5398932a3b9b9812c_prof);

        
        $__internal_5a9293b7114afdbf81e6d8d9fc6d4e7779435e4b072378925fe4e585689ae8c2->leave($__internal_5a9293b7114afdbf81e6d8d9fc6d4e7779435e4b072378925fe4e585689ae8c2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/sadhya/Desktop/Symfony/googleMapProject/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
