<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_3ca726a765665cdc1618bd7ebd4ce7e48793bb9f06479b81ea76d7ee186b491a extends Twig_Template
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
        $__internal_4a99a82194cd9be0837c3e972dfcbf861822992d5f74edf92510143e87f7af0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a99a82194cd9be0837c3e972dfcbf861822992d5f74edf92510143e87f7af0f->enter($__internal_4a99a82194cd9be0837c3e972dfcbf861822992d5f74edf92510143e87f7af0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_d585ce87dd7daf9ab00db6858f673e1c9d310ace511a9098e96447db3c18ba07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d585ce87dd7daf9ab00db6858f673e1c9d310ace511a9098e96447db3c18ba07->enter($__internal_d585ce87dd7daf9ab00db6858f673e1c9d310ace511a9098e96447db3c18ba07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_4a99a82194cd9be0837c3e972dfcbf861822992d5f74edf92510143e87f7af0f->leave($__internal_4a99a82194cd9be0837c3e972dfcbf861822992d5f74edf92510143e87f7af0f_prof);

        
        $__internal_d585ce87dd7daf9ab00db6858f673e1c9d310ace511a9098e96447db3c18ba07->leave($__internal_d585ce87dd7daf9ab00db6858f673e1c9d310ace511a9098e96447db3c18ba07_prof);

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
", "@Framework/Form/choice_widget.html.php", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
