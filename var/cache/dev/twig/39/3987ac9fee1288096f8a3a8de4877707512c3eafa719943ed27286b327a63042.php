<?php

/* modals/modal-resetpass.php */
class __TwigTemplate_d005762b1ebe7b0d385e7a2cdcc564fbe15d629d47c15c90ee4c586a05be0b6a extends Twig_Template
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
        $__internal_e22b0d56285a43dc035de7e640fd1da95ba62c48cd21e4e6688fac6bb399d13a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e22b0d56285a43dc035de7e640fd1da95ba62c48cd21e4e6688fac6bb399d13a->enter($__internal_e22b0d56285a43dc035de7e640fd1da95ba62c48cd21e4e6688fac6bb399d13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modals/modal-resetpass.php"));

        $__internal_cdaaa07d0564e167c461fed5865459311ba6905301f9c284fc2f4192915c72db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdaaa07d0564e167c461fed5865459311ba6905301f9c284fc2f4192915c72db->enter($__internal_cdaaa07d0564e167c461fed5865459311ba6905301f9c284fc2f4192915c72db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modals/modal-resetpass.php"));

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
        
        $__internal_e22b0d56285a43dc035de7e640fd1da95ba62c48cd21e4e6688fac6bb399d13a->leave($__internal_e22b0d56285a43dc035de7e640fd1da95ba62c48cd21e4e6688fac6bb399d13a_prof);

        
        $__internal_cdaaa07d0564e167c461fed5865459311ba6905301f9c284fc2f4192915c72db->leave($__internal_cdaaa07d0564e167c461fed5865459311ba6905301f9c284fc2f4192915c72db_prof);

    }

    public function getTemplateName()
    {
        return "modals/modal-resetpass.php";
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
", "modals/modal-resetpass.php", "/root/Gozpeak/app/Resources/views/modals/modal-resetpass.php");
    }
}
