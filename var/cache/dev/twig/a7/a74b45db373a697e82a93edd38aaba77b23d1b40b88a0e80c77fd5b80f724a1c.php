<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4d26adbebfa14c42ec61beddd94044f150afbd9bcec9763aa3cf51695163961a extends Twig_Template
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
        $__internal_02719dffceb5a59ced5d16c43fb5c7da3da8ec0d73d00a388fc4e97829abb814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02719dffceb5a59ced5d16c43fb5c7da3da8ec0d73d00a388fc4e97829abb814->enter($__internal_02719dffceb5a59ced5d16c43fb5c7da3da8ec0d73d00a388fc4e97829abb814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_52e17b4d50d93ef36c39813e8050b4231e48b78ed176f0ae1b78c63433d75293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52e17b4d50d93ef36c39813e8050b4231e48b78ed176f0ae1b78c63433d75293->enter($__internal_52e17b4d50d93ef36c39813e8050b4231e48b78ed176f0ae1b78c63433d75293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02719dffceb5a59ced5d16c43fb5c7da3da8ec0d73d00a388fc4e97829abb814->leave($__internal_02719dffceb5a59ced5d16c43fb5c7da3da8ec0d73d00a388fc4e97829abb814_prof);

        
        $__internal_52e17b4d50d93ef36c39813e8050b4231e48b78ed176f0ae1b78c63433d75293->leave($__internal_52e17b4d50d93ef36c39813e8050b4231e48b78ed176f0ae1b78c63433d75293_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_38da2ce86bbfcd72026c8ca67976d7dd32b32d327a790d7d2619cfc5fddbafce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38da2ce86bbfcd72026c8ca67976d7dd32b32d327a790d7d2619cfc5fddbafce->enter($__internal_38da2ce86bbfcd72026c8ca67976d7dd32b32d327a790d7d2619cfc5fddbafce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_294048b50eb4323a6f4ee96df6f1631e0ce8ecea5fd46c3478b58989c197993c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_294048b50eb4323a6f4ee96df6f1631e0ce8ecea5fd46c3478b58989c197993c->enter($__internal_294048b50eb4323a6f4ee96df6f1631e0ce8ecea5fd46c3478b58989c197993c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_294048b50eb4323a6f4ee96df6f1631e0ce8ecea5fd46c3478b58989c197993c->leave($__internal_294048b50eb4323a6f4ee96df6f1631e0ce8ecea5fd46c3478b58989c197993c_prof);

        
        $__internal_38da2ce86bbfcd72026c8ca67976d7dd32b32d327a790d7d2619cfc5fddbafce->leave($__internal_38da2ce86bbfcd72026c8ca67976d7dd32b32d327a790d7d2619cfc5fddbafce_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb10ec337ae6779020a410949162b6bbcd0d9191d28d19d60d08e427a9785dd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb10ec337ae6779020a410949162b6bbcd0d9191d28d19d60d08e427a9785dd3->enter($__internal_fb10ec337ae6779020a410949162b6bbcd0d9191d28d19d60d08e427a9785dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4595e2fe60feb74c6dd9f378b42a099b8bc419b736d93e674af3251d6aaf56f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4595e2fe60feb74c6dd9f378b42a099b8bc419b736d93e674af3251d6aaf56f7->enter($__internal_4595e2fe60feb74c6dd9f378b42a099b8bc419b736d93e674af3251d6aaf56f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
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
        
        $__internal_4595e2fe60feb74c6dd9f378b42a099b8bc419b736d93e674af3251d6aaf56f7->leave($__internal_4595e2fe60feb74c6dd9f378b42a099b8bc419b736d93e674af3251d6aaf56f7_prof);

        
        $__internal_fb10ec337ae6779020a410949162b6bbcd0d9191d28d19d60d08e427a9785dd3->leave($__internal_fb10ec337ae6779020a410949162b6bbcd0d9191d28d19d60d08e427a9785dd3_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
