<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_26acc31d17f5af168d6099e9ca08600e1b57dd43186732c28ba176a4bdb1b750 extends Twig_Template
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
        $__internal_979e4e9ffea751f777f486d50804b1a1eb79ad6e41bdcb4aa2b582e20aaf3ce0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_979e4e9ffea751f777f486d50804b1a1eb79ad6e41bdcb4aa2b582e20aaf3ce0->enter($__internal_979e4e9ffea751f777f486d50804b1a1eb79ad6e41bdcb4aa2b582e20aaf3ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_b302d55c772e32990d79ebe69e0e1c9f2d0d7c4854221c2f474df908c59b593c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b302d55c772e32990d79ebe69e0e1c9f2d0d7c4854221c2f474df908c59b593c->enter($__internal_b302d55c772e32990d79ebe69e0e1c9f2d0d7c4854221c2f474df908c59b593c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_979e4e9ffea751f777f486d50804b1a1eb79ad6e41bdcb4aa2b582e20aaf3ce0->leave($__internal_979e4e9ffea751f777f486d50804b1a1eb79ad6e41bdcb4aa2b582e20aaf3ce0_prof);

        
        $__internal_b302d55c772e32990d79ebe69e0e1c9f2d0d7c4854221c2f474df908c59b593c->leave($__internal_b302d55c772e32990d79ebe69e0e1c9f2d0d7c4854221c2f474df908c59b593c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e35c55b56cdb5c776dab66886aa1a708832247d9babdc54d575aaf1d5e5a7a10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e35c55b56cdb5c776dab66886aa1a708832247d9babdc54d575aaf1d5e5a7a10->enter($__internal_e35c55b56cdb5c776dab66886aa1a708832247d9babdc54d575aaf1d5e5a7a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c6e2eba0e5782eb5cfda08964e5b5425812e8bd8bbdd7f785c777726388e12bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e2eba0e5782eb5cfda08964e5b5425812e8bd8bbdd7f785c777726388e12bc->enter($__internal_c6e2eba0e5782eb5cfda08964e5b5425812e8bd8bbdd7f785c777726388e12bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c6e2eba0e5782eb5cfda08964e5b5425812e8bd8bbdd7f785c777726388e12bc->leave($__internal_c6e2eba0e5782eb5cfda08964e5b5425812e8bd8bbdd7f785c777726388e12bc_prof);

        
        $__internal_e35c55b56cdb5c776dab66886aa1a708832247d9babdc54d575aaf1d5e5a7a10->leave($__internal_e35c55b56cdb5c776dab66886aa1a708832247d9babdc54d575aaf1d5e5a7a10_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1725f2e6a510157c054dbb0452f26c484750e6379083329a569a24481d587b2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1725f2e6a510157c054dbb0452f26c484750e6379083329a569a24481d587b2b->enter($__internal_1725f2e6a510157c054dbb0452f26c484750e6379083329a569a24481d587b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_514c7b4f41bba09ca4cc09a5fc63cddb04cd459d2d83ef644baf09888d7f55cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_514c7b4f41bba09ca4cc09a5fc63cddb04cd459d2d83ef644baf09888d7f55cf->enter($__internal_514c7b4f41bba09ca4cc09a5fc63cddb04cd459d2d83ef644baf09888d7f55cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_514c7b4f41bba09ca4cc09a5fc63cddb04cd459d2d83ef644baf09888d7f55cf->leave($__internal_514c7b4f41bba09ca4cc09a5fc63cddb04cd459d2d83ef644baf09888d7f55cf_prof);

        
        $__internal_1725f2e6a510157c054dbb0452f26c484750e6379083329a569a24481d587b2b->leave($__internal_1725f2e6a510157c054dbb0452f26c484750e6379083329a569a24481d587b2b_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
