<?php

/* event-notlogged.php */
class __TwigTemplate_0716d78961272c32151601938f48979c007e3351fc66c8fe1de0b8d73a4a5c09 extends Twig_Template
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
        $__internal_ed10f9a80631e0df0a8adcdbde27f4beabcde16ebf500104b832e905a9033f91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed10f9a80631e0df0a8adcdbde27f4beabcde16ebf500104b832e905a9033f91->enter($__internal_ed10f9a80631e0df0a8adcdbde27f4beabcde16ebf500104b832e905a9033f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "event-notlogged.php"));

        $__internal_a0834909dbc469224f8592a586da76b73547777daadefe76f9410ab40e7cbaa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0834909dbc469224f8592a586da76b73547777daadefe76f9410ab40e7cbaa4->enter($__internal_a0834909dbc469224f8592a586da76b73547777daadefe76f9410ab40e7cbaa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "event-notlogged.php"));

        // line 1
        echo "<div class=\"corpse container-fluid\">
  <?php if(isset(\$_SESSION['msg'])) echo \$_SESSION['msg']; ?>
  
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
        
        $__internal_ed10f9a80631e0df0a8adcdbde27f4beabcde16ebf500104b832e905a9033f91->leave($__internal_ed10f9a80631e0df0a8adcdbde27f4beabcde16ebf500104b832e905a9033f91_prof);

        
        $__internal_a0834909dbc469224f8592a586da76b73547777daadefe76f9410ab40e7cbaa4->leave($__internal_a0834909dbc469224f8592a586da76b73547777daadefe76f9410ab40e7cbaa4_prof);

    }

    public function getTemplateName()
    {
        return "event-notlogged.php";
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
  <?php if(isset(\$_SESSION['msg'])) echo \$_SESSION['msg']; ?>
  
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
", "event-notlogged.php", "/root/GozpeakSymfony/app/Resources/views/event-notlogged.php");
    }
}
