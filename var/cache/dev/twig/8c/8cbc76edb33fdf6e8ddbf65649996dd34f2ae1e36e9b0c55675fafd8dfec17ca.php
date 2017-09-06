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
        $__internal_5a932351fd4c4b6948eeec6cc5b347f453e95c2485d5b17793ffe6ab77fa2579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a932351fd4c4b6948eeec6cc5b347f453e95c2485d5b17793ffe6ab77fa2579->enter($__internal_5a932351fd4c4b6948eeec6cc5b347f453e95c2485d5b17793ffe6ab77fa2579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_0df27a4ecb4b3de55718a528e0bf996c0ca80ed0579689207ece374235951849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df27a4ecb4b3de55718a528e0bf996c0ca80ed0579689207ece374235951849->enter($__internal_0df27a4ecb4b3de55718a528e0bf996c0ca80ed0579689207ece374235951849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_5a932351fd4c4b6948eeec6cc5b347f453e95c2485d5b17793ffe6ab77fa2579->leave($__internal_5a932351fd4c4b6948eeec6cc5b347f453e95c2485d5b17793ffe6ab77fa2579_prof);

        
        $__internal_0df27a4ecb4b3de55718a528e0bf996c0ca80ed0579689207ece374235951849->leave($__internal_0df27a4ecb4b3de55718a528e0bf996c0ca80ed0579689207ece374235951849_prof);

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
