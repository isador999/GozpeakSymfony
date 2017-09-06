<?php

/* robots.txt */
class __TwigTemplate_2a4308d92fadd7d70f155b73d4e7571c27d8a1b8eece1a8267fbf207d8b0ef96 extends Twig_Template
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
        $__internal_e7f6bd142974177ac3bb6ef12c708eebecc09c7d0c32ea5b23155aebc0c4db3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7f6bd142974177ac3bb6ef12c708eebecc09c7d0c32ea5b23155aebc0c4db3a->enter($__internal_e7f6bd142974177ac3bb6ef12c708eebecc09c7d0c32ea5b23155aebc0c4db3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "robots.txt"));

        $__internal_5ff58198b8d83fcdd2dc5fd4416310fdcb92f935bab12eca0e7eb97f1e336310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ff58198b8d83fcdd2dc5fd4416310fdcb92f935bab12eca0e7eb97f1e336310->enter($__internal_5ff58198b8d83fcdd2dc5fd4416310fdcb92f935bab12eca0e7eb97f1e336310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "robots.txt"));

        // line 1
        echo "User-Agent: *
Disallow: /
";
        
        $__internal_e7f6bd142974177ac3bb6ef12c708eebecc09c7d0c32ea5b23155aebc0c4db3a->leave($__internal_e7f6bd142974177ac3bb6ef12c708eebecc09c7d0c32ea5b23155aebc0c4db3a_prof);

        
        $__internal_5ff58198b8d83fcdd2dc5fd4416310fdcb92f935bab12eca0e7eb97f1e336310->leave($__internal_5ff58198b8d83fcdd2dc5fd4416310fdcb92f935bab12eca0e7eb97f1e336310_prof);

    }

    public function getTemplateName()
    {
        return "robots.txt";
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
        return new Twig_Source("User-Agent: *
Disallow: /
", "robots.txt", "/root/GozpeakSymfony/app/Resources/views/robots.txt");
    }
}
