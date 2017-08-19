<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_130f1aae5fb1f2edca868dca51bc325092dc39c0a8ac85fe6a9574f7ab9718a7 extends Twig_Template
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
        $__internal_d4a163f46d5f703adfd48e37a4be02ad46223588d1f90d7b20174973d00de063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4a163f46d5f703adfd48e37a4be02ad46223588d1f90d7b20174973d00de063->enter($__internal_d4a163f46d5f703adfd48e37a4be02ad46223588d1f90d7b20174973d00de063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_3d214f147bc80000948afa1c3e1d6fed7df683065e991c919395ec7d45b9fb5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d214f147bc80000948afa1c3e1d6fed7df683065e991c919395ec7d45b9fb5b->enter($__internal_3d214f147bc80000948afa1c3e1d6fed7df683065e991c919395ec7d45b9fb5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d4a163f46d5f703adfd48e37a4be02ad46223588d1f90d7b20174973d00de063->leave($__internal_d4a163f46d5f703adfd48e37a4be02ad46223588d1f90d7b20174973d00de063_prof);

        
        $__internal_3d214f147bc80000948afa1c3e1d6fed7df683065e991c919395ec7d45b9fb5b->leave($__internal_3d214f147bc80000948afa1c3e1d6fed7df683065e991c919395ec7d45b9fb5b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
