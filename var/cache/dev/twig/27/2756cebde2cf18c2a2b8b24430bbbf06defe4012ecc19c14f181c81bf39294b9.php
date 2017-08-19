<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1a4e254d99350e31e2f1320a6b3258f61bc6876a0452cf5602c2a2eef09494fc extends Twig_Template
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
        $__internal_e702a4880b55a1b16e7dc5642814ca3e678ff0c38d93cf0a8fe04554516e9008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e702a4880b55a1b16e7dc5642814ca3e678ff0c38d93cf0a8fe04554516e9008->enter($__internal_e702a4880b55a1b16e7dc5642814ca3e678ff0c38d93cf0a8fe04554516e9008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_dd2a7fef2b325708f673e0673d8a08b3466ccca36445637295d6617c9dfb5599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd2a7fef2b325708f673e0673d8a08b3466ccca36445637295d6617c9dfb5599->enter($__internal_dd2a7fef2b325708f673e0673d8a08b3466ccca36445637295d6617c9dfb5599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_e702a4880b55a1b16e7dc5642814ca3e678ff0c38d93cf0a8fe04554516e9008->leave($__internal_e702a4880b55a1b16e7dc5642814ca3e678ff0c38d93cf0a8fe04554516e9008_prof);

        
        $__internal_dd2a7fef2b325708f673e0673d8a08b3466ccca36445637295d6617c9dfb5599->leave($__internal_dd2a7fef2b325708f673e0673d8a08b3466ccca36445637295d6617c9dfb5599_prof);

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
", "TwigBundle:Exception:error.atom.twig", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
