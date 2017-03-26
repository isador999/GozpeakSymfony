<?php

/* Gozpeak/models/old_listfunctions.php */
class __TwigTemplate_86a71a4153d2cee277ab47f49675c8108621648b2ae2519d1b7be8934f637f9a extends Twig_Template
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
        $__internal_7d7145fd81db24143b186b2fe1f40d2ebd5f52b5ce77a6a711a0b7d7b995e223 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d7145fd81db24143b186b2fe1f40d2ebd5f52b5ce77a6a711a0b7d7b995e223->enter($__internal_7d7145fd81db24143b186b2fe1f40d2ebd5f52b5ce77a6a711a0b7d7b995e223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/models/old_listfunctions.php"));

        $__internal_8d82eee21a4962426c5178c6b8f350be43e0e3a6c3eec6e15cbcc4ebafe1a54c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d82eee21a4962426c5178c6b8f350be43e0e3a6c3eec6e15cbcc4ebafe1a54c->enter($__internal_8d82eee21a4962426c5178c6b8f350be43e0e3a6c3eec6e15cbcc4ebafe1a54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/models/old_listfunctions.php"));

        // line 1
        echo "<?php

function retrieve_events_by_type (\$DB, \$type, \$language) {
\t#\$sql = \"SELECT organizer, language, eventname, eventtype, eventplace, eventhour, eventminutes FROM events where eventtype = ?\";
\t\$sql = \"SELECT language, organizer, eventname, eventtype, DATE_FORMAT(eventdatetime, '%a %b %d') eventday, DATE_FORMAT(eventdatetime, '%H:%i') eventtime FROM events where eventtype = ?\";
\t\$exec_array = array(\$type);

\tif (!empty(\$language)) { 
\t\t\$place_holders = str_repeat('?,', count(\$language)-1) . '?';
\t\t\$sql .= \" AND language IN (\$place_holders)\";
\t\t\$exec_array = array_merge(\$exec_array, \$language);
\t}

\tif (!empty(\$date)) {
\t\t#\$sql .= ' AND eventdate = ?';
\t\t\$sql .= ' AND date = ?';
\t\t\$exec_array = array_merge(\$exec_array, array(\$date));
\t}

\t\$sql .= \" ORDER BY eventday desc\";
\t\$req = \$DB->prepare(\$sql);

\t\$req -> execute(\$exec_array);
        \$events = \$req->fetchAll(PDO::FETCH_ASSOC);
\t\$req->closeCursor();
\treturn (\$events);
}




function retrieve_ideas_by_type (\$DB, \$type, \$language, \$date) {
        #\$sql = \"SELECT organizer, ideaname, ideaplace, language, ideadate, ideahour, ideaminutes FROM ideas where ideatype = ?\";
\t\$sql = \"SELECT language, organizer, ideaname, ideatype, DATE_FORMAT(ideadatetime, '%a %b %d') ideaday, DATE_FORMAT(ideadatetime, '%H:%i') ideatime FROM ideas where ideatype = ?\";
        \$exec_array = array(\$type);

        if (!empty(\$language)) {
                \$place_holders = str_repeat('?,', count(\$language)-1) . '?';
                \$sql .= \" AND language IN (\$place_holders)\";
                \$exec_array = array_merge(\$exec_array, \$language);
        }

        if (!empty(\$date)) {
                \$sql .= ' AND date = ?';
                \$exec_array = array_merge(\$exec_array, array(\$date));
        }

\t\$sql .= \" ORDER BY ideaday desc\";
        \$req = \$DB->prepare(\$sql);
        \$req -> execute(\$exec_array);
        \$ideas = \$req->fetchAll(PDO::FETCH_ASSOC);
        \$req->closeCursor();
        return (\$ideas);
}


?>
";
        
        $__internal_7d7145fd81db24143b186b2fe1f40d2ebd5f52b5ce77a6a711a0b7d7b995e223->leave($__internal_7d7145fd81db24143b186b2fe1f40d2ebd5f52b5ce77a6a711a0b7d7b995e223_prof);

        
        $__internal_8d82eee21a4962426c5178c6b8f350be43e0e3a6c3eec6e15cbcc4ebafe1a54c->leave($__internal_8d82eee21a4962426c5178c6b8f350be43e0e3a6c3eec6e15cbcc4ebafe1a54c_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/models/old_listfunctions.php";
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

function retrieve_events_by_type (\$DB, \$type, \$language) {
\t#\$sql = \"SELECT organizer, language, eventname, eventtype, eventplace, eventhour, eventminutes FROM events where eventtype = ?\";
\t\$sql = \"SELECT language, organizer, eventname, eventtype, DATE_FORMAT(eventdatetime, '%a %b %d') eventday, DATE_FORMAT(eventdatetime, '%H:%i') eventtime FROM events where eventtype = ?\";
\t\$exec_array = array(\$type);

\tif (!empty(\$language)) { 
\t\t\$place_holders = str_repeat('?,', count(\$language)-1) . '?';
\t\t\$sql .= \" AND language IN (\$place_holders)\";
\t\t\$exec_array = array_merge(\$exec_array, \$language);
\t}

\tif (!empty(\$date)) {
\t\t#\$sql .= ' AND eventdate = ?';
\t\t\$sql .= ' AND date = ?';
\t\t\$exec_array = array_merge(\$exec_array, array(\$date));
\t}

\t\$sql .= \" ORDER BY eventday desc\";
\t\$req = \$DB->prepare(\$sql);

\t\$req -> execute(\$exec_array);
        \$events = \$req->fetchAll(PDO::FETCH_ASSOC);
\t\$req->closeCursor();
\treturn (\$events);
}




function retrieve_ideas_by_type (\$DB, \$type, \$language, \$date) {
        #\$sql = \"SELECT organizer, ideaname, ideaplace, language, ideadate, ideahour, ideaminutes FROM ideas where ideatype = ?\";
\t\$sql = \"SELECT language, organizer, ideaname, ideatype, DATE_FORMAT(ideadatetime, '%a %b %d') ideaday, DATE_FORMAT(ideadatetime, '%H:%i') ideatime FROM ideas where ideatype = ?\";
        \$exec_array = array(\$type);

        if (!empty(\$language)) {
                \$place_holders = str_repeat('?,', count(\$language)-1) . '?';
                \$sql .= \" AND language IN (\$place_holders)\";
                \$exec_array = array_merge(\$exec_array, \$language);
        }

        if (!empty(\$date)) {
                \$sql .= ' AND date = ?';
                \$exec_array = array_merge(\$exec_array, array(\$date));
        }

\t\$sql .= \" ORDER BY ideaday desc\";
        \$req = \$DB->prepare(\$sql);
        \$req -> execute(\$exec_array);
        \$ideas = \$req->fetchAll(PDO::FETCH_ASSOC);
        \$req->closeCursor();
        return (\$ideas);
}


?>
", "Gozpeak/models/old_listfunctions.php", "/root/Gozpeak/app/Resources/views/Gozpeak/models/old_listfunctions.php");
    }
}
