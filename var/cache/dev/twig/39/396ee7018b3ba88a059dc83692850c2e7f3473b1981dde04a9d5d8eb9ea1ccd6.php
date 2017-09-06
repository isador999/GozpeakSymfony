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
        $__internal_76f667e53e1b7aa8553be2bc57502f579f0c47400d03e641e74f4e2adc4beef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76f667e53e1b7aa8553be2bc57502f579f0c47400d03e641e74f4e2adc4beef4->enter($__internal_76f667e53e1b7aa8553be2bc57502f579f0c47400d03e641e74f4e2adc4beef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_c67f5fe0a1cc8066a0089f62a85492ff7a0d07123740cfd8062a62fe18846b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c67f5fe0a1cc8066a0089f62a85492ff7a0d07123740cfd8062a62fe18846b2c->enter($__internal_c67f5fe0a1cc8066a0089f62a85492ff7a0d07123740cfd8062a62fe18846b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_76f667e53e1b7aa8553be2bc57502f579f0c47400d03e641e74f4e2adc4beef4->leave($__internal_76f667e53e1b7aa8553be2bc57502f579f0c47400d03e641e74f4e2adc4beef4_prof);

        
        $__internal_c67f5fe0a1cc8066a0089f62a85492ff7a0d07123740cfd8062a62fe18846b2c->leave($__internal_c67f5fe0a1cc8066a0089f62a85492ff7a0d07123740cfd8062a62fe18846b2c_prof);

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
