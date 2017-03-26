<?php

/* Gozpeak/views/modals/modal-resetpass.php */
class __TwigTemplate_dc25500964a3e1dabdb4c6aae150c086ee2173882d90dcfee57f79083e2fa153 extends Twig_Template
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
        $__internal_8d9d142ce9c8a9f1430e18d1538be591643c54b49993c80b97e3e8e3158e20aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d9d142ce9c8a9f1430e18d1538be591643c54b49993c80b97e3e8e3158e20aa->enter($__internal_8d9d142ce9c8a9f1430e18d1538be591643c54b49993c80b97e3e8e3158e20aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/modals/modal-resetpass.php"));

        $__internal_bbe19415f73795e1678bcde291655d9ee7d8a8b243f777c13ecf76989485efa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe19415f73795e1678bcde291655d9ee7d8a8b243f777c13ecf76989485efa9->enter($__internal_bbe19415f73795e1678bcde291655d9ee7d8a8b243f777c13ecf76989485efa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/modals/modal-resetpass.php"));

        // line 1
        echo "<!-- Modal ResetPassword -->
<div class=\"modal fade\" style=\"display:none;\" id=\"modalResetPassword\"  tabindex=\"-1\"  role=\"dialog\" aria-labelledby=\"ModalResetPassword\">
\t<div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
  \t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
      \t<h4 class=\"modal-title\"><?php echo \$modal[\$_SESSION['language']]['resetpass']['title']; ?></h4>
  \t\t</div>

\t\t\t\t<!-- The messages container -->
\t\t\t<div id=\"resetpass-errors\" class=\"resetpass-errors\"></div>
\t\t\t<form role=\"form\" data-toggle=\"validator\" class=\"form-horizontal resetpassForm\" name=\"resetpassForm\" id=\"resetpassForm\" method=\"post\" action=\"<?php echo \$baseUrl.'/controllers/reset_user_password.php' ?>\">
\t\t\t\t<div class=\"modal-body\">
    \t\t\t<?php foreach(\$modal[\$_SESSION['language']]['resetpass']['field'] as \$key => \$value){ ?>
        \t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-lg-4 control-label right-modal\" for=\"<?php echo \$value['desc']; ?>\"><?php echo \$value['desc']; ?>&nbsp;&#42;</label>
\t\t\t\t\t\t\t<div class=\"col-lg-7\">
              \t<input type=\"<?php echo \$value['type']; ?>\" class=\"form-control\" id=\"<?php echo \$value['input']; ?>\" name=\"<?php echo \$value['input']; ?>\" placeholder=\"<?php echo \$value['placeholder']; ?>\"/>
            \t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t<?php } ?>
\t\t\t\t</div>

\t\t\t\t<div class=\"modal-footer\">
      \t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><?php echo \$modal[\$_SESSION['language']]['generic']['closed']; ?></button>
\t\t\t\t\t<button type=\"submit\" value=\"Submit\" class=\"btn btn-primary pull-right\"><?php echo \$modal[\$_SESSION['language']]['resetpass']['check']['desc']; ?></button>
      \t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_8d9d142ce9c8a9f1430e18d1538be591643c54b49993c80b97e3e8e3158e20aa->leave($__internal_8d9d142ce9c8a9f1430e18d1538be591643c54b49993c80b97e3e8e3158e20aa_prof);

        
        $__internal_bbe19415f73795e1678bcde291655d9ee7d8a8b243f777c13ecf76989485efa9->leave($__internal_bbe19415f73795e1678bcde291655d9ee7d8a8b243f777c13ecf76989485efa9_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/views/modals/modal-resetpass.php";
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
        return new Twig_Source("<!-- Modal ResetPassword -->
<div class=\"modal fade\" style=\"display:none;\" id=\"modalResetPassword\"  tabindex=\"-1\"  role=\"dialog\" aria-labelledby=\"ModalResetPassword\">
\t<div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
  \t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
      \t<h4 class=\"modal-title\"><?php echo \$modal[\$_SESSION['language']]['resetpass']['title']; ?></h4>
  \t\t</div>

\t\t\t\t<!-- The messages container -->
\t\t\t<div id=\"resetpass-errors\" class=\"resetpass-errors\"></div>
\t\t\t<form role=\"form\" data-toggle=\"validator\" class=\"form-horizontal resetpassForm\" name=\"resetpassForm\" id=\"resetpassForm\" method=\"post\" action=\"<?php echo \$baseUrl.'/controllers/reset_user_password.php' ?>\">
\t\t\t\t<div class=\"modal-body\">
    \t\t\t<?php foreach(\$modal[\$_SESSION['language']]['resetpass']['field'] as \$key => \$value){ ?>
        \t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-lg-4 control-label right-modal\" for=\"<?php echo \$value['desc']; ?>\"><?php echo \$value['desc']; ?>&nbsp;&#42;</label>
\t\t\t\t\t\t\t<div class=\"col-lg-7\">
              \t<input type=\"<?php echo \$value['type']; ?>\" class=\"form-control\" id=\"<?php echo \$value['input']; ?>\" name=\"<?php echo \$value['input']; ?>\" placeholder=\"<?php echo \$value['placeholder']; ?>\"/>
            \t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t<?php } ?>
\t\t\t\t</div>

\t\t\t\t<div class=\"modal-footer\">
      \t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><?php echo \$modal[\$_SESSION['language']]['generic']['closed']; ?></button>
\t\t\t\t\t<button type=\"submit\" value=\"Submit\" class=\"btn btn-primary pull-right\"><?php echo \$modal[\$_SESSION['language']]['resetpass']['check']['desc']; ?></button>
      \t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>
", "Gozpeak/views/modals/modal-resetpass.php", "/root/Gozpeak/app/Resources/views/Gozpeak/views/modals/modal-resetpass.php");
    }
}
