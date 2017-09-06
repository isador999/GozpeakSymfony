<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_95d7afa5dccedf33d5c5855dd7cff6cece12ad2c9179c95e5f380d3d7bc24e66 extends Twig_Template
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
        $__internal_ccd17c1b6744a24b09f86518f355ae712eb309708fdd9962f0b47e8c8cf7ccf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccd17c1b6744a24b09f86518f355ae712eb309708fdd9962f0b47e8c8cf7ccf6->enter($__internal_ccd17c1b6744a24b09f86518f355ae712eb309708fdd9962f0b47e8c8cf7ccf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_d7e273a0de6635281be22002aa83a1a5c99b90538b5e64700649b7a602c68d22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e273a0de6635281be22002aa83a1a5c99b90538b5e64700649b7a602c68d22->enter($__internal_d7e273a0de6635281be22002aa83a1a5c99b90538b5e64700649b7a602c68d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_ccd17c1b6744a24b09f86518f355ae712eb309708fdd9962f0b47e8c8cf7ccf6->leave($__internal_ccd17c1b6744a24b09f86518f355ae712eb309708fdd9962f0b47e8c8cf7ccf6_prof);

        
        $__internal_d7e273a0de6635281be22002aa83a1a5c99b90538b5e64700649b7a602c68d22->leave($__internal_d7e273a0de6635281be22002aa83a1a5c99b90538b5e64700649b7a602c68d22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
