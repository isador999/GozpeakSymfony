<?php

/* Gozpeak/views/list.php */
class __TwigTemplate_bca3b3f1864ab7eaf6d7600445c5f8aa6b072102600f849af9878cfa8574e2f6 extends Twig_Template
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
        $__internal_c6d59f505537e59a37224e32acc6fbfe7659dd83b9ebcc02418a37c117dd1e01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6d59f505537e59a37224e32acc6fbfe7659dd83b9ebcc02418a37c117dd1e01->enter($__internal_c6d59f505537e59a37224e32acc6fbfe7659dd83b9ebcc02418a37c117dd1e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/list.php"));

        $__internal_f9da9e2e743717eaa81861109e3aff90b184b4862bb7635b1561217ca789b2fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9da9e2e743717eaa81861109e3aff90b184b4862bb7635b1561217ca789b2fb->enter($__internal_f9da9e2e743717eaa81861109e3aff90b184b4862bb7635b1561217ca789b2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/list.php"));

        // line 1
        echo "<!-- <div class=\"corpse container-fluid\"> -->
\t<?php if(isset(\$_SESSION['msg'])) echo \$_SESSION['msg']; ?>

\t<header class=\"row listing-header text-center\" style=\"margin-top: 1.5%;\">
\t\t<div class=\"col-lg-4 col-md-4 col-sm-4\" style=\"margin-top:2%;\">

\t\t\t<!-- Lang buttons for LG, MD -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-9 col-md-11 col-sm-11 text-left\">
\t\t\t\t<?php foreach(\$minilang[\$_SESSION['language']]['icon'] as \$key => \$value) { ?>
\t\t\t\t\t<div style=\"display:inline-block;\">
\t\t\t\t\t\t<img src=\"<?php echo \$baseUrl.\"/\".\$value['png']; ?>\" alt=\"<?php echo \$value['value']; ?>_img\" /> <?php echo \$value['text']; ?>
\t\t\t\t\t</div>
\t\t\t\t<?php } ?>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-lg-3 col-md-3 col-sm-4 activity text-center\">
\t\t\t<h2><a href=\"index.php?page=list&query=<?php echo \$query?>\"><img style=\"width:240px;\" src=\"<?php echo \$home[\$_SESSION['language']][\$query]['img'] ?>\" alt=\"<?php echo \$query?>_img_list\" title=\"<?php echo \$home[\$_SESSION['language']][\$query]['title'] ?>\" /></a></h2>
\t\t\t<span> <?php echo \$home[\$_SESSION['language']][\$query]['text'] ?></span>
\t\t</div>

\t\t<div class=\"col-lg-offset-1 col-lg-3 col-md-offset-1 col-md-3 col-sm-3\" style=\"margin-top:2%;\">
\t\t\t<input id=\"selectedLanguages\" name=\"selectedLanguages\" onclick=\"listLanguages()\" type=\"text\" placeholder=\"<?php echo \$list[\$_SESSION['language']]['filter']['placeholder']; ?>\">
\t\t\t<button type=\"submit\" onclick=\"filterByLanguages('<?php echo \$baseUrl ?>', '<?php echo \$query; ?>', document.getElementById('current_picked_eventyear').innerHTML, document.getElementById('current_picked_eventmonth').innerHTML, document.getElementById('current_picked_ideayear').innerHTML, document.getElementById('current_picked_ideamonth').innerHTML, document.getElementById('selectedLanguages').value);\" class=\"btn btn-default\"> <?php echo \$list[\$_SESSION['language']]['filter']['submit'] ?></button>
\t\t</div>
\t</header>

\t<div class=\"listing-events row\">
\t\t<div class=\"table-responsive eventsblock col-lg-5 col-md-5\">
\t\t\t<fieldset class=\"scheduler-border\">
\t\t\t\t<legend class=\"scheduler-border\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-7 col-sm-7 col-xs-5 text-left events-title\">
\t\t\t\t\t\t\tLes <img src=\"<?php echo \$baseUrl; ?>/views/images/zpeak_orange.png\" style=\"width:80px;\" alt=\"Zpeak\"/> événements
\t\t\t\t\t\t</div>
\t\t\t\t\t<!-- </div> -->

\t\t\t\t\t \t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-8 col-md-5 col-sm-5 col-xs-7 row\">
\t\t\t\t\t\t\t\t<div id=\"dropdown-eventmonths\" class=\"dropdown col-lg-6 col-md-7 col-sm-6 col-xs-6\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\"> <?php echo \$list[\$_SESSION['language']]['monthpicker']['text'] ?> : <span id=\"current_picked_eventmonth\"> <?php echo \$current_eventmonth; ?> </span> &nbsp; <span class=\"caret\"></span> </button>
\t\t\t\t\t\t\t\t\t<ul id=\"event-months\" class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<?php foreach (\$list[\$_SESSION['language']]['monthpicker']['option'] as \$month) { ?>
\t\t\t\t\t\t\t\t\t\t\t<li id=\"events-<?php echo \$month['entry']; ?>\"><a onclick=\"sortEvents('<?php echo \$baseUrl ?>', 'event', '<?php echo \$query; ?>', document.getElementById('current_picked_eventyear').innerHTML, '<?php echo \$month['entry'] ?>')\" href=\"#\"> <?php echo \$month['entry']; ?> </a></li>
\t\t\t\t\t\t\t\t\t\t<?php } ?>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div id=\"dropdown-eventyears\" class=\"dropdown col-lg-5 col-md-7 col-sm-4 col-xs-5\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\"> <?php echo \$list[\$_SESSION['language']]['yearpicker']['text'] ?> : <span id=\"current_picked_eventyear\"> <?php echo \$current_eventyear; ?> </span> &nbsp; <span class=\"caret\"></span> </button>
\t\t\t\t\t\t\t\t\t<ul id=\"event-years\" class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<?php foreach (\$sortYears as \$year) { ?>
\t\t\t\t\t\t\t\t\t\t\t<li id=\"events-<?php echo \$year; ?>\"><a onclick=\"sortEvents('<?php echo \$baseUrl ?>', 'event', '<?php echo \$query; ?>', '<?php echo \$year ?>', document.getElementById('current_picked_eventmonth').innerHTML)\" href=\"#\"> <?php echo \$year; ?> </a></li>
\t\t\t\t\t\t\t\t\t\t<?php } ?>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</legend>

