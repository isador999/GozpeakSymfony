<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_72111f2bb34a4692c3c0a7e55cc41e467ad2b8c3530294bfd71f5611508f0b06 extends Twig_Template
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
        $__internal_f3cac847dfa6293e3c48b850c1de1b698bfe8c65d06b11d65f0433d612bde846 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3cac847dfa6293e3c48b850c1de1b698bfe8c65d06b11d65f0433d612bde846->enter($__internal_f3cac847dfa6293e3c48b850c1de1b698bfe8c65d06b11d65f0433d612bde846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_91b9dd5f93683b1fb51c24f92ea5a4d6a517b7c43be5e40ee5f1c3863de8f520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b9dd5f93683b1fb51c24f92ea5a4d6a517b7c43be5e40ee5f1c3863de8f520->enter($__internal_91b9dd5f93683b1fb51c24f92ea5a4d6a517b7c43be5e40ee5f1c3863de8f520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f3cac847dfa6293e3c48b850c1de1b698bfe8c65d06b11d65f0433d612bde846->leave($__internal_f3cac847dfa6293e3c48b850c1de1b698bfe8c65d06b11d65f0433d612bde846_prof);

        
        $__internal_91b9dd5f93683b1fb51c24f92ea5a4d6a517b7c43be5e40ee5f1c3863de8f520->leave($__internal_91b9dd5f93683b1fb51c24f92ea5a4d6a517b7c43be5e40ee5f1c3863de8f520_prof);

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
", "TwigBundle:Exception:error.json.twig", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
