<?php

/* base.html.twig */
class __TwigTemplate_3698a5049a95d96cd35abee4dbe42043aec1c3ce4b593cfad74f69e93521450f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd091a726365544e0cd49858a4fadd848cf5cd7d34b9983bee9e44616d52d6e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd091a726365544e0cd49858a4fadd848cf5cd7d34b9983bee9e44616d52d6e9->enter($__internal_fd091a726365544e0cd49858a4fadd848cf5cd7d34b9983bee9e44616d52d6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e203153a8a907243275bc7b3420b356d3eec76679dce70988685830562d757ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e203153a8a907243275bc7b3420b356d3eec76679dce70988685830562d757ff->enter($__internal_e203153a8a907243275bc7b3420b356d3eec76679dce70988685830562d757ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        <script>
            function myMap() {
                var lat = document.getElementById('lat').value;
                var long = document.getElementById('long').value;
                var myCenter = new google.maps.LatLng(lat,long);
                var mapCanvas = document.getElementById(\"googleMap\");
                var mapOptions = {center: myCenter, zoom: 5, disableDefaultUI: true};
                var map = new google.maps.Map(mapCanvas, mapOptions);
                var myCity = new google.maps.Circle({
                    center: myCenter,
                    radius: 50000,
                    strokeColor: \"#0000FF\",
                    strokeOpacity: 0.8,
                    strokeWeight: 2,
                    fillColor: \"#0000FF\",
                    fillOpacity: 0.4
                });
                var marker = new google.maps.Marker({
                    position: myCenter,
                    animation: google.maps.Animation.BOUNCE
                });
                myCity.setMap(map);
                marker.setMap(map);

                google.maps.event.addListener(marker,'click',function() {
                    var infowindow = new google.maps.InfoWindow({
                        content: \"Hello World!\"
                    });
                    infowindow.open(map, marker);
                });
            }
        </script>
        <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBIlPvkat--HfJ-3S18LL3BPObW2JRf7T8&callback=myMap\"></script>
    </body>
</html>
";
        
        $__internal_fd091a726365544e0cd49858a4fadd848cf5cd7d34b9983bee9e44616d52d6e9->leave($__internal_fd091a726365544e0cd49858a4fadd848cf5cd7d34b9983bee9e44616d52d6e9_prof);

        
        $__internal_e203153a8a907243275bc7b3420b356d3eec76679dce70988685830562d757ff->leave($__internal_e203153a8a907243275bc7b3420b356d3eec76679dce70988685830562d757ff_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_74d8b7ec099bf32eb2886933ed43f9dd65d7280b175577518d10351f8143329d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74d8b7ec099bf32eb2886933ed43f9dd65d7280b175577518d10351f8143329d->enter($__internal_74d8b7ec099bf32eb2886933ed43f9dd65d7280b175577518d10351f8143329d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_91f2bf4e6987a85b117ce102950225806b136dcc378903b65559f3763ace7a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f2bf4e6987a85b117ce102950225806b136dcc378903b65559f3763ace7a6e->enter($__internal_91f2bf4e6987a85b117ce102950225806b136dcc378903b65559f3763ace7a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_91f2bf4e6987a85b117ce102950225806b136dcc378903b65559f3763ace7a6e->leave($__internal_91f2bf4e6987a85b117ce102950225806b136dcc378903b65559f3763ace7a6e_prof);

        
        $__internal_74d8b7ec099bf32eb2886933ed43f9dd65d7280b175577518d10351f8143329d->leave($__internal_74d8b7ec099bf32eb2886933ed43f9dd65d7280b175577518d10351f8143329d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_03a541a252273a61d2af253f0d0cc08edf7fb6252672a34133a34e6f63461686 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03a541a252273a61d2af253f0d0cc08edf7fb6252672a34133a34e6f63461686->enter($__internal_03a541a252273a61d2af253f0d0cc08edf7fb6252672a34133a34e6f63461686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_389e49f7be2a93f2eeb0ad8e982dd9b1a8a84c4668ba868150cd9922b6639001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_389e49f7be2a93f2eeb0ad8e982dd9b1a8a84c4668ba868150cd9922b6639001->enter($__internal_389e49f7be2a93f2eeb0ad8e982dd9b1a8a84c4668ba868150cd9922b6639001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_389e49f7be2a93f2eeb0ad8e982dd9b1a8a84c4668ba868150cd9922b6639001->leave($__internal_389e49f7be2a93f2eeb0ad8e982dd9b1a8a84c4668ba868150cd9922b6639001_prof);

        
        $__internal_03a541a252273a61d2af253f0d0cc08edf7fb6252672a34133a34e6f63461686->leave($__internal_03a541a252273a61d2af253f0d0cc08edf7fb6252672a34133a34e6f63461686_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5eadc217c40971f500ea7b4dfb3a738b449b9620a5d46a39d67dde7fb5a1b88a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eadc217c40971f500ea7b4dfb3a738b449b9620a5d46a39d67dde7fb5a1b88a->enter($__internal_5eadc217c40971f500ea7b4dfb3a738b449b9620a5d46a39d67dde7fb5a1b88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bdfb825538a3657ff9bd66d53c8893ffbae9597c5963b7025a487ed85b0fef28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdfb825538a3657ff9bd66d53c8893ffbae9597c5963b7025a487ed85b0fef28->enter($__internal_bdfb825538a3657ff9bd66d53c8893ffbae9597c5963b7025a487ed85b0fef28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bdfb825538a3657ff9bd66d53c8893ffbae9597c5963b7025a487ed85b0fef28->leave($__internal_bdfb825538a3657ff9bd66d53c8893ffbae9597c5963b7025a487ed85b0fef28_prof);

        
        $__internal_5eadc217c40971f500ea7b4dfb3a738b449b9620a5d46a39d67dde7fb5a1b88a->leave($__internal_5eadc217c40971f500ea7b4dfb3a738b449b9620a5d46a39d67dde7fb5a1b88a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 10,  112 => 6,  94 => 5,  49 => 11,  47 => 10,  40 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        <script>
            function myMap() {
                var lat = document.getElementById('lat').value;
                var long = document.getElementById('long').value;
                var myCenter = new google.maps.LatLng(lat,long);
                var mapCanvas = document.getElementById(\"googleMap\");
                var mapOptions = {center: myCenter, zoom: 5, disableDefaultUI: true};
                var map = new google.maps.Map(mapCanvas, mapOptions);
                var myCity = new google.maps.Circle({
                    center: myCenter,
                    radius: 50000,
                    strokeColor: \"#0000FF\",
                    strokeOpacity: 0.8,
                    strokeWeight: 2,
                    fillColor: \"#0000FF\",
                    fillOpacity: 0.4
                });
                var marker = new google.maps.Marker({
                    position: myCenter,
                    animation: google.maps.Animation.BOUNCE
                });
                myCity.setMap(map);
                marker.setMap(map);

                google.maps.event.addListener(marker,'click',function() {
                    var infowindow = new google.maps.InfoWindow({
                        content: \"Hello World!\"
                    });
                    infowindow.open(map, marker);
                });
            }
        </script>
        <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBIlPvkat--HfJ-3S18LL3BPObW2JRf7T8&callback=myMap\"></script>
    </body>
</html>
", "base.html.twig", "/Users/sadhya/Desktop/Symfony/googleMapProject/app/Resources/views/base.html.twig");
    }
}
