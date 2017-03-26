<?php

/* Gozpeak/controllers/language.php */
class __TwigTemplate_883672bcc96c13dd589117b9e9390d534858b5245c2535cfa2918bf67806236d extends Twig_Template
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
        $__internal_d297fb5b2025384bc6180eb631bc503c0155b877951ce5be01d520855a073d09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d297fb5b2025384bc6180eb631bc503c0155b877951ce5be01d520855a073d09->enter($__internal_d297fb5b2025384bc6180eb631bc503c0155b877951ce5be01d520855a073d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/language.php"));

        $__internal_26064ea1c825a1649355eab8d49cd6049f222712182863eca6c7c6d37e2c0559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26064ea1c825a1649355eab8d49cd6049f222712182863eca6c7c6d37e2c0559->enter($__internal_26064ea1c825a1649355eab8d49cd6049f222712182863eca6c7c6d37e2c0559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/language.php"));

        // line 1
        echo "<?php

/*require_once(CONTROLLERS.'language/en.php');*/
require_once('language/fr.php');
require_once 'language/variables.php';

?>
";
        
        $__internal_d297fb5b2025384bc6180eb631bc503c0155b877951ce5be01d520855a073d09->leave($__internal_d297fb5b2025384bc6180eb631bc503c0155b877951ce5be01d520855a073d09_prof);

        
        $__internal_26064ea1c825a1649355eab8d49cd6049f222712182863eca6c7c6d37e2c0559->leave($__internal_26064ea1c825a1649355eab8d49cd6049f222712182863eca6c7c6d37e2c0559_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/language.php";
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

/*require_once(CONTROLLERS.'language/en.php');*/
require_once('language/fr.php');
require_once 'language/variables.php';

?>
", "Gozpeak/controllers/language.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/language.php");
    }
}
