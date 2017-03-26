<?php

/* Gozpeak/controllers/connexion.php */
class __TwigTemplate_b52f321f91c39b966f8a07f0d11fb6e673e3aef6710d2f32f3365dce32cb1352 extends Twig_Template
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
        $__internal_d8c1379f6b32b933a7441c2f646c6cfbc9ebf1c9d2762c0a40552b214d87e22d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8c1379f6b32b933a7441c2f646c6cfbc9ebf1c9d2762c0a40552b214d87e22d->enter($__internal_d8c1379f6b32b933a7441c2f646c6cfbc9ebf1c9d2762c0a40552b214d87e22d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/connexion.php"));

        $__internal_63bda952789be7747062a37a9a35d7758eb3d5180ab0f84447eaf35716ea154e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63bda952789be7747062a37a9a35d7758eb3d5180ab0f84447eaf35716ea154e->enter($__internal_63bda952789be7747062a37a9a35d7758eb3d5180ab0f84447eaf35716ea154e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/connexion.php"));

        // line 1
        echo "<?php
/******** Start, or continue Session *******/
session_start();
require_once('./language.php');
require_once('./lib/sessions_init.php');
require_once('./lib/check_strings.php');
require_once('../models/dbconnect.php');
require_once('../models/connexion_functions.php');

\$page = isset(\$_GET['page']) ? \$_GET['page'] : '';

/********************* Function to check password and connect ********************/
function check_pass_and_connect (\$DB, \$login_pass, \$login_user, \$method) {
  \$result_connect=\"\";

\t/****** Depending of Connection Method, retrieve hashed_dbpass ******/
  if(\$method == \"email\") {
  \t\$pseudo = select_pseudo(\$DB, \$login_user);
  \t\$hashed_dbpass= retrieve_pass_from_pseudo(\$DB, \$pseudo);
  \t#\$hashed_dbpass= retrieve_pass_from_email(\$DB, \$login_user);
  \t//echo \"Hash pass from DB : \$hashed_dbpass\";

  } else if (\$method == \"pseudo\") {
  \t\$hashed_dbpass= retrieve_pass_from_pseudo(\$DB, \$login_user);
\t  //echo \"Hash pass from DB : \$hashed_dbpass\";
  }

\t/******** Finally check passwords **********/
  if (password_verify(\$login_pass, \$hashed_dbpass)) {
 \t  \$result_connect = \"ok\";
\t  //echo \"Yes password check successful ! \";
  } else {
\t  \$result_connect = \"nok\";
\t  \$error = \"wrong_password\";
\t  //echo \"NO, password check unsuccessful ! \";
  }

  return (\$result_connect);
}
//End of Function



/************ Checks for Login *************/
if(\$_POST) {
  \$login_user     = \$_POST['userlogin'];
  \$login_pass     = \$_POST['passwordlogin'];

  #echo \"\$login_user\";
  #echo \"\$login_pass\";

  if (\$login_user == '' OR \$login_pass == '') {
\t  //echo \"NOK: connection rule1\";
\t  \$error=\"empty_fields\";
  } else if (strlen(\$login_user) < 6) {
\t  //echo \"NOK: connection rule2\";
\t  \$error=\"bad_length_user\";
  } else {

\t  /********** If previous rules OK, check if pseudo/email exists *********/
\t  \$nbre_mail = mail_exist(\$DB, \$login_user);
\t  \$nbre_pseudo = pseudo_exist(\$DB, \$login_user);

    if (\$nbre_mail == 1) {
\t    //echo \"OK: It seems that mail exists\";
\t    \$method = \"email\";
      #\$active = check_active_account_by_mail(\$DB, \$login_user);
\t    \$result_connect = check_pass_and_connect(\$DB, \$login_pass, \$login_user, \$method);
\t    //echo \$result_connect;
    } elseif (\$nbre_pseudo == 1) {
\t    //echo \"OK: It seems that pseudo exists\";
\t    \$method = \"pseudo\";
\t    #\$active = check_active_account_by_pseudo(\$DB, \$login_user);
\t    \$result_connect = check_pass_and_connect(\$DB, \$login_pass, \$login_user, \$method);
\t    //echo \$result_connect;
    } else {
\t    #echo \"NOK: It seems that nothing (mail|pseudo) exists in BDD\";
      \$error=\"bad_user_or_pass\";
    }
  }
}



if(\$_POST) {
\tif (isset(\$result_connect) && (\$result_connect == \"ok\")) {
\t\tif (isset(\$method)) {
\t\t\tif (\$method == \"email\") {
\t\t\t\t/***************** Provided login is an email *****************/
\t\t\t\t/****** So retrieve associated pseudo + premium, etc...  ******/
        \$display_user = select_pseudo(\$DB, \$login_user);
\t\t \t}
\t\t \telseif (\$method == \"pseudo\") {
\t\t\t\t/***************** Provided login is a pseudo ******************/
\t\t\t\t\$display_user = \$login_user;
\t\t\t}
    }
\t\telse {
\t\t\t\$error=\"connection_method_undefined\";
\t\t}

\t\t\$active = check_active_account_by_pseudo(\$DB, \$display_user);
\t\tif (\$active == 1) {
\t\t\t/*****  Set other session Variables *****/
\t\t\t\$_SESSION['profil'] = \$display_user;
\t\t\t\$_SESSION['logged'] = 1;
      \$connectionTime = date(\"Y-m-d H:i:s\");
      register_connectionTime(\$DB, \$connectionTime, \$display_user);
\t\t\t/*\$_SESSION['premium'] = \$premium;*/

\t\t\t\$premium = check_if_premium(\$DB, \$display_user);
\t\t\tif (\$premium == 1) {
\t\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-warning fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Les fonctionnatés Premium ne sont pas encore disponibles </div> <br> <div class=\"alert alert-success\">Content de vous revoir ! '.\$display_user.'</div> </div>';
\t\t\t} else {
\t\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-success fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Content de vous revoir sur Gozpeak, '.\$display_user.' ! </div> </div>';
\t\t\t}
\t\t} else {
\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-warning fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Votre compte Gozpeak n\\'est pas encore actif, vous devez cliquer sur le lien d\\'activation envoyé par email </div> </div>';
      //echo \"Votre compte Gozpeak n'est pas encore actif\";
\t\t}

\t/******* If result_connect NOK  (password is false), display Error *******/
\t} elseif (isset(\$result_connect) && (\$result_connect == \"nok\")) {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Le mot de passe entré est incorrect </div> </div>';
\t}
}


/******** Set Messages depending error *******/
if (isset(\$error)) {
\tif (\$error == 'empty_fields') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Veuillez remplir les champs obligatoires pour votre inscription </div> </div>';
\t}\telseif (\$error == 'bad_user_or_pass') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Le nom d\\'utilisateur ou le mot de passe est invalide </div> </div>';
\t} elseif (\$error == 'bad_length_user') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> L\\'utilisateur de connexion est invalide </div> </div>';
\t}\telseif (\$error == 'wrong_password') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Le mot de passe entré est incorrect </div> </div>';
\t}\telseif (\$error == 'connection_method_undefined') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Une erreur est survenue lors de la connexion... <br> Veuillez réessayer ultérieurement </div> </div>';
\t}
}


