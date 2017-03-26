<?php

/* Gozpeak/views/css/piclodio.css */
class __TwigTemplate_d6c9d7e74398053dc8af9ae9ca8d99f584782977a3351492d1f9297e471bd484 extends Twig_Template
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
        $__internal_0ac77fdcb41f34f2977c4d25be7abfda1fd66c8fe1fde40bef9acba58e8dedb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ac77fdcb41f34f2977c4d25be7abfda1fd66c8fe1fde40bef9acba58e8dedb8->enter($__internal_0ac77fdcb41f34f2977c4d25be7abfda1fd66c8fe1fde40bef9acba58e8dedb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/css/piclodio.css"));

        $__internal_12099af404bb91355b97636c634730ddd2769ec4270c9cc3f04462070082c696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12099af404bb91355b97636c634730ddd2769ec4270c9cc3f04462070082c696->enter($__internal_12099af404bb91355b97636c634730ddd2769ec4270c9cc3f04462070082c696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/css/piclodio.css"));

        // line 1
        echo "#clock {
    margin: auto;
    font-family: courier, monospace;
    text-align: center;
    color: #80d4ea;
    font-size: 32px;
}
";
        
        $__internal_0ac77fdcb41f34f2977c4d25be7abfda1fd66c8fe1fde40bef9acba58e8dedb8->leave($__internal_0ac77fdcb41f34f2977c4d25be7abfda1fd66c8fe1fde40bef9acba58e8dedb8_prof);

        
        $__internal_12099af404bb91355b97636c634730ddd2769ec4270c9cc3f04462070082c696->leave($__internal_12099af404bb91355b97636c634730ddd2769ec4270c9cc3f04462070082c696_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/views/css/piclodio.css";
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
        return new Twig_Source("#clock {
    margin: auto;
    font-family: courier, monospace;
    text-align: center;
    color: #80d4ea;
    font-size: 32px;
}
", "Gozpeak/views/css/piclodio.css", "/root/Gozpeak/app/Resources/views/Gozpeak/views/css/piclodio.css");
    }
}
