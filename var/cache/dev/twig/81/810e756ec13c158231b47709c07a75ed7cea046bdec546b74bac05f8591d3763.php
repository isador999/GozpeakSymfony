<?php

/* Gozpeak/controllers/updateprofile.php */
class __TwigTemplate_ea191cff5da0a8d70df1b8bf7ea925c665f2f0747254ff936fdad107ff160e31 extends Twig_Template
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
        $__internal_3463ca91d70ae2e5c475ad76d3f58a730006d0e674abe41201f48ff87740c025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3463ca91d70ae2e5c475ad76d3f58a730006d0e674abe41201f48ff87740c025->enter($__internal_3463ca91d70ae2e5c475ad76d3f58a730006d0e674abe41201f48ff87740c025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/updateprofile.php"));

        $__internal_0c5eaf55bb7fde79b1560b5bad75edebb7fd88eb39e13a73814e8f535352f744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c5eaf55bb7fde79b1560b5bad75edebb7fd88eb39e13a73814e8f535352f744->enter($__internal_0c5eaf55bb7fde79b1560b5bad75edebb7fd88eb39e13a73814e8f535352f744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/updateprofile.php"));

        // line 1
        echo "<?php
session_start();

// Inscription Validation before saving in database //
require_once('./language.php');
require_once('./lib/sessions_init.php');
require_once('./lib/check_strings.php');
require_once('../models/dbconnect.php');
//require_once('../models/inscription_functions.php');
require_once('../models/profile_functions.php');
require_once('./lib/check_strings.php');


if(\$_POST) {
\t\$pseudo \t      \t= isset(\$_POST['profile_pseudo']) ? \$_POST['profile_pseudo'] : '';
  \$lastname \t    \t= isset(\$_POST['profile_lastname']) ? \$_POST['profile_lastname'] : '';
  \$firstname \t    \t= isset(\$_POST['profile_firstname']) ? \$_POST['profile_firstname'] : '';
\t\$email \t\t      \t= isset(\$_POST['profile_mail']) ? \$_POST['profile_mail'] : '';
  \$nationality \t\t\t= isset(\$_POST['profile_nationality']) ? \$_POST['profile_nationality'] : '';
  \$birthdate   \t\t\t= isset(\$_POST['profile_birthdate']) ? \$_POST['profile_birthdate'] : '';
\t\$speakedlanguages = isset(\$_POST['profile_languages']) ? \$_POST['profile_languages'] : '';

\tforeach(\$_POST as \$field) {
\t\techo \$field;
\t}


\tif((trim(\$email) == '') OR (trim(\$pseudo) == '') OR (empty(\$pseudo)) OR (empty(\$email))) {
\t\t\$error=\"empty_fields\";
\t\techo \$error;

\t} elseif((strlen(\$email) < 10) OR (!isEmail(\$email))) {
\t  \$error=\"invalid_email\";
\t\techo \$error;

\t}

\t\$text_postfields = array(\$lastname, \$firstname, \$nationality, \$speakedlanguages);
\tforeach (\$text_postfields as \$field) {
\t\tif(!preg_match(\"/^[a-zA-Z0-9éèàêç'+()\\- ]+\$/\", \$field)) {
\t\t\t\$error=\"notcompliant_fields\";
\t\t\techo \$error;
\t\t}
\t}

\t/*************** Other checks ***************/
\t/***** Count pseudo, count mail in DB *****/
\t\$nbre_pseudo = pseudo_exist(\$DB, \$pseudo);
\t\$bdd_mail = select_mail(\$DB, \$pseudo);

\tif((\$nbre_pseudo < 1) OR (\$bdd_mail < 1))
\t{
\t  \$error=\"pseudo_or_mail_dont_exists\";
\t}

/*\telseif (strlen(\$password) > 25 || strlen(\$password) < 8)
\t{
\t  echo \"NOK: rule6\";
\t  \$error=\"bad_length_pass\";

\t}
\telseif (ctype_alnum(\$password)) {
\t  echo \"NOK: rule7 - specialchars\";
\t\t\$error=\"notcompliant_password\";
\t}
\telseif (!preg_match(\"/.*[0-9].*[0-9].*+/\", \$password) || !preg_match(\"/.*[A-Z].*+/\", \$password))  {
\t        echo \"NOK: rule7 - numbers and CAPS\";
\t\t\$error=\"notcompliant_password\";
\t}
\telseif (\$password != \$password_check)
\t{
\t    echo \"NOK: rule8\";
\t    \$error=\"passwords_not_matching\";
\t}*/

\telse {
   \t/***** 'htmlentities function permit to esacpe/protect fields against attacks, like XSS *****/
    \$pseudo = htmlspecialchars(trim(\$pseudo));
    \$lastname = htmlspecialchars(trim(\$lastname));
    \$firstname = htmlspecialchars(trim(\$firstname));
    \$email = htmlspecialchars(trim(\$email));
    \$nationality = htmlspecialchars(trim(\$nationality));
\t\t\$birthdate = htmlspecialchars(trim(\$birthdate));
    \$speakedlanguages = htmlspecialchars(trim(\$speakedlanguages));

\t\t//update_profile(\$DB, \$pseudo, \$email, \$lastname, \$name, \$nationality, \$birthdate, \$speakedlanguages);
\t\t//profile_update(\$DB, \$pseudo, \$email, \$lastname, \$firstname, \$nationality, \$birthdate, \$speakedlanguages);
\t\tprofile_update(\$DB, \$pseudo, \$email, \$lastname, \$firstname, \$nationality, \$birthdate);

\t\t/****** Check if update processed correctly ******/
    \$nbre_mail = select_mail(\$DB, \$pseudo);

\t\tif(\$nbre_mail == 1) {
      echo \"OK ! \";
      \$message='<div class=\"form-group\"> <div class=\"alert alert-success fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Vos informations de profil ont été validées !  </div> </div>';
\t\t\t/*\$mail_subject=\"Confirmation de votre inscription Gozpeak\";
\t\t\t\$mail_content = '<html><body>';
\t\t\t\$mail_content .= '<h4>'.\"Bonjour \$pseudo ! \".'</h4>'.'<br>'.'<br>';
\t\t\t\$mail_content .= \"Merci de votre inscription sur Gozpeak :) \".'<br>';
\t\t\t\$mail_content .= \"Afin de rendre votre compte actif, cliquez sur le lien suivant (valable pendant 72h)\".'<br>';
\t\t\t\$mail_content .= \"\$gozpeak_protocol\".\"\$gozpeak_host\".\"/index.php?page=activation&login=\$pseudo&key=\$key\".'<br>'.'<br>';
\t\t\t\$mail_content .= \"A très bientôt pour de nombreuses activités !\".'<br>'.'<br>';
\t\t\t\$mail_content .= \"Linguistiquement,\".'<br>'.'<br>';
\t\t\t\$mail_content .= \"L'équipe Gozpeak\".'<br>';
\t\t\t\$mail_content .= '<img src=\"'.\"\$gozpeak_protocol\".\"\$gozpeak_host\".'/views/images/gozpeak_small.png\" alt=\"Gozpeak Logo\">'.'<br>';
\t\t\t\$mail_content .= '</body> </html>';
\t       \t\tif(send_by_mailgun(\$mail, \"\$mail_subject\", \"\$mail_content\")) {
\t\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-success text-center fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>Merci pour votre inscription sur Gozpeak ! Un email de confirmation vient de vous être envoyé ;) </div> </div>';
        */

\t\t\t\t/******** Send Mail to Gozpeak Team ********/
\t\t\t\t/*\$team_mail_content = '<html><body>';
        \$team_mail_content .= '<h4>'.\"Un nouveau membre inscrit sur Gozpeak ! \".'</h4>'.'<br>'.'<br>';
        \$team_mail_content .= \"Son pseudo : \$pseudo\".'<br>';
        \$team_mail_content .= \"Son adresse e-mail : \$pseudo\".'<br>';
        \$team_mail_content .= \"Cette personne devra activer son compte pour se connecter et s'inscrire aux activités\".'<br>';
\t\t\t\tsend_by_mailgun('info@gozpeak.com', 'Nouvelle inscription [demo.gozpeak.com]', \"\$team_mail_content\");
\t\t\t} else {
\t\t\t\t#\$message = my_echo(\"3\", \"red\", \"'Désolé, une erreur est survenue lors de votre inscription'.'<br>'.'Veuillez réessayer ultérieurement'\");
\t\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger text-center fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>  Désolé, une erreur est survenue lors de votre inscription.   Veuillez réessayer ultérieurement </div> </div>';
\t\t\t}
      */

\t\t/***** If register has not processed correctly *****/
\t\t}
\t\telse
\t\t{
\t\t\techo \"NOK\";
\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Désolé, une erreur est survenue pendant l\\'inscription. Veuillez réessayer ultérieurement. </div> </div>';
\t\t}
  }
}


if (isset(\$error)) {
  if (\$error == 'empty_fields') {
\t  \$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Veuillez remplir les champs obligatoires pour votre inscription </div> </div>';
  } elseif (\$error == 'pseudo_or_mail_dont_exists') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Erreur : le pseudo et l\\'adresse email sont bligatoires dans le formulaire </div> </div>';
  } elseif (\$error == 'invalid_email') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> L\\'adresse email est invalide </div> </div>';
  } elseif (\$error == 'notcompliant_fields') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Certains champs ne doivent pas contenir de caractères spéciaux </div> </div>';
\t}
}

