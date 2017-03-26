<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_21130c7f6407b251e9c21950ab66e05b328aafbe1c8ad2cf7cf4aa4ebc628683 extends Twig_Template
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
        $__internal_911d290ad21d53f3ddd3a904d29d4e5b1e964edfc583a5e2dd800eddda2308b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_911d290ad21d53f3ddd3a904d29d4e5b1e964edfc583a5e2dd800eddda2308b1->enter($__internal_911d290ad21d53f3ddd3a904d29d4e5b1e964edfc583a5e2dd800eddda2308b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_d198212512f2abfa179c3168f598f5eadebee02bc16088419cfaf353d3bc8a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d198212512f2abfa179c3168f598f5eadebee02bc16088419cfaf353d3bc8a31->enter($__internal_d198212512f2abfa179c3168f598f5eadebee02bc16088419cfaf353d3bc8a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_911d290ad21d53f3ddd3a904d29d4e5b1e964edfc583a5e2dd800eddda2308b1->leave($__internal_911d290ad21d53f3ddd3a904d29d4e5b1e964edfc583a5e2dd800eddda2308b1_prof);

        
        $__internal_d198212512f2abfa179c3168f598f5eadebee02bc16088419cfaf353d3bc8a31->leave($__internal_d198212512f2abfa179c3168f598f5eadebee02bc16088419cfaf353d3bc8a31_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
