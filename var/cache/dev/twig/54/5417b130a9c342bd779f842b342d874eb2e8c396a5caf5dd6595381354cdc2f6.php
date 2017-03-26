<?php

/* Gozpeak/models/contact_functions.php */
class __TwigTemplate_42e4be436932a8d689f9ffa277b1b6775f8525b4b5b504370e007761cdd2a3d3 extends Twig_Template
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
        $__internal_6ecfb2fae9172eb0f82a55dafb6fdfa03d8e045b3da720f848a289f30883af7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ecfb2fae9172eb0f82a55dafb6fdfa03d8e045b3da720f848a289f30883af7d->enter($__internal_6ecfb2fae9172eb0f82a55dafb6fdfa03d8e045b3da720f848a289f30883af7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/models/contact_functions.php"));

        $__internal_d7976f9b82e23491936baf57bb3f594a95cf31cc6c5ce2d17c00d4d88e754e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7976f9b82e23491936baf57bb3f594a95cf31cc6c5ce2d17c00d4d88e754e1f->enter($__internal_d7976f9b82e23491936baf57bb3f594a95cf31cc6c5ce2d17c00d4d88e754e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/models/contact_functions.php"));

        // line 1
        echo "<?php

function check_contact_exists(\$DB, \$contact_email, \$contact_subject, \$contact_date) {
\t\$req = \$DB->prepare(\"SELECT COUNT(contact_subject) FROM contact_stats where contact_email = :contact_email AND contact_subject = :contact_subject AND contact_date = :contact_date\");
\t\$req -> execute(array(':contact_email'=>\$contact_email, ':contact_subject'=>\$contact_subject, ':contact_date'=>\$contact_date));
\t\$contactentry = \$req->fetchColumn();
\t\$req->closeCursor();
\treturn (\$contactentry);
}

function register_contacts_stats(\$DB, \$contact_data) {
\t\$req = \$DB->prepare('INSERT INTO contact_stats (contact_name, contact_email, contact_subject, contact_message, contact_date) VALUES (?, ?, ?, ?, ?)');
  \$req->execute(\$contact_data);
  \$req->closeCursor();
}

?>
";
        
        $__internal_6ecfb2fae9172eb0f82a55dafb6fdfa03d8e045b3da720f848a289f30883af7d->leave($__internal_6ecfb2fae9172eb0f82a55dafb6fdfa03d8e045b3da720f848a289f30883af7d_prof);

        
        $__internal_d7976f9b82e23491936baf57bb3f594a95cf31cc6c5ce2d17c00d4d88e754e1f->leave($__internal_d7976f9b82e23491936baf57bb3f594a95cf31cc6c5ce2d17c00d4d88e754e1f_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/models/contact_functions.php";
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

function check_contact_exists(\$DB, \$contact_email, \$contact_subject, \$contact_date) {
\t\$req = \$DB->prepare(\"SELECT COUNT(contact_subject) FROM contact_stats where contact_email = :contact_email AND contact_subject = :contact_subject AND contact_date = :contact_date\");
\t\$req -> execute(array(':contact_email'=>\$contact_email, ':contact_subject'=>\$contact_subject, ':contact_date'=>\$contact_date));
\t\$contactentry = \$req->fetchColumn();
\t\$req->closeCursor();
\treturn (\$contactentry);
}

function register_contacts_stats(\$DB, \$contact_data) {
\t\$req = \$DB->prepare('INSERT INTO contact_stats (contact_name, contact_email, contact_subject, contact_message, contact_date) VALUES (?, ?, ?, ?, ?)');
  \$req->execute(\$contact_data);
  \$req->closeCursor();
}

?>
", "Gozpeak/models/contact_functions.php", "/root/Gozpeak/app/Resources/views/Gozpeak/models/contact_functions.php");
    }
}
