<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_aa15f58eb5b23ff33096a330603351099836f7a58ca0137ee1746301f0e7d28e extends Twig_Template
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
        $__internal_524aab5508d4dabfe0d4bd3748b8475a42e44fa92265c99e2ad3771b6d99c60c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_524aab5508d4dabfe0d4bd3748b8475a42e44fa92265c99e2ad3771b6d99c60c->enter($__internal_524aab5508d4dabfe0d4bd3748b8475a42e44fa92265c99e2ad3771b6d99c60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_5a9c56201bd7daf43dc6defcc67d423a42d80f18f8fe38384101f95352fffb16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a9c56201bd7daf43dc6defcc67d423a42d80f18f8fe38384101f95352fffb16->enter($__internal_5a9c56201bd7daf43dc6defcc67d423a42d80f18f8fe38384101f95352fffb16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_524aab5508d4dabfe0d4bd3748b8475a42e44fa92265c99e2ad3771b6d99c60c->leave($__internal_524aab5508d4dabfe0d4bd3748b8475a42e44fa92265c99e2ad3771b6d99c60c_prof);

        
        $__internal_5a9c56201bd7daf43dc6defcc67d423a42d80f18f8fe38384101f95352fffb16->leave($__internal_5a9c56201bd7daf43dc6defcc67d423a42d80f18f8fe38384101f95352fffb16_prof);

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
", "@Framework/Form/collection_widget.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
