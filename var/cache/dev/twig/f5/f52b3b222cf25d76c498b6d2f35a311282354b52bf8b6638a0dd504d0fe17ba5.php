<?php

/* Gozpeak/views/home.php */
class __TwigTemplate_0de02229c616bfb176635032f4c3624e29bc16be9c63d1991e630f5a12a77039 extends Twig_Template
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
        $__internal_940cf96dcab8cc3fcfdae9b5a53c198c545cf1b2f8cf00efe0ec00b323a1c8c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_940cf96dcab8cc3fcfdae9b5a53c198c545cf1b2f8cf00efe0ec00b323a1c8c7->enter($__internal_940cf96dcab8cc3fcfdae9b5a53c198c545cf1b2f8cf00efe0ec00b323a1c8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/home.php"));

        $__internal_2401c7b510c4e5a76fe966225c5ca1949396586aefe346dc2eaca5e691827a3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2401c7b510c4e5a76fe966225c5ca1949396586aefe346dc2eaca5e691827a3f->enter($__internal_2401c7b510c4e5a76fe966225c5ca1949396586aefe346dc2eaca5e691827a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/home.php"));

        // line 1
        echo "<?php if(isset(\$_SESSION['msg'])) echo \$_SESSION['msg']; ?>
<?php if(isset(\$_SESSION['resetpass']) && (\$_SESSION['resetpass'] == 'valid')) { ?>
\t<script type=\"text/javascript\" src=\"views/js/jquery.resetpass.js\"> </script>
\t<script> \$(\"#modalResetPassword\").modal() </script>
<?php } ?>
<header>
\t<!-- <div class=\"col-lg-5 pull-left alert alert-info fade in\" id=\"course-message\">
\t<a href=\"\" class=\"close\" data-dismiss=\"alert\">&times;</a>
\t<strong><u> Information :</u></strong> <br> Gozpeak proposera aussi des cours particuliers pour apprendre l'espagnol rapidement ;-) <br>
\t<a onclick=\"showModalCourses()\"><i class=\"fa fa-leanpub\"></i> Cliquez pour plus d'informations </a>
\t</div> -->
\t<div class=\"city-block row\">
\t\t<div class=\"col-lg-5 pull-left\">
\t\t\t<h4>
\t\t\t\t<?php echo \$generic[\$_SESSION['language']]['text'][0]; ?> :
\t\t\t\t<a onclick=\"showCities()\" href=\"#\" title=\"<?php echo \$generic[\$_SESSION['language']]['city'][0]['title']; ?>\"> <?php echo \$generic[\$_SESSION['language']]['city'][0]['name']; ?> </a>
\t\t\t</h4>

\t\t\t<div id=\"ZpeakCities\" style=\"display:none;\">
\t\t\t\t<!-- <div> <button class=\"btn btn-default\" title=\"<?php #echo \$generic[\$_SESSION['language']]['cities']['title']; ?>\" disabled> Gozpeak Rennes </button> <button class=\"col-lg-offset-1 btn btn-default\" title=\"<?php #echo \$generic[\$_SESSION['language']]['cities']['title']; ?>\" disabled> Gozpeak Nantes </button> <button class=\"col-lg-offset-1 btn btn-default\" title=\"<?php #echo \$generic[\$_SESSION['language']]['cities']['title']; ?>\" disabled> Gozpeak Tours </button> </div> -->
\t\t\t\t<div> <button class=\"btn btn-default\" disabled>
\t\t\t\t \tGozpeak est seulement associé à la ville de Rennes actuellement </button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"row promote-block\">
\t\t<div class=\"col-lg-4 col-sm-10 col-xs-10\">
\t\t\t<?php echo \$home[\$_SESSION['language']]['promote']['text']; ?>
\t\t</div>

\t\t<div class=\"col-lg-4 col-md-6 col-sm-6 col-xs-8\">
\t\t\t<img src=\"views/images/aperitivo_clara_martes.jpg\" class=\"img-rounded\" alt=\"apéritif_linguistique_la_clara\">
\t\t\t<div class=\"caption\">
\t\t\t\t<p> El Aperitivo de La Clara </p>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-lg-3 col-md-6 col-sm-5 col-xs-2\">
\t\t\t<iframe width=\"440\" height=\"250\" src=\"https://www.youtube.com/embed/sjW8tB3Yw8A\"></iframe>
\t\t</div>
\t</div>
</header>

<!-- LG and MD -->
<div class=\"row text-center activities\" style=\"height:35%;\">
\t<div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-6\">
\t\t<h3><a title=\"<?php echo \$home[\$_SESSION['language']]['run']['title']; ?>\" href=\"index.php?page=list&query=run\" ><span><img style=\"width:90%; max-width:300px;\" src=\"<?php echo \$home[\$_SESSION['language']]['run']['img']; ?>\" alt=\"<?php echo \$home[\$_SESSION['language']]['run']['alt']; ?>\"/> </span></a></h3>
\t\t<span><?php echo \$home[\$_SESSION['language']]['run']['text']; ?></span>
\t</div>

\t<div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-6\">
\t\t<h3><a title=\"<?php echo \$home[\$_SESSION['language']]['art']['title']; ?>\" href=\"index.php?page=list&query=art\"><span><img style=\"width:90%; max-width:300px;\" src=\"<?php echo \$home[\$_SESSION['language']]['art']['img']; ?>\" alt=\"<?php echo \$home[\$_SESSION['language']]['art']['alt']; ?>\" /> </span></a></h3>
\t\t<span><?php echo \$home[\$_SESSION['language']]['art']['text']; ?></span>
\t</div>

\t<div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-6\">
\t\t<h3><a title=\"<?php echo \$home[\$_SESSION['language']]['party']['title']; ?>\" href=\"index.php?page=list&query=party\"><span><img style=\"width:90%; max-width:300px;\" src=\"<?php echo \$home[\$_SESSION['language']]['party']['img']; ?>\" alt=\"<?php echo \$home[\$_SESSION['language']]['party']['alt']; ?>\" /> </span></a></h3>
\t\t<span><?php echo \$home[\$_SESSION['language']]['party']['text']; ?></span>
\t</div>

\t<div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-6\">
\t\t<h3><a title=\"<?php echo \$home[\$_SESSION['language']]['eat']['title']; ?>\" href=\"index.php?page=list&query=eat\"><span><img style=\"width:90%; max-width:300px;\" src=\"<?php echo \$home[\$_SESSION['language']]['eat']['img']; ?>\" alt=\"<?php echo \$home[\$_SESSION['language']]['eat']['alt']; ?>\" /> </span></a></h3>
\t\t<span><?php echo \$home[\$_SESSION['language']]['eat']['text']; ?></span>
\t</div>
</div>
";
        
        $__internal_940cf96dcab8cc3fcfdae9b5a53c198c545cf1b2f8cf00efe0ec00b323a1c8c7->leave($__internal_940cf96dcab8cc3fcfdae9b5a53c198c545cf1b2f8cf00efe0ec00b323a1c8c7_prof);

        
        $__internal_2401c7b510c4e5a76fe966225c5ca1949396586aefe346dc2eaca5e691827a3f->leave($__internal_2401c7b510c4e5a76fe966225c5ca1949396586aefe346dc2eaca5e691827a3f_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/views/home.php";
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
        return new Twig_Source("<?php if(isset(\$_SESSION['msg'])) echo \$_SESSION['msg']; ?>
<?php if(isset(\$_SESSION['resetpass']) && (\$_SESSION['resetpass'] == 'valid')) { ?>
\t<script type=\"text/javascript\" src=\"views/js/jquery.resetpass.js\"> </script>
\t<script> \$(\"#modalResetPassword\").modal() </script>
<?php } ?>
<header>
\t<!-- <div class=\"col-lg-5 pull-left alert alert-info fade in\" id=\"course-message\">
\t<a href=\"\" class=\"close\" data-dismiss=\"alert\">&times;</a>
\t<strong><u> Information :</u></strong> <br> Gozpeak proposera aussi des cours particuliers pour apprendre l'espagnol rapidement ;-) <br>
\t<a onclick=\"showModalCourses()\"><i class=\"fa fa-leanpub\"></i> Cliquez pour plus d'informations </a>
\t</div> -->
\t<div class=\"city-block row\">
\t\t<div class=\"col-lg-5 pull-left\">
\t\t\t<h4>
\t\t\t\t<?php echo \$generic[\$_SESSION['language']]['text'][0]; ?> :
\t\t\t\t<a onclick=\"showCities()\" href=\"#\" title=\"<?php echo \$generic[\$_SESSION['language']]['city'][0]['title']; ?>\"> <?php echo \$generic[\$_SESSION['language']]['city'][0]['name']; ?> </a>
\t\t\t</h4>

\t\t\t<div id=\"ZpeakCities\" style=\"display:none;\">
\t\t\t\t<!-- <div> <button class=\"btn btn-default\" title=\"<?php #echo \$generic[\$_SESSION['language']]['cities']['title']; ?>\" disabled> Gozpeak Rennes </button> <button class=\"col-lg-offset-1 btn btn-default\" title=\"<?php #echo \$generic[\$_SESSION['language']]['cities']['title']; ?>\" disabled> Gozpeak Nantes </button> <button class=\"col-lg-offset-1 btn btn-default\" title=\"<?php #echo \$generic[\$_SESSION['language']]['cities']['title']; ?>\" disabled> Gozpeak Tours </button> </div> -->
\t\t\t\t<div> <button class=\"btn btn-default\" disabled>
\t\t\t\t \tGozpeak est seulement associé à la ville de Rennes actuellement </button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"row promote-block\">
\t\t<div class=\"col-lg-4 col-sm-10 col-xs-10\">
\t\t\t<?php echo \$home[\$_SESSION['language']]['promote']['text']; ?>
\t\t</div>

\t\t<div class=\"col-lg-4 col-md-6 col-sm-6 col-xs-8\">
\t\t\t<img src=\"views/images/aperitivo_clara_martes.jpg\" class=\"img-rounded\" alt=\"apéritif_linguistique_la_clara\">
\t\t\t<div class=\"caption\">
\t\t\t\t<p> El Aperitivo de La Clara </p>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-lg-3 col-md-6 col-sm-5 col-xs-2\">
\t\t\t<iframe width=\"440\" height=\"250\" src=\"https://www.youtube.com/embed/sjW8tB3Yw8A\"></iframe>
\t\t</div>
\t</div>
</header>

<!-- LG and MD -->
<div class=\"row text-center activities\" style=\"height:35%;\">
\t<div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-6\">
\t\t<h3><a title=\"<?php echo \$home[\$_SESSION['language']]['run']['title']; ?>\" href=\"index.php?page=list&query=run\" ><span><img style=\"width:90%; max-width:300px;\" src=\"<?php echo \$home[\$_SESSION['language']]['run']['img']; ?>\" alt=\"<?php echo \$home[\$_SESSION['language']]['run']['alt']; ?>\"/> </span></a></h3>
\t\t<span><?php echo \$home[\$_SESSION['language']]['run']['text']; ?></span>
\t</div>

\t<div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-6\">
\t\t<h3><a title=\"<?php echo \$home[\$_SESSION['language']]['art']['title']; ?>\" href=\"index.php?page=list&query=art\"><span><img style=\"width:90%; max-width:300px;\" src=\"<?php echo \$home[\$_SESSION['language']]['art']['img']; ?>\" alt=\"<?php echo \$home[\$_SESSION['language']]['art']['alt']; ?>\" /> </span></a></h3>
\t\t<span><?php echo \$home[\$_SESSION['language']]['art']['text']; ?></span>
\t</div>

\t<div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-6\">
\t\t<h3><a title=\"<?php echo \$home[\$_SESSION['language']]['party']['title']; ?>\" href=\"index.php?page=list&query=party\"><span><img style=\"width:90%; max-width:300px;\" src=\"<?php echo \$home[\$_SESSION['language']]['party']['img']; ?>\" alt=\"<?php echo \$home[\$_SESSION['language']]['party']['alt']; ?>\" /> </span></a></h3>
\t\t<span><?php echo \$home[\$_SESSION['language']]['party']['text']; ?></span>
\t</div>

\t<div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-6\">
\t\t<h3><a title=\"<?php echo \$home[\$_SESSION['language']]['eat']['title']; ?>\" href=\"index.php?page=list&query=eat\"><span><img style=\"width:90%; max-width:300px;\" src=\"<?php echo \$home[\$_SESSION['language']]['eat']['img']; ?>\" alt=\"<?php echo \$home[\$_SESSION['language']]['eat']['alt']; ?>\" /> </span></a></h3>
\t\t<span><?php echo \$home[\$_SESSION['language']]['eat']['text']; ?></span>
\t</div>
</div>
", "Gozpeak/views/home.php", "/root/Gozpeak/app/Resources/views/Gozpeak/views/home.php");
    }
}
