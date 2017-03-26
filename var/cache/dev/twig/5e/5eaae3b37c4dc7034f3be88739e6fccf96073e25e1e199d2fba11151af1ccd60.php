<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5acd844f409673cd43ab926899acc42577f4324de05a51fa4357d83679c5bb6c extends Twig_Template
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
        $__internal_74861f4a39d988906af30ba0dfa6d3206680954c644d74381470691f0496a61c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74861f4a39d988906af30ba0dfa6d3206680954c644d74381470691f0496a61c->enter($__internal_74861f4a39d988906af30ba0dfa6d3206680954c644d74381470691f0496a61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_af05678405dd4e7701abe00b217e9b84e839d918e3ec3d58ce949faf53475ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af05678405dd4e7701abe00b217e9b84e839d918e3ec3d58ce949faf53475ce7->enter($__internal_af05678405dd4e7701abe00b217e9b84e839d918e3ec3d58ce949faf53475ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_74861f4a39d988906af30ba0dfa6d3206680954c644d74381470691f0496a61c->leave($__internal_74861f4a39d988906af30ba0dfa6d3206680954c644d74381470691f0496a61c_prof);

        
        $__internal_af05678405dd4e7701abe00b217e9b84e839d918e3ec3d58ce949faf53475ce7->leave($__internal_af05678405dd4e7701abe00b217e9b84e839d918e3ec3d58ce949faf53475ce7_prof);

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
", "@Framework/Form/form_row.html.php", "/root/Gozpeak/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
