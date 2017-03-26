<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_618983f679de0065177a0c78f78d401d0ff0df03eadbe6c18fa5fcea0c1cc4fe extends Twig_Template
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
        $__internal_4da2ec51fa622cc864c53919508b66b6a1c9ac807115736eb0cabd05b41690c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4da2ec51fa622cc864c53919508b66b6a1c9ac807115736eb0cabd05b41690c1->enter($__internal_4da2ec51fa622cc864c53919508b66b6a1c9ac807115736eb0cabd05b41690c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_f221a42e7bdefc113e1cb70ad2055b84c454be94299cf441b0633cfc241605ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f221a42e7bdefc113e1cb70ad2055b84c454be94299cf441b0633cfc241605ae->enter($__internal_f221a42e7bdefc113e1cb70ad2055b84c454be94299cf441b0633cfc241605ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_4da2ec51fa622cc864c53919508b66b6a1c9ac807115736eb0cabd05b41690c1->leave($__internal_4da2ec51fa622cc864c53919508b66b6a1c9ac807115736eb0cabd05b41690c1_prof);

        
        $__internal_f221a42e7bdefc113e1cb70ad2055b84c454be94299cf441b0633cfc241605ae->leave($__internal_f221a42e7bdefc113e1cb70ad2055b84c454be94299cf441b0633cfc241605ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
