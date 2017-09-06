<?php

/* header-notlogged.php.dev.php */
class __TwigTemplate_1a37815c0af9eb7141ae7a2c81d604100c5b8a375f82c7c757b0dc806be3b0e8 extends Twig_Template
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
        $__internal_3976956d48646779f049d6b0d1ac204e9e94bab1b724e6d9bb79eeddcb4f9439 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3976956d48646779f049d6b0d1ac204e9e94bab1b724e6d9bb79eeddcb4f9439->enter($__internal_3976956d48646779f049d6b0d1ac204e9e94bab1b724e6d9bb79eeddcb4f9439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header-notlogged.php.dev.php"));

        $__internal_756295b232478610e9d928091526c3d1b17081a7d1e4a9d1c2f8f14b12d4be80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_756295b232478610e9d928091526c3d1b17081a7d1e4a9d1c2f8f14b12d4be80->enter($__internal_756295b232478610e9d928091526c3d1b17081a7d1e4a9d1c2f8f14b12d4be80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header-notlogged.php.dev.php"));

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
        
        $__internal_3976956d48646779f049d6b0d1ac204e9e94bab1b724e6d9bb79eeddcb4f9439->leave($__internal_3976956d48646779f049d6b0d1ac204e9e94bab1b724e6d9bb79eeddcb4f9439_prof);

        
        $__internal_756295b232478610e9d928091526c3d1b17081a7d1e4a9d1c2f8f14b12d4be80->leave($__internal_756295b232478610e9d928091526c3d1b17081a7d1e4a9d1c2f8f14b12d4be80_prof);

    }

    public function getTemplateName()
    {
        return "header-notlogged.php.dev.php";
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
", "header-notlogged.php.dev.php", "/root/GozpeakSymfony/app/Resources/views/header-notlogged.php.dev.php");
    }
}
