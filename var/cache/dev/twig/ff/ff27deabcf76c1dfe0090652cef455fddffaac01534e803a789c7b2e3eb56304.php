<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_c7cb01721a01044236d7c4aee55b1d09763d538a1adc24252dbbc4e85b4d2f73 extends Twig_Template
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
        $__internal_2c15a9db8c39bfad9029c4bfd1f58d83393f7e23ef82ada3fe49319f744ae3a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c15a9db8c39bfad9029c4bfd1f58d83393f7e23ef82ada3fe49319f744ae3a4->enter($__internal_2c15a9db8c39bfad9029c4bfd1f58d83393f7e23ef82ada3fe49319f744ae3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_2980e277ecfc0a6c8ff93673b23e0c46249ac93b8df1fafb19b38f59f9c10862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2980e277ecfc0a6c8ff93673b23e0c46249ac93b8df1fafb19b38f59f9c10862->enter($__internal_2980e277ecfc0a6c8ff93673b23e0c46249ac93b8df1fafb19b38f59f9c10862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2c15a9db8c39bfad9029c4bfd1f58d83393f7e23ef82ada3fe49319f744ae3a4->leave($__internal_2c15a9db8c39bfad9029c4bfd1f58d83393f7e23ef82ada3fe49319f744ae3a4_prof);

        
        $__internal_2980e277ecfc0a6c8ff93673b23e0c46249ac93b8df1fafb19b38f59f9c10862->leave($__internal_2980e277ecfc0a6c8ff93673b23e0c46249ac93b8df1fafb19b38f59f9c10862_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
