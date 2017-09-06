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
        $__internal_1fb7820e41d827b9dafa68129b54d99331ee710996d17e131c6384f202b4abda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fb7820e41d827b9dafa68129b54d99331ee710996d17e131c6384f202b4abda->enter($__internal_1fb7820e41d827b9dafa68129b54d99331ee710996d17e131c6384f202b4abda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_319108e3ee6556732df55026c3361acdd120ec1af4b249128eb5be7fd789c8dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319108e3ee6556732df55026c3361acdd120ec1af4b249128eb5be7fd789c8dc->enter($__internal_319108e3ee6556732df55026c3361acdd120ec1af4b249128eb5be7fd789c8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1fb7820e41d827b9dafa68129b54d99331ee710996d17e131c6384f202b4abda->leave($__internal_1fb7820e41d827b9dafa68129b54d99331ee710996d17e131c6384f202b4abda_prof);

        
        $__internal_319108e3ee6556732df55026c3361acdd120ec1af4b249128eb5be7fd789c8dc->leave($__internal_319108e3ee6556732df55026c3361acdd120ec1af4b249128eb5be7fd789c8dc_prof);

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
