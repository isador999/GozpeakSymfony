<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_93e6d97fe1779f5e1ad3aeb45ba946d842a23dff8c07c99deb961e708599fd1c extends Twig_Template
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
        $__internal_aabc39a9dd6a48836930a1f626328cfce45b23970467cc31644a38f506d091c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aabc39a9dd6a48836930a1f626328cfce45b23970467cc31644a38f506d091c6->enter($__internal_aabc39a9dd6a48836930a1f626328cfce45b23970467cc31644a38f506d091c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_bf216d2f99be76d0210f46f08afc9772483d5b68d9734e082ae2aa9ab7d605bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf216d2f99be76d0210f46f08afc9772483d5b68d9734e082ae2aa9ab7d605bb->enter($__internal_bf216d2f99be76d0210f46f08afc9772483d5b68d9734e082ae2aa9ab7d605bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_aabc39a9dd6a48836930a1f626328cfce45b23970467cc31644a38f506d091c6->leave($__internal_aabc39a9dd6a48836930a1f626328cfce45b23970467cc31644a38f506d091c6_prof);

        
        $__internal_bf216d2f99be76d0210f46f08afc9772483d5b68d9734e082ae2aa9ab7d605bb->leave($__internal_bf216d2f99be76d0210f46f08afc9772483d5b68d9734e082ae2aa9ab7d605bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
