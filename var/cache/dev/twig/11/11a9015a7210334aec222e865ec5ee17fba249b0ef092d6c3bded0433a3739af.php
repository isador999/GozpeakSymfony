<?php

/* Gozpeak/views/maintemplate.php */
class __TwigTemplate_6a245c26443f93cd99c03f6cba8cb6504f2151dbe77063a3073020ded478d4ab extends Twig_Template
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
        $__internal_4b4299a50afee3a56554f82e7be5cee740fdd965bb6f568e0d0c357f94bf093a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b4299a50afee3a56554f82e7be5cee740fdd965bb6f568e0d0c357f94bf093a->enter($__internal_4b4299a50afee3a56554f82e7be5cee740fdd965bb6f568e0d0c357f94bf093a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/maintemplate.php"));

        $__internal_2db93c040e2921fd50c959435a08e10e758088b942bd460dad18f1dc1b43384c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2db93c040e2921fd50c959435a08e10e758088b942bd460dad18f1dc1b43384c->enter($__internal_2db93c040e2921fd50c959435a08e10e758088b942bd460dad18f1dc1b43384c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/maintemplate.php"));

        // line 1
        echo "<!DOCTYPE HTML>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">

    <title><?php echo \$ViewTitle; ?></title>

    <!-- PERSONAL FONT -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"views/fonts/typo/noteworthy.ttc\">

    <!-- BOOTSTRAP STYLES -->
    <link rel=stylesheet type=\"text/css\" href=\"views/css/bootstrap-theme.min.css\">
    <link rel=stylesheet type=\"text/css\" href=\"views/css/bootstrap.min.css\">

    <!-- FONT AWESOME -->
    <link rel=stylesheet type=\"text/css\" href=\"views/css/font-awesome.min.css\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"views/css/jquery-ui.min.css\">

    <!-- PERSONAL STYLE -->
    <link rel=stylesheet type=\"text/css\" href=\"views/css/generic.css\">
    <link rel=stylesheet type=\"text/css\" href=\"views/css/modals.css\">
    <link rel=stylesheet type=\"text/css\" href=\"views/css/home.css\">
    <link rel=stylesheet type=\"text/css\" href=\"views/css/list.css\">
    <link rel=stylesheet type=\"text/css\" href=\"views/css/profile.css\">
    <link rel=stylesheet type=\"text/css\" href=\"views/css/event_idea.css\">
    <link rel=stylesheet type=\"text/css\" href=\"views/css/footer.css\">

    <link rel=stylesheet type=\"text/css\" href=\"views/css/bootstrap-datetimepicker.min.css\">

    <!-- BOOTSTRAP SCRIPT -->
    <script type=\"text/javascript\" src=\"views/js/jquery-3.1.1.min.js\"></script>
    <script type=\"text/javascript\" src=\"views/js/jquery-ui.min.js\"></script>
    <script type=\"text/javascript\" src=\"views/js/bootstrap.min.js\"></script>
    <script type=\"text/javascript\" src=\"views/js/myScript.js\"></script>
    <script type=\"text/javascript\" src=\"views/js/formValidation.min.js\"></script>
    <script type=\"text/javascript\" src=\"views/js/bootstrap-formValidation.min.js\"></script>

    <!-- PERSONAL SCRIPTS -->
    <script type=\"text/javascript\" async src=\"views/js/jquery.subscribe.js\"></script>
    <script type=\"text/javascript\" async src=\"views/js/jquery.connect.js\"></script>
    <script type=\"text/javascript\" async src=\"views/js/jquery.forgotpass.js\"></script>
    <script type=\"text/javascript\" async src=\"views/js/jquery.contact.js\"></script>
    <script type=\"text/javascript\" async src=\"views/js/jquery.listmembers.js\"></script>
    <script type=\"text/javascript\" src=\"views/js/bootstrap-datetimepicker.js\"></script>
    <script type=\"text/javascript\" src=\"views/js/bootstrap-datetimepicker.fr.js\"></script>
    <!-- <script type=\"text/javascript\" src=\"views/js/typeahead.bundle.min.js\"></script>
    <script type=\"text/javascript\" src=\"views/js/typeahead-scroll.js\"></script> -->
  </head>
  <!-- <?php #require(\$this->viewFile); ?> -->


  <body>
    <?php
      if (!empty(\$ViewNavPages)) {
        foreach (\$ViewNavPages as \$page) {
          require_once(\$page);
        }
      }
    ?>

    <!-- Corpse Views -->
    <div class=\"corpse container-fluid\">
      <?php
        if (!empty(\$ViewPages)) {
          foreach (\$ViewPages as \$page) {
            require_once(\$page);
          }
        }
      ?>
    </div>

    <!-- Footer -->
    <footer>
      <?php
        if (!empty(\$ViewFooterPages)) {
          foreach (\$ViewFooterPages as \$page) {
            require_once(\$page);
          }
        }
      ?>
    </footer>
  </body>
</html>
";
        
        $__internal_4b4299a50afee3a56554f82e7be5cee740fdd965bb6f568e0d0c357f94bf093a->leave($__internal_4b4299a50afee3a56554f82e7be5cee740fdd965bb6f568e0d0c357f94bf093a_prof);

        
        $__internal_2db93c040e2921fd50c959435a08e10e758088b942bd460dad18f1dc1b43384c->leave($__internal_2db93c040e2921fd50c959435a08e10e758088b942bd460dad18f1dc1b43384c_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/views/maintemplate.php";
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
        return new Twig_Source("<!DOCTYPE HTML>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">

    <title><?php echo \$ViewTitle; ?></title>

    <!-- PERSONAL FONT -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"views/fonts/typo/noteworthy.ttc\">

    <!-- BOOTSTRAP STYLES -->
    <link rel=stylesheet type=\"text/css\" href=\"views/css/bootstrap-theme.min.css\">
    <link rel=stylesheet type=\"text/css\" href=\"views/css/bootstrap.min.css\">

    <!-- FONT AWESOME -->
    <link rel=stylesheet type=\"text/css\" href=\"views/css/font-awesome.min.css\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"views/css/jquery-ui.min.css\">

    <!-- PERSONAL STYLE -->
    <link rel=stylesheet type=\"text/css\" href=\"views/css/generic.css\">
    <link rel=stylesheet type=\"text/css\" href=\"views/css/modals.css\">
    <link rel=stylesheet type=\"text/css\" href=\"views/css/home.css\">
    <link rel=stylesheet type=\"text/css\" href=\"views/css/list.css\">
    <link rel=stylesheet type=\"text/css\" href=\"views/css/profile.css\">
    <link rel=stylesheet type=\"text/css\" href=\"views/css/event_idea.css\">
    <link rel=stylesheet type=\"text/css\" href=\"views/css/footer.css\">

    <link rel=stylesheet type=\"text/css\" href=\"views/css/bootstrap-datetimepicker.min.css\">

    <!-- BOOTSTRAP SCRIPT -->
    <script type=\"text/javascript\" src=\"views/js/jquery-3.1.1.min.js\"></script>
    <script type=\"text/javascript\" src=\"views/js/jquery-ui.min.js\"></script>
    <script type=\"text/javascript\" src=\"views/js/bootstrap.min.js\"></script>
    <script type=\"text/javascript\" src=\"views/js/myScript.js\"></script>
    <script type=\"text/javascript\" src=\"views/js/formValidation.min.js\"></script>
    <script type=\"text/javascript\" src=\"views/js/bootstrap-formValidation.min.js\"></script>

    <!-- PERSONAL SCRIPTS -->
    <script type=\"text/javascript\" async src=\"views/js/jquery.subscribe.js\"></script>
    <script type=\"text/javascript\" async src=\"views/js/jquery.connect.js\"></script>
    <script type=\"text/javascript\" async src=\"views/js/jquery.forgotpass.js\"></script>
    <script type=\"text/javascript\" async src=\"views/js/jquery.contact.js\"></script>
    <script type=\"text/javascript\" async src=\"views/js/jquery.listmembers.js\"></script>
    <script type=\"text/javascript\" src=\"views/js/bootstrap-datetimepicker.js\"></script>
    <script type=\"text/javascript\" src=\"views/js/bootstrap-datetimepicker.fr.js\"></script>
    <!-- <script type=\"text/javascript\" src=\"views/js/typeahead.bundle.min.js\"></script>
    <script type=\"text/javascript\" src=\"views/js/typeahead-scroll.js\"></script> -->
  </head>
  <!-- <?php #require(\$this->viewFile); ?> -->


  <body>
    <?php
      if (!empty(\$ViewNavPages)) {
        foreach (\$ViewNavPages as \$page) {
          require_once(\$page);
        }
      }
    ?>

    <!-- Corpse Views -->
    <div class=\"corpse container-fluid\">
      <?php
        if (!empty(\$ViewPages)) {
          foreach (\$ViewPages as \$page) {
            require_once(\$page);
          }
        }
      ?>
    </div>

    <!-- Footer -->
    <footer>
      <?php
        if (!empty(\$ViewFooterPages)) {
          foreach (\$ViewFooterPages as \$page) {
            require_once(\$page);
          }
        }
      ?>
    </footer>
  </body>
</html>
", "Gozpeak/views/maintemplate.php", "/root/Gozpeak/app/Resources/views/Gozpeak/views/maintemplate.php");
    }
}
