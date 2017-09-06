<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9553fa96834c0ab4dcb8de3e70f72131636b26386dd26bde3b020531765d74b9 extends Twig_Template
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
        $__internal_df43c25fc2e5ac6b20195e0fe6b010bf99799c89f0ae76a298ba089a41f86288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df43c25fc2e5ac6b20195e0fe6b010bf99799c89f0ae76a298ba089a41f86288->enter($__internal_df43c25fc2e5ac6b20195e0fe6b010bf99799c89f0ae76a298ba089a41f86288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_cce496b4b725f4f452d2bbacddd9e5d0477fedb0bf0d8477c0e9eb0bf66c69bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce496b4b725f4f452d2bbacddd9e5d0477fedb0bf0d8477c0e9eb0bf66c69bf->enter($__internal_cce496b4b725f4f452d2bbacddd9e5d0477fedb0bf0d8477c0e9eb0bf66c69bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_df43c25fc2e5ac6b20195e0fe6b010bf99799c89f0ae76a298ba089a41f86288->leave($__internal_df43c25fc2e5ac6b20195e0fe6b010bf99799c89f0ae76a298ba089a41f86288_prof);

        
        $__internal_cce496b4b725f4f452d2bbacddd9e5d0477fedb0bf0d8477c0e9eb0bf66c69bf->leave($__internal_cce496b4b725f4f452d2bbacddd9e5d0477fedb0bf0d8477c0e9eb0bf66c69bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
