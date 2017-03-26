<?php

/* Gozpeak/models/event_functions.php */
class __TwigTemplate_813b5850e5f8b938dc905fa2c425b355d05c3f408667ebf339119d82c231b80a extends Twig_Template
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
        $__internal_0505a32a68acf7a5af7f326fe71d88fa5efd04549974cbdbfdac4c7a5fd44c0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0505a32a68acf7a5af7f326fe71d88fa5efd04549974cbdbfdac4c7a5fd44c0c->enter($__internal_0505a32a68acf7a5af7f326fe71d88fa5efd04549974cbdbfdac4c7a5fd44c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/models/event_functions.php"));

        $__internal_66701834f8b9322f87901397a30e387919c371da138542654320b3109f33cdce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66701834f8b9322f87901397a30e387919c371da138542654320b3109f33cdce->enter($__internal_66701834f8b9322f87901397a30e387919c371da138542654320b3109f33cdce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/models/event_functions.php"));

        // line 1
        echo "<?php

function retrieve_event(\$DB, \$eventname) {
  \$req = \$DB->prepare(\"SELECT id, organizer, language, eventname, eventdesc, eventtype, eventplace, level_language, DATE_FORMAT(date, '%d %b %H:%i') date, CONCAT(UCASE(LEFT(DAYNAME(eventdatetime),1)), SUBSTRING(DAYNAME(eventdatetime), 2)) eventdayname, DATE_FORMAT(eventdatetime, '%d') eventdaynumber, MONTHNAME(eventdatetime) eventmonthname, DATE_FORMAT(eventdatetime, '%Y') eventyear, DATE_FORMAT(eventdatetime, '%HH%i') eventtime FROM events where eventname = ?\");
  \$req -> execute(array(\$eventname));
  \$infos_event = \$req->fetch();
  \$req->closeCursor();
  return (\$infos_event);
}


function retrieve_remaining_days_event(\$DB,\$eventname) {
\t\$req = \$DB->prepare(\"SELECT DATEDIFF((SELECT DATE_FORMAT(eventdatetime, '%Y-%m-%d') eventday), CURDATE()) AS DiffDate FROM events where eventname = :eventname\");
\t\$req -> execute(array(':eventname'=>\$eventname));
\t\$DiffDate = \$req->fetchColumn();
\t\$req->closeCursor();
\treturn (\$DiffDate);
}


/***** Functions to check if user is already registered to event *****/
function retrieve_userid(\$DB, \$pseudo) {
  \$req = \$DB->prepare(\"SELECT id from members where pseudo = ?\");
  \$req -> execute(array(\$pseudo));
  \$userid = \$req->fetchColumn();
  \$req->closeCursor();
  return (\$userid);
}


function check_eventuser_association(\$DB, \$eventid, \$memberid) {
  \$req = \$DB->prepare('SELECT COUNT(*) FROM eventusers where eventid = :eventid AND memberid = :memberid');
  \$req -> execute(array(':eventid'=>\$eventid, ':memberid'=>\$memberid));
  \$nbre_entries = \$req->fetchColumn();
  \$req -> closeCursor();
  return (\$nbre_entries);
}


function event_members_count(\$DB, \$eventid) {
  \$req = \$DB->prepare(\"SELECT COUNT(memberid) FROM eventusers where eventid = ?\");
  \$req -> execute(array(\$eventid));
  \$nbre_members = \$req->fetchColumn();
  \$req->closeCursor();
  return (\$nbre_members);
}


?>
";
        
        $__internal_0505a32a68acf7a5af7f326fe71d88fa5efd04549974cbdbfdac4c7a5fd44c0c->leave($__internal_0505a32a68acf7a5af7f326fe71d88fa5efd04549974cbdbfdac4c7a5fd44c0c_prof);

        
        $__internal_66701834f8b9322f87901397a30e387919c371da138542654320b3109f33cdce->leave($__internal_66701834f8b9322f87901397a30e387919c371da138542654320b3109f33cdce_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/models/event_functions.php";
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

function retrieve_event(\$DB, \$eventname) {
  \$req = \$DB->prepare(\"SELECT id, organizer, language, eventname, eventdesc, eventtype, eventplace, level_language, DATE_FORMAT(date, '%d %b %H:%i') date, CONCAT(UCASE(LEFT(DAYNAME(eventdatetime),1)), SUBSTRING(DAYNAME(eventdatetime), 2)) eventdayname, DATE_FORMAT(eventdatetime, '%d') eventdaynumber, MONTHNAME(eventdatetime) eventmonthname, DATE_FORMAT(eventdatetime, '%Y') eventyear, DATE_FORMAT(eventdatetime, '%HH%i') eventtime FROM events where eventname = ?\");
  \$req -> execute(array(\$eventname));
  \$infos_event = \$req->fetch();
  \$req->closeCursor();
  return (\$infos_event);
}


function retrieve_remaining_days_event(\$DB,\$eventname) {
\t\$req = \$DB->prepare(\"SELECT DATEDIFF((SELECT DATE_FORMAT(eventdatetime, '%Y-%m-%d') eventday), CURDATE()) AS DiffDate FROM events where eventname = :eventname\");
\t\$req -> execute(array(':eventname'=>\$eventname));
\t\$DiffDate = \$req->fetchColumn();
\t\$req->closeCursor();
\treturn (\$DiffDate);
}


/***** Functions to check if user is already registered to event *****/
function retrieve_userid(\$DB, \$pseudo) {
  \$req = \$DB->prepare(\"SELECT id from members where pseudo = ?\");
  \$req -> execute(array(\$pseudo));
  \$userid = \$req->fetchColumn();
  \$req->closeCursor();
  return (\$userid);
}


function check_eventuser_association(\$DB, \$eventid, \$memberid) {
  \$req = \$DB->prepare('SELECT COUNT(*) FROM eventusers where eventid = :eventid AND memberid = :memberid');
  \$req -> execute(array(':eventid'=>\$eventid, ':memberid'=>\$memberid));
  \$nbre_entries = \$req->fetchColumn();
  \$req -> closeCursor();
  return (\$nbre_entries);
}


function event_members_count(\$DB, \$eventid) {
  \$req = \$DB->prepare(\"SELECT COUNT(memberid) FROM eventusers where eventid = ?\");
  \$req -> execute(array(\$eventid));
  \$nbre_members = \$req->fetchColumn();
  \$req->closeCursor();
  return (\$nbre_members);
}


?>
", "Gozpeak/models/event_functions.php", "/root/Gozpeak/app/Resources/views/Gozpeak/models/event_functions.php");
    }
}
