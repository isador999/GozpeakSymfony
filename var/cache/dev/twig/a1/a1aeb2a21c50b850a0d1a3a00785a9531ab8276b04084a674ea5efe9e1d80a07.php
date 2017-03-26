<?php

/* Gozpeak/controllers/lib/sessions_init.php */
class __TwigTemplate_f173a77b37a2953569dd639d91badd78c1ff5f0d10243cd359eae58daef8f9ba extends Twig_Template
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
        $__internal_563c4e1d1e87f3d272df2ed1b76a094905be83d6db51918550252fc86d30f993 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_563c4e1d1e87f3d272df2ed1b76a094905be83d6db51918550252fc86d30f993->enter($__internal_563c4e1d1e87f3d272df2ed1b76a094905be83d6db51918550252fc86d30f993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/lib/sessions_init.php"));

        $__internal_a7a815ed40db700c43e12af557d573a37c9eeac36cedf74afa13d896c63dafec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7a815ed40db700c43e12af557d573a37c9eeac36cedf74afa13d896c63dafec->enter($__internal_a7a815ed40db700c43e12af557d573a37c9eeac36cedf74afa13d896c63dafec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/lib/sessions_init.php"));

        // line 1
        echo "<?php

//\$time = \$_SERVER[‘REQUEST_TIME’];

/**
 * for a 30 minute timeout, specified in seconds
 */
//\$timeout_duration = 3600;

/**
 * Here we look for the user’s LAST_ACTIVITY timestamp. If
 * it’s set and indicates our \$timeout_duration has passed,
 * blow away any previous \$_SESSION data and start a new one.
 */
//if (isset(\$_SESSION[‘LAST_ACTIVITY’]) && (\$time - \$_SESSION[‘LAST_ACTIVITY’]) > \$timeout_duration) {
//  session_unset();
//  session_destroy();
session_start();
//}
header('Content-Type: text/html; charset=UTF-8');

/**
 * Finally, update LAST_ACTIVITY so that our timeout
 * is based on it and not the user’s login time.
 */
//\$_SESSION[‘LAST_ACTIVITY’] = \$time;


// Set Gozpeak protocol and host
if(!empty(\$_SERVER['HTTPS'])) {
  \$gozpeak_protocol = 'https://';
} else {
  \$gozpeak_protocol = 'http://';
}

\$gozpeak_host = \$_SERVER['HTTP_HOST'];
\$baseUrl = \$gozpeak_protocol.\$gozpeak_host;

// Redirect function
function redirect_to_page(\$baseUrl, \$current_page) {
  if (isset(\$current_page) AND (!empty(\$current_page))) {
    header('location: '.\$baseUrl.'/index.php?page='.\$current_page);
  } else {
    header('location: '.\$baseUrl.'/');
  }
}


// Check browser language + set site language
if (isset(\$_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
\t\$language = \$_SERVER['HTTP_ACCEPT_LANGUAGE'];
\t\$language = \$language{0}.\$language{1};

  \$_SESSION['language'] = 'fr';
} else {
\t\$_SESSION['language'] = 'fr';
}


?>
";
        
        $__internal_563c4e1d1e87f3d272df2ed1b76a094905be83d6db51918550252fc86d30f993->leave($__internal_563c4e1d1e87f3d272df2ed1b76a094905be83d6db51918550252fc86d30f993_prof);

        
        $__internal_a7a815ed40db700c43e12af557d573a37c9eeac36cedf74afa13d896c63dafec->leave($__internal_a7a815ed40db700c43e12af557d573a37c9eeac36cedf74afa13d896c63dafec_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/lib/sessions_init.php";
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

//\$time = \$_SERVER[‘REQUEST_TIME’];

/**
 * for a 30 minute timeout, specified in seconds
 */
//\$timeout_duration = 3600;

/**
 * Here we look for the user’s LAST_ACTIVITY timestamp. If
 * it’s set and indicates our \$timeout_duration has passed,
 * blow away any previous \$_SESSION data and start a new one.
 */
//if (isset(\$_SESSION[‘LAST_ACTIVITY’]) && (\$time - \$_SESSION[‘LAST_ACTIVITY’]) > \$timeout_duration) {
//  session_unset();
//  session_destroy();
session_start();
//}
header('Content-Type: text/html; charset=UTF-8');

/**
 * Finally, update LAST_ACTIVITY so that our timeout
 * is based on it and not the user’s login time.
 */
//\$_SESSION[‘LAST_ACTIVITY’] = \$time;


// Set Gozpeak protocol and host
if(!empty(\$_SERVER['HTTPS'])) {
  \$gozpeak_protocol = 'https://';
} else {
  \$gozpeak_protocol = 'http://';
}

\$gozpeak_host = \$_SERVER['HTTP_HOST'];
\$baseUrl = \$gozpeak_protocol.\$gozpeak_host;

// Redirect function
function redirect_to_page(\$baseUrl, \$current_page) {
  if (isset(\$current_page) AND (!empty(\$current_page))) {
    header('location: '.\$baseUrl.'/index.php?page='.\$current_page);
  } else {
    header('location: '.\$baseUrl.'/');
  }
}


// Check browser language + set site language
if (isset(\$_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
\t\$language = \$_SERVER['HTTP_ACCEPT_LANGUAGE'];
\t\$language = \$language{0}.\$language{1};

  \$_SESSION['language'] = 'fr';
} else {
\t\$_SESSION['language'] = 'fr';
}


?>
", "Gozpeak/controllers/lib/sessions_init.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/lib/sessions_init.php");
    }
}
