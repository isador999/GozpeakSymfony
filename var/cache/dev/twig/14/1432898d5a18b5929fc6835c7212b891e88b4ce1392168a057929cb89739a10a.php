<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_c6f06d42be8bf90389e58359ef7b6d90c87b52f4126969fecd20e7ec7bc4287d extends Twig_Template
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
        $__internal_159ff222f3a8992025d458aaac7e4a64f74c8cef74ae86aae3a2b41bf41ed3cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_159ff222f3a8992025d458aaac7e4a64f74c8cef74ae86aae3a2b41bf41ed3cd->enter($__internal_159ff222f3a8992025d458aaac7e4a64f74c8cef74ae86aae3a2b41bf41ed3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_1fa0652bd2a79b1bc65f1bb0d0139598bf6092402cb0f3267818c8d8d4fff57b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa0652bd2a79b1bc65f1bb0d0139598bf6092402cb0f3267818c8d8d4fff57b->enter($__internal_1fa0652bd2a79b1bc65f1bb0d0139598bf6092402cb0f3267818c8d8d4fff57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_159ff222f3a8992025d458aaac7e4a64f74c8cef74ae86aae3a2b41bf41ed3cd->leave($__internal_159ff222f3a8992025d458aaac7e4a64f74c8cef74ae86aae3a2b41bf41ed3cd_prof);

        
        $__internal_1fa0652bd2a79b1bc65f1bb0d0139598bf6092402cb0f3267818c8d8d4fff57b->leave($__internal_1fa0652bd2a79b1bc65f1bb0d0139598bf6092402cb0f3267818c8d8d4fff57b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/root/GozpeakSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
