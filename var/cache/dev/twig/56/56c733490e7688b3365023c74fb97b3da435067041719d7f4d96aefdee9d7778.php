<?php

/* Gozpeak/controllers/lib/mailgun.php */
class __TwigTemplate_2cc9d03799f741a19371342b750d7502cc75737d103a27ccd1f950553cddedba extends Twig_Template
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
        $__internal_2412e499079490781eaba3f6e16f1cceecadc8b3b849325f0aa3277424d427dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2412e499079490781eaba3f6e16f1cceecadc8b3b849325f0aa3277424d427dd->enter($__internal_2412e499079490781eaba3f6e16f1cceecadc8b3b849325f0aa3277424d427dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/lib/mailgun.php"));

        $__internal_5bac4995a4cbf01992e89322d7cf45232736f2be8f4672999def7096741af931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bac4995a4cbf01992e89322d7cf45232736f2be8f4672999def7096741af931->enter($__internal_5bac4995a4cbf01992e89322d7cf45232736f2be8f4672999def7096741af931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/lib/mailgun.php"));

        // line 1
        echo "<?php

function send_by_mailgun(\$email,\$subject,\$msg) {
\t \$api_key=\"key-d63020f29a13791a9757e14e749478df\";       /* Api Key got from https://mailgun.com/cp/my_account */
\t \$domain=\"gozpeak.com\";   \t\t\t\t/* Domain Name you given to Mailgun */
         \$address=\"info@gozpeak.com\";
\t \$ch = curl_init();
\t curl_setopt(\$ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
\t curl_setopt(\$ch, CURLOPT_USERPWD, 'api:'.\$api_key);
\t curl_setopt(\$ch, CURLOPT_RETURNTRANSFER, 1);
\t curl_setopt(\$ch, CURLOPT_HEADER, 1);
         curl_setopt (\$ch, CURLOPT_VERBOSE, 0);
\t curl_setopt (\$ch, CURLOPT_MAXREDIRS, 3);
\t curl_setopt(\$ch, CURLOPT_CUSTOMREQUEST, 'POST');
\t curl_setopt(\$ch, CURLOPT_URL, 'https://api.mailgun.net/v3/'.\$domain.'/messages');
\t curl_setopt(\$ch, CURLOPT_HEADER, false);
\t #curl_setopt(\$ch, CURLOPT_HTTPHEADER, array(
\t # \"From: \$email\",
\t # \"Reply-To: info@gozpeak.com\",
\t # \"MIME-Version: 1.0\",
\t # \"Content-type: text/plain; charset=utf-8\",
\t # \"Content-Transfer-Encoding: quoted-printable\"));
\t curl_setopt(\$ch, CURLOPT_POSTFIELDS, array(
\t  'from' \t\t\t => \"Equipe Gozpeak <\$address>\",
  \t  'to' \t\t\t\t => \"\$email\",
\t  'h:Reply-To' \t\t\t => \"<\$address>\",
\t  'h:MIME-Version'\t\t => \"1.0\",
\t  #'h:Content-Type'\t\t => \"text/html; charset=UTF-8\",
\t  'h:Content-Type' \t\t => \"multipart/related; boundary='boundary-example'; type='text/html'\",
\t  'h:Content-Transfer-Encoding'  => \"quoted-printable\",
  \t  'subject' \t\t\t => \"\$subject\",
  \t  'html' \t\t\t => \"\$msg\"
 \t));
     \$result = curl_exec(\$ch);
     curl_close(\$ch);
     return \$result;
}

?>
";
        
        $__internal_2412e499079490781eaba3f6e16f1cceecadc8b3b849325f0aa3277424d427dd->leave($__internal_2412e499079490781eaba3f6e16f1cceecadc8b3b849325f0aa3277424d427dd_prof);

        
        $__internal_5bac4995a4cbf01992e89322d7cf45232736f2be8f4672999def7096741af931->leave($__internal_5bac4995a4cbf01992e89322d7cf45232736f2be8f4672999def7096741af931_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/lib/mailgun.php";
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

function send_by_mailgun(\$email,\$subject,\$msg) {
\t \$api_key=\"key-d63020f29a13791a9757e14e749478df\";       /* Api Key got from https://mailgun.com/cp/my_account */
\t \$domain=\"gozpeak.com\";   \t\t\t\t/* Domain Name you given to Mailgun */
         \$address=\"info@gozpeak.com\";
\t \$ch = curl_init();
\t curl_setopt(\$ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
\t curl_setopt(\$ch, CURLOPT_USERPWD, 'api:'.\$api_key);
\t curl_setopt(\$ch, CURLOPT_RETURNTRANSFER, 1);
\t curl_setopt(\$ch, CURLOPT_HEADER, 1);
         curl_setopt (\$ch, CURLOPT_VERBOSE, 0);
\t curl_setopt (\$ch, CURLOPT_MAXREDIRS, 3);
\t curl_setopt(\$ch, CURLOPT_CUSTOMREQUEST, 'POST');
\t curl_setopt(\$ch, CURLOPT_URL, 'https://api.mailgun.net/v3/'.\$domain.'/messages');
\t curl_setopt(\$ch, CURLOPT_HEADER, false);
\t #curl_setopt(\$ch, CURLOPT_HTTPHEADER, array(
\t # \"From: \$email\",
\t # \"Reply-To: info@gozpeak.com\",
\t # \"MIME-Version: 1.0\",
\t # \"Content-type: text/plain; charset=utf-8\",
\t # \"Content-Transfer-Encoding: quoted-printable\"));
\t curl_setopt(\$ch, CURLOPT_POSTFIELDS, array(
\t  'from' \t\t\t => \"Equipe Gozpeak <\$address>\",
  \t  'to' \t\t\t\t => \"\$email\",
\t  'h:Reply-To' \t\t\t => \"<\$address>\",
\t  'h:MIME-Version'\t\t => \"1.0\",
\t  #'h:Content-Type'\t\t => \"text/html; charset=UTF-8\",
\t  'h:Content-Type' \t\t => \"multipart/related; boundary='boundary-example'; type='text/html'\",
\t  'h:Content-Transfer-Encoding'  => \"quoted-printable\",
  \t  'subject' \t\t\t => \"\$subject\",
  \t  'html' \t\t\t => \"\$msg\"
 \t));
     \$result = curl_exec(\$ch);
     curl_close(\$ch);
     return \$result;
}

?>
", "Gozpeak/controllers/lib/mailgun.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/lib/mailgun.php");
    }
}
