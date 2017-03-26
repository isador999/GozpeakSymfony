<?php

/* Gozpeak/controllers/list.php */
class __TwigTemplate_a783c22b0ac47a2788e3d146133e12ab50ba893e895993396f63bc779e9cab3c extends Twig_Template
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
        $__internal_4f1e8a5b259d40a96bc1a3b5fed5efc31ecc041e2bae5e645dd8b9e4e030fb41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f1e8a5b259d40a96bc1a3b5fed5efc31ecc041e2bae5e645dd8b9e4e030fb41->enter($__internal_4f1e8a5b259d40a96bc1a3b5fed5efc31ecc041e2bae5e645dd8b9e4e030fb41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/list.php"));

        $__internal_bf335eda6b9ff707e3efaaffab7c0d42e77a982d63d9cf61048ff31b4097a21a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf335eda6b9ff707e3efaaffab7c0d42e77a982d63d9cf61048ff31b4097a21a->enter($__internal_bf335eda6b9ff707e3efaaffab7c0d42e77a982d63d9cf61048ff31b4097a21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/list.php"));

        // line 1
        echo "<?php

#require_once('lib/sessions.php');
require_once(CONTROLLERS.'init.php');
require_once(MODELS.'dbconnect.php');
require_once(MODELS.'list_pagination_functions.php');

//setlocale(LC_TIME, 'fr_FR');
setlocale(LC_TIME, 'fr_FR.UTF8');
setlocale(LC_ALL, 'fra_fra');
date_default_timezone_set(\"Europe/Paris\");
mb_internal_encoding(\"UTF-8\");

\$ViewPages = array();
\$ViewFooterPages = array();
\$ViewNavPages = array();

if(isset(\$_GET['query']) && !empty(\$_GET['query'])) {
\t\$query = \$_GET['query'];
}


/***** Define 3 current years *****/
\$sortYears = array();
\$sortYears[] = date(\"Y\")-1;
\$sortYears[] = date(\"Y\");
\$sortYears[] = date(\"Y\")+1;

\$current_eventyear = date(\"Y\");
\$current_ideayear = date(\"Y\");

/********** Tests sortMonths **********/
//\$current_eventmonth = ucfirst(strftime(\"%B\"));
//\$current_ideamonth = ucfirst(strftime(\"%B\"));
\$current_eventmonth = \$list[\$_SESSION['language']]['monthpicker']['option'][12]['entry'];
\$current_ideamonth = \$list[\$_SESSION['language']]['monthpicker']['option'][12]['entry'];

//Source Views
\$logged = check_logged();
if (\$logged == 1) {
\t\$ViewNavPages[] = MODALS.'modal-navbar.php';
\t\$ViewNavPages[] = MODALS.'modal-postevent-logged.php';
\t\$ViewNavPages[] = VIEWS.'header-logged.php';

\t\$ViewPages[] = VIEWS.'list.php';

\t\$ViewFooterPages[] = MODALS.'modal-footer.php';
\t\$ViewFooterPages[] = VIEWS.'footer.php';
} else {
\t\$ViewNavPages[] = MODALS.'modal-navbar.php';
\t\$ViewNavPages[] = MODALS.'modal-postevent-notlogged.php';
\t\$ViewNavPages[] = VIEWS.'header-notlogged.php';

\t\$ViewPages[] = VIEWS.'list.php';

\t\$ViewFooterPages[] = MODALS.'modal-footer.php';
\t\$ViewFooterPages[] = VIEWS.'footer.php';
}


\$ViewTitle = \$generic[\$_SESSION['language']]['region'][0].' - '.'Evénements';

require_once(VIEWS.'maintemplate.php');

unset(\$_SESSION['msg']);

?>
";
        
        $__internal_4f1e8a5b259d40a96bc1a3b5fed5efc31ecc041e2bae5e645dd8b9e4e030fb41->leave($__internal_4f1e8a5b259d40a96bc1a3b5fed5efc31ecc041e2bae5e645dd8b9e4e030fb41_prof);

        
        $__internal_bf335eda6b9ff707e3efaaffab7c0d42e77a982d63d9cf61048ff31b4097a21a->leave($__internal_bf335eda6b9ff707e3efaaffab7c0d42e77a982d63d9cf61048ff31b4097a21a_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/list.php";
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

#require_once('lib/sessions.php');
require_once(CONTROLLERS.'init.php');
require_once(MODELS.'dbconnect.php');
require_once(MODELS.'list_pagination_functions.php');

//setlocale(LC_TIME, 'fr_FR');
setlocale(LC_TIME, 'fr_FR.UTF8');
setlocale(LC_ALL, 'fra_fra');
date_default_timezone_set(\"Europe/Paris\");
mb_internal_encoding(\"UTF-8\");

\$ViewPages = array();
\$ViewFooterPages = array();
\$ViewNavPages = array();

if(isset(\$_GET['query']) && !empty(\$_GET['query'])) {
\t\$query = \$_GET['query'];
}


/***** Define 3 current years *****/
\$sortYears = array();
\$sortYears[] = date(\"Y\")-1;
\$sortYears[] = date(\"Y\");
\$sortYears[] = date(\"Y\")+1;

\$current_eventyear = date(\"Y\");
\$current_ideayear = date(\"Y\");

/********** Tests sortMonths **********/
//\$current_eventmonth = ucfirst(strftime(\"%B\"));
//\$current_ideamonth = ucfirst(strftime(\"%B\"));
\$current_eventmonth = \$list[\$_SESSION['language']]['monthpicker']['option'][12]['entry'];
\$current_ideamonth = \$list[\$_SESSION['language']]['monthpicker']['option'][12]['entry'];

//Source Views
\$logged = check_logged();
if (\$logged == 1) {
\t\$ViewNavPages[] = MODALS.'modal-navbar.php';
\t\$ViewNavPages[] = MODALS.'modal-postevent-logged.php';
\t\$ViewNavPages[] = VIEWS.'header-logged.php';

\t\$ViewPages[] = VIEWS.'list.php';

\t\$ViewFooterPages[] = MODALS.'modal-footer.php';
\t\$ViewFooterPages[] = VIEWS.'footer.php';
} else {
\t\$ViewNavPages[] = MODALS.'modal-navbar.php';
\t\$ViewNavPages[] = MODALS.'modal-postevent-notlogged.php';
\t\$ViewNavPages[] = VIEWS.'header-notlogged.php';

\t\$ViewPages[] = VIEWS.'list.php';

\t\$ViewFooterPages[] = MODALS.'modal-footer.php';
\t\$ViewFooterPages[] = VIEWS.'footer.php';
}


\$ViewTitle = \$generic[\$_SESSION['language']]['region'][0].' - '.'Evénements';

require_once(VIEWS.'maintemplate.php');

unset(\$_SESSION['msg']);

?>
", "Gozpeak/controllers/list.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/list.php");
    }
}
