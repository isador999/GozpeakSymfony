<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8c3ddb75acad9502a7074dd1a37596775f86480b54b462f68f989e79a96ef60b extends Twig_Template
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
        $__internal_b44255df2c0c0837fc66661875240e701f191d9b03a39b2e8bb66120d8dbc62a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b44255df2c0c0837fc66661875240e701f191d9b03a39b2e8bb66120d8dbc62a->enter($__internal_b44255df2c0c0837fc66661875240e701f191d9b03a39b2e8bb66120d8dbc62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_15f62f5f3b15d864aa9a6445d8bcde13cabd12cb2565f6b37522b55582ce1e98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15f62f5f3b15d864aa9a6445d8bcde13cabd12cb2565f6b37522b55582ce1e98->enter($__internal_15f62f5f3b15d864aa9a6445d8bcde13cabd12cb2565f6b37522b55582ce1e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b44255df2c0c0837fc66661875240e701f191d9b03a39b2e8bb66120d8dbc62a->leave($__internal_b44255df2c0c0837fc66661875240e701f191d9b03a39b2e8bb66120d8dbc62a_prof);

        
        $__internal_15f62f5f3b15d864aa9a6445d8bcde13cabd12cb2565f6b37522b55582ce1e98->leave($__internal_15f62f5f3b15d864aa9a6445d8bcde13cabd12cb2565f6b37522b55582ce1e98_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
