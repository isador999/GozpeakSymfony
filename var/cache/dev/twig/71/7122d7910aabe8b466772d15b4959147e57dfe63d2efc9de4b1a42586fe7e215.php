<?php

/* Gozpeak/views/js/jquery.eventedit.js */
class __TwigTemplate_02649bfbd441c21d5bfba5aac6cccf8b8b3710a66f210e32872c981402e2d2a8 extends Twig_Template
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
        $__internal_67d3638be729b5e90acbb73e6c7edd5816a66b63b1e2487a8773c9f3db844ec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67d3638be729b5e90acbb73e6c7edd5816a66b63b1e2487a8773c9f3db844ec0->enter($__internal_67d3638be729b5e90acbb73e6c7edd5816a66b63b1e2487a8773c9f3db844ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/js/jquery.eventedit.js"));

        $__internal_2fe425902fb9a26cc58d87562a199028fa446b9c6325775cedc68ab48a2249c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fe425902fb9a26cc58d87562a199028fa446b9c6325775cedc68ab48a2249c4->enter($__internal_2fe425902fb9a26cc58d87562a199028fa446b9c6325775cedc68ab48a2249c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/js/jquery.eventedit.js"));

        // line 1
        echo "
function GetEventInfos(baseUrl, zpeaktype, eventname, eventlogo, eventcolor, eventimg, query) {
\tajaxUrl = baseUrl;

\t\$.ajax({
\t  type: \"GET\",
    url: ajaxUrl+'/controllers/retrieveEventData.php?',
\t  data: \"zpeaktype=\" + zpeaktype + \"&eventname=\" + eventname,
\t  dataType: 'html',
\t\tcontentType: \"application/x-www-form-urlencoded;charset=ISO-8859-15\",
    cache: false,
\t  success: function(response) {

\t\t\tvar data = JSON.parse(response);
\t\t\tif (zpeaktype == \"idea\") {
\t\t\t\t//alert(zpeaktype+\" has been called\");
\t\t\t\t\$(\".eventeditForm\").find(\"#event_name\").val(data.ideaname);
\t\t\t\t\$(\".eventeditForm\").find(\"#event_place\").val(data.ideaplace);
\t\t\t\t\$(\".eventeditForm\").find(\"#event_desc\").val(data.ideadesc);
\t\t\t\t\$(\".eventeditForm\").find(\"#phonenumber\").val(data.ideaphone);
\t\t\t\t\$(\".eventeditForm\").find(\"#datetime-btn-event\").val(data.ideadatetime);
\t\t\t\t\$(\".eventeditForm\").find(\"#select_lang\").val(data.language);
\t\t\t\t\$(\".eventeditForm\").find(\"#select_langlevel\").val(data.level_language);
\t\t\t\t\$(\".eventeditForm\").find(\".hiddenInputOldEventName\").val(data.ideaname);
\t\t\t} else if (zpeaktype == \"event\") {
\t\t\t\t\$(\".eventeditForm\").find(\"#event_name\").val(data.eventname);
\t\t\t\t\$(\".eventeditForm\").find(\"#event_place\").val(data.eventplace);
\t\t\t\t\$(\".eventeditForm\").find(\"#event_desc\").val(data.eventdesc);
\t\t\t\t\$(\".eventeditForm\").find(\"#datetime-btn\").val(data.eventdatetime);
\t\t\t\t\$(\".eventeditForm\").find(\".hiddenInputOldEventName\").val(data.eventname);
\t\t\t}
\t\t\tgenericShowModalEvent(eventlogo, eventcolor, eventimg, query, 'modalEventEdit');
\t  }
\t});
\t//\$('#modalEventEdit').modal('show');
};
";
        
        $__internal_67d3638be729b5e90acbb73e6c7edd5816a66b63b1e2487a8773c9f3db844ec0->leave($__internal_67d3638be729b5e90acbb73e6c7edd5816a66b63b1e2487a8773c9f3db844ec0_prof);

        
        $__internal_2fe425902fb9a26cc58d87562a199028fa446b9c6325775cedc68ab48a2249c4->leave($__internal_2fe425902fb9a26cc58d87562a199028fa446b9c6325775cedc68ab48a2249c4_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/views/js/jquery.eventedit.js";
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
        return new Twig_Source("
function GetEventInfos(baseUrl, zpeaktype, eventname, eventlogo, eventcolor, eventimg, query) {
\tajaxUrl = baseUrl;

\t\$.ajax({
\t  type: \"GET\",
    url: ajaxUrl+'/controllers/retrieveEventData.php?',
\t  data: \"zpeaktype=\" + zpeaktype + \"&eventname=\" + eventname,
\t  dataType: 'html',
\t\tcontentType: \"application/x-www-form-urlencoded;charset=ISO-8859-15\",
    cache: false,
\t  success: function(response) {

\t\t\tvar data = JSON.parse(response);
\t\t\tif (zpeaktype == \"idea\") {
\t\t\t\t//alert(zpeaktype+\" has been called\");
\t\t\t\t\$(\".eventeditForm\").find(\"#event_name\").val(data.ideaname);
\t\t\t\t\$(\".eventeditForm\").find(\"#event_place\").val(data.ideaplace);
\t\t\t\t\$(\".eventeditForm\").find(\"#event_desc\").val(data.ideadesc);
\t\t\t\t\$(\".eventeditForm\").find(\"#phonenumber\").val(data.ideaphone);
\t\t\t\t\$(\".eventeditForm\").find(\"#datetime-btn-event\").val(data.ideadatetime);
\t\t\t\t\$(\".eventeditForm\").find(\"#select_lang\").val(data.language);
\t\t\t\t\$(\".eventeditForm\").find(\"#select_langlevel\").val(data.level_language);
\t\t\t\t\$(\".eventeditForm\").find(\".hiddenInputOldEventName\").val(data.ideaname);
\t\t\t} else if (zpeaktype == \"event\") {
\t\t\t\t\$(\".eventeditForm\").find(\"#event_name\").val(data.eventname);
\t\t\t\t\$(\".eventeditForm\").find(\"#event_place\").val(data.eventplace);
\t\t\t\t\$(\".eventeditForm\").find(\"#event_desc\").val(data.eventdesc);
\t\t\t\t\$(\".eventeditForm\").find(\"#datetime-btn\").val(data.eventdatetime);
\t\t\t\t\$(\".eventeditForm\").find(\".hiddenInputOldEventName\").val(data.eventname);
\t\t\t}
\t\t\tgenericShowModalEvent(eventlogo, eventcolor, eventimg, query, 'modalEventEdit');
\t  }
\t});
\t//\$('#modalEventEdit').modal('show');
};
", "Gozpeak/views/js/jquery.eventedit.js", "/root/Gozpeak/app/Resources/views/Gozpeak/views/js/jquery.eventedit.js");
    }
}
