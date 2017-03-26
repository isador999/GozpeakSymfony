<?php

/* Gozpeak/models/profile_functions.php */
class __TwigTemplate_6c0fcf53f18cc536d8900fae2c68428b4b03472505e243fb9c124f91838f7d2d extends Twig_Template
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
        $__internal_8e0c452f52d024d6ec98f49a2a0a33cf24a4e18aa7c1431e62dabc50af5512b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e0c452f52d024d6ec98f49a2a0a33cf24a4e18aa7c1431e62dabc50af5512b9->enter($__internal_8e0c452f52d024d6ec98f49a2a0a33cf24a4e18aa7c1431e62dabc50af5512b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/models/profile_functions.php"));

        $__internal_afea1496da35cefd51b44b225d12aa84dccb37983c64bc505c9a2e8d6285e42c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afea1496da35cefd51b44b225d12aa84dccb37983c64bc505c9a2e8d6285e42c->enter($__internal_afea1496da35cefd51b44b225d12aa84dccb37983c64bc505c9a2e8d6285e42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/models/profile_functions.php"));

        // line 1
        echo "<?php

function profile_info(\$DB, \$pseudo) {
\t#\$req = \$DB->prepare(\"SELECT id, pseudo, email, name, lastname, nationality, birthday, DATE_FORMAT(date, '%d') subscribedaynumber, DATE_FORMAT(date, '%M') subscribemonth, DATE_FORMAT(date, '%Y') subscribeyear, DATE_FORMAT(date, '%H:%i') subscribetime, premium from members where pseudo = ?\");
\t\$req = \$DB->prepare(\"SELECT id, pseudo, email, name, lastname, nationality, birthday,  DAYNAME(date) subscribedayname, DATE_FORMAT(date, '%d') subscribedaynumber, MONTHNAME(date) subscribemonthname, DATE_FORMAT(date, '%Y') subscribeyear, premium from members where pseudo = ?\");
\t\$req -> execute(array(\$pseudo));
\t\$infos = \$req->fetch();
\t\$req->closeCursor();
\treturn (\$infos);
}


function pseudo_exist(\$DB, \$pseudo) {
  \$req = \$DB->prepare(\"SELECT COUNT(pseudo) FROM members where pseudo = ?\");
  \$req -> execute(array(\$pseudo));
  \$nbre_pseudo = \$req->fetchColumn();
  \$req->closeCursor();
  return (\$nbre_pseudo);
}

function select_mail(\$DB, \$pseudo) {
\t\$req = \$DB->prepare(\"SELECT COUNT(email) FROM members where pseudo = :pseudo\");
  \$req -> execute(array(':pseudo'=>\$pseudo));
  \$nbre_email = \$req->fetchColumn();
  \$req->closeCursor();
  return (\$nbre_email);
}

function count_ideas(\$DB, \$pseudo) {
\t\$req = \$DB->prepare(\"SELECT COUNT(id) from ideas where organizer = ?\");
\t\$req -> execute(array(\$pseudo));
\t\$nb_events = \$req->fetchColumn();
\t\$req->closeCursor();
\treturn (\$nb_events);
}


//NOT FINISHED // THIS SQL FUNCTION MUST BE COMPLETED //
//function profile_update(\$DB, \$pseudo, \$email, \$lastname, \$name, \$nationality, \$birthdate, \$speaked_languages) {
function profile_update(\$DB, \$pseudo, \$email, \$lastname, \$name, \$nationality, \$birthdate) {
\t\$sql = \"UPDATE members SET email = \" . \$DB->quote(\$email);

\tif(!empty(\$lastname)) {
\t\t\$sql .= \", lastname = \" . \$DB->quote(\$lastname);
\t}

\tif(!empty(\$name)) {
\t\t\$sql .= \", name = \" . \$DB->quote(\$name);
\t}

\tif(!empty(\$nationality)) {
\t\t\$sql .= \", nationality = \" . \$DB->quote(\$nationality);
\t}

\tif(!empty(\$birthdate)) {
\t\t\$sql .= \", birthday = \" . \$DB->quote(\$birthdate);
\t}

\t// if(!empty(\$speaked_languages)) {
\t// \t\$sql .= \", name = \" . \$DB->quote(\$name);
\t// }
\t\$sql .= \" where pseudo = \" . \$DB->quote(\$pseudo);

\t\$req = \$DB->prepare(\$sql);
\t\$req->execute();
  \$req->closeCursor();
}



/***** Warning !  Deletion works, but deletion of user's events is not made today *****/
/***** It could be kind of : \"delete from events where organizer = 'pseudo', but we need to test \"; *****/
function profile_delete(\$DB, \$pseudo) {
\t\$req = \$DB->prepare(\"DELETE from members where pseudo = ?\");
\t\$req -> execute(array(\$pseudo));
\t\$req->closeCursor();
}


function get_last_connection(\$DB, \$pseudo) {
\t\$req = \$DB->prepare(\"SELECT last_connection from members where pseudo = :pseudo\");
\t\$req -> execute(array(':pseudo'=>\$pseudo));
\t\$connectionTime = \$req->fetchColumn();
\t\$req->closeCursor();
\treturn (\$connectionTime);
}


?>
";
        
        $__internal_8e0c452f52d024d6ec98f49a2a0a33cf24a4e18aa7c1431e62dabc50af5512b9->leave($__internal_8e0c452f52d024d6ec98f49a2a0a33cf24a4e18aa7c1431e62dabc50af5512b9_prof);

        
        $__internal_afea1496da35cefd51b44b225d12aa84dccb37983c64bc505c9a2e8d6285e42c->leave($__internal_afea1496da35cefd51b44b225d12aa84dccb37983c64bc505c9a2e8d6285e42c_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/models/profile_functions.php";
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

function profile_info(\$DB, \$pseudo) {
\t#\$req = \$DB->prepare(\"SELECT id, pseudo, email, name, lastname, nationality, birthday, DATE_FORMAT(date, '%d') subscribedaynumber, DATE_FORMAT(date, '%M') subscribemonth, DATE_FORMAT(date, '%Y') subscribeyear, DATE_FORMAT(date, '%H:%i') subscribetime, premium from members where pseudo = ?\");
\t\$req = \$DB->prepare(\"SELECT id, pseudo, email, name, lastname, nationality, birthday,  DAYNAME(date) subscribedayname, DATE_FORMAT(date, '%d') subscribedaynumber, MONTHNAME(date) subscribemonthname, DATE_FORMAT(date, '%Y') subscribeyear, premium from members where pseudo = ?\");
\t\$req -> execute(array(\$pseudo));
\t\$infos = \$req->fetch();
\t\$req->closeCursor();
\treturn (\$infos);
}


function pseudo_exist(\$DB, \$pseudo) {
  \$req = \$DB->prepare(\"SELECT COUNT(pseudo) FROM members where pseudo = ?\");
  \$req -> execute(array(\$pseudo));
  \$nbre_pseudo = \$req->fetchColumn();
  \$req->closeCursor();
  return (\$nbre_pseudo);
}

function select_mail(\$DB, \$pseudo) {
\t\$req = \$DB->prepare(\"SELECT COUNT(email) FROM members where pseudo = :pseudo\");
  \$req -> execute(array(':pseudo'=>\$pseudo));
  \$nbre_email = \$req->fetchColumn();
  \$req->closeCursor();
  return (\$nbre_email);
}

function count_ideas(\$DB, \$pseudo) {
\t\$req = \$DB->prepare(\"SELECT COUNT(id) from ideas where organizer = ?\");
\t\$req -> execute(array(\$pseudo));
\t\$nb_events = \$req->fetchColumn();
\t\$req->closeCursor();
\treturn (\$nb_events);
}


//NOT FINISHED // THIS SQL FUNCTION MUST BE COMPLETED //
//function profile_update(\$DB, \$pseudo, \$email, \$lastname, \$name, \$nationality, \$birthdate, \$speaked_languages) {
function profile_update(\$DB, \$pseudo, \$email, \$lastname, \$name, \$nationality, \$birthdate) {
\t\$sql = \"UPDATE members SET email = \" . \$DB->quote(\$email);

\tif(!empty(\$lastname)) {
\t\t\$sql .= \", lastname = \" . \$DB->quote(\$lastname);
\t}

\tif(!empty(\$name)) {
\t\t\$sql .= \", name = \" . \$DB->quote(\$name);
\t}

\tif(!empty(\$nationality)) {
\t\t\$sql .= \", nationality = \" . \$DB->quote(\$nationality);
\t}

\tif(!empty(\$birthdate)) {
\t\t\$sql .= \", birthday = \" . \$DB->quote(\$birthdate);
\t}

\t// if(!empty(\$speaked_languages)) {
\t// \t\$sql .= \", name = \" . \$DB->quote(\$name);
\t// }
\t\$sql .= \" where pseudo = \" . \$DB->quote(\$pseudo);

\t\$req = \$DB->prepare(\$sql);
\t\$req->execute();
  \$req->closeCursor();
}



/***** Warning !  Deletion works, but deletion of user's events is not made today *****/
/***** It could be kind of : \"delete from events where organizer = 'pseudo', but we need to test \"; *****/
function profile_delete(\$DB, \$pseudo) {
\t\$req = \$DB->prepare(\"DELETE from members where pseudo = ?\");
\t\$req -> execute(array(\$pseudo));
\t\$req->closeCursor();
}


function get_last_connection(\$DB, \$pseudo) {
\t\$req = \$DB->prepare(\"SELECT last_connection from members where pseudo = :pseudo\");
\t\$req -> execute(array(':pseudo'=>\$pseudo));
\t\$connectionTime = \$req->fetchColumn();
\t\$req->closeCursor();
\treturn (\$connectionTime);
}


?>
", "Gozpeak/models/profile_functions.php", "/root/Gozpeak/app/Resources/views/Gozpeak/models/profile_functions.php");
    }
}
