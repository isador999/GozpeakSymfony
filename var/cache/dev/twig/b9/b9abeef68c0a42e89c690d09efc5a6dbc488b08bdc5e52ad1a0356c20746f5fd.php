<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_150ca7d995468e02789c19d70f5a82365301ecebc21b38fde8bc2214e9f04740 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a85b2e890bbf68e780a922de93964e7ff78114bb6b4f2cdc0c2ddf679f107881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a85b2e890bbf68e780a922de93964e7ff78114bb6b4f2cdc0c2ddf679f107881->enter($__internal_a85b2e890bbf68e780a922de93964e7ff78114bb6b4f2cdc0c2ddf679f107881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_3a6a4778b2fa9d22c0b13c0c3654dffbbeedbb11b8c88c6f6ae4e21a370694ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a6a4778b2fa9d22c0b13c0c3654dffbbeedbb11b8c88c6f6ae4e21a370694ba->enter($__internal_3a6a4778b2fa9d22c0b13c0c3654dffbbeedbb11b8c88c6f6ae4e21a370694ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a85b2e890bbf68e780a922de93964e7ff78114bb6b4f2cdc0c2ddf679f107881->leave($__internal_a85b2e890bbf68e780a922de93964e7ff78114bb6b4f2cdc0c2ddf679f107881_prof);

        
        $__internal_3a6a4778b2fa9d22c0b13c0c3654dffbbeedbb11b8c88c6f6ae4e21a370694ba->leave($__internal_3a6a4778b2fa9d22c0b13c0c3654dffbbeedbb11b8c88c6f6ae4e21a370694ba_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_38bae4ce09bb943f5ef4ea99dbdc136c5f6129b28a61473ffb913a15293fe9ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38bae4ce09bb943f5ef4ea99dbdc136c5f6129b28a61473ffb913a15293fe9ef->enter($__internal_38bae4ce09bb943f5ef4ea99dbdc136c5f6129b28a61473ffb913a15293fe9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bc5e55e8951d9ac37241912f31ff90bbbc3a2fcf8b7677f95502fea9c520f3f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc5e55e8951d9ac37241912f31ff90bbbc3a2fcf8b7677f95502fea9c520f3f4->enter($__internal_bc5e55e8951d9ac37241912f31ff90bbbc3a2fcf8b7677f95502fea9c520f3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_bc5e55e8951d9ac37241912f31ff90bbbc3a2fcf8b7677f95502fea9c520f3f4->leave($__internal_bc5e55e8951d9ac37241912f31ff90bbbc3a2fcf8b7677f95502fea9c520f3f4_prof);

        
        $__internal_38bae4ce09bb943f5ef4ea99dbdc136c5f6129b28a61473ffb913a15293fe9ef->leave($__internal_38bae4ce09bb943f5ef4ea99dbdc136c5f6129b28a61473ffb913a15293fe9ef_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8d58723d1ae08f27da7d389e4f0db039f76e6934fa3f95ca5489e899f61133b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8d58723d1ae08f27da7d389e4f0db039f76e6934fa3f95ca5489e899f61133b->enter($__internal_f8d58723d1ae08f27da7d389e4f0db039f76e6934fa3f95ca5489e899f61133b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ef98838cbe8378e5ce804d30b919bb205f04018af72cbb20368b5c208083c23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef98838cbe8378e5ce804d30b919bb205f04018af72cbb20368b5c208083c23->enter($__internal_1ef98838cbe8378e5ce804d30b919bb205f04018af72cbb20368b5c208083c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_1ef98838cbe8378e5ce804d30b919bb205f04018af72cbb20368b5c208083c23->leave($__internal_1ef98838cbe8378e5ce804d30b919bb205f04018af72cbb20368b5c208083c23_prof);

        
        $__internal_f8d58723d1ae08f27da7d389e4f0db039f76e6934fa3f95ca5489e899f61133b->leave($__internal_f8d58723d1ae08f27da7d389e4f0db039f76e6934fa3f95ca5489e899f61133b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
