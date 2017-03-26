<?php

/* Gozpeak/controllers/event.php */
class __TwigTemplate_d33165a507144857e31e737037963e553645aa8f1654803eece164e04364b6ad extends Twig_Template
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
        $__internal_8679a5069bf2518d4144833b31c8098ecbf4deecf36c07d892331dc2918217f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8679a5069bf2518d4144833b31c8098ecbf4deecf36c07d892331dc2918217f7->enter($__internal_8679a5069bf2518d4144833b31c8098ecbf4deecf36c07d892331dc2918217f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/event.php"));

        $__internal_cc451e3410b454057a442bc86b97fab2793727ea091cbde1d4b9bc40b138b708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc451e3410b454057a442bc86b97fab2793727ea091cbde1d4b9bc40b138b708->enter($__internal_cc451e3410b454057a442bc86b97fab2793727ea091cbde1d4b9bc40b138b708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/event.php"));

        // line 1
        echo "<?php

session_start();
require_once(CONTROLLERS.'init.php');
require_once(MODELS.'dbconnect.php');
require_once(MODELS.'event_functions.php');

/***** Default variables *****/
\$user_is_organizer = 0;
\$user_registered = 0;
/*****************************/
/* Set List of views to be sourced */
\$ViewPages = array();
\$ViewFooterPages = array();
\$ViewNavPages = array();


if(isset(\$_GET['query']) && !empty(\$_GET['query'])) {
  \$query = \$_GET['query'];
}

if(isset(\$_GET['event']) && !empty(\$_GET['event'])) {
\t\$eventname = \$_GET['event'];
}



/***** Retrieve event infos from Database *****/
\$infos_event = retrieve_event(\$DB, \$eventname);
\$eventid = \$infos_event['id'];

\$DiffDate = retrieve_remaining_days_event(\$DB, \$eventname);
if (\$DiffDate < 0) {
\t\$DiffDate = \"Evenement terminé\";
} else {
\t\$DiffDate .= \" jours\";
}


/***** Count number of registered members for event *****/
\$nb_members = event_members_count(\$DB, \$eventid);

/***** Check if user logged *****/
\$logged = check_logged();
if (\$logged == 1) {
\t/***** Check if user is already registered to event, or if user is organizer *****/
\t\$pseudo = \$_SESSION['profil'];
\t\$userid = retrieve_userid(\$DB, \$pseudo);
\t\$eventuser_entries = check_eventuser_association(\$DB, \$eventid, \$userid);

\tif (\$pseudo == \$infos_event['organizer']) {
\t\t\$user_is_organizer = 1;
\t} elseif(!empty(\$pseudo)) {
\t\tif(\$eventuser_entries > 0) {
\t\t\t\$user_registered = 1;
\t\t} else {
\t\t  \$user_registered = 0;
\t\t}
\t}

  \$ViewNavPages[] = MODALS.'modal-postevent-logged.php';
  \$ViewNavPages[] = VIEWS.'header-logged.php';
  \$ViewPages[] = MODALS.'modal-displaymembers.php';
  \$ViewPages[] = VIEWS.'event-logged.php';
} else {
  \$ViewNavPages[] = VIEWS.'header-notlogged.php';
  \$ViewNavPages[] = MODALS.'modal-postevent-notlogged.php';
  \$ViewPages[] = VIEWS.'event-notlogged.php';
}

\$ViewNavPages[] = MODALS.'modal-navbar.php';

\$ViewFooterPages[] = MODALS.'modal-footer.php';
\$ViewFooterPages[] = VIEWS.'footer.php';

\$ViewTitle = \$generic[\$_SESSION['language']]['region'][0].' - '.\$generic[\$_SESSION['language']]['city'][0]['name'];


require_once(VIEWS.'maintemplate.php');

unset(\$_SESSION['msg']);

?>
";
        
        $__internal_8679a5069bf2518d4144833b31c8098ecbf4deecf36c07d892331dc2918217f7->leave($__internal_8679a5069bf2518d4144833b31c8098ecbf4deecf36c07d892331dc2918217f7_prof);

        
        $__internal_cc451e3410b454057a442bc86b97fab2793727ea091cbde1d4b9bc40b138b708->leave($__internal_cc451e3410b454057a442bc86b97fab2793727ea091cbde1d4b9bc40b138b708_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/event.php";
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
require_once(CONTROLLERS.'init.php');
require_once(MODELS.'dbconnect.php');
require_once(MODELS.'event_functions.php');

/***** Default variables *****/
\$user_is_organizer = 0;
\$user_registered = 0;
/*****************************/
/* Set List of views to be sourced */
\$ViewPages = array();
\$ViewFooterPages = array();
\$ViewNavPages = array();


if(isset(\$_GET['query']) && !empty(\$_GET['query'])) {
  \$query = \$_GET['query'];
}

if(isset(\$_GET['event']) && !empty(\$_GET['event'])) {
\t\$eventname = \$_GET['event'];
}



/***** Retrieve event infos from Database *****/
\$infos_event = retrieve_event(\$DB, \$eventname);
\$eventid = \$infos_event['id'];

\$DiffDate = retrieve_remaining_days_event(\$DB, \$eventname);
if (\$DiffDate < 0) {
\t\$DiffDate = \"Evenement terminé\";
} else {
\t\$DiffDate .= \" jours\";
}


/***** Count number of registered members for event *****/
\$nb_members = event_members_count(\$DB, \$eventid);

/***** Check if user logged *****/
\$logged = check_logged();
if (\$logged == 1) {
\t/***** Check if user is already registered to event, or if user is organizer *****/
\t\$pseudo = \$_SESSION['profil'];
\t\$userid = retrieve_userid(\$DB, \$pseudo);
\t\$eventuser_entries = check_eventuser_association(\$DB, \$eventid, \$userid);

\tif (\$pseudo == \$infos_event['organizer']) {
\t\t\$user_is_organizer = 1;
\t} elseif(!empty(\$pseudo)) {
\t\tif(\$eventuser_entries > 0) {
\t\t\t\$user_registered = 1;
\t\t} else {
\t\t  \$user_registered = 0;
\t\t}
\t}

  \$ViewNavPages[] = MODALS.'modal-postevent-logged.php';
  \$ViewNavPages[] = VIEWS.'header-logged.php';
  \$ViewPages[] = MODALS.'modal-displaymembers.php';
  \$ViewPages[] = VIEWS.'event-logged.php';
} else {
  \$ViewNavPages[] = VIEWS.'header-notlogged.php';
  \$ViewNavPages[] = MODALS.'modal-postevent-notlogged.php';
  \$ViewPages[] = VIEWS.'event-notlogged.php';
}

\$ViewNavPages[] = MODALS.'modal-navbar.php';

\$ViewFooterPages[] = MODALS.'modal-footer.php';
\$ViewFooterPages[] = VIEWS.'footer.php';

\$ViewTitle = \$generic[\$_SESSION['language']]['region'][0].' - '.\$generic[\$_SESSION['language']]['city'][0]['name'];


require_once(VIEWS.'maintemplate.php');

unset(\$_SESSION['msg']);

?>
", "Gozpeak/controllers/event.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/event.php");
    }
}
