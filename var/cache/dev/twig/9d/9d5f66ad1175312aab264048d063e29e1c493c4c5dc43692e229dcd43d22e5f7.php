<?php

/* ::base.html.twig */
class __TwigTemplate_d81bae7d5325a7f23ba92e849144467ab8ed2421c201cbf1d70c17582ad76de7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a76f23dab5b4e9ea540a6ab62159c137671e87d49644f41839f71623edc4ebe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a76f23dab5b4e9ea540a6ab62159c137671e87d49644f41839f71623edc4ebe->enter($__internal_6a76f23dab5b4e9ea540a6ab62159c137671e87d49644f41839f71623edc4ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_1311668b56bdc924e0046b0cf694489d51b3d6fe206fa5a3ef3bc5cc141fc0c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1311668b56bdc924e0046b0cf694489d51b3d6fe206fa5a3ef3bc5cc141fc0c3->enter($__internal_1311668b56bdc924e0046b0cf694489d51b3d6fe206fa5a3ef3bc5cc141fc0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_6a76f23dab5b4e9ea540a6ab62159c137671e87d49644f41839f71623edc4ebe->leave($__internal_6a76f23dab5b4e9ea540a6ab62159c137671e87d49644f41839f71623edc4ebe_prof);

        
        $__internal_1311668b56bdc924e0046b0cf694489d51b3d6fe206fa5a3ef3bc5cc141fc0c3->leave($__internal_1311668b56bdc924e0046b0cf694489d51b3d6fe206fa5a3ef3bc5cc141fc0c3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cbbc0442337139ac055d42d94fb9f3e5a324b5d16c1c1510f9a2c0ee09992fb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbbc0442337139ac055d42d94fb9f3e5a324b5d16c1c1510f9a2c0ee09992fb9->enter($__internal_cbbc0442337139ac055d42d94fb9f3e5a324b5d16c1c1510f9a2c0ee09992fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ba7bb5e631c5fb0682c1c0c297e70b377a6482ceac1917d95244c4b19b2b359b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba7bb5e631c5fb0682c1c0c297e70b377a6482ceac1917d95244c4b19b2b359b->enter($__internal_ba7bb5e631c5fb0682c1c0c297e70b377a6482ceac1917d95244c4b19b2b359b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ba7bb5e631c5fb0682c1c0c297e70b377a6482ceac1917d95244c4b19b2b359b->leave($__internal_ba7bb5e631c5fb0682c1c0c297e70b377a6482ceac1917d95244c4b19b2b359b_prof);

        
        $__internal_cbbc0442337139ac055d42d94fb9f3e5a324b5d16c1c1510f9a2c0ee09992fb9->leave($__internal_cbbc0442337139ac055d42d94fb9f3e5a324b5d16c1c1510f9a2c0ee09992fb9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2b96a10881143d9466f334c742426d07149e4147a73fa0027329284ea35c87e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b96a10881143d9466f334c742426d07149e4147a73fa0027329284ea35c87e9->enter($__internal_2b96a10881143d9466f334c742426d07149e4147a73fa0027329284ea35c87e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ac9f32336937060a3c63e76bbe5aa6813cf17d92b10cfb0f66426bfcf38277eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac9f32336937060a3c63e76bbe5aa6813cf17d92b10cfb0f66426bfcf38277eb->enter($__internal_ac9f32336937060a3c63e76bbe5aa6813cf17d92b10cfb0f66426bfcf38277eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ac9f32336937060a3c63e76bbe5aa6813cf17d92b10cfb0f66426bfcf38277eb->leave($__internal_ac9f32336937060a3c63e76bbe5aa6813cf17d92b10cfb0f66426bfcf38277eb_prof);

        
        $__internal_2b96a10881143d9466f334c742426d07149e4147a73fa0027329284ea35c87e9->leave($__internal_2b96a10881143d9466f334c742426d07149e4147a73fa0027329284ea35c87e9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7806b425d071bfa3f808b3a54221d0b0f66d763b1ac41536db9d51cd5282cb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7806b425d071bfa3f808b3a54221d0b0f66d763b1ac41536db9d51cd5282cb2->enter($__internal_c7806b425d071bfa3f808b3a54221d0b0f66d763b1ac41536db9d51cd5282cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1717c86bd6dca89e5dc99507002546f0405d86ba176597732b50aa6c824f2b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1717c86bd6dca89e5dc99507002546f0405d86ba176597732b50aa6c824f2b6b->enter($__internal_1717c86bd6dca89e5dc99507002546f0405d86ba176597732b50aa6c824f2b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1717c86bd6dca89e5dc99507002546f0405d86ba176597732b50aa6c824f2b6b->leave($__internal_1717c86bd6dca89e5dc99507002546f0405d86ba176597732b50aa6c824f2b6b_prof);

        
        $__internal_c7806b425d071bfa3f808b3a54221d0b0f66d763b1ac41536db9d51cd5282cb2->leave($__internal_c7806b425d071bfa3f808b3a54221d0b0f66d763b1ac41536db9d51cd5282cb2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aa79bcca6928aa7686bb50a6755dd4b3bc8bd1bc5bc06dc1be871eff9ea732e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa79bcca6928aa7686bb50a6755dd4b3bc8bd1bc5bc06dc1be871eff9ea732e3->enter($__internal_aa79bcca6928aa7686bb50a6755dd4b3bc8bd1bc5bc06dc1be871eff9ea732e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8d9bc5bb7b4ed463fe1b109fcfb1122888f9a7e0ba5a35a04f64c53dd9468444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d9bc5bb7b4ed463fe1b109fcfb1122888f9a7e0ba5a35a04f64c53dd9468444->enter($__internal_8d9bc5bb7b4ed463fe1b109fcfb1122888f9a7e0ba5a35a04f64c53dd9468444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8d9bc5bb7b4ed463fe1b109fcfb1122888f9a7e0ba5a35a04f64c53dd9468444->leave($__internal_8d9bc5bb7b4ed463fe1b109fcfb1122888f9a7e0ba5a35a04f64c53dd9468444_prof);

        
        $__internal_aa79bcca6928aa7686bb50a6755dd4b3bc8bd1bc5bc06dc1be871eff9ea732e3->leave($__internal_aa79bcca6928aa7686bb50a6755dd4b3bc8bd1bc5bc06dc1be871eff9ea732e3_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/root/GozpeakSymfony/app/Resources/views/base.html.twig");
    }
}
