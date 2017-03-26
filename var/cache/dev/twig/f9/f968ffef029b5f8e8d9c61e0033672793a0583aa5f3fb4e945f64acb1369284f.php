<?php

/* Gozpeak/controllers/setnewpass.php */
class __TwigTemplate_266011f74aea8a174afce7443f564bf5d4d0dfc0df55e04470e7b1e1b5f81b90 extends Twig_Template
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
        $__internal_b2d90ab4a85bec1290719829bdf96b907f6fbfd59632e4d20cd9ddc07603fa44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2d90ab4a85bec1290719829bdf96b907f6fbfd59632e4d20cd9ddc07603fa44->enter($__internal_b2d90ab4a85bec1290719829bdf96b907f6fbfd59632e4d20cd9ddc07603fa44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/setnewpass.php"));

        $__internal_cc03a4a136593d27363a6ad3b433637cc5b10f3e942a8386403b7963009bad7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc03a4a136593d27363a6ad3b433637cc5b10f3e942a8386403b7963009bad7e->enter($__internal_cc03a4a136593d27363a6ad3b433637cc5b10f3e942a8386403b7963009bad7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/setnewpass.php"));

        // line 1
        echo "<?php

session_start();
require_once('./language.php');
require_once('./lib/sessions_init.php');
require_once('../models/dbconnect.php');
require_once('../models/resetpass_functions.php');


/******** Controller to change your password (profile page) ********/
// IF ALL THE PREVIOUS CONDITIONS ARE OK (token, login, etc...), THE SCRIPT WILL LEAVE THE MESSAGES EMPTY, AND THE USER WILL TRY TO CHANGE HIS PASSWORD //
if(isset(\$_POST)) {
\t\$actual_password = isset(\$_POST['profile_password']) ? \$_POST['profile_password'] : '';
\t\$pass_one = isset(\$_POST['profile_new_password']) ? \$_POST['profile_new_password'] : '';
\t\$pass_confirm = isset(\$_POST['profile_confirm_new_password']) ? \$_POST['profile_confirm_new_password'] : '';

\t\$error=1;

\t/***** Escape bad characters *****/
\t\$actual_passsword = htmlspecialchars(trim(\$actual_password));
\t\$pass_one = htmlspecialchars(trim(\$pass_one));
\t\$pass_confirm = htmlspecialchars(trim(\$pass_confirm));


\tif(\$actual_password == '' OR \$pass_one == '' OR \$pass_confirm == '') {
\t\techo \"EMPTY FIELDS\";
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Erreur lors du changement de mot de passe </div> </div>';
\t\t\$error=1;
\t} elseif(\$pass_one != \$pass_confirm) {
\t\techo \"ERROR CONFIRM\";
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> La confirmation de mot de passe a échouée </div> </div>';
\t\t\$error=1;
\t} elseif (strlen(\$pass_one) > 25 || strlen(\$pass_one) < 6) {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Le nouveau mot de passe n\\'est pas valide </div> </div>';
\t\t\$error=1;
\t} else {
\t\t\$pseudo = \$_SESSION['profil'];
\t\tif (\$hashed_dbpass = retrieve_pass_from_pseudo(\$DB, \$pseudo)) {

\t\t\t/***** If actual password is the same that in database *****/
\t\t\tif (password_verify(\$actual_password, \$hashed_dbpass)) {
\t\t\t\t\$hashed_password = password_hash(\$pass_one, PASSWORD_DEFAULT);
\t\t\t\t/***** If password updated successfully *****/
\t\t\t\tif (update_password(\$DB, \$hashed_password, \$pseudo)) {
\t\t\t\t\t#\$message='<div class=\"form-group\"> <div class=\"alert alert-success text-center fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>  Mot de passe change. </div> </div>';
\t\t\t\t\t\$_SESSION['msg'] ='<div class=\"form-group\"> <div class=\"alert alert-success fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>  Votre mot de passe a été changé avec succès. Veuillez vous reconnecter.  </div> </div>';
\t\t\t\t\tset_resetpass_token(\$DB, 'NULL', \$pseudo);
\t\t\t\t\tset_resetpass_expiration(\$DB, 'NULL', \$pseudo);
\t\t\t\t\t\$error=0;
\t\t\t\t}
\t\t\t}
\t\t}
\t}
} else {
\techo \"NO SUBMIT\";
}

if (\$error == 0) {
\tsession_destroy();
}

if (isset(\$message)) {
\t\$_SESSION['msg'] = \$message;
}

header('location: '.\$baseUrl.'/index.php?page=profil&profil='.\$_SESSION['profil']);


?>
";
        
        $__internal_b2d90ab4a85bec1290719829bdf96b907f6fbfd59632e4d20cd9ddc07603fa44->leave($__internal_b2d90ab4a85bec1290719829bdf96b907f6fbfd59632e4d20cd9ddc07603fa44_prof);

        
        $__internal_cc03a4a136593d27363a6ad3b433637cc5b10f3e942a8386403b7963009bad7e->leave($__internal_cc03a4a136593d27363a6ad3b433637cc5b10f3e942a8386403b7963009bad7e_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/setnewpass.php";
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


/******** Controller to change your password (profile page) ********/
// IF ALL THE PREVIOUS CONDITIONS ARE OK (token, login, etc...), THE SCRIPT WILL LEAVE THE MESSAGES EMPTY, AND THE USER WILL TRY TO CHANGE HIS PASSWORD //
if(isset(\$_POST)) {
\t\$actual_password = isset(\$_POST['profile_password']) ? \$_POST['profile_password'] : '';
\t\$pass_one = isset(\$_POST['profile_new_password']) ? \$_POST['profile_new_password'] : '';
\t\$pass_confirm = isset(\$_POST['profile_confirm_new_password']) ? \$_POST['profile_confirm_new_password'] : '';

\t\$error=1;

\t/***** Escape bad characters *****/
\t\$actual_passsword = htmlspecialchars(trim(\$actual_password));
\t\$pass_one = htmlspecialchars(trim(\$pass_one));
\t\$pass_confirm = htmlspecialchars(trim(\$pass_confirm));


\tif(\$actual_password == '' OR \$pass_one == '' OR \$pass_confirm == '') {
\t\techo \"EMPTY FIELDS\";
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Erreur lors du changement de mot de passe </div> </div>';
\t\t\$error=1;
\t} elseif(\$pass_one != \$pass_confirm) {
\t\techo \"ERROR CONFIRM\";
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> La confirmation de mot de passe a échouée </div> </div>';
\t\t\$error=1;
\t} elseif (strlen(\$pass_one) > 25 || strlen(\$pass_one) < 6) {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Le nouveau mot de passe n\\'est pas valide </div> </div>';
\t\t\$error=1;
\t} else {
\t\t\$pseudo = \$_SESSION['profil'];
\t\tif (\$hashed_dbpass = retrieve_pass_from_pseudo(\$DB, \$pseudo)) {

\t\t\t/***** If actual password is the same that in database *****/
\t\t\tif (password_verify(\$actual_password, \$hashed_dbpass)) {
\t\t\t\t\$hashed_password = password_hash(\$pass_one, PASSWORD_DEFAULT);
\t\t\t\t/***** If password updated successfully *****/
\t\t\t\tif (update_password(\$DB, \$hashed_password, \$pseudo)) {
\t\t\t\t\t#\$message='<div class=\"form-group\"> <div class=\"alert alert-success text-center fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>  Mot de passe change. </div> </div>';
\t\t\t\t\t\$_SESSION['msg'] ='<div class=\"form-group\"> <div class=\"alert alert-success fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>  Votre mot de passe a été changé avec succès. Veuillez vous reconnecter.  </div> </div>';
\t\t\t\t\tset_resetpass_token(\$DB, 'NULL', \$pseudo);
\t\t\t\t\tset_resetpass_expiration(\$DB, 'NULL', \$pseudo);
\t\t\t\t\t\$error=0;
\t\t\t\t}
\t\t\t}
\t\t}
\t}
} else {
\techo \"NO SUBMIT\";
}

if (\$error == 0) {
\tsession_destroy();
}

if (isset(\$message)) {
\t\$_SESSION['msg'] = \$message;
}

header('location: '.\$baseUrl.'/index.php?page=profil&profil='.\$_SESSION['profil']);


?>
", "Gozpeak/controllers/setnewpass.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/setnewpass.php");
    }
}
