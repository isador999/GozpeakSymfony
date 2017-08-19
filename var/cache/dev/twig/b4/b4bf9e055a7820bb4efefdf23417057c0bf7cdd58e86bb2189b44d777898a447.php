<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_fea3a793720e7e3ca582497db3bcbbd044a3fdefbfd6759e0bc06bfffe26ad1b extends Twig_Template
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
        $__internal_caa51413faac016592cf64dbda29eeff8b5919e0cbe853cb87ddd29d2524b1a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caa51413faac016592cf64dbda29eeff8b5919e0cbe853cb87ddd29d2524b1a3->enter($__internal_caa51413faac016592cf64dbda29eeff8b5919e0cbe853cb87ddd29d2524b1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_25735ae29d150f089d7f61bb4676c5a6ba31636849d27e33fddcf37319a18c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25735ae29d150f089d7f61bb4676c5a6ba31636849d27e33fddcf37319a18c45->enter($__internal_25735ae29d150f089d7f61bb4676c5a6ba31636849d27e33fddcf37319a18c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_caa51413faac016592cf64dbda29eeff8b5919e0cbe853cb87ddd29d2524b1a3->leave($__internal_caa51413faac016592cf64dbda29eeff8b5919e0cbe853cb87ddd29d2524b1a3_prof);

        
        $__internal_25735ae29d150f089d7f61bb4676c5a6ba31636849d27e33fddcf37319a18c45->leave($__internal_25735ae29d150f089d7f61bb4676c5a6ba31636849d27e33fddcf37319a18c45_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
