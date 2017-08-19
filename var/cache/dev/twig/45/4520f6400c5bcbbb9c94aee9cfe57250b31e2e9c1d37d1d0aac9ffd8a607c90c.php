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
        $__internal_3bee2b11dade1dcbf796b2e7791847fb64adbc668791be339e7c5ca51fb627a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bee2b11dade1dcbf796b2e7791847fb64adbc668791be339e7c5ca51fb627a6->enter($__internal_3bee2b11dade1dcbf796b2e7791847fb64adbc668791be339e7c5ca51fb627a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_82cf6c06e4fdebb5d704c4f1e3c55574a11dec8f894825ccc904fd99cd93c7d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82cf6c06e4fdebb5d704c4f1e3c55574a11dec8f894825ccc904fd99cd93c7d9->enter($__internal_82cf6c06e4fdebb5d704c4f1e3c55574a11dec8f894825ccc904fd99cd93c7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3bee2b11dade1dcbf796b2e7791847fb64adbc668791be339e7c5ca51fb627a6->leave($__internal_3bee2b11dade1dcbf796b2e7791847fb64adbc668791be339e7c5ca51fb627a6_prof);

        
        $__internal_82cf6c06e4fdebb5d704c4f1e3c55574a11dec8f894825ccc904fd99cd93c7d9->leave($__internal_82cf6c06e4fdebb5d704c4f1e3c55574a11dec8f894825ccc904fd99cd93c7d9_prof);

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
