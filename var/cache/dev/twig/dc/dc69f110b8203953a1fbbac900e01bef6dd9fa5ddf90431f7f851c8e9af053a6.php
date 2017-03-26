<?php

/* Gozpeak/controllers/bienvenue.php */
class __TwigTemplate_ea21492506661754bffc733e3ddf810a0226bc4bb68cbb1fefca4181be18bd73 extends Twig_Template
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
        $__internal_453c8941cb11a4257e92749f2621c01e8e696d886aa6c8c24d3d56260f309489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_453c8941cb11a4257e92749f2621c01e8e696d886aa6c8c24d3d56260f309489->enter($__internal_453c8941cb11a4257e92749f2621c01e8e696d886aa6c8c24d3d56260f309489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/bienvenue.php"));

        $__internal_91d8762a27e7def2631a85ad1879ff3504651aa6234e20cf71b64054c2c1e253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d8762a27e7def2631a85ad1879ff3504651aa6234e20cf71b64054c2c1e253->enter($__internal_91d8762a27e7def2631a85ad1879ff3504651aa6234e20cf71b64054c2c1e253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/bienvenue.php"));

        // line 1
        echo "<?php

require_once('lib/sessions.php');

\$logged = check_logged();
//if(session_status() == 1) {
//\theader('location: index.php?page=connexion');
//}

if (\$logged == 1) {
\tinclude_once('Views/headband-logged.php');
\techo \$_SESSION['email'];
\techo \$_SESSION['logged'];
}
else {
\theader('location: index.php?page=connexion');
\t}

require_once('Views/bienvenue.php');

?>


";
        
        $__internal_453c8941cb11a4257e92749f2621c01e8e696d886aa6c8c24d3d56260f309489->leave($__internal_453c8941cb11a4257e92749f2621c01e8e696d886aa6c8c24d3d56260f309489_prof);

        
        $__internal_91d8762a27e7def2631a85ad1879ff3504651aa6234e20cf71b64054c2c1e253->leave($__internal_91d8762a27e7def2631a85ad1879ff3504651aa6234e20cf71b64054c2c1e253_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/bienvenue.php";
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

require_once('lib/sessions.php');

\$logged = check_logged();
//if(session_status() == 1) {
//\theader('location: index.php?page=connexion');
//}

if (\$logged == 1) {
\tinclude_once('Views/headband-logged.php');
\techo \$_SESSION['email'];
\techo \$_SESSION['logged'];
}
else {
\theader('location: index.php?page=connexion');
\t}

require_once('Views/bienvenue.php');

?>


", "Gozpeak/controllers/bienvenue.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/bienvenue.php");
    }
}
