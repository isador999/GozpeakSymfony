<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_95d7afa5dccedf33d5c5855dd7cff6cece12ad2c9179c95e5f380d3d7bc24e66 extends Twig_Template
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
        $__internal_43f3e4958ce195f0a6336529246b1fd1bdd46c1f9d82fa85a6d1d6a1b8788e15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43f3e4958ce195f0a6336529246b1fd1bdd46c1f9d82fa85a6d1d6a1b8788e15->enter($__internal_43f3e4958ce195f0a6336529246b1fd1bdd46c1f9d82fa85a6d1d6a1b8788e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_ba6c552b85bfceacd19565e70b9e2088db981deead20044862c08119b90cf41b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba6c552b85bfceacd19565e70b9e2088db981deead20044862c08119b90cf41b->enter($__internal_ba6c552b85bfceacd19565e70b9e2088db981deead20044862c08119b90cf41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_43f3e4958ce195f0a6336529246b1fd1bdd46c1f9d82fa85a6d1d6a1b8788e15->leave($__internal_43f3e4958ce195f0a6336529246b1fd1bdd46c1f9d82fa85a6d1d6a1b8788e15_prof);

        
        $__internal_ba6c552b85bfceacd19565e70b9e2088db981deead20044862c08119b90cf41b->leave($__internal_ba6c552b85bfceacd19565e70b9e2088db981deead20044862c08119b90cf41b_prof);

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
", "@Framework/Form/integer_widget.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
