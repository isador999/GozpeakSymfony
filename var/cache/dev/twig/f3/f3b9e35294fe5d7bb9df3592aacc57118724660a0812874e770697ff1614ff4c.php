<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_382cb4ce311e8c69b48b919f3b3e30f7628e8de53aa225e6994d726162bb1125 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_919740f59c922ee3eaa19b0c476f9298fc781328f0c7a5d580bc7e4bf446cb8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_919740f59c922ee3eaa19b0c476f9298fc781328f0c7a5d580bc7e4bf446cb8b->enter($__internal_919740f59c922ee3eaa19b0c476f9298fc781328f0c7a5d580bc7e4bf446cb8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_4a1c4cae5011de36601270e58e165f82728000f8dc623d572dcc55a7fed25cd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a1c4cae5011de36601270e58e165f82728000f8dc623d572dcc55a7fed25cd4->enter($__internal_4a1c4cae5011de36601270e58e165f82728000f8dc623d572dcc55a7fed25cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_919740f59c922ee3eaa19b0c476f9298fc781328f0c7a5d580bc7e4bf446cb8b->leave($__internal_919740f59c922ee3eaa19b0c476f9298fc781328f0c7a5d580bc7e4bf446cb8b_prof);

        
        $__internal_4a1c4cae5011de36601270e58e165f82728000f8dc623d572dcc55a7fed25cd4->leave($__internal_4a1c4cae5011de36601270e58e165f82728000f8dc623d572dcc55a7fed25cd4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_da2ba37634a3db5e67c299f20d962c1de7d9614d280d9e358186dc4ddfaf03cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da2ba37634a3db5e67c299f20d962c1de7d9614d280d9e358186dc4ddfaf03cb->enter($__internal_da2ba37634a3db5e67c299f20d962c1de7d9614d280d9e358186dc4ddfaf03cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c33176661beb025cbef0b22be497e3fe10ff34302873bdc308b77d116a23fcc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c33176661beb025cbef0b22be497e3fe10ff34302873bdc308b77d116a23fcc6->enter($__internal_c33176661beb025cbef0b22be497e3fe10ff34302873bdc308b77d116a23fcc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c33176661beb025cbef0b22be497e3fe10ff34302873bdc308b77d116a23fcc6->leave($__internal_c33176661beb025cbef0b22be497e3fe10ff34302873bdc308b77d116a23fcc6_prof);

        
        $__internal_da2ba37634a3db5e67c299f20d962c1de7d9614d280d9e358186dc4ddfaf03cb->leave($__internal_da2ba37634a3db5e67c299f20d962c1de7d9614d280d9e358186dc4ddfaf03cb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
