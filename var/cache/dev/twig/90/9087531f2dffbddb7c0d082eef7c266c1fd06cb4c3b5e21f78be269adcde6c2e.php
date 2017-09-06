<?php

/* header-logged.php */
class __TwigTemplate_71b704d627f05b22e380c705e51178f2b855f3cb650697956fcbe36e1a94c916 extends Twig_Template
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
        $__internal_e373ef745f819ccd0f31e39c6a0d156683bedd7a34b66d9406a273b4708265b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e373ef745f819ccd0f31e39c6a0d156683bedd7a34b66d9406a273b4708265b1->enter($__internal_e373ef745f819ccd0f31e39c6a0d156683bedd7a34b66d9406a273b4708265b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header-logged.php"));

        $__internal_26c581d561a641a5c9f95f47359a4ee0b898ec1024c069649ccb2b25077971cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26c581d561a641a5c9f95f47359a4ee0b898ec1024c069649ccb2b25077971cf->enter($__internal_26c581d561a641a5c9f95f47359a4ee0b898ec1024c069649ccb2b25077971cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header-logged.php"));

        // line 1
        echo "<?php
session_start();
?>

<nav role=\"navigation\" class=\"navbar navbar-default navbar-inverse\">
  <div class=\"container-fluid\">
    <!-- <div class=\"navbar-header row text-center col-lg-6 col-md-offset-1 col-sm-offset-1 col-md-3 col-sm-3 visible-lg visible-md visible-sm\"> -->
    <div class=\"row\">
      <div class=\"col-lg-offset-1 col-lg-1 col-md-offset-4 col-sm-offset-4 col-sm-4\">
        <a href=\"<?php echo \$baseUrl.'/index.php?page=home'; ?>\" title=\"GoZpeak!\"><img src=\"views/images/gozpeak_small.png\" alt=\"GoZpeak\" /></a>
      </div>

    <!-- <div class=\"navbar-header row col-xs-5 visible-xs\">
      <a href=\"index.php?page=home\"><img src=\"views/images/gozpeak_small.png\" alt=\"GoZpeak\" title=\"GoZpeak!\" /></a>
    </div> -->


    <!-- <div class=\"pull-left col-xs-12 visible-xs\" style=\"padding-top: -0.30%;\">
      <form class=\"navbar-form\" role=\"search\">
        <div class=\"input-group\">
          <input type=\"text\" class=\"input form-control\" placeholder=\"<?php #echo \$headband[\$_SESSION['language']]['search']['text']; ?>\" title=\"<?php #echo \$headband[\$_SESSION['language']]['search']['title']; ?>\" name=\"q\" disabled>
          <div class=\"input-group-btn\">
            <button class=\"btn btn-primary\" type=\"submit\"><i class=\"glyphicon glyphicon-search\"></i></button>
          </div>
        </div>
      </form>
    </div>


      <div class=\"pull-left col-md-offset-2 col-sm-offset-2 visible-md visible-sm\" style=\"padding-top: -0.30%;\">
        <form class=\"navbar-form\" role=\"search\">
          <div class=\"input-group\">
            <input type=\"text\" class=\"input form-control\" placeholder=\"<?php #echo \$headband[\$_SESSION['language']]['search']['text']; ?>\" title=\"<?php #echo \$headband[\$_SESSION['language']]['search']['title']; ?>\" name=\"q\" disabled>
            <div class=\"input-group-btn\">
              <button class=\"btn btn-primary\" type=\"submit\"><i class=\"glyphicon glyphicon-search\"></i></button>
            </div>
          </div>
        </form>
      </div>


      <div class=\"pull-right col-lg-6 visible-lg\" style=\"padding-top: -0.30%;\">
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
      <div class=\"col-lg-offset-2 col-lg-8 col-md-12 col-sm-12 col-xs-6\">
        <ul class=\"nav nav-tabs\">
          <li class=\"col-lg-3 col-md-3 col-sm-3 col-xs-7 text-right btn navbar-btn\"><a href=\"<?php echo \$baseUrl.'/index.php?page=profil' ?>\"><span class=\"glyphicon glyphicon-user\"> <?php echo \$_SESSION['profil']; ?></span></a></li>
          <li class=\"col-lg-4 col-md-4 col-sm-4 col-xs-9 text-right btn navbar-btn\"><a href=\"<?php echo \$baseUrl.'/index.php?page=logout' ?>\"><span class=\"glyphicon glyphicon-log-out\"> <?php echo \$headband[\$_SESSION['language']]['logout']; ?> </span></a></li>
          <li class=\"col-lg-4 col-md-4 col-sm-4 col-xs-10 text-right btn navbar-btn\"><a title=\"<?php echo \$headband[\$_SESSION['language']]['event']['title']; ?>\" data-toggle=\"modal\" data-target=\"#modalSelectQuery\"><span class=\"glyphicon glyphicon-calendar\"> <?php echo \$headband[\$_SESSION['language']]['event']['text']; ?> </span></a></li>
        </ul>
      </div>

    <!-- <div class=\"nav navbar-nav col-lg-12 col-md-12 col-sm-12 pull-left row visible-lg visible-md visible-sm\">
      <ul class=\"nav nav-tabs\" style=\"padding-top:1%;\">
        <li class=\"col-lg-4 col-md-4 col-sm-4 pull-left btn navbar-btn\"><a title=\"<?php #echo \$headband[\$_SESSION['language']]['event']['title']; ?>\" data-toggle=\"modal\" data-target=\"#modalSelectQuery\"><span class=\"glyphicon glyphicon-calendar\"> <?php #echo \$headband[\$_SESSION['language']]['event']['text']; ?> </span></a></li>
        <li class=\"col-lg-4 col-md-3 col-sm-3 pull-left btn navbar-btn\"><a href=\"<?php #echo \$baseUrl.'/index.php?page=profil' ?>\"><span class=\"glyphicon glyphicon-user\"> <?php #echo \$_SESSION['profil']; ?></span></a></li>1
        <li class=\"col-lg-3 col-md-4 col-sm-4 pull-left btn navbar-btn\"><a href=\"<?php #echo \$baseUrl.'/index.php?page=logout' ?>\"><span class=\"glyphicon glyphicon-log-out\"> <?php #echo \$headband[\$_SESSION['language']]['logout']; ?> </span></a></li>
      </ul>
    </div> -->

    <!-- <div class=\"nav navbar-nav pull-right col-xs-5 pull-left row visible-xs\">
      <ul class=\"nav\" style=\"padding-top:1%;\">
        <li class=\"col-xs-offset-1 pull-left btn navbar-btn\"><a href=\"<?php #echo \$baseUrl.'/index.php?page=logout' ?>\"><span class=\"glyphicon glyphicon-log-out\"> <?php #echo \$headband[\$_SESSION['language']]['logout']; ?> </span></a></li>
        <li class=\"col-xs-offset-1 pull-left btn navbar-btn\"><a href=\"<?php #echo \$baseUrl.'/index.php?page=profil' ?>\"><span class=\"glyphicon glyphicon-user\"> <?php #echo \$_SESSION['profil']; ?></span></a></li>
        <li class=\"col-xs-offset-1 pull-left btn navbar-btn\"><a title=\"<?php #echo \$headband[\$_SESSION['language']]['event']['title']; ?>\" data-toggle=\"modal\" data-target=\"#modalSelectQuery\"><span class=\"glyphicon glyphicon-calendar\"> <?php #echo \$headband[\$_SESSION['language']]['event']['text']; ?> </span></a></li>
      </ul> -->
    </div>
  </div>
</nav>
";
        
        $__internal_e373ef745f819ccd0f31e39c6a0d156683bedd7a34b66d9406a273b4708265b1->leave($__internal_e373ef745f819ccd0f31e39c6a0d156683bedd7a34b66d9406a273b4708265b1_prof);

        
        $__internal_26c581d561a641a5c9f95f47359a4ee0b898ec1024c069649ccb2b25077971cf->leave($__internal_26c581d561a641a5c9f95f47359a4ee0b898ec1024c069649ccb2b25077971cf_prof);

    }

    public function getTemplateName()
    {
        return "header-logged.php";
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
        return new Twig_Source("<?php
session_start();
?>

<nav role=\"navigation\" class=\"navbar navbar-default navbar-inverse\">
  <div class=\"container-fluid\">
    <!-- <div class=\"navbar-header row text-center col-lg-6 col-md-offset-1 col-sm-offset-1 col-md-3 col-sm-3 visible-lg visible-md visible-sm\"> -->
    <div class=\"row\">
      <div class=\"col-lg-offset-1 col-lg-1 col-md-offset-4 col-sm-offset-4 col-sm-4\">
        <a href=\"<?php echo \$baseUrl.'/index.php?page=home'; ?>\" title=\"GoZpeak!\"><img src=\"views/images/gozpeak_small.png\" alt=\"GoZpeak\" /></a>
      </div>

    <!-- <div class=\"navbar-header row col-xs-5 visible-xs\">
      <a href=\"index.php?page=home\"><img src=\"views/images/gozpeak_small.png\" alt=\"GoZpeak\" title=\"GoZpeak!\" /></a>
    </div> -->


    <!-- <div class=\"pull-left col-xs-12 visible-xs\" style=\"padding-top: -0.30%;\">
      <form class=\"navbar-form\" role=\"search\">
        <div class=\"input-group\">
          <input type=\"text\" class=\"input form-control\" placeholder=\"<?php #echo \$headband[\$_SESSION['language']]['search']['text']; ?>\" title=\"<?php #echo \$headband[\$_SESSION['language']]['search']['title']; ?>\" name=\"q\" disabled>
          <div class=\"input-group-btn\">
            <button class=\"btn btn-primary\" type=\"submit\"><i class=\"glyphicon glyphicon-search\"></i></button>
          </div>
        </div>
      </form>
    </div>


      <div class=\"pull-left col-md-offset-2 col-sm-offset-2 visible-md visible-sm\" style=\"padding-top: -0.30%;\">
        <form class=\"navbar-form\" role=\"search\">
          <div class=\"input-group\">
            <input type=\"text\" class=\"input form-control\" placeholder=\"<?php #echo \$headband[\$_SESSION['language']]['search']['text']; ?>\" title=\"<?php #echo \$headband[\$_SESSION['language']]['search']['title']; ?>\" name=\"q\" disabled>
            <div class=\"input-group-btn\">
              <button class=\"btn btn-primary\" type=\"submit\"><i class=\"glyphicon glyphicon-search\"></i></button>
            </div>
          </div>
        </form>
      </div>


      <div class=\"pull-right col-lg-6 visible-lg\" style=\"padding-top: -0.30%;\">
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
      <div class=\"col-lg-offset-2 col-lg-8 col-md-12 col-sm-12 col-xs-6\">
        <ul class=\"nav nav-tabs\">
          <li class=\"col-lg-3 col-md-3 col-sm-3 col-xs-7 text-right btn navbar-btn\"><a href=\"<?php echo \$baseUrl.'/index.php?page=profil' ?>\"><span class=\"glyphicon glyphicon-user\"> <?php echo \$_SESSION['profil']; ?></span></a></li>
          <li class=\"col-lg-4 col-md-4 col-sm-4 col-xs-9 text-right btn navbar-btn\"><a href=\"<?php echo \$baseUrl.'/index.php?page=logout' ?>\"><span class=\"glyphicon glyphicon-log-out\"> <?php echo \$headband[\$_SESSION['language']]['logout']; ?> </span></a></li>
          <li class=\"col-lg-4 col-md-4 col-sm-4 col-xs-10 text-right btn navbar-btn\"><a title=\"<?php echo \$headband[\$_SESSION['language']]['event']['title']; ?>\" data-toggle=\"modal\" data-target=\"#modalSelectQuery\"><span class=\"glyphicon glyphicon-calendar\"> <?php echo \$headband[\$_SESSION['language']]['event']['text']; ?> </span></a></li>
        </ul>
      </div>

    <!-- <div class=\"nav navbar-nav col-lg-12 col-md-12 col-sm-12 pull-left row visible-lg visible-md visible-sm\">
      <ul class=\"nav nav-tabs\" style=\"padding-top:1%;\">
        <li class=\"col-lg-4 col-md-4 col-sm-4 pull-left btn navbar-btn\"><a title=\"<?php #echo \$headband[\$_SESSION['language']]['event']['title']; ?>\" data-toggle=\"modal\" data-target=\"#modalSelectQuery\"><span class=\"glyphicon glyphicon-calendar\"> <?php #echo \$headband[\$_SESSION['language']]['event']['text']; ?> </span></a></li>
        <li class=\"col-lg-4 col-md-3 col-sm-3 pull-left btn navbar-btn\"><a href=\"<?php #echo \$baseUrl.'/index.php?page=profil' ?>\"><span class=\"glyphicon glyphicon-user\"> <?php #echo \$_SESSION['profil']; ?></span></a></li>1
        <li class=\"col-lg-3 col-md-4 col-sm-4 pull-left btn navbar-btn\"><a href=\"<?php #echo \$baseUrl.'/index.php?page=logout' ?>\"><span class=\"glyphicon glyphicon-log-out\"> <?php #echo \$headband[\$_SESSION['language']]['logout']; ?> </span></a></li>
      </ul>
    </div> -->

    <!-- <div class=\"nav navbar-nav pull-right col-xs-5 pull-left row visible-xs\">
      <ul class=\"nav\" style=\"padding-top:1%;\">
        <li class=\"col-xs-offset-1 pull-left btn navbar-btn\"><a href=\"<?php #echo \$baseUrl.'/index.php?page=logout' ?>\"><span class=\"glyphicon glyphicon-log-out\"> <?php #echo \$headband[\$_SESSION['language']]['logout']; ?> </span></a></li>
        <li class=\"col-xs-offset-1 pull-left btn navbar-btn\"><a href=\"<?php #echo \$baseUrl.'/index.php?page=profil' ?>\"><span class=\"glyphicon glyphicon-user\"> <?php #echo \$_SESSION['profil']; ?></span></a></li>
        <li class=\"col-xs-offset-1 pull-left btn navbar-btn\"><a title=\"<?php #echo \$headband[\$_SESSION['language']]['event']['title']; ?>\" data-toggle=\"modal\" data-target=\"#modalSelectQuery\"><span class=\"glyphicon glyphicon-calendar\"> <?php #echo \$headband[\$_SESSION['language']]['event']['text']; ?> </span></a></li>
      </ul> -->
    </div>
  </div>
</nav>
", "header-logged.php", "/root/GozpeakSymfony/app/Resources/views/header-logged.php");
    }
}
