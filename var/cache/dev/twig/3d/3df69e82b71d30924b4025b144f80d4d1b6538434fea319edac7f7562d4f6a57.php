<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_4637bdf881b03616502cff663e952e1de11fb13ee777e5412be7d6c409e8894f extends Twig_Template
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
        $__internal_66a9750d1dd2c755388337afa2c3c74a219a156ae3e4ad5689d3cf58cd4af3d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66a9750d1dd2c755388337afa2c3c74a219a156ae3e4ad5689d3cf58cd4af3d0->enter($__internal_66a9750d1dd2c755388337afa2c3c74a219a156ae3e4ad5689d3cf58cd4af3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_497265c94f066a9c32e9cdc20690af6c6b198165d0d243178d335ec618da4b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497265c94f066a9c32e9cdc20690af6c6b198165d0d243178d335ec618da4b26->enter($__internal_497265c94f066a9c32e9cdc20690af6c6b198165d0d243178d335ec618da4b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_66a9750d1dd2c755388337afa2c3c74a219a156ae3e4ad5689d3cf58cd4af3d0->leave($__internal_66a9750d1dd2c755388337afa2c3c74a219a156ae3e4ad5689d3cf58cd4af3d0_prof);

        
        $__internal_497265c94f066a9c32e9cdc20690af6c6b198165d0d243178d335ec618da4b26->leave($__internal_497265c94f066a9c32e9cdc20690af6c6b198165d0d243178d335ec618da4b26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
