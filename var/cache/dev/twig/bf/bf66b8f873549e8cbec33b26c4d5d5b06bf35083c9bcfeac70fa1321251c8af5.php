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
        $__internal_d269a00f4df72313df8cabbe0b40b4bf72496fabf0bd566190bacd91c6184b1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d269a00f4df72313df8cabbe0b40b4bf72496fabf0bd566190bacd91c6184b1a->enter($__internal_d269a00f4df72313df8cabbe0b40b4bf72496fabf0bd566190bacd91c6184b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_9ba07ba0de01f38fb0750c746a6ef24855ba024e8c452b58cf435dd07f2512bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ba07ba0de01f38fb0750c746a6ef24855ba024e8c452b58cf435dd07f2512bb->enter($__internal_9ba07ba0de01f38fb0750c746a6ef24855ba024e8c452b58cf435dd07f2512bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_d269a00f4df72313df8cabbe0b40b4bf72496fabf0bd566190bacd91c6184b1a->leave($__internal_d269a00f4df72313df8cabbe0b40b4bf72496fabf0bd566190bacd91c6184b1a_prof);

        
        $__internal_9ba07ba0de01f38fb0750c746a6ef24855ba024e8c452b58cf435dd07f2512bb->leave($__internal_9ba07ba0de01f38fb0750c746a6ef24855ba024e8c452b58cf435dd07f2512bb_prof);

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
