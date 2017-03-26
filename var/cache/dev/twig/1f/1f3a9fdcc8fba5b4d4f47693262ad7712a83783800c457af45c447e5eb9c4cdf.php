<?php

/* Gozpeak/views/modals/modal-displaymembers.php */
class __TwigTemplate_0834a16296276a855e9b24b2e13ddbca62fc998860e8fc844d2e01116f6249bd extends Twig_Template
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
        $__internal_e870a843f0fe085f8dcdb01a9117ba95d8b4ac8a74bc5f8b9b8467e88fcf9e63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e870a843f0fe085f8dcdb01a9117ba95d8b4ac8a74bc5f8b9b8467e88fcf9e63->enter($__internal_e870a843f0fe085f8dcdb01a9117ba95d8b4ac8a74bc5f8b9b8467e88fcf9e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/modals/modal-displaymembers.php"));

        $__internal_bb801eaf9384d895c2d89a5db4fbc162b863a343e7ca251a5217b71de40ac77b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb801eaf9384d895c2d89a5db4fbc162b863a343e7ca251a5217b71de40ac77b->enter($__internal_bb801eaf9384d895c2d89a5db4fbc162b863a343e7ca251a5217b71de40ac77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/modals/modal-displaymembers.php"));

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
        
        $__internal_e870a843f0fe085f8dcdb01a9117ba95d8b4ac8a74bc5f8b9b8467e88fcf9e63->leave($__internal_e870a843f0fe085f8dcdb01a9117ba95d8b4ac8a74bc5f8b9b8467e88fcf9e63_prof);

        
        $__internal_bb801eaf9384d895c2d89a5db4fbc162b863a343e7ca251a5217b71de40ac77b->leave($__internal_bb801eaf9384d895c2d89a5db4fbc162b863a343e7ca251a5217b71de40ac77b_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/views/modals/modal-displaymembers.php";
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
", "Gozpeak/views/modals/modal-displaymembers.php", "/root/Gozpeak/app/Resources/views/Gozpeak/views/modals/modal-displaymembers.php");
    }
}
