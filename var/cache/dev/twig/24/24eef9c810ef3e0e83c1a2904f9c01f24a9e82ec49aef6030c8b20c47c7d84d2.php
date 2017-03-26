<?php

/* Gozpeak/controllers/logout.php */
class __TwigTemplate_6f5008f72e9a2324b81d572273a9a15957f391a68ca822f16a1b6b776b8788ff extends Twig_Template
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
        $__internal_66d3808d87d29d0fcac1fb1288a738e27d4073ad455238922b42fd3e1242eae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66d3808d87d29d0fcac1fb1288a738e27d4073ad455238922b42fd3e1242eae5->enter($__internal_66d3808d87d29d0fcac1fb1288a738e27d4073ad455238922b42fd3e1242eae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/logout.php"));

        $__internal_8291913305c5460c35bc187f2eec2dc63c23278dc26207d5687b20b126f430f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8291913305c5460c35bc187f2eec2dc63c23278dc26207d5687b20b126f430f1->enter($__internal_8291913305c5460c35bc187f2eec2dc63c23278dc26207d5687b20b126f430f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/logout.php"));

        // line 1
        echo "<?php

session_start();

require_once(CONTROLLERS.'language.php');
require_once(LIB.'sessions_init.php');

\$_SESSION = array();
if(session_destroy()) {
\t\$message='<div class=\"form-group\"> <div class=\"alert alert-success fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>  Vous avez été déconnecté avec succès. A bientôt ;) </div> </div>';
}

#if(!isset(\$_GET['query']) or empty(\$_GET['query'])) {
#\t\$query = \"gozpeak\";
#}


/******** Finally, set Global var if \$message isset, and simply redirect to HOME *********/
if (isset(\$message)) {
\tsession_start();
  \$_SESSION['msg'] = \$message;
}

header('location: '.\$baseUrl.'/');

?>
";
        
        $__internal_66d3808d87d29d0fcac1fb1288a738e27d4073ad455238922b42fd3e1242eae5->leave($__internal_66d3808d87d29d0fcac1fb1288a738e27d4073ad455238922b42fd3e1242eae5_prof);

        
        $__internal_8291913305c5460c35bc187f2eec2dc63c23278dc26207d5687b20b126f430f1->leave($__internal_8291913305c5460c35bc187f2eec2dc63c23278dc26207d5687b20b126f430f1_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/logout.php";
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

require_once(CONTROLLERS.'language.php');
require_once(LIB.'sessions_init.php');

\$_SESSION = array();
if(session_destroy()) {
\t\$message='<div class=\"form-group\"> <div class=\"alert alert-success fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>  Vous avez été déconnecté avec succès. A bientôt ;) </div> </div>';
}

#if(!isset(\$_GET['query']) or empty(\$_GET['query'])) {
#\t\$query = \"gozpeak\";
#}


/******** Finally, set Global var if \$message isset, and simply redirect to HOME *********/
if (isset(\$message)) {
\tsession_start();
  \$_SESSION['msg'] = \$message;
}

header('location: '.\$baseUrl.'/');

?>
", "Gozpeak/controllers/logout.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/logout.php");
    }
}
