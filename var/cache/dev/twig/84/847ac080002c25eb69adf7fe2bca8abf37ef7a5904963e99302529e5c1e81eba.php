<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_43cfa4df6fa507a07dd290b4b81fca69b70f03cab0b64e18100a287cfa1b70c6 extends Twig_Template
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
        $__internal_08fa1bc4ac9e041027e67e1f15bc6e2a7f1c42fef737401689fc3a1a7cb18ebe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08fa1bc4ac9e041027e67e1f15bc6e2a7f1c42fef737401689fc3a1a7cb18ebe->enter($__internal_08fa1bc4ac9e041027e67e1f15bc6e2a7f1c42fef737401689fc3a1a7cb18ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_f3a192efc638ed2a640ad756f5bb363674798edf2f55e5ca6aa5a4bd0e53ccda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a192efc638ed2a640ad756f5bb363674798edf2f55e5ca6aa5a4bd0e53ccda->enter($__internal_f3a192efc638ed2a640ad756f5bb363674798edf2f55e5ca6aa5a4bd0e53ccda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_08fa1bc4ac9e041027e67e1f15bc6e2a7f1c42fef737401689fc3a1a7cb18ebe->leave($__internal_08fa1bc4ac9e041027e67e1f15bc6e2a7f1c42fef737401689fc3a1a7cb18ebe_prof);

        
        $__internal_f3a192efc638ed2a640ad756f5bb363674798edf2f55e5ca6aa5a4bd0e53ccda->leave($__internal_f3a192efc638ed2a640ad756f5bb363674798edf2f55e5ca6aa5a4bd0e53ccda_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
