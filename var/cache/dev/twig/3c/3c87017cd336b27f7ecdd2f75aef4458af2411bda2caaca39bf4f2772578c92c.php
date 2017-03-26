<?php

/* Gozpeak/_config.yml */
class __TwigTemplate_965715954afbaeb76b012ed55fca7201726d31dc071a09f97a1f5f6cdfbcc1f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5cbdf5abe9b04496cf3d65ebd479976edcf79c37bdce24c0597141ce69e48973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cbdf5abe9b04496cf3d65ebd479976edcf79c37bdce24c0597141ce69e48973->enter($__internal_5cbdf5abe9b04496cf3d65ebd479976edcf79c37bdce24c0597141ce69e48973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/_config.yml"));

        $__internal_0d3771d63436085770c94bd7ac4c8689837082c5b420365f0985264c4e1623af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d3771d63436085770c94bd7ac4c8689837082c5b420365f0985264c4e1623af->enter($__internal_0d3771d63436085770c94bd7ac4c8689837082c5b420365f0985264c4e1623af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/_config.yml"));

        // line 1
        echo "theme: jekyll-theme-architect";
        
        $__internal_5cbdf5abe9b04496cf3d65ebd479976edcf79c37bdce24c0597141ce69e48973->leave($__internal_5cbdf5abe9b04496cf3d65ebd479976edcf79c37bdce24c0597141ce69e48973_prof);

        
        $__internal_0d3771d63436085770c94bd7ac4c8689837082c5b420365f0985264c4e1623af->leave($__internal_0d3771d63436085770c94bd7ac4c8689837082c5b420365f0985264c4e1623af_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/_config.yml";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("theme: jekyll-theme-architect", "Gozpeak/_config.yml", "/root/Gozpeak/app/Resources/views/Gozpeak/_config.yml");
    }
}
