<?php

/* Gozpeak/controllers/event_addmember.php */
class __TwigTemplate_1aef5046f0641c6e7dc2db605c29acfc18414cc0f1cd63dde0ffb95aee930692 extends Twig_Template
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
        $__internal_12f1d23352de016e818142cd2b97aa6093677556955fad08477c44c10c8f7507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12f1d23352de016e818142cd2b97aa6093677556955fad08477c44c10c8f7507->enter($__internal_12f1d23352de016e818142cd2b97aa6093677556955fad08477c44c10c8f7507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/event_addmember.php"));

        $__internal_017d0c6d4bc2e5beb23037e5620b0d83e1b0011f0a8160fe03c7c677e7498c68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_017d0c6d4bc2e5beb23037e5620b0d83e1b0011f0a8160fe03c7c677e7498c68->enter($__internal_017d0c6d4bc2e5beb23037e5620b0d83e1b0011f0a8160fe03c7c677e7498c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/event_addmember.php"));

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
\t\t\$eventname = isset(\$_POST['addmember-eventname']) ? \$_POST['addmember-eventname'] : '';
\t\t\$pseudo_userlogged = isset(\$_SESSION['profil']) ? \$_SESSION['profil'] : '';

\t\tif(!empty(\$eventname) || (!empty(\$pseudo_userlogged))) {
\t\t\t\$infos_event = retrieve_event(\$DB, \$eventname);

\t\t\t/***** If date of event not expired *****/
\t\t\tif(strtotime(\$infos_event['eventdatetime']) > strtotime(\$infos_event['NowDate'])) {
\t\t\t\t\$userid = retrieve_userid(\$DB, \$pseudo_userlogged);

\t\t\t\t/***** Register member-event association (only if not already registered) *****/
\t\t\t\tif(!empty(\$infos_event['id']) || (!empty(\$userid))) {
\t\t\t\t\t\$eventid = \$infos_event['id'];
\t\t\t\t\t\$eventuser_entries_before = check_eventuser_association(\$DB, \$eventid, \$userid);
\t\t\t\t\tif(\$eventuser_entries_before < 1) {
\t\t\t\t\t\t\$data_eventusers = array(\$infos_event['id'], \$userid);
\t\t\t\t\t\tadd_eventuser_association(\$DB, \$data_eventusers);

       \t\t\t\t\t\t/****** Check entries in database ******/
\t\t\t\t\t\t\$eventuser_entries = check_eventuser_association(\$DB, \$eventid, \$userid);

\t\t\t\t\t\tif(\$eventuser_entries > 0) {
\t\t\t\t\t\t\t/*********** Optionnaly send mail to user ********/
\t\t\t\t\t\t\t/*********** This implies 'select mail' request *********/
\t\t\t\t\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-success fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>  Votre inscription a l\\'événement a bien été prise en compte ! </div> </div>';
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$message = '<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Une erreur est survenue lors de l\\'inscription à l\\'événement - second </div> </div>';
\t\t\t\t\t\t}
\t\t\t\t\t} else {
\t\t\t\t\t\t\$message = '<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Erreur, vous êtes déjà inscrit à cet événement </div> </div>';
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\t\$message = '<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Une erreur est survenue lors de l\\'inscription à l\\'événement </div> </div>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\t\$message = '<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Désolé, cet événement est terminé </div> </div>';
\t\t\t}
\t\t} else {
\t\t\t\$message = '<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Une erreur est survenue lors de l\\'inscription à l\\'événement </div> </div>';
\t\t}
\t} else {
\t\t\$message = '<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Une erreur est survenue lors de l\\'inscription à l\\'événement </div> </div>';
\t}
} else {
\t\$message = '<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Vous devez être connecté pour vous inscrire à un événement </div> </div>';
}


if (isset(\$message)) {
  \$_SESSION['msg'] = \$message;
}

#header('location: '.\$gozpeak_protocol.\$gozpeak_host.'/index.php?page=home');
header('location: '.\$baseUrl.'/index.php?page=event&query='.\$infos_event['eventtype'].'&event='.\$eventname);


?>
";
        
        $__internal_12f1d23352de016e818142cd2b97aa6093677556955fad08477c44c10c8f7507->leave($__internal_12f1d23352de016e818142cd2b97aa6093677556955fad08477c44c10c8f7507_prof);

        
        $__internal_017d0c6d4bc2e5beb23037e5620b0d83e1b0011f0a8160fe03c7c677e7498c68->leave($__internal_017d0c6d4bc2e5beb23037e5620b0d83e1b0011f0a8160fe03c7c677e7498c68_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/event_addmember.php";
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
\t\t\$eventname = isset(\$_POST['addmember-eventname']) ? \$_POST['addmember-eventname'] : '';
\t\t\$pseudo_userlogged = isset(\$_SESSION['profil']) ? \$_SESSION['profil'] : '';

\t\tif(!empty(\$eventname) || (!empty(\$pseudo_userlogged))) {
\t\t\t\$infos_event = retrieve_event(\$DB, \$eventname);

\t\t\t/***** If date of event not expired *****/
\t\t\tif(strtotime(\$infos_event['eventdatetime']) > strtotime(\$infos_event['NowDate'])) {
\t\t\t\t\$userid = retrieve_userid(\$DB, \$pseudo_userlogged);

\t\t\t\t/***** Register member-event association (only if not already registered) *****/
\t\t\t\tif(!empty(\$infos_event['id']) || (!empty(\$userid))) {
\t\t\t\t\t\$eventid = \$infos_event['id'];
\t\t\t\t\t\$eventuser_entries_before = check_eventuser_association(\$DB, \$eventid, \$userid);
\t\t\t\t\tif(\$eventuser_entries_before < 1) {
\t\t\t\t\t\t\$data_eventusers = array(\$infos_event['id'], \$userid);
\t\t\t\t\t\tadd_eventuser_association(\$DB, \$data_eventusers);

       \t\t\t\t\t\t/****** Check entries in database ******/
\t\t\t\t\t\t\$eventuser_entries = check_eventuser_association(\$DB, \$eventid, \$userid);

\t\t\t\t\t\tif(\$eventuser_entries > 0) {
\t\t\t\t\t\t\t/*********** Optionnaly send mail to user ********/
\t\t\t\t\t\t\t/*********** This implies 'select mail' request *********/
\t\t\t\t\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-success fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>  Votre inscription a l\\'événement a bien été prise en compte ! </div> </div>';
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$message = '<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Une erreur est survenue lors de l\\'inscription à l\\'événement - second </div> </div>';
\t\t\t\t\t\t}
\t\t\t\t\t} else {
\t\t\t\t\t\t\$message = '<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Erreur, vous êtes déjà inscrit à cet événement </div> </div>';
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\t\$message = '<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Une erreur est survenue lors de l\\'inscription à l\\'événement </div> </div>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\t\$message = '<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Désolé, cet événement est terminé </div> </div>';
\t\t\t}
\t\t} else {
\t\t\t\$message = '<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Une erreur est survenue lors de l\\'inscription à l\\'événement </div> </div>';
\t\t}
\t} else {
\t\t\$message = '<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Une erreur est survenue lors de l\\'inscription à l\\'événement </div> </div>';
\t}
} else {
\t\$message = '<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Vous devez être connecté pour vous inscrire à un événement </div> </div>';
}


if (isset(\$message)) {
  \$_SESSION['msg'] = \$message;
}

#header('location: '.\$gozpeak_protocol.\$gozpeak_host.'/index.php?page=home');
header('location: '.\$baseUrl.'/index.php?page=event&query='.\$infos_event['eventtype'].'&event='.\$eventname);


?>
", "Gozpeak/controllers/event_addmember.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/event_addmember.php");
    }
}
