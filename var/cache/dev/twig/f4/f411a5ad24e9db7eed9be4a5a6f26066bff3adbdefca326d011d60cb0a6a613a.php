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
        $__internal_16f89ee15dddf2749c1d328710a0e7575427579e130537193c68f9300e4095ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16f89ee15dddf2749c1d328710a0e7575427579e130537193c68f9300e4095ce->enter($__internal_16f89ee15dddf2749c1d328710a0e7575427579e130537193c68f9300e4095ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_086f7af5ab4c01509a716e0dac57c288a5bd55abb4c908f56cb267c9799c4039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_086f7af5ab4c01509a716e0dac57c288a5bd55abb4c908f56cb267c9799c4039->enter($__internal_086f7af5ab4c01509a716e0dac57c288a5bd55abb4c908f56cb267c9799c4039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_16f89ee15dddf2749c1d328710a0e7575427579e130537193c68f9300e4095ce->leave($__internal_16f89ee15dddf2749c1d328710a0e7575427579e130537193c68f9300e4095ce_prof);

        
        $__internal_086f7af5ab4c01509a716e0dac57c288a5bd55abb4c908f56cb267c9799c4039->leave($__internal_086f7af5ab4c01509a716e0dac57c288a5bd55abb4c908f56cb267c9799c4039_prof);

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
