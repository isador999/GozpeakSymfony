<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_05e4ba2fd294fdec1729ead3147bccf54b5ac9a204e9543a8a9ab09d10e5ee8d extends Twig_Template
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
        $__internal_924c1ebe7104122f400de9853d8d31e715fa0b468076fc841d97b1bab2d8afe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_924c1ebe7104122f400de9853d8d31e715fa0b468076fc841d97b1bab2d8afe3->enter($__internal_924c1ebe7104122f400de9853d8d31e715fa0b468076fc841d97b1bab2d8afe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_14cbbd5c3c807ecb6bb73205cbd85187403e09620de342cb0bc81180605ac235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14cbbd5c3c807ecb6bb73205cbd85187403e09620de342cb0bc81180605ac235->enter($__internal_14cbbd5c3c807ecb6bb73205cbd85187403e09620de342cb0bc81180605ac235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_924c1ebe7104122f400de9853d8d31e715fa0b468076fc841d97b1bab2d8afe3->leave($__internal_924c1ebe7104122f400de9853d8d31e715fa0b468076fc841d97b1bab2d8afe3_prof);

        
        $__internal_14cbbd5c3c807ecb6bb73205cbd85187403e09620de342cb0bc81180605ac235->leave($__internal_14cbbd5c3c807ecb6bb73205cbd85187403e09620de342cb0bc81180605ac235_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
