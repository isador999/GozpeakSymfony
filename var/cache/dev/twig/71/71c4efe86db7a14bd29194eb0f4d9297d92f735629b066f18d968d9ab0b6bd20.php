<?php

/* Gozpeak/models/resetpass_functions.php */
class __TwigTemplate_621f1797fb4a74914a19cb91f243620b4208bf9fdc4f53b034bd5aa8ffd509a2 extends Twig_Template
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
        $__internal_51bd435302709920d0b9d762cbdd860ad9c183908168ac2b2c71ac910007778a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51bd435302709920d0b9d762cbdd860ad9c183908168ac2b2c71ac910007778a->enter($__internal_51bd435302709920d0b9d762cbdd860ad9c183908168ac2b2c71ac910007778a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/models/resetpass_functions.php"));

        $__internal_30f73f86d1a24ef9d7124d57cc817c758c4ada65695d5be62ff8e8ecf4930638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30f73f86d1a24ef9d7124d57cc817c758c4ada65695d5be62ff8e8ecf4930638->enter($__internal_30f73f86d1a24ef9d7124d57cc817c758c4ada65695d5be62ff8e8ecf4930638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/models/resetpass_functions.php"));

        // line 1
        echo "<?php

function retrieve_resetpass_token(\$DB, \$pseudo) {
  \$req = \$DB -> prepare(\"SELECT resetpass_token from members where pseudo = :pseudo\");
  \$req -> execute(array(':pseudo'=>\$pseudo));
\t\$token = \$req -> fetchColumn();
  \$req -> closeCursor();
\treturn(\$token);
}



function retrieve_resetpass_expiration(\$DB, \$pseudo) {
  \$req = \$DB -> prepare(\"SELECT resetpass_expiration from members where pseudo = :pseudo\");
  \$req -> execute(array(':pseudo'=>\$pseudo));
\t\$Expiration = \$req -> fetchColumn();
  \$req -> closeCursor();
\treturn(\$Expiration);
}



/*********** Functions used by 'reset_user_password.php' file ************/
function update_password(\$DB, \$new_dbpass, \$pseudo) {
  \$req = \$DB -> prepare(\"UPDATE members SET password = :newpass where pseudo = :pseudo\");
  \$req -> execute(array(':newpass'=>\$new_dbpass, ':pseudo'=>\$pseudo));
  \$req -> closeCursor();
\treturn 0;
}


function set_resetpass_token(\$DB, \$resetpass_token, \$pseudo) {
  \$req = \$DB -> prepare(\"UPDATE members SET resetpass_token = :resetpass_token where pseudo = :pseudo\");
  \$req -> execute(array(':resetpass_token'=>\$resetpass_token, ':pseudo'=>\$pseudo));
  \$req -> closeCursor();
}


function set_resetpass_expiration(\$DB, \$resetpass_expire, \$pseudo) {
  \$req = \$DB -> prepare(\"UPDATE members SET resetpass_expiration = :resetpass_expire where pseudo = :pseudo\");
  \$req -> execute(array(':resetpass_expire'=>\$resetpass_expire, ':pseudo'=>\$pseudo));
  \$req -> closeCursor();
}


function retrieve_pass_from_pseudo (\$DB, \$pseudo) {
  \$req = \$DB->prepare(\"SELECT password from members where pseudo = ?\");
  \$req -> execute(array(\$pseudo));
  \$hashed_dbpass = \$req->fetchColumn();
  \$req->closeCursor();
  return (\$hashed_dbpass);
}


?>
";
        
        $__internal_51bd435302709920d0b9d762cbdd860ad9c183908168ac2b2c71ac910007778a->leave($__internal_51bd435302709920d0b9d762cbdd860ad9c183908168ac2b2c71ac910007778a_prof);

        
        $__internal_30f73f86d1a24ef9d7124d57cc817c758c4ada65695d5be62ff8e8ecf4930638->leave($__internal_30f73f86d1a24ef9d7124d57cc817c758c4ada65695d5be62ff8e8ecf4930638_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/models/resetpass_functions.php";
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

function retrieve_resetpass_token(\$DB, \$pseudo) {
  \$req = \$DB -> prepare(\"SELECT resetpass_token from members where pseudo = :pseudo\");
  \$req -> execute(array(':pseudo'=>\$pseudo));
\t\$token = \$req -> fetchColumn();
  \$req -> closeCursor();
\treturn(\$token);
}



function retrieve_resetpass_expiration(\$DB, \$pseudo) {
  \$req = \$DB -> prepare(\"SELECT resetpass_expiration from members where pseudo = :pseudo\");
  \$req -> execute(array(':pseudo'=>\$pseudo));
\t\$Expiration = \$req -> fetchColumn();
  \$req -> closeCursor();
\treturn(\$Expiration);
}



/*********** Functions used by 'reset_user_password.php' file ************/
function update_password(\$DB, \$new_dbpass, \$pseudo) {
  \$req = \$DB -> prepare(\"UPDATE members SET password = :newpass where pseudo = :pseudo\");
  \$req -> execute(array(':newpass'=>\$new_dbpass, ':pseudo'=>\$pseudo));
  \$req -> closeCursor();
\treturn 0;
}


function set_resetpass_token(\$DB, \$resetpass_token, \$pseudo) {
  \$req = \$DB -> prepare(\"UPDATE members SET resetpass_token = :resetpass_token where pseudo = :pseudo\");
  \$req -> execute(array(':resetpass_token'=>\$resetpass_token, ':pseudo'=>\$pseudo));
  \$req -> closeCursor();
}


function set_resetpass_expiration(\$DB, \$resetpass_expire, \$pseudo) {
  \$req = \$DB -> prepare(\"UPDATE members SET resetpass_expiration = :resetpass_expire where pseudo = :pseudo\");
  \$req -> execute(array(':resetpass_expire'=>\$resetpass_expire, ':pseudo'=>\$pseudo));
  \$req -> closeCursor();
}


function retrieve_pass_from_pseudo (\$DB, \$pseudo) {
  \$req = \$DB->prepare(\"SELECT password from members where pseudo = ?\");
  \$req -> execute(array(\$pseudo));
  \$hashed_dbpass = \$req->fetchColumn();
  \$req->closeCursor();
  return (\$hashed_dbpass);
}


?>
", "Gozpeak/models/resetpass_functions.php", "/root/Gozpeak/app/Resources/views/Gozpeak/models/resetpass_functions.php");
    }
}
