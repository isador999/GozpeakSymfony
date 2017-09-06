<?php

/* modals/modal-profile-eventlist.php */
class __TwigTemplate_807a1da822c0c940946de2d39c677221713b9d1e0b8ae54303c2b984af86cace extends Twig_Template
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
        $__internal_af998e2e7fa6e286eb4de8c62157cf4fdb91f3cd80156fb339c67c62e518b045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af998e2e7fa6e286eb4de8c62157cf4fdb91f3cd80156fb339c67c62e518b045->enter($__internal_af998e2e7fa6e286eb4de8c62157cf4fdb91f3cd80156fb339c67c62e518b045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modals/modal-profile-eventlist.php"));

        $__internal_f752eba93bc386512c1e48f73e357136432c99151dd03dd31a29f81934db8342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f752eba93bc386512c1e48f73e357136432c99151dd03dd31a29f81934db8342->enter($__internal_f752eba93bc386512c1e48f73e357136432c99151dd03dd31a29f81934db8342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modals/modal-profile-eventlist.php"));

        // line 1
        echo "<!-- Modal What -->
<div class=\"modal fade\" style=\"display:none;\" id=\"modalProfileEventListing\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalProfileEventListing\">
\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title\"><?php echo \$modal[\$_SESSION['language']]['profile']['eventlist']['title']; ?></h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">

\t\t\t\t<div class=\"listing-events row\">
\t\t\t\t\t<div class=\"table-responsive eventsblock col-lg-offset-1 col-lg-10\">

\t\t\t\t\t\t<fieldset class=\"scheduler-border\">
\t\t\t\t\t\t\t<legend class=\"scheduler-border row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-8 col-md-6 ideas-title\">
\t\t\t\t\t\t\t\t\tVos <img src=\"<?php echo \$baseUrl.'views/images/zpeak_bleu.png' ?>\" style=\"width:20%;\" alt=\"Zpeak\"/> idées postées
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</legend>

\t\t\t\t\t\t\t<div id=\"empty-ideas-message-profile\" class=\"empty-events text-center alert-info\"><?php echo \$modal[\$_SESSION['language']]['profile']['eventlist']['empty']; ?></div>

\t\t\t\t\t\t\t<table id=\"table-ideas-profile\" class=\"table table-striped table-hover\">
\t\t\t\t\t\t  \t<thead>
\t\t\t\t\t\t\t\t\t<tr class=\"row\">
\t\t\t\t\t\t\t\t\t\t<th>Langue&nbsp;</th>
\t\t\t\t\t\t\t\t\t\t<th>Catégorie&nbsp;</th>
\t\t\t              <th>Idée&nbsp;</th>
\t\t\t              <th>Date&nbsp;</th>
\t\t\t              <th>Heure&nbsp;</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t  \t</thead>

\t\t\t        \t<tbody>

\t\t\t\t\t\t  \t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row pageblock text-center\">
\t\t\t\t\t<ul class=\"pagination pagination-lg pagination_idea\">

\t\t\t\t\t</ul>
\t\t\t\t</div>


\t\t\t</div>

\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><?php echo \$modal['fr']['generic']['closed']; ?></button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_af998e2e7fa6e286eb4de8c62157cf4fdb91f3cd80156fb339c67c62e518b045->leave($__internal_af998e2e7fa6e286eb4de8c62157cf4fdb91f3cd80156fb339c67c62e518b045_prof);

        
        $__internal_f752eba93bc386512c1e48f73e357136432c99151dd03dd31a29f81934db8342->leave($__internal_f752eba93bc386512c1e48f73e357136432c99151dd03dd31a29f81934db8342_prof);

    }

    public function getTemplateName()
    {
        return "modals/modal-profile-eventlist.php";
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
        return new Twig_Source("<!-- Modal What -->
<div class=\"modal fade\" style=\"display:none;\" id=\"modalProfileEventListing\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalProfileEventListing\">
\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title\"><?php echo \$modal[\$_SESSION['language']]['profile']['eventlist']['title']; ?></h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">

\t\t\t\t<div class=\"listing-events row\">
\t\t\t\t\t<div class=\"table-responsive eventsblock col-lg-offset-1 col-lg-10\">

\t\t\t\t\t\t<fieldset class=\"scheduler-border\">
\t\t\t\t\t\t\t<legend class=\"scheduler-border row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-8 col-md-6 ideas-title\">
\t\t\t\t\t\t\t\t\tVos <img src=\"<?php echo \$baseUrl.'views/images/zpeak_bleu.png' ?>\" style=\"width:20%;\" alt=\"Zpeak\"/> idées postées
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</legend>

\t\t\t\t\t\t\t<div id=\"empty-ideas-message-profile\" class=\"empty-events text-center alert-info\"><?php echo \$modal[\$_SESSION['language']]['profile']['eventlist']['empty']; ?></div>

\t\t\t\t\t\t\t<table id=\"table-ideas-profile\" class=\"table table-striped table-hover\">
\t\t\t\t\t\t  \t<thead>
\t\t\t\t\t\t\t\t\t<tr class=\"row\">
\t\t\t\t\t\t\t\t\t\t<th>Langue&nbsp;</th>
\t\t\t\t\t\t\t\t\t\t<th>Catégorie&nbsp;</th>
\t\t\t              <th>Idée&nbsp;</th>
\t\t\t              <th>Date&nbsp;</th>
\t\t\t              <th>Heure&nbsp;</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t  \t</thead>

\t\t\t        \t<tbody>

\t\t\t\t\t\t  \t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row pageblock text-center\">
\t\t\t\t\t<ul class=\"pagination pagination-lg pagination_idea\">

\t\t\t\t\t</ul>
\t\t\t\t</div>


\t\t\t</div>

\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><?php echo \$modal['fr']['generic']['closed']; ?></button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
", "modals/modal-profile-eventlist.php", "/root/GozpeakSymfony/app/Resources/views/modals/modal-profile-eventlist.php");
    }
}
