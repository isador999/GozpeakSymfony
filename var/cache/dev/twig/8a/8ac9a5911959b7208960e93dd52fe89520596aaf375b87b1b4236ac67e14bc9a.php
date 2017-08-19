<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_12f738d54aff3bf3f6a56dc81f2505fdcba5d762d3d028c6a50f1a44ad74da5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_e9e36e2f08a9e51181922b279ac748730c2cec216e923aa6dc53de0d1412e8b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9e36e2f08a9e51181922b279ac748730c2cec216e923aa6dc53de0d1412e8b3->enter($__internal_e9e36e2f08a9e51181922b279ac748730c2cec216e923aa6dc53de0d1412e8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_27d648b25cbe00cd61b81467517163162f583acbd50824a38de926bd495b5853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d648b25cbe00cd61b81467517163162f583acbd50824a38de926bd495b5853->enter($__internal_27d648b25cbe00cd61b81467517163162f583acbd50824a38de926bd495b5853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9e36e2f08a9e51181922b279ac748730c2cec216e923aa6dc53de0d1412e8b3->leave($__internal_e9e36e2f08a9e51181922b279ac748730c2cec216e923aa6dc53de0d1412e8b3_prof);

        
        $__internal_27d648b25cbe00cd61b81467517163162f583acbd50824a38de926bd495b5853->leave($__internal_27d648b25cbe00cd61b81467517163162f583acbd50824a38de926bd495b5853_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2e85e50c6a99eb954f7b7e0f032af7771ff75bc8ebce7a0b03cd282942a62f36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e85e50c6a99eb954f7b7e0f032af7771ff75bc8ebce7a0b03cd282942a62f36->enter($__internal_2e85e50c6a99eb954f7b7e0f032af7771ff75bc8ebce7a0b03cd282942a62f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_242483a05424ef5eb528ffe78d47375cbecc8a86b2d1ce307b4d5242cfc35ff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_242483a05424ef5eb528ffe78d47375cbecc8a86b2d1ce307b4d5242cfc35ff8->enter($__internal_242483a05424ef5eb528ffe78d47375cbecc8a86b2d1ce307b4d5242cfc35ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_242483a05424ef5eb528ffe78d47375cbecc8a86b2d1ce307b4d5242cfc35ff8->leave($__internal_242483a05424ef5eb528ffe78d47375cbecc8a86b2d1ce307b4d5242cfc35ff8_prof);

        
        $__internal_2e85e50c6a99eb954f7b7e0f032af7771ff75bc8ebce7a0b03cd282942a62f36->leave($__internal_2e85e50c6a99eb954f7b7e0f032af7771ff75bc8ebce7a0b03cd282942a62f36_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dc114f20254140d8b9f8673b00596e9a5652595210977ad5412b657f0cc16a4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc114f20254140d8b9f8673b00596e9a5652595210977ad5412b657f0cc16a4d->enter($__internal_dc114f20254140d8b9f8673b00596e9a5652595210977ad5412b657f0cc16a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_405ae51b8b2b6cd3881c7e8b9b5826fc9c4c0ffb521664455374195c6ceb56b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_405ae51b8b2b6cd3881c7e8b9b5826fc9c4c0ffb521664455374195c6ceb56b0->enter($__internal_405ae51b8b2b6cd3881c7e8b9b5826fc9c4c0ffb521664455374195c6ceb56b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_405ae51b8b2b6cd3881c7e8b9b5826fc9c4c0ffb521664455374195c6ceb56b0->leave($__internal_405ae51b8b2b6cd3881c7e8b9b5826fc9c4c0ffb521664455374195c6ceb56b0_prof);

        
        $__internal_dc114f20254140d8b9f8673b00596e9a5652595210977ad5412b657f0cc16a4d->leave($__internal_dc114f20254140d8b9f8673b00596e9a5652595210977ad5412b657f0cc16a4d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b26e1c5b7504ba043583b597154ebcf587e707070e26fd06578844cb53d145b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b26e1c5b7504ba043583b597154ebcf587e707070e26fd06578844cb53d145b3->enter($__internal_b26e1c5b7504ba043583b597154ebcf587e707070e26fd06578844cb53d145b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_743d51d4238446b50f9e83d6b2b249521b85f74a71f2812c4e212f763636e74d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743d51d4238446b50f9e83d6b2b249521b85f74a71f2812c4e212f763636e74d->enter($__internal_743d51d4238446b50f9e83d6b2b249521b85f74a71f2812c4e212f763636e74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_743d51d4238446b50f9e83d6b2b249521b85f74a71f2812c4e212f763636e74d->leave($__internal_743d51d4238446b50f9e83d6b2b249521b85f74a71f2812c4e212f763636e74d_prof);

        
        $__internal_b26e1c5b7504ba043583b597154ebcf587e707070e26fd06578844cb53d145b3->leave($__internal_b26e1c5b7504ba043583b597154ebcf587e707070e26fd06578844cb53d145b3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
