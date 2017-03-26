<?php

/* Gozpeak/models/connexion_functions.php */
class __TwigTemplate_2c7ea60ab850fe6710b90c3d0d33c57a0681a09ca5df02b78d417e3b2d878ed1 extends Twig_Template
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
        $__internal_aa3fee081d35b8bebc76ab1fbe1a0d77eb81be2dea3b0c5b5cf478bb938890e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa3fee081d35b8bebc76ab1fbe1a0d77eb81be2dea3b0c5b5cf478bb938890e2->enter($__internal_aa3fee081d35b8bebc76ab1fbe1a0d77eb81be2dea3b0c5b5cf478bb938890e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/models/connexion_functions.php"));

        $__internal_66a74b80bbdbadc2856382bedd28abeeaea3e3739bdd243a5bfdd32bac082e58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a74b80bbdbadc2856382bedd28abeeaea3e3739bdd243a5bfdd32bac082e58->enter($__internal_66a74b80bbdbadc2856382bedd28abeeaea3e3739bdd243a5bfdd32bac082e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/models/connexion_functions.php"));

        // line 1
        echo "<?php

function mail_exist (\$DB, \$email) {
\t\$req = \$DB->prepare(\"SELECT COUNT(email) FROM members where email = ?\");
  \$req -> execute(array(\$email));
  \$nbre_email = \$req->fetchColumn();
\t\$req->closeCursor();
  return (\$nbre_email);
}

function pseudo_exist (\$DB, \$pseudo) {
\t\$req = \$DB->prepare(\"SELECT COUNT(pseudo) FROM members where pseudo = ?\");
  \$req -> execute(array(\$pseudo));
  \$nbre_pseudo = \$req->fetchColumn();
\t\$req->closeCursor();
  return (\$nbre_pseudo);
}


function check_active_account_by_mail (\$DB, \$email) {
\t\$req = \$DB->prepare(\"SELECT active from members where email = ?\");
  \$req -> execute(array(\$email));
  \$active = \$req->fetchColumn();
\t\$req->closeCursor();
\treturn (\$active);
}

function check_active_account_by_pseudo (\$DB, \$pseudo) {
\t\$req = \$DB->prepare(\"SELECT active from members where pseudo = ?\");
  \$req -> execute(array(\$pseudo));
  \$active = \$req->fetchColumn();
\t\$req->closeCursor();
\treturn (\$active);
}

function retrieve_pass_from_pseudo (\$DB, \$pseudo) {
\t\$req = \$DB->prepare(\"SELECT password from members where pseudo = ?\");
  \$req -> execute(array(\$pseudo));
  \$hashed_dbpass = \$req->fetchColumn();
  \$req->closeCursor();
\treturn (\$hashed_dbpass);
}

function retrieve_pass_from_email (\$DB, \$email) {
\t\$req = \$DB->prepare(\"SELECT password from members where email = ?\");
  \$req -> execute(array(\$email));
  \$hashed_dbpass = \$req->fetchColumn();
  \$req->closeCursor();
\treturn (\$hashed_dbpass);
}


function select_pseudo (\$DB, \$ident) {
\t\$req = \$DB->prepare(\"SELECT pseudo from members where email = ?\");
  \$req -> execute(array(\$ident));
  \$pseudo = \$req->fetchColumn();
\t\$req -> closeCursor();
\treturn (\$pseudo);
}

function check_if_premium (\$DB, \$ident) {
\t\$req = \$DB -> prepare(\"SELECT premium from members where pseudo = :pseudo\");
\t\$req -> execute(array(':pseudo'=>\$ident));
\t\$premium = \$req -> fetchColumn();
\t\$req -> closeCursor();
\treturn (\$premium);
}



function retrieve_resetpass_fields(\$DB, \$pseudo) {
\t\$req = \$DB->prepare(\"SELECT resetpass_expiration, resetpass_allowed from members where pseudo = ?\");
\t\$req -> execute(array(\$pseudo));
\t\$fields = \$req->fetchAll(PDO::FETCH_ASSOC);
\t\$req -> closeCursor();
\treturn (\$fields);
}


function update_passwd(\$DB, \$newpass, \$pseudo) {
\t\$req = \$DB->prepare(\"UPDATE members SET password = :newpass where pseudo = :pseudo\");
\t\$req -> execute(array(':newpass'=>\$newpass, ':pseudo'=>\$pseudo));
\t\$req -> closeCursor();
}


function register_connectionTime(\$DB, \$connectionTime, \$pseudo) {
\t\$req = \$DB->prepare(\"UPDATE members SET last_connection = '\$connectionTime' where pseudo = '\$pseudo'\");
\t\$req -> execute();
\t\$req -> closeCursor();
}


?>
";
        
        $__internal_aa3fee081d35b8bebc76ab1fbe1a0d77eb81be2dea3b0c5b5cf478bb938890e2->leave($__internal_aa3fee081d35b8bebc76ab1fbe1a0d77eb81be2dea3b0c5b5cf478bb938890e2_prof);

        
        $__internal_66a74b80bbdbadc2856382bedd28abeeaea3e3739bdd243a5bfdd32bac082e58->leave($__internal_66a74b80bbdbadc2856382bedd28abeeaea3e3739bdd243a5bfdd32bac082e58_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/models/connexion_functions.php";
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

function mail_exist (\$DB, \$email) {
\t\$req = \$DB->prepare(\"SELECT COUNT(email) FROM members where email = ?\");
  \$req -> execute(array(\$email));
  \$nbre_email = \$req->fetchColumn();
\t\$req->closeCursor();
  return (\$nbre_email);
}

function pseudo_exist (\$DB, \$pseudo) {
\t\$req = \$DB->prepare(\"SELECT COUNT(pseudo) FROM members where pseudo = ?\");
  \$req -> execute(array(\$pseudo));
  \$nbre_pseudo = \$req->fetchColumn();
\t\$req->closeCursor();
  return (\$nbre_pseudo);
}


function check_active_account_by_mail (\$DB, \$email) {
\t\$req = \$DB->prepare(\"SELECT active from members where email = ?\");
  \$req -> execute(array(\$email));
  \$active = \$req->fetchColumn();
\t\$req->closeCursor();
\treturn (\$active);
}

function check_active_account_by_pseudo (\$DB, \$pseudo) {
\t\$req = \$DB->prepare(\"SELECT active from members where pseudo = ?\");
  \$req -> execute(array(\$pseudo));
  \$active = \$req->fetchColumn();
\t\$req->closeCursor();
\treturn (\$active);
}

function retrieve_pass_from_pseudo (\$DB, \$pseudo) {
\t\$req = \$DB->prepare(\"SELECT password from members where pseudo = ?\");
  \$req -> execute(array(\$pseudo));
  \$hashed_dbpass = \$req->fetchColumn();
  \$req->closeCursor();
\treturn (\$hashed_dbpass);
}

function retrieve_pass_from_email (\$DB, \$email) {
\t\$req = \$DB->prepare(\"SELECT password from members where email = ?\");
  \$req -> execute(array(\$email));
  \$hashed_dbpass = \$req->fetchColumn();
  \$req->closeCursor();
\treturn (\$hashed_dbpass);
}


function select_pseudo (\$DB, \$ident) {
\t\$req = \$DB->prepare(\"SELECT pseudo from members where email = ?\");
  \$req -> execute(array(\$ident));
  \$pseudo = \$req->fetchColumn();
\t\$req -> closeCursor();
\treturn (\$pseudo);
}

function check_if_premium (\$DB, \$ident) {
\t\$req = \$DB -> prepare(\"SELECT premium from members where pseudo = :pseudo\");
\t\$req -> execute(array(':pseudo'=>\$ident));
\t\$premium = \$req -> fetchColumn();
\t\$req -> closeCursor();
\treturn (\$premium);
}



function retrieve_resetpass_fields(\$DB, \$pseudo) {
\t\$req = \$DB->prepare(\"SELECT resetpass_expiration, resetpass_allowed from members where pseudo = ?\");
\t\$req -> execute(array(\$pseudo));
\t\$fields = \$req->fetchAll(PDO::FETCH_ASSOC);
\t\$req -> closeCursor();
\treturn (\$fields);
}


function update_passwd(\$DB, \$newpass, \$pseudo) {
\t\$req = \$DB->prepare(\"UPDATE members SET password = :newpass where pseudo = :pseudo\");
\t\$req -> execute(array(':newpass'=>\$newpass, ':pseudo'=>\$pseudo));
\t\$req -> closeCursor();
}


function register_connectionTime(\$DB, \$connectionTime, \$pseudo) {
\t\$req = \$DB->prepare(\"UPDATE members SET last_connection = '\$connectionTime' where pseudo = '\$pseudo'\");
\t\$req -> execute();
\t\$req -> closeCursor();
}


?>
", "Gozpeak/models/connexion_functions.php", "/root/Gozpeak/app/Resources/views/Gozpeak/models/connexion_functions.php");
    }
}
