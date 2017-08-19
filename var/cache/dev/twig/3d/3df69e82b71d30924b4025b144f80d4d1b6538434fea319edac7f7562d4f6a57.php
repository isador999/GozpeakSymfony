<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_4637bdf881b03616502cff663e952e1de11fb13ee777e5412be7d6c409e8894f extends Twig_Template
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
        $__internal_2d4aa3eac20f779fcfd93f03f3e5602531d81f9e6279b60eef791fd7828c7a16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d4aa3eac20f779fcfd93f03f3e5602531d81f9e6279b60eef791fd7828c7a16->enter($__internal_2d4aa3eac20f779fcfd93f03f3e5602531d81f9e6279b60eef791fd7828c7a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_e3e397cc75c9d36d47a23d8ec6febd6c1bad3196816b6f77a71cb34801cbc22c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3e397cc75c9d36d47a23d8ec6febd6c1bad3196816b6f77a71cb34801cbc22c->enter($__internal_e3e397cc75c9d36d47a23d8ec6febd6c1bad3196816b6f77a71cb34801cbc22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_2d4aa3eac20f779fcfd93f03f3e5602531d81f9e6279b60eef791fd7828c7a16->leave($__internal_2d4aa3eac20f779fcfd93f03f3e5602531d81f9e6279b60eef791fd7828c7a16_prof);

        
        $__internal_e3e397cc75c9d36d47a23d8ec6febd6c1bad3196816b6f77a71cb34801cbc22c->leave($__internal_e3e397cc75c9d36d47a23d8ec6febd6c1bad3196816b6f77a71cb34801cbc22c_prof);

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
", "@Framework/Form/submit_widget.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
