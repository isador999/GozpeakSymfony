<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_74a162d103971931d5ccae6b760f0f02c73d5992f8a15a5b35260eefc2ea096d extends Twig_Template
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
        $__internal_5cc7bb1c6aa132fa6c1fb8560c22236fa7bb81dbdd3dc1adadb3411fe2e313bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cc7bb1c6aa132fa6c1fb8560c22236fa7bb81dbdd3dc1adadb3411fe2e313bb->enter($__internal_5cc7bb1c6aa132fa6c1fb8560c22236fa7bb81dbdd3dc1adadb3411fe2e313bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_e0393279c645905f111e6c97014a21ab30bcc2eaa1803b5a69556f752130e0ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0393279c645905f111e6c97014a21ab30bcc2eaa1803b5a69556f752130e0ed->enter($__internal_e0393279c645905f111e6c97014a21ab30bcc2eaa1803b5a69556f752130e0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5cc7bb1c6aa132fa6c1fb8560c22236fa7bb81dbdd3dc1adadb3411fe2e313bb->leave($__internal_5cc7bb1c6aa132fa6c1fb8560c22236fa7bb81dbdd3dc1adadb3411fe2e313bb_prof);

        
        $__internal_e0393279c645905f111e6c97014a21ab30bcc2eaa1803b5a69556f752130e0ed->leave($__internal_e0393279c645905f111e6c97014a21ab30bcc2eaa1803b5a69556f752130e0ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
