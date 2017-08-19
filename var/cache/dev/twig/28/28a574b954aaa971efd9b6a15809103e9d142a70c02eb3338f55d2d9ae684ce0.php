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
        $__internal_105b072d896eb1e94d29958d37797fbb6de36f16fdcfaab516716f7a2a982b79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_105b072d896eb1e94d29958d37797fbb6de36f16fdcfaab516716f7a2a982b79->enter($__internal_105b072d896eb1e94d29958d37797fbb6de36f16fdcfaab516716f7a2a982b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_5b441aa2c19bc59bca3b2fdca095db5cfbd5e0ba21cb97071aff47fa72ddf585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b441aa2c19bc59bca3b2fdca095db5cfbd5e0ba21cb97071aff47fa72ddf585->enter($__internal_5b441aa2c19bc59bca3b2fdca095db5cfbd5e0ba21cb97071aff47fa72ddf585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_105b072d896eb1e94d29958d37797fbb6de36f16fdcfaab516716f7a2a982b79->leave($__internal_105b072d896eb1e94d29958d37797fbb6de36f16fdcfaab516716f7a2a982b79_prof);

        
        $__internal_5b441aa2c19bc59bca3b2fdca095db5cfbd5e0ba21cb97071aff47fa72ddf585->leave($__internal_5b441aa2c19bc59bca3b2fdca095db5cfbd5e0ba21cb97071aff47fa72ddf585_prof);

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
