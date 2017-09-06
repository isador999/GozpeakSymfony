<?php

/* idea-logged.php */
class __TwigTemplate_83222e9aea29081aca4b222b0a46c9f534914e692f8da53338244bfa1719eccb extends Twig_Template
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
        $__internal_42087748d779259ce3e65ced16be4d263350b744f354869bb8aa6eb63d8b8d40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42087748d779259ce3e65ced16be4d263350b744f354869bb8aa6eb63d8b8d40->enter($__internal_42087748d779259ce3e65ced16be4d263350b744f354869bb8aa6eb63d8b8d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "idea-logged.php"));

        $__internal_f55f7f2405697f2ab6a72e216b072c7a2f8bd7b671f429e167680ab17f1970ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f55f7f2405697f2ab6a72e216b072c7a2f8bd7b671f429e167680ab17f1970ae->enter($__internal_f55f7f2405697f2ab6a72e216b072c7a2f8bd7b671f429e167680ab17f1970ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "idea-logged.php"));

        // line 1
        echo "<div class=\"corpse container-fluid\">
  <?php if(isset(\$_SESSION['msg'])) echo \$_SESSION['msg']; ?>

  <div class=\"row\">
    <div class=\"text-center activity\">
      <a href=\"<?php echo \$baseUrl ?>/index.php?page=list&query=<?php echo \$query?>\"><img src=\"<?php echo \$home[\$_SESSION['language']][\$query]['img'] ?>\" style=\"width:240px;\" alt=\"<?php echo \$query?>\" title=\"<?php echo \$home[\$_SESSION['language']][\$query]['title'] ?>\" /></a>
      <p> <?php echo \$home[\$_SESSION['language']][\$query]['text'] ?></p>
    </div>
  </div>

  <div class=\"row generic-eventblock\">
    <div class=\"col-lg-8 idea-infos\">
      <fieldset class=\"table-responsive scheduler-border\">
        <legend class=\"scheduler-border ideas-title\" style=\"padding-top: 2%;\"> <img style=\"width: 8%;\" src=\"views/images/zpeak_bleu.png\" alt=\"Zpeak\"/> idée : \"<?php echo \$infos_idea['ideaname']; ?>\"</legend>
        <table class=\"table table-striped table-hover\">
          <tr>
            <th> Organisateur : </th>
            <td> <a href=\"<?php echo \$baseUrl.'/index.php?page=profil&profil='.\$infos_idea['organizer']; ?>\"> <?php echo \$infos_idea['organizer'] ?> </a> </td>
          </tr>

          <tr>
            <th> Langue(s) : </th>
            <td> <img src=\"<?php echo \$baseUrl.\"/\".\$minilang[\$_SESSION['language']]['icon'][\$infos_idea['language']]['png']; ?>\" alt=\"langue de l'événement\" /> <?php echo \$minilang[\$_SESSION['language']]['icon'][\$infos_idea['language']]['text']; ?> </td>
          </tr>

          <tr>
            <th> Niveau de langue conseillé : </th>
            <td> <?php echo \$infos_idea['level_language'] ?> </td>
          </tr>

          <tr>
            <th> Nom de l'événement : </th>
            <td> <?php echo \$infos_idea['ideaname'] ?> </td>
          </tr>

          <tr>
            <th> Description : </th>
            <td> <?php echo \$infos_idea['ideadesc'] ?> </td>
          </tr>

          <tr>
            <th> Type d'activité : </th>
            <td> <img style=\"width: 35%;\" src=\"<?php echo \$baseUrl.\"/\".\$home[\$_SESSION['language']][\$infos_idea['ideatype']]['img'] ?>\" alt=\"<?php \$home[\$_SESSION['language']][\$infos_idea['ideatype']]['alt'] ?>\" title=\"<?php echo \$home[\$_SESSION['language']][\$infos_idea['ideatype']]['text'] ?>\" /> </td>
          </tr>

          <tr>
            <th> Lieu : </th>
            <td> <?php echo \$infos_idea['ideaplace'] ?></td>
          </tr>

          <tr>
            <th> Evénement posté le : </th>
            <td> <?php echo \$infos_idea['date']; ?> </td>
          </tr>

          <tr>
            <th> Date et heure de l'événement proposé : </th>
            <td> <?php echo \$infos_idea['ideadayname'].' '.\$infos_idea['ideadaynumber'].' '.\$infos_idea['ideamonthname'].' '.\$infos_idea['ideayear']; ?>,  à  <?php echo \$infos_idea['ideatime']; ?></td>
          </tr>

          <tr>
            <th> Temps restant avant le début de l'événement : </th>
            <td> <?php echo \$DiffDate ?> </td>
          </tr>
        </table>
      </fieldset>
    </div>  <!-- END OF idea-infos -->

    <!-- EVENT BUTTONS -->
    <div class=\"row\">
      <div class=\"col-lg-offset-1 col-lg-2 col-md-offset-1 col-md-3 col-sm-offset-1 col-sm-3 col-xs-offset-1 col-xs-3 event-buttons\">
        <?php if (\$user_is_organizer == 1) { ?>
          <script src=\"views/js/jquery.eventedit.js\"></script>
          <button title=\"<?php echo \$form[\$_SESSION['language']]['organizer']['eventedit']['title']; ?>\" data-toggle=\"modal\" data-target=\"#modalEventEdit\" onclick=\"GetEventInfos('<?php echo \$baseUrl; ?>', 'idea', '<?php echo urlencode(\$infos_idea['ideaname']); ?>', '<?php echo \$modal[\$_SESSION['language']]['SelectQuery']['field'][\$infos_idea['ideatype']]['logo']; ?>', '<?php echo \$modal[\$_SESSION['language']]['SelectQuery']['field'][\$infos_idea['ideatype']]['color']; ?>', '<?php echo \$modal[\$_SESSION['language']]['SelectQuery']['field'][\$infos_idea['ideatype']]['img']; ?>', '<?php echo \$infos_idea['ideatype']; ?>');\" class=\"btn btn-primary\"><?php echo \$form[\$_SESSION['language']]['organizer']['eventedit']['desc']; ?></button>
        <?php } elseif (\$user_registered == 0) { ?>
          <form class=\"form-horizontal idea-addmember\" action=\"<?php echo \$baseUrl.'/controllers/idea_addmember.php' ?>\" method=\"POST\" enctype=\"multipart/form-data\">
            <input type=\"hidden\" name=\"addmember-ideaname\" value=\"<?php echo \$infos_idea['ideaname']; ?>\">
            <button type=\"submit\" class=\"idea-addmember btn btn-primary pull-left\"><?php echo \$form[\$_SESSION['language']]['addmember']['desc']; ?></button>
          </form>
        <?php } elseif (\$user_registered == 1) { ?>
          <form class=\"form-horizontal idea-addmember\" action=\"<?php echo \$baseUrl.'/controllers/idea_delmember.php' ?>\" method=\"POST\" enctype=\"multipart/form-data\">
            <input type=\"hidden\" name=\"delmember-ideaname\" value=\"<?php echo \$infos_idea['ideaname']; ?>\">
            <button type=\"submit\" class=\"idea-addmember btn btn-default pull-left\"><?php echo \$form[\$_SESSION['language']]['delmember']['desc']; ?></button>
          </form>
        <?php } ?>
        <button title=\"<?php echo \$form[\$_SESSION['language']]['listmembers']['title']; ?>\" data-toggle=\"modal\" data-target=\"#modal-displaymembers\" onclick=\"showEventMembers('<?php echo \$baseUrl; ?>', 'zpeakidea','<?php echo \$infos_idea['ideaname'] ?>')\" class=\"idea-listmembers btn btn-default pull-left\"><?php echo \$form[\$_SESSION['language']]['listmembers']['desc']; ?> <span class=\"badge\"><?php echo \$nb_members; ?></span></button>
      </div>
    </div>
  </div>

  <!-- <div class=\"row\">
    <div style=\"background-color: dimgray;\">
      Futurs commentaires
    </div>
  </div> -->
