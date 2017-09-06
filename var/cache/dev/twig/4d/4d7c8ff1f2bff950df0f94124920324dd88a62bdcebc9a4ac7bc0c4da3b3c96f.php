<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_e194ef62e459aa667479cd07d0674ab38328eefce490bac5a7ad21749ffe7309 extends Twig_Template
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
        $__internal_8a22d1be0a0d44ff9d84189e314a17c7a6209a3c631d27a29722918bb8dc3b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a22d1be0a0d44ff9d84189e314a17c7a6209a3c631d27a29722918bb8dc3b9d->enter($__internal_8a22d1be0a0d44ff9d84189e314a17c7a6209a3c631d27a29722918bb8dc3b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_6f8451a32ec229e64299e8b8192dc27ee5d447ca31a79f479b7a0e336c27ecba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f8451a32ec229e64299e8b8192dc27ee5d447ca31a79f479b7a0e336c27ecba->enter($__internal_6f8451a32ec229e64299e8b8192dc27ee5d447ca31a79f479b7a0e336c27ecba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8a22d1be0a0d44ff9d84189e314a17c7a6209a3c631d27a29722918bb8dc3b9d->leave($__internal_8a22d1be0a0d44ff9d84189e314a17c7a6209a3c631d27a29722918bb8dc3b9d_prof);

        
        $__internal_6f8451a32ec229e64299e8b8192dc27ee5d447ca31a79f479b7a0e336c27ecba->leave($__internal_6f8451a32ec229e64299e8b8192dc27ee5d447ca31a79f479b7a0e336c27ecba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
