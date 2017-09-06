<?php

/* home.html.twig */
class __TwigTemplate_c22ede011b6c712aa51cc4ed40e26f0fd0317b64da3e0062d53a739760e04621 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("navbar-notlogged.html.twig", "home.html.twig", 1);
        $this->blocks = array(
            'jumbotron' => array($this, 'block_jumbotron'),
            'header' => array($this, 'block_header'),
            'javascripts' => array($this, 'block_javascripts'),
            'activities' => array($this, 'block_activities'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "navbar-notlogged.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_480cbf0f51a1030d31bb49dc0ff30efb14993781127ef34714342e12446968e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_480cbf0f51a1030d31bb49dc0ff30efb14993781127ef34714342e12446968e2->enter($__internal_480cbf0f51a1030d31bb49dc0ff30efb14993781127ef34714342e12446968e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_74c57d8cd3364f0883313f2cde2a51e6f4f72a3af805578b3cc291f598304e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74c57d8cd3364f0883313f2cde2a51e6f4f72a3af805578b3cc291f598304e4f->enter($__internal_74c57d8cd3364f0883313f2cde2a51e6f4f72a3af805578b3cc291f598304e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_480cbf0f51a1030d31bb49dc0ff30efb14993781127ef34714342e12446968e2->leave($__internal_480cbf0f51a1030d31bb49dc0ff30efb14993781127ef34714342e12446968e2_prof);

        
        $__internal_74c57d8cd3364f0883313f2cde2a51e6f4f72a3af805578b3cc291f598304e4f->leave($__internal_74c57d8cd3364f0883313f2cde2a51e6f4f72a3af805578b3cc291f598304e4f_prof);

    }

    // line 3
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_d564dd365b47c69221165464f47ff9719a5d666754c939465891a558fdcaa211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d564dd365b47c69221165464f47ff9719a5d666754c939465891a558fdcaa211->enter($__internal_d564dd365b47c69221165464f47ff9719a5d666754c939465891a558fdcaa211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        $__internal_d6be310ff4ee8f7085e1e786c73a94acd71607ee89ab56294898bbacfcda736e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6be310ff4ee8f7085e1e786c73a94acd71607ee89ab56294898bbacfcda736e->enter($__internal_d6be310ff4ee8f7085e1e786c73a94acd71607ee89ab56294898bbacfcda736e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        // line 4
        echo "<div class=\"container-fluid\">
\t<div class=\"jumbotron\">
\t\t<h2> Association Gozpeak à Rennes </h2>
\t\t<p>
\t\t\tCultivez les langues étrangères en pratiquant !
 \t\t</p>

\t\t<div>
\t\t\t<a href=\"#\" class=\"btn btn-lg btn-success\"> En savoir plus </a>
\t\t\t<a href=\"#\" class=\"btn btn-lg btn-primary\"> Adhérer à l'association </a>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_d6be310ff4ee8f7085e1e786c73a94acd71607ee89ab56294898bbacfcda736e->leave($__internal_d6be310ff4ee8f7085e1e786c73a94acd71607ee89ab56294898bbacfcda736e_prof);

        
        $__internal_d564dd365b47c69221165464f47ff9719a5d666754c939465891a558fdcaa211->leave($__internal_d564dd365b47c69221165464f47ff9719a5d666754c939465891a558fdcaa211_prof);

    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        $__internal_809de3b986dfcb43870c5597585297244fd5ac6735b41c66e1f752ccf14526c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_809de3b986dfcb43870c5597585297244fd5ac6735b41c66e1f752ccf14526c2->enter($__internal_809de3b986dfcb43870c5597585297244fd5ac6735b41c66e1f752ccf14526c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_7a919c9dc0caff7db93f758c76a400b633afcdf3608ce50f7a84d026eff5f17c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a919c9dc0caff7db93f758c76a400b633afcdf3608ce50f7a84d026eff5f17c->enter($__internal_7a919c9dc0caff7db93f758c76a400b633afcdf3608ce50f7a84d026eff5f17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 20
        echo "\t<header>
\t<!-- <div class=\"row\">
\t\t<div id=\"zpeak_carousel\" class=\"carousel slide\" data-ride=\"carousel\">

\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t<li data-target=\"#zpeak_carousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t<li data-target=\"#zpeak_carousel\" data-slide-to=\"1\"></li>
\t\t\t\t<li data-target=\"#zpeak_carousel\" data-slide-to=\"2\"></li>
\t\t\t</ol>

\t\t\t<div class=\"carousel-inner\">
\t\t\t\t<div class=\"item active\">
\t\t\t\t\t<div class=\"carousel-page\">
\t\t\t\t\t\t<img src=\"views/images/gozpeak_small.png\" class=\"img-responsive\" style=\"margin: 0px auto;\" />
\t\t\t\t\t\t<div class=\"branding text-center\">
\t\t\t\t\t \t\t<?php echo \"La référence des langues étrangères à Rennes !\" ?>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<img src=\"views/images/menu_clara.jpg\" class=\"img-responsive img-rounded\" style=\"margin:0px auto; height: 430px; max-height: 600px;\"  />
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div class=\"carousel-page\">
\t\t\t\t\t\t<img src=\"views/images/sejour.jpeg\" class=\"img-responsive img-rounded\" style=\"margin:0px auto; height: 520px; max-height: 600px\"  />
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div class=\"carousel-page\">
\t\t\t\t\t\t<img src=\"views/images/cartel.jpg\" class=\"img-responsive img-rounded\" style=\"margin:0px auto; height: 520px; max-height: 600px\"  />
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>


\t\t\t<a class=\"left carousel-control\" href=\"#zpeak_carousel\" data-slide=\"prev\">
\t\t\t\t<span class=\"glyphicon glyphicon-chevron-left\"></span>
\t\t\t</a>
\t\t\t<a class=\"right carousel-control\" href=\"#zpeak_carousel\" data-slide=\"next\">
\t\t\t\t<span class=\"glyphicon glyphicon-chevron-right\"></span>
\t\t\t</a>
\t\t</div>
\t</div> -->


\t<div class=\"row promote-block\">
\t\t<div class=\"col-lg-offset-1 col-lg-4 col-md-offset-2 col-md-6 col-sm-offset-1 col-sm-3\">
\t\t\t<div>
\t\t\t\t <iframe width=\"600\" height=\"440\" src=\"https://www.youtube.com/embed/cXF3-OzHoYU\"></iframe>
\t\t </div>
\t </div>

\t\t<div class=\"col-lg-offset-2 col-lg-4 col-md-offset-1 col-md-10 col-sm-12\">
\t\t <div>
\t\t\t <h3> Participez aux événements proposés par Gozpeak et proposez vos propres sorties linguistiques  ! </h3>
\t\t </div>

\t\t <div>
\t\t\t Prochain événement Gozpeak :
\t\t\t \t";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute(($context[" last_event"] ?? $this->getContext($context, " last_event")), "name", array()), "html", null, true);
        echo "
\t\t </div>

\t\t</div>
\t</div>
</header>
";
        
        $__internal_7a919c9dc0caff7db93f758c76a400b633afcdf3608ce50f7a84d026eff5f17c->leave($__internal_7a919c9dc0caff7db93f758c76a400b633afcdf3608ce50f7a84d026eff5f17c_prof);

        
        $__internal_809de3b986dfcb43870c5597585297244fd5ac6735b41c66e1f752ccf14526c2->leave($__internal_809de3b986dfcb43870c5597585297244fd5ac6735b41c66e1f752ccf14526c2_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c3372fa52e1c33a5b1f2097553cb7dca0130da4f3ddad1f036c3c816841af965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3372fa52e1c33a5b1f2097553cb7dca0130da4f3ddad1f036c3c816841af965->enter($__internal_c3372fa52e1c33a5b1f2097553cb7dca0130da4f3ddad1f036c3c816841af965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_82c48f268f1f96cca87c974f97a85b078b0df5e28764dc427a8a5af89cacbb51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82c48f268f1f96cca87c974f97a85b078b0df5e28764dc427a8a5af89cacbb51->enter($__internal_82c48f268f1f96cca87c974f97a85b078b0df5e28764dc427a8a5af89cacbb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        echo "\t\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t\t<script type=\"text/javascript\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vue.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vue-instance.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_82c48f268f1f96cca87c974f97a85b078b0df5e28764dc427a8a5af89cacbb51->leave($__internal_82c48f268f1f96cca87c974f97a85b078b0df5e28764dc427a8a5af89cacbb51_prof);

        
        $__internal_c3372fa52e1c33a5b1f2097553cb7dca0130da4f3ddad1f036c3c816841af965->leave($__internal_c3372fa52e1c33a5b1f2097553cb7dca0130da4f3ddad1f036c3c816841af965_prof);

    }

    // line 95
    public function block_activities($context, array $blocks = array())
    {
        $__internal_78f3cb270f12e3e3ab0edf216414867c4599d94e447af85cd078ed35f8c60b43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78f3cb270f12e3e3ab0edf216414867c4599d94e447af85cd078ed35f8c60b43->enter($__internal_78f3cb270f12e3e3ab0edf216414867c4599d94e447af85cd078ed35f8c60b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "activities"));

        $__internal_df4b12a45c2aa1b3fe30c6d7ea322d5cebfe6038412afa0f70d858f462b2a35b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df4b12a45c2aa1b3fe30c6d7ea322d5cebfe6038412afa0f70d858f462b2a35b->enter($__internal_df4b12a45c2aa1b3fe30c6d7ea322d5cebfe6038412afa0f70d858f462b2a35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "activities"));

        // line 96
        echo "\t<!-- LG and MD -->
\t<div id=\"app\" class=\"row text-center activities\" style=\"height:35%;\">
\t\t<zpeak-categories
\t\t\tv-for=\"item in categoriesList\"
\t\t\tv-bind:category=\"item\"
\t\t\tv-bind:key=\"item.id\">
\t\t</zpeak-categories>
\t</div>
\t";
        
        $__internal_df4b12a45c2aa1b3fe30c6d7ea322d5cebfe6038412afa0f70d858f462b2a35b->leave($__internal_df4b12a45c2aa1b3fe30c6d7ea322d5cebfe6038412afa0f70d858f462b2a35b_prof);

        
        $__internal_78f3cb270f12e3e3ab0edf216414867c4599d94e447af85cd078ed35f8c60b43->leave($__internal_78f3cb270f12e3e3ab0edf216414867c4599d94e447af85cd078ed35f8c60b43_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 96,  193 => 95,  181 => 92,  177 => 91,  172 => 90,  163 => 89,  146 => 80,  84 => 20,  75 => 19,  52 => 4,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'navbar-notlogged.html.twig' %}

{% block jumbotron %}
<div class=\"container-fluid\">
\t<div class=\"jumbotron\">
\t\t<h2> Association Gozpeak à Rennes </h2>
\t\t<p>
\t\t\tCultivez les langues étrangères en pratiquant !
 \t\t</p>

\t\t<div>
\t\t\t<a href=\"#\" class=\"btn btn-lg btn-success\"> En savoir plus </a>
\t\t\t<a href=\"#\" class=\"btn btn-lg btn-primary\"> Adhérer à l'association </a>
\t\t</div>
\t</div>
</div>
{% endblock %}

{% block header %}
\t<header>
\t<!-- <div class=\"row\">
\t\t<div id=\"zpeak_carousel\" class=\"carousel slide\" data-ride=\"carousel\">

\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t<li data-target=\"#zpeak_carousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t<li data-target=\"#zpeak_carousel\" data-slide-to=\"1\"></li>
\t\t\t\t<li data-target=\"#zpeak_carousel\" data-slide-to=\"2\"></li>
\t\t\t</ol>

\t\t\t<div class=\"carousel-inner\">
\t\t\t\t<div class=\"item active\">
\t\t\t\t\t<div class=\"carousel-page\">
\t\t\t\t\t\t<img src=\"views/images/gozpeak_small.png\" class=\"img-responsive\" style=\"margin: 0px auto;\" />
\t\t\t\t\t\t<div class=\"branding text-center\">
\t\t\t\t\t \t\t<?php echo \"La référence des langues étrangères à Rennes !\" ?>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<img src=\"views/images/menu_clara.jpg\" class=\"img-responsive img-rounded\" style=\"margin:0px auto; height: 430px; max-height: 600px;\"  />
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div class=\"carousel-page\">
\t\t\t\t\t\t<img src=\"views/images/sejour.jpeg\" class=\"img-responsive img-rounded\" style=\"margin:0px auto; height: 520px; max-height: 600px\"  />
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"item\">
\t\t\t\t\t<div class=\"carousel-page\">
\t\t\t\t\t\t<img src=\"views/images/cartel.jpg\" class=\"img-responsive img-rounded\" style=\"margin:0px auto; height: 520px; max-height: 600px\"  />
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>


\t\t\t<a class=\"left carousel-control\" href=\"#zpeak_carousel\" data-slide=\"prev\">
\t\t\t\t<span class=\"glyphicon glyphicon-chevron-left\"></span>
\t\t\t</a>
\t\t\t<a class=\"right carousel-control\" href=\"#zpeak_carousel\" data-slide=\"next\">
\t\t\t\t<span class=\"glyphicon glyphicon-chevron-right\"></span>
\t\t\t</a>
\t\t</div>
\t</div> -->


\t<div class=\"row promote-block\">
\t\t<div class=\"col-lg-offset-1 col-lg-4 col-md-offset-2 col-md-6 col-sm-offset-1 col-sm-3\">
\t\t\t<div>
\t\t\t\t <iframe width=\"600\" height=\"440\" src=\"https://www.youtube.com/embed/cXF3-OzHoYU\"></iframe>
\t\t </div>
\t </div>

\t\t<div class=\"col-lg-offset-2 col-lg-4 col-md-offset-1 col-md-10 col-sm-12\">
\t\t <div>
\t\t\t <h3> Participez aux événements proposés par Gozpeak et proposez vos propres sorties linguistiques  ! </h3>
\t\t </div>

\t\t <div>
\t\t\t Prochain événement Gozpeak :
\t\t\t \t{{ last_event.name }}
\t\t </div>

\t\t</div>
\t</div>
</header>
{% endblock %}


\t{% block javascripts %}
\t\t{{ parent() }}
\t\t<script type=\"text/javascript\" src=\"{{ asset('js/vue.js') }}\"></script>
\t\t<script type=\"text/javascript\" src=\"{{ asset('js/vue-instance.js') }}\"></script>
\t{% endblock %}

  {% block activities %}
\t<!-- LG and MD -->
\t<div id=\"app\" class=\"row text-center activities\" style=\"height:35%;\">
\t\t<zpeak-categories
\t\t\tv-for=\"item in categoriesList\"
\t\t\tv-bind:category=\"item\"
\t\t\tv-bind:key=\"item.id\">
\t\t</zpeak-categories>
\t</div>
\t{% endblock %}
", "home.html.twig", "/root/GozpeakSymfony/app/Resources/views/home.html.twig");
    }
}
