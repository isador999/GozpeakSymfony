<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_928c700f1bd55e7d3ce8c237ede9f16eb961626e4bf9ade239529ad63438dae4 extends Twig_Template
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
        $__internal_d52537200f7b04d3f68c0308ce6c89845aaedcfe9ba6eb67a4dd858e2099b759 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d52537200f7b04d3f68c0308ce6c89845aaedcfe9ba6eb67a4dd858e2099b759->enter($__internal_d52537200f7b04d3f68c0308ce6c89845aaedcfe9ba6eb67a4dd858e2099b759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_fd10b767e5749ad14b95041b15963b81fa03f11c4f1c469fb54c7ea7a8d83b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd10b767e5749ad14b95041b15963b81fa03f11c4f1c469fb54c7ea7a8d83b13->enter($__internal_fd10b767e5749ad14b95041b15963b81fa03f11c4f1c469fb54c7ea7a8d83b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_d52537200f7b04d3f68c0308ce6c89845aaedcfe9ba6eb67a4dd858e2099b759->leave($__internal_d52537200f7b04d3f68c0308ce6c89845aaedcfe9ba6eb67a4dd858e2099b759_prof);

        
        $__internal_fd10b767e5749ad14b95041b15963b81fa03f11c4f1c469fb54c7ea7a8d83b13->leave($__internal_fd10b767e5749ad14b95041b15963b81fa03f11c4f1c469fb54c7ea7a8d83b13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
