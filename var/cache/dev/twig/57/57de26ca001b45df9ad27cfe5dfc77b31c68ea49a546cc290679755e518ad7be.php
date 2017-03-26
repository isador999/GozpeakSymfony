<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_8ca35c741c53deb2eae986d130ebef13d180170fefaeac5e70ae1d771f7e09e3 extends Twig_Template
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
        $__internal_9fc3d7ad8252716e65cc56a07e9239cc9ce2a5463a9473b028b6de65337bda57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fc3d7ad8252716e65cc56a07e9239cc9ce2a5463a9473b028b6de65337bda57->enter($__internal_9fc3d7ad8252716e65cc56a07e9239cc9ce2a5463a9473b028b6de65337bda57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_f25378e516f0d2edaf9f3c02feb374a8c50826aa24607e6b68b2c1dd65bc570a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f25378e516f0d2edaf9f3c02feb374a8c50826aa24607e6b68b2c1dd65bc570a->enter($__internal_f25378e516f0d2edaf9f3c02feb374a8c50826aa24607e6b68b2c1dd65bc570a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_9fc3d7ad8252716e65cc56a07e9239cc9ce2a5463a9473b028b6de65337bda57->leave($__internal_9fc3d7ad8252716e65cc56a07e9239cc9ce2a5463a9473b028b6de65337bda57_prof);

        
        $__internal_f25378e516f0d2edaf9f3c02feb374a8c50826aa24607e6b68b2c1dd65bc570a->leave($__internal_f25378e516f0d2edaf9f3c02feb374a8c50826aa24607e6b68b2c1dd65bc570a_prof);

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
", "@Framework/Form/email_widget.html.php", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
