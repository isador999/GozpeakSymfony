<?php

/* Gozpeak/controllers/members-list.php */
class __TwigTemplate_4fbeb83fdda37b66a370325db56f8a2d234696c62440c2e0f46743e845ddb0d0 extends Twig_Template
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
        $__internal_ee3793ae7c749c3a22cd5d573a66bf3c1677a4d01cafd86003941a35571c2c9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee3793ae7c749c3a22cd5d573a66bf3c1677a4d01cafd86003941a35571c2c9c->enter($__internal_ee3793ae7c749c3a22cd5d573a66bf3c1677a4d01cafd86003941a35571c2c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/members-list.php"));

        $__internal_b15614f8ea199340784c505de92dcc6daa788f675b50ec62f88f472ed8d6bf05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b15614f8ea199340784c505de92dcc6daa788f675b50ec62f88f472ed8d6bf05->enter($__internal_b15614f8ea199340784c505de92dcc6daa788f675b50ec62f88f472ed8d6bf05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/members-list.php"));

        // line 1
        echo "<?php

session_start();
require_once('./language/fr.php');
require_once('./lib/sessions_init.php');

require_once('../models/dbconnect.php');
//require_once('../models/memberslist_functions.php');
require_once('../models/ajax_event_functions.php');


if(\$_GET) {
\t\$eventtype = isset(\$_GET['zpeaktype']) ? \$_GET['zpeaktype'] : '';
\t\$eventname = isset(\$_GET['eventname']) ? \$_GET['eventname'] : '';


\t/************ Unitary tests ************/
\t/***************************************/
\t\$fields_to_check = array(\$eventtype, \$eventname);
\tforeach (\$fields_to_check as \$field) {
                if((trim(\$field) == '') OR (empty(\$field))) {
                //if(empty(\$field)) {
                        echo \"NOK: rule1\";
                        \$error=\"empty_fields\";
                }
        }

\tif(!isset(\$error)) {
\t\tif (!preg_match(\"/(zpeakevent|zpeakidea)/\", \$eventtype)) {
\t\t\techo \"NOK: rule2\";
\t\t\t\$error=\"error in query type\";
\t\t}

\t\tif (\$eventtype == \"zpeakevent\") {
\t\t\t\$eventname_exists = check_eventname(\$DB, \$eventname);
\t\t} elseif (\$eventtype == \"zpeakidea\") {
\t\t\t\$eventname_exists = check_ideaname(\$DB, \$eventname);
\t\t}

\t\tif (!isset(\$eventname_exists) OR (\$eventname_exists < 1)) {
                        echo \"NOK: rule3\";
\t\t\t\$error=\"this event not exists\";
\t\t}
\t}


\tif(!isset(\$error)) {
\t\tif (\$eventtype == \"zpeakevent\") {
\t\t\t\$eventid = retrieve_eventid(\$DB, \$eventname);
\t\t\t\$memberslist = retrieve_membernames_of_event(\$DB, \$eventid);
\t\t} elseif (\$eventtype == \"zpeakidea\") {
\t\t\t\$ideaid = retrieve_ideaid(\$DB, \$eventname);
\t\t\t\$memberslist = retrieve_membernames_of_idea(\$DB, \$ideaid);
\t\t}

\t\t/****** Finally return list of members ******/
\t\t\$lastmember = end(\$memberslist);
\t\tif (!empty(\$memberslist)) {
\t\t\tforeach(\$memberslist as \$member) {
\t\t\t\tif (\$member == \$lastmember) {
    \t\t\t\t\techo \$member['pseudo'];
\t\t\t\t} else {
    \t\t\t\t\techo \$member['pseudo'].\", \";
\t\t\t\t}
\t\t\t}
\t\t} else {
\t\t\techo \"Aucun membre n'est inscrit actuellement\";
\t\t}
\t}
}


if(isset(\$error)) {
\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>  Désolé, une erreur est survenue lors de la dernière opération.  Veuillez réessayer ultérieurement </div> </div>';
}


/******** Finally, set Global var if \$message isset *********/
if (isset(\$message)) {
\t\$_SESSION['msg'] = \$message;
}

?>
";
        
        $__internal_ee3793ae7c749c3a22cd5d573a66bf3c1677a4d01cafd86003941a35571c2c9c->leave($__internal_ee3793ae7c749c3a22cd5d573a66bf3c1677a4d01cafd86003941a35571c2c9c_prof);

        
        $__internal_b15614f8ea199340784c505de92dcc6daa788f675b50ec62f88f472ed8d6bf05->leave($__internal_b15614f8ea199340784c505de92dcc6daa788f675b50ec62f88f472ed8d6bf05_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/members-list.php";
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
require_once('./language/fr.php');
require_once('./lib/sessions_init.php');

require_once('../models/dbconnect.php');
//require_once('../models/memberslist_functions.php');
require_once('../models/ajax_event_functions.php');


if(\$_GET) {
\t\$eventtype = isset(\$_GET['zpeaktype']) ? \$_GET['zpeaktype'] : '';
\t\$eventname = isset(\$_GET['eventname']) ? \$_GET['eventname'] : '';


\t/************ Unitary tests ************/
\t/***************************************/
\t\$fields_to_check = array(\$eventtype, \$eventname);
\tforeach (\$fields_to_check as \$field) {
                if((trim(\$field) == '') OR (empty(\$field))) {
                //if(empty(\$field)) {
                        echo \"NOK: rule1\";
                        \$error=\"empty_fields\";
                }
        }

\tif(!isset(\$error)) {
\t\tif (!preg_match(\"/(zpeakevent|zpeakidea)/\", \$eventtype)) {
\t\t\techo \"NOK: rule2\";
\t\t\t\$error=\"error in query type\";
\t\t}

\t\tif (\$eventtype == \"zpeakevent\") {
\t\t\t\$eventname_exists = check_eventname(\$DB, \$eventname);
\t\t} elseif (\$eventtype == \"zpeakidea\") {
\t\t\t\$eventname_exists = check_ideaname(\$DB, \$eventname);
\t\t}

\t\tif (!isset(\$eventname_exists) OR (\$eventname_exists < 1)) {
                        echo \"NOK: rule3\";
\t\t\t\$error=\"this event not exists\";
\t\t}
\t}


\tif(!isset(\$error)) {
\t\tif (\$eventtype == \"zpeakevent\") {
\t\t\t\$eventid = retrieve_eventid(\$DB, \$eventname);
\t\t\t\$memberslist = retrieve_membernames_of_event(\$DB, \$eventid);
\t\t} elseif (\$eventtype == \"zpeakidea\") {
\t\t\t\$ideaid = retrieve_ideaid(\$DB, \$eventname);
\t\t\t\$memberslist = retrieve_membernames_of_idea(\$DB, \$ideaid);
\t\t}

\t\t/****** Finally return list of members ******/
\t\t\$lastmember = end(\$memberslist);
\t\tif (!empty(\$memberslist)) {
\t\t\tforeach(\$memberslist as \$member) {
\t\t\t\tif (\$member == \$lastmember) {
    \t\t\t\t\techo \$member['pseudo'];
\t\t\t\t} else {
    \t\t\t\t\techo \$member['pseudo'].\", \";
\t\t\t\t}
\t\t\t}
\t\t} else {
\t\t\techo \"Aucun membre n'est inscrit actuellement\";
\t\t}
\t}
}


if(isset(\$error)) {
\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>  Désolé, une erreur est survenue lors de la dernière opération.  Veuillez réessayer ultérieurement </div> </div>';
}


/******** Finally, set Global var if \$message isset *********/
if (isset(\$message)) {
\t\$_SESSION['msg'] = \$message;
}

?>
", "Gozpeak/controllers/members-list.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/members-list.php");
    }
}
