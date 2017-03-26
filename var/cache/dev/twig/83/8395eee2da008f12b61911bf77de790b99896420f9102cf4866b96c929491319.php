<?php

/* Gozpeak/models/postevent_functions.php */
class __TwigTemplate_92b95fadfed9a394020dff67c8e3d88602bf4a333e6e4160b79e6847e3998ff2 extends Twig_Template
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
        $__internal_2f07d571505391d6e48a5a44ac7ebea7b578eaa5ef186ccce64a5a184e063b58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f07d571505391d6e48a5a44ac7ebea7b578eaa5ef186ccce64a5a184e063b58->enter($__internal_2f07d571505391d6e48a5a44ac7ebea7b578eaa5ef186ccce64a5a184e063b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/models/postevent_functions.php"));

        $__internal_80915049d97a3e07408bba447606dfcf1298d521157b479b9f7cb61a892ab070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80915049d97a3e07408bba447606dfcf1298d521157b479b9f7cb61a892ab070->enter($__internal_80915049d97a3e07408bba447606dfcf1298d521157b479b9f7cb61a892ab070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/models/postevent_functions.php"));

        // line 1
        echo "<?php

function pseudo_exist (\$DB, \$organizer) {
  \$req = \$DB->prepare(\"SELECT COUNT(pseudo) FROM members where pseudo = ?\");
  \$req -> execute(array(\$organizer));
  \$nbre_pseudo = \$req->fetchColumn();
  \$req->closeCursor();
  return (\$nbre_pseudo);
}

function idea_exist(\$DB, \$idea_name) {
  \$req = \$DB->prepare(\"SELECT COUNT(ideaname) FROM ideas where ideaname = ?\");
  \$req -> execute(array(\$idea_name));
  \$nbre_idea_name = \$req->fetchColumn();
  \$req->closeCursor();
  return (\$nbre_idea_name);
}

function get_idea_id(\$DB, \$idea_name) {
  \$req = \$DB->prepare(\"SELECT id from ideas where ideaname = \" . \$DB->quote(\$idea_name));
  \$req->execute();
  \$idea_id = \$req->fetchColumn();
  \$req->closeCursor();
  return \$idea_id;
}

function add_idea(\$DB, \$d) {
  \$req = \$DB->prepare('INSERT INTO ideas (organizer, ideaname, ideaplace, ideadesc, ideadatetime, ideaphone, language, level_language, ideatype) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');
  \$req->execute(\$d);
  \$req->closeCursor();
}


function update_existant_idea(\$DB, \$organizer, \$ideaname, \$ideaplace, \$ideadesc, \$ideadatetime, \$ideaphone, \$language, \$level_language, \$ideatype, \$idea_id) {
  //\$idea_id = intval(\$idea_id);

  settype(\$idea_id, \"integer\");
  \$req = \$DB->prepare(\"UPDATE ideas SET organizer = \" . \$DB->quote(\$organizer) . \",
                                       ideaname = \" . \$DB->quote(\$ideaname) . \",
                                       ideaplace = \" . \$DB->quote(\$ideaplace) . \",
                                       ideadesc = \" . \$DB->quote(\$ideadesc) . \",
                                       ideadatetime = \" . \$DB->quote(\$ideadatetime) . \",
                                       ideaphone = \" . \$DB->quote(\$ideaphone) . \",
                                       language = \" . \$DB->quote(\$language) . \",
                                       level_language = \" . \$DB->quote(\$level_language) . \"
                                       where id = \" . \$idea_id);
  \$req->execute();
  \$req->closeCursor();
}


# where ideatype = \" . \$DB->quote(\$ideatype) . \" AND id = \" . \$idea_id);
// function update_existant_idea(\$DB, \$data, \$eventid) {
//   try {
//   \$req = \$DB->prepare(\"UPDATE ideas set organizer = ':organizer',
//                                         ideaname = ':ideaname',
//                                         ideaplace = ':ideaplace',
//                                         ideadesc = ':ideadesc',
//                                         ideadatetime = ':ideadatetime',
//                                         ideaphone = ':ideaphone',
//                                         language = ':language',
//                                         level_language = ':level_language'
//                                           where id = '\$eventid'\");
//   } catch (PDOException \$e) {
//     echo \$e->getMessage();
//   }
//
//   try {
//     \$req -> execute(array(':organizer'=>\$data['organizer'],
//                         ':ideaname'=>\$data['ideaname'],
//                         ':ideaplace'=>\$data['ideaplace'],
//                         ':ideadesc'=>\$data['ideadesc'],
//                         ':ideadatetime'=>\$data['ideadatetime'],
//                         ':ideaphone'=>\$data['ideaphone'],
//                         ':language'=>\$data['language'],
//                         ':level_language'=>\$data['level_language']));
//   } catch (PDOException \$e) {
//     echo \$e->getMessage();
//   }
//   \$req->closeCursor();
// }


function get_mail_organizer (\$DB, \$organizer) {
  \$req = \$DB->prepare(\"SELECT email from members where pseudo = ?\");
  \$req -> execute(array(\$organizer));
  \$mail_organizer = \$req->fetchColumn();
  \$req -> closeCursor();
  return (\$mail_organizer);
}

?>
";
        
        $__internal_2f07d571505391d6e48a5a44ac7ebea7b578eaa5ef186ccce64a5a184e063b58->leave($__internal_2f07d571505391d6e48a5a44ac7ebea7b578eaa5ef186ccce64a5a184e063b58_prof);

        
        $__internal_80915049d97a3e07408bba447606dfcf1298d521157b479b9f7cb61a892ab070->leave($__internal_80915049d97a3e07408bba447606dfcf1298d521157b479b9f7cb61a892ab070_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/models/postevent_functions.php";
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

function pseudo_exist (\$DB, \$organizer) {
  \$req = \$DB->prepare(\"SELECT COUNT(pseudo) FROM members where pseudo = ?\");
  \$req -> execute(array(\$organizer));
  \$nbre_pseudo = \$req->fetchColumn();
  \$req->closeCursor();
  return (\$nbre_pseudo);
}

function idea_exist(\$DB, \$idea_name) {
  \$req = \$DB->prepare(\"SELECT COUNT(ideaname) FROM ideas where ideaname = ?\");
  \$req -> execute(array(\$idea_name));
  \$nbre_idea_name = \$req->fetchColumn();
  \$req->closeCursor();
  return (\$nbre_idea_name);
}

function get_idea_id(\$DB, \$idea_name) {
  \$req = \$DB->prepare(\"SELECT id from ideas where ideaname = \" . \$DB->quote(\$idea_name));
  \$req->execute();
  \$idea_id = \$req->fetchColumn();
  \$req->closeCursor();
  return \$idea_id;
}

function add_idea(\$DB, \$d) {
  \$req = \$DB->prepare('INSERT INTO ideas (organizer, ideaname, ideaplace, ideadesc, ideadatetime, ideaphone, language, level_language, ideatype) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');
  \$req->execute(\$d);
  \$req->closeCursor();
}


function update_existant_idea(\$DB, \$organizer, \$ideaname, \$ideaplace, \$ideadesc, \$ideadatetime, \$ideaphone, \$language, \$level_language, \$ideatype, \$idea_id) {
  //\$idea_id = intval(\$idea_id);

  settype(\$idea_id, \"integer\");
  \$req = \$DB->prepare(\"UPDATE ideas SET organizer = \" . \$DB->quote(\$organizer) . \",
                                       ideaname = \" . \$DB->quote(\$ideaname) . \",
                                       ideaplace = \" . \$DB->quote(\$ideaplace) . \",
                                       ideadesc = \" . \$DB->quote(\$ideadesc) . \",
                                       ideadatetime = \" . \$DB->quote(\$ideadatetime) . \",
                                       ideaphone = \" . \$DB->quote(\$ideaphone) . \",
                                       language = \" . \$DB->quote(\$language) . \",
                                       level_language = \" . \$DB->quote(\$level_language) . \"
                                       where id = \" . \$idea_id);
  \$req->execute();
  \$req->closeCursor();
}


# where ideatype = \" . \$DB->quote(\$ideatype) . \" AND id = \" . \$idea_id);
// function update_existant_idea(\$DB, \$data, \$eventid) {
//   try {
//   \$req = \$DB->prepare(\"UPDATE ideas set organizer = ':organizer',
//                                         ideaname = ':ideaname',
//                                         ideaplace = ':ideaplace',
//                                         ideadesc = ':ideadesc',
//                                         ideadatetime = ':ideadatetime',
//                                         ideaphone = ':ideaphone',
//                                         language = ':language',
//                                         level_language = ':level_language'
//                                           where id = '\$eventid'\");
//   } catch (PDOException \$e) {
//     echo \$e->getMessage();
//   }
//
//   try {
//     \$req -> execute(array(':organizer'=>\$data['organizer'],
//                         ':ideaname'=>\$data['ideaname'],
//                         ':ideaplace'=>\$data['ideaplace'],
//                         ':ideadesc'=>\$data['ideadesc'],
//                         ':ideadatetime'=>\$data['ideadatetime'],
//                         ':ideaphone'=>\$data['ideaphone'],
//                         ':language'=>\$data['language'],
//                         ':level_language'=>\$data['level_language']));
//   } catch (PDOException \$e) {
//     echo \$e->getMessage();
//   }
//   \$req->closeCursor();
// }


function get_mail_organizer (\$DB, \$organizer) {
  \$req = \$DB->prepare(\"SELECT email from members where pseudo = ?\");
  \$req -> execute(array(\$organizer));
  \$mail_organizer = \$req->fetchColumn();
  \$req -> closeCursor();
  return (\$mail_organizer);
}

?>
", "Gozpeak/models/postevent_functions.php", "/root/Gozpeak/app/Resources/views/Gozpeak/models/postevent_functions.php");
    }
}
