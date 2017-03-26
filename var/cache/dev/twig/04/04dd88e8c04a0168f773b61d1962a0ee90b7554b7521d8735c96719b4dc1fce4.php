<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_20c2fdd99a640badbe60982cd2708a6e48cc13582239f3bb08e1b9d4217b3849 extends Twig_Template
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
        $__internal_3fad621e4b43e6a22eb33296d58e1e6d023f59157f9d2685dda2ae55a3632eff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fad621e4b43e6a22eb33296d58e1e6d023f59157f9d2685dda2ae55a3632eff->enter($__internal_3fad621e4b43e6a22eb33296d58e1e6d023f59157f9d2685dda2ae55a3632eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_3a9b153fa4b58ab5547312a8891d779c2a45434a42426c158ca669e7355a707d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a9b153fa4b58ab5547312a8891d779c2a45434a42426c158ca669e7355a707d->enter($__internal_3a9b153fa4b58ab5547312a8891d779c2a45434a42426c158ca669e7355a707d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_3fad621e4b43e6a22eb33296d58e1e6d023f59157f9d2685dda2ae55a3632eff->leave($__internal_3fad621e4b43e6a22eb33296d58e1e6d023f59157f9d2685dda2ae55a3632eff_prof);

        
        $__internal_3a9b153fa4b58ab5547312a8891d779c2a45434a42426c158ca669e7355a707d->leave($__internal_3a9b153fa4b58ab5547312a8891d779c2a45434a42426c158ca669e7355a707d_prof);

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
", "@Framework/Form/form_widget.html.php", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
