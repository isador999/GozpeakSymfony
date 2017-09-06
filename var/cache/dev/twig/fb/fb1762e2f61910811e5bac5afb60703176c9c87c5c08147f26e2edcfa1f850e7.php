<?php

/* navbar-notlogged.html.twig */
class __TwigTemplate_7bd80157b92f71e5cf2b8e3433643a6a677d8fadf827203b7a8a3e210c2380da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("maintemplate.html.twig", "navbar-notlogged.html.twig", 1);
        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "maintemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b3ca49cd87a44a281c53e549ee7771f40f61dec67046e46dea09bb43dc694a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b3ca49cd87a44a281c53e549ee7771f40f61dec67046e46dea09bb43dc694a7->enter($__internal_9b3ca49cd87a44a281c53e549ee7771f40f61dec67046e46dea09bb43dc694a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navbar-notlogged.html.twig"));

        $__internal_20f8ad01faa331dbd64e1019c09de2dc27b42a456862e84d238b86460b4e3e20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f8ad01faa331dbd64e1019c09de2dc27b42a456862e84d238b86460b4e3e20->enter($__internal_20f8ad01faa331dbd64e1019c09de2dc27b42a456862e84d238b86460b4e3e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navbar-notlogged.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b3ca49cd87a44a281c53e549ee7771f40f61dec67046e46dea09bb43dc694a7->leave($__internal_9b3ca49cd87a44a281c53e549ee7771f40f61dec67046e46dea09bb43dc694a7_prof);

        
        $__internal_20f8ad01faa331dbd64e1019c09de2dc27b42a456862e84d238b86460b4e3e20->leave($__internal_20f8ad01faa331dbd64e1019c09de2dc27b42a456862e84d238b86460b4e3e20_prof);

    }

    // line 3
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_663ab675238cab3fc9c612c6627bc7ba4cb3a2ae9f327981a5daa9cdaccfc854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_663ab675238cab3fc9c612c6627bc7ba4cb3a2ae9f327981a5daa9cdaccfc854->enter($__internal_663ab675238cab3fc9c612c6627bc7ba4cb3a2ae9f327981a5daa9cdaccfc854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_92d2d4ac6a19244238aaf1ef201b2af21731a4d0ef20fc5e5bc79c7dfd5d79f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d2d4ac6a19244238aaf1ef201b2af21731a4d0ef20fc5e5bc79c7dfd5d79f2->enter($__internal_92d2d4ac6a19244238aaf1ef201b2af21731a4d0ef20fc5e5bc79c7dfd5d79f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 4
        echo "<nav role=\"navigation\" class=\"navbar navbar-default navbar-inverse\">
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-lg-offset-1 col-lg-2 col-md-offset-4 col-sm-offset-4 col-sm-4\">
        <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["baseURL"] ?? $this->getContext($context, "baseURL")), "html", null, true);
        echo "\" title=\"GoZpeak!\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/gozpeak_small.png"), "html", null, true);
        echo "\" alt=\"GoZpeak\" /></a>
      </div>
    <!-- <div class=\"navbar-header row col-xs-5 visible-xs\">
      <a href=\"index.php?page=home\"><img src=\"views/images/gozpeak_small.png\" alt=\"GoZpeak\" title=\"GoZpeak!\" /></a>
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
          <li class=\"col-lg-3 col-md-4 col-sm-3 col-xs-7 text-right btn navbar-btn\"><a title=\"<?php echo \$headband[\$_SESSION['language']]['registration']['title']; ?>\" data-toggle=\"modal\" data-target=\"#modalInscription\"><span class=\"glyphicon glyphicon-user\"> ";
        // line 52
        echo twig_escape_filter($this->env, ($context["registration"] ?? $this->getContext($context, "registration")), "html", null, true);
        echo " </span></a> </li>
          <li class=\"col-lg-4 col-md-4 col-sm-4 col-xs-8 text-right btn navbar-btn\"><a title=\"<?php echo \$headband[\$_SESSION['language']]['connection']['title']; ?>\" data-toggle=\"modal\" data-target=\"#modalConnection\"><span class=\"glyphicon glyphicon-log-in\"> ";
        // line 53
        echo twig_escape_filter($this->env, ($context["connection"] ?? $this->getContext($context, "connection")), "html", null, true);
        echo " </span></a> </li>
          <li class=\"col-lg-5 col-md-4 col-sm-5 col-xs-10 text-right btn navbar-btn\"><a title=\"<?php echo \$headband[\$_SESSION['language']]['event']['title']; ?>\" data-toggle=\"modal\" data-target=\"#modalSelectQueryNotLogged\"><span class=\"glyphicon glyphicon-calendar\"> ";
        // line 54
        echo twig_escape_filter($this->env, ($context["event"] ?? $this->getContext($context, "event")), "html", null, true);
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
        
        $__internal_92d2d4ac6a19244238aaf1ef201b2af21731a4d0ef20fc5e5bc79c7dfd5d79f2->leave($__internal_92d2d4ac6a19244238aaf1ef201b2af21731a4d0ef20fc5e5bc79c7dfd5d79f2_prof);

        
        $__internal_663ab675238cab3fc9c612c6627bc7ba4cb3a2ae9f327981a5daa9cdaccfc854->leave($__internal_663ab675238cab3fc9c612c6627bc7ba4cb3a2ae9f327981a5daa9cdaccfc854_prof);

    }

    public function getTemplateName()
    {
        return "navbar-notlogged.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 54,  108 => 53,  104 => 52,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
<nav role=\"navigation\" class=\"navbar navbar-default navbar-inverse\">
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-lg-offset-1 col-lg-2 col-md-offset-4 col-sm-offset-4 col-sm-4\">
        <a href=\"{{ baseURL }}\" title=\"GoZpeak!\"><img src=\"{{ asset('images/gozpeak_small.png') }}\" alt=\"GoZpeak\" /></a>
      </div>
    <!-- <div class=\"navbar-header row col-xs-5 visible-xs\">
      <a href=\"index.php?page=home\"><img src=\"views/images/gozpeak_small.png\" alt=\"GoZpeak\" title=\"GoZpeak!\" /></a>
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
          <li class=\"col-lg-3 col-md-4 col-sm-3 col-xs-7 text-right btn navbar-btn\"><a title=\"<?php echo \$headband[\$_SESSION['language']]['registration']['title']; ?>\" data-toggle=\"modal\" data-target=\"#modalInscription\"><span class=\"glyphicon glyphicon-user\"> {{ registration }} </span></a> </li>
          <li class=\"col-lg-4 col-md-4 col-sm-4 col-xs-8 text-right btn navbar-btn\"><a title=\"<?php echo \$headband[\$_SESSION['language']]['connection']['title']; ?>\" data-toggle=\"modal\" data-target=\"#modalConnection\"><span class=\"glyphicon glyphicon-log-in\"> {{ connection }} </span></a> </li>
          <li class=\"col-lg-5 col-md-4 col-sm-5 col-xs-10 text-right btn navbar-btn\"><a title=\"<?php echo \$headband[\$_SESSION['language']]['event']['title']; ?>\" data-toggle=\"modal\" data-target=\"#modalSelectQueryNotLogged\"><span class=\"glyphicon glyphicon-calendar\"> {{ event }} </span></a> </li>
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

{% endblock %}
", "navbar-notlogged.html.twig", "/root/GozpeakSymfony/app/Resources/views/navbar-notlogged.html.twig");
    }
}
