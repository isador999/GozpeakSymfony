<?php

/* header-notlogged.html.twig */
class __TwigTemplate_f9b71cdf69f77b96a50809e6fa196b465a0604606946b5e76e5451c18e7aa586 extends Twig_Template
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
        $__internal_dd9ed7f6ead1cc06811344a723a9a00c710b0dce04ee72a10f2abf1235ee895a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd9ed7f6ead1cc06811344a723a9a00c710b0dce04ee72a10f2abf1235ee895a->enter($__internal_dd9ed7f6ead1cc06811344a723a9a00c710b0dce04ee72a10f2abf1235ee895a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header-notlogged.html.twig"));

        $__internal_dff7018f7d328e5177a3b548f5bff09185d2c37aff0622904d6ab5c74d66f281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff7018f7d328e5177a3b548f5bff09185d2c37aff0622904d6ab5c74d66f281->enter($__internal_dff7018f7d328e5177a3b548f5bff09185d2c37aff0622904d6ab5c74d66f281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header-notlogged.html.twig"));

        // line 1
        echo "
<nav role=\"navigation\" class=\"navbar navbar-default navbar-inverse\">
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-lg-offset-1 col-lg-2 col-md-offset-4 col-sm-offset-4 col-sm-4\">
        <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["baseURL"]) ? $context["baseURL"] : $this->getContext($context, "baseURL")), "html", null, true);
        echo "/home\" title=\"GoZpeak!\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/gozpeak_small.png"), "html", null, true);
        echo "\" alt=\"GoZpeak\" /></a>
      </div>
    <!-- <div class=\"navbar-header row col-xs-5 visible-xs\">
      <a href=\"index.php?page=home\"><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/gozpeak_small.png"), "html", null, true);
        echo "\" alt=\"GoZpeak\" title=\"GoZpeak!\" /></a>
    </div> -->

    <!-- <div class=\"pull-left col-xs-12 visible-xs\" style=\"padding-top: 0.25%;\">
      <form class=\"navbar-form\" role=\"search\">
        <div class=\"input-group\">
          <input type=\"text\" class=\"input form-control\" placeholder=\"<?php #echo \$headband[\$_SESSION['language']]['search']['text']; ?>\" title=\"<?php #echo \$headband[\$_SESSION['language']]['search']['title']; ?>\" name=\"q\" disabled>
            <div class=\"input-group-btn\">
              <button class=\"btn btn-primary\" type=\"submit\"><i class=\"glyphicon glyphicon-search\"></i></button>
            </div>
          </div>
        </form>
      </div>


    <div class=\"pull-left col-md-offset-2 col-sm-offset-2 visible-md visible-sm\" style=\"padding-top: 0.25%;\">
      <form class=\"navbar-form\" role=\"search\">
        <div class=\"input-group\">
          <input type=\"text\" class=\"input form-control\" placeholder=\"<?php #echo \$headband[\$_SESSION['language']]['search']['text']; ?>\" title=\"<?php #echo \$headband[\$_SESSION['language']]['search']['title']; ?>\" name=\"q\" disabled>
            <div class=\"input-group-btn\">
              <button class=\"btn btn-primary\" type=\"submit\"><i class=\"glyphicon glyphicon-search\"></i></button>
            </div>
          </div>
        </form>
      </div>


    <div class=\"pull-right col-lg-6 visible-lg\" style=\"padding-top: 0.25%;\">
      <form class=\"navbar-form\" role=\"search\">
        <div class=\"input-group\">
          <input type=\"text\" class=\"input form-control\" placeholder=\"<?php #echo \$headband[\$_SESSION['language']]['search']['text']; ?>\" title=\"<?php #echo \$headband[\$_SESSION['language']]['search']['title']; ?>\" name=\"q\" disabled>
            <div class=\"input-group-btn\">
              <button class=\"btn btn-primary\" type=\"submit\"><i class=\"glyphicon glyphicon-search\"></i></button>
            </div>
          </div>
        </form>
      </div> -->


    <!-- NAV TABS BUTTONS -->
      <div class=\"col-lg-offset-1 col-lg-8 col-md-12 col-sm-12 col-xs-6\">
        <ul class=\"nav nav-tabs\">
          <li class=\"col-lg-3 col-md-4 col-sm-3 col-xs-7 text-right btn navbar-btn\"><a title=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["registration"]) ? $context["registration"] : $this->getContext($context, "registration")), "html", null, true);
        echo "\" data-toggle=\"modal\" data-target=\"#modalInscription\"><span class=\"glyphicon glyphicon-user\">  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["registration"]) ? $context["registration"] : $this->getContext($context, "registration"))), "html", null, true);
        echo " </span></a> </li>
          <li class=\"col-lg-4 col-md-4 col-sm-4 col-xs-8 text-right btn navbar-btn\"><a title=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["connection"]) ? $context["connection"] : $this->getContext($context, "connection")), "html", null, true);
        echo "\" data-toggle=\"modal\" data-target=\"#modalConnection\"><span class=\"glyphicon glyphicon-log-in\">  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["connection"]) ? $context["connection"] : $this->getContext($context, "connection"))), "html", null, true);
        echo " </span></a> </li>
          <li class=\"col-lg-5 col-md-4 col-sm-5 col-xs-10 text-right btn navbar-btn\"><a title=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "html", null, true);
        echo "\" data-toggle=\"modal\" data-target=\"#modalSelectQueryNotLogged\"><span class=\"glyphicon glyphicon-calendar\">  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event"))), "html", null, true);
        echo " </span></a> </li>
        </ul>
      </div>
      <!-- <div class=\"nav navbar-nav pull-right col-xs-5 pull-left row visible-xs\">
        <ul class=\"nav\" style=\"padding-top:1%;\">
          <li class=\"col-xs-offset-1 pull-left btn navbar-btn\"><a title=\"<?php #echo \$headband[\$_SESSION['language']]['registration']['title']; ?>\" data-toggle=\"modal\" data-target=\"#modalInscription\"><span class=\"glyphicon glyphicon-user\"> <?php #echo \$headband[\$_SESSION['language']]['registration']['text']; ?></span></a></li>
          <li class=\"col-xs-offset-1 pull-left btn navbar-btn\"><a title=\"<?php #echo \$headband[\$_SESSION['language']]['connection']['title']; ?>\" data-toggle=\"modal\" data-target=\"#modalConnection\"><span class=\"glyphicon glyphicon-log-in\"> <?php #echo \$headband[\$_SESSION['language']]['connection']['text']; ?></span></a></li>
          <li class=\"col-xs-offset-1 pull-left btn navbar-btn\"><a title=\"<?php #echo \$headband[\$_SESSION['language']]['event']['title']; ?>\" data-toggle=\"modal\" data-target=\"#modalSelectQueryNotLogged\"><span class=\"glyphicon glyphicon-calendar\"> <?php #echo \$headband[\$_SESSION['language']]['event']['text']; ?> </span></a></li>
        </ul>
      </div> -->
    </div>
  </div>
