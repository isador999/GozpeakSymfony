<?php

/* Gozpeak/controllers/filterLanguages.php */
class __TwigTemplate_6d04fb44c0155f0b2e74d80bbe2cbb2c0d980fdce9af73b667d3a0b7791e9ab4 extends Twig_Template
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
        $__internal_2d826f695b980787b36c9bb62b79ac1771dd7c61478ddca70798dc2633fa78a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d826f695b980787b36c9bb62b79ac1771dd7c61478ddca70798dc2633fa78a5->enter($__internal_2d826f695b980787b36c9bb62b79ac1771dd7c61478ddca70798dc2633fa78a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/filterLanguages.php"));

        $__internal_f5cc5b3e5e4a0cb8699ffb93307ba1b2f43142c29ee660c24ce70dc19861a939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5cc5b3e5e4a0cb8699ffb93307ba1b2f43142c29ee660c24ce70dc19861a939->enter($__internal_f5cc5b3e5e4a0cb8699ffb93307ba1b2f43142c29ee660c24ce70dc19861a939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/filterLanguages.php"));

        // line 1
        echo "<?php


session_start();

// Inscription Validation before saving in database //
require_once('./language.php');
require_once('./lib/sessions_init.php');
require_once('./lib/check_strings.php');
require_once('../models/dbconnect.php');
require_once('../models/list_pagination_functions.php');


if (\$_POST) {
\t\$languages = isset(\$_POST['filteredLanguages']) ? \$_POST['filteredLanguages'] : '';

\t//echo \$languages;
\t\$filteredLanguages = explode(', ', \$languages);

\tforeach (\$filteredLanguages as \$entry) {
\t\techo \$entry;
\t}
}

?>
";
        
        $__internal_2d826f695b980787b36c9bb62b79ac1771dd7c61478ddca70798dc2633fa78a5->leave($__internal_2d826f695b980787b36c9bb62b79ac1771dd7c61478ddca70798dc2633fa78a5_prof);

        
        $__internal_f5cc5b3e5e4a0cb8699ffb93307ba1b2f43142c29ee660c24ce70dc19861a939->leave($__internal_f5cc5b3e5e4a0cb8699ffb93307ba1b2f43142c29ee660c24ce70dc19861a939_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/filterLanguages.php";
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


session_start();

// Inscription Validation before saving in database //
require_once('./language.php');
require_once('./lib/sessions_init.php');
require_once('./lib/check_strings.php');
require_once('../models/dbconnect.php');
require_once('../models/list_pagination_functions.php');


if (\$_POST) {
\t\$languages = isset(\$_POST['filteredLanguages']) ? \$_POST['filteredLanguages'] : '';

\t//echo \$languages;
\t\$filteredLanguages = explode(', ', \$languages);

\tforeach (\$filteredLanguages as \$entry) {
\t\techo \$entry;
\t}
}

?>
", "Gozpeak/controllers/filterLanguages.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/filterLanguages.php");
    }
}
