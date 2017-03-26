<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_7f1a45908ead9090137e08091ab679e1869474b22f0bef4b45cf2f023beec13f extends Twig_Template
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
        $__internal_907e3d3c14dc05bc69655abf4c6818d0126ef9bb7677e74cf739d386ed9e575a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_907e3d3c14dc05bc69655abf4c6818d0126ef9bb7677e74cf739d386ed9e575a->enter($__internal_907e3d3c14dc05bc69655abf4c6818d0126ef9bb7677e74cf739d386ed9e575a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_8e0d19f2fb028bd6d9510ee3fb70cede0b7d37adc59c84090122f1eb84fbf53a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e0d19f2fb028bd6d9510ee3fb70cede0b7d37adc59c84090122f1eb84fbf53a->enter($__internal_8e0d19f2fb028bd6d9510ee3fb70cede0b7d37adc59c84090122f1eb84fbf53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_907e3d3c14dc05bc69655abf4c6818d0126ef9bb7677e74cf739d386ed9e575a->leave($__internal_907e3d3c14dc05bc69655abf4c6818d0126ef9bb7677e74cf739d386ed9e575a_prof);

        
        $__internal_8e0d19f2fb028bd6d9510ee3fb70cede0b7d37adc59c84090122f1eb84fbf53a->leave($__internal_8e0d19f2fb028bd6d9510ee3fb70cede0b7d37adc59c84090122f1eb84fbf53a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
