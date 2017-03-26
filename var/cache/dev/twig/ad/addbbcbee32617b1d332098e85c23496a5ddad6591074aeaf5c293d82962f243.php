<?php

/* Gozpeak/controllers/event_delmember.php */
class __TwigTemplate_1da5369f2060d16ed640538cffd6f2294973663dbecf9b87ce24e589d8e67772 extends Twig_Template
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
        $__internal_107887c2da734fbdc5563bf692810934b587e670765216383a8054a57455fd46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_107887c2da734fbdc5563bf692810934b587e670765216383a8054a57455fd46->enter($__internal_107887c2da734fbdc5563bf692810934b587e670765216383a8054a57455fd46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/event_delmember.php"));

        $__internal_e6cdc93119e364d15440219ca7d4d16159cb68729d1a227493d9fc2017c74d46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6cdc93119e364d15440219ca7d4d16159cb68729d1a227493d9fc2017c74d46->enter($__internal_e6cdc93119e364d15440219ca7d4d16159cb68729d1a227493d9fc2017c74d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/event_delmember.php"));

        // line 1
        echo "<?php

session_start();
require_once('./language.php');
require_once('./lib/sessions_init.php');
require_once('./lib/check_login.php');
require_once('./lib/mailgun.php');
require_once('../models/dbconnect.php');
require_once('../models/eventidea_member_functions.php');


\$logged = check_logged();
/****** Register in database if user logged ******/
if (\$logged == 1) {
\tif(\$_POST) {
\t\t/***** Check eventname hidden field and select informations if OK *****/
\t\t\$eventname = isset(\$_POST['delmember-eventname']) ? \$_POST['delmember-eventname'] : '';
\t\t\$pseudo_userlogged = isset(\$_SESSION['profil']) ? \$_SESSION['profil'] : '';

\t\tif(!empty(\$eventname) || (!empty(\$pseudo_userlogged))) {
\t\t\t\$infos_event = retrieve_event(\$DB, \$eventname);

\t\t\t/***** If date of event not expired *****/
\t\t\tif(strtotime(\$infos_event['eventdatetime']) > strtotime(\$infos_event['NowDate'])) {
\t\t\t\t\$userid = retrieve_userid(\$DB, \$pseudo_userlogged);

\t\t\t\t/***** Delete member-event association (only if not already registered) *****/
\t\t\t\tif(!empty(\$infos_event['id']) || (!empty(\$userid))) {
\t\t\t\t\t\$eventid = \$infos_event['id'];
\t\t\t\t\t\$eventuser_entries_before = check_eventuser_association(\$DB, \$eventid, \$userid);
\t\t\t\t\tif(\$eventuser_entries_before > 0) {
\t\t\t\t\t\t\$data_eventusers = array(\$infos_event['id'], \$userid);
\t\t\t\t\t\tdel_eventuser_association(\$DB, \$data_eventusers);

       \t\t\t\t\t\t/****** Check entries in database ******/
\t\t\t\t\t\t\$eventuser_entries = check_eventuser_association(\$DB, \$eventid, \$userid);

\t\t\t\t\t\tif(\$eventuser_entries < 1) {
\t\t\t\t\t\t\t/*********** Optionnaly send mail to user ********/
\t\t\t\t\t\t\t/*********** This implies 'select mail' request *********/
\t\t\t\t\t\t\t\$message = '<div class=\"form-group\"> <div class=\"alert alert-success fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Vous avez été desinscrit de l\\'événement avec succès </div> </div>';
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$message = '<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Une erreur est survenue lors de la désinscription à l\\'événement - second </div> </div>';
\t\t\t\t\t\t}
\t\t\t\t\t} else {
\t\t\t\t\t\t\$message = '<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Erreur, vous n\\'étiez pas inscrit à cet événement </div> </div>';
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\t\$message = '<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Une erreur est survenue lors de la désinscription à l\\'événement </div> </div>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\t\$message = '<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Désolé, cet événement est terminé </div> </div>';
\t\t\t}
\t\t} else {
\t\t\t\$message = '<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Une erreur est survenue lors de la désinscription à l\\'événement </div> </div>';
\t\t}
\t} else {
\t\t\$message = '<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Une erreur est survenue lors de la désinscription à l\\'événement </div> </div>';
\t}

} else {
\t\$message = '<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Vous devez être connecté pour vous désinscrire d\\'un événement </div> </div>';
}


if (isset(\$message)) {
        \$_SESSION['msg'] = \$message;
}

header('location: '.\$baseUrl.'/index.php?page=event&query='.\$infos_event['eventtype'].'&event='.\$eventname);


?>
";
        
        $__internal_107887c2da734fbdc5563bf692810934b587e670765216383a8054a57455fd46->leave($__internal_107887c2da734fbdc5563bf692810934b587e670765216383a8054a57455fd46_prof);

        
        $__internal_e6cdc93119e364d15440219ca7d4d16159cb68729d1a227493d9fc2017c74d46->leave($__internal_e6cdc93119e364d15440219ca7d4d16159cb68729d1a227493d9fc2017c74d46_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/event_delmember.php";
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
require_once('./language.php');
require_once('./lib/sessions_init.php');
require_once('./lib/check_login.php');
require_once('./lib/mailgun.php');
require_once('../models/dbconnect.php');
require_once('../models/eventidea_member_functions.php');


\$logged = check_logged();
/****** Register in database if user logged ******/
if (\$logged == 1) {
\tif(\$_POST) {
\t\t/***** Check eventname hidden field and select informations if OK *****/
\t\t\$eventname = isset(\$_POST['delmember-eventname']) ? \$_POST['delmember-eventname'] : '';
\t\t\$pseudo_userlogged = isset(\$_SESSION['profil']) ? \$_SESSION['profil'] : '';

\t\tif(!empty(\$eventname) || (!empty(\$pseudo_userlogged))) {
\t\t\t\$infos_event = retrieve_event(\$DB, \$eventname);

\t\t\t/***** If date of event not expired *****/
\t\t\tif(strtotime(\$infos_event['eventdatetime']) > strtotime(\$infos_event['NowDate'])) {
\t\t\t\t\$userid = retrieve_userid(\$DB, \$pseudo_userlogged);

\t\t\t\t/***** Delete member-event association (only if not already registered) *****/
\t\t\t\tif(!empty(\$infos_event['id']) || (!empty(\$userid))) {
\t\t\t\t\t\$eventid = \$infos_event['id'];
\t\t\t\t\t\$eventuser_entries_before = check_eventuser_association(\$DB, \$eventid, \$userid);
\t\t\t\t\tif(\$eventuser_entries_before > 0) {
\t\t\t\t\t\t\$data_eventusers = array(\$infos_event['id'], \$userid);
\t\t\t\t\t\tdel_eventuser_association(\$DB, \$data_eventusers);

       \t\t\t\t\t\t/****** Check entries in database ******/
\t\t\t\t\t\t\$eventuser_entries = check_eventuser_association(\$DB, \$eventid, \$userid);

\t\t\t\t\t\tif(\$eventuser_entries < 1) {
\t\t\t\t\t\t\t/*********** Optionnaly send mail to user ********/
\t\t\t\t\t\t\t/*********** This implies 'select mail' request *********/
\t\t\t\t\t\t\t\$message = '<div class=\"form-group\"> <div class=\"alert alert-success fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Vous avez été desinscrit de l\\'événement avec succès </div> </div>';
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$message = '<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Une erreur est survenue lors de la désinscription à l\\'événement - second </div> </div>';
\t\t\t\t\t\t}
\t\t\t\t\t} else {
\t\t\t\t\t\t\$message = '<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Erreur, vous n\\'étiez pas inscrit à cet événement </div> </div>';
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\t\$message = '<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Une erreur est survenue lors de la désinscription à l\\'événement </div> </div>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\t\$message = '<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Désolé, cet événement est terminé </div> </div>';
\t\t\t}
\t\t} else {
\t\t\t\$message = '<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Une erreur est survenue lors de la désinscription à l\\'événement </div> </div>';
\t\t}
\t} else {
\t\t\$message = '<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Une erreur est survenue lors de la désinscription à l\\'événement </div> </div>';
\t}

} else {
\t\$message = '<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Vous devez être connecté pour vous désinscrire d\\'un événement </div> </div>';
}


if (isset(\$message)) {
        \$_SESSION['msg'] = \$message;
}

header('location: '.\$baseUrl.'/index.php?page=event&query='.\$infos_event['eventtype'].'&event='.\$eventname);


?>
", "Gozpeak/controllers/event_delmember.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/event_delmember.php");
    }
}
