<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0df2cea44e1bb327f796b5187471486a9f945c0dc7a10f71b8514e8bc3364cfd extends Twig_Template
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
        $__internal_84c41143dedf5345ce47e165924f8d0ce570012cca13800d209bfe7057eaa6a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84c41143dedf5345ce47e165924f8d0ce570012cca13800d209bfe7057eaa6a3->enter($__internal_84c41143dedf5345ce47e165924f8d0ce570012cca13800d209bfe7057eaa6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_331734075616fc0f41143460d5fc387163948ef3696c6d429c6522d07f6e2443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_331734075616fc0f41143460d5fc387163948ef3696c6d429c6522d07f6e2443->enter($__internal_331734075616fc0f41143460d5fc387163948ef3696c6d429c6522d07f6e2443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_84c41143dedf5345ce47e165924f8d0ce570012cca13800d209bfe7057eaa6a3->leave($__internal_84c41143dedf5345ce47e165924f8d0ce570012cca13800d209bfe7057eaa6a3_prof);

        
        $__internal_331734075616fc0f41143460d5fc387163948ef3696c6d429c6522d07f6e2443->leave($__internal_331734075616fc0f41143460d5fc387163948ef3696c6d429c6522d07f6e2443_prof);

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
", "@Framework/FormTable/hidden_row.html.php", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
