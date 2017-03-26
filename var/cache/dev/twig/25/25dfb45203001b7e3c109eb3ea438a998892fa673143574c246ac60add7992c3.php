<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e6cfd0b97ef569c5834a674e0fd2bbd33e02eed3496d6d02164c0b8877085b98 extends Twig_Template
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
        $__internal_60f1a2c57ed772f13dbdda3e647d174c5fc76f980b9b8f506335e7855b3b7264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60f1a2c57ed772f13dbdda3e647d174c5fc76f980b9b8f506335e7855b3b7264->enter($__internal_60f1a2c57ed772f13dbdda3e647d174c5fc76f980b9b8f506335e7855b3b7264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_e9621b97dafc4f64540bbf480c146c45376502dfc57482ef23fa6a190c86be8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9621b97dafc4f64540bbf480c146c45376502dfc57482ef23fa6a190c86be8c->enter($__internal_e9621b97dafc4f64540bbf480c146c45376502dfc57482ef23fa6a190c86be8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_60f1a2c57ed772f13dbdda3e647d174c5fc76f980b9b8f506335e7855b3b7264->leave($__internal_60f1a2c57ed772f13dbdda3e647d174c5fc76f980b9b8f506335e7855b3b7264_prof);

        
        $__internal_e9621b97dafc4f64540bbf480c146c45376502dfc57482ef23fa6a190c86be8c->leave($__internal_e9621b97dafc4f64540bbf480c146c45376502dfc57482ef23fa6a190c86be8c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
