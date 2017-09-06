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
        $__internal_7c6f9ad8b4767dd3111ca516975eaf363336edcccc96348190d0f352837833e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c6f9ad8b4767dd3111ca516975eaf363336edcccc96348190d0f352837833e4->enter($__internal_7c6f9ad8b4767dd3111ca516975eaf363336edcccc96348190d0f352837833e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_a04741d2a1c6c8cf7e2650123de299474d6ac145b0832b51418ab7f7e75bf68a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a04741d2a1c6c8cf7e2650123de299474d6ac145b0832b51418ab7f7e75bf68a->enter($__internal_a04741d2a1c6c8cf7e2650123de299474d6ac145b0832b51418ab7f7e75bf68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c6f9ad8b4767dd3111ca516975eaf363336edcccc96348190d0f352837833e4->leave($__internal_7c6f9ad8b4767dd3111ca516975eaf363336edcccc96348190d0f352837833e4_prof);

        
        $__internal_a04741d2a1c6c8cf7e2650123de299474d6ac145b0832b51418ab7f7e75bf68a->leave($__internal_a04741d2a1c6c8cf7e2650123de299474d6ac145b0832b51418ab7f7e75bf68a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1fc2677da71d7e577c4a9d6f6f61b7efefc94f8fbed64bceada37cca6f64659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1fc2677da71d7e577c4a9d6f6f61b7efefc94f8fbed64bceada37cca6f64659->enter($__internal_b1fc2677da71d7e577c4a9d6f6f61b7efefc94f8fbed64bceada37cca6f64659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8b58fc1ddc5679c52834b1562125c90c223494f490e3a48a661d16bbc682edbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b58fc1ddc5679c52834b1562125c90c223494f490e3a48a661d16bbc682edbb->enter($__internal_8b58fc1ddc5679c52834b1562125c90c223494f490e3a48a661d16bbc682edbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8b58fc1ddc5679c52834b1562125c90c223494f490e3a48a661d16bbc682edbb->leave($__internal_8b58fc1ddc5679c52834b1562125c90c223494f490e3a48a661d16bbc682edbb_prof);

        
        $__internal_b1fc2677da71d7e577c4a9d6f6f61b7efefc94f8fbed64bceada37cca6f64659->leave($__internal_b1fc2677da71d7e577c4a9d6f6f61b7efefc94f8fbed64bceada37cca6f64659_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_65031bd6138d509422223e846f38ba2f2ef07302de5e3b02d838b3baac2008e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65031bd6138d509422223e846f38ba2f2ef07302de5e3b02d838b3baac2008e1->enter($__internal_65031bd6138d509422223e846f38ba2f2ef07302de5e3b02d838b3baac2008e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c1ab33569258a59f676455821337ae3174259aceccc1ceef12813adb5c2fbb41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1ab33569258a59f676455821337ae3174259aceccc1ceef12813adb5c2fbb41->enter($__internal_c1ab33569258a59f676455821337ae3174259aceccc1ceef12813adb5c2fbb41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c1ab33569258a59f676455821337ae3174259aceccc1ceef12813adb5c2fbb41->leave($__internal_c1ab33569258a59f676455821337ae3174259aceccc1ceef12813adb5c2fbb41_prof);

        
        $__internal_65031bd6138d509422223e846f38ba2f2ef07302de5e3b02d838b3baac2008e1->leave($__internal_65031bd6138d509422223e846f38ba2f2ef07302de5e3b02d838b3baac2008e1_prof);

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
