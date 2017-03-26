<?php

/* Gozpeak/views/event-notlogged.php */
class __TwigTemplate_c237d588aaf08d6afbcc68d4ed6177a3065d7e2aa07566aef2d9d679c7d4ec98 extends Twig_Template
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
        $__internal_4eef1ee344dd610e30a03cf3ede27682624e297b1a066fd3e0ce6fc19ffea2ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eef1ee344dd610e30a03cf3ede27682624e297b1a066fd3e0ce6fc19ffea2ec->enter($__internal_4eef1ee344dd610e30a03cf3ede27682624e297b1a066fd3e0ce6fc19ffea2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/event-notlogged.php"));

        $__internal_df389f2ac845ddeab192d1c7c9a035f47811a7eb00c0ec56e096315a446de44d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df389f2ac845ddeab192d1c7c9a035f47811a7eb00c0ec56e096315a446de44d->enter($__internal_df389f2ac845ddeab192d1c7c9a035f47811a7eb00c0ec56e096315a446de44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/event-notlogged.php"));

        // line 1
        echo "<div class=\"corpse container-fluid\">

  <div class=\"row\">
    <div class=\"text-center activity\">
      <a href=\"<?php echo \$baseUrl; ?>/index.php?page=list&query=<?php echo \$query?>\"><img src=\"<?php echo \$home[\$_SESSION['language']][\$query]['img'] ?>\" style=\"width:240px;\" alt=\"<?php echo \$query?>\" title=\"<?php echo \$home[\$_SESSION['language']][\$query]['title'] ?>\" /></a>
      <p> <?php echo \$home[\$_SESSION['language']][\$query]['text'] ?></p>
    </div>
  </div>

  <div class=\"row generic-eventblock\">
    <div class=\"col-lg-8 event-infos\">
      <fieldset class=\"table-responsive scheduler-border\">
        <legend class=\"scheduler-border events-title\" style=\"padding-top: 2%;\">
          <img src=\"views/images/zpeak_orange.png\" style=\"width: 8%;\" alt=\"Zpeak\"/> sortie : \"<?php echo \$infos_event['eventname']; ?>\"
        </legend>

        <table class=\"table table-striped table-hover\">
          <tr>
            <th> Organisateur : </th>
            <td> <img src=\"<?php echo \$baseUrl; ?>/views/images/gozpeak_mini.png\" alt=\"Gozpeak Team\" title=\"Gozpeak\" />
          </tr>

          <tr>
            <th> Langue(s) : </th>
            <td> <img src=\"<?php echo \$baseUrl.\"/\".\$minilang[\$_SESSION['language']]['icon'][\$infos_event['language']]['png']; ?>\" alt=\"langue de l'événement\" /> <?php echo \$minilang[\$_SESSION['language']]['icon'][\$infos_event['language']]['text']; ?> </td>
          </tr>

          <tr>
            <th> Niveau de langue conseillé : </th>
            <td> <?php echo \$infos_event['level_language'] ?> </td>
          </tr>

          <tr>
            <th> Nom de l'événement : </th>
            <td> <?php echo \$infos_event['eventname'] ?> </td>
          </tr>

          <tr>
            <th> Description : </th>
            <td> <?php echo \$infos_event['eventdesc'] ?> </td>
          </tr>

          <tr>
            <th> Type d'activité : </th>
            <td> <img style=\"width: 45%;\" src=\"<?php echo \$baseUrl.\"/\".\$home[\$_SESSION['language']][\$infos_event['eventtype']]['img'] ?>\" alt=\"<?php \$home[\$_SESSION['language']][\$infos_idea['ideatype']]['alt'] ?>\" title=\"<?php echo \$home[\$_SESSION['language']][\$infos_event['eventtype']]['text'] ?>\" /> </td>
          </tr>

          <tr>
            <th> Lieu : </th>
            <td> <?php echo \$infos_event['eventplace'] ?> </td>
          </tr>

          <tr>
            <th> Evénement posté le : </th>
            <td> <?php echo \$infos_event['date'] ?> </td>
          </tr>

          <tr>
            <th> Date et heure de l'événement proposé : </th>
            <td> <?php echo \$infos_event['eventdayname'].' '.\$infos_event['eventdaynumber'].' '.\$infos_event['eventmonthname'].' '.\$infos_event['eventyear']; ?>,  à  <?php echo \$infos_event['eventtime']; ?> </td>
          </tr>

          <tr>
            <th> Temps restant avant le début de l'événement : </th>
            <td> <?php echo \$DiffDate ?> </td>
          </tr>
        </table>
      </fieldset>
    </div>  <!-- END OF event-infos -->

    <!-- EVENT BUTTONS -->
    <div class=\"row\">
      <div class=\"col-lg-offset-1 col-lg-2 col-md-offset-1 col-md-3 col-sm-offset-1 col-sm-3 col-xs-offset-1 col-xs-3 text-center event-buttons\">
        <button type=\"button\" title=\"<?php echo \$form[\$_SESSION['language']]['addmember']['title']; ?>\" class=\"event-addmember btn btn-primary pull-right disabled\"><?php echo \$form[\$_SESSION['language']]['addmember']['desc']; ?></button>
      </div>
    </div>
  </div>

  <!-- <div class=\"row\">
    <div class=\"col-lg-12\" style=\"background-color: dimgray;\">
      Futur comments
    </div>
  </div> -->
</div>  <!-- END OF CORPSE -->
";
        
        $__internal_4eef1ee344dd610e30a03cf3ede27682624e297b1a066fd3e0ce6fc19ffea2ec->leave($__internal_4eef1ee344dd610e30a03cf3ede27682624e297b1a066fd3e0ce6fc19ffea2ec_prof);

        
        $__internal_df389f2ac845ddeab192d1c7c9a035f47811a7eb00c0ec56e096315a446de44d->leave($__internal_df389f2ac845ddeab192d1c7c9a035f47811a7eb00c0ec56e096315a446de44d_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/views/event-notlogged.php";
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
        return new Twig_Source("<div class=\"corpse container-fluid\">

  <div class=\"row\">
    <div class=\"text-center activity\">
      <a href=\"<?php echo \$baseUrl; ?>/index.php?page=list&query=<?php echo \$query?>\"><img src=\"<?php echo \$home[\$_SESSION['language']][\$query]['img'] ?>\" style=\"width:240px;\" alt=\"<?php echo \$query?>\" title=\"<?php echo \$home[\$_SESSION['language']][\$query]['title'] ?>\" /></a>
      <p> <?php echo \$home[\$_SESSION['language']][\$query]['text'] ?></p>
    </div>
  </div>

  <div class=\"row generic-eventblock\">
    <div class=\"col-lg-8 event-infos\">
      <fieldset class=\"table-responsive scheduler-border\">
        <legend class=\"scheduler-border events-title\" style=\"padding-top: 2%;\">
          <img src=\"views/images/zpeak_orange.png\" style=\"width: 8%;\" alt=\"Zpeak\"/> sortie : \"<?php echo \$infos_event['eventname']; ?>\"
        </legend>

        <table class=\"table table-striped table-hover\">
          <tr>
            <th> Organisateur : </th>
            <td> <img src=\"<?php echo \$baseUrl; ?>/views/images/gozpeak_mini.png\" alt=\"Gozpeak Team\" title=\"Gozpeak\" />
          </tr>

          <tr>
            <th> Langue(s) : </th>
            <td> <img src=\"<?php echo \$baseUrl.\"/\".\$minilang[\$_SESSION['language']]['icon'][\$infos_event['language']]['png']; ?>\" alt=\"langue de l'événement\" /> <?php echo \$minilang[\$_SESSION['language']]['icon'][\$infos_event['language']]['text']; ?> </td>
          </tr>

          <tr>
            <th> Niveau de langue conseillé : </th>
            <td> <?php echo \$infos_event['level_language'] ?> </td>
          </tr>

          <tr>
            <th> Nom de l'événement : </th>
            <td> <?php echo \$infos_event['eventname'] ?> </td>
          </tr>

          <tr>
            <th> Description : </th>
            <td> <?php echo \$infos_event['eventdesc'] ?> </td>
          </tr>

          <tr>
            <th> Type d'activité : </th>
            <td> <img style=\"width: 45%;\" src=\"<?php echo \$baseUrl.\"/\".\$home[\$_SESSION['language']][\$infos_event['eventtype']]['img'] ?>\" alt=\"<?php \$home[\$_SESSION['language']][\$infos_idea['ideatype']]['alt'] ?>\" title=\"<?php echo \$home[\$_SESSION['language']][\$infos_event['eventtype']]['text'] ?>\" /> </td>
          </tr>

          <tr>
            <th> Lieu : </th>
            <td> <?php echo \$infos_event['eventplace'] ?> </td>
          </tr>

          <tr>
            <th> Evénement posté le : </th>
            <td> <?php echo \$infos_event['date'] ?> </td>
          </tr>

          <tr>
            <th> Date et heure de l'événement proposé : </th>
            <td> <?php echo \$infos_event['eventdayname'].' '.\$infos_event['eventdaynumber'].' '.\$infos_event['eventmonthname'].' '.\$infos_event['eventyear']; ?>,  à  <?php echo \$infos_event['eventtime']; ?> </td>
          </tr>

          <tr>
            <th> Temps restant avant le début de l'événement : </th>
            <td> <?php echo \$DiffDate ?> </td>
          </tr>
        </table>
      </fieldset>
    </div>  <!-- END OF event-infos -->

    <!-- EVENT BUTTONS -->
    <div class=\"row\">
      <div class=\"col-lg-offset-1 col-lg-2 col-md-offset-1 col-md-3 col-sm-offset-1 col-sm-3 col-xs-offset-1 col-xs-3 text-center event-buttons\">
        <button type=\"button\" title=\"<?php echo \$form[\$_SESSION['language']]['addmember']['title']; ?>\" class=\"event-addmember btn btn-primary pull-right disabled\"><?php echo \$form[\$_SESSION['language']]['addmember']['desc']; ?></button>
      </div>
    </div>
  </div>

  <!-- <div class=\"row\">
    <div class=\"col-lg-12\" style=\"background-color: dimgray;\">
      Futur comments
    </div>
  </div> -->
</div>  <!-- END OF CORPSE -->
", "Gozpeak/views/event-notlogged.php", "/root/Gozpeak/app/Resources/views/Gozpeak/views/event-notlogged.php");
    }
}
