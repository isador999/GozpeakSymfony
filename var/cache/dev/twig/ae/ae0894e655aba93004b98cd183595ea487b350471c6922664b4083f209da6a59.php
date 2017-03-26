<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_e0499502ed054b4aa0cee9239a0648160fdce69112c8a50f71c2cf0b6a4425d8 extends Twig_Template
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
        $__internal_155390183901e8a828d46321bfb0aa831d1287b93c481f53df974b586acbdf83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_155390183901e8a828d46321bfb0aa831d1287b93c481f53df974b586acbdf83->enter($__internal_155390183901e8a828d46321bfb0aa831d1287b93c481f53df974b586acbdf83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_da4d9224d270db26e1a80f634c545fc7e1c1164b5c2dabcb85c19dbabcf15e8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da4d9224d270db26e1a80f634c545fc7e1c1164b5c2dabcb85c19dbabcf15e8d->enter($__internal_da4d9224d270db26e1a80f634c545fc7e1c1164b5c2dabcb85c19dbabcf15e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_155390183901e8a828d46321bfb0aa831d1287b93c481f53df974b586acbdf83->leave($__internal_155390183901e8a828d46321bfb0aa831d1287b93c481f53df974b586acbdf83_prof);

        
        $__internal_da4d9224d270db26e1a80f634c545fc7e1c1164b5c2dabcb85c19dbabcf15e8d->leave($__internal_da4d9224d270db26e1a80f634c545fc7e1c1164b5c2dabcb85c19dbabcf15e8d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
