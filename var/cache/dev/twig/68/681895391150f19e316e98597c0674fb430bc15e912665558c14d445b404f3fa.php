<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1c37874738953529b4457236dc462d0685884944bd2295fa25ed56b669b5ee00 extends Twig_Template
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
        $__internal_61478560b4c66028dcbfa11e1ae35ff701ee51622fbd29fce22fc1ceb4b0ec0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61478560b4c66028dcbfa11e1ae35ff701ee51622fbd29fce22fc1ceb4b0ec0b->enter($__internal_61478560b4c66028dcbfa11e1ae35ff701ee51622fbd29fce22fc1ceb4b0ec0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1b753311c39936f73bd742e38108d2ed1b4ad43f21c61501983303686c7d6779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b753311c39936f73bd742e38108d2ed1b4ad43f21c61501983303686c7d6779->enter($__internal_1b753311c39936f73bd742e38108d2ed1b4ad43f21c61501983303686c7d6779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61478560b4c66028dcbfa11e1ae35ff701ee51622fbd29fce22fc1ceb4b0ec0b->leave($__internal_61478560b4c66028dcbfa11e1ae35ff701ee51622fbd29fce22fc1ceb4b0ec0b_prof);

        
        $__internal_1b753311c39936f73bd742e38108d2ed1b4ad43f21c61501983303686c7d6779->leave($__internal_1b753311c39936f73bd742e38108d2ed1b4ad43f21c61501983303686c7d6779_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_579982ff6c2c60eac3826f6ee189b65d399c1b47ba686556ffc4fb1e0c27957d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_579982ff6c2c60eac3826f6ee189b65d399c1b47ba686556ffc4fb1e0c27957d->enter($__internal_579982ff6c2c60eac3826f6ee189b65d399c1b47ba686556ffc4fb1e0c27957d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ed2761bb959b88bd763f41d8f1394394aca6e5b9a6acf049881a3df0ee1cf8d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed2761bb959b88bd763f41d8f1394394aca6e5b9a6acf049881a3df0ee1cf8d3->enter($__internal_ed2761bb959b88bd763f41d8f1394394aca6e5b9a6acf049881a3df0ee1cf8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ed2761bb959b88bd763f41d8f1394394aca6e5b9a6acf049881a3df0ee1cf8d3->leave($__internal_ed2761bb959b88bd763f41d8f1394394aca6e5b9a6acf049881a3df0ee1cf8d3_prof);

        
        $__internal_579982ff6c2c60eac3826f6ee189b65d399c1b47ba686556ffc4fb1e0c27957d->leave($__internal_579982ff6c2c60eac3826f6ee189b65d399c1b47ba686556ffc4fb1e0c27957d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef51ebd5548a84b96930bdb1b13e26b8bd24e0cc2b514fa95a08a09de3fbb498 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef51ebd5548a84b96930bdb1b13e26b8bd24e0cc2b514fa95a08a09de3fbb498->enter($__internal_ef51ebd5548a84b96930bdb1b13e26b8bd24e0cc2b514fa95a08a09de3fbb498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b5f9b7ea4061a0636bc30af13061bf8ad4fb189ef56335b5cf20ed3df80e0e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f9b7ea4061a0636bc30af13061bf8ad4fb189ef56335b5cf20ed3df80e0e33->enter($__internal_b5f9b7ea4061a0636bc30af13061bf8ad4fb189ef56335b5cf20ed3df80e0e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b5f9b7ea4061a0636bc30af13061bf8ad4fb189ef56335b5cf20ed3df80e0e33->leave($__internal_b5f9b7ea4061a0636bc30af13061bf8ad4fb189ef56335b5cf20ed3df80e0e33_prof);

        
        $__internal_ef51ebd5548a84b96930bdb1b13e26b8bd24e0cc2b514fa95a08a09de3fbb498->leave($__internal_ef51ebd5548a84b96930bdb1b13e26b8bd24e0cc2b514fa95a08a09de3fbb498_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_95acb5733dbb12c70287c6d7abfa997deda89956a7285f1d79977641ab21f258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95acb5733dbb12c70287c6d7abfa997deda89956a7285f1d79977641ab21f258->enter($__internal_95acb5733dbb12c70287c6d7abfa997deda89956a7285f1d79977641ab21f258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1b3950639c9cb51e3e061451ee1d062ab20aecd9ee15574b5834faa46aaa84db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b3950639c9cb51e3e061451ee1d062ab20aecd9ee15574b5834faa46aaa84db->enter($__internal_1b3950639c9cb51e3e061451ee1d062ab20aecd9ee15574b5834faa46aaa84db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_1b3950639c9cb51e3e061451ee1d062ab20aecd9ee15574b5834faa46aaa84db->leave($__internal_1b3950639c9cb51e3e061451ee1d062ab20aecd9ee15574b5834faa46aaa84db_prof);

        
        $__internal_95acb5733dbb12c70287c6d7abfa997deda89956a7285f1d79977641ab21f258->leave($__internal_95acb5733dbb12c70287c6d7abfa997deda89956a7285f1d79977641ab21f258_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
