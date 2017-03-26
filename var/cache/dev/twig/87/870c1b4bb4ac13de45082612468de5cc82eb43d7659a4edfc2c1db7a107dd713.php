<?php

/* Gozpeak/models/proposition_functions.php */
class __TwigTemplate_32d4a95c19ef1e427e0690201961de19b13ec63e7a17c14f259799ddf37a85b7 extends Twig_Template
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
        $__internal_12e9684f2441c0abea83d6882d9a550eb3001810f01cc97300f0d5eaf4f7dd51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12e9684f2441c0abea83d6882d9a550eb3001810f01cc97300f0d5eaf4f7dd51->enter($__internal_12e9684f2441c0abea83d6882d9a550eb3001810f01cc97300f0d5eaf4f7dd51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/models/proposition_functions.php"));

        $__internal_2c37820eccf5ace1379056a1d20e14db02fd6875639bd770c4dc9536b9c6dbfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c37820eccf5ace1379056a1d20e14db02fd6875639bd770c4dc9536b9c6dbfd->enter($__internal_2c37820eccf5ace1379056a1d20e14db02fd6875639bd770c4dc9536b9c6dbfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/models/proposition_functions.php"));

        // line 1
        echo "<?php


function insert_event(\$DB, \$event_fields) {
        \$req = \$DB->prepare('INSERT INTO events (organizer, language, eventname, eventdesc, eventtype, eventplace, eventdate, eventhour, eventminutes) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');
        \$req->execute(\$event_fields);
        \$req->closeCursor();
}


function insert_idea(\$DB, \$idea_fields) {
        \$req = \$DB->prepare('INSERT INTO ideas (organizer, language, ideaname, ideadesc, ideatype, ideaplace, ideadate, ideahour, ideaminutes) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');
        \$req->execute(\$idea_fields);
        \$req->closeCursor();
}


?>
";
        
        $__internal_12e9684f2441c0abea83d6882d9a550eb3001810f01cc97300f0d5eaf4f7dd51->leave($__internal_12e9684f2441c0abea83d6882d9a550eb3001810f01cc97300f0d5eaf4f7dd51_prof);

        
        $__internal_2c37820eccf5ace1379056a1d20e14db02fd6875639bd770c4dc9536b9c6dbfd->leave($__internal_2c37820eccf5ace1379056a1d20e14db02fd6875639bd770c4dc9536b9c6dbfd_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/models/proposition_functions.php";
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


function insert_event(\$DB, \$event_fields) {
        \$req = \$DB->prepare('INSERT INTO events (organizer, language, eventname, eventdesc, eventtype, eventplace, eventdate, eventhour, eventminutes) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');
        \$req->execute(\$event_fields);
        \$req->closeCursor();
}


function insert_idea(\$DB, \$idea_fields) {
        \$req = \$DB->prepare('INSERT INTO ideas (organizer, language, ideaname, ideadesc, ideatype, ideaplace, ideadate, ideahour, ideaminutes) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');
        \$req->execute(\$idea_fields);
        \$req->closeCursor();
}


?>
", "Gozpeak/models/proposition_functions.php", "/root/Gozpeak/app/Resources/views/Gozpeak/models/proposition_functions.php");
    }
}
