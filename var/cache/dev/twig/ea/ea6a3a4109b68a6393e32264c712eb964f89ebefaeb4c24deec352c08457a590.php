<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_4969bea49e290217815879578197f07e8b206b62a37f387e4f6d1d30db41b5f6 extends Twig_Template
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
        $__internal_240a33d58948d34875745fd7fcc905cfedb548c1dcbeb6dcae884e4e4c75d89c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_240a33d58948d34875745fd7fcc905cfedb548c1dcbeb6dcae884e4e4c75d89c->enter($__internal_240a33d58948d34875745fd7fcc905cfedb548c1dcbeb6dcae884e4e4c75d89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_ab3777bcfa54a471e2e7f4a7ccfbf35679a746a75608855d3c29f4b2d9e980a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab3777bcfa54a471e2e7f4a7ccfbf35679a746a75608855d3c29f4b2d9e980a0->enter($__internal_ab3777bcfa54a471e2e7f4a7ccfbf35679a746a75608855d3c29f4b2d9e980a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_240a33d58948d34875745fd7fcc905cfedb548c1dcbeb6dcae884e4e4c75d89c->leave($__internal_240a33d58948d34875745fd7fcc905cfedb548c1dcbeb6dcae884e4e4c75d89c_prof);

        
        $__internal_ab3777bcfa54a471e2e7f4a7ccfbf35679a746a75608855d3c29f4b2d9e980a0->leave($__internal_ab3777bcfa54a471e2e7f4a7ccfbf35679a746a75608855d3c29f4b2d9e980a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
