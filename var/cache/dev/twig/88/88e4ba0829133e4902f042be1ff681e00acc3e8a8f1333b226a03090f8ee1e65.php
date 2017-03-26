<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_d85e295de9f94a240e50ce96bc72b14c1db3eedca0bebd0c799d94baabcc26a6 extends Twig_Template
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
        $__internal_41e2d7ca173f961d4522a14b34e44305ff6dcc92e9f5a055b4d4bcbdb503ee6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41e2d7ca173f961d4522a14b34e44305ff6dcc92e9f5a055b4d4bcbdb503ee6d->enter($__internal_41e2d7ca173f961d4522a14b34e44305ff6dcc92e9f5a055b4d4bcbdb503ee6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_eb5cea28f1667938770d1d35782453140217b344c537a2ffefff26fd7291a6df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb5cea28f1667938770d1d35782453140217b344c537a2ffefff26fd7291a6df->enter($__internal_eb5cea28f1667938770d1d35782453140217b344c537a2ffefff26fd7291a6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_41e2d7ca173f961d4522a14b34e44305ff6dcc92e9f5a055b4d4bcbdb503ee6d->leave($__internal_41e2d7ca173f961d4522a14b34e44305ff6dcc92e9f5a055b4d4bcbdb503ee6d_prof);

        
        $__internal_eb5cea28f1667938770d1d35782453140217b344c537a2ffefff26fd7291a6df->leave($__internal_eb5cea28f1667938770d1d35782453140217b344c537a2ffefff26fd7291a6df_prof);

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
", "@Framework/Form/form_widget_compound.html.php", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
