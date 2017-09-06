<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_c6f06d42be8bf90389e58359ef7b6d90c87b52f4126969fecd20e7ec7bc4287d extends Twig_Template
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
        $__internal_843ab7c604e8022890a2f56837cbf797dbeb76587b99a1c463c52e42298c2437 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_843ab7c604e8022890a2f56837cbf797dbeb76587b99a1c463c52e42298c2437->enter($__internal_843ab7c604e8022890a2f56837cbf797dbeb76587b99a1c463c52e42298c2437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_798b5f7ea6783e7d2fdbaf3aeb1d439a94b38c61f8f0526484160efd98ee65fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_798b5f7ea6783e7d2fdbaf3aeb1d439a94b38c61f8f0526484160efd98ee65fa->enter($__internal_798b5f7ea6783e7d2fdbaf3aeb1d439a94b38c61f8f0526484160efd98ee65fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_843ab7c604e8022890a2f56837cbf797dbeb76587b99a1c463c52e42298c2437->leave($__internal_843ab7c604e8022890a2f56837cbf797dbeb76587b99a1c463c52e42298c2437_prof);

        
        $__internal_798b5f7ea6783e7d2fdbaf3aeb1d439a94b38c61f8f0526484160efd98ee65fa->leave($__internal_798b5f7ea6783e7d2fdbaf3aeb1d439a94b38c61f8f0526484160efd98ee65fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
