<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_307972d12f68be9f625c1a24e9e7c8f25458f31d6098cf56c40fcf7f1117d553 extends Twig_Template
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
        $__internal_fa3aff475b3b4f79732c7a14569338911c2857c3785c6017ddd420781f0adcf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa3aff475b3b4f79732c7a14569338911c2857c3785c6017ddd420781f0adcf7->enter($__internal_fa3aff475b3b4f79732c7a14569338911c2857c3785c6017ddd420781f0adcf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_13b76d248c2bf80f35b30a87218e3341fb2030135cd7f8c0a9a7cb50e617edfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b76d248c2bf80f35b30a87218e3341fb2030135cd7f8c0a9a7cb50e617edfc->enter($__internal_13b76d248c2bf80f35b30a87218e3341fb2030135cd7f8c0a9a7cb50e617edfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_fa3aff475b3b4f79732c7a14569338911c2857c3785c6017ddd420781f0adcf7->leave($__internal_fa3aff475b3b4f79732c7a14569338911c2857c3785c6017ddd420781f0adcf7_prof);

        
        $__internal_13b76d248c2bf80f35b30a87218e3341fb2030135cd7f8c0a9a7cb50e617edfc->leave($__internal_13b76d248c2bf80f35b30a87218e3341fb2030135cd7f8c0a9a7cb50e617edfc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
