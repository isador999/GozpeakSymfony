<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_6fbcd91bfd5c5e4e2461d575dbc4896693f14c6111f45844ccab3384e99bcc4d extends Twig_Template
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
        $__internal_6c44321c3518e24f4cad53349c4dc05dd3ad344b865ab1962d01290f2d2ddb67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c44321c3518e24f4cad53349c4dc05dd3ad344b865ab1962d01290f2d2ddb67->enter($__internal_6c44321c3518e24f4cad53349c4dc05dd3ad344b865ab1962d01290f2d2ddb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_26def0195b6b0e5841cda63abbc7676c6dac839ebc4dcc4c1f5f594bdb290a96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26def0195b6b0e5841cda63abbc7676c6dac839ebc4dcc4c1f5f594bdb290a96->enter($__internal_26def0195b6b0e5841cda63abbc7676c6dac839ebc4dcc4c1f5f594bdb290a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_6c44321c3518e24f4cad53349c4dc05dd3ad344b865ab1962d01290f2d2ddb67->leave($__internal_6c44321c3518e24f4cad53349c4dc05dd3ad344b865ab1962d01290f2d2ddb67_prof);

        
        $__internal_26def0195b6b0e5841cda63abbc7676c6dac839ebc4dcc4c1f5f594bdb290a96->leave($__internal_26def0195b6b0e5841cda63abbc7676c6dac839ebc4dcc4c1f5f594bdb290a96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
