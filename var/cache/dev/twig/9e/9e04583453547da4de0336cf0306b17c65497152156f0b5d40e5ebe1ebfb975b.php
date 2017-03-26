<?php

/* Gozpeak/controllers/resetpass.php */
class __TwigTemplate_e4f9ab971e593edd0160b5e02458f217f18824b1ab9ede6784f3a69987fad848 extends Twig_Template
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
        $__internal_b109b3a744085e037b5a4a81d09f7ff458d2e318ded8492a795fd9110f1030f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b109b3a744085e037b5a4a81d09f7ff458d2e318ded8492a795fd9110f1030f2->enter($__internal_b109b3a744085e037b5a4a81d09f7ff458d2e318ded8492a795fd9110f1030f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/resetpass.php"));

        $__internal_a58b0e1622569e573f8a99e3df5c1725bd584c96b86dcdd3be8d637040d45ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a58b0e1622569e573f8a99e3df5c1725bd584c96b86dcdd3be8d637040d45ae6->enter($__internal_a58b0e1622569e573f8a99e3df5c1725bd584c96b86dcdd3be8d637040d45ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/resetpass.php"));

        // line 1
        echo "<?php

session_start();
require_once(CONTROLLERS.'language.php');
require_once(LIB.'sessions_init.php');
require_once(MODELS.'dbconnect.php');
require_once(MODELS.'resetpass_functions.php');

\$page = isset(\$_GET['page']) ? \$_GET['page'] : '';

\$token = isset(\$_GET['token']) ? \$_GET['token'] : '';
\$login = isset(\$_GET['login']) ? \$_GET['login'] : '';
\$DBtoken = retrieve_resetpass_token(\$DB, \$login);
\$token_expiration = retrieve_resetpass_expiration(\$DB, \$login);


/************ If the link contains required variables, check their validity now *************/
if(empty(\$token) OR empty(\$login) OR (\$DBtoken !== \$token) OR (date('Y-m-d H:i:s') >= \$token_expiration)) {
\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\">  Désolé, ce lien est invalide ou expirée.  </div> </div>';
\t\$result=\"invalid_link\";
}
else {
\t\$result=\"valid_link\";
}
/*********************************************************************************************/



/******************* Then, redirect to RESETPASSFORM or HOME page, depending on precedent result *********************/
if (isset(\$result)) {
\t//echo \$result;
\tif(\$result == \"invalid_link\") {
\t/******** set Global var if message isset, and simply redirect to HOME. *********/
\t\tif (isset(\$message)) {
\t\t\t\$_SESSION['msg'] = \$message;
\t\t}
\t} elseif(\$result == \"valid_link\") {
\t\t\$_SESSION['resetpass'] = 'valid';
\t\t\$_SESSION['resetpass_login'] = \$login;
\t}

\tredirect_to_page(\$baseUrl, \$page);
}

?>
";
        
        $__internal_b109b3a744085e037b5a4a81d09f7ff458d2e318ded8492a795fd9110f1030f2->leave($__internal_b109b3a744085e037b5a4a81d09f7ff458d2e318ded8492a795fd9110f1030f2_prof);

        
        $__internal_a58b0e1622569e573f8a99e3df5c1725bd584c96b86dcdd3be8d637040d45ae6->leave($__internal_a58b0e1622569e573f8a99e3df5c1725bd584c96b86dcdd3be8d637040d45ae6_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/resetpass.php";
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
require_once(CONTROLLERS.'language.php');
require_once(LIB.'sessions_init.php');
require_once(MODELS.'dbconnect.php');
require_once(MODELS.'resetpass_functions.php');

\$page = isset(\$_GET['page']) ? \$_GET['page'] : '';

\$token = isset(\$_GET['token']) ? \$_GET['token'] : '';
\$login = isset(\$_GET['login']) ? \$_GET['login'] : '';
\$DBtoken = retrieve_resetpass_token(\$DB, \$login);
\$token_expiration = retrieve_resetpass_expiration(\$DB, \$login);


/************ If the link contains required variables, check their validity now *************/
if(empty(\$token) OR empty(\$login) OR (\$DBtoken !== \$token) OR (date('Y-m-d H:i:s') >= \$token_expiration)) {
\t\$message='<div class=\"form-group\"> <div class=\"alert alert-danger fade in\">  Désolé, ce lien est invalide ou expirée.  </div> </div>';
\t\$result=\"invalid_link\";
}
else {
\t\$result=\"valid_link\";
}
/*********************************************************************************************/



/******************* Then, redirect to RESETPASSFORM or HOME page, depending on precedent result *********************/
if (isset(\$result)) {
\t//echo \$result;
\tif(\$result == \"invalid_link\") {
\t/******** set Global var if message isset, and simply redirect to HOME. *********/
\t\tif (isset(\$message)) {
\t\t\t\$_SESSION['msg'] = \$message;
\t\t}
\t} elseif(\$result == \"valid_link\") {
\t\t\$_SESSION['resetpass'] = 'valid';
\t\t\$_SESSION['resetpass_login'] = \$login;
\t}

\tredirect_to_page(\$baseUrl, \$page);
}

?>
", "Gozpeak/controllers/resetpass.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/resetpass.php");
    }
}
