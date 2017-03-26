<?php

/* Gozpeak/controllers/language/variables.php */
class __TwigTemplate_ca5216a856851b1fb742285c88c95e423e8ba3496ed3d37489ec625879e05db1 extends Twig_Template
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
        $__internal_72dfb8d4498b9ae65e8925a429a88af556bd422afec579488cf3ce877687591b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72dfb8d4498b9ae65e8925a429a88af556bd422afec579488cf3ce877687591b->enter($__internal_72dfb8d4498b9ae65e8925a429a88af556bd422afec579488cf3ce877687591b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/language/variables.php"));

        $__internal_bd8710479d180ec4b9e1a18a5c055a1d85a606ab580e3e709eb4cfce11d6f789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd8710479d180ec4b9e1a18a5c055a1d85a606ab580e3e709eb4cfce11d6f789->enter($__internal_bd8710479d180ec4b9e1a18a5c055a1d85a606ab580e3e709eb4cfce11d6f789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/language/variables.php"));

        // line 1
        echo "<?php


\$SQL['it']['locale'] = \"it_IT\";
\$SQL['es']['locale'] = \"es_ES\";
\$SQL['en']['locale'] = \"en_US\";
\$SQL['de']['locale'] = \"de_DE\";
\$SQL['ru']['locale'] = \"ru_RU\";


\$message[\$_SESSION['language']]['postevent']['length']['eventname'] = \"Le nom doit être compris entre 6 et 25 caractères\";
\$message[\$_SESSION['language']]['postevent']['length']['eventplace'] = \"Le lieu de l'événement doit être compris entre 6 et 25 caractères\";
\$message[\$_SESSION['language']]['postevent']['length']['eventdesc'] = \"La description doit faire 15 caractères au minimum\";
\$message[\$_SESSION['language']]['postevent']['length']['eventphone'] = \"Le numéro de téléphone doit faire 10 chiffres\";
\$message[\$_SESSION['language']]['postevent']['specialchars'] = \"Certains champs ne doivent pas contenir de caractères spéciaux\";
\$message[\$_SESSION['language']]['postevent']['lang'] = \"La langue de l'événement est invalide\";
\$message[\$_SESSION['language']]['postevent']['langlevel'] = \"Le niveau de langue de l'événement est invalide\";
\$message[\$_SESSION['language']]['postevent']['organizernotfound'] = \"Impossible de vérifier les autorisations, veuillez vous (re)connecter. \";
\$message[\$_SESSION['language']]['postevent']['eventexists'] = \"Un événement avec ce nom existe déjà\";


//Homepage
\$home[\$_SESSION['language']]['run']['img'] = \"views/images/run.png\";
\$home[\$_SESSION['language']]['run']['title'] = \"Runzpeak\";
\$home[\$_SESSION['language']]['run']['alt'] = \"Runzpeak\";
\$home[\$_SESSION['language']]['art']['img'] = \"views/images/art.png\";
\$home[\$_SESSION['language']]['art']['title'] = \"Artzpeak\";
\$home[\$_SESSION['language']]['art']['alt'] = \"Artzpeak\";
\$home[\$_SESSION['language']]['eat']['img'] = \"views/images/eat.png\";
\$home[\$_SESSION['language']]['eat']['title'] = \"Eatzpeak\";
\$home[\$_SESSION['language']]['eat']['alt'] = \"Eatzpeak\";
\$home[\$_SESSION['language']]['party']['img'] = \"views/images/party.png\";
\$home[\$_SESSION['language']]['party']['title'] = \"Partyzpeak\";
\$home[\$_SESSION['language']]['party']['alt'] = \"Partyzpeak\";

// NOTA : Vars from \$home and following \$modal could be synchronized with a same array.

//Postevent vars
\$modal[\$_SESSION['language']]['SelectQuery']['msg'] = \"Sélectionnez la catégorie de votre événement Gozpeak\";
\$modal[\$_SESSION['language']]['SelectQuery']['field']['run']['logo'] = \"views/images/run.png\";
\$modal[\$_SESSION['language']]['SelectQuery']['field']['run']['color'] = \"color:3060A7;\";
\$modal[\$_SESSION['language']]['SelectQuery']['field']['run']['img'] = \"views/images/event_run.jpg\";
\$modal[\$_SESSION['language']]['SelectQuery']['field']['run']['query'] = \"run\";
\$modal[\$_SESSION['language']]['SelectQuery']['field']['art']['logo'] = \"views/images/art.png\";
\$modal[\$_SESSION['language']]['SelectQuery']['field']['art']['color'] = \"color:purple;\";
\$modal[\$_SESSION['language']]['SelectQuery']['field']['art']['img'] = \"views/images/event_art.jpg\";
\$modal[\$_SESSION['language']]['SelectQuery']['field']['art']['query'] = \"art\";
\$modal[\$_SESSION['language']]['SelectQuery']['field']['party']['logo'] = \"views/images/party.png\";
\$modal[\$_SESSION['language']]['SelectQuery']['field']['party']['color'] = \"color:#4d944e;\";
\$modal[\$_SESSION['language']]['SelectQuery']['field']['party']['img'] = \"views/images/event_party.jpg\";
\$modal[\$_SESSION['language']]['SelectQuery']['field']['party']['query'] = \"party\";
\$modal[\$_SESSION['language']]['SelectQuery']['field']['eat']['logo'] = \"views/images/eat.png\";
\$modal[\$_SESSION['language']]['SelectQuery']['field']['eat']['color'] = \"color:#C13131;\";
\$modal[\$_SESSION['language']]['SelectQuery']['field']['eat']['img'] = \"views/images/event_eat.jpg\";
\$modal[\$_SESSION['language']]['SelectQuery']['field']['eat']['query'] = \"eat\";


//Select Lang Postevent
// \$modal[\$_SESSION['language']]['select']['lang']['option'][0]['value'] = \"english\";
// \$modal[\$_SESSION['language']]['select']['lang']['option'][1]['value'] = \"spanish\";
// \$modal[\$_SESSION['language']]['select']['lang']['option'][2]['value'] = \"italian\";
// \$modal[\$_SESSION['language']]['select']['lang']['option'][3]['value'] = \"french\";
// \$modal[\$_SESSION['language']]['select']['lang']['option'][4]['value'] = \"multilanguages\";

\$minilang[\$_SESSION['language']]['icon']['english']['png'] = \"views/images/p_english.png\";
\$minilang[\$_SESSION['language']]['icon']['english']['value'] = \"english\";
\$minilang[\$_SESSION['language']]['icon']['spanish']['png'] = \"views/images/p_spanish.png\";
\$minilang[\$_SESSION['language']]['icon']['spanish']['value'] = \"spanish\";
\$minilang[\$_SESSION['language']]['icon']['italian']['png'] = \"views/images/p_italian.png\";
\$minilang[\$_SESSION['language']]['icon']['italian']['value'] = \"italian\";
\$minilang[\$_SESSION['language']]['icon']['french']['png'] = \"views/images/p_french.png\";
\$minilang[\$_SESSION['language']]['icon']['french']['value'] = \"french\";
\$minilang[\$_SESSION['language']]['icon']['multiples']['png'] = \"views/images/p_multiples.png\";
\$minilang[\$_SESSION['language']]['icon']['multiples']['value'] = \"multiples\";
### Other possible languages :
#\$modal[\$_SESSION['language']]['lang'][4]['value'] = \"portuguese\";
#\$modal[\$_SESSION['language']]['lang'][4]['entry'] = \"Portugais\";
#\$modal[\$_SESSION['language']]['lang'][5]['value'] = \"breton\";
#\$modal[\$_SESSION['language']]['lang'][5]['entry'] = \"Breton\";

#\$modal[\$_SESSION['language']]['lang'][6]['value'] = \"multilanguages\";
#\$modal[\$_SESSION['language']]['lang']['6'] = \"Libre / International\";
#\$modal[\$_SESSION['language']]['lang']['5'] = \"russe\";
#\$modal[\$_SESSION['language']]['lang']['6'] = \"chinois\";
#\$modal[\$_SESSION['language']]['lang']['7'] = \"arabe\";
#\$modal[\$_SESSION['language']]['lang']['8'] = \"hebreux\";
#\$modal[\$_SESSION['language']]['lang']['9'] = \"indien\";
#\$modal[\$_SESSION['language']]['lang']['10'] = \"japonais\";

//Select Langlevel Postevent
\$modal[\$_SESSION['language']]['selectlanglevel']['option'][0]['value'] = \"beginner\";
\$modal[\$_SESSION['language']]['selectlanglevel']['option'][1]['value'] = \"middle\";
\$modal[\$_SESSION['language']]['selectlanglevel']['option'][2]['value'] = \"advanced\";


//Modal inscription
\$modal[\$_SESSION['language']]['inscription']['field'][0]['mandatory']['input'] = \"pseudo\";
\$modal[\$_SESSION['language']]['inscription']['field'][0]['mandatory']['type'] = \"text\";
\$modal[\$_SESSION['language']]['inscription']['field'][0]['mandatory']['spanclass'] = \"glyphicon-user\";
\$modal[\$_SESSION['language']]['inscription']['field'][1]['mandatory']['input'] = \"mail\";
\$modal[\$_SESSION['language']]['inscription']['field'][1]['mandatory']['type'] = \"email\";
\$modal[\$_SESSION['language']]['inscription']['field'][1]['mandatory']['spanclass'] = \"glyphicon-envelope\";
\$modal[\$_SESSION['language']]['inscription']['field'][2]['mandatory']['input'] = \"mail_check\";
\$modal[\$_SESSION['language']]['inscription']['field'][2]['mandatory']['type'] = \"email\";
\$modal[\$_SESSION['language']]['inscription']['field'][2]['mandatory']['spanclass'] = \"glyphicon-envelope\";
\$modal[\$_SESSION['language']]['inscription']['field'][3]['mandatory']['input'] = \"password\";
\$modal[\$_SESSION['language']]['inscription']['field'][3]['mandatory']['type'] = \"password\";
\$modal[\$_SESSION['language']]['inscription']['field'][3]['mandatory']['spanclass'] = \"glyphicon glyphicon-eye-open\";
\$modal[\$_SESSION['language']]['inscription']['field'][4]['mandatory']['input'] = \"password_check\";
\$modal[\$_SESSION['language']]['inscription']['field'][4]['mandatory']['type'] = \"password\";
\$modal[\$_SESSION['language']]['inscription']['field'][4]['mandatory']['spanclass'] = \"glyphicon glyphicon-eye-open\";


//Modal connection
\$modal[\$_SESSION['language']]['connection']['field'][0]['mandatory']['input'] = \"userlogin\";
\$modal[\$_SESSION['language']]['connection']['field'][0]['mandatory']['type'] = \"text\";
\$modal[\$_SESSION['language']]['connection']['field'][1]['mandatory']['input'] = \"passwordlogin\";
\$modal[\$_SESSION['language']]['connection']['field'][1]['mandatory']['type'] = \"password\";


//Modal contact
\$modal[\$_SESSION['language']]['contact']['field'][0]['input'] = \"contact_name\";
\$modal[\$_SESSION['language']]['contact']['field'][0]['type'] = \"text\";
\$modal[\$_SESSION['language']]['contact']['field'][1]['input'] = \"contact_email\";
\$modal[\$_SESSION['language']]['contact']['field'][1]['type'] = \"email\";
\$modal[\$_SESSION['language']]['contact']['field'][2]['desc'] = \"Objet\";
\$modal[\$_SESSION['language']]['contact']['field'][2]['input'] = \"contact_subject\";
\$modal[\$_SESSION['language']]['contact']['field'][2]['type'] = \"text\";



//Modal resetpass
\$modal[\$_SESSION['language']]['resetpass']['field'][0]['input'] = \"resettedpass\";
\$modal[\$_SESSION['language']]['resetpass']['field'][0]['type'] = \"password\";
\$modal[\$_SESSION['language']]['resetpass']['field'][0]['spanclass'] = \"glyphicon glyphicon-eye-open\";
\$modal[\$_SESSION['language']]['resetpass']['field'][1]['input'] = \"resettedpass_check\";
\$modal[\$_SESSION['language']]['resetpass']['field'][1]['type'] = \"password\";
\$modal[\$_SESSION['language']]['resetpass']['field'][1]['spanclass'] = \"glyphicon glyphicon-eye-open\";



//Modal Changepass (profile view)
\$modal[\$_SESSION['language']]['changepass']['field'][0]['input'] = \"current_password\";
\$modal[\$_SESSION['language']]['changepass']['field'][0]['type'] = \"password\";
\$modal[\$_SESSION['language']]['changepass']['field'][0]['spanclass'] = \"glyphicon glyphicon-eye-open\";
\$modal[\$_SESSION['language']]['changepass']['field'][1]['input'] = \"new_password\";
\$modal[\$_SESSION['language']]['changepass']['field'][1]['type'] = \"password\";
\$modal[\$_SESSION['language']]['changepass']['field'][1]['spanclass'] = \"glyphicon glyphicon-eye-open\";
\$modal[\$_SESSION['language']]['changepass']['field'][2]['input'] = \"new_password_confirm\";
\$modal[\$_SESSION['language']]['changepass']['field'][2]['type'] = \"password\";
\$modal[\$_SESSION['language']]['changepass']['field'][2]['spanclass'] = \"glyphicon glyphicon-eye-open\";


?>
";
        
        $__internal_72dfb8d4498b9ae65e8925a429a88af556bd422afec579488cf3ce877687591b->leave($__internal_72dfb8d4498b9ae65e8925a429a88af556bd422afec579488cf3ce877687591b_prof);

        
        $__internal_bd8710479d180ec4b9e1a18a5c055a1d85a606ab580e3e709eb4cfce11d6f789->leave($__internal_bd8710479d180ec4b9e1a18a5c055a1d85a606ab580e3e709eb4cfce11d6f789_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/language/variables.php";
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


\$SQL['it']['locale'] = \"it_IT\";
\$SQL['es']['locale'] = \"es_ES\";
\$SQL['en']['locale'] = \"en_US\";
\$SQL['de']['locale'] = \"de_DE\";
\$SQL['ru']['locale'] = \"ru_RU\";


\$message[\$_SESSION['language']]['postevent']['length']['eventname'] = \"Le nom doit être compris entre 6 et 25 caractères\";
\$message[\$_SESSION['language']]['postevent']['length']['eventplace'] = \"Le lieu de l'événement doit être compris entre 6 et 25 caractères\";
\$message[\$_SESSION['language']]['postevent']['length']['eventdesc'] = \"La description doit faire 15 caractères au minimum\";
\$message[\$_SESSION['language']]['postevent']['length']['eventphone'] = \"Le numéro de téléphone doit faire 10 chiffres\";
\$message[\$_SESSION['language']]['postevent']['specialchars'] = \"Certains champs ne doivent pas contenir de caractères spéciaux\";
\$message[\$_SESSION['language']]['postevent']['lang'] = \"La langue de l'événement est invalide\";
\$message[\$_SESSION['language']]['postevent']['langlevel'] = \"Le niveau de langue de l'événement est invalide\";
\$message[\$_SESSION['language']]['postevent']['organizernotfound'] = \"Impossible de vérifier les autorisations, veuillez vous (re)connecter. \";
\$message[\$_SESSION['language']]['postevent']['eventexists'] = \"Un événement avec ce nom existe déjà\";


//Homepage
\$home[\$_SESSION['language']]['run']['img'] = \"views/images/run.png\";
\$home[\$_SESSION['language']]['run']['title'] = \"Runzpeak\";
\$home[\$_SESSION['language']]['run']['alt'] = \"Runzpeak\";
\$home[\$_SESSION['language']]['art']['img'] = \"views/images/art.png\";
\$home[\$_SESSION['language']]['art']['title'] = \"Artzpeak\";
\$home[\$_SESSION['language']]['art']['alt'] = \"Artzpeak\";
\$home[\$_SESSION['language']]['eat']['img'] = \"views/images/eat.png\";
\$home[\$_SESSION['language']]['eat']['title'] = \"Eatzpeak\";
\$home[\$_SESSION['language']]['eat']['alt'] = \"Eatzpeak\";
\$home[\$_SESSION['language']]['party']['img'] = \"views/images/party.png\";
\$home[\$_SESSION['language']]['party']['title'] = \"Partyzpeak\";
\$home[\$_SESSION['language']]['party']['alt'] = \"Partyzpeak\";

// NOTA : Vars from \$home and following \$modal could be synchronized with a same array.

//Postevent vars
\$modal[\$_SESSION['language']]['SelectQuery']['msg'] = \"Sélectionnez la catégorie de votre événement Gozpeak\";
\$modal[\$_SESSION['language']]['SelectQuery']['field']['run']['logo'] = \"views/images/run.png\";
\$modal[\$_SESSION['language']]['SelectQuery']['field']['run']['color'] = \"color:3060A7;\";
\$modal[\$_SESSION['language']]['SelectQuery']['field']['run']['img'] = \"views/images/event_run.jpg\";
\$modal[\$_SESSION['language']]['SelectQuery']['field']['run']['query'] = \"run\";
\$modal[\$_SESSION['language']]['SelectQuery']['field']['art']['logo'] = \"views/images/art.png\";
\$modal[\$_SESSION['language']]['SelectQuery']['field']['art']['color'] = \"color:purple;\";
\$modal[\$_SESSION['language']]['SelectQuery']['field']['art']['img'] = \"views/images/event_art.jpg\";
\$modal[\$_SESSION['language']]['SelectQuery']['field']['art']['query'] = \"art\";
\$modal[\$_SESSION['language']]['SelectQuery']['field']['party']['logo'] = \"views/images/party.png\";
\$modal[\$_SESSION['language']]['SelectQuery']['field']['party']['color'] = \"color:#4d944e;\";
\$modal[\$_SESSION['language']]['SelectQuery']['field']['party']['img'] = \"views/images/event_party.jpg\";
\$modal[\$_SESSION['language']]['SelectQuery']['field']['party']['query'] = \"party\";
\$modal[\$_SESSION['language']]['SelectQuery']['field']['eat']['logo'] = \"views/images/eat.png\";
\$modal[\$_SESSION['language']]['SelectQuery']['field']['eat']['color'] = \"color:#C13131;\";
\$modal[\$_SESSION['language']]['SelectQuery']['field']['eat']['img'] = \"views/images/event_eat.jpg\";
\$modal[\$_SESSION['language']]['SelectQuery']['field']['eat']['query'] = \"eat\";


//Select Lang Postevent
// \$modal[\$_SESSION['language']]['select']['lang']['option'][0]['value'] = \"english\";
// \$modal[\$_SESSION['language']]['select']['lang']['option'][1]['value'] = \"spanish\";
// \$modal[\$_SESSION['language']]['select']['lang']['option'][2]['value'] = \"italian\";
// \$modal[\$_SESSION['language']]['select']['lang']['option'][3]['value'] = \"french\";
// \$modal[\$_SESSION['language']]['select']['lang']['option'][4]['value'] = \"multilanguages\";

\$minilang[\$_SESSION['language']]['icon']['english']['png'] = \"views/images/p_english.png\";
\$minilang[\$_SESSION['language']]['icon']['english']['value'] = \"english\";
\$minilang[\$_SESSION['language']]['icon']['spanish']['png'] = \"views/images/p_spanish.png\";
\$minilang[\$_SESSION['language']]['icon']['spanish']['value'] = \"spanish\";
\$minilang[\$_SESSION['language']]['icon']['italian']['png'] = \"views/images/p_italian.png\";
\$minilang[\$_SESSION['language']]['icon']['italian']['value'] = \"italian\";
\$minilang[\$_SESSION['language']]['icon']['french']['png'] = \"views/images/p_french.png\";
\$minilang[\$_SESSION['language']]['icon']['french']['value'] = \"french\";
\$minilang[\$_SESSION['language']]['icon']['multiples']['png'] = \"views/images/p_multiples.png\";
\$minilang[\$_SESSION['language']]['icon']['multiples']['value'] = \"multiples\";
### Other possible languages :
#\$modal[\$_SESSION['language']]['lang'][4]['value'] = \"portuguese\";
#\$modal[\$_SESSION['language']]['lang'][4]['entry'] = \"Portugais\";
#\$modal[\$_SESSION['language']]['lang'][5]['value'] = \"breton\";
#\$modal[\$_SESSION['language']]['lang'][5]['entry'] = \"Breton\";

#\$modal[\$_SESSION['language']]['lang'][6]['value'] = \"multilanguages\";
#\$modal[\$_SESSION['language']]['lang']['6'] = \"Libre / International\";
#\$modal[\$_SESSION['language']]['lang']['5'] = \"russe\";
#\$modal[\$_SESSION['language']]['lang']['6'] = \"chinois\";
#\$modal[\$_SESSION['language']]['lang']['7'] = \"arabe\";
#\$modal[\$_SESSION['language']]['lang']['8'] = \"hebreux\";
#\$modal[\$_SESSION['language']]['lang']['9'] = \"indien\";
#\$modal[\$_SESSION['language']]['lang']['10'] = \"japonais\";

//Select Langlevel Postevent
\$modal[\$_SESSION['language']]['selectlanglevel']['option'][0]['value'] = \"beginner\";
\$modal[\$_SESSION['language']]['selectlanglevel']['option'][1]['value'] = \"middle\";
\$modal[\$_SESSION['language']]['selectlanglevel']['option'][2]['value'] = \"advanced\";


//Modal inscription
\$modal[\$_SESSION['language']]['inscription']['field'][0]['mandatory']['input'] = \"pseudo\";
\$modal[\$_SESSION['language']]['inscription']['field'][0]['mandatory']['type'] = \"text\";
\$modal[\$_SESSION['language']]['inscription']['field'][0]['mandatory']['spanclass'] = \"glyphicon-user\";
\$modal[\$_SESSION['language']]['inscription']['field'][1]['mandatory']['input'] = \"mail\";
\$modal[\$_SESSION['language']]['inscription']['field'][1]['mandatory']['type'] = \"email\";
\$modal[\$_SESSION['language']]['inscription']['field'][1]['mandatory']['spanclass'] = \"glyphicon-envelope\";
\$modal[\$_SESSION['language']]['inscription']['field'][2]['mandatory']['input'] = \"mail_check\";
\$modal[\$_SESSION['language']]['inscription']['field'][2]['mandatory']['type'] = \"email\";
\$modal[\$_SESSION['language']]['inscription']['field'][2]['mandatory']['spanclass'] = \"glyphicon-envelope\";
\$modal[\$_SESSION['language']]['inscription']['field'][3]['mandatory']['input'] = \"password\";
\$modal[\$_SESSION['language']]['inscription']['field'][3]['mandatory']['type'] = \"password\";
\$modal[\$_SESSION['language']]['inscription']['field'][3]['mandatory']['spanclass'] = \"glyphicon glyphicon-eye-open\";
\$modal[\$_SESSION['language']]['inscription']['field'][4]['mandatory']['input'] = \"password_check\";
\$modal[\$_SESSION['language']]['inscription']['field'][4]['mandatory']['type'] = \"password\";
\$modal[\$_SESSION['language']]['inscription']['field'][4]['mandatory']['spanclass'] = \"glyphicon glyphicon-eye-open\";


//Modal connection
\$modal[\$_SESSION['language']]['connection']['field'][0]['mandatory']['input'] = \"userlogin\";
\$modal[\$_SESSION['language']]['connection']['field'][0]['mandatory']['type'] = \"text\";
\$modal[\$_SESSION['language']]['connection']['field'][1]['mandatory']['input'] = \"passwordlogin\";
\$modal[\$_SESSION['language']]['connection']['field'][1]['mandatory']['type'] = \"password\";


//Modal contact
\$modal[\$_SESSION['language']]['contact']['field'][0]['input'] = \"contact_name\";
\$modal[\$_SESSION['language']]['contact']['field'][0]['type'] = \"text\";
\$modal[\$_SESSION['language']]['contact']['field'][1]['input'] = \"contact_email\";
\$modal[\$_SESSION['language']]['contact']['field'][1]['type'] = \"email\";
\$modal[\$_SESSION['language']]['contact']['field'][2]['desc'] = \"Objet\";
\$modal[\$_SESSION['language']]['contact']['field'][2]['input'] = \"contact_subject\";
\$modal[\$_SESSION['language']]['contact']['field'][2]['type'] = \"text\";



//Modal resetpass
\$modal[\$_SESSION['language']]['resetpass']['field'][0]['input'] = \"resettedpass\";
\$modal[\$_SESSION['language']]['resetpass']['field'][0]['type'] = \"password\";
\$modal[\$_SESSION['language']]['resetpass']['field'][0]['spanclass'] = \"glyphicon glyphicon-eye-open\";
\$modal[\$_SESSION['language']]['resetpass']['field'][1]['input'] = \"resettedpass_check\";
\$modal[\$_SESSION['language']]['resetpass']['field'][1]['type'] = \"password\";
\$modal[\$_SESSION['language']]['resetpass']['field'][1]['spanclass'] = \"glyphicon glyphicon-eye-open\";



//Modal Changepass (profile view)
\$modal[\$_SESSION['language']]['changepass']['field'][0]['input'] = \"current_password\";
\$modal[\$_SESSION['language']]['changepass']['field'][0]['type'] = \"password\";
\$modal[\$_SESSION['language']]['changepass']['field'][0]['spanclass'] = \"glyphicon glyphicon-eye-open\";
\$modal[\$_SESSION['language']]['changepass']['field'][1]['input'] = \"new_password\";
\$modal[\$_SESSION['language']]['changepass']['field'][1]['type'] = \"password\";
\$modal[\$_SESSION['language']]['changepass']['field'][1]['spanclass'] = \"glyphicon glyphicon-eye-open\";
\$modal[\$_SESSION['language']]['changepass']['field'][2]['input'] = \"new_password_confirm\";
\$modal[\$_SESSION['language']]['changepass']['field'][2]['type'] = \"password\";
\$modal[\$_SESSION['language']]['changepass']['field'][2]['spanclass'] = \"glyphicon glyphicon-eye-open\";


?>
", "Gozpeak/controllers/language/variables.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/language/variables.php");
    }
}
