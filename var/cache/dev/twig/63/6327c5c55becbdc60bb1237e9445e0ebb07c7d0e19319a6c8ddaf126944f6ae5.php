<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3778406ef85a6637d2a2a0be9d378272396e22464ec59695638d364213c2a4f4 extends Twig_Template
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
        $__internal_7a232a45535f93b50ba6b2d35b851a35f828741bbd9db572499b79ec95e70967 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a232a45535f93b50ba6b2d35b851a35f828741bbd9db572499b79ec95e70967->enter($__internal_7a232a45535f93b50ba6b2d35b851a35f828741bbd9db572499b79ec95e70967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_2350bf2b7fffd681267e53a46abd6f13c7323a8a46a6072ee9c3aae8966fc397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2350bf2b7fffd681267e53a46abd6f13c7323a8a46a6072ee9c3aae8966fc397->enter($__internal_2350bf2b7fffd681267e53a46abd6f13c7323a8a46a6072ee9c3aae8966fc397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7a232a45535f93b50ba6b2d35b851a35f828741bbd9db572499b79ec95e70967->leave($__internal_7a232a45535f93b50ba6b2d35b851a35f828741bbd9db572499b79ec95e70967_prof);

        
        $__internal_2350bf2b7fffd681267e53a46abd6f13c7323a8a46a6072ee9c3aae8966fc397->leave($__internal_2350bf2b7fffd681267e53a46abd6f13c7323a8a46a6072ee9c3aae8966fc397_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8673fbfe0dd50ae6632bc6de851cec613ebee5251ebb7730b96b60bfd8694429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8673fbfe0dd50ae6632bc6de851cec613ebee5251ebb7730b96b60bfd8694429->enter($__internal_8673fbfe0dd50ae6632bc6de851cec613ebee5251ebb7730b96b60bfd8694429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d2322c2b6119cbe643a55d004b579372a540fdbe974afac8395d155907edfeda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2322c2b6119cbe643a55d004b579372a540fdbe974afac8395d155907edfeda->enter($__internal_d2322c2b6119cbe643a55d004b579372a540fdbe974afac8395d155907edfeda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d2322c2b6119cbe643a55d004b579372a540fdbe974afac8395d155907edfeda->leave($__internal_d2322c2b6119cbe643a55d004b579372a540fdbe974afac8395d155907edfeda_prof);

        
        $__internal_8673fbfe0dd50ae6632bc6de851cec613ebee5251ebb7730b96b60bfd8694429->leave($__internal_8673fbfe0dd50ae6632bc6de851cec613ebee5251ebb7730b96b60bfd8694429_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
