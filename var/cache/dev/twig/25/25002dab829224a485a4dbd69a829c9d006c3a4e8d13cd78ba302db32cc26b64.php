<?php

/* Gozpeak/controllers/postevent.php */
class __TwigTemplate_6bc11e2e6ea32448ea11ff5907b334a8c3764d867079931235611d63cd218e0f extends Twig_Template
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
        $__internal_8837395af4595064cef01d70664711f3a6f86a90d6c08a97d9e57ccc7dae0819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8837395af4595064cef01d70664711f3a6f86a90d6c08a97d9e57ccc7dae0819->enter($__internal_8837395af4595064cef01d70664711f3a6f86a90d6c08a97d9e57ccc7dae0819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/postevent.php"));

        $__internal_818bc1f58f4cb193a2657aaf84f0caebd159c74f5d9a38d23b8a701d259eec42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_818bc1f58f4cb193a2657aaf84f0caebd159c74f5d9a38d23b8a701d259eec42->enter($__internal_818bc1f58f4cb193a2657aaf84f0caebd159c74f5d9a38d23b8a701d259eec42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/postevent.php"));

        // line 1
        echo "<?php

session_start();

// Postevent Validation before saving in database //
require_once('./language.php');
require_once('./lib/sessions_init.php');
require_once('./lib/check_login.php');
require_once('./lib/mailgun.php');
require_once('../models/dbconnect.php');
require_once('../models/postevent_functions.php');

\$page = isset(\$_GET['page']) ? \$_GET['page'] : '';

if(\$_POST) {
\t\$organizer \t\t\t\t= isset(\$_SESSION['profil']) ? \$_SESSION['profil'] : '';
\t\$event_name \t\t\t= isset(\$_POST['event_name']) ? \$_POST['event_name'] : '';
\t\$event_place \t\t\t= isset(\$_POST['event_place']) ? \$_POST['event_place'] : '';
\t\$event_desc \t\t\t= isset(\$_POST['event_desc']) ? \$_POST['event_desc'] : '';
\t\$event_datetime \t= isset(\$_POST['event_datetime']) ? \$_POST['event_datetime'] : '';
\t\$phone_number \t\t= isset(\$_POST['event_phonenumber']) ? \$_POST['event_phonenumber'] : '';
\t\$lang \t\t\t\t\t\t= isset(\$_POST['lang']) ? \$_POST['lang'] : '';
\t\$langlevel \t\t\t\t= isset(\$_POST['langlevel']) ? \$_POST['langlevel'] : '';
\t\$query\t\t\t\t\t\t= isset(\$_POST['query']) ? \$_POST['query'] : '';

\t\$source\t\t\t\t\t\t= isset(\$_POST['source']) ? \$_POST['source'] : '';

\t//Field specific to eventedit case
\t\$old_event_name = isset(\$_POST['old_event_name']) ? \$_POST['old_event_name'] : '';

\tif(\$source == 'newevent') {
\t\t\$mandatory_postfields = array(\$event_name, \$event_place, \$event_desc, \$event_datetime, \$lang, \$langlevel, \$query, \$source);
\t\t\$text_postfields = array(\$event_name, \$event_place, \$query, \$source);
\t} elseif (\$source == 'eventedit') {
\t\t\$mandatory_postfields = array(\$event_name, \$event_place, \$event_desc, \$event_datetime, \$lang, \$langlevel, \$query, \$source, \$old_event_name);
\t\t\$text_postfields = array(\$event_name, \$event_place, \$query, \$source, \$old_event_name);
\t}

\t/************ Foreach loops *************/
\tforeach (\$mandatory_postfields as \$field) {
\t\t#echo \$field;
\t\tif((trim(\$field) == '') OR (empty(\$field))) {
\t\t\t#echo \"NOK: rule1\";
\t\t\t\$error=\"empty_fields\";
\t\t}
\t}

\t/********* Regexp : Check if special chars in fields ***********/
\tforeach (\$text_postfields as \$field) {
\t\tif(!preg_match(\"/^[a-zA-Z0-9éèàêç'+()\\- ]+\$/\", \$field)) {
\t\t\t//echo \"- Validation compliance :  \" . \$field . \". <br>\";
\t\t\t\$error=\"notcompliant_fields\";
\t\t}
\t}


\t/************ Unitary tests ************/
\t/***************************************/
\tif(!isset(\$error)) {
\t\t/*********** Check if pseudo of organizer exists ************/
\t\t\$nb_organizer = pseudo_exist(\$DB, \$organizer);

\t\tif(\$nb_organizer < 0) {
\t\t  #echo \"NOK: rule3\";
\t\t  \$error=\"unauthorized_case\";
\t\t}
\t\telseif((strlen(\$event_name) < 6) OR (strlen(\$event_name) > 25))
\t\t{
\t\t  #echo \"NOK: rule4\";
\t\t  \$error=\"invalid_event_name\";
\t\t}
\t\telseif((strlen(\$event_place) < 6) OR (strlen(\$event_place) > 25))
\t\t{
\t\t  #echo \"NOK: rule5\";
\t\t  \$error=\"invalid_event_place\";
\t\t}
\t\telseif((strlen(\$event_desc) < 5) OR (strlen(\$event_desc) > 300))
\t\t{
\t\t\t\$error=\"invalid_event_desc\";
\t\t}
\t\telseif(!strlen(\$event_datetime < 16) && (!strlen(\$event_datetime > 16)))
\t\t{
\t\t  \$varleng = strlen(\$event_datetime);
\t\t  #echo \"\$varleng NOK: rule6\";
\t\t  \$error=\"invalid_event_datetime\";
\t\t}
\t\telseif (!empty(\$phone_number)) {
\t\t\tif((!preg_match(\"/^0[0-9]{9}\$/\", \$phone_number))) {
\t\t\t\t#echo \"NOK: rule7\";
\t\t\t\t\$error=\"invalid_phone_number\";
\t\t\t}
\t\t}
\t\telseif(!preg_match(\"/^(english|spanish|italian|french|multilanguages)\$/\", \$lang)) {
\t\t\t#echo \"nok: rule8\";
\t\t\t\$error=\"invalid_lang\";
\t\t}
\t\telseif(!preg_match(\"/^(beginner|middle|advanced)\$/\", \$langlevel)) {
\t\t\t#echo \"NOK: rule9\";
\t\t\t\$error=\"invalid_langlevel\";
\t\t}
\t\telseif(!preg_match(\"/^(run|art|party|eat)\$/\", \$query)) {
\t\t\t#echo \"NOK: rule10\";
\t\t\t\$error=\"invalid_query\";
\t\t}
\t\telseif(!preg_match(\"/^(newevent|eventedit)/\", \$source)) {
\t\t\t\$error=\"unauthorized_case\";
\t\t}

\t\t/*************** Other checks ***************/
\t\t/***** 'htmlentities function permit to escape/protect fields against attacks, like XSS *****/
\t\t\$event_name = htmlspecialchars(trim(\$event_name));
\t\t\$event_place = htmlspecialchars(trim(\$event_place));
\t\t\$event_desc = htmlspecialchars(trim(\$event_desc));
\t\t\$event_datetime = htmlspecialchars(trim(\$event_datetime));
\t\t\$phone_number = htmlspecialchars(trim(\$phone_number));
\t\t\$lang = htmlspecialchars(trim(\$lang));
\t\t\$langlevel = htmlspecialchars(trim(\$langlevel));

\t\t/***** Registering... *****/

\t\t// \$update_postfields = array(\"organizer\"=>\"\$organizer\",
\t\t// \t\t\t\t\t\t\t\t\t\t\t\t\t \"ideaplace\"=>\$event_place,
\t\t// \t\t\t\t\t\t\t\t\t\t\t\t\t \"ideadesc\"=>\$event_desc,
\t\t// \t\t\t\t\t\t\t\t\t\t\t\t\t \"ideadatetime\"=>\$event_datetime,
\t\t// \t\t\t\t\t\t\t\t\t\t\t\t \t \"ideaphone\"=>\$phone_number,
\t\t// \t\t\t\t\t\t\t\t\t\t\t\t \t \"language\"=>\$lang,
\t\t// \t\t\t\t\t\t\t\t\t\t\t\t   \"level_language\"=>\$langlevel,
\t\t// \t\t\t\t\t\t\t\t\t\t\t\t   \"ideatype\"=>\$query,
\t\t// \t\t\t\t\t\t\t\t\t\t\t\t   \"ideaname\"=>\$event_name);

\t\t/***** Check if event_name already exists *****/

\t\tif(!isset(\$error)) {
\t\t\t\$nb_event_name = idea_exist(\$DB, \$event_name);
\t\t\tif (\$source == 'newevent') {


\t\t\t\t//Check if event already exists
\t\t\t\tif (\$nb_event_name > 0)
\t\t\t\t{
\t\t\t\t\t\$error=\"eventname_already_exists\";
\t\t\t\t}\telse {
\t\t\t\t\t\$postfields = array(\$organizer, \$event_name, \$event_place, \$event_desc, \$event_datetime, \$phone_number, \$lang, \$langlevel, \$query);
\t\t\t\t\t// foreach (\$postfields as \$field) {
\t\t\t\t\t// \techo \"- Array to send (postevent) :  \" . \$field . \". <br>\";
\t\t\t\t\t// }

\t\t\t\t\tadd_idea(\$DB, \$postfields);
\t\t\t\t}

\t\t\t//Event Edition Case
\t\t\t} elseif (\$source == 'eventedit') {
\t\t\t\t\$nb_event_name = idea_exist(\$DB, \$old_event_name);
\t\t\t\tif (\$nb_event_name < 1) {
\t\t\t\t\t\$error=\"not_existant_eventname\";
\t\t\t\t} else {
\t\t\t\t\t//\$go_event_edition = 1;
\t\t\t\t\t\$idea_id = get_idea_id(\$DB, \$old_event_name);

\t\t\t\t\tif(!empty(\$idea_id)) {
\t\t\t\t\t\t//\$update_fields = array(\$organizer, \$event_name, \$event_place, \$event_desc, \$event_datetime, \$phone_number, \$lang, \$langlevel, \$query, \$idea_id);
\t\t\t\t\t\tupdate_existant_idea(\$DB, \$organizer, \$event_name, \$event_place, \$event_desc, \$event_datetime, \$phone_number, \$lang, \$langlevel, \$query, \$idea_id);
\t\t\t\t\t} else {
\t\t\t\t\t\t\$error=\"update_existant_idea_failed\";
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t/****** Check if register processed correctly ******/
\t\t\t\$nb_event_name = idea_exist(\$DB, \$event_name);
\t\t\tif(\$nb_event_name > 0) {
\t\t\t\t/***** URLENCODE TO CHANGE SPECIAL CHARS TO CODE *****/
\t\t\t\t/**** Change to use \$_SESSION['profil'] \$pseudo = urlencode(\$pseudo); *****/

\t\t\t\tswitch (\$source) {
\t\t\t\t\tcase \"newevent\":
\t\t\t\t\t\t\$mail_subject = \"Gozpeak : Votre idée a été validée\";
\t\t\t\t\t\t\$team_mail_subject = \"Nouvelle idée postée [demo.gozpeak.com]\";
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase \"eventedit\":
\t\t\t\t\t\t\$mail_subject = \"Gozpeak : Modification de votre idée d'événement\";
\t\t\t\t\t\t\$team_mail_subject = \"Modification d'une idée [demo.gozpeak.com]\";
\t\t\t\t\t\tbreak;
\t\t\t\t\tdefault:
\t\t\t\t\t\tdie();
\t\t\t\t}

\t\t\t\t\$event_name_for_link = urlencode(\$event_name);
\t\t\t\t\$mail_organizer = get_mail_organizer(\$DB, \$organizer);

\t\t\t\t//\$mail_subject = \"Ajout d'événement Gozpeak\";
\t\t\t\t\$mail_content = '<html> <body>';
\t\t\t\t\$mail_content .= '<h4>' . \"Bonjour \$organizer ! \" . '</h4>' . '<br>' . '<br>';
\t\t\t\t\$mail_content .= '<strong>' . \"Votre idée d'événement Gozpeak a bien été enregistrée\" . '</strong>' . '<br>';
\t\t\t\t\$mail_content .= \"Vous pouvez la retrouver en cliquant sur le lien ci-dessous :  \" . '<br>';
\t\t\t\t\$mail_content .= '<a href=\"' . \$baseUrl . '/index.php?page=idea&query=' . \$query . '&idea=' . \$event_name_for_link . '\">' . \$event_name . '</a>' . '<br>' . '<br>';
\t\t\t\t\$mail_content .= \"Les membres ayant un compte actif peuvent désormais s'inscrire à votre sortie\" . '<br>';
\t\t\t\t\$mail_content .= \"En espérant que vous ayez de nombreux inscrits !\" . '<br>' . '<br>';
\t\t\t\t\$mail_content .= \"Linguistiquement,\" . '<br>' . '<br>';
\t\t\t\t\$mail_content .= \"L'équipe Gozpeak\" . '<br>';
\t\t\t\t\$mail_content .= '<img src=\"' . \$baseUrl . '/views/images/gozpeak_small.png\" alt=\"Gozpeak Logo\">' . '<br>';
\t\t\t\t\$mail_content .= '</body> </html>';
\t      if(send_by_mailgun(\$mail_organizer, \$mail_subject, \$mail_content)) {
\t\t\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-success fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Votre idée d\\'événement a été enregistré avec succès ! </div> </div>';

\t\t\t\t\t/******** Send Mail to Gozpeak Team ********/
\t\t\t\t\t/***** \$team_mail_content = '<html><body>'; *****/
\t\t\t\t\t\$team_mail_content = \"<html> <body>\";
          \$team_mail_content .= '<h4>' . \"Nouvelle idée postée - \$query ! \" . '</h4>' . '<br>' . '<br>';
          \$team_mail_content .= \"L'organisateur : \" . '<strong>' . \$organizer . '</strong>' . '<br>';
          \$team_mail_content .= \"Téléphone (peut être vide) : \" . '<strong>' . \$phone_number . '</strong>' . '<br>' . '<br>';
          \$team_mail_content .= \"Le nom de l'idée postée : \" . '<strong>' . \$event_name . '</strong>' . '<br>' . '<br>';
\t\t\t\t\t\$team_mail_content .= \"Description de l'idée : \" . '<br>' . '<strong>' . \$event_desc . '</strong>' . '<br>' . '<br>';
          \$team_mail_content .= \"Le lien vers l'idée :  \" . '<a href=\"' . \$baseUrl . '/index.php?page=idea&query=' . \$query . '&idea=' . \$event_name_for_link . '\">' . \$event_name . '</a>' . '<br>' . '<br>';
          \$team_mail_content .= \"Langue / Niveau souhaités : \" . '<strong>' . \" \$lang niveau \$langlevel\" . '</strong>' . '<br>';
          \$team_mail_content .= \"Les personnes ayant un compte actif peuvent s'inscrire à cette sortie\" . '<br>' . '<br>';
\t\t\t\t\t\$team_mail_content .= '<img src=\"' . \$baseUrl . '/views/images/gozpeak_small.png\" alt=\"Gozpeak Logo\">' . '<br>';
\t\t\t\t\t\$team_mail_content .= \"<html> <body>\";
\t\t\t\t\tsend_by_mailgun('info@gozpeak.com', \$team_mail_subject, \$team_mail_content);
\t\t\t\t} else {
\t\t\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>  Désolé, une erreur est survenue lors de votre inscription.   Veuillez réessayer ultérieurement </div> </div>';
\t\t\t\t}

\t\t\t\t/***** If register has not processed correctly *****/
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>  Désolé, une erreur est survenue lors de l\\'enregistrement de l`événement.  Veuillez réessayer ultérieurement . Test nb_event_name failed </div> </div>';
\t\t\t}
\t\t} //End if not set error
\t} //End if not set error - at Unitary tests
} //End of if \$_POST.



if (isset(\$error)) {
  if (\$error == 'empty_fields') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Veuillez remplir les champs obligatoires pour proposer votre événement </div> </div>';
  } elseif (\$error == 'notcompliant_fields') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Certains caractères spéciaux sont interdits pour les noms et lieux d\\'événement  ' . \$source . \"  \" .  \$query . \" \" . \$old_event_name . \"  \" .  '</div> </div>';
  } elseif (\$error == 'unauthorized_case') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Vous n\\'êtes pas autorisé à poster ou modifier d\\'événement. Vérifiez que vous êtes connecté. </div> </div>';
  } elseif (\$error == 'invalid_event_name') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Le nom de l\\'événement doit être compris entre 6 et 15 caractères </div> </div>';
  } elseif (\$error == 'invalid_event_place') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Le lieu de l\\'événement doit être compris entre 6 et 20 caractères </div> </div>';
  } elseif (\$error == 'invalid_event_datetime') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> La date de l\\'événement n\\'est pas valide </div> </div>';
  } elseif (\$error == 'invalid_phone_number') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Le numéro de téléphone entré n\\'est pas valide </div> </div>';
  } elseif (\$error == 'invalid_lang') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> La langue choisie est invalide ou n\\'existe pas </div> </div>';
  } elseif (\$error == 'invalid_langlevel') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Le niveau de langue choisie est invalide </div> </div>';
  } elseif (\$error == 'invalid_langlevel') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Le niveau de langue choisie est invalide </div> </div>';
  } elseif (\$error == 'invalid_query') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> La catégorie sélectionnée n\\'est pas valide </div> </div>';
  } elseif (\$error == 'eventname_already_exists') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Désolé, un événement du même nom existe déjà </div> </div>';
  } elseif(\$error == 'not_existant_eventname') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Désolé, l\\'événement concerné est introuvable. Veuillez réessayer ultérieurement </div> </div>';
\t}  elseif (\$error == 'registerDB_failed') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Désolé, une erreur est survenue lors de l\\'enregistrement de l`événement.  Veuillez réessayer ultérieurement </div> </div>';
\t}

}


