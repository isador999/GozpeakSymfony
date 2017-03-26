<?php

/* Gozpeak/controllers/lib/common_functions.php */
class __TwigTemplate_ee94512d429d922061d265b16560a41cc3c2da31aff53b7c49cdf934ae1aed25 extends Twig_Template
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
        $__internal_5703b507c4e434e6e2ba3f0d41b8ab8d1433335bf1292fa2e0116b73a8042881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5703b507c4e434e6e2ba3f0d41b8ab8d1433335bf1292fa2e0116b73a8042881->enter($__internal_5703b507c4e434e6e2ba3f0d41b8ab8d1433335bf1292fa2e0116b73a8042881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/lib/common_functions.php"));

        $__internal_e84f744b1acc4baea241711d5e243d7f1997d0705e7bbf9eac1e35835ecafcd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84f744b1acc4baea241711d5e243d7f1997d0705e7bbf9eac1e35835ecafcd3->enter($__internal_e84f744b1acc4baea241711d5e243d7f1997d0705e7bbf9eac1e35835ecafcd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/controllers/lib/common_functions.php"));

        // line 1
        echo "<?php
mb_internal_encoding('UTF-8');

function my_echo (\$taille, \$couleur, \$texte) {
echo '<center> <font size = \"'.\$taille.'\" color = \"'.\$couleur.'\">'.\$texte.'</font></center>';
}

class DateConversion {
    /**
     * Afficher la nom du jour en francais
     * @param int numero du jour
     * @return string nom du jour
     */
    static public function frenchDayName(\$daynum) {
        \$ar=array(\"\", \"Lundi\", \"Mardi\", \"Mercredi\", \"Jeudi\", \"Vendredi\", \"Samedi\", \"Dimanche\");
        if (\$daynum>0&&\$daynum<8) {
            return \$ar[\$daynum];
        } else {
            return \$daynum;
        }
    }

    /**
     * Afficher le nom du mois en francais
     * @param int numero du mois
     * @return string nom du mois
     */
    static public function frenchMonthName(\$monthnum) {
        \$ar=array(\"\", \"Janvier\", \"Fevrier\", \"Mars\", \"Avril\", \"Mai\", \"Juin\", \"Juillet\", \"Aout\", \"Septembre\", \"Octobre\", \"Novembre\", \"Decembre\");
        if (\$monthnum>0&&\$monthnum<13) {
            return \$ar[\$monthnum];
        } else {
            return \$monthnum;
        }
    }
}

?>
";
        
        $__internal_5703b507c4e434e6e2ba3f0d41b8ab8d1433335bf1292fa2e0116b73a8042881->leave($__internal_5703b507c4e434e6e2ba3f0d41b8ab8d1433335bf1292fa2e0116b73a8042881_prof);

        
        $__internal_e84f744b1acc4baea241711d5e243d7f1997d0705e7bbf9eac1e35835ecafcd3->leave($__internal_e84f744b1acc4baea241711d5e243d7f1997d0705e7bbf9eac1e35835ecafcd3_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/controllers/lib/common_functions.php";
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
mb_internal_encoding('UTF-8');

function my_echo (\$taille, \$couleur, \$texte) {
echo '<center> <font size = \"'.\$taille.'\" color = \"'.\$couleur.'\">'.\$texte.'</font></center>';
}

class DateConversion {
    /**
     * Afficher la nom du jour en francais
     * @param int numero du jour
     * @return string nom du jour
     */
    static public function frenchDayName(\$daynum) {
        \$ar=array(\"\", \"Lundi\", \"Mardi\", \"Mercredi\", \"Jeudi\", \"Vendredi\", \"Samedi\", \"Dimanche\");
        if (\$daynum>0&&\$daynum<8) {
            return \$ar[\$daynum];
        } else {
            return \$daynum;
        }
    }

    /**
     * Afficher le nom du mois en francais
     * @param int numero du mois
     * @return string nom du mois
     */
    static public function frenchMonthName(\$monthnum) {
        \$ar=array(\"\", \"Janvier\", \"Fevrier\", \"Mars\", \"Avril\", \"Mai\", \"Juin\", \"Juillet\", \"Aout\", \"Septembre\", \"Octobre\", \"Novembre\", \"Decembre\");
        if (\$monthnum>0&&\$monthnum<13) {
            return \$ar[\$monthnum];
        } else {
            return \$monthnum;
        }
    }
}

?>
", "Gozpeak/controllers/lib/common_functions.php", "/root/Gozpeak/app/Resources/views/Gozpeak/controllers/lib/common_functions.php");
    }
}
