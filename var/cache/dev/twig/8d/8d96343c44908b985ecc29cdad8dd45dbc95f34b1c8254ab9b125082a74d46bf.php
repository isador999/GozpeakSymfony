<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_35d9165c8a8bcd1c978980c9a88924822fce6ed95e2c1c4ecae4388f244f6193 extends Twig_Template
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
        $__internal_d2f24b29cbb4cd5ea5f22e4bc1b3bee7eb20f427f64af08eea90b3b055903cb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2f24b29cbb4cd5ea5f22e4bc1b3bee7eb20f427f64af08eea90b3b055903cb6->enter($__internal_d2f24b29cbb4cd5ea5f22e4bc1b3bee7eb20f427f64af08eea90b3b055903cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_eb60f39e1c68afa0f18c6e5d4f546b564c433ab8df77314ab11b9f3a2231e052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb60f39e1c68afa0f18c6e5d4f546b564c433ab8df77314ab11b9f3a2231e052->enter($__internal_eb60f39e1c68afa0f18c6e5d4f546b564c433ab8df77314ab11b9f3a2231e052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2f24b29cbb4cd5ea5f22e4bc1b3bee7eb20f427f64af08eea90b3b055903cb6->leave($__internal_d2f24b29cbb4cd5ea5f22e4bc1b3bee7eb20f427f64af08eea90b3b055903cb6_prof);

        
        $__internal_eb60f39e1c68afa0f18c6e5d4f546b564c433ab8df77314ab11b9f3a2231e052->leave($__internal_eb60f39e1c68afa0f18c6e5d4f546b564c433ab8df77314ab11b9f3a2231e052_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_33703c8547ac2bb0985009f9f626a86f02259b8111c72e3072f7b7a225dbf1a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33703c8547ac2bb0985009f9f626a86f02259b8111c72e3072f7b7a225dbf1a1->enter($__internal_33703c8547ac2bb0985009f9f626a86f02259b8111c72e3072f7b7a225dbf1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a87fbc693680e7774ae7a12cddac6df369f4fbba074df40d27a93cb61363635f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a87fbc693680e7774ae7a12cddac6df369f4fbba074df40d27a93cb61363635f->enter($__internal_a87fbc693680e7774ae7a12cddac6df369f4fbba074df40d27a93cb61363635f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_a87fbc693680e7774ae7a12cddac6df369f4fbba074df40d27a93cb61363635f->leave($__internal_a87fbc693680e7774ae7a12cddac6df369f4fbba074df40d27a93cb61363635f_prof);

        
        $__internal_33703c8547ac2bb0985009f9f626a86f02259b8111c72e3072f7b7a225dbf1a1->leave($__internal_33703c8547ac2bb0985009f9f626a86f02259b8111c72e3072f7b7a225dbf1a1_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
