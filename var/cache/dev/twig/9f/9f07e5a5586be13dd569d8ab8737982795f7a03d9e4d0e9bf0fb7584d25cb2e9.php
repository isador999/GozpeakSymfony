<?php

/* Gozpeak/controllers/reset_user_password.php */
class __TwigTemplate_87564aea3bc838ecd73b9b2307d45652762c8ccce7369820e322e592fc0af363 extends Twig_Template
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
        $__internal_39138a342b7085c3ae5c57083d2b031373065a1c4df2cb47501df7c16ed834ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39138a342b7085c3ae5c57083d2b031373065a1c4df2cb47501df7c16ed834ec->enter($__internal_39138a342b7085c3ae5c57083d2b031373065a1c4df2cb47501df7c16ed834ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/reset_user_password.php"));

        $__internal_ac49a96ab88dafcf850a014ca1cfd952cbe0df2ac13f613666dfdc048609b230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac49a96ab88dafcf850a014ca1cfd952cbe0df2ac13f613666dfdc048609b230->enter($__internal_ac49a96ab88dafcf850a014ca1cfd952cbe0df2ac13f613666dfdc048609b230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/reset_user_password.php"));

        // line 1
        echo "<?php

session_start();
require_once('./language.php');
require_once('./lib/sessions_init.php');
require_once('../models/dbconnect.php');
require_once('../models/resetpass_functions.php');

\$page = isset(\$_GET['page']) ? \$_GET['page'] : '';

if(\$_POST) {
\t/***** Check if login has been retrieved from the link, and the resetpass.php page *****/
\tif(isset(\$_SESSION['resetpass_login']) && (!empty(\$_SESSION['resetpass_login']))) {
\t\t\$resetpass_login = \$_SESSION['resetpass_login'];
\t} else {
\t\t\$error=\"login_empty\";
\t}

\t\$pass_one = isset(\$_POST['resettedpass']) ? \$_POST['resettedpass'] : '';
\t\$pass_confirm = isset(\$_POST['resettedpass_check']) ? \$_POST['resettedpass_check'] : '';

\tif(empty(\$pass_one) OR empty(\$pass_confirm)) {
\t\t\$error=\"empty_fields\";
\t} elseif (strlen(\$pass_one) > 25 || strlen(\$pass_one) < 6) {
\t\t\$error=\"bad_length_pass\";
\t} elseif (ctype_alnum(\$pass_one)) {
    \$error=\"notcompliant_password\";
\t} elseif (!preg_match(\"/.*[0-9].*[0-9].*+/\", \$pass_one) || !preg_match(\"/.*[A-Z].*+/\", \$pass_one)) {
    \$error=\"notcompliant_password\";
  } elseif (\$pass_one != \$pass_confirm) {
    \$error=\"passwords_not_matching\";
\t} else {
\t\t/***** 'htmlentities' function permit to esacpe/protect fields against attacks, like XSS *****/
    \$pass_one = htmlspecialchars(trim(\$pass_one));
    \$pass_confirm = htmlspecialchars(trim(\$pass_confirm));

\t\t\$new_dbpassword = password_hash(\$pass_one, PASSWORD_DEFAULT);

\t\t/***** Check if the old password was set, otherwise, it could be a hacker which has a fake account... *****/
\t\t\$old_dbpassword=retrieve_pass_from_pseudo(\$DB, \$resetpass_login);
\t\tif(isset(\$old_dbpassword) && (!empty(\$old_dbpassword))) {
\t\t\t\$pass_updated_successfully = update_password(\$DB, \$new_dbpassword, \$resetpass_login);
\t\t\t#echo \"Result Query : \$result_query\";
\t\t\tif (\$pass_updated_successfully == 0) {
\t\t\t\tset_resetpass_token(\$DB, 'NULL', \$resetpass_login);
\t\t\t\tset_resetpass_expiration(\$DB, 'NULL', \$resetpass_login);
\t\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-success fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Votre mot de passe Gozpeak a été réinitialisé avec succès ;-)  </div> </div>';
\t\t\t} else {
\t\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Désolé, une erreur est survenue.  Veuillez réessayer cette opération ultérieurement </div> </div>';
\t\t\t}
\t\t} else {
\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>  Désolé, une erreur est survenue.  Veuillez réessayer cette opération ultérieurement </div> </div>';
\t\t}
\t}
}



if(isset(\$error)) {
\tif (\$error == 'login_empty') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\">  Désolé, une erreur est survenue, probablement à cause du lien de récupération. Veuillez réessayer cette opération ultérieurement </div> </div>';
\t}
  elseif (\$error == 'empty_fields') {
    \$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> Veuillez remplir les champs obligatoires </div> </div>';
  }
  elseif (\$error == 'bad_length_pass') {
    \$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> Le mot de passe doit etre compris entre 8 et 25 caracteres </div> </div>';
  }
  elseif (\$error == 'notcompliant_password') {
    \$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> Le mot de passe choisi ne respecte pas la politique de sécurité, il doit contenir au minimum 2 chiffres, une majuscule et un caractère spécial. </div> </div>';
  }
  elseif (\$error == 'passwords_not_matching') {
    \$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> Les mots de passe ne correspondent pas </div> </div>';
  }
}


/******** Finally, set Global var if \$message isset, and simply redirect to HOME *********/
if (isset(\$message)) {
  \$_SESSION['msg'] = \$message;
}

redirect_to_page(\$baseUrl, \$page);

?>
";
        
        $__internal_39138a342b7085c3ae5c57083d2b031373065a1c4df2cb47501df7c16ed834ec->leave($__internal_39138a342b7085c3ae5c57083d2b031373065a1c4df2cb47501df7c16ed834ec_prof);

        
        $__internal_ac49a96ab88dafcf850a014ca1cfd952cbe0df2ac13f613666dfdc048609b230->leave($__internal_ac49a96ab88dafcf850a014ca1cfd952cbe0df2ac13f613666dfdc048609b230_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/reset_user_password.php";
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
require_once('../models/dbconnect.php');
require_once('../models/resetpass_functions.php');

\$page = isset(\$_GET['page']) ? \$_GET['page'] : '';

if(\$_POST) {
\t/***** Check if login has been retrieved from the link, and the resetpass.php page *****/
\tif(isset(\$_SESSION['resetpass_login']) && (!empty(\$_SESSION['resetpass_login']))) {
\t\t\$resetpass_login = \$_SESSION['resetpass_login'];
\t} else {
\t\t\$error=\"login_empty\";
\t}

\t\$pass_one = isset(\$_POST['resettedpass']) ? \$_POST['resettedpass'] : '';
\t\$pass_confirm = isset(\$_POST['resettedpass_check']) ? \$_POST['resettedpass_check'] : '';

\tif(empty(\$pass_one) OR empty(\$pass_confirm)) {
\t\t\$error=\"empty_fields\";
\t} elseif (strlen(\$pass_one) > 25 || strlen(\$pass_one) < 6) {
\t\t\$error=\"bad_length_pass\";
\t} elseif (ctype_alnum(\$pass_one)) {
    \$error=\"notcompliant_password\";
\t} elseif (!preg_match(\"/.*[0-9].*[0-9].*+/\", \$pass_one) || !preg_match(\"/.*[A-Z].*+/\", \$pass_one)) {
    \$error=\"notcompliant_password\";
  } elseif (\$pass_one != \$pass_confirm) {
    \$error=\"passwords_not_matching\";
\t} else {
\t\t/***** 'htmlentities' function permit to esacpe/protect fields against attacks, like XSS *****/
    \$pass_one = htmlspecialchars(trim(\$pass_one));
    \$pass_confirm = htmlspecialchars(trim(\$pass_confirm));

\t\t\$new_dbpassword = password_hash(\$pass_one, PASSWORD_DEFAULT);

\t\t/***** Check if the old password was set, otherwise, it could be a hacker which has a fake account... *****/
\t\t\$old_dbpassword=retrieve_pass_from_pseudo(\$DB, \$resetpass_login);
\t\tif(isset(\$old_dbpassword) && (!empty(\$old_dbpassword))) {
\t\t\t\$pass_updated_successfully = update_password(\$DB, \$new_dbpassword, \$resetpass_login);
\t\t\t#echo \"Result Query : \$result_query\";
\t\t\tif (\$pass_updated_successfully == 0) {
\t\t\t\tset_resetpass_token(\$DB, 'NULL', \$resetpass_login);
\t\t\t\tset_resetpass_expiration(\$DB, 'NULL', \$resetpass_login);
\t\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-success fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Votre mot de passe Gozpeak a été réinitialisé avec succès ;-)  </div> </div>';
\t\t\t} else {
\t\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Désolé, une erreur est survenue.  Veuillez réessayer cette opération ultérieurement </div> </div>';
\t\t\t}
\t\t} else {
\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>  Désolé, une erreur est survenue.  Veuillez réessayer cette opération ultérieurement </div> </div>';
\t\t}
\t}
}



if(isset(\$error)) {
\tif (\$error == 'login_empty') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\">  Désolé, une erreur est survenue, probablement à cause du lien de récupération. Veuillez réessayer cette opération ultérieurement </div> </div>';
\t}
  elseif (\$error == 'empty_fields') {
    \$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> Veuillez remplir les champs obligatoires </div> </div>';
  }
  elseif (\$error == 'bad_length_pass') {
    \$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> Le mot de passe doit etre compris entre 8 et 25 caracteres </div> </div>';
  }
  elseif (\$error == 'notcompliant_password') {
    \$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> Le mot de passe choisi ne respecte pas la politique de sécurité, il doit contenir au minimum 2 chiffres, une majuscule et un caractère spécial. </div> </div>';
  }
  elseif (\$error == 'passwords_not_matching') {
    \$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> Les mots de passe ne correspondent pas </div> </div>';
  }
}


/******** Finally, set Global var if \$message isset, and simply redirect to HOME *********/
if (isset(\$message)) {
  \$_SESSION['msg'] = \$message;
}

redirect_to_page(\$baseUrl, \$page);

?>
", "Gozpeak/controllers/reset_user_password.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/reset_user_password.php");
    }
}
