<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_bd42d5eef0b87f337d802967f44c3e314a467f4bf0b7652af4ac76f340c5c619 extends Twig_Template
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
        $__internal_314943955635236361313965d69eb4459000e2eb1afe41f83b7890a65824da9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_314943955635236361313965d69eb4459000e2eb1afe41f83b7890a65824da9c->enter($__internal_314943955635236361313965d69eb4459000e2eb1afe41f83b7890a65824da9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_ad879507b10f23ce33d1bc423f419a8ecb00fee9a53e06a17f1fc81073b16f71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad879507b10f23ce33d1bc423f419a8ecb00fee9a53e06a17f1fc81073b16f71->enter($__internal_ad879507b10f23ce33d1bc423f419a8ecb00fee9a53e06a17f1fc81073b16f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_314943955635236361313965d69eb4459000e2eb1afe41f83b7890a65824da9c->leave($__internal_314943955635236361313965d69eb4459000e2eb1afe41f83b7890a65824da9c_prof);

        
        $__internal_ad879507b10f23ce33d1bc423f419a8ecb00fee9a53e06a17f1fc81073b16f71->leave($__internal_ad879507b10f23ce33d1bc423f419a8ecb00fee9a53e06a17f1fc81073b16f71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
