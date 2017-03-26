<?php

/* Gozpeak/views/js/jquery.listmembers.js */
class __TwigTemplate_e2c62a90e79548d99a776ea80e7b6c96778a37a13e8a5817db223ebe0241636e extends Twig_Template
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
        $__internal_b9f18e02f622b17fdaceb5ff05107da11a81eaa4d677ff18c3ac6a99c09cd87a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9f18e02f622b17fdaceb5ff05107da11a81eaa4d677ff18c3ac6a99c09cd87a->enter($__internal_b9f18e02f622b17fdaceb5ff05107da11a81eaa4d677ff18c3ac6a99c09cd87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/js/jquery.listmembers.js"));

        $__internal_470221e0a821e5f5f27e994378985e936d84fc799dd027d962bef8e822917990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_470221e0a821e5f5f27e994378985e936d84fc799dd027d962bef8e822917990->enter($__internal_470221e0a821e5f5f27e994378985e936d84fc799dd027d962bef8e822917990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/js/jquery.listmembers.js"));

        // line 1
        echo "

/*function showDatetimePicker() {
        var currDate = new Date();
        var initDate = currDate.getFullYear() + \"-\" + currDate.getMonth() + \"-\" + currDate.getDate() + \" \" + currDate.getDay;
        var maxDate = (currDate.getFullYear()+1) + \"-\" + (currDate.getMonth()+2) + \"-\" + currDate.getDate();

        \$(\"#datetime-lang\").datetimepicker({
        language: \"fr\",
        autoclose: true,
        maxView: \"year\",
        minuteStep: 15,
        rtl: true,
        fontAwesome: true,
        todayBtn: true,
        todayHighlight: \"true\",
        pickerPosition: \"bottom-right\",
        format: \"yyyy-mm-dd hh:ii\",
        startDate: initDate,
        endDate: maxDate
    });*/
    //\$('#datetime-btn').datetimepicker('update');
    /*\$(\"#datetime-btn\").datetimepicker().on('changeDate'), function (ev) {
        \$(\"#input-test\").change();
    };*/
//};

// Show Modal What
//function showDisplayMembers(){
//        \$('#modal-displaymembers').modal('show');
//}


function showEventMembers(baseUrl, zpeaktype, eventname) {
\t// Retrieve name of each member (Ajax ?)
\tajaxUrl = baseUrl;

\t\$.ajax({
\t  type: \"GET\",
    url: ajaxUrl+'/controllers/members-list.php?',
\t  data: \"zpeaktype=\" + zpeaktype + \"&eventname=\" + eventname,
\t\tcontentType: \"application/x-www-form-urlencoded;charset=ISO-8859-15\",
\t\tcache: false,
\t  success: function(data)
\t  {
\t    //alert(\"Liste des membres actuellement inscrits : \" + data + \", \" + data + \".\");
\t    //var tmp = data.split(\",\");
\t    \$(\"#ajaxupdate\").html(data);
\t    /*if (\$(\"h4\").hasClass('modal-title displaymembers')) {
\t\t\$(\"<span class=eventtitle-displaymembers> \" + eventname + \" </span>\").appendTo(\"h4\");
\t    };*/
\t    /*\$('#modal-displaymembers').modal('show');*/
\t    //\$(\"#ajaxupdate\").dialog(\"open\");
\t  }
\t});
};


/*\$('#modal-displaymembers').on('hidden.bs.modal', function() {
    if (\$(\"span\").hasClass('displaymembers')) {
\t\$(\"span\").();
    };
});*/

//function showModalEventWithQuery(logo, color, img, query){
//\t\$('#modalSelectQuery').modal('hide');
//\t\$(\".modal-title #EventWithQueryTitle\").attr(\"src\", logo);
//\t\$(\".modal-title\").attr(\"style\", color);
//\t\$(\".modal-body #EventWithQueryImg\").attr(\"src\", img);
//\t\$(\".modal-body #EventWithQueryImg\").attr(\"alt\", query);
//
//\t\$(\".modal-body #hiddenInput\").attr(\"value\", query);
//
//\t\$('#modalEventWithQuery').modal('show');
//}
";
        
        $__internal_b9f18e02f622b17fdaceb5ff05107da11a81eaa4d677ff18c3ac6a99c09cd87a->leave($__internal_b9f18e02f622b17fdaceb5ff05107da11a81eaa4d677ff18c3ac6a99c09cd87a_prof);

        
        $__internal_470221e0a821e5f5f27e994378985e936d84fc799dd027d962bef8e822917990->leave($__internal_470221e0a821e5f5f27e994378985e936d84fc799dd027d962bef8e822917990_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/views/js/jquery.listmembers.js";
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

/*function showDatetimePicker() {
        var currDate = new Date();
        var initDate = currDate.getFullYear() + \"-\" + currDate.getMonth() + \"-\" + currDate.getDate() + \" \" + currDate.getDay;
        var maxDate = (currDate.getFullYear()+1) + \"-\" + (currDate.getMonth()+2) + \"-\" + currDate.getDate();

        \$(\"#datetime-lang\").datetimepicker({
        language: \"fr\",
        autoclose: true,
        maxView: \"year\",
        minuteStep: 15,
        rtl: true,
        fontAwesome: true,
        todayBtn: true,
        todayHighlight: \"true\",
        pickerPosition: \"bottom-right\",
        format: \"yyyy-mm-dd hh:ii\",
        startDate: initDate,
        endDate: maxDate
    });*/
    //\$('#datetime-btn').datetimepicker('update');
    /*\$(\"#datetime-btn\").datetimepicker().on('changeDate'), function (ev) {
        \$(\"#input-test\").change();
    };*/
//};

// Show Modal What
//function showDisplayMembers(){
//        \$('#modal-displaymembers').modal('show');
//}


function showEventMembers(baseUrl, zpeaktype, eventname) {
\t// Retrieve name of each member (Ajax ?)
\tajaxUrl = baseUrl;

\t\$.ajax({
\t  type: \"GET\",
    url: ajaxUrl+'/controllers/members-list.php?',
\t  data: \"zpeaktype=\" + zpeaktype + \"&eventname=\" + eventname,
\t\tcontentType: \"application/x-www-form-urlencoded;charset=ISO-8859-15\",
\t\tcache: false,
\t  success: function(data)
\t  {
\t    //alert(\"Liste des membres actuellement inscrits : \" + data + \", \" + data + \".\");
\t    //var tmp = data.split(\",\");
\t    \$(\"#ajaxupdate\").html(data);
\t    /*if (\$(\"h4\").hasClass('modal-title displaymembers')) {
\t\t\$(\"<span class=eventtitle-displaymembers> \" + eventname + \" </span>\").appendTo(\"h4\");
\t    };*/
\t    /*\$('#modal-displaymembers').modal('show');*/
\t    //\$(\"#ajaxupdate\").dialog(\"open\");
\t  }
\t});
};


/*\$('#modal-displaymembers').on('hidden.bs.modal', function() {
    if (\$(\"span\").hasClass('displaymembers')) {
\t\$(\"span\").();
    };
});*/

//function showModalEventWithQuery(logo, color, img, query){
//\t\$('#modalSelectQuery').modal('hide');
//\t\$(\".modal-title #EventWithQueryTitle\").attr(\"src\", logo);
//\t\$(\".modal-title\").attr(\"style\", color);
//\t\$(\".modal-body #EventWithQueryImg\").attr(\"src\", img);
//\t\$(\".modal-body #EventWithQueryImg\").attr(\"alt\", query);
//
//\t\$(\".modal-body #hiddenInput\").attr(\"value\", query);
//
//\t\$('#modalEventWithQuery').modal('show');
//}
", "Gozpeak/views/js/jquery.listmembers.js", "/root/Gozpeak/app/Resources/views/Gozpeak/views/js/jquery.listmembers.js");
    }
}
