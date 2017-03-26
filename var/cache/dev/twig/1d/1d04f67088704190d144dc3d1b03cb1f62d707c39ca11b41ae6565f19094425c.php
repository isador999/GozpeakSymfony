<?php

/* Gozpeak/controllers/idea_delmember.php */
class __TwigTemplate_961e6ca4eb4d9c97e367f3994b0c9ecd4421b67e0581ab9bd94d7e91a91f38a7 extends Twig_Template
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
        $__internal_71d2f8f1b1b3382f4191a0ca13e4db83a88a5c95f8c56ab6806706b3a818bcdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71d2f8f1b1b3382f4191a0ca13e4db83a88a5c95f8c56ab6806706b3a818bcdc->enter($__internal_71d2f8f1b1b3382f4191a0ca13e4db83a88a5c95f8c56ab6806706b3a818bcdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/idea_delmember.php"));

        $__internal_9f57349c3c83fc819d1b198a5803eda74b6dc29694a585ac6df2bc9a23296763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f57349c3c83fc819d1b198a5803eda74b6dc29694a585ac6df2bc9a23296763->enter($__internal_9f57349c3c83fc819d1b198a5803eda74b6dc29694a585ac6df2bc9a23296763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/idea_delmember.php"));

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
\t\t\$ideaname = isset(\$_POST['delmember-ideaname']) ? \$_POST['delmember-ideaname'] : '';
\t\t\$pseudo_userlogged = isset(\$_SESSION['profil']) ? \$_SESSION['profil'] : '';

\t\tif(!empty(\$ideaname) || (!empty(\$pseudo_userlogged))) {
\t\t\t\$infos_idea = retrieve_idea(\$DB, \$ideaname);

\t\t\t/***** If date of idea not expired *****/
\t\t\tif(strtotime(\$infos_idea['ideadatetime']) > strtotime(\$infos_idea['NowDate'])) {
\t\t\t\t\$userid = retrieve_userid(\$DB, \$pseudo_userlogged);

\t\t\t\t/***** Delete member-idea association (only if not already registered) *****/
\t\t\t\tif(!empty(\$infos_idea['id']) || (!empty(\$userid))) {
\t\t\t\t\t\$ideaid = \$infos_idea['id'];
\t\t\t\t\t\$ideauser_entries_before = check_ideauser_association(\$DB, \$ideaid, \$userid);
\t\t\t\t\tif(\$ideauser_entries_before > 0) {
\t\t\t\t\t\t\$data_ideausers = array(\$infos_idea['id'], \$userid);
\t\t\t\t\t\tdel_ideauser_association(\$DB, \$data_ideausers);

       \t\t\t\t\t\t/****** Check entries in database ******/
\t\t\t\t\t\t\$ideauser_entries = check_ideauser_association(\$DB, \$ideaid, \$userid);

\t\t\t\t\t\tif(\$ideauser_entries < 1) {
\t\t\t\t\t\t\t/*********** Optionnaly send mail to user ********/
\t\t\t\t\t\t\t/*********** This implies 'select mail' request *********/
\t\t\t\t\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-success fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Vous avez été desinscrit de l\\'événement avec succès </div> </div>';
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

header('location: '.\$baseUrl.'/index.php?page=idea&query='.\$infos_idea['ideatype'].'&idea='.\$ideaname);


?>
";
        
        $__internal_71d2f8f1b1b3382f4191a0ca13e4db83a88a5c95f8c56ab6806706b3a818bcdc->leave($__internal_71d2f8f1b1b3382f4191a0ca13e4db83a88a5c95f8c56ab6806706b3a818bcdc_prof);

        
        $__internal_9f57349c3c83fc819d1b198a5803eda74b6dc29694a585ac6df2bc9a23296763->leave($__internal_9f57349c3c83fc819d1b198a5803eda74b6dc29694a585ac6df2bc9a23296763_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/idea_delmember.php";
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
\t\t\$ideaname = isset(\$_POST['delmember-ideaname']) ? \$_POST['delmember-ideaname'] : '';
\t\t\$pseudo_userlogged = isset(\$_SESSION['profil']) ? \$_SESSION['profil'] : '';

\t\tif(!empty(\$ideaname) || (!empty(\$pseudo_userlogged))) {
\t\t\t\$infos_idea = retrieve_idea(\$DB, \$ideaname);

\t\t\t/***** If date of idea not expired *****/
\t\t\tif(strtotime(\$infos_idea['ideadatetime']) > strtotime(\$infos_idea['NowDate'])) {
\t\t\t\t\$userid = retrieve_userid(\$DB, \$pseudo_userlogged);

\t\t\t\t/***** Delete member-idea association (only if not already registered) *****/
\t\t\t\tif(!empty(\$infos_idea['id']) || (!empty(\$userid))) {
\t\t\t\t\t\$ideaid = \$infos_idea['id'];
\t\t\t\t\t\$ideauser_entries_before = check_ideauser_association(\$DB, \$ideaid, \$userid);
\t\t\t\t\tif(\$ideauser_entries_before > 0) {
\t\t\t\t\t\t\$data_ideausers = array(\$infos_idea['id'], \$userid);
\t\t\t\t\t\tdel_ideauser_association(\$DB, \$data_ideausers);

       \t\t\t\t\t\t/****** Check entries in database ******/
\t\t\t\t\t\t\$ideauser_entries = check_ideauser_association(\$DB, \$ideaid, \$userid);

\t\t\t\t\t\tif(\$ideauser_entries < 1) {
\t\t\t\t\t\t\t/*********** Optionnaly send mail to user ********/
\t\t\t\t\t\t\t/*********** This implies 'select mail' request *********/
\t\t\t\t\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-success fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Vous avez été desinscrit de l\\'événement avec succès </div> </div>';
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

header('location: '.\$baseUrl.'/index.php?page=idea&query='.\$infos_idea['ideatype'].'&idea='.\$ideaname);


?>
", "Gozpeak/controllers/idea_delmember.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/idea_delmember.php");
    }
}
