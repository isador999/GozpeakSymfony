<?php

/* Gozpeak/controllers/inscription.php */
class __TwigTemplate_8419de4b6bb92623db1b6ccead321efa03fdf118edf63f89002725ffa6c605de extends Twig_Template
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
        $__internal_c2493c9aeb55787289b177f21ac7f712cbce90e7d7599402e8c773f11d97aaa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2493c9aeb55787289b177f21ac7f712cbce90e7d7599402e8c773f11d97aaa2->enter($__internal_c2493c9aeb55787289b177f21ac7f712cbce90e7d7599402e8c773f11d97aaa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/inscription.php"));

        $__internal_85ebf26d5b06d9372f3bae703f36b8708cb104fa667c43488ac4222374b7d971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ebf26d5b06d9372f3bae703f36b8708cb104fa667c43488ac4222374b7d971->enter($__internal_85ebf26d5b06d9372f3bae703f36b8708cb104fa667c43488ac4222374b7d971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/inscription.php"));

        // line 1
        echo "<?php

session_start();

// Inscription Validation before saving in database //
require_once('./language.php');
require_once('./lib/sessions_init.php');
require_once('./lib/check_strings.php');
require_once('./lib/mailgun.php');
require_once('../models/dbconnect.php');
require_once('../models/inscription_functions.php');

\$page = isset(\$_GET['page']) ? \$_GET['page'] : '';

if(\$_POST) {
\t\$pseudo \t\t\t\t= isset(\$_POST['pseudo']) ? \$_POST['pseudo'] : '';
\t\$mail \t\t\t\t\t= isset(\$_POST['mail']) ? \$_POST['mail'] : '';
\t\$mail_check \t\t= isset(\$_POST['mail_check']) ? \$_POST['mail_check'] : '';
\t\$password \t\t\t= isset(\$_POST['password']) ? \$_POST['password'] : '';
\t\$password_check = isset(\$_POST['password_check']) ? \$_POST['password_check'] : '';


\tif((trim(\$pseudo) == '') OR (trim(\$mail) == '')) {
\t\t//echo \"NOK: rule1\";
\t\t\$error=\"empty_fields\";
\t}
\telse if(empty(\$password) OR empty(\$password_check))
\t{
\t\t//echo \"NOK: rule1\";
\t\t\$error=\"empty_fields\";
\t}
\telseif((strlen(\$mail) < 10) OR (!isEmail(\$mail)))
\t{
\t  // (old function) CKMail (\$_POST['email']);
\t  //echo \"NOK: rule2\";
\t  \$error=\"invalid_email\";
\t}
\telse if(!isEmail(\$mail)) {
\t\t//echo \"NOK: rule2\";
\t\t\$error=\"invalid_email\";
\t}


\t/*************** Other checks ***************/

\t/***** Count pseudo, count mail in DB *****/
\t\$nbre_pseudo = pseudo_exist(\$DB, \$pseudo);
\t\$nbre_mail = mail_exist(\$DB, \$mail);

\t/***** If pseudo or mail is not 0, so one of them exists already *****/
\tif(\$nbre_pseudo > 0)
\t{
\t  //echo \"NOK: rule3\";
\t  \$error=\"pseudo_already_exists\";
\t}
\telseif(\$nbre_mail > 0)
\t{
\t  //echo \"NOK: rule4\";
\t  \$error=\"email_already_exists\";
\t}
   \telseif (\$mail != \$mail_check)
\t{
\t  //echo \"NOK: rule5\";
\t  \$error=\"emails_not_matching\";
\t}


\t/***** If previous rules are OK, check password rules *****/
\telseif (strlen(\$password) > 25 || strlen(\$password) < 8)
\t{
\t  //echo \"NOK: rule6\";
\t  \$error=\"bad_length_pass\";
\t}
\telseif (ctype_alnum(\$password)) {
\t  //echo \"NOK: rule7 - specialchars\";
\t\t\$error=\"notcompliant_password\";
\t}
\telseif (!preg_match(\"/.*[0-9].*[0-9].*+/\", \$password) || !preg_match(\"/.*[A-Z].*+/\", \$password))  {
\t  //echo \"NOK: rule7 - numbers and CAPS\";
\t\t\$error=\"notcompliant_password\";
\t}
\telseif (\$password != \$password_check)
\t{
\t  //echo \"NOK: rule8\";
\t  \$error=\"passwords_not_matching\";
\t}

\telse {
   \t\t/***** 'htmlentities function permit to esacpe/protect fields against attacks, like XSS *****/
    \$pseudo = htmlspecialchars(trim(\$pseudo));
    \$mail = htmlspecialchars(trim(\$mail));
    \$password = htmlspecialchars(trim(\$password));

\t\t/***** Generate Activation Key *****/
\t\t\$key = md5(microtime(TRUE)*100000);
\t\t#\$password = hash(sha1, \$password);
\t\t\$hashed_password = password_hash(\$password, PASSWORD_DEFAULT);

\t\t/***** Registering... *****/
\t\t\$d = array(\"\$pseudo\", \"\$mail\", \$hashed_password, \"\$key\");
\t\tadd_member(\$DB, \$d);

\t\t/****** Check if register processed correctly ******/
\t\t\$nb_pseudo = pseudo_exist(\$DB, \$pseudo);
\t\tif(\$nb_pseudo > 0) {
\t\t\t#echo \"OK\";

\t\t\t/***** URLENCODE TO CHANGE SPECIAL CHARS TO CODE *****/
\t\t\t\$pseudo = urlencode(\$pseudo);
\t    \$key = urlencode(\$key);

\t\t\t\$mail_subject=\"Confirmation de votre inscription Gozpeak\";
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
\t    if(send_by_mailgun(\$mail, \"\$mail_subject\", \"\$mail_content\")) {
\t\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-success fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>Merci pour votre inscription sur Gozpeak ! Un email de confirmation vient de vous être envoyé ;) </div> </div>';

\t\t\t\t/******** Send Mail to Gozpeak Team ********/
\t\t\t\t\$team_mail_content = '<html><body>';
        \$team_mail_content .= '<h4>'.\"Un nouveau membre inscrit sur Gozpeak ! \".'</h4>'.'<br>'.'<br>';
        \$team_mail_content .= \"Son pseudo : \$pseudo\".'<br>';
        \$team_mail_content .= \"Son adresse e-mail : \$pseudo\".'<br>';
        \$team_mail_content .= \"Cette personne devra activer son compte pour se connecter et s'inscrire aux activités\".'<br>';
\t\t\t\tsend_by_mailgun('info@gozpeak.com', 'Nouvelle inscription [demo.gozpeak.com]', \"\$team_mail_content\");
\t\t\t} else {
\t\t\t\t#\$message = my_echo(\"3\", \"red\", \"'Désolé, une erreur est survenue lors de votre inscription'.'<br>'.'Veuillez réessayer ultérieurement'\");
\t\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>  Désolé, une erreur est survenue lors de votre inscription.   Veuillez réessayer ultérieurement </div> </div>';
\t\t\t}

\t\t/***** If register has not processed correctly *****/
\t\t}
\t\telse
\t\t{
\t\t\techo \"NOK\";
\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Désolé, une erreur est survenue pendant l\\'inscription. Veuillez réessayer plus tard. </div> </div>';
\t\t}
  }
}



if (isset(\$error)) {
  if (\$error == 'empty_fields') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Veuillez remplir les champs obligatoires pour votre inscription </div> </div>';
  } elseif (\$error == 'pseudo_already_exists') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Désolé, le pseudo que vous avez choisi existe deja </div> </div>';
  } elseif (\$error == 'email_already_exists') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> L\\'email que vous avez entré existe déjà </div> </div>';
  } elseif (\$error == 'bad_length_pass') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Le mot de passe doit etre compris entre 8 et 25 caracteres </div> </div>';
  } elseif (\$error == 'notcompliant_password') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Le mot de passe choisi ne respecte pas la politique de sécurité, il doit contenir au minimum 2 chiffres, une majuscule et un caractère spécial. </div> </div>';
  } elseif (\$error == 'passwords_not_matching') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Les mots de passe ne correspondent pas </div> </div>';
  } elseif (\$error == 'invalid_email') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> L\\'adresse email est invalide </div> </div>';
  } elseif (\$error == 'emails_not_matching') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Les adresses email ne correspondent pas </div> </div>';
  }
}


