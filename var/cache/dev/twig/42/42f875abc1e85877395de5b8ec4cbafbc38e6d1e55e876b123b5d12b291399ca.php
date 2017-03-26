<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_3d2c7425441f8f0c3f07e3460420439686e33b53833f2c03432a381b413f2342 extends Twig_Template
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
        $__internal_dbb4ed441635b2aee73a4201cdf857aa5f217cee67b56c60dfac646603423ca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbb4ed441635b2aee73a4201cdf857aa5f217cee67b56c60dfac646603423ca6->enter($__internal_dbb4ed441635b2aee73a4201cdf857aa5f217cee67b56c60dfac646603423ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_2844e6da983a6a25122a651f90ee12f5d8fd9ef72cfb612b8079fdb387e4aea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2844e6da983a6a25122a651f90ee12f5d8fd9ef72cfb612b8079fdb387e4aea1->enter($__internal_2844e6da983a6a25122a651f90ee12f5d8fd9ef72cfb612b8079fdb387e4aea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_dbb4ed441635b2aee73a4201cdf857aa5f217cee67b56c60dfac646603423ca6->leave($__internal_dbb4ed441635b2aee73a4201cdf857aa5f217cee67b56c60dfac646603423ca6_prof);

        
        $__internal_2844e6da983a6a25122a651f90ee12f5d8fd9ef72cfb612b8079fdb387e4aea1->leave($__internal_2844e6da983a6a25122a651f90ee12f5d8fd9ef72cfb612b8079fdb387e4aea1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
