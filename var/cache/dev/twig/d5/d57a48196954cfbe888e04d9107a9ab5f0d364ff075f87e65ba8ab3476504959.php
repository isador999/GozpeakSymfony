<?php

/* Gozpeak/controllers/activation.php */
class __TwigTemplate_7372ce869369fdc874b4d706536d530c3b6de39825d478e937fea27a9c139dce extends Twig_Template
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
        $__internal_ac3937636180c26525d51a2438c75b075b87540b2fd46d74d90aebf6f27301a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac3937636180c26525d51a2438c75b075b87540b2fd46d74d90aebf6f27301a7->enter($__internal_ac3937636180c26525d51a2438c75b075b87540b2fd46d74d90aebf6f27301a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/activation.php"));

        $__internal_d6bf73c94371f305a5c99e2b31f95df8c37e4c8ac2149e24cd5dafc039d0e0cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6bf73c94371f305a5c99e2b31f95df8c37e4c8ac2149e24cd5dafc039d0e0cb->enter($__internal_d6bf73c94371f305a5c99e2b31f95df8c37e4c8ac2149e24cd5dafc039d0e0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/activation.php"));

        // line 1
        echo "<?php

session_start();
require_once(CONTROLLERS.'language.php');
require_once(LIB.'sessions_init.php');
require_once(MODELS.'dbconnect.php');
require_once(MODELS.'activation_functions.php');

if(!isset(\$_GET['login']) && (\$_GET['key'])) {
  \$message = \"Désolé, cette URL n'est pas valide pour l'activation.\";
}

\$display_user = \$_GET['login'];
\$key = \$_GET['key'];

\$initial_state = check_account_state(\$DB, \$key, \$display_user);
#echo \"STATUS : \$state\";

if (\$initial_state == 1) {
  \$message = '<div class=\"form-group\"> <div class=\"alert alert-info fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Bonjour '.\$pseudo.' , Votre compte est deja actif  ! </div> </div>';
} else {
  update_account_to_active(\$DB, \$key, \$display_user);
\t\$state = check_account_state(\$DB, \$key, \$display_user);
\tif (\$state == 1) {
  \t\$message = '<div class=\"form-group\"> <div class=\"alert alert-success fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Bonjour '.\$display_user.' , Votre compte vient d\\'etre active ! Vous pouvez maintenant vous connecter,  et proposer de nouvelles idées d\\'activités linguistiques ! </div> </div>';
\t} else {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Une erreur est survenue lors de l\\'activation, vous devrez peut-être vous réinscrire  (Ou envoyez un email au support info@gozpeak.com) </div> </div>';
\t}
}



/******** Finally, set Global var if \$message isset, and simply redirect to HOME *********/
if (isset(\$message)) {
  \$_SESSION['msg'] = \$message;
}
header('location: '.\$baseUrl.'/index.php?page=home');

?>
";
        
        $__internal_ac3937636180c26525d51a2438c75b075b87540b2fd46d74d90aebf6f27301a7->leave($__internal_ac3937636180c26525d51a2438c75b075b87540b2fd46d74d90aebf6f27301a7_prof);

        
        $__internal_d6bf73c94371f305a5c99e2b31f95df8c37e4c8ac2149e24cd5dafc039d0e0cb->leave($__internal_d6bf73c94371f305a5c99e2b31f95df8c37e4c8ac2149e24cd5dafc039d0e0cb_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/activation.php";
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
require_once(CONTROLLERS.'language.php');
require_once(LIB.'sessions_init.php');
require_once(MODELS.'dbconnect.php');
require_once(MODELS.'activation_functions.php');

if(!isset(\$_GET['login']) && (\$_GET['key'])) {
  \$message = \"Désolé, cette URL n'est pas valide pour l'activation.\";
}

\$display_user = \$_GET['login'];
\$key = \$_GET['key'];

\$initial_state = check_account_state(\$DB, \$key, \$display_user);
#echo \"STATUS : \$state\";

if (\$initial_state == 1) {
  \$message = '<div class=\"form-group\"> <div class=\"alert alert-info fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Bonjour '.\$pseudo.' , Votre compte est deja actif  ! </div> </div>';
} else {
  update_account_to_active(\$DB, \$key, \$display_user);
\t\$state = check_account_state(\$DB, \$key, \$display_user);
\tif (\$state == 1) {
  \t\$message = '<div class=\"form-group\"> <div class=\"alert alert-success fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Bonjour '.\$display_user.' , Votre compte vient d\\'etre active ! Vous pouvez maintenant vous connecter,  et proposer de nouvelles idées d\\'activités linguistiques ! </div> </div>';
\t} else {
\t\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"> <a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a> Une erreur est survenue lors de l\\'activation, vous devrez peut-être vous réinscrire  (Ou envoyez un email au support info@gozpeak.com) </div> </div>';
\t}
}



/******** Finally, set Global var if \$message isset, and simply redirect to HOME *********/
if (isset(\$message)) {
  \$_SESSION['msg'] = \$message;
}
header('location: '.\$baseUrl.'/index.php?page=home');

?>
", "Gozpeak/controllers/activation.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/activation.php");
    }
}
