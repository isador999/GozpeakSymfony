<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_088aed55407e96c4139af374847046f6fd0123ccbb4bffe982caf1fab75cd443 extends Twig_Template
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
        $__internal_d4edc53899fb7188428804799f1554d23c4af5c4bfb82e4c7e42537743e65459 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4edc53899fb7188428804799f1554d23c4af5c4bfb82e4c7e42537743e65459->enter($__internal_d4edc53899fb7188428804799f1554d23c4af5c4bfb82e4c7e42537743e65459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_3443e43a78839ba61639da2daa38f887adaa9e91940b23de7fd48970b5a85902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3443e43a78839ba61639da2daa38f887adaa9e91940b23de7fd48970b5a85902->enter($__internal_3443e43a78839ba61639da2daa38f887adaa9e91940b23de7fd48970b5a85902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_d4edc53899fb7188428804799f1554d23c4af5c4bfb82e4c7e42537743e65459->leave($__internal_d4edc53899fb7188428804799f1554d23c4af5c4bfb82e4c7e42537743e65459_prof);

        
        $__internal_3443e43a78839ba61639da2daa38f887adaa9e91940b23de7fd48970b5a85902->leave($__internal_3443e43a78839ba61639da2daa38f887adaa9e91940b23de7fd48970b5a85902_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
