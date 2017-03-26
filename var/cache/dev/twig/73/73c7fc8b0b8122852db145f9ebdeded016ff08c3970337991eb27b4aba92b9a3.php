<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1a3b7eb4bfb950f5aa53b5550b8ea2f30b9fbc91b1755810c3226c6098178193 extends Twig_Template
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
        $__internal_e81f5920a52d365a8f9030b2e45446e6801284042d5305cfd96112f6349a0131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e81f5920a52d365a8f9030b2e45446e6801284042d5305cfd96112f6349a0131->enter($__internal_e81f5920a52d365a8f9030b2e45446e6801284042d5305cfd96112f6349a0131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_64748c2912c40fbdd44fd7befca2f285de855bdfc66040c649edd616220ee8c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64748c2912c40fbdd44fd7befca2f285de855bdfc66040c649edd616220ee8c4->enter($__internal_64748c2912c40fbdd44fd7befca2f285de855bdfc66040c649edd616220ee8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_e81f5920a52d365a8f9030b2e45446e6801284042d5305cfd96112f6349a0131->leave($__internal_e81f5920a52d365a8f9030b2e45446e6801284042d5305cfd96112f6349a0131_prof);

        
        $__internal_64748c2912c40fbdd44fd7befca2f285de855bdfc66040c649edd616220ee8c4->leave($__internal_64748c2912c40fbdd44fd7befca2f285de855bdfc66040c649edd616220ee8c4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
