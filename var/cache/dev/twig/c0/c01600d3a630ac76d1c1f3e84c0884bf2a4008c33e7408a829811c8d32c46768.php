<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d9ffae65641b2646830901a5f86c06bf780d0129aa15524b0693f8abf9d9bfc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4da1c6dfaecee74de207f207ebc6ced4d8e27d16b1a8f5e83aa33be5d0090626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4da1c6dfaecee74de207f207ebc6ced4d8e27d16b1a8f5e83aa33be5d0090626->enter($__internal_4da1c6dfaecee74de207f207ebc6ced4d8e27d16b1a8f5e83aa33be5d0090626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_3b8c5ec048f5b155a7818ffe39e133178659973fece4302f90d5c8eb80c28484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b8c5ec048f5b155a7818ffe39e133178659973fece4302f90d5c8eb80c28484->enter($__internal_3b8c5ec048f5b155a7818ffe39e133178659973fece4302f90d5c8eb80c28484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4da1c6dfaecee74de207f207ebc6ced4d8e27d16b1a8f5e83aa33be5d0090626->leave($__internal_4da1c6dfaecee74de207f207ebc6ced4d8e27d16b1a8f5e83aa33be5d0090626_prof);

        
        $__internal_3b8c5ec048f5b155a7818ffe39e133178659973fece4302f90d5c8eb80c28484->leave($__internal_3b8c5ec048f5b155a7818ffe39e133178659973fece4302f90d5c8eb80c28484_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_48372f244f1ec5722a6aace07ddcdda820b6be540e1d8b2bf0da707d73a17185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48372f244f1ec5722a6aace07ddcdda820b6be540e1d8b2bf0da707d73a17185->enter($__internal_48372f244f1ec5722a6aace07ddcdda820b6be540e1d8b2bf0da707d73a17185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_af35a5ef273a0b538ec971b56e75b2d9822d9c764003ebfc26ab4bf162c3bc5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af35a5ef273a0b538ec971b56e75b2d9822d9c764003ebfc26ab4bf162c3bc5a->enter($__internal_af35a5ef273a0b538ec971b56e75b2d9822d9c764003ebfc26ab4bf162c3bc5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_af35a5ef273a0b538ec971b56e75b2d9822d9c764003ebfc26ab4bf162c3bc5a->leave($__internal_af35a5ef273a0b538ec971b56e75b2d9822d9c764003ebfc26ab4bf162c3bc5a_prof);

        
        $__internal_48372f244f1ec5722a6aace07ddcdda820b6be540e1d8b2bf0da707d73a17185->leave($__internal_48372f244f1ec5722a6aace07ddcdda820b6be540e1d8b2bf0da707d73a17185_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc2080c9ca164e3289781009923d15ae8864939f4e352b21d6a2348d8b0f13d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc2080c9ca164e3289781009923d15ae8864939f4e352b21d6a2348d8b0f13d5->enter($__internal_bc2080c9ca164e3289781009923d15ae8864939f4e352b21d6a2348d8b0f13d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dc2e4eeaab0aa2c8f78af845fcdcd32220e7e8c536f080d35ffcd1043638fd3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc2e4eeaab0aa2c8f78af845fcdcd32220e7e8c536f080d35ffcd1043638fd3f->enter($__internal_dc2e4eeaab0aa2c8f78af845fcdcd32220e7e8c536f080d35ffcd1043638fd3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_dc2e4eeaab0aa2c8f78af845fcdcd32220e7e8c536f080d35ffcd1043638fd3f->leave($__internal_dc2e4eeaab0aa2c8f78af845fcdcd32220e7e8c536f080d35ffcd1043638fd3f_prof);

        
        $__internal_bc2080c9ca164e3289781009923d15ae8864939f4e352b21d6a2348d8b0f13d5->leave($__internal_bc2080c9ca164e3289781009923d15ae8864939f4e352b21d6a2348d8b0f13d5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
