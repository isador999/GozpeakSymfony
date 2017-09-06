<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_2860e5c2f8c997d9d0dcb582a6c488d9a51615957c5bde6e68a1c68889f2393e extends Twig_Template
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
        $__internal_bb4f2f41b043f31572841b8f6620cf914a91ef3f0c09bfc3ef687eecbbb24fa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb4f2f41b043f31572841b8f6620cf914a91ef3f0c09bfc3ef687eecbbb24fa5->enter($__internal_bb4f2f41b043f31572841b8f6620cf914a91ef3f0c09bfc3ef687eecbbb24fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_686a8f0e63364754bfea402ef5d4490a76445eb914ccfb76235d0fed7c30f503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_686a8f0e63364754bfea402ef5d4490a76445eb914ccfb76235d0fed7c30f503->enter($__internal_686a8f0e63364754bfea402ef5d4490a76445eb914ccfb76235d0fed7c30f503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_bb4f2f41b043f31572841b8f6620cf914a91ef3f0c09bfc3ef687eecbbb24fa5->leave($__internal_bb4f2f41b043f31572841b8f6620cf914a91ef3f0c09bfc3ef687eecbbb24fa5_prof);

        
        $__internal_686a8f0e63364754bfea402ef5d4490a76445eb914ccfb76235d0fed7c30f503->leave($__internal_686a8f0e63364754bfea402ef5d4490a76445eb914ccfb76235d0fed7c30f503_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
