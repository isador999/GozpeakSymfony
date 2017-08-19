<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_bbc52713541d035994e8865cb299655a6527c2d9a87235596b02f0d9ec8ee303 extends Twig_Template
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
        $__internal_ce8e8dc9b6d850fefc0e9d27bc54361d94bcee25a6e1768c4db00820172b6ffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce8e8dc9b6d850fefc0e9d27bc54361d94bcee25a6e1768c4db00820172b6ffa->enter($__internal_ce8e8dc9b6d850fefc0e9d27bc54361d94bcee25a6e1768c4db00820172b6ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_210764547f95011c69985e6894d654ee2c993f8c994548ffc429ff9d771b3a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_210764547f95011c69985e6894d654ee2c993f8c994548ffc429ff9d771b3a31->enter($__internal_210764547f95011c69985e6894d654ee2c993f8c994548ffc429ff9d771b3a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ce8e8dc9b6d850fefc0e9d27bc54361d94bcee25a6e1768c4db00820172b6ffa->leave($__internal_ce8e8dc9b6d850fefc0e9d27bc54361d94bcee25a6e1768c4db00820172b6ffa_prof);

        
        $__internal_210764547f95011c69985e6894d654ee2c993f8c994548ffc429ff9d771b3a31->leave($__internal_210764547f95011c69985e6894d654ee2c993f8c994548ffc429ff9d771b3a31_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
