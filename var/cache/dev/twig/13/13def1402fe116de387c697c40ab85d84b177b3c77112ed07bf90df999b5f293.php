<?php

/* modals/modal-postevent-notlogged.php */
class __TwigTemplate_c25f231ecbc95d14ce9f707c3772acfeea4f92215d3a1af8aefe13cd839f5d4c extends Twig_Template
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
        $__internal_828730f60c30b4ab3050243e9644b231070c23c48882d7a0513e88ed4514b306 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_828730f60c30b4ab3050243e9644b231070c23c48882d7a0513e88ed4514b306->enter($__internal_828730f60c30b4ab3050243e9644b231070c23c48882d7a0513e88ed4514b306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modals/modal-postevent-notlogged.php"));

        $__internal_741059476b86c22f6a728561f11717d3de17a6af0f9c96610050f26102244381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_741059476b86c22f6a728561f11717d3de17a6af0f9c96610050f26102244381->enter($__internal_741059476b86c22f6a728561f11717d3de17a6af0f9c96610050f26102244381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modals/modal-postevent-notlogged.php"));

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
        
        $__internal_828730f60c30b4ab3050243e9644b231070c23c48882d7a0513e88ed4514b306->leave($__internal_828730f60c30b4ab3050243e9644b231070c23c48882d7a0513e88ed4514b306_prof);

        
        $__internal_741059476b86c22f6a728561f11717d3de17a6af0f9c96610050f26102244381->leave($__internal_741059476b86c22f6a728561f11717d3de17a6af0f9c96610050f26102244381_prof);

    }

    public function getTemplateName()
    {
        return "modals/modal-postevent-notlogged.php";
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
", "modals/modal-postevent-notlogged.php", "/root/GozpeakSymfony/app/Resources/views/modals/modal-postevent-notlogged.php");
    }
}