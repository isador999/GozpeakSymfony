<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_48a9fb388dc0766d884c9606f4b4cc46b7a959692cb4fc2a88e9557df80e099b extends Twig_Template
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
        $__internal_996ab5f4a40a374d0b89ab6e7f722fa6252d2c9f6f769f66750ba6c311fb7d88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_996ab5f4a40a374d0b89ab6e7f722fa6252d2c9f6f769f66750ba6c311fb7d88->enter($__internal_996ab5f4a40a374d0b89ab6e7f722fa6252d2c9f6f769f66750ba6c311fb7d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_afa71745cd4af82f3e42f5f8702fde2e0311527733d7a9edd080d2f9c241e5ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa71745cd4af82f3e42f5f8702fde2e0311527733d7a9edd080d2f9c241e5ac->enter($__internal_afa71745cd4af82f3e42f5f8702fde2e0311527733d7a9edd080d2f9c241e5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_996ab5f4a40a374d0b89ab6e7f722fa6252d2c9f6f769f66750ba6c311fb7d88->leave($__internal_996ab5f4a40a374d0b89ab6e7f722fa6252d2c9f6f769f66750ba6c311fb7d88_prof);

        
        $__internal_afa71745cd4af82f3e42f5f8702fde2e0311527733d7a9edd080d2f9c241e5ac->leave($__internal_afa71745cd4af82f3e42f5f8702fde2e0311527733d7a9edd080d2f9c241e5ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
