<?php

/* Gozpeak/index.php */
class __TwigTemplate_7098546d72e1012c4259d0f3912281f6dbd3596990bafecdc04165fa8ff7755a extends Twig_Template
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
        $__internal_f736468c4b55c9421464d85ba4ae255b311dff828c5cea08ee968d760a444efb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f736468c4b55c9421464d85ba4ae255b311dff828c5cea08ee968d760a444efb->enter($__internal_f736468c4b55c9421464d85ba4ae255b311dff828c5cea08ee968d760a444efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/index.php"));

        $__internal_0fb2465c77206b50cc9d3b2a43e1d037c492063a49df5b139476e1218300737f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fb2465c77206b50cc9d3b2a43e1d037c492063a49df5b139476e1218300737f->enter($__internal_0fb2465c77206b50cc9d3b2a43e1d037c492063a49df5b139476e1218300737f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/index.php"));

        // line 1
        echo "<?php

header('Content-Type: text/html; charset=UTF-8');
// DECLARE SOME PATHS CONSTANTS (useful for PHP) //
define('ROOTDIR', __DIR__);
define('MODELS', ROOTDIR . '/models/');
define('CONTROLLERS', ROOTDIR . '/controllers/');
define('LIB', CONTROLLERS . '/lib/');

define('VIEWS', ROOTDIR . '/views/');

define('ERROR_PAGES', ROOTDIR . '/error_pages/');
define('MODALS', VIEWS . '/modals/');
define('CSS', VIEWS . '/css/');
define('JS', VIEWS . '/js/');


/***** Source generic vars to have independant environments (source language and SERVER_HOST vars*****/
#require_once(LIB.'sessions_init.php');

### First loop to redirect to the next file (controller or view, depending of request and the existing files )    ###
### ------------------------------------------------------------------------------------------------------------- ###
### Première boucle PHP pour rediriger vers un fichier demandé (selon la requête reçue et les fichier existants)  ###
### La boucle tente d'abord de trouver un fichier Contrôleur PHP correspondant (dans 'controllers')\t\t  ###
### Si il est absent, affiche directement la vue, si elle existe. \t\t\t\t\t\t  ###
### Si aucun des deux n'existe sur l'URL appelée, on affiche le contrôleur par défaut 'welcome.php'  (qui lui, appelle simplement la vue par défaut). ###

error_reporting(E_ALL);

if(strpos(\$_SERVER['REQUEST_URI'], \"index.php/\")) {
\theader('location: '.\$gozpeak_protocol.\$gozpeak_host.'/index.php');
}


if(strpos(\$_SERVER['REQUEST_URI'], \"index\")) {
\tif(isset(\$_SERVER['REQUEST_URI']))
\t\t#if(strpos(\$_SERVER['REQUEST_URI'], \"page\")) {
\t\tif(!empty(\$_GET['page'])) {
\t\t\t\$page = \$_GET['page'];

\t\t\tif(is_file(CONTROLLERS.\$page.'.php')) {
\t\t\t\trequire_once (CONTROLLERS.\$page.'.php');
\t\t\t}
\t\t\t#elseif (is_file(VIEWS.\$page.'.php')) {
\t\t#\t\trequire_once (VIEWS.\$page.'.php');
\t\t\t#}
\t\t\telse {
\t\t\t\trequire_once (CONTROLLERS.'home.php');
\t\t\t}
\t\t}
\t\telse {
\t\t\trequire_once(LIB.'sessions_init.php');
\t\t\trequire_once(CONTROLLERS.'language.php');
\t\t\trequire_once(CONTROLLERS.'home.php');
\t\t}
\t} else {
\t\t//require_once(CONTROLLERS.'init.php');
\t\trequire_once(LIB.'sessions_init.php');
\t\trequire_once(CONTROLLERS.'language.php');
\t  require_once(CONTROLLERS.'home.php');
}

?>
";
        
        $__internal_f736468c4b55c9421464d85ba4ae255b311dff828c5cea08ee968d760a444efb->leave($__internal_f736468c4b55c9421464d85ba4ae255b311dff828c5cea08ee968d760a444efb_prof);

        
        $__internal_0fb2465c77206b50cc9d3b2a43e1d037c492063a49df5b139476e1218300737f->leave($__internal_0fb2465c77206b50cc9d3b2a43e1d037c492063a49df5b139476e1218300737f_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/index.php";
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

header('Content-Type: text/html; charset=UTF-8');
// DECLARE SOME PATHS CONSTANTS (useful for PHP) //
define('ROOTDIR', __DIR__);
define('MODELS', ROOTDIR . '/models/');
define('CONTROLLERS', ROOTDIR . '/controllers/');
define('LIB', CONTROLLERS . '/lib/');

define('VIEWS', ROOTDIR . '/views/');

define('ERROR_PAGES', ROOTDIR . '/error_pages/');
define('MODALS', VIEWS . '/modals/');
define('CSS', VIEWS . '/css/');
define('JS', VIEWS . '/js/');


/***** Source generic vars to have independant environments (source language and SERVER_HOST vars*****/
#require_once(LIB.'sessions_init.php');

### First loop to redirect to the next file (controller or view, depending of request and the existing files )    ###
### ------------------------------------------------------------------------------------------------------------- ###
### Première boucle PHP pour rediriger vers un fichier demandé (selon la requête reçue et les fichier existants)  ###
### La boucle tente d'abord de trouver un fichier Contrôleur PHP correspondant (dans 'controllers')\t\t  ###
### Si il est absent, affiche directement la vue, si elle existe. \t\t\t\t\t\t  ###
### Si aucun des deux n'existe sur l'URL appelée, on affiche le contrôleur par défaut 'welcome.php'  (qui lui, appelle simplement la vue par défaut). ###

error_reporting(E_ALL);

if(strpos(\$_SERVER['REQUEST_URI'], \"index.php/\")) {
\theader('location: '.\$gozpeak_protocol.\$gozpeak_host.'/index.php');
}


if(strpos(\$_SERVER['REQUEST_URI'], \"index\")) {
\tif(isset(\$_SERVER['REQUEST_URI']))
\t\t#if(strpos(\$_SERVER['REQUEST_URI'], \"page\")) {
\t\tif(!empty(\$_GET['page'])) {
\t\t\t\$page = \$_GET['page'];

\t\t\tif(is_file(CONTROLLERS.\$page.'.php')) {
\t\t\t\trequire_once (CONTROLLERS.\$page.'.php');
\t\t\t}
\t\t\t#elseif (is_file(VIEWS.\$page.'.php')) {
\t\t#\t\trequire_once (VIEWS.\$page.'.php');
\t\t\t#}
\t\t\telse {
\t\t\t\trequire_once (CONTROLLERS.'home.php');
\t\t\t}
\t\t}
\t\telse {
\t\t\trequire_once(LIB.'sessions_init.php');
\t\t\trequire_once(CONTROLLERS.'language.php');
\t\t\trequire_once(CONTROLLERS.'home.php');
\t\t}
\t} else {
\t\t//require_once(CONTROLLERS.'init.php');
\t\trequire_once(LIB.'sessions_init.php');
\t\trequire_once(CONTROLLERS.'language.php');
\t  require_once(CONTROLLERS.'home.php');
}

?>
", "Gozpeak/index.php", "/root/Gozpeak/app/Resources/views/Gozpeak/index.php");
    }
}