</nav>
";
        
        $__internal_dd9ed7f6ead1cc06811344a723a9a00c710b0dce04ee72a10f2abf1235ee895a->leave($__internal_dd9ed7f6ead1cc06811344a723a9a00c710b0dce04ee72a10f2abf1235ee895a_prof);

        
        $__internal_dff7018f7d328e5177a3b548f5bff09185d2c37aff0622904d6ab5c74d66f281->leave($__internal_dff7018f7d328e5177a3b548f5bff09185d2c37aff0622904d6ab5c74d66f281_prof);

    }

    public function getTemplateName()
    {
        return "header-notlogged.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 53,  91 => 52,  85 => 51,  40 => 9,  32 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<nav role=\"navigation\" class=\"navbar navbar-default navbar-inverse\">
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-lg-offset-1 col-lg-2 col-md-offset-4 col-sm-offset-4 col-sm-4\">
        <a href=\"{{ baseURL }}/home\" title=\"GoZpeak!\"><img src=\"{{ asset('images/gozpeak_small.png') }}\" alt=\"GoZpeak\" /></a>
      </div>
    <!-- <div class=\"navbar-header row col-xs-5 visible-xs\">
      <a href=\"index.php?page=home\"><img src=\"{{ asset('images/gozpeak_small.png') }}\" alt=\"GoZpeak\" title=\"GoZpeak!\" /></a>
    </div> -->

    <!-- <div class=\"pull-left col-xs-12 visible-xs\" style=\"padding-top: 0.25%;\">
      <form class=\"navbar-form\" role=\"search\">
        <div class=\"input-group\">
          <input type=\"text\" class=\"input form-control\" placeholder=\"<?php #echo \$headband[\$_SESSION['language']]['search']['text']; ?>\" title=\"<?php #echo \$headband[\$_SESSION['language']]['search']['title']; ?>\" name=\"q\" disabled>
            <div class=\"input-group-btn\">
              <button class=\"btn btn-primary\" type=\"submit\"><i class=\"glyphicon glyphicon-search\"></i></button>
            </div>
          </div>
        </form>
      </div>


    <div class=\"pull-left col-md-offset-2 col-sm-offset-2 visible-md visible-sm\" style=\"padding-top: 0.25%;\">
      <form class=\"navbar-form\" role=\"search\">
        <div class=\"input-group\">
          <input type=\"text\" class=\"input form-control\" placeholder=\"<?php #echo \$headband[\$_SESSION['language']]['search']['text']; ?>\" title=\"<?php #echo \$headband[\$_SESSION['language']]['search']['title']; ?>\" name=\"q\" disabled>
            <div class=\"input-group-btn\">
              <button class=\"btn btn-primary\" type=\"submit\"><i class=\"glyphicon glyphicon-search\"></i></button>
            </div>
          </div>
        </form>
      </div>


    <div class=\"pull-right col-lg-6 visible-lg\" style=\"padding-top: 0.25%;\">
      <form class=\"navbar-form\" role=\"search\">
        <div class=\"input-group\">
          <input type=\"text\" class=\"input form-control\" placeholder=\"<?php #echo \$headband[\$_SESSION['language']]['search']['text']; ?>\" title=\"<?php #echo \$headband[\$_SESSION['language']]['search']['title']; ?>\" name=\"q\" disabled>
            <div class=\"input-group-btn\">
              <button class=\"btn btn-primary\" type=\"submit\"><i class=\"glyphicon glyphicon-search\"></i></button>
            </div>
          </div>
        </form>
      </div> -->


    <!-- NAV TABS BUTTONS -->
      <div class=\"col-lg-offset-1 col-lg-8 col-md-12 col-sm-12 col-xs-6\">
        <ul class=\"nav nav-tabs\">
          <li class=\"col-lg-3 col-md-4 col-sm-3 col-xs-7 text-right btn navbar-btn\"><a title=\"{{ registration }}\" data-toggle=\"modal\" data-target=\"#modalInscription\"><span class=\"glyphicon glyphicon-user\">  {{ registration|trans }} </span></a> </li>
          <li class=\"col-lg-4 col-md-4 col-sm-4 col-xs-8 text-right btn navbar-btn\"><a title=\"{{ connection }}\" data-toggle=\"modal\" data-target=\"#modalConnection\"><span class=\"glyphicon glyphicon-log-in\">  {{ connection|trans }} </span></a> </li>
          <li class=\"col-lg-5 col-md-4 col-sm-5 col-xs-10 text-right btn navbar-btn\"><a title=\"{{ event }}\" data-toggle=\"modal\" data-target=\"#modalSelectQueryNotLogged\"><span class=\"glyphicon glyphicon-calendar\">  {{ event|trans }} </span></a> </li>
        </ul>
      </div>
      <!-- <div class=\"nav navbar-nav pull-right col-xs-5 pull-left row visible-xs\">
        <ul class=\"nav\" style=\"padding-top:1%;\">
          <li class=\"col-xs-offset-1 pull-left btn navbar-btn\"><a title=\"<?php #echo \$headband[\$_SESSION['language']]['registration']['title']; ?>\" data-toggle=\"modal\" data-target=\"#modalInscription\"><span class=\"glyphicon glyphicon-user\"> <?php #echo \$headband[\$_SESSION['language']]['registration']['text']; ?></span></a></li>
          <li class=\"col-xs-offset-1 pull-left btn navbar-btn\"><a title=\"<?php #echo \$headband[\$_SESSION['language']]['connection']['title']; ?>\" data-toggle=\"modal\" data-target=\"#modalConnection\"><span class=\"glyphicon glyphicon-log-in\"> <?php #echo \$headband[\$_SESSION['language']]['connection']['text']; ?></span></a></li>
          <li class=\"col-xs-offset-1 pull-left btn navbar-btn\"><a title=\"<?php #echo \$headband[\$_SESSION['language']]['event']['title']; ?>\" data-toggle=\"modal\" data-target=\"#modalSelectQueryNotLogged\"><span class=\"glyphicon glyphicon-calendar\"> <?php #echo \$headband[\$_SESSION['language']]['event']['text']; ?> </span></a></li>
        </ul>
      </div> -->
    </div>
  </div>
</nav>
", "header-notlogged.html.twig", "/root/Gozpeak/app/Resources/views/header-notlogged.html.twig");
    }
}
