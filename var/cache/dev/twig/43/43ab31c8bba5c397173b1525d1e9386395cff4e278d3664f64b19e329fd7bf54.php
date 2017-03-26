<?php

/* Gozpeak/controllers/home.php */
class __TwigTemplate_ae60a8c69c7e5a0b266ec559f635a2ada1c2dca4a6156d38fbbb568722ab37cf extends Twig_Template
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
        $__internal_35a3297a06325a5b9777bb794ecf0b1348ec1cb15e78307ce1a89cc98b9817f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35a3297a06325a5b9777bb794ecf0b1348ec1cb15e78307ce1a89cc98b9817f6->enter($__internal_35a3297a06325a5b9777bb794ecf0b1348ec1cb15e78307ce1a89cc98b9817f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/home.php"));

        $__internal_e851fc2d6923c6841c61442121bf023e5b510c9535f7f8ab7efb1ba50d9ead58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e851fc2d6923c6841c61442121bf023e5b510c9535f7f8ab7efb1ba50d9ead58->enter($__internal_e851fc2d6923c6841c61442121bf023e5b510c9535f7f8ab7efb1ba50d9ead58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/home.php"));

        // line 1
        echo "<?php

session_start();
require_once(CONTROLLERS.'init.php');


/* Set List of views to be sourced */
\$ViewPages = array();
\$ViewFooterPages = array();
\$ViewNavPages = array();


/***** Check if user logged *****/
\$logged = check_logged();
if (\$logged == 1) {
  \$ViewNavPages[] = MODALS.'modal-postevent-logged.php';
  \$ViewNavPages[] = VIEWS.'header-logged.php';
} else {
  \$ViewNavPages[] = MODALS.'modal-postevent-notlogged.php';
  \$ViewNavPages[] = VIEWS.'header-notlogged.php';
}

\$ViewNavPages[] = MODALS.'modal-navbar.php';
\$ViewPages[] = VIEWS.'home.php';

\$ViewFooterPages[] = MODALS.'modal-footer.php';
\$ViewFooterPages[] = VIEWS.'footer.php';


/*********************************** Special : *************************************/
/***** If resetpass mode, it means that reset_pass valid link has been clicked *****/
/***** So, special JS script is needed to display modal ****************************/
if(isset(\$_SESSION['resetpass']) && (\$_SESSION['resetpass'] == 'valid')) {
  \$ViewPages[] = MODALS.'modal-resetpass.php';
}
/*************** End of Modal Sourcing ***************/


\$ViewTitle = \$generic[\$_SESSION['language']]['region'][0].' - '.\$generic[\$_SESSION['language']]['city'][0]['name'];
require_once(VIEWS.'maintemplate.php');

/****** Unset current messages at the end (to the refresh doesn't display all the time \$msg) *******/
unset(\$_SESSION['msg']);
/*if(isset(\$_SESSION['msg'])) echo \$_SESSION['msg'];*/
unset(\$_SESSION['resetpass']);

?>
";
        
        $__internal_35a3297a06325a5b9777bb794ecf0b1348ec1cb15e78307ce1a89cc98b9817f6->leave($__internal_35a3297a06325a5b9777bb794ecf0b1348ec1cb15e78307ce1a89cc98b9817f6_prof);

        
        $__internal_e851fc2d6923c6841c61442121bf023e5b510c9535f7f8ab7efb1ba50d9ead58->leave($__internal_e851fc2d6923c6841c61442121bf023e5b510c9535f7f8ab7efb1ba50d9ead58_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/home.php";
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
        return new Twig_Source("<?php

session_start();
require_once(CONTROLLERS.'init.php');


/* Set List of views to be sourced */
\$ViewPages = array();
\$ViewFooterPages = array();
\$ViewNavPages = array();


/***** Check if user logged *****/
\$logged = check_logged();
if (\$logged == 1) {
  \$ViewNavPages[] = MODALS.'modal-postevent-logged.php';
  \$ViewNavPages[] = VIEWS.'header-logged.php';
} else {
  \$ViewNavPages[] = MODALS.'modal-postevent-notlogged.php';
  \$ViewNavPages[] = VIEWS.'header-notlogged.php';
}

\$ViewNavPages[] = MODALS.'modal-navbar.php';
\$ViewPages[] = VIEWS.'home.php';

\$ViewFooterPages[] = MODALS.'modal-footer.php';
\$ViewFooterPages[] = VIEWS.'footer.php';


/*********************************** Special : *************************************/
/***** If resetpass mode, it means that reset_pass valid link has been clicked *****/
/***** So, special JS script is needed to display modal ****************************/
if(isset(\$_SESSION['resetpass']) && (\$_SESSION['resetpass'] == 'valid')) {
  \$ViewPages[] = MODALS.'modal-resetpass.php';
}
/*************** End of Modal Sourcing ***************/


\$ViewTitle = \$generic[\$_SESSION['language']]['region'][0].' - '.\$generic[\$_SESSION['language']]['city'][0]['name'];
require_once(VIEWS.'maintemplate.php');

/****** Unset current messages at the end (to the refresh doesn't display all the time \$msg) *******/
unset(\$_SESSION['msg']);
/*if(isset(\$_SESSION['msg'])) echo \$_SESSION['msg'];*/
unset(\$_SESSION['resetpass']);

?>
", "Gozpeak/controllers/home.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/home.php");
    }
}
