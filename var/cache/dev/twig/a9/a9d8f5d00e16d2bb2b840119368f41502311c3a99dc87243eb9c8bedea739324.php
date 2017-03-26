<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_ec9964fa15ddf64fd4350f2abe4273a3c7f2c4ed7ab69374bcb74ba3fc7f6757 extends Twig_Template
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
        $__internal_53e5a3b58079a25285315e764521c2a75bb6106b0cfe821117748ce75420876a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53e5a3b58079a25285315e764521c2a75bb6106b0cfe821117748ce75420876a->enter($__internal_53e5a3b58079a25285315e764521c2a75bb6106b0cfe821117748ce75420876a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_ba8238e7f716d25e384e1192d38621343b2214c3eef3a44cbb5553a3b0706737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba8238e7f716d25e384e1192d38621343b2214c3eef3a44cbb5553a3b0706737->enter($__internal_ba8238e7f716d25e384e1192d38621343b2214c3eef3a44cbb5553a3b0706737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_53e5a3b58079a25285315e764521c2a75bb6106b0cfe821117748ce75420876a->leave($__internal_53e5a3b58079a25285315e764521c2a75bb6106b0cfe821117748ce75420876a_prof);

        
        $__internal_ba8238e7f716d25e384e1192d38621343b2214c3eef3a44cbb5553a3b0706737->leave($__internal_ba8238e7f716d25e384e1192d38621343b2214c3eef3a44cbb5553a3b0706737_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
