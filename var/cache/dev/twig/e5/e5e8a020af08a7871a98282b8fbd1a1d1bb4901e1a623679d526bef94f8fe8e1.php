<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_c338a711af04d90dc0489dfe0379d3c1c02271b31353bba73e57fe1984d6afa5 extends Twig_Template
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
        $__internal_eba10fac9b68b7925e27a827a97e8f66b3c315ba5f7e1617760e80d253390064 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eba10fac9b68b7925e27a827a97e8f66b3c315ba5f7e1617760e80d253390064->enter($__internal_eba10fac9b68b7925e27a827a97e8f66b3c315ba5f7e1617760e80d253390064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_ad2d36b89ba5163c1540f402f58e9584ad4b9276a6c95cf0f229c26629223ac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad2d36b89ba5163c1540f402f58e9584ad4b9276a6c95cf0f229c26629223ac5->enter($__internal_ad2d36b89ba5163c1540f402f58e9584ad4b9276a6c95cf0f229c26629223ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_eba10fac9b68b7925e27a827a97e8f66b3c315ba5f7e1617760e80d253390064->leave($__internal_eba10fac9b68b7925e27a827a97e8f66b3c315ba5f7e1617760e80d253390064_prof);

        
        $__internal_ad2d36b89ba5163c1540f402f58e9584ad4b9276a6c95cf0f229c26629223ac5->leave($__internal_ad2d36b89ba5163c1540f402f58e9584ad4b9276a6c95cf0f229c26629223ac5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
