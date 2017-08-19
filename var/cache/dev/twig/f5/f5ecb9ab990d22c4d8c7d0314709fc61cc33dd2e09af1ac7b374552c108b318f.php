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
        $__internal_f0390af2058e847b9409241dd8f00f37e9bd0c0596090024e78a87e6db4a709c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0390af2058e847b9409241dd8f00f37e9bd0c0596090024e78a87e6db4a709c->enter($__internal_f0390af2058e847b9409241dd8f00f37e9bd0c0596090024e78a87e6db4a709c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_e45a585c5b1cc5aee4b6003154007f432104ff71a8e2624755706ae984b9191c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e45a585c5b1cc5aee4b6003154007f432104ff71a8e2624755706ae984b9191c->enter($__internal_e45a585c5b1cc5aee4b6003154007f432104ff71a8e2624755706ae984b9191c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_f0390af2058e847b9409241dd8f00f37e9bd0c0596090024e78a87e6db4a709c->leave($__internal_f0390af2058e847b9409241dd8f00f37e9bd0c0596090024e78a87e6db4a709c_prof);

        
        $__internal_e45a585c5b1cc5aee4b6003154007f432104ff71a8e2624755706ae984b9191c->leave($__internal_e45a585c5b1cc5aee4b6003154007f432104ff71a8e2624755706ae984b9191c_prof);

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
