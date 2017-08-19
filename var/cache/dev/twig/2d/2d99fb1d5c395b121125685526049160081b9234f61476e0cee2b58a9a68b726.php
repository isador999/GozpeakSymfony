<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_f5a196df2e5708557a5e7834275555f40ae4fddc3fe4fd62de61dfe3d4224757 extends Twig_Template
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
        $__internal_f85cd51a8b745b8da84c04af216f04a79cc49dbdc90de0f1e274884ee6380b20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f85cd51a8b745b8da84c04af216f04a79cc49dbdc90de0f1e274884ee6380b20->enter($__internal_f85cd51a8b745b8da84c04af216f04a79cc49dbdc90de0f1e274884ee6380b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_9cb3df4c77a21fa670a1d2f0f055f6f565b62663bf35b157dd4e895dee6031ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cb3df4c77a21fa670a1d2f0f055f6f565b62663bf35b157dd4e895dee6031ad->enter($__internal_9cb3df4c77a21fa670a1d2f0f055f6f565b62663bf35b157dd4e895dee6031ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_f85cd51a8b745b8da84c04af216f04a79cc49dbdc90de0f1e274884ee6380b20->leave($__internal_f85cd51a8b745b8da84c04af216f04a79cc49dbdc90de0f1e274884ee6380b20_prof);

        
        $__internal_9cb3df4c77a21fa670a1d2f0f055f6f565b62663bf35b157dd4e895dee6031ad->leave($__internal_9cb3df4c77a21fa670a1d2f0f055f6f565b62663bf35b157dd4e895dee6031ad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