\t\t\t\t<div id=\"empty-events-message\" class=\"empty-events text-center alert-info\" <?php if (!empty(\$events)) { ?> style=\"display:none;\" <?php } ?> > <?php echo \$list[\$_SESSION['language']]['events']['empty']; ?></div>

\t\t\t\t<table id=\"table-events\" class=\"table table-striped table-hover\">
\t\t  \t\t<thead>
\t\t\t\t\t\t<tr class=\"row\">
\t\t    \t\t\t<th>Langue&nbsp;</th>
\t\t  \t\t\t\t<!--<th>Organisateur &nbsp; </th>-->
\t\t    \t\t\t<th>Sortie&nbsp; </th>
\t\t    \t\t\t<th>Date&nbsp;</th>
\t\t    \t\t\t<th>Heure&nbsp;</th>
\t\t\t\t\t\t</tr>
\t\t  \t\t</thead>

\t\t\t\t\t<tbody>
\t\t\t\t\t\t<script> sortEvents('<?php echo \$baseUrl ?>', 'event', '<?php echo \$query; ?>', '<?php echo \$current_eventyear; ?>', '<?php echo \$current_eventmonth; ?>', '1'); </script>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</fieldset>

\t\t\t<div class=\"row pageblock text-center\">
\t\t\t\t<ul class=\"pagination pagination-lg pagination_event\">

\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"visible-sm visible-xs\" style=\"margin-bottom: 15%;\"> </div>

