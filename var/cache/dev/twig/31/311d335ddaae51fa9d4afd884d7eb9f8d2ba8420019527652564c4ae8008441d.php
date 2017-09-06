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
        $__internal_df9e250ed955ffa5e8d6c16887d35ccfdf4cf1345642d00f8877914e3c8689b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df9e250ed955ffa5e8d6c16887d35ccfdf4cf1345642d00f8877914e3c8689b9->enter($__internal_df9e250ed955ffa5e8d6c16887d35ccfdf4cf1345642d00f8877914e3c8689b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_66c680fff10de4bab699b5692c5e2502ac98315ddc0740e30c33238253e0b523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c680fff10de4bab699b5692c5e2502ac98315ddc0740e30c33238253e0b523->enter($__internal_66c680fff10de4bab699b5692c5e2502ac98315ddc0740e30c33238253e0b523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_df9e250ed955ffa5e8d6c16887d35ccfdf4cf1345642d00f8877914e3c8689b9->leave($__internal_df9e250ed955ffa5e8d6c16887d35ccfdf4cf1345642d00f8877914e3c8689b9_prof);

        
        $__internal_66c680fff10de4bab699b5692c5e2502ac98315ddc0740e30c33238253e0b523->leave($__internal_66c680fff10de4bab699b5692c5e2502ac98315ddc0740e30c33238253e0b523_prof);

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
