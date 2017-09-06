<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_5c39970d0f62eebec53d6d8a047872f68deb9b53c68121b1736044beb2a3c477 extends Twig_Template
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
        $__internal_c5afdbd86cdfd1aa4012959dc2e4fcf5073cb155629daf4b35da468870098473 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5afdbd86cdfd1aa4012959dc2e4fcf5073cb155629daf4b35da468870098473->enter($__internal_c5afdbd86cdfd1aa4012959dc2e4fcf5073cb155629daf4b35da468870098473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_f39068f24418acf3a7eb4d1f4616f9fdf5e0bb2f9d0ae10d52a912aeacfd76a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f39068f24418acf3a7eb4d1f4616f9fdf5e0bb2f9d0ae10d52a912aeacfd76a9->enter($__internal_f39068f24418acf3a7eb4d1f4616f9fdf5e0bb2f9d0ae10d52a912aeacfd76a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_c5afdbd86cdfd1aa4012959dc2e4fcf5073cb155629daf4b35da468870098473->leave($__internal_c5afdbd86cdfd1aa4012959dc2e4fcf5073cb155629daf4b35da468870098473_prof);

        
        $__internal_f39068f24418acf3a7eb4d1f4616f9fdf5e0bb2f9d0ae10d52a912aeacfd76a9->leave($__internal_f39068f24418acf3a7eb4d1f4616f9fdf5e0bb2f9d0ae10d52a912aeacfd76a9_prof);

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
", "@Framework/Form/form_enctype.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
