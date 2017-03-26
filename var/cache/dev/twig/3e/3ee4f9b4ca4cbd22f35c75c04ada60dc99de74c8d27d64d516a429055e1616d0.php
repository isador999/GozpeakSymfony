<?php

/* Gozpeak/views/css/footer.css */
class __TwigTemplate_01c674c1eff94b681fc9d5443a4dae48257b0c6002883413bdd123769bb73b30 extends Twig_Template
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
        $__internal_3a06985ff76a93e05ddfb35a6b24221479a9d1a48df15530822bfeca32634e48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a06985ff76a93e05ddfb35a6b24221479a9d1a48df15530822bfeca32634e48->enter($__internal_3a06985ff76a93e05ddfb35a6b24221479a9d1a48df15530822bfeca32634e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/css/footer.css"));

        $__internal_256727b0914d49cba31431e47f959ee34b7f9bfbe4a09bdcb377cbfbb779d627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_256727b0914d49cba31431e47f959ee34b7f9bfbe4a09bdcb377cbfbb779d627->enter($__internal_256727b0914d49cba31431e47f959ee34b7f9bfbe4a09bdcb377cbfbb779d627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Gozpeak/views/css/footer.css"));

        // line 1
        echo "/***** FOOTER *****/
footer {
  padding-top: 15%;
  font-size: 14pt;
  margin:auto;
  /*color: #558df3;*/
  /*color: #16599C;*/
  font-weight:lighter;
  /*background-color: #bce5f5;*/
}

#titlefooter {
  margin: auto;
  height: 60px;
  background-color:rgb(34,80,138);
  opacity: 0.79;
  border-radius: 15px;
  color: white;
}

#titlefooter h4 {
  margin:auto;
}

.foot-link {
  margin-bottom: 6%;
}

footer a {
  color:rgb(34,81,132);
  font-weight: bold;
}

#copyright {
  margin-top: 1%;
  margin-bottom: 2%;
}
";
        
        $__internal_3a06985ff76a93e05ddfb35a6b24221479a9d1a48df15530822bfeca32634e48->leave($__internal_3a06985ff76a93e05ddfb35a6b24221479a9d1a48df15530822bfeca32634e48_prof);

        
        $__internal_256727b0914d49cba31431e47f959ee34b7f9bfbe4a09bdcb377cbfbb779d627->leave($__internal_256727b0914d49cba31431e47f959ee34b7f9bfbe4a09bdcb377cbfbb779d627_prof);

    }

    public function getTemplateName()
    {
        return "Gozpeak/views/css/footer.css";
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
        return new Twig_Source("/***** FOOTER *****/
footer {
  padding-top: 15%;
  font-size: 14pt;
  margin:auto;
  /*color: #558df3;*/
  /*color: #16599C;*/
  font-weight:lighter;
  /*background-color: #bce5f5;*/
}

#titlefooter {
  margin: auto;
  height: 60px;
  background-color:rgb(34,80,138);
  opacity: 0.79;
  border-radius: 15px;
  color: white;
}

#titlefooter h4 {
  margin:auto;
}

.foot-link {
  margin-bottom: 6%;
}

footer a {
  color:rgb(34,81,132);
  font-weight: bold;
}

#copyright {
  margin-top: 1%;
  margin-bottom: 2%;
}
", "Gozpeak/views/css/footer.css", "/root/Gozpeak/app/Resources/views/Gozpeak/views/css/footer.css");
    }
}
