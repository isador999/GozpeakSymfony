<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_67b6c4b75c73ea256d9274ba7abce871d65d9a6f616988fe80da1cc8701da5cf extends Twig_Template
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
        $__internal_09e2a1423349aa47b5f0d2ab9fe6d8ad47617932044b3758e3e1938ca78b131c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09e2a1423349aa47b5f0d2ab9fe6d8ad47617932044b3758e3e1938ca78b131c->enter($__internal_09e2a1423349aa47b5f0d2ab9fe6d8ad47617932044b3758e3e1938ca78b131c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_185a24b898f2efd65148addf1201870c2643bbbc1df74c2f8b14c9dd8ba5e995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_185a24b898f2efd65148addf1201870c2643bbbc1df74c2f8b14c9dd8ba5e995->enter($__internal_185a24b898f2efd65148addf1201870c2643bbbc1df74c2f8b14c9dd8ba5e995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_09e2a1423349aa47b5f0d2ab9fe6d8ad47617932044b3758e3e1938ca78b131c->leave($__internal_09e2a1423349aa47b5f0d2ab9fe6d8ad47617932044b3758e3e1938ca78b131c_prof);

        
        $__internal_185a24b898f2efd65148addf1201870c2643bbbc1df74c2f8b14c9dd8ba5e995->leave($__internal_185a24b898f2efd65148addf1201870c2643bbbc1df74c2f8b14c9dd8ba5e995_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
