<?php

/* Gozpeak/views/css/profile.css */
class __TwigTemplate_5ca8ca6dc84bff9388a4d112c458f5431863fa5c18da3c21d429e43abeca6388 extends Twig_Template
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
        $__internal_068919cd97ca9894a8e430c8d3f13965ce8885b837db520750a3be18d77d7fd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_068919cd97ca9894a8e430c8d3f13965ce8885b837db520750a3be18d77d7fd6->enter($__internal_068919cd97ca9894a8e430c8d3f13965ce8885b837db520750a3be18d77d7fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/css/profile.css"));

        $__internal_6df2737e1776f3e61407c5c51fb539834b066087e530cd4ce1ba718c94870d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6df2737e1776f3e61407c5c51fb539834b066087e530cd4ce1ba718c94870d0d->enter($__internal_6df2737e1776f3e61407c5c51fb539834b066087e530cd4ce1ba718c94870d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/css/profile.css"));

        // line 1
        echo "
.profile {
  font-size: 13pt;
  padding-top: 3.5%;
}

.profile button {
  font-size: 11pt;
}

.profile-header {
  margin-bottom: 1%;
  min-width: 600px;
  max-width: 1080px;
  min-height: 200px;
  max-height: 400px;
}

#profile-title {
  margin-bottom: 4%;
}

.profile-avatar {
  height: 16%;
  margin-left: 2%;
}

.profile-head-text {
  font-size: 14pt;
  padding-top: 0.8%;
}

.profile-table {
  background-color: white;
  border-radius: 15px;
  margin: 1% 2% 10% 2%;
  /** Margin to have white borders table **/
  padding: 0% 1% 0% 1%;
  min-width: 660px;
  max-width: 1080px;
  min-height: 475px;
  max-height: 1000px;
}

.profile-table-title {
  font-size: 17pt;
  color: rgb(205, 90, 50);
  padding-top: 1.8%;
  padding-left: 1%;
  padding-right: 4%;
}

.profile-minilang-block {
  margin: 35% 3% 18% 3%;
}

.profile-minilang-entry {
  padding-top: 3%;
}
";
        
        $__internal_068919cd97ca9894a8e430c8d3f13965ce8885b837db520750a3be18d77d7fd6->leave($__internal_068919cd97ca9894a8e430c8d3f13965ce8885b837db520750a3be18d77d7fd6_prof);

        
        $__internal_6df2737e1776f3e61407c5c51fb539834b066087e530cd4ce1ba718c94870d0d->leave($__internal_6df2737e1776f3e61407c5c51fb539834b066087e530cd4ce1ba718c94870d0d_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/views/css/profile.css";
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
        return new Twig_Source("
.profile {
  font-size: 13pt;
  padding-top: 3.5%;
}

.profile button {
  font-size: 11pt;
}

.profile-header {
  margin-bottom: 1%;
  min-width: 600px;
  max-width: 1080px;
  min-height: 200px;
  max-height: 400px;
}

#profile-title {
  margin-bottom: 4%;
}

.profile-avatar {
  height: 16%;
  margin-left: 2%;
}

.profile-head-text {
  font-size: 14pt;
  padding-top: 0.8%;
}

.profile-table {
  background-color: white;
  border-radius: 15px;
  margin: 1% 2% 10% 2%;
  /** Margin to have white borders table **/
  padding: 0% 1% 0% 1%;
  min-width: 660px;
  max-width: 1080px;
  min-height: 475px;
  max-height: 1000px;
}

.profile-table-title {
  font-size: 17pt;
  color: rgb(205, 90, 50);
  padding-top: 1.8%;
  padding-left: 1%;
  padding-right: 4%;
}

.profile-minilang-block {
  margin: 35% 3% 18% 3%;
}

.profile-minilang-entry {
  padding-top: 3%;
}
", "Gozpeak/views/css/profile.css", "/root/Gozpeak/app/Resources/views/Gozpeak/views/css/profile.css");
    }
}
