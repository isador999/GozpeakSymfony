<?php

/* Gozpeak/controllers/lib/generate_strings.php */
class __TwigTemplate_3809bee98dc2c4a09b36805c76117a5bebdcbb31dd299b8815e2dd13501fffcf extends Twig_Template
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
        $__internal_ad351b15632c9c84f1ce94606317a7d27063c93ae13f777729562bab0be3950c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad351b15632c9c84f1ce94606317a7d27063c93ae13f777729562bab0be3950c->enter($__internal_ad351b15632c9c84f1ce94606317a7d27063c93ae13f777729562bab0be3950c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/lib/generate_strings.php"));

        $__internal_fb25895a11904ec54f2e390a62956d5f9f87a3fc0b5e344455fc29b2afd17236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb25895a11904ec54f2e390a62956d5f9f87a3fc0b5e344455fc29b2afd17236->enter($__internal_fb25895a11904ec54f2e390a62956d5f9f87a3fc0b5e344455fc29b2afd17236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/lib/generate_strings.php"));

        // line 1
        echo "<?php

// -----------------------------------------
// génère un mot de passe
// -----------------------------------------
function generatePasswd(\$nbre_alpha_chars, \$nbre_int_chars, \$nbre_spec_chars){
\$Password = \"\";
\$t_caractereLettre = array('a','b','c','d','e','f','g','h','j','k','m','n','p','q','r','s','t','u','v','w','x','y','z');
\$t_caractereChiffre = array('2','3','4','5','6','7','8','9');
\$t_caractereSpecial = array('*','!','-','_');
\$nbrCaractereTotal = \$nbre_alpha_chars+\$nbre_int_chars+\$nbre_spec_chars;
\$t_motDePasseNomenclature = array();
for(\$i=0; \$i < \$nbrCaractereTotal; \$i++){
\$caractereType = \"\";
\$t_caractereType = array();
if(\$nbre_alpha_chars > 0){
array_push(\$t_caractereType, \"lettre\");
}
if(\$nbre_int_chars > 0){
array_push(\$t_caractereType, \"chiffre\");
}
if(\$nbre_spec_chars > 0){
array_push(\$t_caractereType, \"special\");
}
shuffle(\$t_caractereType);
array_push(\$t_motDePasseNomenclature, \$t_caractereType[0]);
if(\$t_caractereType[0]==\"lettre\"){
\$nbre_alpha_chars--;
}
if(\$t_caractereType[0]==\"chiffre\"){
\$nbre_int_chars--;
}
if(\$t_caractereType[0]==\"special\"){
\$nbre_spec_chars--;
}
}
foreach(\$t_motDePasseNomenclature as \$cle => \$caractereType){
if(\$caractereType==\"lettre\"){
shuffle(\$t_caractereLettre);
\$Password .= \$t_caractereLettre[0];
}
if(\$caractereType==\"chiffre\"){
shuffle(\$t_caractereChiffre);
\$Password .= \$t_caractereChiffre[0];
}
if(\$caractereType==\"special\"){
shuffle(\$t_caractereSpecial);
\$Password .= \$t_caractereSpecial[0];
}
}
return \$Password;
}


function getRandomString(\$length) {
        \$validCharacters = \"abcdefghijklmnopqrstuxyvwzABCDEFGHIJKLMNOPQRSTUXYVWZ0123456789\";
        \$validCharNumber = strlen(\$validCharacters);
        \$result = \"\";

        for (\$i = 0; \$i < \$length; \$i++) {

            \$index = mt_rand(0, \$validCharNumber - 1);
        \$result .= \$validCharacters[\$index];
        }

return \$result;
}

?>


";
        
        $__internal_ad351b15632c9c84f1ce94606317a7d27063c93ae13f777729562bab0be3950c->leave($__internal_ad351b15632c9c84f1ce94606317a7d27063c93ae13f777729562bab0be3950c_prof);

        
        $__internal_fb25895a11904ec54f2e390a62956d5f9f87a3fc0b5e344455fc29b2afd17236->leave($__internal_fb25895a11904ec54f2e390a62956d5f9f87a3fc0b5e344455fc29b2afd17236_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/lib/generate_strings.php";
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

// -----------------------------------------
// génère un mot de passe
// -----------------------------------------
function generatePasswd(\$nbre_alpha_chars, \$nbre_int_chars, \$nbre_spec_chars){
\$Password = \"\";
\$t_caractereLettre = array('a','b','c','d','e','f','g','h','j','k','m','n','p','q','r','s','t','u','v','w','x','y','z');
\$t_caractereChiffre = array('2','3','4','5','6','7','8','9');
\$t_caractereSpecial = array('*','!','-','_');
\$nbrCaractereTotal = \$nbre_alpha_chars+\$nbre_int_chars+\$nbre_spec_chars;
\$t_motDePasseNomenclature = array();
for(\$i=0; \$i < \$nbrCaractereTotal; \$i++){
\$caractereType = \"\";
\$t_caractereType = array();
if(\$nbre_alpha_chars > 0){
array_push(\$t_caractereType, \"lettre\");
}
if(\$nbre_int_chars > 0){
array_push(\$t_caractereType, \"chiffre\");
}
if(\$nbre_spec_chars > 0){
array_push(\$t_caractereType, \"special\");
}
shuffle(\$t_caractereType);
array_push(\$t_motDePasseNomenclature, \$t_caractereType[0]);
if(\$t_caractereType[0]==\"lettre\"){
\$nbre_alpha_chars--;
}
if(\$t_caractereType[0]==\"chiffre\"){
\$nbre_int_chars--;
}
if(\$t_caractereType[0]==\"special\"){
\$nbre_spec_chars--;
}
}
foreach(\$t_motDePasseNomenclature as \$cle => \$caractereType){
if(\$caractereType==\"lettre\"){
shuffle(\$t_caractereLettre);
\$Password .= \$t_caractereLettre[0];
}
if(\$caractereType==\"chiffre\"){
shuffle(\$t_caractereChiffre);
\$Password .= \$t_caractereChiffre[0];
}
if(\$caractereType==\"special\"){
shuffle(\$t_caractereSpecial);
\$Password .= \$t_caractereSpecial[0];
}
}
return \$Password;
}


function getRandomString(\$length) {
        \$validCharacters = \"abcdefghijklmnopqrstuxyvwzABCDEFGHIJKLMNOPQRSTUXYVWZ0123456789\";
        \$validCharNumber = strlen(\$validCharacters);
        \$result = \"\";

        for (\$i = 0; \$i < \$length; \$i++) {

            \$index = mt_rand(0, \$validCharNumber - 1);
        \$result .= \$validCharacters[\$index];
        }

return \$result;
}

?>


", "Gozpeak/controllers/lib/generate_strings.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/lib/generate_strings.php");
    }
}
