<?php

/* ./modals/modal-navbar.php */
class __TwigTemplate_953df2ed74f7afdd57989f93b53a0ec38465059ba3c9d535950d59c7b8a0ccbe extends Twig_Template
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
        $__internal_54b4049ec08780377b8f8cb4e0d10859d7962b8201fa59ddfe174684e28697be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54b4049ec08780377b8f8cb4e0d10859d7962b8201fa59ddfe174684e28697be->enter($__internal_54b4049ec08780377b8f8cb4e0d10859d7962b8201fa59ddfe174684e28697be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "./modals/modal-navbar.php"));

        $__internal_393556967d44dc908f4fc4abafda64ca7228088b65f7d9c454acf8a0403fac15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_393556967d44dc908f4fc4abafda64ca7228088b65f7d9c454acf8a0403fac15->enter($__internal_393556967d44dc908f4fc4abafda64ca7228088b65f7d9c454acf8a0403fac15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "./modals/modal-navbar.php"));

        // line 1
        echo "
<div class=\"modal fade\" style=\"display:none;\" id=\"modalInscription\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ModalInscription\">
\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h4 class=\"modal-title text-center\" id=\"ModalInscription\"><?php echo \$modal[\$_SESSION['language']]['inscription']['title']; ?></h4>
\t\t\t</div>

\t\t\t<!-- The messages container -->
\t\t\t<div id=\"inscription-errors\" class=\"text-left col-lg-offset-1 modal-errors\">
\t\t\t</div>

\t\t\t<form role=\"form\" class=\"form-horizontal inscriptionForm\" id=\"inscriptionForm\" name=\"inscriptionForm\" method=\"post\" action=\"<?php echo \$baseUrl .'/controllers/inscription.php' ?>\">