\t\t<div class=\"eventsblock col-lg-offset-1 col-lg-6 col-md-offset-1 col-md-6\">
\t\t\t<fieldset class=\"scheduler-border\">
\t\t\t\t<legend class=\"scheduler-border\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-5 col-md-7 col-sm-7 col-xs-5 text-left ideas-title\">
\t\t\t\t\t\t\tVos <img src=\"<?php echo \$baseUrl; ?>/views/images/zpeak_bleu.png\" style=\"width:80px;\" alt=\"Zpeak\"/> idées d'événements
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-7 col-md-5 col-sm-5 col-xs-7 row\">
\t\t\t\t\t\t\t\t<div id=\"dropdown-ideamonths\" class=\"dropdown col-lg-6 col-md-9 col-sm-6 col-xs-6\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\"> <?php echo \$list[\$_SESSION['language']]['monthpicker']['text'] ?> : <span id=\"current_picked_ideamonth\"> <?php echo \$current_ideamonth; ?> </span> &nbsp; <span class=\"caret\"></span> </button>
\t\t\t\t\t\t\t\t\t<ul id=\"idea-months\" class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<?php foreach (\$list[\$_SESSION['language']]['monthpicker']['option'] as \$month) { ?>
\t\t\t\t\t\t\t\t\t\t\t<li id=\"ideas-<?php echo \$month['entry']; ?>\"><a onclick=\"sortEvents('<?php echo \$baseUrl ?>', 'idea', '<?php echo \$query; ?>', document.getElementById('current_picked_ideayear').innerHTML, '<?php echo \$month['entry'] ?>')\" href=\"#\"> <?php echo \$month['entry']; ?> </a></li>
\t\t\t\t\t\t\t\t\t\t<?php } ?>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div id=\"dropdown-ideayears\" class=\"dropdown col-lg-6 col-md-9 col-sm-4 col-xs-5\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\"> <?php echo \$list[\$_SESSION['language']]['yearpicker']['text'] ?> : <span id=\"current_picked_ideayear\"> <?php echo \$current_ideayear; ?> </span> &nbsp; <span class=\"caret\"></span> </button>
\t\t\t\t\t\t\t\t\t<ul id=\"idea-years\" class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<?php foreach (\$sortYears as \$year) { ?>
\t\t\t\t\t\t\t\t\t\t\t<li id=\"ideas-<?php echo \$year; ?>\"><a onclick=\"sortEvents('<?php echo \$baseUrl ?>', 'idea', '<?php echo \$query; ?>', '<?php echo \$year ?>', document.getElementById('current_picked_ideamonth').innerHTML)\" href=\"#\"> <?php echo \$year; ?> </a></li>
\t\t\t\t\t\t\t\t\t\t<?php } ?>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</legend>

\t\t\t\t<div id=\"empty-ideas-message\" class=\"empty-events text-center alert-info\" <?php if (!empty(\$ideas)) { ?> style=\"display:none;\" <?php } ?> ><?php echo \$list[\$_SESSION['language']]['ideas']['empty']; ?></div>

\t\t\t\t<table id=\"table-ideas\" class=\"table table-striped table-hover\">
\t\t\t  \t<thead>
\t\t\t\t\t\t<tr class=\"row\">
\t\t\t\t\t\t\t<th>Langue&nbsp;</th>
              <th>Organisateur&nbsp;</th>
              <th>Idée&nbsp;</th>
              <th>Date&nbsp;</th>
              <th>Heure&nbsp;</th>
\t\t\t\t\t\t</tr>
\t\t\t  \t</thead>


        \t<tbody>
