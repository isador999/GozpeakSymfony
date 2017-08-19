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
        $__internal_8b717890a4ef51d9ebd8b5976abeaf7eee7515ce74a2e790562962cc1b2bc2c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b717890a4ef51d9ebd8b5976abeaf7eee7515ce74a2e790562962cc1b2bc2c1->enter($__internal_8b717890a4ef51d9ebd8b5976abeaf7eee7515ce74a2e790562962cc1b2bc2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_8876dfb399500da4483067e91fab295690829f9ce286a05b5262f6ea7555ce55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8876dfb399500da4483067e91fab295690829f9ce286a05b5262f6ea7555ce55->enter($__internal_8876dfb399500da4483067e91fab295690829f9ce286a05b5262f6ea7555ce55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_8b717890a4ef51d9ebd8b5976abeaf7eee7515ce74a2e790562962cc1b2bc2c1->leave($__internal_8b717890a4ef51d9ebd8b5976abeaf7eee7515ce74a2e790562962cc1b2bc2c1_prof);

        
        $__internal_8876dfb399500da4483067e91fab295690829f9ce286a05b5262f6ea7555ce55->leave($__internal_8876dfb399500da4483067e91fab295690829f9ce286a05b5262f6ea7555ce55_prof);

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
