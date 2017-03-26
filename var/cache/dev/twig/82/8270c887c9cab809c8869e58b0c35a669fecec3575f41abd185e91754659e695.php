<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ebf05e586466d89badaed167526fa33f798d21d780b16c296530be20a407ec7a extends Twig_Template
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
        $__internal_68cf7b80303cf4518fdabad269c1b09292841d647189eb595094695ef10477e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68cf7b80303cf4518fdabad269c1b09292841d647189eb595094695ef10477e1->enter($__internal_68cf7b80303cf4518fdabad269c1b09292841d647189eb595094695ef10477e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_e9412f83241fdcf03e34e18a8d27b824c72d030ccb46e77fe3710255710e135d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9412f83241fdcf03e34e18a8d27b824c72d030ccb46e77fe3710255710e135d->enter($__internal_e9412f83241fdcf03e34e18a8d27b824c72d030ccb46e77fe3710255710e135d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_68cf7b80303cf4518fdabad269c1b09292841d647189eb595094695ef10477e1->leave($__internal_68cf7b80303cf4518fdabad269c1b09292841d647189eb595094695ef10477e1_prof);

        
        $__internal_e9412f83241fdcf03e34e18a8d27b824c72d030ccb46e77fe3710255710e135d->leave($__internal_e9412f83241fdcf03e34e18a8d27b824c72d030ccb46e77fe3710255710e135d_prof);

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
", "@Framework/Form/textarea_widget.html.php", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
