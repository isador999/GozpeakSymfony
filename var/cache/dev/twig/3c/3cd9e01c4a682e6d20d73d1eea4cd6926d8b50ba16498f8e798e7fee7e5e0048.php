<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_490088ef8c2d536ba9aa3e4da532e3c9d5d6875dde7bb492995d7d77f4e311f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_af3fe8718f286a3208e432ba265572b08787a30a85a3b5a83284f6e80fe51a0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af3fe8718f286a3208e432ba265572b08787a30a85a3b5a83284f6e80fe51a0f->enter($__internal_af3fe8718f286a3208e432ba265572b08787a30a85a3b5a83284f6e80fe51a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_5c98153d29aa44c8f745a12d0af2489c241fc7fbc77b0e69951309d1fb83621c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c98153d29aa44c8f745a12d0af2489c241fc7fbc77b0e69951309d1fb83621c->enter($__internal_5c98153d29aa44c8f745a12d0af2489c241fc7fbc77b0e69951309d1fb83621c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af3fe8718f286a3208e432ba265572b08787a30a85a3b5a83284f6e80fe51a0f->leave($__internal_af3fe8718f286a3208e432ba265572b08787a30a85a3b5a83284f6e80fe51a0f_prof);

        
        $__internal_5c98153d29aa44c8f745a12d0af2489c241fc7fbc77b0e69951309d1fb83621c->leave($__internal_5c98153d29aa44c8f745a12d0af2489c241fc7fbc77b0e69951309d1fb83621c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8b288b00ea761e400767225ce459b5954e916807a76e8c603afc7d6adcb9a5df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b288b00ea761e400767225ce459b5954e916807a76e8c603afc7d6adcb9a5df->enter($__internal_8b288b00ea761e400767225ce459b5954e916807a76e8c603afc7d6adcb9a5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6789a92c4fc0442839681e1516b3d051f44382ce2a33e76d851c6c010ec35213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6789a92c4fc0442839681e1516b3d051f44382ce2a33e76d851c6c010ec35213->enter($__internal_6789a92c4fc0442839681e1516b3d051f44382ce2a33e76d851c6c010ec35213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6789a92c4fc0442839681e1516b3d051f44382ce2a33e76d851c6c010ec35213->leave($__internal_6789a92c4fc0442839681e1516b3d051f44382ce2a33e76d851c6c010ec35213_prof);

        
        $__internal_8b288b00ea761e400767225ce459b5954e916807a76e8c603afc7d6adcb9a5df->leave($__internal_8b288b00ea761e400767225ce459b5954e916807a76e8c603afc7d6adcb9a5df_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3296e3052075322d2c885c59c6ec237848b5f8adfa4fc054e9a4bd717be253aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3296e3052075322d2c885c59c6ec237848b5f8adfa4fc054e9a4bd717be253aa->enter($__internal_3296e3052075322d2c885c59c6ec237848b5f8adfa4fc054e9a4bd717be253aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f29a0972cf43b8b8335b3012d19a0475ee9fb6d6bc8b067dc1f1a0ddaefba7e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29a0972cf43b8b8335b3012d19a0475ee9fb6d6bc8b067dc1f1a0ddaefba7e6->enter($__internal_f29a0972cf43b8b8335b3012d19a0475ee9fb6d6bc8b067dc1f1a0ddaefba7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f29a0972cf43b8b8335b3012d19a0475ee9fb6d6bc8b067dc1f1a0ddaefba7e6->leave($__internal_f29a0972cf43b8b8335b3012d19a0475ee9fb6d6bc8b067dc1f1a0ddaefba7e6_prof);

        
        $__internal_3296e3052075322d2c885c59c6ec237848b5f8adfa4fc054e9a4bd717be253aa->leave($__internal_3296e3052075322d2c885c59c6ec237848b5f8adfa4fc054e9a4bd717be253aa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_da3ab912268403f3c65127b58c79934b986811d7d2b9582a0802e1e9c1d30953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da3ab912268403f3c65127b58c79934b986811d7d2b9582a0802e1e9c1d30953->enter($__internal_da3ab912268403f3c65127b58c79934b986811d7d2b9582a0802e1e9c1d30953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_281518ea4fb2cfebbf9edbc4a328afd891696a9a619c9a1a1331980c2725a46c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_281518ea4fb2cfebbf9edbc4a328afd891696a9a619c9a1a1331980c2725a46c->enter($__internal_281518ea4fb2cfebbf9edbc4a328afd891696a9a619c9a1a1331980c2725a46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_281518ea4fb2cfebbf9edbc4a328afd891696a9a619c9a1a1331980c2725a46c->leave($__internal_281518ea4fb2cfebbf9edbc4a328afd891696a9a619c9a1a1331980c2725a46c_prof);

        
        $__internal_da3ab912268403f3c65127b58c79934b986811d7d2b9582a0802e1e9c1d30953->leave($__internal_da3ab912268403f3c65127b58c79934b986811d7d2b9582a0802e1e9c1d30953_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