</div>  <!-- END OF CORPSE -->
";
        
        $__internal_42087748d779259ce3e65ced16be4d263350b744f354869bb8aa6eb63d8b8d40->leave($__internal_42087748d779259ce3e65ced16be4d263350b744f354869bb8aa6eb63d8b8d40_prof);

        
        $__internal_f55f7f2405697f2ab6a72e216b072c7a2f8bd7b671f429e167680ab17f1970ae->leave($__internal_f55f7f2405697f2ab6a72e216b072c7a2f8bd7b671f429e167680ab17f1970ae_prof);

    }

    public function getTemplateName()
    {
        return "idea-logged.php";
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
      <a href=\"<?php echo \$baseUrl ?>/index.php?page=list&query=<?php echo \$query?>\"><img src=\"<?php echo \$home[\$_SESSION['language']][\$query]['img'] ?>\" style=\"width:240px;\" alt=\"<?php echo \$query?>\" title=\"<?php echo \$home[\$_SESSION['language']][\$query]['title'] ?>\" /></a>
      <p> <?php echo \$home[\$_SESSION['language']][\$query]['text'] ?></p>
    </div>
  </div>

  <div class=\"row generic-eventblock\">
    <div class=\"col-lg-8 idea-infos\">
      <fieldset class=\"table-responsive scheduler-border\">
        <legend class=\"scheduler-border ideas-title\" style=\"padding-top: 2%;\"> <img style=\"width: 8%;\" src=\"views/images/zpeak_bleu.png\" alt=\"Zpeak\"/> idée : \"<?php echo \$infos_idea['ideaname']; ?>\"</legend>
        <table class=\"table table-striped table-hover\">
          <tr>
            <th> Organisateur : </th>
            <td> <a href=\"<?php echo \$baseUrl.'/index.php?page=profil&profil='.\$infos_idea['organizer']; ?>\"> <?php echo \$infos_idea['organizer'] ?> </a> </td>
          </tr>

          <tr>
            <th> Langue(s) : </th>
            <td> <img src=\"<?php echo \$baseUrl.\"/\".\$minilang[\$_SESSION['language']]['icon'][\$infos_idea['language']]['png']; ?>\" alt=\"langue de l'événement\" /> <?php echo \$minilang[\$_SESSION['language']]['icon'][\$infos_idea['language']]['text']; ?> </td>
          </tr>

          <tr>
            <th> Niveau de langue conseillé : </th>
            <td> <?php echo \$infos_idea['level_language'] ?> </td>
          </tr>

          <tr>
            <th> Nom de l'événement : </th>
            <td> <?php echo \$infos_idea['ideaname'] ?> </td>
          </tr>

          <tr>
            <th> Description : </th>
            <td> <?php echo \$infos_idea['ideadesc'] ?> </td>
          </tr>

          <tr>
            <th> Type d'activité : </th>
            <td> <img style=\"width: 35%;\" src=\"<?php echo \$baseUrl.\"/\".\$home[\$_SESSION['language']][\$infos_idea['ideatype']]['img'] ?>\" alt=\"<?php \$home[\$_SESSION['language']][\$infos_idea['ideatype']]['alt'] ?>\" title=\"<?php echo \$home[\$_SESSION['language']][\$infos_idea['ideatype']]['text'] ?>\" /> </td>
          </tr>

          <tr>
            <th> Lieu : </th>
            <td> <?php echo \$infos_idea['ideaplace'] ?></td>
          </tr>

          <tr>
            <th> Evénement posté le : </th>
            <td> <?php echo \$infos_idea['date']; ?> </td>
          </tr>

          <tr>
            <th> Date et heure de l'événement proposé : </th>
            <td> <?php echo \$infos_idea['ideadayname'].' '.\$infos_idea['ideadaynumber'].' '.\$infos_idea['ideamonthname'].' '.\$infos_idea['ideayear']; ?>,  à  <?php echo \$infos_idea['ideatime']; ?></td>
          </tr>

          <tr>
            <th> Temps restant avant le début de l'événement : </th>
            <td> <?php echo \$DiffDate ?> </td>
          </tr>
        </table>
      </fieldset>
    </div>  <!-- END OF idea-infos -->

    <!-- EVENT BUTTONS -->
    <div class=\"row\">
      <div class=\"col-lg-offset-1 col-lg-2 col-md-offset-1 col-md-3 col-sm-offset-1 col-sm-3 col-xs-offset-1 col-xs-3 event-buttons\">
        <?php if (\$user_is_organizer == 1) { ?>
          <script src=\"views/js/jquery.eventedit.js\"></script>
          <button title=\"<?php echo \$form[\$_SESSION['language']]['organizer']['eventedit']['title']; ?>\" data-toggle=\"modal\" data-target=\"#modalEventEdit\" onclick=\"GetEventInfos('<?php echo \$baseUrl; ?>', 'idea', '<?php echo urlencode(\$infos_idea['ideaname']); ?>', '<?php echo \$modal[\$_SESSION['language']]['SelectQuery']['field'][\$infos_idea['ideatype']]['logo']; ?>', '<?php echo \$modal[\$_SESSION['language']]['SelectQuery']['field'][\$infos_idea['ideatype']]['color']; ?>', '<?php echo \$modal[\$_SESSION['language']]['SelectQuery']['field'][\$infos_idea['ideatype']]['img']; ?>', '<?php echo \$infos_idea['ideatype']; ?>');\" class=\"btn btn-primary\"><?php echo \$form[\$_SESSION['language']]['organizer']['eventedit']['desc']; ?></button>
        <?php } elseif (\$user_registered == 0) { ?>
          <form class=\"form-horizontal idea-addmember\" action=\"<?php echo \$baseUrl.'/controllers/idea_addmember.php' ?>\" method=\"POST\" enctype=\"multipart/form-data\">
            <input type=\"hidden\" name=\"addmember-ideaname\" value=\"<?php echo \$infos_idea['ideaname']; ?>\">
            <button type=\"submit\" class=\"idea-addmember btn btn-primary pull-left\"><?php echo \$form[\$_SESSION['language']]['addmember']['desc']; ?></button>
          </form>
        <?php } elseif (\$user_registered == 1) { ?>
          <form class=\"form-horizontal idea-addmember\" action=\"<?php echo \$baseUrl.'/controllers/idea_delmember.php' ?>\" method=\"POST\" enctype=\"multipart/form-data\">
            <input type=\"hidden\" name=\"delmember-ideaname\" value=\"<?php echo \$infos_idea['ideaname']; ?>\">
            <button type=\"submit\" class=\"idea-addmember btn btn-default pull-left\"><?php echo \$form[\$_SESSION['language']]['delmember']['desc']; ?></button>
          </form>
        <?php } ?>
        <button title=\"<?php echo \$form[\$_SESSION['language']]['listmembers']['title']; ?>\" data-toggle=\"modal\" data-target=\"#modal-displaymembers\" onclick=\"showEventMembers('<?php echo \$baseUrl; ?>', 'zpeakidea','<?php echo \$infos_idea['ideaname'] ?>')\" class=\"idea-listmembers btn btn-default pull-left\"><?php echo \$form[\$_SESSION['language']]['listmembers']['desc']; ?> <span class=\"badge\"><?php echo \$nb_members; ?></span></button>
      </div>
    </div>
  </div>

  <!-- <div class=\"row\">
    <div style=\"background-color: dimgray;\">
      Futurs commentaires
    </div>
  </div> -->
</div>  <!-- END OF CORPSE -->
", "idea-logged.php", "/root/GozpeakSymfony/app/Resources/views/idea-logged.php");
    }
}
