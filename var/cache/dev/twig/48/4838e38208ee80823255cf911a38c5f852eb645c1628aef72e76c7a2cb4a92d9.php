<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_8a72aa64d0b831e00b010149ab4ce976eb1e3850427d11304701fa2c6628539c extends Twig_Template
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
        $__internal_6f8ca2b91763f23cf05ce599d07b06c3d1ecbb47161b92661c8ffd3c3db670fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f8ca2b91763f23cf05ce599d07b06c3d1ecbb47161b92661c8ffd3c3db670fc->enter($__internal_6f8ca2b91763f23cf05ce599d07b06c3d1ecbb47161b92661c8ffd3c3db670fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_fc01007bd3281c3ed26d77862c4970eb8935a103d894be57b6f2bbc5cf27ed16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc01007bd3281c3ed26d77862c4970eb8935a103d894be57b6f2bbc5cf27ed16->enter($__internal_fc01007bd3281c3ed26d77862c4970eb8935a103d894be57b6f2bbc5cf27ed16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_6f8ca2b91763f23cf05ce599d07b06c3d1ecbb47161b92661c8ffd3c3db670fc->leave($__internal_6f8ca2b91763f23cf05ce599d07b06c3d1ecbb47161b92661c8ffd3c3db670fc_prof);

        
        $__internal_fc01007bd3281c3ed26d77862c4970eb8935a103d894be57b6f2bbc5cf27ed16->leave($__internal_fc01007bd3281c3ed26d77862c4970eb8935a103d894be57b6f2bbc5cf27ed16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
