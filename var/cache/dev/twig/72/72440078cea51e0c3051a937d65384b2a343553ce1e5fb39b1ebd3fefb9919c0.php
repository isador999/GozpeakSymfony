<?php

/* modals/modal-resetpass.php */
class __TwigTemplate_2b71cfedc99c7fdc961a1afffb441026d2ce8fdac2479649529bcf0f573dc53a extends Twig_Template
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
        $__internal_3f0994b657b855b1645e20c5dd56f258bb17191c6b420a3031dd3f58b295c7ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f0994b657b855b1645e20c5dd56f258bb17191c6b420a3031dd3f58b295c7ae->enter($__internal_3f0994b657b855b1645e20c5dd56f258bb17191c6b420a3031dd3f58b295c7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modals/modal-resetpass.php"));

        $__internal_1436cb0df5b12e2ee719d31d080d9ae45a0891560a4c434a660575ed1f6015fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1436cb0df5b12e2ee719d31d080d9ae45a0891560a4c434a660575ed1f6015fd->enter($__internal_1436cb0df5b12e2ee719d31d080d9ae45a0891560a4c434a660575ed1f6015fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modals/modal-resetpass.php"));

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
        
        $__internal_3f0994b657b855b1645e20c5dd56f258bb17191c6b420a3031dd3f58b295c7ae->leave($__internal_3f0994b657b855b1645e20c5dd56f258bb17191c6b420a3031dd3f58b295c7ae_prof);

        
        $__internal_1436cb0df5b12e2ee719d31d080d9ae45a0891560a4c434a660575ed1f6015fd->leave($__internal_1436cb0df5b12e2ee719d31d080d9ae45a0891560a4c434a660575ed1f6015fd_prof);

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
", "modals/modal-resetpass.php", "/root/GozpeakSymfony/app/Resources/views/modals/modal-resetpass.php");
    }
}