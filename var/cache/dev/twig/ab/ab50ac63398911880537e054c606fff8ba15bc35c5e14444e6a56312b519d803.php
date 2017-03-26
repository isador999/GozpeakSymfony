<?php

/* ::base.html.twig */
class __TwigTemplate_16a23e782c877cef47f574aedb0825f8bdb2fcf5aed0bf15a527a227eee5d38c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cae7705a25024093463576d70ad1f2a7a39ef4c747da194d5093ddf014c7f811 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cae7705a25024093463576d70ad1f2a7a39ef4c747da194d5093ddf014c7f811->enter($__internal_cae7705a25024093463576d70ad1f2a7a39ef4c747da194d5093ddf014c7f811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_4d2173630a8610f4f54c29318719f4910b7bfa3f677f0e76da7310cff9e4c2f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d2173630a8610f4f54c29318719f4910b7bfa3f677f0e76da7310cff9e4c2f1->enter($__internal_4d2173630a8610f4f54c29318719f4910b7bfa3f677f0e76da7310cff9e4c2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_cae7705a25024093463576d70ad1f2a7a39ef4c747da194d5093ddf014c7f811->leave($__internal_cae7705a25024093463576d70ad1f2a7a39ef4c747da194d5093ddf014c7f811_prof);

        
        $__internal_4d2173630a8610f4f54c29318719f4910b7bfa3f677f0e76da7310cff9e4c2f1->leave($__internal_4d2173630a8610f4f54c29318719f4910b7bfa3f677f0e76da7310cff9e4c2f1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab73cc822d5c9c2cdd020f844fe941d7c1091eb6a7b0c97d5329a5246b3103b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab73cc822d5c9c2cdd020f844fe941d7c1091eb6a7b0c97d5329a5246b3103b2->enter($__internal_ab73cc822d5c9c2cdd020f844fe941d7c1091eb6a7b0c97d5329a5246b3103b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b1a429eb084bff8496407aba8b42419d8c21600125e8e3c2addff34deb189566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1a429eb084bff8496407aba8b42419d8c21600125e8e3c2addff34deb189566->enter($__internal_b1a429eb084bff8496407aba8b42419d8c21600125e8e3c2addff34deb189566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b1a429eb084bff8496407aba8b42419d8c21600125e8e3c2addff34deb189566->leave($__internal_b1a429eb084bff8496407aba8b42419d8c21600125e8e3c2addff34deb189566_prof);

        
        $__internal_ab73cc822d5c9c2cdd020f844fe941d7c1091eb6a7b0c97d5329a5246b3103b2->leave($__internal_ab73cc822d5c9c2cdd020f844fe941d7c1091eb6a7b0c97d5329a5246b3103b2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_856317843ef4414cac84587efd4e361bb881dc9be65335b56f70a7938d46c76d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_856317843ef4414cac84587efd4e361bb881dc9be65335b56f70a7938d46c76d->enter($__internal_856317843ef4414cac84587efd4e361bb881dc9be65335b56f70a7938d46c76d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1fbfcd96fb51b6a22c52781849b84bb7bc5833cf309085e20a5d2e501cbc7f72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fbfcd96fb51b6a22c52781849b84bb7bc5833cf309085e20a5d2e501cbc7f72->enter($__internal_1fbfcd96fb51b6a22c52781849b84bb7bc5833cf309085e20a5d2e501cbc7f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1fbfcd96fb51b6a22c52781849b84bb7bc5833cf309085e20a5d2e501cbc7f72->leave($__internal_1fbfcd96fb51b6a22c52781849b84bb7bc5833cf309085e20a5d2e501cbc7f72_prof);

        
        $__internal_856317843ef4414cac84587efd4e361bb881dc9be65335b56f70a7938d46c76d->leave($__internal_856317843ef4414cac84587efd4e361bb881dc9be65335b56f70a7938d46c76d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d65fa5987c363c2023681d42221cce6ef4fb6e86994d73e3455fb11ff5062a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d65fa5987c363c2023681d42221cce6ef4fb6e86994d73e3455fb11ff5062a1->enter($__internal_8d65fa5987c363c2023681d42221cce6ef4fb6e86994d73e3455fb11ff5062a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9649a5824467b187d5645ea08ff3ec851db96fa7cf5450bde37fb7ee8f2ec93c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9649a5824467b187d5645ea08ff3ec851db96fa7cf5450bde37fb7ee8f2ec93c->enter($__internal_9649a5824467b187d5645ea08ff3ec851db96fa7cf5450bde37fb7ee8f2ec93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9649a5824467b187d5645ea08ff3ec851db96fa7cf5450bde37fb7ee8f2ec93c->leave($__internal_9649a5824467b187d5645ea08ff3ec851db96fa7cf5450bde37fb7ee8f2ec93c_prof);

        
        $__internal_8d65fa5987c363c2023681d42221cce6ef4fb6e86994d73e3455fb11ff5062a1->leave($__internal_8d65fa5987c363c2023681d42221cce6ef4fb6e86994d73e3455fb11ff5062a1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d0e6b92ffa0b8d825371153f150b4c69b213f5625a9d56bf033c46ee8950dc1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0e6b92ffa0b8d825371153f150b4c69b213f5625a9d56bf033c46ee8950dc1c->enter($__internal_d0e6b92ffa0b8d825371153f150b4c69b213f5625a9d56bf033c46ee8950dc1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d24e6f467f44dfcc853273c94a1a6606d2213f7b9a253a5ab7994cee34b82225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d24e6f467f44dfcc853273c94a1a6606d2213f7b9a253a5ab7994cee34b82225->enter($__internal_d24e6f467f44dfcc853273c94a1a6606d2213f7b9a253a5ab7994cee34b82225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d24e6f467f44dfcc853273c94a1a6606d2213f7b9a253a5ab7994cee34b82225->leave($__internal_d24e6f467f44dfcc853273c94a1a6606d2213f7b9a253a5ab7994cee34b82225_prof);

        
        $__internal_d0e6b92ffa0b8d825371153f150b4c69b213f5625a9d56bf033c46ee8950dc1c->leave($__internal_d0e6b92ffa0b8d825371153f150b4c69b213f5625a9d56bf033c46ee8950dc1c_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/root/Gozpeak/app/Resources/views/base.html.twig");
    }
}
