<?php

/* Gozpeak/controllers/mail.php */
class __TwigTemplate_0bb160534e01236494f3648069a0e9e1f411d5b08cab10fa106bd4a33d65aa26 extends Twig_Template
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
        $__internal_7cbaef641ac1539d1b13ac2a73c8d4476761d1cdb96571f89e8b7facdb470b10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cbaef641ac1539d1b13ac2a73c8d4476761d1cdb96571f89e8b7facdb470b10->enter($__internal_7cbaef641ac1539d1b13ac2a73c8d4476761d1cdb96571f89e8b7facdb470b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/mail.php"));

        $__internal_c41d0b88d0408d08095d9542c71c572673cb3f6b671f0bf923865ce460f950dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c41d0b88d0408d08095d9542c71c572673cb3f6b671f0bf923865ce460f950dd->enter($__internal_c41d0b88d0408d08095d9542c71c572673cb3f6b671f0bf923865ce460f950dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/mail.php"));

        // line 1
        echo "<?php

//\$dest = \"root@localhost\";
//\$subject = \"Bonjour ! \";
//\$body = \"Corps du mail, test via PHP !\";

//mail(\"\$dest\", \"\$subject\", \"\$body\");

\$email = \"root@localhost\";

\$Name = \"myname\"; //senders name
            \$email_sender = \"root@localhost\"; //senders e-mail adress
            \$recipient = \$email; //recipient
            \$mail_body = \"The text for the mail...\"; //mail body
            \$subject = \"Subject for reviever\"; //subject
            \$header = \"From: \". \$Name . \" <\" . \$email_sender . \">\\r\\n\"; 
                        \$status = mail(\$recipient, \$subject, \$mail_body, \$header); 
            print('ENVOI '. \$status);

?>
";
        
        $__internal_7cbaef641ac1539d1b13ac2a73c8d4476761d1cdb96571f89e8b7facdb470b10->leave($__internal_7cbaef641ac1539d1b13ac2a73c8d4476761d1cdb96571f89e8b7facdb470b10_prof);

        
        $__internal_c41d0b88d0408d08095d9542c71c572673cb3f6b671f0bf923865ce460f950dd->leave($__internal_c41d0b88d0408d08095d9542c71c572673cb3f6b671f0bf923865ce460f950dd_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/mail.php";
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

//\$dest = \"root@localhost\";
//\$subject = \"Bonjour ! \";
//\$body = \"Corps du mail, test via PHP !\";

//mail(\"\$dest\", \"\$subject\", \"\$body\");

\$email = \"root@localhost\";

\$Name = \"myname\"; //senders name
            \$email_sender = \"root@localhost\"; //senders e-mail adress
            \$recipient = \$email; //recipient
            \$mail_body = \"The text for the mail...\"; //mail body
            \$subject = \"Subject for reviever\"; //subject
            \$header = \"From: \". \$Name . \" <\" . \$email_sender . \">\\r\\n\"; 
                        \$status = mail(\$recipient, \$subject, \$mail_body, \$header); 
            print('ENVOI '. \$status);

?>
", "Gozpeak/controllers/mail.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/mail.php");
    }
}
