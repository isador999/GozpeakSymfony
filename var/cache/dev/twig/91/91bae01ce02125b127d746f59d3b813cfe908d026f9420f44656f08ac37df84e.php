<?php

/* Gozpeak/models/activation_functions.php */
class __TwigTemplate_6814a808e2c982a5c92eea02d84a76ad1cb6c1ea0fd7a15da1cabc721467011b extends Twig_Template
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
        $__internal_88eb466057599676774d99f833619aa24435ee85fe80c3b17009aae9eec007ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88eb466057599676774d99f833619aa24435ee85fe80c3b17009aae9eec007ad->enter($__internal_88eb466057599676774d99f833619aa24435ee85fe80c3b17009aae9eec007ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/models/activation_functions.php"));

        $__internal_7433c2bc4ce9192647ee8e807ec0e295f68183f364e99e840b8457f5f20b1f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7433c2bc4ce9192647ee8e807ec0e295f68183f364e99e840b8457f5f20b1f19->enter($__internal_7433c2bc4ce9192647ee8e807ec0e295f68183f364e99e840b8457f5f20b1f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/models/activation_functions.php"));

        // line 1
        echo "<?php


function check_account_state(\$DB, \$key, \$pseudo) {
  \$req = \$DB->prepare(\"SELECT active from members where randomkey = :key AND pseudo = :pseudo\");
  \$req -> execute(array(':key'=>\$key, ':pseudo'=>\$pseudo));
  \$state = \$req->fetchColumn();
  \$req->closeCursor();
  return (\$state);
}


function update_account_to_active(\$DB, \$key, \$pseudo) {
  \$req = \$DB->prepare(\"UPDATE members SET active = '1' where randomkey = :key AND pseudo = :pseudo\");
  \$req -> execute(array(':key'=>\$key, ':pseudo'=>\$pseudo));
  \$req->closeCursor();
}


?>
";
        
        $__internal_88eb466057599676774d99f833619aa24435ee85fe80c3b17009aae9eec007ad->leave($__internal_88eb466057599676774d99f833619aa24435ee85fe80c3b17009aae9eec007ad_prof);

        
        $__internal_7433c2bc4ce9192647ee8e807ec0e295f68183f364e99e840b8457f5f20b1f19->leave($__internal_7433c2bc4ce9192647ee8e807ec0e295f68183f364e99e840b8457f5f20b1f19_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/models/activation_functions.php";
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


function check_account_state(\$DB, \$key, \$pseudo) {
  \$req = \$DB->prepare(\"SELECT active from members where randomkey = :key AND pseudo = :pseudo\");
  \$req -> execute(array(':key'=>\$key, ':pseudo'=>\$pseudo));
  \$state = \$req->fetchColumn();
  \$req->closeCursor();
  return (\$state);
}


function update_account_to_active(\$DB, \$key, \$pseudo) {
  \$req = \$DB->prepare(\"UPDATE members SET active = '1' where randomkey = :key AND pseudo = :pseudo\");
  \$req -> execute(array(':key'=>\$key, ':pseudo'=>\$pseudo));
  \$req->closeCursor();
}


?>
", "Gozpeak/models/activation_functions.php", "/root/Gozpeak/app/Resources/views/Gozpeak/models/activation_functions.php");
    }
}
