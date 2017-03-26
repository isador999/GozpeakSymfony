<?php

/* Gozpeak/controllers/event_addimage.php */
class __TwigTemplate_fa409267535fc850f98840048db88a4f14516f0d69ca64a3bbdce222cb687e1c extends Twig_Template
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
        $__internal_357f5e67a252674da2608111ca9eb2178633046828b1fdd14ae6a4f52bbd7a3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_357f5e67a252674da2608111ca9eb2178633046828b1fdd14ae6a4f52bbd7a3f->enter($__internal_357f5e67a252674da2608111ca9eb2178633046828b1fdd14ae6a4f52bbd7a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/event_addimage.php"));

        $__internal_83fbdb98ed131a74519b7c6a198cb6f83b53328535ff370ddac948e2d36f28b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83fbdb98ed131a74519b7c6a198cb6f83b53328535ff370ddac948e2d36f28b2->enter($__internal_83fbdb98ed131a74519b7c6a198cb6f83b53328535ff370ddac948e2d36f28b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/event_addimage.php"));

        // line 1
        echo "<?php
/******** Start, or continue Session *******/
session_start();

require_once('./lib/sessions_init.php');
require_once('./lib/EventUploadHandler.php');
require_once('./lib/IdeaUploadHandler.php');
require_once('../models/dbconnect.php');


if (strpos(\$_SERVER['HTTP_REFERER'], \"event\")) {
\t\$event_upload_handler = new EventUploadHandler();
} elseif (strpos(\$_SERVER['HTTP_REFERER'], \"idea\")) {
\t\$idea_upload_handler = new IdeaUploadHandler();
}



if((\$_POST) && (\$_FILES['eventimage']['name'])) {
\tif(!\$_FILES['eventimage']['error']) {
\t\t//now is the time to modify the future file name and validate the file
\t\t\$new_filename = strtolower(\$_FILES['eventimage']['tmp_name']); //rename file
\t\tif(\$_FILES['eventimage']['size'] > (1024000)) { //can't be larger than 1 MB
\t\t\t\$valid_file = false;
\t\t\t\$messages = 'Erreur, ce fichier est trop gros pour être chargé';
\t\t}

\t\t//if the file has passed the test
\t\tif(\$valid_file) {
\t\t\t//move it to where we want it to be
\t\t\tmove_uploaded_file(\$_FILES['eventimage']['tmp_name'], '/srv/gozpeak_images/'.\$new_filename);
\t\t\t\$messages = 'Le fichier a été uploadé avec succès :)';
\t\t}
\t} else {
\t\t//set that to be the returned message
\t\t\$messages = \"L'erreur suivante s'est produite lors de l'upload:  \".\$_FILES['eventimage']['error'];
\t}

\t//you get the following information for each file:
\t//\$_FILES['field_name']['name']
\t//\$_FILES['field_name']['size']
\t//\$_FILES['field_name']['type']
\t//\$_FILES['field_name']['tmp_name']
}



/******** Set Messages depending error *******/
/*if (isset(\$error)) {
\tif (\$error == 'empty_fields') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Veuillez remplir les champs obligatoires pour votre inscription </div> </div>';
\t}
\telseif (\$error == 'bad_length_user') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> L\\'utilisateur de connexion est invalide </div> </div>';
\t}
\telseif (\$error == 'wrong_password') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Le mot de passe entré est incorrect </div> </div>';
\t}
\telseif (\$error == 'connection_method_undefined') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Une erreur est survenue lors de la connexion... <br> Veuillez réessayer ultérieurement </div> </div>';
\t}
}*/


/******** Finally, set Global var if \$message isset, and simply redirect to HOME *********/
if (isset(\$message)) {
\t\$_SESSION['msg'] = \$message;
}
 header('location: '.\$gozpeak_protocol.\$gozpeak_host.'/index.php?page=event&event=A vos mousses');


?>

";
        
        $__internal_357f5e67a252674da2608111ca9eb2178633046828b1fdd14ae6a4f52bbd7a3f->leave($__internal_357f5e67a252674da2608111ca9eb2178633046828b1fdd14ae6a4f52bbd7a3f_prof);

        
        $__internal_83fbdb98ed131a74519b7c6a198cb6f83b53328535ff370ddac948e2d36f28b2->leave($__internal_83fbdb98ed131a74519b7c6a198cb6f83b53328535ff370ddac948e2d36f28b2_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/event_addimage.php";
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

require_once('./lib/sessions_init.php');
require_once('./lib/EventUploadHandler.php');
require_once('./lib/IdeaUploadHandler.php');
require_once('../models/dbconnect.php');


if (strpos(\$_SERVER['HTTP_REFERER'], \"event\")) {
\t\$event_upload_handler = new EventUploadHandler();
} elseif (strpos(\$_SERVER['HTTP_REFERER'], \"idea\")) {
\t\$idea_upload_handler = new IdeaUploadHandler();
}



if((\$_POST) && (\$_FILES['eventimage']['name'])) {
\tif(!\$_FILES['eventimage']['error']) {
\t\t//now is the time to modify the future file name and validate the file
\t\t\$new_filename = strtolower(\$_FILES['eventimage']['tmp_name']); //rename file
\t\tif(\$_FILES['eventimage']['size'] > (1024000)) { //can't be larger than 1 MB
\t\t\t\$valid_file = false;
\t\t\t\$messages = 'Erreur, ce fichier est trop gros pour être chargé';
\t\t}

\t\t//if the file has passed the test
\t\tif(\$valid_file) {
\t\t\t//move it to where we want it to be
\t\t\tmove_uploaded_file(\$_FILES['eventimage']['tmp_name'], '/srv/gozpeak_images/'.\$new_filename);
\t\t\t\$messages = 'Le fichier a été uploadé avec succès :)';
\t\t}
\t} else {
\t\t//set that to be the returned message
\t\t\$messages = \"L'erreur suivante s'est produite lors de l'upload:  \".\$_FILES['eventimage']['error'];
\t}

\t//you get the following information for each file:
\t//\$_FILES['field_name']['name']
\t//\$_FILES['field_name']['size']
\t//\$_FILES['field_name']['type']
\t//\$_FILES['field_name']['tmp_name']
}



/******** Set Messages depending error *******/
/*if (isset(\$error)) {
\tif (\$error == 'empty_fields') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Veuillez remplir les champs obligatoires pour votre inscription </div> </div>';
\t}
\telseif (\$error == 'bad_length_user') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> L\\'utilisateur de connexion est invalide </div> </div>';
\t}
\telseif (\$error == 'wrong_password') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Le mot de passe entré est incorrect </div> </div>';
\t}
\telseif (\$error == 'connection_method_undefined') {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Une erreur est survenue lors de la connexion... <br> Veuillez réessayer ultérieurement </div> </div>';
\t}
}*/


/******** Finally, set Global var if \$message isset, and simply redirect to HOME *********/
if (isset(\$message)) {
\t\$_SESSION['msg'] = \$message;
}
 header('location: '.\$gozpeak_protocol.\$gozpeak_host.'/index.php?page=event&event=A vos mousses');


?>

", "Gozpeak/controllers/event_addimage.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/event_addimage.php");
    }
}
