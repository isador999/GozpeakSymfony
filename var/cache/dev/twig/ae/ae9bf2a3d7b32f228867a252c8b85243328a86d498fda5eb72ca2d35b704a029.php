<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e2eb27c7b78c950318342e84d54b27c1b64d39182eaec41166bc7207572d2827 extends Twig_Template
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
        $__internal_13f80a54f71df8d679a935eeb6a1e43f9276069ed4099a117c1c107942d62472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13f80a54f71df8d679a935eeb6a1e43f9276069ed4099a117c1c107942d62472->enter($__internal_13f80a54f71df8d679a935eeb6a1e43f9276069ed4099a117c1c107942d62472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_8c3cd995bf408397cd964ec12ead8e44f8fa1b12c4d1013c2cdd020d02a1e25c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c3cd995bf408397cd964ec12ead8e44f8fa1b12c4d1013c2cdd020d02a1e25c->enter($__internal_8c3cd995bf408397cd964ec12ead8e44f8fa1b12c4d1013c2cdd020d02a1e25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_13f80a54f71df8d679a935eeb6a1e43f9276069ed4099a117c1c107942d62472->leave($__internal_13f80a54f71df8d679a935eeb6a1e43f9276069ed4099a117c1c107942d62472_prof);

        
        $__internal_8c3cd995bf408397cd964ec12ead8e44f8fa1b12c4d1013c2cdd020d02a1e25c->leave($__internal_8c3cd995bf408397cd964ec12ead8e44f8fa1b12c4d1013c2cdd020d02a1e25c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
