<?php

/* Gozpeak/views/modals/modal-profile-eventlist.php */
class __TwigTemplate_5cda8b88ddac3fe52010a044b62cc098b5075b024c13c126774bf65cba5feb2c extends Twig_Template
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
        $__internal_bb913e96ffadd9ee63ed06f629ce61a13440231e241322120b18767da75c3373 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb913e96ffadd9ee63ed06f629ce61a13440231e241322120b18767da75c3373->enter($__internal_bb913e96ffadd9ee63ed06f629ce61a13440231e241322120b18767da75c3373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/modals/modal-profile-eventlist.php"));

        $__internal_8fee2d6bb8c70e347366b7163ca0977df576473d2d87a8fe6361d01c7b8beb57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fee2d6bb8c70e347366b7163ca0977df576473d2d87a8fe6361d01c7b8beb57->enter($__internal_8fee2d6bb8c70e347366b7163ca0977df576473d2d87a8fe6361d01c7b8beb57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/modals/modal-profile-eventlist.php"));

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
        
        $__internal_bb913e96ffadd9ee63ed06f629ce61a13440231e241322120b18767da75c3373->leave($__internal_bb913e96ffadd9ee63ed06f629ce61a13440231e241322120b18767da75c3373_prof);

        
        $__internal_8fee2d6bb8c70e347366b7163ca0977df576473d2d87a8fe6361d01c7b8beb57->leave($__internal_8fee2d6bb8c70e347366b7163ca0977df576473d2d87a8fe6361d01c7b8beb57_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/views/modals/modal-profile-eventlist.php";
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
", "Gozpeak/views/modals/modal-profile-eventlist.php", "/root/Gozpeak/app/Resources/views/Gozpeak/views/modals/modal-profile-eventlist.php");
    }
}