/******** Finally, set Global var if \$message isset, and simply redirect to HOME *********/
if (isset(\$message)) {
\t\$_SESSION['msg'] = \$message;
}

redirect_to_page(\$baseUrl, \$page);

?>
";
        
        $__internal_8837395af4595064cef01d70664711f3a6f86a90d6c08a97d9e57ccc7dae0819->leave($__internal_8837395af4595064cef01d70664711f3a6f86a90d6c08a97d9e57ccc7dae0819_prof);

        
        $__internal_818bc1f58f4cb193a2657aaf84f0caebd159c74f5d9a38d23b8a701d259eec42->leave($__internal_818bc1f58f4cb193a2657aaf84f0caebd159c74f5d9a38d23b8a701d259eec42_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/postevent.php";
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

// Postevent Validation before saving in database //
require_once('./language.php');
require_once('./lib/sessions_init.php');
require_once('./lib/check_login.php');
require_once('./lib/mailgun.php');
require_once('../models/dbconnect.php');
require_once('../models/postevent_functions.php');

\$page = isset(\$_GET['page']) ? \$_GET['page'] : '';

if(\$_POST) {
\t\$organizer \t\t\t\t= isset(\$_SESSION['profil']) ? \$_SESSION['profil'] : '';
\t\$event_name \t\t\t= isset(\$_POST['event_name']) ? \$_POST['event_name'] : '';
\t\$event_place \t\t\t= isset(\$_POST['event_place']) ? \$_POST['event_place'] : '';
\t\$event_desc \t\t\t= isset(\$_POST['event_desc']) ? \$_POST['event_desc'] : '';
\t\$event_datetime \t= isset(\$_POST['event_datetime']) ? \$_POST['event_datetime'] : '';
\t\$phone_number \t\t= isset(\$_POST['event_phonenumber']) ? \$_POST['event_phonenumber'] : '';
\t\$lang \t\t\t\t\t\t= isset(\$_POST['lang']) ? \$_POST['lang'] : '';
\t\$langlevel \t\t\t\t= isset(\$_POST['langlevel']) ? \$_POST['langlevel'] : '';
\t\$query\t\t\t\t\t\t= isset(\$_POST['query']) ? \$_POST['query'] : '';

\t\$source\t\t\t\t\t\t= isset(\$_POST['source']) ? \$_POST['source'] : '';

\t//Field specific to eventedit case
\t\$old_event_name = isset(\$_POST['old_event_name']) ? \$_POST['old_event_name'] : '';

\tif(\$source == 'newevent') {
\t\t\$mandatory_postfields = array(\$event_name, \$event_place, \$event_desc, \$event_datetime, \$lang, \$langlevel, \$query, \$source);
\t\t\$text_postfields = array(\$event_name, \$event_place, \$query, \$source);
\t} elseif (\$source == 'eventedit') {
\t\t\$mandatory_postfields = array(\$event_name, \$event_place, \$event_desc, \$event_datetime, \$lang, \$langlevel, \$query, \$source, \$old_event_name);
\t\t\$text_postfields = array(\$event_name, \$event_place, \$query, \$source, \$old_event_name);
\t}

\t/************ Foreach loops *************/
\tforeach (\$mandatory_postfields as \$field) {
\t\t#echo \$field;
\t\tif((trim(\$field) == '') OR (empty(\$field))) {
\t\t\t#echo \"NOK: rule1\";
\t\t\t\$error=\"empty_fields\";
\t\t}
\t}

\t/********* Regexp : Check if special chars in fields ***********/
\tforeach (\$text_postfields as \$field) {
\t\tif(!preg_match(\"/^[a-zA-Z0-9éèàêç'+()\\- ]+\$/\", \$field)) {
\t\t\t//echo \"- Validation compliance :  \" . \$field . \". <br>\";
\t\t\t\$error=\"notcompliant_fields\";
\t\t}
\t}


\t/************ Unitary tests ************/
\t/***************************************/
\tif(!isset(\$error)) {
\t\t/*********** Check if pseudo of organizer exists ************/
\t\t\$nb_organizer = pseudo_exist(\$DB, \$organizer);

\t\tif(\$nb_organizer < 0) {
\t\t  #echo \"NOK: rule3\";
\t\t  \$error=\"unauthorized_case\";
\t\t}
\t\telseif((strlen(\$event_name) < 6) OR (strlen(\$event_name) > 25))
\t\t{
\t\t  #echo \"NOK: rule4\";
\t\t  \$error=\"invalid_event_name\";
\t\t}
\t\telseif((strlen(\$event_place) < 6) OR (strlen(\$event_place) > 25))
\t\t{
\t\t  #echo \"NOK: rule5\";
\t\t  \$error=\"invalid_event_place\";
\t\t}
\t\telseif((strlen(\$event_desc) < 5) OR (strlen(\$event_desc) > 300))
\t\t{
\t\t\t\$error=\"invalid_event_desc\";
\t\t}
\t\telseif(!strlen(\$event_datetime < 16) && (!strlen(\$event_datetime > 16)))
\t\t{
\t\t  \$varleng = strlen(\$event_datetime);
\t\t  #echo \"\$varleng NOK: rule6\";
\t\t  \$error=\"invalid_event_datetime\";
\t\t}
\t\telseif (!empty(\$phone_number)) {
\t\t\tif((!preg_match(\"/^0[0-9]{9}\$/\", \$phone_number))) {
\t\t\t\t#echo \"NOK: rule7\";
\t\t\t\t\$error=\"invalid_phone_number\";
\t\t\t}
\t\t}
\t\telseif(!preg_match(\"/^(english|spanish|italian|french|multilanguages)\$/\", \$lang)) {
\t\t\t#echo \"nok: rule8\";
\t\t\t\$error=\"invalid_lang\";
\t\t}
\t\telseif(!preg_match(\"/^(beginner|middle|advanced)\$/\", \$langlevel)) {
\t\t\t#echo \"NOK: rule9\";
\t\t\t\$error=\"invalid_langlevel\";
\t\t}
\t\telseif(!preg_match(\"/^(run|art|party|eat)\$/\", \$query)) {
\t\t\t#echo \"NOK: rule10\";
\t\t\t\$error=\"invalid_query\";
\t\t}
\t\telseif(!preg_match(\"/^(newevent|eventedit)/\", \$source)) {
\t\t\t\$error=\"unauthorized_case\";
\t\t}

\t\t/*************** Other checks ***************/
\t\t/***** 'htmlentities function permit to escape/protect fields against attacks, like XSS *****/
\t\t\$event_name = htmlspecialchars(trim(\$event_name));
\t\t\$event_place = htmlspecialchars(trim(\$event_place));
\t\t\$event_desc = htmlspecialchars(trim(\$event_desc));
\t\t\$event_datetime = htmlspecialchars(trim(\$event_datetime));
\t\t\$phone_number = htmlspecialchars(trim(\$phone_number));
\t\t\$lang = htmlspecialchars(trim(\$lang));
\t\t\$langlevel = htmlspecialchars(trim(\$langlevel));

\t\t/***** Registering... *****/

\t\t// \$update_postfields = array(\"organizer\"=>\"\$organizer\",
\t\t// \t\t\t\t\t\t\t\t\t\t\t\t\t \"ideaplace\"=>\$event_place,
\t\t// \t\t\t\t\t\t\t\t\t\t\t\t\t \"ideadesc\"=>\$event_desc,
\t\t// \t\t\t\t\t\t\t\t\t\t\t\t\t \"ideadatetime\"=>\$event_datetime,
\t\t// \t\t\t\t\t\t\t\t\t\t\t\t \t \"ideaphone\"=>\$phone_number,
\t\t// \t\t\t\t\t\t\t\t\t\t\t\t \t \"language\"=>\$lang,
\t\t// \t\t\t\t\t\t\t\t\t\t\t\t   \"level_language\"=>\$langlevel,
\t\t// \t\t\t\t\t\t\t\t\t\t\t\t   \"ideatype\"=>\$query,
\t\t// \t\t\t\t\t\t\t\t\t\t\t\t   \"ideaname\"=>\$event_name);

\t\t/***** Check if event_name already exists *****/

\t\tif(!isset(\$error)) {
\t\t\t\$nb_event_name = idea_exist(\$DB, \$event_name);
\t\t\tif (\$source == 'newevent') {


\t\t\t\t//Check if event already exists
\t\t\t\tif (\$nb_event_name > 0)
\t\t\t\t{
\t\t\t\t\t\$error=\"eventname_already_exists\";
\t\t\t\t}\telse {
\t\t\t\t\t\$postfields = array(\$organizer, \$event_name, \$event_place, \$event_desc, \$event_datetime, \$phone_number, \$lang, \$langlevel, \$query);
\t\t\t\t\t// foreach (\$postfields as \$field) {
\t\t\t\t\t// \techo \"- Array to send (postevent) :  \" . \$field . \". <br>\";
\t\t\t\t\t// }

\t\t\t\t\tadd_idea(\$DB, \$postfields);
\t\t\t\t}

\t\t\t//Event Edition Case
\t\t\t} elseif (\$source == 'eventedit') {
\t\t\t\t\$nb_event_name = idea_exist(\$DB, \$old_event_name);
\t\t\t\tif (\$nb_event_name < 1) {
\t\t\t\t\t\$error=\"not_existant_eventname\";
\t\t\t\t} else {
\t\t\t\t\t//\$go_event_edition = 1;
\t\t\t\t\t\$idea_id = get_idea_id(\$DB, \$old_event_name);

\t\t\t\t\tif(!empty(\$idea_id)) {
\t\t\t\t\t\t//\$update_fields = array(\$organizer, \$event_name, \$event_place, \$event_desc, \$event_datetime, \$phone_number, \$lang, \$langlevel, \$query, \$idea_id);
\t\t\t\t\t\tupdate_existant_idea(\$DB, \$organizer, \$event_name, \$event_place, \$event_desc, \$event_datetime, \$phone_number, \$lang, \$langlevel, \$query, \$idea_id);
\t\t\t\t\t} else {
\t\t\t\t\t\t\$error=\"update_existant_idea_failed\";
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t/****** Check if register processed correctly ******/
\t\t\t\$nb_event_name = idea_exist(\$DB, \$event_name);
\t\t\tif(\$nb_event_name > 0) {
\t\t\t\t/***** URLENCODE TO CHANGE SPECIAL CHARS TO CODE *****/
\t\t\t\t/**** Change to use \$_SESSION['profil'] \$pseudo = urlencode(\$pseudo); *****/

\t\t\t\tswitch (\$source) {
\t\t\t\t\tcase \"newevent\":
\t\t\t\t\t\t\$mail_subject = \"Gozpeak : Votre idée a été validée\";
\t\t\t\t\t\t\$team_mail_subject = \"Nouvelle idée postée [demo.gozpeak.com]\";
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase \"eventedit\":
\t\t\t\t\t\t\$mail_subject = \"Gozpeak : Modification de votre idée d'événement\";
\t\t\t\t\t\t\$team_mail_subject = \"Modification d'une idée [demo.gozpeak.com]\";
\t\t\t\t\t\tbreak;
\t\t\t\t\tdefault:
\t\t\t\t\t\tdie();
\t\t\t\t}

\t\t\t\t\$event_name_for_link = urlencode(\$event_name);
\t\t\t\t\$mail_organizer = get_mail_organizer(\$DB, \$organizer);

\t\t\t\t//\$mail_subject = \"Ajout d'événement Gozpeak\";
\t\t\t\t\$mail_content = '<html> <body>';
\t\t\t\t\$mail_content .= '<h4>' . \"Bonjour \$organizer ! \" . '</h4>' . '<br>' . '<br>';
\t\t\t\t\$mail_content .= '<strong>' . \"Votre idée d'événement Gozpeak a bien été enregistrée\" . '</strong>' . '<br>';
\t\t\t\t\$mail_content .= \"Vous pouvez la retrouver en cliquant sur le lien ci-dessous :  \" . '<br>';
\t\t\t\t\$mail_content .= '<a href=\"' . \$baseUrl . '/index.php?page=idea&query=' . \$query . '&idea=' . \$event_name_for_link . '\">' . \$event_name . '</a>' . '<br>' . '<br>';
\t\t\t\t\$mail_content .= \"Les membres ayant un compte actif peuvent désormais s'inscrire à votre sortie\" . '<br>';
\t\t\t\t\$mail_content .= \"En espérant que vous ayez de nombreux inscrits !\" . '<br>' . '<br>';
\t\t\t\t\$mail_content .= \"Linguistiquement,\" . '<br>' . '<br>';
\t\t\t\t\$mail_content .= \"L'équipe Gozpeak\" . '<br>';
\t\t\t\t\$mail_content .= '<img src=\"' . \$baseUrl . '/views/images/gozpeak_small.png\" alt=\"Gozpeak Logo\">' . '<br>';
\t\t\t\t\$mail_content .= '</body> </html>';
\t      if(send_by_mailgun(\$mail_organizer, \$mail_subject, \$mail_content)) {
\t\t\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-success fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Votre idée d\\'événement a été enregistré avec succès ! </div> </div>';

\t\t\t\t\t/******** Send Mail to Gozpeak Team ********/
\t\t\t\t\t/***** \$team_mail_content = '<html><body>'; *****/
\t\t\t\t\t\$team_mail_content = \"<html> <body>\";
          \$team_mail_content .= '<h4>' . \"Nouvelle idée postée - \$query ! \" . '</h4>' . '<br>' . '<br>';
          \$team_mail_content .= \"L'organisateur : \" . '<strong>' . \$organizer . '</strong>' . '<br>';
          \$team_mail_content .= \"Téléphone (peut être vide) : \" . '<strong>' . \$phone_number . '</strong>' . '<br>' . '<br>';
          \$team_mail_content .= \"Le nom de l'idée postée : \" . '<strong>' . \$event_name . '</strong>' . '<br>' . '<br>';
\t\t\t\t\t\$team_mail_content .= \"Description de l'idée : \" . '<br>' . '<strong>' . \$event_desc . '</strong>' . '<br>' . '<br>';
          \$team_mail_content .= \"Le lien vers l'idée :  \" . '<a href=\"' . \$baseUrl . '/index.php?page=idea&query=' . \$query . '&idea=' . \$event_name_for_link . '\">' . \$event_name . '</a>' . '<br>' . '<br>';
          \$team_mail_content .= \"Langue / Niveau souhaités : \" . '<strong>' . \" \$lang niveau \$langlevel\" . '</strong>' . '<br>';
          \$team_mail_content .= \"Les personnes ayant un compte actif peuvent s'inscrire à cette sortie\" . '<br>' . '<br>';
\t\t\t\t\t\$team_mail_content .= '<img src=\"' . \$baseUrl . '/views/images/gozpeak_small.png\" alt=\"Gozpeak Logo\">' . '<br>';
\t\t\t\t\t\$team_mail_content .= \"<html> <body>\";
\t\t\t\t\tsend_by_mailgun('info@gozpeak.com', \$team_mail_subject, \$team_mail_content);
\t\t\t\t} else {
\t\t\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>  Désolé, une erreur est survenue lors de votre inscription.   Veuillez réessayer ultérieurement </div> </div>';
\t\t\t\t}

\t\t\t\t/***** If register has not processed correctly *****/
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>  Désolé, une erreur est survenue lors de l\\'enregistrement de l`événement.  Veuillez réessayer ultérieurement . Test nb_event_name failed </div> </div>';
\t\t\t}
\t\t} //End if not set error
\t} //End if not set error - at Unitary tests
} //End of if \$_POST.



if (isset(\$error)) {
  if (\$error == 'empty_fields') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Veuillez remplir les champs obligatoires pour proposer votre événement </div> </div>';
  } elseif (\$error == 'notcompliant_fields') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Certains caractères spéciaux sont interdits pour les noms et lieux d\\'événement  ' . \$source . \"  \" .  \$query . \" \" . \$old_event_name . \"  \" .  '</div> </div>';
  } elseif (\$error == 'unauthorized_case') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Vous n\\'êtes pas autorisé à poster ou modifier d\\'événement. Vérifiez que vous êtes connecté. </div> </div>';
  } elseif (\$error == 'invalid_event_name') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Le nom de l\\'événement doit être compris entre 6 et 15 caractères </div> </div>';
  } elseif (\$error == 'invalid_event_place') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Le lieu de l\\'événement doit être compris entre 6 et 20 caractères </div> </div>';
  } elseif (\$error == 'invalid_event_datetime') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> La date de l\\'événement n\\'est pas valide </div> </div>';
  } elseif (\$error == 'invalid_phone_number') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Le numéro de téléphone entré n\\'est pas valide </div> </div>';
  } elseif (\$error == 'invalid_lang') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> La langue choisie est invalide ou n\\'existe pas </div> </div>';
  } elseif (\$error == 'invalid_langlevel') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Le niveau de langue choisie est invalide </div> </div>';
  } elseif (\$error == 'invalid_langlevel') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Le niveau de langue choisie est invalide </div> </div>';
  } elseif (\$error == 'invalid_query') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> La catégorie sélectionnée n\\'est pas valide </div> </div>';
  } elseif (\$error == 'eventname_already_exists') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Désolé, un événement du même nom existe déjà </div> </div>';
  } elseif(\$error == 'not_existant_eventname') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Désolé, l\\'événement concerné est introuvable. Veuillez réessayer ultérieurement </div> </div>';
\t}  elseif (\$error == 'registerDB_failed') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Désolé, une erreur est survenue lors de l\\'enregistrement de l`événement.  Veuillez réessayer ultérieurement </div> </div>';
\t}

}


/******** Finally, set Global var if \$message isset, and simply redirect to HOME *********/
if (isset(\$message)) {
\t\$_SESSION['msg'] = \$message;
}

redirect_to_page(\$baseUrl, \$page);

?>
", "Gozpeak/controllers/postevent.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/postevent.php");
    }
}
