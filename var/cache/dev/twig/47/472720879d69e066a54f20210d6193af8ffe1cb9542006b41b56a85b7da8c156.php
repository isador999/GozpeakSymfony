<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_e604c17d60b9bbb8f9cac0322a678f018970625992eb1bc06a579c5eff88914b extends Twig_Template
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
        $__internal_234364088e59f3d02404ea27dcefbe3a1246dc75b4a7eb71c8d95160751e8f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_234364088e59f3d02404ea27dcefbe3a1246dc75b4a7eb71c8d95160751e8f8e->enter($__internal_234364088e59f3d02404ea27dcefbe3a1246dc75b4a7eb71c8d95160751e8f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_e034dc1c26d8fe1bf7886d42fe1d78f7cba90e42d19bb77bf811600fad2c45e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e034dc1c26d8fe1bf7886d42fe1d78f7cba90e42d19bb77bf811600fad2c45e8->enter($__internal_e034dc1c26d8fe1bf7886d42fe1d78f7cba90e42d19bb77bf811600fad2c45e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_234364088e59f3d02404ea27dcefbe3a1246dc75b4a7eb71c8d95160751e8f8e->leave($__internal_234364088e59f3d02404ea27dcefbe3a1246dc75b4a7eb71c8d95160751e8f8e_prof);

        
        $__internal_e034dc1c26d8fe1bf7886d42fe1d78f7cba90e42d19bb77bf811600fad2c45e8->leave($__internal_e034dc1c26d8fe1bf7886d42fe1d78f7cba90e42d19bb77bf811600fad2c45e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
