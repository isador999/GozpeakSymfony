<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1a4e254d99350e31e2f1320a6b3258f61bc6876a0452cf5602c2a2eef09494fc extends Twig_Template
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
        $__internal_6ef1df903e7ac0de7778d41cfdf260e77bc073c79b647549648cb980da3de4c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ef1df903e7ac0de7778d41cfdf260e77bc073c79b647549648cb980da3de4c0->enter($__internal_6ef1df903e7ac0de7778d41cfdf260e77bc073c79b647549648cb980da3de4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_72172a6ffe88f83f44b4ab26c5388923592f1508ab51cef046bd1cb4c05bdfec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72172a6ffe88f83f44b4ab26c5388923592f1508ab51cef046bd1cb4c05bdfec->enter($__internal_72172a6ffe88f83f44b4ab26c5388923592f1508ab51cef046bd1cb4c05bdfec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_6ef1df903e7ac0de7778d41cfdf260e77bc073c79b647549648cb980da3de4c0->leave($__internal_6ef1df903e7ac0de7778d41cfdf260e77bc073c79b647549648cb980da3de4c0_prof);

        
        $__internal_72172a6ffe88f83f44b4ab26c5388923592f1508ab51cef046bd1cb4c05bdfec->leave($__internal_72172a6ffe88f83f44b4ab26c5388923592f1508ab51cef046bd1cb4c05bdfec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