/******** Finally, set Global var if \$message isset, and simply redirect to HOME *********/
if (isset(\$message)) {
\t\$_SESSION['msg'] = \$message;
}

redirect_to_page(\$baseUrl, \$page);

?>
";
        
        $__internal_c2493c9aeb55787289b177f21ac7f712cbce90e7d7599402e8c773f11d97aaa2->leave($__internal_c2493c9aeb55787289b177f21ac7f712cbce90e7d7599402e8c773f11d97aaa2_prof);

        
        $__internal_85ebf26d5b06d9372f3bae703f36b8708cb104fa667c43488ac4222374b7d971->leave($__internal_85ebf26d5b06d9372f3bae703f36b8708cb104fa667c43488ac4222374b7d971_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/inscription.php";
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
require_once('./lib/mailgun.php');
require_once('../models/dbconnect.php');
require_once('../models/inscription_functions.php');

\$page = isset(\$_GET['page']) ? \$_GET['page'] : '';

if(\$_POST) {
\t\$pseudo \t\t\t\t= isset(\$_POST['pseudo']) ? \$_POST['pseudo'] : '';
\t\$mail \t\t\t\t\t= isset(\$_POST['mail']) ? \$_POST['mail'] : '';
\t\$mail_check \t\t= isset(\$_POST['mail_check']) ? \$_POST['mail_check'] : '';
\t\$password \t\t\t= isset(\$_POST['password']) ? \$_POST['password'] : '';
\t\$password_check = isset(\$_POST['password_check']) ? \$_POST['password_check'] : '';


\tif((trim(\$pseudo) == '') OR (trim(\$mail) == '')) {
\t\t//echo \"NOK: rule1\";
\t\t\$error=\"empty_fields\";
\t}
\telse if(empty(\$password) OR empty(\$password_check))
\t{
\t\t//echo \"NOK: rule1\";
\t\t\$error=\"empty_fields\";
\t}
\telseif((strlen(\$mail) < 10) OR (!isEmail(\$mail)))
\t{
\t  // (old function) CKMail (\$_POST['email']);
\t  //echo \"NOK: rule2\";
\t  \$error=\"invalid_email\";
\t}
\telse if(!isEmail(\$mail)) {
\t\t//echo \"NOK: rule2\";
\t\t\$error=\"invalid_email\";
\t}


\t/*************** Other checks ***************/

\t/***** Count pseudo, count mail in DB *****/
\t\$nbre_pseudo = pseudo_exist(\$DB, \$pseudo);
\t\$nbre_mail = mail_exist(\$DB, \$mail);

\t/***** If pseudo or mail is not 0, so one of them exists already *****/
\tif(\$nbre_pseudo > 0)
\t{
\t  //echo \"NOK: rule3\";
\t  \$error=\"pseudo_already_exists\";
\t}
\telseif(\$nbre_mail > 0)
\t{
\t  //echo \"NOK: rule4\";
\t  \$error=\"email_already_exists\";
\t}
   \telseif (\$mail != \$mail_check)
\t{
\t  //echo \"NOK: rule5\";
\t  \$error=\"emails_not_matching\";
\t}


\t/***** If previous rules are OK, check password rules *****/
\telseif (strlen(\$password) > 25 || strlen(\$password) < 8)
\t{
\t  //echo \"NOK: rule6\";
\t  \$error=\"bad_length_pass\";
\t}
\telseif (ctype_alnum(\$password)) {
\t  //echo \"NOK: rule7 - specialchars\";
\t\t\$error=\"notcompliant_password\";
\t}
\telseif (!preg_match(\"/.*[0-9].*[0-9].*+/\", \$password) || !preg_match(\"/.*[A-Z].*+/\", \$password))  {
\t  //echo \"NOK: rule7 - numbers and CAPS\";
\t\t\$error=\"notcompliant_password\";
\t}
\telseif (\$password != \$password_check)
\t{
\t  //echo \"NOK: rule8\";
\t  \$error=\"passwords_not_matching\";
\t}

\telse {
   \t\t/***** 'htmlentities function permit to esacpe/protect fields against attacks, like XSS *****/
    \$pseudo = htmlspecialchars(trim(\$pseudo));
    \$mail = htmlspecialchars(trim(\$mail));
    \$password = htmlspecialchars(trim(\$password));

\t\t/***** Generate Activation Key *****/
\t\t\$key = md5(microtime(TRUE)*100000);
\t\t#\$password = hash(sha1, \$password);
\t\t\$hashed_password = password_hash(\$password, PASSWORD_DEFAULT);

\t\t/***** Registering... *****/
\t\t\$d = array(\"\$pseudo\", \"\$mail\", \$hashed_password, \"\$key\");
\t\tadd_member(\$DB, \$d);

\t\t/****** Check if register processed correctly ******/
\t\t\$nb_pseudo = pseudo_exist(\$DB, \$pseudo);
\t\tif(\$nb_pseudo > 0) {
\t\t\t#echo \"OK\";

\t\t\t/***** URLENCODE TO CHANGE SPECIAL CHARS TO CODE *****/
\t\t\t\$pseudo = urlencode(\$pseudo);
\t    \$key = urlencode(\$key);

\t\t\t\$mail_subject=\"Confirmation de votre inscription Gozpeak\";
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
\t    if(send_by_mailgun(\$mail, \"\$mail_subject\", \"\$mail_content\")) {
\t\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-success fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>Merci pour votre inscription sur Gozpeak ! Un email de confirmation vient de vous être envoyé ;) </div> </div>';

\t\t\t\t/******** Send Mail to Gozpeak Team ********/
\t\t\t\t\$team_mail_content = '<html><body>';
        \$team_mail_content .= '<h4>'.\"Un nouveau membre inscrit sur Gozpeak ! \".'</h4>'.'<br>'.'<br>';
        \$team_mail_content .= \"Son pseudo : \$pseudo\".'<br>';
        \$team_mail_content .= \"Son adresse e-mail : \$pseudo\".'<br>';
        \$team_mail_content .= \"Cette personne devra activer son compte pour se connecter et s'inscrire aux activités\".'<br>';
\t\t\t\tsend_by_mailgun('info@gozpeak.com', 'Nouvelle inscription [demo.gozpeak.com]', \"\$team_mail_content\");
\t\t\t} else {
\t\t\t\t#\$message = my_echo(\"3\", \"red\", \"'Désolé, une erreur est survenue lors de votre inscription'.'<br>'.'Veuillez réessayer ultérieurement'\");
\t\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>  Désolé, une erreur est survenue lors de votre inscription.   Veuillez réessayer ultérieurement </div> </div>';
\t\t\t}

\t\t/***** If register has not processed correctly *****/
\t\t}
\t\telse
\t\t{
\t\t\techo \"NOK\";
\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Désolé, une erreur est survenue pendant l\\'inscription. Veuillez réessayer plus tard. </div> </div>';
\t\t}
  }
}



if (isset(\$error)) {
  if (\$error == 'empty_fields') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Veuillez remplir les champs obligatoires pour votre inscription </div> </div>';
  } elseif (\$error == 'pseudo_already_exists') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Désolé, le pseudo que vous avez choisi existe deja </div> </div>';
  } elseif (\$error == 'email_already_exists') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> L\\'email que vous avez entré existe déjà </div> </div>';
  } elseif (\$error == 'bad_length_pass') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Le mot de passe doit etre compris entre 8 et 25 caracteres </div> </div>';
  } elseif (\$error == 'notcompliant_password') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Le mot de passe choisi ne respecte pas la politique de sécurité, il doit contenir au minimum 2 chiffres, une majuscule et un caractère spécial. </div> </div>';
  } elseif (\$error == 'passwords_not_matching') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Les mots de passe ne correspondent pas </div> </div>';
  } elseif (\$error == 'invalid_email') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> L\\'adresse email est invalide </div> </div>';
  } elseif (\$error == 'emails_not_matching') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Les adresses email ne correspondent pas </div> </div>';
  }
}


/******** Finally, set Global var if \$message isset, and simply redirect to HOME *********/
if (isset(\$message)) {
\t\$_SESSION['msg'] = \$message;
}

redirect_to_page(\$baseUrl, \$page);

?>
", "Gozpeak/controllers/inscription.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/inscription.php");
    }
}
