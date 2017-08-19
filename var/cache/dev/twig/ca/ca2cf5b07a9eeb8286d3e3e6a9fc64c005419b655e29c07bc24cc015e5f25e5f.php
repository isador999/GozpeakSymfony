<?php

/* ::home.html.twig */
class __TwigTemplate_c22ede011b6c712aa51cc4ed40e26f0fd0317b64da3e0062d53a739760e04621 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("maintemplate.html.twig", "::home.html.twig", 1);
        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'corpse' => array($this, 'block_corpse'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "maintemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26c7e0786bb2f39bced5fef01e3871e07c77dbd3f3742b742c4b416cbd7f7d86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26c7e0786bb2f39bced5fef01e3871e07c77dbd3f3742b742c4b416cbd7f7d86->enter($__internal_26c7e0786bb2f39bced5fef01e3871e07c77dbd3f3742b742c4b416cbd7f7d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::home.html.twig"));

        $__internal_c2e5731493b0fbbbf3af018d312f5594d6a8cc97cbc4df791b15a0a524728cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e5731493b0fbbbf3af018d312f5594d6a8cc97cbc4df791b15a0a524728cbc->enter($__internal_c2e5731493b0fbbbf3af018d312f5594d6a8cc97cbc4df791b15a0a524728cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26c7e0786bb2f39bced5fef01e3871e07c77dbd3f3742b742c4b416cbd7f7d86->leave($__internal_26c7e0786bb2f39bced5fef01e3871e07c77dbd3f3742b742c4b416cbd7f7d86_prof);

        
        $__internal_c2e5731493b0fbbbf3af018d312f5594d6a8cc97cbc4df791b15a0a524728cbc->leave($__internal_c2e5731493b0fbbbf3af018d312f5594d6a8cc97cbc4df791b15a0a524728cbc_prof);

    }

    // line 3
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_1b873c1f15622586e28c6c5d8926adab6844a077f17ce2f5d8ea4cd2ba1d4948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b873c1f15622586e28c6c5d8926adab6844a077f17ce2f5d8ea4cd2ba1d4948->enter($__internal_1b873c1f15622586e28c6c5d8926adab6844a077f17ce2f5d8ea4cd2ba1d4948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_535d64487d69816ff73eeba76977b25b52dd9b6a536934a640c81558431ffafe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_535d64487d69816ff73eeba76977b25b52dd9b6a536934a640c81558431ffafe->enter($__internal_535d64487d69816ff73eeba76977b25b52dd9b6a536934a640c81558431ffafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 4
        echo "\t";
        $this->loadTemplate(($context["navbar_template"] ?? $this->getContext($context, "navbar_template")), "::home.html.twig", 4)->display($context);
        
        $__internal_535d64487d69816ff73eeba76977b25b52dd9b6a536934a640c81558431ffafe->leave($__internal_535d64487d69816ff73eeba76977b25b52dd9b6a536934a640c81558431ffafe_prof);

        
        $__internal_1b873c1f15622586e28c6c5d8926adab6844a077f17ce2f5d8ea4cd2ba1d4948->leave($__internal_1b873c1f15622586e28c6c5d8926adab6844a077f17ce2f5d8ea4cd2ba1d4948_prof);

    }

    // line 8
    public function block_corpse($context, array $blocks = array())
    {
        $__internal_ce3971cad7483d93ec7c593c553cd9a8bef55c3c41db527b6a001c36918d8869 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce3971cad7483d93ec7c593c553cd9a8bef55c3c41db527b6a001c36918d8869->enter($__internal_ce3971cad7483d93ec7c593c553cd9a8bef55c3c41db527b6a001c36918d8869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpse"));

        $__internal_88acf96d64ef6d50135b5b01f80ad25bac2223b6fdc8667f269469a655358618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88acf96d64ef6d50135b5b01f80ad25bac2223b6fdc8667f269469a655358618->enter($__internal_88acf96d64ef6d50135b5b01f80ad25bac2223b6fdc8667f269469a655358618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpse"));

        // line 9
        echo "<div class=\"corpse container-fluid\">

<?php if(isset(\$_SESSION['msg'])) echo \$_SESSION['msg']; ?>
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
\t\t\t\t \tGozpeak est seulement associé à la ville de ";
        // line 32
        echo twig_escape_filter($this->env, ($context["city"] ?? $this->getContext($context, "city")), "html", null, true);
        echo " actuellement </button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"row promote-block\">
\t\t<div class=\"col-lg-4 col-sm-10 col-xs-10\">
\t\t\t";
        // line 40
        echo twig_escape_filter($this->env, ($context["promote_text"] ?? $this->getContext($context, "promote_text")), "html", null, true);
        echo "
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

</div> <!-- End of container-fluid -->

";
        
        $__internal_88acf96d64ef6d50135b5b01f80ad25bac2223b6fdc8667f269469a655358618->leave($__internal_88acf96d64ef6d50135b5b01f80ad25bac2223b6fdc8667f269469a655358618_prof);

        
        $__internal_ce3971cad7483d93ec7c593c553cd9a8bef55c3c41db527b6a001c36918d8869->leave($__internal_ce3971cad7483d93ec7c593c553cd9a8bef55c3c41db527b6a001c36918d8869_prof);

    }

    // line 84
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a80a13c64169418c4db09ab8e512ba54bc4e1570d6bff2554035db61422bd49f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a80a13c64169418c4db09ab8e512ba54bc4e1570d6bff2554035db61422bd49f->enter($__internal_a80a13c64169418c4db09ab8e512ba54bc4e1570d6bff2554035db61422bd49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_ccd390c8b495b6c0622dc2bf5dc735c31a2253a5982c8d0b820e7d6c5ec64b94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccd390c8b495b6c0622dc2bf5dc735c31a2253a5982c8d0b820e7d6c5ec64b94->enter($__internal_ccd390c8b495b6c0622dc2bf5dc735c31a2253a5982c8d0b820e7d6c5ec64b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 85
        echo "\t";
        $this->loadTemplate("footer.php", "::home.html.twig", 85)->display($context);
        
        $__internal_ccd390c8b495b6c0622dc2bf5dc735c31a2253a5982c8d0b820e7d6c5ec64b94->leave($__internal_ccd390c8b495b6c0622dc2bf5dc735c31a2253a5982c8d0b820e7d6c5ec64b94_prof);

        
        $__internal_a80a13c64169418c4db09ab8e512ba54bc4e1570d6bff2554035db61422bd49f->leave($__internal_a80a13c64169418c4db09ab8e512ba54bc4e1570d6bff2554035db61422bd49f_prof);

    }

    public function getTemplateName()
    {
        return "::home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 85,  159 => 84,  107 => 40,  96 => 32,  71 => 9,  62 => 8,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'maintemplate.html.twig' %}

{% block navbar %}
\t{% include navbar_template %}
{% endblock %}


{% block corpse %}
<div class=\"corpse container-fluid\">

<?php if(isset(\$_SESSION['msg'])) echo \$_SESSION['msg']; ?>
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
\t\t\t\t \tGozpeak est seulement associé à la ville de {{ city }} actuellement </button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"row promote-block\">
\t\t<div class=\"col-lg-4 col-sm-10 col-xs-10\">
\t\t\t{{ promote_text }}
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

</div> <!-- End of container-fluid -->

{% endblock %}


{% block footer %}
\t{% include 'footer.php'%}
{% endblock %}
", "::home.html.twig", "/root/GozpeakSymfony/app/Resources/views/home.html.twig");
    }
}
