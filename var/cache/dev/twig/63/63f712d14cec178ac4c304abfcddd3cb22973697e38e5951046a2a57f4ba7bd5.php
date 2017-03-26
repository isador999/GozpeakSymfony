<?php

/* Gozpeak/controllers/profil.php */
class __TwigTemplate_5aced809bab57b51a049de0ed885c37734b580551708ab6d47958bd34c9767dc extends Twig_Template
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
        $__internal_f2e15818f20a74164b99687f710a6e1971844e45af2a513fa433bae038146fd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2e15818f20a74164b99687f710a6e1971844e45af2a513fa433bae038146fd7->enter($__internal_f2e15818f20a74164b99687f710a6e1971844e45af2a513fa433bae038146fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/profil.php"));

        $__internal_832fe4ef77cb3107d7be14c8fce605df57f5c0fd1f9f1a3301b4713ec77fa5de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_832fe4ef77cb3107d7be14c8fce605df57f5c0fd1f9f1a3301b4713ec77fa5de->enter($__internal_832fe4ef77cb3107d7be14c8fce605df57f5c0fd1f9f1a3301b4713ec77fa5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/profil.php"));

        // line 1
        echo "<?php

session_start();

require_once(LIB.'sessions_init.php');
require_once(CONTROLLERS.'init.php');
require_once(MODELS.'dbconnect.php');
require_once(MODELS.'profile_functions.php');


/* Set List of views to be sourced */
\$ViewPages = array();
\$ViewFooterPages = array();
\$ViewNavPages = array();


if (isset(\$_GET['profil']) && (!empty(\$_GET['profil']))) {
\t\$provided_profile = \$_GET['profil'];
\t\$nbre_pseudo = pseudo_exist(\$DB, \$provided_profile);
\tif(\$nbre_pseudo > 0) {
\t\t\$pseudo = \$provided_profile;
\t} else {
\t\t\$error=\"unknown_pseudo\";
\t}
} elseif (isset(\$_SESSION['profil']) && (!empty(\$_SESSION['profil']))) {
\t\$pseudo = \$_SESSION['profil'];
}


if (isset(\$pseudo)) {
\t\$infos = profile_info(\$DB, \$pseudo);
\t\$nb_posted_ideas = count_ideas(\$DB, \$pseudo);

\t\$raw_connectionTime = get_last_connection(\$DB, \$pseudo);
\t\$connectionTime = new DateTime(\$raw_connectionTime);
\t\$now = new DateTime();

\t//Set diff in object
\t\$connect_interval = \$connectionTime->diff(\$now);
\tif(\$connect_interval->d < 1) {
\t\t\$last_connection_interval = \$connect_interval->format(\"Il y a moins de 24 heures\");
\t} elseif (\$connect_interval->d === 1) {
\t\t\$last_connection_interval = \$connect_interval->format(\"Hier\");
\t}\telse {
\t\t\$last_connection_interval = \$connect_interval->format(\"Il y a %d jours\");
\t}

\t\$logged = check_logged();
\tif (\$logged == 1) {

\t\t\$ViewNavPages[] = MODALS.'modal-postevent-logged.php';
\t\t\$ViewNavPages[] = VIEWS.'header-logged.php';
\t\tif (\$pseudo == \$_SESSION['profil']) {
\t\t\t\$connect_interval = \$profile[\$_SESSION['language']]['connect_interval']['connected'];

\t\t\t\$ViewPages[] = MODALS.'modal-profile-eventlist.php';
\t\t\t\$ViewPages[] = VIEWS.'profile-logged.php';
\t\t\t\$ViewPages[] = MODALS.'modal-profile.php';
\t\t} else {
\t\t\t\$ViewPages[] = VIEWS.'profile-notlogged.php';
\t\t}
\t} else {
\t\t\$ViewNavPages[] = MODALS.'modal-postevent-notlogged.php';
\t\t\$ViewNavPages[] = VIEWS.'header-notlogged.php';
\t\t\$ViewPages[] = VIEWS.'profile-notlogged.php';
\t}

\tif (\$infos['premium'] == 0) {
\t\t\$_SESSION['ispremium'] = \"Non\";
\t} else {
\t\t\$_SESSION['ispremium'] = \"Oui\";
\t}
} else {
\t\$error=\"unknown_pseudo\";
}

/* Retrieve Subscribe date of the user */
\$ViewNavPages[] = MODALS.'modal-navbar.php';
\$ViewFooterPages[] = MODALS.'modal-footer.php';
\$ViewFooterPages[] = VIEWS.'footer.php';

unset(\$_SESSION['msg']);

/***** If message is set, so profil entered does not exist or link is corrupted *****/
if (isset(\$error) && (\$error == 'unknown_pseudo')) {
\t\$message='<div class=\"form-group\"> <div class=\"text-center alert alert-warning fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Ce profil n\\'existe pas ou le lien est corrompu </div> </div>';
\t\$_SESSION['msg'] = \$message;
\theader('location: '.\$gozpeak_protocol.\$gozpeak_host.'/index.php?page=home');
}

\$ViewTitle = \$generic[\$_SESSION['language']]['region'][0];
require_once(VIEWS.'maintemplate.php');

?>
";
        
        $__internal_f2e15818f20a74164b99687f710a6e1971844e45af2a513fa433bae038146fd7->leave($__internal_f2e15818f20a74164b99687f710a6e1971844e45af2a513fa433bae038146fd7_prof);

        
        $__internal_832fe4ef77cb3107d7be14c8fce605df57f5c0fd1f9f1a3301b4713ec77fa5de->leave($__internal_832fe4ef77cb3107d7be14c8fce605df57f5c0fd1f9f1a3301b4713ec77fa5de_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/profil.php";
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

require_once(LIB.'sessions_init.php');
require_once(CONTROLLERS.'init.php');
require_once(MODELS.'dbconnect.php');
require_once(MODELS.'profile_functions.php');


/* Set List of views to be sourced */
\$ViewPages = array();
\$ViewFooterPages = array();
\$ViewNavPages = array();


if (isset(\$_GET['profil']) && (!empty(\$_GET['profil']))) {
\t\$provided_profile = \$_GET['profil'];
\t\$nbre_pseudo = pseudo_exist(\$DB, \$provided_profile);
\tif(\$nbre_pseudo > 0) {
\t\t\$pseudo = \$provided_profile;
\t} else {
\t\t\$error=\"unknown_pseudo\";
\t}
} elseif (isset(\$_SESSION['profil']) && (!empty(\$_SESSION['profil']))) {
\t\$pseudo = \$_SESSION['profil'];
}


if (isset(\$pseudo)) {
\t\$infos = profile_info(\$DB, \$pseudo);
\t\$nb_posted_ideas = count_ideas(\$DB, \$pseudo);

\t\$raw_connectionTime = get_last_connection(\$DB, \$pseudo);
\t\$connectionTime = new DateTime(\$raw_connectionTime);
\t\$now = new DateTime();

\t//Set diff in object
\t\$connect_interval = \$connectionTime->diff(\$now);
\tif(\$connect_interval->d < 1) {
\t\t\$last_connection_interval = \$connect_interval->format(\"Il y a moins de 24 heures\");
\t} elseif (\$connect_interval->d === 1) {
\t\t\$last_connection_interval = \$connect_interval->format(\"Hier\");
\t}\telse {
\t\t\$last_connection_interval = \$connect_interval->format(\"Il y a %d jours\");
\t}

\t\$logged = check_logged();
\tif (\$logged == 1) {

\t\t\$ViewNavPages[] = MODALS.'modal-postevent-logged.php';
\t\t\$ViewNavPages[] = VIEWS.'header-logged.php';
\t\tif (\$pseudo == \$_SESSION['profil']) {
\t\t\t\$connect_interval = \$profile[\$_SESSION['language']]['connect_interval']['connected'];

\t\t\t\$ViewPages[] = MODALS.'modal-profile-eventlist.php';
\t\t\t\$ViewPages[] = VIEWS.'profile-logged.php';
\t\t\t\$ViewPages[] = MODALS.'modal-profile.php';
\t\t} else {
\t\t\t\$ViewPages[] = VIEWS.'profile-notlogged.php';
\t\t}
\t} else {
\t\t\$ViewNavPages[] = MODALS.'modal-postevent-notlogged.php';
\t\t\$ViewNavPages[] = VIEWS.'header-notlogged.php';
\t\t\$ViewPages[] = VIEWS.'profile-notlogged.php';
\t}

\tif (\$infos['premium'] == 0) {
\t\t\$_SESSION['ispremium'] = \"Non\";
\t} else {
\t\t\$_SESSION['ispremium'] = \"Oui\";
\t}
} else {
\t\$error=\"unknown_pseudo\";
}

/* Retrieve Subscribe date of the user */
\$ViewNavPages[] = MODALS.'modal-navbar.php';
\$ViewFooterPages[] = MODALS.'modal-footer.php';
\$ViewFooterPages[] = VIEWS.'footer.php';

unset(\$_SESSION['msg']);

/***** If message is set, so profil entered does not exist or link is corrupted *****/
if (isset(\$error) && (\$error == 'unknown_pseudo')) {
\t\$message='<div class=\"form-group\"> <div class=\"text-center alert alert-warning fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Ce profil n\\'existe pas ou le lien est corrompu </div> </div>';
\t\$_SESSION['msg'] = \$message;
\theader('location: '.\$gozpeak_protocol.\$gozpeak_host.'/index.php?page=home');
}

\$ViewTitle = \$generic[\$_SESSION['language']]['region'][0];
require_once(VIEWS.'maintemplate.php');

?>
", "Gozpeak/controllers/profil.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/profil.php");
    }
}
