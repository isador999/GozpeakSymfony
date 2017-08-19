<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f5a4e4e47a61dbc596b8a5cf6c4251cf9809cbaa7fe0192c935bf3aa4bd7f2e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_91748645ff95159925dc2bbafba9425475de3a334f57d7ff7f04cd708fa41f80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91748645ff95159925dc2bbafba9425475de3a334f57d7ff7f04cd708fa41f80->enter($__internal_91748645ff95159925dc2bbafba9425475de3a334f57d7ff7f04cd708fa41f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_bf717f587fe123e4239aa5d5294f02eb66d13f160911313edbc485da88cc082f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf717f587fe123e4239aa5d5294f02eb66d13f160911313edbc485da88cc082f->enter($__internal_bf717f587fe123e4239aa5d5294f02eb66d13f160911313edbc485da88cc082f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91748645ff95159925dc2bbafba9425475de3a334f57d7ff7f04cd708fa41f80->leave($__internal_91748645ff95159925dc2bbafba9425475de3a334f57d7ff7f04cd708fa41f80_prof);

        
        $__internal_bf717f587fe123e4239aa5d5294f02eb66d13f160911313edbc485da88cc082f->leave($__internal_bf717f587fe123e4239aa5d5294f02eb66d13f160911313edbc485da88cc082f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d12b483645a5cff39286be530644f29dad39bb579e6e5267b06e451d3baba377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d12b483645a5cff39286be530644f29dad39bb579e6e5267b06e451d3baba377->enter($__internal_d12b483645a5cff39286be530644f29dad39bb579e6e5267b06e451d3baba377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_beb5c5fe6902c2dd5c20c796887038d3e5d9cdaa58f8be3f09074975100794bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beb5c5fe6902c2dd5c20c796887038d3e5d9cdaa58f8be3f09074975100794bd->enter($__internal_beb5c5fe6902c2dd5c20c796887038d3e5d9cdaa58f8be3f09074975100794bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_beb5c5fe6902c2dd5c20c796887038d3e5d9cdaa58f8be3f09074975100794bd->leave($__internal_beb5c5fe6902c2dd5c20c796887038d3e5d9cdaa58f8be3f09074975100794bd_prof);

        
        $__internal_d12b483645a5cff39286be530644f29dad39bb579e6e5267b06e451d3baba377->leave($__internal_d12b483645a5cff39286be530644f29dad39bb579e6e5267b06e451d3baba377_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_78de6f3c6677caeab1cb33a1ce8360f64bbd5fdaf085be54e847eee71e7c8e5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78de6f3c6677caeab1cb33a1ce8360f64bbd5fdaf085be54e847eee71e7c8e5a->enter($__internal_78de6f3c6677caeab1cb33a1ce8360f64bbd5fdaf085be54e847eee71e7c8e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2dd9187553cd8f4f4544482d63575e8b8b909e7e3c772134aae3307cdcb8db8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd9187553cd8f4f4544482d63575e8b8b909e7e3c772134aae3307cdcb8db8a->enter($__internal_2dd9187553cd8f4f4544482d63575e8b8b909e7e3c772134aae3307cdcb8db8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2dd9187553cd8f4f4544482d63575e8b8b909e7e3c772134aae3307cdcb8db8a->leave($__internal_2dd9187553cd8f4f4544482d63575e8b8b909e7e3c772134aae3307cdcb8db8a_prof);

        
        $__internal_78de6f3c6677caeab1cb33a1ce8360f64bbd5fdaf085be54e847eee71e7c8e5a->leave($__internal_78de6f3c6677caeab1cb33a1ce8360f64bbd5fdaf085be54e847eee71e7c8e5a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_25ad6f56824df5d30b68dc9ec595ba365c2c7237507d2a6af07bab925090932f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25ad6f56824df5d30b68dc9ec595ba365c2c7237507d2a6af07bab925090932f->enter($__internal_25ad6f56824df5d30b68dc9ec595ba365c2c7237507d2a6af07bab925090932f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_238dc915dd33a7dcd4738ad67354ad3c254f812e0221b6b54fab09638c4306e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_238dc915dd33a7dcd4738ad67354ad3c254f812e0221b6b54fab09638c4306e9->enter($__internal_238dc915dd33a7dcd4738ad67354ad3c254f812e0221b6b54fab09638c4306e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_238dc915dd33a7dcd4738ad67354ad3c254f812e0221b6b54fab09638c4306e9->leave($__internal_238dc915dd33a7dcd4738ad67354ad3c254f812e0221b6b54fab09638c4306e9_prof);

        
        $__internal_25ad6f56824df5d30b68dc9ec595ba365c2c7237507d2a6af07bab925090932f->leave($__internal_25ad6f56824df5d30b68dc9ec595ba365c2c7237507d2a6af07bab925090932f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
