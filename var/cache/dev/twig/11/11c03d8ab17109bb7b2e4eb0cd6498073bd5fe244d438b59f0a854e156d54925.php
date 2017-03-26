<?php

/* Gozpeak/controllers/init.php */
class __TwigTemplate_838ecc21b16c8bda09c8888ee0b33a7108fc3197061c8294e3cd86df1524cada extends Twig_Template
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
        $__internal_548dc14b68c7b170779357a9be82ddd160f6ac9024b7423d188e4b0bc568eef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_548dc14b68c7b170779357a9be82ddd160f6ac9024b7423d188e4b0bc568eef5->enter($__internal_548dc14b68c7b170779357a9be82ddd160f6ac9024b7423d188e4b0bc568eef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/init.php"));

        $__internal_ff968ba619709c762da282327e6cba2070221fa9fe000196ee3487f85f4b075d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff968ba619709c762da282327e6cba2070221fa9fe000196ee3487f85f4b075d->enter($__internal_ff968ba619709c762da282327e6cba2070221fa9fe000196ee3487f85f4b075d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/init.php"));

        // line 1
        echo "<?php
\trequire_once(LIB.'sessions_init.php');
\trequire_once(LIB.'check_login.php');
  require_once(CONTROLLERS.'language.php');
?>
";
        
        $__internal_548dc14b68c7b170779357a9be82ddd160f6ac9024b7423d188e4b0bc568eef5->leave($__internal_548dc14b68c7b170779357a9be82ddd160f6ac9024b7423d188e4b0bc568eef5_prof);

        
        $__internal_ff968ba619709c762da282327e6cba2070221fa9fe000196ee3487f85f4b075d->leave($__internal_ff968ba619709c762da282327e6cba2070221fa9fe000196ee3487f85f4b075d_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/init.php";
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
        return new Twig_Source("<?php
\trequire_once(LIB.'sessions_init.php');
\trequire_once(LIB.'check_login.php');
  require_once(CONTROLLERS.'language.php');
?>
", "Gozpeak/controllers/init.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/init.php");
    }
}
