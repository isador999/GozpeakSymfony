<?php

/* Gozpeak/controllers/retrieveEventData.php */
class __TwigTemplate_0da0073c7f51615e21fac27472bbe06a335b4dd6864fe306c29f21569bc2076e extends Twig_Template
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
        $__internal_649dcf5b6e8c2d96baf22ed6a71c6a8267134ed6d3dfcfadebbca334d0bba93d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_649dcf5b6e8c2d96baf22ed6a71c6a8267134ed6d3dfcfadebbca334d0bba93d->enter($__internal_649dcf5b6e8c2d96baf22ed6a71c6a8267134ed6d3dfcfadebbca334d0bba93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/retrieveEventData.php"));

        $__internal_b3fa736cafbf523dcdb3f6c066756d9d240f260827d555bf0cfe24fb12e7370b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3fa736cafbf523dcdb3f6c066756d9d240f260827d555bf0cfe24fb12e7370b->enter($__internal_b3fa736cafbf523dcdb3f6c066756d9d240f260827d555bf0cfe24fb12e7370b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/retrieveEventData.php"));

        // line 1
        echo "<?php

session_start();
require_once('./lib/sessions_init.php');
require_once('./language/fr.php');

require_once('../models/dbconnect.php');
require_once('../models/ajax_event_functions.php');


if(\$_GET) {
\t\$eventtype = isset(\$_GET['zpeaktype']) ? \$_GET['zpeaktype'] : '';
\t\$eventname = isset(\$_GET['eventname']) ? \$_GET['eventname'] : '';


\t/************ Unitary tests ************/
\t/***************************************/
\t\$fields_to_check = array(\$eventtype, \$eventname);
\tforeach (\$fields_to_check as \$field) {
    if((trim(\$field) == '') OR (empty(\$field))) {
      echo \"NOK: rule1\";
      \$error=\"empty_fields\";
    }
  }

\tif(!isset(\$error)) {
\t\tif (!preg_match(\"/(event|idea)/\", \$eventtype)) {
\t\t\techo \"NOK: rule2\";
\t\t\t\$error=\"error in query type\";
\t\t}

\t\tif (\$eventtype == \"event\") {
\t\t\t\$eventname_exists = check_eventname(\$DB, \$eventname);
\t\t} elseif (\$eventtype == \"idea\") {
\t\t\t\$eventname_exists = check_ideaname(\$DB, \$eventname);
\t\t}

\t\tif (!isset(\$eventname_exists) OR (\$eventname_exists < 1)) {
      echo \"NOK: rule3\";
\t\t\t\$error=\"this event not exists\";
\t\t}
\t}


\tif(!isset(\$error)) {
\t\tif (\$eventtype == \"event\") {
\t\t\t//\$eventid = retrieve_eventid(\$DB, \$eventname);
\t\t\t//\$memberslist = retrieve_membernames_of_event(\$DB, \$eventid);
\t\t\t//\$ajax_infos_event = ajax_retrieve_event(\$DB, \$eventid);
\t\t} elseif (\$eventtype == \"idea\") {
\t\t\t\$ideaid = retrieve_ideaid(\$DB, \$eventname);
\t\t\t//\$memberslist = retrieve_membernames_of_idea(\$DB, \$ideaid);
\t\t\t\$ajax_infos_idea = ajax_retrieve_idea(\$DB, \$ideaid);
\t\t}

\t\t/****** Finally return list of members ******/
\t\techo json_encode(\$ajax_infos_idea);
\t\t/*\$lastinfo = end(\$ajax_infos_idea);
\t\tforeach(\$ajax_infos_idea as \$key => \$info) {
\t\t\tif (\$info == \$lastinfo) {
\t\t\t\techo \$key; echo \$info;
\t\t\t} else {
\t\t\t\techo \$key; echo \$info.\"|\";
\t\t\t}
\t\t}*/

//\t\t\$lastmember = end(\$memberslist);
//\t\tif (!empty(\$memberslist)) {
//\t\t\tforeach(\$memberslist as \$member) {
//\t\t\t\tif (\$member == \$lastmember) {
//    \t\t\t\t\techo \$member['pseudo'];
//\t\t\t\t} else {
//    \t\t\t\t\techo \$member['pseudo'].\", \";
//\t\t\t\t}
//\t\t\t}
//\t\t} else {
//\t\t\techo \"Aucun membre n'est inscrit actuellement\";
//\t\t}
\t}
}


if(isset(\$error)) {
\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>  Désolé, une erreur est survenue lors de la dernière opération, ou l\\'événement n\\'existe pas.  Veuillez réessayer ultérieurement </div> </div>';
}


/******** Finally, set Global var if \$message isset *********/
if (isset(\$message)) {
\t\$_SESSION['msg'] = \$message;
}

?>
";
        
        $__internal_649dcf5b6e8c2d96baf22ed6a71c6a8267134ed6d3dfcfadebbca334d0bba93d->leave($__internal_649dcf5b6e8c2d96baf22ed6a71c6a8267134ed6d3dfcfadebbca334d0bba93d_prof);

        
        $__internal_b3fa736cafbf523dcdb3f6c066756d9d240f260827d555bf0cfe24fb12e7370b->leave($__internal_b3fa736cafbf523dcdb3f6c066756d9d240f260827d555bf0cfe24fb12e7370b_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/retrieveEventData.php";
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
require_once('./lib/sessions_init.php');
require_once('./language/fr.php');

require_once('../models/dbconnect.php');
require_once('../models/ajax_event_functions.php');


if(\$_GET) {
\t\$eventtype = isset(\$_GET['zpeaktype']) ? \$_GET['zpeaktype'] : '';
\t\$eventname = isset(\$_GET['eventname']) ? \$_GET['eventname'] : '';


\t/************ Unitary tests ************/
\t/***************************************/
\t\$fields_to_check = array(\$eventtype, \$eventname);
\tforeach (\$fields_to_check as \$field) {
    if((trim(\$field) == '') OR (empty(\$field))) {
      echo \"NOK: rule1\";
      \$error=\"empty_fields\";
    }
  }

\tif(!isset(\$error)) {
\t\tif (!preg_match(\"/(event|idea)/\", \$eventtype)) {
\t\t\techo \"NOK: rule2\";
\t\t\t\$error=\"error in query type\";
\t\t}

\t\tif (\$eventtype == \"event\") {
\t\t\t\$eventname_exists = check_eventname(\$DB, \$eventname);
\t\t} elseif (\$eventtype == \"idea\") {
\t\t\t\$eventname_exists = check_ideaname(\$DB, \$eventname);
\t\t}

\t\tif (!isset(\$eventname_exists) OR (\$eventname_exists < 1)) {
      echo \"NOK: rule3\";
\t\t\t\$error=\"this event not exists\";
\t\t}
\t}


\tif(!isset(\$error)) {
\t\tif (\$eventtype == \"event\") {
\t\t\t//\$eventid = retrieve_eventid(\$DB, \$eventname);
\t\t\t//\$memberslist = retrieve_membernames_of_event(\$DB, \$eventid);
\t\t\t//\$ajax_infos_event = ajax_retrieve_event(\$DB, \$eventid);
\t\t} elseif (\$eventtype == \"idea\") {
\t\t\t\$ideaid = retrieve_ideaid(\$DB, \$eventname);
\t\t\t//\$memberslist = retrieve_membernames_of_idea(\$DB, \$ideaid);
\t\t\t\$ajax_infos_idea = ajax_retrieve_idea(\$DB, \$ideaid);
\t\t}

\t\t/****** Finally return list of members ******/
\t\techo json_encode(\$ajax_infos_idea);
\t\t/*\$lastinfo = end(\$ajax_infos_idea);
\t\tforeach(\$ajax_infos_idea as \$key => \$info) {
\t\t\tif (\$info == \$lastinfo) {
\t\t\t\techo \$key; echo \$info;
\t\t\t} else {
\t\t\t\techo \$key; echo \$info.\"|\";
\t\t\t}
\t\t}*/

//\t\t\$lastmember = end(\$memberslist);
//\t\tif (!empty(\$memberslist)) {
//\t\t\tforeach(\$memberslist as \$member) {
//\t\t\t\tif (\$member == \$lastmember) {
//    \t\t\t\t\techo \$member['pseudo'];
//\t\t\t\t} else {
//    \t\t\t\t\techo \$member['pseudo'].\", \";
//\t\t\t\t}
//\t\t\t}
//\t\t} else {
//\t\t\techo \"Aucun membre n'est inscrit actuellement\";
//\t\t}
\t}
}


if(isset(\$error)) {
\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>  Désolé, une erreur est survenue lors de la dernière opération, ou l\\'événement n\\'existe pas.  Veuillez réessayer ultérieurement </div> </div>';
}


/******** Finally, set Global var if \$message isset *********/
if (isset(\$message)) {
\t\$_SESSION['msg'] = \$message;
}

?>
", "Gozpeak/controllers/retrieveEventData.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/retrieveEventData.php");
    }
}
