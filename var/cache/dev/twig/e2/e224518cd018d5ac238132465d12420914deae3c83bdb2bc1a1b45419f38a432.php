<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_f95666c81433a9db671897442a315670391444112b887aed1be9b9e4577d515e extends Twig_Template
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
        $__internal_c7c0dbce0baf82036f8784ab9838ece4d5acaecd7fbabada010bd6abe798e304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7c0dbce0baf82036f8784ab9838ece4d5acaecd7fbabada010bd6abe798e304->enter($__internal_c7c0dbce0baf82036f8784ab9838ece4d5acaecd7fbabada010bd6abe798e304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_2fe3dbba6d24914b5a182db9b356ec7f2a82602609fe68f99e5d82818a540329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fe3dbba6d24914b5a182db9b356ec7f2a82602609fe68f99e5d82818a540329->enter($__internal_2fe3dbba6d24914b5a182db9b356ec7f2a82602609fe68f99e5d82818a540329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_c7c0dbce0baf82036f8784ab9838ece4d5acaecd7fbabada010bd6abe798e304->leave($__internal_c7c0dbce0baf82036f8784ab9838ece4d5acaecd7fbabada010bd6abe798e304_prof);

        
        $__internal_2fe3dbba6d24914b5a182db9b356ec7f2a82602609fe68f99e5d82818a540329->leave($__internal_2fe3dbba6d24914b5a182db9b356ec7f2a82602609fe68f99e5d82818a540329_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
