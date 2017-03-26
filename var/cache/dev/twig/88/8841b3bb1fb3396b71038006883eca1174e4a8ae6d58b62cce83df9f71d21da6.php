<?php

/* Gozpeak/controllers/rennes.php.old */
class __TwigTemplate_72ac1110f716c8205a29a355663c5dc5e2d66f54e453b8e9e6d7310b972cd7e1 extends Twig_Template
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
        $__internal_40d3369014790ae9c57a6cc7b65e0d2111ee91be407876b28dcfbbecfae327cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40d3369014790ae9c57a6cc7b65e0d2111ee91be407876b28dcfbbecfae327cb->enter($__internal_40d3369014790ae9c57a6cc7b65e0d2111ee91be407876b28dcfbbecfae327cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/rennes.php.old"));

        $__internal_0fbeb771361caa168327954edb53e627ef46aadcc7d95f2024e98d56906c6b75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fbeb771361caa168327954edb53e627ef46aadcc7d95f2024e98d56906c6b75->enter($__internal_0fbeb771361caa168327954edb53e627ef46aadcc7d95f2024e98d56906c6b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/rennes.php.old"));

        // line 1
        echo "<?php

require_once('lib/sessions.php');
require_once('lib/display.php');
require_once('models/dbconnect.php');


if(empty(\$_GET['query'])) {
\t\$query = \"gozpeak\";
}

\$logged = check_logged();

include_once('Views/head.php');

if (\$logged == 1) {
        include_once('Views/headband-logged.php');
} else {
        include_once('Views/headband-notlogged.php');
}

if(!empty(\$_SESSION['profil']) && (\$_SERVER['HTTP_REFERER'] == \"https://gozpeak.no-ip.info/index.php?page=connexion\")) {
\t\$message = \"Content de vous revoir, \". \$_SESSION['profil'];
} else {
\t\$message = \"\";
}


include_once('Views/rennes.php');
include_once('Views/footer.php');

?>
";
        
        $__internal_40d3369014790ae9c57a6cc7b65e0d2111ee91be407876b28dcfbbecfae327cb->leave($__internal_40d3369014790ae9c57a6cc7b65e0d2111ee91be407876b28dcfbbecfae327cb_prof);

        
        $__internal_0fbeb771361caa168327954edb53e627ef46aadcc7d95f2024e98d56906c6b75->leave($__internal_0fbeb771361caa168327954edb53e627ef46aadcc7d95f2024e98d56906c6b75_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/rennes.php.old";
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

require_once('lib/sessions.php');
require_once('lib/display.php');
require_once('models/dbconnect.php');


if(empty(\$_GET['query'])) {
\t\$query = \"gozpeak\";
}

\$logged = check_logged();

include_once('Views/head.php');

if (\$logged == 1) {
        include_once('Views/headband-logged.php');
} else {
        include_once('Views/headband-notlogged.php');
}

if(!empty(\$_SESSION['profil']) && (\$_SERVER['HTTP_REFERER'] == \"https://gozpeak.no-ip.info/index.php?page=connexion\")) {
\t\$message = \"Content de vous revoir, \". \$_SESSION['profil'];
} else {
\t\$message = \"\";
}


include_once('Views/rennes.php');
include_once('Views/footer.php');

?>
", "Gozpeak/controllers/rennes.php.old", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/rennes.php.old");
    }
}
