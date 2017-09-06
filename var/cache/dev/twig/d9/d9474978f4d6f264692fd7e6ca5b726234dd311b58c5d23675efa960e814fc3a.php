<?php

/* ::listEvents.html.twig */
class __TwigTemplate_6646d72adfea1a3a668b491fee8904ecba8fc9e745769e143c39112764d03212 extends Twig_Template
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
        $__internal_ea57348056b601991fb19e561290943af4e7312d83bbc1b08ddedfabb29f8125 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea57348056b601991fb19e561290943af4e7312d83bbc1b08ddedfabb29f8125->enter($__internal_ea57348056b601991fb19e561290943af4e7312d83bbc1b08ddedfabb29f8125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::listEvents.html.twig"));

        $__internal_8108c791924b1f12b5a6d1952841e471e478011a8a5e3adbd8c236ab57afdfc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8108c791924b1f12b5a6d1952841e471e478011a8a5e3adbd8c236ab57afdfc9->enter($__internal_8108c791924b1f12b5a6d1952841e471e478011a8a5e3adbd8c236ab57afdfc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::listEvents.html.twig"));

        // line 1
        echo "<html>
  <body>
Derniers évenements :
<br>
<br>
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 7
            echo "Evenement ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "category", array()), "html", null, true);
            echo " :  <br>
  name : <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
            echo "\"  <br>
  Description : ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "description", array()), "html", null, true);
            echo "  <br>
  <br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
  </body>
</html>
";
        
        $__internal_ea57348056b601991fb19e561290943af4e7312d83bbc1b08ddedfabb29f8125->leave($__internal_ea57348056b601991fb19e561290943af4e7312d83bbc1b08ddedfabb29f8125_prof);

        
        $__internal_8108c791924b1f12b5a6d1952841e471e478011a8a5e3adbd8c236ab57afdfc9->leave($__internal_8108c791924b1f12b5a6d1952841e471e478011a8a5e3adbd8c236ab57afdfc9_prof);

    }

    public function getTemplateName()
    {
        return "::listEvents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 12,  45 => 9,  41 => 8,  36 => 7,  32 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
  <body>
Derniers évenements :
<br>
<br>
{% for event in events %}
Evenement {{ event.category }} :  <br>
  name : <a href=\"{{ path('event', {id: event.id}) }}\"  <br>
  Description : {{ event.description }}  <br>
  <br>
{% endfor %}

  </body>
</html>
", "::listEvents.html.twig", "/root/GozpeakSymfony/app/Resources/views/listEvents.html.twig");
    }
}
