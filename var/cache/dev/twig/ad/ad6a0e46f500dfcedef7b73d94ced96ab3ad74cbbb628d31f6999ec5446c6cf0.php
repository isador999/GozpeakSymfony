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
        $__internal_2e262ef6ff3cb0ae0d3c074cccb6fe9cb0cdba72475b1ba3d611809760201bcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e262ef6ff3cb0ae0d3c074cccb6fe9cb0cdba72475b1ba3d611809760201bcf->enter($__internal_2e262ef6ff3cb0ae0d3c074cccb6fe9cb0cdba72475b1ba3d611809760201bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_7448624e1208640e6efb70a732bb707e443163191d7206bbe3b6985519d47b7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7448624e1208640e6efb70a732bb707e443163191d7206bbe3b6985519d47b7a->enter($__internal_7448624e1208640e6efb70a732bb707e443163191d7206bbe3b6985519d47b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2e262ef6ff3cb0ae0d3c074cccb6fe9cb0cdba72475b1ba3d611809760201bcf->leave($__internal_2e262ef6ff3cb0ae0d3c074cccb6fe9cb0cdba72475b1ba3d611809760201bcf_prof);

        
        $__internal_7448624e1208640e6efb70a732bb707e443163191d7206bbe3b6985519d47b7a->leave($__internal_7448624e1208640e6efb70a732bb707e443163191d7206bbe3b6985519d47b7a_prof);

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
