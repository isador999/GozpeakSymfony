<?php

/* modals/modal-displaymembers.php */
class __TwigTemplate_c16fc2bd2350c6ac94bce7d718d45f39a49d803c3755349164477eb7d6faa686 extends Twig_Template
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
        $__internal_7660a6b4ef405c163cff28edddabac60bf27ef752a5380b3c5e520b065834e51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7660a6b4ef405c163cff28edddabac60bf27ef752a5380b3c5e520b065834e51->enter($__internal_7660a6b4ef405c163cff28edddabac60bf27ef752a5380b3c5e520b065834e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modals/modal-displaymembers.php"));

        $__internal_11989dd5c0bad3788bb0e4f2adfc1c90236f94ee901e04c2345b28125944be24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11989dd5c0bad3788bb0e4f2adfc1c90236f94ee901e04c2345b28125944be24->enter($__internal_11989dd5c0bad3788bb0e4f2adfc1c90236f94ee901e04c2345b28125944be24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modals/modal-displaymembers.php"));

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
        
        $__internal_7660a6b4ef405c163cff28edddabac60bf27ef752a5380b3c5e520b065834e51->leave($__internal_7660a6b4ef405c163cff28edddabac60bf27ef752a5380b3c5e520b065834e51_prof);

        
        $__internal_11989dd5c0bad3788bb0e4f2adfc1c90236f94ee901e04c2345b28125944be24->leave($__internal_11989dd5c0bad3788bb0e4f2adfc1c90236f94ee901e04c2345b28125944be24_prof);

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
", "modals/modal-displaymembers.php", "/root/GozpeakSymfony/app/Resources/views/modals/modal-displaymembers.php");
    }
}
