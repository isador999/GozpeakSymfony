<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_b5199c97b17958c87e5849af707219510a9234343a67724600fd2b1a411e0642 extends Twig_Template
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
        $__internal_87ef86750dd1108ca439cbaa42c877a8fab2e9c9745357f85606af09fca7ad03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87ef86750dd1108ca439cbaa42c877a8fab2e9c9745357f85606af09fca7ad03->enter($__internal_87ef86750dd1108ca439cbaa42c877a8fab2e9c9745357f85606af09fca7ad03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_5baf3858af7aea93f8d4da3ad9efb64bd3e5624551d857da5814632f849493db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5baf3858af7aea93f8d4da3ad9efb64bd3e5624551d857da5814632f849493db->enter($__internal_5baf3858af7aea93f8d4da3ad9efb64bd3e5624551d857da5814632f849493db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_87ef86750dd1108ca439cbaa42c877a8fab2e9c9745357f85606af09fca7ad03->leave($__internal_87ef86750dd1108ca439cbaa42c877a8fab2e9c9745357f85606af09fca7ad03_prof);

        
        $__internal_5baf3858af7aea93f8d4da3ad9efb64bd3e5624551d857da5814632f849493db->leave($__internal_5baf3858af7aea93f8d4da3ad9efb64bd3e5624551d857da5814632f849493db_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
