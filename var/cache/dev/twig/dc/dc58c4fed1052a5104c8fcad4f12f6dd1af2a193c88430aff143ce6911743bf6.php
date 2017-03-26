<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_745334594c39bbcc9077d6af6cc507bbd4d5bccd70cf7763d6ef047fc81d1f4c extends Twig_Template
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
        $__internal_cddfd6f5db031620eafb95b50926337690643b93a9f925be3a0decb028b4a424 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cddfd6f5db031620eafb95b50926337690643b93a9f925be3a0decb028b4a424->enter($__internal_cddfd6f5db031620eafb95b50926337690643b93a9f925be3a0decb028b4a424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_2a9b9d85e483c7cccd540685449d567dc4b34f7f73b0d7d3de40caa169d2f2e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a9b9d85e483c7cccd540685449d567dc4b34f7f73b0d7d3de40caa169d2f2e1->enter($__internal_2a9b9d85e483c7cccd540685449d567dc4b34f7f73b0d7d3de40caa169d2f2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_cddfd6f5db031620eafb95b50926337690643b93a9f925be3a0decb028b4a424->leave($__internal_cddfd6f5db031620eafb95b50926337690643b93a9f925be3a0decb028b4a424_prof);

        
        $__internal_2a9b9d85e483c7cccd540685449d567dc4b34f7f73b0d7d3de40caa169d2f2e1->leave($__internal_2a9b9d85e483c7cccd540685449d567dc4b34f7f73b0d7d3de40caa169d2f2e1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
