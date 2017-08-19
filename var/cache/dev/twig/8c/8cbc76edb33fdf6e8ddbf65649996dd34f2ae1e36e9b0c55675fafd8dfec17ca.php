<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_ca285f51b5370ebd0e275586e847e1530eafa096ae931c8b09873b59b0ae4b49 extends Twig_Template
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
        $__internal_e3bc593ce049cc87c1d5e5fece31fb49ca74fe8092d349d1dde737ae4d2d19d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3bc593ce049cc87c1d5e5fece31fb49ca74fe8092d349d1dde737ae4d2d19d4->enter($__internal_e3bc593ce049cc87c1d5e5fece31fb49ca74fe8092d349d1dde737ae4d2d19d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_91f407e071e881e07dc1bdd924d3421a6e574f4d5546109904794193c9c93c9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f407e071e881e07dc1bdd924d3421a6e574f4d5546109904794193c9c93c9c->enter($__internal_91f407e071e881e07dc1bdd924d3421a6e574f4d5546109904794193c9c93c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_e3bc593ce049cc87c1d5e5fece31fb49ca74fe8092d349d1dde737ae4d2d19d4->leave($__internal_e3bc593ce049cc87c1d5e5fece31fb49ca74fe8092d349d1dde737ae4d2d19d4_prof);

        
        $__internal_91f407e071e881e07dc1bdd924d3421a6e574f4d5546109904794193c9c93c9c->leave($__internal_91f407e071e881e07dc1bdd924d3421a6e574f4d5546109904794193c9c93c9c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
