<?php

/* Gozpeak/controllers/idea.php */
class __TwigTemplate_1d6e4b962ab6d01b0d2a487927fe4010aa335b75c08dfbbccfe83555516682c4 extends Twig_Template
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
        $__internal_c6f0bb0169fa2db4a2f49c3229911658114d60a24c42f984917d73d676848ec3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6f0bb0169fa2db4a2f49c3229911658114d60a24c42f984917d73d676848ec3->enter($__internal_c6f0bb0169fa2db4a2f49c3229911658114d60a24c42f984917d73d676848ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/idea.php"));

        $__internal_8569683dc89027fc9b6188f68cf872eb93ac40f8e20274f48409a5bb3b2d610f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8569683dc89027fc9b6188f68cf872eb93ac40f8e20274f48409a5bb3b2d610f->enter($__internal_8569683dc89027fc9b6188f68cf872eb93ac40f8e20274f48409a5bb3b2d610f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/idea.php"));

        // line 1
        echo "<?php

session_start();
require_once(CONTROLLERS.'init.php');
require_once(MODELS.'dbconnect.php');
require_once(MODELS.'idea_functions.php');

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

if(isset(\$_GET['idea']) && !empty(\$_GET['idea'])) {
\t\$ideaname = \$_GET['idea'];
}



/***** Retrieve idea informations from Database *****/
\$infos_idea = retrieve_idea(\$DB, \$ideaname);
\$ideaid = \$infos_idea['id'];

//Set corresponding language vars in \$infos_idea
switch(\$infos_idea['level_language']) {
  case \"beginner\":
    \$infos_idea['level_language'] = \$modal[\$_SESSION['language']]['selectlanglevel']['option'][0]['entry'];
    break;
  case \"middle\":
    \$infos_idea['level_language'] = \$modal[\$_SESSION['language']]['selectlanglevel']['option'][1]['entry'];
    break;
  case \"advanced\":
    \$infos_idea['level_language'] = \$modal[\$_SESSION['language']]['selectlanglevel']['option'][2]['entry'];
    break;
  default:
    \$infos_idea['level_language'] = \"<i> Unknown level_language </i>\";
}


\$DiffDate = retrieve_remaining_days_idea(\$DB, \$ideaname);
if (\$DiffDate < 0) {
\t\$DiffDate = \"Evenement terminé\";
} else {
\t\$DiffDate .= \" jours\";
}


/***** Count number of registered members for event *****/
\$nb_members = idea_members_count(\$DB, \$ideaid);

/***** Check if user logged *****/
\$logged = check_logged();

if (\$logged == 1) {
\t/***** Check if user is already registered to the event *****/
  \$pseudo = \$_SESSION['profil'];
  \$userid = retrieve_userid(\$DB, \$pseudo);
  \$nbre_entries = check_ideauser_association(\$DB, \$ideaid, \$userid);

\tif (\$pseudo == \$infos_idea['organizer']) {
\t\t\$user_is_organizer = 1;
\t\t//require_once(MODALS.'modal-eventedit.php');
    \$ViewPages[] = MODALS.'modal-eventedit.php';
\t} elseif(!empty(\$pseudo)) {
    if(\$nbre_entries > 0) {
      \$user_registered = 1;
    } else {
      \$user_registered = 0;
    }
      if(\$nbre_entries > 0) {
        \$user_registered = 1;
      } else {
        \$user_registered = 0;
      }
  }

  \$ViewNavPages[] = MODALS.'modal-postevent-logged.php';
  \$ViewNavPages[] = VIEWS.'header-logged.php';
  \$ViewPages[] = MODALS.'modal-displaymembers.php';
  \$ViewPages[] = VIEWS.'idea-logged.php';
} else {
  \$ViewNavPages[] = MODALS.'modal-postevent-notlogged.php';
  \$ViewNavPages[] = VIEWS.'header-notlogged.php';
  \$ViewPages[] = VIEWS.'idea-notlogged.php';
}

\$ViewNavPages[] = MODALS.'modal-navbar.php';
\$ViewFooterPages[] = MODALS.'modal-footer.php';
\$ViewFooterPages[] = VIEWS.'footer.php';

\$ViewTitle = \$generic[\$_SESSION['language']]['region'][0].' - '.\$generic[\$_SESSION['language']]['city'][0]['name'];

require_once(VIEWS.'maintemplate.php');

unset(\$_SESSION['msg']);

?>
";
        
        $__internal_c6f0bb0169fa2db4a2f49c3229911658114d60a24c42f984917d73d676848ec3->leave($__internal_c6f0bb0169fa2db4a2f49c3229911658114d60a24c42f984917d73d676848ec3_prof);

        
        $__internal_8569683dc89027fc9b6188f68cf872eb93ac40f8e20274f48409a5bb3b2d610f->leave($__internal_8569683dc89027fc9b6188f68cf872eb93ac40f8e20274f48409a5bb3b2d610f_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/idea.php";
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
require_once(MODELS.'idea_functions.php');

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

if(isset(\$_GET['idea']) && !empty(\$_GET['idea'])) {
\t\$ideaname = \$_GET['idea'];
}



/***** Retrieve idea informations from Database *****/
\$infos_idea = retrieve_idea(\$DB, \$ideaname);
\$ideaid = \$infos_idea['id'];

//Set corresponding language vars in \$infos_idea
switch(\$infos_idea['level_language']) {
  case \"beginner\":
    \$infos_idea['level_language'] = \$modal[\$_SESSION['language']]['selectlanglevel']['option'][0]['entry'];
    break;
  case \"middle\":
    \$infos_idea['level_language'] = \$modal[\$_SESSION['language']]['selectlanglevel']['option'][1]['entry'];
    break;
  case \"advanced\":
    \$infos_idea['level_language'] = \$modal[\$_SESSION['language']]['selectlanglevel']['option'][2]['entry'];
    break;
  default:
    \$infos_idea['level_language'] = \"<i> Unknown level_language </i>\";
}


\$DiffDate = retrieve_remaining_days_idea(\$DB, \$ideaname);
if (\$DiffDate < 0) {
\t\$DiffDate = \"Evenement terminé\";
} else {
\t\$DiffDate .= \" jours\";
}


/***** Count number of registered members for event *****/
\$nb_members = idea_members_count(\$DB, \$ideaid);

/***** Check if user logged *****/
\$logged = check_logged();

if (\$logged == 1) {
\t/***** Check if user is already registered to the event *****/
  \$pseudo = \$_SESSION['profil'];
  \$userid = retrieve_userid(\$DB, \$pseudo);
  \$nbre_entries = check_ideauser_association(\$DB, \$ideaid, \$userid);

\tif (\$pseudo == \$infos_idea['organizer']) {
\t\t\$user_is_organizer = 1;
\t\t//require_once(MODALS.'modal-eventedit.php');
    \$ViewPages[] = MODALS.'modal-eventedit.php';
\t} elseif(!empty(\$pseudo)) {
    if(\$nbre_entries > 0) {
      \$user_registered = 1;
    } else {
      \$user_registered = 0;
    }
      if(\$nbre_entries > 0) {
        \$user_registered = 1;
      } else {
        \$user_registered = 0;
      }
  }

  \$ViewNavPages[] = MODALS.'modal-postevent-logged.php';
  \$ViewNavPages[] = VIEWS.'header-logged.php';
  \$ViewPages[] = MODALS.'modal-displaymembers.php';
  \$ViewPages[] = VIEWS.'idea-logged.php';
} else {
  \$ViewNavPages[] = MODALS.'modal-postevent-notlogged.php';
  \$ViewNavPages[] = VIEWS.'header-notlogged.php';
  \$ViewPages[] = VIEWS.'idea-notlogged.php';
}

\$ViewNavPages[] = MODALS.'modal-navbar.php';
\$ViewFooterPages[] = MODALS.'modal-footer.php';
\$ViewFooterPages[] = VIEWS.'footer.php';

\$ViewTitle = \$generic[\$_SESSION['language']]['region'][0].' - '.\$generic[\$_SESSION['language']]['city'][0]['name'];

require_once(VIEWS.'maintemplate.php');

unset(\$_SESSION['msg']);

?>
", "Gozpeak/controllers/idea.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/idea.php");
    }
}
