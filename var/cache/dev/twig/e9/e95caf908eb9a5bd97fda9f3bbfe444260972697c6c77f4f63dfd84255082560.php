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
        $__internal_0b890d44307a326e217a94366d86007d40b0ad4af9bc936226972f58a4bcd91a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b890d44307a326e217a94366d86007d40b0ad4af9bc936226972f58a4bcd91a->enter($__internal_0b890d44307a326e217a94366d86007d40b0ad4af9bc936226972f58a4bcd91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_6783b1c95b01c0c46a1f8152e988ed8e0b6c263fe0d61e90df47c0f969c84375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6783b1c95b01c0c46a1f8152e988ed8e0b6c263fe0d61e90df47c0f969c84375->enter($__internal_6783b1c95b01c0c46a1f8152e988ed8e0b6c263fe0d61e90df47c0f969c84375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_0b890d44307a326e217a94366d86007d40b0ad4af9bc936226972f58a4bcd91a->leave($__internal_0b890d44307a326e217a94366d86007d40b0ad4af9bc936226972f58a4bcd91a_prof);

        
        $__internal_6783b1c95b01c0c46a1f8152e988ed8e0b6c263fe0d61e90df47c0f969c84375->leave($__internal_6783b1c95b01c0c46a1f8152e988ed8e0b6c263fe0d61e90df47c0f969c84375_prof);

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
