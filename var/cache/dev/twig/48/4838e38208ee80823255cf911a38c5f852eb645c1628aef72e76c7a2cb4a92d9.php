<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_8a72aa64d0b831e00b010149ab4ce976eb1e3850427d11304701fa2c6628539c extends Twig_Template
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
        $__internal_cf3cf547d9e1de9f64c3e5d087dfdfed685c76c9c8b813b5ad79893c418105f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf3cf547d9e1de9f64c3e5d087dfdfed685c76c9c8b813b5ad79893c418105f9->enter($__internal_cf3cf547d9e1de9f64c3e5d087dfdfed685c76c9c8b813b5ad79893c418105f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_8702e317c1b3972907fc96240ac74dc53b980b647142d85af1a6adba7205a504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8702e317c1b3972907fc96240ac74dc53b980b647142d85af1a6adba7205a504->enter($__internal_8702e317c1b3972907fc96240ac74dc53b980b647142d85af1a6adba7205a504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_cf3cf547d9e1de9f64c3e5d087dfdfed685c76c9c8b813b5ad79893c418105f9->leave($__internal_cf3cf547d9e1de9f64c3e5d087dfdfed685c76c9c8b813b5ad79893c418105f9_prof);

        
        $__internal_8702e317c1b3972907fc96240ac74dc53b980b647142d85af1a6adba7205a504->leave($__internal_8702e317c1b3972907fc96240ac74dc53b980b647142d85af1a6adba7205a504_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
