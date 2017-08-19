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
        $__internal_4dda7ebe0a5cfc076fe2e9a4bfec3e743f8d2ce5aef83ab1fb2c7813a485b86d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dda7ebe0a5cfc076fe2e9a4bfec3e743f8d2ce5aef83ab1fb2c7813a485b86d->enter($__internal_4dda7ebe0a5cfc076fe2e9a4bfec3e743f8d2ce5aef83ab1fb2c7813a485b86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_30e1d022caaa800b5426f7386e0a372788e56ca39681586e43f85e796139cc9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30e1d022caaa800b5426f7386e0a372788e56ca39681586e43f85e796139cc9a->enter($__internal_30e1d022caaa800b5426f7386e0a372788e56ca39681586e43f85e796139cc9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dda7ebe0a5cfc076fe2e9a4bfec3e743f8d2ce5aef83ab1fb2c7813a485b86d->leave($__internal_4dda7ebe0a5cfc076fe2e9a4bfec3e743f8d2ce5aef83ab1fb2c7813a485b86d_prof);

        
        $__internal_30e1d022caaa800b5426f7386e0a372788e56ca39681586e43f85e796139cc9a->leave($__internal_30e1d022caaa800b5426f7386e0a372788e56ca39681586e43f85e796139cc9a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8658ee535c04ec197a040a0b85bf362d1aaadd2bb77725fab0a99a08eb10436b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8658ee535c04ec197a040a0b85bf362d1aaadd2bb77725fab0a99a08eb10436b->enter($__internal_8658ee535c04ec197a040a0b85bf362d1aaadd2bb77725fab0a99a08eb10436b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e59c6d5594aa83c2f16588cfad562f157049b33fe68fbecd60284b572a5879e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e59c6d5594aa83c2f16588cfad562f157049b33fe68fbecd60284b572a5879e7->enter($__internal_e59c6d5594aa83c2f16588cfad562f157049b33fe68fbecd60284b572a5879e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_e59c6d5594aa83c2f16588cfad562f157049b33fe68fbecd60284b572a5879e7->leave($__internal_e59c6d5594aa83c2f16588cfad562f157049b33fe68fbecd60284b572a5879e7_prof);

        
        $__internal_8658ee535c04ec197a040a0b85bf362d1aaadd2bb77725fab0a99a08eb10436b->leave($__internal_8658ee535c04ec197a040a0b85bf362d1aaadd2bb77725fab0a99a08eb10436b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4896571bfc08aea29ec5771bfce5d8870ba2c03bd8581e975b17954ae7efe856 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4896571bfc08aea29ec5771bfce5d8870ba2c03bd8581e975b17954ae7efe856->enter($__internal_4896571bfc08aea29ec5771bfce5d8870ba2c03bd8581e975b17954ae7efe856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c8a92f9e4791f7d157e3887fe5b4dc43a8f759670b23aadea689e0fce876eeb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a92f9e4791f7d157e3887fe5b4dc43a8f759670b23aadea689e0fce876eeb7->enter($__internal_c8a92f9e4791f7d157e3887fe5b4dc43a8f759670b23aadea689e0fce876eeb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c8a92f9e4791f7d157e3887fe5b4dc43a8f759670b23aadea689e0fce876eeb7->leave($__internal_c8a92f9e4791f7d157e3887fe5b4dc43a8f759670b23aadea689e0fce876eeb7_prof);

        
        $__internal_4896571bfc08aea29ec5771bfce5d8870ba2c03bd8581e975b17954ae7efe856->leave($__internal_4896571bfc08aea29ec5771bfce5d8870ba2c03bd8581e975b17954ae7efe856_prof);

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
