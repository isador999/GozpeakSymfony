<?php

/* Gozpeak/models/forgotpass_functions.php */
class __TwigTemplate_5fbc4e92a5e99c4011a16da5813527eb5f025ddd6f0c27d9a27e48373a1ece3f extends Twig_Template
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
        $__internal_503c2ce8dc1e9c0f66f778a06ef9e9797640f24e58fc91a3f7bbad4f2c026660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_503c2ce8dc1e9c0f66f778a06ef9e9797640f24e58fc91a3f7bbad4f2c026660->enter($__internal_503c2ce8dc1e9c0f66f778a06ef9e9797640f24e58fc91a3f7bbad4f2c026660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/models/forgotpass_functions.php"));

        $__internal_ed8d5041b7785b58c4cb37b6e4e525ca2aa1d66f760d3a1d12eee3d85b1bd4fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed8d5041b7785b58c4cb37b6e4e525ca2aa1d66f760d3a1d12eee3d85b1bd4fe->enter($__internal_ed8d5041b7785b58c4cb37b6e4e525ca2aa1d66f760d3a1d12eee3d85b1bd4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/models/forgotpass_functions.php"));

        // line 1
        echo "<?php


function mail_exist(\$DB, \$email) {
  \$req = \$DB->prepare(\"SELECT COUNT(pseudo) FROM members where email = ?\");
  \$req -> execute(array(\$email));
  \$nbre_mail = \$req->fetchColumn();
  \$req->closeCursor();
  return (\$nbre_mail);
}

function set_resetpass_token (\$DB, \$token, \$pseudo) {
\t\$req = \$DB->prepare(\"UPDATE members SET resetpass_token = :token where pseudo = :pseudo\");
\t\$req -> execute(array(':token'=>\$token, ':pseudo'=>\$pseudo));
\t\$req -> closeCursor();
}


function set_resetpass_expiration(\$DB, \$pseudo) {
\t\$req = \$DB -> prepare(\"UPDATE members set resetpass_expiration = (NOW() + INTERVAL 1 DAY) where pseudo = :pseudo\");
\t//\$req = \$DB->prepare(\"UPDATE members SET resetpass_expiration = :datetime where pseudo = :pseudo;\");
\t\$req -> execute(array(':pseudo'=>\$pseudo));

\t\$req -> closeCursor();
}

function select_pseudo (\$DB, \$ident) {
  \$req = \$DB->prepare(\"SELECT pseudo from members where email = ?\");
  \$req -> execute(array(\$ident));
  \$pseudo = \$req->fetchColumn();
  \$req -> closeCursor();
  return (\$pseudo);
}


?>
";
        
        $__internal_503c2ce8dc1e9c0f66f778a06ef9e9797640f24e58fc91a3f7bbad4f2c026660->leave($__internal_503c2ce8dc1e9c0f66f778a06ef9e9797640f24e58fc91a3f7bbad4f2c026660_prof);

        
        $__internal_ed8d5041b7785b58c4cb37b6e4e525ca2aa1d66f760d3a1d12eee3d85b1bd4fe->leave($__internal_ed8d5041b7785b58c4cb37b6e4e525ca2aa1d66f760d3a1d12eee3d85b1bd4fe_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/models/forgotpass_functions.php";
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


function mail_exist(\$DB, \$email) {
  \$req = \$DB->prepare(\"SELECT COUNT(pseudo) FROM members where email = ?\");
  \$req -> execute(array(\$email));
  \$nbre_mail = \$req->fetchColumn();
  \$req->closeCursor();
  return (\$nbre_mail);
}

function set_resetpass_token (\$DB, \$token, \$pseudo) {
\t\$req = \$DB->prepare(\"UPDATE members SET resetpass_token = :token where pseudo = :pseudo\");
\t\$req -> execute(array(':token'=>\$token, ':pseudo'=>\$pseudo));
\t\$req -> closeCursor();
}


function set_resetpass_expiration(\$DB, \$pseudo) {
\t\$req = \$DB -> prepare(\"UPDATE members set resetpass_expiration = (NOW() + INTERVAL 1 DAY) where pseudo = :pseudo\");
\t//\$req = \$DB->prepare(\"UPDATE members SET resetpass_expiration = :datetime where pseudo = :pseudo;\");
\t\$req -> execute(array(':pseudo'=>\$pseudo));

\t\$req -> closeCursor();
}

function select_pseudo (\$DB, \$ident) {
  \$req = \$DB->prepare(\"SELECT pseudo from members where email = ?\");
  \$req -> execute(array(\$ident));
  \$pseudo = \$req->fetchColumn();
  \$req -> closeCursor();
  return (\$pseudo);
}


?>
", "Gozpeak/models/forgotpass_functions.php", "/root/Gozpeak/app/Resources/views/Gozpeak/models/forgotpass_functions.php");
    }
}
