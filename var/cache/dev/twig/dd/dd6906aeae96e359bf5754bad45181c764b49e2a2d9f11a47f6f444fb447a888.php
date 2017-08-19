<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9553fa96834c0ab4dcb8de3e70f72131636b26386dd26bde3b020531765d74b9 extends Twig_Template
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
        $__internal_934633b781e984fa4d46fe52f1b0ab0599bdbcc3efbbdd3d8154e6789e700449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_934633b781e984fa4d46fe52f1b0ab0599bdbcc3efbbdd3d8154e6789e700449->enter($__internal_934633b781e984fa4d46fe52f1b0ab0599bdbcc3efbbdd3d8154e6789e700449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_ca3ec088be3c296caa0cb12976d30d5c6108520ba204e1c0797c935bfef2c99c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca3ec088be3c296caa0cb12976d30d5c6108520ba204e1c0797c935bfef2c99c->enter($__internal_ca3ec088be3c296caa0cb12976d30d5c6108520ba204e1c0797c935bfef2c99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_934633b781e984fa4d46fe52f1b0ab0599bdbcc3efbbdd3d8154e6789e700449->leave($__internal_934633b781e984fa4d46fe52f1b0ab0599bdbcc3efbbdd3d8154e6789e700449_prof);

        
        $__internal_ca3ec088be3c296caa0cb12976d30d5c6108520ba204e1c0797c935bfef2c99c->leave($__internal_ca3ec088be3c296caa0cb12976d30d5c6108520ba204e1c0797c935bfef2c99c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
