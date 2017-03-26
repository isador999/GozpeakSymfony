<?php

/* Gozpeak/controllers/forgotpass.php */
class __TwigTemplate_8eaba40f99ef66859904760afa652851f0b70d84247f62af309d05ca4883b01d extends Twig_Template
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
        $__internal_00ae4dd7167e520b68457fdc32c57a108c2d4bfc161bff0677a46364ac38a5da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00ae4dd7167e520b68457fdc32c57a108c2d4bfc161bff0677a46364ac38a5da->enter($__internal_00ae4dd7167e520b68457fdc32c57a108c2d4bfc161bff0677a46364ac38a5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/forgotpass.php"));

        $__internal_2f70888f98ea9d9c9855e561788fe3d7dfbe0b3f1e4e65d1959301253f20041f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f70888f98ea9d9c9855e561788fe3d7dfbe0b3f1e4e65d1959301253f20041f->enter($__internal_2f70888f98ea9d9c9855e561788fe3d7dfbe0b3f1e4e65d1959301253f20041f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/forgotpass.php"));

        // line 1
        echo "<?php
/******** Start, or continue Session *******/
session_start();
require_once('./language.php');
require_once('./lib/sessions_init.php');
require_once('./lib/check_strings.php');
require_once('./lib/generate_strings.php');
require_once('./lib/mailgun.php');
require_once('../models/forgotpass_functions.php');
require_once('../models/dbconnect.php');

\$page = isset(\$_GET['page']) ? \$_GET['page'] : '';

if(\$_POST) {
\t\$mail = isset(\$_POST['mail_forgotpass']) ? \$_POST['mail_forgotpass'] : '';

\tif(trim(\$mail) == '') {
\t\techo \"NOK: rule1\";
\t\t\$error=\"empy_fields\";
\t}
\telse if((strlen(\$mail) < 10) OR (!isEmail(\$mail)))
\t{
\t\techo \"NOK: rule2\";
\t\t\$error=\"invalid_email\";
\t}


\t/******* Check mail in Database *******/
\t\$nbre_mail = mail_exist(\$DB, \$mail);

\tif(\$nbre_mail == 0)
  {
    echo \"NOK: rule3\";
    \$error=\"non_existent_email\";
  }
\telse {
\t\t/***** 'htmlentities function permit to escape/protect fields against attacks, like XSS *****/
    \$mail = htmlspecialchars(trim(\$mail));

\t\t#\$key = md5(microtime(TRUE)*100000);
\t\t/****** Register key in DB, (this way, when the user will click on reset link by mail, we can eventually check the key and delete it at the end. ******/

\t\t\$pseudo = select_pseudo(\$DB, \$mail);

\t\tif(empty(\$pseudo)) {
\t\t\techo \"NOK: rule4\";
\t\t\t\$error=\"pseudo_not_found\";

\t\t} else {
\t\t\t\$generatedtoken = getRandomString(12);
      /***** URLENCODE TO CHANGE SPECIAL CHARS TO CODE *****/
      \$generatedtoken = urlencode(\$generatedtoken);
      \$pseudo = urlencode(\$pseudo);


\t\t\t\$mail_subject=\"Gozpeak : Réinitialisation de mot de passe\";
\t\t\t\$mail_content = '<html><body>';
\t\t\t\$mail_content .= '<h4>'.\"Bonjour \$pseudo ! \".'</h4>'.'<br>'.'<br>';
\t\t\t\$mail_content .= \"Ci-dessous un lien pour changer votre mot de passe Gozpeak :) \".'<br>';
\t\t\t\$mail_content .= \"Ce lien n'est valide que pendant les prochaines 24h.\".'<br>';
\t\t\t\$mail_content .= \"\$gozpeak_protocol\".\"\$gozpeak_host\".\"/index.php?page=resetpass&token=\$generatedtoken&login=\$pseudo\".'<br>'.'<br>';
\t\t\t\$mail_content .= \"A bientôt sur Gozpeak !\".'<br>'.'<br>';
\t\t\t\$mail_content .= \"Linguistiquement,\".'<br>'.'<br>';
\t\t\t\$mail_content .= '<img src=\"'.\"\$gozpeak_protocol\".\"\$gozpeak_host\".'/views/images/gozpeak_small.png\" alt=\"Gozpeak Logo\">'.'<br>';
\t\t\t\$mail_content .= '</body> </html>';
\t\t\tif(send_by_mailgun(\$mail, \"\$mail_subject\", \"\$mail_content\")) {
\t\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-success fade in\"> Un email vous a été envoyé pour réinitialiser votre mot de passe </div> </div>';
\t\t\t\tset_resetpass_token(\$DB, \$generatedtoken, \$pseudo);
        //\$DTime = new DateTime();
        //\$DTime -> modify('+1 day');
        //\$DTime = date('Y-m-d H:i:s');
        //\$DTime = strtotime(\$DTime. ' + 1 days');
        set_resetpass_expiration(\$DB, \$pseudo);
\t\t\t} else {
\t\t\t\t\$message = \"'Désolé, une erreur est survenue '.'<br>'.'Veuillez réessayer ultérieurement'\";
\t\t\t}
\t\t}
\t}
}


if (isset(\$error)) {
\tif (\$error == 'empty_fields') {
    \$message='<div class=\"form-group\"> <div class=\"alert alert-danger\"> Vous devez obligatoirement fournir votre email pour la récupération de mot de passe </div> </div>';
\t}
\telseif (\$error == 'invalid_email') {
  \t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger\"> Cette adresse email n\\'est pas valide </div> </div>';
\t}
\telseif (\$error = 'non_existent_email') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger\"> Cette adresse email n\\'est pas enregistrée sur Gozpeak </div> </div>';
\t}
\telseif (\$error = 'pseudo_not_found') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger\"> Un compte possédant cette adresse mail semble exister, mais aucun pseudonyme associé n\\'a été trouvé</div> </div>';
\t}
}


/***** Finally, set Global var if \$message isset, and simply redirect to HOME *********/
if (isset(\$message)) {
  \$_SESSION['msg'] = \$message;
}

redirect_to_page(\$baseUrl, \$page);

?>
";
        
        $__internal_00ae4dd7167e520b68457fdc32c57a108c2d4bfc161bff0677a46364ac38a5da->leave($__internal_00ae4dd7167e520b68457fdc32c57a108c2d4bfc161bff0677a46364ac38a5da_prof);

        
        $__internal_2f70888f98ea9d9c9855e561788fe3d7dfbe0b3f1e4e65d1959301253f20041f->leave($__internal_2f70888f98ea9d9c9855e561788fe3d7dfbe0b3f1e4e65d1959301253f20041f_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/forgotpass.php";
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
/******** Start, or continue Session *******/
session_start();
require_once('./language.php');
require_once('./lib/sessions_init.php');
require_once('./lib/check_strings.php');
require_once('./lib/generate_strings.php');
require_once('./lib/mailgun.php');
require_once('../models/forgotpass_functions.php');
require_once('../models/dbconnect.php');

\$page = isset(\$_GET['page']) ? \$_GET['page'] : '';

if(\$_POST) {
\t\$mail = isset(\$_POST['mail_forgotpass']) ? \$_POST['mail_forgotpass'] : '';

\tif(trim(\$mail) == '') {
\t\techo \"NOK: rule1\";
\t\t\$error=\"empy_fields\";
\t}
\telse if((strlen(\$mail) < 10) OR (!isEmail(\$mail)))
\t{
\t\techo \"NOK: rule2\";
\t\t\$error=\"invalid_email\";
\t}


\t/******* Check mail in Database *******/
\t\$nbre_mail = mail_exist(\$DB, \$mail);

\tif(\$nbre_mail == 0)
  {
    echo \"NOK: rule3\";
    \$error=\"non_existent_email\";
  }
\telse {
\t\t/***** 'htmlentities function permit to escape/protect fields against attacks, like XSS *****/
    \$mail = htmlspecialchars(trim(\$mail));

\t\t#\$key = md5(microtime(TRUE)*100000);
\t\t/****** Register key in DB, (this way, when the user will click on reset link by mail, we can eventually check the key and delete it at the end. ******/

\t\t\$pseudo = select_pseudo(\$DB, \$mail);

\t\tif(empty(\$pseudo)) {
\t\t\techo \"NOK: rule4\";
\t\t\t\$error=\"pseudo_not_found\";

\t\t} else {
\t\t\t\$generatedtoken = getRandomString(12);
      /***** URLENCODE TO CHANGE SPECIAL CHARS TO CODE *****/
      \$generatedtoken = urlencode(\$generatedtoken);
      \$pseudo = urlencode(\$pseudo);


\t\t\t\$mail_subject=\"Gozpeak : Réinitialisation de mot de passe\";
\t\t\t\$mail_content = '<html><body>';
\t\t\t\$mail_content .= '<h4>'.\"Bonjour \$pseudo ! \".'</h4>'.'<br>'.'<br>';
\t\t\t\$mail_content .= \"Ci-dessous un lien pour changer votre mot de passe Gozpeak :) \".'<br>';
\t\t\t\$mail_content .= \"Ce lien n'est valide que pendant les prochaines 24h.\".'<br>';
\t\t\t\$mail_content .= \"\$gozpeak_protocol\".\"\$gozpeak_host\".\"/index.php?page=resetpass&token=\$generatedtoken&login=\$pseudo\".'<br>'.'<br>';
\t\t\t\$mail_content .= \"A bientôt sur Gozpeak !\".'<br>'.'<br>';
\t\t\t\$mail_content .= \"Linguistiquement,\".'<br>'.'<br>';
\t\t\t\$mail_content .= '<img src=\"'.\"\$gozpeak_protocol\".\"\$gozpeak_host\".'/views/images/gozpeak_small.png\" alt=\"Gozpeak Logo\">'.'<br>';
\t\t\t\$mail_content .= '</body> </html>';
\t\t\tif(send_by_mailgun(\$mail, \"\$mail_subject\", \"\$mail_content\")) {
\t\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-success fade in\"> Un email vous a été envoyé pour réinitialiser votre mot de passe </div> </div>';
\t\t\t\tset_resetpass_token(\$DB, \$generatedtoken, \$pseudo);
        //\$DTime = new DateTime();
        //\$DTime -> modify('+1 day');
        //\$DTime = date('Y-m-d H:i:s');
        //\$DTime = strtotime(\$DTime. ' + 1 days');
        set_resetpass_expiration(\$DB, \$pseudo);
\t\t\t} else {
\t\t\t\t\$message = \"'Désolé, une erreur est survenue '.'<br>'.'Veuillez réessayer ultérieurement'\";
\t\t\t}
\t\t}
\t}
}


if (isset(\$error)) {
\tif (\$error == 'empty_fields') {
    \$message='<div class=\"form-group\"> <div class=\"alert alert-danger\"> Vous devez obligatoirement fournir votre email pour la récupération de mot de passe </div> </div>';
\t}
\telseif (\$error == 'invalid_email') {
  \t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger\"> Cette adresse email n\\'est pas valide </div> </div>';
\t}
\telseif (\$error = 'non_existent_email') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger\"> Cette adresse email n\\'est pas enregistrée sur Gozpeak </div> </div>';
\t}
\telseif (\$error = 'pseudo_not_found') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger\"> Un compte possédant cette adresse mail semble exister, mais aucun pseudonyme associé n\\'a été trouvé</div> </div>';
\t}
}


/***** Finally, set Global var if \$message isset, and simply redirect to HOME *********/
if (isset(\$message)) {
  \$_SESSION['msg'] = \$message;
}

redirect_to_page(\$baseUrl, \$page);

?>
", "Gozpeak/controllers/forgotpass.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/forgotpass.php");
    }
}
