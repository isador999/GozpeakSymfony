<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_5b92c25c5c9b2f32d8bbc27cab807545e111bb03e7b13183f129d14b34485e3a extends Twig_Template
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
        $__internal_a7c151453599e3db90082f93abd57d3c4b6524907c46e7d2a871a352e4e0ea92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7c151453599e3db90082f93abd57d3c4b6524907c46e7d2a871a352e4e0ea92->enter($__internal_a7c151453599e3db90082f93abd57d3c4b6524907c46e7d2a871a352e4e0ea92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_52c36e383dd7cbc65115d06fa3798a3c85d124a09e74c1f431e44e5d421c2aa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52c36e383dd7cbc65115d06fa3798a3c85d124a09e74c1f431e44e5d421c2aa3->enter($__internal_52c36e383dd7cbc65115d06fa3798a3c85d124a09e74c1f431e44e5d421c2aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a7c151453599e3db90082f93abd57d3c4b6524907c46e7d2a871a352e4e0ea92->leave($__internal_a7c151453599e3db90082f93abd57d3c4b6524907c46e7d2a871a352e4e0ea92_prof);

        
        $__internal_52c36e383dd7cbc65115d06fa3798a3c85d124a09e74c1f431e44e5d421c2aa3->leave($__internal_52c36e383dd7cbc65115d06fa3798a3c85d124a09e74c1f431e44e5d421c2aa3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
