<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_591587cf3d250cb6a75144042f9ed364511a48f8d1e4425a30d8a632482553fd extends Twig_Template
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
        $__internal_0f457e58e4deebcd60c2ec9add51c290e2eb845bed608b0fdcdcb1a29352d99c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f457e58e4deebcd60c2ec9add51c290e2eb845bed608b0fdcdcb1a29352d99c->enter($__internal_0f457e58e4deebcd60c2ec9add51c290e2eb845bed608b0fdcdcb1a29352d99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_fdf98011626d1308e1c4e237d77d1cac46001f7b3de4fea72c513350a5f60f34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdf98011626d1308e1c4e237d77d1cac46001f7b3de4fea72c513350a5f60f34->enter($__internal_fdf98011626d1308e1c4e237d77d1cac46001f7b3de4fea72c513350a5f60f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f457e58e4deebcd60c2ec9add51c290e2eb845bed608b0fdcdcb1a29352d99c->leave($__internal_0f457e58e4deebcd60c2ec9add51c290e2eb845bed608b0fdcdcb1a29352d99c_prof);

        
        $__internal_fdf98011626d1308e1c4e237d77d1cac46001f7b3de4fea72c513350a5f60f34->leave($__internal_fdf98011626d1308e1c4e237d77d1cac46001f7b3de4fea72c513350a5f60f34_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e3a01ed75287a2e261282a33441c9b7c430e62087f78731b57496f2652fe9ad1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3a01ed75287a2e261282a33441c9b7c430e62087f78731b57496f2652fe9ad1->enter($__internal_e3a01ed75287a2e261282a33441c9b7c430e62087f78731b57496f2652fe9ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_651b479c042c615de08e518ce34b0338685f0439a3aebc588e1486a0ccf6131b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651b479c042c615de08e518ce34b0338685f0439a3aebc588e1486a0ccf6131b->enter($__internal_651b479c042c615de08e518ce34b0338685f0439a3aebc588e1486a0ccf6131b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_651b479c042c615de08e518ce34b0338685f0439a3aebc588e1486a0ccf6131b->leave($__internal_651b479c042c615de08e518ce34b0338685f0439a3aebc588e1486a0ccf6131b_prof);

        
        $__internal_e3a01ed75287a2e261282a33441c9b7c430e62087f78731b57496f2652fe9ad1->leave($__internal_e3a01ed75287a2e261282a33441c9b7c430e62087f78731b57496f2652fe9ad1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bcb94a288b1f0a82db8a435acd14a94062af3d385d6d677b29ca98089b3a5007 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcb94a288b1f0a82db8a435acd14a94062af3d385d6d677b29ca98089b3a5007->enter($__internal_bcb94a288b1f0a82db8a435acd14a94062af3d385d6d677b29ca98089b3a5007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_86a0adb00117ec444cb1b7ae809b881f0686106c6c6d99ee65083aab8e9a2d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a0adb00117ec444cb1b7ae809b881f0686106c6c6d99ee65083aab8e9a2d68->enter($__internal_86a0adb00117ec444cb1b7ae809b881f0686106c6c6d99ee65083aab8e9a2d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_86a0adb00117ec444cb1b7ae809b881f0686106c6c6d99ee65083aab8e9a2d68->leave($__internal_86a0adb00117ec444cb1b7ae809b881f0686106c6c6d99ee65083aab8e9a2d68_prof);

        
        $__internal_bcb94a288b1f0a82db8a435acd14a94062af3d385d6d677b29ca98089b3a5007->leave($__internal_bcb94a288b1f0a82db8a435acd14a94062af3d385d6d677b29ca98089b3a5007_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_080b0ddb428f02f96295b9ffc5ea0c6cd9aaa7acf30cceb2565536274fc5fede = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_080b0ddb428f02f96295b9ffc5ea0c6cd9aaa7acf30cceb2565536274fc5fede->enter($__internal_080b0ddb428f02f96295b9ffc5ea0c6cd9aaa7acf30cceb2565536274fc5fede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_83ebee3179612dd9ebc5730c0e366cde529d05aa2d11c90d5266c32ca2b89424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83ebee3179612dd9ebc5730c0e366cde529d05aa2d11c90d5266c32ca2b89424->enter($__internal_83ebee3179612dd9ebc5730c0e366cde529d05aa2d11c90d5266c32ca2b89424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_83ebee3179612dd9ebc5730c0e366cde529d05aa2d11c90d5266c32ca2b89424->leave($__internal_83ebee3179612dd9ebc5730c0e366cde529d05aa2d11c90d5266c32ca2b89424_prof);

        
        $__internal_080b0ddb428f02f96295b9ffc5ea0c6cd9aaa7acf30cceb2565536274fc5fede->leave($__internal_080b0ddb428f02f96295b9ffc5ea0c6cd9aaa7acf30cceb2565536274fc5fede_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
