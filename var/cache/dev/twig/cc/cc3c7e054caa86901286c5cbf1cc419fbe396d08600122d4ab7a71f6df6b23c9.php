<?php

/* Gozpeak/controllers/lib/check_login.php */
class __TwigTemplate_313f8bfb5d4018671642d948c7779781de3235f485eec5c410129af101d47626 extends Twig_Template
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
        $__internal_cd1d7b8920b5ebd7b738dee7323198322aa76ee04c5f22a272ef6facd9d42c06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd1d7b8920b5ebd7b738dee7323198322aa76ee04c5f22a272ef6facd9d42c06->enter($__internal_cd1d7b8920b5ebd7b738dee7323198322aa76ee04c5f22a272ef6facd9d42c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/lib/check_login.php"));

        $__internal_f8e8bc3c8b44b46dad8243ce9b53d4b802c71fed8583170c9474e92bc4460dbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8e8bc3c8b44b46dad8243ce9b53d4b802c71fed8583170c9474e92bc4460dbd->enter($__internal_f8e8bc3c8b44b46dad8243ce9b53d4b802c71fed8583170c9474e92bc4460dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/lib/check_login.php"));

        // line 1
        echo "<?php

function check_logged () {
if (!isset(\$_SESSION['logged']) || !\$_SESSION['logged']) {
\t//header('location: index.php?page=connexion');
\t\$logged = 0;
}
elseif (isset(\$_SESSION['logged']) && \$_SESSION['logged']) {
\t\$logged = 1;
\t\$user = isset(\$_SESSION['email']) ? \$_SESSION['email'] : '';
\t}
else {
\tsession_destroy();
\t\$logged = 0;
\t}

return \$logged;
}


?>

";
        
        $__internal_cd1d7b8920b5ebd7b738dee7323198322aa76ee04c5f22a272ef6facd9d42c06->leave($__internal_cd1d7b8920b5ebd7b738dee7323198322aa76ee04c5f22a272ef6facd9d42c06_prof);

        
        $__internal_f8e8bc3c8b44b46dad8243ce9b53d4b802c71fed8583170c9474e92bc4460dbd->leave($__internal_f8e8bc3c8b44b46dad8243ce9b53d4b802c71fed8583170c9474e92bc4460dbd_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/lib/check_login.php";
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

function check_logged () {
if (!isset(\$_SESSION['logged']) || !\$_SESSION['logged']) {
\t//header('location: index.php?page=connexion');
\t\$logged = 0;
}
elseif (isset(\$_SESSION['logged']) && \$_SESSION['logged']) {
\t\$logged = 1;
\t\$user = isset(\$_SESSION['email']) ? \$_SESSION['email'] : '';
\t}
else {
\tsession_destroy();
\t\$logged = 0;
\t}

return \$logged;
}


?>

", "Gozpeak/controllers/lib/check_login.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/lib/check_login.php");
    }
}
