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
        $__internal_914dec8fcb93f4ae411aa27b189fc69dc92445f9f657af95a7f762a7adc7bc72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_914dec8fcb93f4ae411aa27b189fc69dc92445f9f657af95a7f762a7adc7bc72->enter($__internal_914dec8fcb93f4ae411aa27b189fc69dc92445f9f657af95a7f762a7adc7bc72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_3db9153049b078cd8a418c2dc57647e310647849f4b2f837de06f4dcf535b2da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3db9153049b078cd8a418c2dc57647e310647849f4b2f837de06f4dcf535b2da->enter($__internal_3db9153049b078cd8a418c2dc57647e310647849f4b2f837de06f4dcf535b2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_914dec8fcb93f4ae411aa27b189fc69dc92445f9f657af95a7f762a7adc7bc72->leave($__internal_914dec8fcb93f4ae411aa27b189fc69dc92445f9f657af95a7f762a7adc7bc72_prof);

        
        $__internal_3db9153049b078cd8a418c2dc57647e310647849f4b2f837de06f4dcf535b2da->leave($__internal_3db9153049b078cd8a418c2dc57647e310647849f4b2f837de06f4dcf535b2da_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ac50e948472d17c637cee01ea3a20d775ec61db8cfd11fbc4a3985d4fb9e1da2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac50e948472d17c637cee01ea3a20d775ec61db8cfd11fbc4a3985d4fb9e1da2->enter($__internal_ac50e948472d17c637cee01ea3a20d775ec61db8cfd11fbc4a3985d4fb9e1da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ed04aa8e862fd6772303b4fa29c1ac32ef85f9bb26d71eb194b2f3594d0174c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed04aa8e862fd6772303b4fa29c1ac32ef85f9bb26d71eb194b2f3594d0174c7->enter($__internal_ed04aa8e862fd6772303b4fa29c1ac32ef85f9bb26d71eb194b2f3594d0174c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ed04aa8e862fd6772303b4fa29c1ac32ef85f9bb26d71eb194b2f3594d0174c7->leave($__internal_ed04aa8e862fd6772303b4fa29c1ac32ef85f9bb26d71eb194b2f3594d0174c7_prof);

        
        $__internal_ac50e948472d17c637cee01ea3a20d775ec61db8cfd11fbc4a3985d4fb9e1da2->leave($__internal_ac50e948472d17c637cee01ea3a20d775ec61db8cfd11fbc4a3985d4fb9e1da2_prof);

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
