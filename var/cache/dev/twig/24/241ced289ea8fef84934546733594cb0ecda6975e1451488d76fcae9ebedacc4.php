<?php

/* Gozpeak/views/modals/modal-postevent-notlogged.php */
class __TwigTemplate_77b5fe3b725b0e39ba970b674151d07b30f6c64d93d60e661d052d020a7c38ea extends Twig_Template
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
        $__internal_c53bdbf14556a924e637f43dc69b63e9cab7d06130a0f6027580cc2d99580c92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c53bdbf14556a924e637f43dc69b63e9cab7d06130a0f6027580cc2d99580c92->enter($__internal_c53bdbf14556a924e637f43dc69b63e9cab7d06130a0f6027580cc2d99580c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/modals/modal-postevent-notlogged.php"));

        $__internal_f201a95e438311fde78e80215068d13d8cdf6a909abbbc11ca8f9abb82fcfa36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f201a95e438311fde78e80215068d13d8cdf6a909abbbc11ca8f9abb82fcfa36->enter($__internal_f201a95e438311fde78e80215068d13d8cdf6a909abbbc11ca8f9abb82fcfa36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/modals/modal-postevent-notlogged.php"));

        // line 1
        echo "

<div class=\"modal fade\" style=\"display:none;\" id=\"modalSelectQueryNotLogged\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalSelectQueryNotLogged\">
  <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">

      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <div class=\"modal-title text-center\"> <?php echo \$modal[\$_SESSION['language']]['SelectQuery']['title']; ?> </div>
      </div>

      <div class=\"modal-body titleSelectQuery\">
        <div class=\"text-center\"> <?php echo \$modal[\$_SESSION['language']]['SelectQuery']['msg']; ?> </div>
        <div class=\"form-group\">
        <?php foreach(\$modal[\$_SESSION['language']]['SelectQuery']['field'] as \$key => \$value){ ?>
          <a class=\"col-lg-offset-1 col-lg-4\" onclick=\"showModalEventWithQuery('<?php echo \$value['logo']; ?>','<?php echo \$value['color']; ?>','<?php echo \$value['img']; ?>', '<?php echo \$value['query']; ?>')\"><img class=\"logo\" alt=\"<?php echo \$value['query']; ?>\" src=\"<?php echo \$value['logo'] ?>\"></a> &nbsp;
        <?php } ?>
        </div>
      </div>

      <div class=\"modal-footer\">
\t\t\t  <div class=\"col-lg-offset-1 col-lg-10 text-left\"> <u>Attention </u>:  Vous devez obligatoirement être connecté à votre compte Gozpeak pour pouvoir proposer une activité ! <br/>
        Si vous n'avez pas de compte, <a href=\"#\" onclick=\"\$('#modalSelectQueryNotLogged').modal('hide');\" data-toggle=\"modal\" data-target=\"#modalInscription\"> Inscrivez-vous </a> gratuitement. <br>  Sinon : <a href=\"#\" onclick=\"\$('#modalSelectQueryNotLogged').modal('hide');\" data-toggle=\"modal\" data-target=\"#modalConnection\"> Connectez-vous !</a> </div>
      </div> <!-- END OF FOOTER -->


    </div> <!-- END OF MODAL-CONTENT -->
  </div>
</div>
";
        
        $__internal_c53bdbf14556a924e637f43dc69b63e9cab7d06130a0f6027580cc2d99580c92->leave($__internal_c53bdbf14556a924e637f43dc69b63e9cab7d06130a0f6027580cc2d99580c92_prof);

        
        $__internal_f201a95e438311fde78e80215068d13d8cdf6a909abbbc11ca8f9abb82fcfa36->leave($__internal_f201a95e438311fde78e80215068d13d8cdf6a909abbbc11ca8f9abb82fcfa36_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/views/modals/modal-postevent-notlogged.php";
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

<div class=\"modal fade\" style=\"display:none;\" id=\"modalSelectQueryNotLogged\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalSelectQueryNotLogged\">
  <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">

      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <div class=\"modal-title text-center\"> <?php echo \$modal[\$_SESSION['language']]['SelectQuery']['title']; ?> </div>
      </div>

      <div class=\"modal-body titleSelectQuery\">
        <div class=\"text-center\"> <?php echo \$modal[\$_SESSION['language']]['SelectQuery']['msg']; ?> </div>
        <div class=\"form-group\">
        <?php foreach(\$modal[\$_SESSION['language']]['SelectQuery']['field'] as \$key => \$value){ ?>
          <a class=\"col-lg-offset-1 col-lg-4\" onclick=\"showModalEventWithQuery('<?php echo \$value['logo']; ?>','<?php echo \$value['color']; ?>','<?php echo \$value['img']; ?>', '<?php echo \$value['query']; ?>')\"><img class=\"logo\" alt=\"<?php echo \$value['query']; ?>\" src=\"<?php echo \$value['logo'] ?>\"></a> &nbsp;
        <?php } ?>
        </div>
      </div>

      <div class=\"modal-footer\">
\t\t\t  <div class=\"col-lg-offset-1 col-lg-10 text-left\"> <u>Attention </u>:  Vous devez obligatoirement être connecté à votre compte Gozpeak pour pouvoir proposer une activité ! <br/>
        Si vous n'avez pas de compte, <a href=\"#\" onclick=\"\$('#modalSelectQueryNotLogged').modal('hide');\" data-toggle=\"modal\" data-target=\"#modalInscription\"> Inscrivez-vous </a> gratuitement. <br>  Sinon : <a href=\"#\" onclick=\"\$('#modalSelectQueryNotLogged').modal('hide');\" data-toggle=\"modal\" data-target=\"#modalConnection\"> Connectez-vous !</a> </div>
      </div> <!-- END OF FOOTER -->


    </div> <!-- END OF MODAL-CONTENT -->
  </div>
</div>
", "Gozpeak/views/modals/modal-postevent-notlogged.php", "/root/Gozpeak/app/Resources/views/Gozpeak/views/modals/modal-postevent-notlogged.php");
    }
}
