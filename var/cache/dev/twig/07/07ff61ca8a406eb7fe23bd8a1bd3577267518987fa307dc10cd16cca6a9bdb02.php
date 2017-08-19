<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_5b92c25c5c9b2f32d8bbc27cab807545e111bb03e7b13183f129d14b34485e3a extends Twig_Template
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
        $__internal_c59afecfc477bb56fd8089ecf30f93c142e4ccc1aa18b9b9f0c597da4c8b6af7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c59afecfc477bb56fd8089ecf30f93c142e4ccc1aa18b9b9f0c597da4c8b6af7->enter($__internal_c59afecfc477bb56fd8089ecf30f93c142e4ccc1aa18b9b9f0c597da4c8b6af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_7b9f74ca4da4cc0dac2e325345744a2467674a5e1d54f8cd8ed5c04ac765af9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b9f74ca4da4cc0dac2e325345744a2467674a5e1d54f8cd8ed5c04ac765af9b->enter($__internal_7b9f74ca4da4cc0dac2e325345744a2467674a5e1d54f8cd8ed5c04ac765af9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c59afecfc477bb56fd8089ecf30f93c142e4ccc1aa18b9b9f0c597da4c8b6af7->leave($__internal_c59afecfc477bb56fd8089ecf30f93c142e4ccc1aa18b9b9f0c597da4c8b6af7_prof);

        
        $__internal_7b9f74ca4da4cc0dac2e325345744a2467674a5e1d54f8cd8ed5c04ac765af9b->leave($__internal_7b9f74ca4da4cc0dac2e325345744a2467674a5e1d54f8cd8ed5c04ac765af9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
