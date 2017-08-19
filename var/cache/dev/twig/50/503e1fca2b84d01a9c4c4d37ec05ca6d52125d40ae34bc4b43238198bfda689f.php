<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_d7dbf3db3bb7bed2a3f4feef7501c2394c961991fa14539e0d0c8dba0b6de77c extends Twig_Template
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
        $__internal_b229d79d8b1685af81b4810de8df6cdbf6f474564332cae7ab8bc547710dd5d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b229d79d8b1685af81b4810de8df6cdbf6f474564332cae7ab8bc547710dd5d3->enter($__internal_b229d79d8b1685af81b4810de8df6cdbf6f474564332cae7ab8bc547710dd5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_4744ac51a68e7e6e94f02a816cc19bd2ae9e261586c5ebe30574cc246edc1d78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4744ac51a68e7e6e94f02a816cc19bd2ae9e261586c5ebe30574cc246edc1d78->enter($__internal_4744ac51a68e7e6e94f02a816cc19bd2ae9e261586c5ebe30574cc246edc1d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_b229d79d8b1685af81b4810de8df6cdbf6f474564332cae7ab8bc547710dd5d3->leave($__internal_b229d79d8b1685af81b4810de8df6cdbf6f474564332cae7ab8bc547710dd5d3_prof);

        
        $__internal_4744ac51a68e7e6e94f02a816cc19bd2ae9e261586c5ebe30574cc246edc1d78->leave($__internal_4744ac51a68e7e6e94f02a816cc19bd2ae9e261586c5ebe30574cc246edc1d78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
