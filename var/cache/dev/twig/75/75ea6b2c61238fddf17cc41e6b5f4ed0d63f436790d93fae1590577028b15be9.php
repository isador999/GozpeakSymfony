<?php

/* Gozpeak/controllers/updateListing.php */
class __TwigTemplate_8ff5f6e5b4170f1c8d1110c41a2aeab849bde1780c9764c4105e0e47716c1e3d extends Twig_Template
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
        $__internal_46718b358b2c23bfe60bd99c54799fa5bd5152735f1d3b7b6cc83c72eed4e7d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46718b358b2c23bfe60bd99c54799fa5bd5152735f1d3b7b6cc83c72eed4e7d6->enter($__internal_46718b358b2c23bfe60bd99c54799fa5bd5152735f1d3b7b6cc83c72eed4e7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/updateListing.php"));

        $__internal_3608de6009e2eae4cec029b108a0ced8cbcde931ff56ade5b22c0d906f69a8b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3608de6009e2eae4cec029b108a0ced8cbcde931ff56ade5b22c0d906f69a8b8->enter($__internal_3608de6009e2eae4cec029b108a0ced8cbcde931ff56ade5b22c0d906f69a8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/updateListing.php"));

        // line 1
        echo "<?php

session_start();

require_once('./language.php');
require_once('./lib/sessions_init.php');
require_once('./lib/check_strings.php');
require_once('../models/dbconnect.php');
require_once('../models/list_pagination_functions.php');

if(\$_GET) {
  \$query              = isset(\$_GET['query']) ? \$_GET['query'] : '';
  \$languages          = isset(\$_GET['languages']) ? \$_GET['languages'] : '';
  \$picked_eventyear   = isset(\$_GET['eventyear']) ? \$_GET['eventyear'] : '';
  \$picked_ideayear    = isset(\$_GET['ideayear']) ? \$_GET['ideayear'] : '';

  \$picked_eventmonth   = isset(\$_GET['eventmonth']) ? \$_GET['eventmonth'] : '';
  \$picked_ideamonth    = isset(\$_GET['ideamonth']) ? \$_GET['ideamonth'] : '';

  \$eventpage          = isset(\$_GET['eventpage']) ? \$_GET['eventpage'] : '';
  \$ideapage           = isset(\$_GET['ideapage']) ? \$_GET['ideapage'] : '';
  \$membername         = isset(\$_GET['membername']) ? \$_GET['membername'] : '';
  \$pagination_events  = isset(\$_GET['pagination_event']) ? \$_GET['pagination_event'] : '';
  \$pagination_ideas   = isset(\$_GET['pagination_idea']) ? \$_GET['pagination_idea'] : '';

  //Set array \$languages without comma
  if(!empty(\$languages)) {
  \t\$languages = explode(',', \$languages);
  } else {
  \t\$languages = \"\";
  }


  if(!empty(\$picked_eventyear) OR (!empty(\$picked_eventmonth)) OR (!empty(\$pagination_events))) {

    if (\$picked_eventmonth == \$list[\$_SESSION['language']]['monthpicker']['option'][12]['entry']) {
      \$picked_eventmonth = \"\";
      //unset(\$picked_eventmonth);
    }

    \$nb_events = count_events_by_type(\$DB, \$query, \$languages, \$picked_eventyear, \$picked_eventmonth);

    \$nb_rows_per_page = 15;
    // Nombre de pages à afficher
    \$events_total_pages = ceil(\$nb_events / \$nb_rows_per_page);

    if (!empty(\$eventpage) && (is_numeric(\$eventpage))) {
      \$events_current_page = \$eventpage;
    } else {
      \$events_current_page = 1;
    }

    // if event current page is greater than total pages...
    if (\$events_current_page > \$events_total_pages) {
      // set current page to last page
      \$events_current_page = \$events_total_pages;
    } // end if
    // if current page is less than first page...
    if (\$events_current_page < 1) {
      // set current page to first page
      \$events_current_page = 1;
    } // end if

    // the offset of the list, based on current page
    \$events_offset = (\$events_current_page - 1) * \$nb_rows_per_page;

    //Send response to Ajax
    //If pagination, Ajax has requested nb_pages and current pages only.
    //Else, Ajax needs the events list.
    if (\$pagination_events == 'true' ) {
      \$PaginateResponse = array('current_page' => \$events_current_page, 'total_pages' => \$events_total_pages);
      echo json_encode(\$PaginateResponse);
    } else {
      \$events = list_events_by_type(\$DB, \$events_offset, \$nb_rows_per_page, \$query, \$languages, \$picked_eventyear, \$picked_eventmonth);
      echo json_encode(\$events);
    }

  } else if (!empty(\$picked_ideayear) OR (!empty(\$picked_ideamonth)) OR (!empty(\$pagination_ideas)) OR (!empty(\$membername))) {

    if (\$picked_ideamonth == \$list[\$_SESSION['language']]['monthpicker']['option'][12]['entry']) {
      \$picked_ideamonth = \"\";
    }

    \$nb_ideas = count_ideas_by_type(\$DB, \$query, \$languages, \$picked_ideayear, \$picked_ideamonth, \$membername);
    \$nb_rows_per_page = 15;
    // Nombre de pages à afficher
    \$ideas_total_pages = ceil(\$nb_ideas / \$nb_rows_per_page);

    if (!empty(\$ideapage) && (is_numeric(\$ideapage))) {
      \$ideas_current_page = \$ideapage;
    } else {
      \$ideas_current_page = 1;
    }

    // if idea current page is greater than total pages...
    if (\$ideas_current_page > \$ideas_total_pages) {
      // set current page to last page
      \$ideas_current_page = \$ideas_total_pages;
    } // end if
    // if current page is less than first page...
    if (\$ideas_current_page < 1) {
      // set current page to first page
      \$ideas_current_page = 1;
    } // end if

    // the offset of the list, based on current page
    \$ideas_offset = (\$ideas_current_page - 1) * \$nb_rows_per_page;

    //Send response to Ajax
    if (\$pagination_ideas == 'true' ) {
      \$PaginateResponse = array('current_page' => \$ideas_current_page, 'total_pages' => \$ideas_total_pages, 'nb_ideas' => \$nb_ideas);
      echo json_encode(\$PaginateResponse);
    } else {
      \$ideas = list_ideas_by_type(\$DB, \$ideas_offset, \$nb_rows_per_page, \$query, \$languages, \$picked_ideayear, \$picked_ideamonth, \$membername);
      echo json_encode(\$ideas);
    }
  }
}

?>
";
        
        $__internal_46718b358b2c23bfe60bd99c54799fa5bd5152735f1d3b7b6cc83c72eed4e7d6->leave($__internal_46718b358b2c23bfe60bd99c54799fa5bd5152735f1d3b7b6cc83c72eed4e7d6_prof);

        
        $__internal_3608de6009e2eae4cec029b108a0ced8cbcde931ff56ade5b22c0d906f69a8b8->leave($__internal_3608de6009e2eae4cec029b108a0ced8cbcde931ff56ade5b22c0d906f69a8b8_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/updateListing.php";
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

require_once('./language.php');
require_once('./lib/sessions_init.php');
require_once('./lib/check_strings.php');
require_once('../models/dbconnect.php');
require_once('../models/list_pagination_functions.php');

if(\$_GET) {
  \$query              = isset(\$_GET['query']) ? \$_GET['query'] : '';
  \$languages          = isset(\$_GET['languages']) ? \$_GET['languages'] : '';
  \$picked_eventyear   = isset(\$_GET['eventyear']) ? \$_GET['eventyear'] : '';
  \$picked_ideayear    = isset(\$_GET['ideayear']) ? \$_GET['ideayear'] : '';

  \$picked_eventmonth   = isset(\$_GET['eventmonth']) ? \$_GET['eventmonth'] : '';
  \$picked_ideamonth    = isset(\$_GET['ideamonth']) ? \$_GET['ideamonth'] : '';

  \$eventpage          = isset(\$_GET['eventpage']) ? \$_GET['eventpage'] : '';
  \$ideapage           = isset(\$_GET['ideapage']) ? \$_GET['ideapage'] : '';
  \$membername         = isset(\$_GET['membername']) ? \$_GET['membername'] : '';
  \$pagination_events  = isset(\$_GET['pagination_event']) ? \$_GET['pagination_event'] : '';
  \$pagination_ideas   = isset(\$_GET['pagination_idea']) ? \$_GET['pagination_idea'] : '';

  //Set array \$languages without comma
  if(!empty(\$languages)) {
  \t\$languages = explode(',', \$languages);
  } else {
  \t\$languages = \"\";
  }


  if(!empty(\$picked_eventyear) OR (!empty(\$picked_eventmonth)) OR (!empty(\$pagination_events))) {

    if (\$picked_eventmonth == \$list[\$_SESSION['language']]['monthpicker']['option'][12]['entry']) {
      \$picked_eventmonth = \"\";
      //unset(\$picked_eventmonth);
    }

    \$nb_events = count_events_by_type(\$DB, \$query, \$languages, \$picked_eventyear, \$picked_eventmonth);

    \$nb_rows_per_page = 15;
    // Nombre de pages à afficher
    \$events_total_pages = ceil(\$nb_events / \$nb_rows_per_page);

    if (!empty(\$eventpage) && (is_numeric(\$eventpage))) {
      \$events_current_page = \$eventpage;
    } else {
      \$events_current_page = 1;
    }

    // if event current page is greater than total pages...
    if (\$events_current_page > \$events_total_pages) {
      // set current page to last page
      \$events_current_page = \$events_total_pages;
    } // end if
    // if current page is less than first page...
    if (\$events_current_page < 1) {
      // set current page to first page
      \$events_current_page = 1;
    } // end if

    // the offset of the list, based on current page
    \$events_offset = (\$events_current_page - 1) * \$nb_rows_per_page;

    //Send response to Ajax
    //If pagination, Ajax has requested nb_pages and current pages only.
    //Else, Ajax needs the events list.
    if (\$pagination_events == 'true' ) {
      \$PaginateResponse = array('current_page' => \$events_current_page, 'total_pages' => \$events_total_pages);
      echo json_encode(\$PaginateResponse);
    } else {
      \$events = list_events_by_type(\$DB, \$events_offset, \$nb_rows_per_page, \$query, \$languages, \$picked_eventyear, \$picked_eventmonth);
      echo json_encode(\$events);
    }

  } else if (!empty(\$picked_ideayear) OR (!empty(\$picked_ideamonth)) OR (!empty(\$pagination_ideas)) OR (!empty(\$membername))) {

    if (\$picked_ideamonth == \$list[\$_SESSION['language']]['monthpicker']['option'][12]['entry']) {
      \$picked_ideamonth = \"\";
    }

    \$nb_ideas = count_ideas_by_type(\$DB, \$query, \$languages, \$picked_ideayear, \$picked_ideamonth, \$membername);
    \$nb_rows_per_page = 15;
    // Nombre de pages à afficher
    \$ideas_total_pages = ceil(\$nb_ideas / \$nb_rows_per_page);

    if (!empty(\$ideapage) && (is_numeric(\$ideapage))) {
      \$ideas_current_page = \$ideapage;
    } else {
      \$ideas_current_page = 1;
    }

    // if idea current page is greater than total pages...
    if (\$ideas_current_page > \$ideas_total_pages) {
      // set current page to last page
      \$ideas_current_page = \$ideas_total_pages;
    } // end if
    // if current page is less than first page...
    if (\$ideas_current_page < 1) {
      // set current page to first page
      \$ideas_current_page = 1;
    } // end if

    // the offset of the list, based on current page
    \$ideas_offset = (\$ideas_current_page - 1) * \$nb_rows_per_page;

    //Send response to Ajax
    if (\$pagination_ideas == 'true' ) {
      \$PaginateResponse = array('current_page' => \$ideas_current_page, 'total_pages' => \$ideas_total_pages, 'nb_ideas' => \$nb_ideas);
      echo json_encode(\$PaginateResponse);
    } else {
      \$ideas = list_ideas_by_type(\$DB, \$ideas_offset, \$nb_rows_per_page, \$query, \$languages, \$picked_ideayear, \$picked_ideamonth, \$membername);
      echo json_encode(\$ideas);
    }
  }
}

?>
", "Gozpeak/controllers/updateListing.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/updateListing.php");
    }
}
