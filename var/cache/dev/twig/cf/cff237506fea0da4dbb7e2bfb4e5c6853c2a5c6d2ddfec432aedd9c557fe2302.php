<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_ec0baa71115482ab6e4854145f4780a8cbbd41afabbc80ad2a6bb33c9d72a774 extends Twig_Template
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
        $__internal_63afb386bceb1026a1ccf7068369b5195580815d971a7739651405d327a48789 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63afb386bceb1026a1ccf7068369b5195580815d971a7739651405d327a48789->enter($__internal_63afb386bceb1026a1ccf7068369b5195580815d971a7739651405d327a48789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_e559b5d91d33ef3f1d3cfc0b6528e2d59b92caf9e0b6e810159c02dacb5e865a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e559b5d91d33ef3f1d3cfc0b6528e2d59b92caf9e0b6e810159c02dacb5e865a->enter($__internal_e559b5d91d33ef3f1d3cfc0b6528e2d59b92caf9e0b6e810159c02dacb5e865a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_63afb386bceb1026a1ccf7068369b5195580815d971a7739651405d327a48789->leave($__internal_63afb386bceb1026a1ccf7068369b5195580815d971a7739651405d327a48789_prof);

        
        $__internal_e559b5d91d33ef3f1d3cfc0b6528e2d59b92caf9e0b6e810159c02dacb5e865a->leave($__internal_e559b5d91d33ef3f1d3cfc0b6528e2d59b92caf9e0b6e810159c02dacb5e865a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
