<?php

/* ::showEvent.html.twig */
class __TwigTemplate_465451f60c997081754f34a998b8286c9991cb63601a0088f164e57cf00673dd extends Twig_Template
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
        $__internal_2dc6673de126cdaf8c371e4cc2b4777898c1a4bf298137fbe53b4752bcbb93b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dc6673de126cdaf8c371e4cc2b4777898c1a4bf298137fbe53b4752bcbb93b9->enter($__internal_2dc6673de126cdaf8c371e4cc2b4777898c1a4bf298137fbe53b4752bcbb93b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::showEvent.html.twig"));

        $__internal_e3f197951b5ce56ac2fe78b114dd33a2510383d748807f373256645a1cf0063e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3f197951b5ce56ac2fe78b114dd33a2510383d748807f373256645a1cf0063e->enter($__internal_e3f197951b5ce56ac2fe78b114dd33a2510383d748807f373256645a1cf0063e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::showEvent.html.twig"));

        // line 1
        echo "
<html>
  <body>
Evenement ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "id", array()), "html", null, true);
        echo " <br>
 - Nom : ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "name", array()), "html", null, true);
        echo "
 - Desc : ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "description", array()), "html", null, true);
        echo "
  </body>
</html>
";
        
        $__internal_2dc6673de126cdaf8c371e4cc2b4777898c1a4bf298137fbe53b4752bcbb93b9->leave($__internal_2dc6673de126cdaf8c371e4cc2b4777898c1a4bf298137fbe53b4752bcbb93b9_prof);

        
        $__internal_e3f197951b5ce56ac2fe78b114dd33a2510383d748807f373256645a1cf0063e->leave($__internal_e3f197951b5ce56ac2fe78b114dd33a2510383d748807f373256645a1cf0063e_prof);

    }

    public function getTemplateName()
    {
        return "::showEvent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  34 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<html>
  <body>
Evenement {{ event.id }} <br>
 - Nom : {{ event.name }}
 - Desc : {{ event.description }}
  </body>
</html>
", "::showEvent.html.twig", "/root/GozpeakSymfony/app/Resources/views/showEvent.html.twig");
    }
}
