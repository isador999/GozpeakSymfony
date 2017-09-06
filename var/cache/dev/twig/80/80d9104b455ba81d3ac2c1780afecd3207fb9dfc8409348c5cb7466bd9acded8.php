<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_14006793ff0e0fc11971a0eb9ccd995c1b59242fb07f6c2c641d8b3cbcf95cac extends Twig_Template
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
        $__internal_81046ccd2f08f24c55e62b90a103f45165f874063766289b344ad55b31e8c017 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81046ccd2f08f24c55e62b90a103f45165f874063766289b344ad55b31e8c017->enter($__internal_81046ccd2f08f24c55e62b90a103f45165f874063766289b344ad55b31e8c017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_9f9225c144bbde256faca54fc0367cc91e3fdb087c199b4771317a7062275ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f9225c144bbde256faca54fc0367cc91e3fdb087c199b4771317a7062275ea2->enter($__internal_9f9225c144bbde256faca54fc0367cc91e3fdb087c199b4771317a7062275ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_81046ccd2f08f24c55e62b90a103f45165f874063766289b344ad55b31e8c017->leave($__internal_81046ccd2f08f24c55e62b90a103f45165f874063766289b344ad55b31e8c017_prof);

        
        $__internal_9f9225c144bbde256faca54fc0367cc91e3fdb087c199b4771317a7062275ea2->leave($__internal_9f9225c144bbde256faca54fc0367cc91e3fdb087c199b4771317a7062275ea2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
