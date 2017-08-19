<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_90c1a63aba124899c905d7d2339310ea4f9245a4e490e264b8efbccfdfc55f2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_c3033b7c312e14b530cea1b0766875f9ead43b068330e680942078bc38ce1b0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3033b7c312e14b530cea1b0766875f9ead43b068330e680942078bc38ce1b0e->enter($__internal_c3033b7c312e14b530cea1b0766875f9ead43b068330e680942078bc38ce1b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_07e52ba64a8771e878fc841e6effa17a0db6d090dc458fc7c5c8c6c35f9bc019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07e52ba64a8771e878fc841e6effa17a0db6d090dc458fc7c5c8c6c35f9bc019->enter($__internal_07e52ba64a8771e878fc841e6effa17a0db6d090dc458fc7c5c8c6c35f9bc019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3033b7c312e14b530cea1b0766875f9ead43b068330e680942078bc38ce1b0e->leave($__internal_c3033b7c312e14b530cea1b0766875f9ead43b068330e680942078bc38ce1b0e_prof);

        
        $__internal_07e52ba64a8771e878fc841e6effa17a0db6d090dc458fc7c5c8c6c35f9bc019->leave($__internal_07e52ba64a8771e878fc841e6effa17a0db6d090dc458fc7c5c8c6c35f9bc019_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3721968b0aa64ef8683d6574ff630d1b3a882de6e7103ce51cd2a9385eaa6fda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3721968b0aa64ef8683d6574ff630d1b3a882de6e7103ce51cd2a9385eaa6fda->enter($__internal_3721968b0aa64ef8683d6574ff630d1b3a882de6e7103ce51cd2a9385eaa6fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_10ffd3fcf42bc6cb610f5c04f47ce1fcffe137d3af2a0f413f447a4545ffffff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ffd3fcf42bc6cb610f5c04f47ce1fcffe137d3af2a0f413f447a4545ffffff->enter($__internal_10ffd3fcf42bc6cb610f5c04f47ce1fcffe137d3af2a0f413f447a4545ffffff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_10ffd3fcf42bc6cb610f5c04f47ce1fcffe137d3af2a0f413f447a4545ffffff->leave($__internal_10ffd3fcf42bc6cb610f5c04f47ce1fcffe137d3af2a0f413f447a4545ffffff_prof);

        
        $__internal_3721968b0aa64ef8683d6574ff630d1b3a882de6e7103ce51cd2a9385eaa6fda->leave($__internal_3721968b0aa64ef8683d6574ff630d1b3a882de6e7103ce51cd2a9385eaa6fda_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
