<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_309d080f5974df84644bd4e4095d9e0c79c337c730538a651b6f3c6c15f236eb extends Twig_Template
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
        $__internal_57f8740f24cac8d07756708853910e6cfec0236c52ddeff7bf12283914eed3ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57f8740f24cac8d07756708853910e6cfec0236c52ddeff7bf12283914eed3ec->enter($__internal_57f8740f24cac8d07756708853910e6cfec0236c52ddeff7bf12283914eed3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_cac778ef571b5312926c9c416aa390e052e918b7330b2ed5f10694081a0a896b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac778ef571b5312926c9c416aa390e052e918b7330b2ed5f10694081a0a896b->enter($__internal_cac778ef571b5312926c9c416aa390e052e918b7330b2ed5f10694081a0a896b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_57f8740f24cac8d07756708853910e6cfec0236c52ddeff7bf12283914eed3ec->leave($__internal_57f8740f24cac8d07756708853910e6cfec0236c52ddeff7bf12283914eed3ec_prof);

        
        $__internal_cac778ef571b5312926c9c416aa390e052e918b7330b2ed5f10694081a0a896b->leave($__internal_cac778ef571b5312926c9c416aa390e052e918b7330b2ed5f10694081a0a896b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
