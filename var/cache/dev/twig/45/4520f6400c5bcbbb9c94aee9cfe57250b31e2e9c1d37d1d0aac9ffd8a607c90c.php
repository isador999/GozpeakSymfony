<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_c68e8f3556d491c6a7920c412510dd2829b44d6b0957808f7a1412d0e2a0a883 extends Twig_Template
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
        $__internal_021a868a387acf78aa5bedaa2725fd8b83553e0bc7a25839728de655f5186b6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_021a868a387acf78aa5bedaa2725fd8b83553e0bc7a25839728de655f5186b6a->enter($__internal_021a868a387acf78aa5bedaa2725fd8b83553e0bc7a25839728de655f5186b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_928e284a0c6ab47f7d361a5f38c16faaa013320f78b7c34c613c157780dcc3e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_928e284a0c6ab47f7d361a5f38c16faaa013320f78b7c34c613c157780dcc3e9->enter($__internal_928e284a0c6ab47f7d361a5f38c16faaa013320f78b7c34c613c157780dcc3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_021a868a387acf78aa5bedaa2725fd8b83553e0bc7a25839728de655f5186b6a->leave($__internal_021a868a387acf78aa5bedaa2725fd8b83553e0bc7a25839728de655f5186b6a_prof);

        
        $__internal_928e284a0c6ab47f7d361a5f38c16faaa013320f78b7c34c613c157780dcc3e9->leave($__internal_928e284a0c6ab47f7d361a5f38c16faaa013320f78b7c34c613c157780dcc3e9_prof);

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
", "@Framework/FormTable/button_row.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
