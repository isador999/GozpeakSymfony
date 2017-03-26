<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_2a0d9df5bf939ac2e79500bff4de7265fd99eaeb10d8c3784c5df3295b94f676 extends Twig_Template
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
        $__internal_dfbc2be866dee0d3e49e935deda6c6159875dee8f50ee7b9c1f47722378ffdf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfbc2be866dee0d3e49e935deda6c6159875dee8f50ee7b9c1f47722378ffdf6->enter($__internal_dfbc2be866dee0d3e49e935deda6c6159875dee8f50ee7b9c1f47722378ffdf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_47d0a5425818b5a0a518be7a9f85a9ed909073de2b55dbe142314956193ce1c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47d0a5425818b5a0a518be7a9f85a9ed909073de2b55dbe142314956193ce1c5->enter($__internal_47d0a5425818b5a0a518be7a9f85a9ed909073de2b55dbe142314956193ce1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_dfbc2be866dee0d3e49e935deda6c6159875dee8f50ee7b9c1f47722378ffdf6->leave($__internal_dfbc2be866dee0d3e49e935deda6c6159875dee8f50ee7b9c1f47722378ffdf6_prof);

        
        $__internal_47d0a5425818b5a0a518be7a9f85a9ed909073de2b55dbe142314956193ce1c5->leave($__internal_47d0a5425818b5a0a518be7a9f85a9ed909073de2b55dbe142314956193ce1c5_prof);

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
", "TwigBundle:Exception:exception.js.twig", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
