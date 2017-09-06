<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_9cf52c06e3bcbe003aca37c77aec13407c320b0c48cff539ee0caa50299e8db7 extends Twig_Template
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
        $__internal_d2405f8c7d47ff721002fa8a67264904681600099701ea4ec2646d4cf743d37d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2405f8c7d47ff721002fa8a67264904681600099701ea4ec2646d4cf743d37d->enter($__internal_d2405f8c7d47ff721002fa8a67264904681600099701ea4ec2646d4cf743d37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_318d393fbcfaade6fbe9833f47379bc92feed628fd27a7213aef54266d75747f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_318d393fbcfaade6fbe9833f47379bc92feed628fd27a7213aef54266d75747f->enter($__internal_318d393fbcfaade6fbe9833f47379bc92feed628fd27a7213aef54266d75747f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_d2405f8c7d47ff721002fa8a67264904681600099701ea4ec2646d4cf743d37d->leave($__internal_d2405f8c7d47ff721002fa8a67264904681600099701ea4ec2646d4cf743d37d_prof);

        
        $__internal_318d393fbcfaade6fbe9833f47379bc92feed628fd27a7213aef54266d75747f->leave($__internal_318d393fbcfaade6fbe9833f47379bc92feed628fd27a7213aef54266d75747f_prof);

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
", "@Framework/Form/datetime_widget.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
