<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_9180ece55a1d6e178d05e18ba2cbbc42d59183df6c1aa11037f0ec8ef46ede2c extends Twig_Template
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
        $__internal_b99faf23052f3f76bfb067dd7a80fd7bb7ffb6d53c2d9eaf5745a219109aee43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b99faf23052f3f76bfb067dd7a80fd7bb7ffb6d53c2d9eaf5745a219109aee43->enter($__internal_b99faf23052f3f76bfb067dd7a80fd7bb7ffb6d53c2d9eaf5745a219109aee43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_3f557b62b8e81a433f4f3fd662cd773499423de3d031ed6268d5483770c48bab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f557b62b8e81a433f4f3fd662cd773499423de3d031ed6268d5483770c48bab->enter($__internal_3f557b62b8e81a433f4f3fd662cd773499423de3d031ed6268d5483770c48bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b99faf23052f3f76bfb067dd7a80fd7bb7ffb6d53c2d9eaf5745a219109aee43->leave($__internal_b99faf23052f3f76bfb067dd7a80fd7bb7ffb6d53c2d9eaf5745a219109aee43_prof);

        
        $__internal_3f557b62b8e81a433f4f3fd662cd773499423de3d031ed6268d5483770c48bab->leave($__internal_3f557b62b8e81a433f4f3fd662cd773499423de3d031ed6268d5483770c48bab_prof);

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
", "TwigBundle:Exception:exception.css.twig", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
