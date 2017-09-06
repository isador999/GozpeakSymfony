<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_cf98befa34d6fd83c86761236c260b9a9d3e7c2c68dd45d3cce13b4178408a30 extends Twig_Template
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
        $__internal_66b216cc9a25db746827fcf02e95d3786d438f8382bfae90ee36c08af7a33386 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66b216cc9a25db746827fcf02e95d3786d438f8382bfae90ee36c08af7a33386->enter($__internal_66b216cc9a25db746827fcf02e95d3786d438f8382bfae90ee36c08af7a33386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_f14b97f6388655a694264d2e392830e20e8c1583a4f560ec9d84ea7a117beb59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f14b97f6388655a694264d2e392830e20e8c1583a4f560ec9d84ea7a117beb59->enter($__internal_f14b97f6388655a694264d2e392830e20e8c1583a4f560ec9d84ea7a117beb59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_66b216cc9a25db746827fcf02e95d3786d438f8382bfae90ee36c08af7a33386->leave($__internal_66b216cc9a25db746827fcf02e95d3786d438f8382bfae90ee36c08af7a33386_prof);

        
        $__internal_f14b97f6388655a694264d2e392830e20e8c1583a4f560ec9d84ea7a117beb59->leave($__internal_f14b97f6388655a694264d2e392830e20e8c1583a4f560ec9d84ea7a117beb59_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
