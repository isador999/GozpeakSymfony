<?php

/* Gozpeak/controllers/premium.php */
class __TwigTemplate_e466a9b7f846be22142a10a3cf7945fc5f11a71350bb199c885c477c5dc6b496 extends Twig_Template
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
        $__internal_23544de06f3e220289e074c0e698dcb75b025bc78862565c2a18a8f77c215721 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23544de06f3e220289e074c0e698dcb75b025bc78862565c2a18a8f77c215721->enter($__internal_23544de06f3e220289e074c0e698dcb75b025bc78862565c2a18a8f77c215721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/premium.php"));

        $__internal_bbb8788888c1b1a66989b472172ce4e8e21edeb92d48e72a7b0d2c4a2c2d35c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbb8788888c1b1a66989b472172ce4e8e21edeb92d48e72a7b0d2c4a2c2d35c6->enter($__internal_bbb8788888c1b1a66989b472172ce4e8e21edeb92d48e72a7b0d2c4a2c2d35c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/premium.php"));

        // line 1
        echo "<?php

require_once('lib/sessions.php');


include_once('Views/head.php');
if(empty(\$_GET['query'])) {
        \$query = \"gozpeak\";
}


\$logged = check_logged();

include_once('Views/head.php');

if (\$logged == 1) {
        include_once('Views/headband-logged.php');
} else {
        include_once('Views/headband-notlogged.php');
}


include_once('Views/premium.php');
include_once('Views/footer.php');

?>
";
        
        $__internal_23544de06f3e220289e074c0e698dcb75b025bc78862565c2a18a8f77c215721->leave($__internal_23544de06f3e220289e074c0e698dcb75b025bc78862565c2a18a8f77c215721_prof);

        
        $__internal_bbb8788888c1b1a66989b472172ce4e8e21edeb92d48e72a7b0d2c4a2c2d35c6->leave($__internal_bbb8788888c1b1a66989b472172ce4e8e21edeb92d48e72a7b0d2c4a2c2d35c6_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/premium.php";
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

require_once('lib/sessions.php');


include_once('Views/head.php');
if(empty(\$_GET['query'])) {
        \$query = \"gozpeak\";
}


\$logged = check_logged();

include_once('Views/head.php');

if (\$logged == 1) {
        include_once('Views/headband-logged.php');
} else {
        include_once('Views/headband-notlogged.php');
}


include_once('Views/premium.php');
include_once('Views/footer.php');

?>
", "Gozpeak/controllers/premium.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/premium.php");
    }
}
