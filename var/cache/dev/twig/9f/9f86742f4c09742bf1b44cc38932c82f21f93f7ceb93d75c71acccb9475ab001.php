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
        $__internal_d901ab2bb7675d70b29324ea30fd128f21f53e0d90e1a617875d8db9e0011f44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d901ab2bb7675d70b29324ea30fd128f21f53e0d90e1a617875d8db9e0011f44->enter($__internal_d901ab2bb7675d70b29324ea30fd128f21f53e0d90e1a617875d8db9e0011f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_6a1d5ad69f9ae16df3aee730c3002bc06fc72fdbbaf24dc2f47139906057da3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a1d5ad69f9ae16df3aee730c3002bc06fc72fdbbaf24dc2f47139906057da3a->enter($__internal_6a1d5ad69f9ae16df3aee730c3002bc06fc72fdbbaf24dc2f47139906057da3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d901ab2bb7675d70b29324ea30fd128f21f53e0d90e1a617875d8db9e0011f44->leave($__internal_d901ab2bb7675d70b29324ea30fd128f21f53e0d90e1a617875d8db9e0011f44_prof);

        
        $__internal_6a1d5ad69f9ae16df3aee730c3002bc06fc72fdbbaf24dc2f47139906057da3a->leave($__internal_6a1d5ad69f9ae16df3aee730c3002bc06fc72fdbbaf24dc2f47139906057da3a_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_5dcac0f4fd8ebc0bbd75debbed8616fc99312df14452bddec08a79d3e6bb44c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dcac0f4fd8ebc0bbd75debbed8616fc99312df14452bddec08a79d3e6bb44c3->enter($__internal_5dcac0f4fd8ebc0bbd75debbed8616fc99312df14452bddec08a79d3e6bb44c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_420211b61ef2eba9925466a002d34048a113417d03d30d54dd4945addfe8141a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_420211b61ef2eba9925466a002d34048a113417d03d30d54dd4945addfe8141a->enter($__internal_420211b61ef2eba9925466a002d34048a113417d03d30d54dd4945addfe8141a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_420211b61ef2eba9925466a002d34048a113417d03d30d54dd4945addfe8141a->leave($__internal_420211b61ef2eba9925466a002d34048a113417d03d30d54dd4945addfe8141a_prof);

        
        $__internal_5dcac0f4fd8ebc0bbd75debbed8616fc99312df14452bddec08a79d3e6bb44c3->leave($__internal_5dcac0f4fd8ebc0bbd75debbed8616fc99312df14452bddec08a79d3e6bb44c3_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3e156e207eebfc72d8523718898bfa66359aaea43d0f40ac3c1227b84a5e89be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e156e207eebfc72d8523718898bfa66359aaea43d0f40ac3c1227b84a5e89be->enter($__internal_3e156e207eebfc72d8523718898bfa66359aaea43d0f40ac3c1227b84a5e89be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_944bf16568a970b8babc6447bcd40fbe8c4d434f3e8ddf49c9ef8b4b094aab7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_944bf16568a970b8babc6447bcd40fbe8c4d434f3e8ddf49c9ef8b4b094aab7c->enter($__internal_944bf16568a970b8babc6447bcd40fbe8c4d434f3e8ddf49c9ef8b4b094aab7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_944bf16568a970b8babc6447bcd40fbe8c4d434f3e8ddf49c9ef8b4b094aab7c->leave($__internal_944bf16568a970b8babc6447bcd40fbe8c4d434f3e8ddf49c9ef8b4b094aab7c_prof);

        
        $__internal_3e156e207eebfc72d8523718898bfa66359aaea43d0f40ac3c1227b84a5e89be->leave($__internal_3e156e207eebfc72d8523718898bfa66359aaea43d0f40ac3c1227b84a5e89be_prof);

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
