<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f5a4e4e47a61dbc596b8a5cf6c4251cf9809cbaa7fe0192c935bf3aa4bd7f2e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_918a914917f4372b59563438bdeb8edcf7126102908a2dee10f4ad94a9b04eec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_918a914917f4372b59563438bdeb8edcf7126102908a2dee10f4ad94a9b04eec->enter($__internal_918a914917f4372b59563438bdeb8edcf7126102908a2dee10f4ad94a9b04eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_8c8e4577a5cf9345e0978b7cdb94830d5be2492ab2c1a63ecb52512ad77a4105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c8e4577a5cf9345e0978b7cdb94830d5be2492ab2c1a63ecb52512ad77a4105->enter($__internal_8c8e4577a5cf9345e0978b7cdb94830d5be2492ab2c1a63ecb52512ad77a4105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_918a914917f4372b59563438bdeb8edcf7126102908a2dee10f4ad94a9b04eec->leave($__internal_918a914917f4372b59563438bdeb8edcf7126102908a2dee10f4ad94a9b04eec_prof);

        
        $__internal_8c8e4577a5cf9345e0978b7cdb94830d5be2492ab2c1a63ecb52512ad77a4105->leave($__internal_8c8e4577a5cf9345e0978b7cdb94830d5be2492ab2c1a63ecb52512ad77a4105_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ee9f8e61488522984a2b404882f0993889c77de31a1a85c5f067101c49addf74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee9f8e61488522984a2b404882f0993889c77de31a1a85c5f067101c49addf74->enter($__internal_ee9f8e61488522984a2b404882f0993889c77de31a1a85c5f067101c49addf74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_52eb7f416a60008fb9b8f0a70997f896aefed54063434995d30fb114ca5484bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52eb7f416a60008fb9b8f0a70997f896aefed54063434995d30fb114ca5484bc->enter($__internal_52eb7f416a60008fb9b8f0a70997f896aefed54063434995d30fb114ca5484bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_52eb7f416a60008fb9b8f0a70997f896aefed54063434995d30fb114ca5484bc->leave($__internal_52eb7f416a60008fb9b8f0a70997f896aefed54063434995d30fb114ca5484bc_prof);

        
        $__internal_ee9f8e61488522984a2b404882f0993889c77de31a1a85c5f067101c49addf74->leave($__internal_ee9f8e61488522984a2b404882f0993889c77de31a1a85c5f067101c49addf74_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_693b06f128159daa065a6abd3878ffd072db087bc4a4a4334119a1b0a4584d1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_693b06f128159daa065a6abd3878ffd072db087bc4a4a4334119a1b0a4584d1d->enter($__internal_693b06f128159daa065a6abd3878ffd072db087bc4a4a4334119a1b0a4584d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8c8fe104a663a9c22f8ad6970c55c6f74485adc0f9ea2e5048a06f171043689d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c8fe104a663a9c22f8ad6970c55c6f74485adc0f9ea2e5048a06f171043689d->enter($__internal_8c8fe104a663a9c22f8ad6970c55c6f74485adc0f9ea2e5048a06f171043689d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8c8fe104a663a9c22f8ad6970c55c6f74485adc0f9ea2e5048a06f171043689d->leave($__internal_8c8fe104a663a9c22f8ad6970c55c6f74485adc0f9ea2e5048a06f171043689d_prof);

        
        $__internal_693b06f128159daa065a6abd3878ffd072db087bc4a4a4334119a1b0a4584d1d->leave($__internal_693b06f128159daa065a6abd3878ffd072db087bc4a4a4334119a1b0a4584d1d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffb6d086dbe00c41b34527fc3941268749e7bba31120d55aba242fd6db6242bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffb6d086dbe00c41b34527fc3941268749e7bba31120d55aba242fd6db6242bc->enter($__internal_ffb6d086dbe00c41b34527fc3941268749e7bba31120d55aba242fd6db6242bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9980e581150e5b0efba51ae99286339419daded0fd88dac2e9cca5f7b79dee7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9980e581150e5b0efba51ae99286339419daded0fd88dac2e9cca5f7b79dee7d->enter($__internal_9980e581150e5b0efba51ae99286339419daded0fd88dac2e9cca5f7b79dee7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9980e581150e5b0efba51ae99286339419daded0fd88dac2e9cca5f7b79dee7d->leave($__internal_9980e581150e5b0efba51ae99286339419daded0fd88dac2e9cca5f7b79dee7d_prof);

        
        $__internal_ffb6d086dbe00c41b34527fc3941268749e7bba31120d55aba242fd6db6242bc->leave($__internal_ffb6d086dbe00c41b34527fc3941268749e7bba31120d55aba242fd6db6242bc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