\t\t\t\t\t\t<!-- <script> sortEvents('<?php #echo \$baseUrl ?>', 'idea', '<?php #echo \$query; ?>', document.getElementById(\"current_picked_ideayear\").innerHTML, document.getElementById(\"current_picked_ideamonth\").innerHTML) </script> -->
\t\t\t\t\t\t<script> sortEvents('<?php echo \$baseUrl ?>', 'idea', '<?php echo \$query; ?>', '<?php echo \$current_ideayear; ?>', '<?php echo \$current_ideamonth; ?>', '1'); </script>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</fieldset>

\t\t\t<div class=\"row pageblock text-center\">
\t\t\t\t<ul class=\"pagination pagination-lg pagination_idea\">
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>


\t</div>  <!-- END OF LISTING-EVENTS -->
";
        
        $__internal_c6d59f505537e59a37224e32acc6fbfe7659dd83b9ebcc02418a37c117dd1e01->leave($__internal_c6d59f505537e59a37224e32acc6fbfe7659dd83b9ebcc02418a37c117dd1e01_prof);

        
        $__internal_f9da9e2e743717eaa81861109e3aff90b184b4862bb7635b1561217ca789b2fb->leave($__internal_f9da9e2e743717eaa81861109e3aff90b184b4862bb7635b1561217ca789b2fb_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/views/list.php";
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
        return new Twig_Source("<!-- <div class=\"corpse container-fluid\"> -->
\t<?php if(isset(\$_SESSION['msg'])) echo \$_SESSION['msg']; ?>

\t<header class=\"row listing-header text-center\" style=\"margin-top: 1.5%;\">
\t\t<div class=\"col-lg-4 col-md-4 col-sm-4\" style=\"margin-top:2%;\">

\t\t\t<!-- Lang buttons for LG, MD -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-9 col-md-11 col-sm-11 text-left\">
\t\t\t\t<?php foreach(\$minilang[\$_SESSION['language']]['icon'] as \$key => \$value) { ?>
\t\t\t\t\t<div style=\"display:inline-block;\">
\t\t\t\t\t\t<img src=\"<?php echo \$baseUrl.\"/\".\$value['png']; ?>\" alt=\"<?php echo \$value['value']; ?>_img\" /> <?php echo \$value['text']; ?>
\t\t\t\t\t</div>
\t\t\t\t<?php } ?>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-lg-3 col-md-3 col-sm-4 activity text-center\">
\t\t\t<h2><a href=\"index.php?page=list&query=<?php echo \$query?>\"><img style=\"width:240px;\" src=\"<?php echo \$home[\$_SESSION['language']][\$query]['img'] ?>\" alt=\"<?php echo \$query?>_img_list\" title=\"<?php echo \$home[\$_SESSION['language']][\$query]['title'] ?>\" /></a></h2>
\t\t\t<span> <?php echo \$home[\$_SESSION['language']][\$query]['text'] ?></span>
\t\t</div>

\t\t<div class=\"col-lg-offset-1 col-lg-3 col-md-offset-1 col-md-3 col-sm-3\" style=\"margin-top:2%;\">
\t\t\t<input id=\"selectedLanguages\" name=\"selectedLanguages\" onclick=\"listLanguages()\" type=\"text\" placeholder=\"<?php echo \$list[\$_SESSION['language']]['filter']['placeholder']; ?>\">
\t\t\t<button type=\"submit\" onclick=\"filterByLanguages('<?php echo \$baseUrl ?>', '<?php echo \$query; ?>', document.getElementById('current_picked_eventyear').innerHTML, document.getElementById('current_picked_eventmonth').innerHTML, document.getElementById('current_picked_ideayear').innerHTML, document.getElementById('current_picked_ideamonth').innerHTML, document.getElementById('selectedLanguages').value);\" class=\"btn btn-default\"> <?php echo \$list[\$_SESSION['language']]['filter']['submit'] ?></button>
\t\t</div>
\t</header>

\t<div class=\"listing-events row\">
\t\t<div class=\"table-responsive eventsblock col-lg-5 col-md-5\">
\t\t\t<fieldset class=\"scheduler-border\">
\t\t\t\t<legend class=\"scheduler-border\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-md-7 col-sm-7 col-xs-5 text-left events-title\">
\t\t\t\t\t\t\tLes <img src=\"<?php echo \$baseUrl; ?>/views/images/zpeak_orange.png\" style=\"width:80px;\" alt=\"Zpeak\"/> événements
\t\t\t\t\t\t</div>
\t\t\t\t\t<!-- </div> -->

\t\t\t\t\t \t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-8 col-md-5 col-sm-5 col-xs-7 row\">
\t\t\t\t\t\t\t\t<div id=\"dropdown-eventmonths\" class=\"dropdown col-lg-6 col-md-7 col-sm-6 col-xs-6\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\"> <?php echo \$list[\$_SESSION['language']]['monthpicker']['text'] ?> : <span id=\"current_picked_eventmonth\"> <?php echo \$current_eventmonth; ?> </span> &nbsp; <span class=\"caret\"></span> </button>
\t\t\t\t\t\t\t\t\t<ul id=\"event-months\" class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<?php foreach (\$list[\$_SESSION['language']]['monthpicker']['option'] as \$month) { ?>
\t\t\t\t\t\t\t\t\t\t\t<li id=\"events-<?php echo \$month['entry']; ?>\"><a onclick=\"sortEvents('<?php echo \$baseUrl ?>', 'event', '<?php echo \$query; ?>', document.getElementById('current_picked_eventyear').innerHTML, '<?php echo \$month['entry'] ?>')\" href=\"#\"> <?php echo \$month['entry']; ?> </a></li>
\t\t\t\t\t\t\t\t\t\t<?php } ?>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div id=\"dropdown-eventyears\" class=\"dropdown col-lg-5 col-md-7 col-sm-4 col-xs-5\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\"> <?php echo \$list[\$_SESSION['language']]['yearpicker']['text'] ?> : <span id=\"current_picked_eventyear\"> <?php echo \$current_eventyear; ?> </span> &nbsp; <span class=\"caret\"></span> </button>
\t\t\t\t\t\t\t\t\t<ul id=\"event-years\" class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<?php foreach (\$sortYears as \$year) { ?>
\t\t\t\t\t\t\t\t\t\t\t<li id=\"events-<?php echo \$year; ?>\"><a onclick=\"sortEvents('<?php echo \$baseUrl ?>', 'event', '<?php echo \$query; ?>', '<?php echo \$year ?>', document.getElementById('current_picked_eventmonth').innerHTML)\" href=\"#\"> <?php echo \$year; ?> </a></li>
\t\t\t\t\t\t\t\t\t\t<?php } ?>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</legend>

\t\t\t\t<div id=\"empty-events-message\" class=\"empty-events text-center alert-info\" <?php if (!empty(\$events)) { ?> style=\"display:none;\" <?php } ?> > <?php echo \$list[\$_SESSION['language']]['events']['empty']; ?></div>

\t\t\t\t<table id=\"table-events\" class=\"table table-striped table-hover\">
\t\t  \t\t<thead>
\t\t\t\t\t\t<tr class=\"row\">
\t\t    \t\t\t<th>Langue&nbsp;</th>
\t\t  \t\t\t\t<!--<th>Organisateur &nbsp; </th>-->
\t\t    \t\t\t<th>Sortie&nbsp; </th>
\t\t    \t\t\t<th>Date&nbsp;</th>
\t\t    \t\t\t<th>Heure&nbsp;</th>
\t\t\t\t\t\t</tr>
\t\t  \t\t</thead>

\t\t\t\t\t<tbody>
\t\t\t\t\t\t<script> sortEvents('<?php echo \$baseUrl ?>', 'event', '<?php echo \$query; ?>', '<?php echo \$current_eventyear; ?>', '<?php echo \$current_eventmonth; ?>', '1'); </script>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</fieldset>

\t\t\t<div class=\"row pageblock text-center\">
\t\t\t\t<ul class=\"pagination pagination-lg pagination_event\">

\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"visible-sm visible-xs\" style=\"margin-bottom: 15%;\"> </div>

\t\t<div class=\"eventsblock col-lg-offset-1 col-lg-6 col-md-offset-1 col-md-6\">
\t\t\t<fieldset class=\"scheduler-border\">
\t\t\t\t<legend class=\"scheduler-border\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-5 col-md-7 col-sm-7 col-xs-5 text-left ideas-title\">
\t\t\t\t\t\t\tVos <img src=\"<?php echo \$baseUrl; ?>/views/images/zpeak_bleu.png\" style=\"width:80px;\" alt=\"Zpeak\"/> idées d'événements
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-7 col-md-5 col-sm-5 col-xs-7 row\">
\t\t\t\t\t\t\t\t<div id=\"dropdown-ideamonths\" class=\"dropdown col-lg-6 col-md-9 col-sm-6 col-xs-6\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\"> <?php echo \$list[\$_SESSION['language']]['monthpicker']['text'] ?> : <span id=\"current_picked_ideamonth\"> <?php echo \$current_ideamonth; ?> </span> &nbsp; <span class=\"caret\"></span> </button>
\t\t\t\t\t\t\t\t\t<ul id=\"idea-months\" class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<?php foreach (\$list[\$_SESSION['language']]['monthpicker']['option'] as \$month) { ?>
\t\t\t\t\t\t\t\t\t\t\t<li id=\"ideas-<?php echo \$month['entry']; ?>\"><a onclick=\"sortEvents('<?php echo \$baseUrl ?>', 'idea', '<?php echo \$query; ?>', document.getElementById('current_picked_ideayear').innerHTML, '<?php echo \$month['entry'] ?>')\" href=\"#\"> <?php echo \$month['entry']; ?> </a></li>
\t\t\t\t\t\t\t\t\t\t<?php } ?>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div id=\"dropdown-ideayears\" class=\"dropdown col-lg-6 col-md-9 col-sm-4 col-xs-5\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\"> <?php echo \$list[\$_SESSION['language']]['yearpicker']['text'] ?> : <span id=\"current_picked_ideayear\"> <?php echo \$current_ideayear; ?> </span> &nbsp; <span class=\"caret\"></span> </button>
\t\t\t\t\t\t\t\t\t<ul id=\"idea-years\" class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<?php foreach (\$sortYears as \$year) { ?>
\t\t\t\t\t\t\t\t\t\t\t<li id=\"ideas-<?php echo \$year; ?>\"><a onclick=\"sortEvents('<?php echo \$baseUrl ?>', 'idea', '<?php echo \$query; ?>', '<?php echo \$year ?>', document.getElementById('current_picked_ideamonth').innerHTML)\" href=\"#\"> <?php echo \$year; ?> </a></li>
\t\t\t\t\t\t\t\t\t\t<?php } ?>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</legend>

