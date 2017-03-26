<?php

/* home.html.twig */
class __TwigTemplate_4b79b60c3a4ba09894713697ca08382b9b70e3c28ce3bca4ce3f0e0d294e874c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("maintemplate.html.twig", "home.html.twig", 1);
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
        $__internal_72c778fe467d5c6e5755ca3e8d524d8a150fa4079397cc1f87e7ad9e09ea39d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72c778fe467d5c6e5755ca3e8d524d8a150fa4079397cc1f87e7ad9e09ea39d3->enter($__internal_72c778fe467d5c6e5755ca3e8d524d8a150fa4079397cc1f87e7ad9e09ea39d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_338e3f6e3e64a22a54006f942e66de6c10f67a06afab7489b5929132feed3931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_338e3f6e3e64a22a54006f942e66de6c10f67a06afab7489b5929132feed3931->enter($__internal_338e3f6e3e64a22a54006f942e66de6c10f67a06afab7489b5929132feed3931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72c778fe467d5c6e5755ca3e8d524d8a150fa4079397cc1f87e7ad9e09ea39d3->leave($__internal_72c778fe467d5c6e5755ca3e8d524d8a150fa4079397cc1f87e7ad9e09ea39d3_prof);

        
        $__internal_338e3f6e3e64a22a54006f942e66de6c10f67a06afab7489b5929132feed3931->leave($__internal_338e3f6e3e64a22a54006f942e66de6c10f67a06afab7489b5929132feed3931_prof);

    }

    // line 3
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_10afbab35cdf977e021b9595ca4c3a8e9bb69a0b6def368ca197cb69cb85ceee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10afbab35cdf977e021b9595ca4c3a8e9bb69a0b6def368ca197cb69cb85ceee->enter($__internal_10afbab35cdf977e021b9595ca4c3a8e9bb69a0b6def368ca197cb69cb85ceee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_9417c3aeae4c4ad2f1e24b6563dcb6069b22b742f6277aa876523ec8f41e42bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9417c3aeae4c4ad2f1e24b6563dcb6069b22b742f6277aa876523ec8f41e42bd->enter($__internal_9417c3aeae4c4ad2f1e24b6563dcb6069b22b742f6277aa876523ec8f41e42bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 4
        echo "\t";
        $this->loadTemplate((isset($context["navbar_template"]) ? $context["navbar_template"] : $this->getContext($context, "navbar_template")), "home.html.twig", 4)->display($context);
        
        $__internal_9417c3aeae4c4ad2f1e24b6563dcb6069b22b742f6277aa876523ec8f41e42bd->leave($__internal_9417c3aeae4c4ad2f1e24b6563dcb6069b22b742f6277aa876523ec8f41e42bd_prof);

        
        $__internal_10afbab35cdf977e021b9595ca4c3a8e9bb69a0b6def368ca197cb69cb85ceee->leave($__internal_10afbab35cdf977e021b9595ca4c3a8e9bb69a0b6def368ca197cb69cb85ceee_prof);

    }

    // line 8
    public function block_corpse($context, array $blocks = array())
    {
        $__internal_ff0f7650adceba8c476dc618f6b3d7efff379b14f53530aa98a8b1554dfad5c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff0f7650adceba8c476dc618f6b3d7efff379b14f53530aa98a8b1554dfad5c1->enter($__internal_ff0f7650adceba8c476dc618f6b3d7efff379b14f53530aa98a8b1554dfad5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpse"));

        $__internal_e291d64382f80aa0323b81d57983d12c69cb5cea3028029693c470536ef98da8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e291d64382f80aa0323b81d57983d12c69cb5cea3028029693c470536ef98da8->enter($__internal_e291d64382f80aa0323b81d57983d12c69cb5cea3028029693c470536ef98da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpse"));

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
        echo twig_escape_filter($this->env, (isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "html", null, true);
        echo " actuellement </button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"row promote-block\">
\t\t<div class=\"col-lg-4 col-sm-10 col-xs-10\">
\t\t\t";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["promote_text"]) ? $context["promote_text"] : $this->getContext($context, "promote_text")), "html", null, true);
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
        
        $__internal_e291d64382f80aa0323b81d57983d12c69cb5cea3028029693c470536ef98da8->leave($__internal_e291d64382f80aa0323b81d57983d12c69cb5cea3028029693c470536ef98da8_prof);

        
        $__internal_ff0f7650adceba8c476dc618f6b3d7efff379b14f53530aa98a8b1554dfad5c1->leave($__internal_ff0f7650adceba8c476dc618f6b3d7efff379b14f53530aa98a8b1554dfad5c1_prof);

    }

    // line 84
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7b74a64d5a547e1ca6a8444ec2da99be30d7839794be3a213ae4472b4ce75cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b74a64d5a547e1ca6a8444ec2da99be30d7839794be3a213ae4472b4ce75cdb->enter($__internal_7b74a64d5a547e1ca6a8444ec2da99be30d7839794be3a213ae4472b4ce75cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_82f6ccca9d3d2c5bbac7bb8ffb1a19ca77675618a951c90edd125e80bc6db4c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f6ccca9d3d2c5bbac7bb8ffb1a19ca77675618a951c90edd125e80bc6db4c0->enter($__internal_82f6ccca9d3d2c5bbac7bb8ffb1a19ca77675618a951c90edd125e80bc6db4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 85
        echo "\t";
        $this->loadTemplate("footer.php", "home.html.twig", 85)->display($context);
        
        $__internal_82f6ccca9d3d2c5bbac7bb8ffb1a19ca77675618a951c90edd125e80bc6db4c0->leave($__internal_82f6ccca9d3d2c5bbac7bb8ffb1a19ca77675618a951c90edd125e80bc6db4c0_prof);

        
        $__internal_7b74a64d5a547e1ca6a8444ec2da99be30d7839794be3a213ae4472b4ce75cdb->leave($__internal_7b74a64d5a547e1ca6a8444ec2da99be30d7839794be3a213ae4472b4ce75cdb_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
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
", "home.html.twig", "/root/Gozpeak/app/Resources/views/home.html.twig");
    }
}
