<?php

/* Gozpeak/views/profile-notlogged.php */
class __TwigTemplate_1a657b83a2acc8a40fc446775531cb026bca7b36680dd73777aefaf909ffac77 extends Twig_Template
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
        $__internal_584d6bd872c77536cd29f1dbee4594c128a10c4c4caa9fcee0a2a39ba1232fac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_584d6bd872c77536cd29f1dbee4594c128a10c4c4caa9fcee0a2a39ba1232fac->enter($__internal_584d6bd872c77536cd29f1dbee4594c128a10c4c4caa9fcee0a2a39ba1232fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/profile-notlogged.php"));

        $__internal_70161487398ba581c24b6b8e6a17f1457cd406b5ef2043edddd5791357cf53c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70161487398ba581c24b6b8e6a17f1457cd406b5ef2043edddd5791357cf53c5->enter($__internal_70161487398ba581c24b6b8e6a17f1457cd406b5ef2043edddd5791357cf53c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/profile-notlogged.php"));

        // line 1
        echo "<script type=\"text/javascript\" src=\"views/js/jquery.changepass.js\"> </script>
<script type=\"text/javascript\" src=\"views/js/jquery.profile.js\"></script>

<div class=\"corpse container-fluid\">
\t<?php if(isset(\$_SESSION['msg'])) echo \$_SESSION['msg']; ?>
\t<div class=\"row\">
\t\t<div class=\"col-lg-offset-1 col-md-offset-1 profile\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-11 col-md-11 profile-header\">
\t\t\t\t\t<legend id=\"profile-title\">
\t\t\t\t\t\tProfil <span><?php echo \$pseudo ?> </span>
\t\t\t\t\t</legend>

\t\t\t\t\t<div class=\"profile-avatar row\">
\t\t\t\t\t\t<div class=\"col-lg-2 col-md-2 col-sm-3\">
\t\t\t\t\t\t\t<img src=\"<?php echo \$baseUrl; ?>/views/images/avatar_defaut.jpeg\" alt=\"Avatar Img\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"profile-head-text col-lg-5 col-md-5 col-sm-9\">
\t\t\t\t\t\t\tInscrit depuis le <?php echo ' '.\$infos['subscribedayname']; echo ' '.\$infos['subscribedaynumber']; echo ' '.\$infos['subscribemonthname']; echo ' '.\$infos['subscribeyear']; ?>  <br> <br>
\t\t\t\t\t\t\tDernière connexion : <?php if (!empty(\$last_connection_interval)) { echo \$last_connection_interval; } else { echo \"Inconnu\"; } ?>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"profile-head-text col-lg-5 col-md-5 col-sm-10\">
\t\t\t\t\t\t\t<button data-toggle=\"modal\" data-target=\"#modalMsgMember\" class=\"btn btn-primary\" disabled> Envoyer un message à ce membre </button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-10 col-md-10 col-sm-9 col-sm-8 profile-table\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"profile-table-title col-lg-9 col-md-9 col-sm-8 col-xs-8\" style=\"margin-bottom: 3.5%;\">
\t\t\t\t\t\t\t<div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-9\">
\t\t\t\t\t\t\t\tLes informations de votre <img src=\"<?php echo \$baseUrl ?>/views/images/zpeak_orange.png\" alt=\"Zpeak\" style=\"width: 12%;\" title=\"Zpeak\" />  ID
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- <div class=\"col-lg-offset-1 col-lg-2 col-md-offset-1 col-md-2 col-sm-2 col-xs-2\">
\t\t\t\t\t\t\t\t<button id=\"btn-profile-update\" onclick=\"GetProfileInfos('<?php #echo \$_SESSION['profil']; ?>')\" data-toggle=\"modal\" data-target=\"#modalProfileEdition\" class=\"btn btn-primary\"> Modifier vos informations de profil </button>
\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<table class=\"table table-condensed table-bordered table-striped table-hover\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th> Pseudo : </th>
\t\t\t\t\t\t\t<td> <?php echo \$infos['pseudo'] ?> </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<!--<tr>
\t\t\t\t\t\t\t<th> Email : </th>
\t\t\t\t\t\t\t<td> <?php #echo \$infos['email'] ?> </td>
\t\t\t\t\t\t</tr> -->
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th> Nom : </th>
\t\t\t\t\t\t\t<td> <?php echo \$infos['lastname'] ?> </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th> Prénom : </th>
\t\t\t\t\t\t\t<td> <?php echo \$infos['name'] ?> </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<!-- <tr>
\t\t\t\t\t\t\t<th> Profession : </th>
\t\t\t\t\t\t\t<td> <?php //echo \$infos['profession'] ?> &nbsp; &nbsp; &nbsp; </td>
\t\t\t\t\t\t</tr> -->
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th> Nationalité : </th>
\t\t\t\t\t\t\t<td> <?php echo \$infos['nationality'] ?>  </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<!--</tr>
\t\t\t\t\t\t\t<th> Date de naissance : </th>
\t\t\t\t\t\t\t<td> <?php #echo \$infos['birthday'] ?> </td>
\t\t\t\t\t\t</tr> -->
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th> Nombre de sorties proposées : </th>
\t\t\t\t\t\t\t<td> <div class=\"col-lg-10\"> <?php echo \$nb_posted_ideas; ?>  <button class=\"col-lg-offset-1 btn btn-default\" disabled> Voir les événements postés </button> </div> </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th> Langues parlées : </th>
\t\t\t\t\t\t\t<td> <?php //echo \$infos['languages'] ?> </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th> Niveau des langues pratiquées </th>
\t\t\t\t\t\t\t<td> <?php echo \$infos['level_languages'] ?> </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>

\t\t\t\t<!-- <div class=\"col-lg-3 col-md-3\">
\t\t\t\t\t<div class=\"profile-minilang-block\">
\t\t\t\t\t\t<?php #foreach(\$minilang[\$_SESSION['language']]['icon'] as \$key => \$value){ ?>
    \t\t\t\t\t<img class=\"profile-minilang-entry\" src=\"<?php #echo \$value['png']; ?>\"> &nbsp; <?php #echo \$value['text']; ?> <br>
    \t\t\t\t<?php #} ?>
\t\t\t\t\t</div>
\t\t\t\t</div> -->
\t\t\t</div>

\t\t</div>
\t</div>
</div>
";
        
        $__internal_584d6bd872c77536cd29f1dbee4594c128a10c4c4caa9fcee0a2a39ba1232fac->leave($__internal_584d6bd872c77536cd29f1dbee4594c128a10c4c4caa9fcee0a2a39ba1232fac_prof);

        
        $__internal_70161487398ba581c24b6b8e6a17f1457cd406b5ef2043edddd5791357cf53c5->leave($__internal_70161487398ba581c24b6b8e6a17f1457cd406b5ef2043edddd5791357cf53c5_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/views/profile-notlogged.php";
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
        return new Twig_Source("<script type=\"text/javascript\" src=\"views/js/jquery.changepass.js\"> </script>
<script type=\"text/javascript\" src=\"views/js/jquery.profile.js\"></script>

<div class=\"corpse container-fluid\">
\t<?php if(isset(\$_SESSION['msg'])) echo \$_SESSION['msg']; ?>
\t<div class=\"row\">
\t\t<div class=\"col-lg-offset-1 col-md-offset-1 profile\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-11 col-md-11 profile-header\">
\t\t\t\t\t<legend id=\"profile-title\">
\t\t\t\t\t\tProfil <span><?php echo \$pseudo ?> </span>
\t\t\t\t\t</legend>

\t\t\t\t\t<div class=\"profile-avatar row\">
\t\t\t\t\t\t<div class=\"col-lg-2 col-md-2 col-sm-3\">
\t\t\t\t\t\t\t<img src=\"<?php echo \$baseUrl; ?>/views/images/avatar_defaut.jpeg\" alt=\"Avatar Img\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"profile-head-text col-lg-5 col-md-5 col-sm-9\">
\t\t\t\t\t\t\tInscrit depuis le <?php echo ' '.\$infos['subscribedayname']; echo ' '.\$infos['subscribedaynumber']; echo ' '.\$infos['subscribemonthname']; echo ' '.\$infos['subscribeyear']; ?>  <br> <br>
\t\t\t\t\t\t\tDernière connexion : <?php if (!empty(\$last_connection_interval)) { echo \$last_connection_interval; } else { echo \"Inconnu\"; } ?>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"profile-head-text col-lg-5 col-md-5 col-sm-10\">
\t\t\t\t\t\t\t<button data-toggle=\"modal\" data-target=\"#modalMsgMember\" class=\"btn btn-primary\" disabled> Envoyer un message à ce membre </button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-10 col-md-10 col-sm-9 col-sm-8 profile-table\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"profile-table-title col-lg-9 col-md-9 col-sm-8 col-xs-8\" style=\"margin-bottom: 3.5%;\">
\t\t\t\t\t\t\t<div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-9\">
\t\t\t\t\t\t\t\tLes informations de votre <img src=\"<?php echo \$baseUrl ?>/views/images/zpeak_orange.png\" alt=\"Zpeak\" style=\"width: 12%;\" title=\"Zpeak\" />  ID
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- <div class=\"col-lg-offset-1 col-lg-2 col-md-offset-1 col-md-2 col-sm-2 col-xs-2\">
\t\t\t\t\t\t\t\t<button id=\"btn-profile-update\" onclick=\"GetProfileInfos('<?php #echo \$_SESSION['profil']; ?>')\" data-toggle=\"modal\" data-target=\"#modalProfileEdition\" class=\"btn btn-primary\"> Modifier vos informations de profil </button>
\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<table class=\"table table-condensed table-bordered table-striped table-hover\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th> Pseudo : </th>
\t\t\t\t\t\t\t<td> <?php echo \$infos['pseudo'] ?> </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<!--<tr>
\t\t\t\t\t\t\t<th> Email : </th>
\t\t\t\t\t\t\t<td> <?php #echo \$infos['email'] ?> </td>
\t\t\t\t\t\t</tr> -->
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th> Nom : </th>
\t\t\t\t\t\t\t<td> <?php echo \$infos['lastname'] ?> </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th> Prénom : </th>
\t\t\t\t\t\t\t<td> <?php echo \$infos['name'] ?> </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<!-- <tr>
\t\t\t\t\t\t\t<th> Profession : </th>
\t\t\t\t\t\t\t<td> <?php //echo \$infos['profession'] ?> &nbsp; &nbsp; &nbsp; </td>
\t\t\t\t\t\t</tr> -->
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th> Nationalité : </th>
\t\t\t\t\t\t\t<td> <?php echo \$infos['nationality'] ?>  </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<!--</tr>
\t\t\t\t\t\t\t<th> Date de naissance : </th>
\t\t\t\t\t\t\t<td> <?php #echo \$infos['birthday'] ?> </td>
\t\t\t\t\t\t</tr> -->
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th> Nombre de sorties proposées : </th>
\t\t\t\t\t\t\t<td> <div class=\"col-lg-10\"> <?php echo \$nb_posted_ideas; ?>  <button class=\"col-lg-offset-1 btn btn-default\" disabled> Voir les événements postés </button> </div> </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th> Langues parlées : </th>
\t\t\t\t\t\t\t<td> <?php //echo \$infos['languages'] ?> </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th> Niveau des langues pratiquées </th>
\t\t\t\t\t\t\t<td> <?php echo \$infos['level_languages'] ?> </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>

\t\t\t\t<!-- <div class=\"col-lg-3 col-md-3\">
\t\t\t\t\t<div class=\"profile-minilang-block\">
\t\t\t\t\t\t<?php #foreach(\$minilang[\$_SESSION['language']]['icon'] as \$key => \$value){ ?>
    \t\t\t\t\t<img class=\"profile-minilang-entry\" src=\"<?php #echo \$value['png']; ?>\"> &nbsp; <?php #echo \$value['text']; ?> <br>
    \t\t\t\t<?php #} ?>
\t\t\t\t\t</div>
\t\t\t\t</div> -->
\t\t\t</div>

\t\t</div>
\t</div>
</div>
", "Gozpeak/views/profile-notlogged.php", "/root/Gozpeak/app/Resources/views/Gozpeak/views/profile-notlogged.php");
    }
}
