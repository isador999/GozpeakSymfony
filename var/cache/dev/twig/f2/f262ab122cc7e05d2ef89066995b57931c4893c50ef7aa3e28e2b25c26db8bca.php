<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_fe527007acf5d27a058d7cc714e187ad085376dff826d0e7e109bf7efeaf0710 extends Twig_Template
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
        $__internal_95e3a6592d5cc9943e0d73c9f4b065da5ece3d046f591c4002045d42850c6cf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95e3a6592d5cc9943e0d73c9f4b065da5ece3d046f591c4002045d42850c6cf8->enter($__internal_95e3a6592d5cc9943e0d73c9f4b065da5ece3d046f591c4002045d42850c6cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_8c6abfc9b90ab496ddc7ddd360718e05f568ec66ee46f561c619e03f520c772c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c6abfc9b90ab496ddc7ddd360718e05f568ec66ee46f561c619e03f520c772c->enter($__internal_8c6abfc9b90ab496ddc7ddd360718e05f568ec66ee46f561c619e03f520c772c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_95e3a6592d5cc9943e0d73c9f4b065da5ece3d046f591c4002045d42850c6cf8->leave($__internal_95e3a6592d5cc9943e0d73c9f4b065da5ece3d046f591c4002045d42850c6cf8_prof);

        
        $__internal_8c6abfc9b90ab496ddc7ddd360718e05f568ec66ee46f561c619e03f520c772c->leave($__internal_8c6abfc9b90ab496ddc7ddd360718e05f568ec66ee46f561c619e03f520c772c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
