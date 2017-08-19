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
        $__internal_8fb078f2767d88f457b5afa1b495f7e45141bb1cbe72fc04fdbba1e00b295b0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fb078f2767d88f457b5afa1b495f7e45141bb1cbe72fc04fdbba1e00b295b0c->enter($__internal_8fb078f2767d88f457b5afa1b495f7e45141bb1cbe72fc04fdbba1e00b295b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_7aebcd16b540a5f48fec124b2102a7a2b207da67ebcea2a4aa4656bcc19d89b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aebcd16b540a5f48fec124b2102a7a2b207da67ebcea2a4aa4656bcc19d89b5->enter($__internal_7aebcd16b540a5f48fec124b2102a7a2b207da67ebcea2a4aa4656bcc19d89b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_8fb078f2767d88f457b5afa1b495f7e45141bb1cbe72fc04fdbba1e00b295b0c->leave($__internal_8fb078f2767d88f457b5afa1b495f7e45141bb1cbe72fc04fdbba1e00b295b0c_prof);

        
        $__internal_7aebcd16b540a5f48fec124b2102a7a2b207da67ebcea2a4aa4656bcc19d89b5->leave($__internal_7aebcd16b540a5f48fec124b2102a7a2b207da67ebcea2a4aa4656bcc19d89b5_prof);

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
