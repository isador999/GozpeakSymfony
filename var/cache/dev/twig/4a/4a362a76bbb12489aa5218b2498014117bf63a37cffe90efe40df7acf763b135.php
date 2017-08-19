<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_464c6167f8ca2490d2a0afd51fb369b2b491bfb9f9e72d194875d9901ba2d706 extends Twig_Template
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
        $__internal_0694fce9ccdef2f5ffe15999a18760642f03c3c07b8a565ffdd59d4e262c8e99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0694fce9ccdef2f5ffe15999a18760642f03c3c07b8a565ffdd59d4e262c8e99->enter($__internal_0694fce9ccdef2f5ffe15999a18760642f03c3c07b8a565ffdd59d4e262c8e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_9eeb1d8865db4df8fd9ccddc6fe36e51053773bbd914ea25b8fb67765e702642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eeb1d8865db4df8fd9ccddc6fe36e51053773bbd914ea25b8fb67765e702642->enter($__internal_9eeb1d8865db4df8fd9ccddc6fe36e51053773bbd914ea25b8fb67765e702642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_0694fce9ccdef2f5ffe15999a18760642f03c3c07b8a565ffdd59d4e262c8e99->leave($__internal_0694fce9ccdef2f5ffe15999a18760642f03c3c07b8a565ffdd59d4e262c8e99_prof);

        
        $__internal_9eeb1d8865db4df8fd9ccddc6fe36e51053773bbd914ea25b8fb67765e702642->leave($__internal_9eeb1d8865db4df8fd9ccddc6fe36e51053773bbd914ea25b8fb67765e702642_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
