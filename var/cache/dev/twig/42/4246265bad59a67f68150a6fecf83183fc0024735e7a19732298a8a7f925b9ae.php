<?php

/* Gozpeak/models/ajax_event_functions.php */
class __TwigTemplate_4c1d1908bdbf7e36d1cf60e9b468f30b1ac3ef9e371aec2e90174b32e67083bd extends Twig_Template
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
        $__internal_bfcf8e220cfc1e4d4048c7951cf7a99e952d4ad1a49663ea2f2c731d40eaae5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfcf8e220cfc1e4d4048c7951cf7a99e952d4ad1a49663ea2f2c731d40eaae5c->enter($__internal_bfcf8e220cfc1e4d4048c7951cf7a99e952d4ad1a49663ea2f2c731d40eaae5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/models/ajax_event_functions.php"));

        $__internal_8000b3d13076e5116ce6f2b773aa834467f78edb4d99ed31f7f4ac3aadc8196a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8000b3d13076e5116ce6f2b773aa834467f78edb4d99ed31f7f4ac3aadc8196a->enter($__internal_8000b3d13076e5116ce6f2b773aa834467f78edb4d99ed31f7f4ac3aadc8196a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/models/ajax_event_functions.php"));

        // line 1
        echo "<?php


function check_eventname(\$DB, \$eventname) {
  \$req = \$DB->prepare(\"SELECT COUNT(eventname) FROM events where eventname = ?\");
  \$req -> execute(array(\$eventname));
  \$nbre_event = \$req->fetchColumn();
  \$req->closeCursor();
  return (\$nbre_event);
}

function check_ideaname(\$DB, \$ideaname) {
  \$req = \$DB->prepare(\"SELECT COUNT(ideaname) FROM ideas where ideaname = ?\");
  \$req -> execute(array(\$ideaname));
  \$nbre_idea = \$req->fetchColumn();
  \$req->closeCursor();
  return (\$nbre_idea);
}


function retrieve_eventid(\$DB, \$eventname) {
  \$req = \$DB->prepare(\"SELECT id from events where eventname = ?\");
  \$req -> execute(array(\$eventname));
  \$eventid = \$req->fetchColumn();
  \$req->closeCursor();
  return (\$eventid);
}


function retrieve_ideaid(\$DB, \$ideaname) {
  \$req = \$DB->prepare(\"SELECT id from ideas where ideaname = ?\");
  \$req -> execute(array(\$ideaname));
  \$ideaid = \$req->fetchColumn();
  \$req->closeCursor();
  return (\$ideaid);
}



function retrieve_membernames_of_event(\$DB, \$eventid) {
  \$req = \$DB->prepare(\"SELECT pseudo from members, eventusers WHERE members.id = eventusers.memberid AND eventusers.eventid = ?;\");
  \$req -> execute(array(\$eventid));
  \$memberlist = \$req->fetchAll();
  \$req->closeCursor();
  return (\$memberlist);
}


function retrieve_membernames_of_idea(\$DB, \$ideaid) {
  \$req = \$DB->prepare(\"SELECT pseudo from members, ideausers WHERE members.id = ideausers.memberid AND ideausers.ideaid = ?;\");
  \$req -> execute(array(\$ideaid));
  \$memberlist = \$req->fetchAll();
  \$req->closeCursor();
  return (\$memberlist);
}


/****** SQL Functions for Ajax EventEdition ******/
function ajax_retrieve_idea(\$DB, \$ideaid) {
  //\$req = \$DB->prepare(\"SELECT language, ideaname, ideadesc, ideaplace, ideaphone, level_language, ideadatetime FROM ideas where id = :ideaid\");
  \$req = \$DB->prepare(\"SELECT language, ideaname, ideadesc, ideaplace, ideaphone, level_language, ideadatetime FROM ideas where id = :ideaid\");
\t\$req -> execute(array(':ideaid'=>\$ideaid));
\t/*\$ajax_infos_idea = \$req->fetch(PDO::FETCH_ASSOC);*/
  \$ajax_infos_idea = \$req->fetch();
  \$req->closeCursor();
  return (\$ajax_infos_idea);
}


function ajax_retrieve_event(\$DB, \$eventid) {
  \$req = \$DB->prepare(\"SELECT language, eventname, eventdesc, eventplace, level_language, eventdatetime FROM events where id = :eventid\");
\t\$req -> execute(array(':eventid'=>\$eventid));
  //\$ajax_infos_event = \$req->fetch();
\t\$ajax_infos_event = \$req->fetch(PDO::FETCH_ASSOC);
  \$req->closeCursor();
  return (\$ajax_infos_event);
}


#function retrieve_event(\$DB, \$eventname) {
#        \$req = \$DB->prepare(\"SELECT id, organizer, language, eventname, eventdesc, eventtype, eventplace, level_language, DATE_FORMAT(date, 'le %d %b %H:%i') date, DATE_FORMAT(eventdatetime, '%a %b %d') eventday, DATE_FORMAT(eventdatetime, '%H:%i') eventtime FROM events where eventname = ?\");
#        \$req -> execute(array(\$eventname));
#        \$infos_event = \$req->fetch();
#        \$req->closeCursor();
#        return (\$infos_event);
#}
#
#
#/***** Functions to check if user is already registered to event *****/
#function retrieve_userid(\$DB, \$pseudo) {
#        \$req = \$DB->prepare(\"SELECT id from members where pseudo = ?\");
#        \$req -> execute(array(\$pseudo));
#        \$userid = \$req->fetchColumn();
#        \$req->closeCursor();
#        return (\$userid);
#}
#
#
#function event_members_count(\$DB, \$eventid) {
#        \$req = \$DB->prepare(\"SELECT COUNT(memberid) FROM eventusers where eventid = ?\");
#        \$req -> execute(array(\$eventid));
#        \$nbre_members = \$req->fetchColumn();
#        \$req->closeCursor();
#        return (\$nbre_members);
#}


?>
";
        
        $__internal_bfcf8e220cfc1e4d4048c7951cf7a99e952d4ad1a49663ea2f2c731d40eaae5c->leave($__internal_bfcf8e220cfc1e4d4048c7951cf7a99e952d4ad1a49663ea2f2c731d40eaae5c_prof);

        
        $__internal_8000b3d13076e5116ce6f2b773aa834467f78edb4d99ed31f7f4ac3aadc8196a->leave($__internal_8000b3d13076e5116ce6f2b773aa834467f78edb4d99ed31f7f4ac3aadc8196a_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/models/ajax_event_functions.php";
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


function check_eventname(\$DB, \$eventname) {
  \$req = \$DB->prepare(\"SELECT COUNT(eventname) FROM events where eventname = ?\");
  \$req -> execute(array(\$eventname));
  \$nbre_event = \$req->fetchColumn();
  \$req->closeCursor();
  return (\$nbre_event);
}

function check_ideaname(\$DB, \$ideaname) {
  \$req = \$DB->prepare(\"SELECT COUNT(ideaname) FROM ideas where ideaname = ?\");
  \$req -> execute(array(\$ideaname));
  \$nbre_idea = \$req->fetchColumn();
  \$req->closeCursor();
  return (\$nbre_idea);
}


function retrieve_eventid(\$DB, \$eventname) {
  \$req = \$DB->prepare(\"SELECT id from events where eventname = ?\");
  \$req -> execute(array(\$eventname));
  \$eventid = \$req->fetchColumn();
  \$req->closeCursor();
  return (\$eventid);
}


function retrieve_ideaid(\$DB, \$ideaname) {
  \$req = \$DB->prepare(\"SELECT id from ideas where ideaname = ?\");
  \$req -> execute(array(\$ideaname));
  \$ideaid = \$req->fetchColumn();
  \$req->closeCursor();
  return (\$ideaid);
}



function retrieve_membernames_of_event(\$DB, \$eventid) {
  \$req = \$DB->prepare(\"SELECT pseudo from members, eventusers WHERE members.id = eventusers.memberid AND eventusers.eventid = ?;\");
  \$req -> execute(array(\$eventid));
  \$memberlist = \$req->fetchAll();
  \$req->closeCursor();
  return (\$memberlist);
}


function retrieve_membernames_of_idea(\$DB, \$ideaid) {
  \$req = \$DB->prepare(\"SELECT pseudo from members, ideausers WHERE members.id = ideausers.memberid AND ideausers.ideaid = ?;\");
  \$req -> execute(array(\$ideaid));
  \$memberlist = \$req->fetchAll();
  \$req->closeCursor();
  return (\$memberlist);
}


/****** SQL Functions for Ajax EventEdition ******/
function ajax_retrieve_idea(\$DB, \$ideaid) {
  //\$req = \$DB->prepare(\"SELECT language, ideaname, ideadesc, ideaplace, ideaphone, level_language, ideadatetime FROM ideas where id = :ideaid\");
  \$req = \$DB->prepare(\"SELECT language, ideaname, ideadesc, ideaplace, ideaphone, level_language, ideadatetime FROM ideas where id = :ideaid\");
\t\$req -> execute(array(':ideaid'=>\$ideaid));
\t/*\$ajax_infos_idea = \$req->fetch(PDO::FETCH_ASSOC);*/
  \$ajax_infos_idea = \$req->fetch();
  \$req->closeCursor();
  return (\$ajax_infos_idea);
}


function ajax_retrieve_event(\$DB, \$eventid) {
  \$req = \$DB->prepare(\"SELECT language, eventname, eventdesc, eventplace, level_language, eventdatetime FROM events where id = :eventid\");
\t\$req -> execute(array(':eventid'=>\$eventid));
  //\$ajax_infos_event = \$req->fetch();
\t\$ajax_infos_event = \$req->fetch(PDO::FETCH_ASSOC);
  \$req->closeCursor();
  return (\$ajax_infos_event);
}


#function retrieve_event(\$DB, \$eventname) {
#        \$req = \$DB->prepare(\"SELECT id, organizer, language, eventname, eventdesc, eventtype, eventplace, level_language, DATE_FORMAT(date, 'le %d %b %H:%i') date, DATE_FORMAT(eventdatetime, '%a %b %d') eventday, DATE_FORMAT(eventdatetime, '%H:%i') eventtime FROM events where eventname = ?\");
#        \$req -> execute(array(\$eventname));
#        \$infos_event = \$req->fetch();
#        \$req->closeCursor();
#        return (\$infos_event);
#}
#
#
#/***** Functions to check if user is already registered to event *****/
#function retrieve_userid(\$DB, \$pseudo) {
#        \$req = \$DB->prepare(\"SELECT id from members where pseudo = ?\");
#        \$req -> execute(array(\$pseudo));
#        \$userid = \$req->fetchColumn();
#        \$req->closeCursor();
#        return (\$userid);
#}
#
#
#function event_members_count(\$DB, \$eventid) {
#        \$req = \$DB->prepare(\"SELECT COUNT(memberid) FROM eventusers where eventid = ?\");
#        \$req -> execute(array(\$eventid));
#        \$nbre_members = \$req->fetchColumn();
#        \$req->closeCursor();
#        return (\$nbre_members);
#}


?>
", "Gozpeak/models/ajax_event_functions.php", "/root/Gozpeak/app/Resources/views/Gozpeak/models/ajax_event_functions.php");
    }
}
