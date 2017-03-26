<?php

/* modals/modal-displaymembers.php */
class __TwigTemplate_8aca9b7e0eacf541bf3c857d02f2ea6709267fc575487bbc29d02eea8fa2f7f7 extends Twig_Template
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
        $__internal_9f39eb057538c4d992557c599a48bbafdc6d3506340fb4440a42046d7f2a0dc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f39eb057538c4d992557c599a48bbafdc6d3506340fb4440a42046d7f2a0dc7->enter($__internal_9f39eb057538c4d992557c599a48bbafdc6d3506340fb4440a42046d7f2a0dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modals/modal-displaymembers.php"));

        $__internal_00b04071890dca032303f2bda8a218e148407e71261f25867db4b6a82b7b4fe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00b04071890dca032303f2bda8a218e148407e71261f25867db4b6a82b7b4fe7->enter($__internal_00b04071890dca032303f2bda8a218e148407e71261f25867db4b6a82b7b4fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modals/modal-displaymembers.php"));

        // line 1
        echo "<!-- Modal What -->
<div class=\"modal fade\" style=\"display:none;\" id=\"modal-displaymembers\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalDisplayMembers\">
\t<div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title displaymembers\"><?php echo \$form[\$_SESSION['language']]['displaymembers']['title']; ?></h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<br>
\t\t\t\t<i><div style=\"font-size: 18px; color: darkred;\" id=\"ajaxupdate\"> </div></i>
\t\t\t\t<br>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><?php echo \$modal['fr']['generic']['closed']; ?></button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_9f39eb057538c4d992557c599a48bbafdc6d3506340fb4440a42046d7f2a0dc7->leave($__internal_9f39eb057538c4d992557c599a48bbafdc6d3506340fb4440a42046d7f2a0dc7_prof);

        
        $__internal_00b04071890dca032303f2bda8a218e148407e71261f25867db4b6a82b7b4fe7->leave($__internal_00b04071890dca032303f2bda8a218e148407e71261f25867db4b6a82b7b4fe7_prof);

    }

    public function getTemplateName()
    {
        return "modals/modal-displaymembers.php";
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
        return new Twig_Source("<!-- Modal What -->
<div class=\"modal fade\" style=\"display:none;\" id=\"modal-displaymembers\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalDisplayMembers\">
\t<div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t<h4 class=\"modal-title displaymembers\"><?php echo \$form[\$_SESSION['language']]['displaymembers']['title']; ?></h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<br>
\t\t\t\t<i><div style=\"font-size: 18px; color: darkred;\" id=\"ajaxupdate\"> </div></i>
\t\t\t\t<br>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><?php echo \$modal['fr']['generic']['closed']; ?></button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
", "modals/modal-displaymembers.php", "/root/Gozpeak/app/Resources/views/modals/modal-displaymembers.php");
    }
}
