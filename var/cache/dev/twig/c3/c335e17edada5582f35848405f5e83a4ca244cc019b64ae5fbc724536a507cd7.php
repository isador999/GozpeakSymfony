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
        $__internal_d38b0348a5b415353c1159fa398a48ed3d98a2f93113498df176600dd16ce5fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d38b0348a5b415353c1159fa398a48ed3d98a2f93113498df176600dd16ce5fc->enter($__internal_d38b0348a5b415353c1159fa398a48ed3d98a2f93113498df176600dd16ce5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_e9f5063d2631b22b434d0b47a369637750ad5382db2b69e260f2290866dd314a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9f5063d2631b22b434d0b47a369637750ad5382db2b69e260f2290866dd314a->enter($__internal_e9f5063d2631b22b434d0b47a369637750ad5382db2b69e260f2290866dd314a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d38b0348a5b415353c1159fa398a48ed3d98a2f93113498df176600dd16ce5fc->leave($__internal_d38b0348a5b415353c1159fa398a48ed3d98a2f93113498df176600dd16ce5fc_prof);

        
        $__internal_e9f5063d2631b22b434d0b47a369637750ad5382db2b69e260f2290866dd314a->leave($__internal_e9f5063d2631b22b434d0b47a369637750ad5382db2b69e260f2290866dd314a_prof);

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
