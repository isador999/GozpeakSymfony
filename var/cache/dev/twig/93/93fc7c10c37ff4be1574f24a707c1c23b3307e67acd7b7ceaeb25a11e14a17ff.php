<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_5e44c2d9d8b77ca90ed4d6bec19c71d84810f4d15ae830c7d16db70331335456 extends Twig_Template
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
        $__internal_d6521858500fdda0b11fcf4e40d748d6ddef1affeff007b2cf01cdd393641634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6521858500fdda0b11fcf4e40d748d6ddef1affeff007b2cf01cdd393641634->enter($__internal_d6521858500fdda0b11fcf4e40d748d6ddef1affeff007b2cf01cdd393641634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_c4eefc4f2792e00c48d8b7315b3631fcd506e108fb0b26144c8482950e1724f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4eefc4f2792e00c48d8b7315b3631fcd506e108fb0b26144c8482950e1724f9->enter($__internal_c4eefc4f2792e00c48d8b7315b3631fcd506e108fb0b26144c8482950e1724f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_d6521858500fdda0b11fcf4e40d748d6ddef1affeff007b2cf01cdd393641634->leave($__internal_d6521858500fdda0b11fcf4e40d748d6ddef1affeff007b2cf01cdd393641634_prof);

        
        $__internal_c4eefc4f2792e00c48d8b7315b3631fcd506e108fb0b26144c8482950e1724f9->leave($__internal_c4eefc4f2792e00c48d8b7315b3631fcd506e108fb0b26144c8482950e1724f9_prof);

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
", "@Framework/Form/attributes.html.php", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