\t\t\t\t<div id=\"empty-ideas-message\" class=\"empty-events text-center alert-info\" <?php if (!empty(\$ideas)) { ?> style=\"display:none;\" <?php } ?> ><?php echo \$list[\$_SESSION['language']]['ideas']['empty']; ?></div>

\t\t\t\t<table id=\"table-ideas\" class=\"table table-striped table-hover\">
\t\t\t  \t<thead>
\t\t\t\t\t\t<tr class=\"row\">
\t\t\t\t\t\t\t<th>Langue&nbsp;</th>
              <th>Organisateur&nbsp;</th>
              <th>Idée&nbsp;</th>
              <th>Date&nbsp;</th>
              <th>Heure&nbsp;</th>
\t\t\t\t\t\t</tr>
\t\t\t  \t</thead>


        \t<tbody>
\t\t\t\t\t\t<!-- <script> sortEvents('<?php #echo \$baseUrl ?>', 'idea', '<?php #echo \$query; ?>', document.getElementById(\"current_picked_ideayear\").innerHTML, document.getElementById(\"current_picked_ideamonth\").innerHTML) </script> -->
\t\t\t\t\t\t<script> sortEvents('<?php echo \$baseUrl ?>', 'idea', '<?php echo \$query; ?>', '<?php echo \$current_ideayear; ?>', '<?php echo \$current_ideamonth; ?>', '1'); </script>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</fieldset>

\t\t\t<div class=\"row pageblock text-center\">
\t\t\t\t<ul class=\"pagination pagination-lg pagination_idea\">
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>


\t</div>  <!-- END OF LISTING-EVENTS -->
", "Gozpeak/views/list.php", "/root/Gozpeak/app/Resources/views/Gozpeak/views/list.php");
    }
}
