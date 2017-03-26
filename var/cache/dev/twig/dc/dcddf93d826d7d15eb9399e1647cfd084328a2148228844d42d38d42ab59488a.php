<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_5540c6804a9fec78ac83f7670cd5d2ae25b51193ca19679756861588312e8c87 extends Twig_Template
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
        $__internal_63ee68eb9a5c684c85a67b344cf184108023032cb949019f95046178eea7537a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63ee68eb9a5c684c85a67b344cf184108023032cb949019f95046178eea7537a->enter($__internal_63ee68eb9a5c684c85a67b344cf184108023032cb949019f95046178eea7537a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_4e74d65f4610c980dcaf4fee94d1222989f74c5dc28118e5b9b26a6841e8cadd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e74d65f4610c980dcaf4fee94d1222989f74c5dc28118e5b9b26a6841e8cadd->enter($__internal_4e74d65f4610c980dcaf4fee94d1222989f74c5dc28118e5b9b26a6841e8cadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_63ee68eb9a5c684c85a67b344cf184108023032cb949019f95046178eea7537a->leave($__internal_63ee68eb9a5c684c85a67b344cf184108023032cb949019f95046178eea7537a_prof);

        
        $__internal_4e74d65f4610c980dcaf4fee94d1222989f74c5dc28118e5b9b26a6841e8cadd->leave($__internal_4e74d65f4610c980dcaf4fee94d1222989f74c5dc28118e5b9b26a6841e8cadd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
