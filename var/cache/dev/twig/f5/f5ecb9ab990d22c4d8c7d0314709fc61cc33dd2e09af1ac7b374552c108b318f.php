<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_11fbc2198b9cff59e44d0de36bc9cd6575455705f2ca6dcc7421f23ea21bc1d0 extends Twig_Template
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
        $__internal_638b02d9fa85d95c2a8a37d76e4ab3a15e3d4fd7c748f607482f9740598c8484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_638b02d9fa85d95c2a8a37d76e4ab3a15e3d4fd7c748f607482f9740598c8484->enter($__internal_638b02d9fa85d95c2a8a37d76e4ab3a15e3d4fd7c748f607482f9740598c8484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_11b3bcd469cde88adc2daffc1f280c7da1253a9f3956bb313528ce4a18d973f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11b3bcd469cde88adc2daffc1f280c7da1253a9f3956bb313528ce4a18d973f6->enter($__internal_11b3bcd469cde88adc2daffc1f280c7da1253a9f3956bb313528ce4a18d973f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_638b02d9fa85d95c2a8a37d76e4ab3a15e3d4fd7c748f607482f9740598c8484->leave($__internal_638b02d9fa85d95c2a8a37d76e4ab3a15e3d4fd7c748f607482f9740598c8484_prof);

        
        $__internal_11b3bcd469cde88adc2daffc1f280c7da1253a9f3956bb313528ce4a18d973f6->leave($__internal_11b3bcd469cde88adc2daffc1f280c7da1253a9f3956bb313528ce4a18d973f6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
