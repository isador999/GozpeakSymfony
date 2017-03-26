<?php

/* Gozpeak/views/js/myScript.js */
class __TwigTemplate_51dc9b9ccefcd3cd1119643e09f8d8dfc445ae8100b46b86a30084f3e56fda32 extends Twig_Template
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
        $__internal_c118e68870bd1f4839cc1d48b87f597ac1186c96b6cc1615932c98e1f5cc51e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c118e68870bd1f4839cc1d48b87f597ac1186c96b6cc1615932c98e1f5cc51e5->enter($__internal_c118e68870bd1f4839cc1d48b87f597ac1186c96b6cc1615932c98e1f5cc51e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/js/myScript.js"));

        $__internal_ef52399d5cac039e42b455f295001651ca373ba74563de04f6e1c311564959fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef52399d5cac039e42b455f295001651ca373ba74563de04f6e1c311564959fc->enter($__internal_ef52399d5cac039e42b455f295001651ca373ba74563de04f6e1c311564959fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/js/myScript.js"));

        // line 1
        echo "function height(bloc){
\tvar hauteur;

\tif( typeof( window.innerWidth ) == 'number' )
\t\thauteur = window.innerHeight;
\telse if( document.documentElement && document.documentElement.clientHeight )
\t\thauteur = document.documentElement.clientHeight;

\tdocument.getElementById(bloc).style.height = hauteur+\"px\";
}


// To close slowly alert-success Bootstrap messages //
jQuery(document).ready(function(\$){
\t//Set alert-success to be auto-hidden
\twindow.setTimeout(function() { \$(\".alert-success\").fadeTo(2000, 500).slideUp(500) }, 3000);
\t//Set list default year to current year
\tvar current_year = new Date().getFullYear();
\t\$(\"#current_picked_year\").html(\"&nbsp;\"+current_year);
});

function escapeHtml(unsafe) {
    return unsafe
         .replace(/&/g, \"&amp;\")
         .replace(/</g, \"&lt;\")
         .replace(/>/g, \"&gt;\")
         .replace(/\"/g, \"&quot;\")
         .replace(/'/g, \"&#039;\");
\t\t\t\t //.replace(/ /g, \"+\");
\t\t\t\t //.replace(/ /g, \"\");
 }


function showCities () {
\tvar list = document.getElementById(\"ZpeakCities\");
\tif (list.style.display == \"none\"){
\t  list.style.display = \"block\";
\t}else{
\t  list.style.display = \"none\";
\t}
}


/*\$(document).ready(function() {*/
function listLanguages() {
    var availableTags = [
      \"Anglais\",
\t\t\t\"Espagnol\",
\t\t\t\"Italien\",
\t\t\t\"Français\",
\t\t\t\"Autres langues\",
    ];
    function split( val ) {
      //return val.split( /,\\s*/ );
\t\t\treturn val.split( /,\\s*/ );
    }
    function extractLast( term ) {
      return split( term ).pop();
    }

    \$('#selectedLanguages')
      // don't navigate away from the field on tab when selecting an item
      .on( \"keydown\", function( event ) {
        if ( event.keyCode === \$.ui.keyCode.TAB &&
            \$( this ).autocomplete( \"instance\" ).menu.active ) {
          event.preventDefault();
        }
      }).autocomplete({
        minLength: 0,
        source: function( request, response ) {
          // delegate back to autocomplete, but extract the last term
          response( \$.ui.autocomplete.filter(
            availableTags, extractLast( request.term ) ) );
        },
        focus: function() {
          // prevent value inserted on focus
          return false;
        },
        select: function( event, ui ) {
          var terms = split( this.value );
          // remove the current input
          terms.pop();
          // add the selected item
          terms.push( ui.item.value );
          // add placeholder to get the comma-and-space at the end
          terms.push( \"\" );
          this.value = terms.join( \",\" );
          return false;
        }
      });
}


function retrieve_pagination (baseUrl, query, zpeaktype, pickedyear, pickedmonth, selectedLanguages, username, pagenumber) {
\t\$.ajax({
\t\ttype: \"GET\",
\t\turl: ajaxUrl+'/controllers/updateListing.php?',
\t\tdata: \"query=\" + query + \"&\" + zpeaktype + \"year=\" + pickedyear + \"&\" + zpeaktype + \"month=\" + pickedmonth + \"&languages\" + selectedLanguages + \"&pagination_\" + zpeaktype + \"=true&membername=\" + username + \"&\" + zpeaktype + \"page=\" + pagenumber ,
\t\tdataType: 'html',
\t\tcontentType: \"application/x-www-form-urlencoded;charset=UTF-8\",
\t\tcache: false,
\t\tsuccess: function(response)
\t\t{
\t\t\tvar Pagination = JSON.parse(response);
\t\t\t\$('ul.pagination_' + zpeaktype).html(\"\");
\t\t\tfor (var i = 1; i < Pagination.total_pages+1; i++) {
\t\t\t\tif (i == Pagination.current_page) {
\t\t\t\t\t\$('ul.pagination_' + zpeaktype).append('<li class=\"active\"><a href=\"#\">'+ i + '</a></li>');
\t\t\t\t} else {
\t\t\t\t\t//OnclickParams=\"'\"+ajaxUrl+zpeaktype;
\t\t\t\t\t\$('ul.pagination_' + zpeaktype).append('<li><a href=\"#\" onclick=\\'sortEvents(\"'+ajaxUrl+'\", \"'+zpeaktype+'\", \"'+query+'\", \"'+pickedyear+'\", \"'+pickedmonth+'\", \"'+i+'\")\\' >'+ i + '</a></li>');
\t\t\t\t}
\t\t\t}
\t\t}
\t});
}


function getIdeasByUser(baseUrl, username, pagenumber) {
\tajaxUrl = baseUrl;

\t\$.ajax({
\t\ttype: \"GET\",
\t\turl: ajaxUrl+'/controllers/updateListing.php?',
\t\tdata: \"membername=\" + username,
\t\tdataType: 'html',
\t\tcontentType: \"application/x-www-form-urlencoded;charset=UTF-8\",
\t\tcache: false,
\t\tsuccess: function(response)
\t\t{
\t\t\tvar ideas = JSON.parse(response);
\t\t\t//For ideas
\t\t\tif(ideas.length === 0) {
\t\t\t\t\$('#empty-ideas-message-profile').show();
\t\t\t} else {
\t\t\t\t\$('#empty-ideas-message-profile').hide();
\t\t\t\tfor (var i = 0; i < ideas.length; i++) {

\t\t\t\t\t//escapeHtml
\t\t\t\t\tescapeHtml(ideas[i].language);
\t\t\t\t\tescapeHtml(ideas[i].ideatype);
\t\t\t\t\tescapeHtml(ideas[i].ideaname);
\t\t\t\t\tescapeHtml(ideas[i].ideadayname);
\t\t\t\t\tescapeHtml(ideas[i].ideadaynumber);
\t\t\t\t\tescapeHtml(ideas[i].ideamonthname);
\t\t\t\t\tescapeHtml(ideas[i].ideatime);

\t\t\t\t\t\$('#table-ideas-profile > tbody').append('<tr class=\"row\"> </tr>');
\t\t\t\t\t\$('#table-ideas-profile > tbody').find('tr:last').append('<td class=\"col-lg-1 col-md-1\"> <img src=\"'+ajaxUrl+'/views/images/p_'+ideas[i].language+'.png\" title=\"'+ideas[i].language+'\" /> </td>');
\t\t\t\t\t\$('#table-ideas-profile > tbody').find('tr:last').append('<td class=\"col-lg-1 col-md-1\"> <img style=\"width:150%;\" src=\"views/images/'+ideas[i].ideatype+'.png\" title=\"'+ideas[i].ideatype+'\" /> </td>');
\t\t\t\t\t//\$(\"#table-ideas > tbody\").find('tr:last').append(\"<td class='col-lg-2'> <a href='\"+ajaxUrl+\"/index.php?page=profil&profil=\"+ideas[i].organizer+\"' >\"+ideas[i].organizer+\"</a></td>\");
\t\t\t\t\t\$('#table-ideas-profile > tbody').find('tr:last').append('<td class=\"col-lg-5 col-md-5\"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href=\"'+ajaxUrl+'/index.php?page=idea&query='+ideas[i].ideatype+'&idea='+ideas[i].ideaname+'\" >'+ideas[i].ideaname+'</a></td>');
\t\t\t\t\t\$('#table-ideas-profile > tbody').find('tr:last').append('<td class=\"col-lg-3 col-md-5\">'+ideas[i].ideadayname+' '+ideas[i].ideadaynumber+' '+ideas[i].ideamonthname+'</td>');
\t\t\t\t\t\$('#table-ideas-profile > tbody').find('tr:last').append('<td class=\"col-lg-1 col-md-1\">'+ideas[i].ideatime+'</td>');
\t\t\t\t}
\t\t\t}
\t\t}
\t});
\tretrieve_pagination(baseUrl, '', 'idea', '', '', '', username, pagenumber);
}



function filterByLanguages(baseUrl, query, eventyear, eventmonth, ideayear, ideamonth, selectedLanguages) {
\t//Requests to get events and ideas by selected languages (and keeping selected years respectively)
\tajaxUrl = baseUrl;

\t\$.ajax({
\t\ttype: \"GET\",
\t\turl: ajaxUrl+'/controllers/updateListing.php?',
\t\tdata: \"query=\" + query + \"&eventyear=\" + eventyear + \"&eventmonth=\" + eventmonth + \"&languages=\" + selectedLanguages,
\t\tdataType: 'html',
\t\tcontentType: \"application/x-www-form-urlencoded;charset=UTF-8\",
\t\tcache: false,
\t\tsuccess: function(response)
\t\t{
\t\t\tvar events = JSON.parse(response);
\t\t\t\$('#table-events > tbody').html(\"\");
\t\t\t\$('#current_picked_eventyear').html(eventyear);

\t\t\t//For events
\t\t\tif(events.length === 0) {
\t\t\t\t\$('#empty-events-message').show();
\t\t\t} else {
\t\t\t\t\$('#empty-events-message').hide();
\t\t\t\tfor (var i = 0; i < events.length; i++) {

\t\t\t\t\t//escapeHtml
\t\t\t\t\tescapeHtml(events[i].language);
\t\t\t\t\tescapeHtml(events[i].eventtype);
\t\t\t\t\tescapeHtml(events[i].eventname);
\t\t\t\t\tescapeHtml(events[i].eventdayname);
\t\t\t\t\tescapeHtml(events[i].eventdaynumber);
\t\t\t\t\tescapeHtml(events[i].eventmonthname);
\t\t\t\t\tescapeHtml(events[i].eventtime);

\t\t\t\t\t\$('#table-events > tbody').append('<tr class=\"row\"> </tr>');
\t\t\t\t\t\$('#table-events > tbody').find('tr:last').append('<td class=\"col-lg-1 col-md-1\"> <img src=\"'+ajaxUrl+'/views/images/p_'+events[i].language+'.png\" title=\"'+events[i].language+'\" /> </td>');
\t\t\t\t\t\$('#table-events > tbody').find('tr:last').append('<td class=\"col-lg-6 col-md-6\"> <a href=\"'+ajaxUrl+'/index.php?page=event&query='+events[i].eventtype+'&event='+events[i].eventname+'\" >'+events[i].eventname+'</a></td>');
\t\t\t\t\t\$('#table-events > tbody').find('tr:last').append('<td class=\"col-lg-4 col-md-4\">'+events[i].eventdayname+' '+events[i].eventdaynumber+' '+events[i].eventmonthname+'</td>');
\t\t\t\t\t\$('#table-events > tbody').find('tr:last').append('<td class=\"col-lg-1 col-md-1\">'+events[i].eventtime+'</td>');
\t\t\t\t}
\t\t\t}
\t\t} // End of success
\t}); //End of Ajax request
\tretrieve_pagination(baseUrl, query, 'event', eventyear, eventmonth, selectedLanguages, '');


\t\$.ajax({
\t\ttype: \"GET\",
\t\turl: ajaxUrl+'/controllers/updateListing.php?',
\t\tdata: \"query=\" + query + \"&ideayear=\" + ideayear + \"&ideamonth=\" + ideamonth + \"&languages=\" + selectedLanguages,
\t\tdataType: 'html',
\t\tcontentType: \"application/x-www-form-urlencoded;charset=UTF-8\",
\t\tcache: false,
\t\tsuccess: function(response)
\t\t{
\t\t\tvar ideas = JSON.parse(response);
\t\t\t\$('#table-ideas > tbody').html(\"\");
\t\t\t\$('#current_picked_ideayear').html(ideayear);

\t\t\t//For ideas
\t\t\tif(ideas.length === 0) {
\t\t\t\t\$('#empty-ideas-message').show();
\t\t\t} else {
\t\t\t\t\$('#empty-ideas-message').hide();
\t\t\t\tfor (var i = 0; i < ideas.length; i++) {

\t\t\t\t\t//escapeHtml
\t\t\t\t\tescapeHtml(ideas[i].language);
\t\t\t\t\tescapeHtml(ideas[i].ideatype);
\t\t\t\t\tescapeHtml(ideas[i].ideaname);
\t\t\t\t\tescapeHtml(ideas[i].ideadayname);
\t\t\t\t\tescapeHtml(ideas[i].ideadaynumber);
\t\t\t\t\tescapeHtml(ideas[i].ideamonthname);
\t\t\t\t\tescapeHtml(ideas[i].ideatime);

\t\t\t\t\t\$('#table-ideas > tbody').append('<tr class=\"row\"> </tr>');
\t\t\t\t\t\$('#table-ideas > tbody').find('tr:last').append('<td class=\"col-lg-1 col-md-1\"> <img src=\"'+ajaxUrl+'/views/images/p_'+ideas[i].language+'.png\" title=\"'+ideas[i].language+'\" /> </td>');
\t\t\t\t\t\$('#table-ideas > tbody').find('tr:last').append('<td class=\"col-lg-2 col-md-2\"> <a href=\"'+ajaxUrl+'/index.php?page=profil&profil='+ideas[i].organizer+'\" >'+ideas[i].organizer+'</a></td>');
\t\t\t\t\t\$('#table-ideas > tbody').find('tr:last').append('<td class=\"col-lg-4 col-md-4\"> <a href=\"'+ajaxUrl+'/index.php?page=idea&query='+ideas[i].ideatype+'&idea='+ideas[i].ideaname+'\" >'+ideas[i].ideaname+'</a></td>');
\t\t\t\t\t\$('#table-ideas > tbody').find('tr:last').append('<td class=\"col-lg-4 col-md-4\">'+ideas[i].ideadayname+' '+ideas[i].ideadaynumber+' '+ideas[i].ideamonthname+'</td>');
\t\t\t\t\t\$('#table-ideas > tbody').find('tr:last').append('<td class=\"col-lg-1 col-md-1\">'+ideas[i].ideatime+'</td>');
\t\t\t\t}
\t\t\t}
\t\t} //End of success
\t}); //End of Ajax request
\tretrieve_pagination(baseUrl, query, 'idea', ideayear, ideamonth, selectedLanguages, '');
} //End of function



function sortEvents(baseUrl, zpeaktype, query, pickedyear, pickedmonth, pagenumber) {
\tajaxUrl = baseUrl;

\t\$.ajax({
\t  type: \"GET\",
  \turl: ajaxUrl+'/controllers/updateListing.php?',
\t\tdata: \"query=\" + query + \"&\" + zpeaktype + \"year=\" + pickedyear + \"&\" + zpeaktype + \"month=\"+ pickedmonth + \"&\" + zpeaktype + \"page=\" + pagenumber,
\t  dataType: 'html',
\t\tcontentType: \"application/x-www-form-urlencoded;charset=UTF-8\",
    cache: false,
\t  success: function(response)
\t  {
\t\t\tvar donnees = JSON.parse(response);
\t\t\tif (zpeaktype == 'event') {
\t\t\t\t//Set dropdowns to current choice.
\t\t\t\t\$('#current_picked_eventyear').html(pickedyear);
\t\t\t\t\$('#current_picked_eventmonth').html(pickedmonth);

\t\t\t\t//Reset disabled state of all dropdowns.
\t\t\t\t\$('ul#event-years > li').attr(\"class\", \"\");
\t\t\t\t\$('ul#event-months > li').attr(\"class\", \"\");

\t\t\t\t//Disable selected dropdown choices.
\t\t\t\t\$('ul#event-years > li#events-'+pickedyear).attr(\"class\", \"disabled\");
\t\t\t\t\$('ul#event-months > li#events-'+pickedmonth).attr(\"class\", \"disabled\");


\t\t\t\t\$('#table-events > tbody').html(\"\");

\t\t\t\tif(donnees.length === 0) {
\t\t\t\t\t\$('#empty-events-message').show();
\t\t\t\t} else {
\t\t\t\t\t\$('#empty-events-message').hide();
\t\t\t\t\tfor (var i = 0; i < donnees.length; i++) {

\t\t\t\t\t\t//escapeHtml
\t\t\t\t\t\tescapeHtml(donnees[i].language);
\t\t\t\t\t\tescapeHtml(donnees[i].eventtype);
\t\t\t\t\t\tescapeHtml(donnees[i].eventname);
\t\t\t\t\t\tescapeHtml(donnees[i].eventdayname);
\t\t\t\t\t\tescapeHtml(donnees[i].eventdaynumber);
\t\t\t\t\t\tescapeHtml(donnees[i].eventmonthname);
\t\t\t\t\t\tescapeHtml(donnees[i].eventtime);


\t\t\t\t\t\t\$('#table-events > tbody').append('<tr class=\"row\"> </tr>');
\t\t\t\t\t\t\$('#table-events > tbody').find('tr:last').append('<td class=\"col-lg-1 col-md-1\"> <img src=\"'+ajaxUrl+'/views/images/p_'+donnees[i].language+'.png\" title=\"'+donnees[i].language+'\" /> </td>');
\t\t\t\t\t\t\$('#table-events > tbody').find('tr:last').append('<td class=\"col-lg-6 col-md-6\"> <a href=\"'+ajaxUrl+'/index.php?page=event&query='+donnees[i].eventtype+'&event='+donnees[i].eventname+' \">'+donnees[i].eventname+'</a></td>');
\t\t\t\t\t\t\$('#table-events > tbody').find('tr:last').append('<td class=\"col-lg-4 col-md-4\">'+donnees[i].eventdayname+' '+donnees[i].eventdaynumber+' '+donnees[i].eventmonthname+'</td>');
\t\t\t\t\t\t\$('#table-events > tbody').find('tr:last').append('<td class=\"col-lg-1 col-md-1\">'+donnees[i].eventtime+'</td>');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} else if (zpeaktype == 'idea') {
\t\t\t\t//Set dropdowns to current choice.
\t\t\t\t\$('#current_picked_ideayear').html(pickedyear);
\t\t\t\t\$('#current_picked_ideamonth').html(pickedmonth);

\t\t\t\t//Reset disabled state of all dropdowns.
\t\t\t\t\$('ul#idea-years > li').attr(\"class\", \"\");
\t\t\t\t\$('ul#idea-months > li').attr(\"class\", \"\");

\t\t\t\t//Disable selected dropdown choices.
\t\t\t\t\$('ul#idea-years > li#ideas-'+pickedyear).attr(\"class\", \"disabled\");
\t\t\t\t\$('ul#idea-months > li#ideas-'+pickedmonth).attr(\"class\", \"disabled\");

\t\t\t\t\$('#table-ideas > tbody').html(\"\");

\t\t\t\tif(donnees.length === 0) {
\t\t\t\t\t\$('#empty-ideas-message').show();
\t\t\t\t} else {
\t\t\t\t\t\$('#empty-ideas-message').hide();
\t\t\t\t\tfor (var i = 0; i < donnees.length; i++) {

\t\t\t\t\t\t//escapeHtml
\t\t\t\t\t\tescapeHtml(donnees[i].language);
\t\t\t\t\t\tescapeHtml(donnees[i].ideatype);
\t\t\t\t\t\tescapeHtml(donnees[i].ideaname);
\t\t\t\t\t\tescapeHtml(donnees[i].ideadayname);
\t\t\t\t\t\tescapeHtml(donnees[i].ideadaynumber);
\t\t\t\t\t\tescapeHtml(donnees[i].ideamonthname);
\t\t\t\t\t\tescapeHtml(donnees[i].ideatime);

\t\t\t\t\t\t\$('#table-ideas > tbody').append('<tr class=\"row\"> </tr>');
\t\t\t\t\t\t\$('#table-ideas > tbody').find('tr:last').append('<td class=\"\"> <img src=\"'+ajaxUrl+'/views/images/p_'+donnees[i].language+'.png\" title=\"'+donnees[i].language+'\" /> </td>');
\t\t\t\t\t\t\$('#table-ideas > tbody').find('tr:last').append('<td class=\"\"> <a href=\"'+ajaxUrl+'/index.php?page=profil&profil='+donnees[i].organizer+'\" >'+donnees[i].organizer+'</a></td>');
\t\t\t\t\t\t\$('#table-ideas > tbody').find('tr:last').append('<td class=\"\"> <a href=\"'+ajaxUrl+'/index.php?page=idea&query='+donnees[i].ideatype+'&idea='+donnees[i].ideaname+'\" >'+donnees[i].ideaname+'</a></td>');
\t\t\t\t\t\t\$('#table-ideas > tbody').find('tr:last').append('<td class=\"\">'+donnees[i].ideadayname+' '+donnees[i].ideadaynumber+' '+donnees[i].ideamonthname+'</td>');
\t\t\t\t\t\t\$('#table-ideas > tbody').find('tr:last').append('<td class=\"\">'+donnees[i].ideatime+'</td>');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} //End of condition zpeaktype
\t\t\tretrieve_pagination(baseUrl, query, zpeaktype, pickedyear, pickedmonth, '', '', pagenumber);
\t\t}  //End of success block
\t});
}


function showDatetimePicker() {
\tvar currDate = new Date();
\tvar initDate = currDate.getFullYear() + \"-\" + currDate.getMonth() + \"-\" + currDate.getDate() + \" \" + currDate.getDay;
\t//var maxDate = initDate.getYear()+1 + '-' initDate.getMonth() + '-' initDate.getDate();
\tvar maxDate = (currDate.getFullYear()+1) + \"-\" + (currDate.getMonth()+2) + \"-\" + currDate.getDate();

\t// \$(\".datetimepicker-hours\").attr(\"style\", \"width:30%;\");
\t// \$(\".datetimepicker-minutes\").attr(\"style\", \"width:30%;\");
\t\$(\".datetime-btn\").datetimepicker({
\tlanguage: \"fr\",
  autoclose: true,
\tmaxView: \"year\",
\tminuteStep: 15,
\trtl: true,
\tfontAwesome: true,
  todayBtn: true,
\ttodayHighlight: \"true\",
\tpickerPosition: \"bottom-right\",
\tformat: \"yyyy-mm-dd hh:ii\",
\t//startDate: \"2016-09-01 21:00\",
\tstartDate: initDate,
\t//endDate: \"2018-09-01 21:00\"
\tendDate: maxDate
    });
};


function genericShowModalEvent(logo, color, img, query, modalIdSelector) {
\t\$('#modalSelectQuery').modal('hide');

\t\$('#'+modalIdSelector+' .EventLogoTitle').attr(\"src\", logo);
\t\$('#'+modalIdSelector+' .modal-title').attr(\"style\", color);
\t\$('#'+modalIdSelector+' .EventQueryImg').attr(\"src\", img);
\t\$('#'+modalIdSelector+' .EventQueryImg').attr(\"alt\", query);
\t\$('#'+modalIdSelector+' .hiddenInputQuery').attr(\"value\", query);
}
";
        
        $__internal_c118e68870bd1f4839cc1d48b87f597ac1186c96b6cc1615932c98e1f5cc51e5->leave($__internal_c118e68870bd1f4839cc1d48b87f597ac1186c96b6cc1615932c98e1f5cc51e5_prof);

        
        $__internal_ef52399d5cac039e42b455f295001651ca373ba74563de04f6e1c311564959fc->leave($__internal_ef52399d5cac039e42b455f295001651ca373ba74563de04f6e1c311564959fc_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/views/js/myScript.js";
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
        return new Twig_Source("function height(bloc){
\tvar hauteur;

\tif( typeof( window.innerWidth ) == 'number' )
\t\thauteur = window.innerHeight;
\telse if( document.documentElement && document.documentElement.clientHeight )
\t\thauteur = document.documentElement.clientHeight;

\tdocument.getElementById(bloc).style.height = hauteur+\"px\";
}


// To close slowly alert-success Bootstrap messages //
jQuery(document).ready(function(\$){
\t//Set alert-success to be auto-hidden
\twindow.setTimeout(function() { \$(\".alert-success\").fadeTo(2000, 500).slideUp(500) }, 3000);
\t//Set list default year to current year
\tvar current_year = new Date().getFullYear();
\t\$(\"#current_picked_year\").html(\"&nbsp;\"+current_year);
});

function escapeHtml(unsafe) {
    return unsafe
         .replace(/&/g, \"&amp;\")
         .replace(/</g, \"&lt;\")
         .replace(/>/g, \"&gt;\")
         .replace(/\"/g, \"&quot;\")
         .replace(/'/g, \"&#039;\");
\t\t\t\t //.replace(/ /g, \"+\");
\t\t\t\t //.replace(/ /g, \"\");
 }


function showCities () {
\tvar list = document.getElementById(\"ZpeakCities\");
\tif (list.style.display == \"none\"){
\t  list.style.display = \"block\";
\t}else{
\t  list.style.display = \"none\";
\t}
}


/*\$(document).ready(function() {*/
function listLanguages() {
    var availableTags = [
      \"Anglais\",
\t\t\t\"Espagnol\",
\t\t\t\"Italien\",
\t\t\t\"Français\",
\t\t\t\"Autres langues\",
    ];
    function split( val ) {
      //return val.split( /,\\s*/ );
\t\t\treturn val.split( /,\\s*/ );
    }
    function extractLast( term ) {
      return split( term ).pop();
    }

    \$('#selectedLanguages')
      // don't navigate away from the field on tab when selecting an item
      .on( \"keydown\", function( event ) {
        if ( event.keyCode === \$.ui.keyCode.TAB &&
            \$( this ).autocomplete( \"instance\" ).menu.active ) {
          event.preventDefault();
        }
      }).autocomplete({
        minLength: 0,
        source: function( request, response ) {
          // delegate back to autocomplete, but extract the last term
          response( \$.ui.autocomplete.filter(
            availableTags, extractLast( request.term ) ) );
        },
        focus: function() {
          // prevent value inserted on focus
          return false;
        },
        select: function( event, ui ) {
          var terms = split( this.value );
          // remove the current input
          terms.pop();
          // add the selected item
          terms.push( ui.item.value );
          // add placeholder to get the comma-and-space at the end
          terms.push( \"\" );
          this.value = terms.join( \",\" );
          return false;
        }
      });
}


function retrieve_pagination (baseUrl, query, zpeaktype, pickedyear, pickedmonth, selectedLanguages, username, pagenumber) {
\t\$.ajax({
\t\ttype: \"GET\",
\t\turl: ajaxUrl+'/controllers/updateListing.php?',
\t\tdata: \"query=\" + query + \"&\" + zpeaktype + \"year=\" + pickedyear + \"&\" + zpeaktype + \"month=\" + pickedmonth + \"&languages\" + selectedLanguages + \"&pagination_\" + zpeaktype + \"=true&membername=\" + username + \"&\" + zpeaktype + \"page=\" + pagenumber ,
\t\tdataType: 'html',
\t\tcontentType: \"application/x-www-form-urlencoded;charset=UTF-8\",
\t\tcache: false,
\t\tsuccess: function(response)
\t\t{
\t\t\tvar Pagination = JSON.parse(response);
\t\t\t\$('ul.pagination_' + zpeaktype).html(\"\");
\t\t\tfor (var i = 1; i < Pagination.total_pages+1; i++) {
\t\t\t\tif (i == Pagination.current_page) {
\t\t\t\t\t\$('ul.pagination_' + zpeaktype).append('<li class=\"active\"><a href=\"#\">'+ i + '</a></li>');
\t\t\t\t} else {
\t\t\t\t\t//OnclickParams=\"'\"+ajaxUrl+zpeaktype;
\t\t\t\t\t\$('ul.pagination_' + zpeaktype).append('<li><a href=\"#\" onclick=\\'sortEvents(\"'+ajaxUrl+'\", \"'+zpeaktype+'\", \"'+query+'\", \"'+pickedyear+'\", \"'+pickedmonth+'\", \"'+i+'\")\\' >'+ i + '</a></li>');
\t\t\t\t}
\t\t\t}
\t\t}
\t});
}


function getIdeasByUser(baseUrl, username, pagenumber) {
\tajaxUrl = baseUrl;

\t\$.ajax({
\t\ttype: \"GET\",
\t\turl: ajaxUrl+'/controllers/updateListing.php?',
\t\tdata: \"membername=\" + username,
\t\tdataType: 'html',
\t\tcontentType: \"application/x-www-form-urlencoded;charset=UTF-8\",
\t\tcache: false,
\t\tsuccess: function(response)
\t\t{
\t\t\tvar ideas = JSON.parse(response);
\t\t\t//For ideas
\t\t\tif(ideas.length === 0) {
\t\t\t\t\$('#empty-ideas-message-profile').show();
\t\t\t} else {
\t\t\t\t\$('#empty-ideas-message-profile').hide();
\t\t\t\tfor (var i = 0; i < ideas.length; i++) {

\t\t\t\t\t//escapeHtml
\t\t\t\t\tescapeHtml(ideas[i].language);
\t\t\t\t\tescapeHtml(ideas[i].ideatype);
\t\t\t\t\tescapeHtml(ideas[i].ideaname);
\t\t\t\t\tescapeHtml(ideas[i].ideadayname);
\t\t\t\t\tescapeHtml(ideas[i].ideadaynumber);
\t\t\t\t\tescapeHtml(ideas[i].ideamonthname);
\t\t\t\t\tescapeHtml(ideas[i].ideatime);

\t\t\t\t\t\$('#table-ideas-profile > tbody').append('<tr class=\"row\"> </tr>');
\t\t\t\t\t\$('#table-ideas-profile > tbody').find('tr:last').append('<td class=\"col-lg-1 col-md-1\"> <img src=\"'+ajaxUrl+'/views/images/p_'+ideas[i].language+'.png\" title=\"'+ideas[i].language+'\" /> </td>');
\t\t\t\t\t\$('#table-ideas-profile > tbody').find('tr:last').append('<td class=\"col-lg-1 col-md-1\"> <img style=\"width:150%;\" src=\"views/images/'+ideas[i].ideatype+'.png\" title=\"'+ideas[i].ideatype+'\" /> </td>');
\t\t\t\t\t//\$(\"#table-ideas > tbody\").find('tr:last').append(\"<td class='col-lg-2'> <a href='\"+ajaxUrl+\"/index.php?page=profil&profil=\"+ideas[i].organizer+\"' >\"+ideas[i].organizer+\"</a></td>\");
\t\t\t\t\t\$('#table-ideas-profile > tbody').find('tr:last').append('<td class=\"col-lg-5 col-md-5\"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href=\"'+ajaxUrl+'/index.php?page=idea&query='+ideas[i].ideatype+'&idea='+ideas[i].ideaname+'\" >'+ideas[i].ideaname+'</a></td>');
\t\t\t\t\t\$('#table-ideas-profile > tbody').find('tr:last').append('<td class=\"col-lg-3 col-md-5\">'+ideas[i].ideadayname+' '+ideas[i].ideadaynumber+' '+ideas[i].ideamonthname+'</td>');
\t\t\t\t\t\$('#table-ideas-profile > tbody').find('tr:last').append('<td class=\"col-lg-1 col-md-1\">'+ideas[i].ideatime+'</td>');
\t\t\t\t}
\t\t\t}
\t\t}
\t});
\tretrieve_pagination(baseUrl, '', 'idea', '', '', '', username, pagenumber);
}



function filterByLanguages(baseUrl, query, eventyear, eventmonth, ideayear, ideamonth, selectedLanguages) {
\t//Requests to get events and ideas by selected languages (and keeping selected years respectively)
\tajaxUrl = baseUrl;

\t\$.ajax({
\t\ttype: \"GET\",
\t\turl: ajaxUrl+'/controllers/updateListing.php?',
\t\tdata: \"query=\" + query + \"&eventyear=\" + eventyear + \"&eventmonth=\" + eventmonth + \"&languages=\" + selectedLanguages,
\t\tdataType: 'html',
\t\tcontentType: \"application/x-www-form-urlencoded;charset=UTF-8\",
\t\tcache: false,
\t\tsuccess: function(response)
\t\t{
\t\t\tvar events = JSON.parse(response);
\t\t\t\$('#table-events > tbody').html(\"\");
\t\t\t\$('#current_picked_eventyear').html(eventyear);

\t\t\t//For events
\t\t\tif(events.length === 0) {
\t\t\t\t\$('#empty-events-message').show();
\t\t\t} else {
\t\t\t\t\$('#empty-events-message').hide();
\t\t\t\tfor (var i = 0; i < events.length; i++) {

\t\t\t\t\t//escapeHtml
\t\t\t\t\tescapeHtml(events[i].language);
\t\t\t\t\tescapeHtml(events[i].eventtype);
\t\t\t\t\tescapeHtml(events[i].eventname);
\t\t\t\t\tescapeHtml(events[i].eventdayname);
\t\t\t\t\tescapeHtml(events[i].eventdaynumber);
\t\t\t\t\tescapeHtml(events[i].eventmonthname);
\t\t\t\t\tescapeHtml(events[i].eventtime);

\t\t\t\t\t\$('#table-events > tbody').append('<tr class=\"row\"> </tr>');
\t\t\t\t\t\$('#table-events > tbody').find('tr:last').append('<td class=\"col-lg-1 col-md-1\"> <img src=\"'+ajaxUrl+'/views/images/p_'+events[i].language+'.png\" title=\"'+events[i].language+'\" /> </td>');
\t\t\t\t\t\$('#table-events > tbody').find('tr:last').append('<td class=\"col-lg-6 col-md-6\"> <a href=\"'+ajaxUrl+'/index.php?page=event&query='+events[i].eventtype+'&event='+events[i].eventname+'\" >'+events[i].eventname+'</a></td>');
\t\t\t\t\t\$('#table-events > tbody').find('tr:last').append('<td class=\"col-lg-4 col-md-4\">'+events[i].eventdayname+' '+events[i].eventdaynumber+' '+events[i].eventmonthname+'</td>');
\t\t\t\t\t\$('#table-events > tbody').find('tr:last').append('<td class=\"col-lg-1 col-md-1\">'+events[i].eventtime+'</td>');
\t\t\t\t}
\t\t\t}
\t\t} // End of success
\t}); //End of Ajax request
\tretrieve_pagination(baseUrl, query, 'event', eventyear, eventmonth, selectedLanguages, '');


\t\$.ajax({
\t\ttype: \"GET\",
\t\turl: ajaxUrl+'/controllers/updateListing.php?',
\t\tdata: \"query=\" + query + \"&ideayear=\" + ideayear + \"&ideamonth=\" + ideamonth + \"&languages=\" + selectedLanguages,
\t\tdataType: 'html',
\t\tcontentType: \"application/x-www-form-urlencoded;charset=UTF-8\",
\t\tcache: false,
\t\tsuccess: function(response)
\t\t{
\t\t\tvar ideas = JSON.parse(response);
\t\t\t\$('#table-ideas > tbody').html(\"\");
\t\t\t\$('#current_picked_ideayear').html(ideayear);

\t\t\t//For ideas
\t\t\tif(ideas.length === 0) {
\t\t\t\t\$('#empty-ideas-message').show();
\t\t\t} else {
\t\t\t\t\$('#empty-ideas-message').hide();
\t\t\t\tfor (var i = 0; i < ideas.length; i++) {

\t\t\t\t\t//escapeHtml
\t\t\t\t\tescapeHtml(ideas[i].language);
\t\t\t\t\tescapeHtml(ideas[i].ideatype);
\t\t\t\t\tescapeHtml(ideas[i].ideaname);
\t\t\t\t\tescapeHtml(ideas[i].ideadayname);
\t\t\t\t\tescapeHtml(ideas[i].ideadaynumber);
\t\t\t\t\tescapeHtml(ideas[i].ideamonthname);
\t\t\t\t\tescapeHtml(ideas[i].ideatime);

\t\t\t\t\t\$('#table-ideas > tbody').append('<tr class=\"row\"> </tr>');
\t\t\t\t\t\$('#table-ideas > tbody').find('tr:last').append('<td class=\"col-lg-1 col-md-1\"> <img src=\"'+ajaxUrl+'/views/images/p_'+ideas[i].language+'.png\" title=\"'+ideas[i].language+'\" /> </td>');
\t\t\t\t\t\$('#table-ideas > tbody').find('tr:last').append('<td class=\"col-lg-2 col-md-2\"> <a href=\"'+ajaxUrl+'/index.php?page=profil&profil='+ideas[i].organizer+'\" >'+ideas[i].organizer+'</a></td>');
\t\t\t\t\t\$('#table-ideas > tbody').find('tr:last').append('<td class=\"col-lg-4 col-md-4\"> <a href=\"'+ajaxUrl+'/index.php?page=idea&query='+ideas[i].ideatype+'&idea='+ideas[i].ideaname+'\" >'+ideas[i].ideaname+'</a></td>');
\t\t\t\t\t\$('#table-ideas > tbody').find('tr:last').append('<td class=\"col-lg-4 col-md-4\">'+ideas[i].ideadayname+' '+ideas[i].ideadaynumber+' '+ideas[i].ideamonthname+'</td>');
\t\t\t\t\t\$('#table-ideas > tbody').find('tr:last').append('<td class=\"col-lg-1 col-md-1\">'+ideas[i].ideatime+'</td>');
\t\t\t\t}
\t\t\t}
\t\t} //End of success
\t}); //End of Ajax request
\tretrieve_pagination(baseUrl, query, 'idea', ideayear, ideamonth, selectedLanguages, '');
} //End of function



function sortEvents(baseUrl, zpeaktype, query, pickedyear, pickedmonth, pagenumber) {
\tajaxUrl = baseUrl;

\t\$.ajax({
\t  type: \"GET\",
  \turl: ajaxUrl+'/controllers/updateListing.php?',
\t\tdata: \"query=\" + query + \"&\" + zpeaktype + \"year=\" + pickedyear + \"&\" + zpeaktype + \"month=\"+ pickedmonth + \"&\" + zpeaktype + \"page=\" + pagenumber,
\t  dataType: 'html',
\t\tcontentType: \"application/x-www-form-urlencoded;charset=UTF-8\",
    cache: false,
\t  success: function(response)
\t  {
\t\t\tvar donnees = JSON.parse(response);
\t\t\tif (zpeaktype == 'event') {
\t\t\t\t//Set dropdowns to current choice.
\t\t\t\t\$('#current_picked_eventyear').html(pickedyear);
\t\t\t\t\$('#current_picked_eventmonth').html(pickedmonth);

\t\t\t\t//Reset disabled state of all dropdowns.
\t\t\t\t\$('ul#event-years > li').attr(\"class\", \"\");
\t\t\t\t\$('ul#event-months > li').attr(\"class\", \"\");

\t\t\t\t//Disable selected dropdown choices.
\t\t\t\t\$('ul#event-years > li#events-'+pickedyear).attr(\"class\", \"disabled\");
\t\t\t\t\$('ul#event-months > li#events-'+pickedmonth).attr(\"class\", \"disabled\");


\t\t\t\t\$('#table-events > tbody').html(\"\");

\t\t\t\tif(donnees.length === 0) {
\t\t\t\t\t\$('#empty-events-message').show();
\t\t\t\t} else {
\t\t\t\t\t\$('#empty-events-message').hide();
\t\t\t\t\tfor (var i = 0; i < donnees.length; i++) {

\t\t\t\t\t\t//escapeHtml
\t\t\t\t\t\tescapeHtml(donnees[i].language);
\t\t\t\t\t\tescapeHtml(donnees[i].eventtype);
\t\t\t\t\t\tescapeHtml(donnees[i].eventname);
\t\t\t\t\t\tescapeHtml(donnees[i].eventdayname);
\t\t\t\t\t\tescapeHtml(donnees[i].eventdaynumber);
\t\t\t\t\t\tescapeHtml(donnees[i].eventmonthname);
\t\t\t\t\t\tescapeHtml(donnees[i].eventtime);


\t\t\t\t\t\t\$('#table-events > tbody').append('<tr class=\"row\"> </tr>');
\t\t\t\t\t\t\$('#table-events > tbody').find('tr:last').append('<td class=\"col-lg-1 col-md-1\"> <img src=\"'+ajaxUrl+'/views/images/p_'+donnees[i].language+'.png\" title=\"'+donnees[i].language+'\" /> </td>');
\t\t\t\t\t\t\$('#table-events > tbody').find('tr:last').append('<td class=\"col-lg-6 col-md-6\"> <a href=\"'+ajaxUrl+'/index.php?page=event&query='+donnees[i].eventtype+'&event='+donnees[i].eventname+' \">'+donnees[i].eventname+'</a></td>');
\t\t\t\t\t\t\$('#table-events > tbody').find('tr:last').append('<td class=\"col-lg-4 col-md-4\">'+donnees[i].eventdayname+' '+donnees[i].eventdaynumber+' '+donnees[i].eventmonthname+'</td>');
\t\t\t\t\t\t\$('#table-events > tbody').find('tr:last').append('<td class=\"col-lg-1 col-md-1\">'+donnees[i].eventtime+'</td>');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} else if (zpeaktype == 'idea') {
\t\t\t\t//Set dropdowns to current choice.
\t\t\t\t\$('#current_picked_ideayear').html(pickedyear);
\t\t\t\t\$('#current_picked_ideamonth').html(pickedmonth);

\t\t\t\t//Reset disabled state of all dropdowns.
\t\t\t\t\$('ul#idea-years > li').attr(\"class\", \"\");
\t\t\t\t\$('ul#idea-months > li').attr(\"class\", \"\");

\t\t\t\t//Disable selected dropdown choices.
\t\t\t\t\$('ul#idea-years > li#ideas-'+pickedyear).attr(\"class\", \"disabled\");
\t\t\t\t\$('ul#idea-months > li#ideas-'+pickedmonth).attr(\"class\", \"disabled\");

\t\t\t\t\$('#table-ideas > tbody').html(\"\");

\t\t\t\tif(donnees.length === 0) {
\t\t\t\t\t\$('#empty-ideas-message').show();
\t\t\t\t} else {
\t\t\t\t\t\$('#empty-ideas-message').hide();
\t\t\t\t\tfor (var i = 0; i < donnees.length; i++) {

\t\t\t\t\t\t//escapeHtml
\t\t\t\t\t\tescapeHtml(donnees[i].language);
\t\t\t\t\t\tescapeHtml(donnees[i].ideatype);
\t\t\t\t\t\tescapeHtml(donnees[i].ideaname);
\t\t\t\t\t\tescapeHtml(donnees[i].ideadayname);
\t\t\t\t\t\tescapeHtml(donnees[i].ideadaynumber);
\t\t\t\t\t\tescapeHtml(donnees[i].ideamonthname);
\t\t\t\t\t\tescapeHtml(donnees[i].ideatime);

\t\t\t\t\t\t\$('#table-ideas > tbody').append('<tr class=\"row\"> </tr>');
\t\t\t\t\t\t\$('#table-ideas > tbody').find('tr:last').append('<td class=\"\"> <img src=\"'+ajaxUrl+'/views/images/p_'+donnees[i].language+'.png\" title=\"'+donnees[i].language+'\" /> </td>');
\t\t\t\t\t\t\$('#table-ideas > tbody').find('tr:last').append('<td class=\"\"> <a href=\"'+ajaxUrl+'/index.php?page=profil&profil='+donnees[i].organizer+'\" >'+donnees[i].organizer+'</a></td>');
\t\t\t\t\t\t\$('#table-ideas > tbody').find('tr:last').append('<td class=\"\"> <a href=\"'+ajaxUrl+'/index.php?page=idea&query='+donnees[i].ideatype+'&idea='+donnees[i].ideaname+'\" >'+donnees[i].ideaname+'</a></td>');
\t\t\t\t\t\t\$('#table-ideas > tbody').find('tr:last').append('<td class=\"\">'+donnees[i].ideadayname+' '+donnees[i].ideadaynumber+' '+donnees[i].ideamonthname+'</td>');
\t\t\t\t\t\t\$('#table-ideas > tbody').find('tr:last').append('<td class=\"\">'+donnees[i].ideatime+'</td>');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t} //End of condition zpeaktype
\t\t\tretrieve_pagination(baseUrl, query, zpeaktype, pickedyear, pickedmonth, '', '', pagenumber);
\t\t}  //End of success block
\t});
}


function showDatetimePicker() {
\tvar currDate = new Date();
\tvar initDate = currDate.getFullYear() + \"-\" + currDate.getMonth() + \"-\" + currDate.getDate() + \" \" + currDate.getDay;
\t//var maxDate = initDate.getYear()+1 + '-' initDate.getMonth() + '-' initDate.getDate();
\tvar maxDate = (currDate.getFullYear()+1) + \"-\" + (currDate.getMonth()+2) + \"-\" + currDate.getDate();

\t// \$(\".datetimepicker-hours\").attr(\"style\", \"width:30%;\");
\t// \$(\".datetimepicker-minutes\").attr(\"style\", \"width:30%;\");
\t\$(\".datetime-btn\").datetimepicker({
\tlanguage: \"fr\",
  autoclose: true,
\tmaxView: \"year\",
\tminuteStep: 15,
\trtl: true,
\tfontAwesome: true,
  todayBtn: true,
\ttodayHighlight: \"true\",
\tpickerPosition: \"bottom-right\",
\tformat: \"yyyy-mm-dd hh:ii\",
\t//startDate: \"2016-09-01 21:00\",
\tstartDate: initDate,
\t//endDate: \"2018-09-01 21:00\"
\tendDate: maxDate
    });
};


function genericShowModalEvent(logo, color, img, query, modalIdSelector) {
\t\$('#modalSelectQuery').modal('hide');

\t\$('#'+modalIdSelector+' .EventLogoTitle').attr(\"src\", logo);
\t\$('#'+modalIdSelector+' .modal-title').attr(\"style\", color);
\t\$('#'+modalIdSelector+' .EventQueryImg').attr(\"src\", img);
\t\$('#'+modalIdSelector+' .EventQueryImg').attr(\"alt\", query);
\t\$('#'+modalIdSelector+' .hiddenInputQuery').attr(\"value\", query);
}
", "Gozpeak/views/js/myScript.js", "/root/Gozpeak/app/Resources/views/Gozpeak/views/js/myScript.js");
    }
}
