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
        $__internal_8924864014ab31c83fa3f8e0cc502e4cd50d2f83e53734e56e4924d6d2947175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8924864014ab31c83fa3f8e0cc502e4cd50d2f83e53734e56e4924d6d2947175->enter($__internal_8924864014ab31c83fa3f8e0cc502e4cd50d2f83e53734e56e4924d6d2947175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_75817a895222254823983072c589be4a55d3444b561e9e9ee62438c6b4f708ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75817a895222254823983072c589be4a55d3444b561e9e9ee62438c6b4f708ac->enter($__internal_75817a895222254823983072c589be4a55d3444b561e9e9ee62438c6b4f708ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_8924864014ab31c83fa3f8e0cc502e4cd50d2f83e53734e56e4924d6d2947175->leave($__internal_8924864014ab31c83fa3f8e0cc502e4cd50d2f83e53734e56e4924d6d2947175_prof);

        
        $__internal_75817a895222254823983072c589be4a55d3444b561e9e9ee62438c6b4f708ac->leave($__internal_75817a895222254823983072c589be4a55d3444b561e9e9ee62438c6b4f708ac_prof);

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
