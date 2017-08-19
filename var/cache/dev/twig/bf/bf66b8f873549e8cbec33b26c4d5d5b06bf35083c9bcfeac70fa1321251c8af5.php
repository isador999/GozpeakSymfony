<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_1babc699651978b36e072d15ab6d3e370ff62d9367e6aff85e4701d8da4a7608 extends Twig_Template
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
        $__internal_38fc811665b603aa0877b5410d509da0f274d27213623e01b6dc4db9478ed99a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38fc811665b603aa0877b5410d509da0f274d27213623e01b6dc4db9478ed99a->enter($__internal_38fc811665b603aa0877b5410d509da0f274d27213623e01b6dc4db9478ed99a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_99f66d571d1c6b3e906e9f9ad00cfa0dfec24e37fa41cb0924cab0d1e298c379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f66d571d1c6b3e906e9f9ad00cfa0dfec24e37fa41cb0924cab0d1e298c379->enter($__internal_99f66d571d1c6b3e906e9f9ad00cfa0dfec24e37fa41cb0924cab0d1e298c379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_38fc811665b603aa0877b5410d509da0f274d27213623e01b6dc4db9478ed99a->leave($__internal_38fc811665b603aa0877b5410d509da0f274d27213623e01b6dc4db9478ed99a_prof);

        
        $__internal_99f66d571d1c6b3e906e9f9ad00cfa0dfec24e37fa41cb0924cab0d1e298c379->leave($__internal_99f66d571d1c6b3e906e9f9ad00cfa0dfec24e37fa41cb0924cab0d1e298c379_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
