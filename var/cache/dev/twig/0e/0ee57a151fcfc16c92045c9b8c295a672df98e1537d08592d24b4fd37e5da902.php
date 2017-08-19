<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_05e4ba2fd294fdec1729ead3147bccf54b5ac9a204e9543a8a9ab09d10e5ee8d extends Twig_Template
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
        $__internal_65879cb83c9a2b21ab0d1a2fab35156e7fed0257b088995b6c236f79e41f9ffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65879cb83c9a2b21ab0d1a2fab35156e7fed0257b088995b6c236f79e41f9ffa->enter($__internal_65879cb83c9a2b21ab0d1a2fab35156e7fed0257b088995b6c236f79e41f9ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_f70901d49fec9288579c361b26ce0a00af9117dad89839e53d0ceaaae27b9925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f70901d49fec9288579c361b26ce0a00af9117dad89839e53d0ceaaae27b9925->enter($__internal_f70901d49fec9288579c361b26ce0a00af9117dad89839e53d0ceaaae27b9925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_65879cb83c9a2b21ab0d1a2fab35156e7fed0257b088995b6c236f79e41f9ffa->leave($__internal_65879cb83c9a2b21ab0d1a2fab35156e7fed0257b088995b6c236f79e41f9ffa_prof);

        
        $__internal_f70901d49fec9288579c361b26ce0a00af9117dad89839e53d0ceaaae27b9925->leave($__internal_f70901d49fec9288579c361b26ce0a00af9117dad89839e53d0ceaaae27b9925_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
