<?php

/* Gozpeak/controllers/getprofile.php */
class __TwigTemplate_461855523a9b72d1654e3243a1b0e21de46b6dbe0b9b5e58d3f3048c93edb6c0 extends Twig_Template
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
        $__internal_d1e413fa9e973bdc93e559ff0f92ee62ef90b24217c5a336980fba7b1dd8a694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1e413fa9e973bdc93e559ff0f92ee62ef90b24217c5a336980fba7b1dd8a694->enter($__internal_d1e413fa9e973bdc93e559ff0f92ee62ef90b24217c5a336980fba7b1dd8a694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/getprofile.php"));

        $__internal_74f7e0586225156e791da91cf2fe4f45b9109a02d20e87beae0916ee9833183a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74f7e0586225156e791da91cf2fe4f45b9109a02d20e87beae0916ee9833183a->enter($__internal_74f7e0586225156e791da91cf2fe4f45b9109a02d20e87beae0916ee9833183a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/getprofile.php"));

        // line 1
        echo "<?php

session_start();
require_once('./language/fr.php');
require_once('./lib/sessions_init.php');

require_once('../models/dbconnect.php');
require_once('../models/profile_functions.php');


if (\$_GET) {
  \$pseudo = \$_GET['profil'];
  \$infos_profile = profile_info(\$DB, \$pseudo);
  echo json_encode(\$infos_profile);
}

?>
";
        
        $__internal_d1e413fa9e973bdc93e559ff0f92ee62ef90b24217c5a336980fba7b1dd8a694->leave($__internal_d1e413fa9e973bdc93e559ff0f92ee62ef90b24217c5a336980fba7b1dd8a694_prof);

        
        $__internal_74f7e0586225156e791da91cf2fe4f45b9109a02d20e87beae0916ee9833183a->leave($__internal_74f7e0586225156e791da91cf2fe4f45b9109a02d20e87beae0916ee9833183a_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/getprofile.php";
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
require_once('./language/fr.php');
require_once('./lib/sessions_init.php');

require_once('../models/dbconnect.php');
require_once('../models/profile_functions.php');


if (\$_GET) {
  \$pseudo = \$_GET['profil'];
  \$infos_profile = profile_info(\$DB, \$pseudo);
  echo json_encode(\$infos_profile);
}

?>
", "Gozpeak/controllers/getprofile.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/getprofile.php");
    }
}
