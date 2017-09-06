<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_12f738d54aff3bf3f6a56dc81f2505fdcba5d762d3d028c6a50f1a44ad74da5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb2d4eaaf82053db24555a2af723a9473e83d38491cc1fbb3bb52cd82c69246c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb2d4eaaf82053db24555a2af723a9473e83d38491cc1fbb3bb52cd82c69246c->enter($__internal_eb2d4eaaf82053db24555a2af723a9473e83d38491cc1fbb3bb52cd82c69246c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_801a6ba02bf5cbbeea8888678466043681f62b7c668edf90289d116b86b65816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_801a6ba02bf5cbbeea8888678466043681f62b7c668edf90289d116b86b65816->enter($__internal_801a6ba02bf5cbbeea8888678466043681f62b7c668edf90289d116b86b65816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb2d4eaaf82053db24555a2af723a9473e83d38491cc1fbb3bb52cd82c69246c->leave($__internal_eb2d4eaaf82053db24555a2af723a9473e83d38491cc1fbb3bb52cd82c69246c_prof);

        
        $__internal_801a6ba02bf5cbbeea8888678466043681f62b7c668edf90289d116b86b65816->leave($__internal_801a6ba02bf5cbbeea8888678466043681f62b7c668edf90289d116b86b65816_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_df75290cb386d95df29ed99cb808c4bb171bc1daf4e029363c16291047aeb162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df75290cb386d95df29ed99cb808c4bb171bc1daf4e029363c16291047aeb162->enter($__internal_df75290cb386d95df29ed99cb808c4bb171bc1daf4e029363c16291047aeb162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_552b113667d6ba2bf7e591ce796f2525dd657cd228e17245484025f7fc2ec7eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_552b113667d6ba2bf7e591ce796f2525dd657cd228e17245484025f7fc2ec7eb->enter($__internal_552b113667d6ba2bf7e591ce796f2525dd657cd228e17245484025f7fc2ec7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_552b113667d6ba2bf7e591ce796f2525dd657cd228e17245484025f7fc2ec7eb->leave($__internal_552b113667d6ba2bf7e591ce796f2525dd657cd228e17245484025f7fc2ec7eb_prof);

        
        $__internal_df75290cb386d95df29ed99cb808c4bb171bc1daf4e029363c16291047aeb162->leave($__internal_df75290cb386d95df29ed99cb808c4bb171bc1daf4e029363c16291047aeb162_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_34be2c6bfd2952691ad9dfb0ea034949032350c96c17187c3bd9c899fc123f33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34be2c6bfd2952691ad9dfb0ea034949032350c96c17187c3bd9c899fc123f33->enter($__internal_34be2c6bfd2952691ad9dfb0ea034949032350c96c17187c3bd9c899fc123f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_59327f73565c968bc741c7031afbc3ace5d2c39613fd973ff5fab597655e0b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59327f73565c968bc741c7031afbc3ace5d2c39613fd973ff5fab597655e0b26->enter($__internal_59327f73565c968bc741c7031afbc3ace5d2c39613fd973ff5fab597655e0b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_59327f73565c968bc741c7031afbc3ace5d2c39613fd973ff5fab597655e0b26->leave($__internal_59327f73565c968bc741c7031afbc3ace5d2c39613fd973ff5fab597655e0b26_prof);

        
        $__internal_34be2c6bfd2952691ad9dfb0ea034949032350c96c17187c3bd9c899fc123f33->leave($__internal_34be2c6bfd2952691ad9dfb0ea034949032350c96c17187c3bd9c899fc123f33_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5de1d2903318dd00f7e790b93a4a12b19c2ced3ce4be99c124f0d6eae73cc6d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5de1d2903318dd00f7e790b93a4a12b19c2ced3ce4be99c124f0d6eae73cc6d7->enter($__internal_5de1d2903318dd00f7e790b93a4a12b19c2ced3ce4be99c124f0d6eae73cc6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_16afbc382b3f6d24ddc5720502e1050d63f694d724db6b43018a01faed9f743b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16afbc382b3f6d24ddc5720502e1050d63f694d724db6b43018a01faed9f743b->enter($__internal_16afbc382b3f6d24ddc5720502e1050d63f694d724db6b43018a01faed9f743b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_16afbc382b3f6d24ddc5720502e1050d63f694d724db6b43018a01faed9f743b->leave($__internal_16afbc382b3f6d24ddc5720502e1050d63f694d724db6b43018a01faed9f743b_prof);

        
        $__internal_5de1d2903318dd00f7e790b93a4a12b19c2ced3ce4be99c124f0d6eae73cc6d7->leave($__internal_5de1d2903318dd00f7e790b93a4a12b19c2ced3ce4be99c124f0d6eae73cc6d7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
