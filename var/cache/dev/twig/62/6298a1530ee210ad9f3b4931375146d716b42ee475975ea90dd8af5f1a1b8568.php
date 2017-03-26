<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_49c05e13b8949c84e9e73a70a98e15cd00313f651e3a93dc2a03709a6e89049b extends Twig_Template
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
        $__internal_c210123b97be2c39fc10197fbcbe9526aae2c7ffc8c179174743e2f896677f12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c210123b97be2c39fc10197fbcbe9526aae2c7ffc8c179174743e2f896677f12->enter($__internal_c210123b97be2c39fc10197fbcbe9526aae2c7ffc8c179174743e2f896677f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_2c2618525a30b863f9d4fa706f041d5aeac982e68f0af95b830fc65d4d0f131b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c2618525a30b863f9d4fa706f041d5aeac982e68f0af95b830fc65d4d0f131b->enter($__internal_2c2618525a30b863f9d4fa706f041d5aeac982e68f0af95b830fc65d4d0f131b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_c210123b97be2c39fc10197fbcbe9526aae2c7ffc8c179174743e2f896677f12->leave($__internal_c210123b97be2c39fc10197fbcbe9526aae2c7ffc8c179174743e2f896677f12_prof);

        
        $__internal_2c2618525a30b863f9d4fa706f041d5aeac982e68f0af95b830fc65d4d0f131b->leave($__internal_2c2618525a30b863f9d4fa706f041d5aeac982e68f0af95b830fc65d4d0f131b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