\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<?php foreach(\$modal[\$_SESSION['language']]['inscription']['field'] as \$key => \$value){
\t\t\t\t\t\tif (isset(\$value['mandatory'])) { ?>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-lg-offset-1\">
\t\t\t\t\t\t\t\t\t<label for=\"<?php echo \$value['mandatory']['input']; ?>\"><?php echo \$value['mandatory']['desc']; ?>&nbsp;&#42;</label>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<input type=\"<?php echo \$value['mandatory']['type']; ?>\" class=\"form-control\" id=\"<?php echo \$value['mandatory']['input']; ?>\" name=\"<?php echo \$value['mandatory']['input']; ?>\" placeholder=\"<?php echo \$value['mandatory']['placeholder']; ?>\" required />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t<?php }
\t\t\t\t\t} ?>
\t\t\t\t</div>

\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><?php echo \$modal[\$_SESSION['language']]['generic']['closed']; ?></button>
\t\t\t\t\t<button type=\"submit\" value=\"Submit\" class=\"btn btn-primary pull-right\"><?php echo \$modal[\$_SESSION['language']]['inscription']['check']['desc']; ?></button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>




<div class=\"modal fade\" style=\"display:none;\" id=\"modalConnection\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ModalConnection\">
\t<div class=\"modal-dialog modal-md\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title text-center\" id=\"ModalConnection\"><?php echo \$modal[\$_SESSION['language']]['connection']['title']; ?></h4>
\t\t\t</div>

\t\t\t<!-- The messages container -->
\t\t\t<div id=\"connect-errors\" class=\"text-left col-lg-offset-1 modal-errors\">
\t\t\t</div>
\t\t\t<form role=\"form\" data-toggle=\"validator\" class=\"form-horizontal connectionForm\" name=\"connectionForm\" id=\"connectionForm\" method=\"post\" action=\"<?php echo \$baseUrl.'/controllers/connexion.php' ?>\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<?php foreach(\$modal[\$_SESSION['language']]['connection']['field'] as \$key => \$value){ ?>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"col-lg-3 col-lg-offset-1\">
\t\t\t\t\t\t\t\t<label for=\"<?php echo \$value['mandatory']['input']; ?>\"><?php echo \$value['mandatory']['desc']; ?>&nbsp;&#42;</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t\t\t\t<input type=\"<?php echo \$value['mandatory']['type']; ?>\" class=\"form-control\" id=\"<?php echo \$value['mandatory']['input']; ?>\" name=\"<?php echo \$value['mandatory']['input']; ?>\" placeholder=\"<?php echo \$value['mandatory']['placeholder']; ?>\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t<?php } ?>
\t\t\t\t</div>

\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-link left\" data-dismiss=\"modal\" data-toggle=\"modal\" data-target=\"#modalForgottenPass\"> <?php echo \$modal[\$_SESSION['language']]['connection']['check']['link']; ?></button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><?php echo \$modal[\$_SESSION['language']]['generic']['closed']; ?></button>
\t\t\t\t\t<button type=\"submit\" value=\"Submit\" class=\"btn btn-primary\"><?php echo \$modal[\$_SESSION['language']]['connection']['check']['desc']; ?></button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>



<!-- Modal ForgotPassword -->
<div class=\"modal fade\" style=\"display:none;\" id=\"modalForgottenPass\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ModalForgottenPass\">
\t<div class=\"modal-dialog modal-md\" role=\"document\">
\t\t<div class=\"modal-content\">
      <div class=\"modal-header\">
\t     \t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t     \t<h4 class=\"modal-title text-center\" id=\"ModalForgottenPass\"><?php echo \$modal[\$_SESSION['language']]['forgotpass']['title']; ?></h4>
    \t</div>

\t\t\t<!-- The messages container -->
    \t<div id=\"forgotpass-errors\" class=\"text-left col-lg-9 col-lg-offset-1 modal-errors\">
\t\t\t</div>
\t\t\t<form role=\"form\" data-toggle=\"validator\" class=\"form-horizontal forgotpassForm\" id=\"forgotpassForm\" name=\"forgotpassForm\" method=\"post\" action=\"<?php echo \$baseUrl.'/controllers/forgotpass.php' ?>\">
\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-lg-6 col-lg-offset-1\">
        \t\t\t<label for=\"mail_forgotpass\"><?php echo \$modal[\$_SESSION['language']]['forgotpass']['field'][0]['desc']; ?>&nbsp;&#42;</label>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-8 col-lg-offset-1\">
\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"mail_forgotpass\" name=\"mail_forgotpass\" placeholder=\"<?php echo \$modal[\$_SESSION['language']]['forgotpass']['field'][0]['desc']; ?>\"/>
      \t\t\t</div>
\t\t\t\t\t</div>
  \t\t\t</div>

\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><?php echo \$modal[\$_SESSION['language']]['generic']['closed']; ?></button>
\t\t\t\t\t<button type=\"submit\" value=\"Submit\" class=\"btn btn-primary\"><?php echo \$modal[\$_SESSION['language']]['forgotpass']['check']['desc']; ?></button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_54b4049ec08780377b8f8cb4e0d10859d7962b8201fa59ddfe174684e28697be->leave($__internal_54b4049ec08780377b8f8cb4e0d10859d7962b8201fa59ddfe174684e28697be_prof);

        
        $__internal_393556967d44dc908f4fc4abafda64ca7228088b65f7d9c454acf8a0403fac15->leave($__internal_393556967d44dc908f4fc4abafda64ca7228088b65f7d9c454acf8a0403fac15_prof);

    }

    public function getTemplateName()
    {
        return "./modals/modal-navbar.php";
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
        return new Twig_Source("
<div class=\"modal fade\" style=\"display:none;\" id=\"modalInscription\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ModalInscription\">
\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h4 class=\"modal-title text-center\" id=\"ModalInscription\"><?php echo \$modal[\$_SESSION['language']]['inscription']['title']; ?></h4>
\t\t\t</div>

\t\t\t<!-- The messages container -->
\t\t\t<div id=\"inscription-errors\" class=\"text-left col-lg-offset-1 modal-errors\">
\t\t\t</div>

\t\t\t<form role=\"form\" class=\"form-horizontal inscriptionForm\" id=\"inscriptionForm\" name=\"inscriptionForm\" method=\"post\" action=\"<?php echo \$baseUrl .'/controllers/inscription.php' ?>\">

\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<?php foreach(\$modal[\$_SESSION['language']]['inscription']['field'] as \$key => \$value){
\t\t\t\t\t\tif (isset(\$value['mandatory'])) { ?>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-lg-offset-1\">
\t\t\t\t\t\t\t\t\t<label for=\"<?php echo \$value['mandatory']['input']; ?>\"><?php echo \$value['mandatory']['desc']; ?>&nbsp;&#42;</label>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t<input type=\"<?php echo \$value['mandatory']['type']; ?>\" class=\"form-control\" id=\"<?php echo \$value['mandatory']['input']; ?>\" name=\"<?php echo \$value['mandatory']['input']; ?>\" placeholder=\"<?php echo \$value['mandatory']['placeholder']; ?>\" required />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t<?php }
\t\t\t\t\t} ?>
\t\t\t\t</div>

\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><?php echo \$modal[\$_SESSION['language']]['generic']['closed']; ?></button>
\t\t\t\t\t<button type=\"submit\" value=\"Submit\" class=\"btn btn-primary pull-right\"><?php echo \$modal[\$_SESSION['language']]['inscription']['check']['desc']; ?></button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>




<div class=\"modal fade\" style=\"display:none;\" id=\"modalConnection\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ModalConnection\">
\t<div class=\"modal-dialog modal-md\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title text-center\" id=\"ModalConnection\"><?php echo \$modal[\$_SESSION['language']]['connection']['title']; ?></h4>
\t\t\t</div>

\t\t\t<!-- The messages container -->
\t\t\t<div id=\"connect-errors\" class=\"text-left col-lg-offset-1 modal-errors\">
\t\t\t</div>
\t\t\t<form role=\"form\" data-toggle=\"validator\" class=\"form-horizontal connectionForm\" name=\"connectionForm\" id=\"connectionForm\" method=\"post\" action=\"<?php echo \$baseUrl.'/controllers/connexion.php' ?>\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<?php foreach(\$modal[\$_SESSION['language']]['connection']['field'] as \$key => \$value){ ?>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"col-lg-3 col-lg-offset-1\">
\t\t\t\t\t\t\t\t<label for=\"<?php echo \$value['mandatory']['input']; ?>\"><?php echo \$value['mandatory']['desc']; ?>&nbsp;&#42;</label>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t\t\t\t<input type=\"<?php echo \$value['mandatory']['type']; ?>\" class=\"form-control\" id=\"<?php echo \$value['mandatory']['input']; ?>\" name=\"<?php echo \$value['mandatory']['input']; ?>\" placeholder=\"<?php echo \$value['mandatory']['placeholder']; ?>\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t<?php } ?>
\t\t\t\t</div>

\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-link left\" data-dismiss=\"modal\" data-toggle=\"modal\" data-target=\"#modalForgottenPass\"> <?php echo \$modal[\$_SESSION['language']]['connection']['check']['link']; ?></button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><?php echo \$modal[\$_SESSION['language']]['generic']['closed']; ?></button>
\t\t\t\t\t<button type=\"submit\" value=\"Submit\" class=\"btn btn-primary\"><?php echo \$modal[\$_SESSION['language']]['connection']['check']['desc']; ?></button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>



<!-- Modal ForgotPassword -->
<div class=\"modal fade\" style=\"display:none;\" id=\"modalForgottenPass\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ModalForgottenPass\">
\t<div class=\"modal-dialog modal-md\" role=\"document\">
\t\t<div class=\"modal-content\">
      <div class=\"modal-header\">
\t     \t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t     \t<h4 class=\"modal-title text-center\" id=\"ModalForgottenPass\"><?php echo \$modal[\$_SESSION['language']]['forgotpass']['title']; ?></h4>
    \t</div>

\t\t\t<!-- The messages container -->
    \t<div id=\"forgotpass-errors\" class=\"text-left col-lg-9 col-lg-offset-1 modal-errors\">
\t\t\t</div>
\t\t\t<form role=\"form\" data-toggle=\"validator\" class=\"form-horizontal forgotpassForm\" id=\"forgotpassForm\" name=\"forgotpassForm\" method=\"post\" action=\"<?php echo \$baseUrl.'/controllers/forgotpass.php' ?>\">
\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"col-lg-6 col-lg-offset-1\">
        \t\t\t<label for=\"mail_forgotpass\"><?php echo \$modal[\$_SESSION['language']]['forgotpass']['field'][0]['desc']; ?>&nbsp;&#42;</label>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-8 col-lg-offset-1\">
\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"mail_forgotpass\" name=\"mail_forgotpass\" placeholder=\"<?php echo \$modal[\$_SESSION['language']]['forgotpass']['field'][0]['desc']; ?>\"/>
      \t\t\t</div>
\t\t\t\t\t</div>
  \t\t\t</div>

\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><?php echo \$modal[\$_SESSION['language']]['generic']['closed']; ?></button>
\t\t\t\t\t<button type=\"submit\" value=\"Submit\" class=\"btn btn-primary\"><?php echo \$modal[\$_SESSION['language']]['forgotpass']['check']['desc']; ?></button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>
", "./modals/modal-navbar.php", "/root/Gozpeak/app/Resources/views/modals/modal-navbar.php");
    }
}
