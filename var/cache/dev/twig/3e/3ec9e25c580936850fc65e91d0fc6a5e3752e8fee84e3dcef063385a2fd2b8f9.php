<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_90c1a63aba124899c905d7d2339310ea4f9245a4e490e264b8efbccfdfc55f2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4991f7b958f37e0b5f4a18be5adf4a14ee3d73917e0b7b02851a4ac2a224d64c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4991f7b958f37e0b5f4a18be5adf4a14ee3d73917e0b7b02851a4ac2a224d64c->enter($__internal_4991f7b958f37e0b5f4a18be5adf4a14ee3d73917e0b7b02851a4ac2a224d64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_185c41a3577338e63ca69ebf45e9015c03c64735251843413fdc42c792709927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_185c41a3577338e63ca69ebf45e9015c03c64735251843413fdc42c792709927->enter($__internal_185c41a3577338e63ca69ebf45e9015c03c64735251843413fdc42c792709927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4991f7b958f37e0b5f4a18be5adf4a14ee3d73917e0b7b02851a4ac2a224d64c->leave($__internal_4991f7b958f37e0b5f4a18be5adf4a14ee3d73917e0b7b02851a4ac2a224d64c_prof);

        
        $__internal_185c41a3577338e63ca69ebf45e9015c03c64735251843413fdc42c792709927->leave($__internal_185c41a3577338e63ca69ebf45e9015c03c64735251843413fdc42c792709927_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_320d20c014e39bc652b368d8e3cf2001863b870af8a0a0b950020056807ebf67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_320d20c014e39bc652b368d8e3cf2001863b870af8a0a0b950020056807ebf67->enter($__internal_320d20c014e39bc652b368d8e3cf2001863b870af8a0a0b950020056807ebf67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_91f06adeb7c0874b6ffa7f15ed2cc6b9f79d6518fd60b111b2a55158a5f4aec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f06adeb7c0874b6ffa7f15ed2cc6b9f79d6518fd60b111b2a55158a5f4aec2->enter($__internal_91f06adeb7c0874b6ffa7f15ed2cc6b9f79d6518fd60b111b2a55158a5f4aec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_91f06adeb7c0874b6ffa7f15ed2cc6b9f79d6518fd60b111b2a55158a5f4aec2->leave($__internal_91f06adeb7c0874b6ffa7f15ed2cc6b9f79d6518fd60b111b2a55158a5f4aec2_prof);

        
        $__internal_320d20c014e39bc652b368d8e3cf2001863b870af8a0a0b950020056807ebf67->leave($__internal_320d20c014e39bc652b368d8e3cf2001863b870af8a0a0b950020056807ebf67_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