/******** Finally, set Global var if \$message isset, and simply redirect to HOME *********/
if (isset(\$message)) {
\t\$_SESSION['msg'] = \$message;
}

redirect_to_page(\$_GET['page']);

?>
";
        
        $__internal_3463ca91d70ae2e5c475ad76d3f58a730006d0e674abe41201f48ff87740c025->leave($__internal_3463ca91d70ae2e5c475ad76d3f58a730006d0e674abe41201f48ff87740c025_prof);

        
        $__internal_0c5eaf55bb7fde79b1560b5bad75edebb7fd88eb39e13a73814e8f535352f744->leave($__internal_0c5eaf55bb7fde79b1560b5bad75edebb7fd88eb39e13a73814e8f535352f744_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/updateprofile.php";
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

// Inscription Validation before saving in database //
require_once('./language.php');
require_once('./lib/sessions_init.php');
require_once('./lib/check_strings.php');
require_once('../models/dbconnect.php');
//require_once('../models/inscription_functions.php');
require_once('../models/profile_functions.php');
require_once('./lib/check_strings.php');


if(\$_POST) {
\t\$pseudo \t      \t= isset(\$_POST['profile_pseudo']) ? \$_POST['profile_pseudo'] : '';
  \$lastname \t    \t= isset(\$_POST['profile_lastname']) ? \$_POST['profile_lastname'] : '';
  \$firstname \t    \t= isset(\$_POST['profile_firstname']) ? \$_POST['profile_firstname'] : '';
\t\$email \t\t      \t= isset(\$_POST['profile_mail']) ? \$_POST['profile_mail'] : '';
  \$nationality \t\t\t= isset(\$_POST['profile_nationality']) ? \$_POST['profile_nationality'] : '';
  \$birthdate   \t\t\t= isset(\$_POST['profile_birthdate']) ? \$_POST['profile_birthdate'] : '';
\t\$speakedlanguages = isset(\$_POST['profile_languages']) ? \$_POST['profile_languages'] : '';

\tforeach(\$_POST as \$field) {
\t\techo \$field;
\t}


\tif((trim(\$email) == '') OR (trim(\$pseudo) == '') OR (empty(\$pseudo)) OR (empty(\$email))) {
\t\t\$error=\"empty_fields\";
\t\techo \$error;

\t} elseif((strlen(\$email) < 10) OR (!isEmail(\$email))) {
\t  \$error=\"invalid_email\";
\t\techo \$error;

\t}

\t\$text_postfields = array(\$lastname, \$firstname, \$nationality, \$speakedlanguages);
\tforeach (\$text_postfields as \$field) {
\t\tif(!preg_match(\"/^[a-zA-Z0-9éèàêç'+()\\- ]+\$/\", \$field)) {
\t\t\t\$error=\"notcompliant_fields\";
\t\t\techo \$error;
\t\t}
\t}

\t/*************** Other checks ***************/
\t/***** Count pseudo, count mail in DB *****/
\t\$nbre_pseudo = pseudo_exist(\$DB, \$pseudo);
\t\$bdd_mail = select_mail(\$DB, \$pseudo);

\tif((\$nbre_pseudo < 1) OR (\$bdd_mail < 1))
\t{
\t  \$error=\"pseudo_or_mail_dont_exists\";
\t}

/*\telseif (strlen(\$password) > 25 || strlen(\$password) < 8)
\t{
\t  echo \"NOK: rule6\";
\t  \$error=\"bad_length_pass\";

\t}
\telseif (ctype_alnum(\$password)) {
\t  echo \"NOK: rule7 - specialchars\";
\t\t\$error=\"notcompliant_password\";
\t}
\telseif (!preg_match(\"/.*[0-9].*[0-9].*+/\", \$password) || !preg_match(\"/.*[A-Z].*+/\", \$password))  {
\t        echo \"NOK: rule7 - numbers and CAPS\";
\t\t\$error=\"notcompliant_password\";
\t}
\telseif (\$password != \$password_check)
\t{
\t    echo \"NOK: rule8\";
\t    \$error=\"passwords_not_matching\";
\t}*/

\telse {
   \t/***** 'htmlentities function permit to esacpe/protect fields against attacks, like XSS *****/
    \$pseudo = htmlspecialchars(trim(\$pseudo));
    \$lastname = htmlspecialchars(trim(\$lastname));
    \$firstname = htmlspecialchars(trim(\$firstname));
    \$email = htmlspecialchars(trim(\$email));
    \$nationality = htmlspecialchars(trim(\$nationality));
\t\t\$birthdate = htmlspecialchars(trim(\$birthdate));
    \$speakedlanguages = htmlspecialchars(trim(\$speakedlanguages));

\t\t//update_profile(\$DB, \$pseudo, \$email, \$lastname, \$name, \$nationality, \$birthdate, \$speakedlanguages);
\t\t//profile_update(\$DB, \$pseudo, \$email, \$lastname, \$firstname, \$nationality, \$birthdate, \$speakedlanguages);
\t\tprofile_update(\$DB, \$pseudo, \$email, \$lastname, \$firstname, \$nationality, \$birthdate);

\t\t/****** Check if update processed correctly ******/
    \$nbre_mail = select_mail(\$DB, \$pseudo);

\t\tif(\$nbre_mail == 1) {
      echo \"OK ! \";
      \$message='<div class=\"form-group\"> <div class=\"alert alert-success fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Vos informations de profil ont été validées !  </div> </div>';
\t\t\t/*\$mail_subject=\"Confirmation de votre inscription Gozpeak\";
\t\t\t\$mail_content = '<html><body>';
\t\t\t\$mail_content .= '<h4>'.\"Bonjour \$pseudo ! \".'</h4>'.'<br>'.'<br>';
\t\t\t\$mail_content .= \"Merci de votre inscription sur Gozpeak :) \".'<br>';
\t\t\t\$mail_content .= \"Afin de rendre votre compte actif, cliquez sur le lien suivant (valable pendant 72h)\".'<br>';
\t\t\t\$mail_content .= \"\$gozpeak_protocol\".\"\$gozpeak_host\".\"/index.php?page=activation&login=\$pseudo&key=\$key\".'<br>'.'<br>';
\t\t\t\$mail_content .= \"A très bientôt pour de nombreuses activités !\".'<br>'.'<br>';
\t\t\t\$mail_content .= \"Linguistiquement,\".'<br>'.'<br>';
\t\t\t\$mail_content .= \"L'équipe Gozpeak\".'<br>';
\t\t\t\$mail_content .= '<img src=\"'.\"\$gozpeak_protocol\".\"\$gozpeak_host\".'/views/images/gozpeak_small.png\" alt=\"Gozpeak Logo\">'.'<br>';
\t\t\t\$mail_content .= '</body> </html>';
\t       \t\tif(send_by_mailgun(\$mail, \"\$mail_subject\", \"\$mail_content\")) {
\t\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-success text-center fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>Merci pour votre inscription sur Gozpeak ! Un email de confirmation vient de vous être envoyé ;) </div> </div>';
        */

\t\t\t\t/******** Send Mail to Gozpeak Team ********/
\t\t\t\t/*\$team_mail_content = '<html><body>';
        \$team_mail_content .= '<h4>'.\"Un nouveau membre inscrit sur Gozpeak ! \".'</h4>'.'<br>'.'<br>';
        \$team_mail_content .= \"Son pseudo : \$pseudo\".'<br>';
        \$team_mail_content .= \"Son adresse e-mail : \$pseudo\".'<br>';
        \$team_mail_content .= \"Cette personne devra activer son compte pour se connecter et s'inscrire aux activités\".'<br>';
\t\t\t\tsend_by_mailgun('info@gozpeak.com', 'Nouvelle inscription [demo.gozpeak.com]', \"\$team_mail_content\");
\t\t\t} else {
\t\t\t\t#\$message = my_echo(\"3\", \"red\", \"'Désolé, une erreur est survenue lors de votre inscription'.'<br>'.'Veuillez réessayer ultérieurement'\");
\t\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger text-center fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>  Désolé, une erreur est survenue lors de votre inscription.   Veuillez réessayer ultérieurement </div> </div>';
\t\t\t}
      */

\t\t/***** If register has not processed correctly *****/
\t\t}
\t\telse
\t\t{
\t\t\techo \"NOK\";
\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Désolé, une erreur est survenue pendant l\\'inscription. Veuillez réessayer ultérieurement. </div> </div>';
\t\t}
  }
}


if (isset(\$error)) {
  if (\$error == 'empty_fields') {
\t  \$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Veuillez remplir les champs obligatoires pour votre inscription </div> </div>';
  } elseif (\$error == 'pseudo_or_mail_dont_exists') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Erreur : le pseudo et l\\'adresse email sont bligatoires dans le formulaire </div> </div>';
  } elseif (\$error == 'invalid_email') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> L\\'adresse email est invalide </div> </div>';
  } elseif (\$error == 'notcompliant_fields') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Certains champs ne doivent pas contenir de caractères spéciaux </div> </div>';
\t}
}

/******** Finally, set Global var if \$message isset, and simply redirect to HOME *********/
if (isset(\$message)) {
\t\$_SESSION['msg'] = \$message;
}

redirect_to_page(\$_GET['page']);

?>
", "Gozpeak/controllers/updateprofile.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/updateprofile.php");
    }
}
