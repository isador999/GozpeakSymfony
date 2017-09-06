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
        $__internal_e5319fffb7451f2e5a3bf5979143476132c8cb5be5c90752c3d034501e2d3acf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5319fffb7451f2e5a3bf5979143476132c8cb5be5c90752c3d034501e2d3acf->enter($__internal_e5319fffb7451f2e5a3bf5979143476132c8cb5be5c90752c3d034501e2d3acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_7cabf22159b4d99fdec85c0dc816aa969f215bde47f2b2363d3da17585f462a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cabf22159b4d99fdec85c0dc816aa969f215bde47f2b2363d3da17585f462a6->enter($__internal_7cabf22159b4d99fdec85c0dc816aa969f215bde47f2b2363d3da17585f462a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_e5319fffb7451f2e5a3bf5979143476132c8cb5be5c90752c3d034501e2d3acf->leave($__internal_e5319fffb7451f2e5a3bf5979143476132c8cb5be5c90752c3d034501e2d3acf_prof);

        
        $__internal_7cabf22159b4d99fdec85c0dc816aa969f215bde47f2b2363d3da17585f462a6->leave($__internal_7cabf22159b4d99fdec85c0dc816aa969f215bde47f2b2363d3da17585f462a6_prof);

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
