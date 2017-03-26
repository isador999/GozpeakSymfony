<?php

/* ./modals/modal-postevent-notlogged.php */
class __TwigTemplate_e5dd88359e6fb61d07fe5c02801565a9fd9566fe7e4a918d43be771d98ae2dc5 extends Twig_Template
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
        $__internal_dcfc348cf3e01fd1b485ac8de4e7ec58af4b473a0aee88878b7c8316448a5a59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcfc348cf3e01fd1b485ac8de4e7ec58af4b473a0aee88878b7c8316448a5a59->enter($__internal_dcfc348cf3e01fd1b485ac8de4e7ec58af4b473a0aee88878b7c8316448a5a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "./modals/modal-postevent-notlogged.php"));

        $__internal_fc02a48e5412eb4457dacb7f0001fcf258d15cefef1fc60f2f670110a698a80e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc02a48e5412eb4457dacb7f0001fcf258d15cefef1fc60f2f670110a698a80e->enter($__internal_fc02a48e5412eb4457dacb7f0001fcf258d15cefef1fc60f2f670110a698a80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "./modals/modal-postevent-notlogged.php"));

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
        
        $__internal_dcfc348cf3e01fd1b485ac8de4e7ec58af4b473a0aee88878b7c8316448a5a59->leave($__internal_dcfc348cf3e01fd1b485ac8de4e7ec58af4b473a0aee88878b7c8316448a5a59_prof);

        
        $__internal_fc02a48e5412eb4457dacb7f0001fcf258d15cefef1fc60f2f670110a698a80e->leave($__internal_fc02a48e5412eb4457dacb7f0001fcf258d15cefef1fc60f2f670110a698a80e_prof);

    }

    public function getTemplateName()
    {
        return "./modals/modal-postevent-notlogged.php";
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
", "./modals/modal-postevent-notlogged.php", "/root/Gozpeak/app/Resources/views/modals/modal-postevent-notlogged.php");
    }
}
