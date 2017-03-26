<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_4c8bd9abdc44471805f4f49de2c1aac4f8c8b9878533ec7dec1315e7ea7e363c extends Twig_Template
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
        $__internal_3b986ddab3a8b8efceb3ad5ad665ba3b78c1cecd5416e81baae3d024237229dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b986ddab3a8b8efceb3ad5ad665ba3b78c1cecd5416e81baae3d024237229dc->enter($__internal_3b986ddab3a8b8efceb3ad5ad665ba3b78c1cecd5416e81baae3d024237229dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_b1b739f437e90650017aece7d652e14c768ae48f076fd1ead07c0fa97c3407d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1b739f437e90650017aece7d652e14c768ae48f076fd1ead07c0fa97c3407d4->enter($__internal_b1b739f437e90650017aece7d652e14c768ae48f076fd1ead07c0fa97c3407d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_3b986ddab3a8b8efceb3ad5ad665ba3b78c1cecd5416e81baae3d024237229dc->leave($__internal_3b986ddab3a8b8efceb3ad5ad665ba3b78c1cecd5416e81baae3d024237229dc_prof);

        
        $__internal_b1b739f437e90650017aece7d652e14c768ae48f076fd1ead07c0fa97c3407d4->leave($__internal_b1b739f437e90650017aece7d652e14c768ae48f076fd1ead07c0fa97c3407d4_prof);

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
", "TwigBundle:Exception:error.txt.twig", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
