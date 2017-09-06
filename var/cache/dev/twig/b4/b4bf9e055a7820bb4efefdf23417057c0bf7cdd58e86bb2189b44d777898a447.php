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
        $__internal_75bb475c3239ebcca6d4033a5d49a47410086d277003b183d9cf3bfed120a95f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75bb475c3239ebcca6d4033a5d49a47410086d277003b183d9cf3bfed120a95f->enter($__internal_75bb475c3239ebcca6d4033a5d49a47410086d277003b183d9cf3bfed120a95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_adb4dfa9ae109f04cd9ff944e6a8daaba0381e3dba2b0d39d64f63be3a34932c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adb4dfa9ae109f04cd9ff944e6a8daaba0381e3dba2b0d39d64f63be3a34932c->enter($__internal_adb4dfa9ae109f04cd9ff944e6a8daaba0381e3dba2b0d39d64f63be3a34932c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_75bb475c3239ebcca6d4033a5d49a47410086d277003b183d9cf3bfed120a95f->leave($__internal_75bb475c3239ebcca6d4033a5d49a47410086d277003b183d9cf3bfed120a95f_prof);

        
        $__internal_adb4dfa9ae109f04cd9ff944e6a8daaba0381e3dba2b0d39d64f63be3a34932c->leave($__internal_adb4dfa9ae109f04cd9ff944e6a8daaba0381e3dba2b0d39d64f63be3a34932c_prof);

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
