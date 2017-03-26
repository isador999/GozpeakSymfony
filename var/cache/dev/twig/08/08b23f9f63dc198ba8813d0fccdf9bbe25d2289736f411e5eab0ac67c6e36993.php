<?php

/* Gozpeak/models/eventidea_member_functions.php */
class __TwigTemplate_997f20b48edbcbd0aea8ebbb3a8222deef7df349f31a622dfa0a7fc85fedbac8 extends Twig_Template
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
        $__internal_1b41f140e043c00e19bdd6f32a2b6e47f52fb47f92269c3134de6118f1b4a14e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b41f140e043c00e19bdd6f32a2b6e47f52fb47f92269c3134de6118f1b4a14e->enter($__internal_1b41f140e043c00e19bdd6f32a2b6e47f52fb47f92269c3134de6118f1b4a14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/models/eventidea_member_functions.php"));

        $__internal_58940ac6eb29dfc18729c5c6071d84e21cc9da91b269ad7f6396a5b1364587ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58940ac6eb29dfc18729c5c6071d84e21cc9da91b269ad7f6396a5b1364587ac->enter($__internal_58940ac6eb29dfc18729c5c6071d84e21cc9da91b269ad7f6396a5b1364587ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/models/eventidea_member_functions.php"));

        // line 1
        echo "<?php

function retrieve_event(\$DB, \$eventname) {
  \$req = \$DB->prepare(\"SELECT id, eventdatetime, NOW() AS NowDate, eventtype FROM events where eventname = ?\");
  \$req -> execute(array(\$eventname));
  \$infos_event = \$req->fetch();
  \$req->closeCursor();
  return (\$infos_event);
}


function retrieve_userid(\$DB, \$pseudo) {
  \$req = \$DB->prepare(\"SELECT id from members where pseudo = ?\");
  \$req -> execute(array(\$pseudo));
  \$userid = \$req->fetchColumn();
  \$req->closeCursor();
  return (\$userid);
}



/***** Functions to add/delete in eventusers table *****/
function add_eventuser_association(\$DB, \$data_eventusers) {
  \$req = \$DB->prepare('INSERT INTO eventusers (eventid, memberid) VALUES (?, ?)');
  \$req->execute(\$data_eventusers);
  \$req->closeCursor();
}


function del_eventuser_association(\$DB, \$data_eventusers) {
  \$req = \$DB->prepare('DELETE FROM eventusers where eventid = ? AND memberid = ?');
  \$req->execute(\$data_eventusers);
  \$req->closeCursor();
}


function check_eventuser_association(\$DB, \$eventid, \$memberid) {
\t\$req = \$DB->prepare('SELECT COUNT(*) FROM eventusers where eventid = :eventid AND memberid = :memberid');
\t\$req -> execute(array(':eventid'=>\$eventid, ':memberid'=>\$memberid));
\t\$nbre_entries = \$req->fetchColumn();
  \$req -> closeCursor();
\treturn (\$nbre_entries);
}




/***** Functions to add/delete in ideausers table *****/
function add_ideauser_association(\$DB, \$data_ideausers) {
  \$req = \$DB->prepare('INSERT INTO ideausers (ideaid, memberid) VALUES (?, ?)');
  \$req->execute(\$data_ideausers);
  \$req->closeCursor();
}


function del_ideauser_association(\$DB, \$data_ideausers) {
  \$req = \$DB->prepare('DELETE FROM ideausers where ideaid = ? AND memberid = ?');
  \$req->execute(\$data_ideausers);
  \$req->closeCursor();
}


function check_ideauser_association(\$DB, \$ideaid, \$memberid) {
\t\$req = \$DB->prepare('SELECT COUNT(*) FROM ideausers where ideaid = :ideaid AND memberid = :memberid');
\t\$req -> execute(array(':ideaid'=>\$ideaid, ':memberid'=>\$memberid));
\t\$nbre_entries = \$req->fetchColumn();
  \$req -> closeCursor();
\treturn (\$nbre_entries);
}


function retrieve_idea(\$DB, \$ideaname) {
  \$req = \$DB->prepare(\"SELECT id, ideadatetime, SYSDATE() AS NowDate, ideatype FROM ideas where ideaname = ?\");
  \$req -> execute(array(\$ideaname));
  \$infos_idea = \$req->fetch();
  \$req->closeCursor();
  return (\$infos_idea);
}

?>
";
        
        $__internal_1b41f140e043c00e19bdd6f32a2b6e47f52fb47f92269c3134de6118f1b4a14e->leave($__internal_1b41f140e043c00e19bdd6f32a2b6e47f52fb47f92269c3134de6118f1b4a14e_prof);

        
        $__internal_58940ac6eb29dfc18729c5c6071d84e21cc9da91b269ad7f6396a5b1364587ac->leave($__internal_58940ac6eb29dfc18729c5c6071d84e21cc9da91b269ad7f6396a5b1364587ac_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/models/eventidea_member_functions.php";
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
  \$req = \$DB->prepare(\"SELECT id, eventdatetime, NOW() AS NowDate, eventtype FROM events where eventname = ?\");
  \$req -> execute(array(\$eventname));
  \$infos_event = \$req->fetch();
  \$req->closeCursor();
  return (\$infos_event);
}


function retrieve_userid(\$DB, \$pseudo) {
  \$req = \$DB->prepare(\"SELECT id from members where pseudo = ?\");
  \$req -> execute(array(\$pseudo));
  \$userid = \$req->fetchColumn();
  \$req->closeCursor();
  return (\$userid);
}



/***** Functions to add/delete in eventusers table *****/
function add_eventuser_association(\$DB, \$data_eventusers) {
  \$req = \$DB->prepare('INSERT INTO eventusers (eventid, memberid) VALUES (?, ?)');
  \$req->execute(\$data_eventusers);
  \$req->closeCursor();
}


function del_eventuser_association(\$DB, \$data_eventusers) {
  \$req = \$DB->prepare('DELETE FROM eventusers where eventid = ? AND memberid = ?');
  \$req->execute(\$data_eventusers);
  \$req->closeCursor();
}


function check_eventuser_association(\$DB, \$eventid, \$memberid) {
\t\$req = \$DB->prepare('SELECT COUNT(*) FROM eventusers where eventid = :eventid AND memberid = :memberid');
\t\$req -> execute(array(':eventid'=>\$eventid, ':memberid'=>\$memberid));
\t\$nbre_entries = \$req->fetchColumn();
  \$req -> closeCursor();
\treturn (\$nbre_entries);
}




/***** Functions to add/delete in ideausers table *****/
function add_ideauser_association(\$DB, \$data_ideausers) {
  \$req = \$DB->prepare('INSERT INTO ideausers (ideaid, memberid) VALUES (?, ?)');
  \$req->execute(\$data_ideausers);
  \$req->closeCursor();
}


function del_ideauser_association(\$DB, \$data_ideausers) {
  \$req = \$DB->prepare('DELETE FROM ideausers where ideaid = ? AND memberid = ?');
  \$req->execute(\$data_ideausers);
  \$req->closeCursor();
}


function check_ideauser_association(\$DB, \$ideaid, \$memberid) {
\t\$req = \$DB->prepare('SELECT COUNT(*) FROM ideausers where ideaid = :ideaid AND memberid = :memberid');
\t\$req -> execute(array(':ideaid'=>\$ideaid, ':memberid'=>\$memberid));
\t\$nbre_entries = \$req->fetchColumn();
  \$req -> closeCursor();
\treturn (\$nbre_entries);
}


function retrieve_idea(\$DB, \$ideaname) {
  \$req = \$DB->prepare(\"SELECT id, ideadatetime, SYSDATE() AS NowDate, ideatype FROM ideas where ideaname = ?\");
  \$req -> execute(array(\$ideaname));
  \$infos_idea = \$req->fetch();
  \$req->closeCursor();
  return (\$infos_idea);
}

?>
", "Gozpeak/models/eventidea_member_functions.php", "/root/Gozpeak/app/Resources/views/Gozpeak/models/eventidea_member_functions.php");
    }
}
