<?php

/* Gozpeak/controllers/fonctions.php */
class __TwigTemplate_1b95b56ce27ab62b2465f977c1b5936b7a9696d599022e18afc7da344d83106d extends Twig_Template
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
        $__internal_b047ae46658de425d749cf0866ae66c137c8820070f0646dfad6d7e71d3d82ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b047ae46658de425d749cf0866ae66c137c8820070f0646dfad6d7e71d3d82ab->enter($__internal_b047ae46658de425d749cf0866ae66c137c8820070f0646dfad6d7e71d3d82ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/fonctions.php"));

        $__internal_07b408444f84b7db4ca2f6b777a2717c9982d195278784c2f139e8c9c33ba01d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b408444f84b7db4ca2f6b777a2717c9982d195278784c2f139e8c9c33ba01d->enter($__internal_07b408444f84b7db4ca2f6b777a2717c9982d195278784c2f139e8c9c33ba01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/fonctions.php"));

        // line 1
        echo "<?php

function my_echo (\$taille, \$couleur, \$texte) {
echo '<font size = \"'.\$taille.'\" color = \"'.\$couleur.'\">'.\$texte.'</font>';
}


function CKMail(\$adress)
{
  //Adresse mail trop longue (254 octets max)
  if(strlen(\$adress)>254)
  {
    return '<p>Votre adresse est trop longue.</p>';
  }


  //Caractères non-ASCII autorisés dans un nom de domaine .eu :

  \$nonASCII='ďđēĕėęěĝğġģĥħĩīĭįıĵķĺļľŀłńņňŉŋōŏőoeŕŗřśŝsťŧ';
  \$nonASCII.='ďđēĕėęěĝğġģĥħĩīĭįıĵķĺļľŀłńņňŉŋōŏőoeŕŗřśŝsťŧ';
  \$nonASCII.='ũūŭůűųŵŷźżztșțΐάέήίΰαβγδεζηθικλμνξοπρςστυφ';
  \$nonASCII.='χψωϊϋόύώабвгдежзийклмнопрстуфхцчшщъыьэюяt';
  \$nonASCII.='ἀἁἂἃἄἅἆἇἐἑἒἓἔἕἠἡἢἣἤἥἦἧἰἱἲἳἴἵἶἷὀὁὂὃὄὅὐὑὒὓὔ';
  \$nonASCII.='ὕὖὗὠὡὢὣὤὥὦὧὰάὲέὴήὶίὸόὺύὼώᾀᾁᾂᾃᾄᾅᾆᾇᾐᾑᾒᾓᾔᾕᾖᾗ';
  \$nonASCII.='ᾠᾡᾢᾣᾤᾥᾦᾧᾰᾱᾲᾳᾴᾶᾷῂῃῄῆῇῐῑῒΐῖῗῠῡῢΰῤῥῦῧῲῳῴῶῷ';
  // note : 1 caractète non-ASCII vos 2 octets en UTF-8


  \$syntax=\"#^[[:alnum:][:punct:]]{1,64}@[[:alnum:]-.\$nonASCII]{2,253}\\.[[:alpha:].]{2,6}\$#\";

  if(preg_match(\$syntax,\$adress))
  {
    return '<p>Votre adresse est valide.</p>';
  }
  else
  {
    return '<p>Votre adresse e-mail n\\'est pas valide.</p>';
  }
}

?>
";
        
        $__internal_b047ae46658de425d749cf0866ae66c137c8820070f0646dfad6d7e71d3d82ab->leave($__internal_b047ae46658de425d749cf0866ae66c137c8820070f0646dfad6d7e71d3d82ab_prof);

        
        $__internal_07b408444f84b7db4ca2f6b777a2717c9982d195278784c2f139e8c9c33ba01d->leave($__internal_07b408444f84b7db4ca2f6b777a2717c9982d195278784c2f139e8c9c33ba01d_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/fonctions.php";
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

function my_echo (\$taille, \$couleur, \$texte) {
echo '<font size = \"'.\$taille.'\" color = \"'.\$couleur.'\">'.\$texte.'</font>';
}


function CKMail(\$adress)
{
  //Adresse mail trop longue (254 octets max)
  if(strlen(\$adress)>254)
  {
    return '<p>Votre adresse est trop longue.</p>';
  }


  //Caractères non-ASCII autorisés dans un nom de domaine .eu :

  \$nonASCII='ďđēĕėęěĝğġģĥħĩīĭįıĵķĺļľŀłńņňŉŋōŏőoeŕŗřśŝsťŧ';
  \$nonASCII.='ďđēĕėęěĝğġģĥħĩīĭįıĵķĺļľŀłńņňŉŋōŏőoeŕŗřśŝsťŧ';
  \$nonASCII.='ũūŭůűųŵŷźżztșțΐάέήίΰαβγδεζηθικλμνξοπρςστυφ';
  \$nonASCII.='χψωϊϋόύώабвгдежзийклмнопрстуфхцчшщъыьэюяt';
  \$nonASCII.='ἀἁἂἃἄἅἆἇἐἑἒἓἔἕἠἡἢἣἤἥἦἧἰἱἲἳἴἵἶἷὀὁὂὃὄὅὐὑὒὓὔ';
  \$nonASCII.='ὕὖὗὠὡὢὣὤὥὦὧὰάὲέὴήὶίὸόὺύὼώᾀᾁᾂᾃᾄᾅᾆᾇᾐᾑᾒᾓᾔᾕᾖᾗ';
  \$nonASCII.='ᾠᾡᾢᾣᾤᾥᾦᾧᾰᾱᾲᾳᾴᾶᾷῂῃῄῆῇῐῑῒΐῖῗῠῡῢΰῤῥῦῧῲῳῴῶῷ';
  // note : 1 caractète non-ASCII vos 2 octets en UTF-8


  \$syntax=\"#^[[:alnum:][:punct:]]{1,64}@[[:alnum:]-.\$nonASCII]{2,253}\\.[[:alpha:].]{2,6}\$#\";

  if(preg_match(\$syntax,\$adress))
  {
    return '<p>Votre adresse est valide.</p>';
  }
  else
  {
    return '<p>Votre adresse e-mail n\\'est pas valide.</p>';
  }
}

?>
", "Gozpeak/controllers/fonctions.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/fonctions.php");
    }
}
