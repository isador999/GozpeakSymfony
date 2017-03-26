<?php

/* Gozpeak/controllers/contact.php */
class __TwigTemplate_56658f6fdf32fe0d7457a81af660e286c9502c8023f28b34798ebe036f6493ac extends Twig_Template
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
        $__internal_67a1c0827da52ad9ceae6387908d3003fe05894d6c29ff6402a374cb92649aef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67a1c0827da52ad9ceae6387908d3003fe05894d6c29ff6402a374cb92649aef->enter($__internal_67a1c0827da52ad9ceae6387908d3003fe05894d6c29ff6402a374cb92649aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/contact.php"));

        $__internal_02273e944fc8d23e357383c76ba8b27508c93feb308f3acbb2df0355ade4d251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02273e944fc8d23e357383c76ba8b27508c93feb308f3acbb2df0355ade4d251->enter($__internal_02273e944fc8d23e357383c76ba8b27508c93feb308f3acbb2df0355ade4d251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/contact.php"));

        // line 1
        echo "<?php


session_start();

// Inscription Validation before saving in database //
require_once('./language.php');
require_once('./lib/sessions_init.php');
require_once('./lib/check_strings.php');
require_once('./lib/mailgun.php');
require_once('../models/dbconnect.php');
require_once('../models/contact_functions.php');

\$page = isset(\$_GET['page']) ? \$_GET['page'] : '';

if(\$_POST){
\t\$contact_name \t\t\t= isset(\$_POST['contact_name']) ? \$_POST['contact_name'] : '';
\t\$contact_email \t\t\t= isset(\$_POST['contact_email']) ? \$_POST['contact_email'] : '';
\t\$contact_subject \t\t= isset(\$_POST['contact_subject']) ? \$_POST['contact_subject'] : '';
\t\$contact_message \t\t= isset(\$_POST['contact_message']) ? \$_POST['contact_message'] : '';
\t\$contact_captcha \t\t= isset(\$_POST['contact_captcha']) ? \$_POST['contact_captcha'] : '';

\t\$contact_postfields = array(\$contact_name, \$contact_email, \$contact_subject, \$contact_message, \$contact_captcha);
\t\$contact_text_postfields = array(\$contact_name, \$contact_subject, \$contact_captcha);

\tforeach (\$contact_postfields as \$field) {
\t\t#echo \$field;
\t\tif((trim(\$field) == '') OR (empty(\$field))) {
\t\t\t#echo \"NOK: rule1\";
\t\t\t\$error=\"empty_fields\";
\t\t}
\t}

\t//Check if special chars in name, subject, captcha
\tforeach (\$contact_text_postfields as \$field) {
\t\tif (preg_match(\"/.*[!@#\$&*].*+/\", \$field)) {
\t\t\t\$error=\"unallowed_special_chars\";
\t\t}
\t}

\t// Check LengthName
\tif (strlen(\$contact_name) < 4 OR strlen(\$contact_name) > 20) {
\t\techo \$contact_name;
\t\techo (strlen(\$contact_name));
\t\t\$error=\"invalid_name\";
\t}

\t//Check Email
\telseif(!isEmail(\$contact_email) OR strlen(\$contact_email) < 10 OR strlen(\$contact_email) > 70) {
\t\t\$error=\"invalid_email\";
\t}
\telseif (strlen(\$contact_subject) < 6 OR strlen(\$contact_subject) > 20 ) {
\t\t\$error=\"invalid_subject\";
\t}
\telseif (strlen(\$contact_message) < 15 OR strlen(\$contact_message) > 600 ) {
\t\t\$error=\"invalid_message\";
\t}

\t//All fields seems valid
\tif (!isset(\$error)) {
\t\t\$contact_name = htmlspecialchars(trim(\$contact_name));
    \$contact_email = htmlspecialchars(trim(\$contact_email));
    \$contact_subject = htmlspecialchars(trim(\$contact_subject));
\t\t\$contact_message = htmlspecialchars(trim(\$contact_message));
\t\t\$contact_captcha = htmlspecialchars(trim(\$contact_captcha));

\t\t\$contact_date = date('Y-m-d H:i:s');
\t\t\$contact_postfields = array(\$contact_name, \$contact_email, \$contact_subject, \$contact_message, \$contact_date);
\t\techo \"Les donnees sont : \";
\t\techo var_dump(\$contact_postfields);
\t\tif (register_contacts_stats(\$DB, \$contact_postfields)) {
\t\t\techo \"Registered in DB\";
\t\t}

\t\t\$contact_entry = check_contact_exists(\$DB, \$contact_email, \$contact_subject, \$contact_date);
\t\techo \"contact_entry est \".\$contact_entry;

\t\tif (\$contact_entry > 0) {
\t\t\tforeach (\$contact_postfields as \$field) {
\t\t\t\t\$field = urlencode(\$field);
\t\t\t}

\t\t\t//Send email
\t\t\t\$team_mail_content = '<html><body>';
\t\t\t\$team_mail_content .= '<h4>'.\"Nouveau message de contact\".'</h4>'.'<br>'.'<br>';
\t\t\t\$team_mail_content .= \"Votre message de contact a bien été pris en compte\".'<br>'.'<br>';
\t\t\t\$team_mail_content .= \"Voici le message posté : \".'<br>'.'<br>';
\t\t\t\$team_mail_content .= \"Message posté par : \".\$contact_name.'<br>';
\t\t\t\$team_mail_content .= \"Avec l'adresse email  : \".\$contact_email.'<br>';
\t\t\t\$team_mail_content .= \"Object : \".\$contact_subject.'<br>';
\t\t\t\$team_mail_content .= \"Message : \".\$contact_message.'<br>';
\t\t\t\$team_mail_content .= \"Ces informations ont normalement été enregistrées en base de données \".'<br>';
\t\t\t\$team_mail_content .= '</body> </html>';
\t\t\tif(send_by_mailgun('info@gozpeak.com', 'Nouveau message de contact [demo.gozpeak.com]', \"\$team_mail_content\")) {
\t\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-success fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Votre message a été envoyé avec succès ! <br> Votre demande sera prise en compte dès que possible </div> </div>';

\t\t\t\t\$mail_subject = \"Contact de l'équipe Gozpeak\";
\t\t\t\t\$mail_content = '<html><body>';
\t\t\t\t\$mail_content .= '<h4>'.\"Bonjour \$contact_name ! \".'</h4>'.'<br>'.'<br>';
\t\t\t\t\$mail_content .= \"Vous venez de contacter l'équipe Gozpeak, votre message de contact a bien été pris en compte\".'<br>'.'<br>';
\t\t\t\t\$mail_content .= \"Pour rappel, voici votre message : \".'<br>'.'<br>';
\t\t\t\t\$mail_content .= \"Votre email : \".\$contact_email.'<br>';
\t\t\t\t\$mail_content .= \"Object : \".\$contact_subject.'<br>';
\t\t\t\t\$mail_content .= \"Message : \".\$contact_message.'<br>';
\t\t\t\t\$mail_content .= \"Linguistiquement,\".'<br>'.'<br>';
\t\t\t\t\$mail_content .= \"L'équipe Gozpeak\".'<br>';
\t\t\t\t\$mail_content .= '<img src=\"'.\"\$gozpeak_protocol\".\"\$gozpeak_host\".'/views/images/gozpeak_small.png\" alt=\"Gozpeak Logo\">'.'<br>';
\t\t\t\t\$mail_content .= '</body> </html>';
\t\t\t\tsend_by_mailgun(\$contact_email, \"\$mail_subject\", \"\$mail_content\");
\t\t\t} else {
\t\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>  Désolé, une erreur est survenue lors de l\\'envoi du message de contact. <br>  Veuillez réessayer ultérieurement </div> </div>';
\t\t\t}
\t\t\t//Contact failed to be registered in DB
\t\t} else {
\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>  Désolé, une erreur est survenue lors de l\\'envoi du message de contact. <br>  Veuillez réessayer ultérieurement </div> </div>';
\t\t}
\t}
}


if (isset(\$error)) {
  if (\$error == 'empty_fields') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Veuillez remplir tous les champs du formulaire de contact </div> </div>';
  } elseif (\$error == 'unallowed_special_chars') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Certains champs ne doivent pas contenir de caractères spéciaux </div> </div>';
  } elseif (\$error == 'invalid_name') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Le nom doit être compris entre 4 et 20 caratères </div> </div>';
\t} elseif (\$error == 'invalid_email') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Votre adresse email de contact ne semble pas valide </div> </div>';
\t} elseif (\$error == 'invalid_subject') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> L\\'objet de votre message doit être compris entre 6 et 20 caractères </div> </div>';
\t} elseif (\$error == 'invalid_message') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Votre message de contact doit être compris entre 15 et 600 caractères </div> </div>';
\t}
}

