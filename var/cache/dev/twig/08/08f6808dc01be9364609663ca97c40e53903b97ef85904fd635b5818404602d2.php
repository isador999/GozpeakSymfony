<?php

/* Gozpeak/views/css/generic.css */
class __TwigTemplate_545f668d4a7d961eedcce9fa0050186485f6d42338fed8cb2811a084165e309f extends Twig_Template
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
        $__internal_b4b9a4a7b38c84f6b7501cbb2d0e60bba2a751ae4558dc8dc5f14811d5c8a8e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4b9a4a7b38c84f6b7501cbb2d0e60bba2a751ae4558dc8dc5f14811d5c8a8e3->enter($__internal_b4b9a4a7b38c84f6b7501cbb2d0e60bba2a751ae4558dc8dc5f14811d5c8a8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/css/generic.css"));

        $__internal_866c517e23a2c25616f6fd5d1f195e2d74958fd6bb64be60b22fc6cae47d8175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_866c517e23a2c25616f6fd5d1f195e2d74958fd6bb64be60b22fc6cae47d8175->enter($__internal_866c517e23a2c25616f6fd5d1f195e2d74958fd6bb64be60b22fc6cae47d8175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/css/generic.css"));

        // line 1
        echo "/************************************/
/******* Generic Css Classes ********/
/************************************/
/******* Sourced for every page *****/
/************************************/


/*** Tests navbar ***/
.navbar-default {
  background:rgba(0, 0, 0, 0.71);
  border: 0 none;
  padding: 2px 0;
  transition: padding 0.3s ease 0s;
}

/*Typo*/
@font-face {
  font-family: 'noteworthy';
  src: url('../fonts/typo/noteworthy.ttc');
  font-weight: normal;
  font-style: normal;
}


html, body {
\tbackground:url(../images/backgrounds/bg_lowcontrast.png) repeat scroll 0 0;
  font-family: 'noteworthy';
  height: 100%;
  min-width: 500px;
}


.corpse {
  margin-left: 3.5%;
  margin-right: 3.5%;
}

body a {
  color: #0086bf;
}

body a:hover {
  text-decoration: underline;
}


/***** NAVBAR *****/
/*.branding {
  padding-top: 2%;
  padding-left: 18%;
  font-size: 21pt;
  font-style: italic;
  color: #B3511D;
}

.branding img {
  width: 190px;
}*/

.navbar-header img {
  width: 190px;
}


.glyphicon-search {
  font-size: 1.1em; // slightly bigger
}


/***** Actual Navbar *****/
/***** NAVBAR *****/

.navbar-form button {
  margin-top: -0.7%;
}


/*.navbar-nav {
  margin-top:-0.5%;
}*/

.nav-tabs a {
  color: #669DDF;
  font-size: 14pt;
}


/***** DEV NAVBAR *****/
/*#zpeakNavigation a {
  color:#669DD4!important;
  font-size: 12pt;
}

#zpeakNavigation a:hover {
  color: #DAE3E6!important;
}

#zpeakNavbar {
  width: 45%;
  background-color: blue;
}

#zpeakNavbar li {
  margin-right: 3%;
}

#zpeakLogo img {
  margin-left: 14%;
  width: 74%;
}*/
/******/

/********************/


.alert {
  border-radius: 15px;
  text-align: center;
}
";
        
        $__internal_b4b9a4a7b38c84f6b7501cbb2d0e60bba2a751ae4558dc8dc5f14811d5c8a8e3->leave($__internal_b4b9a4a7b38c84f6b7501cbb2d0e60bba2a751ae4558dc8dc5f14811d5c8a8e3_prof);

        
        $__internal_866c517e23a2c25616f6fd5d1f195e2d74958fd6bb64be60b22fc6cae47d8175->leave($__internal_866c517e23a2c25616f6fd5d1f195e2d74958fd6bb64be60b22fc6cae47d8175_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/views/css/generic.css";
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
        return new Twig_Source("/************************************/
/******* Generic Css Classes ********/
/************************************/
/******* Sourced for every page *****/
/************************************/


/*** Tests navbar ***/
.navbar-default {
  background:rgba(0, 0, 0, 0.71);
  border: 0 none;
  padding: 2px 0;
  transition: padding 0.3s ease 0s;
}

/*Typo*/
@font-face {
  font-family: 'noteworthy';
  src: url('../fonts/typo/noteworthy.ttc');
  font-weight: normal;
  font-style: normal;
}


html, body {
\tbackground:url(../images/backgrounds/bg_lowcontrast.png) repeat scroll 0 0;
  font-family: 'noteworthy';
  height: 100%;
  min-width: 500px;
}


.corpse {
  margin-left: 3.5%;
  margin-right: 3.5%;
}

body a {
  color: #0086bf;
}

body a:hover {
  text-decoration: underline;
}


/***** NAVBAR *****/
/*.branding {
  padding-top: 2%;
  padding-left: 18%;
  font-size: 21pt;
  font-style: italic;
  color: #B3511D;
}

.branding img {
  width: 190px;
}*/

.navbar-header img {
  width: 190px;
}


.glyphicon-search {
  font-size: 1.1em; // slightly bigger
}


/***** Actual Navbar *****/
/***** NAVBAR *****/

.navbar-form button {
  margin-top: -0.7%;
}


/*.navbar-nav {
  margin-top:-0.5%;
}*/

.nav-tabs a {
  color: #669DDF;
  font-size: 14pt;
}


/***** DEV NAVBAR *****/
/*#zpeakNavigation a {
  color:#669DD4!important;
  font-size: 12pt;
}

#zpeakNavigation a:hover {
  color: #DAE3E6!important;
}

#zpeakNavbar {
  width: 45%;
  background-color: blue;
}

#zpeakNavbar li {
  margin-right: 3%;
}

#zpeakLogo img {
  margin-left: 14%;
  width: 74%;
}*/
/******/

/********************/


.alert {
  border-radius: 15px;
  text-align: center;
}
", "Gozpeak/views/css/generic.css", "/root/Gozpeak/app/Resources/views/Gozpeak/views/css/generic.css");
    }
}
