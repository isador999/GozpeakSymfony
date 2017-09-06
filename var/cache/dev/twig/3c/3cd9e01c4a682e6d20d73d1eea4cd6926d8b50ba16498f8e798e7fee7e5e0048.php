<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_490088ef8c2d536ba9aa3e4da532e3c9d5d6875dde7bb492995d7d77f4e311f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_3ba81fea758879e5cdf6cb4f6a318a92a0f95947be7ce634f6009d5ef4a7c011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ba81fea758879e5cdf6cb4f6a318a92a0f95947be7ce634f6009d5ef4a7c011->enter($__internal_3ba81fea758879e5cdf6cb4f6a318a92a0f95947be7ce634f6009d5ef4a7c011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e801d92036e063c14e01755fa5a0bffe110271609c12adc4c0dd661a8ace1595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e801d92036e063c14e01755fa5a0bffe110271609c12adc4c0dd661a8ace1595->enter($__internal_e801d92036e063c14e01755fa5a0bffe110271609c12adc4c0dd661a8ace1595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ba81fea758879e5cdf6cb4f6a318a92a0f95947be7ce634f6009d5ef4a7c011->leave($__internal_3ba81fea758879e5cdf6cb4f6a318a92a0f95947be7ce634f6009d5ef4a7c011_prof);

        
        $__internal_e801d92036e063c14e01755fa5a0bffe110271609c12adc4c0dd661a8ace1595->leave($__internal_e801d92036e063c14e01755fa5a0bffe110271609c12adc4c0dd661a8ace1595_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ac50d43517938423e6e39fe49b53322daaa36aa6f5936575ff43762a12e167f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac50d43517938423e6e39fe49b53322daaa36aa6f5936575ff43762a12e167f1->enter($__internal_ac50d43517938423e6e39fe49b53322daaa36aa6f5936575ff43762a12e167f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ade39db00ae06e4c6ed248985482d59d83a15d2b1484748d398d084a1a49baed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade39db00ae06e4c6ed248985482d59d83a15d2b1484748d398d084a1a49baed->enter($__internal_ade39db00ae06e4c6ed248985482d59d83a15d2b1484748d398d084a1a49baed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ade39db00ae06e4c6ed248985482d59d83a15d2b1484748d398d084a1a49baed->leave($__internal_ade39db00ae06e4c6ed248985482d59d83a15d2b1484748d398d084a1a49baed_prof);

        
        $__internal_ac50d43517938423e6e39fe49b53322daaa36aa6f5936575ff43762a12e167f1->leave($__internal_ac50d43517938423e6e39fe49b53322daaa36aa6f5936575ff43762a12e167f1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_962083ea5f2fdd3ab2202ff30f5121aa276fe0ece67ac0709f4e3993320f42da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_962083ea5f2fdd3ab2202ff30f5121aa276fe0ece67ac0709f4e3993320f42da->enter($__internal_962083ea5f2fdd3ab2202ff30f5121aa276fe0ece67ac0709f4e3993320f42da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2892c954437085e2fca62ab1c7f618fd5f6db511e443cb71e15b0802f3e762ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2892c954437085e2fca62ab1c7f618fd5f6db511e443cb71e15b0802f3e762ae->enter($__internal_2892c954437085e2fca62ab1c7f618fd5f6db511e443cb71e15b0802f3e762ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2892c954437085e2fca62ab1c7f618fd5f6db511e443cb71e15b0802f3e762ae->leave($__internal_2892c954437085e2fca62ab1c7f618fd5f6db511e443cb71e15b0802f3e762ae_prof);

        
        $__internal_962083ea5f2fdd3ab2202ff30f5121aa276fe0ece67ac0709f4e3993320f42da->leave($__internal_962083ea5f2fdd3ab2202ff30f5121aa276fe0ece67ac0709f4e3993320f42da_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_126eb3efcb4aa6da94025b386d1cccb2637acba3946e9a36f38d0a401f5b53b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_126eb3efcb4aa6da94025b386d1cccb2637acba3946e9a36f38d0a401f5b53b9->enter($__internal_126eb3efcb4aa6da94025b386d1cccb2637acba3946e9a36f38d0a401f5b53b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2ff3c532b267e94869f43a7f01cee2c1f70387024e3583c32aa6e34c50f15bc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ff3c532b267e94869f43a7f01cee2c1f70387024e3583c32aa6e34c50f15bc9->enter($__internal_2ff3c532b267e94869f43a7f01cee2c1f70387024e3583c32aa6e34c50f15bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2ff3c532b267e94869f43a7f01cee2c1f70387024e3583c32aa6e34c50f15bc9->leave($__internal_2ff3c532b267e94869f43a7f01cee2c1f70387024e3583c32aa6e34c50f15bc9_prof);

        
        $__internal_126eb3efcb4aa6da94025b386d1cccb2637acba3946e9a36f38d0a401f5b53b9->leave($__internal_126eb3efcb4aa6da94025b386d1cccb2637acba3946e9a36f38d0a401f5b53b9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
