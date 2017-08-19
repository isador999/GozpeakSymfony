<?php

/* footer.php */
class __TwigTemplate_454ce94b73375253497ea12cba95763ea47db403864f76c5f172913352887634 extends Twig_Template
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
        $__internal_8c50cf647e6b2bdcd702e065078186956876b657ae8987bdbf5c58d58f8b17a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c50cf647e6b2bdcd702e065078186956876b657ae8987bdbf5c58d58f8b17a3->enter($__internal_8c50cf647e6b2bdcd702e065078186956876b657ae8987bdbf5c58d58f8b17a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "footer.php"));

        $__internal_fd0b0719079a6095b34eb652121038d16c2e95f7216536b7847c02e897ff587d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd0b0719079a6095b34eb652121038d16c2e95f7216536b7847c02e897ff587d->enter($__internal_fd0b0719079a6095b34eb652121038d16c2e95f7216536b7847c02e897ff587d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "footer.php"));

        // line 1
        echo "
<!-- <footer> -->
  <div class=\"container-fluid\">
    <div class=\"row text-center\">
      <div class=\"col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10\">
        <div id=\"titlefooter\">
          <h4 class=\"visible-lg\" style=\"padding-top:1%;\"><strong>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["footer_text"] ?? $this->getContext($context, "footer_text")), "title", array(), "array"), "html", null, true);
        echo "</strong></h4>
          <h4 class=\"visible-md\" style=\"padding-top:1.4%;\"><strong>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["footer_text"] ?? $this->getContext($context, "footer_text")), "title", array(), "array"), "html", null, true);
        echo "</strong></h4>
          <h4 class=\"visible-sm\" style=\"padding-top:1.8%;\"><strong>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["footer_text"] ?? $this->getContext($context, "footer_text")), "title", array(), "array"), "html", null, true);
        echo "</strong></h4>
          <h4 class=\"visible-xs\" style=\"padding-top:2.2%;\"><strong>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["footer_text"] ?? $this->getContext($context, "footer_text")), "title", array(), "array"), "html", null, true);
        echo "</strong></h4>
        </div>
      </div>
    </div>

    <!-- LG, MD and SM -->
    <div class=\"row\">
      <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\" style=\"padding:2%;\">
        <div class=\"row\">
\t\t      <div class=\"col-lg-offset-5 col-md-offset-5 col-sm-offset-3 col-xs-offset-3 text-left\">
\t\t\t      <div class=\"foot-link\">
\t\t\t        <a data-toggle=\"modal\" data-target=\"#modalContact\" href=\"#\" title=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["footer_titles"] ?? $this->getContext($context, "footer_titles")), "contact", array(), "array"), "html", null, true);
        echo "\"><span class=\"fa fa-envelope\">&nbsp;&nbsp;&nbsp; ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["footer_text"] ?? $this->getContext($context, "footer_text")), "contact", array(), "array"), "html", null, true);
        echo " </span></a>
\t\t\t      </div>
\t\t\t      <div class=\"foot-link\">
\t\t\t        <a href=\"#\" title=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["footer_titles"] ?? $this->getContext($context, "footer_titles")), "premium", array(), "array"), "html", null, true);
        echo "\"><span class=\"fa fa-star\">&nbsp;&nbsp;&nbsp; ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["footer_text"] ?? $this->getContext($context, "footer_text")), "premium", array(), "array"), "html", null, true);
        echo " </span></a>
\t\t\t      </div>
\t\t\t      <div class=\"foot-link\">
\t\t\t        <a data-toggle=\"modal\" data-target=\"#modalWhat\" href=\"#\" title=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["footer_titles"] ?? $this->getContext($context, "footer_titles")), "what", array(), "array"), "html", null, true);
        echo "\"><span class=\"fa fa-question-circle\">&nbsp;&nbsp;&nbsp; ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["footer_text"] ?? $this->getContext($context, "footer_text")), "what", array(), "array"), "html", null, true);
        echo " </span></a>
\t\t\t      </div>
\t\t      </div>
        </div>
\t    </div>

      <!-- SOCIAL BUTTONS : LG, MD and SM -->
      <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1\" style=\"padding:1%;\">
        <div class=\"visible-lg visible-md\">
          ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["footer_text"] ?? $this->getContext($context, "footer_text")), "socials", array(), "array"), "html", null, true);
        echo "
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
<!-- </footer> -->
";
        
        $__internal_8c50cf647e6b2bdcd702e065078186956876b657ae8987bdbf5c58d58f8b17a3->leave($__internal_8c50cf647e6b2bdcd702e065078186956876b657ae8987bdbf5c58d58f8b17a3_prof);

        
        $__internal_fd0b0719079a6095b34eb652121038d16c2e95f7216536b7847c02e897ff587d->leave($__internal_fd0b0719079a6095b34eb652121038d16c2e95f7216536b7847c02e897ff587d_prof);

    }

    public function getTemplateName()
    {
        return "footer.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  75 => 27,  67 => 24,  59 => 21,  45 => 10,  41 => 9,  37 => 8,  33 => 7,  25 => 1,);
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
<!-- <footer> -->
  <div class=\"container-fluid\">
    <div class=\"row text-center\">
      <div class=\"col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10\">
        <div id=\"titlefooter\">
          <h4 class=\"visible-lg\" style=\"padding-top:1%;\"><strong>{{ footer_text['title'] }}</strong></h4>
          <h4 class=\"visible-md\" style=\"padding-top:1.4%;\"><strong>{{ footer_text['title'] }}</strong></h4>
          <h4 class=\"visible-sm\" style=\"padding-top:1.8%;\"><strong>{{ footer_text['title'] }}</strong></h4>
          <h4 class=\"visible-xs\" style=\"padding-top:2.2%;\"><strong>{{ footer_text['title'] }}</strong></h4>
        </div>
      </div>
    </div>

    <!-- LG, MD and SM -->
    <div class=\"row\">
      <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\" style=\"padding:2%;\">
        <div class=\"row\">
\t\t      <div class=\"col-lg-offset-5 col-md-offset-5 col-sm-offset-3 col-xs-offset-3 text-left\">
\t\t\t      <div class=\"foot-link\">
\t\t\t        <a data-toggle=\"modal\" data-target=\"#modalContact\" href=\"#\" title=\"{{ footer_titles['contact'] }}\"><span class=\"fa fa-envelope\">&nbsp;&nbsp;&nbsp; {{ footer_text['contact'] }} </span></a>
\t\t\t      </div>
\t\t\t      <div class=\"foot-link\">
\t\t\t        <a href=\"#\" title=\"{{ footer_titles['premium'] }}\"><span class=\"fa fa-star\">&nbsp;&nbsp;&nbsp; {{ footer_text['premium'] }} </span></a>
\t\t\t      </div>
\t\t\t      <div class=\"foot-link\">
\t\t\t        <a data-toggle=\"modal\" data-target=\"#modalWhat\" href=\"#\" title=\"{{ footer_titles['what'] }}\"><span class=\"fa fa-question-circle\">&nbsp;&nbsp;&nbsp; {{ footer_text['what'] }} </span></a>
\t\t\t      </div>
\t\t      </div>
        </div>
\t    </div>

      <!-- SOCIAL BUTTONS : LG, MD and SM -->
      <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1\" style=\"padding:1%;\">
        <div class=\"visible-lg visible-md\">
          {{ footer_text['socials'] }}
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
<!-- </footer> -->
", "footer.php", "/root/GozpeakSymfony/app/Resources/views/footer.php");
    }
}
