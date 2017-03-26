<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b0028a8547a599d0c3a38a0d7e27f7fca7b96e86b3d0ac0edaa54bac25fbed2a extends Twig_Template
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
        $__internal_e46c729d8626d5775e6202b9fa4b6d3c3afa026e53c5d622de159a50a43eb8a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e46c729d8626d5775e6202b9fa4b6d3c3afa026e53c5d622de159a50a43eb8a9->enter($__internal_e46c729d8626d5775e6202b9fa4b6d3c3afa026e53c5d622de159a50a43eb8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_4969cbb7120cefd4b4d9f284ac59602e516ecce01cc1b83c115c7dfecdc89884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4969cbb7120cefd4b4d9f284ac59602e516ecce01cc1b83c115c7dfecdc89884->enter($__internal_4969cbb7120cefd4b4d9f284ac59602e516ecce01cc1b83c115c7dfecdc89884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_e46c729d8626d5775e6202b9fa4b6d3c3afa026e53c5d622de159a50a43eb8a9->leave($__internal_e46c729d8626d5775e6202b9fa4b6d3c3afa026e53c5d622de159a50a43eb8a9_prof);

        
        $__internal_4969cbb7120cefd4b4d9f284ac59602e516ecce01cc1b83c115c7dfecdc89884->leave($__internal_4969cbb7120cefd4b4d9f284ac59602e516ecce01cc1b83c115c7dfecdc89884_prof);

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
", "@Framework/FormTable/form_row.html.php", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
