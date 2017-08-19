<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_5f7f61921ec5c339e934589c7c52d155c10fe04a2a1cbf4f49455877d8fb9fa1 extends Twig_Template
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
        $__internal_851e4b7f219b6c9aa07b7857f06b37836d07d67da07496de0f862005ef15b5cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_851e4b7f219b6c9aa07b7857f06b37836d07d67da07496de0f862005ef15b5cc->enter($__internal_851e4b7f219b6c9aa07b7857f06b37836d07d67da07496de0f862005ef15b5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_ff446732602e8d86f19772f951a4033e0840483d387d5afeb5a16e5133058231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff446732602e8d86f19772f951a4033e0840483d387d5afeb5a16e5133058231->enter($__internal_ff446732602e8d86f19772f951a4033e0840483d387d5afeb5a16e5133058231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_851e4b7f219b6c9aa07b7857f06b37836d07d67da07496de0f862005ef15b5cc->leave($__internal_851e4b7f219b6c9aa07b7857f06b37836d07d67da07496de0f862005ef15b5cc_prof);

        
        $__internal_ff446732602e8d86f19772f951a4033e0840483d387d5afeb5a16e5133058231->leave($__internal_ff446732602e8d86f19772f951a4033e0840483d387d5afeb5a16e5133058231_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
