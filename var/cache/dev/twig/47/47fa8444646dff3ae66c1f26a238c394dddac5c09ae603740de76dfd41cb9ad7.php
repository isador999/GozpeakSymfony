<?php

/* ::footer.html.twig */
class __TwigTemplate_6a968c3e7be0f062c7b3406e31d5446ff29c4d298f5cd9fbb2e0a3d78c5895c5 extends Twig_Template
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
        $__internal_1c1375fdaf3c4a2a484a1931dc437e2c0b93b11417f8ff939ebec1a1959089e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c1375fdaf3c4a2a484a1931dc437e2c0b93b11417f8ff939ebec1a1959089e0->enter($__internal_1c1375fdaf3c4a2a484a1931dc437e2c0b93b11417f8ff939ebec1a1959089e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::footer.html.twig"));

        $__internal_655991d51c22efc9fbbe6f9b65528bdccc0a68cbbc0ccf320eeb91f7b5de1db3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_655991d51c22efc9fbbe6f9b65528bdccc0a68cbbc0ccf320eeb91f7b5de1db3->enter($__internal_655991d51c22efc9fbbe6f9b65528bdccc0a68cbbc0ccf320eeb91f7b5de1db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::footer.html.twig"));

        // line 1
        echo "  <div class=\"container-fluid\">
    <div class=\"row text-center\">
      <div class=\"col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10\">
        <div id=\"titlefooter\">
          <h4 class=\"visible-lg\" style=\"padding-top:1%;\"><strong><?php echo \$footer[\$_SESSION['language']]['title']; ?></strong></h4>
          <h4 class=\"visible-md\" style=\"padding-top:1.4%;\"><strong><?php echo \$footer[\$_SESSION['language']]['title']; ?></strong></h4>
          <h4 class=\"visible-sm\" style=\"padding-top:1.8%;\"><strong><?php echo \$footer[\$_SESSION['language']]['title']; ?></strong></h4>
          <h4 class=\"visible-xs\" style=\"padding-top:2.2%;\"><strong><?php echo \$footer[\$_SESSION['language']]['title']; ?></strong></h4>
        </div>
      </div>
    </div>

    <!-- LG, MD and SM -->
    <div class=\"row\">
      <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\" style=\"padding:2%;\">
        <div class=\"row\">
\t\t      <div class=\"col-lg-offset-5 col-md-offset-5 col-sm-offset-3 col-xs-offset-3 text-left\">
\t\t\t      <div class=\"foot-link\">
\t\t\t        <a data-toggle=\"modal\" data-target=\"#modalContact\" href=\"#\" title=\"<?php echo \$footer[\$_SESSION['language']]['contact']['title']; ?>\"><span class=\"fa fa-envelope\">&nbsp;&nbsp;&nbsp;<?php echo \$footer[\$_SESSION['language']]['contact']['text']; ?></span></a>
\t\t\t      </div>
\t\t\t      <div class=\"foot-link\">
\t\t\t        <a href=\"#\" title=\"<?php echo \$footer[\$_SESSION['language']]['premium']['title']; ?>\"><span class=\"fa fa-star\">&nbsp;&nbsp;&nbsp;<?php echo \$footer[\$_SESSION['language']]['premium']['text']; ?></span></a>
\t\t\t      </div>
\t\t\t      <div class=\"foot-link\">
\t\t\t        <a data-toggle=\"modal\" data-target=\"#modalWhat\" href=\"#\" title=\"<?php echo \$generic[\$_SESSION['language']]['what'][0]['title']; ?>\"><span class=\"fa fa-question-circle\">&nbsp;&nbsp;&nbsp;<?php echo \$generic[\$_SESSION['language']]['what'][0]['text']; ?></span></a>
\t\t\t      </div>
\t\t      </div>
        </div>
\t    </div>

      <!-- SOCIAL BUTTONS : LG, MD and SM -->
      <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1\" style=\"padding:1%;\">
        <div class=\"visible-lg visible-md\">
          <?php echo \$footer[\$_SESSION['language']]['socials']['desc'];?>
        </div>
        <ul>
          <li><a href=\"https://www.facebook.com/gozpeak\" title=\"Page Facebook\"> Facebook </a></li>
        </ul>
      </div>
    </div>

    <div id=\"copyright\" class=\"row text-center\">
      <?php echo \$generic['fr']['footer'][0]; ?>
    </div>
  </div>
";
        
        $__internal_1c1375fdaf3c4a2a484a1931dc437e2c0b93b11417f8ff939ebec1a1959089e0->leave($__internal_1c1375fdaf3c4a2a484a1931dc437e2c0b93b11417f8ff939ebec1a1959089e0_prof);

        
        $__internal_655991d51c22efc9fbbe6f9b65528bdccc0a68cbbc0ccf320eeb91f7b5de1db3->leave($__internal_655991d51c22efc9fbbe6f9b65528bdccc0a68cbbc0ccf320eeb91f7b5de1db3_prof);

    }

    public function getTemplateName()
    {
        return "::footer.html.twig";
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
        return new Twig_Source("  <div class=\"container-fluid\">
    <div class=\"row text-center\">
      <div class=\"col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10\">
        <div id=\"titlefooter\">
          <h4 class=\"visible-lg\" style=\"padding-top:1%;\"><strong><?php echo \$footer[\$_SESSION['language']]['title']; ?></strong></h4>
          <h4 class=\"visible-md\" style=\"padding-top:1.4%;\"><strong><?php echo \$footer[\$_SESSION['language']]['title']; ?></strong></h4>
          <h4 class=\"visible-sm\" style=\"padding-top:1.8%;\"><strong><?php echo \$footer[\$_SESSION['language']]['title']; ?></strong></h4>
          <h4 class=\"visible-xs\" style=\"padding-top:2.2%;\"><strong><?php echo \$footer[\$_SESSION['language']]['title']; ?></strong></h4>
        </div>
      </div>
    </div>

    <!-- LG, MD and SM -->
    <div class=\"row\">
      <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\" style=\"padding:2%;\">
        <div class=\"row\">
\t\t      <div class=\"col-lg-offset-5 col-md-offset-5 col-sm-offset-3 col-xs-offset-3 text-left\">
\t\t\t      <div class=\"foot-link\">
\t\t\t        <a data-toggle=\"modal\" data-target=\"#modalContact\" href=\"#\" title=\"<?php echo \$footer[\$_SESSION['language']]['contact']['title']; ?>\"><span class=\"fa fa-envelope\">&nbsp;&nbsp;&nbsp;<?php echo \$footer[\$_SESSION['language']]['contact']['text']; ?></span></a>
\t\t\t      </div>
\t\t\t      <div class=\"foot-link\">
\t\t\t        <a href=\"#\" title=\"<?php echo \$footer[\$_SESSION['language']]['premium']['title']; ?>\"><span class=\"fa fa-star\">&nbsp;&nbsp;&nbsp;<?php echo \$footer[\$_SESSION['language']]['premium']['text']; ?></span></a>
\t\t\t      </div>
\t\t\t      <div class=\"foot-link\">
\t\t\t        <a data-toggle=\"modal\" data-target=\"#modalWhat\" href=\"#\" title=\"<?php echo \$generic[\$_SESSION['language']]['what'][0]['title']; ?>\"><span class=\"fa fa-question-circle\">&nbsp;&nbsp;&nbsp;<?php echo \$generic[\$_SESSION['language']]['what'][0]['text']; ?></span></a>
\t\t\t      </div>
\t\t      </div>
        </div>
\t    </div>

      <!-- SOCIAL BUTTONS : LG, MD and SM -->
      <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1\" style=\"padding:1%;\">
        <div class=\"visible-lg visible-md\">
          <?php echo \$footer[\$_SESSION['language']]['socials']['desc'];?>
        </div>
        <ul>
          <li><a href=\"https://www.facebook.com/gozpeak\" title=\"Page Facebook\"> Facebook </a></li>
        </ul>
      </div>
    </div>

    <div id=\"copyright\" class=\"row text-center\">
      <?php echo \$generic['fr']['footer'][0]; ?>
    </div>
  </div>
", "::footer.html.twig", "/root/GozpeakSymfony/app/Resources/views/footer.html.twig");
    }
}
