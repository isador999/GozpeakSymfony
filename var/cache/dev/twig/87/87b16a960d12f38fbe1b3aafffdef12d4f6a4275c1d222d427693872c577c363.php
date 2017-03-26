<?php

/* Gozpeak/models/list_pagination_functions.php */
class __TwigTemplate_2c52e5b0a88769f0cc4efb3d62d79462ac63e0127fe163df419e089aed505201 extends Twig_Template
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
        $__internal_728b878ee1baa5a941092ba321db89c34cb2019916cad130ef0cfa5e979f9256 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_728b878ee1baa5a941092ba321db89c34cb2019916cad130ef0cfa5e979f9256->enter($__internal_728b878ee1baa5a941092ba321db89c34cb2019916cad130ef0cfa5e979f9256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/models/list_pagination_functions.php"));

        $__internal_2b511716712aa3073414eb84f77457bc3faf6f840f604312f707d4a1c317836f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b511716712aa3073414eb84f77457bc3faf6f840f604312f707d4a1c317836f->enter($__internal_2b511716712aa3073414eb84f77457bc3faf6f840f604312f707d4a1c317836f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/models/list_pagination_functions.php"));

        // line 1
        echo "<?php

function list_events_by_type(\$DB, \$eventoffset, \$eventpagination, \$eventtype, \$filteredLanguages, \$year, \$month) {
\t\$sql = \"SELECT language, organizer, eventname, eventtype, CONCAT(UCASE(LEFT(DAYNAME(eventdatetime),1)), SUBSTRING(DAYNAME(eventdatetime), 2)) eventdayname, DATE_FORMAT(eventdatetime, '%d') eventdaynumber, MONTHNAME(eventdatetime) eventmonthname, DATE_FORMAT(eventdatetime, '%H:%i') eventtime FROM events\";

\tif(!empty(\$eventtype)) {
\t\t\$sql .= \"  where eventtype = :eventtype\";
\t}

\t//If filter of languages provided
\tif(isset(\$filteredLanguages) && (!empty(\$filteredLanguages))) {
\t\t\$sql .= \" AND (language = \";

\t\t//Get last lang
\t\t\$lastlang = end(\$filteredLanguages);
\t\tforeach (\$filteredLanguages as \$lang) {
\t\t\tif(\$lang != \$lastlang) {
\t\t\t\t\$sql .= \"'\$lang' OR language = \";
\t\t\t} elseif (\$lang == \$lastlang) {
\t\t\t\t\$sql .= \"'\$lang')\";
\t\t\t}
\t\t}
\t}

\tif(!empty(\$year)) {
\t\t\$sql .= \" AND YEAR(eventdatetime) = '\$year'\";
\t}

\tif(!empty(\$month)) {
\t\t\$month = lcfirst(\$month);
\t\t\$sql .= \" AND MONTHNAME(eventdatetime) = '\$month'\";
\t}

\t\$sql .= \" ORDER BY eventdatetime asc LIMIT :eventoffset, :eventpagination\";

\t\$req = \$DB->prepare(\$sql);
\t\$req -> execute(array(':eventoffset'=>\$eventoffset, ':eventpagination'=>\$eventpagination, ':eventtype'=>\$eventtype));
\t\$events = \$req->fetchAll(PDO::FETCH_ASSOC);
\t\$req->closeCursor();
\treturn (\$events);
}


function list_ideas_by_type(\$DB, \$ideaoffset, \$ideapagination, \$ideatype, \$filteredLanguages, \$year, \$month, \$membername) {
\t\$sql = \"SELECT language, organizer, ideaname, ideatype, CONCAT(UCASE(LEFT(DAYNAME(ideadatetime),1)), SUBSTRING(DAYNAME(ideadatetime), 2)) ideadayname, DATE_FORMAT(ideadatetime, '%d') ideadaynumber, MONTHNAME(ideadatetime) ideamonthname, DATE_FORMAT(ideadatetime, '%H:%i') ideatime FROM ideas \";
\t\$args = 0;

\tif(!empty(\$ideatype)) {
\t\t\$sql .= \" where ideatype = '\$ideatype'\";
\t\t\$args = 1;
\t}

\t//If filter of languages provided
\tif(isset(\$filteredLanguages) && (!empty(\$filteredLanguages))) {
\t\t\$sql .= \" AND (language = \";
\t\t\$args = 1;

\t\t//Get last lang
\t\t\$lastlang = end(\$filteredLanguages);
\t\tforeach (\$filteredLanguages as \$lang) {
\t\t\tif(\$lang != \$lastlang) {
\t\t\t\t\$sql .= \"'\$lang' OR language = \";
\t\t\t} elseif (\$lang == \$lastlang) {
\t\t\t\t\$sql .= \"'\$lang')\";
\t\t\t}
\t\t}
\t}

\tif(!empty(\$membername)) {
\t\tif(\$args > 0) {
\t\t\t\$sql .= \" AND organizer = '\$membername'\";
\t\t} else {
\t\t\t\$sql .= \" where organizer = '\$membername'\";
\t\t}
\t}

\tif(!empty(\$year)) {
\t\t\$sql .= \" AND YEAR(ideadatetime) = '\$year'\";
\t}
\tif(!empty(\$month)) {
\t\t\$month = lcfirst(\$month);
\t\t\$sql .= \" AND MONTHNAME(ideadatetime) = '\$month'\";
\t}

\t\$sql .= \" ORDER BY ideadatetime asc LIMIT :ideaoffset, :ideapagination\";

\t\$req = \$DB->prepare(\$sql);
\t\$req -> execute(array(':ideaoffset'=>\$ideaoffset, ':ideapagination'=>\$ideapagination));
\t\$ideas = \$req->fetchAll(PDO::FETCH_ASSOC);
\t\$req->closeCursor();
\treturn (\$ideas);
}


function count_events_by_type (\$DB, \$eventtype, \$filteredLanguages, \$year, \$month) {
\t\$sql = \"SELECT COUNT(*) AS nb_total_events from events where eventtype = :eventtype\";

\tif(isset(\$filteredLanguages) && (!empty(\$filteredLanguages))) {
\t\t\$sql .= \" AND (language = \";

\t\t//Get last lang
\t\t\$lastlang = end(\$filteredLanguages);
\t\tforeach (\$filteredLanguages as \$lang) {
\t\t\tif(\$lang != \$lastlang) {
\t\t\t\t\$sql .= \"'\$lang' OR language = \";
\t\t\t} elseif (\$lang == \$lastlang) {
\t\t\t\t\$sql .= \"'\$lang')\";
\t\t\t}
\t\t}
\t}

\t\$sql .= \" AND YEAR(eventdatetime) = '\$year'\";

\tif(!empty(\$month)) {
\t\t\$month = lcfirst(\$month);
\t\t\$sql .= \" AND MONTHNAME(eventdatetime) = '\$month'\";
\t}

\t\$req = \$DB->prepare(\$sql);
\t\$req -> execute(array(':eventtype'=>\$eventtype));
  \$nb_total_events = \$req->fetchColumn();
  \$req->closeCursor();
  return (\$nb_total_events);
}


function count_ideas_by_type (\$DB, \$ideatype, \$filteredLanguages, \$year, \$month, \$membername) {
\t\$sql = \"SELECT COUNT(*) AS nb_total_ideas from ideas \";
\t\$args = 0;

\tif(!empty(\$ideatype)) {
\t\t\$sql .= \"where ideatype = '\$ideatype'\";
\t\t\$args = 1;
\t}

\tif(isset(\$filteredLanguages) && (!empty(\$filteredLanguages))) {
\t\t\$sql .= \" AND (language = \";
\t\t\$args = 1;

\t\t//Get last lang
\t\t\$lastlang = end(\$filteredLanguages);
\t\tforeach (\$filteredLanguages as \$lang) {
\t\t\tif(\$lang != \$lastlang) {
\t\t\t\t\$sql .= \"'\$lang' OR language = \";
\t\t\t} elseif (\$lang == \$lastlang) {
\t\t\t\t\$sql .= \"'\$lang')\";
\t\t\t}
\t\t}
\t}

\tif(!empty(\$membername)) {
\t\tif (\$args > 0) {
\t\t\t\$sql .= \" AND organizer = '\$membername'\";
\t\t} else {
\t\t\t\$sql .= \" where organizer = '\$membername'\";
\t\t}
\t}

\t\$sql .= \" AND YEAR(ideadatetime) = '\$year'\";

\tif(!empty(\$month)) {
\t\t\$month = lcfirst(\$month);
\t\t\$sql .= \" AND MONTHNAME(ideadatetime) = '\$month'\";
\t}

\t\$req = \$DB->prepare(\$sql);
\t//\$req -> execute(array(':ideatype'=>\$ideatype));
\t\$req -> execute();

  \$nb_total_ideas = \$req->fetchColumn();
  \$req->closeCursor();
  return (\$nb_total_ideas);
}

?>
";
        
        $__internal_728b878ee1baa5a941092ba321db89c34cb2019916cad130ef0cfa5e979f9256->leave($__internal_728b878ee1baa5a941092ba321db89c34cb2019916cad130ef0cfa5e979f9256_prof);

        
        $__internal_2b511716712aa3073414eb84f77457bc3faf6f840f604312f707d4a1c317836f->leave($__internal_2b511716712aa3073414eb84f77457bc3faf6f840f604312f707d4a1c317836f_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/models/list_pagination_functions.php";
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

function list_events_by_type(\$DB, \$eventoffset, \$eventpagination, \$eventtype, \$filteredLanguages, \$year, \$month) {
\t\$sql = \"SELECT language, organizer, eventname, eventtype, CONCAT(UCASE(LEFT(DAYNAME(eventdatetime),1)), SUBSTRING(DAYNAME(eventdatetime), 2)) eventdayname, DATE_FORMAT(eventdatetime, '%d') eventdaynumber, MONTHNAME(eventdatetime) eventmonthname, DATE_FORMAT(eventdatetime, '%H:%i') eventtime FROM events\";

\tif(!empty(\$eventtype)) {
\t\t\$sql .= \"  where eventtype = :eventtype\";
\t}

\t//If filter of languages provided
\tif(isset(\$filteredLanguages) && (!empty(\$filteredLanguages))) {
\t\t\$sql .= \" AND (language = \";

\t\t//Get last lang
\t\t\$lastlang = end(\$filteredLanguages);
\t\tforeach (\$filteredLanguages as \$lang) {
\t\t\tif(\$lang != \$lastlang) {
\t\t\t\t\$sql .= \"'\$lang' OR language = \";
\t\t\t} elseif (\$lang == \$lastlang) {
\t\t\t\t\$sql .= \"'\$lang')\";
\t\t\t}
\t\t}
\t}

\tif(!empty(\$year)) {
\t\t\$sql .= \" AND YEAR(eventdatetime) = '\$year'\";
\t}

\tif(!empty(\$month)) {
\t\t\$month = lcfirst(\$month);
\t\t\$sql .= \" AND MONTHNAME(eventdatetime) = '\$month'\";
\t}

\t\$sql .= \" ORDER BY eventdatetime asc LIMIT :eventoffset, :eventpagination\";

\t\$req = \$DB->prepare(\$sql);
\t\$req -> execute(array(':eventoffset'=>\$eventoffset, ':eventpagination'=>\$eventpagination, ':eventtype'=>\$eventtype));
\t\$events = \$req->fetchAll(PDO::FETCH_ASSOC);
\t\$req->closeCursor();
\treturn (\$events);
}


function list_ideas_by_type(\$DB, \$ideaoffset, \$ideapagination, \$ideatype, \$filteredLanguages, \$year, \$month, \$membername) {
\t\$sql = \"SELECT language, organizer, ideaname, ideatype, CONCAT(UCASE(LEFT(DAYNAME(ideadatetime),1)), SUBSTRING(DAYNAME(ideadatetime), 2)) ideadayname, DATE_FORMAT(ideadatetime, '%d') ideadaynumber, MONTHNAME(ideadatetime) ideamonthname, DATE_FORMAT(ideadatetime, '%H:%i') ideatime FROM ideas \";
\t\$args = 0;

\tif(!empty(\$ideatype)) {
\t\t\$sql .= \" where ideatype = '\$ideatype'\";
\t\t\$args = 1;
\t}

\t//If filter of languages provided
\tif(isset(\$filteredLanguages) && (!empty(\$filteredLanguages))) {
\t\t\$sql .= \" AND (language = \";
\t\t\$args = 1;

\t\t//Get last lang
\t\t\$lastlang = end(\$filteredLanguages);
\t\tforeach (\$filteredLanguages as \$lang) {
\t\t\tif(\$lang != \$lastlang) {
\t\t\t\t\$sql .= \"'\$lang' OR language = \";
\t\t\t} elseif (\$lang == \$lastlang) {
\t\t\t\t\$sql .= \"'\$lang')\";
\t\t\t}
\t\t}
\t}

\tif(!empty(\$membername)) {
\t\tif(\$args > 0) {
\t\t\t\$sql .= \" AND organizer = '\$membername'\";
\t\t} else {
\t\t\t\$sql .= \" where organizer = '\$membername'\";
\t\t}
\t}

\tif(!empty(\$year)) {
\t\t\$sql .= \" AND YEAR(ideadatetime) = '\$year'\";
\t}
\tif(!empty(\$month)) {
\t\t\$month = lcfirst(\$month);
\t\t\$sql .= \" AND MONTHNAME(ideadatetime) = '\$month'\";
\t}

\t\$sql .= \" ORDER BY ideadatetime asc LIMIT :ideaoffset, :ideapagination\";

\t\$req = \$DB->prepare(\$sql);
\t\$req -> execute(array(':ideaoffset'=>\$ideaoffset, ':ideapagination'=>\$ideapagination));
\t\$ideas = \$req->fetchAll(PDO::FETCH_ASSOC);
\t\$req->closeCursor();
\treturn (\$ideas);
}


function count_events_by_type (\$DB, \$eventtype, \$filteredLanguages, \$year, \$month) {
\t\$sql = \"SELECT COUNT(*) AS nb_total_events from events where eventtype = :eventtype\";

\tif(isset(\$filteredLanguages) && (!empty(\$filteredLanguages))) {
\t\t\$sql .= \" AND (language = \";

\t\t//Get last lang
\t\t\$lastlang = end(\$filteredLanguages);
\t\tforeach (\$filteredLanguages as \$lang) {
\t\t\tif(\$lang != \$lastlang) {
\t\t\t\t\$sql .= \"'\$lang' OR language = \";
\t\t\t} elseif (\$lang == \$lastlang) {
\t\t\t\t\$sql .= \"'\$lang')\";
\t\t\t}
\t\t}
\t}

\t\$sql .= \" AND YEAR(eventdatetime) = '\$year'\";

\tif(!empty(\$month)) {
\t\t\$month = lcfirst(\$month);
\t\t\$sql .= \" AND MONTHNAME(eventdatetime) = '\$month'\";
\t}

\t\$req = \$DB->prepare(\$sql);
\t\$req -> execute(array(':eventtype'=>\$eventtype));
  \$nb_total_events = \$req->fetchColumn();
  \$req->closeCursor();
  return (\$nb_total_events);
}


function count_ideas_by_type (\$DB, \$ideatype, \$filteredLanguages, \$year, \$month, \$membername) {
\t\$sql = \"SELECT COUNT(*) AS nb_total_ideas from ideas \";
\t\$args = 0;

\tif(!empty(\$ideatype)) {
\t\t\$sql .= \"where ideatype = '\$ideatype'\";
\t\t\$args = 1;
\t}

\tif(isset(\$filteredLanguages) && (!empty(\$filteredLanguages))) {
\t\t\$sql .= \" AND (language = \";
\t\t\$args = 1;

\t\t//Get last lang
\t\t\$lastlang = end(\$filteredLanguages);
\t\tforeach (\$filteredLanguages as \$lang) {
\t\t\tif(\$lang != \$lastlang) {
\t\t\t\t\$sql .= \"'\$lang' OR language = \";
\t\t\t} elseif (\$lang == \$lastlang) {
\t\t\t\t\$sql .= \"'\$lang')\";
\t\t\t}
\t\t}
\t}

\tif(!empty(\$membername)) {
\t\tif (\$args > 0) {
\t\t\t\$sql .= \" AND organizer = '\$membername'\";
\t\t} else {
\t\t\t\$sql .= \" where organizer = '\$membername'\";
\t\t}
\t}

\t\$sql .= \" AND YEAR(ideadatetime) = '\$year'\";

\tif(!empty(\$month)) {
\t\t\$month = lcfirst(\$month);
\t\t\$sql .= \" AND MONTHNAME(ideadatetime) = '\$month'\";
\t}

\t\$req = \$DB->prepare(\$sql);
\t//\$req -> execute(array(':ideatype'=>\$ideatype));
\t\$req -> execute();

  \$nb_total_ideas = \$req->fetchColumn();
  \$req->closeCursor();
  return (\$nb_total_ideas);
}

?>
", "Gozpeak/models/list_pagination_functions.php", "/root/Gozpeak/app/Resources/views/Gozpeak/models/list_pagination_functions.php");
    }
}
