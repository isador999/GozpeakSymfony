<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f032ca10893d3d2453ba1f3cd7598481f940f7fd5137d010f38b14ad1b6a30d0 extends Twig_Template
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
        $__internal_4244d098ca5ac0a8310537a23060569434016b1fb2baa35fb35ada81af53441e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4244d098ca5ac0a8310537a23060569434016b1fb2baa35fb35ada81af53441e->enter($__internal_4244d098ca5ac0a8310537a23060569434016b1fb2baa35fb35ada81af53441e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_fb6db87df21f61aa54c5d1741e3bf1e2a72307391836e9003877f2bdf56d1164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb6db87df21f61aa54c5d1741e3bf1e2a72307391836e9003877f2bdf56d1164->enter($__internal_fb6db87df21f61aa54c5d1741e3bf1e2a72307391836e9003877f2bdf56d1164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4244d098ca5ac0a8310537a23060569434016b1fb2baa35fb35ada81af53441e->leave($__internal_4244d098ca5ac0a8310537a23060569434016b1fb2baa35fb35ada81af53441e_prof);

        
        $__internal_fb6db87df21f61aa54c5d1741e3bf1e2a72307391836e9003877f2bdf56d1164->leave($__internal_fb6db87df21f61aa54c5d1741e3bf1e2a72307391836e9003877f2bdf56d1164_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eeb183f32595cf00986a14b882b9052a1b00c1deb20d693c8c3bb5f5c5c4c18d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeb183f32595cf00986a14b882b9052a1b00c1deb20d693c8c3bb5f5c5c4c18d->enter($__internal_eeb183f32595cf00986a14b882b9052a1b00c1deb20d693c8c3bb5f5c5c4c18d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c718c81f647187c6144e30c4a4df473d074394dd044e3263d783ea439b0f2689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c718c81f647187c6144e30c4a4df473d074394dd044e3263d783ea439b0f2689->enter($__internal_c718c81f647187c6144e30c4a4df473d074394dd044e3263d783ea439b0f2689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c718c81f647187c6144e30c4a4df473d074394dd044e3263d783ea439b0f2689->leave($__internal_c718c81f647187c6144e30c4a4df473d074394dd044e3263d783ea439b0f2689_prof);

        
        $__internal_eeb183f32595cf00986a14b882b9052a1b00c1deb20d693c8c3bb5f5c5c4c18d->leave($__internal_eeb183f32595cf00986a14b882b9052a1b00c1deb20d693c8c3bb5f5c5c4c18d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e8cfb4eb24f9bdb07f9d386045bfc98e01e6cdb1fc73e1e3f46e62c8cb5943d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8cfb4eb24f9bdb07f9d386045bfc98e01e6cdb1fc73e1e3f46e62c8cb5943d2->enter($__internal_e8cfb4eb24f9bdb07f9d386045bfc98e01e6cdb1fc73e1e3f46e62c8cb5943d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e2c1966ed07732a4b05c8c7182a645ddc6120a96eeebe48ad06c687137adca96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c1966ed07732a4b05c8c7182a645ddc6120a96eeebe48ad06c687137adca96->enter($__internal_e2c1966ed07732a4b05c8c7182a645ddc6120a96eeebe48ad06c687137adca96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e2c1966ed07732a4b05c8c7182a645ddc6120a96eeebe48ad06c687137adca96->leave($__internal_e2c1966ed07732a4b05c8c7182a645ddc6120a96eeebe48ad06c687137adca96_prof);

        
        $__internal_e8cfb4eb24f9bdb07f9d386045bfc98e01e6cdb1fc73e1e3f46e62c8cb5943d2->leave($__internal_e8cfb4eb24f9bdb07f9d386045bfc98e01e6cdb1fc73e1e3f46e62c8cb5943d2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bb8ad8b7ce9adaccdec71682fdd173b36442bfae3a33df59cf43c8dc68a500f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb8ad8b7ce9adaccdec71682fdd173b36442bfae3a33df59cf43c8dc68a500f1->enter($__internal_bb8ad8b7ce9adaccdec71682fdd173b36442bfae3a33df59cf43c8dc68a500f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1f9fd39cd0300121bae7ad1478e65ff4f4514865587f1239a1f361c252fad07d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f9fd39cd0300121bae7ad1478e65ff4f4514865587f1239a1f361c252fad07d->enter($__internal_1f9fd39cd0300121bae7ad1478e65ff4f4514865587f1239a1f361c252fad07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1f9fd39cd0300121bae7ad1478e65ff4f4514865587f1239a1f361c252fad07d->leave($__internal_1f9fd39cd0300121bae7ad1478e65ff4f4514865587f1239a1f361c252fad07d_prof);

        
        $__internal_bb8ad8b7ce9adaccdec71682fdd173b36442bfae3a33df59cf43c8dc68a500f1->leave($__internal_bb8ad8b7ce9adaccdec71682fdd173b36442bfae3a33df59cf43c8dc68a500f1_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
