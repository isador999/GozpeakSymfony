<?php

/* Gozpeak/models/test.php */
class __TwigTemplate_b20ef94096957f7029bd0c17240f2f3d1d0d23aa15a949803a24a12a80ff4b65 extends Twig_Template
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
        $__internal_5dd9c28eaefb5fe156e615dd4ad921b30265ffcecce6cfc821444cf1982febe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dd9c28eaefb5fe156e615dd4ad921b30265ffcecce6cfc821444cf1982febe9->enter($__internal_5dd9c28eaefb5fe156e615dd4ad921b30265ffcecce6cfc821444cf1982febe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/models/test.php"));

        $__internal_c23c5eb208c64a06777241439053d83cfae0b6a573fb3b32f2e7c1af0826cc45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c23c5eb208c64a06777241439053d83cfae0b6a573fb3b32f2e7c1af0826cc45->enter($__internal_c23c5eb208c64a06777241439053d83cfae0b6a573fb3b32f2e7c1af0826cc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/models/test.php"));

        // line 1
        echo "<?php 

include_once('./list_functions.php');

\$date= \"2015-04-04\";


retrieve_events_by_type(\$DB, \$query, \$language, \$date);


";
        
        $__internal_5dd9c28eaefb5fe156e615dd4ad921b30265ffcecce6cfc821444cf1982febe9->leave($__internal_5dd9c28eaefb5fe156e615dd4ad921b30265ffcecce6cfc821444cf1982febe9_prof);

        
        $__internal_c23c5eb208c64a06777241439053d83cfae0b6a573fb3b32f2e7c1af0826cc45->leave($__internal_c23c5eb208c64a06777241439053d83cfae0b6a573fb3b32f2e7c1af0826cc45_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/models/test.php";
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

include_once('./list_functions.php');

\$date= \"2015-04-04\";


retrieve_events_by_type(\$DB, \$query, \$language, \$date);


", "Gozpeak/models/test.php", "/root/Gozpeak/app/Resources/views/Gozpeak/models/test.php");
    }
}
