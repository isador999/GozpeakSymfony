<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_0798e37c38d513bea7b709472f00287adf735e9290f5e482edd74f4ecf2ed013 extends Twig_Template
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
        $__internal_53f02d4e9cbf1802af5a4acb62ed9e24fc7d0e6528330d56e33a2f57a8167bc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53f02d4e9cbf1802af5a4acb62ed9e24fc7d0e6528330d56e33a2f57a8167bc7->enter($__internal_53f02d4e9cbf1802af5a4acb62ed9e24fc7d0e6528330d56e33a2f57a8167bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_afdf523567618231393764caba566a32feec985119388bf64b5d62e3f2386f57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afdf523567618231393764caba566a32feec985119388bf64b5d62e3f2386f57->enter($__internal_afdf523567618231393764caba566a32feec985119388bf64b5d62e3f2386f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_53f02d4e9cbf1802af5a4acb62ed9e24fc7d0e6528330d56e33a2f57a8167bc7->leave($__internal_53f02d4e9cbf1802af5a4acb62ed9e24fc7d0e6528330d56e33a2f57a8167bc7_prof);

        
        $__internal_afdf523567618231393764caba566a32feec985119388bf64b5d62e3f2386f57->leave($__internal_afdf523567618231393764caba566a32feec985119388bf64b5d62e3f2386f57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
