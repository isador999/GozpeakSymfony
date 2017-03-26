<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_e6edc42f55d3c39052e08df7255db127de489cbd08a73c6216bfac31e535808d extends Twig_Template
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
        $__internal_a43c8203b2422069772e802936dd03d65ea89ce9ac2ab2dca144ef0529e463d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a43c8203b2422069772e802936dd03d65ea89ce9ac2ab2dca144ef0529e463d5->enter($__internal_a43c8203b2422069772e802936dd03d65ea89ce9ac2ab2dca144ef0529e463d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_3ca7f442af57b14e16d98adc56feaa061f9a6d711b0c3bbac4389f7b9bd5cc86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ca7f442af57b14e16d98adc56feaa061f9a6d711b0c3bbac4389f7b9bd5cc86->enter($__internal_3ca7f442af57b14e16d98adc56feaa061f9a6d711b0c3bbac4389f7b9bd5cc86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_a43c8203b2422069772e802936dd03d65ea89ce9ac2ab2dca144ef0529e463d5->leave($__internal_a43c8203b2422069772e802936dd03d65ea89ce9ac2ab2dca144ef0529e463d5_prof);

        
        $__internal_3ca7f442af57b14e16d98adc56feaa061f9a6d711b0c3bbac4389f7b9bd5cc86->leave($__internal_3ca7f442af57b14e16d98adc56feaa061f9a6d711b0c3bbac4389f7b9bd5cc86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