/******** Finally, set Global var if \$message isset, and simply redirect to HOME *********/
if (isset(\$message)) {
\t\$_SESSION['msg'] = \$message;
}

redirect_to_page(\$baseUrl, \$page);

?>
";
        
        $__internal_d8c1379f6b32b933a7441c2f646c6cfbc9ebf1c9d2762c0a40552b214d87e22d->leave($__internal_d8c1379f6b32b933a7441c2f646c6cfbc9ebf1c9d2762c0a40552b214d87e22d_prof);

        
        $__internal_63bda952789be7747062a37a9a35d7758eb3d5180ab0f84447eaf35716ea154e->leave($__internal_63bda952789be7747062a37a9a35d7758eb3d5180ab0f84447eaf35716ea154e_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/connexion.php";
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
require_once('../models/dbconnect.php');
require_once('../models/connexion_functions.php');

\$page = isset(\$_GET['page']) ? \$_GET['page'] : '';

/********************* Function to check password and connect ********************/
function check_pass_and_connect (\$DB, \$login_pass, \$login_user, \$method) {
  \$result_connect=\"\";

\t/****** Depending of Connection Method, retrieve hashed_dbpass ******/
  if(\$method == \"email\") {
  \t\$pseudo = select_pseudo(\$DB, \$login_user);
  \t\$hashed_dbpass= retrieve_pass_from_pseudo(\$DB, \$pseudo);
  \t#\$hashed_dbpass= retrieve_pass_from_email(\$DB, \$login_user);
  \t//echo \"Hash pass from DB : \$hashed_dbpass\";

  } else if (\$method == \"pseudo\") {
  \t\$hashed_dbpass= retrieve_pass_from_pseudo(\$DB, \$login_user);
\t  //echo \"Hash pass from DB : \$hashed_dbpass\";
  }

\t/******** Finally check passwords **********/
  if (password_verify(\$login_pass, \$hashed_dbpass)) {
 \t  \$result_connect = \"ok\";
\t  //echo \"Yes password check successful ! \";
  } else {
\t  \$result_connect = \"nok\";
\t  \$error = \"wrong_password\";
\t  //echo \"NO, password check unsuccessful ! \";
  }

  return (\$result_connect);
}
//End of Function



/************ Checks for Login *************/
if(\$_POST) {
  \$login_user     = \$_POST['userlogin'];
  \$login_pass     = \$_POST['passwordlogin'];

  #echo \"\$login_user\";
  #echo \"\$login_pass\";

  if (\$login_user == '' OR \$login_pass == '') {
\t  //echo \"NOK: connection rule1\";
\t  \$error=\"empty_fields\";
  } else if (strlen(\$login_user) < 6) {
\t  //echo \"NOK: connection rule2\";
\t  \$error=\"bad_length_user\";
  } else {

\t  /********** If previous rules OK, check if pseudo/email exists *********/
\t  \$nbre_mail = mail_exist(\$DB, \$login_user);
\t  \$nbre_pseudo = pseudo_exist(\$DB, \$login_user);

    if (\$nbre_mail == 1) {
\t    //echo \"OK: It seems that mail exists\";
\t    \$method = \"email\";
      #\$active = check_active_account_by_mail(\$DB, \$login_user);
\t    \$result_connect = check_pass_and_connect(\$DB, \$login_pass, \$login_user, \$method);
\t    //echo \$result_connect;
    } elseif (\$nbre_pseudo == 1) {
\t    //echo \"OK: It seems that pseudo exists\";
\t    \$method = \"pseudo\";
\t    #\$active = check_active_account_by_pseudo(\$DB, \$login_user);
\t    \$result_connect = check_pass_and_connect(\$DB, \$login_pass, \$login_user, \$method);
\t    //echo \$result_connect;
    } else {
\t    #echo \"NOK: It seems that nothing (mail|pseudo) exists in BDD\";
      \$error=\"bad_user_or_pass\";
    }
  }
}



if(\$_POST) {
\tif (isset(\$result_connect) && (\$result_connect == \"ok\")) {
\t\tif (isset(\$method)) {
\t\t\tif (\$method == \"email\") {
\t\t\t\t/***************** Provided login is an email *****************/
\t\t\t\t/****** So retrieve associated pseudo + premium, etc...  ******/
        \$display_user = select_pseudo(\$DB, \$login_user);
\t\t \t}
\t\t \telseif (\$method == \"pseudo\") {
\t\t\t\t/***************** Provided login is a pseudo ******************/
\t\t\t\t\$display_user = \$login_user;
\t\t\t}
    }
\t\telse {
\t\t\t\$error=\"connection_method_undefined\";
\t\t}

\t\t\$active = check_active_account_by_pseudo(\$DB, \$display_user);
\t\tif (\$active == 1) {
\t\t\t/*****  Set other session Variables *****/
\t\t\t\$_SESSION['profil'] = \$display_user;
\t\t\t\$_SESSION['logged'] = 1;
      \$connectionTime = date(\"Y-m-d H:i:s\");
      register_connectionTime(\$DB, \$connectionTime, \$display_user);
\t\t\t/*\$_SESSION['premium'] = \$premium;*/

\t\t\t\$premium = check_if_premium(\$DB, \$display_user);
\t\t\tif (\$premium == 1) {
\t\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-warning fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Les fonctionnatés Premium ne sont pas encore disponibles </div> <br> <div class=\"alert alert-success\">Content de vous revoir ! '.\$display_user.'</div> </div>';
\t\t\t} else {
\t\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-success fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Content de vous revoir sur Gozpeak, '.\$display_user.' ! </div> </div>';
\t\t\t}
\t\t} else {
\t\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-warning fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Votre compte Gozpeak n\\'est pas encore actif, vous devez cliquer sur le lien d\\'activation envoyé par email </div> </div>';
      //echo \"Votre compte Gozpeak n'est pas encore actif\";
\t\t}

\t/******* If result_connect NOK  (password is false), display Error *******/
\t} elseif (isset(\$result_connect) && (\$result_connect == \"nok\")) {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Le mot de passe entré est incorrect </div> </div>';
\t}
}


/******** Set Messages depending error *******/
if (isset(\$error)) {
\tif (\$error == 'empty_fields') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Veuillez remplir les champs obligatoires pour votre inscription </div> </div>';
\t}\telseif (\$error == 'bad_user_or_pass') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Le nom d\\'utilisateur ou le mot de passe est invalide </div> </div>';
\t} elseif (\$error == 'bad_length_user') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> L\\'utilisateur de connexion est invalide </div> </div>';
\t}\telseif (\$error == 'wrong_password') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Le mot de passe entré est incorrect </div> </div>';
\t}\telseif (\$error == 'connection_method_undefined') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Une erreur est survenue lors de la connexion... <br> Veuillez réessayer ultérieurement </div> </div>';
\t}
}


/******** Finally, set Global var if \$message isset, and simply redirect to HOME *********/
if (isset(\$message)) {
\t\$_SESSION['msg'] = \$message;
}

redirect_to_page(\$baseUrl, \$page);

?>
", "Gozpeak/controllers/connexion.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/connexion.php");
    }
}
