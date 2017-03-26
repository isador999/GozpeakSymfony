<?php

/* Gozpeak/views/profile-logged.php */
class __TwigTemplate_f23a36b9690df69d04691b2d0f4bb47b6763769ccefe75749dda2582a9c8ef94 extends Twig_Template
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
        $__internal_4d77c808e2ddcae44497b4efa629f07381b14c5a23c04aeea37b6eecd6acdae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d77c808e2ddcae44497b4efa629f07381b14c5a23c04aeea37b6eecd6acdae9->enter($__internal_4d77c808e2ddcae44497b4efa629f07381b14c5a23c04aeea37b6eecd6acdae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/profile-logged.php"));

        $__internal_c436ef5782685f37258a6d6e34b5cd9ab138c58fa74ca89b8f64ba2488cd4391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c436ef5782685f37258a6d6e34b5cd9ab138c58fa74ca89b8f64ba2488cd4391->enter($__internal_c436ef5782685f37258a6d6e34b5cd9ab138c58fa74ca89b8f64ba2488cd4391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/profile-logged.php"));

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
\t\t\t\t\t\t\t<img src=\"<?php echo \$baseUrl ?>/views/images/avatar_defaut.jpeg\" alt=\"Avatar Img\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"profile-head-text col-lg-5 col-md-5 col-sm-9\">
\t\t\t\t\t\t\tInscrit depuis le <?php echo ' '.\$infos['subscribedayname']; echo ' '.\$infos['subscribedaynumber']; echo ' '.\$infos['subscribemonthname']; echo ' '.\$infos['subscribeyear']; ?>  <br> <br>
\t\t\t\t\t\t\tDernière connexion : <?php if (!empty(\$connect_interval)) { echo \$connect_interval; } else { echo \"Inconnu\"; } ?>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"profile-head-text col-lg-5 col-md-5 col-sm-10\">
\t\t\t\t\t\t\t<button data-toggle=\"modal\" data-target=\"#modalChangePassword\" class=\"btn btn-primary\"> Changer votre mot de passe </button> <br> <br>
\t\t\t\t\t\t\t<button data-toggle=\"modal\" data-target=\"#modalProfileDeletion\" class=\"btn btn-danger\" disabled> Supprimer votre compte Gozpeak </button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-10 col-md-10 col-sm-9 col-sm-8 profile-table\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"profile-table-title col-lg-9 col-md-9 col-sm-8 col-xs-8\" style=\"margin-bottom: 3.5%;\">
\t\t\t\t\t\t\t<div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-9\">
\t\t\t\t\t\t\t\tLes informations de votre <img src=\"views/images/zpeak_orange.png\" style=\"width:12%;\" alt=\"Zpeak\" title=\"Zpeak\" />  ID
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-offset-1 col-lg-2 col-md-offset-1 col-md-2 col-sm-2 col-xs-2\">
\t\t\t\t\t\t\t\t<button id=\"btn-profile-update\" onclick=\"GetProfileInfos('<?php echo \$baseUrl; ?>', '<?php echo \$_SESSION['profil']; ?>')\" data-toggle=\"modal\" data-target=\"#modalProfileEdition\" class=\"btn btn-primary\"> Modifier vos informations de profil </button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<table class=\"table table-condensed table-bordered table-striped table-hover\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th> Pseudo : </th>
\t\t\t\t\t\t\t<td> <?php echo \$infos['pseudo'] ?> </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th> Email : </th>
\t\t\t\t\t\t\t<td> <?php echo \$infos['email'] ?> </td>
\t\t\t\t\t\t</tr>
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
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<th> Date de naissance : </th>
\t\t\t\t\t\t\t<td> <?php echo \$infos['birthday'] ?> </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th> Nombre de sorties proposées : </th>
\t\t\t\t\t\t\t<td> <div class=\"col-lg-10\"> <?php echo \$nb_posted_ideas; ?>  <button type=\"button\" class=\"col-lg-offset-1 btn btn-default\" data-toggle=\"modal\" data-target=\"#modalProfileEventListing\" onclick=\"getIdeasByUser('<?php echo \$baseUrl ?>', '<?php echo \$_SESSION[\"profil\"] ?>');\"> Voir vos événements postés </button> </div> </td>
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
        
        $__internal_4d77c808e2ddcae44497b4efa629f07381b14c5a23c04aeea37b6eecd6acdae9->leave($__internal_4d77c808e2ddcae44497b4efa629f07381b14c5a23c04aeea37b6eecd6acdae9_prof);

        
        $__internal_c436ef5782685f37258a6d6e34b5cd9ab138c58fa74ca89b8f64ba2488cd4391->leave($__internal_c436ef5782685f37258a6d6e34b5cd9ab138c58fa74ca89b8f64ba2488cd4391_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/views/profile-logged.php";
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
\t\t\t\t\t\t\t<img src=\"<?php echo \$baseUrl ?>/views/images/avatar_defaut.jpeg\" alt=\"Avatar Img\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"profile-head-text col-lg-5 col-md-5 col-sm-9\">
\t\t\t\t\t\t\tInscrit depuis le <?php echo ' '.\$infos['subscribedayname']; echo ' '.\$infos['subscribedaynumber']; echo ' '.\$infos['subscribemonthname']; echo ' '.\$infos['subscribeyear']; ?>  <br> <br>
\t\t\t\t\t\t\tDernière connexion : <?php if (!empty(\$connect_interval)) { echo \$connect_interval; } else { echo \"Inconnu\"; } ?>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"profile-head-text col-lg-5 col-md-5 col-sm-10\">
\t\t\t\t\t\t\t<button data-toggle=\"modal\" data-target=\"#modalChangePassword\" class=\"btn btn-primary\"> Changer votre mot de passe </button> <br> <br>
\t\t\t\t\t\t\t<button data-toggle=\"modal\" data-target=\"#modalProfileDeletion\" class=\"btn btn-danger\" disabled> Supprimer votre compte Gozpeak </button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-10 col-md-10 col-sm-9 col-sm-8 profile-table\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"profile-table-title col-lg-9 col-md-9 col-sm-8 col-xs-8\" style=\"margin-bottom: 3.5%;\">
\t\t\t\t\t\t\t<div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-9\">
\t\t\t\t\t\t\t\tLes informations de votre <img src=\"views/images/zpeak_orange.png\" style=\"width:12%;\" alt=\"Zpeak\" title=\"Zpeak\" />  ID
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-offset-1 col-lg-2 col-md-offset-1 col-md-2 col-sm-2 col-xs-2\">
\t\t\t\t\t\t\t\t<button id=\"btn-profile-update\" onclick=\"GetProfileInfos('<?php echo \$baseUrl; ?>', '<?php echo \$_SESSION['profil']; ?>')\" data-toggle=\"modal\" data-target=\"#modalProfileEdition\" class=\"btn btn-primary\"> Modifier vos informations de profil </button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<table class=\"table table-condensed table-bordered table-striped table-hover\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th> Pseudo : </th>
\t\t\t\t\t\t\t<td> <?php echo \$infos['pseudo'] ?> </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th> Email : </th>
\t\t\t\t\t\t\t<td> <?php echo \$infos['email'] ?> </td>
\t\t\t\t\t\t</tr>
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
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<th> Date de naissance : </th>
\t\t\t\t\t\t\t<td> <?php echo \$infos['birthday'] ?> </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th> Nombre de sorties proposées : </th>
\t\t\t\t\t\t\t<td> <div class=\"col-lg-10\"> <?php echo \$nb_posted_ideas; ?>  <button type=\"button\" class=\"col-lg-offset-1 btn btn-default\" data-toggle=\"modal\" data-target=\"#modalProfileEventListing\" onclick=\"getIdeasByUser('<?php echo \$baseUrl ?>', '<?php echo \$_SESSION[\"profil\"] ?>');\"> Voir vos événements postés </button> </div> </td>
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
", "Gozpeak/views/profile-logged.php", "/root/Gozpeak/app/Resources/views/Gozpeak/views/profile-logged.php");
    }
}
