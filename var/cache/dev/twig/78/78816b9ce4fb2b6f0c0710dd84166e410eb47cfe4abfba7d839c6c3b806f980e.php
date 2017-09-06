<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_65cb3bc12bd1b53dab53bf8e0ca50a6d93882bad2bd31d200cde2cb8bf1ab86c extends Twig_Template
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
        $__internal_4909078a1d810fcc4e4ba624677166d3f3d9d11f8ec9cad5e1a33c821abd5818 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4909078a1d810fcc4e4ba624677166d3f3d9d11f8ec9cad5e1a33c821abd5818->enter($__internal_4909078a1d810fcc4e4ba624677166d3f3d9d11f8ec9cad5e1a33c821abd5818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_8dac379ff0415dc97d1b6752436f050445f4fd3248c87ca41a8a72dbc833b7f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dac379ff0415dc97d1b6752436f050445f4fd3248c87ca41a8a72dbc833b7f2->enter($__internal_8dac379ff0415dc97d1b6752436f050445f4fd3248c87ca41a8a72dbc833b7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_4909078a1d810fcc4e4ba624677166d3f3d9d11f8ec9cad5e1a33c821abd5818->leave($__internal_4909078a1d810fcc4e4ba624677166d3f3d9d11f8ec9cad5e1a33c821abd5818_prof);

        
        $__internal_8dac379ff0415dc97d1b6752436f050445f4fd3248c87ca41a8a72dbc833b7f2->leave($__internal_8dac379ff0415dc97d1b6752436f050445f4fd3248c87ca41a8a72dbc833b7f2_prof);

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
", "@Framework/FormTable/form_widget_compound.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
