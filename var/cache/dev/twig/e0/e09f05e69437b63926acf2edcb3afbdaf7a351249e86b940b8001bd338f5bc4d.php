<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_0ce245151fa743221c8d4a642b07817b5d6ce422103b5b18107a347399f52d65 extends Twig_Template
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
        $__internal_0aa25a0add7c04ebdf28341ccfedf7ef03f9f7118f38841d0b8ccf0ce5f956c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aa25a0add7c04ebdf28341ccfedf7ef03f9f7118f38841d0b8ccf0ce5f956c4->enter($__internal_0aa25a0add7c04ebdf28341ccfedf7ef03f9f7118f38841d0b8ccf0ce5f956c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_e95419659e00b70487d0a2b9ed62cb87fe4a0c80380808eee58746e7ae723804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e95419659e00b70487d0a2b9ed62cb87fe4a0c80380808eee58746e7ae723804->enter($__internal_e95419659e00b70487d0a2b9ed62cb87fe4a0c80380808eee58746e7ae723804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0aa25a0add7c04ebdf28341ccfedf7ef03f9f7118f38841d0b8ccf0ce5f956c4->leave($__internal_0aa25a0add7c04ebdf28341ccfedf7ef03f9f7118f38841d0b8ccf0ce5f956c4_prof);

        
        $__internal_e95419659e00b70487d0a2b9ed62cb87fe4a0c80380808eee58746e7ae723804->leave($__internal_e95419659e00b70487d0a2b9ed62cb87fe4a0c80380808eee58746e7ae723804_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
