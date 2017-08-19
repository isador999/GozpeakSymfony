<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_0bf77a47730e02fcf23c94ec7e89c784ea00fe6ec14f2c3a6da988c62afea9a4 extends Twig_Template
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
        $__internal_072ded05a61ce6affa749de4a312ff2967aa35d32d71c7b21de7a9dcab969cc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_072ded05a61ce6affa749de4a312ff2967aa35d32d71c7b21de7a9dcab969cc8->enter($__internal_072ded05a61ce6affa749de4a312ff2967aa35d32d71c7b21de7a9dcab969cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_e0aeacaf0d09ee4875f6512df227b5e5bd76181b6248d217f811f39a69c006a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0aeacaf0d09ee4875f6512df227b5e5bd76181b6248d217f811f39a69c006a5->enter($__internal_e0aeacaf0d09ee4875f6512df227b5e5bd76181b6248d217f811f39a69c006a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_072ded05a61ce6affa749de4a312ff2967aa35d32d71c7b21de7a9dcab969cc8->leave($__internal_072ded05a61ce6affa749de4a312ff2967aa35d32d71c7b21de7a9dcab969cc8_prof);

        
        $__internal_e0aeacaf0d09ee4875f6512df227b5e5bd76181b6248d217f811f39a69c006a5->leave($__internal_e0aeacaf0d09ee4875f6512df227b5e5bd76181b6248d217f811f39a69c006a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