/******** Finally, set Global var if \$message isset, and simply redirect to HOME *********/
if (isset(\$message)) {
\t\$_SESSION['msg'] = \$message;
}

redirect_to_page(\$baseUrl, \$page);

?>
";
        
        $__internal_67a1c0827da52ad9ceae6387908d3003fe05894d6c29ff6402a374cb92649aef->leave($__internal_67a1c0827da52ad9ceae6387908d3003fe05894d6c29ff6402a374cb92649aef_prof);

        
        $__internal_02273e944fc8d23e357383c76ba8b27508c93feb308f3acbb2df0355ade4d251->leave($__internal_02273e944fc8d23e357383c76ba8b27508c93feb308f3acbb2df0355ade4d251_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/contact.php";
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
require_once('../models/contact_functions.php');

\$page = isset(\$_GET['page']) ? \$_GET['page'] : '';

if(\$_POST){
\t\$contact_name \t\t\t= isset(\$_POST['contact_name']) ? \$_POST['contact_name'] : '';
\t\$contact_email \t\t\t= isset(\$_POST['contact_email']) ? \$_POST['contact_email'] : '';
\t\$contact_subject \t\t= isset(\$_POST['contact_subject']) ? \$_POST['contact_subject'] : '';
\t\$contact_message \t\t= isset(\$_POST['contact_message']) ? \$_POST['contact_message'] : '';
\t\$contact_captcha \t\t= isset(\$_POST['contact_captcha']) ? \$_POST['contact_captcha'] : '';

\t\$contact_postfields = array(\$contact_name, \$contact_email, \$contact_subject, \$contact_message, \$contact_captcha);
\t\$contact_text_postfields = array(\$contact_name, \$contact_subject, \$contact_captcha);

\tforeach (\$contact_postfields as \$field) {
\t\t#echo \$field;
\t\tif((trim(\$field) == '') OR (empty(\$field))) {
\t\t\t#echo \"NOK: rule1\";
\t\t\t\$error=\"empty_fields\";
\t\t}
\t}

\t//Check if special chars in name, subject, captcha
\tforeach (\$contact_text_postfields as \$field) {
\t\tif (preg_match(\"/.*[!@#\$&*].*+/\", \$field)) {
\t\t\t\$error=\"unallowed_special_chars\";
\t\t}
\t}

\t// Check LengthName
\tif (strlen(\$contact_name) < 4 OR strlen(\$contact_name) > 20) {
\t\techo \$contact_name;
\t\techo (strlen(\$contact_name));
\t\t\$error=\"invalid_name\";
\t}

\t//Check Email
\telseif(!isEmail(\$contact_email) OR strlen(\$contact_email) < 10 OR strlen(\$contact_email) > 70) {
\t\t\$error=\"invalid_email\";
\t}
\telseif (strlen(\$contact_subject) < 6 OR strlen(\$contact_subject) > 20 ) {
\t\t\$error=\"invalid_subject\";
\t}
\telseif (strlen(\$contact_message) < 15 OR strlen(\$contact_message) > 600 ) {
\t\t\$error=\"invalid_message\";
\t}

\t//All fields seems valid
\tif (!isset(\$error)) {
\t\t\$contact_name = htmlspecialchars(trim(\$contact_name));
    \$contact_email = htmlspecialchars(trim(\$contact_email));
    \$contact_subject = htmlspecialchars(trim(\$contact_subject));
\t\t\$contact_message = htmlspecialchars(trim(\$contact_message));
\t\t\$contact_captcha = htmlspecialchars(trim(\$contact_captcha));

\t\t\$contact_date = date('Y-m-d H:i:s');
\t\t\$contact_postfields = array(\$contact_name, \$contact_email, \$contact_subject, \$contact_message, \$contact_date);
\t\techo \"Les donnees sont : \";
\t\techo var_dump(\$contact_postfields);
\t\tif (register_contacts_stats(\$DB, \$contact_postfields)) {
\t\t\techo \"Registered in DB\";
\t\t}

\t\t\$contact_entry = check_contact_exists(\$DB, \$contact_email, \$contact_subject, \$contact_date);
\t\techo \"contact_entry est \".\$contact_entry;

\t\tif (\$contact_entry > 0) {
\t\t\tforeach (\$contact_postfields as \$field) {
\t\t\t\t\$field = urlencode(\$field);
\t\t\t}

\t\t\t//Send email
\t\t\t\$team_mail_content = '<html><body>';
\t\t\t\$team_mail_content .= '<h4>'.\"Nouveau message de contact\".'</h4>'.'<br>'.'<br>';
\t\t\t\$team_mail_content .= \"Votre message de contact a bien été pris en compte\".'<br>'.'<br>';
\t\t\t\$team_mail_content .= \"Voici le message posté : \".'<br>'.'<br>';
\t\t\t\$team_mail_content .= \"Message posté par : \".\$contact_name.'<br>';
\t\t\t\$team_mail_content .= \"Avec l'adresse email  : \".\$contact_email.'<br>';
\t\t\t\$team_mail_content .= \"Object : \".\$contact_subject.'<br>';
\t\t\t\$team_mail_content .= \"Message : \".\$contact_message.'<br>';
\t\t\t\$team_mail_content .= \"Ces informations ont normalement été enregistrées en base de données \".'<br>';
\t\t\t\$team_mail_content .= '</body> </html>';
\t\t\tif(send_by_mailgun('info@gozpeak.com', 'Nouveau message de contact [demo.gozpeak.com]', \"\$team_mail_content\")) {
\t\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-success fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Votre message a été envoyé avec succès ! <br> Votre demande sera prise en compte dès que possible </div> </div>';

\t\t\t\t\$mail_subject = \"Contact de l'équipe Gozpeak\";
\t\t\t\t\$mail_content = '<html><body>';
\t\t\t\t\$mail_content .= '<h4>'.\"Bonjour \$contact_name ! \".'</h4>'.'<br>'.'<br>';
\t\t\t\t\$mail_content .= \"Vous venez de contacter l'équipe Gozpeak, votre message de contact a bien été pris en compte\".'<br>'.'<br>';
\t\t\t\t\$mail_content .= \"Pour rappel, voici votre message : \".'<br>'.'<br>';
\t\t\t\t\$mail_content .= \"Votre email : \".\$contact_email.'<br>';
\t\t\t\t\$mail_content .= \"Object : \".\$contact_subject.'<br>';
\t\t\t\t\$mail_content .= \"Message : \".\$contact_message.'<br>';
\t\t\t\t\$mail_content .= \"Linguistiquement,\".'<br>'.'<br>';
\t\t\t\t\$mail_content .= \"L'équipe Gozpeak\".'<br>';
\t\t\t\t\$mail_content .= '<img src=\"'.\"\$gozpeak_protocol\".\"\$gozpeak_host\".'/views/images/gozpeak_small.png\" alt=\"Gozpeak Logo\">'.'<br>';
\t\t\t\t\$mail_content .= '</body> </html>';
\t\t\t\tsend_by_mailgun(\$contact_email, \"\$mail_subject\", \"\$mail_content\");
\t\t\t} else {
\t\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>  Désolé, une erreur est survenue lors de l\\'envoi du message de contact. <br>  Veuillez réessayer ultérieurement </div> </div>';
\t\t\t}
\t\t\t//Contact failed to be registered in DB
\t\t} else {
\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>  Désolé, une erreur est survenue lors de l\\'envoi du message de contact. <br>  Veuillez réessayer ultérieurement </div> </div>';
\t\t}
\t}
}


if (isset(\$error)) {
  if (\$error == 'empty_fields') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Veuillez remplir tous les champs du formulaire de contact </div> </div>';
  } elseif (\$error == 'unallowed_special_chars') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Certains champs ne doivent pas contenir de caractères spéciaux </div> </div>';
  } elseif (\$error == 'invalid_name') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Le nom doit être compris entre 4 et 20 caratères </div> </div>';
\t} elseif (\$error == 'invalid_email') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Votre adresse email de contact ne semble pas valide </div> </div>';
\t} elseif (\$error == 'invalid_subject') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> L\\'objet de votre message doit être compris entre 6 et 20 caractères </div> </div>';
\t} elseif (\$error == 'invalid_message') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Votre message de contact doit être compris entre 15 et 600 caractères </div> </div>';
\t}
}

/******** Finally, set Global var if \$message isset, and simply redirect to HOME *********/
if (isset(\$message)) {
\t\$_SESSION['msg'] = \$message;
}

redirect_to_page(\$baseUrl, \$page);

?>
", "Gozpeak/controllers/contact.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/contact.php");
    }
}
