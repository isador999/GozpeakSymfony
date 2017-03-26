<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_3ad961c7f7ddd6f9b368b0851dbf6388b6d24b89caf8aacb5bdcd3a517cfb42e extends Twig_Template
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
        $__internal_1ad401bdb5bc6823728ec894a89dd3563037b13b0e5620d26ba3c7bd38a59092 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ad401bdb5bc6823728ec894a89dd3563037b13b0e5620d26ba3c7bd38a59092->enter($__internal_1ad401bdb5bc6823728ec894a89dd3563037b13b0e5620d26ba3c7bd38a59092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_25e983b1f50f048a1da4303d623c23fcd8eed9e4c858f58d122794942388061e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25e983b1f50f048a1da4303d623c23fcd8eed9e4c858f58d122794942388061e->enter($__internal_25e983b1f50f048a1da4303d623c23fcd8eed9e4c858f58d122794942388061e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1ad401bdb5bc6823728ec894a89dd3563037b13b0e5620d26ba3c7bd38a59092->leave($__internal_1ad401bdb5bc6823728ec894a89dd3563037b13b0e5620d26ba3c7bd38a59092_prof);

        
        $__internal_25e983b1f50f048a1da4303d623c23fcd8eed9e4c858f58d122794942388061e->leave($__internal_25e983b1f50f048a1da4303d623c23fcd8eed9e4c858f58d122794942388061e_prof);

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
", "TwigBundle:Exception:exception.rdf.twig", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
