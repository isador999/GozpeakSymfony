<?php

/* Gozpeak/models/dbconnect.php */
class __TwigTemplate_8ac304b70c7619665c58694cb3268880ffecc34cd28ef341b6271d46cd29fbe9 extends Twig_Template
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
        $__internal_93c097ba66499d3d7ede97f769f44d5244b44c720683e7ff885cbf35b670d4e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93c097ba66499d3d7ede97f769f44d5244b44c720683e7ff885cbf35b670d4e2->enter($__internal_93c097ba66499d3d7ede97f769f44d5244b44c720683e7ff885cbf35b670d4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/models/dbconnect.php"));

        $__internal_b328d93fae7a3ed1d794414ed37364d026fb771619155c829cce3a4af228f083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b328d93fae7a3ed1d794414ed37364d026fb771619155c829cce3a4af228f083->enter($__internal_b328d93fae7a3ed1d794414ed37364d026fb771619155c829cce3a4af228f083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/models/dbconnect.php"));

        // line 1
        echo "<?php

try {
\t\$DB = new PDO('mysql:host=localhost;dbname=gozpeak_dev', 'root', 'passwd');
\t\$DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
\t\$DB->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
\t\$DB->exec(\"SET CHARACTER SET utf8\");
\tif (isset(\$SQL[\$_SESSION['language']]['locale'])) {
\t\t\$DB->exec(\"SET lc_time_names =\".\$SQL[\$_SESSION['language']]['locale']);
\t}
} catch (PDOException \$e) {
  echo \$e->getMessage();
  die();
}

?>
";
        
        $__internal_93c097ba66499d3d7ede97f769f44d5244b44c720683e7ff885cbf35b670d4e2->leave($__internal_93c097ba66499d3d7ede97f769f44d5244b44c720683e7ff885cbf35b670d4e2_prof);

        
        $__internal_b328d93fae7a3ed1d794414ed37364d026fb771619155c829cce3a4af228f083->leave($__internal_b328d93fae7a3ed1d794414ed37364d026fb771619155c829cce3a4af228f083_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/models/dbconnect.php";
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

try {
\t\$DB = new PDO('mysql:host=localhost;dbname=gozpeak_dev', 'root', 'passwd');
\t\$DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
\t\$DB->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
\t\$DB->exec(\"SET CHARACTER SET utf8\");
\tif (isset(\$SQL[\$_SESSION['language']]['locale'])) {
\t\t\$DB->exec(\"SET lc_time_names =\".\$SQL[\$_SESSION['language']]['locale']);
\t}
} catch (PDOException \$e) {
  echo \$e->getMessage();
  die();
}

?>
", "Gozpeak/models/dbconnect.php", "/root/Gozpeak/app/Resources/views/Gozpeak/models/dbconnect.php");
    }
}
