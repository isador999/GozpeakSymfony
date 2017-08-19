<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_d09f5d001bdfae6a908da2fca527dcc57f94534cbb2a2fd4d8c1f862b601f725 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc912ade9bcc319658c7e2c42d2f2e2469ff38372bfd02a09b34aa0654c7b2e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc912ade9bcc319658c7e2c42d2f2e2469ff38372bfd02a09b34aa0654c7b2e6->enter($__internal_fc912ade9bcc319658c7e2c42d2f2e2469ff38372bfd02a09b34aa0654c7b2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_126ffc504f08cfa4c5d05f5cc2eeb643a281653ab1a1f64f128b34fae543f34a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_126ffc504f08cfa4c5d05f5cc2eeb643a281653ab1a1f64f128b34fae543f34a->enter($__internal_126ffc504f08cfa4c5d05f5cc2eeb643a281653ab1a1f64f128b34fae543f34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc912ade9bcc319658c7e2c42d2f2e2469ff38372bfd02a09b34aa0654c7b2e6->leave($__internal_fc912ade9bcc319658c7e2c42d2f2e2469ff38372bfd02a09b34aa0654c7b2e6_prof);

        
        $__internal_126ffc504f08cfa4c5d05f5cc2eeb643a281653ab1a1f64f128b34fae543f34a->leave($__internal_126ffc504f08cfa4c5d05f5cc2eeb643a281653ab1a1f64f128b34fae543f34a_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_44b56cdc8022019767653c424d6be5e2f5c128f8906c40b121c13ebb5afb2ac7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44b56cdc8022019767653c424d6be5e2f5c128f8906c40b121c13ebb5afb2ac7->enter($__internal_44b56cdc8022019767653c424d6be5e2f5c128f8906c40b121c13ebb5afb2ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e3657cf5647fa4c70f45b1635344bf4783903f023033effe0364d4e48806ed4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3657cf5647fa4c70f45b1635344bf4783903f023033effe0364d4e48806ed4e->enter($__internal_e3657cf5647fa4c70f45b1635344bf4783903f023033effe0364d4e48806ed4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_e3657cf5647fa4c70f45b1635344bf4783903f023033effe0364d4e48806ed4e->leave($__internal_e3657cf5647fa4c70f45b1635344bf4783903f023033effe0364d4e48806ed4e_prof);

        
        $__internal_44b56cdc8022019767653c424d6be5e2f5c128f8906c40b121c13ebb5afb2ac7->leave($__internal_44b56cdc8022019767653c424d6be5e2f5c128f8906c40b121c13ebb5afb2ac7_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3911b2558caa77762a00fb0a5308ad34d6df3d11600ed21342863a01703e2abd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3911b2558caa77762a00fb0a5308ad34d6df3d11600ed21342863a01703e2abd->enter($__internal_3911b2558caa77762a00fb0a5308ad34d6df3d11600ed21342863a01703e2abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6bcddb621a728818b09e11955da6a3a1afb5cf9321f0561399bc508e69898f95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bcddb621a728818b09e11955da6a3a1afb5cf9321f0561399bc508e69898f95->enter($__internal_6bcddb621a728818b09e11955da6a3a1afb5cf9321f0561399bc508e69898f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_6bcddb621a728818b09e11955da6a3a1afb5cf9321f0561399bc508e69898f95->leave($__internal_6bcddb621a728818b09e11955da6a3a1afb5cf9321f0561399bc508e69898f95_prof);

        
        $__internal_3911b2558caa77762a00fb0a5308ad34d6df3d11600ed21342863a01703e2abd->leave($__internal_3911b2558caa77762a00fb0a5308ad34d6df3d11600ed21342863a01703e2abd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
