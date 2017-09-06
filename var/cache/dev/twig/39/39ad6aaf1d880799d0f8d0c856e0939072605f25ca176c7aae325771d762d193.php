<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_3b5ec0524e6c87039bbe98e80026fade9ad6fb2f8dec838ca3d6b3163fbc4b88 extends Twig_Template
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
        $__internal_5be224094f8e01f82db2eed0dfabdfe14c2b41e66e441e98874517fb41ad07ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5be224094f8e01f82db2eed0dfabdfe14c2b41e66e441e98874517fb41ad07ad->enter($__internal_5be224094f8e01f82db2eed0dfabdfe14c2b41e66e441e98874517fb41ad07ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_5c99f766f28be5937347ba7b46299eed2a1f8a58e39dfe92d598fca616c8d567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c99f766f28be5937347ba7b46299eed2a1f8a58e39dfe92d598fca616c8d567->enter($__internal_5c99f766f28be5937347ba7b46299eed2a1f8a58e39dfe92d598fca616c8d567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_5be224094f8e01f82db2eed0dfabdfe14c2b41e66e441e98874517fb41ad07ad->leave($__internal_5be224094f8e01f82db2eed0dfabdfe14c2b41e66e441e98874517fb41ad07ad_prof);

        
        $__internal_5c99f766f28be5937347ba7b46299eed2a1f8a58e39dfe92d598fca616c8d567->leave($__internal_5c99f766f28be5937347ba7b46299eed2a1f8a58e39dfe92d598fca616c8d567_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
