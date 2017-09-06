<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_fe527007acf5d27a058d7cc714e187ad085376dff826d0e7e109bf7efeaf0710 extends Twig_Template
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
        $__internal_610179eaa1fca482b734eadcab019df5e7e3df11bf773a16657731a70fe7b0f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_610179eaa1fca482b734eadcab019df5e7e3df11bf773a16657731a70fe7b0f4->enter($__internal_610179eaa1fca482b734eadcab019df5e7e3df11bf773a16657731a70fe7b0f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_58b1e2fae195972a1dbcc9880742269bfbf1369dacbaadeb81a859a3d6299784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58b1e2fae195972a1dbcc9880742269bfbf1369dacbaadeb81a859a3d6299784->enter($__internal_58b1e2fae195972a1dbcc9880742269bfbf1369dacbaadeb81a859a3d6299784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_610179eaa1fca482b734eadcab019df5e7e3df11bf773a16657731a70fe7b0f4->leave($__internal_610179eaa1fca482b734eadcab019df5e7e3df11bf773a16657731a70fe7b0f4_prof);

        
        $__internal_58b1e2fae195972a1dbcc9880742269bfbf1369dacbaadeb81a859a3d6299784->leave($__internal_58b1e2fae195972a1dbcc9880742269bfbf1369dacbaadeb81a859a3d6299784_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
