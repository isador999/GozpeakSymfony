<?php

/* Gozpeak/views/header-notlogged.php.dev.php */
class __TwigTemplate_75d115ec1fb9dc044e477069cb35515781e842a10b00c2bdd5c4552e50660553 extends Twig_Template
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
        $__internal_7a26743587197a2ffe49a8e925cdfaa207b491aec06b3efd42317a0f739f40f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a26743587197a2ffe49a8e925cdfaa207b491aec06b3efd42317a0f739f40f5->enter($__internal_7a26743587197a2ffe49a8e925cdfaa207b491aec06b3efd42317a0f739f40f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/header-notlogged.php.dev.php"));

        $__internal_0a750dc9ff8eef23a0de05dbc294f0b87d0cd4b90eff1f4eb78fe6969d2d822f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a750dc9ff8eef23a0de05dbc294f0b87d0cd4b90eff1f4eb78fe6969d2d822f->enter($__internal_0a750dc9ff8eef23a0de05dbc294f0b87d0cd4b90eff1f4eb78fe6969d2d822f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/header-notlogged.php.dev.php"));

        // line 1
        echo "<?php
session_start();
?>

<nav id=\"zpeakNavigation\" class=\"navbar navbar-default navbar-inverse navbar-fixed\" role=\"navigation\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header page-scroll\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>

      <a id=\"zpeakLogo\" class=\"navbar-brand\" href=\"index.php?page=home\"><img src=\"views/images/gozpeak_small.png\" alt=\"GoZpeak\" title=\"GoZpeak!\" /></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul id=\"zpeakNavbar\" class=\"nav navbar-nav nav-pills navbar-right\">
        <li class=\"btn navbar-btn pull-right\">
          <a title=\"<?php echo \$headband[\$_SESSION['language']]['event']['title']; ?>\" data-toggle=\"modal\" data-target=\"#modalSelectQueryNotLogged\"><span class=\"glyphicon glyphicon-calendar\"> <?php echo \$headband[\$_SESSION['language']]['event']['text']; ?> </span></a>
        </li>

        <li class=\"btn navbar-btn pull-right\">
          <a title=\"<?php echo \$headband[\$_SESSION['language']]['registration']['title']; ?>\" data-toggle=\"modal\" data-target=\"#modalInscription\"><span class=\"glyphicon glyphicon-user\"> <?php echo \$headband[\$_SESSION['language']]['registration']['text']; ?></span></a>
        </li>

        <li class=\"btn navbar-btn pull-right\">
          <a title=\"<?php echo \$headband[\$_SESSION['language']]['connection']['title']; ?>\" data-toggle=\"modal\" data-target=\"#modalConnection\"><span class=\"glyphicon glyphicon-log-in\"> <?php echo \$headband[\$_SESSION['language']]['connection']['text']; ?></span></a>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
";
        
        $__internal_7a26743587197a2ffe49a8e925cdfaa207b491aec06b3efd42317a0f739f40f5->leave($__internal_7a26743587197a2ffe49a8e925cdfaa207b491aec06b3efd42317a0f739f40f5_prof);

        
        $__internal_0a750dc9ff8eef23a0de05dbc294f0b87d0cd4b90eff1f4eb78fe6969d2d822f->leave($__internal_0a750dc9ff8eef23a0de05dbc294f0b87d0cd4b90eff1f4eb78fe6969d2d822f_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/views/header-notlogged.php.dev.php";
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

<nav id=\"zpeakNavigation\" class=\"navbar navbar-default navbar-inverse navbar-fixed\" role=\"navigation\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header page-scroll\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>

      <a id=\"zpeakLogo\" class=\"navbar-brand\" href=\"index.php?page=home\"><img src=\"views/images/gozpeak_small.png\" alt=\"GoZpeak\" title=\"GoZpeak!\" /></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul id=\"zpeakNavbar\" class=\"nav navbar-nav nav-pills navbar-right\">
        <li class=\"btn navbar-btn pull-right\">
          <a title=\"<?php echo \$headband[\$_SESSION['language']]['event']['title']; ?>\" data-toggle=\"modal\" data-target=\"#modalSelectQueryNotLogged\"><span class=\"glyphicon glyphicon-calendar\"> <?php echo \$headband[\$_SESSION['language']]['event']['text']; ?> </span></a>
        </li>

        <li class=\"btn navbar-btn pull-right\">
          <a title=\"<?php echo \$headband[\$_SESSION['language']]['registration']['title']; ?>\" data-toggle=\"modal\" data-target=\"#modalInscription\"><span class=\"glyphicon glyphicon-user\"> <?php echo \$headband[\$_SESSION['language']]['registration']['text']; ?></span></a>
        </li>

        <li class=\"btn navbar-btn pull-right\">
          <a title=\"<?php echo \$headband[\$_SESSION['language']]['connection']['title']; ?>\" data-toggle=\"modal\" data-target=\"#modalConnection\"><span class=\"glyphicon glyphicon-log-in\"> <?php echo \$headband[\$_SESSION['language']]['connection']['text']; ?></span></a>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
", "Gozpeak/views/header-notlogged.php.dev.php", "/root/Gozpeak/app/Resources/views/Gozpeak/views/header-notlogged.php.dev.php");
    }
}
