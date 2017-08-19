<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_43cfa4df6fa507a07dd290b4b81fca69b70f03cab0b64e18100a287cfa1b70c6 extends Twig_Template
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
        $__internal_aca1fd857bdba36748a02cc17c50bc7ae314538756fcda7fa01cd41ebded8e93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aca1fd857bdba36748a02cc17c50bc7ae314538756fcda7fa01cd41ebded8e93->enter($__internal_aca1fd857bdba36748a02cc17c50bc7ae314538756fcda7fa01cd41ebded8e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_8ef9a195bbd0f07f99fef540e591bff33c77dfd86cf436c9044baa360e4bf13b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ef9a195bbd0f07f99fef540e591bff33c77dfd86cf436c9044baa360e4bf13b->enter($__internal_8ef9a195bbd0f07f99fef540e591bff33c77dfd86cf436c9044baa360e4bf13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_aca1fd857bdba36748a02cc17c50bc7ae314538756fcda7fa01cd41ebded8e93->leave($__internal_aca1fd857bdba36748a02cc17c50bc7ae314538756fcda7fa01cd41ebded8e93_prof);

        
        $__internal_8ef9a195bbd0f07f99fef540e591bff33c77dfd86cf436c9044baa360e4bf13b->leave($__internal_8ef9a195bbd0f07f99fef540e591bff33c77dfd86cf436c9044baa360e4bf13b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
