<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_f2c68e12239ae1cdbaff98c7b918d8780c5ce60a6fc76611ed2dc09c09b09b5d extends Twig_Template
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
        $__internal_087de32b6c9bd5c814f96c6db16fe32a31138bd05c57c85cfec107ec1fbe8c47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_087de32b6c9bd5c814f96c6db16fe32a31138bd05c57c85cfec107ec1fbe8c47->enter($__internal_087de32b6c9bd5c814f96c6db16fe32a31138bd05c57c85cfec107ec1fbe8c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_c198c542744b90d8c45eceb8f54221536c6318218afe06b91cdf67242a1e784f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c198c542744b90d8c45eceb8f54221536c6318218afe06b91cdf67242a1e784f->enter($__internal_c198c542744b90d8c45eceb8f54221536c6318218afe06b91cdf67242a1e784f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_087de32b6c9bd5c814f96c6db16fe32a31138bd05c57c85cfec107ec1fbe8c47->leave($__internal_087de32b6c9bd5c814f96c6db16fe32a31138bd05c57c85cfec107ec1fbe8c47_prof);

        
        $__internal_c198c542744b90d8c45eceb8f54221536c6318218afe06b91cdf67242a1e784f->leave($__internal_c198c542744b90d8c45eceb8f54221536c6318218afe06b91cdf67242a1e784f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
