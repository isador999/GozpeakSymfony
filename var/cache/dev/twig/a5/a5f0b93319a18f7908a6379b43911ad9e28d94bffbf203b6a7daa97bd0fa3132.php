<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_592ff4764007cbe170440c412c0d978230f9cedd9b99f092de982e0728b1ec2c extends Twig_Template
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
        $__internal_418c94f4fbd271c64b211a96a4a7aa69c815ad31b0874d2272919eef269af036 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_418c94f4fbd271c64b211a96a4a7aa69c815ad31b0874d2272919eef269af036->enter($__internal_418c94f4fbd271c64b211a96a4a7aa69c815ad31b0874d2272919eef269af036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_05eda40dea4fd97eb0bed896685c69f46ec1c42f6c30457ba88dbc85bc154458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05eda40dea4fd97eb0bed896685c69f46ec1c42f6c30457ba88dbc85bc154458->enter($__internal_05eda40dea4fd97eb0bed896685c69f46ec1c42f6c30457ba88dbc85bc154458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_418c94f4fbd271c64b211a96a4a7aa69c815ad31b0874d2272919eef269af036->leave($__internal_418c94f4fbd271c64b211a96a4a7aa69c815ad31b0874d2272919eef269af036_prof);

        
        $__internal_05eda40dea4fd97eb0bed896685c69f46ec1c42f6c30457ba88dbc85bc154458->leave($__internal_05eda40dea4fd97eb0bed896685c69f46ec1c42f6c30457ba88dbc85bc154458_prof);

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
", "TwigBundle:Exception:error.xml.twig", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
