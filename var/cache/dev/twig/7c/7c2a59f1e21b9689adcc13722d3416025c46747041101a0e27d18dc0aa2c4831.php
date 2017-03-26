<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_051bd04427dc939548eaa8f5b0a0517bb14c3c738a23c550c898cc8249c035d2 extends Twig_Template
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
        $__internal_3e42d26648f1ed3fc0bdf13a10d2d3bd3781f24df3049861ee375bdc59577959 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e42d26648f1ed3fc0bdf13a10d2d3bd3781f24df3049861ee375bdc59577959->enter($__internal_3e42d26648f1ed3fc0bdf13a10d2d3bd3781f24df3049861ee375bdc59577959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_52087d7a6beded905669f61bdcd508451469536a8134807dc4899cac5802ac2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52087d7a6beded905669f61bdcd508451469536a8134807dc4899cac5802ac2c->enter($__internal_52087d7a6beded905669f61bdcd508451469536a8134807dc4899cac5802ac2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3e42d26648f1ed3fc0bdf13a10d2d3bd3781f24df3049861ee375bdc59577959->leave($__internal_3e42d26648f1ed3fc0bdf13a10d2d3bd3781f24df3049861ee375bdc59577959_prof);

        
        $__internal_52087d7a6beded905669f61bdcd508451469536a8134807dc4899cac5802ac2c->leave($__internal_52087d7a6beded905669f61bdcd508451469536a8134807dc4899cac5802ac2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
