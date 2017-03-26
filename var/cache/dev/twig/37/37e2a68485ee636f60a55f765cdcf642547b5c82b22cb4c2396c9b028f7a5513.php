<?php

/* Gozpeak/controllers/idea_addmember.php */
class __TwigTemplate_bc2efe6a63906a84fc4049eabf700cb959ae6b18eb059a42b6d93eb52f62c881 extends Twig_Template
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
        $__internal_675a0dbd79236ebc694a293d5a0d712055e81369f51d6f7c49877a29fdd14229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_675a0dbd79236ebc694a293d5a0d712055e81369f51d6f7c49877a29fdd14229->enter($__internal_675a0dbd79236ebc694a293d5a0d712055e81369f51d6f7c49877a29fdd14229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/idea_addmember.php"));

        $__internal_6744ac1303a2cc3df36cbad43a21aa8a58302b7cd63303b150fd327756e5b050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6744ac1303a2cc3df36cbad43a21aa8a58302b7cd63303b150fd327756e5b050->enter($__internal_6744ac1303a2cc3df36cbad43a21aa8a58302b7cd63303b150fd327756e5b050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/idea_addmember.php"));

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
\t\t/***** Check ideaname hidden field and select informations if OK *****/
\t\t\$ideaname = isset(\$_POST['addmember-ideaname']) ? \$_POST['addmember-ideaname'] : '';
\t\t\$pseudo_userlogged = isset(\$_SESSION['profil']) ? \$_SESSION['profil'] : '';

\t\tif(!empty(\$ideaname) || (!empty(\$pseudo_userlogged))) {
\t\t\t\$infos_idea = retrieve_idea(\$DB, \$ideaname);

\t\t\t/***** If date of idea not expired *****/
\t\t\tif(strtotime(\$infos_idea['ideadatetime']) > strtotime(\$infos_idea['NowDate'])) {
\t\t\t\t\$userid = retrieve_userid(\$DB, \$pseudo_userlogged);

\t\t\t\t/***** Register member-idea association (only if not already registered) *****/
\t\t\t\tif(!empty(\$infos_idea['id']) || (!empty(\$userid))) {
\t\t\t\t\t\$ideaid = \$infos_idea['id'];
\t\t\t\t\t\$ideauser_entries_before = check_ideauser_association(\$DB, \$ideaid, \$userid);
\t\t\t\t\tif(\$ideauser_entries_before < 1) {
\t\t\t\t\t\t\$data_ideausers = array(\$infos_idea['id'], \$userid);
\t\t\t\t\t\tadd_ideauser_association(\$DB, \$data_ideausers);

       \t\t\t\t\t\t/****** Check entries in database ******/
\t\t\t\t\t\t\$ideauser_entries = check_ideauser_association(\$DB, \$ideaid, \$userid);

\t\t\t\t\t\tif(\$ideauser_entries > 0) {
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
header('location: '.\$baseUrl.'/index.php?page=idea&query='.\$infos_idea['ideatype'].'&idea='.\$ideaname);


?>
";
        
        $__internal_675a0dbd79236ebc694a293d5a0d712055e81369f51d6f7c49877a29fdd14229->leave($__internal_675a0dbd79236ebc694a293d5a0d712055e81369f51d6f7c49877a29fdd14229_prof);

        
        $__internal_6744ac1303a2cc3df36cbad43a21aa8a58302b7cd63303b150fd327756e5b050->leave($__internal_6744ac1303a2cc3df36cbad43a21aa8a58302b7cd63303b150fd327756e5b050_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/idea_addmember.php";
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
\t\t/***** Check ideaname hidden field and select informations if OK *****/
\t\t\$ideaname = isset(\$_POST['addmember-ideaname']) ? \$_POST['addmember-ideaname'] : '';
\t\t\$pseudo_userlogged = isset(\$_SESSION['profil']) ? \$_SESSION['profil'] : '';

\t\tif(!empty(\$ideaname) || (!empty(\$pseudo_userlogged))) {
\t\t\t\$infos_idea = retrieve_idea(\$DB, \$ideaname);

\t\t\t/***** If date of idea not expired *****/
\t\t\tif(strtotime(\$infos_idea['ideadatetime']) > strtotime(\$infos_idea['NowDate'])) {
\t\t\t\t\$userid = retrieve_userid(\$DB, \$pseudo_userlogged);

\t\t\t\t/***** Register member-idea association (only if not already registered) *****/
\t\t\t\tif(!empty(\$infos_idea['id']) || (!empty(\$userid))) {
\t\t\t\t\t\$ideaid = \$infos_idea['id'];
\t\t\t\t\t\$ideauser_entries_before = check_ideauser_association(\$DB, \$ideaid, \$userid);
\t\t\t\t\tif(\$ideauser_entries_before < 1) {
\t\t\t\t\t\t\$data_ideausers = array(\$infos_idea['id'], \$userid);
\t\t\t\t\t\tadd_ideauser_association(\$DB, \$data_ideausers);

       \t\t\t\t\t\t/****** Check entries in database ******/
\t\t\t\t\t\t\$ideauser_entries = check_ideauser_association(\$DB, \$ideaid, \$userid);

\t\t\t\t\t\tif(\$ideauser_entries > 0) {
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
header('location: '.\$baseUrl.'/index.php?page=idea&query='.\$infos_idea['ideatype'].'&idea='.\$ideaname);


?>
", "Gozpeak/controllers/idea_addmember.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/idea_addmember.php");
    }
}
