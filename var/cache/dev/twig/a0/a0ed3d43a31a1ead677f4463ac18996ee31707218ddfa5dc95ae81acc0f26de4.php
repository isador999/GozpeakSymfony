<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e846c2f27e8bf52e59dd2e71d123ee42d64657fde4248bfb523199ee7510d23a extends Twig_Template
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
        $__internal_356b1c8e9108c731ff7607e01d0cb88f8b5fdd2c7fc30a2773045be3d06ca75e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_356b1c8e9108c731ff7607e01d0cb88f8b5fdd2c7fc30a2773045be3d06ca75e->enter($__internal_356b1c8e9108c731ff7607e01d0cb88f8b5fdd2c7fc30a2773045be3d06ca75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_fab9b4fa9b2a50e19b7122c927885652ae0be48d31c4e5005a9967e82f8457c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fab9b4fa9b2a50e19b7122c927885652ae0be48d31c4e5005a9967e82f8457c2->enter($__internal_fab9b4fa9b2a50e19b7122c927885652ae0be48d31c4e5005a9967e82f8457c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_356b1c8e9108c731ff7607e01d0cb88f8b5fdd2c7fc30a2773045be3d06ca75e->leave($__internal_356b1c8e9108c731ff7607e01d0cb88f8b5fdd2c7fc30a2773045be3d06ca75e_prof);

        
        $__internal_fab9b4fa9b2a50e19b7122c927885652ae0be48d31c4e5005a9967e82f8457c2->leave($__internal_fab9b4fa9b2a50e19b7122c927885652ae0be48d31c4e5005a9967e82f8457c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
