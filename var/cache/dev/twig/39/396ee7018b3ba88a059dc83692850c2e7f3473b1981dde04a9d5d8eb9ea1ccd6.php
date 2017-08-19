<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_69aeb742a2a0171da239a329bd3e34cc27cd7f0ecb86822e84daac69a1052133 extends Twig_Template
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
        $__internal_8a683a0b05a1d0519a38c6668dd6f1bcaf1b5aa0b8ca3499ac047527f91c4a93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a683a0b05a1d0519a38c6668dd6f1bcaf1b5aa0b8ca3499ac047527f91c4a93->enter($__internal_8a683a0b05a1d0519a38c6668dd6f1bcaf1b5aa0b8ca3499ac047527f91c4a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_abff1b4e61c046d7e0dd71565b8cabab57b5bd4ed3257dc8655e803475b2fc72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abff1b4e61c046d7e0dd71565b8cabab57b5bd4ed3257dc8655e803475b2fc72->enter($__internal_abff1b4e61c046d7e0dd71565b8cabab57b5bd4ed3257dc8655e803475b2fc72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_8a683a0b05a1d0519a38c6668dd6f1bcaf1b5aa0b8ca3499ac047527f91c4a93->leave($__internal_8a683a0b05a1d0519a38c6668dd6f1bcaf1b5aa0b8ca3499ac047527f91c4a93_prof);

        
        $__internal_abff1b4e61c046d7e0dd71565b8cabab57b5bd4ed3257dc8655e803475b2fc72->leave($__internal_abff1b4e61c046d7e0dd71565b8cabab57b5bd4ed3257dc8655e803475b2fc72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
