<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_e604c17d60b9bbb8f9cac0322a678f018970625992eb1bc06a579c5eff88914b extends Twig_Template
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
        $__internal_03cf5df26e23418970549a626b2c3180d40a40c3df247830e68ebc2280fba80f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03cf5df26e23418970549a626b2c3180d40a40c3df247830e68ebc2280fba80f->enter($__internal_03cf5df26e23418970549a626b2c3180d40a40c3df247830e68ebc2280fba80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_a6b4d4ee4e0f43790e3221afb51177c7d3ff2681a31a9f89dad4bb8a76fe6c61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b4d4ee4e0f43790e3221afb51177c7d3ff2681a31a9f89dad4bb8a76fe6c61->enter($__internal_a6b4d4ee4e0f43790e3221afb51177c7d3ff2681a31a9f89dad4bb8a76fe6c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_03cf5df26e23418970549a626b2c3180d40a40c3df247830e68ebc2280fba80f->leave($__internal_03cf5df26e23418970549a626b2c3180d40a40c3df247830e68ebc2280fba80f_prof);

        
        $__internal_a6b4d4ee4e0f43790e3221afb51177c7d3ff2681a31a9f89dad4bb8a76fe6c61->leave($__internal_a6b4d4ee4e0f43790e3221afb51177c7d3ff2681a31a9f89dad4bb8a76fe6c61_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
