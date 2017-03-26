<?php

/* Gozpeak/views/event-logged.php */
class __TwigTemplate_014090529e99ad4d172969c4b6d429d9a0264b3a0793a85d6d42fa8655ed26c1 extends Twig_Template
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
        $__internal_92b4794a87b8509092a9e0b2624b1afbfe313be8720dd632afee431a11bd091e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92b4794a87b8509092a9e0b2624b1afbfe313be8720dd632afee431a11bd091e->enter($__internal_92b4794a87b8509092a9e0b2624b1afbfe313be8720dd632afee431a11bd091e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/event-logged.php"));

        $__internal_3578660228cbecea6f82b29b815dc8e815e101d218a37259b1169f44976eb84e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3578660228cbecea6f82b29b815dc8e815e101d218a37259b1169f44976eb84e->enter($__internal_3578660228cbecea6f82b29b815dc8e815e101d218a37259b1169f44976eb84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/event-logged.php"));

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
        <legend class=\"scheduler-border events-title\" style=\"padding-top: 2%;\"> <img style=\"width: 8%;\" src=\"views/images/zpeak_orange.png\" alt=\"Zpeak\"/> sortie : \"<?php echo \$infos_event['eventname']; ?>\"</legend>
        <table class=\"table table-striped table-hover\">
          <tr>
            <th> Organisateur : </th>
            <td> <img src=\"<?php echo \$baseUrl.'views/images/gozpeak_mini.png' ?>\" alt=\"Gozpeak Team\" title=\"Gozpeak\" />
          </tr>

          <tr>
            <th> Langue(s) : </th>
            <!-- <td> <img src=\"<?php #echo \$minilang[\$_SESSION['language']]['icon'][\$infos_event['language']]['png']?>\">  <?php #echo \$infos_event['language'] ?><br/> </td> -->
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
            <td> <img style=\"width: 45%;\" src=\"<?php echo \$baseUrl.\"/\".\$home[\$_SESSION['language']][\$infos_event['eventtype']]['img']; ?>\" alt=\"<?php \$home[\$_SESSION['language']][\$infos_idea['ideatype']]['alt'] ?>\" title=\"<?php echo \$home[\$_SESSION['language']][\$infos_event['eventtype']]['text'] ?>\" /> </td>
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
            <td> <?php echo \$infos_event['eventdayname'].' '.\$infos_event['eventdaynumber'].' '.\$infos_event['eventmonthname'].' '.\$infos_event['eventyear']; ?>,  à  <?php echo \$infos_event['eventtime']; ?>
            </td>
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
\t\t\t<?php if (\$user_is_organizer == 1) { ?>
        <script src=\"views/js/jquery.eventedit.js\"></script>
        <button onclick=\"showModalEventEdit()\" title=\"<?php echo \$form[\$_SESSION['language']]['organizer']['eventedit']['title']; ?>\" class=\"event-edit btn btn-primary pull-left\"><?php echo \$form[\$_SESSION['language']]['organizer']['eventedit']['desc']; ?></button>
      <?php } elseif (\$user_registered == 0) { ?>
\t\t\t\t<form class=\"form-horizontal event-addmember\" action=\"<?php echo \$baseUrl.'/controllers/event_addmember.php' ?>\" method=\"POST\" enctype=\"multipart/form-data\">
\t\t\t\t\t<input type=\"hidden\" name=\"addmember-eventname\" value=\"<?php echo \$infos_event['eventname']; ?>\">
\t\t\t\t\t<button type=\"submit\" class=\"event-addmember btn btn-primary pull-left\"><?php echo \$form[\$_SESSION['language']]['addmember']['desc']; ?></button>
\t\t\t\t</form>

\t\t\t<?php } elseif (\$user_registered == 1) { ?>
\t\t\t\t<form class=\"form-horizontal event-addmember\" action=\"<?php echo \$baseUrl.'/controllers/event_delmember.php' ?>\" method=\"POST\" enctype=\"multipart/form-data\">
\t\t\t\t\t<input type=\"hidden\" name=\"delmember-eventname\" value=\"<?php echo \$infos_event['eventname']; ?>\">
\t\t\t\t  <button type=\"submit\" class=\"event-addmember btn btn-default pull-left\"><?php echo \$form[\$_SESSION['language']]['delmember']['desc']; ?></button>
\t\t\t\t</form>
\t\t\t<?php } ?>
        <button title=\"<?php echo \$form[\$_SESSION['language']]['listmembers']['title']; ?>\" data-toggle=\"modal\" data-target=\"#modal-displaymembers\" onclick=\"showEventMembers('<?php echo \$baseUrl; ?>', 'zpeakevent','<?php echo \$infos_event['eventname'] ?>')\" class=\"event-listmembers btn btn-default pull-left\"><?php echo \$form[\$_SESSION['language']]['listmembers']['desc']; ?> <span class=\"badge\"><?php echo \$nb_members; ?></span></button>
      </div>
    </div>
  </div>

  <!-- <div class=\"row\">
    <div class=\"col-lg-offset-2 col-lg-9\" style=\"background-color: dimgray;\">
      Futur comments
    </div>
  </div> -->
</div>  <!-- END OF CORPSE -->
";
        
        $__internal_92b4794a87b8509092a9e0b2624b1afbfe313be8720dd632afee431a11bd091e->leave($__internal_92b4794a87b8509092a9e0b2624b1afbfe313be8720dd632afee431a11bd091e_prof);

        
        $__internal_3578660228cbecea6f82b29b815dc8e815e101d218a37259b1169f44976eb84e->leave($__internal_3578660228cbecea6f82b29b815dc8e815e101d218a37259b1169f44976eb84e_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/views/event-logged.php";
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
        <legend class=\"scheduler-border events-title\" style=\"padding-top: 2%;\"> <img style=\"width: 8%;\" src=\"views/images/zpeak_orange.png\" alt=\"Zpeak\"/> sortie : \"<?php echo \$infos_event['eventname']; ?>\"</legend>
        <table class=\"table table-striped table-hover\">
          <tr>
            <th> Organisateur : </th>
            <td> <img src=\"<?php echo \$baseUrl.'views/images/gozpeak_mini.png' ?>\" alt=\"Gozpeak Team\" title=\"Gozpeak\" />
          </tr>

          <tr>
            <th> Langue(s) : </th>
            <!-- <td> <img src=\"<?php #echo \$minilang[\$_SESSION['language']]['icon'][\$infos_event['language']]['png']?>\">  <?php #echo \$infos_event['language'] ?><br/> </td> -->
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
            <td> <img style=\"width: 45%;\" src=\"<?php echo \$baseUrl.\"/\".\$home[\$_SESSION['language']][\$infos_event['eventtype']]['img']; ?>\" alt=\"<?php \$home[\$_SESSION['language']][\$infos_idea['ideatype']]['alt'] ?>\" title=\"<?php echo \$home[\$_SESSION['language']][\$infos_event['eventtype']]['text'] ?>\" /> </td>
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
            <td> <?php echo \$infos_event['eventdayname'].' '.\$infos_event['eventdaynumber'].' '.\$infos_event['eventmonthname'].' '.\$infos_event['eventyear']; ?>,  à  <?php echo \$infos_event['eventtime']; ?>
            </td>
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
\t\t\t<?php if (\$user_is_organizer == 1) { ?>
        <script src=\"views/js/jquery.eventedit.js\"></script>
        <button onclick=\"showModalEventEdit()\" title=\"<?php echo \$form[\$_SESSION['language']]['organizer']['eventedit']['title']; ?>\" class=\"event-edit btn btn-primary pull-left\"><?php echo \$form[\$_SESSION['language']]['organizer']['eventedit']['desc']; ?></button>
      <?php } elseif (\$user_registered == 0) { ?>
\t\t\t\t<form class=\"form-horizontal event-addmember\" action=\"<?php echo \$baseUrl.'/controllers/event_addmember.php' ?>\" method=\"POST\" enctype=\"multipart/form-data\">
\t\t\t\t\t<input type=\"hidden\" name=\"addmember-eventname\" value=\"<?php echo \$infos_event['eventname']; ?>\">
\t\t\t\t\t<button type=\"submit\" class=\"event-addmember btn btn-primary pull-left\"><?php echo \$form[\$_SESSION['language']]['addmember']['desc']; ?></button>
\t\t\t\t</form>

\t\t\t<?php } elseif (\$user_registered == 1) { ?>
\t\t\t\t<form class=\"form-horizontal event-addmember\" action=\"<?php echo \$baseUrl.'/controllers/event_delmember.php' ?>\" method=\"POST\" enctype=\"multipart/form-data\">
\t\t\t\t\t<input type=\"hidden\" name=\"delmember-eventname\" value=\"<?php echo \$infos_event['eventname']; ?>\">
\t\t\t\t  <button type=\"submit\" class=\"event-addmember btn btn-default pull-left\"><?php echo \$form[\$_SESSION['language']]['delmember']['desc']; ?></button>
\t\t\t\t</form>
\t\t\t<?php } ?>
        <button title=\"<?php echo \$form[\$_SESSION['language']]['listmembers']['title']; ?>\" data-toggle=\"modal\" data-target=\"#modal-displaymembers\" onclick=\"showEventMembers('<?php echo \$baseUrl; ?>', 'zpeakevent','<?php echo \$infos_event['eventname'] ?>')\" class=\"event-listmembers btn btn-default pull-left\"><?php echo \$form[\$_SESSION['language']]['listmembers']['desc']; ?> <span class=\"badge\"><?php echo \$nb_members; ?></span></button>
      </div>
    </div>
  </div>

  <!-- <div class=\"row\">
    <div class=\"col-lg-offset-2 col-lg-9\" style=\"background-color: dimgray;\">
      Futur comments
    </div>
  </div> -->
</div>  <!-- END OF CORPSE -->
", "Gozpeak/views/event-logged.php", "/root/Gozpeak/app/Resources/views/Gozpeak/views/event-logged.php");
    }
}
