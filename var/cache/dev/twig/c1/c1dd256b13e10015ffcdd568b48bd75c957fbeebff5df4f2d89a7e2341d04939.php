<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_3c9910f981c10711567542ad88af0559e9cdb3b480448904366466f0f784ade5 extends Twig_Template
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
        $__internal_748ec306df91332a40e1fe1901a264d78b8a4517689124a898fb7c629bc7b590 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_748ec306df91332a40e1fe1901a264d78b8a4517689124a898fb7c629bc7b590->enter($__internal_748ec306df91332a40e1fe1901a264d78b8a4517689124a898fb7c629bc7b590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_376fdd146cdad49923fec7ec370ccbfe4bb3f929ec1a4bc6a2f21af77ee052bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_376fdd146cdad49923fec7ec370ccbfe4bb3f929ec1a4bc6a2f21af77ee052bd->enter($__internal_376fdd146cdad49923fec7ec370ccbfe4bb3f929ec1a4bc6a2f21af77ee052bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_748ec306df91332a40e1fe1901a264d78b8a4517689124a898fb7c629bc7b590->leave($__internal_748ec306df91332a40e1fe1901a264d78b8a4517689124a898fb7c629bc7b590_prof);

        
        $__internal_376fdd146cdad49923fec7ec370ccbfe4bb3f929ec1a4bc6a2f21af77ee052bd->leave($__internal_376fdd146cdad49923fec7ec370ccbfe4bb3f929ec1a4bc6a2f21af77ee052bd_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Profiler/header.html.twig", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
