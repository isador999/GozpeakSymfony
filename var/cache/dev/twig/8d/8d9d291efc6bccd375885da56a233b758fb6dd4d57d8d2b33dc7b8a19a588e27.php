<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_9ee74711064f84c8aafc5e578c9732d32ad9184033e0190a76f6eb7e38ed4620 extends Twig_Template
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
        $__internal_64bfa92b783de96883aef3bfeaeeb2bdb3756784970fa394eb8075f4d2754d4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64bfa92b783de96883aef3bfeaeeb2bdb3756784970fa394eb8075f4d2754d4e->enter($__internal_64bfa92b783de96883aef3bfeaeeb2bdb3756784970fa394eb8075f4d2754d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_b2fa86d33744c21bb61f267316fed17ad5ffb16e38856761520d50fc166c79f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2fa86d33744c21bb61f267316fed17ad5ffb16e38856761520d50fc166c79f3->enter($__internal_b2fa86d33744c21bb61f267316fed17ad5ffb16e38856761520d50fc166c79f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_64bfa92b783de96883aef3bfeaeeb2bdb3756784970fa394eb8075f4d2754d4e->leave($__internal_64bfa92b783de96883aef3bfeaeeb2bdb3756784970fa394eb8075f4d2754d4e_prof);

        
        $__internal_b2fa86d33744c21bb61f267316fed17ad5ffb16e38856761520d50fc166c79f3->leave($__internal_b2fa86d33744c21bb61f267316fed17ad5ffb16e38856761520d50fc166c79f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
