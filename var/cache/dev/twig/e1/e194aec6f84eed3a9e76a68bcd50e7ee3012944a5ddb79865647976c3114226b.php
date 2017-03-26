<?php

/* Gozpeak/models/idea_functions.php */
class __TwigTemplate_d5dedb2e07adb291a7d8ab49d1db7ce12bc0792691464bf7c060487142df5abd extends Twig_Template
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
        $__internal_d5cd8098c9bcbdf442857a64b696ee4990af304e3cda31b549b0a381e46449db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5cd8098c9bcbdf442857a64b696ee4990af304e3cda31b549b0a381e46449db->enter($__internal_d5cd8098c9bcbdf442857a64b696ee4990af304e3cda31b549b0a381e46449db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/models/idea_functions.php"));

        $__internal_0a529bffaace5da41813188250e3526eea09e8b409387b726de93b6518352ccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a529bffaace5da41813188250e3526eea09e8b409387b726de93b6518352ccb->enter($__internal_0a529bffaace5da41813188250e3526eea09e8b409387b726de93b6518352ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/models/idea_functions.php"));

        // line 1
        echo "<?php


function retrieve_idea(\$DB, \$ideaname) {
  \$req = \$DB->prepare(\"SELECT id, organizer, language, ideaname, ideadesc, ideatype, ideaplace, ideaphone, level_language, DATE_FORMAT(date, '%d %b %H:%i') date, CONCAT(UCASE(LEFT(DAYNAME(ideadatetime),1)), SUBSTRING(DAYNAME(ideadatetime), 2)) ideadayname, DATE_FORMAT(ideadatetime, '%d') ideadaynumber, MONTHNAME(ideadatetime) ideamonthname, DATE_FORMAT(ideadatetime, '%Y') ideayear, DATE_FORMAT(ideadatetime, '%HH%i') ideatime FROM ideas where ideaname = ?\");
  \$req -> execute(array(\$ideaname));
  \$infos_idea = \$req->fetch();
  \$req->closeCursor();
  return (\$infos_idea);
}


function retrieve_remaining_days_idea(\$DB,\$ideaname) {
\t\$req = \$DB->prepare(\"SELECT DATEDIFF((SELECT DATE_FORMAT(ideadatetime, '%Y-%m-%d') ideaday), CURDATE()) AS DiffDate FROM ideas where ideaname = :ideaname\");
\t\$req -> execute(array(':ideaname'=>\$ideaname));
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


function check_ideauser_association(\$DB, \$ideaid, \$memberid) {
  \$req = \$DB->prepare('SELECT COUNT(*) FROM ideausers where ideaid = :ideaid AND memberid = :memberid');
  \$req -> execute(array(':ideaid'=>\$ideaid, ':memberid'=>\$memberid));
  \$nbre_entries = \$req->fetchColumn();
  \$req -> closeCursor();
  return (\$nbre_entries);
}


function idea_members_count(\$DB, \$ideaid) {
  \$req = \$DB->prepare(\"SELECT COUNT(memberid) FROM ideausers where ideaid = ?\");
  \$req -> execute(array(\$ideaid));
  \$nbre_members = \$req->fetchColumn();
  \$req->closeCursor();
  return (\$nbre_members);
}

?>
";
        
        $__internal_d5cd8098c9bcbdf442857a64b696ee4990af304e3cda31b549b0a381e46449db->leave($__internal_d5cd8098c9bcbdf442857a64b696ee4990af304e3cda31b549b0a381e46449db_prof);

        
        $__internal_0a529bffaace5da41813188250e3526eea09e8b409387b726de93b6518352ccb->leave($__internal_0a529bffaace5da41813188250e3526eea09e8b409387b726de93b6518352ccb_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/models/idea_functions.php";
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


function retrieve_idea(\$DB, \$ideaname) {
  \$req = \$DB->prepare(\"SELECT id, organizer, language, ideaname, ideadesc, ideatype, ideaplace, ideaphone, level_language, DATE_FORMAT(date, '%d %b %H:%i') date, CONCAT(UCASE(LEFT(DAYNAME(ideadatetime),1)), SUBSTRING(DAYNAME(ideadatetime), 2)) ideadayname, DATE_FORMAT(ideadatetime, '%d') ideadaynumber, MONTHNAME(ideadatetime) ideamonthname, DATE_FORMAT(ideadatetime, '%Y') ideayear, DATE_FORMAT(ideadatetime, '%HH%i') ideatime FROM ideas where ideaname = ?\");
  \$req -> execute(array(\$ideaname));
  \$infos_idea = \$req->fetch();
  \$req->closeCursor();
  return (\$infos_idea);
}


function retrieve_remaining_days_idea(\$DB,\$ideaname) {
\t\$req = \$DB->prepare(\"SELECT DATEDIFF((SELECT DATE_FORMAT(ideadatetime, '%Y-%m-%d') ideaday), CURDATE()) AS DiffDate FROM ideas where ideaname = :ideaname\");
\t\$req -> execute(array(':ideaname'=>\$ideaname));
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


function check_ideauser_association(\$DB, \$ideaid, \$memberid) {
  \$req = \$DB->prepare('SELECT COUNT(*) FROM ideausers where ideaid = :ideaid AND memberid = :memberid');
  \$req -> execute(array(':ideaid'=>\$ideaid, ':memberid'=>\$memberid));
  \$nbre_entries = \$req->fetchColumn();
  \$req -> closeCursor();
  return (\$nbre_entries);
}


function idea_members_count(\$DB, \$ideaid) {
  \$req = \$DB->prepare(\"SELECT COUNT(memberid) FROM ideausers where ideaid = ?\");
  \$req -> execute(array(\$ideaid));
  \$nbre_members = \$req->fetchColumn();
  \$req->closeCursor();
  return (\$nbre_members);
}

?>
", "Gozpeak/models/idea_functions.php", "/root/Gozpeak/app/Resources/views/Gozpeak/models/idea_functions.php");
    }
}
