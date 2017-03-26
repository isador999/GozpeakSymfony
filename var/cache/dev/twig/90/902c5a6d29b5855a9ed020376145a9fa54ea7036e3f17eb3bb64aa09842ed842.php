<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_d24c51838a6bffd90c607402fb6aca098c9f7b4b506b065f66d3e66a1f9f4060 extends Twig_Template
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
        $__internal_b2ddfb33bbd3adf46f97f0b075dde38b48c47800282714d005a349fe2db3cffc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2ddfb33bbd3adf46f97f0b075dde38b48c47800282714d005a349fe2db3cffc->enter($__internal_b2ddfb33bbd3adf46f97f0b075dde38b48c47800282714d005a349fe2db3cffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_ee9e655e222fae871a092bb49644e152123d192e8409221f886521aedcc7fdb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee9e655e222fae871a092bb49644e152123d192e8409221f886521aedcc7fdb8->enter($__internal_ee9e655e222fae871a092bb49644e152123d192e8409221f886521aedcc7fdb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_b2ddfb33bbd3adf46f97f0b075dde38b48c47800282714d005a349fe2db3cffc->leave($__internal_b2ddfb33bbd3adf46f97f0b075dde38b48c47800282714d005a349fe2db3cffc_prof);

        
        $__internal_ee9e655e222fae871a092bb49644e152123d192e8409221f886521aedcc7fdb8->leave($__internal_ee9e655e222fae871a092bb49644e152123d192e8409221f886521aedcc7fdb8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
