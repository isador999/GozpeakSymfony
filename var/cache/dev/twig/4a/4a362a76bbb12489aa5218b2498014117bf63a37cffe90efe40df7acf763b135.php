<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_464c6167f8ca2490d2a0afd51fb369b2b491bfb9f9e72d194875d9901ba2d706 extends Twig_Template
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
        $__internal_2f1dd9afab922228269942e0bd47dafd6d3d35bf0d239abebc515ce17b9e96ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f1dd9afab922228269942e0bd47dafd6d3d35bf0d239abebc515ce17b9e96ae->enter($__internal_2f1dd9afab922228269942e0bd47dafd6d3d35bf0d239abebc515ce17b9e96ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_2cf349bae67a81e250c482608e26fba792972f1c3b2444715b6177ba3e1619d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf349bae67a81e250c482608e26fba792972f1c3b2444715b6177ba3e1619d9->enter($__internal_2cf349bae67a81e250c482608e26fba792972f1c3b2444715b6177ba3e1619d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_2f1dd9afab922228269942e0bd47dafd6d3d35bf0d239abebc515ce17b9e96ae->leave($__internal_2f1dd9afab922228269942e0bd47dafd6d3d35bf0d239abebc515ce17b9e96ae_prof);

        
        $__internal_2cf349bae67a81e250c482608e26fba792972f1c3b2444715b6177ba3e1619d9->leave($__internal_2cf349bae67a81e250c482608e26fba792972f1c3b2444715b6177ba3e1619d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
