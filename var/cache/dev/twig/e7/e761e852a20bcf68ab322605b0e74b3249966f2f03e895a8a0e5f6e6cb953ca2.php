<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_2ace783b508e2369b5be6fdb8cc26a46e20f9bb55f0df8c9256f2d9027f272e5 extends Twig_Template
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
        $__internal_adcb0f77ff3e375ed9bc65981961e825173205324d78afc375ac7e47a6e2199a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adcb0f77ff3e375ed9bc65981961e825173205324d78afc375ac7e47a6e2199a->enter($__internal_adcb0f77ff3e375ed9bc65981961e825173205324d78afc375ac7e47a6e2199a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_f696412b9befd36bac4ce531398b8f007ebec5c4ca5539305c30a70c687f44da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f696412b9befd36bac4ce531398b8f007ebec5c4ca5539305c30a70c687f44da->enter($__internal_f696412b9befd36bac4ce531398b8f007ebec5c4ca5539305c30a70c687f44da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_adcb0f77ff3e375ed9bc65981961e825173205324d78afc375ac7e47a6e2199a->leave($__internal_adcb0f77ff3e375ed9bc65981961e825173205324d78afc375ac7e47a6e2199a_prof);

        
        $__internal_f696412b9befd36bac4ce531398b8f007ebec5c4ca5539305c30a70c687f44da->leave($__internal_f696412b9befd36bac4ce531398b8f007ebec5c4ca5539305c30a70c687f44da_prof);

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
", "TwigBundle:Exception:error.css.twig", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
