<?php

/* Gozpeak/views/idea-notlogged.php */
class __TwigTemplate_3a18953a1295b63b5dc84ef079017f7ade709277ecb80d46dbe98cc07251d12e extends Twig_Template
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
        $__internal_7efbd4c0702f851564049ecba7a60d0bfd81012029e979b0daa21a85b2d21e00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7efbd4c0702f851564049ecba7a60d0bfd81012029e979b0daa21a85b2d21e00->enter($__internal_7efbd4c0702f851564049ecba7a60d0bfd81012029e979b0daa21a85b2d21e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/idea-notlogged.php"));

        $__internal_bdbd85e7af922380d6dc3abe5c7d8a3bbf9b8b4e0b244b93ee403b25141dad7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdbd85e7af922380d6dc3abe5c7d8a3bbf9b8b4e0b244b93ee403b25141dad7f->enter($__internal_bdbd85e7af922380d6dc3abe5c7d8a3bbf9b8b4e0b244b93ee403b25141dad7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/idea-notlogged.php"));

        // line 1
        echo "<div class=\"corpse container-fluid\">

  <div class=\"row\">
    <div class=\"text-center activity\">
      <a href=\"<?php echo \$baseUrl; ?>/index.php?page=list&query=<?php echo \$query?>\"><img src=\"<?php echo \$home[\$_SESSION['language']][\$query]['img'] ?>\" style=\"width:240px;\" alt=\"<?php echo \$query?>\" title=\"<?php echo \$home[\$_SESSION['language']][\$query]['title'] ?>\" /></a>
      <p> <?php echo \$home[\$_SESSION['language']][\$query]['text'] ?></p>
    </div>
  </div>

  <div class=\"row generic-eventblock\">
    <div class=\"col-lg-8 idea-infos\">
      <fieldset class=\"table-responsive scheduler-border\">
        <legend class=\"scheduler-border ideas-title\" style=\"padding-top: 2%;\">
          <img src=\"views/images/zpeak_bleu.png\" style=\"width:8%;\" alt=\"Zpeak\"/> idée : \"<?php echo \$infos_idea['ideaname']; ?>\"
        </legend>

        <table class=\"table table-striped table-hover\">
          <tr>
            <th> Organisateur : </th>
            <td> <a href=\"<?php echo \$baseUrl.'/index.php?page=profil&profil='.\$infos_idea['organizer'] ?>\"> <?php echo \$infos_idea['organizer'] ?> </a> </td>
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
            <td> <img style=\"width: 45%;\" src=\"<?php echo \$baseUrl.\"/\".\$home[\$_SESSION['language']][\$infos_idea['ideatype']]['img'] ?>\" alt=\"<?php \$home[\$_SESSION['language']][\$infos_idea['ideatype']]['alt'] ?>\" title=\"<?php echo \$home[\$_SESSION['language']][\$infos_idea['ideatype']]['text'] ?>\" /> </td>
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
      <div class=\"col-lg-offset-1 col-lg-2 col-md-offset-1 col-md-3 col-sm-offset-1 col-sm-3 col-xs-offset-1 col-xs-3 text-center event-buttons\">
        <button type=\"button\" title=\"<?php echo \$form[\$_SESSION['language']]['addmember']['title']; ?>\" class=\"idea-addmember btn btn-primary pull-right disabled\"><?php echo \$form[\$_SESSION['language']]['addmember']['desc']; ?></button>
      </div>
    </div>
  </div>

  <!-- <div class=\"row\">
    <div style=\"background-color: dimgray;\">
      Futur comments
    </div>
  </div> -->
</div>  <!-- END OF CORPSE -->
";
        
        $__internal_7efbd4c0702f851564049ecba7a60d0bfd81012029e979b0daa21a85b2d21e00->leave($__internal_7efbd4c0702f851564049ecba7a60d0bfd81012029e979b0daa21a85b2d21e00_prof);

        
        $__internal_bdbd85e7af922380d6dc3abe5c7d8a3bbf9b8b4e0b244b93ee403b25141dad7f->leave($__internal_bdbd85e7af922380d6dc3abe5c7d8a3bbf9b8b4e0b244b93ee403b25141dad7f_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/views/idea-notlogged.php";
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
    <div class=\"col-lg-8 idea-infos\">
      <fieldset class=\"table-responsive scheduler-border\">
        <legend class=\"scheduler-border ideas-title\" style=\"padding-top: 2%;\">
          <img src=\"views/images/zpeak_bleu.png\" style=\"width:8%;\" alt=\"Zpeak\"/> idée : \"<?php echo \$infos_idea['ideaname']; ?>\"
        </legend>

        <table class=\"table table-striped table-hover\">
          <tr>
            <th> Organisateur : </th>
            <td> <a href=\"<?php echo \$baseUrl.'/index.php?page=profil&profil='.\$infos_idea['organizer'] ?>\"> <?php echo \$infos_idea['organizer'] ?> </a> </td>
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
            <td> <img style=\"width: 45%;\" src=\"<?php echo \$baseUrl.\"/\".\$home[\$_SESSION['language']][\$infos_idea['ideatype']]['img'] ?>\" alt=\"<?php \$home[\$_SESSION['language']][\$infos_idea['ideatype']]['alt'] ?>\" title=\"<?php echo \$home[\$_SESSION['language']][\$infos_idea['ideatype']]['text'] ?>\" /> </td>
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
      <div class=\"col-lg-offset-1 col-lg-2 col-md-offset-1 col-md-3 col-sm-offset-1 col-sm-3 col-xs-offset-1 col-xs-3 text-center event-buttons\">
        <button type=\"button\" title=\"<?php echo \$form[\$_SESSION['language']]['addmember']['title']; ?>\" class=\"idea-addmember btn btn-primary pull-right disabled\"><?php echo \$form[\$_SESSION['language']]['addmember']['desc']; ?></button>
      </div>
    </div>
  </div>

  <!-- <div class=\"row\">
    <div style=\"background-color: dimgray;\">
      Futur comments
    </div>
  </div> -->
</div>  <!-- END OF CORPSE -->
", "Gozpeak/views/idea-notlogged.php", "/root/Gozpeak/app/Resources/views/Gozpeak/views/idea-notlogged.php");
    }
}
