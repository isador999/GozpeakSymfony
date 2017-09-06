<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_9c854dee4c01cfc49af56dcdb13b73fdc20856c51455b844d0c3a16eefcc6a8e extends Twig_Template
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
        $__internal_82a5c6bde36107b63b55840dad4f9a0717606c9d1573ce11aad56e9ced730552 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82a5c6bde36107b63b55840dad4f9a0717606c9d1573ce11aad56e9ced730552->enter($__internal_82a5c6bde36107b63b55840dad4f9a0717606c9d1573ce11aad56e9ced730552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_cc2bc3bfe02ea2f8895bc1ba64c98e067aa31d218473911839c52dbd88a9e3a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc2bc3bfe02ea2f8895bc1ba64c98e067aa31d218473911839c52dbd88a9e3a9->enter($__internal_cc2bc3bfe02ea2f8895bc1ba64c98e067aa31d218473911839c52dbd88a9e3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_82a5c6bde36107b63b55840dad4f9a0717606c9d1573ce11aad56e9ced730552->leave($__internal_82a5c6bde36107b63b55840dad4f9a0717606c9d1573ce11aad56e9ced730552_prof);

        
        $__internal_cc2bc3bfe02ea2f8895bc1ba64c98e067aa31d218473911839c52dbd88a9e3a9->leave($__internal_cc2bc3bfe02ea2f8895bc1ba64c98e067aa31d218473911839c52dbd88a9e3a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
