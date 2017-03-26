<?php

/* Gozpeak/models/inscription_functions.php */
class __TwigTemplate_c72de5b85906d8aadd57b95abc8613dc63ac8c5ccea58ae9a36c1f9236a3e0f0 extends Twig_Template
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
        $__internal_97afb7b6b5faa962e9ece8f75542e75b9e436924ad3a00fbba1bfe112557bb8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97afb7b6b5faa962e9ece8f75542e75b9e436924ad3a00fbba1bfe112557bb8c->enter($__internal_97afb7b6b5faa962e9ece8f75542e75b9e436924ad3a00fbba1bfe112557bb8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/models/inscription_functions.php"));

        $__internal_f3acdf0b1a715042f92a26eeaf7e1b7a7675bf9f08ea157f57573d233c9d4d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3acdf0b1a715042f92a26eeaf7e1b7a7675bf9f08ea157f57573d233c9d4d59->enter($__internal_f3acdf0b1a715042f92a26eeaf7e1b7a7675bf9f08ea157f57573d233c9d4d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/models/inscription_functions.php"));

        // line 1
        echo "<?php

function pseudo_exist(\$DB, \$pseudo) {
\t\$req = \$DB->prepare(\"SELECT COUNT(pseudo) FROM members where pseudo = ?\");
\t\$req -> execute(array(\$pseudo));
\t\$nbre_pseudo = \$req->fetchColumn();
\t\$req->closeCursor();
\treturn (\$nbre_pseudo);
}


function mail_exist(\$DB, \$email) {
\t\$req = \$DB->prepare(\"SELECT COUNT(pseudo) FROM members where email = ?\");
\t\$req -> execute(array(\$email));
\t\$nbre_mail = \$req->fetchColumn();
\t\$req->closeCursor();
\treturn (\$nbre_mail);
}


function add_member(\$DB, \$d) {
\t\$req = \$DB->prepare('INSERT INTO members (pseudo, email, password, randomkey) VALUES (?, ?, ?, ?)');
  \$req->execute(\$d);
  \$req->closeCursor();
}


?>
";
        
        $__internal_97afb7b6b5faa962e9ece8f75542e75b9e436924ad3a00fbba1bfe112557bb8c->leave($__internal_97afb7b6b5faa962e9ece8f75542e75b9e436924ad3a00fbba1bfe112557bb8c_prof);

        
        $__internal_f3acdf0b1a715042f92a26eeaf7e1b7a7675bf9f08ea157f57573d233c9d4d59->leave($__internal_f3acdf0b1a715042f92a26eeaf7e1b7a7675bf9f08ea157f57573d233c9d4d59_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/models/inscription_functions.php";
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

function pseudo_exist(\$DB, \$pseudo) {
\t\$req = \$DB->prepare(\"SELECT COUNT(pseudo) FROM members where pseudo = ?\");
\t\$req -> execute(array(\$pseudo));
\t\$nbre_pseudo = \$req->fetchColumn();
\t\$req->closeCursor();
\treturn (\$nbre_pseudo);
}


function mail_exist(\$DB, \$email) {
\t\$req = \$DB->prepare(\"SELECT COUNT(pseudo) FROM members where email = ?\");
\t\$req -> execute(array(\$email));
\t\$nbre_mail = \$req->fetchColumn();
\t\$req->closeCursor();
\treturn (\$nbre_mail);
}


function add_member(\$DB, \$d) {
\t\$req = \$DB->prepare('INSERT INTO members (pseudo, email, password, randomkey) VALUES (?, ?, ?, ?)');
  \$req->execute(\$d);
  \$req->closeCursor();
}


?>
", "Gozpeak/models/inscription_functions.php", "/root/Gozpeak/app/Resources/views/Gozpeak/models/inscription_functions.php");
    }
}
