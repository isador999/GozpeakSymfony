<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_380c2263d5d5dffddc67ad2c77738733e2756522ec6e996e71a24425bc67cdf2 extends Twig_Template
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
        $__internal_7ade2cc1924b328717742fe74d626cdc10461e60a0c4e75a661ae364006df7c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ade2cc1924b328717742fe74d626cdc10461e60a0c4e75a661ae364006df7c8->enter($__internal_7ade2cc1924b328717742fe74d626cdc10461e60a0c4e75a661ae364006df7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_d9e09a0d06832bf173aac3b700f8fa5974f736a3e5a7fcd45252cd3cb1753d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9e09a0d06832bf173aac3b700f8fa5974f736a3e5a7fcd45252cd3cb1753d16->enter($__internal_d9e09a0d06832bf173aac3b700f8fa5974f736a3e5a7fcd45252cd3cb1753d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_7ade2cc1924b328717742fe74d626cdc10461e60a0c4e75a661ae364006df7c8->leave($__internal_7ade2cc1924b328717742fe74d626cdc10461e60a0c4e75a661ae364006df7c8_prof);

        
        $__internal_d9e09a0d06832bf173aac3b700f8fa5974f736a3e5a7fcd45252cd3cb1753d16->leave($__internal_d9e09a0d06832bf173aac3b700f8fa5974f736a3e5a7fcd45252cd3cb1753d16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
