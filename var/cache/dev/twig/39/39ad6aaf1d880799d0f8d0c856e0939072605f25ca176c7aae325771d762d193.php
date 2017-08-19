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
        $__internal_e5db475d5fd2a2518dfbb38c251402caae760957e10edb1bd0ab2f4f52a6fa5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5db475d5fd2a2518dfbb38c251402caae760957e10edb1bd0ab2f4f52a6fa5c->enter($__internal_e5db475d5fd2a2518dfbb38c251402caae760957e10edb1bd0ab2f4f52a6fa5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_5d0aa5fbcce63b9de7d8c2be3c04f1022b2adb5421eceaf90f364ee592568a84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d0aa5fbcce63b9de7d8c2be3c04f1022b2adb5421eceaf90f364ee592568a84->enter($__internal_5d0aa5fbcce63b9de7d8c2be3c04f1022b2adb5421eceaf90f364ee592568a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_e5db475d5fd2a2518dfbb38c251402caae760957e10edb1bd0ab2f4f52a6fa5c->leave($__internal_e5db475d5fd2a2518dfbb38c251402caae760957e10edb1bd0ab2f4f52a6fa5c_prof);

        
        $__internal_5d0aa5fbcce63b9de7d8c2be3c04f1022b2adb5421eceaf90f364ee592568a84->leave($__internal_5d0aa5fbcce63b9de7d8c2be3c04f1022b2adb5421eceaf90f364ee592568a84_prof);

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
