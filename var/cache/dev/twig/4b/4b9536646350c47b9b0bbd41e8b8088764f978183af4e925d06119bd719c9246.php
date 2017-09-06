<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_309d080f5974df84644bd4e4095d9e0c79c337c730538a651b6f3c6c15f236eb extends Twig_Template
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
        $__internal_f822ae7280a8a81d68f9038c24f9d828abeebb1ea845ae7ff48b6899d5bf327a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f822ae7280a8a81d68f9038c24f9d828abeebb1ea845ae7ff48b6899d5bf327a->enter($__internal_f822ae7280a8a81d68f9038c24f9d828abeebb1ea845ae7ff48b6899d5bf327a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_ff62f3603c46aaf0527d29a1f3f30da0a26cdeaef762bfe0e7d615bbdb820293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff62f3603c46aaf0527d29a1f3f30da0a26cdeaef762bfe0e7d615bbdb820293->enter($__internal_ff62f3603c46aaf0527d29a1f3f30da0a26cdeaef762bfe0e7d615bbdb820293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f822ae7280a8a81d68f9038c24f9d828abeebb1ea845ae7ff48b6899d5bf327a->leave($__internal_f822ae7280a8a81d68f9038c24f9d828abeebb1ea845ae7ff48b6899d5bf327a_prof);

        
        $__internal_ff62f3603c46aaf0527d29a1f3f30da0a26cdeaef762bfe0e7d615bbdb820293->leave($__internal_ff62f3603c46aaf0527d29a1f3f30da0a26cdeaef762bfe0e7d615bbdb820293_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
