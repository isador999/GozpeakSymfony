<?php

/* Gozpeak/views/css/modals.css */
class __TwigTemplate_373e3eae0c0a0c7eb24b7a9d3152a3af0a3d0eaec8b59aabae390427bc322763 extends Twig_Template
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
        $__internal_aca5076847fa0aac55460b44b13a21f9a7c3e0e3d31f87b7a070976202bc253b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aca5076847fa0aac55460b44b13a21f9a7c3e0e3d31f87b7a070976202bc253b->enter($__internal_aca5076847fa0aac55460b44b13a21f9a7c3e0e3d31f87b7a070976202bc253b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/css/modals.css"));

        $__internal_1e6599864eb75bb325151678db3bd0dc0bfa8a630651d1d9a3a4d7e3df0c83f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e6599864eb75bb325151678db3bd0dc0bfa8a630651d1d9a3a4d7e3df0c83f1->enter($__internal_1e6599864eb75bb325151678db3bd0dc0bfa8a630651d1d9a3a4d7e3df0c83f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/css/modals.css"));

        // line 1
        echo "/***** CSS for Bootstrap Modals *****/

.modal-errors a {
  color: darkred;
  font-size: 11pt;
  font-weight: lighter;
}

.modal-header {
  margin-bottom: 4%;
}

.modal-body {
  margin-top: 4%;
  margin-bottom: 2.5%;
}

.modal-body select {
  margin-bottom: 7%;
}

.modal-body .form-group {
  margin-top: 2%;
}

.modal-title:not(#modalEventWithQuery) {
  font-size: 21pt;
  font-family: 'noteworthy';
}


/***** Specific to forgotpass-errors *****/
#forgotpass-errors {
  margin-bottom: 3%;
}

#modalForgottenPass label {
  margin-bottom: 6%;
}


/***** Specific to modalSelectQuery (when user notlogged) *****/
#modalSelectQueryNotLogged .modal-footer {
  font-size: 13pt;
  font-style: italic;
  color:darkred;
}

#modalSelectQueryNotLogged .modal-body {
  margin-bottom: 20%;
}

.titleSelectQuery {
  font-size: 15pt;
  font-weight: bolder;
  font-style: oblique;
  color: rgb(34, 80, 138);
}


/***** Specific to postevent modal *****/
#modalEventWithQuery .modal-body {
  max-height: 450px;
  overflow-y: auto;
}


#modalEventWithQuery .modal-lg {
  width: 55%;
}

#modalEventWithQuery .modal-body {
  margin-bottom: 6%;
}

#modalEventWithQuery .form-group {
  margin-top: 6%;
}


/***** Specific to Profile Modals (Edition, ChangePass & Deletion) *****/
#modalProfileEdition h4 {
  color: rgb(205, 90, 50);
}
";
        
        $__internal_aca5076847fa0aac55460b44b13a21f9a7c3e0e3d31f87b7a070976202bc253b->leave($__internal_aca5076847fa0aac55460b44b13a21f9a7c3e0e3d31f87b7a070976202bc253b_prof);

        
        $__internal_1e6599864eb75bb325151678db3bd0dc0bfa8a630651d1d9a3a4d7e3df0c83f1->leave($__internal_1e6599864eb75bb325151678db3bd0dc0bfa8a630651d1d9a3a4d7e3df0c83f1_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/views/css/modals.css";
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
        return new Twig_Source("/***** CSS for Bootstrap Modals *****/

.modal-errors a {
  color: darkred;
  font-size: 11pt;
  font-weight: lighter;
}

.modal-header {
  margin-bottom: 4%;
}

.modal-body {
  margin-top: 4%;
  margin-bottom: 2.5%;
}

.modal-body select {
  margin-bottom: 7%;
}

.modal-body .form-group {
  margin-top: 2%;
}

.modal-title:not(#modalEventWithQuery) {
  font-size: 21pt;
  font-family: 'noteworthy';
}


/***** Specific to forgotpass-errors *****/
#forgotpass-errors {
  margin-bottom: 3%;
}

#modalForgottenPass label {
  margin-bottom: 6%;
}


/***** Specific to modalSelectQuery (when user notlogged) *****/
#modalSelectQueryNotLogged .modal-footer {
  font-size: 13pt;
  font-style: italic;
  color:darkred;
}

#modalSelectQueryNotLogged .modal-body {
  margin-bottom: 20%;
}

.titleSelectQuery {
  font-size: 15pt;
  font-weight: bolder;
  font-style: oblique;
  color: rgb(34, 80, 138);
}


/***** Specific to postevent modal *****/
#modalEventWithQuery .modal-body {
  max-height: 450px;
  overflow-y: auto;
}


#modalEventWithQuery .modal-lg {
  width: 55%;
}

#modalEventWithQuery .modal-body {
  margin-bottom: 6%;
}

#modalEventWithQuery .form-group {
  margin-top: 6%;
}


/***** Specific to Profile Modals (Edition, ChangePass & Deletion) *****/
#modalProfileEdition h4 {
  color: rgb(205, 90, 50);
}
", "Gozpeak/views/css/modals.css", "/root/Gozpeak/app/Resources/views/Gozpeak/views/css/modals.css");
    }
}
